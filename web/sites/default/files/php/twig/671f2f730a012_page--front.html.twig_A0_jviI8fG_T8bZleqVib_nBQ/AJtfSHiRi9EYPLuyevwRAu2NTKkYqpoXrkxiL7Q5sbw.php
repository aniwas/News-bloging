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

/* themes/custom/layout-theme/templates/layout/page--front.html.twig */
class __TwigTemplate_d6d9283664ca27a781bbb7b33c540539 extends Template
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
        // line 1
        echo "<div class=\"container-fluid\">
    <div class=\"row align-items-center bg-light px-lg-5\">
        <div class=\"col-12 col-md-8\">
            <div class=\"d-flex justify-content-between\">
                <div class=\"bg-primary text-white text-center py-2\" style=\"width: 100px;\">Tranding</div>
                <div class=\"owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3 owl-loaded owl-drag\" style=\"width: calc(100% - 100px); padding-left: 90px;\">
                    
                    
                <div class=\"owl-stage-outer\">
                    <div class=\"owl-stage\" style=\"transform: translate3d(-2220px, 0px, 0px); transition: 2s; width: 4440px;\">
                        <div class=\"owl-item cloned\" style=\"width: 740px;\">
                            <div class=\"text-truncate\">
                                <a class=\"text-secondary\" href=\"\">Labore sit justo amet eos sed, et sanctus dolor diam eos</a>
                            </div>
                        </div>
                        <div class=\"owl-item cloned\" style=\"width: 740px;\">
                            <div class=\"text-truncate\">
                                <a class=\"text-secondary\" href=\"\">Gubergren elitr amet eirmod et lorem diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a>
                            </div>
                        </div>
                        <div class=\"owl-item\" style=\"width: 740px;\">
                            <div class=\"text-truncate\">
                                <a class=\"text-secondary\" href=\"\">Labore sit justo amet eos sed, et sanctus dolor diam eos</a>
                            </div>
                        </div>
                        <div class=\"owl-item active\" style=\"width: 740px;\">
                            <div class=\"text-truncate\">
                                <a class=\"text-secondary\" href=\"\">Gubergren elitr amet eirmod et lorem diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a>
                            </div>
                        </div>
                        <div class=\"owl-item cloned\" style=\"width: 740px;\">
                            <div class=\"text-truncate\">
                                <a class=\"text-secondary\" href=\"\">Labore sit justo amet eos sed, et sanctus dolor diam eos</a>
                            </div>
                        </div>
                        <div class=\"owl-item cloned\" style=\"width: 740px;\">
                            <div class=\"text-truncate\">
                                <a class=\"text-secondary\" href=\"\">Gubergren elitr amet eirmod et lorem diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"owl-nav\">
                    <div class=\"owl-prev\">
                        <i class=\"fa fa-angle-left\"></i>
                    </div>
                    <div class=\"owl-next\">
                        <i class=\"fa fa-angle-right\"></i>
                    </div>
                </div>
                <div class=\"owl-dots disabled\">

                </div>
            </div>
            </div>
        </div>
        <div class=\"col-md-4 text-right d-none d-md-block\">
            <p>Today's date: ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "F j, Y"), "html", null, true);
        echo "</p>

        </div>
    </div>
    <div class=\"row align-items-center py-2 px-lg-5\">
        <div class=\"col-lg-4\">
            <a href=\"\" class=\"navbar-brand d-none d-lg-block\">
                ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"col-lg-8 text-center text-lg-right\">
            ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_image", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
        </div>
    </div>
</div>
<!---Start-->
<div class=\"container-fluid p-0 mb-3\">
    <nav class=\"navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5\">
        <a href=\"\" class=\"navbar-brand d-block d-lg-none\">
            <h1 class=\"m-0 display-5 text-uppercase\"><span class=\"text-primary\">News</span>Room</h1>
        </a>
        <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-content-between px-0 px-lg-3\" id=\"navbarCollapse\">
            ";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo "
        </div>
    </nav>
