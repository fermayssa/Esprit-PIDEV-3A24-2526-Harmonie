<?php

namespace App\Service\Domain;

use App\Entity\Categorie;
use App\Entity\Commentaire;
use App\Entity\Favori;
use App\Entity\Post;
use App\Entity\Reaction;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class ForumDomainService
{
    use PersistenceHelper;

    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly ValidatorInterface $validator,
    ) {
    }

    protected function getEntityManager(): EntityManagerInterface
    {
        return $this->entityManager;
    }

    protected function getValidator(): ValidatorInterface
    {
        return $this->validator;
    }

    public function savePost(Post $post): void
    {
        $this->validateEntity($post);
        $this->persistAndFlush($post);
    }

    public function saveCommentaire(Commentaire $commentaire): void
    {
        $this->validateEntity($commentaire);
        $this->persistAndFlush($commentaire);
    }

    public function saveReaction(Reaction $reaction): void
    {
        $this->validateEntity($reaction);
        $this->persistAndFlush($reaction);
    }

    public function saveFavori(Favori $favori): void
    {
        $this->validateEntity($favori);
        $this->persistAndFlush($favori);
    }

    public function saveCategorie(Categorie $categorie): void
    {
        $this->validateEntity($categorie);
        $this->persistAndFlush($categorie);
    }

    public function removePost(Post $post): void
    {
        $this->removeAndFlush($post);
    }

    public function removeCommentaire(Commentaire $commentaire): void
    {
        $this->removeAndFlush($commentaire);
    }

    public function removeReaction(Reaction $reaction): void
    {
        $this->removeAndFlush($reaction);
    }

    public function removeFavori(Favori $favori): void
    {
        $this->removeAndFlush($favori);
    }

    public function removeCategorie(Categorie $categorie): void
    {
        $this->removeAndFlush($categorie);
    }
}
