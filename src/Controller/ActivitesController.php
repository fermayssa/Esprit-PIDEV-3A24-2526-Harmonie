<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Repository\ActiviteRepository;
use App\Repository\ExerciceRepository;
use App\Service\QrCodeService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

/**
 * Contrôleur du Journal d'Activités — Harmony
 *
 * Toutes les routes nécessitent ROLE_USER (protège getUser()->getId()).
 */
#[IsGranted('ROLE_USER')]
#[Route('/activites')]
class ActivitesController extends AbstractController
{

    // ─── Main page ──────────────────────────────────────────────────
    #[Route('', name: 'activites', methods: ['GET'])]
    public function index(
        ExerciceRepository $exerciceRepo,
        ActiviteRepository $activiteRepo
    ): Response {
        $userId    = $this->getUser()->getId();
        $exercices = $exerciceRepo->findAllOrdered();
        $grouped   = $activiteRepo->findByUserGroupedByDate($userId);
        $stats     = [
            'sessions' => count($grouped),
            'minutes'  => $activiteRepo->sumMinutesByUser($userId),
            'calories' => $activiteRepo->sumCaloriesByUser($userId),
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
        $userId  = $this->getUser()->getId();
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

        $errors = [];
        if (empty($data['exercice_id'])) $errors['exercice'] = 'Veuillez sélectionner un exercice.';
        if (empty($data['duree_minutes']) || (int)$data['duree_minutes'] < 1 || (int)$data['duree_minutes'] > 300) {
            $errors['duree'] = 'La durée est requise (1 – 300 min).';
        }
        if (empty($data['date_activite'])) $errors['date'] = 'La date est requise.';

        if ($errors) {
            return new JsonResponse(['success' => false, 'errors' => $errors], 422);
        }

        $exercice = $exerciceRepo->find((int)$data['exercice_id']);
        if (!$exercice) {
            return new JsonResponse(['success' => false, 'errors' => ['exercice' => 'Exercice introuvable.']], 404);
        }

        $activite = new Activite();
        $activite->setExercice($exercice);
        $activite->setUserId($this->getUser()->getId());
        $activite->setDateActivite(new \DateTime($data['date_activite']));
        $activite->setDureeMinutes((int)$data['duree_minutes']);
        $activite->setCaloriesBrulees(!empty($data['calories_brulees']) ? (int)$data['calories_brulees'] : null);
        $activite->setNbSeries(!empty($data['nb_series']) ? (int)$data['nb_series'] : null);
        $activite->setNbRepetitions(!empty($data['nb_repetitions']) ? (int)$data['nb_repetitions'] : null);
        $activite->setPoids(!empty($data['poids']) ? (float)$data['poids'] : null);
        $activite->setNotes(!empty($data['notes']) ? trim($data['notes']) : null);

        $em->persist($activite);
        $em->flush();

        $userId  = $this->getUser()->getId();
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
        if (!$activite || $activite->getUserId() !== $this->getUser()->getId()) {
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
        if (isset($data['calories_brulees'])) $activite->setCaloriesBrulees($data['calories_brulees'] !== '' ? (int)$data['calories_brulees'] : null);
        if (isset($data['nb_series'])) $activite->setNbSeries($data['nb_series'] !== '' ? (int)$data['nb_series'] : null);
        if (isset($data['nb_repetitions'])) $activite->setNbRepetitions($data['nb_repetitions'] !== '' ? (int)$data['nb_repetitions'] : null);
        if (isset($data['poids'])) $activite->setPoids($data['poids'] !== '' ? (float)$data['poids'] : null);
        if (isset($data['notes'])) $activite->setNotes(trim($data['notes']) ?: null);

        $em->flush();

        $userId  = $this->getUser()->getId();
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
        if (!$activite || $activite->getUserId() !== $this->getUser()->getId()) {
            return new JsonResponse(['success' => false, 'message' => 'Activité introuvable.'], 404);
        }

        $em->remove($activite);
        $em->flush();

        $userId  = $this->getUser()->getId();
        $grouped = $activiteRepo->findByUserGroupedByDate($userId);
        $stats   = [
            'sessions' => count($grouped),
            'minutes'  => $activiteRepo->sumMinutesByUser($userId),
            'calories' => $activiteRepo->sumCaloriesByUser($userId),
        ];

        return new JsonResponse(['success' => true, 'stats' => $stats]);
    }

    // ─── QR CODE SESSION ─────────────────────────────────────────────
    /**
     * Génère un QR code PNG (Data URI) pour la séance d'une date donnée.
     *
     * CORRECTIONS APPORTÉES :
     *  1. catch (\Throwable $e) au lieu de catch (\Exception $e)
     *     → attrape AUSSI les \Error PHP (class not found, TypeError, etc.)
     *     → était la cause principale des erreurs 500 non gérées
     *
     *  2. Chemins du logo : essaie plusieurs emplacements courants
     *     → évite l'erreur ".png.png" et le dossier "images" vs "image"
     *
     *  3. Vérification de l'utilisateur déjà en place (inchangée)
     *
     * Route : GET /activites/qr/{date}  (ex: /activites/qr/2025-04-07)
     * Protégée par : #[IsGranted('ROLE_USER')] sur la classe
     */
    #[Route('/qr/{date}', name: 'activites_qr_session', methods: ['GET'],
        requirements: ['date' => '\d{4}-\d{2}-\d{2}'])]
    public function qrSession(
        string $date,
        ActiviteRepository $activiteRepo,
        QrCodeService $qrCodeService
    ): JsonResponse {
        // ── \Throwable couvre \Exception ET \Error (class not found, TypeError, etc.) ──
        try {
            // ── Vérification de l'utilisateur ─────────────────────────────────
            $user = $this->getUser();
            if (!$user) {
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Utilisateur non connecté.',
                ], 401);
            }
            $userId = $user->getId();

