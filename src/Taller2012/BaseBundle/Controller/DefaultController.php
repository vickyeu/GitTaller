<?php

namespace Taller2012\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('Taller2012BaseBundle:Default:index.html.twig', array());
        //return $this->render('Taller2012BaseBundle:Default:layoutBase.html.twig', array());
    }
    public function listadoAlumnosAction()
    { 
        $em = $this->getDoctrine()->getEntityManager();
        $dql = "SELECT p.id, p.nombre, p.apellido, l.nombre from Taller2012BaseBundle:Persona p join p.idlocalidad l";
        $query = $em->createQuery($dql);
        $personas = $query->getResult();
        //$personas = $em->getRepository('Taller2012BaseBundle:Persona')->findAll();
        return $this->render('Taller2012BaseBundle:Default:usuarios.html.twig', array('personas' => $personas));
    }
}

?>
