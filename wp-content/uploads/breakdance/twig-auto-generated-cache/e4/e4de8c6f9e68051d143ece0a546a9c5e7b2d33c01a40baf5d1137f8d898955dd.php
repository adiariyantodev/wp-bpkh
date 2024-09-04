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

/* 81e2a8f3db0bc16534a4a0ebe650ac44a471296c */
class __TwigTemplate_9ee41a5bb54284648b42bad751c7d626071a4e4bab5a1a087e526fe0ed7ce60c extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "81e2a8f3db0bc16534a4a0ebe650ac44a471296c", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $context["mobileBreakpoint"] = "breakpoint_tablet_landscape";
        // line 5
        $context["breakpointWidth"] = Breakdance\PluginsAPI\getBreakpointMaxWidth(($context["mobileBreakpoint"] ?? null));
        // line 6
        echo "
";
        // line 7
        if (($context["isBaseBreakpoint"] ?? null)) {
            // line 8
            echo "@media (min-width: ";
            echo (($context["breakpointWidth"] ?? null) + 1);
            echo "px) {
  ";
            // line 9
            echo twig_call_macro($macros["macros"], "macro_atomV1MenuDropdownCss", ["%%SELECTOR%%", ($context["design"] ?? null)], 9, $context, $this->getSourceContext());
            echo "
}
";
        }
        // line 12
        echo "
%%SELECTOR%% .breakdance-dropdown-custom-content {
";
        // line 14
        echo twig_call_macro($macros["macros"], "macro_simpleLayout", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 14), ($context["breakpoint"] ?? null)], 14, $context, $this->getSourceContext());
        echo "
}

";
        // line 18
        echo "

    %%SELECTOR%% {
        ";
        // line 21
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 22), "wrapper", [], "any", false, false, false, 22), "background", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 23), "wrapper", [], "any", false, false, false, 23), "layout", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 24
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 24), "wrapper", [], "any", false, false, false, 24), "size", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 25), "wrapper", [], "any", false, false, false, 25), "typography", [], "any", false, false, false, 25),         // line 26
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 27), "wrapper", [], "any", false, false, false, 27), "spacing", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 28), "wrapper", [], "any", false, false, false, 28), "borders", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 29), "wrapper", [], "any", false, false, false, 29), "effects", [], "any", false, false, false, 29)], 21, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 33
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 34), "wrapper_hover", [], "any", false, false, false, 34), "background", [], "any", false, false, false, 34), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 35), "wrapper_hover", [], "any", false, false, false, 35), "layout", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 36), "wrapper_hover", [], "any", false, false, false, 36), "size", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 37), "wrapper_hover", [], "any", false, false, false, 37), "typography", [], "any", false, false, false, 37),         // line 38
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 39), "wrapper_hover", [], "any", false, false, false, 39), "spacing", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 40), "wrapper_hover", [], "any", false, false, false, 40), "borders", [], "any", false, false, false, 40), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 41), "wrapper_hover", [], "any", false, false, false, 41), "effects", [], "any", false, false, false, 41)], 33, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 45
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 45), "css", [], "any", false, false, false, 45);
        echo "


";
        // line 48
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 48), "hide", [], "any", false, false, false, 48)))) {
            // line 49
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 50
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 50), "hide", [], "any", false, false, false, 50))) {
                    // line 51
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 53
                    if (($context["isBuilder"] ?? null)) {
                        // line 54
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 57
                        echo "                        display: none;
                    ";
                    }
                    // line 59
                    echo "                }
            }
        ";
                }
                // line 62
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 64
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "81e2a8f3db0bc16534a4a0ebe650ac44a471296c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 64,  148 => 62,  143 => 59,  139 => 57,  134 => 54,  132 => 53,  126 => 51,  123 => 50,  118 => 49,  116 => 48,  110 => 45,  103 => 41,  102 => 40,  101 => 39,  100 => 38,  99 => 37,  98 => 36,  97 => 35,  96 => 34,  95 => 33,  88 => 29,  87 => 28,  86 => 27,  85 => 26,  84 => 25,  83 => 24,  82 => 23,  81 => 22,  80 => 21,  75 => 18,  69 => 14,  65 => 12,  59 => 9,  54 => 8,  52 => 7,  49 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "81e2a8f3db0bc16534a4a0ebe650ac44a471296c", "");
    }
}
