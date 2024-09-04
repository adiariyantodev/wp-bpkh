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

/* d15b2c32ba84bc5c513475dd18b93b974f153eb6 */
class __TwigTemplate_1087dccbc28e95f42069c40ad8bacad439b79f1a03471b35e325aa1c50634ad2 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "d15b2c32ba84bc5c513475dd18b93b974f153eb6", 2)->unwrap();
        // line 3
        echo "
          <div class=\"breakdance-dropdown breakdance-dropdown--custom ";
        // line 4
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "link", [], "any", false, false, false, 4)) ? ("breakdance-dropdown--with-link") : (""));
        echo "\">
    ";
        // line 5
        $context["tag"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 5), "link", [], "any", false, false, false, 5)) ? ("a") : ("button"));
        // line 6
        echo "    <";
        echo ($context["tag"] ?? null);
        echo " class=\"breakdance-menu-link\" aria-haspopup=\"true\"
    aria-expanded=\"false\" ";
        // line 7
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 7), "link", [], "any", false, false, false, 7)) ? ((("href=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 7), "link", [], "any", false, false, false, 7)) . "\"")) : (""));
        echo Breakdance\PluginsAPI\content_editable_php("content.content.text");
        echo "
    >
    ";
        // line 9
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 9), "text", [], "any", false, false, false, 9);
        echo "
</";
        // line 10
        echo ($context["tag"] ?? null);
        echo ">

<div class=\"breakdance-dropdown-floater\" aria-hidden=\"true\">
    <div class=\"breakdance-dropdown-body\">
        <div class=\"breakdance-dropdown-custom-content\">
            %%CHILDREN%%
        </div>
    </div>
  </div>
</div>

         ";
    }

    public function getTemplateName()
    {
        return "d15b2c32ba84bc5c513475dd18b93b974f153eb6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  62 => 9,  56 => 7,  51 => 6,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "d15b2c32ba84bc5c513475dd18b93b974f153eb6", "");
    }
}
