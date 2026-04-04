<?php

namespace App\Entity;

use App\Repository\AlimentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AlimentRepository::class)]
#[ORM\Table(name: 'aliment')]
class Aliment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_aliment')]
    private ?int $idAliment = null;

    #[Assert\NotBlank]
    #[Assert\Length(max: 100)]
    #[ORM\Column(name: 'nom_aliment', length: 100)]
    private string $nomAliment;

    #[Assert\PositiveOrZero]
    #[ORM\Column(name: 'calories_pour_100g')]
    private int $caloriesPour100g;

    #[ORM\Column(name: 'proteines')]
    private float $proteines = 0.0;

    #[ORM\Column(name: 'glucides')]
    private float $glucides = 0.0;

    #[ORM\Column(name: 'lipides')]
    private float $lipides = 0.0;

    public function getIdAliment(): ?int
    {
        return $this->idAliment;
    }

    public function getNomAliment(): string
    {
        return $this->nomAliment;
    }

    public function setNomAliment(string $nomAliment): static
    {
        $this->nomAliment = $nomAliment;

        return $this;
    }

    public function getCaloriesPour100g(): int
    {
        return $this->caloriesPour100g;
    }

    public function setCaloriesPour100g(int $caloriesPour100g): static
    {
        $this->caloriesPour100g = $caloriesPour100g;

        return $this;
    }

    public function getProteines(): float
    {
        return $this->proteines;
    }

    public function setProteines(float $proteines): static
    {
        $this->proteines = $proteines;

        return $this;
    }

    public function getGlucides(): float
    {
        return $this->glucides;
    }

    public function setGlucides(float $glucides): static
    {
        $this->glucides = $glucides;

        return $this;
    }

    public function getLipides(): float
    {
        return $this->lipides;
    }

    public function setLipides(float $lipides): static
    {
        $this->lipides = $lipides;

        return $this;
    }

    public function __toString(): string
    {
        return $this->nomAliment;
    }
}
