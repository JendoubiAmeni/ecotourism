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

/* client/event.html.twig */
class __TwigTemplate_1fddf3c3a25ed6b9e6f97dfbd606e497 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/event.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/event.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Événements | Écotourisme";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .parallax-window
    {
      background-color: #0000 !important;

    }
</style>

   <section class=\"parallax-window\" data-parallax=\"scroll\" style=\"\" data-natural-width=\"1400\" data-natural-height=\"470\">
    <div class=\"parallax-content-1 opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.4)\">
        <div class=\"animated fadeInDown\">
            <h1>Découvrez les Événements</h1>
            <p>Explorez des événements uniques, où la nature rencontre l'aventure, et où chaque participation contribue à préserver notre planète.</p>
        </div>
    </div>
</section>

    <!-- Fin de la section -->

    <main>
        <div id=\"position\">
            <div class=\"container\">
                <ul>
                    <li><a href=\"#\">Accueil</a></li>
                    <li><a href=\"#\">Événements</a></li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- Position -->

        <div class=\"container margin_60\">

            <div class=\"row\">

                <!--End aside -->
                <div class=\"col-lg-12\">

                    <div id=\"tools\">

                        <div class=\"row justify-content-between\">
                            <div class=\"col-md-3 col-sm-4\">
                                <div class=\"styled-select-filters\">
                                    <select name=\"sort_price\" id=\"sort_price\">
                                        <option value=\"\" selected>Trier par prix</option>
                                        <option value=\"lower\">Prix le plus bas</option>
                                        <option value=\"higher\">Prix le plus élevé</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-4 d-none d-sm-block text-end\">
                                <a href=\"all_restaurants_grid.html\" class=\"bt_filters\"><i class=\"icon-th\"></i></a> <a href=\"#\" class=\"bt_filters\"><i class=\"icon-list\"></i></a>
                            </div>

                        </div>
                    </div>
                    <!--/tools -->
                       ";
        // line 63
        if ((array_key_exists("event", $context) && (twig_length_filter($this->env, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 63, $this->source); })())) > 0))) {
            // line 64
            echo "                       ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 64, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 65
                echo "                        <div class=\"strip_all_tour_list wow fadeIn\" data-wow-delay=\"0.1s\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 col-md-4 position-relative\">
                                    <div class=\"ribbon_3 popular\"><span>Populaire</span></div>
                                    <div class=\"wishlist\">
                                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span></a>
                                    </div>
                                    <div class=\"img_list\">
                                        <a href=\"single_restaurant.html\"><img src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, false, 73))), "html", null, true);
                echo "\" alt=\"Image\" >
                                            <div class=\"short_info\"><i class=\"icon_calendar\"></i> ";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", [], "any", false, false, false, 74), "d-m-Y"), "html", null, true);
                echo "</div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"tour_list_desc\">
                                    
                                        <h3><strong>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "Name", [], "any", false, false, false, 81), "html", null, true);
                echo "</strong></h3>
                                        <p>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 82), "html", null, true);
                echo "</p>
                                        <ul class=\"add_info\">
                                            <li>
                                                <div class=\"tooltip_styled tooltip-effect-4\">
                                                    <span class=\"tooltip-item\"><i class=\"icon_set_1_icon-13\"></i></span>
                                                    <div class=\"tooltip-content\">
                                                        <h4>Accessible aux personnes handicapées</h4> 
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"tooltip_styled tooltip-effect-4\">
                                                    <span class=\"tooltip-item\"><i class=\"icon_set_1_icon-47\"></i></span>
                                                    <div class=\"tooltip-content\">
                                                        <h4>Espace non-fumeur</h4>
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"tooltip_styled tooltip-effect-4\">
                                                    <span class=\"tooltip-item\"><i class=\"icon_set_1_icon-27\"></i></span>
                                                    <div class=\"tooltip-content\">
                                                        <h4>Parking</h4> 
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"tooltip_styled tooltip-effect-4\">
                                                    <span class=\"tooltip-item\"><i class=\"icon_set_1_icon-25\"></i></span>
                                                    <div class=\"tooltip-content\">
                                                        <h4>Transport</h4> 
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>
                                <div class=\"col-lg-2 col-md-2\">
                                    <div class=\"price_list\">
                                        <div><sup></sup>";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "prixA", [], "any", false, false, false, 126), "html", null, true);
                echo " DT<span class=\"normal_price_list\"></span><small>*Par personne</small>
                                            <p><a href=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participants", ["id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 127)]), "html", null, true);
                echo "\" class=\"btn_1\">Détails</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                     ";
        }
        // line 135
        echo "
                 

                    <nav aria-label=\"Navigation de page\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\" aria-label=\"Précédent\">
                                    <span aria-hidden=\"true\">&laquo;</span>
                                    <span class=\"sr-only\">Précédent</span>
                                </a>
                            </li>
                            <li class=\"page-item active\"><span class=\"page-link\">1</span></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\" aria-label=\"Suivant\">
                                    <span aria-hidden=\"true\">&raquo;</span>
                                    <span class=\"sr-only\">Suivant</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Fin de la pagination -->

                </div>
                <!-- Fin col lg-9 -->
            </div>
            <!-- Fin de la row -->
        </div>
        <!-- Fin du container -->
    </main>
    <!-- Fin du main -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/event.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  249 => 135,  246 => 134,  233 => 127,  229 => 126,  182 => 82,  178 => 81,  168 => 74,  164 => 73,  154 => 65,  149 => 64,  147 => 63,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Événements | Écotourisme{% endblock %}

