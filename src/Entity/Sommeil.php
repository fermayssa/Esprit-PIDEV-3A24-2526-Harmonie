<?php

namespace App\Entity;

use App\Repository\SommeilRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SommeilRepository::class)]
#[ORM\Table(name: 'sommeil')]
class Sommeil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_sommeil')]
    private ?int $idSommeil = null;

    #[ORM\Column(name: 'date_coucher', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $dateCoucher;

    #[ORM\Column(name: 'date_reveil', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $dateReveil;

    #[ORM\Column(name: 'qualite_sommeil', length: 20, nullable: true)]
    private ?string $qualiteSommeil = null;

    #[ORM\Column(options: ['default' => false])]
    private bool $stress = false;

    #[ORM\Column(options: ['default' => false])]
    private bool $cafeine = false;

    #[ORM\Column(options: ['default' => false])]
    private bool $bruit = false;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: true)]
    private ?User $user = null;

    public function getIdSommeil(): ?int
    {
        return $this->idSommeil;
    }

    public function getDateCoucher(): \DateTimeInterface
    {
        return $this->dateCoucher;
    }

    public function setDateCoucher(\DateTimeInterface $dateCoucher): static
    {
        $this->dateCoucher = $dateCoucher;

        return $this;
    }

    public function getDateReveil(): \DateTimeInterface
    {
        return $this->dateReveil;
    }

    public function setDateReveil(\DateTimeInterface $dateReveil): static
    {
        $this->dateReveil = $dateReveil;

        return $this;
    }

    public function getQualiteSommeil(): ?string
    {
        return $this->qualiteSommeil;
    }

    public function setQualiteSommeil(?string $qualiteSommeil): static
    {
        $this->qualiteSommeil = $qualiteSommeil;

        return $this;
    }

    public function isStress(): bool
    {
        return $this->stress;
    }

    public function setStress(bool $stress): static
    {
        $this->stress = $stress;

        return $this;
    }

    public function isCafeine(): bool
    {
        return $this->cafeine;
    }

    public function setCafeine(bool $cafeine): static
    {
        $this->cafeine = $cafeine;

        return $this;
    }

    public function isBruit(): bool
    {
        return $this->bruit;
    }

    public function setBruit(bool $bruit): static
    {
        $this->bruit = $bruit;

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
