<?php

/* BlogGeneralBundle:Default:index.html.twig */
class __TwigTemplate_3446ab3b14fed1d7aeb1681b9e39ba1422599bc7e287343a94362edb0ac3a202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Acceuil";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
";
    }

    public function getTemplateName()
    {
        return "BlogGeneralBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 2,);
    }
}
