<?php

namespace App\Service\Domain;

use App\Entity\Conseil;
use App\Entity\JournalHumeur;
use App\Entity\SessionMeditation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class WellnessDomainService
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

    public function saveJournalHumeur(JournalHumeur $journalHumeur): void
    {
        if ($journalHumeur->getScore() < 0 || $journalHumeur->getScore() > 10) {
            throw new \DomainException('Le score doit être entre 0 et 10.');
        }
        $this->validateEntity($journalHumeur);
        $this->persistAndFlush($journalHumeur);
    }

    public function saveSessionMeditation(SessionMeditation $sessionMeditation): void
    {
        if ($sessionMeditation->getDuree() <= 0) {
            throw new \DomainException('La durée doit être positive.');
        }
        $this->validateEntity($sessionMeditation);
        $this->persistAndFlush($sessionMeditation);
    }

    public function saveConseil(Conseil $conseil): void
    {
        $this->validateEntity($conseil);
        $this->persistAndFlush($conseil);
    }

    public function removeJournalHumeur(JournalHumeur $journalHumeur): void
    {
        $this->removeAndFlush($journalHumeur);
    }

    public function removeSessionMeditation(SessionMeditation $sessionMeditation): void
    {
        $this->removeAndFlush($sessionMeditation);
    }

    public function removeConseil(Conseil $conseil): void
    {
        $this->removeAndFlush($conseil);
    }
}
