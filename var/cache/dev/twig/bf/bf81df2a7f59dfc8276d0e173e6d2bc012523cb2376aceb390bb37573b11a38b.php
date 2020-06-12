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

/* base.html.twig */
class __TwigTemplate_883b3a26a3f3aa19aa3df8daecec9ead1cf83d70cc4ff38d8f00ffde72736181 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sun.png"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css\">
        <link href=\"https://fonts.googleapis.com/css2?family=Nunito&display=swap\" rel=\"stylesheet\"> 
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body style=\"background-image:url('";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/background.png"), "html", null, true);
        echo "'); background-size: cover;\">
        <div class=\"d-flex justify-content-center col-sm-12\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/stationmeteo.png"), "html", null, true);
        echo "\" alt=\"site-logo\" class=\"img-fluid logo\">
        </div>

        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.5.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
            <script>
                \$(document).ready(function(){

                    \$(window).keydown(function(event){
                        if(event.keyCode == 13) {
                        event.preventDefault();
                        return false;
                        }
                    });//Contrôle comportement touche 'return' pour la soumission de l'input
                    
                    \$('#submit').on('click', function(event) {
                        event.preventDefault();
                        let city = \$(\"#search\").val();
                        let url = window.location.href + city;
                    
                        if(city.match(/^[a-zA-Z\\u0080-\\u024F]+(?:([\\ \\-\\']|(\\.\\ ))[a-zA-Z\\u0080-\\u024F]+)*\$/)){     
                        
                            \$.ajax({
                                method: 'GET',
                                url: url,
                                dataType: 'json',
                                success:function(response){\t
                                    let city = response.city;       
                                    let description = response.description; 
                                    description = description.charAt(0).toUpperCase() + description.slice(1)      
                                    let temp = response.temp;  
                                    let path = response.path;
                                    let deg = response.deg;
                                    let wind = response.wind;
                                    \$('#city').html(city);
                                    \$('#description').html(description);
                                    \$('#temp').html(temp);
                                    \$('#wind').html(wind);
                                    \$(\"#path\").attr(\"src\",path);
                                    \$('#arrow').css('transform', 'rotate(' + deg + 'deg)');


                                },
                                error:function(xhr,status,error){
                                    Swal.fire({
                                    icon: 'warning',
                                    title: 'Oups...',
                                    text: 'Ville non trouvée.',
                                    confirmButtonColor: '#34465f',
                                    })
                                }
                            });//Fermeture Ajax
                            


                        }//Fermeture if regular expression verification si reception de données
                        else{
                            Swal.fire({
                            icon: 'error',
                            title: 'Oups...',
                            text: 'Il se peut que ça soit l\\'orthographe, try again !',
                            confirmButtonColor: '#34465f',
                            })
                        };//Fermeture else verification orthographe

                    });//Fermeture submit
                });//Fermeture document ready

            </script>
            
        ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Station méteo";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 87,  209 => 19,  191 => 12,  172 => 6,  160 => 88,  158 => 87,  87 => 20,  85 => 19,  79 => 16,  74 => 14,  71 => 13,  69 => 12,  63 => 9,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        
        <title>{% block title %}Station méteo{% endblock %}</title>
        <link rel=\"icon\" href=\"{{asset('assets/img/sun.png')}}\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css\">
        <link href=\"https://fonts.googleapis.com/css2?family=Nunito&display=swap\" rel=\"stylesheet\"> 
        {% block stylesheets %}{% endblock %}
    </head>
    <body style=\"background-image:url('{{ asset('assets/img/background.png')}}'); background-size: cover;\">
        <div class=\"d-flex justify-content-center col-sm-12\">
            <img src=\"{{ asset('assets/img/stationmeteo.png')}}\" alt=\"site-logo\" class=\"img-fluid logo\">
        </div>

        {% block body %}{% endblock %}
            <script src=\"{{asset('assets/js/jquery-3.5.1.js')}}\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
            <script>
                \$(document).ready(function(){

                    \$(window).keydown(function(event){
                        if(event.keyCode == 13) {
                        event.preventDefault();
                        return false;
                        }
                    });//Contrôle comportement touche 'return' pour la soumission de l'input
                    
                    \$('#submit').on('click', function(event) {
                        event.preventDefault();
                        let city = \$(\"#search\").val();
                        let url = window.location.href + city;
                    
                        if(city.match(/^[a-zA-Z\\u0080-\\u024F]+(?:([\\ \\-\\']|(\\.\\ ))[a-zA-Z\\u0080-\\u024F]+)*\$/)){     
                        
                            \$.ajax({
                                method: 'GET',
                                url: url,
                                dataType: 'json',
                                success:function(response){\t
                                    let city = response.city;       
                                    let description = response.description; 
                                    description = description.charAt(0).toUpperCase() + description.slice(1)      
                                    let temp = response.temp;  
                                    let path = response.path;
                                    let deg = response.deg;
                                    let wind = response.wind;
                                    \$('#city').html(city);
                                    \$('#description').html(description);
                                    \$('#temp').html(temp);
                                    \$('#wind').html(wind);
                                    \$(\"#path\").attr(\"src\",path);
                                    \$('#arrow').css('transform', 'rotate(' + deg + 'deg)');


                                },
                                error:function(xhr,status,error){
                                    Swal.fire({
                                    icon: 'warning',
                                    title: 'Oups...',
                                    text: 'Ville non trouvée.',
                                    confirmButtonColor: '#34465f',
                                    })
                                }
                            });//Fermeture Ajax
                            


                        }//Fermeture if regular expression verification si reception de données
                        else{
                            Swal.fire({
                            icon: 'error',
                            title: 'Oups...',
                            text: 'Il se peut que ça soit l\\'orthographe, try again !',
                            confirmButtonColor: '#34465f',
                            })
                        };//Fermeture else verification orthographe

                    });//Fermeture submit
                });//Fermeture document ready

            </script>
            
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/exo-sf/templates/base.html.twig");
    }
}
