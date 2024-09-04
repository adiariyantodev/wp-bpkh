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

/* 31db71909ce86c98f2f53330c1effeb044584347 */
class __TwigTemplate_e6fbd1dc5de185c2776e4ab467bf8fa2a039c52fe27e8af8ab083b17c790e19e extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "31db71909ce86c98f2f53330c1effeb044584347", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  ";
        // line 5
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5), "full-screen"))) {
            // line 6
            echo "  width: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 6), "width", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
            echo ";
  ";
        }
        // line 8
        echo "}

%%SELECTOR%% .search-form {
  --searchFormSize: ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 11), "height", [], "any", false, false, false, 11), "style", [], "any", false, false, false, 11);
        echo ";
}

/* CLASSIC */

%%SELECTOR%% .search-form--classic .search-form__container {
  ";
        // line 17
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 17), "classic_styles", [], "any", false, false, false, 17), "borders", [], "any", false, false, false, 17)], 17, $context, $this->getSourceContext());
        echo "
  ";
        // line 18
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 18), "classic_styles", [], "any", false, false, false, 18), "background", [], "any", false, false, false, 18)], 18, $context, $this->getSourceContext());
        echo "
  ";
        // line 19
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 19), "classic_styles", [], "any", false, false, false, 19), "icon_button", [], "any", false, false, false, 19), "position", [], "any", false, false, false, 19), "right"))) {
            // line 20
            echo "    flex-direction: row-reverse;
  ";
        }
        // line 22
        echo "}

%%SELECTOR%% .search-form--classic .search-form__field {
  padding-left: ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 25), "classic_styles", [], "any", false, false, false, 25), "padding", [], "any", false, false, false, 25), "style", [], "any", false, false, false, 25);
        echo ";
  padding-right: ";
        // line 26
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 26), "classic_styles", [], "any", false, false, false, 26), "padding", [], "any", false, false, false, 26), "style", [], "any", false, false, false, 26);
        echo ";
  ";
        // line 27
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 27), "classic_styles", [], "any", false, false, false, 27), "typography", [], "any", false, false, false, 27), ($context["globalSettings"] ?? null)], 27, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .search-form--classic .search-form__field::placeholder {  
  color: ";
        // line 31
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 31), "classic_styles", [], "any", false, false, false, 31), "placeholder", [], "any", false, false, false, 31);
        echo "
}

%%SELECTOR%% .search-form--classic .search-form__button {
  font-size: ";
        // line 35
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 35), "classic_styles", [], "any", false, false, false, 35), "icon_button", [], "any", false, false, false, 35), "size", [], "any", false, false, false, 35), "style", [], "any", false, false, false, 35);
        echo ";
  background-color: ";
        // line 36
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 36), "classic_styles", [], "any", false, false, false, 36), "icon_button", [], "any", false, false, false, 36), "background", [], "any", false, false, false, 36);
        echo ";
  color: ";
        // line 37
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 37), "classic_styles", [], "any", false, false, false, 37), "icon_button", [], "any", false, false, false, 37), "color", [], "any", false, false, false, 37);
        echo ";
}

%%SELECTOR%% .search-form--classic .search-form__button:hover {
  background-color: ";
        // line 41
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 41), "classic_styles", [], "any", false, false, false, 41), "icon_button", [], "any", false, false, false, 41), "background_hover", [], "any", false, false, false, 41);
        echo ";
}

%%SELECTOR%% .search-form--classic .search-form__button.has-text {
  padding-left: ";
        // line 45
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 45), "classic_styles", [], "any", false, false, false, 45), "icon_button", [], "any", false, false, false, 45), "padding", [], "any", false, false, false, 45), "style", [], "any", false, false, false, 45);
        echo ";
  padding-right: ";
        // line 46
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 46), "classic_styles", [], "any", false, false, false, 46), "icon_button", [], "any", false, false, false, 46), "padding", [], "any", false, false, false, 46), "style", [], "any", false, false, false, 46);
        echo ";
  ";
        // line 47
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 47), "classic_styles", [], "any", false, false, false, 47), "typography", [], "any", false, false, false, 47), ($context["globalSettings"] ?? null)], 47, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .search-form--classic .search-form__container:focus-within {
  background-color: ";
        // line 51
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 51), "classic_styles", [], "any", false, false, false, 51), "focused", [], "any", false, false, false, 51), "background", [], "any", false, false, false, 51);
        echo ";
  border-color: ";
        // line 52
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 52), "classic_styles", [], "any", false, false, false, 52), "focused", [], "any", false, false, false, 52), "border", [], "any", false, false, false, 52);
        echo ";
  box-shadow: ";
        // line 53
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 53), "classic_styles", [], "any", false, false, false, 53), "focused", [], "any", false, false, false, 53), "shadow", [], "any", false, false, false, 53), "style", [], "any", false, false, false, 53);
        echo ";
}

