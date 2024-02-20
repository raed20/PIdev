<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InvestissementsController extends AbstractController
{
    #[Route('/investissements', name: 'app_investissements')]
    public function index(): Response
    {
        return $this->render('investissements/index.html.twig', [
            'controller_name' => 'InvestissementController',
        ]);
    }
}
