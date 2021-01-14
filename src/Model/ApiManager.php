<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class ApiManager
{
    public function selectAll()
    {
        $client = HttpClient::create();

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/1');

        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            $content = $response->getContent();

            $content = $response->toArray();

            return $content;
        }
    }

    public function selectAll2()
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
    public function selectAll3()
    {
        $client = HttpClient::create();

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/3');

        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            $content = $response->getContent();

            $content = $response->toArray();

            return $content;
        }
    }
    public function selectAll4()
    {
        $client = HttpClient::create();

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/4');

        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            $content = $response->getContent();

            $content = $response->toArray();

            return $content;
        }
    }
    public function selectAll5()
    {
        $client = HttpClient::create();

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/5');

        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            $content = $response->getContent();

            $content = $response->toArray();

            return $content;
        }
    }
    public function selectAll6()
    {
        $client = HttpClient::create();

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/6');

        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            $content = $response->getContent();

            $content = $response->toArray();

            return $content;
        }
    }
    public function selectAll7()
    {
        $client = HttpClient::create();

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/7');

        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            $content = $response->getContent();

            $content = $response->toArray();

            return $content;
        }
    }
    public function selectAll8()
    {
        $client = HttpClient::create();

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/8');

        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            $content = $response->getContent();

            $content = $response->toArray();

            return $content;
        }
    }
    public function selectAll9()
    {
        $client = HttpClient::create();

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/9');

        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            $content = $response->getContent();

            $content = $response->toArray();

            return $content;
        }
    }
    public function selectAll10()
    {
        $client = HttpClient::create();

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/10');

        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            $content = $response->getContent();

            $content = $response->toArray();

            return $content;
        }
    }
}
