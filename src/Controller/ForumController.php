<?php
namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Post;
use App\Entity\Commentaire;
use App\Entity\Reaction;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ForumController extends AbstractController
{
    private int $currentUserId = 1; // remplace par user connecté

    // ════════════════════════════════════════════════
    //  CATÉGORIES
    // ════════════════════════════════════════════════

    #[Route('/forum', name: 'forum')]
    public function index(EntityManagerInterface $em): Response
    {
        $categories = $em->getRepository(Categorie::class)->findAll();
        return $this->render('forum/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/forum/categorie/new', name: 'forum_categorie_new', methods: ['GET','POST'])]
    public function newCategorie(Request $request, EntityManagerInterface $em): Response
    {
        $error = null;
        if ($request->isMethod('POST')) {
            $nom  = trim($request->request->get('nom', ''));
            $desc = trim($request->request->get('description', ''));
            if (strlen($nom) < 3) {
                $error = 'Le nom doit contenir au moins 3 caractères.';
            } elseif (strlen($nom) > 100) {
                $error = 'Le nom ne peut pas dépasser 100 caractères.';
            } else {
                $cat = new Categorie();
                $cat->setNomCategorie($nom);
                $cat->setDescription($desc ?: null);
                $cat->setDateCreation(new \DateTime());
                $em->persist($cat);
                $em->flush();
                return $this->redirectToRoute('forum');
            }
        }
        return $this->render('forum/categorie_form.html.twig', [
            'error'  => $error,
            'cat'    => null,
            'action' => $this->generateUrl('forum_categorie_new'),
        ]);
    }

    #[Route('/forum/categorie/{id}/edit', name: 'forum_categorie_edit', methods: ['GET','POST'])]
    public function editCategorie(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $cat = $em->getRepository(Categorie::class)->find($id);
        if (!$cat) throw $this->createNotFoundException();
        $error = null;
        if ($request->isMethod('POST')) {
            $nom  = trim($request->request->get('nom', ''));
            $desc = trim($request->request->get('description', ''));
            if (strlen($nom) < 3) {
                $error = 'Le nom doit contenir au moins 3 caractères.';
            } elseif (strlen($nom) > 100) {
                $error = 'Le nom ne peut pas dépasser 100 caractères.';
            } else {
                $cat->setNomCategorie($nom);
                $cat->setDescription($desc ?: null);
                $em->flush();
                return $this->redirectToRoute('forum');
            }
        }
        return $this->render('forum/categorie_form.html.twig', [
            'error'  => $error,
            'cat'    => $cat,
            'action' => $this->generateUrl('forum_categorie_edit', ['id' => $id]),
        ]);
    }

    #[Route('/forum/categorie/{id}/delete', name: 'forum_categorie_delete', methods: ['POST'])]
    public function deleteCategorie(int $id, EntityManagerInterface $em): Response
    {
        $cat = $em->getRepository(Categorie::class)->find($id);
        if ($cat) { $em->remove($cat); $em->flush(); }
        return $this->redirectToRoute('forum');
    }

    // ════════════════════════════════════════════════
    //  POSTS — avec recherche, tri, pagination
    // ════════════════════════════════════════════════

    #[Route('/forum/categorie/{id}', name: 'forum_posts')]
    public function posts(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $categorie = $em->getRepository(Categorie::class)->find($id);
        if (!$categorie) throw $this->createNotFoundException();

        // ── Paramètres GET ──
        $search  = trim($request->query->get('search', ''));
        $tri     = $request->query->get('tri', 'date_desc'); // date_desc|date_asc|likes
        $page    = max(1, (int) $request->query->get('page', 1));
        $perPage = 5;

        // ── Construction requête ──
        $qb = $em->createQueryBuilder()
            ->select('p')
            ->from(Post::class, 'p')
            ->where('p.idCategorie = :idCat')
            ->setParameter('idCat', $id);

        // Recherche
        if ($search !== '') {
            $qb->andWhere('p.titre LIKE :s OR p.contenu LIKE :s')
               ->setParameter('s', '%' . $search . '%');
        }

        // Tri
        match($tri) {
            'date_asc'  => $qb->orderBy('p.dateCreation', 'ASC'),
            'likes'     => $qb->orderBy('p.dateCreation', 'DESC'), // likes géré après
            default     => $qb->orderBy('p.dateCreation', 'DESC'),
        };

        $allPosts = $qb->getQuery()->getResult();

        // ── Données likes pour chaque post ──
        $likesMap   = []; // idPost => count
        $likedByMe  = []; // idPost => bool

        foreach ($allPosts as $post) {
            $pid = $post->getIdPost();
            $reactions = $em->getRepository(Reaction::class)
                ->findBy(['idPost' => $pid, 'typeReaction' => 'like']);
            $likesMap[$pid]  = count($reactions);
            $likedByMe[$pid] = (bool) $em->getRepository(Reaction::class)
                ->findOneBy(['idPost' => $pid, 'userId' => $this->currentUserId, 'typeReaction' => 'like']);
        }

        // Tri par popularité (likes)
        if ($tri === 'likes') {
            usort($allPosts, fn($a, $b) =>
                ($likesMap[$b->getIdPost()] ?? 0) <=> ($likesMap[$a->getIdPost()] ?? 0)
            );
        }

        // ── Pagination ──
        $total     = count($allPosts);
        $totalPages = max(1, (int) ceil($total / $perPage));
        $page      = min($page, $totalPages);
        $posts     = array_slice($allPosts, ($page - 1) * $perPage, $perPage);

        // ── Commentaires pour les posts affichés ──
        $commentairesMap = [];
        foreach ($posts as $post) {
            $commentairesMap[$post->getIdPost()] = $em->getRepository(Commentaire::class)
                ->findBy(['idPost' => $post->getIdPost()], ['dateCommentaire' => 'ASC']);
        }

        return $this->render('forum/posts.html.twig', [
            'categorie'       => $categorie,
            'posts'           => $posts,
            'commentairesMap' => $commentairesMap,
            'likesMap'        => $likesMap,
            'likedByMe'       => $likedByMe,
            'search'          => $search,
            'tri'             => $tri,
            'page'            => $page,
            'totalPages'      => $totalPages,
            'total'           => $total,
        ]);
    }

    // ── LIKE toggle (AJAX) ──────────────────────────
    #[Route('/forum/post/{id}/like', name: 'forum_post_like', methods: ['POST'])]
    public function toggleLike(int $id, EntityManagerInterface $em): JsonResponse
    {
        $post = $em->getRepository(Post::class)->find($id);
        if (!$post) return new JsonResponse(['error' => 'Post introuvable'], 404);

        $existing = $em->getRepository(Reaction::class)->findOneBy([
            'idPost'       => $id,
            'userId'       => $this->currentUserId,
            'typeReaction' => 'like',
        ]);

        if ($existing) {
            $em->remove($existing);
            $liked = false;
        } else {
            $r = new Reaction();
            $r->setIdPost($id);
            $r->setUserId($this->currentUserId);
            $r->setTypeReaction('like');
            $r->setDateReaction(new \DateTime());
            $em->persist($r);
            $liked = true;
        }
        $em->flush();

        $count = count($em->getRepository(Reaction::class)
            ->findBy(['idPost' => $id, 'typeReaction' => 'like']));

        return new JsonResponse(['liked' => $liked, 'count' => $count]);
    }

    // ════════════════════════════════════════════════
    //  POSTS CRUD
    // ════════════════════════════════════════════════

    #[Route('/forum/categorie/{idCat}/post/new', name: 'forum_post_new', methods: ['GET','POST'])]
    public function newPost(int $idCat, Request $request, EntityManagerInterface $em): Response
    {
        $categorie = $em->getRepository(Categorie::class)->find($idCat);
        if (!$categorie) throw $this->createNotFoundException();
        $error = null;
        if ($request->isMethod('POST')) {
            $titre   = trim($request->request->get('titre', ''));
            $contenu = trim($request->request->get('contenu', ''));
            if (strlen($titre) < 3) {
                $error = 'Le titre doit contenir au moins 3 caractères.';
            } elseif (strlen($titre) > 150) {
                $error = 'Le titre ne peut pas dépasser 150 caractères.';
            } elseif (strlen($contenu) < 10) {
                $error = 'Le contenu doit contenir au moins 10 caractères.';
            } else {
                $post = new Post();
                $post->setTitre($titre);
                $post->setContenu($contenu);
                $post->setIdCategorie($idCat);
                $post->setUserId($this->currentUserId);
                $post->setDateCreation(new \DateTime());
                $em->persist($post);
                $em->flush();
                return $this->redirectToRoute('forum_posts', ['id' => $idCat]);
            }
        }
        return $this->render('forum/post_form.html.twig', [
            'error' => $error, 'post' => null, 'categorie' => $categorie,
            'action' => $this->generateUrl('forum_post_new', ['idCat' => $idCat]),
        ]);
    }

    #[Route('/forum/post/{id}/edit', name: 'forum_post_edit', methods: ['GET','POST'])]
    public function editPost(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $post = $em->getRepository(Post::class)->find($id);
        if (!$post) throw $this->createNotFoundException();
        $categorie = $em->getRepository(Categorie::class)->find($post->getIdCategorie());
        $error = null;
        if ($request->isMethod('POST')) {
            $titre   = trim($request->request->get('titre', ''));
            $contenu = trim($request->request->get('contenu', ''));
            if (strlen($titre) < 3) {
                $error = 'Le titre doit contenir au moins 3 caractères.';
            } elseif (strlen($titre) > 150) {
                $error = 'Le titre ne peut pas dépasser 150 caractères.';
            } elseif (strlen($contenu) < 10) {
                $error = 'Le contenu doit contenir au moins 10 caractères.';
            } else {
                $post->setTitre($titre);
                $post->setContenu($contenu);
                $em->flush();
                return $this->redirectToRoute('forum_posts', ['id' => $post->getIdCategorie()]);
            }
        }
        return $this->render('forum/post_form.html.twig', [
            'error' => $error, 'post' => $post, 'categorie' => $categorie,
            'action' => $this->generateUrl('forum_post_edit', ['id' => $id]),
        ]);
    }

    #[Route('/forum/post/{id}/delete', name: 'forum_post_delete', methods: ['POST'])]
    public function deletePost(int $id, EntityManagerInterface $em): Response
    {
        $post = $em->getRepository(Post::class)->find($id);
        if ($post) {
            $idCat = $post->getIdCategorie();
            $em->remove($post);
            $em->flush();
            return $this->redirectToRoute('forum_posts', ['id' => $idCat]);
        }
        return $this->redirectToRoute('forum');
    }

    // ════════════════════════════════════════════════
    //  COMMENTAIRES
    // ════════════════════════════════════════════════

    #[Route('/forum/post/{idPost}/comment/new', name: 'forum_comment_new', methods: ['POST'])]
    public function newComment(int $idPost, Request $request, EntityManagerInterface $em): Response
    {
        $post = $em->getRepository(Post::class)->find($idPost);
        if (!$post) throw $this->createNotFoundException();
        $contenu = trim($request->request->get('contenu', ''));
        if (strlen($contenu) >= 3) {
            $c = new Commentaire();
            $c->setContenu($contenu);
            $c->setIdPost($idPost);
            $c->setUserId($this->currentUserId);
            $c->setDateCommentaire(new \DateTime());
            $em->persist($c);
            $em->flush();
        }
        return $this->redirectToRoute('forum_posts', ['id' => $post->getIdCategorie()]);
    }

    #[Route('/forum/comment/{id}/edit', name: 'forum_comment_edit', methods: ['GET','POST'])]
    public function editComment(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $c = $em->getRepository(Commentaire::class)->find($id);
        if (!$c) throw $this->createNotFoundException();
        $post = $em->getRepository(Post::class)->find($c->getIdPost());
        $error = null;
        if ($request->isMethod('POST')) {
            $contenu = trim($request->request->get('contenu', ''));
            if (strlen($contenu) < 3) {
                $error = 'Le commentaire doit contenir au moins 3 caractères.';
            } else {
                $c->setContenu($contenu);
                $em->flush();
                return $this->redirectToRoute('forum_posts', ['id' => $post->getIdCategorie()]);
            }
        }
        return $this->render('forum/comment_form.html.twig', [
            'error' => $error, 'comment' => $c, 'post' => $post,
            'action' => $this->generateUrl('forum_comment_edit', ['id' => $id]),
        ]);
    }

    #[Route('/forum/comment/{id}/delete', name: 'forum_comment_delete', methods: ['POST'])]
    public function deleteComment(int $id, EntityManagerInterface $em): Response
    {
        $c = $em->getRepository(Commentaire::class)->find($id);
        if ($c) {
            $post  = $em->getRepository(Post::class)->find($c->getIdPost());
            $idCat = $post ? $post->getIdCategorie() : null;
            $em->remove($c);
            $em->flush();
            if ($idCat) return $this->redirectToRoute('forum_posts', ['id' => $idCat]);
        }
        return $this->redirectToRoute('forum');
    }
}