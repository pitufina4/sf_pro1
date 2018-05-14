<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	 /**
     * @Route("/ingredientes")
     */
class IngredientesController extends Controller
{
    /**
     * @Route(" ", name="ingredientes")
     */
    public function index()
    {
	$vector = array("Tomate", "Queso", "Oregano", "Bacon");
    
        return $this->render('ingredientes/index.html.twig', [
            'controller_name' => 'IngredientesController',
            'ingredientes' => $vector,
        ]);
    }
 	/**
     * @Route("/lista", name="ingredientes_lista")
     */
    public function listaIngredientes()
    {
    	
        return $this->render('ingredientes/lista.html.twig', [
           
        ]);
    } 

	/**
     * @Route("/mostrar", name="ingredientes_mostrar")
     */
    public function mostrarIngredientes()
    {
    	
        return $this->render('ingredientes/mostrar.html.twig', [
           
        ]);
    } 
    /**
     * @Route("/editar", name="ingredientes_editar")
     */
    public function editarIngredientes()
    {
    	
        return $this->render('ingredientes/editar.html.twig', [
           
        ]);
    } 


}
