<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Temporary mock-user selector — remove once auth is integrated.
 */
class MockUserController extends AbstractController
{
    public function __construct(private Connection $db) {}

    /**
     * @Route("/dev/mock-user/list", name="dev_mock_user_list", methods={"GET"})
     */
    #[Route('/dev/mock-user/list', name: 'dev_mock_user_list', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $users = $this->db->fetchAllAssociative(
            'SELECT user_id   AS id,
                    user_prenom AS firstname,
                    user_nom    AS lastname,
                    user_email  AS email,
                    type_utilisateur AS role
             FROM `user`
             WHERE is_active = 1
             ORDER BY user_prenom, user_nom'
        );
        return $this->json($users);
    }

    /**
     * @Route("/dev/mock-user/set", name="dev_mock_user_set", methods={"POST"})
     */
    #[Route('/dev/mock-user/set', name: 'dev_mock_user_set', methods: ['POST'])]
    public function set(Request $req, SessionInterface $session): JsonResponse
    {
        $id = (int) $req->request->get('userId', 0);
        if ($id <= 0) {
            $session->remove('mock_user_id');
            return $this->json(['ok' => true, 'cleared' => true]);
        }
        $exists = $this->db->fetchOne(
            'SELECT user_id FROM `user` WHERE user_id = ? AND is_active = 1', [$id]
        );
        if (!$exists) return $this->json(['message' => 'User not found'], 404);

        $session->set('mock_user_id', $id);
        $user = $this->db->fetchAssociative(
            'SELECT user_id AS id, user_prenom AS firstname, user_nom AS lastname,
                    user_email AS email, type_utilisateur AS role
             FROM `user` WHERE user_id = ?', [$id]
        );
        return $this->json(['ok' => true, 'user' => $user]);
    }

    /**
     * @Route("/dev/mock-user/current", name="dev_mock_user_current", methods={"GET"})
     */
    #[Route('/dev/mock-user/current', name: 'dev_mock_user_current', methods: ['GET'])]
    public function current(SessionInterface $session): JsonResponse
    {
        $id = $session->get('mock_user_id');
        if (!$id) return $this->json(['user' => null]);
        $user = $this->db->fetchAssociative(
            'SELECT user_id AS id, user_prenom AS firstname, user_nom AS lastname,
                    user_email AS email, type_utilisateur AS role
             FROM `user` WHERE user_id = ?', [$id]
        );
        return $this->json(['user' => $user ?: null]);
    }
}
