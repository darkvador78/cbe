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

/* security/login.html.twig */
class __TwigTemplate_3480e4292a05eac998d0c822288086b33f41c9d1d73ad92a54e1e15b1f2e4abd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<html>
<head>
\t<title>connexion</title>
   <!--Made with love by Mutiullah Samim -->
   
\t<!--Bootsrap 4 CDN-->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    
    <!--Fontawesome CDN-->
\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
\t<!--Custom styles-->
    
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<style>
    /* Made with love by Mutiullah Samim*/
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('https://static.vecteezy.com/system/resources/previews/000/550/070/non_2x/abstract-background-digital-technology-concept-vector-illustration.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
margin: -42px;
}

.card{
\tleft: -304px;
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>
</head>
<body>
<div class=\"container\">
\t<div class=\"d-flex justify-content-center h-100\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3>Sign In</h3>
\t\t\t\t<div class=\"d-flex justify-content-end social_icon\">
\t\t\t\t\t<span><i class=\"fab fa-facebook-square\"></i></span>
\t\t\t\t\t<span><i class=\"fab fa-google-plus-square\"></i></span>
\t\t\t\t\t<span><i class=\"fab fa-twitter-square\"></i></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
    <form method=\"post\">
        ";
        // line 123
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 123, $this->source); })())) {
            // line 124
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 124, $this->source); })()), "messageKey", [], "any", false, false, false, 124), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 124, $this->source); })()), "messageData", [], "any", false, false, false, 124), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 126
        echo "    
        ";
        // line 127
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127)) {
            // line 128
            echo "            <div class=\"mb-3\">
                You are logged in as ";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129), "username", [], "any", false, false, false, 129), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
        ";
        }
        // line 132
        echo "    
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- <label for=\"inputEmail\">Email</label> -->
\t\t\t\t\t  <input type=\"email\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 138, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t <!-- <label for=\"inputPassword\">Password</label> -->
        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
    
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
        >
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row align-items-center remember\">
\t\t\t\t\t\t<input type=\"checkbox\">Remember Me
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Login\" class=\"btn float-right login_btn\">
\t\t\t\t\t</div>
                </form>
            </div>
\t\t\t<div class=\"card-footer\">
\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\tDon't have an account?<a href=\"#\">Sign Up</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<a href=\"#\">Forgot your password?</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</body>
</html>
\t\t";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 149,  199 => 138,  191 => 132,  183 => 129,  180 => 128,  178 => 127,  175 => 126,  169 => 124,  167 => 123,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
\t<title>connexion</title>
   <!--Made with love by Mutiullah Samim -->
   
\t<!--Bootsrap 4 CDN-->
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    
    <!--Fontawesome CDN-->
\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
\t<!--Custom styles-->
    
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<style>
    /* Made with love by Mutiullah Samim*/
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('https://static.vecteezy.com/system/resources/previews/000/550/070/non_2x/abstract-background-digital-technology-concept-vector-illustration.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
margin: -42px;
}

.card{
\tleft: -304px;
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>
</head>
<body>
<div class=\"container\">
\t<div class=\"d-flex justify-content-center h-100\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3>Sign In</h3>
\t\t\t\t<div class=\"d-flex justify-content-end social_icon\">
\t\t\t\t\t<span><i class=\"fab fa-facebook-square\"></i></span>
\t\t\t\t\t<span><i class=\"fab fa-google-plus-square\"></i></span>
\t\t\t\t\t<span><i class=\"fab fa-twitter-square\"></i></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
    <form method=\"post\">
        {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
    
        {% if app.user %}
            <div class=\"mb-3\">
                You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
        {% endif %}
    
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- <label for=\"inputEmail\">Email</label> -->
\t\t\t\t\t  <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t <!-- <label for=\"inputPassword\">Password</label> -->
        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
    
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"{{ csrf_token('authenticate') }}\"
        >
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row align-items-center remember\">
\t\t\t\t\t\t<input type=\"checkbox\">Remember Me
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Login\" class=\"btn float-right login_btn\">
\t\t\t\t\t</div>
                </form>
            </div>
\t\t\t<div class=\"card-footer\">
\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\tDon't have an account?<a href=\"#\">Sign Up</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<a href=\"#\">Forgot your password?</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</body>
</html>
\t\t", "security/login.html.twig", "C:\\xampp\\htdocs\\Cbe\\templates\\security\\login.html.twig");
    }
}
