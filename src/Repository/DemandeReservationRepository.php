<?php

namespace App\Repository;

use App\Entity\DemandeReservation;
use App\Entity\Evenement;
use App\Entity\Salle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DemandeReservation>
 */
class DemandeReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemandeReservation::class);
    }

    public function countAll(): int
    {
        return (int) $this->createQueryBuilder('d')->select('COUNT(d.id)')->getQuery()->getSingleScalarResult();
    }

    public function countByStatut(string $statut): int
    {
        return (int) $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->andWhere('d.statut = :s')
            ->setParameter('s', $statut)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countPendingForEvenementAndSalle(Evenement $evenement, Salle $salle): int
    {
        return (int) $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->andWhere('d.evenement = :e')
            ->andWhere('d.salle = :s')
            ->andWhere('d.statut = :st')
            ->setParameter('e', $evenement)
            ->setParameter('s', $salle)
            ->setParameter('st', DemandeReservation::STATUT_EN_ATTENTE)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * @return list<DemandeReservation>
     */
    public function findAdminPaginated(int $page, int $limit, ?string $statutFiltre): array
    {
        $qb = $this->createQueryBuilder('d')
            ->leftJoin('d.evenement', 'e')->addSelect('e')
            ->leftJoin('d.salle', 's')->addSelect('s')
            ->leftJoin('d.utilisateur', 'u')->addSelect('u')
            ->orderBy('d.dateDemande', 'DESC');

        if (null !== $statutFiltre && '' !== $statutFiltre) {
            $qb->andWhere('d.statut = :st')->setParameter('st', $statutFiltre);
        }

        return $qb->setFirstResult(max(0, ($page - 1) * $limit))
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function countAdmin(?string $statutFiltre): int
    {
        $qb = $this->createQueryBuilder('d')->select('COUNT(d.id)');
        if (null !== $statutFiltre && '' !== $statutFiltre) {
            $qb->andWhere('d.statut = :st')->setParameter('st', $statutFiltre);
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }
}