/* EXPAND */

%%SELECTOR%% .search-form--expand .search-form__button {
  width: var(--searchFormSize);
  height: var(--searchFormSize);
  font-size: ";
        // line 61
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 61), "expand_styles", [], "any", false, false, false, 61), "open_button", [], "any", false, false, false, 61), "size", [], "any", false, false, false, 61), "style", [], "any", false, false, false, 61);
        echo ";
  background-color: ";
        // line 62
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 62), "expand_styles", [], "any", false, false, false, 62), "open_button", [], "any", false, false, false, 62), "background", [], "any", false, false, false, 62);
        echo ";
  color: ";
        // line 63
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 63), "expand_styles", [], "any", false, false, false, 63), "open_button", [], "any", false, false, false, 63), "color", [], "any", false, false, false, 63);
        echo ";
  ";
        // line 64
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 64), "expand_styles", [], "any", false, false, false, 64), "open_button", [], "any", false, false, false, 64), "borders", [], "any", false, false, false, 64)], 64, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .search-form--expand .search-form__button:hover {
  background-color: ";
        // line 68
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 68), "expand_styles", [], "any", false, false, false, 68), "open_button", [], "any", false, false, false, 68), "hover", [], "any", false, false, false, 68);
        echo ";
}

%%SELECTOR%% .search-form--expand .search-form__container {
 gap: ";
        // line 72
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 72), "expand_styles", [], "any", false, false, false, 72), "space_between", [], "any", false, false, false, 72), "style", [], "any", false, false, false, 72);
        echo ";
   ";
        // line 73
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 73), "expand_styles", [], "any", false, false, false, 73), "open_button", [], "any", false, false, false, 73), "position", [], "any", false, false, false, 73), "right"))) {
            // line 74
            echo "    flex-direction: row-reverse;
  ";
        }
        // line 76
        echo "}

%%SELECTOR%% .search-form--expand .search-form__field {
  padding-left: ";
        // line 79
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 79), "expand_styles", [], "any", false, false, false, 79), "padding", [], "any", false, false, false, 79), "style", [], "any", false, false, false, 79);
        echo ";
  padding-right: ";
        // line 80
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 80), "expand_styles", [], "any", false, false, false, 80), "padding", [], "any", false, false, false, 80), "style", [], "any", false, false, false, 80);
        echo ";
  ";
        // line 81
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 81), "expand_styles", [], "any", false, false, false, 81), "typography", [], "any", false, false, false, 81), ($context["globalSettings"] ?? null)], 81, $context, $this->getSourceContext());
        echo "
  ";
        // line 82
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 82), "expand_styles", [], "any", false, false, false, 82), "borders", [], "any", false, false, false, 82)], 82, $context, $this->getSourceContext());
        echo "
  ";
        // line 83
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 83), "expand_styles", [], "any", false, false, false, 83), "background", [], "any", false, false, false, 83)], 83, $context, $this->getSourceContext());
        echo "

  ";
        // line 85
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 85), "expand_styles", [], "any", false, false, false, 85), "open_button", [], "any", false, false, false, 85), "position", [], "any", false, false, false, 85), "right"))) {
            // line 86
            echo "    right: 0;
  \tleft: auto;
  ";
        }
        // line 89
        echo "
}

%%SELECTOR%% .search-form--expand .search-form__field::placeholder {  
  color: ";
        // line 93
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 93), "expand_styles", [], "any", false, false, false, 93), "placeholder", [], "any", false, false, false, 93);
        echo "
}

