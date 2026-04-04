<?php

namespace App\Service\Domain;

use App\Entity\Activite;
use App\Entity\Exercice;
use App\Entity\Sommeil;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class FitnessDomainService
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

    public function saveActivite(Activite $activite): void
    {
        if (null !== $activite->getDureeMinutes() && $activite->getDureeMinutes() < 0) {
            throw new \DomainException('La durée ne peut pas être négative.');
        }
        $this->validateEntity($activite);
        $this->persistAndFlush($activite);
    }

    public function saveExercice(Exercice $exercice): void
    {
        $this->validateEntity($exercice);
        $this->persistAndFlush($exercice);
    }

    public function saveSommeil(Sommeil $sommeil): void
    {
        if ($sommeil->getDateReveil() < $sommeil->getDateCoucher()) {
            throw new \DomainException('Le réveil doit être après le coucher.');
        }
        $this->validateEntity($sommeil);
        $this->persistAndFlush($sommeil);
    }

    public function removeActivite(Activite $activite): void
    {
        $this->removeAndFlush($activite);
    }

    public function removeExercice(Exercice $exercice): void
    {
        $this->removeAndFlush($exercice);
    }

    public function removeSommeil(Sommeil $sommeil): void
    {
        $this->removeAndFlush($sommeil);
    }
}
