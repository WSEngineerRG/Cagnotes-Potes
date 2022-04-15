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

/* payement/index.html.twig */
class __TwigTemplate_b1db510ceaa95b0ef62be5e8a15d5404 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "payement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <h1 class=\"header center white-text light\">Titre de la campagne</h1>
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">- Organisée par : Nom de l'auteur -</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"/assets/images/8.jpg\" alt=\"Titre de la campagne\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Participez en quelques secondes</h4>
                </div>
            </div>
            <!--   Form Section   -->
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"row\">
                        <form>
                            <h5 class=\"center\">Votre identité</h5>
                            <div class=\"input-field col s12 l6\">
                                <input id=\"email\" type=\"email\" class=\"validate\">
                                <label for=\"email\">Votre Email</label>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <input id=\"mount\" type=\"number\" class=\"validate\">
                                <label for=\"mount\">Votre participation</label>
                            </div>
                            <p>
                                <label>
                                    <input type=\"checkbox\" />
                                    <span>Masquer mon identité auprès des autres participants</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type=\"checkbox\" />
                                    <span>Masquer le montant de ma participation auprès des autres participants</span>
                                </label>
                            </p>
                            <div class=\"clearfix\"></div>
                            <h5 class=\"center\">Paiement</h5>
                            <div class=\"input-field col s12\">
                                <input id=\"card_name\" type=\"text\" class=\"validate\">
                                <label for=\"card_name\">Nom sur la carte</label>
                            </div>
                            <div class=\"input-field col s12\">
                                <input id=\"card_number\" type=\"text\" class=\"validate\">
                                <label for=\"card_number\">Numéro de la carte</label>
                            </div>
                            <div class=\"input-field col s12 l8\">
                                <input id=\"card_expiration_date\" type=\"date\" class=\"validate\">
                                <label for=\"card_expiration_date\">Date d'expiration</label>
                            </div>
                            <div class=\"input-field col s12 l4\">
                                <input id=\"card_cvv\" type=\"text\" class=\"validate\">
                                <label for=\"card_cvv\">CVV</label>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <a href=\"#!\" class=\"btn btn-large waves-effect waves-light grey col s12\">Annuler</a>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <button class=\"btn btn-large waves-effect waves-light pink lighten-1 col s12\" type=\"submit\" name=\"action\">
                                    Participer
                                    <i class=\"material-icons right\">euro_symbol</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Comment ça marche ?</h4>
                </div>
            </div>
            <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">create</i></div>
                        <h5 class=\"center\">Créez</h5>
                        <p class=\"light\">et personnalisez votre campagne commune en 30 secondes !</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">wc</i></div>
                        <h5 class=\"center\">Invitez</h5>
                        <p class=\"light\">vos amis en utilisant les réseaux sociaux, mail, etc.</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">shopping_cart</i></div>
                        <h5 class=\"center\">Collectez</h5>
                        <p class=\"light\">et utilisez l'argent comme bon vous semble avec vos amis.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "payement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <h1 class=\"header center white-text light\">Titre de la campagne</h1>
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">- Organisée par : Nom de l'auteur -</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"/assets/images/8.jpg\" alt=\"Titre de la campagne\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Participez en quelques secondes</h4>
                </div>
            </div>
            <!--   Form Section   -->
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"row\">
                        <form>
                            <h5 class=\"center\">Votre identité</h5>
                            <div class=\"input-field col s12 l6\">
                                <input id=\"email\" type=\"email\" class=\"validate\">
                                <label for=\"email\">Votre Email</label>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <input id=\"mount\" type=\"number\" class=\"validate\">
                                <label for=\"mount\">Votre participation</label>
                            </div>
                            <p>
                                <label>
                                    <input type=\"checkbox\" />
                                    <span>Masquer mon identité auprès des autres participants</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type=\"checkbox\" />
                                    <span>Masquer le montant de ma participation auprès des autres participants</span>
                                </label>
                            </p>
                            <div class=\"clearfix\"></div>
                            <h5 class=\"center\">Paiement</h5>
                            <div class=\"input-field col s12\">
                                <input id=\"card_name\" type=\"text\" class=\"validate\">
                                <label for=\"card_name\">Nom sur la carte</label>
                            </div>
                            <div class=\"input-field col s12\">
                                <input id=\"card_number\" type=\"text\" class=\"validate\">
                                <label for=\"card_number\">Numéro de la carte</label>
                            </div>
                            <div class=\"input-field col s12 l8\">
                                <input id=\"card_expiration_date\" type=\"date\" class=\"validate\">
                                <label for=\"card_expiration_date\">Date d'expiration</label>
                            </div>
                            <div class=\"input-field col s12 l4\">
                                <input id=\"card_cvv\" type=\"text\" class=\"validate\">
                                <label for=\"card_cvv\">CVV</label>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <a href=\"#!\" class=\"btn btn-large waves-effect waves-light grey col s12\">Annuler</a>
                            </div>
                            <div class=\"input-field col s12 l6\">
                                <button class=\"btn btn-large waves-effect waves-light pink lighten-1 col s12\" type=\"submit\" name=\"action\">
                                    Participer
                                    <i class=\"material-icons right\">euro_symbol</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"section\">
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Comment ça marche ?</h4>
                </div>
            </div>
            <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">create</i></div>
                        <h5 class=\"center\">Créez</h5>
                        <p class=\"light\">et personnalisez votre campagne commune en 30 secondes !</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">wc</i></div>
                        <h5 class=\"center\">Invitez</h5>
                        <p class=\"light\">vos amis en utilisant les réseaux sociaux, mail, etc.</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">shopping_cart</i></div>
                        <h5 class=\"center\">Collectez</h5>
                        <p class=\"light\">et utilisez l'argent comme bon vous semble avec vos amis.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
{% endblock %}
", "payement/index.html.twig", "/Users/roms/my_project_directory/templates/payement/index.html.twig");
    }
}
