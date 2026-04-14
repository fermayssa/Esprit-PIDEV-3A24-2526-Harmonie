<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ImageGenerationService
{
    // Même modèle que ton code Java
    private const MODEL_URL = 'https://api-inference.huggingface.co/models/stabilityai/stable-diffusion-2';

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly string $apiKey
    ) {}

    /**
     * Équivalent de generateImageBytes() en Java
     * Retourne les bytes PNG encodés en base64 pour le frontend
     */
    public function generateImageBytes(string $prompt, string $style = ''): ?string
    {
        if (empty(trim($prompt))) {
            return null;
        }

        // Combine le prompt avec le style — comme ton code Java
        $fullPrompt = $style ? $prompt . ', ' . $style : $prompt;

        try {
            $response = $this->httpClient->request('POST',
                self::MODEL_URL,
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->apiKey,
                        'Content-Type'  => 'application/json',
                    ],
                    'json' => [
                        'inputs'     => $fullPrompt,
                        'parameters' => [
                            'num_inference_steps' => 20,
                            'guidance_scale'      => 7.5,
                        ],
                    ],
                    'timeout' => 120, // 2 minutes comme ton Java
                ]
            );

            $statusCode = $response->getStatusCode();

            // Modèle en cours de chargement (comme ton Java gère l'erreur)
            if ($statusCode === 503) {
                return null; // "Model is loading"
            }

            if ($statusCode !== 200) {
                return null;
            }

            // Retourne les bytes en base64 — équivalent de byte[] en Java
            $imageBytes = $response->getContent();
            return base64_encode($imageBytes);

        } catch (\Exception $e) {
            return null;
        }
    }
}