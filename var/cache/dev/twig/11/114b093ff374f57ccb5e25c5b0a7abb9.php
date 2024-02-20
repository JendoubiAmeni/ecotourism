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

/* client/security/profile.html.twig */
class __TwigTemplate_5ce4beeeaf2df6688204db8de121e26f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/security/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/security/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/security/profile.html.twig", 1);
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

        echo "profil | Eco tourism";
        
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
        echo "\t\t<section class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/slide_hero_2.jpg"), "html", null, true);
        echo "\" data-natural-width=\"1400\" data-natural-height=\"470\">
\t\t<div class=\"parallax-content-1 opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.4)\">
\t\t\t<div class=\"animated fadeInDown\">
\t\t\t\t    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "\t\t\t\t\t\t<h1>Bienvenue ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "nom", [], "any", false, false, false, 10), "html", null, true);
            echo " !</h1>
\t\t\t\t        <p>Cursus neque cursus curae ante scelerisque vehicula.</p>
                            
                     ";
        }
        // line 14
        echo "\t\t\t
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End section -->

\t<main>
\t\t<div id=\"position\">
\t\t\t<div class=\"container\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">Category</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>Page active</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Position -->

\t\t<div class=\"margin_60 container\">
\t\t\t<div id=\"tabs\" class=\"tabs\">
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#section-1\" class=\"icon-booking\"><span>Réservations</span></a></li>
\t\t\t\t\t<li><a href=\"#section-2\" class=\"icon-wishlist\"><span>Mes favoris</span></a></li>
\t\t\t\t\t<li><a href=\"#section-3\" class=\"icon-settings\"><span>Paramètres</span></a></li>
\t\t\t\t\t<li><a href=\"#section-4\" class=\"icon-profile\"><span>Profil</span></a></li>
\t\t\t\t</ul>
\t\t\t</nav>

\t\t\t\t<div class=\"content\">

\t\t\t\t\t<section id=\"section-1\">

\t\t\t\t\t\t<div class=\"strip_booking\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Dec</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"day\"><strong>23</strong>Sat</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-5\">
\t\t\t\t\t\t\t\t\t<h3 class=\"hotel_booking\">Hotel Mariott Paris<span>2 Adults / 2 Nights</span></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"info_booking\">
\t\t\t\t\t\t\t\t\t\t<li><strong>Booking id</strong> 23442</li>
\t\t\t\t\t\t\t\t\t\t<li><strong>Booked on</strong> Sat. 23 Dec. 2015</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"booking_buttons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_2\">Edit</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_3\">Cancel</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End strip booking -->

\t\t\t\t\t\t<div class=\"strip_booking\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Dec</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"day\"><strong>27</strong>Fri</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-5\">
\t\t\t\t\t\t\t\t\t<h3 class=\"tours_booking\">Louvre Museum<span>2 Adults / 2 Childs</span></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"info_booking\">
\t\t\t\t\t\t\t\t\t\t<li><strong>Booking id</strong> 23442</li>
\t\t\t\t\t\t\t\t\t\t<li><strong>Booked on</strong> Sat. 20 Dec. 2015</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"booking_buttons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_2\">Edit</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_3\">Cancel</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End strip booking -->

\t\t\t\t\t\t<div class=\"strip_booking\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Dec</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"day\"><strong>28</strong>Fri</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-5\">
\t\t\t\t\t\t\t\t\t<h3 class=\"tours_booking\">Tour Eiffel<span>2 Adults</span></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"info_booking\">
\t\t\t\t\t\t\t\t\t\t<li><strong>Booking id</strong> 23442</li>
\t\t\t\t\t\t\t\t\t\t<li><strong>Booked on</strong> Sat. 20 Dec. 2015</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"booking_buttons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_2\">Edit</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_3\">Cancel</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End strip booking -->

