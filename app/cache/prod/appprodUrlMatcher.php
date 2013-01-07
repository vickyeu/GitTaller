<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // Taller2012BaseBundle_homepage
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'Taller2012BaseBundle_homepage',);
        }

        // Taller2012BaseBundle_listado
        if ($pathinfo === '/listadoAlumnos') {
            return array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\DefaultController::listadoAlumnosAction',  '_route' => 'Taller2012BaseBundle_listado',);
        }

        // Taller2012BaseBundle_cargaPersona
        if ($pathinfo === '/cargaPersona') {
            return array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\PersonaController::newAction',  '_route' => 'Taller2012BaseBundle_cargaPersona',);
        }

        // Taller2012BaseBundle_altaLocalidad
        if ($pathinfo === '/altaLocalidad') {
            return array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\AltasController::newLocalidadAction',  '_route' => 'Taller2012BaseBundle_altaLocalidad',);
        }

        // Taller2012BaseBundle_altaProvincia
        if ($pathinfo === '/altaProvincia') {
            return array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\AltasController::newProvinciaAction',  '_route' => 'Taller2012BaseBundle_altaProvincia',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
