<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Pret;
use App\Form\PretType;
use App\Repository\PretRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\BankRepository;


class LoanController extends AbstractController
{
    #[Route('/loanP', name: 'app_loan')]
    public function loan(): Response
    {
        return $this->render('loan/loanP.html.twig', [
            'controller_name' => 'LoanController',
        ]);
    }

    #[Route('/AddLoan', name: 'app_AddLoan')]
    public function AddPr(Request $request, ManagerRegistry $doctrine){
        $Loan = new Pret();
        $form = $this->CreateForm(PretType::class, $Loan);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($Loan);
            $em->flush();
            return $this->redirectToRoute("app_afficherlisteloan");
        }
        return $this->render('front_office/loan/addloan.html.twig', ['loan' => $form->createView()]);
    }


    #[Route('/Afficherlisteloan', name: 'app_afficherlisteloan')]
    public function ShowPr(PretRepository $repository)
    {
        $pret=$repository->findall();
        return $this->render('front_office/loan/affichepret.html.twig',['pret'=>$pret]);
    }

    #[Route('/editloan/{id}', name: 'app_editloan')]
    public function editPr(PretRepository $repository, $id, Request $request, ManagerRegistry $doctrine)
    {
        $Pret = $repository->find($id);
        $form = $this->createForm(PretType::class, $Pret);
        $form->add('Edit', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush(); 
            return $this->redirectToRoute("app_afficherlisteloan");
        }

        return $this->render('front_office/loan/editpret.html.twig', [
            'loan' => $form->createView(),
        ]);
    }

    #[Route('/deleteloan/{id}', name: 'app_deleteloan')]
    public function deletePr($id, PretRepository $repository)
    {
        $loan = $repository->find($id);

        if (!$loan) {
            throw $this->createNotFoundException('loan non trouvÃ©');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($loan);
        $em->flush();
        return $this->redirectToRoute('app_afficherlisteloan');
} 

    #[Route('/AfficherlistBank', name: 'app_afficherlistebank')]
        public function Show(BankRepository $repository)
        {
            $Bank=$repository->findall();
            return $this->render('front_office/loan/bankshow.html.twig',['Bank'=>$Bank]);
        }

}
