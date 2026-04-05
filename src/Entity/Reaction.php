<?php

namespace App\Entity;

use App\Repository\ReactionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReactionRepository::class)]
class Reaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_reaction = null;

    #[ORM\Column(length: 50)]
    private ?string $type_reaction = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $date_reaction = null;

    #[ORM\Column]
    private ?int $id_post = null;

    #[ORM\Column]
    private ?int $user_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdReaction(): ?int
    {
        return $this->id_reaction;
    }

    public function setIdReaction(int $id_reaction): static
    {
        $this->id_reaction = $id_reaction;

        return $this;
    }

    public function getTypeReaction(): ?string
    {
        return $this->type_reaction;
    }

    public function setTypeReaction(string $type_reaction): static
    {
        $this->type_reaction = $type_reaction;

        return $this;
    }

    public function getDateReaction(): ?\DateTimeImmutable
    {
        return $this->date_reaction;
    }

    public function setDateReaction(\DateTimeImmutable $date_reaction): static
    {
        $this->date_reaction = $date_reaction;

        return $this;
    }

    public function getIdPost(): ?int
    {
        return $this->id_post;
    }

    public function setIdPost(int $id_post): static
    {
        $this->id_post = $id_post;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }
}
