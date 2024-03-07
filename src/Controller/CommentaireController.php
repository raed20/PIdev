<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use App\Entity\Commentaire;
use App\Entity\Blog;
use App\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;  
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
        return new RedirectResponse($referer);
    }


    function filterComment(string $text_comment): string {
        $badWords = file('C:\Users\Mega-PC\Desktop\PIdev\public\uploads\badwords.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($badWords as $word) {
            $replacement = $word[0] . str_repeat('*', strlen($word) - 2) . $word[-1];
            $text_comment = preg_replace('/\b' . preg_quote($word) . '\b/i', $replacement, $text_comment);
        }
        return $text_comment;
    }

    #[Route('/add-commentfront/{id}', name: 'add_commentfront')]
    public function addCommentairefront($id, Request $request, Security $security): Response
    {
        $blog = $this->getDoctrine()->getRepository(Blog::class)->find($id);
    
        if (!$blog) {
            throw $this->createNotFoundException('Blog non trouvé avec l\'identifiant '.$id);
        }
    
         $commentaire = new Commentaire();
    
        $form = $this->createForm(CommentaireType::class, $commentaire);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $text_comment = $form->get('contenue')->getData();
            $filteredComment = $this->filterComment($text_comment);
            $commentaire->setContenue($filteredComment);
          // Récupérer l'utilisateur connecté (avec l'ID 3)
            $adminId = 1; // ID de l'admin statiquement défini à 3
            $user = $this->getDoctrine()->getRepository(User::class)->find($adminId);
            if (!$user) {
                throw $this->createNotFoundException('Admin non trouvé avec l\'identifiant '.$adminId);
            }
    //
            
    
            $commentaire->setIdblog($blog);
    
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commentaire);
            $entityManager->flush();
    
           return $this->redirectToRoute('blogdetails', ['id' => $commentaire->getIdblog()->getId()]);
    
        }
        dump($form);
        return $this->render('blog/addcomment.html.twig', [
           'formadd' => $form->createView(),
        ]);
    }



    #[Route('/edit-commentfront/{id}', name: 'edit_commentfront')]
public function editCommentairefront($id, Request $request, Security $security): Response
{
    $entityManager = $this->getDoctrine()->getManager();

    $user = $security->getUser();

   

    $commentaire = $entityManager->getRepository(Commentaire::class)->find($id);

    if (!$commentaire) {
        throw $this->createNotFoundException('Commentaire non trouvé avec l\'identifiant '.$id);
    }

    $form = $this->createForm(CommentaireType::class, $commentaire);

    // Traiter le formulaire soumis
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

        $entityManager->flush();

        return $this->redirectToRoute('blogdetails', ['id' => $commentaire->getIdblog()->getId()]);
    }

    return $this->render('blog/addcomment.html.twig', [
        'formadd' => $form->createView(),
    ]);
}

}   

