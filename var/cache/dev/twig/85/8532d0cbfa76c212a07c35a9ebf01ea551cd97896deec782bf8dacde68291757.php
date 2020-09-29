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

/* color/index.html.twig */
class __TwigTemplate_4dcdd967a8403ff410717090e6f3569b77ca81474d87da76a96387e617270d81 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "color/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "color/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "color/index.html.twig", 1);
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

        echo "Colors
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
\t\tColors List
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("color_create");
        echo "\" class=\"btn btn-primary pull-right\">Add Color</a>
\t\t</div>
\t</div>
\t<table class=\"table table-hover table-striped mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>
\t\t\t\t\tID
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tColor name
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tActions
\t\t\t\t</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 44
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-success\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("color_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["color"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">Edit</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("color_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["color"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-trash\">Delete</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>


\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">Nenhum registro encontrado!</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
\t\t</tbody>
\t</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "color/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 65,  193 => 61,  180 => 53,  174 => 50,  169 => 48,  164 => 46,  160 => 44,  155 => 43,  134 => 25,  129 => 22,  119 => 18,  116 => 17,  111 => 16,  101 => 12,  98 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Colors
{% endblock %}

{% block body %}
\t<h1>
\t\tColors List
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
\t\t\t<a href=\"{{path('color_create')}}\" class=\"btn btn-primary pull-right\">Add Color</a>
\t\t</div>
\t</div>
\t<table class=\"table table-hover table-striped mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>
\t\t\t\t\tID
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tColor name
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tActions
\t\t\t\t</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for color in colors %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{color.id}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{color.name}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-success\" href=\"{{path('color_edit',{'id': color.id })}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\">Edit</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" href=\"{{path('color_delete', {'id': color.id})}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-trash\">Delete</i>
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
", "color/index.html.twig", "/Users/ericoweber/Downloads/car_shop/templates/color/index.html.twig");
    }
}
