<?php

namespace App\Repository;

use App\Entity\Exercice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ExerciceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Exercice::class);
    }

    /**
     * Find all exercises ordered by type then name.
     */
    public function findAllOrdered(): array
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.typeExercice', 'ASC')
            ->addOrderBy('e.nomExercice', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find exercises by type.
     */
    public function findByType(string $type): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.typeExercice LIKE :type')
            ->setParameter('type', '%' . $type . '%')
            ->orderBy('e.nomExercice', 'ASC')
            ->getQuery()
            ->getResult();
    }
}