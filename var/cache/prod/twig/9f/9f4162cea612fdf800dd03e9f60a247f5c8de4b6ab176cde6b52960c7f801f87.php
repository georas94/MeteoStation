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

/* weather/index.html.twig */
class __TwigTemplate_d095c2abb4920b1bf51006b353f64d1b63a0153fe4e239848746ff7b30fdf4d9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "weather/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

    <div class=\"row\">
        <div class=\"col-sm-12 col-12\">

            <div class=\"d-flex flex-column align-items-center mt-4\">

                <div class=\"text-center\">
                    <div class=\"city\" id=\"city\">";
        // line 14
        echo twig_escape_filter($this->env, ($context["city"] ?? null), "html", null, true);
        echo "</div>
                    <div class=\"description\" id=\"description\">";
        // line 15
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "</div>
                    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "\" alt=\"meteoPicture\" id=\"path\" class=\"img-fluid\">
                    <div class=\"temp\" id=\"temp\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["temp"] ?? null), "html", null, true);
        echo "</div>
                </div>
        </div>

        <div class=\"col-sm-12 col-12\">

            <div class=\"wind d-flex align-items-baseline justify-content-center\">
                <p>Le vent souffle à &nbsp; <div class=\"wind\" id=\"wind\">";
        // line 24
        echo twig_escape_filter($this->env, ($context["wind"] ?? null), "html", null, true);
        echo "</div> &nbsp; Km/h</p>
            </div>

            <div class=\"d-flex flex-column align-items-center\">
                <img id =\"arrow\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/arrow.png"), "html", null, true);
        echo "\" alt=\"\" value=\"";
        echo twig_escape_filter($this->env, ($context["deg"] ?? null), "html", null, true);
        echo "\">
                <small class=\"direction\">Direction du vent</small>
                <input type=\"hidden\" name=\"action\" id=\"hidden\" value=\"showWeather\">
            </div>  
        </div>


        </div>

        <div class=\"col-sm-12 col-12\">
            <form method=\"POST\" class=\"d-flex flex-column align-items-center mt-5\" id=\"poste\">

                <label for=\"search\">Recherche</label>
                <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["city"] ?? null), "html", null, true);
        echo "\" class=\"form-control w-50\">
                <a type=\"button\" id=\"submit\" name=\"submit\" class=\"btn btn-success mt-2 rounded-pill\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_weather", ["city" => ($context["city"] ?? null)]), "html", null, true);
        echo "\">Afficher</a>
                
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "weather/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  107 => 41,  89 => 28,  82 => 24,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "weather/index.html.twig", "/Applications/MAMP/htdocs/exo-sf/templates/weather/index.html.twig");
    }
}
