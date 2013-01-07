<?php

/* Taller2012BaseBundle:Default:index.html.twig */
class __TwigTemplate_a27f79e7bd96b0e3e2ee496cd05df34c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form id=\"FLogin\" action=\"../../../Controller/DefaultController.php\" method=\"POST\">

    <label>Usuario</label> <input id=\"username\" name=\"user\" type=\"text\"/>
    <label>Contrase&ntilde;a</label> <input id=\"password\" name=\"pass\"/>
    <input type=\"submit\" value=\"Ingresar\"/>

</form>
";
    }

    public function getTemplateName()
    {
        return "Taller2012BaseBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
