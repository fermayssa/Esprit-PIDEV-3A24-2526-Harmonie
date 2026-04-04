<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminEditUserFormType;
use App\Repository\UserRepository;
use App\Service\SuspicionScoreService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/users')]
class AdminUserController extends AbstractController
{
    public function __construct(
        private readonly UserRepository          $repo,
        private readonly EntityManagerInterface  $em,
        private readonly SuspicionScoreService   $suspicion,
    ) {}

    // ── Liste des comptes ──────────────────────────────────────────────────
    #[Route('', name: 'admin_users_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $q = $request->query->get('q', '');

        $users = $q
            ? $this->repo->searchByName($q)
            : $this->repo->findAllStudents();

        $users = $this->suspicion->sortBySuspicion($users);

        $scores = [];
        foreach ($users as $u) {
            $s = $this->suspicion->compute($u);
            $scores[$u->getUserId()] = [
                'score' => $s,
                'label' => $this->suspicion->getLabel($s),
                'color' => $this->suspicion->getColor($s),
            ];
        }

        return $this->render('admin/users/index.html.twig', compact('users', 'scores', 'q'));
    }

    // ── Live search JSON ───────────────────────────────────────────────────
    #[Route('/search', name: 'admin_users_search', methods: ['GET'])]
    public function search(Request $request): JsonResponse
    {
        $q     = $request->query->get('q', '');
        $users = $q ? $this->repo->searchByName($q) : $this->repo->findAllStudents();

        $data = array_map(fn(User $u) => [
            'id'     => $u->getUserId(),
            'nom'    => $u->getUserNom(),
            'prenom' => $u->getUserPrenom(),
            'email'  => $u->getUserEmail(),
            'active' => $u->isActive(),
            'score'  => $this->suspicion->compute($u),
            'label'  => $this->suspicion->getLabel($this->suspicion->compute($u)),
            'color'  => $this->suspicion->getColor($this->suspicion->compute($u)),
            'image'  => $u->getUserImagePath(),
        ], $users);

        return new JsonResponse($data);
    }

    // ── Comptes suspendus — DOIT être avant /{id} ──────────────────────────
    #[Route('/suspended', name: 'admin_users_suspended', methods: ['GET'])]
    public function suspended(): Response
    {
        $users = $this->repo->findSuspendedStudents();
        return $this->render('admin/users/suspended.html.twig', compact('users'));
    }

    // ── Détail d'un compte ─────────────────────────────────────────────────
    #[Route('/{id}', name: 'admin_users_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(User $user): Response
    {
        $score = $this->suspicion->compute($user);
        return $this->render('admin/users/show.html.twig', [
            'user'       => $user,
            'score'      => $score,
            'scoreLabel' => $this->suspicion->getLabel($score),
            'scoreColor' => $this->suspicion->getColor($score),
        ]);
    }

    // ── Modifier un compte ─────────────────────────────────────────────────
    #[Route('/{id}/edit', name: 'admin_users_edit', methods: ['GET', 'POST'])]
    public function edit(User $user, Request $request): Response
    {
        $form = $this->createForm(AdminEditUserFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            $this->addFlash('success', 'Compte mis à jour.');
            return $this->redirectToRoute('admin_users_index');
        }

        return $this->render('admin/users/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    // ── Suspendre / Réactiver ──────────────────────────────────────────────
    #[Route('/{id}/toggle', name: 'admin_users_toggle', methods: ['POST'])]
    public function toggle(User $user, Request $request): Response
    {
        if ($this->isCsrfTokenValid('toggle' . $user->getUserId(), $request->request->get('_token'))) {
            $user->setIsActive(!$user->isActive());
            $this->em->flush();
            $action = $user->isActive() ? 'réactivé' : 'suspendu';
            $this->addFlash('success', "Compte {$action} avec succès.");
        }

        return $this->redirectToRoute('admin_users_index');
    }
}
