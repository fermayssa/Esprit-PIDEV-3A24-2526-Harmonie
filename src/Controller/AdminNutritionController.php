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

    // ── Page principale avec pagination + filtres ────────────────────
    #[Route('', name: 'admin_nutrition_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        // ── Lecture des filtres depuis la requête GET ─────────────────
        $filters = [
            'search'    => $request->query->get('search',    ''),
            'cal_min'   => $request->query->get('cal_min',   ''),
            'cal_max'   => $request->query->get('cal_max',   ''),
            'prot_min'  => $request->query->get('prot_min',  ''),
            'prot_max'  => $request->query->get('prot_max',  ''),
            'id_from'   => $request->query->get('id_from',   ''),
            'id_to'     => $request->query->get('id_to',     ''),
            'sort'      => $request->query->get('orderby',   'nomAliment'),
            'direction' => $request->query->get('orderdir',  'ASC'),
        ];

        // Validation de la direction pour éviter les injections
        if (!in_array(strtoupper($filters['direction']), ['ASC', 'DESC'])) {
            $filters['direction'] = 'ASC';
        }

        // Validation du champ de tri
        $allowedSorts = ['nomAliment', 'caloriesPour100g', 'proteines', 'glucides', 'lipides', 'id'];
        if (!in_array($filters['sort'], $allowedSorts)) {
            $filters['sort'] = 'nomAliment';
        }

        // ── Validation des bornes numériques ─────────────────────────
        foreach (['cal_min', 'cal_max', 'prot_min', 'prot_max', 'id_from', 'id_to'] as $key) {
            $val = $filters[$key];
            if ($val !== '' && (!is_numeric($val) || (float)$val < 0)) {
                $filters[$key] = '';
            }
        }

        // cal_min <= cal_max
        if ($filters['cal_min'] !== '' && $filters['cal_max'] !== ''
            && (int)$filters['cal_min'] > (int)$filters['cal_max']) {
            [$filters['cal_min'], $filters['cal_max']] = [$filters['cal_max'], $filters['cal_min']];
        }

        // prot_min <= prot_max
        if ($filters['prot_min'] !== '' && $filters['prot_max'] !== ''
            && (float)$filters['prot_min'] > (float)$filters['prot_max']) {
            [$filters['prot_min'], $filters['prot_max']] = [$filters['prot_max'], $filters['prot_min']];
        }

        // ── QueryBuilder filtré ───────────────────────────────────────
        $qb = $this->repo->createFilteredQueryBuilder($filters);

        // ── Pagination manuelle (sans KnpPaginator) ──────────────────
        $limit = max(5, min(100, (int)$request->query->get('limit', 20)));
        $page = max(1, (int)$request->query->get('page', 1));

        // Appliquer la pagination manuellement
        $qb->setMaxResults($limit);
        $qb->setFirstResult(($page - 1) * $limit);

        $aliments = $qb->getQuery()->getResult();

        // Créer un objet pagination simple
        $totalItems = $this->repo->countFiltered($filters);
        $totalPages = ceil($totalItems / $limit);

        $pagination = (object) [
            'items' => $aliments,
            'currentPageNumber' => $page,
            'pageCount' => $totalPages,
            'numItemsPerPage' => $limit,
            'totalItemCount' => $totalItems,
        ];

        // ── Stats globales pour les placeholders des filtres ──────────
        $stats = $this->repo->getGlobalStats();

        // ── Nombre total de résultats filtrés ─────────────────────────
        $totalFiltered = $this->repo->countFiltered($filters);

        // ── Indicateur « filtres actifs » ─────────────────────────────
        $hasActiveFilters = array_reduce(
            ['search', 'cal_min', 'cal_max', 'prot_min', 'prot_max', 'id_from', 'id_to'],
            fn(bool $carry, string $key) => $carry || ($filters[$key] !== ''),
            false
        );

        return $this->render('admin/nutrition.html.twig', [
            'pagination'       => $pagination,
            'filters'          => $filters,
            'stats'            => $stats,
            'totalFiltered'    => $totalFiltered,
            'hasActiveFilters' => $hasActiveFilters,
            'limit'            => $limit,
        ]);
    }

    // ── API JSON : liste paginée (pour rechargement AJAX partiel) ────
    #[Route('/api/list', name: 'admin_nutrition_list', methods: ['GET'])]
    public function list(Request $request): JsonResponse
    {
        $filters = [
            'search'    => $request->query->get('search',    ''),
            'cal_min'   => $request->query->get('cal_min',   ''),
            'cal_max'   => $request->query->get('cal_max',   ''),
            'prot_min'  => $request->query->get('prot_min',  ''),
            'prot_max'  => $request->query->get('prot_max',  ''),
            'id_from'   => $request->query->get('id_from',   ''),
            'id_to'     => $request->query->get('id_to',     ''),
            'sort'      => $request->query->get('orderby',   'nomAliment'),
            'direction' => $request->query->get('orderdir',  'ASC'),
        ];

        $aliments = $this->repo->createFilteredQueryBuilder($filters)->getQuery()->getResult();

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

        $data  = json_decode($request->getContent(), true);
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
        if (!$data) {
            return 'Aucune donnée reçue.';
        }
        if (empty(trim($data['nomAliment'] ?? ''))) {
            return 'Le nom est obligatoire.';
        }
        foreach (['calories', 'proteines', 'lipides', 'glucides'] as $f) {
            $v = $data[$f] ?? null;
            if ($v === null || $v === '' || !is_numeric($v) || (float) $v < 0) {
                return "Valeur invalide pour le champ « $f ».";
            }
        }
        if ((float) $data['calories'] > 9000) {
            return 'Calories trop élevées (max 9000).';
        }
        foreach (['proteines', 'lipides', 'glucides'] as $f) {
            if ((float) $data[$f] > 100) {
                return "Valeur trop élevée pour « $f » (max 100g/100g).";
            }
        }

        return null;
    }
}