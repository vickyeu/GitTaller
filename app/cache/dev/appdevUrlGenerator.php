<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'Taller2012BaseBundle_homepage' => true,
       'Taller2012BaseBundle_listado' => true,
       'Taller2012BaseBundle_cargaPersona' => true,
       'Taller2012BaseBundle_base' => true,
       'Taller2012BaseBundle_altaLocalidad' => true,
       'Taller2012BaseBundle_altaProvincia' => true,
       'Taller2012BaseBundle_altaCarrera' => true,
       'Taller2012BaseBundle_altaPlanCarrera' => true,
       'Taller2012BaseBundle_altaCohorte' => true,
       'Taller2012BaseBundle_altaCurso' => true,
       'Taller2012BaseBundle_altaInstancia' => true,
       'Taller2012BaseBundle_altaUsuario' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bienvenida',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getTaller2012BaseBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/index',  ),));
    }

    private function getTaller2012BaseBundle_listadoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\DefaultController::listadoAlumnosAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/listadoAlumnos',  ),));
    }

    private function getTaller2012BaseBundle_cargaPersonaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\PersonaController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/cargaPersona',  ),));
    }

    private function getTaller2012BaseBundle_baseRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bIndex',  ),));
    }

    private function getTaller2012BaseBundle_altaLocalidadRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\AltasController::newLocalidadAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/altaLocalidad',  ),));
    }

    private function getTaller2012BaseBundle_altaProvinciaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\AltasController::newProvinciaAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/altaProvincia',  ),));
    }

    private function getTaller2012BaseBundle_altaCarreraRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\AltasController::newCarreraAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/altaCarrera',  ),));
    }

    private function getTaller2012BaseBundle_altaPlanCarreraRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\AltasController::newPlanCarreraAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/altaPlanCarrera',  ),));
    }

    private function getTaller2012BaseBundle_altaCohorteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\AltasController::newCohorteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/altaCohorte',  ),));
    }

    private function getTaller2012BaseBundle_altaCursoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\AltasController::newCursoAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/altaCurso',  ),));
    }

    private function getTaller2012BaseBundle_altaInstanciaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\AltasController::newInstanciaAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/altaInstancia',  ),));
    }

    private function getTaller2012BaseBundle_altaUsuarioRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Taller2012\\BaseBundle\\Controller\\AltasController::newUsuarioAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/altaUsuario',  ),));
    }
}
