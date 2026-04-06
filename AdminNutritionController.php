<?php

namespace App\Controller;

use App\Entity\Aliment;
use App\Repository\AlimentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/nutrition')]
class AdminNutritionController extends AbstractController
{
    public function __construct(
        private readonly AlimentRepository      $repo,
        private readonly EntityManagerInterface $em,
    ) {}

    // ── Page principale ──────────────────────────────────────────────
    #[Route('', name: 'admin_nutrition_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/nutrition.html.twig');
    }

    // ── LIST (JSON) ──────────────────────────────────────────────────
    #[Route('/api/list', name: 'admin_nutrition_list', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $aliments = $this->repo->findAllOrdered();
        return $this->json(array_map([$this, 'serialize'], $aliments));
    }

    // ── CREATE ───────────────────────────────────────────────────────
    #[Route('/api/create', name: 'admin_nutrition_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $error = $this->validateData($data);
        if ($error) {
            return $this->json(['error' => $error], 400);
        }

        $aliment = new Aliment();
        $this->hydrate($aliment, $data);
        $this->em->persist($aliment);
        $this->em->flush();

        return $this->json($this->serialize($aliment), 201);
    }

    // ── UPDATE ───────────────────────────────────────────────────────
    #[Route('/api/update/{id}', name: 'admin_nutrition_update', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function update(int $id, Request $request): JsonResponse
    {
        $aliment = $this->repo->find($id);
        if (!$aliment) {
            return $this->json(['error' => 'Aliment introuvable'], 404);
        }

        $data = json_decode($request->getContent(), true);
        $error = $this->validateData($data);
        if ($error) {
            return $this->json(['error' => $error], 400);
        }

        $this->hydrate($aliment, $data);
        $this->em->flush();

        return $this->json($this->serialize($aliment));
    }

    // ── DELETE ───────────────────────────────────────────────────────
    #[Route('/api/delete/{id}', name: 'admin_nutrition_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(int $id): JsonResponse
    {
        $aliment = $this->repo->find($id);
        if (!$aliment) {
            return $this->json(['error' => 'Aliment introuvable'], 404);
        }
        $this->em->remove($aliment);
        $this->em->flush();
        return $this->json(['deleted' => true, 'id' => $id]);
    }

    // ── HELPERS ─────────────────────────────────────────────────────
    private function hydrate(Aliment $aliment, array $data): void
    {
        $aliment->setNomAliment(trim($data['nomAliment']));
        $aliment->setCaloriesPour100g((int) round((float) $data['calories']));
        $aliment->setProteines((float) $data['proteines']);
        $aliment->setLipides((float) $data['lipides']);
        $aliment->setGlucides((float) $data['glucides']);
    }

    private function serialize(Aliment $a): array
    {
        return [
            'id'        => $a->getId(),
            'nom'       => $a->getNomAliment(),
            'calories'  => $a->getCaloriesPour100g(),
            'proteines' => $a->getProteines(),
            'lipides'   => $a->getLipides(),
            'glucides'  => $a->getGlucides(),
        ];
    }

    private function validateData(?array $data): ?string
    {
        if (!$data) return 'Aucune donnée reçue.';
        if (empty(trim($data['nomAliment'] ?? ''))) return 'Le nom est obligatoire.';
        foreach (['calories', 'proteines', 'lipides', 'glucides'] as $f) {
            $v = $data[$f] ?? null;
            if ($v === null || $v === '' || !is_numeric($v) || (float)$v < 0) {
                return "Valeur invalide pour le champ « $f ».";
            }
        }
        if ((float)$data['calories'] > 9000) return 'Calories trop élevées (max 9000).';
        foreach (['proteines', 'lipides', 'glucides'] as $f) {
            if ((float)$data[$f] > 100) return "Valeur trop élevée pour « $f » (max 100g/100g).";
        }
        return null;
    }
}