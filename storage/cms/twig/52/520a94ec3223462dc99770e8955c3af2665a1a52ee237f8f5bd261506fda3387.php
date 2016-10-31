<?php

/* /var/www/regoct/themes/reg/layouts/fallback.htm */
class __TwigTemplate_bae06f11fa48489625b5c216c246876bdfca24159413958a4a1feaab2453e28b extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/var/www/regoct/themes/reg/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% page %}";
    }
}
