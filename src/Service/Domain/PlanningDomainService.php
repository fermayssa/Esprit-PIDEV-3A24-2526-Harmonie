<?php

namespace App\Service\Domain;

use App\Entity\Calendrier;
use App\Entity\Evenement;
use App\Entity\Salle;
use App\Entity\Seance;
use App\Entity\Tache;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class PlanningDomainService
{
    use PersistenceHelper;

    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly ValidatorInterface $validator,
    ) {
    }

    protected function getEntityManager(): EntityManagerInterface
    {
        return $this->entityManager;
    }

    protected function getValidator(): ValidatorInterface
    {
        return $this->validator;
    }

    public function saveSeance(Seance $seance): void
    {
        $salle = $seance->getSalle();
        if ($salle && !$salle->isDisponible()) {
            throw new \DomainException('La salle choisie n’est pas disponible.');
        }
        if ($seance->getNombreParticipants() < 0) {
            throw new \DomainException('Le nombre de participants ne peut pas être négatif.');
        }
        $this->validateEntity($seance);
        $this->persistAndFlush($seance);
    }

    public function saveEvenement(Evenement $evenement): void
    {
        $debut = $evenement->getDateDebut();
        $fin = $evenement->getDateFin();
        if ($debut && $fin && $fin < $debut) {
            throw new \DomainException('La date de fin doit être postérieure à la date de début.');
        }
        $this->validateEntity($evenement);
        $this->persistAndFlush($evenement);
    }

    public function saveTache(Tache $tache): void
    {
        $this->validateEntity($tache);
        $this->persistAndFlush($tache);
    }

    public function saveCalendrier(Calendrier $calendrier): void
    {
        $this->validateEntity($calendrier);
        $this->persistAndFlush($calendrier);
    }

    public function saveSalle(Salle $salle): void
    {
        if ($salle->getCapacite() < 1) {
            throw new \DomainException('La capacité doit être au moins 1.');
        }
        $this->validateEntity($salle);
        $this->persistAndFlush($salle);
    }

    public function removeSeance(Seance $seance): void
    {
        $this->removeAndFlush($seance);
    }

    public function removeEvenement(Evenement $evenement): void
    {
        $this->removeAndFlush($evenement);
    }

    public function removeTache(Tache $tache): void
    {
        $this->removeAndFlush($tache);
    }

    public function removeCalendrier(Calendrier $calendrier): void
    {
        $this->removeAndFlush($calendrier);
    }

    public function removeSalle(Salle $salle): void
    {
        $this->removeAndFlush($salle);
    }
}
