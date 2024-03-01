<?php

namespace App\Controller;
use App\Service\PolygonApiService;
use App\Entity\Opportunite;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        return $this->render('front_office/investissements/affOpp.html.twig', [
            'controller_name' => 'OpportuniteController',
        ]);
    }

    #[Route('/Addopprtunite', name: 'app_Addopportunite')]
    public function Add(Request $request)
    {
        $opportunite = new Opportunite();
        $form = $this->CreateForm(OpportuniteType::class, $opportunite);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($opportunite);
            $em->flush();
            return $this->redirectToRoute("app_afficherliste");
        }
        return $this->render('back_office/add.html.twig', ['f' => $form->createView()]);
    }

    #[Route('/AfficherListe', name: 'app_afficherliste')]
    public function Show(OpportuniteRepository $repository)
    {
        $opportunite = $repository->findall();
        return $this->render('back_office/Affiche.html.twig', ['opportunite' => $opportunite]);
    }

    #[Route('/edit/{id}', name: 'app_edit')]
    public function edit(OpportuniteRepository $repository, $id, Request $request)
    {
        $opportunite = $repository->find($id);
        $form = $this->createForm(OpportuniteType::class, $opportunite);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("app_afficherliste");
        }

        return $this->render('back_office/edit.html.twig', [
            'f' => $form->createView(),
            'opportunite' => $opportunite, // Pass the Opportunite entity to the template
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
