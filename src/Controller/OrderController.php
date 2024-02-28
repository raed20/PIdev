<?php

namespace App\Controller;

use App\Entity\Order;
use App\Form\OrderType;
use App\Repository\OrderRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    #[Route('/order', name: 'app_order')]
    public function index(): Response
    {
        return $this->render('order/index.html.twig', [
            'controller_name' => 'OrderController',
        ]);
    }

    #[Route('/order/add', name: 'app_order_add')]
    public function add(ManagerRegistry $doctrine, Request $req): Response
    {
        $order = new Order();
        $f = $this->createForm(OrderType::class, $order);
        $f->handleRequest($req);

        if ($f->isSubmitted() && $f->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($order);
            $em->flush();
            return $this->redirectToRoute('app_order_all');
        }
        return $this->renderForm('order/add.html.twig', [
            'myForm' => $f,
        ]);
    }

    #[Route('/order/all', name: 'app_order_all')]
    public function getAll(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Order::class);
        $orders = $repo->findAll();
        return $this->render('order/list.html.twig', [
            'orders' => $orders,
        ]);
    }

    #[Route('/order/{id}', name: 'app_order_show')]
    public function show(int $id, ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Order::class);
        $order = $repo->find($id);

        if (!$order) {
            throw new NotFoundHttpException('Order not found');
        }

        return $this->render('order/show.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/order/edit/{ref}', name: 'app_edit_order')]
    public function edit(OrderRepository $repository, $ref, Request $request, ManagerRegistry $doctrine)
    {
        $order = $repository->find($ref);
        $form = $this->createForm(OrderType::class, $order);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("app_order_all");
        }

        return $this->renderForm('order/add.html.twig', [
            'myForm' => $form,
        ]);
    }

    #[Route('/order/delete/{ref}', name: 'app_delete_order')]
    public function delete($ref, OrderRepository $repository, ManagerRegistry $doctrine)
    {
        $order = $repository->find($ref);
        $em = $doctrine->getManager();
        $em->remove($order);
        $em->flush();
        return $this->redirectToRoute('app_order_all');
    }
}
