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

/* pages/login/index.html.twig */
class __TwigTemplate_da20480af23fe0f46c44d2c320308c48f831671e50e8c41c63d3909d17475f45 extends Template
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
        echo "<form action=\"http://localhost:8010/user/login\" method=\"POST\">
    <input type=\"text\" placeholder=\"username\" name=\"username\">
    <input type=\"text\" placeholder=\"email\" name=\"email\">
    <input type=\"text\" placeholder=\"password\" name=\"password\">
    <input type=\"submit\">
</form>";
    }

    public function getTemplateName()
    {
        return "pages/login/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"http://localhost:8010/user/login\" method=\"POST\">
    <input type=\"text\" placeholder=\"username\" name=\"username\">
    <input type=\"text\" placeholder=\"email\" name=\"email\">
    <input type=\"text\" placeholder=\"password\" name=\"password\">
    <input type=\"submit\">
</form>", "pages/login/index.html.twig", "C:\\Users\\famil\\Desktop\\Focus\\views\\pages\\login\\index.html.twig");
    }
}
