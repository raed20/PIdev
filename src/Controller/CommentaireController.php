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
    #[Route('/AddComment/{id}', name: 'app_AddComment')]
    public function AddComment(Blog $blog, Request $request)
    {
        $comment = new Commentaire();
    
        $form = $this->createForm(CommentaireType::class, $comment);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setBlog($blog);
                $em = $this->getDoctrine()->getManager();
    
            $em->persist($comment);
            $em->flush();
            return $this->redirectToRoute('blogdetails', ['id' => $blog->getId()]);
        }
    
        return $this->render('blog/showblogdetaille.html.twig', [
            'form' => $form->createView(),
            'blog' => $blog, 
        ]);
    }
    

#[Route('/Affichercomment', name: 'app_afficherlistecomment')]
    public function Show(BlogRepository $repository)
    {
        $blog=$repository->findall();
        return $this->render('comment/Affiche.html.twig',['blog'=>$blog]);
    }


    #[Route('/editcomment/{id}', name: 'app_editcomment')]
    public function edit(BlogRepository $repository, $id, Request $request)
    {
        $blog = $repository->find($id);
        $form = $this->createForm(BlogType::class, $blog);
        $form->add('Edit', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush(); 
            return $this->redirectToRoute("app_afficherlistecomment");
        }

        return $this->render('blog/editcomment.html.twig', [
            'f' => $form->createView(),
        ]);
    }

    #[Route('/deletecomment/{id}', name: 'app_deletecomment')]
    public function delete($id, BlogRepository $repository)
    {
        $blog = $repository->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('comment non trouvé');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($blog);
        $em->flush();
        return $this->redirectToRoute('app_afficherlistecomment');
} 
}   

