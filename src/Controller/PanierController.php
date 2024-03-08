<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Form\PanierType;
use App\Repository\PanierRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier')]
    public function index(): Response
    {
        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
        ]);
    }

    #[Route('/panier/add', name: 'app_panier_add')]
    public function add(ManagerRegistry $doctrine, Request $req): Response
    {
        $panier = new Panier();
        $f = $this->createForm(PanierType::class, $panier);
        $f->handleRequest($req);

        if ($f->isSubmitted() && $f->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($panier);
            $em->flush();
            return $this->redirectToRoute('app_panier_all');
        }
        return $this->renderForm('panier/add.html.twig', [
            'myForm' => $f,
        ]);
    }

    #[Route('/panier/all', name: 'app_panier_all')]
    public function getAll(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Panier::class);
        $paniers = $repo->findAll();
        return $this->render('panier/list.html.twig', [
            'paniers' => $paniers,
        ]);
    }



    #[Route('/panier/{id}', name: 'app_panier_show')]
    public function show(int $id, ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Panier::class);
        $panier = $repo->find($id);

        if (!$panier) {
            throw new NotFoundHttpException('Panier not found');
        }

        return $this->render('panier/show.html.twig', [
            'panier' => $panier,
        ]);
    }

    #[Route('/panier/edit/{ref}', name: 'app_edit_panier')]
    public function edit(PanierRepository $repository, $ref, Request $request, ManagerRegistry $doctrine)
    {
        $panier = $repository->find($ref);
        $form = $this->createForm(PanierType::class, $panier);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("app_panier_all");
        }

        return $this->renderForm('panier/add.html.twig', [
            'myForm' => $form,
        ]);
    }

    #[Route('/panier/delete/{ref}', name: 'app_delete_panier')]
    public function delete($ref, PanierRepository $repository, ManagerRegistry $doctrine)
    {
        $panier = $repository->find($ref);
        $em = $doctrine->getManager();
        $em->remove($panier);
        $em->flush();
        return $this->redirectToRoute('app_panier_all');
    }


    //Back Controller


    #[Route('/checkout', name: 'app_panier1_all')]
    public function getAll1(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Panier::class);
        $paniers = $repo->findAll();
        return $this->render('front_office/checkout.html.twig', [
            'paniers' => $paniers,
        ]);
    }

    #[Route('/productDelete/{ref}', name: 'app_delete1_panier')]
    public function deleteP($ref, PanierRepository $repository, ManagerRegistry $doctrine)
    {
        $panier = $repository->find($ref);
        $em = $doctrine->getManager();
        $em->remove($panier);
        $em->flush();
        return $this->redirectToRoute('app_panier1_all');
    }
    
    #[Route('/productEdit/{ref}', name: 'app_edit1_panier')]
    public function editProduct(PanierRepository $repository, $ref, Request $request, ManagerRegistry $doctrine)
    {
        $panier = $repository->find($ref);
        $form = $this->createForm(PanierType::class, $panier);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("app_panier1_all");
        }
    
        return $this->renderForm('front_office/productUpdate.html.twig', [
            'panier' => $panier,
            'myForm' => $form, // Pass the form to the template
        ]);
    }
    
}
