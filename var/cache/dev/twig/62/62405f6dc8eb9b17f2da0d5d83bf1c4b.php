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

/* client/destinations.html.twig */
class __TwigTemplate_f54fb3ff862f3a1865d4b47421beca91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/destinations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/destinations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/destinations.html.twig", 1);
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

        echo "Destinations | Écotourisme";
        
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
        echo "<section
  class=\"parallax-window\"
  data-parallax=\"scroll\"
  data-image-src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/img_cat_home_4.jpg"), "html", null, true);
        echo "\"
  data-natural-width=\"1400\"
  data-natural-height=\"470\"
>
  <div
    class=\"parallax-content-1 opacity-mask\"
    data-opacity-mask=\"rgba(0, 0, 0, 0.6)\"
  >
    <div class=\"animated fadeInDown\">
      <h1>Découvrez l'Écotourisme</h1>
      <p>Explorez des destinations uniques, où la nature rencontre l'aventure, et où chaque voyage est une opportunité de préserver notre planète.</p>

    </div>
  </div>
</section>
<!-- Fin section -->

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
  <!-- Position -->

  <div class=\"collapse\" id=\"collapseMap\">
    <div id=\"map\" class=\"map\"></div>
  </div>
  <!-- Fin carte -->

  <div class=\"container margin_60\">
    <div class=\"row\">
      <aside class=\"col-lg-3\">
        <p>
          <a
            class=\"btn_map\"
            data-bs-toggle=\"collapse\"
            href=\"#collapseMap\"
            aria-expanded=\"false\"
            aria-controls=\"collapseMap\"
            data-text-swap=\"Masquer la carte\"
            data-text-original=\"Voir sur la carte\"
            >Voir sur la carte</a
          >
        </p>

        <div class=\"box_style_cat\">
          <ul id=\"cat_nav\">
            <li>
              <a href=\"#\" id=\"active\"
                ><i class=\"icon_set_1_icon-51\"></i>Toutes les visites
                <span>(141)</span></a
              >
            </li>
            <li>
              <a href=\"#\"
                ><i class=\"icon_set_1_icon-3\"></i>Visites de la ville
                <span>(20)</span></a
              >
            </li>
            <li>
              <a href=\"#\"
                ><i class=\"icon_set_1_icon-4\"></i>Visites de musées
                <span>(16)</span></a
              >
            </li>
            <li>
              <a href=\"#\"
                ><i class=\"icon_set_1_icon-44\"></i>Bâtiments historiques
                <span>(12)</span></a
              >
            </li>
            <li>
              <a href=\"#\"
                ><i class=\"icon_set_1_icon-37\"></i>Visites à pied
                <span>(11)</span></a
              >
            </li>
            <li>
              <a href=\"#\"
                ><i class=\"icon_set_1_icon-14\"></i>Manger & Boire
                <span>(20)</span></a
              >
            </li>
          
            <li>
              <a href=\"#\"
                ><i class=\"icon_set_1_icon-28\"></i>Visites panoramiques
                <span>(11)</span></a
              >
            </li>
          </ul>
        </div>

        <div id=\"filters_col\">
          <a
            data-bs-toggle=\"collapse\"
            href=\"#collapseFilters\"
            aria-expanded=\"false\"
            aria-controls=\"collapseFilters\"
            id=\"filters_col_bt\"
            ><i class=\"icon_set_1_icon-65\"></i>Filtres</a
          >
          <div class=\"collapse show\" id=\"collapseFilters\">
            <div class=\"filter_type\">
              <h6>Prix</h6>
              <input type=\"text\" id=\"range\" name=\"range\" value=\"\" />
            </div>
            <div class=\"filter_type\">
              <h6>Évaluation</h6>
              <ul>
                <li>
                  <label class=\"container_check\">
                    <span class=\"rating\">
                      <i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i>
                    </span>
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    <span class=\"rating\">
                      <i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile\"></i>
                    </span>
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    <span class=\"rating\">
                      <i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                      ><i class=\"icon-smile\"></i>
                    </span>
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    <span class=\"rating\">
                      <i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                      ><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
                    </span>
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    <span class=\"rating\">
                      <i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                      ><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i
                      ><i class=\"icon-smile\"></i>
                    </span>
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
              </ul>
            </div>
            <div class=\"filter_type\">
              <h6>Équipements</h6>
              <ul class=\"mb-0\">
                <li>
                  <label class=\"container_check\">
                    Animaux autorisés
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    Groupes autorisés
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    Guides touristiques
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    Accessible aux personnes handicapées
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
              </ul>
            </div>
          </div>
          <!-- Fin collapse -->
        </div>
        <!-- Fin filtres col -->
        <div class=\"box_style_2 d-none d-sm-block\">
          <i class=\"icon_set_1_icon-57\"></i>
          <h4>Besoin d'<span>Aide?</span></h4>
          <a href=\"tel://004542344599\" class=\"phone\">+45 423 445 99</a>
          <small>Du lundi au vendredi de 9h00 à 19h30</small>
        </div>
      </aside>
      <!-- Fin aside -->

      <div class=\"col-lg-9\">
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
              <a href=\"#\" class=\"bt_filters\"><i class=\"icon-th\"></i></a>
              <a href=\"all_tours_list.html\" class=\"bt_filters\"
                ><i class=\"icon-list\"></i
              ></a>
            </div>
          </div>
        </div>
        <!-- Fin outils -->

        <div class=\"row\">
          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.1s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3 popular\"><span>Populaire</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/tour_box_1.jpg"), "html", null, true);
        echo "\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-44\"></i>Bâtiments historiques<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite de l'Arc de Triomphe</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->

          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.2s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3 popular\"><span>Populaire</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/tour_box_2.jpg"), "html", null, true);
        echo "\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-43\"></i>Églises<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite de Notre-Dame</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->
        </div>
        <!-- Fin ligne -->

        <div class=\"row\">
          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.3s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3 popular\"><span>Populaire</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/tour_box_3.jpg"), "html", null, true);
        echo "\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-44\"></i>Bâtiments historiques<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite de Versailles</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->

          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.4s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3 popular\"><span>Populaire</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/tour_box_4.jpg"), "html", null, true);
        echo "\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-30\"></i>Visite à pied<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite de Pompidou</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a
                    class=\"tooltip_flip tooltip-effect-1\"
                    href=\"javascript:void(0);\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->
        </div>
        <!-- Fin ligne -->

        <div class=\"row\">
          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.5s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3 popular\"><span>Populaire</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/tour_box_14.jpg"), "html", null, true);
        echo "\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-28\"></i>Visites des gratte-ciels<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite de la Tour Eiffel</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a
                    class=\"tooltip_flip tooltip-effect-1\"
                    href=\"javascript:void(0);\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->

          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.6s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3\"><span>Les mieux notés</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/tour_box_5.jpg"), "html", null, true);
        echo "\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-44\"></i>Bâtiments historiques<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite du Panthéon</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a
                    class=\"tooltip_flip tooltip-effect-1\"
                    href=\"javascript:void(0);\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->
        </div>
        <!-- Fin ligne -->

        <div class=\"row\">
          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.7s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3\"><span>Les mieux notés</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/tour_box_6.jpg"), "html", null, true);
        echo "\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-30\"></i>Visite à pied<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite du Louvre</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a
                    class=\"tooltip_flip tooltip-effect-1\"
                    href=\"javascript:void(0);\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->

          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.8s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3\"><span>Les mieux notés</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/tour_box_7.jpg"), "html", null, true);
        echo "\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-28\"></i>Visites des gratte-ciels<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite de Montmartre</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a
                    class=\"tooltip_flip tooltip-effect-1\"
                    href=\"javascript:void(0);\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->
        </div>
        <!-- Fin ligne -->
      </div>
      <!-- Fin col-lg-9 -->
    </div>
    <!-- Fin row -->
  </div>
  <!-- Fin container -->
