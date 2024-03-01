<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PolygonApiService
{
    private $apiKey;
    private $httpClient;

    public function __construct(string $apiKey, HttpClientInterface $httpClient)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = $httpClient;
    }

    public function getStockQuote(): array
{
    $response = $this->httpClient->request('GET', "https://api.polygon.io/v2/aggs/grouped/locale/us/market/stocks/2023-01-09", [
        'query' => [
            'apiKey' => $this->apiKey,
        ],
    ]);
    
    // Dump the response data for debugging
    dump($response->getContent());

    // Process the response data to extract the necessary information
    $responseData = $response->toArray();
    $quotes = $responseData['results']; // Assuming 'results' contains the stock quotes
    

    return $quotes;
}

}
