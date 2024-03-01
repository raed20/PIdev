<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;  
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(): Response
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('/category/add', name: 'app_category_add')]
    public function add(ManagerRegistry $doctrine, Request $req): Response
    {
        $category = new Category();
        $f = $this->createForm(CategoryType::class, $category);
        $f->handleRequest($req);

        if ($f->isSubmitted() && $f->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute('app_category_all');
        }
        return $this->renderForm('category/add.html.twig', [
            'myForm' => $f,
        ]);
    }

    #[Route('/category/all', name: 'app_category_all')]
    public function getAll(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Category::class);
        $categories = $repo->findAll();
        return $this->render('category/list.html.twig', [
            'list' => $categories,
            'categories' => $categories,
        ]);
    }

    #[Route('/shoppage', name: 'app_category1_all')]
    public function getAll1(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Category::class);
        $categories = $repo->findAll();
        return $this->render('front_office/shoppage.html.twig', [
            'categories' => $categories,
        ]);
    }


    #[Route('/category/edit/{ref}', name: 'app_edit_category')]
    public function edit(CategoryRepository $repository, $ref, Request $request, ManagerRegistry $doctrine)
    {
        $category = $repository->find($ref);
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush(); // Correction : Utilisez la méthode flush() sur l'EntityManager pour enregistrer les modifications en base de données.
            return $this->redirectToRoute("app_category_all");
        }

        return $this->renderForm('category/add.html.twig', [
            'myForm' => $form,
        ]);
    }

    #[Route('/category/delete/{ref}', name: 'app_delete_category')]
    public function delete($ref, CategoryRepository $repository, ManagerRegistry $doctrine)
    {
        $category = $repository->find($ref);
        $em = $doctrine->getManager();
        $em->remove($category);
        $em->flush();
        return $this->redirectToRoute('app_category_all');
    }
}
