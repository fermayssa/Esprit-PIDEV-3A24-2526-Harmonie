<?php

namespace App\Entity;

use App\Repository\ConsommationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConsommationRepository::class)]
#[ORM\Table(name: 'consommation')]
class Consommation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_consommation')]
    private ?int $idConsommation = null;

    #[ORM\Column(name: 'date_consommation', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $dateConsommation;

    #[ORM\Column(name: 'type_repas', length: 20)]
    private string $typeRepas;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'id_aliment', referencedColumnName: 'id_aliment', nullable: true)]
    private ?Aliment $aliment = null;

    #[ORM\Column(name: 'quantite_eau_ml', nullable: true)]
    private ?int $quantiteEauMl = null;

    #[ORM\Column(name: 'poids_grammes', nullable: true)]
    private ?int $poidsGrammes = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: true)]
    private ?User $user = null;

    public function getIdConsommation(): ?int
    {
        return $this->idConsommation;
    }

    public function getDateConsommation(): \DateTimeInterface
    {
        return $this->dateConsommation;
    }

    public function setDateConsommation(\DateTimeInterface $dateConsommation): static
    {
        $this->dateConsommation = $dateConsommation;

        return $this;
    }

    public function getTypeRepas(): string
    {
        return $this->typeRepas;
    }

    public function setTypeRepas(string $typeRepas): static
    {
        $this->typeRepas = $typeRepas;

        return $this;
    }

    public function getAliment(): ?Aliment
    {
        return $this->aliment;
    }

    public function setAliment(?Aliment $aliment): static
    {
        $this->aliment = $aliment;

        return $this;
    }

    public function getQuantiteEauMl(): ?int
    {
        return $this->quantiteEauMl;
    }

    public function setQuantiteEauMl(?int $quantiteEauMl): static
    {
        $this->quantiteEauMl = $quantiteEauMl;

        return $this;
    }

    public function getPoidsGrammes(): ?int
    {
        return $this->poidsGrammes;
    }

    public function setPoidsGrammes(?int $poidsGrammes): static
    {
        $this->poidsGrammes = $poidsGrammes;

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
