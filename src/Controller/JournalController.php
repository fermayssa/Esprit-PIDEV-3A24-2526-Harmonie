<?php

namespace App\Controller;

use App\Entity\JournalHumeur;
use App\Enum\Humeur;
use App\Form\JournalHumeurType;
use App\Repository\JournalHumeurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
#[Route('/journal')]
class JournalController extends AbstractController
{
    public function __construct(
        private readonly JournalHumeurRepository $repo,
        private readonly EntityManagerInterface  $em,
    ) {}

    #[Route('', name: 'journal', methods: ['GET'])]
    public function index(): Response
    {
        $entries = $this->repo->findByUser($this->getUser());
        $humeurs = Humeur::cases();

        return $this->render('journal/index.html.twig', compact('entries', 'humeurs'));
    }

    #[Route('/search', name: 'journal_search', methods: ['GET'])]
    public function search(Request $request): JsonResponse
    {
        $q      = $request->query->get('q', '');
        $humeur = $request->query->get('humeur', '');

        $entries = $this->repo->searchByUser($this->getUser(), $q, $humeur);

        $data = array_map(fn(JournalHumeur $j) => [
            'id'          => $j->getId(),
            'date'        => $j->getDateJournal()->format('d/m/Y'),
            'humeur'      => $j->getHumeur()->value,
            'humeurLabel' => $j->getHumeur()->label(),
            'humeurEmoji' => $j->getHumeur()->emoji(),
            'score'       => $j->getScore(),
            'contenu'     => $j->getContenu(),
        ], $entries);

        return $this->json($data);
    }

    #[Route('/new', name: 'journal_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $entry = new JournalHumeur();
        $form  = $this->createForm(JournalHumeurType::class, $entry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entry->setUser($this->getUser());
            $this->em->persist($entry);
            $this->em->flush();

            $this->addFlash('success', 'Entrée ajoutée avec succès.');
            return $this->redirectToRoute('journal');
        }

        return $this->render('journal/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'journal_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(JournalHumeur $entry, Request $request): Response
    {
        if ($entry->getUser() !== $this->getUser()) {
            throw new AccessDeniedException('Vous ne pouvez pas modifier cette entrée.');
        }

        $form = $this->createForm(JournalHumeurType::class, $entry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();

            $this->addFlash('success', 'Entrée modifiée avec succès.');
            return $this->redirectToRoute('journal');
        }

        return $this->render('journal/edit.html.twig', [
            'form'  => $form->createView(),
            'entry' => $entry,
        ]);
    }

    #[Route('/{id}/delete', name: 'journal_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(JournalHumeur $entry, Request $request): Response
    {
        if ($entry->getUser() !== $this->getUser()) {
            throw new AccessDeniedException('Vous ne pouvez pas supprimer cette entrée.');
        }

        if ($this->isCsrfTokenValid('delete' . $entry->getId(), $request->request->get('_token'))) {
            $this->em->remove($entry);
            $this->em->flush();
            $this->addFlash('success', 'Entrée supprimée avec succès.');
        }

        return $this->redirectToRoute('journal');
    }
}
