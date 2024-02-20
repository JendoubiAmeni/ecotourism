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

/* client/sensibilisation.html.twig */
class __TwigTemplate_95f67ea428239df733de2f1b96654a7b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/sensibilisation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/sensibilisation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/sensibilisation.html.twig", 1);
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

        echo "Sensibilisation et education | Eco tourism";
        
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
        echo "  <main>



        <section class=\"promo_full\">
            <div class=\"promo_full_wp magnific\">
                <div>
                      <h3>PLONGEZ DANS LA NATURE</h3>
                            <p>
                                Découvrez la beauté de la nature et apprenez comment vous pouvez contribuer à sa préservation. 
                            </p>
                    <a href=\"https://www.youtube.com/watch?v=Zz5cu72Gv5Y\" class=\"video\"><i
                            class=\"icon-play-circled2-1\"></i></a>
                </div>
            </div>
        </section>
        <!-- End section -->

        <div class=\"container margin_60\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/laptop.png"), "html", null, true);
        echo "\" alt=\"Ordinateur portable\" class=\"img-fluid laptop\">
                    </div>
                    <div class=\"col-md-6\">
                        <h3><span>Participez à</span> notre quiz éco-touristique</h3>
                        <p>
                            Testez vos connaissances sur l'écotourisme et découvrez comment voyager de manière responsable pour
                            préserver notre planète. Suivez les étapes ci-dessous et commencez votre aventure éco-responsable.
                        </p>
                        <ul class=\"list_order\">
                            <li><span>1</span>Explorez les questions passionnantes sur l'écotourisme</li>
                            <li><span>2</span>Répondez aux questions pour évaluer vos connaissances</li>
                            <li><span>3</span>Recevez vos résultats et découvrez comment devenir un voyageur éco-responsable</li>
                        </ul>
                        <a  class=\"btn_1\">Commencer le quiz</a>
                    </div>
                </div>


            <div class=\"main_title\">
                <h2>Quelques <span>bonnes</span> raisons</h2>
                <p>
                    Découvrez pourquoi l'écotourisme est essentiel. 
                </p>

            </div>

           <div class=\"row\">
    <div class=\"col-lg-4 wow zoomIn\" data-wow-delay=\"0.2s\">
        <div class=\"feature_home\">
            <i class=\"icon_set_1_icon-41\"></i>
            <h3><span>+120</span> Circuits Premium</h3>
            <p>
                Découvrez nos circuits premium qui vous emmènent à travers des destinations exceptionnelles, offrant une expérience inoubliable dans la nature préservée.
            </p>
            <a href=\"#\" class=\"btn_1 outline\">En savoir plus</a>
        </div>
    </div>

    <div class=\"col-lg-4 wow zoomIn\" data-wow-delay=\"0.4s\">
        <div class=\"feature_home\">
            <i class=\"icon_set_1_icon-30\"></i>
            <h3><span>+1000</span> Clients</h3>
            <p>
                Rejoignez plus de 1000 clients satisfaits qui ont choisi nos services exceptionnels pour des voyages respectueux de l'environnement.
            </p>
            <a href=\"#\" class=\"btn_1 outline\">En savoir plus</a>
        </div>
    </div>

    <div class=\"col-lg-4 wow zoomIn\" data-wow-delay=\"0.6s\">
        <div class=\"feature_home\">
            <i class=\"icon_set_1_icon-57\"></i>
            <h3><span>Assistance H24</span></h3>
            <p>
                Bénéficiez d'une assistance 24h/24 pour rendre votre voyage sans souci, tout en contribuant à la préservation de l'environnement.
            </p>
            <a href=\"#\" class=\"btn_1 outline\">En savoir plus</a>
        </div>
    </div>
</div>

            <!--End row -->

           

        </div>
        <!-- End container -->
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
        return "client/sensibilisation.html.twig";
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
        return array (  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}

{% block title %}Sensibilisation et education | Eco tourism{% endblock %}

{% block body %}
  <main>



        <section class=\"promo_full\">
            <div class=\"promo_full_wp magnific\">
                <div>
                      <h3>PLONGEZ DANS LA NATURE</h3>
                            <p>
                                Découvrez la beauté de la nature et apprenez comment vous pouvez contribuer à sa préservation. 
                            </p>
                    <a href=\"https://www.youtube.com/watch?v=Zz5cu72Gv5Y\" class=\"video\"><i
                            class=\"icon-play-circled2-1\"></i></a>
                </div>
            </div>
        </section>
        <!-- End section -->

        <div class=\"container margin_60\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <img src=\"{{asset('Frontend/img/laptop.png') }}\" alt=\"Ordinateur portable\" class=\"img-fluid laptop\">
                    </div>
                    <div class=\"col-md-6\">
                        <h3><span>Participez à</span> notre quiz éco-touristique</h3>
                        <p>
                            Testez vos connaissances sur l'écotourisme et découvrez comment voyager de manière responsable pour
                            préserver notre planète. Suivez les étapes ci-dessous et commencez votre aventure éco-responsable.
                        </p>
                        <ul class=\"list_order\">
                            <li><span>1</span>Explorez les questions passionnantes sur l'écotourisme</li>
                            <li><span>2</span>Répondez aux questions pour évaluer vos connaissances</li>
                            <li><span>3</span>Recevez vos résultats et découvrez comment devenir un voyageur éco-responsable</li>
                        </ul>
                        <a  class=\"btn_1\">Commencer le quiz</a>
                    </div>
                </div>


            <div class=\"main_title\">
                <h2>Quelques <span>bonnes</span> raisons</h2>
                <p>
                    Découvrez pourquoi l'écotourisme est essentiel. 
                </p>

            </div>

           <div class=\"row\">
    <div class=\"col-lg-4 wow zoomIn\" data-wow-delay=\"0.2s\">
        <div class=\"feature_home\">
            <i class=\"icon_set_1_icon-41\"></i>
            <h3><span>+120</span> Circuits Premium</h3>
            <p>
                Découvrez nos circuits premium qui vous emmènent à travers des destinations exceptionnelles, offrant une expérience inoubliable dans la nature préservée.
            </p>
            <a href=\"#\" class=\"btn_1 outline\">En savoir plus</a>
        </div>
    </div>

    <div class=\"col-lg-4 wow zoomIn\" data-wow-delay=\"0.4s\">
        <div class=\"feature_home\">
            <i class=\"icon_set_1_icon-30\"></i>
            <h3><span>+1000</span> Clients</h3>
            <p>
                Rejoignez plus de 1000 clients satisfaits qui ont choisi nos services exceptionnels pour des voyages respectueux de l'environnement.
            </p>
            <a href=\"#\" class=\"btn_1 outline\">En savoir plus</a>
        </div>
    </div>

    <div class=\"col-lg-4 wow zoomIn\" data-wow-delay=\"0.6s\">
        <div class=\"feature_home\">
            <i class=\"icon_set_1_icon-57\"></i>
            <h3><span>Assistance H24</span></h3>
            <p>
                Bénéficiez d'une assistance 24h/24 pour rendre votre voyage sans souci, tout en contribuant à la préservation de l'environnement.
            </p>
            <a href=\"#\" class=\"btn_1 outline\">En savoir plus</a>
        </div>
    </div>
</div>

            <!--End row -->

           

        </div>
        <!-- End container -->
    </main>
{% endblock %}", "client/sensibilisation.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\sensibilisation.html.twig");
    }
}
