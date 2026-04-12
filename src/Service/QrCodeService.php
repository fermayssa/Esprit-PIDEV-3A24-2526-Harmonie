<?php

namespace App\Service;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

class QrCodeService
{
    public function generateSessionQrCode(string $text, ?string $logoPath = null): string
    {
        $writer = new PngWriter();

        $qrCode = QrCode::create($text)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(ErrorCorrectionLevel::High)
            ->setSize(300)
            ->setMargin(12)
            ->setRoundBlockSizeMode(RoundBlockSizeMode::Margin)
            ->setForegroundColor(new Color(106, 27, 154))   // Violet Harmony
            ->setBackgroundColor(new Color(255, 255, 255));

        $logo = null;
        if ($logoPath !== null && file_exists($logoPath)) {
            $logo = Logo::create($logoPath)
                ->setResizeToWidth(65)
                ->setPunchoutBackground(true);
        }

        $result = $writer->write($qrCode, $logo);
        return $result->getDataUri();
    }

    public function buildWhatsAppUrl(string $dateLabel, array $exercises): string
    {
        $text     = "🏋️ *Séance Harmony du {$dateLabel}*\n\n";
        $totalMin = 0;
        $totalCal = 0;

        foreach ($exercises as $ex) {
            $text .= '• *' . ($ex['exercice_nom'] ?? 'Exercice') . "*\n";
            $text .= '  ⏱ ' . ($ex['duree_minutes'] ?? 0) . ' min';

            if (!empty($ex['calories_brulees'])) {
                $text    .= ' | 🔥 ' . $ex['calories_brulees'] . ' kcal';
                $totalCal += (int) $ex['calories_brulees'];
            }
            if (!empty($ex['nb_series'])) {
                $text .= ' | 🔁 ' . $ex['nb_series'] . '×' . ($ex['nb_repetitions'] ?? '?');
            }
            if (!empty($ex['poids'])) {
                $text .= ' | ⚖ ' . $ex['poids'] . ' kg';
            }
            $text    .= "\n";
            $totalMin += (int) ($ex['duree_minutes'] ?? 0);
        }

        $text .= "\n📊 *Total : {$totalMin} min";
        if ($totalCal > 0) {
            $text .= " | {$totalCal} kcal";
        }
        $text .= "*\n\n💜 Partagé depuis *Harmony — Journal de Sport*";

        return 'https://api.whatsapp.com/send?text=' . urlencode($text);
    }
}