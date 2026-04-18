<?php

namespace App\Controller\Api;

use App\Entity\Evenement;
use App\Entity\Tache;
use App\Entity\User;
use App\Repository\CalendrierRepository;
use App\Repository\EvenementRepository;
use App\Repository\TacheRepository;
use App\Service\Kanban\KanbanRealtimeNotifier;
use App\Service\Telegram\TelegramNotifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/api/chat')]
final class ChatApiController extends AbstractController
{
    private const MAX_RETRIES = 3;

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly TacheRepository $tacheRepository,
        private readonly EvenementRepository $evenementRepository,
        private readonly CalendrierRepository $calendrierRepository,
        private readonly EntityManagerInterface $em,
        private readonly KanbanRealtimeNotifier $realtimeNotifier,
        private readonly TelegramNotifier $telegramNotifier,
        #[Autowire('%env(string:GEMINI_API_KEY)%')]
        private readonly string $geminiApiKey,
    ) {
    }

    #[Route('', name: 'api_chat', methods: ['POST'])]
    public function __invoke(Request $request): JsonResponse
    {
        $payload = json_decode($request->getContent(), true);
        if (!is_array($payload)) {
            return $this->json(['error' => 'JSON invalide'], 400);
        }

        $userMessage = trim((string) ($payload['userMessage'] ?? ''));
        $history = $payload['history'] ?? [];
        $model = (string) ($payload['model'] ?? 'gemini-2.5-flash-lite');

        if ('' === $userMessage) {
            return $this->json(['error' => 'Message utilisateur requis'], 422);
        }

        $tasks = $this->serializeTasks();
        $events = $this->serializeEvents();

        $systemPrompt = "Tu es Harmonie Assistant. Réponds toujours en français.\n"
            ."Formate tes réponses de manière lisible et structurée avec du Markdown.\n"
            ."Pour les événements, affiche-les comme des cartes ou des lignes formatées ainsi :\n"
            ."📅 **[Date]**\n🕐 <span style=\"color:#667eea;font-weight:bold;\">[Heure]</span>\n📌 **[Titre]**\n"
            ."Séparé par une ligne.\n"
            ."Pour les tâches Kanban, liste-les scrupuleusement avec exactement ce format pour chaque tâche : `[STATUS]` **Titre de la tâche** (Échéance: Date).\n"
            ."Exemple: `[TODO]` **Faire les courses** (Échéance: 2026-04-15)\n"
            ."Les statuts exacts à écrire entre crochets sont `[TODO]`, `[DOING]`, ou `[DONE]`.\n"
            ."Pour tes confirmations d'action, commence toujours la toute première ligne de ta réponse par ✅ pour un succès, ❌ pour une erreur, et ℹ️ pour une info.\n"
            ."Sois concis, direct et bien organisé.\n"
            ."Voici toutes les données actuelles de l'utilisateur :\n"
            ."ÉVÉNEMENTS : ".json_encode($events, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)."\n"
            ."TÂCHES KANBAN : ".json_encode($tasks, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)."\n"
            ."Tu as la permission complète de lire, ajouter, modifier et supprimer ces données.\n"
            ."Si une action est nécessaire, réponds STRICTEMENT en JSON :\n"
            ."{\"action\":\"ADD_EVENT|UPDATE_EVENT|DELETE_EVENT|ADD_TASK|UPDATE_TASK|DELETE_TASK|NONE\",\"data\":{},\"message\":\"...\"}.\n"
            ."Si aucune action n'est nécessaire, utilise action=NONE et une réponse utile avec le message formaté comme demandé.";

        $contents = $this->normalizeHistory($history);
        $contents[] = [
            'role' => 'user',
            'parts' => [['text' => $userMessage]],
        ];

        if ('' === trim($this->geminiApiKey)) {
            return $this->json(['error' => 'Clé API Gemini manquante côté serveur.'], 500);
        }

        $url = sprintf(
            'https://generativelanguage.googleapis.com/v1beta/models/%s:generateContent?key=%s',
            rawurlencode($model),
            rawurlencode($this->geminiApiKey)
        );

        $attempt = 0;
        $delayUs = 200_000;
        do {
            ++$attempt;
            try {
                $response = $this->httpClient->request('POST', $url, [
                    'headers' => ['Content-Type' => 'application/json'],
                    'json' => [
                        'systemInstruction' => ['parts' => [['text' => $systemPrompt]]],
                        'contents' => $contents,
                    ],
                    'timeout' => 20,
                ]);

                $status = $response->getStatusCode();
                $data = $response->toArray(false);

                if (429 === $status) {
                    if ($attempt < self::MAX_RETRIES) {
                        usleep($delayUs);
                        $delayUs *= 2;
                        continue;
                    }

                    return $this->json(['error' => 'Limite de requêtes atteinte, réessayez dans quelques secondes.'], 429);
                }

                if ($status < 200 || $status >= 300) {
                    $message = (string) ($data['error']['message'] ?? 'Erreur API Gemini');
                    if ($attempt < self::MAX_RETRIES) {
                        usleep($delayUs);
                        $delayUs *= 2;
                        continue;
                    }

                    return $this->json(['error' => $message], $status);
                }

                $replyText = (string) ($data['candidates'][0]['content']['parts'][0]['text'] ?? '');
                if ('' === trim($replyText)) {
                    return $this->json(['error' => 'Réponse Gemini vide'], 502);
                }

                $parsed = $this->extractActionJson($replyText);
                $dataChanged = false;
                $message = $replyText;

                if (is_array($parsed)) {
                    $message = (string) ($parsed['message'] ?? $message);
                    $action = strtoupper((string) ($parsed['action'] ?? 'NONE'));
                    $actionData = is_array($parsed['data'] ?? null) ? $parsed['data'] : [];

                    if ('NONE' !== $action) {
                        $this->executeAction($action, $actionData);
                        $dataChanged = true;
                        $this->realtimeNotifier->dispatch('chat.mutation', ['action' => $action]);
                    }
                }

                return $this->json([
                    'message' => $message,
                    'dataChanged' => $dataChanged,
                ]);
            } catch (\Throwable $e) {
                if ($attempt >= self::MAX_RETRIES) {
                    return $this->json(['error' => 'Erreur API Gemini: '.$e->getMessage()], 500);
                }
                usleep($delayUs);
                $delayUs *= 2;
            }
        } while ($attempt < self::MAX_RETRIES);

        return $this->json(['error' => 'Erreur API Gemini'], 500);
    }

    /**
     * @param mixed $history
     * @return array<int, array{role:string, parts:array<int, array{text:string}>}>
     */
    private function normalizeHistory(mixed $history): array
    {
        if (!is_array($history)) {
            return [];
        }

        $normalized = [];
        foreach ($history as $item) {
            if (!is_array($item)) {
                continue;
            }
            $role = (string) ($item['role'] ?? '');
            if (!in_array($role, ['user', 'model'], true)) {
                continue;
            }
            $parts = $item['parts'] ?? null;
            if (!is_array($parts) || !isset($parts[0]['text'])) {
                continue;
            }
            $text = trim((string) $parts[0]['text']);
            if ('' === $text) {
                continue;
            }
            $normalized[] = [
                'role' => $role,
                'parts' => [['text' => $text]],
            ];
        }

        if (count($normalized) > 20) {
            $normalized = array_slice($normalized, -20);
        }

        return $normalized;
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function serializeTasks(): array
    {
        $tasks = $this->tacheRepository->findAll();

        return array_map(static function (Tache $t): array {
            return [
                'id' => $t->getId(),
                'title' => $t->getNom(),
                'priority' => $t->getPriorite() ?? 'moyenne',
                'dueDate' => $t->getDeadline()?->format('Y-m-d'),
                'notes' => $t->getNotes(),
                'statut' => $t->getStatutTache(),
            ];
        }, $tasks);
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function serializeEvents(): array
    {
        $events = $this->evenementRepository->findAll();

        return array_map(static function (Evenement $e): array {
            return [
                'id' => $e->getId(),
                'title' => $e->getTitre(),
                'description' => $e->getDescription(),
                'startTime' => $e->getDateDebut()?->format('Y-m-d H:i:s'),
                'endTime' => $e->getDateFin()?->format('Y-m-d H:i:s'),
                'location' => $e->getLieu(),
            ];
        }, $events);
    }

    /**
     * @return array<string, mixed>|null
     */
    private function extractActionJson(string $text): ?array
    {
        $decoded = json_decode($text, true);
        if (is_array($decoded) && isset($decoded['action'])) {
            return $decoded;
        }

        if (preg_match('/```json\s*([\s\S]*?)```/i', $text, $m)) {
            $decoded = json_decode($m[1], true);
            if (is_array($decoded) && isset($decoded['action'])) {
                return $decoded;
            }
        }

        if (preg_match('/\{[\s\S]*\}/', $text, $m)) {
            $decoded = json_decode($m[0], true);
            if (is_array($decoded) && isset($decoded['action'])) {
                return $decoded;
            }
        }

        return null;
    }

    /**
     * @param array<string,mixed> $data
     */
    private function executeAction(string $action, array $data): void
    {
        switch ($action) {
            case 'ADD_TASK':
                $task = new Tache();
                $task->setNom((string) ($data['title'] ?? 'Nouvelle tâche'));
                $task->setNotes((string) ($data['notes'] ?? null));
                $task->setPriorite((string) ($data['priority'] ?? 'moyenne'));
                if (!empty($data['dueDate'])) {
                    $task->setDeadline(new \DateTime((string) $data['dueDate']));
                }
                $task->setStatutTache($this->mapColumnToStatus((string) ($data['column'] ?? $data['statut'] ?? 'TODO')));
                if ($cal = $this->calendrierRepository->findPrimary()) {
                    $task->setCalendrier($cal);
                }
                $this->em->persist($task);
                $this->em->flush();
                $this->telegramNotifier->notifyTaskCreated($task, true);

                return;

            case 'UPDATE_TASK':
                $task = $this->findTask($data);
                if (!$task) {
                    return;
                }
                $oldStatus = (string) $task->getStatutTache();
                if (isset($data['title'])) $task->setNom((string) $data['title']);
                if (array_key_exists('notes', $data)) $task->setNotes((string) $data['notes']);
                if (isset($data['priority'])) $task->setPriorite((string) $data['priority']);
                if (isset($data['dueDate']) && '' !== (string) $data['dueDate']) $task->setDeadline(new \DateTime((string) $data['dueDate']));
                if (isset($data['column']) || isset($data['statut'])) {
                    $task->setStatutTache($this->mapColumnToStatus((string) ($data['column'] ?? $data['statut'])));
                }
                $this->em->flush();

                $newStatus = (string) $task->getStatutTache();
                if ($oldStatus !== $newStatus) {
                    if ('TERMINEE' === strtoupper($newStatus)) {
                        $this->telegramNotifier->notifyTaskDone($task, true);
                    } else {
                        $this->telegramNotifier->notifyTaskMoved($task, $oldStatus, $newStatus, true);
                    }
                } else {
                    $this->telegramNotifier->notifyTaskUpdated($task, true);
                }

                return;

            case 'DELETE_TASK':
                $task = $this->findTask($data);
                if (!$task) {
                    return;
                }
                $taskTitle = (string) ($task->getNom() ?? 'Tâche');
                $this->em->remove($task);
                $this->em->flush();
                $this->telegramNotifier->notifyTaskDeleted($taskTitle, true);

                return;

            case 'ADD_EVENT':
                $event = new Evenement();
                $event->setTitre((string) ($data['title'] ?? 'Nouvel événement'));
                $event->setDescription((string) ($data['description'] ?? null));
                $event->setLieu((string) ($data['location'] ?? null));
                $event->setReminderSent(false);
                if (!empty($data['startTime'])) $event->setDateDebut(new \DateTime((string) $data['startTime']));
                if (!empty($data['endTime'])) $event->setDateFin(new \DateTime((string) $data['endTime']));
                if ($cal = $this->calendrierRepository->findPrimary()) {
                    $event->setCalendrier($cal);
                }
                $currentUser = $this->getUser();
                if ($currentUser instanceof User) {
                    $event->setProprietaire($currentUser);
                }
                $this->em->persist($event);
                $this->em->flush();
                $this->telegramNotifier->notifyEventCreated($event, true);

                return;

            case 'UPDATE_EVENT':
                $event = $this->findEvent($data);
                if (!$event) {
                    return;
                }
                if (isset($data['title'])) $event->setTitre((string) $data['title']);
                if (array_key_exists('description', $data)) $event->setDescription((string) $data['description']);
                if (isset($data['location'])) $event->setLieu((string) $data['location']);
                if (!empty($data['startTime'])) $event->setDateDebut(new \DateTime((string) $data['startTime']));
                if (!empty($data['endTime'])) $event->setDateFin(new \DateTime((string) $data['endTime']));
                $event->setReminderSent(false);
                $this->em->flush();
                $this->telegramNotifier->notifyEventUpdated($event, true);

                return;

            case 'DELETE_EVENT':
                $event = $this->findEvent($data);
                if (!$event) {
                    return;
                }
                $eventTitle = (string) ($event->getTitre() ?? 'Événement');
                $eventStartAt = $event->getDateDebut();
                $this->em->remove($event);
                $this->em->flush();
                $this->telegramNotifier->notifyEventDeleted($eventTitle, $eventStartAt, true);

                return;
        }
    }

    /**
     * @param array<string,mixed> $data
     */
    private function findTask(array $data): ?Tache
    {
        if (isset($data['id']) && is_numeric($data['id'])) {
            return $this->tacheRepository->find((int) $data['id']);
        }

        $title = trim((string) ($data['title'] ?? ''));
        if ('' === $title) {
            return null;
        }

        $needle = $this->normalize($title);
        foreach ($this->tacheRepository->findAll() as $task) {
            if (str_contains($this->normalize((string) $task->getNom()), $needle)) {
                return $task;
            }
        }

        return null;
    }

    /**
     * @param array<string,mixed> $data
     */
    private function findEvent(array $data): ?Evenement
    {
        if (isset($data['id']) && is_numeric($data['id'])) {
            return $this->evenementRepository->find((int) $data['id']);
        }

        $title = trim((string) ($data['title'] ?? ''));
        if ('' === $title) {
            return null;
        }

        $needle = $this->normalize($title);
        foreach ($this->evenementRepository->findAll() as $event) {
            if (str_contains($this->normalize((string) ($event->getTitre() ?? '')), $needle)) {
                return $event;
            }
        }

        return null;
    }

    private function mapColumnToStatus(string $value): string
    {
        return match (strtoupper(trim($value))) {
            'DOING', 'EN_COURS' => 'EN_COURS',
            'DONE', 'TERMINEE', 'TERMINE' => 'TERMINEE',
            default => 'A_FAIRE',
        };
    }

    private function normalize(string $value): string
    {
        $value = mb_strtolower($value, 'UTF-8');
        $trans = @iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $value);
        if (false !== $trans) {
            $value = $trans;
        }

        return trim((string) preg_replace('/\s+/', ' ', $value));
    }
}
