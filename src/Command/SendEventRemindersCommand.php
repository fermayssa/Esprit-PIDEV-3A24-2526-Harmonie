<?php

namespace App\Command;

use App\Repository\EvenementRepository;
use App\Service\Telegram\EventReminderService;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:events:send-reminders',
    description: 'Envoie les rappels Telegram 15 minutes avant les événements.',
)]
final class SendEventRemindersCommand extends Command
{
    public function __construct(
        private readonly EvenementRepository $evenementRepository,
        private readonly EventReminderService $eventReminderService,
        private readonly LoggerInterface $logger,
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        // Fuseau horaire métier demandé : Tunisie (UTC+1).
        $tz = new \DateTimeZone('Africa/Tunis');
        $now = new \DateTimeImmutable('now', $tz);

        $events = $this->evenementRepository->findEventsStartingIn15MinutesNotReminded($now);

        $sent = 0;
        $skipped = 0;
        foreach ($events as $event) {
            $owner = $event->getProprietaire();
            $chatId = $owner?->getTelegramChatId();

            if (!$owner || '' === trim((string) $chatId)) {
                ++$skipped;
                $this->logger->info('Rappel ignoré: utilisateur sans telegram_chat_id.', [
                    'eventId' => $event->getId(),
                ]);
                continue;
            }

            if ($this->eventReminderService->sendRappel15min($event, (string) $chatId)) {
                ++$sent;
            }
        }

        $io->success(sprintf('Rappels traités. Envoyés=%d, ignorés=%d, trouvés=%d', $sent, $skipped, count($events)));

        return Command::SUCCESS;
    }
}
