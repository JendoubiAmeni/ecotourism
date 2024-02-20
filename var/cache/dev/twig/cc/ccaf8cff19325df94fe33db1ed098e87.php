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

/* client/shop.html.twig */
class __TwigTemplate_36dc32d2ff59c75c7fe9ca68ef68729b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/shop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/shop.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/shop.html.twig", 1);
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

        echo "Boutique | Écotourisme";
        
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
\t<section class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"img/header_bg.jpg\" data-natural-width=\"1400\" data-natural-height=\"470\">
\t\t<div class=\"parallax-content-1 opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.6)\">
\t\t\t<div class=\"animated fadeInDown\">
\t\t\t\t<h1>Notre Boutique</h1>

<p>Explorez notre sélection de produits bio et de voyages pour une expérience unique et enrichissante.  Bon voyage et shopping responsable !</p>

\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Section -->

\t<main>
\t\t<div id=\"position\">
\t\t\t<div class=\"container\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">Catégorie</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>Page active</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Position -->

\t\t<div class=\"container margin_60\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t<div class=\"shop-section\">

\t\t\t\t\t\t<div class=\"items-sorting\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"results_shop\">
\t\t\t\t\t\t\t\t\t\tAffichage de 1 à 9 sur 15 résultats
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"sort-by\">
\t\t\t\t\t\t\t\t\t\t\t<option>Trier par</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Ordre</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Prix</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--End Sort By-->

\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<div class=\"shop-item col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/products/image-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-options clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shopping-cart.html\" class=\"btn_shop\"><span class=\"icon-basket\"></span>
                                            <div class=\"tool-tip\">
                                                Ajouter au panier
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\" class=\"btn_shop\"><span class=\"icon-heart-8\"></span>
                                            <div class=\"tool-tip\">
                                                Ajouter aux favoris
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\" class=\"btn_shop\"><span class=\"icon-eye\"></span>
                                            <div class=\"tool-tip\">
                                                Voir
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product_description\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Livre de voyage</a></h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"offer\">\$20.00</span> \$15.00
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"shop-item col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/products/image-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-options clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shopping-cart.html\" class=\"btn_shop\"><span class=\"icon-basket\"></span>
                                            <div class=\"tool-tip\">
                                                Ajouter au panier
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\" class=\"btn_shop\"><span class=\"icon-heart-8\"></span>
                                            <div class=\"tool-tip\">
                                                Ajouter aux favoris
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\" class=\"btn_shop\"><span class=\"icon-eye\"></span>
                                            <div class=\"tool-tip\">
                                                Voir
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product_description\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Livre de voyage</a></h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"offer\">\$20.00</span> \$15.00
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"shop-item col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\"><img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/products/image-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-options clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shopping-cart.html\" class=\"btn_shop\"><span class=\"icon-basket\"></span>
                                            <div class=\"tool-tip\">
                                                Ajouter au panier
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\" class=\"btn_shop\"><span class=\"icon-heart-8\"></span>
                                            <div class=\"tool-tip\">
                                                Ajouter aux favoris
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\" class=\"btn_shop\"><span class=\"icon-eye\"></span>
                                            <div class=\"tool-tip\">
                                                Voir
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product_description\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Livre de voyage</a></h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"offer\">\$20.00</span> \$15.00
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--End Shop Item-->

\t\t\t\t\t\t\t<!-- Répétez le même schéma pour les autres articles de la boutique -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--End Shop Item-->

\t\t\t\t\t\t<nav aria-label=\"Page navigation\">
\t\t\t\t\t\t\t<ul class=\"pagination justify-content-center\">
\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#\" aria-label=\"Précédent\">
\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&laquo;</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Précédent</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"page-item active\"><span class=\"page-link\">1</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#\" aria-label=\"Suivant\">
\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&raquo;</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Suivant</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- end pagination-->
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row -->
\t\t\t\t</div>
\t\t\t\t<!-- End col -->

