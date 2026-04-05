<?php

namespace App\Entity;

use App\Repository\AlimentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlimentRepository::class)]
class Aliment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomAliment = null;

    #[ORM\Column]
    private ?int $caloriesPour100g = null;

    #[ORM\Column]
    private ?float $proteines = null;

    #[ORM\Column]
    private ?float $glucides = null;

    #[ORM\Column]
    private ?float $lipides = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAliment(): ?string
    {
        return $this->nomAliment;
    }

    public function setNomAliment(string $nomAliment): static
    {
        $this->nomAliment = $nomAliment;

        return $this;
    }

    public function getCaloriesPour100g(): ?int
    {
        return $this->caloriesPour100g;
    }

    public function setCaloriesPour100g(int $caloriesPour100g): static
    {
        $this->caloriesPour100g = $caloriesPour100g;

        return $this;
    }

    public function getProteines(): ?float
    {
        return $this->proteines;
    }

    public function setProteines(float $proteines): static
    {
        $this->proteines = $proteines;

        return $this;
    }

    public function getGlucides(): ?float
    {
        return $this->glucides;
    }

    public function setGlucides(float $glucides): static
    {
        $this->glucides = $glucides;

        return $this;
    }

    public function getLipides(): ?float
    {
        return $this->lipides;
    }

    public function setLipides(float $lipides): static
    {
        $this->lipides = $lipides;

        return $this;
    }
}
