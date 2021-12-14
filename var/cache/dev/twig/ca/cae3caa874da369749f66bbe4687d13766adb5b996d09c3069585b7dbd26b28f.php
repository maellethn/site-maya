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

/* admin/oeuvres.html.twig */
class __TwigTemplate_25d8f227bdc417f968e0f1bacc8e81e8defb1be2b0c9518eaa00b23a779500e4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/oeuvres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/oeuvres.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/oeuvres.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Oeuvres";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/admin/monCss.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        $this->loadTemplate("admin/adminNav.html.twig", "admin/oeuvres.html.twig", 10)->display($context);
        // line 11
        echo "\t<div class=\"container-lg\">
\t\t<div class=\"table-responsive\">
\t\t<table class=\"table table-bordered\" id=\"example\" width=\"100%\" cellspacing=\"0\">
\t  \t\t\t<thead class=\"thead-dark\" >
\t\t\t    <tr>
\t\t\t      <th scope=\"col\">#</th>
\t\t\t      <th scope=\"col\">Titre</th>
\t\t\t      <th scope=\"col\">Description</th>
\t\t\t      <th scope=\"col\">Photo</th>
\t\t\t\t\t\t<th scope=\"col\">Lien</th>
\t\t\t      <th scope=\"col\">Suppression</th>
\t\t\t      <th scope=\"col\">Modification</th>
\t\t\t  </tr>

\t\t\t  </thead>
\t\t\t  <tbody>
\t\t\t  \t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["oeuvres"]) || array_key_exists("oeuvres", $context) ? $context["oeuvres"] : (function () { throw new RuntimeError('Variable "oeuvres" does not exist.', 27, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["oeuvre"]) {
            // line 28
            echo "\t\t\t    <tr>
\t\t\t      <th scope=\"row\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29), "html", null, true);
            echo "</th>
\t\t\t      <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oeuvre"], "titre", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t      <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oeuvre"], "Description", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t      <td>
\t\t\t\t\t\t";
            // line 33
            if ((0 === twig_compare(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["oeuvre"], "lien", [], "any", false, false, false, 33),  -3), "pdf"))) {
                // line 34
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/pdf-icon.png"), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oeuvre"], "Description", [], "any", false, false, false, 34), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["oeuvre"], "Lien", [], "any", false, false, false, 36)), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oeuvre"], "Description", [], "any", false, false, false, 36), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            }
            // line 38
            echo "

\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oeuvre"], "lien", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t      <td> <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oeuvres_suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["oeuvre"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"> <svg class=\"bi bi-trash-fill\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t  <path fill-rule=\"evenodd\" d=\"M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t</svg></a></td>
\t\t\t\t\t<td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificationOeuvre", ["id" => twig_get_attribute($this->env, $this->source, $context["oeuvre"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><svg class=\"bi bi-brush\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t  <path d=\"M15.213 1.018a.572.572 0 01.756.05.57.57 0 01.057.746C15.085 3.082 12.044 7.107 9.6 9.55c-.71.71-1.42 1.243-1.952 1.596-.508.339-1.167.234-1.599-.197-.416-.416-.53-1.047-.212-1.543.346-.542.887-1.273 1.642-1.977 2.521-2.35 6.476-5.44 7.734-6.411z\"/>
\t\t\t\t\t  <path d=\"M7 12a2 2 0 01-2 2c-1 0-2 0-3.5-.5s.5-1 1-1.5 1.395-2 2.5-2a2 2 0 012 2z\"/>
\t\t\t\t\t</svg></a></td>
\t\t\t    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oeuvre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t  </tbody>
\t\t\t  <tfoot class=\"thead-dark\" >
\t\t\t    <tr>
\t\t\t      <th scope=\"col\">#</th>
\t\t\t      <th scope=\"col\">Titre</th>
\t\t\t      <th scope=\"col\">Description</th>
\t\t\t      <th scope=\"col\">Photo</th>
\t\t\t\t\t\t<th scope=\"col\">Lien</th>
\t\t\t      <th scope=\"col\">Suppression</th>
\t\t\t      <th scope=\"col\">Modification</th>
\t\t\t    </tr>

\t\t\t  </tfoot>
\t\t\t</table>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        $this->loadTemplate("admin/adminJavascript.html.twig", "admin/oeuvres.html.twig", 68)->display($context);
        // line 69
        echo "
  <script>
