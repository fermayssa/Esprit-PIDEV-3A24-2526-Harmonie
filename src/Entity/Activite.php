<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActiviteRepository::class)]
class Activite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTime $dateActivite = null;

    #[ORM\Column]
    private ?int $dureeMinutes = null;

    #[ORM\Column(nullable: true)]
    private ?int $caloriesBrulees = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbRepetitions = null;

    #[ORM\Column(nullable: true)]
    private ?float $poids = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateActivite(): ?\DateTime
    {
        return $this->dateActivite;
    }

    public function setDateActivite(\DateTime $dateActivite): static
    {
        $this->dateActivite = $dateActivite;

        return $this;
    }

    public function getDureeMinutes(): ?int
    {
        return $this->dureeMinutes;
    }

    public function setDureeMinutes(int $dureeMinutes): static
    {
        $this->dureeMinutes = $dureeMinutes;

        return $this;
    }

    public function getCaloriesBrulees(): ?int
    {
        return $this->caloriesBrulees;
    }

    public function setCaloriesBrulees(?int $caloriesBrulees): static
    {
        $this->caloriesBrulees = $caloriesBrulees;

        return $this;
    }

    public function getNbRepetitions(): ?int
    {
        return $this->nbRepetitions;
    }

    public function setNbRepetitions(?int $nbRepetitions): static
    {
        $this->nbRepetitions = $nbRepetitions;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(?float $poids): static
    {
        $this->poids = $poids;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;

        return $this;
    }
}
