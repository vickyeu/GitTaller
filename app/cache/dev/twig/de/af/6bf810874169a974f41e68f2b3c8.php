<?php

/* Taller2012BaseBundle:Default:altaCurso.html.twig */
class __TwigTemplate_deaf6bf810874169a974f41e68f2b3c8 extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Taller2012BaseBundle_altaCurso"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
";
        // line 2
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
<input type=\"submit\" />
</form>";
    }

    public function getTemplateName()
    {
        return "Taller2012BaseBundle:Default:altaCurso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  17 => 1,);
    }
}
