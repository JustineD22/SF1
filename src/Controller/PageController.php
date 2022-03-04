<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/page', name: 'app_page')]
    public function index(): Response
    {
        $users = [
            ['username' => 'Michel'],
            ['username' => 'Bob'],
            ['username' => 'Jean-Patrick'],
            ['username' => 'Josianne']
        ];
        return $this->render('base.html.twig');
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/PageController.php',
        // ]);
    }
    #[Route('/machin', name: 'app_machin')]
    public function machin(): Response
    {
        throw $this->createNotFoundException('Rien ici');
    }
}