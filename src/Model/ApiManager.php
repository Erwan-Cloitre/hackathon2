<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class ApiManager
{
    public function selectOneHero(int $id)
    {
        $client = HttpClient::create();

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/' . $id);

        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            $content = $response->getContent();

            $content = $response->toArray();

            return $content;
        }
    }

    public function selectAll()
    {
        $client = HttpClient::create();

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/228');

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

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/502');

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

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/729');

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

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/332');

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

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/724');

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

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/686');

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

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/485');

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

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/213');

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

        $response = $client->request('GET', 'https://superheroapi.com/api/10214898537337411/289');

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
