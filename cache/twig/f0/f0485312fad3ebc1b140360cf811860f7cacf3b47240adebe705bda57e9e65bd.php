<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/profile/index.html.twig */
class __TwigTemplate_e075e5c07d2310bf4b7dbab5446b00fec17213263567d9181d26ce4d038e81d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template.html.twig", "pages/profile/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Profile";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo twig_include($this->env, $context, "moduls/navbar.html.twig");
        echo "
<center>
";
        // line 6
        echo twig_include($this->env, $context, "pages/profile/table.html.twig");
        echo "
</center>
<style>";
        // line 8
        echo twig_include($this->env, $context, "pages/profile/styles.css");
        echo "</style>
";
    }

    public function getTemplateName()
    {
        return "pages/profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  63 => 6,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Profile{% endblock %}
{% block body %}
{{ include('moduls/navbar.html.twig') }}
<center>
{{ include('pages/profile/table.html.twig') }}
</center>
<style>{{ include('pages/profile/styles.css') }}</style>
{% endblock %}", "pages/profile/index.html.twig", "C:\\Users\\famil\\Desktop\\Focus\\views\\pages\\profile\\index.html.twig");
    }
}
