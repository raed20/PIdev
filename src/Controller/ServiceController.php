<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
namespace App\Controller;
use App\Service\UnsplashApiService;
use App\Service\PolygonApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('back_office/dashboard_back.html.twig');
    }
    #[Route('/test', name: 'api_stock_quote')]
    public function getStockQuote( PolygonApiService $polygonApiService, UnsplashApiService $unsplashApiService)
    {
        // Call the service method to get stock quote data
        $stockQuoteData = $polygonApiService->getStockQuote();
        dump($stockQuoteData);
        // Render the data in a Twig template
        foreach ($stockQuoteData as $quote) {
            $companySymbol = $quote['T']; // Assuming 'T' is the key for the company symbol in each quote
            // Do something with $companySymbol, like calling the Unsplash API to get the company logo
            // For example:
            $logoData = $unsplashApiService->getCompanyLogo($companySymbol);
        }

        return $this->render('test.html.twig', [
            'stock_quote_data' => $stockQuoteData,
        ]);
    }
    
}