\$(document).ready(function() {
    \$('#example').DataTable();
} );
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/oeuvres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 69,  255 => 68,  245 => 67,  219 => 50,  200 => 45,  194 => 42,  190 => 41,  185 => 38,  177 => 36,  169 => 34,  167 => 33,  162 => 31,  158 => 30,  154 => 29,  151 => 28,  134 => 27,  116 => 11,  113 => 10,  103 => 9,  90 => 6,  80 => 5,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Oeuvres{% endblock %}
{% block stylesheets %}
<link href=\"{{asset('asset/css/admin/monCss.css')}}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
\t{% include 'admin/adminNav.html.twig' %}
\t<div class=\"container-lg\">
\t\t<div class=\"table-responsive\">
\t\t<table class=\"table table-bordered\" id=\"example\" width=\"100%\" cellspacing=\"0\">
\t  \t\t\t<thead class=\"thead-dark\" >
\t\t\t    <tr>
\t\t\t      <th scope=\"col\">#</th>
\t\t\t      <th scope=\"col\">Titre</th>
\t\t\t      <th scope=\"col\">Description</th>
\t\t\t      <th scope=\"col\">Photo</th>
\t\t\t\t\t\t<th scope=\"col\">Lien</th>
\t\t\t      <th scope=\"col\">Suppression</th>
\t\t\t      <th scope=\"col\">Modification</th>
\t\t\t  </tr>

\t\t\t  </thead>
\t\t\t  <tbody>
\t\t\t  \t{% for oeuvre in oeuvres %}
\t\t\t    <tr>
\t\t\t      <th scope=\"row\">{{loop.index}}</th>
\t\t\t      <td>{{oeuvre.titre}}</td>
\t\t\t      <td>{{oeuvre.Description}}</td>
\t\t\t      <td>
\t\t\t\t\t\t{% if oeuvre.lien|slice(-3) == 'pdf' %}
\t\t\t\t\t\t\t<img src=\"{{asset('asset/img/pdf-icon.png')}}\" class=\"card-img-top\" alt=\"{{oeuvre.Description}}\">
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<img src=\"{{asset(oeuvre.Lien)}}\" class=\"card-img-top\" alt=\"{{oeuvre.Description}}\">
\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{oeuvre.lien}}</td>
\t\t\t      <td> <a href=\"{{path('oeuvres_suppression',{id:oeuvre.id})}}\"> <svg class=\"bi bi-trash-fill\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t  <path fill-rule=\"evenodd\" d=\"M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z\" clip-rule=\"evenodd\"/>
\t\t\t\t\t</svg></a></td>
\t\t\t\t\t<td><a href=\"{{path('modificationOeuvre',{id:oeuvre.id})}}\"><svg class=\"bi bi-brush\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t  <path d=\"M15.213 1.018a.572.572 0 01.756.05.57.57 0 01.057.746C15.085 3.082 12.044 7.107 9.6 9.55c-.71.71-1.42 1.243-1.952 1.596-.508.339-1.167.234-1.599-.197-.416-.416-.53-1.047-.212-1.543.346-.542.887-1.273 1.642-1.977 2.521-2.35 6.476-5.44 7.734-6.411z\"/>
\t\t\t\t\t  <path d=\"M7 12a2 2 0 01-2 2c-1 0-2 0-3.5-.5s.5-1 1-1.5 1.395-2 2.5-2a2 2 0 012 2z\"/>
\t\t\t\t\t</svg></a></td>
\t\t\t    {% endfor %}
\t\t\t  </tbody>
\t\t\t  <tfoot class=\"thead-dark\" >
\t\t\t    <tr>
\t\t\t      <th scope=\"col\">#</th>
\t\t\t      <th scope=\"col\">Titre</th>
\t\t\t      <th scope=\"col\">Description</th>
\t\t\t      <th scope=\"col\">Photo</th>
\t\t\t\t\t\t<th scope=\"col\">Lien</th>
\t\t\t      <th scope=\"col\">Suppression</th>
\t\t\t      <th scope=\"col\">Modification</th>
\t\t\t    </tr>

\t\t\t  </tfoot>
\t\t\t</table>
\t\t</div>
\t</div>
{% endblock %}
{% block javascripts %}
{% include 'admin/adminJavascript.html.twig' %}

  <script>
\$(document).ready(function() {
    \$('#example').DataTable();
} );
</script>
{% endblock %}
", "admin/oeuvres.html.twig", "/var/www/templates/admin/oeuvres.html.twig");
    }
}
