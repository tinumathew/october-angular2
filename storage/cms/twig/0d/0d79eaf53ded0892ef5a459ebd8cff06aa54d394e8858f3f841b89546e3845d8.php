<?php

/* /var/www/regoct/themes/reg/partials/site/footer.htm */
class __TwigTemplate_ab7ae9a090824db83237db1b48271d4c8cf1374d8496932beb984148eb5c2685 extends Twig_Template
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
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; 2014 - ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Alexey Bobkov &amp; Samuel Georges.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/regoct/themes/reg/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; 2014 - {{ \"now\"|date(\"Y\") }} Alexey Bobkov &amp; Samuel Georges.</p>
    </div>
</div>";
    }
}
