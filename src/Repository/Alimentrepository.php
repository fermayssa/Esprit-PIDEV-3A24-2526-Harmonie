<?php

namespace App\Repository;

use App\Entity\Aliment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AlimentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Aliment::class);
    }

    public function findByNom(string $nom): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('LOWER(a.nomAliment) LIKE LOWER(:nom)')
            ->setParameter('nom', '%' . $nom . '%')
            ->orderBy('a.nomAliment', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findAllOrderedByName(): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.nomAliment', 'ASC')
            ->getQuery()
            ->getResult();
    }
}