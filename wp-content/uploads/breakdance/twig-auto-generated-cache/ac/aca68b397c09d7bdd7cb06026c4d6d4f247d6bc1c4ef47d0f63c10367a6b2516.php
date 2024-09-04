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

/* bafc7ef9aba17061db6a1904c1bd12e31bd26feb */
class __TwigTemplate_a3e74a88659e3a321c350d930d68014a0bce569a6bcea670fab37590412277ea extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "bafc7ef9aba17061db6a1904c1bd12e31bd26feb", 2)->unwrap();
        // line 3
        echo "
          new BreakdanceFaq('%%SELECTOR%%', { accordion: ";
        // line 4
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "settings", [], "any", false, false, false, 4), "accordion", [], "any", false, false, false, 4)) ? ("true") : ("false"));
        echo ", openFirst: ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "settings", [], "any", false, false, false, 4), "first_tab_opened", [], "any", false, false, false, 4)) ? ("true") : ("false"));
        echo "  });
         ";
    }

    public function getTemplateName()
    {
        return "bafc7ef9aba17061db6a1904c1bd12e31bd26feb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bafc7ef9aba17061db6a1904c1bd12e31bd26feb", "");
    }
}