%%SELECTOR%% .search-form--expand .search-form__field:focus {
  background-color: ";
        // line 97
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 97), "expand_styles", [], "any", false, false, false, 97), "focused", [], "any", false, false, false, 97), "background", [], "any", false, false, false, 97);
        echo ";
  border-color: ";
        // line 98
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 98), "expand_styles", [], "any", false, false, false, 98), "focused", [], "any", false, false, false, 98), "border", [], "any", false, false, false, 98);
        echo ";
  box-shadow: ";
        // line 99
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 99), "expand_styles", [], "any", false, false, false, 99), "focused", [], "any", false, false, false, 99), "shadow", [], "any", false, false, false, 99), "style", [], "any", false, false, false, 99);
        echo ";
}

%%SELECTOR%% .search-form--expand .search-form__button:hover {
  background-color: ";
        // line 103
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 103), "expand_styles", [], "any", false, false, false, 103), "open_button", [], "any", false, false, false, 103), "hover", [], "any", false, false, false, 103);
        echo ";
}

%%SELECTOR%% .search-form--expand .search-form__button:hover {
  background-color: ";
        // line 107
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 107), "expand_styles", [], "any", false, false, false, 107), "open_button", [], "any", false, false, false, 107), "hover", [], "any", false, false, false, 107);
        echo ";
}

%%SELECTOR%% .search-form--expand .search-form__field,
%%SELECTOR%% .search-form--expand.is-active .search-form__field {
  width: ";
        // line 112
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 112), "expand_styles", [], "any", false, false, false, 112), "width", [], "any", false, false, false, 112), "style", [], "any", false, false, false, 112);
        echo ";
}

/* FULL SCREEN */

%%SELECTOR%% .search-form__lightbox-container {
  --searchFormSize: ";
        // line 118
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 118), "full_screen_styles", [], "any", false, false, false, 118), "search_box", [], "any", false, false, false, 118), "height", [], "any", false, false, false, 118), "style", [], "any", false, false, false, 118);
        echo ";
}

%%SELECTOR%% .search-form--full-screen .search-form__lightbox-container {
  ";
        // line 122
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 122), "full_screen_styles", [], "any", false, false, false, 122), "search_box", [], "any", false, false, false, 122), "borders", [], "any", false, false, false, 122)], 122, $context, $this->getSourceContext());
        echo "
  ";
        // line 123
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 123), "full_screen_styles", [], "any", false, false, false, 123), "search_box", [], "any", false, false, false, 123), "background", [], "any", false, false, false, 123)], 123, $context, $this->getSourceContext());
        echo "
  ";
        // line 124
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 124), "full_screen_styles", [], "any", false, false, false, 124), "search_box", [], "any", false, false, false, 124), "icon", [], "any", false, false, false, 124), "position", [], "any", false, false, false, 124), "right"))) {
            // line 125
            echo "    flex-direction: row-reverse;
  ";
        }
        // line 127
        echo "}

%%SELECTOR%% .search-form--full-screen .search-form__lightbox {
  ";
        // line 130
        echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 130), "full_screen_styles", [], "any", false, false, false, 130), "background", [], "any", false, false, false, 130)], 130, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .search-form--full-screen .search-form__field::placeholder {  
  color: ";
        // line 134
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 134), "full_screen_styles", [], "any", false, false, false, 134), "search_box", [], "any", false, false, false, 134), "placeholder", [], "any", false, false, false, 134);
        echo "
  
}

%%SELECTOR%% .search-form--full-screen .search-form__field {
";
        // line 139
        echo twig_call_macro($macros["macros"], "macro_spacing_complex", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 139), "full_screen_styles", [], "any", false, false, false, 139), "search_box", [], "any", false, false, false, 139), "padding", [], "any", false, false, false, 139), "padding"], 139, $context, $this->getSourceContext());
        echo "
