<?php

namespace App\Controller\Api;

use App\Entity\Tache;
use App\Repository\CalendrierRepository;
use App\Repository\TacheRepository;
use App\Service\Kanban\KanbanRealtimeNotifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final class GithubWebhookController extends AbstractController
{
    public function __construct(
        #[Autowire('%env(string:GITHUB_WEBHOOK_SECRET)%')]
        private readonly ?string $webhookSecret,
    ) {
    }

    #[Route('/api/webhooks/github', name: 'api_webhooks_github', methods: ['POST'])]
    public function __invoke(
        Request $request,
        TacheRepository $tacheRepository,
        CalendrierRepository $calendrierRepository,
        EntityManagerInterface $em,
        KanbanRealtimeNotifier $notifier,
    ): JsonResponse {
        if (!$this->isValidSignature($request)) {
            return $this->json(['ok' => false, 'error' => 'Signature invalide'], 401);
        }

        $payload = json_decode($request->getContent(), true);
        if (!is_array($payload) || !isset($payload['issue'])) {
            return $this->json(['ok' => true]);
        }

        $issue = $payload['issue'];
        $repo = (string) ($payload['repository']['full_name'] ?? '');
        $number = (int) ($issue['number'] ?? 0);
        if ('' === $repo || 0 === $number) {
            return $this->json(['ok' => true]);
        }

        $task = $tacheRepository->findOneBy([
            'githubIssueNumber' => $number,
            'githubRepo' => $repo,
        ]);

        if (!$task instanceof Tache) {
            $task = new Tache();
            $task->setGithubIssueNumber($number);
            $task->setGithubRepo($repo);
            if ($cal = $calendrierRepository->findPrimary()) {
                $task->setCalendrier($cal);
            } else {
                return $this->json(['ok' => false, 'error' => 'Calendrier principal absent'], 500);
            }
            $em->persist($task);
        }

        $task->setNom((string) ($issue['title'] ?? $task->getNom()));
        $task->setNotes((string) ($issue['body'] ?? $task->getNotes()));
        $task->setStatutTache($this->mapIssueToStatus($issue));

        $em->flush();

        $notifier->dispatch('github.webhook', [
            'action' => (string) ($payload['action'] ?? 'updated'),
            'taskId' => $task->getId(),
            'issue' => $number,
            'repo' => $repo,
        ]);

        return $this->json(['ok' => true]);
    }

    private function mapIssueToStatus(array $issue): string
    {
        $state = (string) ($issue['state'] ?? 'open');
        $labels = array_map(
            static fn (array $l): string => strtolower((string) ($l['name'] ?? '')),
            is_array($issue['labels'] ?? null) ? $issue['labels'] : []
        );

        if ('closed' === $state) {
            return 'TERMINEE';
        }
        if (in_array('doing', $labels, true)) {
            return 'EN_COURS';
        }

        return 'A_FAIRE';
    }

    private function isValidSignature(Request $request): bool
    {
        $secret = trim((string) ($this->webhookSecret ?? ''));
        if ('' === $secret) {
            return true;
        }

        $signature = (string) $request->headers->get('X-Hub-Signature-256', '');
        if (!str_starts_with($signature, 'sha256=')) {
            return false;
        }

        $computed = 'sha256='.hash_hmac('sha256', $request->getContent(), $secret);

        return hash_equals($computed, $signature);
    }
}
