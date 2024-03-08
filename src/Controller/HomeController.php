<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    



    #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('back_office/dashboard_back.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/', name: '')]
    public function home(): Response
    {
        return $this->render('front_office/base_front.html.twig', [
            '' => '',
        ]);
    }


    #[Route('/home1', name: 'app_home1')]
    public function index1(): Response
    {
        return $this->render('front_office/service/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('front_office/homeAdmin/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    
}
