<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Blog;
use Doctrine\ORM\EntityManagerInterface;


class LikeController extends AbstractController
{
    #[Route('/like/blog/{id}', name: 'app_likepost')]
    public function like(Blog $post, EntityManagerInterface $manager): Response
    {
       $user = $this->getUser();
       
       if ($post->isLikedByUser($user)){
        $post->removeLike($user);
        $manager->flush();
         return $this->json([
             "message" => "Disliked!"]);
       }

    $post->addLike($user);
    $manager->flush();
    
    return $this->json(["message" =>"liked"]); 

    

    }
}
 