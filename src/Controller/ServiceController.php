<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Security\Core\Security;
use App\Entity\Investissement;
use App\Entity\User;
use App\Entity\Opportunite;
use Psr\Log\LoggerInterface;
use App\Form\BuyType;
use App\Repository\InvestissementRepository;
use App\Repository\OpportuniteRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Controller\json;

use App\Service\StripeService;
use App\Service\PolygonApiService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('back_office/dashboard_back.html.twig');
    }

    #[Route('/test', name: 'api_stock_quote')]
    public function getStockQuote(PolygonApiService $polygonApiService)
    {
        // Call the service method to get stock quote data
        $stockQuoteData = $polygonApiService->getStockQuote();
        dump($stockQuoteData);
        return $this->render('test.html.twig', [
            'stock_quote_data' => $stockQuoteData,
        ]);
    }

    
#[Route('/buy-stocks/{id}', name: 'buy_stocks')]
public function buyStocks(Request $request, $id, PolygonApiService $polygonApiService, StripeService $stripeService, ManagerRegistry $doctrine,InvestissementRepository $investissementRepository, Security $security): Response
{ 

    $em = $doctrine->getManager();

   

    // Get the current user
    $user = $security->getUser();

    // Check if the user already has an investment for this opportunity
    $investissements = $investissementRepository->findBy(['user' => $user]);

    // If the user already has an investment, use it; otherwise, create a new one
    $investissement = $investissements[0] ?? null;

    if (!$investissement) {
        $investissement = new Investissement();
        $investissement->setUser($user);
    }

    // Retrieve stock information
    $stockQuoteData = $polygonApiService->getStockQuote();
    
    $stock = null;
    foreach ($stockQuoteData as $stockItem) {
        if ($stockItem['T'] === $id) {
            $stock = $stockItem;
            break;
        }
    }

    if (!$stock) {
        throw $this->createNotFoundException('Stock not found');
    }

    // Create the form
    $form = $this->createForm(BuyType::class);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Retrieve user data
        $user = $security->getUser();

        // Process payment
        $amount = $form->get('amount')->getData() * $stock['v']; // Adjusted amount

        // Create payment session with dynamic data from the investment
        $productName = $stock['T']; // Assuming 'name' is the key for the product name
        $unitAmount = $amount; // Use the adjusted amount
        $session = $stripeService->createPaymentSession($productName, $unitAmount);
        $investissement->setMontant($form->get('amount')->getData());
        $investissement->setTotalValue($amount);
        $investissement->setStockName($stock['T']);
        $investissement->setPrice($stock['v']);
        $investissement->setChangerate($stock['vw']);
        $em->persist($investissement);
        $em->flush();
        // Redirect to the Stripe checkout page
        $sessionUrl = $session->url;
        return $this->redirect($sessionUrl);
    }

    return $this->render('buy_stocks.html.twig', [
        'form' => $form->createView(),
        'stock' => $stock,
    ]);
}
#[Route('/getStockDataJson/{id}', name: 'get_stock_data_json')]
    public function getStockDataJson($id, PolygonApiService $polygonApiService): Response
    {
        // Call the service method to get stock data for the provided symbol
        $stockData = $polygonApiService->getStockData($id);
        
        // Return the stock data as JSON response
        return $this->json($stockData);
    }
   
    #[Route('/Afficherinv/{id}/{prix}', name: 'app_afficherinv')]
    public function showinv(InvestissementRepository $repository, $id,$prix, PolygonApiService $polygonApiService)
    {
        return $this->render('inv.html.twig', ['id' => $id, 'prix' =>$prix]);        ;
    }

      #[Route('/AfficherWalet', name: 'app_afficherwalet')]
      public function showwalet(InvestissementRepository $repository, Security $security)
      {
          // Retrieve the current user
          //$user = $security->getUser();
          $user = 1;
          
          // Check if the user is authenticated
          //if ($user) {
              // Get the user's investments from the repository
              $investissements = $repository->findBy(['user' => $user]);
              
              // Initialize an array to store opportunities
              $investissementData = [];
              // Loop through each investment to collect associated opportunities
              foreach ($investissements as $investissement) {
                if($investissement->getStockName()){
                $opportuniteId = $investissement->getId();
                $opportuniteName = $investissement->getStockName();
                $investissementid = $investissement->getPrice();
                $investissementid = $investissement->getChangerate();
                $montant = $investissement->getMontant();
                $totalValue = $investissement->getTotalValue();
                $investissementData[] = [
                    'opportuniteId' => $opportuniteId,
                    'opportuniteName' => $opportuniteName,
                    'montant' => $montant,
                    'totalValue' => $totalValue,
                    'investissementid' => $investissementid
                ];}
            }
              
              
              // Render the Twig template with the opportunities
              return $this->render('wallet.html.twig', [
                  'investissementData' => $investissementData
              ]);
          //} //else {
              // Handle the case when the user is not authenticated
              // For example, redirect the user to the login page
              //return $this->redirectToRoute('app_login');
          //}
      }
     
}    