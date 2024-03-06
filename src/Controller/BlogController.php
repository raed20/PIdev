<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Blog;
use App\Form\BlogType;
use App\Form\SearchType;
use App\Repository\BlogRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Model\SearchData;
use App\blackknight467\StarRatingBundle\StarRatingBundle;
use Symfony\Component\HttpKernel\Kernel;


class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function Showfront(BlogRepository $repository, Request $request)
    {
        $searchData = new searchData();
        $form =$this->createForm(SearchType::class, $searchData);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $searchData->page= $request->query->getInt('page',1);
            $blog= $repository->findBySearch($searchData);
            
            return $this->render('blog/index.html.twig',[
                'form'=>$form->createView(),
                'blog'=>$blog
            ]);
            
        }

        $blog=$repository->findall();
        return $this->render('blog/index.html.twig',[
            'form'=>$form->createView(),
            'blog'=>$blog
        ]);

    }



#[Route('/AddBlog', name: 'app_AddBlog')]
    public function Add(Request $request)
    {
        $blog = new Blog();
        $form = $this->CreateForm(BlogType::class, $blog);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
            $em = $this->getDoctrine()->getManager();
            if ($form -> isSubmitted() && $form->isValid()){
                $em->persist($blog);
                $em->flush();
                return $this->redirectToRoute("app_afficherliste");
            }   
        return $this->render('blog/add.html.twig', ['f' => $form->createView()]);

    }

#[Route('/AfficherListe', name: 'app_afficherliste')]
    public function Show(BlogRepository $repository)
    {
        $blog=$repository->findall();
        return $this->render('blog/Affiche.html.twig',['blog'=>$blog]);
    }

    


    #[Route('/editblog/{id}', name: 'app_editblog')]
    public function edit(BlogRepository $repository, $id, Request $request)
    {
        $blog = $repository->find($id);
        $form = $this->createForm(BlogType::class, $blog);
        $form->add('Edit', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush(); 
            return $this->redirectToRoute("app_afficherliste");
        }

        return $this->render('blog/edit.html.twig', [
            'f' => $form->createView(),
        ]);
    }

    #[Route('/delete/{id}', name: 'app_delete')]
    public function delete($id, BlogRepository $repository)
    {
        $blog = $repository->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Blog non trouvé');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($blog);
        $em->flush();
        return $this->redirectToRoute('app_afficherliste');
} 

    #[Route('/blogdetails/{id}', name: 'blogdetails' )]

        public function blogdetails( $id,ManagerRegistry $doctrine):Response{
            
            
            $BlogRepository = $doctrine->getRepository(Blog::class);
            $blog = $BlogRepository->find($id);

            $comments = $blog->getCommentaires();

            return $this->render('blog/showblogdetaille.html.twig', [
                'blog' => $blog,
                'comments' => $comments,
                
            ]);
            
        }

}   
