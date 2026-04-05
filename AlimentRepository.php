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

    /**
     * Tous les aliments triés par nom.
     */
    public function findAllOrdered(): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.nomAliment', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche par nom (insensible à la casse).
     */
    public function search(string $q): array
    {
        return $this->createQueryBuilder('a')
            ->where('LOWER(a.nomAliment) LIKE LOWER(:q)')
            ->setParameter('q', '%' . $q . '%')
            ->orderBy('a.nomAliment', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find aliment by exact name.
     */
    public function findByName(string $name): ?Aliment
    {
        return $this->createQueryBuilder('a')
            ->where('LOWER(a.nomAliment) = LOWER(:name)')
            ->setParameter('name', $name)
            ->getQuery()
            ->getOneOrNullResult();
    }
}