\t\t\t\t\t\t<div class=\"strip_booking\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Dec</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"day\"><strong>30</strong>Fri</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-5\">
\t\t\t\t\t\t\t\t\t<h3 class=\"transfers_booking\">Orly Airport<span>2 Adults / 2Childs</span></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"info_booking\">
\t\t\t\t\t\t\t\t\t\t<li><strong>Booking id</strong> 23442</li>
\t\t\t\t\t\t\t\t\t\t<li><strong>Booked on</strong> Sat. 20 Dec. 2015</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"booking_buttons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_2\">Edit</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_3\">Cancel</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End strip booking -->

\t\t\t\t\t</section>
\t\t\t\t\t<!-- End section 1 -->

\t\t\t\t\t<section id=\"section-2\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"hotel_container\">
\t\t\t\t\t\t\t\t\t<div class=\"img_container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"single_hotel.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/hotel_1.jpg\" width=\"800\" height=\"533\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"score\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>7.5</span>Good
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"short_info hotel\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\"><sup>\$</sup>59</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"hotel_title\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>Park Hyatt</strong> Hotel</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end rating -->
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist_close_admin\">
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End box tour -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End col-md-6 -->

\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 \">
\t\t\t\t\t\t\t\t<div class=\"hotel_container\">
\t\t\t\t\t\t\t\t\t<div class=\"img_container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"single_hotel.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/hotel_2.jpg\" width=\"800\" height=\"533\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"score\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>9.0</span>Superb
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"short_info hotel\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\"><sup>\$</sup>45</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"hotel_title\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>Mariott</strong> Hotel</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end rating -->
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist_close_admin\">
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End box -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End col-md-6 -->

\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_container\">
\t\t\t\t\t\t\t\t\t<div class=\"img_container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"single_tour.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/tour_box_1.jpg\" width=\"800\" height=\"533\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span class=\"price\"><sup>\$</sup>45</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tour_title\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>Arc Triomphe</strong> tour</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end rating -->
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist_close_admin\">
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End box tour -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End col-md-6 -->

\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_container\">
\t\t\t\t\t\t\t\t\t<div class=\"img_container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"single_tour.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/tour_box_3.jpg\" width=\"800\" height=\"533\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon popular\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span class=\"price\"><sup>\$</sup>45</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tour_title\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>Versailles</strong> tour</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end rating -->
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist_close_admin\">
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End box tour -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End col-md-6 -->

\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_container\">
\t\t\t\t\t\t\t\t\t<div class=\"img_container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"single_tour.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/tour_box_4.jpg\" width=\"800\" height=\"533\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon popular\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon_set_1_icon-30\"></i>Walking tour<span class=\"price\"><sup>\$</sup>45</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tour_title\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>Pompidue</strong> tour</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end rating -->
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist_close_admin\">
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End box tour -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End col-md-6 -->

\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"transfer_container\">
\t\t\t\t\t\t\t\t\t<div class=\"img_container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"single_transfer.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/transfer_1.jpg\" width=\"800\" height=\"533\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\"><sup>\$</sup>45</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"transfer_title\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>Orly Airport</strong> private</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end rating -->
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist_close_admin\">
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End box tour -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End col-md-6 -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End row -->
\t\t\t\t\t\t<button type=\"submit\" class=\"btn_1 green\">Update wishlist</button>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- End section 2 -->

\t\t\t\t<section id=\"section-3\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 add_bottom_30\">
\t\t\t\t\t\t\t<h4>Changer votre mot de passe</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Ancien mot de passe</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"old_password\" id=\"old_password\" type=\"password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Nouveau mot de passe</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"new_password\" id=\"new_password\" type=\"password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Confirmer le nouveau mot de passe</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"confirm_new_password\" id=\"confirm_new_password\" type=\"password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_1 green\">Mettre à jour le mot de passe</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 add_bottom_30\">
\t\t\t\t\t\t\t<h4>Changer votre adresse e-mail</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Ancienne adresse e-mail</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"old_email\" id=\"old_email\" type=\"email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Nouvelle adresse e-mail</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"new_email\" id=\"new_email\" type=\"email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Confirmer la nouvelle adresse e-mail</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"confirm_new_email\" id=\"confirm_new_email\" type=\"email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_1 green\">Mettre à jour l'e-mail</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Fin de la ligne -->
\t\t\t\t</section>