";
        // line 140
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 140), "full_screen_styles", [], "any", false, false, false, 140), "search_box", [], "any", false, false, false, 140), "typography", [], "any", false, false, false, 140), ($context["globalSettings"] ?? null)], 140, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .search-form--full-screen .search-form__lightbox-container:focus-within {
  background-color: ";
        // line 144
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 144), "full_screen_styles", [], "any", false, false, false, 144), "search_box", [], "any", false, false, false, 144), "focused", [], "any", false, false, false, 144), "background", [], "any", false, false, false, 144);
        echo ";
  border-color: ";
        // line 145
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 145), "full_screen_styles", [], "any", false, false, false, 145), "search_box", [], "any", false, false, false, 145), "focused", [], "any", false, false, false, 145), "border", [], "any", false, false, false, 145);
        echo ";
  box-shadow: ";
        // line 146
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 146), "full_screen_styles", [], "any", false, false, false, 146), "search_box", [], "any", false, false, false, 146), "focused", [], "any", false, false, false, 146), "shadow", [], "any", false, false, false, 146), "style", [], "any", false, false, false, 146);
        echo ";
}

%%SELECTOR%% .search-form--full-screen .search-form__button {
  font-size: ";
        // line 150
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 150), "full_screen_styles", [], "any", false, false, false, 150), "open_button", [], "any", false, false, false, 150), "size", [], "any", false, false, false, 150), "style", [], "any", false, false, false, 150);
        echo ";
  background-color: ";
        // line 151
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 151), "full_screen_styles", [], "any", false, false, false, 151), "open_button", [], "any", false, false, false, 151), "background", [], "any", false, false, false, 151);
        echo ";
  color: ";
        // line 152
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 152), "full_screen_styles", [], "any", false, false, false, 152), "open_button", [], "any", false, false, false, 152), "color", [], "any", false, false, false, 152);
        echo ";
  ";
        // line 153
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 153), "full_screen_styles", [], "any", false, false, false, 153), "open_button", [], "any", false, false, false, 153), "borders", [], "any", false, false, false, 153)], 153, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .search-form--full-screen .search-form__button:hover {
  background-color: ";
        // line 157
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 157), "full_screen_styles", [], "any", false, false, false, 157), "open_button", [], "any", false, false, false, 157), "background_hover", [], "any", false, false, false, 157);
        echo ";
}

%%SELECTOR%% .search-form--full-screen .search-form__lightbox-close {
  font-size: ";
        // line 161
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 161), "full_screen_styles", [], "any", false, false, false, 161), "close_icon", [], "any", false, false, false, 161), "size", [], "any", false, false, false, 161), "style", [], "any", false, false, false, 161);
        echo ";
  color: ";
        // line 162
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 162), "full_screen_styles", [], "any", false, false, false, 162), "close_icon", [], "any", false, false, false, 162), "color", [], "any", false, false, false, 162);
        echo ";
}

%%SELECTOR%% .search-form--full-screen .search-form__lightbox-button {
  font-size: ";
        // line 166
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 166), "full_screen_styles", [], "any", false, false, false, 166), "search_box", [], "any", false, false, false, 166), "icon", [], "any", false, false, false, 166), "size", [], "any", false, false, false, 166), "style", [], "any", false, false, false, 166);
        echo ";
  color: ";
        // line 167
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 167), "full_screen_styles", [], "any", false, false, false, 167), "search_box", [], "any", false, false, false, 167), "icon", [], "any", false, false, false, 167), "color", [], "any", false, false, false, 167);
        echo ";
  ";
        // line 168
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 168), "full_screen_styles", [], "any", false, false, false, 168), "search_box", [], "any", false, false, false, 168), "icon", [], "any", false, false, false, 168), "hide", [], "any", false, false, false, 168)) {
            // line 169
            echo "  \tdisplay: none;
  ";
        }
        // line 171
        echo "}

";
        // line 173
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 173), "full_screen_styles", [], "any", false, false, false, 173), "search_box", [], "any", false, false, false, 173), "width", [], "any", false, false, false, 173), "style", [], "any", false, false, false, 173)) {
            // line 174
            echo "  %%SELECTOR%% .search-form--full-screen .search-form__lightbox-container {
    width: ";
            // line 175
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 175), "full_screen_styles", [], "any", false, false, false, 175), "search_box", [], "any", false, false, false, 175), "width", [], "any", false, false, false, 175), "style", [], "any", false, false, false, 175);
            echo ";
    margin-left: auto;
    margin-right: auto;
  }
";
        }
        // line 179
        echo " 




