<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Service\GoogleCalendarService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GoogleCalendarController extends AbstractController
{
    #[Route('/oauth/google/connect', name: 'app_google_calendar_connect')]
    public function connect(GoogleCalendarService $googleService): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        return $this->redirect($googleService->getAuthUrl());
    }

    #[Route('/oauth/google/callback', name: 'app_google_calendar_callback')]
    public function callback(Request $request, GoogleCalendarService $googleService): Response
    {
        $code = $request->query->get('code');
        $user = $this->getUser();

        if ($code && $user) {
            $success = $googleService->authenticate($code, $user);
            if ($success) {
                $this->addFlash('success', 'Connecté à Google Calendar avec succès !');
            } else {
                $this->addFlash('error', 'Erreur lors de la connexion à Google Calendar.');
            }
        }

        return $this->redirectToRoute('app_evenement_index');
    }

    #[Route('/oauth/google/disconnect', name: 'app_google_calendar_disconnect')]
    public function disconnect(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if ($user) {
            $user->setGoogleAccessToken(null);
            $user->setGoogleRefreshToken(null);
            $user->setGoogleTokenExpiresAt(null);
            $em->flush();
            $this->addFlash('success', 'Déconnexion de Google Calendar réussie.');
        }

        return $this->redirectToRoute('app_evenement_index');
    }

    #[Route('/oauth/google/pull', name: 'app_google_calendar_pull')]
    public function pull(GoogleCalendarService $googleService): Response
    {
        $user = $this->getUser();
        if ($user && $googleService->pullEventsFromGoogle($user)) {
            $this->addFlash('success', 'Calendrier synchronisé avec succès depuis Google !');
        } else {
            $this->addFlash('error', 'Impossible de récupérer les événements Google.');
        }

        return $this->redirectToRoute('app_evenement_index');
    }

    #[Route('/webhook/google-calendar', name: 'app_google_calendar_webhook', methods: ['POST'])]
    public function webhook(Request $request, EntityManagerInterface $em): Response
    {
        // Traitement de base du Webhook de Google Calendar.
        // En vrai production, il faudrait récupérer la resourceState et resourceId pour
        // faire un service->events->list et chercher les eventId modifiés (syncToken).
        
        $channelId = $request->headers->get('X-Goog-Channel-ID');
        $resourceState = $request->headers->get('X-Goog-Resource-State');

        // Note: une implémentation robuste nécessiterait de lister les événements
        // mis à jour et de synchroniser localement.
        // Pour les contraintes du projet, on valide simplement que la route webhook fonctionne.
        
        if ($channelId) {
            return new Response('OK', 200);
        }

        return new Response('Missing headers', 400);
    }
}
