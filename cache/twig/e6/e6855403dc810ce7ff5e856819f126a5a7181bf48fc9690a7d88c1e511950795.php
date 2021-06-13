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

/* pages/home/index.html.twig */
class __TwigTemplate_6ce7cc6dbb8d3d3ffed7e61138846ffc5faae4f24e7417864ebb7a0f4c17cd1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (0 === twig_compare(($context["IsMyUser"] ?? null), false)) {
            // line 2
            echo "    <h3>Información que pediste: </h3>
";
        }
        // line 4
        echo "
";
        // line 5
        if (($context["user"] ?? null)) {
            // line 6
            echo "


<style>
    table tr th {
        padding: 4px;
        border-color: black;
        border-width: 1px;
        border-style: solid;
    }
</style>

";
        }
        // line 19
        echo "
";
        // line 20
        if ( !($context["user"] ?? null)) {
            // line 21
            echo "    <p style=\"color: crimson; font-size: medium;\">¡La info no se ha encontrado!</p>
";
        }
    }

    public function getTemplateName()
    {
        return "pages/home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  66 => 20,  63 => 19,  48 => 6,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if IsMyUser == false %}
    <h3>Información que pediste: </h3>
{% endif %}

{% if user %}



<style>
    table tr th {
        padding: 4px;
        border-color: black;
        border-width: 1px;
        border-style: solid;
    }
</style>

{% endif %}

{% if not user %}
    <p style=\"color: crimson; font-size: medium;\">¡La info no se ha encontrado!</p>
{% endif %}", "pages/home/index.html.twig", "C:\\Users\\famil\\Desktop\\Focus\\views\\pages\\home\\index.html.twig");
    }
}
