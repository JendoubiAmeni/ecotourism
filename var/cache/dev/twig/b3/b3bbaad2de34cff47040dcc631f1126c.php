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

/* client/index.html.twig */
class __TwigTemplate_29e020e47689320f424338d27ba04582 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
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

        echo "Accueil | Eco tourism";
        
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
        echo "
  <div id=\"carousel-home\">
    <div class=\"owl-carousel owl-theme\">
      <div
        class=\"owl-slide cover\"
        style=\"background-image: url(";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/slides/slide_home_3.jpg"), "html", null, true);
        echo ")\"
      >
        <div
          class=\"opacity-mask d-flex align-items-center\"
          data-opacity-mask=\"rgba(0, 0, 0, 0.5)\"
        >
          <div class=\"container\">
            <div class=\"row justify-content-center justify-content-md-start\">
              <div class=\"col-lg-12 static\">
                <div class=\"slide-text text-center white\">
                  <h2 class=\"owl-slide-animated owl-slide-title\">
                    Explorer nos destinations<br />
                  </h2>
                 <!-- search tours form-->
                                        <div class=\"search-tours-form\">
                                            <div class=\"container-boot\">
                                                <div class=\"search-tours-wrap\">
                                                    <div class=\"search-tours-tabs\">
                                                        <div class=\"search-tabs-wrap\">
                                                            <div data-tours-cat=\"tab-cat-1\"
                                                                class=\"tours-tab-btn active\"><span>
                                                                    Aventure</span><i
                                                                    class=\"tours-tab-icon flaticon-suntour-world\"></i>
                                                            </div>
                                                            <div data-tours-cat=\"tab-cat-2\" class=\"tours-tab-btn\">
                                                                <span>Vacances</span><i
                                                                    class=\"tours-tab-icon flaticon-suntour-fireworks\"></i>
                                                            </div>
                                                            <div data-tours-cat=\"tab-cat-3\" class=\"tours-tab-btn\">
                                                                <span>Hôtels</span><i
                                                                    class=\"tours-tab-icon flaticon-suntour-hotel\"></i>
                                                            </div>
                                                            <div data-tours-cat=\"tab-cat-4\" class=\"tours-tab-btn\">
                                                                <span>Croisières</span><i
                                                                    class=\"tours-tab-icon flaticon-suntour-ship\"></i>
                                                            </div>
                                                            <div data-tours-cat=\"tab-cat-5\" class=\"tours-tab-btn\">
                                                                <span>Vols</span><i
                                                                    class=\"tours-tab-icon flaticon-suntour-airplane\"></i>
                                                            </div>
                                                            <div data-tours-cat=\"tab-cat-6\" class=\"tours-tab-btn\">
                                                                <span>Voitures</span><i
                                                                    class=\"tours-tab-icon flaticon-suntour-car\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"search-tours-content\">
                                                        <div data-tours-cat=\"tab-cat-1\" class=\"tours-container active\">
                                                            <div class=\"tours-box\">
                                                                <div class=\"tours-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\" placeholder=\"Destination\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Date de départ\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Date de retour\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"selection-box divider-skew\"><i
                                                                            class=\"flaticon-suntour-adult box-icon\"></i>
                                                                        <select>
                                                                            <option>Adulte</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"selection-box\"><i
                                                                            class=\"flaticon-suntour-children box-icon\"></i>
                                                                        <select>
                                                                            <option>Enfant</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"button-search\">Rechercher</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div data-tours-cat=\"tab-cat-2\" style=\"display: none;\"
                                                            class=\"tours-container\">
                                                            <div class=\"holidays-box\">
                                                                <div class=\"holidays-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\" placeholder=\"Destination\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Date de départ\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Date de retour\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"selection-box divider-skew\"><i
                                                                            class=\"flaticon-suntour-adult box-icon\"></i>
                                                                        <select>
                                                                            <option>Adulte</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"selection-box\"><i
                                                                            class=\"flaticon-suntour-children box-icon\"></i>
                                                                        <select>
                                                                            <option>Enfant</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"button-search\">Rechercher</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div data-tours-cat=\"tab-cat-3\" style=\"display: none;\"
                                                            class=\"tours-container\">
                                                            <div class=\"hotels-box\">
                                                                <div class=\"hotels-search\">
                                                                    <form method=\"post\" class=\"form search\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Destination, nom de l'hôtel, aéroport, gare, lieu emblématique ou adresse\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class=\"hotels-select\">
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Arrivée\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Départ\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"selection-box divider-skew\"><i
                                                                            class=\"flaticon-suntour-bed box-icon\"></i>
                                                                        <select>
                                                                            <option>Chambres</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"selection-box divider-skew\"><i
                                                                            class=\"flaticon-suntour-adult box-icon\"></i>
                                                                        <select>
                                                                            <option>Adultes</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"selection-box\"><i
                                                                            class=\"flaticon-suntour-children box-icon\"></i>
                                                                        <select>
                                                                            <option>Enfants</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"button-search\">Rechercher</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div data-tours-cat=\"tab-cat-4\" style=\"display: none;\"
                                                            class=\"tours-container\">
                                                            <div class=\"cruise-box\">
                                                                <div class=\"cruise-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\" placeholder=\"Destination\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <div class=\"tours-calendar\">
                                                                        <input placeholder=\"Date de départ\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"button-search\">Rechercher</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div data-tours-cat=\"tab-cat-5\" style=\"display: none;\"
                                                            class=\"tours-container\">
                                                            <div class=\"flights-box\">
                                                                <div class=\"flights-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Départ (ville ou aéroport)\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <form method=\"post\" class=\"form search\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Destination (ville ou aéroport)\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class=\"flights-select clearfix\">
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Départ\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Retour\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"selection-box divider-skew\"><i
                                                                            class=\"flaticon-suntour-adult box-icon\"></i>
                                                                        <select>
                                                                            <option>Adultes</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"selection-box\"><i
                                                                            class=\"flaticon-suntour-children box-icon\"></i>
                                                                        <select>
                                                                            <option>Enfants</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"flights-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Compagnie aérienne préférée\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <form method=\"post\" class=\"form search\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Classe préférée\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <div class=\"button-search\">Rechercher</div>
                                                                </div>
                                                                <div class=\"flights-advance\"><span>Options
                                                                        avancées</span>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox8\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox8\">Sans escale</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox9\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox9\">Vol
                                                                                remboursable</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"buttons-wrap\"> <a href=\"#\"
                                                                            class=\"tour-button\">Aller-retour </a><a
                                                                            href=\"#\" class=\"tour-button\">Aller simple
                                                                        </a><a href=\"#\" class=\"tour-button\">Destinations
                                                                            multiples </a></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div data-tours-cat=\"tab-cat-6\" style=\"display: none;\"
                                                            class=\"tours-container\">
                                                            <div class=\"cars-box\">
                                                                <div class=\"cars-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Prise en charge (Ville, aéroport, adresse)\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <form method=\"post\" class=\"form search\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\" placeholder=\"Dépôt\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class=\"cars-calendar clearfix\">
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Date de prise en charge\"
                                                                            type=\"text\" onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\">
                                                                        <div class=\"selection-box angle\">
                                                                            <select>
                                                                                <option>10h30</option>
                                                                                <option>11h30</option>
                                                                                <option>12h30</option>
                                                                                <option>13h30</option>
                                                                            </select>
                                                                        </div><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"tours-calendar\">
                                                                        <input placeholder=\"Date de dépôt\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\">
                                                                        <div class=\"selection-box angle\">
                                                                            <select>
                                                                                <option>10h30</option>
                                                                                <option>11h30</option>
                                                                                <option>12h30</option>
                                                                                <option>13h30</option>
                                                                            </select>
                                                                        </div><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                </div>
                                                                <div class=\"cars-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Type de voiture\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <form method=\"post\" class=\"form search\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Compagnie de location de voiture\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <div class=\"button-search\">Rechercher</div>
                                                                </div>
                                                                <div class=\"cars-advance\"><span>Options avancées</span>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox1\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox1\">Siège pour
                                                                                nourrisson</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox2\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox2\">Porte-skis</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox3\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox3\">Commande à
                                                                                gauche</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox4\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox4\">Siège pour
                                                                                tout-petit</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox5\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox5\">Chaînes à
                                                                                neige</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox6\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox6\">Commande à
                                                                                droite</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox7\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox7\">Système de
                                                                                navigation</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ! search tours form-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div
        class=\"owl-slide cover\"
        style=\"background-image: url(";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/slides/slide_home_2.jpg"), "html", null, true);
        echo ")\"
      >
        <div
          class=\"opacity-mask d-flex align-items-center\"
          data-opacity-mask=\"rgba(0, 0, 0, 0.6)\"
        >
          <div class=\"container\">
            <div class=\"row justify-content-center justify-content-md-end\">
              <div class=\"col-lg-6 static\">
                <div class=\"slide-text text-end white\">
                  <h2 class=\"owl-slide-animated owl-slide-title\">
                    Discover<br />Vatican Museum
                  </h2>
                  <p class=\"owl-slide-animated owl-slide-subtitle\">
                    Discover hidden wonders on trips curated by Citytours Tours
                    Experts
                  </p>
                  <div class=\"owl-slide-animated owl-slide-cta\">
                    <a class=\"btn_1\" href=\"";
        // line 515
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" role=\"button\"
                      >lire plus</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <div
        class=\"owl-slide cover\"
        style=\"background-image: url(";
        // line 528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/slides/slide_home_1.jpg"), "html", null, true);
        echo ")\"
      >
        <div
          class=\"opacity-mask d-flex align-items-center\"
          data-opacity-mask=\"rgba(0, 0, 0, 0.5)\"
        >
          <div class=\"container\">
            <div class=\"row justify-content-center justify-content-md-start\">
              <div class=\"col-lg-6 static\">
                <div class=\"slide-text white\">
                  <h2 class=\"owl-slide-animated owl-slide-title\">
                    Love Paris<br />Arch de Triomphe
                  </h2>
                  <p class=\"owl-slide-animated owl-slide-subtitle\">
                    Discover hidden wonders on trips curated by Citytours Tours
                    Experts
                  </p>
                  <div class=\"owl-slide-animated owl-slide-cta\">
                    <a class=\"btn_1\" href=\"";
        // line 546
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" role=\"button\"
                      >lire plus</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <div id=\"icon_drag_mobile\"></div>
  </div>
  

  <div class=\"white_bg\">
    <div class=\"container margin_60\">
      <div class=\"row small-gutters categories_grid\">
        <div class=\"col-sm-12 col-md-6\">
          <a href=\"all_tours_list.html\">
            <img src=\"img/img_cat_home_1.jpg\" alt=\"\" class=\"img-fluid\" />
            <div class=\"wrapper\">
              <h2>Special Offers</h2>
              <p>1150 Locations</p>
            </div>
          </a>
        </div>
        <div class=\"col-sm-12 col-md-6\">
          <div class=\"row small-gutters mt-md-0 mt-sm-2\">
            <div class=\"col-sm-6\">
              <a href=\"all_tours_list.html\">
                <img src=\"img/img_cat_home_2.jpg\" alt=\"\" class=\"img-fluid\" />
                <div class=\"wrapper\">
                  <h2>Tours</h2>
                  <p>800 Locations</p>
                </div>
              </a>
            </div>
            <div class=\"col-sm-6\">
              <a href=\"all_hotels_list.html\">
                <img src=\"img/img_cat_home_3.jpg\" alt=\"\" class=\"img-fluid\" />
                <div class=\"wrapper\">
                  <h2>Hotels</h2>
                  <p>650 Locations</p>
                </div>
              </a>
            </div>
            <div class=\"col-sm-12 mt-sm-2\">
              <a href=\"all_restaurants_list.html\">
                <img src=\"img/img_cat_home_4.jpg\" alt=\"\" class=\"img-fluid\" />
                <div class=\"wrapper\">
                  <h2>Restaurants</h2>
                  <p>1132 Locations</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
     
    </div>
   
  </div>


  <div class=\"container margin_60\">
    <div class=\"main_title\">
      <h2>Paris <span>Top</span> Tours</h2>
      <p>
        Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur
        consequat.
      </p>
    </div>

    <div class=\"owl-carousel owl-theme list_carousel add_bottom_30\">
      <div class=\"item\">
        <div class=\"tour_container\">
          <div class=\"ribbon_3 popular\"><span>Popular</span></div>
          <div class=\"img_container\">
            <a href=\"single_tour.html\">
              <img
                src=\"img/tour_box_1.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"short_info\">
                <i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span
                  class=\"price\"
                  ><sup>\$</sup>39</span
                >
              </div>
            </a>
          </div>
          <div class=\"tour_title\">
            <h3><strong>Arc Triomphe</strong> tour</h3>
            <div class=\"rating\">
              <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile\"></i><small>(75)</small>
            </div>
            
            <div class=\"wishlist\">
              <a
                class=\"tooltip_flip tooltip-effect-1\"
                href=\"javascript:void(0);\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
         
          </div>
        </div>
     
      </div>
   
      <div class=\"item\">
        <div class=\"tour_container\">
          <div class=\"ribbon_3 popular\"><span>Popular</span></div>
          <div class=\"img_container\">
            <a href=\"single_tour.html\">
              <img
                src=\"img/tour_box_2.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"short_info\">
                <i class=\"icon_set_1_icon-43\"></i>Churches<span class=\"price\"
                  ><sup>\$</sup>45</span
                >
              </div>
            </a>
          </div>
          <div class=\"tour_title\">
            <h3><strong>Notredame</strong> tour</h3>
            <div class=\"rating\">
              <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile\"></i><small>(75)</small>
            </div>
          
            <div class=\"wishlist\">
              <a
                class=\"tooltip_flip tooltip-effect-1\"
                href=\"javascript:void(0);\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box tour -->
      </div>
      <!-- /item -->
      <div class=\"item\">
        <div class=\"tour_container\">
          <div class=\"ribbon_3 popular\"><span>Popular</span></div>
          <div class=\"img_container\">
            <a href=\"single_tour.html\">
              <img
                src=\"img/tour_box_3.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"badge_save\">Save<strong>30%</strong></div>
              <div class=\"short_info\">
                <i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span
                  class=\"price\"
                  ><sup>\$</sup>48</span
                >
              </div>
            </a>
          </div>
          <div class=\"tour_title\">
            <h3><strong>Versailles</strong> tour</h3>
            <div class=\"rating\">
              <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile\"></i><small>(75)</small>
            </div>
            <!-- end rating -->
            <div class=\"wishlist\">
              <a
                class=\"tooltip_flip tooltip-effect-1\"
                href=\"javascript:void(0);\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box tour -->
      </div>
      <!-- /item -->
      <div class=\"item\">
        <div class=\"tour_container\">
          <div class=\"ribbon_3\"><span>Top rated</span></div>
          <div class=\"img_container\">
            <a href=\"single_tour.html\">
              <img
                src=\"img/tour_box_4.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"badge_save\">Save<strong>20%</strong></div>
              <div class=\"short_info\">
                <i class=\"icon_set_1_icon-30\"></i>Walking tour<span
                  class=\"price\"
                  ><sup>\$</sup>36</span
                >
              </div>
            </a>
          </div>
          <div class=\"tour_title\">
            <h3><strong>Pompidue</strong> tour</h3>
            <div class=\"rating\">
              <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile\"></i><small>(75)</small>
            </div>
            <!-- end rating -->
            <div class=\"wishlist\">
              <a
                class=\"tooltip_flip tooltip-effect-1\"
                href=\"javascript:void(0);\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box tour -->
      </div>
      <!-- /item -->
      <div class=\"item\">
        <div class=\"tour_container\">
          <div class=\"ribbon_3\"><span>Top rated</span></div>
          <div class=\"img_container\">
            <a href=\"single_tour.html\">
              <img
                src=\"img/tour_box_14.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"short_info\">
                <i class=\"icon_set_1_icon-28\"></i>Skyline tours<span
                  class=\"price\"
                  ><sup>\$</sup>42</span
                >
              </div>
            </a>
          </div>
          <div class=\"tour_title\">
            <h3><strong>Tour Eiffel</strong> tour</h3>
            <div class=\"rating\">
              <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile\"></i><small>(75)</small>
            </div>
          
            <div class=\"wishlist\">
              <a
                class=\"tooltip_flip tooltip-effect-1\"
                href=\"javascript:void(0);\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
        
          </div>
        </div>
      
      </div>
    
    </div>
   

    <p class=\"text-center add_bottom_30\">
      <a href=\"all_tours_list.html\" class=\"btn_1\">View all Tours</a>
    </p>

    <hr class=\"mt-5 mb-5\" />

    <div class=\"main_title\">
      <h2>Paris <span>Top</span> Hotels</h2>
      <p>
        Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur
        consequat.
      </p>
    </div>

    <div class=\"owl-carousel owl-theme list_carousel add_bottom_30\">
      <div class=\"item\">
        <div class=\"hotel_container\">
          <div class=\"ribbon_3 popular\"><span>Popular</span></div>
          <div class=\"img_container\">
            <a href=\"single_hotel.html\">
              <img
                src=\"img/hotel_1.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"score\"><span>7.5</span>Good</div>
              <div class=\"short_info hotel\">
                <span class=\"price\"><sup>\$</sup>59</span>
              </div>
            </a>
          </div>
          <div class=\"hotel_title\">
            <h3><strong>Park Hyatt</strong> Hotel</h3>
            <div class=\"rating\">
              <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star-empty\"></i>
            </div>
        
            <div class=\"wishlist\">
              <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
           
          </div>
        </div>
       
      </div>
     
      <div class=\"item\">
        <div class=\"hotel_container\">
          <div class=\"ribbon_3 popular\"><span>Popular</span></div>
          <div class=\"img_container\">
            <a href=\"single_hotel.html\">
              <img
                src=\"img/hotel_2.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"score\"><span>9.0</span>Superb</div>
              <div class=\"short_info hotel\">
                <span class=\"price\"><sup>\$</sup>45</span>
              </div>
            </a>
          </div>
          <div class=\"hotel_title\">
            <h3><strong>Mariott</strong> Hotel</h3>
            <div class=\"rating\">
              <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star-empty\"></i>
            </div>
            <!-- end rating -->
            <div class=\"wishlist\">
              <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box -->
      </div>
      <!-- /item -->
      <div class=\"item\">
        <div class=\"hotel_container\">
          <div class=\"ribbon_3\"><span>Top rated</span></div>
          <div class=\"img_container\">
            <a href=\"single_hotel.html\">
              <img
                src=\"img/hotel_3.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"score\"><span>9.5</span>Superb</div>
              <div class=\"short_info hotel\">
                <span class=\"price\"><sup>\$</sup>39</span>
              </div>
            </a>
          </div>
          <div class=\"hotel_title\">
            <h3><strong>Lumiere</strong> Hotel</h3>
            <div class=\"rating\">
              <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star-empty\"></i>
            </div>
            <!-- end rating -->
            <div class=\"wishlist\">
              <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box -->
      </div>
      <!-- /item -->
      <div class=\"item\">
        <div class=\"hotel_container\">
          <div class=\"ribbon_3\"><span>Top rated</span></div>
          <div class=\"img_container\">
            <a href=\"single_hotel.html\">
              <img
                src=\"img/hotel_4.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"score\"><span>7.5</span>Good</div>
              <div class=\"short_info hotel\">
                <span class=\"price\"><sup>\$</sup>45</span>
              </div>
            </a>
          </div>
          <div class=\"hotel_title\">
            <h3><strong>Novelle</strong> Hotel</h3>
            <div class=\"rating\">
              <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star-empty\"></i>
            </div>
            <!-- end rating -->
            <div class=\"wishlist\">
              <a
                class=\"tooltip_flip tooltip-effect-1\"
                href=\"javascript:void(0);\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box -->
      </div>
      <!-- /item -->
      <div class=\"item\">
        <div class=\"hotel_container\">
          <div class=\"ribbon_3\"><span>Top rated</span></div>
          <div class=\"img_container\">
            <a href=\"single_hotel.html\">
              <img
                src=\"img/hotel_5.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"score\"><span>8.0</span>Good</div>
              <div class=\"short_info hotel\">
                <span class=\"price\"><sup>\$</sup>39</span>
              </div>
            </a>
          </div>
          <div class=\"hotel_title\">
            <h3><strong>Louvre</strong> Hotel</h3>
            <div class=\"rating\">
              <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star-empty\"></i>
            </div>
            <!-- end rating -->
            <div class=\"wishlist\">
              <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box -->
      </div>
      <!-- /item -->
    </div>
    <!-- /carousel -->

    <p class=\"text-center nopadding\">
      <a href=\"all_hotels_list.html\" class=\"btn_1\">View all Hotels</a>
    </p>
  </div>
  <!-- End container -->

  <div class=\"white_bg\">
    <div class=\"container margin_60\">
      <div class=\"main_title\">
        <h2>Plan <span>Your Tour</span> Easly</h2>
        <p>
          Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur
          consequat.
        </p>
      </div>
      <div class=\"row feature_home_2\">
        <div class=\"col-md-4 text-center\">
          <img src=\"img/adventure_icon_1.svg\" alt=\"\" width=\"75\" height=\"75\" />
          <h3>Itineraries studied in detail</h3>
          <p>
            Suscipit invenire petentium per in. Ne magna assueverit vel. Vix
            movet perfecto facilisis in, ius ad maiorum corrumpit, his esse
            docendi in.
          </p>
        </div>
        <div class=\"col-md-4 text-center\">
          <img src=\"img/adventure_icon_2.svg\" alt=\"\" width=\"75\" height=\"75\" />
          <h3>Room and food included</h3>
          <p>
            Cum accusam voluptatibus at, et eum fuisset sententiae. Postulant
            tractatos ius an, in vis fabulas percipitur, est audiam phaedrum
            electram ex.
          </p>
        </div>
        <div class=\"col-md-4 text-center\">
          <img src=\"img/adventure_icon_3.svg\" alt=\"\" width=\"75\" height=\"75\" />
          <h3>Everything organized</h3>
          <p>
            Integre vivendo percipitur eam in, graece suavitate cu vel. Per
            inani persius accumsan no. An case duis option est, pro ad fastidii
            contentiones.
          </p>
        </div>
      </div>

      <div class=\"banner_2\">
        <div
          class=\"wrapper d-flex align-items-center opacity-mask\"
          data-opacity-mask=\"rgba(0, 0, 0, 0.3)\"
          style=\"background-color: rgba(0, 0, 0, 0.3)\"
        >
          <div>
            <h3>Your Perfect<br />Tour Experience</h3>
            <p>Activities and accommodations</p>
            <a href=\"";
        // line 1110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"btn_1\">lire plus</a>
          </div>
        </div>
        <!-- /wrapper -->
      </div>
      <!-- /banner_2 -->
    </div>
    <!-- End container -->
  </div>
  <!-- End white_bg -->

  <div class=\"container margin_60\">
    <div class=\"main_title\">
      <h2>Lates <span>Blog</span> News</h2>
      <p>
        Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur
        consequat.
      </p>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-6\">
        <a class=\"box_news\" href=\"";
        // line 1132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">
          <figure>
            <img src=\"img/news_home_1.jpg\" alt=\"\" />
            <figcaption><strong>28</strong>Dec</figcaption>
          </figure>
          <ul>
            <li>Mark Twain</li>
            <li>20.11.2017</li>
          </ul>
          <h4>Pri oportere scribentur eu</h4>
          <p>
            Cu eum alia elit, usu in eius appareat, deleniti sapientem
            honestatis eos ex. In ius esse ullum vidisse....
          </p>
        </a>
      </div>
      <!-- /box_news -->
      <div class=\"col-lg-6\">
        <a class=\"box_news\" href=\"blog.html\">
          <figure>
            <img src=\"img/news_home_2.jpg\" alt=\"\" />
            <figcaption><strong>28</strong>Dec</figcaption>
          </figure>
          <ul>
            <li>Jhon Doe</li>
            <li>20.11.2017</li>
          </ul>
          <h4>Duo eius postea suscipit ad</h4>
          <p>
            Cu eum alia elit, usu in eius appareat, deleniti sapientem
            honestatis eos ex. In ius esse ullum vidisse....
          </p>
        </a>
      </div>
      <!-- /box_news -->
      <div class=\"col-lg-6\">
        <a class=\"box_news\" href=\"blog.html\">
          <figure>
            <img src=\"img/news_home_3.jpg\" alt=\"\" />
            <figcaption><strong>28</strong>Dec</figcaption>
          </figure>
          <ul>
            <li>Luca Robinson</li>
            <li>20.11.2017</li>
          </ul>
          <h4>Elitr mandamus cu has</h4>
          <p>
            Cu eum alia elit, usu in eius appareat, deleniti sapientem
            honestatis eos ex. In ius esse ullum vidisse....
          </p>
        </a>
      </div>
      <!-- /box_news -->
      <div class=\"col-lg-6\">
        <a class=\"box_news\" href=\"blog.html\">
          <figure>
            <img src=\"img/news_home_4.jpg\" alt=\"\" />
            <figcaption><strong>28</strong>Dec</figcaption>
          </figure>
          <ul>
            <li>Paula Rodrigez</li>
            <li>20.11.2017</li>
          </ul>
          <h4>Id est adhuc ignota delenit</h4>
          <p>
            Cu eum alia elit, usu in eius appareat, deleniti sapientem
            honestatis eos ex. In ius esse ullum vidisse....
          </p>
        </a>
      </div>
  
    </div>
 
    <p class=\"btn_home_align\">
      <a href=\"blog.html\" class=\"btn_1 rounded\">View all news</a>
    </p>
  </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/index.html.twig";
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
        return array (  1234 => 1132,  1209 => 1110,  642 => 546,  621 => 528,  605 => 515,  584 => 497,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil | Eco tourism{% endblock %}

{% block body %}

  <div id=\"carousel-home\">
    <div class=\"owl-carousel owl-theme\">
      <div
        class=\"owl-slide cover\"
        style=\"background-image: url({{asset('Frontend/img/slides/slide_home_3.jpg')}})\"
      >
        <div
          class=\"opacity-mask d-flex align-items-center\"
          data-opacity-mask=\"rgba(0, 0, 0, 0.5)\"
        >
          <div class=\"container\">
            <div class=\"row justify-content-center justify-content-md-start\">
              <div class=\"col-lg-12 static\">
                <div class=\"slide-text text-center white\">
                  <h2 class=\"owl-slide-animated owl-slide-title\">
                    Explorer nos destinations<br />
                  </h2>
                 <!-- search tours form-->
                                        <div class=\"search-tours-form\">
                                            <div class=\"container-boot\">
                                                <div class=\"search-tours-wrap\">
                                                    <div class=\"search-tours-tabs\">
                                                        <div class=\"search-tabs-wrap\">
                                                            <div data-tours-cat=\"tab-cat-1\"
                                                                class=\"tours-tab-btn active\"><span>
                                                                    Aventure</span><i
                                                                    class=\"tours-tab-icon flaticon-suntour-world\"></i>
                                                            </div>
                                                            <div data-tours-cat=\"tab-cat-2\" class=\"tours-tab-btn\">
                                                                <span>Vacances</span><i
                                                                    class=\"tours-tab-icon flaticon-suntour-fireworks\"></i>
                                                            </div>
                                                            <div data-tours-cat=\"tab-cat-3\" class=\"tours-tab-btn\">
                                                                <span>Hôtels</span><i
                                                                    class=\"tours-tab-icon flaticon-suntour-hotel\"></i>
                                                            </div>
                                                            <div data-tours-cat=\"tab-cat-4\" class=\"tours-tab-btn\">
                                                                <span>Croisières</span><i
                                                                    class=\"tours-tab-icon flaticon-suntour-ship\"></i>
                                                            </div>
                                                            <div data-tours-cat=\"tab-cat-5\" class=\"tours-tab-btn\">
                                                                <span>Vols</span><i
                                                                    class=\"tours-tab-icon flaticon-suntour-airplane\"></i>
                                                            </div>
                                                            <div data-tours-cat=\"tab-cat-6\" class=\"tours-tab-btn\">
                                                                <span>Voitures</span><i
                                                                    class=\"tours-tab-icon flaticon-suntour-car\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"search-tours-content\">
                                                        <div data-tours-cat=\"tab-cat-1\" class=\"tours-container active\">
                                                            <div class=\"tours-box\">
                                                                <div class=\"tours-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\" placeholder=\"Destination\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Date de départ\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Date de retour\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"selection-box divider-skew\"><i
                                                                            class=\"flaticon-suntour-adult box-icon\"></i>
                                                                        <select>
                                                                            <option>Adulte</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"selection-box\"><i
                                                                            class=\"flaticon-suntour-children box-icon\"></i>
                                                                        <select>
                                                                            <option>Enfant</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"button-search\">Rechercher</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div data-tours-cat=\"tab-cat-2\" style=\"display: none;\"
                                                            class=\"tours-container\">
                                                            <div class=\"holidays-box\">
                                                                <div class=\"holidays-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\" placeholder=\"Destination\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Date de départ\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Date de retour\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"selection-box divider-skew\"><i
                                                                            class=\"flaticon-suntour-adult box-icon\"></i>
                                                                        <select>
                                                                            <option>Adulte</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"selection-box\"><i
                                                                            class=\"flaticon-suntour-children box-icon\"></i>
                                                                        <select>
                                                                            <option>Enfant</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"button-search\">Rechercher</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div data-tours-cat=\"tab-cat-3\" style=\"display: none;\"
                                                            class=\"tours-container\">
                                                            <div class=\"hotels-box\">
                                                                <div class=\"hotels-search\">
                                                                    <form method=\"post\" class=\"form search\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Destination, nom de l'hôtel, aéroport, gare, lieu emblématique ou adresse\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class=\"hotels-select\">
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Arrivée\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Départ\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"selection-box divider-skew\"><i
                                                                            class=\"flaticon-suntour-bed box-icon\"></i>
                                                                        <select>
                                                                            <option>Chambres</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"selection-box divider-skew\"><i
                                                                            class=\"flaticon-suntour-adult box-icon\"></i>
                                                                        <select>
                                                                            <option>Adultes</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"selection-box\"><i
                                                                            class=\"flaticon-suntour-children box-icon\"></i>
                                                                        <select>
                                                                            <option>Enfants</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"button-search\">Rechercher</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div data-tours-cat=\"tab-cat-4\" style=\"display: none;\"
                                                            class=\"tours-container\">
                                                            <div class=\"cruise-box\">
                                                                <div class=\"cruise-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\" placeholder=\"Destination\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <div class=\"tours-calendar\">
                                                                        <input placeholder=\"Date de départ\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"button-search\">Rechercher</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div data-tours-cat=\"tab-cat-5\" style=\"display: none;\"
                                                            class=\"tours-container\">
                                                            <div class=\"flights-box\">
                                                                <div class=\"flights-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Départ (ville ou aéroport)\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <form method=\"post\" class=\"form search\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Destination (ville ou aéroport)\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class=\"flights-select clearfix\">
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Départ\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Retour\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\"><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"selection-box divider-skew\"><i
                                                                            class=\"flaticon-suntour-adult box-icon\"></i>
                                                                        <select>
                                                                            <option>Adultes</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"selection-box\"><i
                                                                            class=\"flaticon-suntour-children box-icon\"></i>
                                                                        <select>
                                                                            <option>Enfants</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"flights-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Compagnie aérienne préférée\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <form method=\"post\" class=\"form search\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Classe préférée\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <div class=\"button-search\">Rechercher</div>
                                                                </div>
                                                                <div class=\"flights-advance\"><span>Options
                                                                        avancées</span>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox8\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox8\">Sans escale</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox9\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox9\">Vol
                                                                                remboursable</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"buttons-wrap\"> <a href=\"#\"
                                                                            class=\"tour-button\">Aller-retour </a><a
                                                                            href=\"#\" class=\"tour-button\">Aller simple
                                                                        </a><a href=\"#\" class=\"tour-button\">Destinations
                                                                            multiples </a></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div data-tours-cat=\"tab-cat-6\" style=\"display: none;\"
                                                            class=\"tours-container\">
                                                            <div class=\"cars-box\">
                                                                <div class=\"cars-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Prise en charge (Ville, aéroport, adresse)\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <form method=\"post\" class=\"form search\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\" placeholder=\"Dépôt\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class=\"cars-calendar clearfix\">
                                                                    <div class=\"tours-calendar divider-skew\">
                                                                        <input placeholder=\"Date de prise en charge\"
                                                                            type=\"text\" onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\">
                                                                        <div class=\"selection-box angle\">
                                                                            <select>
                                                                                <option>10h30</option>
                                                                                <option>11h30</option>
                                                                                <option>12h30</option>
                                                                                <option>13h30</option>
                                                                            </select>
                                                                        </div><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                    <div class=\"tours-calendar\">
                                                                        <input placeholder=\"Date de dépôt\" type=\"text\"
                                                                            onfocus=\"(this.type='date')\"
                                                                            onblur=\"(this.type='text')\"
                                                                            class=\"calendar-default textbox-n\">
                                                                        <div class=\"selection-box angle\">
                                                                            <select>
                                                                                <option>10h30</option>
                                                                                <option>11h30</option>
                                                                                <option>12h30</option>
                                                                                <option>13h30</option>
                                                                            </select>
                                                                        </div><i
                                                                            class=\"flaticon-suntour-calendar calendar-icon\"></i>
                                                                    </div>
                                                                </div>
                                                                <div class=\"cars-search\">
                                                                    <form method=\"post\"
                                                                        class=\"form search divider-skew\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Type de voiture\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <form method=\"post\" class=\"form search\">
                                                                        <div class=\"search-wrap\">
                                                                            <input type=\"text\"
                                                                                placeholder=\"Compagnie de location de voiture\"
                                                                                class=\"form-control search-field\"><i
                                                                                class=\"flaticon-suntour-map search-icon\"></i>
                                                                        </div>
                                                                    </form>
                                                                    <div class=\"button-search\">Rechercher</div>
                                                                </div>
                                                                <div class=\"cars-advance\"><span>Options avancées</span>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox1\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox1\">Siège pour
                                                                                nourrisson</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox2\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox2\">Porte-skis</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox3\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox3\">Commande à
                                                                                gauche</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox4\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox4\">Siège pour
                                                                                tout-petit</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox5\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox5\">Chaînes à
                                                                                neige</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox6\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox6\">Commande à
                                                                                droite</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"checkbox-wrap\">
                                                                        <div class=\"checkbox\">
                                                                            <input id=\"checkbox7\" type=\"checkbox\"
                                                                                value=\"none\" name=\"check\">
                                                                            <label for=\"checkbox7\">Système de
                                                                                navigation</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ! search tours form-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div
        class=\"owl-slide cover\"
        style=\"background-image: url({{asset('Frontend/img/slides/slide_home_2.jpg')}})\"
      >
        <div
          class=\"opacity-mask d-flex align-items-center\"
          data-opacity-mask=\"rgba(0, 0, 0, 0.6)\"
        >
          <div class=\"container\">
            <div class=\"row justify-content-center justify-content-md-end\">
              <div class=\"col-lg-6 static\">
                <div class=\"slide-text text-end white\">
                  <h2 class=\"owl-slide-animated owl-slide-title\">
                    Discover<br />Vatican Museum
                  </h2>
                  <p class=\"owl-slide-animated owl-slide-subtitle\">
                    Discover hidden wonders on trips curated by Citytours Tours
                    Experts
                  </p>
                  <div class=\"owl-slide-animated owl-slide-cta\">
                    <a class=\"btn_1\" href=\"{{ path('app_index') }}\" role=\"button\"
                      >lire plus</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <div
        class=\"owl-slide cover\"
        style=\"background-image: url({{asset('Frontend/img/slides/slide_home_1.jpg')}})\"
      >
        <div
          class=\"opacity-mask d-flex align-items-center\"
          data-opacity-mask=\"rgba(0, 0, 0, 0.5)\"
        >
          <div class=\"container\">
            <div class=\"row justify-content-center justify-content-md-start\">
              <div class=\"col-lg-6 static\">
                <div class=\"slide-text white\">
                  <h2 class=\"owl-slide-animated owl-slide-title\">
                    Love Paris<br />Arch de Triomphe
                  </h2>
                  <p class=\"owl-slide-animated owl-slide-subtitle\">
                    Discover hidden wonders on trips curated by Citytours Tours
                    Experts
                  </p>
                  <div class=\"owl-slide-animated owl-slide-cta\">
                    <a class=\"btn_1\" href=\"{{ path('app_index') }}\" role=\"button\"
                      >lire plus</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <div id=\"icon_drag_mobile\"></div>
  </div>
  

  <div class=\"white_bg\">
    <div class=\"container margin_60\">
      <div class=\"row small-gutters categories_grid\">
        <div class=\"col-sm-12 col-md-6\">
          <a href=\"all_tours_list.html\">
            <img src=\"img/img_cat_home_1.jpg\" alt=\"\" class=\"img-fluid\" />
            <div class=\"wrapper\">
              <h2>Special Offers</h2>
              <p>1150 Locations</p>
            </div>
          </a>
        </div>
        <div class=\"col-sm-12 col-md-6\">
          <div class=\"row small-gutters mt-md-0 mt-sm-2\">
            <div class=\"col-sm-6\">
              <a href=\"all_tours_list.html\">
                <img src=\"img/img_cat_home_2.jpg\" alt=\"\" class=\"img-fluid\" />
                <div class=\"wrapper\">
                  <h2>Tours</h2>
                  <p>800 Locations</p>
                </div>
              </a>
            </div>
            <div class=\"col-sm-6\">
              <a href=\"all_hotels_list.html\">
                <img src=\"img/img_cat_home_3.jpg\" alt=\"\" class=\"img-fluid\" />
                <div class=\"wrapper\">
                  <h2>Hotels</h2>
                  <p>650 Locations</p>
                </div>
              </a>
            </div>
            <div class=\"col-sm-12 mt-sm-2\">
              <a href=\"all_restaurants_list.html\">
                <img src=\"img/img_cat_home_4.jpg\" alt=\"\" class=\"img-fluid\" />
                <div class=\"wrapper\">
                  <h2>Restaurants</h2>
                  <p>1132 Locations</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
     
    </div>
   
  </div>


  <div class=\"container margin_60\">
    <div class=\"main_title\">
      <h2>Paris <span>Top</span> Tours</h2>
      <p>
        Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur
        consequat.
      </p>
    </div>

    <div class=\"owl-carousel owl-theme list_carousel add_bottom_30\">
      <div class=\"item\">
        <div class=\"tour_container\">
          <div class=\"ribbon_3 popular\"><span>Popular</span></div>
          <div class=\"img_container\">
            <a href=\"single_tour.html\">
              <img
                src=\"img/tour_box_1.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"short_info\">
                <i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span
                  class=\"price\"
                  ><sup>\$</sup>39</span
                >
              </div>
            </a>
          </div>
          <div class=\"tour_title\">
            <h3><strong>Arc Triomphe</strong> tour</h3>
            <div class=\"rating\">
              <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile\"></i><small>(75)</small>
            </div>
            
            <div class=\"wishlist\">
              <a
                class=\"tooltip_flip tooltip-effect-1\"
                href=\"javascript:void(0);\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
         
          </div>
        </div>
     
      </div>
   
      <div class=\"item\">
        <div class=\"tour_container\">
          <div class=\"ribbon_3 popular\"><span>Popular</span></div>
          <div class=\"img_container\">
            <a href=\"single_tour.html\">
              <img
                src=\"img/tour_box_2.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"short_info\">
                <i class=\"icon_set_1_icon-43\"></i>Churches<span class=\"price\"
                  ><sup>\$</sup>45</span
                >
              </div>
            </a>
          </div>
          <div class=\"tour_title\">
            <h3><strong>Notredame</strong> tour</h3>
            <div class=\"rating\">
              <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile\"></i><small>(75)</small>
            </div>
          
            <div class=\"wishlist\">
              <a
                class=\"tooltip_flip tooltip-effect-1\"
                href=\"javascript:void(0);\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box tour -->
      </div>
      <!-- /item -->
      <div class=\"item\">
        <div class=\"tour_container\">
          <div class=\"ribbon_3 popular\"><span>Popular</span></div>
          <div class=\"img_container\">
            <a href=\"single_tour.html\">
              <img
                src=\"img/tour_box_3.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"badge_save\">Save<strong>30%</strong></div>
              <div class=\"short_info\">
                <i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span
                  class=\"price\"
                  ><sup>\$</sup>48</span
                >
              </div>
            </a>
          </div>
          <div class=\"tour_title\">
            <h3><strong>Versailles</strong> tour</h3>
            <div class=\"rating\">
              <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile\"></i><small>(75)</small>
            </div>
            <!-- end rating -->
            <div class=\"wishlist\">
              <a
                class=\"tooltip_flip tooltip-effect-1\"
                href=\"javascript:void(0);\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box tour -->
      </div>
      <!-- /item -->
      <div class=\"item\">
        <div class=\"tour_container\">
          <div class=\"ribbon_3\"><span>Top rated</span></div>
          <div class=\"img_container\">
            <a href=\"single_tour.html\">
              <img
                src=\"img/tour_box_4.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"badge_save\">Save<strong>20%</strong></div>
              <div class=\"short_info\">
                <i class=\"icon_set_1_icon-30\"></i>Walking tour<span
                  class=\"price\"
                  ><sup>\$</sup>36</span
                >
              </div>
            </a>
          </div>
          <div class=\"tour_title\">
            <h3><strong>Pompidue</strong> tour</h3>
            <div class=\"rating\">
              <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile\"></i><small>(75)</small>
            </div>
            <!-- end rating -->
            <div class=\"wishlist\">
              <a
                class=\"tooltip_flip tooltip-effect-1\"
                href=\"javascript:void(0);\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box tour -->
      </div>
      <!-- /item -->
      <div class=\"item\">
        <div class=\"tour_container\">
          <div class=\"ribbon_3\"><span>Top rated</span></div>
          <div class=\"img_container\">
            <a href=\"single_tour.html\">
              <img
                src=\"img/tour_box_14.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"short_info\">
                <i class=\"icon_set_1_icon-28\"></i>Skyline tours<span
                  class=\"price\"
                  ><sup>\$</sup>42</span
                >
              </div>
            </a>
          </div>
          <div class=\"tour_title\">
            <h3><strong>Tour Eiffel</strong> tour</h3>
            <div class=\"rating\">
              <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i
              ><i class=\"icon-smile\"></i><small>(75)</small>
            </div>
          
            <div class=\"wishlist\">
              <a
                class=\"tooltip_flip tooltip-effect-1\"
                href=\"javascript:void(0);\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
        
          </div>
        </div>
      
      </div>
    
    </div>
   

    <p class=\"text-center add_bottom_30\">
      <a href=\"all_tours_list.html\" class=\"btn_1\">View all Tours</a>
    </p>

    <hr class=\"mt-5 mb-5\" />

    <div class=\"main_title\">
      <h2>Paris <span>Top</span> Hotels</h2>
      <p>
        Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur
        consequat.
      </p>
    </div>

    <div class=\"owl-carousel owl-theme list_carousel add_bottom_30\">
      <div class=\"item\">
        <div class=\"hotel_container\">
          <div class=\"ribbon_3 popular\"><span>Popular</span></div>
          <div class=\"img_container\">
            <a href=\"single_hotel.html\">
              <img
                src=\"img/hotel_1.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"score\"><span>7.5</span>Good</div>
              <div class=\"short_info hotel\">
                <span class=\"price\"><sup>\$</sup>59</span>
              </div>
            </a>
          </div>
          <div class=\"hotel_title\">
            <h3><strong>Park Hyatt</strong> Hotel</h3>
            <div class=\"rating\">
              <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star-empty\"></i>
            </div>
        
            <div class=\"wishlist\">
              <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
           
          </div>
        </div>
       
      </div>
     
      <div class=\"item\">
        <div class=\"hotel_container\">
          <div class=\"ribbon_3 popular\"><span>Popular</span></div>
          <div class=\"img_container\">
            <a href=\"single_hotel.html\">
              <img
                src=\"img/hotel_2.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"score\"><span>9.0</span>Superb</div>
              <div class=\"short_info hotel\">
                <span class=\"price\"><sup>\$</sup>45</span>
              </div>
            </a>
          </div>
          <div class=\"hotel_title\">
            <h3><strong>Mariott</strong> Hotel</h3>
            <div class=\"rating\">
              <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star-empty\"></i>
            </div>
            <!-- end rating -->
            <div class=\"wishlist\">
              <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box -->
      </div>
      <!-- /item -->
      <div class=\"item\">
        <div class=\"hotel_container\">
          <div class=\"ribbon_3\"><span>Top rated</span></div>
          <div class=\"img_container\">
            <a href=\"single_hotel.html\">
              <img
                src=\"img/hotel_3.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"score\"><span>9.5</span>Superb</div>
              <div class=\"short_info hotel\">
                <span class=\"price\"><sup>\$</sup>39</span>
              </div>
            </a>
          </div>
          <div class=\"hotel_title\">
            <h3><strong>Lumiere</strong> Hotel</h3>
            <div class=\"rating\">
              <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star-empty\"></i>
            </div>
            <!-- end rating -->
            <div class=\"wishlist\">
              <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box -->
      </div>
      <!-- /item -->
      <div class=\"item\">
        <div class=\"hotel_container\">
          <div class=\"ribbon_3\"><span>Top rated</span></div>
          <div class=\"img_container\">
            <a href=\"single_hotel.html\">
              <img
                src=\"img/hotel_4.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"score\"><span>7.5</span>Good</div>
              <div class=\"short_info hotel\">
                <span class=\"price\"><sup>\$</sup>45</span>
              </div>
            </a>
          </div>
          <div class=\"hotel_title\">
            <h3><strong>Novelle</strong> Hotel</h3>
            <div class=\"rating\">
              <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star-empty\"></i>
            </div>
            <!-- end rating -->
            <div class=\"wishlist\">
              <a
                class=\"tooltip_flip tooltip-effect-1\"
                href=\"javascript:void(0);\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box -->
      </div>
      <!-- /item -->
      <div class=\"item\">
        <div class=\"hotel_container\">
          <div class=\"ribbon_3\"><span>Top rated</span></div>
          <div class=\"img_container\">
            <a href=\"single_hotel.html\">
              <img
                src=\"img/hotel_5.jpg\"
                width=\"800\"
                height=\"533\"
                class=\"img-fluid\"
                alt=\"image\"
              />
              <div class=\"score\"><span>8.0</span>Good</div>
              <div class=\"short_info hotel\">
                <span class=\"price\"><sup>\$</sup>39</span>
              </div>
            </a>
          </div>
          <div class=\"hotel_title\">
            <h3><strong>Louvre</strong> Hotel</h3>
            <div class=\"rating\">
              <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i
              ><i class=\"icon-star-empty\"></i>
            </div>
            <!-- end rating -->
            <div class=\"wishlist\">
              <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                >+<span class=\"tooltip-content-flip\"
                  ><span class=\"tooltip-back\">Add to wishlist</span></span
                ></a
              >
            </div>
            <!-- End wish list-->
          </div>
        </div>
        <!-- End box -->
      </div>
      <!-- /item -->
    </div>
    <!-- /carousel -->

    <p class=\"text-center nopadding\">
      <a href=\"all_hotels_list.html\" class=\"btn_1\">View all Hotels</a>
    </p>
  </div>
  <!-- End container -->

  <div class=\"white_bg\">
    <div class=\"container margin_60\">
      <div class=\"main_title\">
        <h2>Plan <span>Your Tour</span> Easly</h2>
        <p>
          Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur
          consequat.
        </p>
      </div>
      <div class=\"row feature_home_2\">
        <div class=\"col-md-4 text-center\">
          <img src=\"img/adventure_icon_1.svg\" alt=\"\" width=\"75\" height=\"75\" />
          <h3>Itineraries studied in detail</h3>
          <p>
            Suscipit invenire petentium per in. Ne magna assueverit vel. Vix
            movet perfecto facilisis in, ius ad maiorum corrumpit, his esse
            docendi in.
          </p>
        </div>
        <div class=\"col-md-4 text-center\">
          <img src=\"img/adventure_icon_2.svg\" alt=\"\" width=\"75\" height=\"75\" />
          <h3>Room and food included</h3>
          <p>
            Cum accusam voluptatibus at, et eum fuisset sententiae. Postulant
            tractatos ius an, in vis fabulas percipitur, est audiam phaedrum
            electram ex.
          </p>
        </div>
        <div class=\"col-md-4 text-center\">
          <img src=\"img/adventure_icon_3.svg\" alt=\"\" width=\"75\" height=\"75\" />
          <h3>Everything organized</h3>
          <p>
            Integre vivendo percipitur eam in, graece suavitate cu vel. Per
            inani persius accumsan no. An case duis option est, pro ad fastidii
            contentiones.
          </p>
        </div>
      </div>

      <div class=\"banner_2\">
        <div
          class=\"wrapper d-flex align-items-center opacity-mask\"
          data-opacity-mask=\"rgba(0, 0, 0, 0.3)\"
          style=\"background-color: rgba(0, 0, 0, 0.3)\"
        >
          <div>
            <h3>Your Perfect<br />Tour Experience</h3>
            <p>Activities and accommodations</p>
            <a href=\"{{ path('app_index') }}\" class=\"btn_1\">lire plus</a>
          </div>
        </div>
        <!-- /wrapper -->
      </div>
      <!-- /banner_2 -->
    </div>
    <!-- End container -->
  </div>
  <!-- End white_bg -->

  <div class=\"container margin_60\">
    <div class=\"main_title\">
      <h2>Lates <span>Blog</span> News</h2>
      <p>
        Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur
        consequat.
      </p>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-6\">
        <a class=\"box_news\" href=\"{{ path('app_index') }}\">
          <figure>
            <img src=\"img/news_home_1.jpg\" alt=\"\" />
            <figcaption><strong>28</strong>Dec</figcaption>
          </figure>
          <ul>
            <li>Mark Twain</li>
            <li>20.11.2017</li>
          </ul>
          <h4>Pri oportere scribentur eu</h4>
          <p>
            Cu eum alia elit, usu in eius appareat, deleniti sapientem
            honestatis eos ex. In ius esse ullum vidisse....
          </p>
        </a>
      </div>
      <!-- /box_news -->
      <div class=\"col-lg-6\">
        <a class=\"box_news\" href=\"blog.html\">
          <figure>
            <img src=\"img/news_home_2.jpg\" alt=\"\" />
            <figcaption><strong>28</strong>Dec</figcaption>
          </figure>
          <ul>
            <li>Jhon Doe</li>
            <li>20.11.2017</li>
          </ul>
          <h4>Duo eius postea suscipit ad</h4>
          <p>
            Cu eum alia elit, usu in eius appareat, deleniti sapientem
            honestatis eos ex. In ius esse ullum vidisse....
          </p>
        </a>
      </div>
      <!-- /box_news -->
      <div class=\"col-lg-6\">
        <a class=\"box_news\" href=\"blog.html\">
          <figure>
            <img src=\"img/news_home_3.jpg\" alt=\"\" />
            <figcaption><strong>28</strong>Dec</figcaption>
          </figure>
          <ul>
            <li>Luca Robinson</li>
            <li>20.11.2017</li>
          </ul>
          <h4>Elitr mandamus cu has</h4>
          <p>
            Cu eum alia elit, usu in eius appareat, deleniti sapientem
            honestatis eos ex. In ius esse ullum vidisse....
          </p>
        </a>
      </div>
      <!-- /box_news -->
      <div class=\"col-lg-6\">
        <a class=\"box_news\" href=\"blog.html\">
          <figure>
            <img src=\"img/news_home_4.jpg\" alt=\"\" />
            <figcaption><strong>28</strong>Dec</figcaption>
          </figure>
          <ul>
            <li>Paula Rodrigez</li>
            <li>20.11.2017</li>
          </ul>
          <h4>Id est adhuc ignota delenit</h4>
          <p>
            Cu eum alia elit, usu in eius appareat, deleniti sapientem
            honestatis eos ex. In ius esse ullum vidisse....
          </p>
        </a>
      </div>
  
    </div>
 
    <p class=\"btn_home_align\">
      <a href=\"blog.html\" class=\"btn_1 rounded\">View all news</a>
    </p>
  </div>


{% endblock %}
", "client/index.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\index.html.twig");
    }
}