\t\t\t\t<!--Sidebar-->
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<aside class=\"sidebar\">
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\" style=\"margin-left:0;\"><i class=\"icon-search\"></i></button>
                        </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Search -->
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"widget\" id=\"cat_shop\">
\t\t\t\t\t\t\t<h4>Catégories</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Lieux à visiter</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Meilleurs circuits</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Conseils pour les voyageurs</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Événements</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End widget -->
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t<h4>Filtrer</h4>
\t\t\t\t\t\t\t<input type=\"text\" id=\"range\" name=\"range\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End widget -->
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"widget related-products\">
\t\t\t\t\t\t\t<h4>Top liés </h4>
\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t<figure class=\"post-thumb\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/products/thumb-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<h5><a href=\"#\">Mode grunge</a></h5>
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class'est=\"price\">
\t\t\t\t\t\t\t\t\t\$ 15.00
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Répétez le même schéma pour les autres articles liés -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget related-products\">
\t\t\t\t\t\t\t<h4>Top liés </h4>
\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t<figure class=\"post-thumb\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/products/thumb-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<h5><a href=\"#\">Mode grunge</a></h5>
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class'est=\"price\">
\t\t\t\t\t\t\t\t\t\$ 15.00
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Répétez le même schéma pour les autres articles liés -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t\t<!--Sidebar-->
\t\t\t</div>
\t\t</div>
\t\t<!-- End Container -->
\t</main>
\t<!-- End main -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/shop.html.twig";
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
        return array (  353 => 257,  333 => 240,  226 => 136,  187 => 100,  148 => 64,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Boutique | Écotourisme{% endblock %}

{% block body %}

\t<section class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"img/header_bg.jpg\" data-natural-width=\"1400\" data-natural-height=\"470\">
\t\t<div class=\"parallax-content-1 opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.6)\">
\t\t\t<div class=\"animated fadeInDown\">
\t\t\t\t<h1>Notre Boutique</h1>

<p>Explorez notre sélection de produits bio et de voyages pour une expérience unique et enrichissante.  Bon voyage et shopping responsable !</p>

\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Section -->

\t<main>
\t\t<div id=\"position\">
\t\t\t<div class=\"container\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">Catégorie</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>Page active</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Position -->

\t\t<div class=\"container margin_60\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t<div class=\"shop-section\">

\t\t\t\t\t\t<div class=\"items-sorting\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"results_shop\">
\t\t\t\t\t\t\t\t\t\tAffichage de 1 à 9 sur 15 résultats
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"sort-by\">
\t\t\t\t\t\t\t\t\t\t\t<option>Trier par</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Ordre</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Prix</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--End Sort By-->

\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<div class=\"shop-item col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\"><img src=\"{{asset('Frontend/img/products/image-3.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-options clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shopping-cart.html\" class=\"btn_shop\"><span class=\"icon-basket\"></span>
                                            <div class=\"tool-tip\">
                                                Ajouter au panier
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\" class=\"btn_shop\"><span class=\"icon-heart-8\"></span>
                                            <div class=\"tool-tip\">
                                                Ajouter aux favoris
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\" class=\"btn_shop\"><span class=\"icon-eye\"></span>
                                            <div class=\"tool-tip\">
                                                Voir
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product_description\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Livre de voyage</a></h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"offer\">\$20.00</span> \$15.00
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"shop-item col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\"><img src=\"{{asset('Frontend/img/products/image-1.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-options clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shopping-cart.html\" class=\"btn_shop\"><span class=\"icon-basket\"></span>
                                            <div class=\"tool-tip\">
                                                Ajouter au panier
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\" class=\"btn_shop\"><span class=\"icon-heart-8\"></span>
                                            <div class=\"tool-tip\">
                                                Ajouter aux favoris
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\" class=\"btn_shop\"><span class=\"icon-eye\"></span>
                                            <div class=\"tool-tip\">
                                                Voir
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product_description\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Livre de voyage</a></h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"offer\">\$20.00</span> \$15.00
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"shop-item col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t\t\t\t<div class=\"image-box\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\"><img src=\"{{asset('Frontend/img/products/image-2.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-options clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shopping-cart.html\" class=\"btn_shop\"><span class=\"icon-basket\"></span>
                                            <div class=\"tool-tip\">
                                                Ajouter au panier
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\" class=\"btn_shop\"><span class=\"icon-heart-8\"></span>
                                            <div class=\"tool-tip\">
                                                Ajouter aux favoris
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"shop-single.html\" class=\"btn_shop\"><span class=\"icon-eye\"></span>
                                            <div class=\"tool-tip\">
                                                Voir
                                            </div>
                                            </a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product_description\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Livre de voyage</a></h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"offer\">\$20.00</span> \$15.00
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--End Shop Item-->

\t\t\t\t\t\t\t<!-- Répétez le même schéma pour les autres articles de la boutique -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--End Shop Item-->

\t\t\t\t\t\t<nav aria-label=\"Page navigation\">
\t\t\t\t\t\t\t<ul class=\"pagination justify-content-center\">
\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#\" aria-label=\"Précédent\">
\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&laquo;</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Précédent</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"page-item active\"><span class=\"page-link\">1</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#\" aria-label=\"Suivant\">
\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&raquo;</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Suivant</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- end pagination-->
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row -->
\t\t\t\t</div>
\t\t\t\t<!-- End col -->

\t\t\t\t<!--Sidebar-->
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<aside class=\"sidebar\">
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\" style=\"margin-left:0;\"><i class=\"icon-search\"></i></button>
                        </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Search -->
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"widget\" id=\"cat_shop\">
\t\t\t\t\t\t\t<h4>Catégories</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Lieux à visiter</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Meilleurs circuits</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Conseils pour les voyageurs</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Événements</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End widget -->
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t<h4>Filtrer</h4>
\t\t\t\t\t\t\t<input type=\"text\" id=\"range\" name=\"range\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End widget -->
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"widget related-products\">
\t\t\t\t\t\t\t<h4>Top liés </h4>
\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t<figure class=\"post-thumb\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{asset('Frontend/img/products/thumb-1.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<h5><a href=\"#\">Mode grunge</a></h5>
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class'est=\"price\">
\t\t\t\t\t\t\t\t\t\$ 15.00
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Répétez le même schéma pour les autres articles liés -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget related-products\">
\t\t\t\t\t\t\t<h4>Top liés </h4>
\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t<figure class=\"post-thumb\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{asset('Frontend/img/products/thumb-1.jpg')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<h5><a href=\"#\">Mode grunge</a></h5>
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class'est=\"price\">
\t\t\t\t\t\t\t\t\t\$ 15.00
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Répétez le même schéma pour les autres articles liés -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t\t<!--Sidebar-->
\t\t\t</div>
\t\t</div>
\t\t<!-- End Container -->
\t</main>
\t<!-- End main -->
{% endblock %}
", "client/shop.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\shop.html.twig");
    }
}