";
        // line 185
        echo "

    %%SELECTOR%% {
        ";
        // line 188
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 189
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 189), "wrapper", [], "any", false, false, false, 189), "background", [], "any", false, false, false, 189), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 190
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 190), "wrapper", [], "any", false, false, false, 190), "layout", [], "any", false, false, false, 190), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 191
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 191), "wrapper", [], "any", false, false, false, 191), "size", [], "any", false, false, false, 191), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 192
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 192), "wrapper", [], "any", false, false, false, 192), "typography", [], "any", false, false, false, 192),         // line 193
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 194
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 194), "wrapper", [], "any", false, false, false, 194), "spacing", [], "any", false, false, false, 194), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 195
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 195), "wrapper", [], "any", false, false, false, 195), "borders", [], "any", false, false, false, 195), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 196
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 196), "wrapper", [], "any", false, false, false, 196), "effects", [], "any", false, false, false, 196)], 188, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 200
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 201
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 201), "wrapper_hover", [], "any", false, false, false, 201), "background", [], "any", false, false, false, 201), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 202
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 202), "wrapper_hover", [], "any", false, false, false, 202), "layout", [], "any", false, false, false, 202), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 203
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 203), "wrapper_hover", [], "any", false, false, false, 203), "size", [], "any", false, false, false, 203), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 204
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 204), "wrapper_hover", [], "any", false, false, false, 204), "typography", [], "any", false, false, false, 204),         // line 205
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 206
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 206), "wrapper_hover", [], "any", false, false, false, 206), "spacing", [], "any", false, false, false, 206), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 207
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 207), "wrapper_hover", [], "any", false, false, false, 207), "borders", [], "any", false, false, false, 207), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 208
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 208), "wrapper_hover", [], "any", false, false, false, 208), "effects", [], "any", false, false, false, 208)], 200, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 212
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 212), "css", [], "any", false, false, false, 212);
        echo "


";
        // line 215
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 215), "hide", [], "any", false, false, false, 215)))) {
            // line 216
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 217
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 217), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 217), "hide", [], "any", false, false, false, 217))) {
                    // line 218
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 220
                    if (($context["isBuilder"] ?? null)) {
                        // line 221
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 224
                        echo "                        display: none;
                    ";
                    }
                    // line 226
                    echo "                }
            }
        ";
                }
                // line 229
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 231
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "31db71909ce86c98f2f53330c1effeb044584347";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 231,  501 => 229,  496 => 226,  492 => 224,  487 => 221,  485 => 220,  479 => 218,  476 => 217,  471 => 216,  469 => 215,  463 => 212,  456 => 208,  455 => 207,  454 => 206,  453 => 205,  452 => 204,  451 => 203,  450 => 202,  449 => 201,  448 => 200,  441 => 196,  440 => 195,  439 => 194,  438 => 193,  437 => 192,  436 => 191,  435 => 190,  434 => 189,  433 => 188,  428 => 185,  421 => 179,  413 => 175,  410 => 174,  408 => 173,  404 => 171,  400 => 169,  398 => 168,  394 => 167,  390 => 166,  383 => 162,  379 => 161,  372 => 157,  365 => 153,  361 => 152,  357 => 151,  353 => 150,  346 => 146,  342 => 145,  338 => 144,  331 => 140,  327 => 139,  319 => 134,  312 => 130,  307 => 127,  303 => 125,  301 => 124,  297 => 123,  293 => 122,  286 => 118,  277 => 112,  269 => 107,  262 => 103,  255 => 99,  251 => 98,  247 => 97,  240 => 93,  234 => 89,  229 => 86,  227 => 85,  222 => 83,  218 => 82,  214 => 81,  210 => 80,  206 => 79,  201 => 76,  197 => 74,  195 => 73,  191 => 72,  184 => 68,  177 => 64,  173 => 63,  169 => 62,  165 => 61,  154 => 53,  150 => 52,  146 => 51,  139 => 47,  135 => 46,  131 => 45,  124 => 41,  117 => 37,  113 => 36,  109 => 35,  102 => 31,  95 => 27,  91 => 26,  87 => 25,  82 => 22,  78 => 20,  76 => 19,  72 => 18,  68 => 17,  59 => 11,  54 => 8,  48 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "31db71909ce86c98f2f53330c1effeb044584347", "");
    }
}
