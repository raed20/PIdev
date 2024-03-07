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
use App\Entity\User;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Security\Core\Security;
use Phpml\ModelManager;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Dompdf\Dompdf;
use Dompdf\Options;




class LoanController extends AbstractController
{
    #[Route('/AddLoan/{id}', name: 'app_AddLoan')]
    public function AddPr(Request $request, ManagerRegistry $doctrine, $id , MailerInterface $mailer){
        $Loan = new Pret();
        $form = $this->createForm(PretType::class, $Loan);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $bank = $em->getRepository(Bank::class)->find($id);
    
            $Loan->setIdBank($bank); // Assuming you have a 'bank' property in your Pret entity
            $Loan->setLoanStatus('on hold');
            $em->persist($Loan);
            $em->flush();
            $email = (new Email())
                    ->from('raedmaaloul3@gmail.com')
                    ->to('raed.maaloul@esprit.tn')
                    ->subject('pret!')
                    ->text('You have added a new loan!');

                $mailer->send($email);
            $this->addFlash('success', 'votre demande de prêt a été ajouté avec succès.');

            return $this->redirectToRoute('app_afficherlisteloan');


        }
        return $this->render('front_office/loan/addloan.html.twig', ['loan' => $form->createView()]);
    }


    /*#[Route('/Afficherlisteloan', name: 'app_afficherlisteloan')]
    public function ShowPr(PretRepository $repository)
    {
        $pret=$repository->findall();
        return $this->render('front_office/loan/affichepret.html.twig',['pret'=>$pret]);
    }*/

    #[Route('/Afficherlisteloan', name: 'app_afficherlisteloan')]
    public function showw(PretRepository $repository, Security $security)
    {
        // Retrieve the current user
        //$user = $security->getUser();
        $user = 1;
        
        // Check if the user is authenticated
        //if ($user) {
            // Get the user's investments from the repository
            $prets = $repository->findBy(['user' => $user]);
            
            // Initialize an array to store opportunities
            $pretData = [];
            
            // Loop through each investment to collect associated opportunities
            foreach ($prets as $pret) {
                $pretid = $pret->getId();
                $bankName = $pret->getIdBank()->getNom();
                $gender = $pret->getGender();
                $Married = $pret->getMarried();
                $Dependents=$pret->getDependents();
                $Education=$pret->getEducation();
                $SelfEmployed=$pret->getSelfEmployed();
                $ApplicantIncome=$pret->getApplicantIncome();
                $CoapplicantIncome=$pret->getCoapplicantIncome();
                $LoanAmount=$pret->getLoanAmount();
                $LoanAmountTerm=$pret->getLoanAmountTerm();
                $CreditHistory=$pret->getCreditHistory();
                $PropertyArea=$pret->getPropertyArea();
                $LoanStatus=$pret->getLoanStatus();
            

                $pretData[] = [
                    'pretid' => $pretid,
                    'bankName' => $bankName,
                    'Gender' => $gender,
                    'Married' => $Married,
                    'Dependents'=>$Dependents ,
                    'Education'=>$Education ,
                    'SelfEmployed'=>$SelfEmployed,
                    'ApplicantIncome'=>$ApplicantIncome,
                    'CoapplicantIncome'=>$CoapplicantIncome,
                    'LoanAmount'=>$LoanAmount,
                    'LoanAmountTerm'=>$LoanAmountTerm,
                    'Credit_History'=>$CreditHistory,
                    'Property_Area'=>$PropertyArea,
                    'Loan_Status'=>$LoanStatus,
                ];
            }
            
            // Render the Twig template with the opportunities
            return $this->render('front_office/loan/affichepret.html.twig', [
                'pretData' => $pretData
            ]);
        //} //else {
            // Handle the case when the user is not authenticated
            // For example, redirect the user to the login page
            //return $this->redirectToRoute('app_login');
        //}
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

    #[Route('/loanCalc', name: 'loanCalc')]
    public function CalcAction(): Response
    {
        return $this->render('front_office/loan/loanCalc.html.twig');
    }

    #[Route('/pdfloan/{id}', name: 'app_loan_pdf')]
    public function generatePDF(EntityManagerInterface $entityManager, $id): Response
    {
        $pret = $entityManager->getRepository(Pret::class)->find($id);
        $html = $this->renderView('front_office/loan/loandetails.html.twig', [
            'a' => $pret,
        ]);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        $response = new Response();
        $response->setContent($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="Loan.pdf"');

        return $response;
    }




}
