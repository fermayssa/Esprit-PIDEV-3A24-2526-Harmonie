<?php

namespace App\Controller;

use App\Entity\Aliment;
use App\Entity\Consommation;
use App\Repository\AlimentRepository;
use App\Repository\ConsommationRepository;
use App\Service\SpoonacularService;
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

    // ─────────────────────────────────────────────────────────────────────────
    // ══ NOUVEAU : Page Recettes Spoonacular ══════════════════════════════════
    // ─────────────────────────────────────────────────────────────────────────

    /**
     * Page principale du chercheur de recettes.
     * Route : GET /nutrition/recettes
     * Nom   : nutrition_recettes
     */
    #[Route('/recettes', name: 'nutrition_recettes', methods: ['GET'])]
    public function recettes(Request $request): Response
    {
        $date  = $request->query->get('date', (new \DateTime())->format('Y-m-d'));
        $repas = $request->query->get('repas', 'Déjeuner');

        return $this->render('nutrition/recettes.html.twig', [
            'date'       => $date,
            'repas'      => $repas,
            'repasTypes' => $this->repasTypes(),
        ]);
    }

    /**
     * API JSON : cherche des recettes par ingrédients via Spoonacular.
     * Route : GET /nutrition/api/recettes?ingredients=apple,oats,milk&number=8
     * Nom   : nutrition_api_recettes
     *
     * Réponse JSON :
     *   { success: true, recettes: [...] }
     *   { success: false, message: "..." }
     */
    #[Route('/api/recettes', name: 'nutrition_api_recettes', methods: ['GET'])]
    public function apiRecettes(
        Request $request,
        SpoonacularService $spoonacular
    ): JsonResponse {
        $ingredients = trim($request->query->get('ingredients', ''));
        $number      = min((int) $request->query->get('number', 8), 20); // max 20

        if ($ingredients === '') {
            return new JsonResponse([
                'success' => false,
                'message' => 'Veuillez saisir au moins un ingrédient.',
            ], 400);
        }

        try {
            $results  = $spoonacular->findByIngredients($ingredients, $number);
            $recettes = [];

            foreach ($results as $r) {
                // Extraire les noms des ingrédients utilisés / manquants
                $used    = array_map(fn($i) => $i['name'], $r['usedIngredients']    ?? []);
                $missed  = array_map(fn($i) => $i['name'], $r['missedIngredients']  ?? []);

                $recettes[] = [
                    'id'             => $r['id'],
                    'titre'          => $r['title'],
                    'image'          => $r['image'] ?? null,
                    'usedCount'      => $r['usedIngredientCount']   ?? 0,
                    'missedCount'    => $r['missedIngredientCount']  ?? 0,
                    'usedIngredients'   => $used,
                    'missedIngredients' => $missed,
                    'likes'          => $r['likes'] ?? 0,
                ];
            }

            return new JsonResponse([
                'success'  => true,
                'recettes' => $recettes,
                'total'    => count($recettes),
            ]);

        } catch (\RuntimeException $e) {
            return new JsonResponse([
                'success' => false,
                'message' => $e->getMessage(),
            ], 503);
        }
    }

    /**
     * API JSON : détails complets d'une recette (nutrition incluse).
     * Route : GET /nutrition/api/recette/{id}
     * Nom   : nutrition_api_recette_detail
     *
     * Réponse JSON :
     *   { success: true, recette: { id, titre, image, temps, portions, calories, proteines, glucides, lipides, ingredients: [...], sourceUrl } }
     *   { success: false, message: "..." }
     */
    #[Route('/api/recette/{id}', name: 'nutrition_api_recette_detail', methods: ['GET'])]
    public function apiRecetteDetail(
        int $id,
        SpoonacularService $spoonacular
    ): JsonResponse {
        if ($id <= 0) {
            return new JsonResponse(['success' => false, 'message' => 'ID de recette invalide.'], 400);
        }

        try {
            $data   = $spoonacular->getRecipeDetails($id);
            $macros = $spoonacular->extractMacros($data);

            // Liste des ingrédients formatée
            $ingredients = array_map(function ($ing) {
                return [
                    'nom'      => $ing['nameClean'] ?? $ing['name'] ?? '',
                    'quantite' => round($ing['amount'] ?? 0, 1),
                    'unite'    => $ing['unit'] ?? '',
                    'original' => $ing['original'] ?? '',
                ];
            }, $data['extendedIngredients'] ?? []);

            // Résumé HTML → texte simple (strip_tags côté PHP)
            $resume = strip_tags($data['summary'] ?? '');
            // Limiter à 300 caractères pour l'affichage dans la modal
            if (strlen($resume) > 300) {
                $resume = substr($resume, 0, 300) . '…';
            }

            return new JsonResponse([
                'success' => true,
                'recette' => [
                    'id'          => $data['id'],
                    'titre'       => $data['title'],
                    'image'       => $data['image'] ?? null,
                    'temps'       => $data['readyInMinutes'] ?? null,
                    'portions'    => $data['servings']       ?? 1,
                    'calories'    => $macros['calories'],
                    'proteines'   => $macros['proteines'],
                    'glucides'    => $macros['glucides'],
                    'lipides'     => $macros['lipides'],
                    'ingredients' => $ingredients,
                    'resume'      => $resume,
                    'sourceUrl'   => $data['sourceUrl'] ?? null,
                    'instructions'=> $data['sourceUrl'] ?? null,  // Redirige vers la source
                ],
            ]);

        } catch (\RuntimeException $e) {
            return new JsonResponse([
                'success' => false,
                'message' => $e->getMessage(),
            ], 503);
        }
    }

    // ─── API : ajouter une recette Spoonacular au journal ────────────
    #[Route('/api/ajouter-recette', name: 'nutrition_api_ajouter_recette', methods: ['POST'])]
    public function apiAjouterRecette(
        Request $request,
        AlimentRepository $alimentRepo,
        EntityManagerInterface $em
    ): JsonResponse {
        try {
            $data = json_decode($request->getContent(), true);

            // Validation des données
            $required = ['recipe_id', 'recipe_title', 'calories', 'meal_type', 'date'];
            foreach ($required as $field) {
                if (!isset($data[$field]) || trim($data[$field]) === '') {
                    return new JsonResponse([
                        'success' => false,
                        'message' => "Champ manquant: {$field}",
                    ], 400);
                }
            }

            $recipeId = (int)$data['recipe_id'];
            $recipeTitle = trim($data['recipe_title']);
            $calories = (float)$data['calories'];
            $mealType = trim($data['meal_type']);
            $dateStr = $data['date'];

            // Valider la date
            try {
                $dateConsommation = new \DateTime($dateStr);
            } catch (\Exception $e) {
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Date invalide.',
                ], 400);
            }

            // Valider le type de repas
            $allowedMeals = array_keys($this->repasTypes());
            if (!in_array($mealType, $allowedMeals)) {
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Type de repas invalide.',
                ], 400);
            }

            // Chercher ou créer un aliment "Recette Spoonacular - [titre]"
            $alimentName = "🍳 Recette: " . substr($recipeTitle, 0, 40);
            $aliment = $alimentRepo->findByName($alimentName);

            if (!$aliment) {
                // Créer un nouvel aliment pour la recette
                $aliment = new Aliment();
                $aliment->setNomAliment($alimentName);
                
                // Calculer les calories pour 100g en fonction des calories totales
                // Supposons 1 portion = 300g (valeur par défaut)
                $caloriesPer100g = round(($calories * 100) / 300);
                $aliment->setCaloriesPour100g($caloriesPer100g);
                
                // Macros : stocker une moyenne basée sur la portion
                $aliment->setProteines((float)($data['proteines'] ?? 20));
                $aliment->setGlucides((float)($data['glucides'] ?? 50));
                $aliment->setLipides((float)($data['lipides'] ?? 15));

                $em->persist($aliment);
                $em->flush();
            }

            // Créer une Consommation
            $consommation = new Consommation();
            $consommation->setAliment($aliment);
            $consommation->setTypeRepas($mealType);
            $consommation->setDateConsommation($dateConsommation);
            $consommation->setPoidsGrammes(300); // Supposé : 1 portion = 300g
            $consommation->setUserId(self::DEMO_USER_ID);

            $em->persist($consommation);
            $em->flush();

            return new JsonResponse([
                'success' => true,
                'message' => 'Recette ajoutée au journal avec succès.',
                'consommation_id' => $consommation->getId(),
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Erreur: ' . $e->getMessage(),
            ], 500);
        }
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