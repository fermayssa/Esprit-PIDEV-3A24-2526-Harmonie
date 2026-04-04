<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idCommentaire = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contenu = null;

    #[ORM\Column]
    private ?\DateTime $dateCommentaire = null;

    #[ORM\Column]
    private ?int $idPost = null;

    #[ORM\Column]
    private ?int $userId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCommentaire(): ?int
    {
        return $this->idCommentaire;
    }

    public function setIdCommentaire(int $idCommentaire): static
    {
        $this->idCommentaire = $idCommentaire;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDateCommentaire(): ?\DateTime
    {
        return $this->dateCommentaire;
    }

    public function setDateCommentaire(\DateTime $dateCommentaire): static
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
    }

    public function getIdPost(): ?int
    {
        return $this->idPost;
    }

    public function setIdPost(int $idPost): static
    {
        $this->idPost = $idPost;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): static
    {
        $this->userId = $userId;

        return $this;
    }
}
