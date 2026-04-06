<?php

namespace App\Controller;

use App\Entity\Exercice;
use App\Repository\ExerciceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/sport')]
class AdminSportController extends AbstractController
{
    public function __construct(
        private readonly ExerciceRepository     $repo,
        private readonly EntityManagerInterface $em,
    ) {}

    // ── Page principale ──────────────────────────────────────────────
    #[Route('', name: 'admin_sport_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/sport.html.twig');
    }

    // ── LIST (JSON) ──────────────────────────────────────────────────
    #[Route('/api/list', name: 'admin_sport_list', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $exercices = $this->repo->findAllOrdered();
        return $this->json(array_map([$this, 'serialize'], $exercices));
    }

    // ── CREATE ───────────────────────────────────────────────────────
    #[Route('/api/create', name: 'admin_sport_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $error = $this->validateData($data);
        if ($error) {
            return $this->json(['error' => $error], 400);
        }

        $exercice = new Exercice();
        $this->hydrate($exercice, $data);
        $this->em->persist($exercice);
        $this->em->flush();

        return $this->json($this->serialize($exercice), 201);
    }

    // ── UPDATE ───────────────────────────────────────────────────────
    #[Route('/api/update/{id}', name: 'admin_sport_update', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function update(int $id, Request $request): JsonResponse
    {
        $exercice = $this->repo->find($id);
        if (!$exercice) {
            return $this->json(['error' => 'Exercice introuvable'], 404);
        }

        $data = json_decode($request->getContent(), true);
        $error = $this->validateData($data);
        if ($error) {
            return $this->json(['error' => $error], 400);
        }

        $this->hydrate($exercice, $data);
        $this->em->flush();

        return $this->json($this->serialize($exercice));
    }

    // ── DELETE ───────────────────────────────────────────────────────
    #[Route('/api/delete/{id}', name: 'admin_sport_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(int $id): JsonResponse
    {
        $exercice = $this->repo->find($id);
        if (!$exercice) {
            return $this->json(['error' => 'Exercice introuvable'], 404);
        }
        $this->em->remove($exercice);
        $this->em->flush();
        return $this->json(['deleted' => true, 'id' => $id]);
    }

    // ── HELPERS ─────────────────────────────────────────────────────
    private function hydrate(Exercice $exercice, array $data): void
    {
        $exercice->setNomExercice(trim($data['nomExercice']));
        $exercice->setTypeExercice(!empty($data['typeExercice']) ? trim($data['typeExercice']) : null);
        $exercice->setVideoExercice(!empty($data['videoExercice']) ? trim($data['videoExercice']) : null);
    }

    private function serialize(Exercice $e): array
    {
        return [
            'id'            => $e->getId(),
            'nomExercice'   => $e->getNomExercice(),
            'typeExercice'  => $e->getTypeExercice(),
            'videoExercice' => $e->getVideoExercice(),
        ];
    }

    private function validateData(?array $data): ?string
    {
        if (!$data) return 'Aucune donnée reçue.';
        if (empty(trim($data['nomExercice'] ?? ''))) return "Le nom de l'exercice est obligatoire.";
        if (empty(trim($data['typeExercice'] ?? ''))) return "Le type d'exercice est obligatoire.";
        return null;
    }
}