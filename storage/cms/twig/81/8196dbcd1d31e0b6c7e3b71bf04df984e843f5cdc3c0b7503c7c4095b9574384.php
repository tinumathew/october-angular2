<?php

/* /var/www/regoct/themes/reg/partials/site/header.htm */
class __TwigTemplate_d26e253b84b5a12a957da813b2d1ede6eb3f5452e0a79476e85ec4d812798a89 extends Twig_Template
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
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Angular 2 Registration</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">WHO WE SERVE</a></li>
                <li class=\"";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("ajax");
        echo "\">WHAT WE DO</a></li>
                <li class=\"";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("plugins");
        echo "\">WHY CHOOSE US</a></li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/regoct/themes/reg/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  41 => 11,  33 => 10,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Angular 2 Registration</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">WHO WE SERVE</a></li>
                <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\">WHAT WE DO</a></li>
                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">WHY CHOOSE US</a></li>
            </ul>
        </div>
    </div>
</nav>";
    }
}
