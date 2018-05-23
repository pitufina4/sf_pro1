<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Mascota;
use App\Form\MascotaType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
* @Route("/mascota")
*/
class MascotaController extends Controller
{
    /**
    * @Route("/nuevo", name="mascota_nuevo")
     */
    public function index(Request $request)

    {

        $mascota = new mascota();

        $formu = $this->createForm(MascotaType::class, $mascota);
        $formu->handleRequest($request);

        if ($formu->isSubmitted()) {


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mascota);
            $entityManager->flush();

             return $this->redirectToRoute('mascota_lista');
        
            /**return $this->redirectToRoute('cliente_detalle',array('id'=>$mascota->getCliente()->getId()));    */      
        }

        return $this->render('mascota/nuevo.html.twig', [
            'formulario' => $formu->createView(),

        ]);

    }

    /**
     * @Route("/lista", name="mascota_lista")
     */
    public function listado()

    {

        $repo = $this-> getDoctrine()->getRepository(Mascota::class);
        $mascotas = $repo->findAll();

        
        return $this->render ('mascota/index.html.twig', [
            'mascotas' => $mascotas,
        ]);
    }




    /**
     * @Route("/detalle", name="mascota_detalle")
     */
    public function detalle()

    {

        $repo = $this-> getDoctrine()->getRepository(Mascota::class);
        $mascotas = $repo->findAll();

        
        return $this->render ('mascota/detalle.html.twig', [
            'mascotas' => $mascotas,
        ]);
    }
}
