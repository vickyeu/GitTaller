<?php

/* Taller2012BaseBundle:Default:layoutBase.html.twig */
class __TwigTemplate_e0e6eeed8ce18e6b15fff55f427865bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
  <head>
      <link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <body>
      <div class=\"container-fluid\" style=\"background-color: #4bb1cf\">
        fghfgh
      <div class=\"row-fluid\">
          
          <div class=\"span2\" style=\"background-color: #039\">
            <ul class=\"nav nav-tabs nav-stacked\">
              <li class=\"active\">
                <a href=\"#\">Home</a>
              </li>
              <li><a href=\"#\">...</a></li>
              <li><a href=\"#\">...</a></li>
           </ul>
         </div>
        <div class=\"span10\" style=\"background-color: #0088cc\">
            Impossible is nothing
        </div>
      </div>
    </div> 
  </body>
</html>
";
    }

    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    public function getTemplateName()
    {
        return "Taller2012BaseBundle:Default:layoutBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  22 => 3,  18 => 1,);
    }
}
