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

/* clients/index.html.twig */
class __TwigTemplate_d14e1d86ac9b7e6de6027dab6f674241f3997bb59bfd666434252d3947de66c1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
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

        echo "Clients
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
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "session", [], "any", false, false, false, 7), "flashbag", [], "any", false, false, false, 7), "get", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "flashbag", [], "any", false, false, false, 13), "get", [0 => "warning"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t<h1>
\t\tClients List
\t</h1>
\t<hr>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_create");
        echo "\" class=\"btn btn-primary pull-right\">Add Client</a>
\t\t</div>
\t</div>
\t<table class=\"table table-hover table-striped mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>
\t\t\t\t\tID
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tName
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tBirth Date
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tE-mail
\t\t\t\t</th>
\t\t\t\t<th> Actions </th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 48
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_client", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "birthDate", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">Edit Client</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">Delete Client</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-success\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_client", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-eye\">View cars</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>

\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">Nenhum registro encontrado!</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
\t\t</tbody>
\t</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 77,  216 => 73,  204 => 66,  198 => 63,  192 => 60,  187 => 58,  182 => 56,  176 => 53,  172 => 52,  167 => 50,  163 => 48,  158 => 47,  133 => 25,  125 => 19,  115 => 15,  112 => 14,  107 => 13,  97 => 9,  94 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Clients
{% endblock %}

{% block body %}
\t{% for flashMessage in app.session.flashbag.get('success') %}
\t\t<div class=\"alert alert-success\">
\t\t\t{{flashMessage}}
\t\t</div>

\t{% endfor %}
\t{% for flashMessage in app.session.flashbag.get('warning') %}
\t\t<div class=\"alert alert-success\">
\t\t\t{{flashMessage}}
\t\t</div>

\t{% endfor %}
\t<h1>
\t\tClients List
\t</h1>
\t<hr>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<a href=\"{{path('client_create')}}\" class=\"btn btn-primary pull-right\">Add Client</a>
\t\t</div>
\t</div>
\t<table class=\"table table-hover table-striped mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>
\t\t\t\t\tID
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tName
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tBirth Date
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tE-mail
\t\t\t\t</th>
\t\t\t\t<th> Actions </th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for client in clients %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{client.id}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{path('view_client', {'id': client.id})}}\">
\t\t\t\t\t\t\t{{client.name}}</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{client.birthDate |date(\"d/m/Y\")}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{client.email}}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary\" href=\"{{path('client_edit',{'id': client.id })}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">Edit Client</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" href=\"{{path('client_delete', {'id': client.id})}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">Delete Client</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-success\" href=\"{{path('car_client', {'id': client.id})}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-eye\">View cars</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>

\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">Nenhum registro encontrado!</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}

\t\t</tbody>
\t</table>
{% endblock %}
", "clients/index.html.twig", "/Users/ericoweber/Downloads/car_shop/templates/clients/index.html.twig");
    }
}
