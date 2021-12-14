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

/* site/collection.html.twig */
class __TwigTemplate_246911e1372070c61ce9f746896690384b5b826eb0258820b7f1720582ccc868 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/collection.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/collection.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/collection.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/nivo-lightbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "\tMaya Thinon
\t";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 9, $this->source); })()), "Titre", [], "any", false, false, false, 9), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "\t<div class=\"banniere\" style=\"background-color: ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 13, $this->source); })()), "Couleur", [], "any", false, false, false, 13)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 13, $this->source); })()), "Couleur", [], "any", false, false, false, 13), "hexa", [], "any", false, false, false, 13), "html", null, true))) : (print ("white")));
        echo ";\">
\t\t<h1 class=\"title\">
\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 15, $this->source); })()), "Titre", [], "any", false, false, false, 15), "html", null, true);
        echo "
\t\t</h1>
\t</div>
\t<div class=\"container-lg collection\">
\t\t";
        // line 19
        if ( !twig_test_empty((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "\t\t\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 23, $this->source); })()), 0, [], "array", false, false, false, 23), "Lien", [], "any", false, false, false, 23)), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 23, $this->source); })()), "Oeuvre", [], "any", false, false, false, 23), 0, [], "array", false, false, false, 23), "Description", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 25, $this->source); })()), 1, null));
            foreach ($context['_seq'] as $context["_key"] => $context["oeuvre"]) {
                // line 26
                echo "\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["oeuvre"], "Lien", [], "any", false, false, false, 27)), "html", null, true);
                echo "\" class=\"d-block w-100\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oeuvre"], "Description", [], "any", false, false, false, 27), "html", null, true);
                echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oeuvre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t</div>
\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"prev\">
\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"next\">
\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        // line 41
        echo "\t\t<div class=\"grid\" id=\"gallery\" data-toggle=\"modal\" data-target=\"#exampleModal\">

\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 43, $this->source); })()), "Oeuvre", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["oeuvre"]) {
            // line 44
            echo "\t\t\t\t<div class=\"card\">
\t\t\t\t\t";
            // line 45
            if ((0 === twig_compare(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["oeuvre"], "lien", [], "any", false, false, false, 45),  -3), "pdf"))) {
                // line 46
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/pdf-icon.png"), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oeuvre"], "Description", [], "any", false, false, false, 46), "html", null, true);
                echo "\">
\t\t\t\t\t";
            } else {
                // line 48
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["oeuvre"], "Lien", [], "any", false, false, false, 48)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oeuvre"], "Titre", [], "any", false, false, false, 48), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, $context["oeuvre"], "Lien", [], "any", false, false, false, 49), "collection")), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oeuvre"], "Description", [], "any", false, false, false, 49), "html", null, true);
                echo "\" onclick=\"onClick(this)\" class=\"modal-hover-opacity\">
\t\t\t\t\t\t</a>

\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oeuvre"], "Titre", [], "any", false, false, false, 54), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<p class=\"card-text\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oeuvre"], "Description", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oeuvre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/categorie.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/nivo-lightbox.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$(document).ready(function(){
\t\t\t\$('a').nivoLightbox();
\t\t});

\t</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 64,  253 => 63,  243 => 62,  231 => 59,  221 => 55,  217 => 54,  214 => 53,  205 => 49,  198 => 48,  190 => 46,  188 => 45,  185 => 44,  181 => 43,  177 => 41,  164 => 30,  153 => 27,  150 => 26,  146 => 25,  139 => 23,  134 => 20,  132 => 19,  125 => 15,  119 => 13,  109 => 12,  97 => 9,  94 => 8,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
\t<link href=\"{{asset('asset/css/nivo-lightbox.css')}}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}

{% block title %}
\tMaya Thinon
\t{{collection.Titre}}
{% endblock %}

{% block body %}
\t<div class=\"banniere\" style=\"background-color: {{collection.Couleur ? collection.Couleur.hexa : 'white' }};\">
\t\t<h1 class=\"title\">
\t\t\t{{collection.Titre}}
\t\t</h1>
\t</div>
\t<div class=\"container-lg collection\">
\t\t{% if slider is not empty %}
\t\t\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t<img src=\"{{asset(slider[0].Lien)}}\" class=\"d-block w-100\" alt=\"{{collection.Oeuvre[0].Description}}\">
\t\t\t\t\t</div>
\t\t\t\t\t{% for oeuvre in slider[1:] %}
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"{{asset(oeuvre.Lien)}}\" class=\"d-block w-100\" alt=\"{{oeuvre.Description}}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"prev\">
\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-bs-slide=\"next\">
\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"grid\" id=\"gallery\" data-toggle=\"modal\" data-target=\"#exampleModal\">

\t\t\t{% for oeuvre in collection.Oeuvre %}
\t\t\t\t<div class=\"card\">
\t\t\t\t\t{% if oeuvre.lien|slice(-3) == 'pdf' %}
\t\t\t\t\t\t<img src=\"{{asset('asset/img/pdf-icon.png')}}\" class=\"card-img-top\" alt=\"{{oeuvre.Description}}\">
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{asset(oeuvre.Lien)}}\" title=\"{{oeuvre.Titre}}\">
\t\t\t\t\t\t\t<img src=\"{{asset(oeuvre.Lien|imagine_filter('collection'))}}\" class=\"card-img-top\" alt=\"{{oeuvre.Description}}\" onclick=\"onClick(this)\" class=\"modal-hover-opacity\">
\t\t\t\t\t\t</a>

\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">{{oeuvre.Titre}}</h5>
\t\t\t\t\t\t<p class=\"card-text\">{{oeuvre.Description}}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}
{% block javascripts %}
\t<script src=\"{{asset('asset/js/categorie.js')}}\"></script>
\t<script src=\"{{asset('asset/js/nivo-lightbox.js')}}\"></script>
\t<script>
\t\t\$(document).ready(function(){
\t\t\t\$('a').nivoLightbox();
\t\t});

\t</script>

{% endblock %}
", "site/collection.html.twig", "/var/www/templates/site/collection.html.twig");
    }
}
