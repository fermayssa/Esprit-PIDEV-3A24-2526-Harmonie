<?php

namespace App\Controller;

use App\Entity\Sommeil;
use App\Form\SommeilType;
use App\Repository\SommeilRepository;
use App\Service\Domain\FitnessDomainService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/sommeil')]
final class SommeilController extends AbstractController
{
    #[Route(name: 'app_sommeil_index', methods: ['GET'])]
    public function index(SommeilRepository $sommeilRepository): Response
    {
        return $this->render('sommeil/index.html.twig', [
            'sommeils' => $sommeilRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_sommeil_new', methods: ['GET', 'POST'])]
    public function new(Request $request, FitnessDomainService $domainService): Response
    {
        $sommeil = new Sommeil();
        $form = $this->createForm(SommeilType::class, $sommeil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveSommeil($sommeil);
                return $this->redirectToRoute('app_sommeil_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('sommeil/new.html.twig', [
            'sommeil' => $sommeil,
            'form' => $form,
        ]);
    }

    #[Route('/{idSommeil}', name: 'app_sommeil_show', methods: ['GET'])]
    public function show(Sommeil $sommeil): Response
    {
        return $this->render('sommeil/show.html.twig', [
            'sommeil' => $sommeil,
        ]);
    }

    #[Route('/{idSommeil}/edit', name: 'app_sommeil_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sommeil $sommeil, FitnessDomainService $domainService): Response
    {
        $form = $this->createForm(SommeilType::class, $sommeil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveSommeil($sommeil);
                return $this->redirectToRoute('app_sommeil_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('sommeil/edit.html.twig', [
            'sommeil' => $sommeil,
            'form' => $form,
        ]);
    }

    #[Route('/{idSommeil}', name: 'app_sommeil_delete', methods: ['POST'])]
    public function delete(Request $request, Sommeil $sommeil, FitnessDomainService $domainService): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sommeil->getIdSommeil(), $request->getPayload()->getString('_token'))) {
            try {
                $domainService->removeSommeil($sommeil);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->redirectToRoute('app_sommeil_index', [], Response::HTTP_SEE_OTHER);
    }
}
