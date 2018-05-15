<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Persona;
use App\Form\PersonaType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
* @Route("/persona")
*/
class PersonaController extends Controller

{


    /**
     * @Route("/lista", name="persona_lista")
     */
    public function listado()

    {


        $repo = $this-> getDoctrine()->getRepository(Persona::class);
        $personas = $repo->findAll();

        
        return $this->render ('persona/index.html.twig', [
            'listapersonas' => $personas,
        ]);
    }



    /**
    * @Route("/nuevo", name="persona_nuevo")
     */
    public function index(Request $request)

    {

    	$persona = new Persona();

    	$formu = $this->createForm(PersonaType::class, $persona);
    	$formu->handleRequest($request);

    	if ($formu->isSubmitted()) {


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($persona);
            $entityManager->flush();
		

			return $this->redirectToRoute('persona_lista');      
			    		
    	}

        return $this->render('persona/nuevo.html.twig', [
            'formulario' => $formu->createView(),

        ]);

    }


}


