<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProtefolioController extends AbstractController
{
    #[Route('/protefolio', name: 'protefolio')]
    public function index(): Response
    {
        return $this->render('protefolio/index.html.twig', [
            'controller_name' => 'ProtefolioController',
        ]);
    }
    
}
