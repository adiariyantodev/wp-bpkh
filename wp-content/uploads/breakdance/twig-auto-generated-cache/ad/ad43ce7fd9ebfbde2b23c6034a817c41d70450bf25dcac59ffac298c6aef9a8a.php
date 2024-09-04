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

/* 8bc339bc1e441b30691eb1c93c0c0f9d9c4351a3 */
class __TwigTemplate_80b248b93f91cfd05446b0b5a3d07962dcbd847f07759fc4e3ca254d221cda85 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "8bc339bc1e441b30691eb1c93c0c0f9d9c4351a3", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $macros["e"] = $this->macros["e"] = $this;
        // line 5
        $context["type"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5))) ? ("classic") : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5)));
        // line 6
        $context["effect"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 6), "expand_styles", [], "any", false, false, false, 6), "effect", [], "any", false, false, false, 6))) ? ("fade") : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 6), "expand_styles", [], "any", false, false, false, 6), "effect", [], "any", false, false, false, 6)));
        // line 7
        echo "
";
        // line 11
        echo "
";
        // line 15
        echo "
";
        // line 19
        echo "

<form role=\"search\" method=\"get\" data-type=\"";
        // line 21
        echo ($context["type"] ?? null);
        echo "\" class=\"js-search-form search-form search-form--";
        echo ($context["type"] ?? null);
        echo "\" action=\"/\">
 <div class=\"search-form__container\">
  ";
        // line 23
        if ((0 === twig_compare(($context["type"] ?? null), "classic"))) {
            // line 24
            echo "    <button role=\"button\" type=\"submit\" class=\"search-form__button";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 24), "classic_styles", [], "any", false, false, false, 24), "icon_button", [], "any", false, false, false, 24), "type", [], "any", false, false, false, 24), "text"))) ? (" has-text") : (""));
            echo "\">
      ";
            // line 25
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 25), "classic_styles", [], "any", false, false, false, 25), "icon_button", [], "any", false, false, false, 25), "type", [], "any", false, false, false, 25), "custom"))) {
                // line 26
                echo "\t\t  ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 26), "classic_styles", [], "any", false, false, false, 26), "icon_button", [], "any", false, false, false, 26), "icon", [], "any", false, false, false, 26), "svgCode", [], "any", false, false, false, 26);
                echo "
      ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 27
($context["design"] ?? null), "form", [], "any", false, false, false, 27), "classic_styles", [], "any", false, false, false, 27), "icon_button", [], "any", false, false, false, 27), "type", [], "any", false, false, false, 27), "text"))) {
                // line 28
                echo "          ";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, true, false, 28), "classic_styles", [], "any", false, true, false, 28), "icon_button", [], "any", false, true, false, 28), "text", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, true, false, 28), "classic_styles", [], "any", false, true, false, 28), "icon_button", [], "any", false, true, false, 28), "text", [], "any", false, false, false, 28), "Search")) : ("Search"));
                echo "
      ";
            } else {
                // line 30
                echo "          ";
                echo twig_call_macro($macros["e"], "macro_searchIcon", [], 30, $context, $this->getSourceContext());
                echo "
      ";
            }
            // line 32
            echo "    </button>
  ";
        }
        // line 33
        echo " 
   
  ";
        // line 35
        if ((0 === twig_compare(($context["type"] ?? null), "expand"))) {
            // line 36
            echo "    <div role=\"button\" class=\"search-form__button js-search-form-expand-button\">
      ";
            // line 37
            echo twig_call_macro($macros["e"], "macro_searchIcon", [], 37, $context, $this->getSourceContext());
            echo "
      ";
            // line 38
            echo twig_call_macro($macros["e"], "macro_closeIcon", [], 38, $context, $this->getSourceContext());
            echo "
    </div>
  ";
        }
        // line 40
        echo " 

  ";
        // line 42
        if ((0 === twig_compare(($context["type"] ?? null), "full-screen"))) {
            // line 43
            echo "    <div role=\"button\" class=\"search-form__button js-search-form-expand-button\">
      ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 44), "icon", [], "any", false, false, false, 44)) {
                // line 45
                echo "\t\t  ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 45), "icon", [], "any", false, false, false, 45), "svgCode", [], "any", false, false, false, 45);
                echo "
      ";
            } else {
                // line 47
                echo "          ";
                echo twig_call_macro($macros["e"], "macro_searchIcon", [], 47, $context, $this->getSourceContext());
                echo "
      ";
            }
            // line 49
            echo "    </div>
  ";
        }
        // line 50
        echo " 
  \t
  \t<label class=\"screen-reader-text\">Search for</label>
   
    ";
        // line 54
        if ((0 === twig_compare(($context["type"] ?? null), "classic"))) {
            // line 55
            echo "    <input type=\"text\" class=\"js-search-form-field search-form__field\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 55), "placeholder", [], "any", false, false, false, 55);
            echo "\" value=\"\" name=\"s\" />
  \t";
        }
        // line 56
        echo " 

    ";
        // line 58
        if ((0 === twig_compare(($context["type"] ?? null), "expand"))) {
            // line 59
            echo "      <div class=\"form-search__wrapper form-search__wrapper--";
            echo ($context["effect"] ?? null);
            echo "\">
        <input type=\"text\" class=\"js-search-form-field search-form__field\" placeholder=\"";
            // line 60
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 60), "placeholder", [], "any", false, false, false, 60);
            echo "\" value=\"\" name=\"s\" />
      </div>
    ";
        }
        // line 62
        echo " 

     ";
        // line 64
        if ((0 === twig_compare(($context["type"] ?? null), "full-screen"))) {
            // line 65
            echo "      <div class=\"search-form__lightbox\">
        <div role=\"button\" class=\"search-form__lightbox-close js-search-form-close\">
          ";
            // line 67
            echo twig_call_macro($macros["e"], "macro_closeIcon", [], 67, $context, $this->getSourceContext());
            echo "
        </div>

        <div class=\"search-form__lightbox-bg js-search-form-lightbox-bg\"></div>
       
      
     <div class=\"search-form__lightbox-container\">
        <button role=\"button\" type=\"submit\" class=\"search-form__lightbox-button\">
          ";
            // line 75
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 75), "icon", [], "any", false, false, false, 75)) {
                // line 76
                echo "\t\t  \t";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 76), "icon", [], "any", false, false, false, 76), "svgCode", [], "any", false, false, false, 76);
                echo "
      \t  ";
            } else {
                // line 78
                echo "          \t";
                echo twig_call_macro($macros["e"], "macro_searchIcon", [], 78, $context, $this->getSourceContext());
                echo "
      \t  ";
            }
            // line 80
            echo "        </button>
        <input type=\"text\" class=\"js-search-form-field search-form__field\" placeholder=\"";
            // line 81
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 81), "placeholder", [], "any", false, false, false, 81);
            echo "\" value=\"\" name=\"s\" />
      </div>

    </div>
  
    ";
        }
        // line 86
        echo " 
  </div>
