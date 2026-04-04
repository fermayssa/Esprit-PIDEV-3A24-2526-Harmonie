<?php

namespace App\Service;

use App\Entity\User;

/**
 * Calcule un score de suspicion (0–100) pour chaque compte.
 * Plus le score est élevé, plus le compte est "suspect".
 */
class SuspicionScoreService
{
    private const SUSPICIOUS_WORDS = [
        'test', 'admin', 'user', 'fake', 'demo', 'lorem', 'ipsum',
        'aaa', 'bbb', 'ccc', 'xxx', 'yyy', 'zzz', 'abc', 'azerty',
        'qwerty', 'temp', 'null', 'undefined', 'sample', 'toto',
        'tata', 'titi', 'tutu', 'foo', 'bar', 'baz',
    ];

    private const SUSPICIOUS_EMAIL_DOMAINS = [
        'test.com', 'fake.com', 'temp.com', 'yopmail.com',
        'mailinator.com', 'guerrillamail.com', 'trashmail.com',
        'throwam.com', 'spam.la', 'example.com',
    ];

    public function compute(User $user): int
    {
        $score = 0;
        $nom    = strtolower(trim($user->getUserNom()));
        $prenom = strtolower(trim($user->getUserPrenom()));
        $email  = strtolower(trim($user->getUserEmail()));

        // ── 1. Mots suspects dans le nom / prénom ───────────────────────────
        foreach (self::SUSPICIOUS_WORDS as $word) {
            if (str_contains($nom, $word) || str_contains($prenom, $word)) {
                $score += 30;
                break;
            }
        }

        // ── 2. Caractères répétitifs (ex: "aaaa", "123") ───────────────────
        if (preg_match('/(.)\1{2,}/', $nom) || preg_match('/(.)\1{2,}/', $prenom)) {
            $score += 25;
        }

        // ── 3. Nom == Prénom ────────────────────────────────────────────────
        if ($nom === $prenom) {
            $score += 20;
        }

        // ── 4. Domaine d'email suspect ──────────────────────────────────────
        $parts = explode('@', $email);
        $domain = $parts[1] ?? '';
        foreach (self::SUSPICIOUS_EMAIL_DOMAINS as $d) {
            if (str_contains($domain, $d)) {
                $score += 25;
                break;
            }
        }

        // ── 5. Email contient des mots suspects ─────────────────────────────
        foreach (self::SUSPICIOUS_WORDS as $word) {
            if (str_contains($email, $word)) {
                $score += 15;
                break;
            }
        }

        // ── 6. Nom/prénom trop court (1 char) ───────────────────────────────
        if (mb_strlen($nom) <= 1 || mb_strlen($prenom) <= 1) {
            $score += 15;
        }

        // ── 7. Séquences numériques dans le nom ─────────────────────────────
        if (preg_match('/\d{3,}/', $nom) || preg_match('/\d{3,}/', $prenom)) {
            $score += 10;
        }

        return min($score, 100);
    }

    /** Trie un tableau de User par score décroissant */
    public function sortBySuspicion(array $users): array
    {
        usort($users, fn($a, $b) => $this->compute($b) <=> $this->compute($a));
        return $users;
    }

    public function getLabel(int $score): string
    {
        return match(true) {
            $score >= 60 => 'Très suspect',
            $score >= 35 => 'Suspect',
            $score >= 15 => 'Modéré',
            default      => 'Normal',
        };
    }

    public function getColor(int $score): string
    {
        return match(true) {
            $score >= 60 => '#E05252',
            $score >= 35 => '#E5A44B',
            $score >= 15 => '#6A5ACD',
            default      => '#5CB89E',
        };
    }
}
