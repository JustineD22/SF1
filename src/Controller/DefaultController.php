<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    #[Route('/', name: 'index')]
    public function index()
    {
        return new Response('<h1>Je fais du Symfony</h1>');
    }

    #[Route('/toto/{name}', name: 'toto', methods: ['GET'], schemes: ['https'])]
    public function toto(string $name = "truc")
    {
        $response = new Response(
            "<h1>La valeur est $name</h1>",
            Response::HTTP_NOT_FOUND,
            ['content-type' => 'text/html']
        );

        return $response;
    }

    #[Route(path: '/{id}', name: 'testById', priority: 1, defaults: ['title' => 'La page a Michel'] ,requirements: ['id' => '\d+'], methods: ['GET'], schemes: ['https'])]
    public function testById(Request $request, int $id)
    {
        return new Response("<h1>La valeur est $id</h1>");
    }

    #[Route(path: '/{name}', name: 'testByName', priority: 2, methods: ['GET'], schemes: ['https'])]
    public function testByName(string $name = "defaut")
    {
        return new Response("<h1>Le mot est $name</h1>");
    }
}