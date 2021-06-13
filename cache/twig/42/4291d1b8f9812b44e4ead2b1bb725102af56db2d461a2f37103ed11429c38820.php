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

/* moduls/navbar.html.twig */
class __TwigTemplate_13e21bfcd7f5e7439289fb0f4565e5d1bc40e248dafd61b3f8a77e8fe5483336 extends Template
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
        echo "<a id=\"sidebar-toggle-2\">|||</a>
<aside class=\"sidebar\" data-role=\"sidebar\" data-toggle=\"#sidebar-toggle-2\">
    <div class=\"sidebar-header\">
        <a href=\"/\" class=\"fg-white sub-action\"
       onclick=\"Metro.sidebar.close('#sb1'); return false;\">
        <span class=\"mif-arrow-left mif-2x icon\"></span>
    </a>
    <div class=\"avatar\">
        <img data-role=\"gravatar\" data-email=\"sergey@pimenov.com.ua\">
    </div>
    <span class=\"title\">Metro 4 Components Library</span>
    <span class=\"subtitle\"> 2018 © Sergey Pimenov</span>
    </div>
    <ul class=\"sidebar-menu\">
        <li><a href=\"#patata\"><span class=\"mif-home icon\"></span>Home</a></li>
    <li><a><span class=\"mif-books icon\"></span>Guide</a></li>
    <li><a><span class=\"mif-files-empty icon\"></span>Examples</a></li>
    <li class=\"divider\"></li>
    <li><a><span class=\"mif-images icon\"></span>Icons</a></li>
    </ul>
</aside>";
    }

    public function getTemplateName()
    {
        return "moduls/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a id=\"sidebar-toggle-2\">|||</a>
<aside class=\"sidebar\" data-role=\"sidebar\" data-toggle=\"#sidebar-toggle-2\">
    <div class=\"sidebar-header\">
        <a href=\"/\" class=\"fg-white sub-action\"
       onclick=\"Metro.sidebar.close('#sb1'); return false;\">
        <span class=\"mif-arrow-left mif-2x icon\"></span>
    </a>
    <div class=\"avatar\">
        <img data-role=\"gravatar\" data-email=\"sergey@pimenov.com.ua\">
    </div>
    <span class=\"title\">Metro 4 Components Library</span>
    <span class=\"subtitle\"> 2018 © Sergey Pimenov</span>
    </div>
    <ul class=\"sidebar-menu\">
        <li><a href=\"#patata\"><span class=\"mif-home icon\"></span>Home</a></li>
    <li><a><span class=\"mif-books icon\"></span>Guide</a></li>
    <li><a><span class=\"mif-files-empty icon\"></span>Examples</a></li>
    <li class=\"divider\"></li>
    <li><a><span class=\"mif-images icon\"></span>Icons</a></li>
    </ul>
</aside>", "moduls/navbar.html.twig", "C:\\Users\\famil\\Desktop\\Focus\\views\\moduls\\navbar.html.twig");
    }
}