</form>


         ";
    }

    // line 8
    public function macro_searchIcon(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 9
            echo "\t<svg class=\"search-form__icon--search\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><!--! Font Awesome Pro 6.0.0-beta2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d=\"M504.1 471l-134-134C399.1 301.5 415.1 256.8 415.1 208c0-114.9-93.13-208-208-208S-.0002 93.13-.0002 208S93.12 416 207.1 416c48.79 0 93.55-16.91 129-45.04l134 134C475.7 509.7 481.9 512 488 512s12.28-2.344 16.97-7.031C514.3 495.6 514.3 480.4 504.1 471zM48 208c0-88.22 71.78-160 160-160s160 71.78 160 160s-71.78 160-160 160S48 296.2 48 208z\"/></svg>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 12
    public function macro_arrowIcon(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 13
            echo "\t<svg class=\"search-form__icon--arrow\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><!--! Font Awesome Pro 6.0.0-beta2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d=\"M264.6 70.63l176 168c4.75 4.531 7.438 10.81 7.438 17.38s-2.688 12.84-7.438 17.38l-176 168c-9.594 9.125-24.78 8.781-33.94-.8125c-9.156-9.5-8.812-24.75 .8125-33.94l132.7-126.6H24.01c-13.25 0-24.01-10.76-24.01-24.01s10.76-23.99 24.01-23.99h340.1l-132.7-126.6C221.8 96.23 221.5 80.98 230.6 71.45C239.8 61.85 254.1 61.51 264.6 70.63z\"/></svg>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 16
    public function macro_closeIcon(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 17
            echo "  <svg class=\"search-form__icon--close\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\"><!--! Font Awesome Pro 6.0.0-beta2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d=\"M312.1 375c9.369 9.369 9.369 24.57 0 33.94s-24.57 9.369-33.94 0L160 289.9l-119 119c-9.369 9.369-24.57 9.369-33.94 0s-9.369-24.57 0-33.94L126.1 256L7.027 136.1c-9.369-9.369-9.369-24.57 0-33.94s24.57-9.369 33.94 0L160 222.1l119-119c9.369-9.369 24.57-9.369 33.94 0s9.369 24.57 0 33.94L193.9 256L312.1 375z\"/></svg>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "8bc339bc1e441b30691eb1c93c0c0f9d9c4351a3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 17,  280 => 16,  270 => 13,  258 => 12,  248 => 9,  236 => 8,  227 => 86,  218 => 81,  215 => 80,  209 => 78,  203 => 76,  201 => 75,  190 => 67,  186 => 65,  184 => 64,  180 => 62,  174 => 60,  169 => 59,  167 => 58,  163 => 56,  157 => 55,  155 => 54,  149 => 50,  145 => 49,  139 => 47,  133 => 45,  131 => 44,  128 => 43,  126 => 42,  122 => 40,  116 => 38,  112 => 37,  109 => 36,  107 => 35,  103 => 33,  99 => 32,  93 => 30,  87 => 28,  85 => 27,  80 => 26,  78 => 25,  73 => 24,  71 => 23,  64 => 21,  60 => 19,  57 => 15,  54 => 11,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "8bc339bc1e441b30691eb1c93c0c0f9d9c4351a3", "");
    }
}
