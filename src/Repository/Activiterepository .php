<?php

namespace App\Repository;

use App\Entity\Activite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ActiviteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activite::class);
    }

    public function findAllOrderedByDate(): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.dateActivite', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function getTotalCaloriesBrulees(): int
    {
        $result = $this->createQueryBuilder('a')
            ->select('SUM(a.caloriesBrulees)')
            ->getQuery()
            ->getSingleScalarResult();
        return (int) $result;
    }

    public function getTotalMinutes(): int
    {
        $result = $this->createQueryBuilder('a')
            ->select('SUM(a.dureeMinutes)')
            ->getQuery()
            ->getSingleScalarResult();
        return (int) $result;
    }
}