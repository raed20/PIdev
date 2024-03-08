<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Mime\Email;
use App\Form\RegistrationFormType;
use App\Security\AppCustomAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;


class RegistrationController extends AbstractController
{
    
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {


            
            $imageFile = $form->get('image')->getData();

            if ($imageFile instanceof UploadedFile) {
                $newFilename = md5(uniqid()) . '.' . $imageFile->guessExtension();
                $imageFile->move($this->getParameter('image_directory'), $newFilename);
                $user->setImage($newFilename);
            }

           
            $role = $user->getRoles();
            
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );



            


            
            

            $entityManager->persist($user);
            $entityManager->flush();
            if ($role === 'ROLE_FOURNISSEUR') {
                return $this->redirectToRoute('app_login');
            } elseif ($role === 'ROLE_CLIENT') {
                return $this->redirectToRoute('app_login');
            }

            // Envoi de l'e-mail de vérification
            $verificationLink = $this->generateUrl('app_verify_email', [
                'token' => $user->getVerificationToken(),
            ], UrlGeneratorInterface::ABSOLUTE_URL);

            $email = (new Email())
                ->from('kays.bentaleb@esprit.tn')
                ->to($user->getEmail())
                ->subject('Vérification de votre adresse e-mail')
                ->html('<p>Merci de cliquer sur le lien suivant pour vérifier votre adresse e-mail :</p><a href="' . $verificationLink . '">Vérifier votre e-mail</a>');

            $mailer->send($email);
            
            

    return $this->redirectToRoute('app_login');

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }



    private $emailVerifier;

    public function __construct(VerifyEmailHelperInterface $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }



   // #[Route('/verifyemail', name: 'app_verify_email')]
   // public function verifyEmail(Request $request): Response
   // {
     //   $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
       // try {
       //     $this->emailVerifier->validateEmailConfirmation($request, $this->getUser()->getId());
      //  } catch (VerifyEmailExceptionInterface $exception) {
          //  $this->addFlash('verify_email_error', $exception->getReason());

         //   return $this->redirectToRoute('app_register');
    //    }
      //  $this->addFlash('success','your email address has been verified.');

      //  return $this->redirectToRoute('app_home');
 //  }
    


}
