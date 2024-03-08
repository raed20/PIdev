<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('back_office/user/profil.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {
       
        $user = $this->security->getUser();

        
        if (!$user) {
            
            return $this->redirectToRoute('app_login');
        }

        
        return $this->render('back_office/user/profil.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/profilefront', name: 'app_profilefront')]
    public function profilefront(): Response
    {
       
        $user = $this->security->getUser();

        
        if (!$user) {
            
            return $this->redirectToRoute('app_login');
        }

        
        return $this->render('front_office/service/profil.html.twig', [
            'user' => $user,
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


    #[Route('/home/Adduser', name: 'app_AddUser')]
    public function Add(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
       
        $user = new User();
    
  
        $form = $this->createForm(UserType::class, $user);
    
      
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
          
            $hashedPassword = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
            


             $imageFile = $form->get('image')->getData();

             if ($imageFile instanceof UploadedFile) {
                 $newFilename = md5(uniqid()) . '.' . $imageFile->guessExtension();
                 $imageFile->move($this->getParameter('image_directory'), $newFilename);
                 $user->setImage($newFilename);
             }
    
           
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
    
           
            return $this->redirectToRoute('app_afficherlisteusers');
        }
    
      
        return $this->render('back_office/user/add.html.twig', [
            'f' => $form->createView(),
        ]);
    }


    #[Route('/AfficherListeUsers', name: 'app_afficherlisteusers')]
    public function ShowUsers(Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $currentPage = $request->query->getInt('page', 1); 

        $itemsPerPage = 7; 
        $offset = ($currentPage - 1) * $itemsPerPage; 
        $searchQuery = $request->query->get('search', '');
        $commentRepository = $em->getRepository(User::class);

        

        if ($searchQuery !== '') {
            $user = $commentRepository->findBySearchQuery($searchQuery, $itemsPerPage, $offset);
            $totalItems = count($user); 
        } else {
            $user = $commentRepository->findBy([], null, $itemsPerPage, $offset);
            $totalItems = $commentRepository->count([]); 
        }

        $totalPages = ceil($totalItems / $itemsPerPage);

        return $this->render('back_office/user/Affiche.html.twig', [
            'user' => $user,
            'currentPage' => $currentPage,
            'searchQuery' => $searchQuery,
            'totalPages' => $totalPages,
        ]);
    }


    #[Route('/edit/{id}', name: 'app_edit')]
    public function edit(UserRepository $repository, $id, Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $User = $repository->find($id);
        $form = $this->createForm(UserType::class, $User);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           
            $imageFile = $form->get('image')->getData();

            if ($imageFile instanceof UploadedFile) {
                $newFilename = md5(uniqid()) . '.' . $imageFile->guessExtension();
                $imageFile->move($this->getParameter('image_directory'), $newFilename);
                $User->setImage($newFilename);
            }
           
            if (!empty($User->getPassword())) {
                $hashedPassword = $passwordEncoder->encodePassword($User, $User->getPassword());
                $User->setPassword($hashedPassword);
            }
    
            $em = $this->getDoctrine()->getManager();
            $em->flush(); 
            return $this->redirectToRoute("app_afficherlisteusers");
        }
    
        return $this->render('back_office/user/edit.html.twig', [
            'f' => $form->createView(),
        ]);
    }



    #[Route('/editfront/{id}', name: 'app_editfront')]
    public function editfront(UserRepository $repository, $id, Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $User = $repository->find($id);
        $form = $this->createForm(UserType::class, $User);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           
            $imageFile = $form->get('image')->getData();

            if ($imageFile instanceof UploadedFile) {
                $newFilename = md5(uniqid()) . '.' . $imageFile->guessExtension();
                $imageFile->move($this->getParameter('image_directory'), $newFilename);
                $User->setImage($newFilename);
            }
           
            if (!empty($User->getPassword())) {
                $hashedPassword = $passwordEncoder->encodePassword($User, $User->getPassword());
                $User->setPassword($hashedPassword);
            }
    
            $em = $this->getDoctrine()->getManager();
            $em->flush(); 
            return $this->redirectToRoute("app_profilefront");
        }
    
        return $this->render('front_office/service/edit.html.twig', [
            'f' => $form->createView(),
        ]);
    }



    #[Route('/deletefront/{id}', name: 'app_deletefront')]
    public function deletefront($id, UserRepository $repository): Response
    {
        $user = $repository->find($id);
    
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }
    
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();
    
      
        $this->addFlash('success', 'Utilisateur supprimé avec succès');
    
        return $this->redirectToRoute('app_profilefront');
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
    
      
        $this->addFlash('success', 'Utilisateur supprimé avec succès');
    
        return $this->redirectToRoute('app_afficherlisteusers');
    }


    


}
