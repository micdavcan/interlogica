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

use Doctrine\Common\Collections\Expr\Comparison;
use Doctrine\Common\Collections\Criteria;

use Twig\Environment;

class VetrinaController {

    /**
     *
     * @Route("/", name="homepage")
     */
     public function index(Environment $twig, VenditaRepository $venditaRepository): Response
     {        
        $data_now = new \DateTime();
        //Tolgo 2gg alla data odierna
        $ultima_data_valida = $data_now->sub(new \DateInterval('P2D'));
        //echo $ultima_data_valida->format('d/m/Y');
        //Creo un criterio di comparazione
        $exp = new Comparison('data', Comparison::GTE, $ultima_data_valida);
        $criterio = new Criteria($exp);
        
        return new Response($twig->render('pasticceria/home.html.twig', [
            'vendite' => $venditaRepository->matching($criterio)
        ]));
    }
    
    ///**
    // * @Route("/", name="homepage")
    // */
    //public function index(Environment $twig, DolciRepository $dolciRepository): Response 
    //{
    //    return new Response($twig->render('pasticceria/index.html.twig', [
    //        'dolci' => $dolciRepository->findAll()
    //        ]));
    //}

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

    ///**
    // *
    // * @Route("/home", name="home")
    // */
    //public function home(Environment $twig, VenditaRepository $venditaRepository): Response
    //{
    //    return new Response($twig->render('pasticceria/home.html.twig', [
    //        'vendite' => $venditaRepository->findAll()
    //        //'vendite' => $venditaRepository->findBy(['data' => $data_now])
    //    ]));
    //}

    
}

