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

/* themes/custom/layout-theme/templates/views/views-view-unformatted--top_view_slider--top_news_slider.html.twig */
class __TwigTemplate_86965460f6ac5d95c601e45587c18f76 extends Template
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
        // line 19
        if (($context["title"] ?? null)) {
            // line 20
            echo "<h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 20, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 22
        echo "<div class=\"container-fluid py-3\">
    <div class=\"container\">
        <div class=\"owl-carousel owl-carousel-2 carousel-item-3 position-relative top_slider\">
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/layout-theme/templates/views/views-view-unformatted--top_view_slider--top_news_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 28,  59 => 26,  55 => 25,  50 => 22,  44 => 20,  42 => 19,  39 => 18,);
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
<div class=\"container-fluid py-3\">
    <div class=\"container\">
        <div class=\"owl-carousel owl-carousel-2 carousel-item-3 position-relative top_slider\">
{% for row in rows %}
{{- row.content -}}
{% endfor %}
</div>
</div>
</div>", "themes/custom/layout-theme/templates/views/views-view-unformatted--top_view_slider--top_news_slider.html.twig", "C:\\xampp\\htdocs\\layout\\web\\themes\\custom\\layout-theme\\templates\\views\\views-view-unformatted--top_view_slider--top_news_slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "for" => 25);
        static $filters = array("escape" => 20);
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
