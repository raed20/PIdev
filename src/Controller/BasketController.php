<?php

namespace App\Controller;

use App\Entity\Basket;
use App\Form\BasketType;
use App\Repository\BasketRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class BasketController extends AbstractController
{
    #[Route('/basket', name: 'app_basket')]
    public function index(): Response
    {
        return $this->render('basket/index.html.twig', [
            'controller_name' => 'BasketController',
        ]);
    }

    #[Route('/basket/add', name: 'app_basket_add')]
    public function add(ManagerRegistry $doctrine, Request $req): Response
    {
        $basket = new Basket();
        $f = $this->createForm(BasketType::class, $basket);
        $f->handleRequest($req);

        if ($f->isSubmitted() && $f->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($basket);
            $em->flush();
            return $this->redirectToRoute('app_basket_all');
        }
        return $this->renderForm('basket/add.html.twig', [
            'myForm' => $f,
        ]);
    }

    #[Route('/basket/all', name: 'app_basket_all')]
    public function getAll(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Basket::class);
        $baskets = $repo->findAll();
        return $this->render('basket/list.html.twig', [
            'list' => $baskets,
            'baskets' => $baskets,
        ]);
    }

    #[Route('/basket/{id}', name: 'app_basket_show')]
    public function show(int $id, ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Basket::class);
        $basket = $repo->find($id);

        if (!$basket) {
            throw new NotFoundHttpException('Basket not found');
        }

        return $this->render('basket/show.html.twig', [
            'basket' => $basket,
        ]);
    }

    #[Route('/basket/edit/{ref}', name: 'app_edit_basket')]
    public function edit(BasketRepository $repository, $ref, Request $request, ManagerRegistry $doctrine)
    {
        $basket = $repository->find($ref);
        $form = $this->createForm(BasketType::class, $basket);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("app_basket_all");
        }

        return $this->renderForm('basket/add.html.twig', [
            'myForm' => $form,
        ]);
    }

    #[Route('/basket/delete/{ref}', name: 'app_delete_basket')]
    public function delete($ref, BasketRepository $repository, ManagerRegistry $doctrine)
    {
        $basket = $repository->find($ref);
        $em = $doctrine->getManager();
        $em->remove($basket);
        $em->flush();
        return $this->redirectToRoute('app_basket_all');
    }
}
