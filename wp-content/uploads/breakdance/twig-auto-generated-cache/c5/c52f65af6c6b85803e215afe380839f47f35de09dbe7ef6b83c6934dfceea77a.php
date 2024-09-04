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

/* 52758ef8427bfd43ee510e449184fc5ca369c231 */
class __TwigTemplate_310804ce9c4588181ec5e9f667bfa0666a769d24c12d1e4438d20a42363555bc extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "52758ef8427bfd43ee510e449184fc5ca369c231", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  width: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "wrapper", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  background-color: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "wrapper", [], "any", false, false, false, 6), "background", [], "any", false, false, false, 6);
        echo ";
  ";
        // line 7
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
  --faqItemHorizontalPadding: ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 8), "horizontal_padding", [], "any", false, false, false, 8), "style", [], "any", false, false, false, 8);
        echo ";
  --faqItemVerticalPadding: ";
        // line 9
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 9), "vertical_padding", [], "any", false, false, false, 9), "style", [], "any", false, false, false, 9);
        echo ";
  --faqBorderWidth: ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 10), "border_width", [], "any", false, false, false, 10), "style", [], "any", false, false, false, 10);
        echo ";
  --faqBorderColor: ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 11), "border_color", [], "any", false, false, false, 11);
        echo ";
  gap: ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 12), "after_item", [], "any", false, false, false, 12), "style", [], "any", false, false, false, 12);
        echo ";
}

%%SELECTOR%% .bde-faq__item {
  background-color: ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 16), "background", [], "any", false, false, false, 16);
        echo ";
 }

";
        // line 19
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 19), "below_only", [], "any", false, false, false, 19)) {
            // line 20
            echo "  %%SELECTOR%% .bde-faq__item {
    border-top: none;
    border-left: none;
    border-right: none;
    margin-top: 0px !important;
  }
  %%SELECTOR%% .bde-faq__item:last-child {
    border-bottom: none;
  }
  %%SELECTOR%% {
    gap: 0;
  }
";
        }
        // line 33
        echo "
%%SELECTOR%% .bde-faq__item.is-active {
  background-color: ";
        // line 35
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 35), "active_background", [], "any", false, false, false, 35);
        echo "
}


%%SELECTOR%% .bde-faq__item.is-active .bde-faq__title {
  color: ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 40), "active_title", [], "any", false, false, false, 40);
        echo ";
}

%%SELECTOR%% .bde-faq__item.is-active .bde-faq__icon {
  color: ";
        // line 44
        echo _twig_default_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, true, false, 44), "icon", [], "any", false, true, false, 44), "active_color", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, true, false, 44), "icon", [], "any", false, true, false, 44), "active_color", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 44), "icon", [], "any", false, false, false, 44), "color", [], "any", false, false, false, 44))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 44), "icon", [], "any", false, false, false, 44), "color", [], "any", false, false, false, 44))), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 44), "active_title", [], "any", false, false, false, 44));
        echo ";
}

%%SELECTOR%% .bde-faq__icon {
  color: ";
        // line 48
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, true, false, 48), "icon", [], "any", false, true, false, 48), "color", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, true, false, 48), "icon", [], "any", false, true, false, 48), "color", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 48), "title", [], "any", false, false, false, 48), "color", [], "any", false, false, false, 48))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 48), "title", [], "any", false, false, false, 48), "color", [], "any", false, false, false, 48)));
        echo ";
  font-size: ";
        // line 49
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 49), "icon", [], "any", false, false, false, 49), "size", [], "any", false, false, false, 49), "style", [], "any", false, false, false, 49);
        echo ";
}

%%SELECTOR%% .bde-faq__answer-content {
  margin-top: ";
        // line 53
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 53), "below_title", [], "any", false, false, false, 53), "style", [], "any", false, false, false, 53);
        echo ";
}

