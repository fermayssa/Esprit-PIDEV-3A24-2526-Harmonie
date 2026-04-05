<?php

namespace App\Entity;

use App\Repository\ExerciceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExerciceRepository::class)]
class Exercice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomExercice = null;

    #[ORM\Column(length: 100)]
    private ?string $typeExercice = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $videoExercice = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomExercice(): ?string
    {
        return $this->nomExercice;
    }

    public function setNomExercice(string $nomExercice): static
    {
        $this->nomExercice = $nomExercice;

        return $this;
    }

    public function getTypeExercice(): ?string
    {
        return $this->typeExercice;
    }

    public function setTypeExercice(string $typeExercice): static
    {
        $this->typeExercice = $typeExercice;

        return $this;
    }

    public function getVideoExercice(): ?string
    {
        return $this->videoExercice;
    }

    public function setVideoExercice(?string $videoExercice): static
    {
        $this->videoExercice = $videoExercice;

        return $this;
    }
}
