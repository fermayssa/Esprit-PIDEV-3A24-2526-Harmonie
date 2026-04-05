<?php

namespace App\Controller;

use App\Entity\Tache;
use App\Form\TacheType;
use App\Repository\CalendrierRepository;
use App\Repository\TacheRepository;
use App\Service\Domain\PlanningDomainService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/taches')]
#[IsGranted('ROLE_ADMIN')]
final class AdminTacheController extends AbstractController
{
    private const LIMIT = 10;

    #[Route('', name: 'admin_tache_index', methods: ['GET'])]
    public function index(Request $request, TacheRepository $tacheRepository, CalendrierRepository $calendrierRepository): Response
    {
        $page = max(1, (int) $request->query->get('page', 1));
        $statut = $request->query->getString('statut');
        $statutFiltre = '' !== $statut ? $statut : null;
        $calId = $request->query->get('calendrier');
        $calendrierId = null !== $calId && '' !== $calId ? (int) $calId : null;

        $total = $tacheRepository->countAdmin($statutFiltre, $calendrierId);
        $taches = $tacheRepository->findAdminPaginated($page, self::LIMIT, $statutFiltre, $calendrierId);
        $pages = (int) max(1, (int) ceil($total / self::LIMIT));

        return $this->render('admin/tache/index.html.twig', [
            'taches' => $taches,
            'calendriers' => $calendrierRepository->findBy([], ['id' => 'ASC']),
            'page' => $page,
            'pages' => $pages,
            'total' => $total,
            'statutFiltre' => $statutFiltre ?? '',
            'calendrierId' => $calendrierId,
        ]);
    }

    #[Route('/new', name: 'admin_tache_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PlanningDomainService $domainService): Response
    {
        $tache = new Tache();
        $form = $this->createForm(TacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveTache($tache);
                $this->addFlash('success', 'Tâche créée.');

                return $this->redirectToRoute('admin_tache_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('admin/tache/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_tache_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Tache $tache): Response
    {
        return $this->render('admin/tache/show.html.twig', [
            'tache' => $tache,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_tache_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, Tache $tache, PlanningDomainService $domainService): Response
    {
        $form = $this->createForm(TacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveTache($tache);
                $this->addFlash('success', 'Tâche mise à jour.');

                return $this->redirectToRoute('admin_tache_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('admin/tache/edit.html.twig', [
            'tache' => $tache,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_tache_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, Tache $tache, PlanningDomainService $domainService): Response
    {
        if ($this->isCsrfTokenValid('admin_delete_tache'.$tache->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $domainService->removeTache($tache);
                $this->addFlash('success', 'Tâche supprimée.');
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->redirectToRoute('admin_tache_index', [], Response::HTTP_SEE_OTHER);
    }
}
