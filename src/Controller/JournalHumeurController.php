<?php

namespace App\Controller;

use App\Entity\JournalHumeur;
use App\Form\JournalHumeurType;
use App\Repository\JournalHumeurRepository;
use App\Service\Domain\WellnessDomainService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/journal/humeur')]
final class JournalHumeurController extends AbstractController
{
    #[Route(name: 'app_journal_humeur_index', methods: ['GET'])]
    public function index(JournalHumeurRepository $journalHumeurRepository): Response
    {
        return $this->render('journal_humeur/index.html.twig', [
            'journal_humeurs' => $journalHumeurRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_journal_humeur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, WellnessDomainService $domainService): Response
    {
        $journalHumeur = new JournalHumeur();
        $form = $this->createForm(JournalHumeurType::class, $journalHumeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveJournalHumeur($journalHumeur);
                return $this->redirectToRoute('app_journal_humeur_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('journal_humeur/new.html.twig', [
            'journal_humeur' => $journalHumeur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_journal_humeur_show', methods: ['GET'])]
    public function show(JournalHumeur $journalHumeur): Response
    {
        return $this->render('journal_humeur/show.html.twig', [
            'journal_humeur' => $journalHumeur,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_journal_humeur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, JournalHumeur $journalHumeur, WellnessDomainService $domainService): Response
    {
        $form = $this->createForm(JournalHumeurType::class, $journalHumeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveJournalHumeur($journalHumeur);
                return $this->redirectToRoute('app_journal_humeur_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('journal_humeur/edit.html.twig', [
            'journal_humeur' => $journalHumeur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_journal_humeur_delete', methods: ['POST'])]
    public function delete(Request $request, JournalHumeur $journalHumeur, WellnessDomainService $domainService): Response
    {
        if ($this->isCsrfTokenValid('delete'.$journalHumeur->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $domainService->removeJournalHumeur($journalHumeur);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->redirectToRoute('app_journal_humeur_index', [], Response::HTTP_SEE_OTHER);
    }
}
