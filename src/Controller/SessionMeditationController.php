<?php

namespace App\Controller;

use App\Entity\SessionMeditation;
use App\Form\SessionMeditationType;
use App\Repository\SessionMeditationRepository;
use App\Service\Domain\WellnessDomainService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/session/meditation')]
final class SessionMeditationController extends AbstractController
{
    #[Route(name: 'app_session_meditation_index', methods: ['GET'])]
    public function index(SessionMeditationRepository $sessionMeditationRepository): Response
    {
        return $this->render('session_meditation/index.html.twig', [
            'session_meditations' => $sessionMeditationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_session_meditation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, WellnessDomainService $domainService): Response
    {
        $sessionMeditation = new SessionMeditation();
        $form = $this->createForm(SessionMeditationType::class, $sessionMeditation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveSessionMeditation($sessionMeditation);
                return $this->redirectToRoute('app_session_meditation_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('session_meditation/new.html.twig', [
            'session_meditation' => $sessionMeditation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_session_meditation_show', methods: ['GET'])]
    public function show(SessionMeditation $sessionMeditation): Response
    {
        return $this->render('session_meditation/show.html.twig', [
            'session_meditation' => $sessionMeditation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_session_meditation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SessionMeditation $sessionMeditation, WellnessDomainService $domainService): Response
    {
        $form = $this->createForm(SessionMeditationType::class, $sessionMeditation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveSessionMeditation($sessionMeditation);
                return $this->redirectToRoute('app_session_meditation_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('session_meditation/edit.html.twig', [
            'session_meditation' => $sessionMeditation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_session_meditation_delete', methods: ['POST'])]
    public function delete(Request $request, SessionMeditation $sessionMeditation, WellnessDomainService $domainService): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sessionMeditation->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $domainService->removeSessionMeditation($sessionMeditation);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->redirectToRoute('app_session_meditation_index', [], Response::HTTP_SEE_OTHER);
    }
}