\t\t\t\t\t<!-- End section 3 -->
\t\t\t\t";
        // line 379
        if (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", true, true, false, 379) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 379), "images", [], "any", true, true, false, 379)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 379, $this->source); })()), "user", [], "any", false, false, false, 379), "images", [], "any", false, false, false, 379)) > 0))) {
            // line 380
            echo "\t\t\t\t\t<section id=\"section-4\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<h4>Mon profil</h4>
\t\t\t\t\t\t\t\t<ul id=\"profile_summary\">
\t\t\t\t\t\t\t\t<li>E-mail <span>";
            // line 385
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 385, $this->source); })()), "user", [], "any", false, false, false, 385), "email", [], "any", false, false, false, 385), "html", null, true);
            echo "</span></li>
\t\t\t\t\t\t\t\t<li>Prénom <span>";
            // line 386
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 386, $this->source); })()), "user", [], "any", false, false, false, 386), "prenom", [], "any", false, false, false, 386), "html", null, true);
            echo "</span></li>
\t\t\t\t\t\t\t\t<li>Nom <span>";
            // line 387
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 387, $this->source); })()), "user", [], "any", false, false, false, 387), "nom", [], "any", false, false, false, 387), "html", null, true);
            echo "</span></li>
\t\t\t\t\t\t\t\t<li>Téléphone <span>";
            // line 388
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 388, $this->source); })()), "user", [], "any", false, false, false, 388), "phone", [], "any", false, false, false, 388), "html", null, true);
            echo "</span></li>
\t\t\t\t\t\t\t<li>Date de naissance <span>";
            // line 389
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 389, $this->source); })()), "user", [], "any", false, false, false, 389), "dateNaissance", [], "any", false, false, false, 389), "d/m/Y"), "html", null, true);
            echo "</span></li>

\t\t\t\t\t\t\t\t<li>Adresse <span>";
            // line 391
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 391, $this->source); })()), "user", [], "any", false, false, false, 391), "adresse", [], "any", false, false, false, 391), "html", null, true);
            echo "</span></li>
\t\t\t\t\t\t\t\t<li>Ville <span>";
            // line 392
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 392, $this->source); })()), "user", [], "any", false, false, false, 392), "ville", [], "any", false, false, false, 392), "html", null, true);
            echo "</span></li>
\t\t\t\t\t\t\t\t<li>Code postal <span>";
            // line 393
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "user", [], "any", false, false, false, 393), "zipcode", [], "any", false, false, false, 393), "html", null, true);
            echo "</span></li>
\t\t\t\t\t\t\t\t<li>Pays <span>";
            // line 394
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 394, $this->source); })()), "user", [], "any", false, false, false, 394), "pays", [], "any", false, false, false, 394), "html", null, true);
            echo "</span></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"";
            // line 401
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/profils/mini/300x300-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 401, $this->source); })()), "user", [], "any", false, false, false, 401), "images", [], "any", false, false, false, 401), 0, [], "array", false, false, false, 401), "nom", [], "any", false, false, false, 401))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 401, $this->source); })()), "user", [], "any", false, false, false, 401), "nom", [], "any", false, false, false, 401), "html", null, true);
            echo "\" class=\"img-fluid styled profile_pic\" width =\"200px\" >
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End row -->

\t\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h4>Modifier le profil</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Prénom</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"first_name\" id=\"first_name\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Nom de famille</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"last_name\" id=\"last_name\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Fin de la ligne -->

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Numéro de téléphone</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"email_2\" id=\"email_2\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Date de naissance <small>(jj/mm/aaaa)</small></label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"email\" id=\"email\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Fin de la ligne -->

