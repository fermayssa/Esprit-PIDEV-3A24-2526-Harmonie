<?php
namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Post;
use App\Entity\Commentaire;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ForumController extends AbstractController
{
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
        if ($cat) {
            $em->remove($cat);
            $em->flush();
        }
        return $this->redirectToRoute('forum');
    }

    // ════════════════════════════════════════════════
    //  POSTS — avec recherche 
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
            $c->setUserId(1); // remplace par user connecté
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
            'error'   => $error,
            'comment' => $c,
            'post'    => $post,
            'action'  => $this->generateUrl('forum_comment_edit', ['id' => $id]),
        ]);
    }

    #[Route('/forum/comment/{id}/delete', name: 'forum_comment_delete', methods: ['POST'])]
    public function deleteComment(int $id, EntityManagerInterface $em): Response
    {
        $c = $em->getRepository(Commentaire::class)->find($id);
        if ($c) {
            $post = $em->getRepository(Post::class)->find($c->getIdPost());
            $idCat = $post ? $post->getIdCategorie() : null;
            $em->remove($c);
            $em->flush();
            if ($idCat) return $this->redirectToRoute('forum_posts', ['id' => $idCat]);
        }
        return $this->redirectToRoute('forum');
    }
}