<?php

namespace App\Controller;

use App\Entity\Consommation;
use App\Form\ConsommationType;
use App\Repository\ConsommationRepository;
use App\Service\Domain\NutritionDomainService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/consommation')]
final class ConsommationController extends AbstractController
{
    #[Route(name: 'app_consommation_index', methods: ['GET'])]
    public function index(ConsommationRepository $consommationRepository): Response
    {
        return $this->render('consommation/index.html.twig', [
            'consommations' => $consommationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_consommation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, NutritionDomainService $domainService): Response
    {
        $consommation = new Consommation();
        $form = $this->createForm(ConsommationType::class, $consommation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveConsommation($consommation);
                return $this->redirectToRoute('app_consommation_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('consommation/new.html.twig', [
            'consommation' => $consommation,
            'form' => $form,
        ]);
    }

    #[Route('/{idConsommation}', name: 'app_consommation_show', methods: ['GET'])]
    public function show(Consommation $consommation): Response
    {
        return $this->render('consommation/show.html.twig', [
            'consommation' => $consommation,
        ]);
    }

    #[Route('/{idConsommation}/edit', name: 'app_consommation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Consommation $consommation, NutritionDomainService $domainService): Response
    {
        $form = $this->createForm(ConsommationType::class, $consommation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveConsommation($consommation);
                return $this->redirectToRoute('app_consommation_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('consommation/edit.html.twig', [
            'consommation' => $consommation,
            'form' => $form,
        ]);
    }

    #[Route('/{idConsommation}', name: 'app_consommation_delete', methods: ['POST'])]
    public function delete(Request $request, Consommation $consommation, NutritionDomainService $domainService): Response
    {
        if ($this->isCsrfTokenValid('delete'.$consommation->getIdConsommation(), $request->getPayload()->getString('_token'))) {
            try {
                $domainService->removeConsommation($consommation);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->redirectToRoute('app_consommation_index', [], Response::HTTP_SEE_OTHER);
    }
}
