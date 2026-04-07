<?php

namespace App\Repository;

use App\Entity\JournalHumeur;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class JournalHumeurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JournalHumeur::class);
    }

    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('j')
            ->where('j.user = :user')
            ->setParameter('user', $user)
            ->orderBy('j.dateJournal', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function searchByUser(User $user, string $q = '', string $humeur = ''): array
    {
        $qb = $this->createQueryBuilder('j')
            ->where('j.user = :user')
            ->setParameter('user', $user);

        if ($q !== '') {
            $qb->andWhere('j.contenu LIKE :q')
               ->setParameter('q', '%' . $q . '%');
        }

        if ($humeur !== '') {
            $qb->andWhere('j.humeur = :humeur')
               ->setParameter('humeur', $humeur);
        }

        return $qb->orderBy('j.dateJournal', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
