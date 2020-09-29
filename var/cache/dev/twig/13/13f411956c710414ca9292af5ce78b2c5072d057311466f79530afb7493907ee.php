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

/* car/index.html.twig */
class __TwigTemplate_c94b8321b608df46ca39d051083848f68c561bf2dc1cd8d35137437f3d3ae9f9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "car/index.html.twig", 1);
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
\t</h1>
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "flashbag", [], "any", false, false, false, 10), "get", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "session", [], "any", false, false, false, 16), "flashbag", [], "any", false, false, false, 16), "get", [0 => "warning"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t<hr>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<a href=\"";
        // line 25
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
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 56
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "model", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "fk_brand", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "fk_color", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "kilometers", [], "any", false, false, false, 66), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t";
            // line 68
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["car"], "fk_client", [], "any", false, false, false, 68), null))) {
                // line 69
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "fk_client", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
                echo "</td>
\t\t\t\t\t</td>
\t\t\t\t";
            } else {
                // line 73
                echo "\t\t\t\t\t<td>No owner
\t\t\t\t\t</td>
\t\t\t\t";
            }
            // line 76
            echo "
\t\t\t\t<td>
\t\t\t\t\t<a class=\"btn btn-sm btn-success\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_owner", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<i class=\"fa fa-pencil\">Alter Owner</i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-sm btn-warning bt\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<i class=\"fa fa-pencil\">Edit car</i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-sm btn-danger bt\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<i class=\"fa fa-trash\">Delete car</i>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"3\">Nenhum registro encontrado!</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
\t</tbody>
</table>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "car/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 94,  244 => 90,  233 => 84,  227 => 81,  221 => 78,  217 => 76,  212 => 73,  206 => 70,  203 => 69,  201 => 68,  196 => 66,  191 => 64,  186 => 62,  181 => 60,  176 => 58,  172 => 56,  167 => 55,  134 => 25,  129 => 22,  119 => 18,  116 => 17,  111 => 16,  101 => 12,  98 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cars
{% endblock %}

{% block body %}
\t<h1>
\t\tCars List
\t</h1>
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
\t\t\t\t\t{% if car.fk_client != null %}
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{car.fk_client.name}}</td>
\t\t\t\t\t</td>
\t\t\t\t{% else %}
\t\t\t\t\t<td>No owner
\t\t\t\t\t</td>
\t\t\t\t{% endif %}

\t\t\t\t<td>
\t\t\t\t\t<a class=\"btn btn-sm btn-success\" href=\"{{path('car_owner',{'id': car.id })}}\">
\t\t\t\t\t\t<i class=\"fa fa-pencil\">Alter Owner</i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-sm btn-warning bt\" href=\"{{path('car_edit', {'id': car.id})}}\">
\t\t\t\t\t\t<i class=\"fa fa-pencil\">Edit car</i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-sm btn-danger bt\" href=\"{{path('car_delete', {'id': car.id})}}\">
\t\t\t\t\t\t<i class=\"fa fa-trash\">Delete car</i>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% else %}
\t\t\t<tr>
\t\t\t\t<td colspan=\"3\">Nenhum registro encontrado!</td>
\t\t\t</tr>
\t\t{% endfor %}

\t</tbody>
</table>{% endblock %}
", "car/index.html.twig", "/Users/ericoweber/Downloads/car_shop/templates/car/index.html.twig");
    }
}