\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h4>Modifier l'adresse</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Adresse</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"first_name\" id=\"first_name\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Ville</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"last_name\" id=\"last_name\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Fin de la ligne -->

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Code postal</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"email\" id=\"email\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Pays</label>
\t\t\t\t\t\t\t\t\t<select id=\"country\" class=\"form-select\" name=\"country\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Sélectionner...</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Fin de la ligne -->

\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<h4>Télécharger une photo de profil</h4>
\t\t\t\t\t\t<div class=\"form-inline upload_1\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"file\" name=\"files[]\" id=\"js-upload-files\" multiple>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn_1 green\">Mettre à jour le profil</button>

\t\t\t\t\t</section>
\t\t\t\t";
        }
        // line 497
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End content -->
\t\t\t\t</div>
\t\t\t\t<!-- End tabs -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/security/profile.html.twig";
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
        return array (  625 => 497,  524 => 401,  514 => 394,  510 => 393,  506 => 392,  502 => 391,  497 => 389,  493 => 388,  489 => 387,  485 => 386,  481 => 385,  474 => 380,  472 => 379,  105 => 14,  97 => 10,  95 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}profil | Eco tourism{% endblock %}

{% block body %}
\t\t<section class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{asset('Frontend/img/slide_hero_2.jpg')}}\" data-natural-width=\"1400\" data-natural-height=\"470\">
\t\t<div class=\"parallax-content-1 opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.4)\">
\t\t\t<div class=\"animated fadeInDown\">
\t\t\t\t    {% if app.user %}
\t\t\t\t\t\t<h1>Bienvenue {{ app.user.nom }} !</h1>
\t\t\t\t        <p>Cursus neque cursus curae ante scelerisque vehicula.</p>
                            
                     {% endif %}
\t\t\t
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End section -->

\t<main>
\t\t<div id=\"position\">
\t\t\t<div class=\"container\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">Category</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>Page active</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Position -->

\t\t<div class=\"margin_60 container\">
\t\t\t<div id=\"tabs\" class=\"tabs\">
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#section-1\" class=\"icon-booking\"><span>Réservations</span></a></li>
\t\t\t\t\t<li><a href=\"#section-2\" class=\"icon-wishlist\"><span>Mes favoris</span></a></li>
\t\t\t\t\t<li><a href=\"#section-3\" class=\"icon-settings\"><span>Paramètres</span></a></li>
\t\t\t\t\t<li><a href=\"#section-4\" class=\"icon-profile\"><span>Profil</span></a></li>
\t\t\t\t</ul>
\t\t\t</nav>

\t\t\t\t<div class=\"content\">

\t\t\t\t\t<section id=\"section-1\">

\t\t\t\t\t\t<div class=\"strip_booking\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Dec</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"day\"><strong>23</strong>Sat</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-5\">
\t\t\t\t\t\t\t\t\t<h3 class=\"hotel_booking\">Hotel Mariott Paris<span>2 Adults / 2 Nights</span></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"info_booking\">
\t\t\t\t\t\t\t\t\t\t<li><strong>Booking id</strong> 23442</li>
\t\t\t\t\t\t\t\t\t\t<li><strong>Booked on</strong> Sat. 23 Dec. 2015</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"booking_buttons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_2\">Edit</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_3\">Cancel</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End strip booking -->

\t\t\t\t\t\t<div class=\"strip_booking\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Dec</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"day\"><strong>27</strong>Fri</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-5\">
\t\t\t\t\t\t\t\t\t<h3 class=\"tours_booking\">Louvre Museum<span>2 Adults / 2 Childs</span></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"info_booking\">
\t\t\t\t\t\t\t\t\t\t<li><strong>Booking id</strong> 23442</li>
\t\t\t\t\t\t\t\t\t\t<li><strong>Booked on</strong> Sat. 20 Dec. 2015</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"booking_buttons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_2\">Edit</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_3\">Cancel</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End strip booking -->

