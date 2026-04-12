<?php

namespace App\Controller;

use App\Entity\Consommation;
use App\Repository\AlimentRepository;
use App\Repository\ConsommationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/nutrition')]
class NutritionController extends AbstractController
{
    private const DEMO_USER_ID  = 3;
    private const CAL_GOAL      = 2000;
    private const WATER_GOAL_ML = 2000;

    // ─── Journal principal ───────────────────────────────────────────
    #[Route('', name: 'nutrition', methods: ['GET'])]
    public function index(
        ConsommationRepository $consRepo,
        Request $request
    ): Response {
        $dateStr = $request->query->get('date', (new \DateTime())->format('Y-m-d'));

        try {
            $dt = new \DateTime($dateStr);
        } catch (\Exception $e) {
            $dt      = new \DateTime();
            $dateStr = $dt->format('Y-m-d');
        }

        $userId        = self::DEMO_USER_ID;
        $consommations = $consRepo->findByUserAndDate($userId, $dt);
        $grouped       = $this->groupByRepas($consommations);
        $totalCal      = $consRepo->sumCaloriesByUserAndDate($userId, $dt);
        $totalProt     = $consRepo->sumProtByUserAndDate($userId, $dt);
        $totalGluc     = $consRepo->sumGlucByUserAndDate($userId, $dt);
        $totalLip      = $consRepo->sumLipByUserAndDate($userId, $dt);

        $prevDate = (clone $dt)->modify('-1 day')->format('Y-m-d');
        $nextDate = (clone $dt)->modify('+1 day')->format('Y-m-d');
        $today    = (new \DateTime())->format('Y-m-d');

        return $this->render('nutrition/index.html.twig', [
            'date'       => $dateStr,
            'dateObj'    => $dt,
            'prevDate'   => $prevDate,
            'nextDate'   => $nextDate,
            'isToday'    => ($dateStr === $today),
            'grouped'    => $grouped,
            'totalCal'   => $totalCal,
            'totalProt'  => $totalProt,
            'totalGluc'  => $totalGluc,
            'totalLip'   => $totalLip,
            'calGoal'    => self::CAL_GOAL,
            'waterGoal'  => self::WATER_GOAL_ML,
            'userId'     => $userId,
            'repasTypes' => $this->repasTypes(),
        ]);
    }

    // ─── Page ajouter un aliment ─────────────────────────────────────
    #[Route('/ajouter', name: 'nutrition_ajouter', methods: ['GET'])]
    public function ajouter(
        Request $request,
        AlimentRepository $alimentRepo
    ): Response {
        $repas = $request->query->get('repas', 'Déjeuner');
        $date  = $request->query->get('date', (new \DateTime())->format('Y-m-d'));

        if (!in_array($repas, array_keys($this->repasTypes()))) {
            $repas = 'Déjeuner';
        }

        $aliments = $alimentRepo->findAllOrdered();

        return $this->render('nutrition/ajouter.html.twig', [
            'repas'      => $repas,
            'date'       => $date,
            'aliments'   => $aliments,
            'repasTypes' => $this->repasTypes(),
        ]);
    }

