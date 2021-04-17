<?php

namespace App\Controller;

use App\Entity\Dolci;
use App\Entity\Vendita;
use App\Repository\DolciRepository;
use App\Repository\VenditaRepository;
use App\Repository\IngredientiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class VetrinaController extends AbstractController {

    /**
     * @Route("/", name="homepage")
     */
    public function index(Environment $twig, DolciRepository $dolciRepository): Response 
    {
        return new Response($twig->render('pasticceria/index.html.twig', [
            'dolci' => $dolciRepository->findAll()
            ]));
    }

    /**
    * @Route("/dettagli/{id}", name="dettagli")
    */
    public function ingredienti(Environment $twig, Dolci $Dolce, IngredientiRepository $ingredientiRepository): Response
    {
        return new Response($twig->render('pasticceria/ingredienti.html.twig', [
            'dolci' => $Dolce,
            'ingredienti' => $ingredientiRepository->findBy(['Dolce' => $Dolce], ['nome' => 'ASC']),
        ]));
    }

     /*
     public function index(): Response
     {
         //$repo = 
         //$ingredienti = $repo->findAll();
         return new Response('<html><body><h1>Ciao Test!</h1></body></html>');
     }  
     */
}

