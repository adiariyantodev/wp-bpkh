<?php

use Breakdance\Lib\Vendor\Twig\Environment;
use Breakdance\Lib\Vendor\Twig\Error\LoaderError;
use Breakdance\Lib\Vendor\Twig\Error\RuntimeError;
use Breakdance\Lib\Vendor\Twig\Extension\SandboxExtension;
use Breakdance\Lib\Vendor\Twig\Markup;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedTagError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use Breakdance\Lib\Vendor\Twig\Source;
use Breakdance\Lib\Vendor\Twig\Template;

/* 96ebafddeff96393846d14c11cfa3f7d6e3a2c2d */
class __TwigTemplate_9bb1189d225cae454d383ffb728d7c4d15ef82510eea802e3ba741a746a6c91c extends Template
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
          ";
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "96ebafddeff96393846d14c11cfa3f7d6e3a2c2d", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if ((((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "youtube", [], "any", false, false, false, 4), "loading_method", [], "any", false, false, false, 4), "embed")) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "vimeo", [], "any", false, false, false, 4), "loading_method", [], "any", false, false, false, 4), "embed"))) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "dailymotion", [], "any", false, false, false, 4), "loading_method", [], "any", false, false, false, 4), "embed")))) {
            // line 5
            echo "return true;
";
        }
        // line 7
        echo "         ";
    }

    public function getTemplateName()
    {
        return "96ebafddeff96393846d14c11cfa3f7d6e3a2c2d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "96ebafddeff96393846d14c11cfa3f7d6e3a2c2d", "");
    }
}