    // ─── API : données journal pour une date ─────────────────────────
    #[Route('/api/journal', name: 'nutrition_api_journal', methods: ['GET'])]
    public function apiJournal(
        Request $request,
        ConsommationRepository $consRepo
    ): JsonResponse {
        $dateStr = $request->query->get('date', (new \DateTime())->format('Y-m-d'));

        try {
            $dt = new \DateTime($dateStr);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'message' => 'Date invalide.'], 400);
        }

        $userId        = self::DEMO_USER_ID;
        $consommations = $consRepo->findByUserAndDate($userId, $dt);
        $grouped       = $this->groupByRepas($consommations);

        $result = [];
        foreach ($grouped as $repas => $items) {
            $result[$repas] = array_map([$this, 'consToArray'], $items);
        }

        return new JsonResponse([
            'success'   => true,
            'grouped'   => $result,
            'totalCal'  => $consRepo->sumCaloriesByUserAndDate($userId, $dt),
            'totalProt' => $consRepo->sumProtByUserAndDate($userId, $dt),
            'totalGluc' => $consRepo->sumGlucByUserAndDate($userId, $dt),
            'totalLip'  => $consRepo->sumLipByUserAndDate($userId, $dt),
        ]);
    }

    // ─── API : recherche aliments ────────────────────────────────────
    #[Route('/api/aliments', name: 'nutrition_api_aliments', methods: ['GET'])]
    public function apiAliments(
        Request $request,
        AlimentRepository $repo
    ): JsonResponse {
        $q        = trim($request->query->get('q', ''));
        $aliments = $q ? $repo->search($q) : $repo->findAllOrdered();

        return new JsonResponse(array_map(fn($a) => [
            'id'        => $a->getId(),
            'nom'       => $a->getNomAliment(),
            'cal_100g'  => $a->getCaloriesPour100g(),
            'proteines' => $a->getProteines(),
            'glucides'  => $a->getGlucides(),
            'lipides'   => $a->getLipides(),
        ], $aliments));
    }

    // ─── API : ajouter une consommation ─────────────────────────────
    #[Route('/api/ajouter', name: 'nutrition_api_ajouter', methods: ['POST'])]
    public function apiAjouter(
        Request $request,
        EntityManagerInterface $em,
        AlimentRepository $alimentRepo,
        ConsommationRepository $consRepo
    ): JsonResponse {
        $data   = json_decode($request->getContent(), true) ?? [];
        $errors = [];

        if (empty($data['aliment_id'])) {
            $errors['aliment'] = 'Veuillez sélectionner un aliment.';
        }
        if (!isset($data['poids_grammes']) || (float)$data['poids_grammes'] <= 0) {
            $errors['poids'] = 'La quantité doit être supérieure à 0 g.';
        }
        if (empty($data['type_repas'])) {
            $errors['repas'] = 'Le type de repas est requis.';
        }
        if (empty($data['date'])) {
            $errors['date'] = 'La date est requise.';
        }

        if ($errors) {
            return new JsonResponse(['success' => false, 'errors' => $errors], 422);
        }

        $aliment = $alimentRepo->find((int)$data['aliment_id']);
        if (!$aliment) {
            return new JsonResponse(['success' => false, 'errors' => ['aliment' => 'Aliment introuvable.']], 404);
        }

        try {
            $dt = new \DateTime($data['date']);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'errors' => ['date' => 'Date invalide.']], 400);
        }

        // Validate type_repas
        if (!in_array($data['type_repas'], array_keys($this->repasTypes()))) {
            return new JsonResponse(['success' => false, 'errors' => ['repas' => 'Type de repas invalide.']], 422);
        }

        $c = new Consommation();
        $c->setAliment($aliment);
        $c->setUserId(self::DEMO_USER_ID);
        $c->setDateConsommation($dt);
        $c->setTypeRepas($data['type_repas']);
        $c->setPoidsGrammes((int)round((float)$data['poids_grammes']));
        $c->setQuantiteEauMl(!empty($data['eau_ml']) ? (int)$data['eau_ml'] : null);

        $em->persist($c);
        $em->flush();

        return new JsonResponse([
            'success'      => true,
            'consommation' => $this->consToArray($c),
            'totalCal'     => $consRepo->sumCaloriesByUserAndDate(self::DEMO_USER_ID, $dt),
            'totalProt'    => $consRepo->sumProtByUserAndDate(self::DEMO_USER_ID, $dt),
            'totalGluc'    => $consRepo->sumGlucByUserAndDate(self::DEMO_USER_ID, $dt),
            'totalLip'     => $consRepo->sumLipByUserAndDate(self::DEMO_USER_ID, $dt),
        ]);
    }

    // ─── API : modifier une consommation ────────────────────────────
    #[Route('/api/modifier/{id}', name: 'nutrition_api_modifier', methods: ['POST', 'PUT'])]
    public function apiModifier(
        int $id,
        Request $request,
        EntityManagerInterface $em,
        ConsommationRepository $consRepo
    ): JsonResponse {
        $c = $consRepo->find($id);
        if (!$c || $c->getUserId() !== self::DEMO_USER_ID) {
            return new JsonResponse(['success' => false, 'message' => 'Consommation introuvable.'], 404);
        }

        $data   = json_decode($request->getContent(), true) ?? [];
        $errors = [];

        if (!isset($data['poids_grammes']) || (float)$data['poids_grammes'] <= 0) {
            $errors['poids'] = 'La quantité doit être supérieure à 0 g.';
        }

        if ($errors) {
            return new JsonResponse(['success' => false, 'errors' => $errors], 422);
        }

        $c->setPoidsGrammes((int)round((float)$data['poids_grammes']));
        $em->flush();

        $dt = $c->getDateConsommation();
        return new JsonResponse([
            'success'      => true,
            'consommation' => $this->consToArray($c),
            'totalCal'     => $consRepo->sumCaloriesByUserAndDate(self::DEMO_USER_ID, $dt),
            'totalProt'    => $consRepo->sumProtByUserAndDate(self::DEMO_USER_ID, $dt),
            'totalGluc'    => $consRepo->sumGlucByUserAndDate(self::DEMO_USER_ID, $dt),
            'totalLip'     => $consRepo->sumLipByUserAndDate(self::DEMO_USER_ID, $dt),
        ]);
    }

    // ─── API : supprimer une consommation ───────────────────────────
    #[Route('/api/supprimer/{id}', name: 'nutrition_api_supprimer', methods: ['POST', 'DELETE'])]
    public function apiSupprimer(
        int $id,
        EntityManagerInterface $em,
        ConsommationRepository $consRepo
    ): JsonResponse {
        $c = $consRepo->find($id);
        if (!$c || $c->getUserId() !== self::DEMO_USER_ID) {
            return new JsonResponse(['success' => false, 'message' => 'Consommation introuvable.'], 404);
        }

        $dt = clone $c->getDateConsommation();
        $em->remove($c);
        $em->flush();

        return new JsonResponse([
            'success'   => true,
            'totalCal'  => $consRepo->sumCaloriesByUserAndDate(self::DEMO_USER_ID, $dt),
            'totalProt' => $consRepo->sumProtByUserAndDate(self::DEMO_USER_ID, $dt),
            'totalGluc' => $consRepo->sumGlucByUserAndDate(self::DEMO_USER_ID, $dt),
            'totalLip'  => $consRepo->sumLipByUserAndDate(self::DEMO_USER_ID, $dt),
        ]);
    }

    // ─── Helpers privés ─────────────────────────────────────────────

    private function repasTypes(): array
    {
        return [
            'Petit-déjeuner' => ['icon' => '🌅', 'color' => '#F59E0B'],
            'Déjeuner'       => ['icon' => '☀️',  'color' => '#10B981'],
            'Dîner'          => ['icon' => '🌙', 'color' => '#6366F1'],
            'Snack'          => ['icon' => '🍎', 'color' => '#F43F5E'],
        ];
    }

    private function groupByRepas(array $consommations): array
    {
        $types = [
            'Petit-déjeuner' => [],
            'Déjeuner'       => [],
            'Dîner'          => [],
            'Snack'          => [],
        ];

        foreach ($consommations as $c) {
            $t = $c->getTypeRepas();
            if (!array_key_exists($t, $types)) {
                $types[$t] = [];
            }
            $types[$t][] = $c;
        }

        return $types;
    }

    private function consToArray(Consommation $c): array
    {
        return [
            'id'          => $c->getId(),
            'aliment_id'  => $c->getAliment()?->getId(),
            'aliment_nom' => $c->getAliment()?->getNomAliment(),
            'cal_100g'    => $c->getAliment()?->getCaloriesPour100g(),
            'proteines'   => round($c->getProteines(), 1),
            'glucides'    => round($c->getGlucides(), 1),
            'lipides'     => round($c->getLipides(), 1),
            'poids'       => $c->getPoidsGrammes(),
            'calories'    => round($c->getCalories(), 1),
            'type_repas'  => $c->getTypeRepas(),
            'date'        => $c->getDateConsommation()?->format('Y-m-d'),
            'eau_ml'      => $c->getQuantiteEauMl(),
        ];
    }
}