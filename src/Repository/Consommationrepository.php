<?php

namespace App\Repository;

use App\Entity\Consommation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ConsommationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Consommation::class);
    }

    public function findTodayConsommations(): array
    {
        $today = new \DateTime('today');
        $tomorrow = new \DateTime('tomorrow');

        return $this->createQueryBuilder('c')
            ->andWhere('c.dateConsommation >= :today')
            ->andWhere('c.dateConsommation < :tomorrow')
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->orderBy('c.dateConsommation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function getTotalCaloriesToday(): float
    {
        $consommations = $this->findTodayConsommations();
        $total = 0;
        foreach ($consommations as $c) {
            $total += $c->getCalories();
        }
        return $total;
    }
}