{% block body %}
<style>
    .parallax-window
    {
      background-color: #0000 !important;

    }
</style>

   <section class=\"parallax-window\" data-parallax=\"scroll\" style=\"\" data-natural-width=\"1400\" data-natural-height=\"470\">
    <div class=\"parallax-content-1 opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.4)\">
        <div class=\"animated fadeInDown\">
            <h1>Découvrez les Événements</h1>
            <p>Explorez des événements uniques, où la nature rencontre l'aventure, et où chaque participation contribue à préserver notre planète.</p>
        </div>
    </div>
</section>

    <!-- Fin de la section -->

    <main>
        <div id=\"position\">
            <div class=\"container\">
                <ul>
                    <li><a href=\"#\">Accueil</a></li>
                    <li><a href=\"#\">Événements</a></li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- Position -->

        <div class=\"container margin_60\">

            <div class=\"row\">

                <!--End aside -->
                <div class=\"col-lg-12\">

                    <div id=\"tools\">

                        <div class=\"row justify-content-between\">
                            <div class=\"col-md-3 col-sm-4\">
                                <div class=\"styled-select-filters\">
                                    <select name=\"sort_price\" id=\"sort_price\">
                                        <option value=\"\" selected>Trier par prix</option>
                                        <option value=\"lower\">Prix le plus bas</option>
                                        <option value=\"higher\">Prix le plus élevé</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-sm-4 d-none d-sm-block text-end\">
                                <a href=\"all_restaurants_grid.html\" class=\"bt_filters\"><i class=\"icon-th\"></i></a> <a href=\"#\" class=\"bt_filters\"><i class=\"icon-list\"></i></a>
                            </div>

                        </div>
                    </div>
                    <!--/tools -->
                       {% if event is defined and event | length > 0 %}
                       {% for row in event %}
                        <div class=\"strip_all_tour_list wow fadeIn\" data-wow-delay=\"0.1s\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 col-md-4 position-relative\">
                                    <div class=\"ribbon_3 popular\"><span>Populaire</span></div>
                                    <div class=\"wishlist\">
                                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span></a>
                                    </div>
                                    <div class=\"img_list\">
                                        <a href=\"single_restaurant.html\"><img src=\"{{ asset ('uploads/images/' ~ row.image) }}\" alt=\"Image\" >
                                            <div class=\"short_info\"><i class=\"icon_calendar\"></i> {{ row.date | date('d-m-Y')}}</div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"tour_list_desc\">
                                    
                                        <h3><strong>{{row.Name}}</strong></h3>
                                        <p>{{row.description}}</p>
                                        <ul class=\"add_info\">
                                            <li>
                                                <div class=\"tooltip_styled tooltip-effect-4\">
                                                    <span class=\"tooltip-item\"><i class=\"icon_set_1_icon-13\"></i></span>
                                                    <div class=\"tooltip-content\">
                                                        <h4>Accessible aux personnes handicapées</h4> 
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"tooltip_styled tooltip-effect-4\">
                                                    <span class=\"tooltip-item\"><i class=\"icon_set_1_icon-47\"></i></span>
                                                    <div class=\"tooltip-content\">
                                                        <h4>Espace non-fumeur</h4>
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"tooltip_styled tooltip-effect-4\">
                                                    <span class=\"tooltip-item\"><i class=\"icon_set_1_icon-27\"></i></span>
                                                    <div class=\"tooltip-content\">
                                                        <h4>Parking</h4> 
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"tooltip_styled tooltip-effect-4\">
                                                    <span class=\"tooltip-item\"><i class=\"icon_set_1_icon-25\"></i></span>
                                                    <div class=\"tooltip-content\">
                                                        <h4>Transport</h4> 
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>
                                <div class=\"col-lg-2 col-md-2\">
                                    <div class=\"price_list\">
                                        <div><sup></sup>{{row.prixA}} DT<span class=\"normal_price_list\"></span><small>*Par personne</small>
                                            <p><a href=\"{{path('app_participants',{'id': row.id})}}\" class=\"btn_1\">Détails</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      {% endfor %}
                     {% endif %}

                 

                    <nav aria-label=\"Navigation de page\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\" aria-label=\"Précédent\">
                                    <span aria-hidden=\"true\">&laquo;</span>
                                    <span class=\"sr-only\">Précédent</span>
                                </a>
                            </li>
                            <li class=\"page-item active\"><span class=\"page-link\">1</span></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\" aria-label=\"Suivant\">
                                    <span aria-hidden=\"true\">&raquo;</span>
                                    <span class=\"sr-only\">Suivant</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Fin de la pagination -->

                </div>
                <!-- Fin col lg-9 -->
            </div>
            <!-- Fin de la row -->
        </div>
        <!-- Fin du container -->
    </main>
    <!-- Fin du main -->
{% endblock %}
", "client/event.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\event.html.twig");
    }
}
