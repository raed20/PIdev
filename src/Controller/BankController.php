<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Entity\Bank;
use App\Form\BankType;
use App\Form\PretType;
use App\Repository\BankRepository;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Repository\PretRepository;

class BankController extends AbstractController
{
  
#[Route('/AddBank', name: 'app_AddBank')]
    public function Add(Request $request, SluggerInterface  $slugger): Response
    {
        $Bank = new Bank();
        $form = $this->CreateForm(BankType::class, $Bank);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $logo = $form->get('logo')->getData();

                // this condition is needed because the 'brochure' field is not required
                // so the PDF file must be processed only when a file is uploaded
            if ($logo) {
                $originalFilename = pathinfo($logo->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$logo->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $logo->move(
                        $this->getParameter('bank_directory'),
                        $newFilename
                        );
                    } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                    }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $Bank->setLogo($newFilename);
            }

            $em->persist($Bank);
            $em->flush();
            return $this->redirectToRoute("app_afficherlistebank");
        }
            
        return $this->render('back_office/bank/addbank.html.twig', ['f' => $form->createView()]);

    }

    #[Route('/Afficherlistebank', name: 'app_afficherlistebank')]
    public function Show(BankRepository $repository)
    {
        $Bank=$repository->findall();
        return $this->render('back_office/bank/Affichebank.html.twig',['Bank'=>$Bank]);
    }


    #[Route('/editbank/{id}', name: 'app_editbank')]
    public function editbank(BankRepository $repository, $id, Request $request, ManagerRegistry $doctrine, SluggerInterface  $slugger)
    {
        $bank = $repository->find($id);
        $form = $this->createForm(BankType::class, $bank);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $logo = $form->get('logo')->getData();

            if ($logo) {
                $originalFilename = pathinfo($logo->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $logo->guessExtension();

                try {
                    $logo->move(
                        $this->getParameter('bank_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                  // Handle file upload exception
                }

                $bank->setLogo($newFilename);
        }
            $em = $doctrine->getManager();
            $em->flush(); 
            $this->addFlash('success', 'Banque a été modifié avec succès.');

            return $this->redirectToRoute("app_afficherlistebank");
        }

        return $this->render('back_office/bank/editbank.html.twig', [
            'f' => $form->createView(),
        ]);
    }
    
    

    #[Route('/deletebank/{id}', name: 'app_deletebank')]
    public function delete($id, BankRepository $repository)
    {
        $bank = $repository->find($id);

        if (!$bank) {
            throw $this->createNotFoundException('bank non trouvÃ©');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($bank);
        $em->flush();
        $this->addFlash('success', 'Un banque a été supprimé avec succès.');

        return $this->redirectToRoute('app_afficherlistebank');
    }

    #[Route('/Afficherloans', name: 'app_afficherlisteloanAdmin')]
    public function ShowPr(PretRepository $repository)
    {
        $pret=$repository->findall();
        return $this->render('back_office/loan/allloans.html.twig',['pret'=>$pret]);
    }
    
    #[Route('/updateloanAdmin/{id}', name: 'app_updateloanAdmin')]
    public function updateLoanAdmin(PretRepository $repository, $id, Request $request, ManagerRegistry $doctrine)
    {
        $pret = $repository->find($id);
        $form = $this->createForm(PretType::class, $pret);

        $originalLoanStatus = $pret->getLoanStatus();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $newLoanStatus = $pret->getLoanStatus();

            if ($newLoanStatus !== $originalLoanStatus) {
                $em = $doctrine->getManager();
                $em->flush();

                $this->addFlash('success', 'Le statut du prêt a été modifié avec succès.');
            }

            return $this->redirectToRoute('app_afficherlisteloanAdmin');
        }

        return $this->render('back_office/bank/updatepret.html.twig', [
            'pret' => $pret,
            'loan' => $form->createView(),
        ]);
    }

    #[Route('/getloans/{id}', name: 'get_loans')]
    public function getLoans($id, PretRepository $pretRepository)
    {
        $bank = $this->getDoctrine()->getRepository(Bank::class)->find($id);
        if (!$bank) {
            throw $this->createNotFoundException('La banque n\'a pas été trouvée.');
        }
    
        $loans = $pretRepository->findBy(['IdBank' => $bank]); // Utiliser 'IdBank' au lieu de 'Bank'
        $pretData = [];
        foreach ($loans as $pret) {
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
    
        // Render the Twig template
        return $this->render('back_office/bank/loanasbank.html.twig', [
            'pretData' => $pretData
        ]);    
    }
    
    

}





