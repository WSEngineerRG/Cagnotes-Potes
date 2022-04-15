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

/* home/index.html.twig */
class __TwigTemplate_70405aa9d7ca55085e17c0b549876107 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "    <div class=\"parallax-container hero-banner valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"hide-on-med-and-down\">
                    <h1 class=\"header center white-text light\">Un cadeau commun à organiser?</h1>
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !</h5>
                    </div>
                </div>
                <div class=\"hide-on-large-only\">
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">Un cadeau commun à organiser ?</h5>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"card col s12 m12 l8 offset-l2\">
                        <div class=\"card-content\">
                            <div class=\"input-field col s12 l8\">
                                <label for=\"cag_name\">Nommez votre nouvelle campagne</label>
                                <input id=\"cag_name\" type=\"text\" class=\"validate\">
                            </div>
                            <button type=\"submit\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l4\">Envoyer</button>
                        </div>
                    </div>
                </div>
                <br><br>

            </div>
        </div>
        <div class=\"parallax\"><img src=\"/assets/images/11.jpg\" alt=\"Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !\"></div>
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
                        <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campaign_new");
        echo "\" class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">create</i></a>
                        <h5 class=\"center\">Créez</h5>
                        <p class=\"light\">et personnalisez votre campagne commune en 30 secondes !</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participant_new");
        echo "\" class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">wc</i></a>
                        <h5 class=\"center\">Invitez</h5>
                        <p class=\"light\">vos amis en utilisant les réseaux sociaux, mail, etc.</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_new");
        echo "\" class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">shopping_cart</i></a>
                        <h5 class=\"center\">Collectez</h5>
                        <p class=\"light\">et utilisez l'argent comme bon vous semble avec vos amis.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"row center\">
                    <h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"/assets/images/10.jpg\" alt=\"Une campagne pensée pour vous\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">

            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>les campagnes du moment</h4>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col s12\">
                    <div class=\"carousel\">
                        <a class=\"carousel-item\" href=\"#one!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>0</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>0</b>
                                        </div>
                                    </div>

                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#two!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#three!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#four!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#five!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
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
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 64,  124 => 56,  113 => 48,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
    <div class=\"parallax-container hero-banner valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"hide-on-med-and-down\">
                    <h1 class=\"header center white-text light\">Un cadeau commun à organiser?</h1>
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !</h5>
                    </div>
                </div>
                <div class=\"hide-on-large-only\">
                    <div class=\"row center\">
                        <h5 class=\"header col s12 light\">Un cadeau commun à organiser ?</h5>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"card col s12 m12 l8 offset-l2\">
                        <div class=\"card-content\">
                            <div class=\"input-field col s12 l8\">
                                <label for=\"cag_name\">Nommez votre nouvelle campagne</label>
                                <input id=\"cag_name\" type=\"text\" class=\"validate\">
                            </div>
                            <button type=\"submit\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l4\">Envoyer</button>
                        </div>
                    </div>
                </div>
                <br><br>

            </div>
        </div>
        <div class=\"parallax\"><img src=\"/assets/images/11.jpg\" alt=\"Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !\"></div>
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
                        <a href=\"{{ path('app_campaign_new') }}\" class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">create</i></a>
                        <h5 class=\"center\">Créez</h5>
                        <p class=\"light\">et personnalisez votre campagne commune en 30 secondes !</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <a href=\"{{ path('app_participant_new') }}\" class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">wc</i></a>
                        <h5 class=\"center\">Invitez</h5>
                        <p class=\"light\">vos amis en utilisant les réseaux sociaux, mail, etc.</p>
                    </div>
                </div>

                <div class=\"col s12 m4\">
                    <div class=\"icon-block center\">
                        <a href=\"{{ path('app_payment_new') }}\" class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">shopping_cart</i></a>
                        <h5 class=\"center\">Collectez</h5>
                        <p class=\"light\">et utilisez l'argent comme bon vous semble avec vos amis.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"row center\">
                    <h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"/assets/images/10.jpg\" alt=\"Une campagne pensée pour vous\"></div>
    </div>

    <div class=\"container\">
        <div class=\"section\">

            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>les campagnes du moment</h4>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col s12\">
                    <div class=\"carousel\">
                        <a class=\"carousel-item\" href=\"#one!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>0</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>0</b>
                                        </div>
                                    </div>

                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#two!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#three!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#four!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                        <a class=\"carousel-item\" href=\"#five!\">
                            <div class=\"card center\">
                                <div class=\"card-content\">
                                    <span class=\"card-title teal-text\">Titre campagne</span>
                                    <p class=\"black-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                                <div class=\"card-action\">
                                    <div class=\"row black-text\">
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">account_circle</i> <b>12</b>
                                        </div>
                                        <div class=\"col s6\">
                                            <i class=\"material-icons teal-text\">euro_symbol</i> <b>350</b>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"determinate\" style=\"width: 70%\"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

{% endblock %}
", "home/index.html.twig", "/Users/roms/my_project_directory/templates/home/index.html.twig");
    }
}
