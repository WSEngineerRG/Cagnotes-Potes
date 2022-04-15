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
class __TwigTemplate_8d12d2dcf6ef9704edfee729bc992083 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"
              content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 11
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <!--Import Google Icon Font-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Import materialize.css-->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/assets/css/materialize.min.css\" media=\"screen,projection\"/>
        <!--Custom styles-->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/assets/css/styles.css\" media=\"screen,projection\"/>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/simplemde.min.css"), "html", null, true);
        echo "\" media=\"screen,projection\"/>
    </head>
    <body>
    ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cagnot'potes!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "        <div class=\"navbar-fixed\">
            <nav class=\"white\">
                <div class=\"nav-wrapper\">
                    <a href=\"/\" class=\"brand-logo center\">Cagnot'Potes</a>
                    <ul class=\"right hide-on-med-and-down\">
                        <li><a href=\"/";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campaign");
        echo "\" class=\"waves-effect waves-light btn pink lighten-1\">Créer une
                                campagne</a></li>
                    </ul>

                    <ul id=\"nav-mobile\" class=\"sidenav\">
                        <li><a href=\"/";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campaign");
        echo "\" class=\"waves-effect waves-light btn pink lighten-1\">Créer une
                                campagne</a></li>
                    </ul>
                    <a href=\"#\" data-target=\"nav-mobile\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
                </div>
            </nav>
        </div>
        <footer class=\"page-footer teal\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col l6 s12\">
                        <h5 class=\"white-text\">Cagnot'Potes</h5>
                        <p class=\"grey-text text-lighten-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat
                            magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo.</p>
                    </div>
                    <div class=\"col l3 s12 offset-l3\">
                        <h5 class=\"white-text\">Liens</h5>
                        <ul class=\"footer-links\">
                            <li><a class=\"white-text\" href=\"#!\">Comment ça marche ?</a></li>
                            <li><a class=\"white-text\" href=\"/";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participant");
        echo "\">Voir les campagnes</a></li>
                            <li><a class=\"white-text\" href=\"/";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campaign");
        echo "\">Créer une campagne</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"footer-copyright\">
                <div class=\"container\">
                    Made with love by <a class=\"white-text\" href=\"http://trombi.simplon-roanne.com/\">Simplon Roanne</a>
                </div>
            </div>
        </footer>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
            <!--JavaScript at end of body for optimized loading-->
            <script type=\"text/javascript\" src=\"/assets/js/materialize.min.js\"></script>
            <!--Init & custom scripts-->
            <script type=\"text/javascript\" src=\"/assets/js/scripts.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/simplemde.min.js"), "html", null, true);
        echo "\"></script>
            <script>
                let simplemde = new SimpleMDE();
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  230 => 73,  221 => 68,  211 => 67,  189 => 55,  185 => 54,  162 => 34,  154 => 29,  147 => 24,  137 => 23,  124 => 12,  114 => 11,  95 => 8,  83 => 78,  80 => 67,  78 => 23,  72 => 20,  64 => 14,  61 => 11,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"
              content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>{% block title %}Cagnot'potes!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
        <!--Import Google Icon Font-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Import materialize.css-->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/assets/css/materialize.min.css\" media=\"screen,projection\"/>
        <!--Custom styles-->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/assets/css/styles.css\" media=\"screen,projection\"/>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('assets/css/simplemde.min.css') }}\" media=\"screen,projection\"/>
    </head>
    <body>
    {% block body %}
        <div class=\"navbar-fixed\">
            <nav class=\"white\">
                <div class=\"nav-wrapper\">
                    <a href=\"/\" class=\"brand-logo center\">Cagnot'Potes</a>
                    <ul class=\"right hide-on-med-and-down\">
                        <li><a href=\"/{{ path('app_campaign') }}\" class=\"waves-effect waves-light btn pink lighten-1\">Créer une
                                campagne</a></li>
                    </ul>

                    <ul id=\"nav-mobile\" class=\"sidenav\">
                        <li><a href=\"/{{ path('app_campaign') }}\" class=\"waves-effect waves-light btn pink lighten-1\">Créer une
                                campagne</a></li>
                    </ul>
                    <a href=\"#\" data-target=\"nav-mobile\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
                </div>
            </nav>
        </div>
        <footer class=\"page-footer teal\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col l6 s12\">
                        <h5 class=\"white-text\">Cagnot'Potes</h5>
                        <p class=\"grey-text text-lighten-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat
                            magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo.</p>
                    </div>
                    <div class=\"col l3 s12 offset-l3\">
                        <h5 class=\"white-text\">Liens</h5>
                        <ul class=\"footer-links\">
                            <li><a class=\"white-text\" href=\"#!\">Comment ça marche ?</a></li>
                            <li><a class=\"white-text\" href=\"/{{ path('app_participant') }}\">Voir les campagnes</a></li>
                            <li><a class=\"white-text\" href=\"/{{ path('app_campaign') }}\">Créer une campagne</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"footer-copyright\">
                <div class=\"container\">
                    Made with love by <a class=\"white-text\" href=\"http://trombi.simplon-roanne.com/\">Simplon Roanne</a>
                </div>
            </div>
        </footer>
        {% endblock %}
        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
            <!--JavaScript at end of body for optimized loading-->
            <script type=\"text/javascript\" src=\"/assets/js/materialize.min.js\"></script>
            <!--Init & custom scripts-->
            <script type=\"text/javascript\" src=\"/assets/js/scripts.js\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('assets/js/simplemde.min.js') }}\"></script>
            <script>
                let simplemde = new SimpleMDE();
            </script>
        {% endblock %}


", "base.html.twig", "/Users/roms/my_project_directory/templates/base.html.twig");
    }
}
