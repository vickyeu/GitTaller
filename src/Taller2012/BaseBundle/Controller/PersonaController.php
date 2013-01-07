<?php

namespace Taller2012\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Taller2012\BaseBundle\Entity\Persona;
use Symfony\Component\HttpFoundation\Request;
use Taller2012\BaseBundle\Form\PersonaType;

class PersonaController extends Controller
{
  public function newAction(Request $request) {
    $persona = new Persona();
    $form = $this->createForm(new PersonaType(), $persona);
    if ($request->getMethod() == 'POST') {
      $form->bindRequest($request);       
      if ($form->isValid()) {
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($persona);
        $em->flush();
        }         
      }
    return $this->render('Taller2012BaseBundle:Default:cargaPersona.html.twig', array(
          'form' => $form->createView(),));
    }     

    
}
?>
