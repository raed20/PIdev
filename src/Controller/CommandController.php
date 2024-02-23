<?php

namespace App\Controller;

use App\Entity\Command;
use App\Form\CommandType;
use App\Repository\CommandRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class CommandController extends AbstractController
{
    #[Route('/command', name: 'app_command')]
    public function index(): Response
    {
        return $this->render('command/index.html.twig', [
            'controller_name' => 'CommandController',
        ]);
    }

    #[Route('/command/add', name: 'app_command_add')]
    public function add(ManagerRegistry $doctrine, Request $req): Response
    {
        $command = new Command();
        $f = $this->createForm(CommandType::class, $command);
        $f->handleRequest($req);

        if ($f->isSubmitted() && $f->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($command);
            $em->flush();
            return $this->redirectToRoute('app_command_all');
        }
        return $this->renderForm('command/add.html.twig', [
            'myForm' => $f,
        ]);
    }

    #[Route('/command/all', name: 'app_command_all')]
    public function getAll(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Command::class);
        $commands = $repo->findAll();
        return $this->render('command/list.html.twig', [
            'list' => $commands,
            'commands' => $commands,
        ]);
    }

    #[Route('/command/{id}', name: 'app_command_show')]
    public function show(int $id, ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Command::class);
        $command = $repo->find($id);

        if (!$command) {
            throw new NotFoundHttpException('Command not found');
        }

        return $this->render('command/show.html.twig', [
            'command' => $command,
        ]);
    }

    #[Route('/command/edit/{ref}', name: 'app_edit_command')]
    public function edit(CommandRepository $repository, $ref, Request $request, ManagerRegistry $doctrine)
    {
        $command = $repository->find($ref);
        $form = $this->createForm(CommandType::class, $command);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("app_command_all");
        }

        return $this->renderForm('command/add.html.twig', [
            'myForm' => $form,
        ]);
    }

    #[Route('/command/delete/{ref}', name: 'app_delete_command')]
    public function delete($ref, CommandRepository $repository, ManagerRegistry $doctrine)
    {
        $command = $repository->find($ref);
        $em = $doctrine->getManager();
        $em->remove($command);
        $em->flush();
        return $this->redirectToRoute('app_command_all');
    }
}
