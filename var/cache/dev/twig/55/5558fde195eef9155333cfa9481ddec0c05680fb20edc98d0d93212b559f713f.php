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

/* admin/index.html.twig */
class __TwigTemplate_0d5bb961d599a11c8768fe07e9846d0b1f3b88b9a98776296ec602e6e9439924 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "admin index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<body class=\"no-trans\">
    <div class=\"container\">
        <div class=\"row\">\t\t\t\t\t 
            <div style=\"background-color:aqua!important; margin-top: 0px; opacity: 0.8!important;\"  data-animation-effect=\"fadeIn\">


            <nav  class=\"navbar navbar-dark bg-dark\" >
                <a class=\"navbar-brand\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">client</a>
              
                <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                  <div class=\"navbar-nav\">
                    <a class=\"nav-item nav-link active\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_index");
        echo "\">user <span class=\"sr-only\">(current)</span></a>
                    <a class=\"nav-item nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cours_index");
        echo "\">cours</a>
                    <a class=\"nav-item nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("category_index");
        echo "\">category</a>
                    
                  </div>
                </div>
              </nav>


  



    <h1>admin index</h1>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Password</th>
                <th>ForName</th>
                <th>LastName</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 48
            echo "            <tr>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "email", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            ((twig_get_attribute($this->env, $this->source, $context["admin"], "roles", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["admin"], "roles", [], "any", false, false, false, 51)), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "password", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "ForName", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "LastName", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\"  role=\"button\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_show", ["id" => twig_get_attribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-primary\"  role=\"button\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </tbody>
    </table>

    
    
    <a class=\"btn btn-primary\"  role=\"button\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_new");
        echo "\">Create new</a>
</div>
</div>
</div> 
    <a href=\"#top\" class=\"topHome\"><i class=\"fa fa-chevron-up fa-2x\"></i></a>
</body>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 70,  198 => 65,  189 => 61,  180 => 57,  176 => 56,  171 => 54,  167 => 53,  163 => 52,  159 => 51,  155 => 50,  151 => 49,  148 => 48,  143 => 47,  114 => 21,  110 => 20,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}admin index{% endblock %}

{% block body %}


<body class=\"no-trans\">
    <div class=\"container\">
        <div class=\"row\">\t\t\t\t\t 
            <div style=\"background-color:aqua!important; margin-top: 0px; opacity: 0.8!important;\"  data-animation-effect=\"fadeIn\">


            <nav  class=\"navbar navbar-dark bg-dark\" >
                <a class=\"navbar-brand\" href=\"{{ url('home') }}\">client</a>
              
                <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                  <div class=\"navbar-nav\">
                    <a class=\"nav-item nav-link active\" href=\"{{ url('user_index') }}\">user <span class=\"sr-only\">(current)</span></a>
                    <a class=\"nav-item nav-link\" href=\"{{ url('cours_index') }}\">cours</a>
                    <a class=\"nav-item nav-link\" href=\"{{ url('category_index') }}\">category</a>
                    
                  </div>
                </div>
              </nav>


  



    <h1>admin index</h1>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Password</th>
                <th>ForName</th>
                <th>LastName</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for admin in admins %}
            <tr>
                <td>{{ admin.id }}</td>
                <td>{{ admin.email }}</td>
                <td>{{ admin.roles ? admin.roles|json_encode : '' }}</td>
                <td>{{ admin.password }}</td>
                <td>{{ admin.ForName }}</td>
                <td>{{ admin.LastName }}</td>
                <td>
                    <a class=\"btn btn-primary\"  role=\"button\" href=\"{{ path('admin_show', {'id': admin.id}) }}\">show</a>
                    <a class=\"btn btn-primary\"  role=\"button\" href=\"{{ path('admin_edit', {'id': admin.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
    
    <a class=\"btn btn-primary\"  role=\"button\" href=\"{{ path('admin_new') }}\">Create new</a>
</div>
</div>
</div> 
    <a href=\"#top\" class=\"topHome\"><i class=\"fa fa-chevron-up fa-2x\"></i></a>
</body>
    {% endblock %}
", "admin/index.html.twig", "C:\\xampp\\htdocs\\Cbe\\templates\\admin\\index.html.twig");
    }
}
