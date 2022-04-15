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

/* campaign/show.html.twig */
class __TwigTemplate_1c5d285f7cb640fcef363c65b34245cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campaign/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "campaign/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <h1 class=\"header center white-text light\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">- Organisée par : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo " -</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/8.jpg"), "html", null, true);
        echo "\" alt=\"Titre de la campagne\"></div>
    </div>

    <!-- Show progress -->
    <section class=\"progress-section\">
        <div class=\"progress\">

            ";
        // line 21
        $context["count"] = 0;
        // line 22
        echo "
            ";
        // line 23
        $context["totalAmount"] = 0;
        // line 24
        echo "
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 26
            echo "
                ";
            // line 27
            $context["totalAmount"] = ((isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 27, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 27));
            // line 28
            echo "
                ";
            // line 29
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 29, $this->source); })()) + 1);
            // line 30
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
            ";
        // line 33
        $context["percentAmount"] = (((isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 33, $this->source); })()) * 100) / twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 33, $this->source); })()), "goal", [], "any", false, false, false, 33));
        // line 34
        echo "
            <div class=\"determinate\" style=\"width: ";
        // line 35
        echo twig_escape_filter($this->env, twig_round((isset($context["percentAmount"]) || array_key_exists("percentAmount", $context) ? $context["percentAmount"] : (function () { throw new RuntimeError('Variable "percentAmount" does not exist.', 35, $this->source); })())), "html", null, true);
        echo "%\"><span>";
        echo twig_escape_filter($this->env, twig_round((isset($context["percentAmount"]) || array_key_exists("percentAmount", $context) ? $context["percentAmount"] : (function () { throw new RuntimeError('Variable "percentAmount" does not exist.', 35, $this->source); })())), "html", null, true);
        echo " % de l'objectif</span></div>
        </div>
    </section>

    <div class=\"container participe\">
        <div class=\"section\">
            <!-- Participation section -->
            <div class=\"row\">
                <div class=\"card col s12 m12 l8 offset-l2\">
                    <div class=\"card-content\">

                        <form action=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" method=\"POST\">
                            <div class=\"input-field col s12 l6\">
                                <label for=\"mount\">Votre participation</label>
                                <input name=\"amount\" id=\"mount\" type=\"number\" class=\"validate\" min=\"1\">
                            </div>
                            <button type=\"submit\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l6\">Participer</button>
                        </form>

                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>A propos de la campagne</h4>
                </div>
            </div>
            <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col s12 m6 l3 offset-l3\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">person</i></div>
                        <h3 class=\"center\">";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "</h3>
                        <p class=\"light\">Participants</p>
                    </div>
                </div>

                <div class=\"col s12 m6 l3\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">redeem</i></div>
                        <h3 class=\"center\">";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "</h3>
                        <p class=\"light\">euros récoltés</p>
                    </div>
                </div>
            </div>
            <!-- Form section -->
            <div class=\"row\">
                <form>
                    <div class=\"input-field col s12\">
                        <label for=\"description\">Description</label>
                        <textarea id=\"description\" class=\"materialize-textarea\" readonly=\"readonly\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 86, $this->source); })()), "content", [], "any", false, false, false, 86), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"input-field col s12 l6\">
                        <input id=\"goal\" type=\"number\" readonly=\"readonly\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 89, $this->source); })()), "goal", [], "any", false, false, false, 89), "html", null, true);
        echo "\">
                        <label for=\"goal\">Objectif</label>
                    </div>
                    <div class=\"col s12 l6 offset-l3\">
                        <button class=\"btn btn-large waves-effect waves-light col s12\" type=\"submit\" name=\"action\">
                            <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campaign_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)]), "html", null, true);
        echo "\">Modifiez la campagne</a>
                            <i class=\"material-icons right\">edit</i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- List -->
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Liste des participants</h4>
                </div>
                <div class=\"col s12\">
                    <table class=\"highlight responsive-table\">
                        <thead>
                        <tr>
                            <th>Email</th>
                            <th>Participation</th>
                        </tr>

                        </thead>

                        <tbody>

                        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 117, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 118
            echo "
                            ";
            // line 119
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payment"], "participantId", [], "any", false, false, false, 119), "isAnonymous", [], "any", false, false, false, 119) == 0)) {
                // line 120
                echo "                                <tr>
                                    <td>";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payment"], "participantId", [], "any", false, false, false, 121), "email", [], "any", false, false, false, 121), "html", null, true);
                echo "</td>
                                    <td>";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 122), "html", null, true);
                echo " €</td>
                                </tr>
                            ";
            } else {
                // line 125
                echo "                                <tr>
                                    <td style='font-style:italic;'>Participant masqué</td>
                                    <td>";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 127), "html", null, true);
                echo " €</td>
                                </tr>
                            ";
            }
            // line 130
            echo "

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 144
        echo "
    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"row center\">
                    <h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/11.jpg"), "html", null, true);
        echo "\" alt=\"Une campagne pensée pour vous\"></div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "campaign/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 153,  289 => 144,  280 => 133,  272 => 130,  266 => 127,  262 => 125,  256 => 122,  252 => 121,  249 => 120,  247 => 119,  244 => 118,  240 => 117,  214 => 94,  206 => 89,  200 => 86,  187 => 76,  176 => 68,  151 => 46,  135 => 35,  132 => 34,  130 => 33,  127 => 32,  120 => 30,  118 => 29,  115 => 28,  113 => 27,  110 => 26,  106 => 25,  103 => 24,  101 => 23,  98 => 22,  96 => 21,  86 => 14,  79 => 10,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <h1 class=\"header center white-text light\">{{ campaign.title }}</h1>
                <div class=\"row center\">
                    <h5 class=\"header col s12 light\">- Organisée par : {{ campaign.name }} -</h5>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"{{ asset ('assets/images/8.jpg') }}\" alt=\"Titre de la campagne\"></div>
    </div>

    <!-- Show progress -->
    <section class=\"progress-section\">
        <div class=\"progress\">

            {% set count = 0 %}

            {% set totalAmount = 0 %}

            {% for payment in payments %}

                {% set totalAmount = totalAmount + payment.amount %}

                {% set count = count + 1 %}

            {% endfor %}

            {% set percentAmount = totalAmount * 100 / campaign.goal %}

            <div class=\"determinate\" style=\"width: {{ percentAmount|round }}%\"><span>{{ percentAmount|round }} % de l'objectif</span></div>
        </div>
    </section>

    <div class=\"container participe\">
        <div class=\"section\">
            <!-- Participation section -->
            <div class=\"row\">
                <div class=\"card col s12 m12 l8 offset-l2\">
                    <div class=\"card-content\">

                        <form action=\"{{ path ('payment_new', {'id': campaign.id}) }}\" method=\"POST\">
                            <div class=\"input-field col s12 l6\">
                                <label for=\"mount\">Votre participation</label>
                                <input name=\"amount\" id=\"mount\" type=\"number\" class=\"validate\" min=\"1\">
                            </div>
                            <button type=\"submit\" class=\"btn-large waves-effect waves-light pink lighten-1 col s12 l6\">Participer</button>
                        </form>

                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>A propos de la campagne</h4>
                </div>
            </div>
            <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col s12 m6 l3 offset-l3\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">person</i></div>
                        <h3 class=\"center\">{{count}}</h3>
                        <p class=\"light\">Participants</p>
                    </div>
                </div>

                <div class=\"col s12 m6 l3\">
                    <div class=\"icon-block center\">
                        <div class=\"btn-large btn-floating white\"><i class=\"material-icons teal-text\">redeem</i></div>
                        <h3 class=\"center\">{{totalAmount}}</h3>
                        <p class=\"light\">euros récoltés</p>
                    </div>
                </div>
            </div>
            <!-- Form section -->
            <div class=\"row\">
                <form>
                    <div class=\"input-field col s12\">
                        <label for=\"description\">Description</label>
                        <textarea id=\"description\" class=\"materialize-textarea\" readonly=\"readonly\">{{ campaign.content }}</textarea>
                    </div>
                    <div class=\"input-field col s12 l6\">
                        <input id=\"goal\" type=\"number\" readonly=\"readonly\" value=\"{{ campaign.goal }}\">
                        <label for=\"goal\">Objectif</label>
                    </div>
                    <div class=\"col s12 l6 offset-l3\">
                        <button class=\"btn btn-large waves-effect waves-light col s12\" type=\"submit\" name=\"action\">
                            <a href=\"{{ path('campaign_edit', {'id': campaign.id}) }}\">Modifiez la campagne</a>
                            <i class=\"material-icons right\">edit</i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- List -->
            <div class=\"row\">
                <div class=\"col s12 center\">
                    <h4>Liste des participants</h4>
                </div>
                <div class=\"col s12\">
                    <table class=\"highlight responsive-table\">
                        <thead>
                        <tr>
                            <th>Email</th>
                            <th>Participation</th>
                        </tr>

                        </thead>

                        <tbody>

                        {% for payment in payments %}

                            {% if payment.participantId.isAnonymous == 0 %}
                                <tr>
                                    <td>{{payment.participantId.email}}</td>
                                    <td>{{payment.amount}} €</td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td style='font-style:italic;'>Participant masqué</td>
                                    <td>{{payment.amount}} €</td>
                                </tr>
                            {% endif %}


                        {% endfor %}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {#
    <a href=\"{{ path('campaign_index') }}\">Back to list</a>

    {{ include('campaign/_delete_form.html.twig') }} #}

    <div class=\"parallax-container valign-wrapper\">
        <div class=\"section no-pad-bot\">
            <div class=\"container\">
                <div class=\"row center\">
                    <h4 class=\"header col s12 light\">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
                </div>
            </div>
        </div>
        <div class=\"parallax\"><img src=\"{{ asset ('assets/images/11.jpg') }}\" alt=\"Une campagne pensée pour vous\"></div>
    </div>

{% endblock %}", "campaign/show.html.twig", "/Users/roms/my_project_directory/templates/campaign/show.html.twig");
    }
}
