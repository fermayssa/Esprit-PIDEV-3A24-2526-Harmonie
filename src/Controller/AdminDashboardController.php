<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin')]
class AdminDashboardController extends AbstractController
{
    #[Route('', name: 'admin_dashboard')]
    public function index(UserRepository $repo): Response
    {
        $total     = count($repo->findAllStudents());
        $active    = count($repo->findActiveStudents());
        $suspended = count($repo->findSuspendedStudents());
        $recent    = array_slice($repo->findAllStudents(), 0, 5);

        return $this->render('admin/dashboard.html.twig', compact(
            'total', 'active', 'suspended', 'recent'
        ));
    }
}
