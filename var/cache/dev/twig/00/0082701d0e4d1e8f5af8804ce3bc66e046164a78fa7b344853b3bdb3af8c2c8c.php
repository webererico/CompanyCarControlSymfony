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

/* clients/view.html.twig */
class __TwigTemplate_c2a5b45af99ba0fadb9f3c78d3bb0729de3f53c963f7ab4f5281ed5aaa2ee90f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "clients/view.html.twig", 1);
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

        echo "View Client
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>View Client
\t\t<small>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "
\t\t</small>
\t</h1>
\t<table class=\"table table-stripped\">
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<td>
\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Name</th>
\t\t\t<td>
\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Email</th>
\t\t\t<td>
\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Birth Date</th>
\t\t\t<td>
\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 30, $this->source); })()), "birthDate", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>CPF</th>
\t\t\t<td>
\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 35, $this->source); })()), "cpf", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
\t\t</tr>

\t\t";
        // line 38
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 38, $this->source); })()), "fkAdress", [], "any", false, false, false, 38), null))) {
            // line 39
            echo "\t\t</table>
\t\t<h2>
\t\t\tAdress
\t\t</h2>
\t\t<table class=\"table table-stripped\">
\t\t\t<tr>
\t\t\t\t<th>Street</th>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 47, $this->source); })()), "fkAdress", [], "any", false, false, false, 47), "street", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Number</th>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 52, $this->source); })()), "fkAdress", [], "any", false, false, false, 52), "number", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Complement</th>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 57, $this->source); })()), "fkAdress", [], "any", false, false, false, 57), "complement", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>City</th>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 62, $this->source); })()), "fkAdress", [], "any", false, false, false, 62), "fkCity", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>State</th>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 67, $this->source); })()), "fkAdress", [], "any", false, false, false, 67), "state", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
\t\t\t</tr>

\t\t</table>
\t";
        } else {
            // line 72
            echo "\t\t<h3>
\t\t\tAddress not found
\t\t</h3>
\t";
        }
        // line 76
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "clients/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 76,  192 => 72,  184 => 67,  176 => 62,  168 => 57,  160 => 52,  152 => 47,  142 => 39,  140 => 38,  134 => 35,  126 => 30,  118 => 25,  110 => 20,  102 => 15,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}View Client
{% endblock %}

{% block body %}
\t<h1>View Client
\t\t<small>{{client.name}}
\t\t</small>
\t</h1>
\t<table class=\"table table-stripped\">
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<td>
\t\t\t\t{{client.id}}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Name</th>
\t\t\t<td>
\t\t\t\t{{client.name}}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Email</th>
\t\t\t<td>
\t\t\t\t{{client.email}}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Birth Date</th>
\t\t\t<td>
\t\t\t\t{{client.birthDate |date(\"d/m/Y\")}}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>CPF</th>
\t\t\t<td>
\t\t\t\t{{client.cpf}}</td>
\t\t</tr>

\t\t{% if client.fkAdress != null %}
\t\t</table>
\t\t<h2>
\t\t\tAdress
\t\t</h2>
\t\t<table class=\"table table-stripped\">
\t\t\t<tr>
\t\t\t\t<th>Street</th>
\t\t\t\t<td>
\t\t\t\t\t{{client.fkAdress.street}}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Number</th>
\t\t\t\t<td>
\t\t\t\t\t{{client.fkAdress.number}}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Complement</th>
\t\t\t\t<td>
\t\t\t\t\t{{client.fkAdress.complement}}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>City</th>
\t\t\t\t<td>
\t\t\t\t\t{{client.fkAdress.fkCity.name}}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>State</th>
\t\t\t\t<td>
\t\t\t\t\t{{client.fkAdress.state}}</td>
\t\t\t</tr>

\t\t</table>
\t{% else %}
\t\t<h3>
\t\t\tAddress not found
\t\t</h3>
\t{% endif %}


{% endblock %}
", "clients/view.html.twig", "/Users/ericoweber/Downloads/car_shop/templates/clients/view.html.twig");
    }
}
