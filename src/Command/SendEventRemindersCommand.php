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
    description: 'Envoie les rappels Telegram selon le délai choisi par événement.',
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

        $events = $this->evenementRepository->findUpcomingEventsNotReminded($now, 180);

        $sent = 0;
        $skipped = 0;
        foreach ($events as $event) {
            if (!$this->isReminderDueNow($event, $now)) {
                continue;
            }

            $owner = $event->getProprietaire();
            $chatId = $owner?->getTelegramChatId();

            if (!$owner || '' === trim((string) $chatId)) {
                ++$skipped;
                $this->logger->info('Rappel ignoré: utilisateur sans telegram_chat_id.', [
                    'eventId' => $event->getId(),
                ]);
                continue;
            }

            if ($this->eventReminderService->sendReminder($event, (string) $chatId)) {
                ++$sent;
            }
        }

        $io->success(sprintf('Rappels traités. Envoyés=%d, ignorés=%d, trouvés=%d', $sent, $skipped, count($events)));

        return Command::SUCCESS;
    }

    private function isReminderDueNow(\App\Entity\Evenement $event, \DateTimeImmutable $now): bool
    {
        $start = $event->getDateDebut();
        if (!$start instanceof \DateTimeInterface) {
            return false;
        }

        $minutes = max(1, (int) $event->getReminderMinutes());

        // Les DATETIME MySQL sont stockés sans timezone.
        // On les interprète explicitement dans le fuseau métier Tunisie.
        $tz = new \DateTimeZone('Africa/Tunis');
        $startAt = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $start->format('Y-m-d H:i:s'), $tz);
        if (!$startAt instanceof \DateTimeImmutable) {
            return false;
        }

        $triggerAt = $startAt->modify('-'.$minutes.' minutes')->setTime(
            (int) $startAt->modify('-'.$minutes.' minutes')->format('H'),
            (int) $startAt->modify('-'.$minutes.' minutes')->format('i'),
            0,
        );
        $triggerEnd = $triggerAt->modify('+1 minute');

        return $now >= $triggerAt && $now < $triggerEnd;
    }
}
