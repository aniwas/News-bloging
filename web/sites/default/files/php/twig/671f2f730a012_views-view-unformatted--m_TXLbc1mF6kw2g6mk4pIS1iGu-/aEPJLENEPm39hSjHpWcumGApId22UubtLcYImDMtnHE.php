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

/* themes/custom/layout-theme/templates/views/views-view-unformatted--main_slider--block_1.html.twig */
class __TwigTemplate_0b71f9bea9ea22793dba45624fbfd08b extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "

";
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo " <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 23
        echo "<div class=\"owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0\">
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/layout-theme/templates/views/views-view-unformatted--main_slider--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 27,  58 => 25,  54 => 24,  51 => 23,  45 => 21,  43 => 20,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * @file
     * Theme override to display a view of unformatted rows.
     *
     * Available variables:
     * - title: The title of this group of rows. May be empty.
     * - rows: A list of the view's row items.
     *   - attributes: The row's HTML attributes.
     *   - content: The row's content.
     * - view: The view object.
     * - default_row_class: A flag indicating whether default classes should be
     *   used on rows.
     *
     * @see template_preprocess_views_view_unformatted()
     */
#}


{% if title %}
 <h3>{{ title }}</h3>
{% endif %}
<div class=\"owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0\">
{% for row in rows %}
  {{- row.content -}}
{% endfor %}
</div>
    ", "themes/custom/layout-theme/templates/views/views-view-unformatted--main_slider--block_1.html.twig", "C:\\xampp\\htdocs\\layout\\web\\themes\\custom\\layout-theme\\templates\\views\\views-view-unformatted--main_slider--block_1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "for" => 24);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
