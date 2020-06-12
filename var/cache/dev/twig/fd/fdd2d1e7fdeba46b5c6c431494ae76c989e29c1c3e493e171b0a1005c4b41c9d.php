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
class __TwigTemplate_275eb50af54962c93f1d41cc148e09f79861b28990a8f0112b2f894a459ef7a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "weather/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-sm-12 col-12\">

            <div class=\"d-flex flex-column align-items-center mt-4\">
                <div class=\"text-center\">
                    <div class=\"city\" id=\"city\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</div>
                    <div class=\"description\" id=\"description\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</div>
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\" alt=\"weather-picture\" id=\"path\" class=\"img-fluid\">
                    <div class=\"temp\" id=\"temp\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["temp"]) || array_key_exists("temp", $context) ? $context["temp"] : (function () { throw new RuntimeError('Variable "temp" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</div>
                </div>
            </div>

            <div class=\"col-sm-12 col-12\">
                <div class=\"wind d-flex align-items-baseline justify-content-center\">
                    <p>Le vent souffle à &nbsp; <div class=\"wind\" id=\"wind\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["wind"]) || array_key_exists("wind", $context) ? $context["wind"] : (function () { throw new RuntimeError('Variable "wind" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</div> &nbsp; Km/h</p>
                </div>

                <div class=\"d-flex flex-column align-items-center\">
                    <img id=\"arrow\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/arrow.png"), "html", null, true);
        echo "\" alt=\"arrow-wind-direction\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["deg"]) || array_key_exists("deg", $context) ? $context["deg"] : (function () { throw new RuntimeError('Variable "deg" does not exist.', 23, $this->source); })()), "html", null, true);
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
        // line 36
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control w-50\">
                <a type=\"button\" id=\"submit\" name=\"submit\" class=\"btn btn-success mt-2 rounded-pill\"
                    href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_weather", ["city" => (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 38, $this->source); })())]), "html", null, true);
        echo "\">Afficher</a>
            </form>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  127 => 38,  122 => 36,  104 => 23,  97 => 19,  88 => 13,  84 => 12,  80 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
        <div class=\"col-sm-12 col-12\">

            <div class=\"d-flex flex-column align-items-center mt-4\">
                <div class=\"text-center\">
                    <div class=\"city\" id=\"city\">{{city}}</div>
                    <div class=\"description\" id=\"description\">{{description}}</div>
                    <img src=\"{{path}}\" alt=\"weather-picture\" id=\"path\" class=\"img-fluid\">
                    <div class=\"temp\" id=\"temp\">{{temp}}</div>
                </div>
            </div>

            <div class=\"col-sm-12 col-12\">
                <div class=\"wind d-flex align-items-baseline justify-content-center\">
                    <p>Le vent souffle à &nbsp; <div class=\"wind\" id=\"wind\">{{wind}}</div> &nbsp; Km/h</p>
                </div>

                <div class=\"d-flex flex-column align-items-center\">
                    <img id=\"arrow\" src=\"{{asset('assets/img/arrow.png')}}\" alt=\"arrow-wind-direction\" value=\"{{deg}}\">
                    <small class=\"direction\">Direction du vent</small>
                    <input type=\"hidden\" name=\"action\" id=\"hidden\" value=\"showWeather\">
                </div>
            </div>


        </div>

        <div class=\"col-sm-12 col-12\">
            <form method=\"POST\" class=\"d-flex flex-column align-items-center mt-5\" id=\"poste\">

                <label for=\"search\">Recherche</label>
                <input type=\"text\" name=\"search\" id=\"search\" value=\"{{city}}\" class=\"form-control w-50\">
                <a type=\"button\" id=\"submit\" name=\"submit\" class=\"btn btn-success mt-2 rounded-pill\"
                    href=\"{{path('show_weather', {'city': city})}}\">Afficher</a>
            </form>
        </div>
    </div>

{% endblock %}
", "weather/index.html.twig", "/Applications/MAMP/htdocs/exo-sf/templates/weather/index.html.twig");
    }
}
