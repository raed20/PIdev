<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Bank;
use App\Form\BankType;
use App\Repository\BankRepository;


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
    public function Add(Request $request)
    {
        $Bank = new Bank();
        $form = $this->CreateForm(BankType::class, $Bank);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
            $em = $this->getDoctrine()->getManager();
            if ($form -> isSubmitted() && $form->isValid()){
                $em->persist($Bank);
                $em->flush();
                return $this->redirectToRoute("app_bank");
            }   
        return $this->render('bank/addbank.html.twig', ['f' => $form->createView()]);

    }

#[Route('/Afficherlistebank', name: 'app_afficherlistebank')]
    public function Show(BankRepository $repository)
    {
        $Bank=$repository->findall();
        return $this->render('bank/Affichebank.html.twig',['Bank'=>$Bank]);
    }


    #[Route('/editbank/{id}', name: 'app_editbank')]
    public function edit(BankRepository $repository, $id, Request $request)
    {
        $Bank = $repository->find($id);
        $form = $this->createForm(BankType::class, $Bank);
        $form->add('Edit', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush(); 
            return $this->redirectToRoute("app_afficherlistebank");
        }

        return $this->render('bank/editbank.html.twig', [
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





