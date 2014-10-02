<?php

/* ::base.html.twig */
class __TwigTemplate_8ede7916c1b146e40f92bffeebfa22e66f5417e9b02eb03f22ec1b07e9321c8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navi' => array($this, 'block_navi'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/html\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - Mon blog</title>
        <!-- balise meta pour le respensive avec la bib js de jquery-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheets\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/add.css"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <!-- barre de navigation -->
        ";
        // line 17
        $this->displayBlock('navi', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>

        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 17
    public function block_navi($context, array $blocks = array())
    {
        $this->env->loadTemplate("::nav.html.twig")->display($context);
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  86 => 18,  80 => 17,  75 => 12,  70 => 5,  61 => 20,  58 => 19,  55 => 18,  53 => 17,  45 => 13,  43 => 12,  39 => 11,  30 => 5,  24 => 1,);
    }
}
