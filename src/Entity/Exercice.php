<?php

namespace App\Entity;

use App\Repository\ExerciceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExerciceRepository::class)]
#[ORM\Table(name: 'exercice')]
class Exercice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_exercice')]
    private ?int $idExercice = null;

    #[ORM\Column(name: 'nom_exercice', length: 100)]
    private string $nomExercice;

    #[ORM\Column(name: 'type_exercice', length: 100, nullable: true)]
    private ?string $typeExercice = null;

    #[ORM\Column(name: 'video_exercice', length: 255, nullable: true)]
    private ?string $videoExercice = null;

    /** @var Collection<int, Activite> */
    #[ORM\OneToMany(targetEntity: Activite::class, mappedBy: 'exercice')]
    private Collection $activites;

    public function __construct()
    {
        $this->activites = new ArrayCollection();
    }

    public function getIdExercice(): ?int
    {
        return $this->idExercice;
    }

    public function getNomExercice(): string
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

    public function setTypeExercice(?string $typeExercice): static
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

    /** @return Collection<int, Activite> */
    public function getActivites(): Collection
    {
        return $this->activites;
    }

    public function __toString(): string
    {
        return $this->nomExercice;
    }
}
