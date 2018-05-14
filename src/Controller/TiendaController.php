<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	/**
     * @Route("")
     */
class TiendaController extends Controller
{

	const EMPLEADOS = array("Ángela", "Rita", "Pedro","Erika", "Juan");






    /**
     * @Route("/tienda", name="tienda_empleados")
     */
    public function listarEmpleados()
    {
        return $this->render('tienda/index.html.twig', [
            'empleados' => self::EMPLEADOS
        ]);
    }
     /**
     * @Route("/detalle", name="tienda_detalle"), 
     */
    public function detalleEmpleado()
    {

        return $this->render('tienda/detalle.html.twig', [
            'empleado' => self::EMPLEADOS[1]
        ]);
    }
       /**
     * @Route("/calcular/{posicion}", name="posicion_calcular",requirements={"posicion"="\d+"})
     */
    public function posicionEmpleado($posicion)
    {
        
        return $this->render('tienda/detalle.html.twig', [
            
            'empleado' =>self::EMPLEADOS[$posicion]

        ]);
    }

}
