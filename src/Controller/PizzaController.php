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
    	$vectorlocal = array("SanVicente", "Alburquerque", "LaCodosera");

        return $this->render('pizza/index.html.twig', [
            'controller_name' => 'PizzaController',
            'minombre' => 'Lidia',
            'pizzas' => $vector,
            'localidades' => $vectorlocal
            
        ]);
    }


   /**
     * @Route("/pizza/nuevo", name="pizza_nuevo")
     */
    public function nuevaPizza()
    {
    	

        return $this->render('pizza/nuevo.html.twig', [
           
        ]);
    }
    /**
     * @Route("/pizza/editar", name="pizza_editar")
     */
    public function editarPizza()
    {
    	$vectorlocal = array("SanVicente", "Alburquerque", "LaCodosera");

        return $this->render('pizza/editar.html.twig', [
            'localidades' => $vectorlocal
        ]);
    }
    /**
     * @Route("/pizza/mostrar", name="pizza_mostrar")
     */
    public function mostrarPizza()
    {
    	
        return $this->render('pizza/mostrar.html.twig', [
            
        ]);
    }
    
     /**
     * @Route("/pizza/calcular/{parametro}", name="pizza_calcular", requeriments={"precio"="\d+"})
     */
    public function calcularPizza($precio)
    {
        $final = $precio * 1.21;
        return $this->render('pizza/nombre.html.twig', [
            
            'preciofinal' => $final

        ]);
    }
}