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

/* base.html.twig */
class __TwigTemplate_8ac181fb84808af78c0a91e28d04cc284742d76dc2a7874b24973b93bb9f0fa5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"Maya THINON, étudiant des Beaux-Arts, vous propose un bric à brac séduisant de couleur, texture et signes.\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=GFS+Didot&display=swap\" rel=\"stylesheet\">
\t      <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
\t\t    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/monCss.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
    <header>
    ";
        // line 17
        if (array_key_exists("categories", $context)) {
            // line 18
            echo "        <div class=\"collapse\" id=\"navbarToggleExternalContent\">
          <div class=\"p-4\">
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 21
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("collection", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\"><h2 class=\"h4\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "Titre", [], "any", false, false, false, 21), "html", null, true);
                echo "</h5></a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
            echo "\">
              <h2 class=\"h4\">Acceuil</h2>
            </a>

          </div>
        </div>
        <nav class=\"navbar\">
          <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <i class=\"fas fa-bars\"></i>
            </button>
          </div>
        </nav>
    ";
        }
        // line 37
        echo "    </header>
    <div class=\"container-fluid\">
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "\t  </div>
    <footer>
      <div class=\"container-lg\">
        <div class=\"socials\">
          <a class=\"insta\" href=\"https://www.instagram.com/dans_le_feu_du_volcan/\"><i class=\"fab fa-instagram\"></i><span>Instagram</span></a>
          <a class=\"coup\" href=\"https://coudepouceassociation.com/accueil\"><i class=\"far fa-thumbs-up\"></i><span>Coup de pouce</span></a>
          <a class=\"monochrome\" href=\"http://journalmonochrome.fr/\"><i class=\"fas fa-book-open\"></i><span>Journal monochrome</span></a>
          <a class=\"point\" href=\"http://pointcontemporain.com/tag/maya-thinon/\"><i class=\"fas fa-pen-fancy\"></i><span>Point contemporain</span></a>
        </div>
        <div class=\"contact\">
          <a class=\"mail\" href=\"mailto:maya.thinon@gmail.com\"><i class=\"far fa-envelope\"></i>maya.thinon@gmail.com</a>
        </div>
      </div>
    </footer>
    <script src=\"https://kit.fontawesome.com/b06436898d.js\" crossorigin=\"anonymous\"></script>


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\" async></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>



    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW\" crossorigin=\"anonymous\"></script>

    <script src=\"https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js\"></script>

    <script src=\"https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js\"></script>

\t\t  <!-- Core plugin JavaScript-->

    ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "    </body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Maya Thinon site portfolio";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 70,  206 => 39,  188 => 13,  169 => 7,  156 => 71,  154 => 70,  122 => 40,  120 => 39,  116 => 37,  98 => 23,  87 => 21,  83 => 20,  79 => 18,  77 => 17,  72 => 14,  70 => 13,  66 => 12,  59 => 8,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"Maya THINON, étudiant des Beaux-Arts, vous propose un bric à brac séduisant de couleur, texture et signes.\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Maya Thinon site portfolio{% endblock %}</title>
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=GFS+Didot&display=swap\" rel=\"stylesheet\">
\t      <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
\t\t    <link href=\"{{asset('asset/css/monCss.css')}}\" rel=\"stylesheet\">
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
    <header>
    {% if categories is defined %}
        <div class=\"collapse\" id=\"navbarToggleExternalContent\">
          <div class=\"p-4\">
            {%  for categorie in categories %}
              <a href=\"{{path('collection',{id:categorie.id})}}\"><h2 class=\"h4\">{{categorie.Titre}}</h5></a>
            {% endfor %}
            <a href=\"{{path('site')}}\">
              <h2 class=\"h4\">Acceuil</h2>
            </a>

          </div>
        </div>
        <nav class=\"navbar\">
          <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <i class=\"fas fa-bars\"></i>
            </button>
          </div>
        </nav>
    {% endif %}
    </header>
    <div class=\"container-fluid\">
        {% block body %}{% endblock %}
\t  </div>
    <footer>
      <div class=\"container-lg\">
        <div class=\"socials\">
          <a class=\"insta\" href=\"https://www.instagram.com/dans_le_feu_du_volcan/\"><i class=\"fab fa-instagram\"></i><span>Instagram</span></a>
          <a class=\"coup\" href=\"https://coudepouceassociation.com/accueil\"><i class=\"far fa-thumbs-up\"></i><span>Coup de pouce</span></a>
          <a class=\"monochrome\" href=\"http://journalmonochrome.fr/\"><i class=\"fas fa-book-open\"></i><span>Journal monochrome</span></a>
          <a class=\"point\" href=\"http://pointcontemporain.com/tag/maya-thinon/\"><i class=\"fas fa-pen-fancy\"></i><span>Point contemporain</span></a>
        </div>
        <div class=\"contact\">
          <a class=\"mail\" href=\"mailto:maya.thinon@gmail.com\"><i class=\"far fa-envelope\"></i>maya.thinon@gmail.com</a>
        </div>
      </div>
    </footer>
    <script src=\"https://kit.fontawesome.com/b06436898d.js\" crossorigin=\"anonymous\"></script>


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\" async></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>



    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW\" crossorigin=\"anonymous\"></script>

    <script src=\"https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js\"></script>

    <script src=\"https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js\"></script>

\t\t  <!-- Core plugin JavaScript-->

    {% block javascripts %}{% endblock %}
    </body>

</html>
", "base.html.twig", "/var/www/templates/base.html.twig");
    }
}
