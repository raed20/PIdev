<?php
// src/Service/UnsplashApiService.php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class UnsplashApiService
{
    private $httpClient;
    private $apiKey;

    public function __construct(HttpClientInterface $httpClient, string $apiKey)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $apiKey;
    }

    public function getCompanyLogo(string $companySymbol): array
    {
        $response = $this->httpClient->request('GET', "https://api.unsplash.com/company-logos/search", [
            'query' => [
                'query' => $companySymbol,
            ],
            'headers' => [
                'Authorization' => "Client-ID {$this->apiKey}",
            ],
        ]);

        return $response->toArray();
    }
}
