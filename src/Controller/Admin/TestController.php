<?php

namespace App\Controller\Admin;

use App\Entity\Ingredienti;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController {

    /**
     * @Route("/test", name="test")
     */
     public function index(): Response
     {
         //$repo = 
         //$ingredienti = $repo->findAll();
         return new Response('<html><body><h1>Ciao Test!</h1></body></html>');
     }  

}
