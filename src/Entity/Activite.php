<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActiviteRepository::class)]
#[ORM\Table(name: 'activite')]
class Activite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_activite')]
    private ?int $idActivite = null;

    #[ORM\Column(name: 'date_activite', type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $dateActivite;

    #[ORM\ManyToOne(inversedBy: 'activites')]
    #[ORM\JoinColumn(name: 'id_exercice', referencedColumnName: 'id_exercice', nullable: false)]
    private ?Exercice $exercice = null;

    #[ORM\Column(name: 'duree_minutes', nullable: true)]
    private ?int $dureeMinutes = null;

    #[ORM\Column(name: 'calories_brulees', nullable: true)]
    private ?int $caloriesBrulees = null;

    #[ORM\Column(name: 'nb_series', nullable: true)]
    private ?int $nbSeries = null;

    #[ORM\Column(name: 'nb_repetitions', nullable: true)]
    private ?int $nbRepetitions = null;

    #[ORM\Column(name: 'poids', type: Types::FLOAT, nullable: true)]
    private ?float $poids = null;

    #[ORM\Column(name: 'notes', length: 255, nullable: true)]
    private ?string $notes = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: true)]
    private ?User $user = null;

    public function getIdActivite(): ?int
    {
        return $this->idActivite;
    }

    public function getDateActivite(): \DateTimeInterface
    {
        return $this->dateActivite;
    }

    public function setDateActivite(\DateTimeInterface $dateActivite): static
    {
        $this->dateActivite = $dateActivite;

        return $this;
    }

    public function getExercice(): ?Exercice
    {
        return $this->exercice;
    }

    public function setExercice(?Exercice $exercice): static
    {
        $this->exercice = $exercice;

        return $this;
    }

    public function getDureeMinutes(): ?int
    {
        return $this->dureeMinutes;
    }

    public function setDureeMinutes(?int $dureeMinutes): static
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

    public function getNbSeries(): ?int
    {
        return $this->nbSeries;
    }

    public function setNbSeries(?int $nbSeries): static
    {
        $this->nbSeries = $nbSeries;

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
