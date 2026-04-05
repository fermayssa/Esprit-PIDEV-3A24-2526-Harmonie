<?php

namespace App\Controller;

use App\Repository\DemandeReservationRepository;
use App\Repository\EvenementRepository;
use App\Repository\SalleRepository;
use App\Repository\TacheRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin')]
#[IsGranted('ROLE_ADMIN')]
final class AdminDashboardController extends AbstractController
{
    #[Route('', name: 'admin_dashboard', methods: ['GET'])]
    public function index(
        EvenementRepository $evenementRepository,
        TacheRepository $tacheRepository,
        SalleRepository $salleRepository,
        DemandeReservationRepository $demandeReservationRepository,
    ): Response {
        $pending = $demandeReservationRepository->countByStatut(\App\Entity\DemandeReservation::STATUT_EN_ATTENTE);
        $demandesEnAttente = $demandeReservationRepository->findAllByStatutWithJoins(\App\Entity\DemandeReservation::STATUT_EN_ATTENTE);

        return $this->render('admin/dashboard.html.twig', [
            'countEvenements' => $evenementRepository->countAll(),
            'countTaches' => $tacheRepository->countAll(),
            'countSalles' => $salleRepository->countAll(),
            'countDemandesEnAttente' => $pending,
            'recentEvenements' => $evenementRepository->findRecentForDashboard(3),
            'demandesEnAttente' => $demandesEnAttente,
            'recentTaches' => $tacheRepository->findRecentForDashboard(3),
        ]);
    }
}
