<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Pret;
use App\Form\PretType;
use App\Form\SearchbankType;
use App\Repository\PretRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\BankRepository;
use App\Entity\Bank;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


class LoanController extends AbstractController
{
    #[Route('/loanP', name: 'app_loan')]
    public function loan(): Response
    {
        return $this->render('front_office/loan/loanP.html.twig', [
            'controller_name' => 'LoanController',
        ]);
    }

    #[Route('/AddLoan/{id}', name: 'app_AddLoan')]
    public function AddPr(Request $request, ManagerRegistry $doctrine, $id, MailerInterface $mailer){
        $Loan = new Pret();
        $form = $this->createForm(PretType::class, $Loan);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $bank = $em->getRepository(Bank::class)->find($id);
            $Loan->setIdBank($bank); // Assuming you have a 'bank' property in your Pret entity

            $em->persist($Loan);
            $em->flush();
            // Get the user's email (assuming you have a User entity with an email property)
            $userEmail = 'raedmaaloul3@gmail.com';

        // Create the email
            $email = (new Email())
            ->from('hi@sandbox.smtp.mailtrap.io')
            ->to($userEmail)
            ->subject('Loan Added')
            ->text('Your loan has been successfully added.');

            // Send the email
            $mailer->send($email);
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
            $this->addFlash('success', 'votre demande de prêt a été modifié avec succès.');

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
        $this->addFlash('success', 'votre demande de prêt a été supprimée avec succès.');

        return $this->redirectToRoute('app_afficherlisteloan');
} 

    #[Route('/bankshow ', name: 'app_affbank')]
        public function Show(BankRepository $repository)
        {
            $Bank=$repository->findall();
            return $this->render('front_office/loan/bankshow.html.twig',['Bank'=>$Bank]);
        }

        // BankController.php
    #[Route('/chercher/{nom}', name: 'app_search_bank')]
    public function search(Request $request, BankRepository $bank): Response
    {
        $form = $this->createForm(SearchbankType::class);
        $form->handleRequest($request);

        $banks = $bank->findByName($form->get('Nom')->getData());

        return $this->render('front_office/loan/bankshow.html.twig', [
            'banks' => $banks,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/dashbordBank', name: 'app_dashBank')]
    public function dashboardAction(): Response
    {
        return $this->render('front_office/loan/dashbordBank.html.twig');
    }



}
