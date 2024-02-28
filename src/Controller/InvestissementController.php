<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Investissement;
use App\Entity\Opportunite;
use App\Form\InvestissementType;
use App\Repository\InvestissementRepository;
use App\Repository\OpportuniteRepository;
use App\Controller\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;



class InvestissementController extends AbstractController
{
    #[Route('/investissements', name: 'app_investissements')]
    public function index(): Response
    {
        return $this->render('front_office/investissements/index.html.twig', [
            'controller_name' => 'InvestissementController',
        ]);
    }

    #[Route('/new/{id}', name: 'app_AddInvest')]
    public function AddPr(Request $request, ManagerRegistry $doctrine, $id)
    {
        $invest = new Investissement();
        $form = $this->createForm(InvestissementType::class, $invest);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $opportunite = $em->getRepository(Opportunite::class)->find($id);
            $invest->setOpport($opportunite); // Assuming you have a 'bank' property in your Pret entity

            $em->persist($invest);
            $em->flush();
            return $this->redirectToRoute("app_investissements");
        }
        return $this->render('front_office/investissements/new.html.twig', ['form' => $form->createView()]);
    }
    ###[Route('/Afficherivestissement', name: 'app_afficherinvestissement')]
    public function showw(InvestissementRepository $repository)
    {
        $investissement = $repository->findall();
        return $this->render('front_office/investissements/affOpp.html.twig', ['investissement' => $investissement]);
    }

    ##[Route('/editInvest/{id}', name: 'app_edit')]
    public function edit(InvestissementRepository $repository, $id, Request $request)
    {
        $invest = $repository->find($id);
        $form = $this->createForm(InvestissementType::class, $invest);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("app_afficherliste");
        }

        return $this->render('front_office/investissements/editinvest.html.twig', [
            'f' => $form->createView(),
        ]);
    }



    ##[Route('/AfficherListeOpp', name: 'app_afficherliste')]
    public function show(OpportuniteRepository $repository)
    {
        $opportunite = $repository->findall();
        return $this->render('front_office/investissements/affOpp.html.twig', ['opport' => $opportunite]);
    }
}
