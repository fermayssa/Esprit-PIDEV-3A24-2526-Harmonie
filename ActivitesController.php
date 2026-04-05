<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Repository\ActiviteRepository;
use App\Repository\ExerciceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/activites')]
class ActivitesController extends AbstractController
{
    // ─── Demo user ID (change to real auth later) ───────────────────
    private const DEMO_USER_ID = 3;

    // ─── Main page ──────────────────────────────────────────────────
    #[Route('', name: 'activites', methods: ['GET'])]
    public function index(
        ExerciceRepository $exerciceRepo,
        ActiviteRepository $activiteRepo
    ): Response {
        $userId   = self::DEMO_USER_ID;
        $exercices = $exerciceRepo->findAllOrdered();
        $grouped  = $activiteRepo->findByUserGroupedByDate($userId);
        $stats    = [
            'sessions'  => count($grouped),
            'minutes'   => $activiteRepo->sumMinutesByUser($userId),
            'calories'  => $activiteRepo->sumCaloriesByUser($userId),
        ];

        return $this->render('activites/index.html.twig', [
            'exercices' => $exercices,
            'grouped'   => $grouped,
            'stats'     => $stats,
            'userId'    => $userId,
        ]);
    }

    // ─── API: list all activités for a user ─────────────────────────
    #[Route('/api/list', name: 'activites_api_list', methods: ['GET'])]
    public function apiList(ActiviteRepository $repo): JsonResponse
    {
        $userId  = self::DEMO_USER_ID;
        $grouped = $repo->findByUserGroupedByDate($userId);
        $result  = [];

        foreach ($grouped as $date => $acts) {
            $exercises = [];
            foreach ($acts as $a) {
                $exercises[] = $this->activiteToArray($a);
            }
            $result[] = [
                'date'      => $date,
                'exercises' => $exercises,
            ];
        }

        $stats = [
            'sessions' => count($grouped),
            'minutes'  => $repo->sumMinutesByUser($userId),
            'calories' => $repo->sumCaloriesByUser($userId),
        ];

        return new JsonResponse(['sessions' => $result, 'stats' => $stats]);
    }

    // ─── API: add one activité ───────────────────────────────────────
    #[Route('/api/add', name: 'activites_api_add', methods: ['POST'])]
    public function apiAdd(
        Request $request,
        EntityManagerInterface $em,
        ExerciceRepository $exerciceRepo,
        ActiviteRepository $activiteRepo
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);

        // Validation
        $errors = [];
        if (empty($data['exercice_id'])) {
            $errors['exercice'] = 'Veuillez sélectionner un exercice.';
        }
        if (empty($data['duree_minutes']) || (int)$data['duree_minutes'] < 1 || (int)$data['duree_minutes'] > 300) {
            $errors['duree'] = 'La durée est requise (1 – 300 min).';
        }
        if (empty($data['date_activite'])) {
            $errors['date'] = 'La date est requise.';
        }

        if ($errors) {
            return new JsonResponse(['success' => false, 'errors' => $errors], 422);
        }

        $exercice = $exerciceRepo->find((int)$data['exercice_id']);
        if (!$exercice) {
            return new JsonResponse(['success' => false, 'errors' => ['exercice' => 'Exercice introuvable.']], 404);
        }

        $activite = new Activite();
        $activite->setExercice($exercice);
        $activite->setUserId(self::DEMO_USER_ID);
        $activite->setDateActivite(new \DateTime($data['date_activite']));
        $activite->setDureeMinutes((int)$data['duree_minutes']);
        $activite->setCaloriesBrulees(!empty($data['calories_brulees']) ? (int)$data['calories_brulees'] : null);
        $activite->setNbSeries(!empty($data['nb_series']) ? (int)$data['nb_series'] : null);
        $activite->setNbRepetitions(!empty($data['nb_repetitions']) ? (int)$data['nb_repetitions'] : null);
        $activite->setPoids(!empty($data['poids']) ? (float)$data['poids'] : null);
        $activite->setNotes(!empty($data['notes']) ? trim($data['notes']) : null);

        $em->persist($activite);
        $em->flush();

        // Return updated stats
        $userId  = self::DEMO_USER_ID;
        $grouped = $activiteRepo->findByUserGroupedByDate($userId);
        $stats   = [
            'sessions' => count($grouped),
            'minutes'  => $activiteRepo->sumMinutesByUser($userId),
            'calories' => $activiteRepo->sumCaloriesByUser($userId),
        ];

