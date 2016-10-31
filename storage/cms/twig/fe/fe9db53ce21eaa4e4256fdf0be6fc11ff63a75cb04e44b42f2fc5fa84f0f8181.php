<?php

/* /var/www/regoct/themes/reg/layouts/custom.htm */
class __TwigTemplate_53d8afb2e54613011e9a5220b2c781b846ce1d40fb3db5c5c7f2516a2580721f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Angular 2 ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo.png");
        echo "\">
    <!--<link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
-->
    ";
        // line 16
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 17
        echo "</head>
<body>

<!-- Header -->
<header id=\"layout-header\">
    ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "</header>

<!-- Content -->
<section id=\"layout-content\">
    ";
        // line 27
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 28
        echo "</section>

<!-- Footer -->
<footer id=\"layout-footer\">
    ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "</footer>

<!-- Scripts -->
<!--<script src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
<script src=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
<script src=\"";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
";
        // line 39
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 40
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        echo "-->

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/regoct/themes/reg/layouts/custom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  89 => 33,  85 => 32,  79 => 28,  77 => 27,  71 => 23,  67 => 22,  60 => 17,  57 => 16,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Angular 2 {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/logo.png'|theme }}\">
    <!--<link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">
-->
    {% styles %}
</head>
<body>

<!-- Header -->
<header id=\"layout-header\">
    {% partial 'site/header' %}
</header>

<!-- Content -->
<section id=\"layout-content\">
    {% page %}
</section>

<!-- Footer -->
<footer id=\"layout-footer\">
    {% partial 'site/footer' %}
</footer>

<!-- Scripts -->
<!--<script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
<script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
{% framework extras %}
{% scripts %}-->

</body>
</html>";
    }
}
