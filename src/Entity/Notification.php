<?php

namespace App\Entity;

use App\Repository\NotificationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotificationRepository::class)]
#[ORM\Table(name: 'notification')]
class Notification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_notification')]
    private ?int $idNotification = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $message = null;

    #[ORM\Column(name: 'statut_lu', nullable: true)]
    private ?bool $statutLu = false;

    #[ORM\Column(name: 'date_notification', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateNotification = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'id_etudiant', referencedColumnName: 'id_etudiant', nullable: true)]
    private ?Etudiant $etudiant = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'id_post', referencedColumnName: 'id_post', nullable: true)]
    private ?Post $post = null;

    public function __construct()
    {
        $this->dateNotification = new \DateTimeImmutable();
    }

    public function getIdNotification(): ?int
    {
        return $this->idNotification;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getStatutLu(): ?bool
    {
        return $this->statutLu;
    }

    public function setStatutLu(?bool $statutLu): static
    {
        $this->statutLu = $statutLu;

        return $this;
    }

    public function getDateNotification(): ?\DateTimeInterface
    {
        return $this->dateNotification;
    }

    public function setDateNotification(?\DateTimeInterface $dateNotification): static
    {
        $this->dateNotification = $dateNotification;

        return $this;
    }

    public function getEtudiant(): ?Etudiant
    {
        return $this->etudiant;
    }

    public function setEtudiant(?Etudiant $etudiant): static
    {
        $this->etudiant = $etudiant;

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
}
