<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Service Google Gemini Vision — Analyse de photos de repas par IA.
 *
 * Utilise le modèle Gemini 1.5 Flash (gratuit jusqu'à un certain quota)
 * pour analyser une image de repas et retourner :
 *   - Les plats détectés
 *   - L'estimation calorique
 *   - Les macronutriments (protéines, glucides, lipides)
 *   - Un score d'équilibre nutritionnel
 *   - Des suggestions adaptées aux étudiants
 *   - Une note nutritionnelle globale
 *
 * CONFIGURATION OBLIGATOIRE :
 *   1) Dans config/services.yaml :
 *        App\Service\GeminiVisionService:
 *            arguments:
 *                $geminiApiKey: '%env(GEMINI_API_KEY)%'
 *
 *   2) Dans .env :
 *        GEMINI_API_KEY=AIzaSy...VotreCle
 *        (Clé obtenue sur https://aistudio.google.com/app/apikey)
 */
class GeminiVisionService
{
    private const BASE_URL = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent';

    /**
     * @param HttpClientInterface $client       Injecté automatiquement par Symfony autowire
     * @param string              $geminiApiKey Clé API Google AI Studio depuis .env GEMINI_API_KEY
     *                                          IMPORTANT : doit commencer par "AIzaSy"
     */
    public function __construct(
        private readonly HttpClientInterface $client,
        private readonly string $geminiApiKey
    ) {}

    // ──────────────────────────────────────────────────────────────────────────
    // ANALYSE PHOTO
    // ──────────────────────────────────────────────────────────────────────────

    /**
     * Analyse une photo de repas et retourne une estimation nutritionnelle structurée.
     *
     * @param string $base64Image  Image encodée en base64 (sans préfixe data:image/...;base64,)
     * @param string $mimeType     Type MIME : image/jpeg, image/png, image/webp
     * @param string $repasType    Type de repas : "Petit-déjeuner", "Déjeuner", "Dîner", "Snack"
     *
     * @return array{
     *   plats_detectes:      string[],
     *   calories_totales:    int,
     *   proteines_g:         float,
     *   glucides_g:          float,
     *   lipides_g:           float,
     *   score_equilibre:     int,
     *   suggestions:         string[],
     *   note_nutritionnelle: string
     * }
     *
     * @throws \RuntimeException si l'API retourne une erreur ou si la réponse est invalide
     */
    public function analyzeMealPhoto(
        string $base64Image,
        string $mimeType = 'image/jpeg',
        string $repasType = 'Déjeuner'
    ): array {
        // ── Validation préalable de la clé API ───────────────────────────────
        if (empty($this->geminiApiKey)) {
            throw new \RuntimeException(
                'Clé API Gemini non configurée. Ajoutez GEMINI_API_KEY=AIzaSy... dans votre fichier .env ' .
                'et configurez services.yaml. Obtenez votre clé sur https://aistudio.google.com/app/apikey'
            );
        }

        // Les vraies clés Google AI Studio commencent par "AIzaSy" ou "AIza"
        if (!str_starts_with($this->geminiApiKey, 'AIza')) {
            throw new \RuntimeException(
                'Format de clé API Gemini invalide. La clé doit commencer par "AIzaSy". ' .
                'Obtenez une clé valide sur https://aistudio.google.com/app/apikey'
            );
        }

        // ── Validation de l'image ─────────────────────────────────────────────
        if (empty($base64Image)) {
            throw new \RuntimeException('Image vide ou manquante.');
        }

        // ── Prompt JSON pur, adapté au contexte étudiant ──────────────────────
        $prompt = <<<PROMPT
Tu es un expert en nutrition spécialisé dans l'alimentation des étudiants.
Analyse cette photo de repas ({$repasType}) et fournis une estimation nutritionnelle précise.

Réponds UNIQUEMENT avec un objet JSON valide, sans markdown, sans commentaires, en respectant exactement ce format :
{
  "plats_detectes": ["nom du plat 1", "nom du plat 2"],
  "calories_totales": 450,
  "proteines_g": 25.5,
  "glucides_g": 40.0,
  "lipides_g": 15.0,
  "score_equilibre": 7,
  "suggestions": [
    "suggestion courte et actionnable 1",
    "suggestion courte et actionnable 2",
    "suggestion courte et actionnable 3"
  ],
  "note_nutritionnelle": "Commentaire bref sur l'équilibre nutritionnel, adapté à un étudiant"
}

Règles importantes :
- score_equilibre : entier de 1 (très déséquilibré) à 10 (parfaitement équilibré)
- calories_totales : entier, estimation réaliste en kcal
- proteines_g, glucides_g, lipides_g : floats, en grammes, cohérents avec les calories
- suggestions : maximum 3, courtes (< 15 mots), pratiques pour un étudiant avec budget limité
- note_nutritionnelle : 1-2 phrases maximum, ton bienveillant
- Si l'image n'est pas un repas, retourne calories_totales: 0 et note_nutritionnelle: "Image non reconnaissable comme un repas."
PROMPT;

        try {
            $response = $this->client->request('POST', self::BASE_URL, [
                'query'   => ['key' => $this->geminiApiKey],
                'headers' => ['Content-Type' => 'application/json'],
                'json'    => [
                    'contents' => [[
                        'parts' => [
                            [
                                'inlineData' => [
                                    'mimeType' => $mimeType,
                                    'data'     => $base64Image,
                                ]
                            ],
                            ['text' => $prompt],
                        ]
                    ]],
                    'generationConfig' => [
                        'temperature'     => 0.3,
                        'topP'            => 0.95,
                        'maxOutputTokens' => 1024,
                    ],
                ],
                'timeout' => 45,
            ]);

            // Lire le code HTTP et le corps AVANT d'appeler toArray()
            // getContent(false) ne lance pas d'exception sur les erreurs HTTP
            $statusCode = $response->getStatusCode();
            $bodyRaw    = $response->getContent(false);

            // ── Gestion des erreurs HTTP ────────────────────────────────────
            if ($statusCode === 400) {
                $errData = json_decode($bodyRaw, true);
                $errMsg  = $errData['error']['message'] ?? 'Requête invalide.';
                throw new \RuntimeException('Erreur Gemini 400 : ' . $errMsg);
            }

            if ($statusCode === 401 || $statusCode === 403) {
                throw new \RuntimeException(
                    'Clé API Gemini invalide ou non autorisée (HTTP ' . $statusCode . '). ' .
                    'Vérifiez GEMINI_API_KEY dans .env sur https://aistudio.google.com/app/apikey'
                );
            }

            if ($statusCode === 429) {
                throw new \RuntimeException(
                    'Quota API Gemini dépassé (HTTP 429). Réessayez dans quelques secondes.'
                );
            }

            if ($statusCode !== 200) {
                $errData = json_decode($bodyRaw, true);
                $errMsg  = $errData['error']['message'] ?? 'Erreur inconnue.';
                throw new \RuntimeException('Erreur API Gemini (HTTP ' . $statusCode . ') : ' . $errMsg);
            }

            // ── Parsing de la réponse ───────────────────────────────────────
            $data = json_decode($bodyRaw, true);

            if (!is_array($data)) {
                throw new \RuntimeException('Réponse Gemini invalide (JSON malformé).');
            }

            // Vérifier si Gemini a bloqué le contenu (filtres de sécurité)
            $finishReason = $data['candidates'][0]['finishReason'] ?? '';
            if ($finishReason === 'SAFETY') {
                throw new \RuntimeException(
                    'Image bloquée par les filtres de sécurité Gemini. Essayez une photo de repas simple.'
                );
            }

            // Extraire le texte généré
            $textContent = $data['candidates'][0]['content']['parts'][0]['text'] ?? '';

            if (empty($textContent)) {
                $blockReason = $data['promptFeedback']['blockReason'] ?? '';
                if ($blockReason) {
                    throw new \RuntimeException('Image bloquée par Gemini : ' . $blockReason);
                }
                throw new \RuntimeException(
                    "Gemini n'a retourné aucun contenu. L'image est peut-être trop floue ou illisible."
                );
            }

            return $this->parseGeminiResponse($textContent);

        } catch (TransportExceptionInterface $e) {
            throw new \RuntimeException(
                'Impossible de contacter l\'API Gemini (erreur réseau) : ' . $e->getMessage()
            );
        } catch (\RuntimeException $e) {
            throw $e; // Re-lancer les RuntimeException déjà formatées
        } catch (\Throwable $e) {
            throw new \RuntimeException('Erreur inattendue lors de l\'analyse : ' . $e->getMessage());
        }
    }

    // ──────────────────────────────────────────────────────────────────────────
    // HELPER : Parser la réponse JSON de Gemini
    // ──────────────────────────────────────────────────────────────────────────

    /**
     * Nettoie et parse la réponse JSON de Gemini.
     * Gère les cas où Gemini entoure le JSON de blocs markdown (```json...```).
     */
    private function parseGeminiResponse(string $text): array
    {
        // Supprimer les blocs markdown si présents
        $text = preg_replace('/^```(?:json)?\s*/m', '', $text);
        $text = preg_replace('/\s*```\s*$/m', '', $text);
        $text = trim($text);

        // Si le texte ne commence pas par '{', extraire le JSON embarqué
        if (!str_starts_with($text, '{')) {
            $jsonStart = strpos($text, '{');
            $jsonEnd   = strrpos($text, '}');
            if ($jsonStart !== false && $jsonEnd !== false) {
                $text = substr($text, $jsonStart, $jsonEnd - $jsonStart + 1);
            }
        }

        $result = json_decode($text, true);

        if (!is_array($result)) {
            throw new \RuntimeException(
                'La réponse de l\'IA n\'est pas un JSON valide. Réessayez avec une photo plus nette.'
            );
        }

        // Valeurs par défaut et typage strict
        return [
            'plats_detectes'      => (array)  ($result['plats_detectes']      ?? ['Plat non identifié']),
            'calories_totales'    => (int)    ($result['calories_totales']     ?? 0),
            'proteines_g'         => (float)  ($result['proteines_g']          ?? 0.0),
            'glucides_g'          => (float)  ($result['glucides_g']           ?? 0.0),
            'lipides_g'           => (float)  ($result['lipides_g']            ?? 0.0),
            'score_equilibre'     => max(1, min(10, (int) ($result['score_equilibre'] ?? 5))),
            'suggestions'         => array_slice((array) ($result['suggestions'] ?? []), 0, 3),
            'note_nutritionnelle' => (string) ($result['note_nutritionnelle']  ?? ''),
        ];
    }
}