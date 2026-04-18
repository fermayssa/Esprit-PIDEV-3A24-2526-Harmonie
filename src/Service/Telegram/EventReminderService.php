<?php

namespace App\Service\Telegram;

use App\Entity\Evenement;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class EventReminderService
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly EntityManagerInterface $em,
        private readonly LoggerInterface $logger,
        #[Autowire('%env(string:TELEGRAM_BOT_TOKEN)%')]
        private readonly string $botToken,
    ) {
    }

    /**
     * Envoie un rappel Telegram 15 min avant l'événement.
     * Si l'envoi réussit, l'événement est marqué reminder_sent=true.
     */
    public function sendRappel15min(Evenement $event, string $chatId): bool
    {
        $chatId = trim($chatId);
        if ('' === $chatId || '' === trim($this->botToken)) {
            return false;
        }

        $url = sprintf('https://api.telegram.org/bot%s/sendMessage', rawurlencode($this->botToken));

        try {
            $response = $this->httpClient->request('POST', $url, [
                'headers' => ['Content-Type' => 'application/json'],
                'json' => [
                    'chat_id' => $chatId,
                    'text' => $this->buildReminderMessage($event),
                    'parse_mode' => 'Markdown',
                ],
                'timeout' => 6,
            ]);

            $status = $response->getStatusCode();
            if ($status < 200 || $status >= 300) {
                $this->logger->warning('Échec envoi rappel Telegram.', [
                    'eventId' => $event->getId(),
                    'status' => $status,
                ]);

                return false;
            }

            $event->setReminderSent(true);
            $this->em->flush();

            return true;
        } catch (\Throwable $e) {
            // Ne pas bloquer l'application si Telegram échoue.
            $this->logger->warning('Erreur envoi rappel Telegram.', [
                'eventId' => $event->getId(),
                'error' => $e->getMessage(),
            ]);

            return false;
        }
    }

    private function buildReminderMessage(Evenement $event): string
    {
        $title = $this->escapeMarkdown((string) ($event->getTitre() ?? 'Événement'));
        $time = $event->getDateDebut()?->format('H:i') ?? '--:--';
        $location = $this->escapeMarkdown((string) ($event->getLieu() ?? 'Non précisé'));
        $description = trim((string) ($event->getDescription() ?? ''));

        $message = "⏰ *Rappel Harmonie*\n"
            ."Ton événement commence dans *15 minutes* !\n\n"
            ."📌 *{$title}*\n"
            ."🕐 Heure : *{$time}*\n"
            ."📍 Lieu : *{$location}*";

        if ('' !== $description) {
            $message .= "\n📝 *".$this->escapeMarkdown($description)."*";
        }

        $message .= "\n\nBonne réunion ! 🎯";

        return $message;
    }

    private function escapeMarkdown(string $value): string
    {
        return str_replace(['*', '_', '`', '[', ']'], ['\\*', '\\_', '\\`', '\\[', '\\]'], $value);
    }
}