\t\t\t\t\t\t<div class=\"strip_booking\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Dec</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"day\"><strong>28</strong>Fri</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-5\">
\t\t\t\t\t\t\t\t\t<h3 class=\"tours_booking\">Tour Eiffel<span>2 Adults</span></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"info_booking\">
\t\t\t\t\t\t\t\t\t\t<li><strong>Booking id</strong> 23442</li>
\t\t\t\t\t\t\t\t\t\t<li><strong>Booked on</strong> Sat. 20 Dec. 2015</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"booking_buttons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_2\">Edit</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_3\">Cancel</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End strip booking -->

\t\t\t\t\t\t<div class=\"strip_booking\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Dec</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"day\"><strong>30</strong>Fri</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-5\">
\t\t\t\t\t\t\t\t\t<h3 class=\"transfers_booking\">Orly Airport<span>2 Adults / 2Childs</span></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"info_booking\">
\t\t\t\t\t\t\t\t\t\t<li><strong>Booking id</strong> 23442</li>
\t\t\t\t\t\t\t\t\t\t<li><strong>Booked on</strong> Sat. 20 Dec. 2015</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"booking_buttons\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_2\">Edit</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#0\" class=\"btn_3\">Cancel</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End strip booking -->

\t\t\t\t\t</section>
\t\t\t\t\t<!-- End section 1 -->

\t\t\t\t\t<section id=\"section-2\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"hotel_container\">
\t\t\t\t\t\t\t\t\t<div class=\"img_container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"single_hotel.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/hotel_1.jpg\" width=\"800\" height=\"533\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"score\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>7.5</span>Good
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"short_info hotel\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\"><sup>\$</sup>59</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"hotel_title\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>Park Hyatt</strong> Hotel</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end rating -->
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist_close_admin\">
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End box tour -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End col-md-6 -->

\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 \">
\t\t\t\t\t\t\t\t<div class=\"hotel_container\">
\t\t\t\t\t\t\t\t\t<div class=\"img_container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"single_hotel.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/hotel_2.jpg\" width=\"800\" height=\"533\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"score\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>9.0</span>Superb
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"short_info hotel\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\"><sup>\$</sup>45</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"hotel_title\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>Mariott</strong> Hotel</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end rating -->
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist_close_admin\">
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End box -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End col-md-6 -->

\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_container\">
\t\t\t\t\t\t\t\t\t<div class=\"img_container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"single_tour.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/tour_box_1.jpg\" width=\"800\" height=\"533\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span class=\"price\"><sup>\$</sup>45</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tour_title\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>Arc Triomphe</strong> tour</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end rating -->
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist_close_admin\">
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End box tour -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End col-md-6 -->

\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_container\">
\t\t\t\t\t\t\t\t\t<div class=\"img_container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"single_tour.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/tour_box_3.jpg\" width=\"800\" height=\"533\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon popular\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span class=\"price\"><sup>\$</sup>45</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tour_title\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>Versailles</strong> tour</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end rating -->
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist_close_admin\">
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End box tour -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End col-md-6 -->

\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_container\">
\t\t\t\t\t\t\t\t\t<div class=\"img_container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"single_tour.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/tour_box_4.jpg\" width=\"800\" height=\"533\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon popular\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon_set_1_icon-30\"></i>Walking tour<span class=\"price\"><sup>\$</sup>45</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tour_title\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>Pompidue</strong> tour</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end rating -->
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist_close_admin\">
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End box tour -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End col-md-6 -->

\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"transfer_container\">
\t\t\t\t\t\t\t\t\t<div class=\"img_container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"single_transfer.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/transfer_1.jpg\" width=\"800\" height=\"533\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\"><sup>\$</sup>45</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"transfer_title\">
\t\t\t\t\t\t\t\t\t\t<h3><strong>Orly Airport</strong> private</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end rating -->
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist_close_admin\">
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End box tour -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End col-md-6 -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End row -->
\t\t\t\t\t\t<button type=\"submit\" class=\"btn_1 green\">Update wishlist</button>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- End section 2 -->

