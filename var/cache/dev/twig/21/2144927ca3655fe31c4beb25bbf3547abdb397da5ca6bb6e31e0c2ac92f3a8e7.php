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
class __TwigTemplate_1f603ca237ebd80470edc22c2424153fc129532b47ebfd611bdf12a80a9394b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "    <body>
   

        <!-- scrollToTop --> 
        <div class=\"scrollToTop\"><i class=\"icon-up-open-big\"></i></div>
        <!-- header start --> 
        <header id=\"header\" class=\"header fixed clearfix navbar navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
    
                        <!-- header-left start --> 
                        <div class=\"header-left\">
    
                            <!-- logo -->
                            <div class=\"logo smooth-scroll\">
                                <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><img id=\"logo\" src=\"images/logo.png\" alt=\"Worthy\"></a>
                            </div>
    
                            <!-- name-and-slogan -->
                            <div class=\"logo-section smooth-scroll\">
                                <div class=\"brand\"><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"> M.Z-Formation</a></div>\t\t\t\t\t\t\t\t
                            </div>
    
                        </div>
                        <!-- header-left end -->
    
                    </div>
                    <div class=\"col-md-8\">
    
                        <!-- header-right start --> 
                        <div class=\"header-right\">
    
                            <!-- main-navigation start --> 
                            <div class=\"main-navigation animated\">
    
                                <!-- navbar start --> 
                                <nav class=\"navbar navbar-default\" role=\"navigation\">
                                    <div class=\"container-fluid\">
    
                                        <!-- Toggle get grouped for better mobile display -->
                                        <div class=\"navbar-header\">
                                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\">
                                                <span class=\"sr-only\">Toggle navigation</span>
                                                <span class=\"icon-bar\"></span>
                                                <span class=\"icon-bar\"></span>
                                                <span class=\"icon-bar\"></span>
                                            </button>
                                        </div>
    
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class=\"collapse navbar-collapse scrollspy smooth-scroll\" id=\"navbar-collapse-1\">
                                            <ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">Accueil</a></li>
                                                <li><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "#services\">Nos offres</a></li>
                                                <li><a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "#about\">A propos</a></li>
                                                <li><a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "#portfolio\">Cours</a></li>
                                                <!-- <li><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "#price\">Price</a></li> -->
                                                <li><a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "#contact\">Contact</a></li>
                                                ";
        // line 86
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 87
            echo "                                                <li> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></li>
                                            ";
        } else {
            // line 88
            echo "    
                                            <li><a  href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                                            ";
        }
        // line 91
        echo "                                            </ul>
                                        </div>
    
                                    </div>
                                </nav>
                                <!-- navbar end -->
    
                            </div>
                            <!-- main-navigation end -->
    
                        </div>
                        <!-- header-right end -->
    
                    </div>
                </div>
            </div>
        </header>
 ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "





";
        // line 115
        $this->displayBlock('footer', $context, $blocks);
        // line 116
        echo "\t\t\t

\t\t\t<!-- .subfooter start --> 
\t\t\t<div class=\"subfooter\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<p class=\"text-center\">Copyright © 2020. <a href=\"#\" target=\"_blank\">M.Z Formation</a> by M.Z</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- .subfooter end -->

