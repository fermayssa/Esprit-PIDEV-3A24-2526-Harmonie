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
    // ── Liste des catégories ──────────────────────────────────────
    #[Route('/forum', name: 'forum')]
    public function index(EntityManagerInterface $em): Response
    {
        $categories = $em->getRepository(Categorie::class)->findAll();
        return $this->render('forum/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    // ── Posts d'une catégorie ─────────────────────────────────────
    #[Route('/forum/categorie/{id}', name: 'forum_posts')]
    public function posts(int $id, EntityManagerInterface $em): Response
    {
        $categorie = $em->getRepository(Categorie::class)->find($id);
        if (!$categorie) throw $this->createNotFoundException();

        $posts = $em->getRepository(Post::class)
            ->findBy(['idCategorie' => $id], ['dateCreation' => 'DESC']);

        return $this->render('forum/posts.html.twig', [
            'categorie' => $categorie,
            'posts'     => $posts,
        ]);
    }

    // ── Détail post + commentaires ────────────────────────────────
    #[Route('/forum/post/{id}', name: 'forum_post_detail')]
    public function postDetail(int $id, EntityManagerInterface $em): Response
    {
        $post = $em->getRepository(Post::class)->find($id);
        if (!$post) throw $this->createNotFoundException();

        $categorie = $em->getRepository(Categorie::class)->find($post->getIdCategorie());

        $commentaires = $em->getRepository(Commentaire::class)
            ->findBy(['idPost' => $id], ['dateCommentaire' => 'ASC']);

        return $this->render('forum/post_detail.html.twig', [
            'post'         => $post,
            'categorie'    => $categorie,
            'commentaires' => $commentaires,
        ]);
    }
}