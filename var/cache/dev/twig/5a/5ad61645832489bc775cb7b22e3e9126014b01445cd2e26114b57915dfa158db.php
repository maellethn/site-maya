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

/* site/puzzle.html.twig */
class __TwigTemplate_9fd47130d8a9c6a3774baae651d6a0372bcbeb200598056fb966b8775d2de7ef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/puzzle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/puzzle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/puzzle.html.twig", 1);
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
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "\tMaya Thinon Puzzle
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
        echo "  <div id=\"draggable\" class=\"dragme\">\"Hello World!\"</div>
<img src=\"https://lh4.googleusercontent.com/-8tqTFxi2ebU/Ufo4j_thf7I/AAAAAAAADFM/_ZBQctm9e8E/w270-h203-no/flower.jpg\" alt=\"drag-and-drop image script\"
 title=\"drag-and-drop image script\" class=\"dragme\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo " <script>
  \tfunction startDrag(e) {
\t\t\t\t// determine event object
\t\t\t\tif (!e) {
\t\t\t\t\tvar e = window.event;
\t\t\t\t}

\t\t\t\t// IE uses srcElement, others use target
\t\t\t\tvar targ = e.target ? e.target : e.srcElement;

\t\t\t\tif (targ.className != 'dragme') {return};
\t\t\t\t// calculate event X, Y coordinates
\t\t\t\t\toffsetX = e.clientX;
\t\t\t\t\toffsetY = e.clientY;

\t\t\t\t// assign default values for top and left properties
\t\t\t\tif(!targ.style.left) { targ.style.left='0px'};
\t\t\t\tif (!targ.style.top) { targ.style.top='0px'};

\t\t\t\t// calculate integer values for top and left
\t\t\t\t// properties
\t\t\t\tcoordX = parseInt(targ.style.left);
\t\t\t\tcoordY = parseInt(targ.style.top);
\t\t\t\tdrag = true;

\t\t\t\t// move div element
\t\t\t\t\tdocument.onmousemove=dragDiv;

\t\t\t}
\t\t\tfunction dragDiv(e) {
\t\t\t\tif (!drag) {return};
\t\t\t\tif (!e) { var e= window.event};
\t\t\t\tvar targ=e.target?e.target:e.srcElement;
\t\t\t\t// move div element
\t\t\t\ttarg.style.left=coordX+e.clientX-offsetX+'px';
\t\t\t\ttarg.style.top=coordY+e.clientY-offsetY+'px';
\t\t\t\treturn false;
\t\t\t}
\t\t\tfunction stopDrag() {
\t\t\t\tdrag=false;
\t\t\t}
\t\t\twindow.onload = function() {
\t\t\t\tdocument.onmousedown = startDrag;
\t\t\t\tdocument.onmouseup = stopDrag;
\t\t\t}
 </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/puzzle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 18,  127 => 17,  114 => 13,  104 => 12,  93 => 9,  83 => 8,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}


{% endblock %}

{% block title %}
\tMaya Thinon Puzzle
{% endblock %}

{% block body %}
  <div id=\"draggable\" class=\"dragme\">\"Hello World!\"</div>
<img src=\"https://lh4.googleusercontent.com/-8tqTFxi2ebU/Ufo4j_thf7I/AAAAAAAADFM/_ZBQctm9e8E/w270-h203-no/flower.jpg\" alt=\"drag-and-drop image script\"
 title=\"drag-and-drop image script\" class=\"dragme\">
{% endblock %}
{% block javascripts %}
 <script>
  \tfunction startDrag(e) {
\t\t\t\t// determine event object
\t\t\t\tif (!e) {
\t\t\t\t\tvar e = window.event;
\t\t\t\t}

\t\t\t\t// IE uses srcElement, others use target
\t\t\t\tvar targ = e.target ? e.target : e.srcElement;

\t\t\t\tif (targ.className != 'dragme') {return};
\t\t\t\t// calculate event X, Y coordinates
\t\t\t\t\toffsetX = e.clientX;
\t\t\t\t\toffsetY = e.clientY;

\t\t\t\t// assign default values for top and left properties
\t\t\t\tif(!targ.style.left) { targ.style.left='0px'};
\t\t\t\tif (!targ.style.top) { targ.style.top='0px'};

\t\t\t\t// calculate integer values for top and left
\t\t\t\t// properties
\t\t\t\tcoordX = parseInt(targ.style.left);
\t\t\t\tcoordY = parseInt(targ.style.top);
\t\t\t\tdrag = true;

\t\t\t\t// move div element
\t\t\t\t\tdocument.onmousemove=dragDiv;

\t\t\t}
\t\t\tfunction dragDiv(e) {
\t\t\t\tif (!drag) {return};
\t\t\t\tif (!e) { var e= window.event};
\t\t\t\tvar targ=e.target?e.target:e.srcElement;
\t\t\t\t// move div element
\t\t\t\ttarg.style.left=coordX+e.clientX-offsetX+'px';
\t\t\t\ttarg.style.top=coordY+e.clientY-offsetY+'px';
\t\t\t\treturn false;
\t\t\t}
\t\t\tfunction stopDrag() {
\t\t\t\tdrag=false;
\t\t\t}
\t\t\twindow.onload = function() {
\t\t\t\tdocument.onmousedown = startDrag;
\t\t\t\tdocument.onmouseup = stopDrag;
\t\t\t}
 </script>
{% endblock %}
", "site/puzzle.html.twig", "/var/www/templates/site/puzzle.html.twig");
    }
}
