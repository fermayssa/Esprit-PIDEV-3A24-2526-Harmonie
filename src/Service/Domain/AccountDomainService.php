<?php

namespace App\Service\Domain;

use App\Entity\Etudiant;
use App\Entity\Notification;
use App\Entity\PasswordResetCode;
use App\Entity\Sessions;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class AccountDomainService
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

    public function saveUser(User $user): void
    {
        $this->validateEntity($user);
        $this->persistAndFlush($user);
    }

    public function saveEtudiant(Etudiant $etudiant): void
    {
        $this->validateEntity($etudiant);
        $this->persistAndFlush($etudiant);
    }

    public function saveSessions(Sessions $sessions): void
    {
        $this->validateEntity($sessions);
        $this->persistAndFlush($sessions);
    }

    public function savePasswordResetCode(PasswordResetCode $code): void
    {
        $this->validateEntity($code);
        $this->persistAndFlush($code);
    }

    public function saveNotification(Notification $notification): void
    {
        $this->validateEntity($notification);
        $this->persistAndFlush($notification);
    }

    public function removeUser(User $user): void
    {
        $this->removeAndFlush($user);
    }

    public function removeEtudiant(Etudiant $etudiant): void
    {
        $this->removeAndFlush($etudiant);
    }

    public function removeSessions(Sessions $sessions): void
    {
        $this->removeAndFlush($sessions);
    }

    public function removePasswordResetCode(PasswordResetCode $code): void
    {
        $this->removeAndFlush($code);
    }

    public function removeNotification(Notification $notification): void
    {
        $this->removeAndFlush($notification);
    }
}