\t\t\t\t<section id=\"section-3\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 add_bottom_30\">
\t\t\t\t\t\t\t<h4>Changer votre mot de passe</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Ancien mot de passe</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"old_password\" id=\"old_password\" type=\"password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Nouveau mot de passe</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"new_password\" id=\"new_password\" type=\"password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Confirmer le nouveau mot de passe</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"confirm_new_password\" id=\"confirm_new_password\" type=\"password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_1 green\">Mettre à jour le mot de passe</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 add_bottom_30\">
\t\t\t\t\t\t\t<h4>Changer votre adresse e-mail</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Ancienne adresse e-mail</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"old_email\" id=\"old_email\" type=\"email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Nouvelle adresse e-mail</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"new_email\" id=\"new_email\" type=\"email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Confirmer la nouvelle adresse e-mail</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"confirm_new_email\" id=\"confirm_new_email\" type=\"email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_1 green\">Mettre à jour l'e-mail</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Fin de la ligne -->
\t\t\t\t</section>

\t\t\t\t\t<!-- End section 3 -->
\t\t\t\t{% if app.user is defined and app.user.images is defined and app.user.images|length > 0 %}
\t\t\t\t\t<section id=\"section-4\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<h4>Mon profil</h4>
\t\t\t\t\t\t\t\t<ul id=\"profile_summary\">
\t\t\t\t\t\t\t\t<li>E-mail <span>{{ app.user.email}}</span></li>
\t\t\t\t\t\t\t\t<li>Prénom <span>{{ app.user.prenom}}</span></li>
\t\t\t\t\t\t\t\t<li>Nom <span>{{ app.user.nom}}</span></li>
\t\t\t\t\t\t\t\t<li>Téléphone <span>{{ app.user.phone}}</span></li>
\t\t\t\t\t\t\t<li>Date de naissance <span>{{ app.user.dateNaissance|date('d/m/Y') }}</span></li>

\t\t\t\t\t\t\t\t<li>Adresse <span>{{ app.user.adresse}}</span></li>
\t\t\t\t\t\t\t\t<li>Ville <span>{{ app.user.ville}}</span></li>
\t\t\t\t\t\t\t\t<li>Code postal <span>{{ app.user.zipcode}}</span></li>
\t\t\t\t\t\t\t\t<li>Pays <span>{{ app.user.pays}}</span></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/uploads/profils/mini/300x300-' ~ app.user.images[0].nom ) }}\" alt=\"{{ app.user.nom }}\" class=\"img-fluid styled profile_pic\" width =\"200px\" >
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End row -->

\t\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h4>Modifier le profil</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Prénom</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"first_name\" id=\"first_name\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Nom de famille</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"last_name\" id=\"last_name\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Fin de la ligne -->

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Numéro de téléphone</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"email_2\" id=\"email_2\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Date de naissance <small>(jj/mm/aaaa)</small></label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"email\" id=\"email\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Fin de la ligne -->

\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h4>Modifier l'adresse</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Adresse</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"first_name\" id=\"first_name\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Ville</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"last_name\" id=\"last_name\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Fin de la ligne -->

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Code postal</label>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"email\" id=\"email\" type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Pays</label>
\t\t\t\t\t\t\t\t\t<select id=\"country\" class=\"form-select\" name=\"country\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Sélectionner...</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Fin de la ligne -->

\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<h4>Télécharger une photo de profil</h4>
\t\t\t\t\t\t<div class=\"form-inline upload_1\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"file\" name=\"files[]\" id=\"js-upload-files\" multiple>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn_1 green\">Mettre à jour le profil</button>

\t\t\t\t\t</section>
\t\t\t\t{% endif %}

\t\t\t\t\t</div>
\t\t\t\t\t<!-- End content -->
\t\t\t\t</div>
\t\t\t\t<!-- End tabs -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t</main>
{% endblock %}", "client/security/profile.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\security\\profile.html.twig");
    }
}
