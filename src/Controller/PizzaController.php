<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PizzaController extends Controller
{
    /**
     * @Route("/pizza", name="pizza")
     */
    public function index()
    {
    	$vector = array("Margarita", "Carbonara", "Hawaiana");
    	$vectordos = array("Tomate", "Mozzarela", "Oregano", "Bacon");
        return $this->render('pizza/index.html.twig', [
            'controller_name' => 'PizzaController',
            'minombre' => 'Lidia',
            'ingredientes' => $vectordos
        ]);
    }


   /**
     * @Route("/pizza/nuevo", name="pizza_nuevo")
     */
    public function nuevaPizza()
    {
    	
        return $this->render('pizza/index.html.twig', [
            
        ]);
    }
}