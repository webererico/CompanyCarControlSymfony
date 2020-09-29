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

/* car/client.html.twig */
class __TwigTemplate_757b35cd4cac80e52c02185556d9687cba50b1b43701b7079081cb2e34621518 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/client.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/client.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "car/client.html.twig", 1);
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

        echo "Cars
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
        echo "\t<h1>
\t\tCars List 
\t\t";
        // line 9
        if ((0 !== twig_compare((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 9, $this->source); })()), null))) {
            // line 10
            echo "\t\t\t<small> Owner ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</small>
\t\t";
        }
        // line 12
        echo "\t\t 
\t</h1>
\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "session", [], "any", false, false, false, 14), "flashbag", [], "any", false, false, false, 14), "get", [0 => "success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "session", [], "any", false, false, false, 20), "flashbag", [], "any", false, false, false, 20), "get", [0 => "warning"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t<hr>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_create");
        echo "\" class=\"btn btn-primary pull-right\">Add Car</a>
\t\t</div>
\t</div>
\t<table class=\"table table-hover table-striped mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>
\t\t\t\t\tID
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tModel
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tBrand
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tColor
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tKms
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tOwner
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tActions
\t\t\t\t</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 60
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "model", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "fk_brand", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "fk_color", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "kilometers", [], "any", false, false, false, 70), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "fk_client", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-success\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_owner", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">Alter Owner</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-warning bt\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">Edit car</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">Nenhum registro encontrado!</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
\t\t</tbody>
\t</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "car/client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 88,  235 => 84,  224 => 78,  218 => 75,  213 => 73,  207 => 70,  202 => 68,  197 => 66,  192 => 64,  187 => 62,  183 => 60,  178 => 59,  145 => 29,  140 => 26,  130 => 22,  127 => 21,  122 => 20,  112 => 16,  109 => 15,  105 => 14,  101 => 12,  95 => 10,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cars
{% endblock %}

{% block body %}
\t<h1>
\t\tCars List 
\t\t{% if client != null %}
\t\t\t<small> Owner {{client.name}}</small>
\t\t{% endif %}
\t\t 
\t</h1>
\t\t{% for flashMessage in app.session.flashbag.get('success') %}
\t\t<div class=\"alert alert-success\">
\t\t\t{{flashMessage}}
\t\t</div>

\t{% endfor %}
\t{% for flashMessage in app.session.flashbag.get('warning') %}
\t\t<div class=\"alert alert-success\">
\t\t\t{{flashMessage}}
\t\t</div>

\t{% endfor %}
\t<hr>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<a href=\"{{path('car_create')}}\" class=\"btn btn-primary pull-right\">Add Car</a>
\t\t</div>
\t</div>
\t<table class=\"table table-hover table-striped mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>
\t\t\t\t\tID
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tModel
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tBrand
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tColor
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tKms
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tOwner
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tActions
\t\t\t\t</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for car in cars %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{car.id}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{car.model}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{car.fk_brand.name}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{car.fk_color.name}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{car.kilometers}}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{car.fk_client.name}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-success\" href=\"{{path('car_owner',{'id': car.id })}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">Alter Owner</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-warning bt\" href=\"{{path('car_edit', {'id': car.id})}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">Edit car</i>
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
", "car/client.html.twig", "/Users/ericoweber/Downloads/car_shop/templates/car/client.html.twig");
    }
}
