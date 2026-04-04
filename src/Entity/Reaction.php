<?php

namespace App\Entity;

use App\Repository\ReactionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReactionRepository::class)]
#[ORM\Table(name: 'reaction')]
#[ORM\UniqueConstraint(name: 'id_post', columns: ['id_post'])]
class Reaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_reaction')]
    private ?int $idReaction = null;

    #[ORM\Column(name: 'type_reaction', length: 50, nullable: true)]
    private ?string $typeReaction = null;

    #[ORM\Column(name: 'date_reaction', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateReaction = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'id_post', referencedColumnName: 'id_post', nullable: true)]
    private ?Post $post = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: true)]
    private ?User $user = null;

    public function __construct()
    {
        $this->dateReaction = new \DateTimeImmutable();
    }

    public function getIdReaction(): ?int
    {
        return $this->idReaction;
    }

    public function getTypeReaction(): ?string
    {
        return $this->typeReaction;
    }

    public function setTypeReaction(?string $typeReaction): static
    {
        $this->typeReaction = $typeReaction;

        return $this;
    }

    public function getDateReaction(): ?\DateTimeInterface
    {
        return $this->dateReaction;
    }

    public function setDateReaction(?\DateTimeInterface $dateReaction): static
    {
        $this->dateReaction = $dateReaction;

        return $this;
    }

    public function getPost(): ?Post
    {
        return $this->post;
    }

    public function setPost(?Post $post): static
    {
        $this->post = $post;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
