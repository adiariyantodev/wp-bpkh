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

/* fc03266d3db1aca0d72c1437cef6c7e48e6ec6a1 */
class __TwigTemplate_bac8030e08e21464797b2e8b38906cdb80f8e4cf97a4cd272bb59254cff3ad73 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "fc03266d3db1aca0d72c1437cef6c7e48e6ec6a1", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "settings", [], "any", false, false, false, 4), "items", [], "any", false, false, false, 4)) {
            // line 5
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "settings", [], "any", false, false, false, 5), "items", [], "any", false, false, false, 5));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "    <li class=\"bde-faq__item\">
       <div class=\"bde-faq__question js-faq-item\">
          <h3 class=\"bde-faq__title\">";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["item"], "question", [], "any", false, false, false, 8);
                echo "</h3>
            ";
                // line 9
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 9), "icon", [], "any", false, false, false, 9), "icon", [], "any", false, false, false, 9), "svgCode", [], "any", false, false, false, 9)) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 9), "icon", [], "any", false, false, false, 9), "active_icon", [], "any", false, false, false, 9), "svgCode", [], "any", false, false, false, 9)))) {
                    // line 10
                    echo "               <div class=\"bde-faq__icon bde-faq__icon--rotate\">
                 <svg fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 8 12\">
                \t<path d=\"M.59 10.59 5.17 6 .59 1.41 2 0l6 6-6 6-1.41-1.41Z\" />
              \t</svg>
              </div>
          \t";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 15
($context["design"] ?? null), "item", [], "any", false, false, false, 15), "icon", [], "any", false, false, false, 15), "icon", [], "any", false, false, false, 15), "svgCode", [], "any", false, false, false, 15) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 15), "icon", [], "any", false, false, false, 15), "active_icon", [], "any", false, false, false, 15), "svgCode", [], "any", false, false, false, 15)))) {
                    // line 16
                    echo "         \t  <div class=\"bde-faq__icon bde-faq__icon--rotate\">
                 ";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 17), "icon", [], "any", false, false, false, 17), "icon", [], "any", false, false, false, 17), "svgCode", [], "any", false, false, false, 17);
                    echo "
              </div>
            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 19
($context["design"] ?? null), "item", [], "any", false, false, false, 19), "icon", [], "any", false, false, false, 19), "icon", [], "any", false, false, false, 19), "svgCode", [], "any", false, false, false, 19) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 19), "icon", [], "any", false, false, false, 19), "active_icon", [], "any", false, false, false, 19), "svgCode", [], "any", false, false, false, 19))) {
                    // line 20
                    echo "               <div class=\"bde-faq__icon bde-faq__icon--inactive\">
              ";
                    // line 21
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 21), "icon", [], "any", false, false, false, 21), "icon", [], "any", false, false, false, 21), "svgCode", [], "any", false, false, false, 21)) {
                        // line 22
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 22), "icon", [], "any", false, false, false, 22), "icon", [], "any", false, false, false, 22), "svgCode", [], "any", false, false, false, 22);
                        echo "
              ";
                    }
                    // line 24
                    echo "              </div>
         \t  <div class=\"bde-faq__icon bde-faq__icon--active\">
              ";
                    // line 26
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 26), "icon", [], "any", false, false, false, 26), "active_icon", [], "any", false, false, false, 26), "svgCode", [], "any", false, false, false, 26)) {
                        // line 27
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 27), "icon", [], "any", false, false, false, 27), "active_icon", [], "any", false, false, false, 27), "svgCode", [], "any", false, false, false, 27);
                        echo "
              ";
                    }
                    // line 29
                    echo "              </div>
            ";
                }
                // line 31
                echo "      </div>
      <div class=\"bde-faq__answer\">
        <div class=\"bde-faq__answer-content breakdance-rich-text-styles\">
        ";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["item"], "answer", [], "any", false, false, false, 34);
                echo "
        </div>
        ";
                // line 36
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "button", [], "any", false, false, false, 36), "text", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "          ";
                    echo twig_call_macro($macros["macros"], "macro_atomV1ButtonHtml", [twig_get_attribute($this->env, $this->source, $context["item"], "button", [], "any", false, false, false, 37), "bde-faq__btn", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "item", [], "any", false, false, false, 37), "button", [], "any", false, false, false, 37), (("content.settings.items[" . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 37)) . "].button.text")], 37, $context, $this->getSourceContext());
                    echo "
        ";
                }
                // line 39
                echo "      </div>
    </li>
  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 43
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "fc03266d3db1aca0d72c1437cef6c7e48e6ec6a1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 43,  139 => 39,  133 => 37,  131 => 36,  126 => 34,  121 => 31,  117 => 29,  111 => 27,  109 => 26,  105 => 24,  99 => 22,  97 => 21,  94 => 20,  92 => 19,  87 => 17,  84 => 16,  82 => 15,  75 => 10,  73 => 9,  69 => 8,  65 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fc03266d3db1aca0d72c1437cef6c7e48e6ec6a1", "");
    }
}
