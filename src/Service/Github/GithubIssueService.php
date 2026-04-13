<?php

namespace App\Service\Github;

use App\Entity\Tache;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class GithubIssueService
{
    private const SETTINGS_FILE = 'var/share/github_settings.json';

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly string $projectDir,
        private readonly ?string $defaultToken = null,
        private readonly ?string $defaultRepo = null,
        private readonly ?string $defaultBranch = 'main',
    ) {
    }

    public function hasConfig(): bool
    {
        $cfg = $this->getConfig();

        return !empty($cfg['token']) && !empty($cfg['repo']);
    }

    public function getConfig(): array
    {
        $file = $this->projectDir.'/'.self::SETTINGS_FILE;
        if (is_file($file)) {
            $raw = file_get_contents($file);
            $json = json_decode((string) $raw, true);
            if (is_array($json)) {
                return [
                    'token' => (string) ($json['token'] ?? ''),
                    'repo' => (string) ($json['repo'] ?? ''),
                    'branch' => $this->normalizeBranch((string) ($json['branch'] ?? '')),
                ];
            }
        }

        return [
            'token' => (string) ($this->defaultToken ?? ''),
            'repo' => (string) ($this->defaultRepo ?? ''),
            'branch' => $this->normalizeBranch((string) ($this->defaultBranch ?? 'main')),
        ];
    }

    public function saveConfig(string $token, string $repo, ?string $branch = null): void
    {
        $dir = dirname($this->projectDir.'/'.self::SETTINGS_FILE);
        if (!is_dir($dir)) {
            mkdir($dir, 0775, true);
        }

        file_put_contents(
            $this->projectDir.'/'.self::SETTINGS_FILE,
            json_encode([
                'token' => trim($token),
                'repo' => trim($repo),
                'branch' => $this->normalizeBranch((string) ($branch ?? '')),
            ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
        );
    }

    public function validateToken(?string $token = null): bool
    {
        $cfg = $this->getConfig();
        $tokenToUse = trim((string) ($token ?? $cfg['token']));
        if ($tokenToUse === '') {
            return false;
        }

        try {
            $res = $this->httpClient->request('GET', 'https://api.github.com/user', [
                'headers' => $this->headers($tokenToUse),
                'timeout' => 8,
            ]);

            return 200 === $res->getStatusCode();
        } catch (\Throwable) {
            return false;
        }
    }

    public function syncTask(Tache $tache): void
    {
        if (!$this->hasConfig()) {
            return;
        }

        if (null === $tache->getGithubIssueNumber()) {
            $created = $this->createIssue($tache);
            $tache->setGithubIssueNumber((int) $created['number']);
            $tache->setGithubRepo($this->resolveRepo($tache));

            return;
        }

        $this->updateIssue($tache, false);
    }

    public function closeTaskIssueAsCancelled(Tache $tache): void
    {
        if (!$this->hasConfig() || null === $tache->getGithubIssueNumber()) {
            return;
        }

        $this->request(
            'PATCH',
            sprintf('/repos/%s/issues/%d', $this->resolveRepo($tache), $tache->getGithubIssueNumber()),
            [
                'state' => 'closed',
                'labels' => ['cancelled'],
            ]
        );
    }

    /**
     * @return array<string,mixed>
     */
    private function createIssue(Tache $tache): array
    {
        [$state, $labels] = $this->mapStatus($tache->getStatutTache());

        $issue = $this->request('POST', sprintf('/repos/%s/issues', $this->resolveRepo($tache)), [
            'title' => $tache->getNom(),
            'body' => $this->buildIssueBody($tache),
            'labels' => $labels,
        ]);

        if ('closed' === $state) {
            $this->request('PATCH', sprintf('/repos/%s/issues/%d', $this->resolveRepo($tache), (int) $issue['number']), [
                'state' => 'closed',
                'labels' => $labels,
            ]);
        }

        return $issue;
    }

    private function updateIssue(Tache $tache, bool $forceOpen = false): void
    {
        [$state, $labels] = $this->mapStatus($tache->getStatutTache());
        if ($forceOpen) {
            $state = 'open';
        }

        $this->request(
            'PATCH',
            sprintf('/repos/%s/issues/%d', $this->resolveRepo($tache), $tache->getGithubIssueNumber()),
            [
                'title' => $tache->getNom(),
                'body' => $this->buildIssueBody($tache),
                'state' => $state,
                'labels' => $labels,
            ]
        );
    }

    /**
     * @return array{0:string,1:array<int,string>}
     */
    private function mapStatus(string $statut): array
    {
        return match ($statut) {
            'EN_COURS' => ['open', ['doing']],
            'TERMINEE' => ['closed', []],
            default => ['open', ['todo']],
        };
    }

    private function resolveRepo(Tache $tache): string
    {
        if ($tache->getGithubRepo()) {
            return $tache->getGithubRepo();
        }

        $cfg = $this->getConfig();

        return (string) $cfg['repo'];
    }

    private function resolveBranch(): string
    {
        $cfg = $this->getConfig();

        return $this->normalizeBranch((string) ($cfg['branch'] ?? 'main'));
    }

    private function normalizeBranch(string $branch): string
    {
        $normalized = trim($branch);

        return '' === $normalized ? 'main' : $normalized;
    }

    private function buildIssueBody(Tache $tache): string
    {
        $notes = trim((string) ($tache->getNotes() ?? ''));
        $branch = $this->resolveBranch();

        if ('' === $notes) {
            return "Branche cible: `{$branch}`";
        }

        return $notes."\n\n---\nBranche cible: `{$branch}`";
    }

    /**
     * @return array<string,mixed>
     */
    private function request(string $method, string $path, array $json = []): array
    {
        $cfg = $this->getConfig();
        $token = (string) ($cfg['token'] ?? '');
        if ('' === $token) {
            throw new \RuntimeException('GitHub non configuré.');
        }

        $attempt = 0;
        $delayUs = 200_000;
        do {
            ++$attempt;
            try {
                $response = $this->httpClient->request($method, 'https://api.github.com'.$path, [
                    'headers' => $this->headers($token),
                    'json' => $json,
                    'timeout' => 10,
                ]);
                $code = $response->getStatusCode();
                if ($code >= 200 && $code < 300) {
                    $content = $response->getContent(false);
                    if ('' === $content) {
                        return [];
                    }

                    $decoded = json_decode($content, true);

                    return is_array($decoded) ? $decoded : [];
                }

                if (401 === $code || 403 === $code) {
                    throw new \RuntimeException('Token GitHub invalide ou non autorisé.');
                }
                throw new \RuntimeException('Erreur GitHub HTTP '.$code);
            } catch (ExceptionInterface|\RuntimeException $e) {
                if ($attempt >= 3) {
                    throw new \RuntimeException('Échec sync GitHub: '.$e->getMessage(), 0, $e);
                }
                usleep($delayUs);
                $delayUs *= 2;
            }
        } while ($attempt < 3);

        throw new \RuntimeException('Échec sync GitHub.');
    }

    /**
     * @return array<string,string>
     */
    private function headers(string $token): array
    {
        return [
            'Accept' => 'application/vnd.github+json',
            'Authorization' => 'Bearer '.$token,
            'X-GitHub-Api-Version' => '2022-11-28',
            'User-Agent' => 'harmonie-kanban',
        ];
    }
}