</div>
<!--navbar end-->
<!--top news slider start-->
";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_news_slider", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "   
<!--page.top_news_slider please add curly braces-->
            
<div class=\"container-fluid py-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                ";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_slider", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "categories", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"container-fluid py-3\">
    <div class=\"container\">
        ";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
        echo "
    </div>
</div>

<!--business and technology start her-->
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 py-3\">
                ";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "business", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"col-lg-6 py-3\">
                ";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "technology", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</div>
<!--end-->
<!--Entertainment and Sports start here-->
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 py-3\">
                ";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "entertainment", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"col-lg-6 py-3\">
                ";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sports", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</div>
<!--end-->

<!--Popular section start-->

<!--Section end-->
<div class=\"container-fluid py-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"row mb-3\"> 
                    ";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "popular", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "
                </div>
               <div class=\"row\">
                  ";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tranding", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
        echo "
               </div>
            </div>
        </div>
    </div>
</div>
<!--end-->

<div class=\"container-fluid bg-light pt-5 px-sm-3 px-md-5\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6 mb-5\">";
        // line 161
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_one", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
        echo "</div>
        <div class=\"col-lg-3 col-md-6 mb-5\">";
        // line 162
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_two", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
        echo "</div>
        <div class=\"col-lg-3 col-md-6 mb-5\">";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_three", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        echo "</div>
        <div class=\"col-lg-3 col-md-6 mb-5\">";
        // line 164
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
        echo "</div>
    </div>
</div>

<div class=\"container-fluid py-4 px-sm-3 px-md-5\">
    <p class=\"m-0 text-center\">
        © <a class=\"font-weight-bold\" href=\"#\">Your Site Name</a>. All Rights Reserved. 
        
        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
        Designed by <a class=\"font-weight-bold\" href=\"https://htmlcodex.com\">Aniwas Mourya</a>
    </p>
