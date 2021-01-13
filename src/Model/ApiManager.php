<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class ApiManager
{
    public function selectAll()
    {
        $client = HttpClient::create();

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/2');

        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            $content = $response->getContent();

            $content = $response->toArray();

            return $content;
        }
    }
}
