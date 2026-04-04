<?php

namespace App\Controller;

use App\Entity\Favori;
use App\Form\FavoriType;
use App\Repository\FavoriRepository;
use App\Service\Domain\ForumDomainService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/favori')]
final class FavoriController extends AbstractController
{
    #[Route(name: 'app_favori_index', methods: ['GET'])]
    public function index(FavoriRepository $favoriRepository): Response
    {
        return $this->render('favori/index.html.twig', [
            'favoris' => $favoriRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_favori_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ForumDomainService $domainService): Response
    {
        $favori = new Favori();
        $form = $this->createForm(FavoriType::class, $favori);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveFavori($favori);
                return $this->redirectToRoute('app_favori_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('favori/new.html.twig', [
            'favori' => $favori,
            'form' => $form,
        ]);
    }

    #[Route('/{idFavori}', name: 'app_favori_show', methods: ['GET'])]
    public function show(Favori $favori): Response
    {
        return $this->render('favori/show.html.twig', [
            'favori' => $favori,
        ]);
    }

    #[Route('/{idFavori}/edit', name: 'app_favori_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Favori $favori, ForumDomainService $domainService): Response
    {
        $form = $this->createForm(FavoriType::class, $favori);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $domainService->saveFavori($favori);
                return $this->redirectToRoute('app_favori_index', [], Response::HTTP_SEE_OTHER);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('favori/edit.html.twig', [
            'favori' => $favori,
            'form' => $form,
        ]);
    }

    #[Route('/{idFavori}', name: 'app_favori_delete', methods: ['POST'])]
    public function delete(Request $request, Favori $favori, ForumDomainService $domainService): Response
    {
        if ($this->isCsrfTokenValid('delete'.$favori->getIdFavori(), $request->getPayload()->getString('_token'))) {
            try {
                $domainService->removeFavori($favori);
            } catch (\DomainException $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->redirectToRoute('app_favori_index', [], Response::HTTP_SEE_OTHER);
    }
}
