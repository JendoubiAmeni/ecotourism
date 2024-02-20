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

/* client/avis.html.twig */
class __TwigTemplate_d9ac91a9d3fe94211dba928b053bc2b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/avis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/avis.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/avis.html.twig", 1);
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

        echo "Sensibilisation et éducation | Écotourisme";
        
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
        echo "    <section class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"img/tourist_guide.jpg\" data-natural-width=\"1400\" data-natural-height=\"470\">
    <div class=\"parallax-content-1 opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.4)\">
        <div class=\"animated fadeInDown\">
            <h1>Découvrez l'expérience de nos voyageurs</h1>
            <p>Explorez les témoignages de ceux qui ont choisi l'écotourisme avec nous. </p>
        </div>
    </div>
</section>

    <!-- Fin de la section -->
    <main>
        <div id=\"position\">
            <div class=\"container\">
                <ul>
                    <li><a href=\"#\">Accueil</a></li>
                    <li><a href=\"#\">Catégorie</a></li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- Fin de la position -->

        <!-- Fin du conteneur -->

        <div class=\"container margin_60\">
            <div class=\"main_title\">
                <h2>Ce que les <span>clients </span>disent</h2>
                <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"review_strip\">
                        <img src=\"img/avatar1.jpg\" alt=\"Image\" class=\"rounded-circle\">
                        <h4>Jhon Doe</h4>
                        <p>
                            \"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
                        </p>
                        <div class=\"rating\">
                            <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\" icon-star-empty\"></i><i class=\" icon-star-empty\"></i>
                        </div>
                    </div>
                    <!-- Fin de la bande d'avis -->
                </div>

                <div class=\"col-md-6\">
                    <div class=\"review_strip\">
                        <img src=\"img/avatar2.jpg\" alt=\"Image\" class=\"rounded-circle\">
                        <h4>Mark Schulz</h4>
                        <p>
                            \"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
                        </p>
                        <div class=\"rating\">
                            <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\" icon-star-empty\"></i><i class=\" icon-star-empty\"></i>
                        </div>
                    </div>
                    <!-- Fin de la bande d'avis -->
                </div>
            </div>
            <!-- Fin de la rangée -->

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"review_strip\">
                        <img src=\"img/avatar3.jpg\" alt=\"Image\" class=\"rounded-circle\">
                        <h4>Tony Costello</h4>
                        <p>
                            \"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
                        </p>
                        <div class=\"rating\">
                            <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\" icon-star-empty\"></i><i class=\" icon-star-empty\"></i>
                        </div>
                    </div>
                    <!-- Fin de la bande d'avis -->
                </div>

                <div class=\"col-md-6\">
                    <div class=\"review_strip\">
                        <img src=\"img/avatar1.jpg\" alt=\"Image\" class=\"rounded-circle\">
                        <h4>Peter Gabriel</h4>
                        <p>
                            \"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
                        </p>
                        <div class=\"rating\">
                            <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\" icon-star-empty\"></i><i class=\" icon-star-empty\"></i>
                        </div>
                    </div>
                    <!-- Fin de la bande d'avis -->
                </div>
            </div>
            <!-- Fin de la rangée -->
        </div>
        <!-- Fin du conteneur -->
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/avis.html.twig";
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sensibilisation et éducation | Écotourisme{% endblock %}

{% block body %}
    <section class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"img/tourist_guide.jpg\" data-natural-width=\"1400\" data-natural-height=\"470\">
    <div class=\"parallax-content-1 opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.4)\">
        <div class=\"animated fadeInDown\">
            <h1>Découvrez l'expérience de nos voyageurs</h1>
            <p>Explorez les témoignages de ceux qui ont choisi l'écotourisme avec nous. </p>
        </div>
    </div>
</section>

    <!-- Fin de la section -->
    <main>
        <div id=\"position\">
            <div class=\"container\">
                <ul>
                    <li><a href=\"#\">Accueil</a></li>
                    <li><a href=\"#\">Catégorie</a></li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- Fin de la position -->

        <!-- Fin du conteneur -->

        <div class=\"container margin_60\">
            <div class=\"main_title\">
                <h2>Ce que les <span>clients </span>disent</h2>
                <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"review_strip\">
                        <img src=\"img/avatar1.jpg\" alt=\"Image\" class=\"rounded-circle\">
                        <h4>Jhon Doe</h4>
                        <p>
                            \"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
                        </p>
                        <div class=\"rating\">
                            <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\" icon-star-empty\"></i><i class=\" icon-star-empty\"></i>
                        </div>
                    </div>
                    <!-- Fin de la bande d'avis -->
                </div>

                <div class=\"col-md-6\">
                    <div class=\"review_strip\">
                        <img src=\"img/avatar2.jpg\" alt=\"Image\" class=\"rounded-circle\">
                        <h4>Mark Schulz</h4>
                        <p>
                            \"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
                        </p>
                        <div class=\"rating\">
                            <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\" icon-star-empty\"></i><i class=\" icon-star-empty\"></i>
                        </div>
                    </div>
                    <!-- Fin de la bande d'avis -->
                </div>
            </div>
            <!-- Fin de la rangée -->

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"review_strip\">
                        <img src=\"img/avatar3.jpg\" alt=\"Image\" class=\"rounded-circle\">
                        <h4>Tony Costello</h4>
                        <p>
                            \"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
                        </p>
                        <div class=\"rating\">
                            <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\" icon-star-empty\"></i><i class=\" icon-star-empty\"></i>
                        </div>
                    </div>
                    <!-- Fin de la bande d'avis -->
                </div>

                <div class=\"col-md-6\">
                    <div class=\"review_strip\">
                        <img src=\"img/avatar1.jpg\" alt=\"Image\" class=\"rounded-circle\">
                        <h4>Peter Gabriel</h4>
                        <p>
                            \"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
                        </p>
                        <div class=\"rating\">
                            <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\" icon-star-empty\"></i><i class=\" icon-star-empty\"></i>
                        </div>
                    </div>
                    <!-- Fin de la bande d'avis -->
                </div>
            </div>
            <!-- Fin de la rangée -->
        </div>
        <!-- Fin du conteneur -->
    </main>
{% endblock %}
", "client/avis.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\avis.html.twig");
    }
}