</main>
<!-- Fin main -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/destinations.html.twig";
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
        return array (  694 => 586,  645 => 540,  593 => 491,  544 => 445,  492 => 396,  445 => 352,  395 => 305,  348 => 261,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Destinations | Écotourisme{% endblock %}

{% block body %}
<section
  class=\"parallax-window\"
  data-parallax=\"scroll\"
  data-image-src=\"{{asset('Frontend/img/img_cat_home_4.jpg')}}\"
  data-natural-width=\"1400\"
  data-natural-height=\"470\"
>
  <div
    class=\"parallax-content-1 opacity-mask\"
    data-opacity-mask=\"rgba(0, 0, 0, 0.6)\"
  >
    <div class=\"animated fadeInDown\">
      <h1>Découvrez l'Écotourisme</h1>
      <p>Explorez des destinations uniques, où la nature rencontre l'aventure, et où chaque voyage est une opportunité de préserver notre planète.</p>

    </div>
  </div>
</section>
<!-- Fin section -->

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
  <!-- Position -->

  <div class=\"collapse\" id=\"collapseMap\">
    <div id=\"map\" class=\"map\"></div>
  </div>
  <!-- Fin carte -->

  <div class=\"container margin_60\">
    <div class=\"row\">
      <aside class=\"col-lg-3\">
        <p>
          <a
            class=\"btn_map\"
            data-bs-toggle=\"collapse\"
            href=\"#collapseMap\"
            aria-expanded=\"false\"
            aria-controls=\"collapseMap\"
            data-text-swap=\"Masquer la carte\"
            data-text-original=\"Voir sur la carte\"
            >Voir sur la carte</a
          >
        </p>

        <div class=\"box_style_cat\">
          <ul id=\"cat_nav\">
            <li>
              <a href=\"#\" id=\"active\"
                ><i class=\"icon_set_1_icon-51\"></i>Toutes les visites
                <span>(141)</span></a
              >
            </li>
            <li>
              <a href=\"#\"
                ><i class=\"icon_set_1_icon-3\"></i>Visites de la ville
                <span>(20)</span></a
              >
            </li>
            <li>
              <a href=\"#\"
                ><i class=\"icon_set_1_icon-4\"></i>Visites de musées
                <span>(16)</span></a
              >
            </li>
            <li>
              <a href=\"#\"
                ><i class=\"icon_set_1_icon-44\"></i>Bâtiments historiques
                <span>(12)</span></a
              >
            </li>
            <li>
              <a href=\"#\"
                ><i class=\"icon_set_1_icon-37\"></i>Visites à pied
                <span>(11)</span></a
              >
            </li>
            <li>
              <a href=\"#\"
                ><i class=\"icon_set_1_icon-14\"></i>Manger & Boire
                <span>(20)</span></a
              >
            </li>
          
            <li>
              <a href=\"#\"
                ><i class=\"icon_set_1_icon-28\"></i>Visites panoramiques
                <span>(11)</span></a
              >
            </li>
          </ul>
        </div>

        <div id=\"filters_col\">
          <a
            data-bs-toggle=\"collapse\"
            href=\"#collapseFilters\"
            aria-expanded=\"false\"
            aria-controls=\"collapseFilters\"
            id=\"filters_col_bt\"
            ><i class=\"icon_set_1_icon-65\"></i>Filtres</a
          >
          <div class=\"collapse show\" id=\"collapseFilters\">
            <div class=\"filter_type\">
              <h6>Prix</h6>
              <input type=\"text\" id=\"range\" name=\"range\" value=\"\" />
            </div>
            <div class=\"filter_type\">
              <h6>Évaluation</h6>
              <ul>
                <li>
                  <label class=\"container_check\">
                    <span class=\"rating\">
                      <i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i>
                    </span>
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    <span class=\"rating\">
                      <i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile\"></i>
                    </span>
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    <span class=\"rating\">
                      <i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                      ><i class=\"icon-smile\"></i>
                    </span>
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    <span class=\"rating\">
                      <i class=\"icon-smile voted\"></i
                      ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                      ><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
                    </span>
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    <span class=\"rating\">
                      <i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                      ><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i
                      ><i class=\"icon-smile\"></i>
                    </span>
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
              </ul>
            </div>
            <div class=\"filter_type\">
              <h6>Équipements</h6>
              <ul class=\"mb-0\">
                <li>
                  <label class=\"container_check\">
                    Animaux autorisés
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    Groupes autorisés
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    Guides touristiques
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
                <li>
                  <label class=\"container_check\">
                    Accessible aux personnes handicapées
                    <input type=\"checkbox\" />
                    <span class=\"checkmark\"></span>
                  </label>
                </li>
              </ul>
            </div>
          </div>
          <!-- Fin collapse -->
        </div>
        <!-- Fin filtres col -->
        <div class=\"box_style_2 d-none d-sm-block\">
          <i class=\"icon_set_1_icon-57\"></i>
          <h4>Besoin d'<span>Aide?</span></h4>
          <a href=\"tel://004542344599\" class=\"phone\">+45 423 445 99</a>
          <small>Du lundi au vendredi de 9h00 à 19h30</small>
        </div>
      </aside>
      <!-- Fin aside -->

      <div class=\"col-lg-9\">
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
              <a href=\"#\" class=\"bt_filters\"><i class=\"icon-th\"></i></a>
              <a href=\"all_tours_list.html\" class=\"bt_filters\"
                ><i class=\"icon-list\"></i
              ></a>
            </div>
          </div>
        </div>
        <!-- Fin outils -->

        <div class=\"row\">
          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.1s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3 popular\"><span>Populaire</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"{{asset('Frontend/img/tour_box_1.jpg')}}\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-44\"></i>Bâtiments historiques<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite de l'Arc de Triomphe</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->

          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.2s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3 popular\"><span>Populaire</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"{{asset('Frontend/img/tour_box_2.jpg')}}\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-43\"></i>Églises<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite de Notre-Dame</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->
        </div>
        <!-- Fin ligne -->

        <div class=\"row\">
          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.3s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3 popular\"><span>Populaire</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"{{asset('Frontend/img/tour_box_3.jpg')}}\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-44\"></i>Bâtiments historiques<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite de Versailles</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->

          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.4s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3 popular\"><span>Populaire</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"{{asset('Frontend/img/tour_box_4.jpg')}}\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-30\"></i>Visite à pied<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite de Pompidou</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a
                    class=\"tooltip_flip tooltip-effect-1\"
                    href=\"javascript:void(0);\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->
        </div>
        <!-- Fin ligne -->

        <div class=\"row\">
          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.5s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3 popular\"><span>Populaire</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"{{asset('Frontend/img/tour_box_14.jpg')}}\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-28\"></i>Visites des gratte-ciels<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite de la Tour Eiffel</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a
                    class=\"tooltip_flip tooltip-effect-1\"
                    href=\"javascript:void(0);\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->

          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.6s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3\"><span>Les mieux notés</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"{{asset('Frontend/img/tour_box_5.jpg')}}\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-44\"></i>Bâtiments historiques<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite du Panthéon</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a
                    class=\"tooltip_flip tooltip-effect-1\"
                    href=\"javascript:void(0);\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->
        </div>
        <!-- Fin ligne -->

        <div class=\"row\">
          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.7s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3\"><span>Les mieux notés</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"{{asset('Frontend/img/tour_box_6.jpg')}}\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-30\"></i>Visite à pied<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite du Louvre</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a
                    class=\"tooltip_flip tooltip-effect-1\"
                    href=\"javascript:void(0);\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->

          <div class=\"col-md-6 wow zoomIn\" data-wow-delay=\"0.8s\">
            <div class=\"tour_container\">
              <div class=\"ribbon_3\"><span>Les mieux notés</span></div>
              <div class=\"img_container\">
                <a href=\"single_tour.html\">
                  <img
                    src=\"{{asset('Frontend/img/tour_box_7.jpg')}}\"
                    width=\"800\"
                    height=\"533\"
                    class=\"img-fluid\"
                    alt=\"Image\"
                  />
                  <div class=\"short_info\">
                    <i class=\"icon_set_1_icon-28\"></i>Visites des gratte-ciels<span
                      class=\"price\"
                      ><sup>\$</sup>45</span
                    >
                  </div>
                </a>
              </div>
              <div class=\"tour_title\">
                <h3><strong>Visite de Montmartre</strong></h3>
                <div class=\"rating\">
                  <i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i
                  ><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i
                  ><small>(75)</small>
                </div>
                <!-- fin évaluation -->
                <div class=\"wishlist\">
                  <a
                    class=\"tooltip_flip tooltip-effect-1\"
                    href=\"javascript:void(0);\"
                    >+<span class=\"tooltip-content-flip\"
                      ><span class=\"tooltip-back\">Ajouter à la liste de souhaits</span></span
                    ></a
                  >
                </div>
                <!-- Fin liste de souhaits-->
              </div>
            </div>
            <!-- Fin boîte de visite -->
          </div>
          <!-- Fin col-md-6 -->
        </div>
        <!-- Fin ligne -->
      </div>
      <!-- Fin col-lg-9 -->
    </div>
    <!-- Fin row -->
  </div>
  <!-- Fin container -->
</main>
<!-- Fin main -->

{% endblock %}
", "client/destinations.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\destinations.html.twig");
    }
}
