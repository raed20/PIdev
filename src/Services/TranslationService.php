<?php


namespace App\Service;

use Google\Cloud\Translate\V2\TranslateClient;



class TranslationService
{
    private $translateClient;

    public function __construct($apiKey)
    {
        $this->translateClient = new TranslateClient(['key' => $apiKey]);
    }

    public function translateText($text, $targetLanguage)
    {
        $result = $this->translateClient->translate($text, ['target' => $targetLanguage]);
        return $result['text'];
    }
}