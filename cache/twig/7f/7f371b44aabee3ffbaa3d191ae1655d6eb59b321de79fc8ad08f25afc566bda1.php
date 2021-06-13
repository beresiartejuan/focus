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

/* pages/profile/styles.css */
class __TwigTemplate_d30c5cb8e0931e54d21d11c99f4f55abbefc566cd89cc1189155afb95216c08f extends Template
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
        echo "
#table-info {
    max-width: 500px;
}
";
    }

    public function getTemplateName()
    {
        return "pages/profile/styles.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
#table-info {
    max-width: 500px;
}
", "pages/profile/styles.css", "C:\\Users\\famil\\Desktop\\Focus\\views\\pages\\profile\\styles.css");
    }
}
