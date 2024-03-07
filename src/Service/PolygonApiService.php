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
    
    dump($response->getContent());

    $responseData = $response->toArray();
    $quotes = $responseData['results']; 
    return $quotes;
}
public function getStockData(string $id): array
{
    $response = $this->httpClient->request('GET', "https://api.polygon.io/v2/aggs/ticker/{$id}/range/1/day/2023-01-01/2023-01-31?apiKey=hE35s2CmZd4Q0EHSF5pjm3BdDXsmBkAx", [
        'query' => [
            'apiKey' => $this->apiKey,
        ],
    ]);
    
    $responseData = $response->toArray();
    
    if (!isset($responseData['results'])) {
        throw new \RuntimeException('Invalid response format: results key not found');
    }

    return $responseData['results'];
}
}
