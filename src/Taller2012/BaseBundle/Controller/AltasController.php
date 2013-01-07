<?php

namespace Taller2012\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Taller2012\BaseBundle\Entity\Localidad;
use Taller2012\BaseBundle\Form\LocalidadType;
use Taller2012\BaseBundle\Entity\Provincia;
use Taller2012\BaseBundle\Form\ProvinciaType;
use Taller2012\BaseBundle\Entity\Carrera;
use Taller2012\BaseBundle\Form\CarreraType;
use Taller2012\BaseBundle\Entity\Plan;
use Taller2012\BaseBundle\Form\PlanCarreraType;
use Taller2012\BaseBundle\Entity\Cohorte;
use Taller2012\BaseBundle\Form\CohorteType;
use Taller2012\BaseBundle\Entity\Curso;
use Taller2012\BaseBundle\Form\CursoType;
use Taller2012\BaseBundle\Entity\Instancia;
use Taller2012\BaseBundle\Form\InstanciaType;
use Taller2012\BaseBundle\Entity\Usuario;
use Taller2012\BaseBundle\Form\UsuarioType;


class AltasController extends Controller
{
    public function newLocalidadAction(Request $request){
      $localidad = new Localidad();
      $form = $this->createForm(new LocalidadType(), $localidad);
      if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);       
        if ($form->isValid()) {
          $em = $this->getDoctrine()->getEntityManager();
          $em->persist($localidad);
          $em->flush();
          }         
        }
      return $this->render('Taller2012BaseBundle:Default:altaLocalidad.html.twig', array(
            'form' => $form->createView(),));     
    }
    
    public function newProvinciaAction(Request $request){
      $provincia = new Provincia();
      $form = $this->createForm(new ProvinciaType(), $provincia);
      if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);       
        if ($form->isValid()) {
          $em = $this->getDoctrine()->getEntityManager();
          $em->persist($provincia);
          $em->flush();
          }         
        }
      return $this->render('Taller2012BaseBundle:Default:altaLocalidad.html.twig', array(
            'form' => $form->createView(),));    
      }
      
    public function newCarreraAction(Request $request){
      $carrera = new Carrera();
      $form = $this->createForm(new CarreraType(), $carrera);
      if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);       
        if ($form->isValid()) {
          $em = $this->getDoctrine()->getEntityManager();
          $em->persist($carrera);
          $em->flush();
          }         
        }
      return $this->render('Taller2012BaseBundle:Default:altaCarrera.html.twig', array(
            'form' => $form->createView(),));    
      }
      
    public function newPlanCarreraAction(Request $request){
      $plan = new Plan();
      $form = $this->createForm(new PlanCarreraType(), $plan);
      if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);       
        if ($form->isValid()) {
          $em = $this->getDoctrine()->getEntityManager();
          $em->persist($plan);
          $em->flush();
          }         
        }
      return $this->render('Taller2012BaseBundle:Default:altaPlanCarrera.html.twig', array(
            'form' => $form->createView(),));    
      }
 
    public function newCohorteAction(Request $request){
      $cohorte = new Cohorte();
      $form = $this->createForm(new CohorteType(), $cohorte);
      if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);       
        if ($form->isValid()) {
          $em = $this->getDoctrine()->getEntityManager();
          $em->persist($cohorte);
          $em->flush();
          }         
        }
      return $this->render('Taller2012BaseBundle:Default:altaCohorte.html.twig', array(
            'form' => $form->createView(),));    
      }
  
    public function newCursoAction(Request $request){
      $curso = new Curso();
      $form = $this->createForm(new CursoType(), $curso);
      if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);       
        if ($form->isValid()) {
          $em = $this->getDoctrine()->getEntityManager();
          $em->persist($curso);
          $em->flush();
          }         
        }
      return $this->render('Taller2012BaseBundle:Default:altaCurso.html.twig', array(
            'form' => $form->createView(),));    
      }
      
    public function newInstanciaAction(Request $request){
      $instancia= new Instancia();
      $form = $this->createForm(new InstanciaType(), $instancia);
      if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);       
        if ($form->isValid()) {
          $em = $this->getDoctrine()->getEntityManager();
          $em->persist($instancia);
          $em->flush();
          }         
        }
      return $this->render('Taller2012BaseBundle:Default:altaInstancia.html.twig', array(
            'form' => $form->createView(),));    
      }
      
    public function newUsuarioAction(Request $request){
      $usuario= new Usuario();
      $form = $this->createForm(new UsuarioType(), $usuario);
      if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);       
        if ($form->isValid()) {
          $em = $this->getDoctrine()->getEntityManager();
          $em->persist($usuario);
          $em->flush();
          }         
        }
      return $this->render('Taller2012BaseBundle:Default:altaUsuario.html.twig', array(
            'form' => $form->createView(),));    
      }
}
?>
