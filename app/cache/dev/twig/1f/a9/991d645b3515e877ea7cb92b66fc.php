<?php

/* Taller2012BaseBundle:Default:usuarios.html.twig */
class __TwigTemplate_1fa9991d645b3515e877ea7cb92b66fc extends Twig_Template
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
        echo "<h1>Listado de personas</h1>
  ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "personas"));
        foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
            // line 3
            echo "      <p>";
            echo twig_escape_filter($this->env, $this->getContext($context, "persona"), "html", null, true);
            echo "</p>
      <p>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "persona"), "nombre"), "html", null, true);
            echo "</p>
      <p>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "persona"), "apellido"), "html", null, true);
            echo "</p>
      <br/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "Taller2012BaseBundle:Default:usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  29 => 4,  24 => 3,  20 => 2,  17 => 1,);
    }
}
