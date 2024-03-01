<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PolygonApiService;
use App\Entity\Investissement;
use App\Entity\User;
use App\Entity\Opportunite;
use App\Form\InvestissementType;
use App\Repository\InvestissementRepository;
use App\Repository\OpportuniteRepository;
use App\Controller\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;




class InvestissementController extends AbstractController
{
    #[Route('/investissements', name: 'app_investissements')]
    public function index(): Response
    {
        return $this->render('front_office/investissements/index.html.twig', [
            'controller_name' => 'InvestissementController',
        ]);
    }

    #[Route('/new/{id}', name: 'app_AddInvest')]
    public function Addopp(Request $request, ManagerRegistry $doctrine, $id, InvestissementRepository $investissementRepository, Security $security): Response
    {
        $em = $doctrine->getManager();
        $opportunite = $em->getRepository(Opportunite::class)->find($id);

        if (!$opportunite) {
            throw $this->createNotFoundException('Opportunite not found with id '.$id);
        }

        // Get the current user
        $user = $security->getUser();

        // Check if the user already has an investment for this opportunity
        $investissements = $investissementRepository->findBy(['opport' => $opportunite, 'user' => $user]);

        // If the user already has an investment, use it; otherwise, create a new one
        $investissement = $investissements[0] ?? null;

        if (!$investissement) {
            $investissement = new Investissement();
            $investissement->setUser($user);
            $investissement->setOpport($opportunite);
        }

        // Create the form
        $form = $this->createForm(InvestissementType::class, $investissement);
        $form->handleRequest($request);

        // If the form is submitted and valid, update the investment and save it
        if ($form->isSubmitted() && $form->isValid()) {
            $number_of_stocks = $form->get('montant')->getData();
            $total_value = $number_of_stocks * $opportunite->getPrix();

            // Update the investment properties
            $investissement->setMontant($number_of_stocks);
            $investissement->setTotalValue($total_value);
            $investissement->setDateInvest(new \DateTime());

            // Persist the changes to the database
            $em->persist($investissement);
            $em->flush();

            // Redirect to the appropriate page
            return $this->redirectToRoute('app_afficherinvestissement');
        }

        // Render the form template with the form and opportunity data
        return $this->render('front_office/investissements/new.html.twig', [
            'form' => $form->createView(),
            'opportunite' => $opportunite,
        ]);
    }
    
    ###[Route('/Afficherivestissement', name: 'app_afficherinvestissement')]
    public function showw(InvestissementRepository $repository, Security $security)
    {
        // Retrieve the current user
        //$user = $security->getUser();
        $user = 1;
        
        // Check if the user is authenticated
        //if ($user) {
            // Get the user's investments from the repository
            $investissements = $repository->findBy(['user' => $user]);
            
            // Initialize an array to store opportunities
            $investissementData = [];
            
            // Loop through each investment to collect associated opportunities
            foreach ($investissements as $investissement) {
                $opportuniteId = $investissement->getOpport()->getId();
                $opportuniteName = $investissement->getOpport()->getName();
                $investissementid=$investissement->getId();
                $montant = $investissement->getMontant();
                $totalValue = $investissement->getTotalValue();
                $investissementData[] = [
                    'opportuniteId' => $opportuniteId,
                    'opportuniteName' => $opportuniteName,
                    'montant' => $montant,
                    'totalValue' => $totalValue,
                    'investissementid'=> $investissementid
                ];
            }
            
            // Render the Twig template with the opportunities
            return $this->render('front_office/investissements/index.html.twig', [
                'investissementData' => $investissementData
            ]);
        //} //else {
            // Handle the case when the user is not authenticated
            // For example, redirect the user to the login page
            //return $this->redirectToRoute('app_login');
        //}
    }
    #[Route('/delete/{id}', name: 'app_delete_investment')]
public function delete($id, InvestissementRepository $repository): RedirectResponse
{
    $investissement = $repository->find($id);

    if (!$investissement) {
        throw $this->createNotFoundException('Investissement non trouvé');
    }

    $entityManager = $this->getDoctrine()->getManager();
    $entityManager->remove($investissement);
    $entityManager->flush();

    return $this->redirectToRoute('app_afficherinvestissement');
}
    ##[Route('/editInvest/{id}', name: 'app_edit')]
    public function edit(InvestissementRepository $repository, $id, Request $request)
    {
        $invest = $repository->find($id);
        $form = $this->createForm(InvestissementType::class, $invest);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("app_afficherliste");
        }

        return $this->render('front_office/investissements/editinvest.html.twig', [
            'f' => $form->createView(),
        ]);
    }



    ##[Route('/AfficherListeOpp', name: 'app_afficherliste')]
    public function show(OpportuniteRepository $repository)
    {
        $opportunite = $repository->findall();
        return $this->render('front_office/investissements/affOpp.html.twig', ['opport' => $opportunite]);
    }

}