%%SELECTOR%% .bde-faq__title {
  ";
        // line 57
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 57), "title", [], "any", false, false, false, 57), ($context["globalSettings"] ?? null)], 57, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-faq__answer-content {
  ";
        // line 61
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 61), "content", [], "any", false, false, false, 61), ($context["globalSettings"] ?? null)], 61, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-faq__btn {
  margin-top: ";
        // line 65
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 65), "above_button", [], "any", false, false, false, 65), "style", [], "any", false, false, false, 65);
        echo ";
}

";
        // line 68
        echo twig_call_macro($macros["macros"], "macro_atomV1ButtonCss", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 68), "button", [], "any", false, false, false, 68), "bde-faq__button", "%%SELECTOR%%", ($context["breakpoint"] ?? null), ($context["globalSettings"] ?? null)], 68, $context, $this->getSourceContext());
        echo "


";
        // line 72
        echo "

    %%SELECTOR%% {
        ";
        // line 75
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 76), "wrapper", [], "any", false, false, false, 76), "background", [], "any", false, false, false, 76), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 77
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 77), "wrapper", [], "any", false, false, false, 77), "layout", [], "any", false, false, false, 77), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 78
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 78), "wrapper", [], "any", false, false, false, 78), "size", [], "any", false, false, false, 78), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 79
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 79), "wrapper", [], "any", false, false, false, 79), "typography", [], "any", false, false, false, 79),         // line 80
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 81
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 81), "wrapper", [], "any", false, false, false, 81), "spacing", [], "any", false, false, false, 81), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 82
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 82), "wrapper", [], "any", false, false, false, 82), "borders", [], "any", false, false, false, 82), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 83
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 83), "wrapper", [], "any", false, false, false, 83), "effects", [], "any", false, false, false, 83)], 75, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 87
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 88
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 88), "wrapper_hover", [], "any", false, false, false, 88), "background", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 89
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 89), "wrapper_hover", [], "any", false, false, false, 89), "layout", [], "any", false, false, false, 89), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 90
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 90), "wrapper_hover", [], "any", false, false, false, 90), "size", [], "any", false, false, false, 90), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 91
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 91), "wrapper_hover", [], "any", false, false, false, 91), "typography", [], "any", false, false, false, 91),         // line 92
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 93
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 93), "wrapper_hover", [], "any", false, false, false, 93), "spacing", [], "any", false, false, false, 93), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 94
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 94), "wrapper_hover", [], "any", false, false, false, 94), "borders", [], "any", false, false, false, 94), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 95
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 95), "wrapper_hover", [], "any", false, false, false, 95), "effects", [], "any", false, false, false, 95)], 87, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 99
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 99), "css", [], "any", false, false, false, 99);
        echo "


";
        // line 102
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 102), "hide", [], "any", false, false, false, 102)))) {
            // line 103
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 104
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 104), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 104), "hide", [], "any", false, false, false, 104))) {
                    // line 105
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 107
                    if (($context["isBuilder"] ?? null)) {
                        // line 108
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 111
                        echo "                        display: none;
                    ";
                    }
                    // line 113
                    echo "                }
            }
        ";
                }
                // line 116
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 118
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "52758ef8427bfd43ee510e449184fc5ca369c231";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 118,  247 => 116,  242 => 113,  238 => 111,  233 => 108,  231 => 107,  225 => 105,  222 => 104,  217 => 103,  215 => 102,  209 => 99,  202 => 95,  201 => 94,  200 => 93,  199 => 92,  198 => 91,  197 => 90,  196 => 89,  195 => 88,  194 => 87,  187 => 83,  186 => 82,  185 => 81,  184 => 80,  183 => 79,  182 => 78,  181 => 77,  180 => 76,  179 => 75,  174 => 72,  168 => 68,  162 => 65,  155 => 61,  148 => 57,  141 => 53,  134 => 49,  130 => 48,  123 => 44,  116 => 40,  108 => 35,  104 => 33,  89 => 20,  87 => 19,  81 => 16,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "52758ef8427bfd43ee510e449184fc5ca369c231", "");
    }
}
