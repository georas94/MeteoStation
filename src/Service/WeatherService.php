<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpClient\Exception\ClientException;
class WeatherService
{
    private $client;
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->client = HttpClient::create();
        $this->apiKey = $apiKey;
    }

    /**
     * @return array
     */
    public function getWeather($city)
    {

        try {
        $response = $this->client->request('GET', 'https://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid=' . $this->apiKey. '&lang=fr');
        $statusCode = $response->getStatusCode();
        //$contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();
        }
        catch (ClientException $e) {
            die;   
            return;
        }

        return [
            'content' => $content ??null,
        ];
    }
    
}
