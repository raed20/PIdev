<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use App\Entity\Commentaire;
use App\Entity\Blog;

use App\Form\CommentaireType; 
use App\Form\BlogType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use App\Repository\BlogRepository; 


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

    #[Route('/delete-commentfront/{id}', name: 'delete_commentfront')]
    public function deleteCommentairefront(int $id, Request $request,Security $security): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $commentaire = $entityManager->getRepository(Commentaire::class)->find($id);

        if (!$commentaire) {
            throw $this->createNotFoundException('Commentaire non trouvé avec l\'identifiant '.$id);
        }

        $user = $security->getUser();
        $adminId = 3; 
        if ($user && $user->getUserIdentifier() !== $adminId) {
            throw new AccessDeniedException('Vous n\'avez pas le droit de supprimer ce commentaire.');
        }

        $commentaire->getIdblog()->removeCommentaire($commentaire);

        $entityManager->remove($commentaire);
        $entityManager->flush();

        $referer = $request->headers->get('referer');
        return new RedirectResponse($referer);;
    }



    

}   

