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
class __TwigTemplate_bbf2f88f1f453d08106f6c1ccecda6a3732d28f030b175594879d0e47d4d5f56 extends \Twig\Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sun.png"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css\">
        <link href=\"https://fonts.googleapis.com/css2?family=Nunito&display=swap\" rel=\"stylesheet\"> 
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body style=\"background-image:url('";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/background.png"), "html", null, true);
        echo "'); background-size: cover;\">
        <div class=\"d-flex justify-content-center col-sm-12\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/stationmeteo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid logo\">
        </div>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.5.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
           
           <script>
            \$(document).ready(function(){

                 \$(window).keydown(function(event){
                    if(event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                    }
                });
                
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
                                    let wind = response.wind ;
                                    \$('#city').html(city);
                                    \$('#description').html(description);
                                    \$('#temp').html(temp);
                                    \$('#wind').html(wind);
                                    \$(\"#path\").attr(\"src\",path);
                                    \$('#arrow').css('transform', 'rotate(' + deg + 'deg)');


                                },
                                error:function(xhr,status,error){
                                    console.log(\"Result: \" + \"  statut:\" + status + \"  Erreur:\" + error + \"  STATUTXHR:\" + xhr.status + \"   XHR\" + xhr.statusText)
                                }
                        });
                    }
                    else{
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Il se peut que ça soit l\\'orthographe, try again !',
                        confirmButtonColor: '#34465f',
                        })
                    };

            





                });

            });    


            </script>
            
        ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Station méteo";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  183 => 87,  177 => 17,  171 => 11,  164 => 5,  158 => 88,  156 => 87,  86 => 20,  82 => 19,  79 => 18,  77 => 17,  72 => 15,  67 => 13,  64 => 12,  62 => 11,  56 => 8,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Applications/MAMP/htdocs/exo-sf/templates/base.html.twig");
    }
}
