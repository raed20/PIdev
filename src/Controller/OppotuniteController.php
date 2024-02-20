<?php

namespace App\Controller;

use App\Entity\Opportunite;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\OpportuniteType;
use App\Repository\OpportuniteRepository;

class OppotuniteController extends AbstractController
{
    #[Route('/opportunite', name: 'app_opportunite')]
    public function index(): Response
    {
        return $this->render('opportunite/index.html.twig', [
            'controller_name' => 'OpportuniteController',
        ]);
    }

    #[Route('/Addopprtunite', name: 'app_Addopportunite')]
    public function Add(Request $request)
    {
        $opportunite = new Opportunite();
        $form = $this->CreateForm(OpportuniteType::class, $opportunite);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
            $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($opportunite);
            $em->flush();
            return $this->redirectToRoute("app_afficherliste");
        }
        return $this->render('opportunite/add.html.twig', ['f' => $form->createView()]);
    }
    #[Route('/AfficherListe', name: 'app_afficherliste')]
    public function Show(OpportuniteRepository $repository)
    {
        $opportunite = $repository->findall();
        return $this->render('opportunite/Affiche.html.twig', ['opportunite' => $opportunite]);
    }


    #[Route('/edit/{id}', name: 'app_edit')]
    public function edit(OpportuniteRepository $repository, $id, Request $request)
    {
        $opportunite = $repository->find($id);
        $form = $this->createForm(OpportuniteType::class, $opportunite);
        $form->add('Edit', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("app_afficherliste");
        }

        return $this->render('opportunite/edit.html.twig', [
            'f' => $form->createView(),
        ]);
    }
    #[Route('/delete/{id}', name: 'app_delete')]
    public function delete($id, OpportuniteRepository $repository)
    {
        $opportunite = $repository->find($id);

        if (!$opportunite) {
            throw $this->createNotFoundException('Opportunite non trouvé');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($opportunite);
        $em->flush();
        return $this->redirectToRoute('app_afficherliste');
    }
}
