<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Temporary trait — returns the mocked user id from session.
 * Replace with real $this->getUser()->getId() once auth is integrated.
 */
trait MockUserTrait
{
    private function getMockUserId(): int
    {
        /** @var RequestStack $stack */
        $stack = $this->container->get('request_stack');
        $session = $stack->getSession();
        return (int) ($session->get('mock_user_id') ?? 0);
    }
}
