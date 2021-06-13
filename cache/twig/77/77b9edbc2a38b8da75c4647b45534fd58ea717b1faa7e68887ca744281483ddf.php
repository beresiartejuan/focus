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

/* pages/profile/table.html.twig */
class __TwigTemplate_cdfe0f916f1b74564f6af34afcfebe1196922ba05d308594bb72d09f9608a6f7 extends Template
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
        echo "<table class=\"table striped table-border \" id=\"table-info\">
    <thead>
        <tr>
            <th rowspan=\"2\">Info del usuario:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>ID</th>
            <th>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "</th>
        </tr>
        <tr>
            <th>Username</th>
            <th>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 14), "html", null, true);
        echo "</th>
        </tr>
        <tr>
            <th>
                Real Name
            </th>
            <th>
                ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 21), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 21), "html", null, true);
        echo "
            </th>
        </tr>
        <tr>
            <th>Age</th>
            <th>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "age", [], "any", false, false, false, 26), "html", null, true);
        echo "</th>
        </tr>
        <tr>
            <th>Email</th>
            <th>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 30), "html", null, true);
        echo "</th>
        </tr>
        <tr>
            <th>Password</th>
            <th>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "password", [], "any", false, false, false, 34), "html", null, true);
        echo "</th>
        </tr>
    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "pages/profile/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 34,  82 => 30,  75 => 26,  65 => 21,  55 => 14,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table striped table-border \" id=\"table-info\">
    <thead>
        <tr>
            <th rowspan=\"2\">Info del usuario:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>ID</th>
            <th>{{ user.id }}</th>
        </tr>
        <tr>
            <th>Username</th>
            <th>{{ user.username }}</th>
        </tr>
        <tr>
            <th>
                Real Name
            </th>
            <th>
                {{ user.name }} {{ user.lastname }}
            </th>
        </tr>
        <tr>
            <th>Age</th>
            <th>{{ user.age }}</th>
        </tr>
        <tr>
            <th>Email</th>
            <th>{{ user.email }}</th>
        </tr>
        <tr>
            <th>Password</th>
            <th>{{ user.password }}</th>
        </tr>
    </tbody>
</table>", "pages/profile/table.html.twig", "C:\\Users\\famil\\Desktop\\Focus\\views\\pages\\profile\\table.html.twig");
    }
}