        return new JsonResponse([
            'success'  => true,
            'activite' => $this->activiteToArray($activite),
            'stats'    => $stats,
        ]);
    }

    // ─── API: update one activité ────────────────────────────────────
    #[Route('/api/update/{id}', name: 'activites_api_update', methods: ['PUT', 'POST'])]
    public function apiUpdate(
        int $id,
        Request $request,
        EntityManagerInterface $em,
        ActiviteRepository $activiteRepo
    ): JsonResponse {
        $activite = $activiteRepo->find($id);
        if (!$activite || $activite->getUserId() !== self::DEMO_USER_ID) {
            return new JsonResponse(['success' => false, 'message' => 'Activité introuvable.'], 404);
        }

        $data   = json_decode($request->getContent(), true);
        $errors = [];

        if (empty($data['duree_minutes']) || (int)$data['duree_minutes'] < 1 || (int)$data['duree_minutes'] > 300) {
            $errors['duree'] = 'La durée est requise (1 – 300 min).';
        }
        if ($errors) {
            return new JsonResponse(['success' => false, 'errors' => $errors], 422);
        }

        $activite->setDureeMinutes((int)$data['duree_minutes']);
        if (isset($data['calories_brulees'])) {
            $activite->setCaloriesBrulees($data['calories_brulees'] !== '' ? (int)$data['calories_brulees'] : null);
        }
        if (isset($data['nb_series'])) {
            $activite->setNbSeries($data['nb_series'] !== '' ? (int)$data['nb_series'] : null);
        }
        if (isset($data['nb_repetitions'])) {
            $activite->setNbRepetitions($data['nb_repetitions'] !== '' ? (int)$data['nb_repetitions'] : null);
        }
        if (isset($data['poids'])) {
            $activite->setPoids($data['poids'] !== '' ? (float)$data['poids'] : null);
        }
        if (isset($data['notes'])) {
            $activite->setNotes(trim($data['notes']) ?: null);
        }

        $em->flush();

        $userId  = self::DEMO_USER_ID;
        $grouped = $activiteRepo->findByUserGroupedByDate($userId);
        $stats   = [
            'sessions' => count($grouped),
            'minutes'  => $activiteRepo->sumMinutesByUser($userId),
            'calories' => $activiteRepo->sumCaloriesByUser($userId),
        ];

        return new JsonResponse([
            'success'  => true,
            'activite' => $this->activiteToArray($activite),
            'stats'    => $stats,
        ]);
    }

    // ─── API: delete one activité ────────────────────────────────────
    #[Route('/api/delete/{id}', name: 'activites_api_delete', methods: ['DELETE', 'POST'])]
    public function apiDelete(
        int $id,
        EntityManagerInterface $em,
        ActiviteRepository $activiteRepo
    ): JsonResponse {
        $activite = $activiteRepo->find($id);
        if (!$activite || $activite->getUserId() !== self::DEMO_USER_ID) {
            return new JsonResponse(['success' => false, 'message' => 'Activité introuvable.'], 404);
        }

        $em->remove($activite);
        $em->flush();

        $userId  = self::DEMO_USER_ID;
        $grouped = $activiteRepo->findByUserGroupedByDate($userId);
        $stats   = [
            'sessions' => count($grouped),
            'minutes'  => $activiteRepo->sumMinutesByUser($userId),
            'calories' => $activiteRepo->sumCaloriesByUser($userId),
        ];

        return new JsonResponse(['success' => true, 'stats' => $stats]);
    }

    // ─── Helper ─────────────────────────────────────────────────────
    private function activiteToArray(Activite $a): array
    {
        return [
            'id'              => $a->getId(),
            'exercice_id'     => $a->getExercice()?->getId(),
            'exercice_nom'    => $a->getExercice()?->getNomExercice(),
            'exercice_type'   => $a->getExercice()?->getTypeExercice(),
            'exercice_video'  => $a->getExercice()?->getVideoExercice(),
            'date_activite'   => $a->getDateActivite()?->format('Y-m-d'),
            'duree_minutes'   => $a->getDureeMinutes(),
            'calories_brulees'=> $a->getCaloriesBrulees(),
            'nb_series'       => $a->getNbSeries(),
            'nb_repetitions'  => $a->getNbRepetitions(),
            'poids'           => $a->getPoids(),
            'notes'           => $a->getNotes(),
        ];
    }
}