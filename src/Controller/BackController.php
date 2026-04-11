<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Post;
use App\Entity\Commentaire;
use App\Repository\CategorieRepository;
use App\Repository\PostRepository;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back', name: 'back_')]
class BackController extends AbstractController
{
    // ─── DASHBOARD ────────────────────────────────────────────────────────────

    #[Route('', name: 'dashboard')]
    public function dashboard(
        CategorieRepository   $catRepo,
        PostRepository        $postRepo,
        CommentaireRepository $comRepo
    ): Response {
        return $this->render('back/dashboard.html.twig', [
            'nb_categories'  => $catRepo->count([]),
            'nb_posts'       => $postRepo->count([]),
            'nb_commentaires'=> $comRepo->count([]),
        ]);
    }

    // ─── CATÉGORIES ───────────────────────────────────────────────────────────

    #[Route('/categories', name: 'categories')]
    public function categories(CategorieRepository $catRepo, PostRepository $postRepo): Response
    {
        $categories = $catRepo->findAll();

        // Compte le nombre de posts par catégorie
        $postCounts = [];
        foreach ($categories as $cat) {
            $postCounts[$cat->getIdCategorie()] = $postRepo->count(['idCategorie' => $cat]);
        }

        return $this->render('back/categories.html.twig', [
            'categories' => $categories,
            'postCounts' => $postCounts,
        ]);
    }

    #[Route('/categories/{id}/delete', name: 'categorie_delete', methods: ['POST'])]
    public function deleteCategorie(
        int $id,
        CategorieRepository $catRepo,
        EntityManagerInterface $em
    ): Response {
        $cat = $catRepo->find($id);
        if ($cat) {
            $em->remove($cat);
            $em->flush();
            $this->addFlash('success', 'Catégorie supprimée avec succès.');
        }
        return $this->redirectToRoute('back_categories');
    }

    // ─── POSTS ────────────────────────────────────────────────────────────────

    #[Route('/posts', name: 'posts')]
    public function posts(PostRepository $postRepo, CategorieRepository $catRepo): Response
    {
        return $this->render('back/posts.html.twig', [
            'posts'      => $postRepo->findAllWithCategorie(),
            'categories' => $catRepo->findAll(),
        ]);
    }

    #[Route('/posts/{id}/delete', name: 'post_delete', methods: ['POST'])]
    public function deletePost(
        int $id,
        PostRepository $postRepo,
        EntityManagerInterface $em
    ): Response {
        $post = $postRepo->find($id);
        if ($post) {
            $em->remove($post);
            $em->flush();
            $this->addFlash('success', 'Post supprimé avec succès.');
        }
        return $this->redirectToRoute('back_posts');
    }

    // ─── COMMENTAIRES ─────────────────────────────────────────────────────────

    #[Route('/commentaires', name: 'commentaires')]
    public function commentaires(
    CommentaireRepository $commentaireRepo,
    EntityManagerInterface $em          // ← ajouter
): Response {
    $commentaires = $commentaireRepo->findBy([], ['dateCommentaire' => 'DESC']);

    // Charger les posts associés manuellement
    $postsMap = [];
    foreach ($commentaires as $c) {
        $pid = $c->getIdPost();
        if ($pid && !isset($postsMap[$pid])) {
            $postsMap[$pid] = $em->getRepository(\App\Entity\Post::class)->find($pid);
        }
    }

    return $this->render('back/commentaires.html.twig', [
        'commentaires' => $commentaires,
        'postsMap'     => $postsMap,
    ]);
}

    #[Route('/commentaires/{id}/delete', name: 'commentaire_delete', methods: ['POST'])]
    public function deleteCommentaire(
        int $id,
        CommentaireRepository $comRepo,
        EntityManagerInterface $em
    ): Response {
        $com = $comRepo->find($id);
        if ($com) {
            $em->remove($com);
            $em->flush();
            $this->addFlash('success', 'Commentaire supprimé.');
        }
        return $this->redirectToRoute('back_commentaires');
    }
}
