<?php

namespace App\Entity;

use App\Repository\ConsommationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConsommationRepository::class)]
class Consommation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTime $dateConsommation = null;

    #[ORM\Column(length: 50)]
    private ?string $typeRepas = null;

    #[ORM\Column]
    private ?int $poidsGrammes = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantiteEauMl = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateConsommation(): ?\DateTime
    {
        return $this->dateConsommation;
    }

    public function setDateConsommation(\DateTime $dateConsommation): static
    {
        $this->dateConsommation = $dateConsommation;

        return $this;
    }

    public function getTypeRepas(): ?string
    {
        return $this->typeRepas;
    }

    public function setTypeRepas(string $typeRepas): static
    {
        $this->typeRepas = $typeRepas;

        return $this;
    }

    public function getPoidsGrammes(): ?int
    {
        return $this->poidsGrammes;
    }

    public function setPoidsGrammes(int $poidsGrammes): static
    {
        $this->poidsGrammes = $poidsGrammes;

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
}
