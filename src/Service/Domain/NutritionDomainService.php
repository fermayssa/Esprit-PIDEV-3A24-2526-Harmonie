<?php

namespace App\Service\Domain;

use App\Entity\Aliment;
use App\Entity\Consommation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class NutritionDomainService
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

    public function saveAliment(Aliment $aliment): void
    {
        if ($aliment->getCaloriesPour100g() < 0) {
            throw new \DomainException('Les calories ne peuvent pas être négatives.');
        }
        $this->validateEntity($aliment);
        $this->persistAndFlush($aliment);
    }

    public function saveConsommation(Consommation $consommation): void
    {
        $this->validateEntity($consommation);
        $this->persistAndFlush($consommation);
    }

    public function removeAliment(Aliment $aliment): void
    {
        $this->removeAndFlush($aliment);
    }

    public function removeConsommation(Consommation $consommation): void
    {
        $this->removeAndFlush($consommation);
    }
}