\t\t</footer>
\t\t<!-- footer end -->
\t\t<!-- JavaScript --> 
\t\t<script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/modernizr.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery.appear.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Custom Scripts -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 143
        $this->displayBlock('javascripts', $context, $blocks);
        // line 144
        echo "        <script>
            window.onscroll = function() {myFunction()};
            
            function myFunction() {
              if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById(\"zed\").className = \"\";
              } else {
                document.getElementById(\"zed\").className = \"\";
              }
              if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById(\"banner\").className = \"hidex\";
              } else {
                document.getElementById(\"banner\").className = \"banner\";
              }
            }
            </script>
       
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 7
        echo "\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"description\" content=\"projt formation\">
\t\t<meta name=\"author\" content=\"ymz\">
       
\t\t<!-- Mobile Meta -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<!-- Favicon -->
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
        <meta charset=\"UTF-8\">  
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animations.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
\t\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <title>";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t</head>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "M.Z Formation ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
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

    // line 115
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
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
        return array (  386 => 143,  368 => 115,  350 => 108,  318 => 23,  314 => 22,  310 => 21,  306 => 20,  302 => 19,  298 => 18,  294 => 17,  289 => 15,  279 => 7,  269 => 6,  241 => 144,  239 => 143,  234 => 141,  228 => 138,  224 => 137,  220 => 136,  216 => 135,  212 => 134,  208 => 133,  189 => 116,  187 => 115,  179 => 109,  177 => 108,  158 => 91,  153 => 89,  150 => 88,  144 => 87,  142 => 86,  138 => 85,  134 => 84,  130 => 83,  126 => 82,  122 => 81,  118 => 80,  83 => 48,  75 => 43,  57 => 27,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
{% block head %}
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"description\" content=\"projt formation\">
\t\t<meta name=\"author\" content=\"ymz\">
       
\t\t<!-- Mobile Meta -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<!-- Favicon -->
\t\t<link rel=\"shortcut icon\" href=\"{{ asset('images/favicon.ico') }}\">
        <meta charset=\"UTF-8\">  
\t\t<link href=\"{{ asset('bootstrap/css/bootstrap.css') }}\" rel=\"stylesheet\"> 
\t\t<link href=\"{{ asset('fonts/font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\"> 
        <link href=\"{{ asset('css/animations.css') }}\" rel=\"stylesheet\"> 
        <link href=\"{{ asset('css/normalize.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\"> 
\t\t<link href=\"{{ asset('css/custom.css') }}\" rel=\"stylesheet\">
        <title>{% block title %}M.Z Formation {% endblock %}</title>

\t</head>
\t{% endblock %}
    <body>
   

        <!-- scrollToTop --> 
        <div class=\"scrollToTop\"><i class=\"icon-up-open-big\"></i></div>
        <!-- header start --> 
        <header id=\"header\" class=\"header fixed clearfix navbar navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
    
                        <!-- header-left start --> 
                        <div class=\"header-left\">
    
                            <!-- logo -->
                            <div class=\"logo smooth-scroll\">
                                <a href=\"{{ path('app_login') }}\"><img id=\"logo\" src=\"images/logo.png\" alt=\"Worthy\"></a>
                            </div>
    
                            <!-- name-and-slogan -->
                            <div class=\"logo-section smooth-scroll\">
                                <div class=\"brand\"><a href=\"{{ path('app_login') }}\"> M.Z-Formation</a></div>\t\t\t\t\t\t\t\t
                            </div>
    
                        </div>
                        <!-- header-left end -->
    
                    </div>
                    <div class=\"col-md-8\">
    
                        <!-- header-right start --> 
                        <div class=\"header-right\">
    
                            <!-- main-navigation start --> 
                            <div class=\"main-navigation animated\">
    
                                <!-- navbar start --> 
                                <nav class=\"navbar navbar-default\" role=\"navigation\">
                                    <div class=\"container-fluid\">
    
                                        <!-- Toggle get grouped for better mobile display -->
                                        <div class=\"navbar-header\">
                                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\">
                                                <span class=\"sr-only\">Toggle navigation</span>
                                                <span class=\"icon-bar\"></span>
                                                <span class=\"icon-bar\"></span>
                                                <span class=\"icon-bar\"></span>
                                            </button>
                                        </div>
    
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class=\"collapse navbar-collapse scrollspy smooth-scroll\" id=\"navbar-collapse-1\">
                                            <ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"{{ url('home') }}\">Accueil</a></li>
                                                <li><a href=\"{{ url('home') }}#services\">Nos offres</a></li>
                                                <li><a href=\"{{ url('home') }}#about\">A propos</a></li>
                                                <li><a href=\"{{ url('home') }}#portfolio\">Cours</a></li>
                                                <!-- <li><a href=\"{{ url('home') }}#price\">Price</a></li> -->
                                                <li><a href=\"{{ url('home') }}#contact\">Contact</a></li>
                                                {% if is_granted('ROLE_USER') %}
                                                <li> <a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
                                            {% else %}    
                                            <li><a  href=\"{{ path('app_login') }}\">Connexion</a></li>
                                            {% endif %}
                                            </ul>
                                        </div>
    
                                    </div>
                                </nav>
                                <!-- navbar end -->
    
                            </div>
                            <!-- main-navigation end -->
    
                        </div>
                        <!-- header-right end -->
    
                    </div>
                </div>
            </div>
        </header>
 {% block body %}{% endblock %}






{% block footer %}{% endblock  %}
\t\t\t

\t\t\t<!-- .subfooter start --> 
\t\t\t<div class=\"subfooter\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<p class=\"text-center\">Copyright © 2020. <a href=\"#\" target=\"_blank\">M.Z Formation</a> by M.Z</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- .subfooter end -->

\t\t</footer>
\t\t<!-- footer end -->
\t\t<!-- JavaScript --> 
\t\t<script type=\"text/javascript\" src=\"{{ asset('plugins/jquery.min.js') }}\"></script>
\t\t<script type=\"text/javascript\" src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
\t\t<script type=\"text/javascript\" src=\"{{ asset('plugins/modernizr.js') }}\"></script>
\t\t<script type=\"text/javascript\" src=\"{{ asset('plugins/isotope/isotope.pkgd.min.js') }}\"></script>
\t\t<script type=\"text/javascript\" src=\"{{ asset('plugins/jquery.backstretch.min.js') }}\"></script>
\t\t<script type=\"text/javascript\" src=\"{{ asset('plugins/jquery.appear.js') }}\"></script>

\t\t<!-- Custom Scripts -->
\t\t<script type=\"text/javascript\" src=\"{{ asset('js/custom.js') }}\"></script>

        {% block javascripts %} {% endblock %}
        <script>
            window.onscroll = function() {myFunction()};
            
            function myFunction() {
              if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById(\"zed\").className = \"\";
              } else {
                document.getElementById(\"zed\").className = \"\";
              }
              if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById(\"banner\").className = \"hidex\";
              } else {
                document.getElementById(\"banner\").className = \"banner\";
              }
            }
            </script>
       
    </body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\Cbe\\templates\\base.html.twig");
    }
}
