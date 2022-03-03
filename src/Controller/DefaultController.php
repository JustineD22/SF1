<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {
    #[Route('/', name: 'index')]
    public function index()
    {
        return new Response('<h1>Je fais du Symfony</h1>');
    }
    #[Route('/toto', name: 'toto')]
    public function toto(Request $request)
    {
        // $request = Request::createFromGlobals();
        //dd($request);
        $valeur = $request->query->get('valeur');
        $response = new Response("<h1> La valeur est $valeur </h1>",
        Response::HTTP_NOT_FOUND, 
        ['content-type' => 'text/html']
    );
        return $response;
    }
}