            // ── Validation de la date ──────────────────────────────────────────
            $dateObj = \DateTime::createFromFormat('Y-m-d', $date);
            if (!$dateObj) {
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Format de date invalide. Attendu : YYYY-MM-DD.',
                ], 400);
            }

            // ── Requête directe sur la base ────────────────────────────────────
            $dateStart = (clone $dateObj)->setTime(0, 0, 0);
            $dateEnd   = (clone $dateObj)->setTime(23, 59, 59);

            $activites = $activiteRepo->createQueryBuilder('a')
                ->join('a.exercice', 'e')
                ->where('a.userId = :uid')
                ->andWhere('a.dateActivite BETWEEN :date_start AND :date_end')
                ->setParameter('uid', $userId)
                ->setParameter('date_start', $dateStart)
                ->setParameter('date_end', $dateEnd)
                ->getQuery()
                ->getResult();

            if (empty($activites)) {
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Aucune activité trouvée pour la date ' . $date . '.',
                ], 404);
            }

            $exercises = array_map([$this, 'activiteToArray'], $activites);

            // ── Date en français ───────────────────────────────────────────────
            $months    = [
                1  => 'janvier',  2  => 'février',  3  => 'mars',
                4  => 'avril',    5  => 'mai',       6  => 'juin',
                7  => 'juillet',  8  => 'août',      9  => 'septembre',
                10 => 'octobre',  11 => 'novembre',  12 => 'décembre',
            ];
            $dateLabel = $dateObj->format('j') . ' ' . $months[(int)$dateObj->format('n')] . ' ' . $dateObj->format('Y');

            // ── Recherche du logo dans plusieurs emplacements possibles ────────
            // CORRECTION BUG #2 : le chemin original avait ".png.png" et "images/"
            $projectDir = $this->getParameter('kernel.project_dir');
            $logoCandidates = [
                $projectDir . '/public/image/logo.png',           // chemin du module nutrition
                $projectDir . '/public/images/logo.png',          // chemin alternatif
                $projectDir . '/public/images/harmony-logo.png',  // sans double extension
                $projectDir . '/public/images/harmony.png',
                $projectDir . '/public/img/logo.png',
            ];
            $logoPath = null;
            foreach ($logoCandidates as $candidate) {
                if (file_exists($candidate)) {
                    $logoPath = $candidate;
                    break;
                }
            }
            // Si aucun logo trouvé, le QR code sera généré sans logo (pas bloquant)

            // ── Construction du message WhatsApp et génération du QR ──────────
            $waUrl     = $qrCodeService->buildWhatsAppUrl($dateLabel, $exercises);
            $qrDataUri = $qrCodeService->generateSessionQrCode($waUrl, $logoPath);

            // ── Statistiques de la séance ──────────────────────────────────────
            $totalMin = 0;
            $totalCal = 0;
            foreach ($exercises as $ex) {
                $totalMin += (int) ($ex['duree_minutes'] ?? 0);
                $totalCal += (int) ($ex['calories_brulees'] ?? 0);
            }

            return new JsonResponse([
                'success'   => true,
                'qr'        => $qrDataUri,
                'waUrl'     => $waUrl,
                'date'      => $date,
                'dateLabel' => $dateLabel,
                'nbEx'      => count($exercises),
                'totalMin'  => $totalMin,
                'totalCal'  => $totalCal,
            ]);

        } catch (\Throwable $e) {
            // ── CORRECTION BUG #1 : catch \Throwable attrape \Error aussi ─────
            // Avant : catch (\Exception $e) → ratait les \Error de PHP
            // (class not found, TypeError, etc.) → 500 HTML → "Erreur réseau" JS

            // En production, on log et on retourne un message propre
            // En dev, on peut activer le message complet
            $isDev = $this->getParameter('kernel.environment') === 'dev';

            return new JsonResponse([
                'success' => false,
                'message' => $isDev
                    ? 'Erreur QR Code : ' . $e->getMessage() . ' [' . get_class($e) . ']'
                    : 'Impossible de générer le QR code. Vérifiez que endroid/qr-code est installé.',
            ], 500);
        }
    }

    // ─── Bundle 2 : Bilan PDF KnpSnappy ─────────────────────────────
    #[Route('/bilan/pdf', name: 'activites_bilan_pdf', methods: ['GET'])]
    public function bilanPdf(
        ActiviteRepository $activiteRepo,
        Pdf $pdf
    ): Response {
        $userId  = $this->getUser()->getId();
        $grouped = $activiteRepo->findByUserGroupedByDate($userId);
        $stats   = [
            'sessions' => count($grouped),
            'minutes'  => $activiteRepo->sumMinutesByUser($userId),
            'calories' => $activiteRepo->sumCaloriesByUser($userId),
        ];

        $groupedData = [];
        foreach ($grouped as $date => $acts) {
            $exs = [];
            foreach ($acts as $a) {
                $exs[] = $this->activiteToArray($a);
            }
            $groupedData[$date] = $exs;
        }

        $html = $this->renderView('activites/bilan_pdf.html.twig', [
            'grouped'    => $groupedData,
            'stats'      => $stats,
            'exportDate' => new \DateTime(),
        ]);

        $pdfContent = $pdf->getOutputFromHtml($html, [
            'page-size'                => 'A4',
            'margin-top'               => '0mm',
            'margin-bottom'            => '0mm',
            'margin-left'              => '0mm',
            'margin-right'             => '0mm',
            'encoding'                 => 'UTF-8',
            'enable-local-file-access' => true,
            'no-outline'               => true,
            'print-media-type'         => true,
        ]);

        $filename = 'bilan-harmony-' . date('Y-m-d') . '.pdf';

        return new Response($pdfContent, 200, [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }

    // ─── Helper ─────────────────────────────────────────────────────
    private function activiteToArray(Activite $a): array
    {
        return [
            'id'               => $a->getId(),
            'exercice_id'      => $a->getExercice()?->getId(),
            'exercice_nom'     => $a->getExercice()?->getNomExercice(),
            'exercice_type'    => $a->getExercice()?->getTypeExercice(),
            'exercice_video'   => $a->getExercice()?->getVideoExercice(),
            'date_activite'    => $a->getDateActivite()?->format('Y-m-d'),
            'duree_minutes'    => $a->getDureeMinutes(),
            'calories_brulees' => $a->getCaloriesBrulees(),
            'nb_series'        => $a->getNbSeries(),
            'nb_repetitions'   => $a->getNbRepetitions(),
            'poids'            => $a->getPoids(),
            'notes'            => $a->getNotes(),
        ];
    }
}