<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/product/add', name: 'app_product_add')]
    public function add(ManagerRegistry $doctrine, Request $req, ProductRepository $repo): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($product);
            $em->flush();
            return $this->redirectToRoute('app_product_all');
        }
        return $this->renderForm('product/add.html.twig', [
            'myForm' => $form,
        ]);
    }

    #[Route('/product/all', name: 'app_product_all')]
    public function getAll(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Product::class);
        $products = $repo->findAll();
        return $this->render('product/list.html.twig', [
            'list' => $products,
            'products' => $products,
        ]);
    }
    #[Route('/accueil', name: 'app_product1_all')]
    public function getAll1(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Product::class);
        $products = $repo->findAll();
        return $this->render('front/accueil.html.twig', [
            'list' => $products,
            'products' => $products,
        ]);
    }


    #[Route('/product/edit/{ref}', name: 'app_edit_product')]
    public function edit(ProductRepository $repository, $ref, Request $request, ManagerRegistry $doctrine)
    {
        $product = $repository->find($ref);
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("app_product_all");
        }

        return $this->renderForm('product/add.html.twig', [
            'myForm' => $form,
        ]);
    }

    #[Route('/product/delete/{ref}', name: 'app_delete_product')]
    public function delete($ref, ProductRepository $repository, ManagerRegistry $doctrine)
    {
        $product = $repository->find($ref);
        $em = $doctrine->getManager();
        $em->remove($product);
        $em->flush();
        return $this->redirectToRoute('app_product_all');
    }
}
