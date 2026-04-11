<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class OAuthController extends AbstractController
{
    // ── Google ────────────────────────────────────────────────────────────────

    /**
     * Redirige l'utilisateur vers Google pour l'authentification
     */
    #[Route('/connect/google', name: 'connect_google')]
    public function connectGoogle(ClientRegistry $clientRegistry): RedirectResponse
    {
        return $clientRegistry
            ->getClient('google')
            ->redirect(['email', 'profile'], []);
    }

    /**
     * Google redirige ici après authentification (callback)
     * La logique de création/connexion est dans GoogleAuthenticator
     */
    #[Route('/connect/google/check', name: 'connect_google_check')]
    public function connectGoogleCheck(): never
    {
        // Cette méthode n'est jamais exécutée :
        // le pare-feu Symfony intercepte la route avant d'arriver ici.
        throw new \LogicException('This code should never be reached.');
    }

    // ── Facebook ──────────────────────────────────────────────────────────────

    /**
     * Redirige l'utilisateur vers Facebook pour l'authentification
     */
    #[Route('/connect/facebook', name: 'connect_facebook')]
    public function connectFacebook(ClientRegistry $clientRegistry): RedirectResponse
    {
        return $clientRegistry
            ->getClient('facebook')
            ->redirect(['public_profile', 'email'], []);
    }

    /**
     * Facebook redirige ici après authentification (callback)
     * La logique de création/connexion est dans FacebookAuthenticator
     */
    #[Route('/connect/facebook/check', name: 'connect_facebook_check')]
    public function connectFacebookCheck(): never
    {
        throw new \LogicException('This code should never be reached.');
    }
}
