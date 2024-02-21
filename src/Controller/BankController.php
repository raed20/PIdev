<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Entity\Bank;
use App\Form\BankType;
use App\Repository\BankRepository;
use Symfony\Component\String\Slugger\SluggerInterface;

class BankController extends AbstractController
{
    #[Route('/bank', name: 'app_bank')]
    public function index(): Response
    {
        return $this->render('bank/index.html.twig', [
            'controller_name' => 'BankController',
        ]);
    }


#[Route('/AddBank', name: 'app_AddBank')]
    public function Add(Request $request, SluggerInterface  $slugger): Response
    {
        $Bank = new Bank();
        $form = $this->CreateForm(BankType::class, $Bank);
        $form->add('Ajouter', SubmitType::class);
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
    public function edit(BankRepository $repository, $id, Request $request,SluggerInterface  $slugger)
    {
        $Bank = $repository->find($id);
        $form = $this->createForm(BankType::class, $Bank);
        $form->add('Edit', SubmitType::class);

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
            $em->flush(); 
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
        return $this->redirectToRoute('app_afficherlistebank');
} 
}