</div>

                ";
    }

    public function getTemplateName()
    {
        return "themes/custom/layout-theme/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 164,  251 => 163,  247 => 162,  243 => 161,  230 => 151,  224 => 148,  206 => 133,  200 => 130,  186 => 119,  180 => 116,  168 => 107,  157 => 99,  151 => 96,  141 => 89,  132 => 83,  115 => 69,  108 => 65,  98 => 58,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"row align-items-center bg-light px-lg-5\">
        <div class=\"col-12 col-md-8\">
            <div class=\"d-flex justify-content-between\">
                <div class=\"bg-primary text-white text-center py-2\" style=\"width: 100px;\">Tranding</div>
                <div class=\"owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3 owl-loaded owl-drag\" style=\"width: calc(100% - 100px); padding-left: 90px;\">
                    
                    
                <div class=\"owl-stage-outer\">
                    <div class=\"owl-stage\" style=\"transform: translate3d(-2220px, 0px, 0px); transition: 2s; width: 4440px;\">
                        <div class=\"owl-item cloned\" style=\"width: 740px;\">
                            <div class=\"text-truncate\">
                                <a class=\"text-secondary\" href=\"\">Labore sit justo amet eos sed, et sanctus dolor diam eos</a>
                            </div>
                        </div>
                        <div class=\"owl-item cloned\" style=\"width: 740px;\">
                            <div class=\"text-truncate\">
                                <a class=\"text-secondary\" href=\"\">Gubergren elitr amet eirmod et lorem diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a>
                            </div>
                        </div>
                        <div class=\"owl-item\" style=\"width: 740px;\">
                            <div class=\"text-truncate\">
                                <a class=\"text-secondary\" href=\"\">Labore sit justo amet eos sed, et sanctus dolor diam eos</a>
                            </div>
                        </div>
                        <div class=\"owl-item active\" style=\"width: 740px;\">
                            <div class=\"text-truncate\">
                                <a class=\"text-secondary\" href=\"\">Gubergren elitr amet eirmod et lorem diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a>
                            </div>
                        </div>
                        <div class=\"owl-item cloned\" style=\"width: 740px;\">
                            <div class=\"text-truncate\">
                                <a class=\"text-secondary\" href=\"\">Labore sit justo amet eos sed, et sanctus dolor diam eos</a>
                            </div>
                        </div>
                        <div class=\"owl-item cloned\" style=\"width: 740px;\">
                            <div class=\"text-truncate\">
                                <a class=\"text-secondary\" href=\"\">Gubergren elitr amet eirmod et lorem diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"owl-nav\">
                    <div class=\"owl-prev\">
                        <i class=\"fa fa-angle-left\"></i>
                    </div>
                    <div class=\"owl-next\">
                        <i class=\"fa fa-angle-right\"></i>
                    </div>
                </div>
                <div class=\"owl-dots disabled\">

                </div>
            </div>
            </div>
        </div>
        <div class=\"col-md-4 text-right d-none d-md-block\">
            <p>Today's date: {{ \"now\"|date(\"F j, Y\") }}</p>

        </div>
    </div>
    <div class=\"row align-items-center py-2 px-lg-5\">
        <div class=\"col-lg-4\">
            <a href=\"\" class=\"navbar-brand d-none d-lg-block\">
                {{page.logo}}
            </a>
        </div>
        <div class=\"col-lg-8 text-center text-lg-right\">
            {{page.top_image}}
        </div>
    </div>
</div>
<!---Start-->
<div class=\"container-fluid p-0 mb-3\">
    <nav class=\"navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5\">
        <a href=\"\" class=\"navbar-brand d-block d-lg-none\">
            <h1 class=\"m-0 display-5 text-uppercase\"><span class=\"text-primary\">News</span>Room</h1>
        </a>
        <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-content-between px-0 px-lg-3\" id=\"navbarCollapse\">
            {{page.navbar}}
        </div>
    </nav>
</div>
<!--navbar end-->
<!--top news slider start-->
{{ page.top_news_slider }}   
<!--page.top_news_slider please add curly braces-->
            
<div class=\"container-fluid py-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                {{ page.main_slider }}
            </div>
            <div class=\"col-lg-4\">
                {{ page.categories }}
            </div>
        </div>
    </div>
</div>

<div class=\"container-fluid py-3\">
    <div class=\"container\">
        {{ page.feature }}
    </div>
</div>

<!--business and technology start her-->
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 py-3\">
                {{ page.business }}
            </div>
            <div class=\"col-lg-6 py-3\">
                {{ page.technology }}
            </div>
        </div>
    </div>
</div>
<!--end-->
<!--Entertainment and Sports start here-->
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 py-3\">
                {{ page.entertainment }}
            </div>
            <div class=\"col-lg-6 py-3\">
                {{ page.sports }}
            </div>
        </div>
    </div>
</div>
<!--end-->

<!--Popular section start-->

<!--Section end-->
<div class=\"container-fluid py-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"row mb-3\"> 
                    {{ page.popular}}
                </div>
               <div class=\"row\">
                  {{ page.tranding }}
               </div>
            </div>
        </div>
    </div>
</div>
<!--end-->

<div class=\"container-fluid bg-light pt-5 px-sm-3 px-md-5\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6 mb-5\">{{ page.footer_one }}</div>
        <div class=\"col-lg-3 col-md-6 mb-5\">{{ page.footer_two }}</div>
        <div class=\"col-lg-3 col-md-6 mb-5\">{{ page.footer_three }}</div>
        <div class=\"col-lg-3 col-md-6 mb-5\">{{ page.footer_four }}</div>
    </div>
</div>

<div class=\"container-fluid py-4 px-sm-3 px-md-5\">
    <p class=\"m-0 text-center\">
        © <a class=\"font-weight-bold\" href=\"#\">Your Site Name</a>. All Rights Reserved. 
        
        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
        Designed by <a class=\"font-weight-bold\" href=\"https://htmlcodex.com\">Aniwas Mourya</a>
    </p>
</div>

                ", "themes/custom/layout-theme/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\layout\\web\\themes\\custom\\layout-theme\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 58, "date" => 58);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
