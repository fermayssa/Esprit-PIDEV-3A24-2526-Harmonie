<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TachesController extends AbstractController
{
    #[Route('/taches', name: 'taches')]
    public function index(): Response
    {
        return $this->render('taches/index.html.twig');
    }
}
