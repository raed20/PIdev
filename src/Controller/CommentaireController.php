<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentaireController extends AbstractController
{
    #[Route('/commentaire', name: 'app_commentaire')]
    public function index(): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'controller_name' => 'CommentaireController',
        ]);
    }
    #[Route('/AddComment', name: 'app_AddComment')]
    public function Add(Request $request)
    {
        $Comment = new Comment();
        $form = $this->CreateForm(BlogType::class, $Comment);
        $form->add('Comment', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
            $em = $this->getDoctrine()->getManager();
            if ($form -> isSubmitted() && $form->isValid()){
                $em->persist($blog);
                $em->flush();
                return $this->redirectToRoute("");
            }   
        return $this->render('blog/add.html.twig', ['f' => $form->createView()]);

    }

#[Route('/Affichercomment', name: 'app_afficherlistecomment')]
    public function Show(BlogRepository $repository)
    {
        $blog=$repository->findall();
        return $this->render('blog/Affiche.html.twig',['blog'=>$blog]);
    }


    #[Route('/editblog/{id}', name: 'app_editblog')]
    public function edit(BlogRepository $repository, $id, Request $request)
    {
        $blog = $repository->find($id);
        $form = $this->createForm(BlogType::class, $blog);
        $form->add('Edit', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush(); 
            return $this->redirectToRoute("app_afficherliste_blog");
        }

        return $this->render('blog/edit.html.twig', [
            'f' => $form->createView(),
        ]);
    }

    #[Route('/delete/{id}', name: 'app_delete')]
    public function delete($id, BlogRepository $repository)
    {
        $blog = $repository->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Blog non trouvé');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($blog);
        $em->flush();
        return $this->redirectToRoute('app_afficherliste');
} 
}   

