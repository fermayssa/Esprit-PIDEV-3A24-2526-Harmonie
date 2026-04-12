<?php
// Contrôleur admin pour gérer les sessions de méditation

// Injection des dépendances (repository, entity manager, service IA)

// Affiche la liste des sessions avec recherche et tri

// Recherche des sessions en AJAX et retourne un JSON

// Création d'une nouvelle session de méditation

// Association de la session à l'utilisateur connecté

// Ajout des conseils générés par l'IA

// Validation du contenu des conseils avant insertion

// Sauvegarde des données en base

// Affichage d'une session de méditation

// Modification d'une session existante

// Sauvegarde après modification

// Suppression d'une session avec vérification CSRF

// Génération d'une session via intelligence artificielle

// Vérification du thème avant génération IA

// Gestion des erreurs lors de l'appel à l'IA

// Régénération des conseils via IA

// Suppression des anciens conseils

// Ajout des nouveaux conseils générés

// Génération d'un PDF contenant la liste des sessions

// Génération d'un PDF détaillé pour une session
namespace App\Controller;

use App\Entity\User;
use App\Repository\JournalHumeurRepository;
use App\Repository\UserRepository;
use App\Service\GroqService;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/journal')]
class AdminJournalController extends AbstractController
{
    public function __construct(
        private readonly JournalHumeurRepository $journalRepo,
        private readonly UserRepository          $userRepo,
        private readonly GroqService             $groq,
        private readonly EntityManagerInterface  $em,
    ) {}

    #[Route('', name: 'admin_journal_index', methods: ['GET'])]
    public function index(): Response
    {
        $users    = $this->userRepo->findAll();
        $userData = array_map(function (User $user) {
            return [
                'user'  => $user,
                'stats' => $this->journalRepo->moodStats($user),
            ];
        }, $users);

        $userData = array_filter($userData, fn($u) => $u['stats']['total'] > 0);

        return $this->render('journal/admin/index.html.twig', [
            'userData' => array_values($userData),
        ]);
    }

    #[Route('/user/{id}', name: 'admin_journal_user', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function userJournal(User $user): Response
    {
        $entries = $this->journalRepo->findAllByUser($user);
        $stats   = $this->journalRepo->moodStats($user);
        $trend   = $this->journalRepo->scoreTrend($user, 30);
        $dist    = $this->journalRepo->moodDistribution($user);

        return $this->render('journal/admin/user.html.twig', compact('user', 'entries', 'stats', 'trend', 'dist'));
    }

    #[Route('/user/{id}/rapport', name: 'admin_journal_rapport', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function rapport(User $user): Response
    {
        $entries = $this->journalRepo->findAllByUser($user);

        if (empty($entries)) {
            $this->addFlash('error', 'Cet étudiant n\'a aucune entrée dans son journal.');
            return $this->redirectToRoute('admin_journal_index');
        }

        $stats = $this->journalRepo->moodStats($user);

        $lines = ["Résumé anonymisé du journal de l'étudiant(e) :", ""];
        foreach ($entries as $e) {
            $lines[] = sprintf(
                "- %s : humeur=%s, score=%d/5",
                $e->getDateJournal()->format('d/m/Y'),
                $e->getHumeur()->label(),
                $e->getScore()
            );
        }
        $lines[] = "";
        $lines[] = sprintf("Score moyen : %.2f/5 sur %d entrées.", $stats['avgScore'], $stats['total']);

        $journalSummary = implode("\n", $lines);
        $studentName    = $user->getFirstName() . ' ' . $user->getLastName();

        try {
            $aiText = $this->groq->generateWellbeingReport($studentName, $journalSummary);
        } catch (\Throwable $e) {
            $aiText = "Rapport non disponible (erreur de génération IA).";
        }

        $html = $this->renderView('journal/admin/rapport_pdf.html.twig', [
            'user'        => $user,
            'entries'     => $entries,
            'stats'       => $stats,
            'aiText'      => $aiText,
            'generatedAt' => new \DateTime(),
        ]);

        $options = new Options();
        $options->set('defaultFont', 'Helvetica');
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $filename = 'rapport_bienetre_' . strtolower(str_replace(' ', '_', $studentName)) . '_' . date('Ymd') . '.pdf';

        return new Response($dompdf->output(), 200, [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '"',
        ]);
    }
}
