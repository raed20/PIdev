<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;


class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/profil.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

  


/*

    #[Route('/Adduser', name: 'app_AddUser')]
    public function Add(Request $request)
    {
        $User = new User();
        $form = $this->CreateForm(UserType::class, $User);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
            $em = $this->getDoctrine()->getManager();
            if ($form -> isSubmitted() && $form->isValid()){
                $em->persist($User);
                $em->flush();
                return $this->redirectToRoute("app_user");
            }   
        return $this->render('user/add.html.twig', ['f' => $form->createView()]);

    } */


    #[Route('/Adduser', name: 'app_AddUser')]
    public function Add(Request $request): Response
    {
        // Créer une instance de l'entité Article
        $User = new User();

        // Créer le formulaire associé à l'entité Article
        $form = $this->createForm(UserType::class, $User);

        // Gérer la soumission du formulaire
        $form->handleRequest($request);

        // Vérifier si le formulaire a été soumis et est valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Sauvegarder l'article en base de données
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($User);
            $entityManager->flush();

            // Rediriger l'utilisateur vers une autre page par exemple
            return $this->redirectToRoute('app_afficherliste');
        }

        // Rendre la vue Twig pour l'ajout avec le formulaire associé
        return $this->render('user/add.html.twig', [
            'f' => $form->createView(),
        ]);
    }


    #[Route('/AfficherListe', name: 'app_afficherliste')]
    public function Show(Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $currentPage = $request->query->getInt('page', 1); 

        $itemsPerPage = 7; 
        $offset = ($currentPage - 1) * $itemsPerPage; 
        $searchQuery = $request->query->get('search', '');
        $commentRepository = $em->getRepository(User::class);

        
        if ($searchQuery !== '') {
            $user = $commentRepository->findBySearchQuery($searchQuery, $itemsPerPage, $offset);
            $totalItems = count($user); // Count the search results
        } else {
            $user = $commentRepository->findBy([], null, $itemsPerPage, $offset);
            $totalItems = $commentRepository->count([]); // Count all items
        }

        $totalPages = ceil($totalItems / $itemsPerPage);

        return $this->render('user/Affiche.html.twig', [
            'user' => $user,
            'currentPage' => $currentPage,
            'searchQuery' => $searchQuery,
            'totalPages' => $totalPages,
        ]);
    }


    #[Route('/edit/{id}', name: 'app_edit')]
    public function edit(UserRepository $repository, $id, Request $request)
    {
        $User = $repository->find($id);
        $form = $this->createForm(UserType::class, $User);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush(); 
            return $this->redirectToRoute("app_afficherliste");
        }

        return $this->render('user/edit.html.twig', [
            'f' => $form->createView(),
        ]);
    
    }

    #[Route('/delete/{id}', name: 'app_delete')]
    public function delete($id, UserRepository $repository): Response
    {
        $user = $repository->find($id);
    
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }
    
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();
    
        // Ajouter un message flash pour la notification
        $this->addFlash('success', 'Utilisateur supprimé avec succès');
    
        return $this->redirectToRoute('app_afficherliste');
    }
}
