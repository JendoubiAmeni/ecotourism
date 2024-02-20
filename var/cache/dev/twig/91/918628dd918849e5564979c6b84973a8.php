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

/* client/order.html.twig */
class __TwigTemplate_e12b2ddf8003c3f51415d8ec77476891 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/order.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from www.ansonika.com/citytours/payment_restaurant.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 19:13:47 GMT -->

<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\"
\t\tcontent=\"Citytours - Premium site template for city tours agencies, transfers and tickets.\">
\t<meta name=\"author\" content=\"Ansonika\">
\t<title>CITY TOURS - City tours and travel site template by Ansonika</title>

\t<!-- Favicons-->
\t<link rel=\"shortcut icon\" href=\"img/favicon.ico\" type=\"image/x-icon\">
\t<link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"img/apple-touch-icon-57x57-precomposed.png\">
\t<link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"img/apple-touch-icon-72x72-precomposed.png\">
\t<link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\"
\t\thref=\"img/apple-touch-icon-114x114-precomposed.png\">
\t<link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\"
\t\thref=\"img/apple-touch-icon-144x144-precomposed.png\">

\t<!-- GOOGLE WEB FONT -->
\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Gochi+Hand&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap\"
\t\trel=\"stylesheet\">

\t<!-- COMMON CSS -->
\t<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
\t<link href=\"css/style.css\" rel=\"stylesheet\">
\t<link href=\"css/vendors.css\" rel=\"stylesheet\">

\t<!-- ALTERNATIVE COLORS CSS -->
\t<link href=\"#\" id=\"colors\" rel=\"stylesheet\">

</head>

<body>

\t<div id=\"preloader\">
\t\t<div class=\"sk-spinner sk-spinner-wave\">
\t\t\t<div class=\"sk-rect1\"></div>
\t\t\t<div class=\"sk-rect2\"></div>
\t\t\t<div class=\"sk-rect3\"></div>
\t\t\t<div class=\"sk-rect4\"></div>
\t\t\t<div class=\"sk-rect5\"></div>
\t\t</div>
\t</div>
\t<!-- End Preload -->

\t<div class=\"layer\"></div>
\t<!-- Mobile menu overlay mask -->

\t<!-- Header================================================== -->
\t\t<header>
\t\t\t<div id=\"top_line\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-6\"><i class=\"icon-phone\"></i><strong>+216 043204434</strong></div>
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<ul id=\"top_links\">
\t\t\t\t\t\t\t\t<li><a href=\"#sign-in-dialog\" id=\"access_link\">Se connecter</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"wishlist.html\" id=\"wishlist_link\">Mes favoris</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row -->
\t\t\t\t</div><!-- End container-->
\t\t\t</div><!-- End top line-->
\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t<div id=\"logo_home\">
\t\t\t\t\t\t\t<h1><a href=\"index.html\" title=\"City tours travel template\">City Tours travel template</a></h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<nav class=\"col-9\">
\t\t\t\t\t\t<a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu
\t\t\t\t\t\t\t\tmobile</span></a>
\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t<div id=\"header_menu\">
\t\t\t\t\t\t\t\t<img src=\"img/logo.png\" width=\"160\" height=\"34\" alt=\"City tours\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_set_1_icon-77\"></i></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu\">Accueil <i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Owl Carousel Slider</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_25.html\">KenBurns Slider</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_22.html\">Home items with Carousel</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_23.html\">Home with Search V2</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"third-level\"><a href=\"javascript:void(0);\">Revolution slider <strong
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"badge badge-danger\">New!</strong></a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_24.html\">Default slider</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_20.html\">Basic slider</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_14.html\">Youtube Hero</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_15.html\">Vimeo Hero</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_17.html\">Full Screen <strong
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"badge badge-danger\">New!</strong></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_21.html\">Full Screen Slicey <strong
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"badge badge-danger\">New!</strong></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_16.html\">Carousel</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_19.html\">Mailchimp Newsletter</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_18.html\">Fixed Caption</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_12.html\">Layer slider</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_2.html\">With Only tours</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_3.html\">Single image</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_4.html\">Header video</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_7.html\">With search panel</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_13.html\">With tabs</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_5.html\">With map</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_6.html\">With search bar</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_8.html\">Search bar + Video</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_9.html\">With Text Rotator</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_10.html\">With Cookie Bar (EU law)</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_11.html\">Popup Advertising</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu\">Destinations <i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_tours_list.html\">All tours list</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_tours_grid.html\">All tours grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_tours_grid_masonry.html\">All tours Sort Masonry</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_tours_map_listing.html\">All tours map listing</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_tour.html\">Single tour page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_tour_with_gallery.html\">Single tour with gallery</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"third-level\"><a href=\"javascript:void(0);\">Single tour fixed sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_tour_fixed_sidebar.html\">Single tour fixed sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_tour_with_gallery_fixed_sidebar.html\">Single tour 2
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFixed Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart_fixed_sidebar.html\">Cart Fixed Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"payment_fixed_sidebar.html\">Payment Fixed Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"confirmation_fixed_sidebar.html\">Confirmation Fixed Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_tour_working_booking.html\">Single tour working booking</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart.html\">Single tour cart</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"payment.html\">Single tour booking</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu\">Réservations<i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_hotels_list.html\">All hotels list</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_hotels_grid.html\">All hotels grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_hotels_grid_masonry.html\">All hotels Sort Masonry</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_hotels_map_listing.html\">All hotels map listing</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_hotel.html\">Single hotel page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_hotel_working_booking.html\">Single hotel working booking</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_hotel_contact.html\">Single hotel contact working</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart_hotel.html\">Cart hotel</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"payment_hotel.html\">Booking hotel</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"confirmation_hotel.html\">Confirmation hotel</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu\">Boutique Bio <i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_transfer_list.html\">All transfers list</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_transfer_grid.html\">All transfers grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_transfer_grid_masonry.html\">All transfers Sort Masonry</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_transfer.html\">Single transfer page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart_transfer.html\">Cart transfers</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"payment_transfer.html\">Booking transfers</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"confirmation_transfer.html\">Confirmation transfers</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu\">Sensibilisation <i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_restaurants_list.html\">All restaurants list</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_restaurants_grid.html\">All restaurants grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_restaurants_grid_masonry.html\">All restaurants Sort Masonry</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_restaurants_map_listing.html\">All restaurants map listing</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_restaurant.html\">Single restaurant page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"payment_restaurant.html\">Booking restaurant</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"confirmation_restaurant.html\">Confirmation restaurant</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"megamenu submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu-mega\">Partenariats et Durabilité<i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<div class=\"menu-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Header styles</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Default transparent</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"header_2.html\">Plain color</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"header_3.html\">Plain color on scroll</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"header_4.html\">With socials on top</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"header_5.html\">With language selection</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"header_6.html\">With lang and conversion</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"header_7.html\">With full horizontal menu</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Footer styles</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Footer default</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_2.html\">Footer style 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_3.html\">Footer style 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_4.html\">Footer style 4</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_6.html\">Footer style 6</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_7.html\">Footer style 7</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Shop section</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Shop</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop-single.html\">Shop single</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shopping-cart.html\">Shop cart</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Shop Checkout</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><!-- End row -->
\t\t\t\t\t\t\t\t\t</div><!-- End menu-wrapper -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"megamenu submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu-mega\">Avis<i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<div class=\"menu-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Pages</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About us</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"general_page.html\">General page</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tourist_guide.html\">Tourist guide</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"wishlist.html\">Wishlist page</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq.html\">Faq</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq_2.html\">Faq smooth scroll</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"pricing_tables.html\">Pricing tables</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"gallery_3_columns.html\">Gallery 3 columns</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"gallery_4_columns.html\">Gallery 4 columns</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"grid_gallery_1.html\">Grid gallery</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"grid_gallery_2.html\">Grid gallery with filters</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Pages</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact_us_1.html\">Contact us 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact_us_2.html\">Contact us 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog_right_sidebar.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog left sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"login.html\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"register.html\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"invoice.html\" target=\"_blank\">Invoice</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404 Error page</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"site_launch/index.html\">Site launch / Coming soon</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"timeline.html\">Tour timeline</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"page_with_map.html\"><i class=\"icon-map\"></i> Full screen
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmap</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Elements</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_2.html\"><i class=\"icon-columns\"></i> Footer with
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tworking newsletter</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_1.html\"><i class=\"icon-inbox-alt\"></i> Icon pack
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1 (1900)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_2.html\"><i class=\"icon-inbox-alt\"></i> Icon pack
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 (100)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_3.html\"><i class=\"icon-inbox-alt\"></i> Icon pack
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t3 (30)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_4.html\"><i class=\"icon-inbox-alt\"></i> Icon pack
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t4 (200)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_5.html\"><i class=\"icon-inbox-alt\"></i> Icon pack
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t5 (360)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shortcodes.html\"><i class=\"icon-tools\"></i> Shortcodes</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"newsletter_template/newsletter.html\" target=\"blank\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\" icon-mail\"></i> Responsive email template</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"admin.html\"><i class=\"icon-cog-1\"></i> Admin area</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"html_rtl/index.html\"><i class=\"icon-align-right\"></i> RTL
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVersion</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><!-- End row -->
\t\t\t\t\t\t\t\t\t</div><!-- End menu-wrapper -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- End main-menu -->
\t\t\t\t\t\t<ul id=\"top_tools\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"search-overlay-menu-btn\"><i class=\"icon_search\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"dropdown dropdown-cart\">
\t\t\t\t\t\t\t\t\t<a href=\"#0\" data-bs-toggle=\"dropdown\" class=\"cart_bt\"><i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon_bag_alt\"></i><strong>3</strong></a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" id=\"cart_items\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"img/thumb_cart_1.jpg\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t\t<strong><a href=\"#\">Louvre museum</a>1x \$36.00 </strong>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"img/thumb_cart_2.jpg\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t\t<strong><a href=\"#\">Versailles tour</a>2x \$36.00 </strong>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"img/thumb_cart_3.jpg\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t\t<strong><a href=\"#\">Versailles tour</a>1x \$36.00 </strong>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div>Total: <span>\$120.00</span></div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"cart.html\" class=\"button_drop\">Go to cart</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"payment.html\" class=\"button_drop outline\">Check out</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div><!-- End dropdown-cart-->
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div><!-- container -->
\t\t</header><!-- End Header -->


\t<section id=\"hero_2\" class=\"background-image\" data-background=\"url(img/restaurant_top_in.jpg)\">
\t\t<div class=\"opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.4)\">
\t\t\t<div class=\"intro_title\">
\t\t\t\t<h1>Place your order</h1>
\t\t\t\t<div class=\"bs-wizard row\">

\t\t\t\t\t<div class=\"col-6 bs-wizard-step complete\">
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Your details</div>
\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t<div class=\"progress-bar\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-6 bs-wizard-step disabled\">
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Finish!</div>
\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t<div class=\"progress-bar\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"confirmation_restaurant.html\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- End bs-wizard -->
\t\t\t</div>
\t\t\t<!-- End intro-title -->
\t\t</div>
\t\t<!-- End opacity-mask-->
\t</section>
\t<!-- End Section hero_2 -->

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
\t\t<!-- End position -->

\t\t<div class=\"container margin_60\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 add_bottom_15\">
\t\t\t\t\t<div class=\"form_title\">
\t\t\t\t\t\t<h3><strong>1</strong>Your Details</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tMussum ipsum cacilds, vidis litro abertis.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>First name</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"firstname_booking\"
\t\t\t\t\t\t\t\t\t\tname=\"firstname_booking\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Last name</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lastname_booking\"
\t\t\t\t\t\t\t\t\t\tname=\"lastname_booking\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email_booking\" name=\"email_booking\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Confirm email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email_booking_2\" name=\"email_booking_2\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Telephone</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"telephone_booking\" name=\"telephone_booking\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--End step -->

\t\t\t\t\t<div class=\"form_title\">
\t\t\t\t\t\t<h3><strong>2</strong>Payment Information</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tMussum ipsum cacilds, vidis litro abertis.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label>Name on card</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name_card_bookign\" name=\"name_card_bookign\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Card number</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"card_number\" name=\"card_number\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t<img src=\"img/cards.png\" width=\"207\" height=\"43\" alt=\"Cards\" class=\"cards\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<label>Expiration date</label>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"expire_month\" name=\"expire_month\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" placeholder=\"MM\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"expire_year\" name=\"expire_year\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"Year\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Security code</label>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"ccv\" name=\"ccv\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"CCV\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/icon_ccv.gif\" width=\"50\" height=\"29\" alt=\"ccv\"><small>Last 3
\t\t\t\t\t\t\t\t\t\t\t\tdigits</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--End row -->

\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<h4>Or checkout with Paypal</h4>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent
\t\t\t\t\t\t\tornatus molestie, reque fierent dissentiunt mel ea.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<img src=\"img/paypal_bt.png\" alt=\"Image\">
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<!--End step -->

\t\t\t\t\t<div class=\"form_title\">
\t\t\t\t\t\t<h3><strong>3</strong>Billing Address</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tMussum ipsum cacilds, vidis litro abertis.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Country</label>
\t\t\t\t\t\t\t\t\t<div class=\"styled-select-common\">
\t\t\t\t\t\t\t\t\t\t<select name=\"country\" id=\"country\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected>Select your country</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe\">Europe</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"United states\">United states</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia\">Asia</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Street line 1</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"street_1\" name=\"street_1\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Street line 2</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"street_2\" name=\"street_2\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>City</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"city_booking\" name=\"city_booking\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>State</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"state_booking\" name=\"state_booking\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Postal code</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"postal_code\" name=\"postal_code\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--End row -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--End step -->

\t\t\t\t\t<div id=\"policy\">
\t\t\t\t\t\t<h4>Cancellation policy</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"container_check\">
\t\t\t\t\t\t\t\tI accept terms and conditions and general policy.
\t\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t\t<span class=\"checkmark\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"confirmation_restaurant.html\" class=\"btn_1 green medium\">Book now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<aside class=\"col-lg-4\">
\t\t\t\t\t<div class=\"box_style_1\">
\t\t\t\t\t\t<h3 class=\"inner\">- Summary -</h3>
\t\t\t\t\t\t<table class=\"table table_summary\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\tAdults
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t2
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\tChildren
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\tDay
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t25/10/2015
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\tTime
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t7.30pm
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<a class=\"btn_full\" href=\"confirmation_restaurant.html\">Book now</a>
\t\t\t\t\t\t<a class=\"btn_full_outline\" href=\"#\"><i class=\"icon-right\"></i> Continue shopping</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box_style_4\">
\t\t\t\t\t\t<i class=\"icon_set_1_icon-57\"></i>
\t\t\t\t\t\t<h4>Need <span>Help?</span></h4>
\t\t\t\t\t\t<a href=\"tel://004542344599\" class=\"phone\">+216 423 445 99</a>
\t\t\t\t\t\t<small>Monday to Friday 9.00am - 7.30pm</small>
\t\t\t\t\t</div>
\t\t\t\t</aside>

\t\t\t</div>
\t\t\t<!--End row -->
\t\t</div>
\t\t<!--End container -->
\t</main>
\t<!-- End main -->

\t<footer class=\"revealed\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<h3>Need help?</h3>
\t\t\t\t\t<a href=\"tel://004542344599\" id=\"phone\">+45 423 445 99</a>
\t\t\t\t\t<a href=\"mailto:help@citytours.com\" id=\"email_footer\">help@citytours.com</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<h3>About</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">About us</a></li>
\t\t\t\t\t\t<li><a href=\"#\">FAQ</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Login</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Register</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Terms and condition</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<h3>Discover</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Community blog</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Tour guide</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Wishlist</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Gallery</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<h3>Settings</h3>
\t\t\t\t\t<div class=\"styled-select\">
\t\t\t\t\t\t<select name=\"lang\" id=\"lang\">
\t\t\t\t\t\t\t<option value=\"English\" selected>English</option>
\t\t\t\t\t\t\t<option value=\"French\">French</option>
\t\t\t\t\t\t\t<option value=\"Spanish\">Spanish</option>
\t\t\t\t\t\t\t<option value=\"Russian\">Russian</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"styled-select\">
\t\t\t\t\t\t<select name=\"currency\" id=\"currency\">
\t\t\t\t\t\t\t<option value=\"USD\" selected>USD</option>
\t\t\t\t\t\t\t<option value=\"EUR\">EUR</option>
\t\t\t\t\t\t\t<option value=\"GBP\">GBP</option>
\t\t\t\t\t\t\t<option value=\"RUB\">RUB</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><!-- End row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div id=\"social_footer\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-google\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-instagram\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-pinterest\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-vimeo\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-youtube-play\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<p>© Citytours 2023</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><!-- End row -->
\t\t</div><!-- End container -->
\t</footer><!-- End footer -->

\t<div id=\"toTop\"></div><!-- Back to top button -->

\t<!-- Search Menu -->
\t<div class=\"search-overlay-menu\">
\t\t<span class=\"search-overlay-close\"><i class=\"icon_set_1_icon-77\"></i></span>
\t\t<form role=\"search\" id=\"searchform\" method=\"get\">
\t\t\t<input value=\"\" name=\"q\" type=\"text\" placeholder=\"Search...\" />
\t\t\t<button type=\"submit\"><i class=\"icon_set_1_icon-78\"></i>
\t\t\t</button>
\t\t</form>
\t</div><!-- End Search Menu -->

\t<!-- Sign In Popup -->
\t<div id=\"sign-in-dialog\" class=\"zoom-anim-dialog mfp-hide\">
\t\t<div class=\"small-dialog-header\">
\t\t\t<h3>Sign In</h3>
\t\t</div>
\t\t<form>
\t\t\t<div class=\"sign-in-wrapper\">
\t\t\t\t<a href=\"#0\" class=\"social_bt facebook\">Login with Facebook</a>
\t\t\t\t<a href=\"#0\" class=\"social_bt google\">Login with Google</a>
\t\t\t\t<div class=\"divider\"><span>Or</span></div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Email</label>
\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\">
\t\t\t\t\t<i class=\"icon_mail_alt\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Password</label>
\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" value=\"\">
\t\t\t\t\t<i class=\"icon_lock_alt\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix add_bottom_15\">
\t\t\t\t\t<div class=\"checkboxes float-start\">
\t\t\t\t\t\t<label class=\"container_check\">Remember me
\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t<span class=\"checkmark\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"float-end\"><a id=\"forgot\" href=\"javascript:void(0);\">Forgot Password?</a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center\"><input type=\"submit\" value=\"Log In\" class=\"btn_login\"></div>
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\tDon’t have an account? <a href=\"javascript:void(0);\">Sign up</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"forgot_pw\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Please confirm login email below</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email_forgot\" id=\"email_forgot\">
\t\t\t\t\t\t<i class=\"icon_mail_alt\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<p>You will receive an email containing a link allowing you to reset your password to a new
\t\t\t\t\t\tpreferred one.</p>
\t\t\t\t\t<div class=\"text-center\"><input type=\"submit\" value=\"Reset Password\" class=\"btn_1\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t\t<!--form -->
\t</div>
\t<!-- /Sign In Popup -->

\t<!-- Common scripts -->
\t<script src=\"js/jquery-3.7.0.min.js\"></script>
\t<script src=\"js/common_scripts_min.js\"></script>
\t<script src=\"js/functions.js\"></script>

\t<!-- SWITCHER  -->
\t<script src=\"js/switcher.js\"></script>
\t<div id=\"style-switcher\">
\t\t<h2>Color Switcher <a href=\"#\"><i class=\"icon_set_1_icon-65\"></i></a></h2>
\t\t<div>
\t\t\t<ul class=\"colors\" id=\"color1\">
\t\t\t\t<li><a href=\"#\" class=\"default\" title=\"Defaul\"></a></li>
\t\t\t\t<li><a href=\"#\" class=\"aqua\" title=\"Aqua\"></a></li>
\t\t\t\t<li><a href=\"#\" class=\"green_switcher\" title=\"Green\"></a></li>
\t\t\t\t<li><a href=\"#\" class=\"orange\" title=\"Orange\"></a></li>
\t\t\t\t<li><a href=\"#\" class=\"blue\" title=\"Blue\"></a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</body>


<!-- Mirrored from www.ansonika.com/citytours/payment_restaurant.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 19:13:47 GMT -->

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/order.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from www.ansonika.com/citytours/payment_restaurant.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 19:13:47 GMT -->

<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\"
\t\tcontent=\"Citytours - Premium site template for city tours agencies, transfers and tickets.\">
\t<meta name=\"author\" content=\"Ansonika\">
\t<title>CITY TOURS - City tours and travel site template by Ansonika</title>

\t<!-- Favicons-->
\t<link rel=\"shortcut icon\" href=\"img/favicon.ico\" type=\"image/x-icon\">
\t<link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"img/apple-touch-icon-57x57-precomposed.png\">
\t<link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"img/apple-touch-icon-72x72-precomposed.png\">
\t<link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\"
\t\thref=\"img/apple-touch-icon-114x114-precomposed.png\">
\t<link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\"
\t\thref=\"img/apple-touch-icon-144x144-precomposed.png\">

\t<!-- GOOGLE WEB FONT -->
\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Gochi+Hand&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap\"
\t\trel=\"stylesheet\">

\t<!-- COMMON CSS -->
\t<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
\t<link href=\"css/style.css\" rel=\"stylesheet\">
\t<link href=\"css/vendors.css\" rel=\"stylesheet\">

\t<!-- ALTERNATIVE COLORS CSS -->
\t<link href=\"#\" id=\"colors\" rel=\"stylesheet\">

</head>

<body>

\t<div id=\"preloader\">
\t\t<div class=\"sk-spinner sk-spinner-wave\">
\t\t\t<div class=\"sk-rect1\"></div>
\t\t\t<div class=\"sk-rect2\"></div>
\t\t\t<div class=\"sk-rect3\"></div>
\t\t\t<div class=\"sk-rect4\"></div>
\t\t\t<div class=\"sk-rect5\"></div>
\t\t</div>
\t</div>
\t<!-- End Preload -->

\t<div class=\"layer\"></div>
\t<!-- Mobile menu overlay mask -->

\t<!-- Header================================================== -->
\t\t<header>
\t\t\t<div id=\"top_line\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-6\"><i class=\"icon-phone\"></i><strong>+216 043204434</strong></div>
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<ul id=\"top_links\">
\t\t\t\t\t\t\t\t<li><a href=\"#sign-in-dialog\" id=\"access_link\">Se connecter</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"wishlist.html\" id=\"wishlist_link\">Mes favoris</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row -->
\t\t\t\t</div><!-- End container-->
\t\t\t</div><!-- End top line-->
\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t<div id=\"logo_home\">
\t\t\t\t\t\t\t<h1><a href=\"index.html\" title=\"City tours travel template\">City Tours travel template</a></h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<nav class=\"col-9\">
\t\t\t\t\t\t<a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu
\t\t\t\t\t\t\t\tmobile</span></a>
\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t<div id=\"header_menu\">
\t\t\t\t\t\t\t\t<img src=\"img/logo.png\" width=\"160\" height=\"34\" alt=\"City tours\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_set_1_icon-77\"></i></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu\">Accueil <i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Owl Carousel Slider</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_25.html\">KenBurns Slider</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_22.html\">Home items with Carousel</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_23.html\">Home with Search V2</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"third-level\"><a href=\"javascript:void(0);\">Revolution slider <strong
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"badge badge-danger\">New!</strong></a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_24.html\">Default slider</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_20.html\">Basic slider</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_14.html\">Youtube Hero</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_15.html\">Vimeo Hero</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_17.html\">Full Screen <strong
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"badge badge-danger\">New!</strong></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_21.html\">Full Screen Slicey <strong
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"badge badge-danger\">New!</strong></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_16.html\">Carousel</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_19.html\">Mailchimp Newsletter</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_18.html\">Fixed Caption</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_12.html\">Layer slider</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_2.html\">With Only tours</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_3.html\">Single image</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_4.html\">Header video</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_7.html\">With search panel</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_13.html\">With tabs</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_5.html\">With map</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_6.html\">With search bar</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_8.html\">Search bar + Video</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_9.html\">With Text Rotator</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_10.html\">With Cookie Bar (EU law)</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index_11.html\">Popup Advertising</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu\">Destinations <i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_tours_list.html\">All tours list</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_tours_grid.html\">All tours grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_tours_grid_masonry.html\">All tours Sort Masonry</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_tours_map_listing.html\">All tours map listing</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_tour.html\">Single tour page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_tour_with_gallery.html\">Single tour with gallery</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"third-level\"><a href=\"javascript:void(0);\">Single tour fixed sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_tour_fixed_sidebar.html\">Single tour fixed sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_tour_with_gallery_fixed_sidebar.html\">Single tour 2
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFixed Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart_fixed_sidebar.html\">Cart Fixed Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"payment_fixed_sidebar.html\">Payment Fixed Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"confirmation_fixed_sidebar.html\">Confirmation Fixed Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_tour_working_booking.html\">Single tour working booking</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart.html\">Single tour cart</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"payment.html\">Single tour booking</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu\">Réservations<i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_hotels_list.html\">All hotels list</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_hotels_grid.html\">All hotels grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_hotels_grid_masonry.html\">All hotels Sort Masonry</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_hotels_map_listing.html\">All hotels map listing</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_hotel.html\">Single hotel page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_hotel_working_booking.html\">Single hotel working booking</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_hotel_contact.html\">Single hotel contact working</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart_hotel.html\">Cart hotel</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"payment_hotel.html\">Booking hotel</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"confirmation_hotel.html\">Confirmation hotel</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu\">Boutique Bio <i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_transfer_list.html\">All transfers list</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_transfer_grid.html\">All transfers grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_transfer_grid_masonry.html\">All transfers Sort Masonry</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_transfer.html\">Single transfer page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart_transfer.html\">Cart transfers</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"payment_transfer.html\">Booking transfers</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"confirmation_transfer.html\">Confirmation transfers</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu\">Sensibilisation <i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_restaurants_list.html\">All restaurants list</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_restaurants_grid.html\">All restaurants grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_restaurants_grid_masonry.html\">All restaurants Sort Masonry</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"all_restaurants_map_listing.html\">All restaurants map listing</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single_restaurant.html\">Single restaurant page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"payment_restaurant.html\">Booking restaurant</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"confirmation_restaurant.html\">Confirmation restaurant</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"megamenu submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu-mega\">Partenariats et Durabilité<i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<div class=\"menu-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Header styles</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Default transparent</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"header_2.html\">Plain color</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"header_3.html\">Plain color on scroll</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"header_4.html\">With socials on top</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"header_5.html\">With language selection</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"header_6.html\">With lang and conversion</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"header_7.html\">With full horizontal menu</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Footer styles</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Footer default</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_2.html\">Footer style 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_3.html\">Footer style 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_4.html\">Footer style 4</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_6.html\">Footer style 6</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_7.html\">Footer style 7</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Shop section</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Shop</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop-single.html\">Shop single</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shopping-cart.html\">Shop cart</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Shop Checkout</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><!-- End row -->
\t\t\t\t\t\t\t\t\t</div><!-- End menu-wrapper -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"megamenu submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"show-submenu-mega\">Avis<i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-down-open-mini\"></i></a>
\t\t\t\t\t\t\t\t\t<div class=\"menu-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Pages</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About us</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"general_page.html\">General page</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tourist_guide.html\">Tourist guide</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"wishlist.html\">Wishlist page</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq.html\">Faq</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq_2.html\">Faq smooth scroll</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"pricing_tables.html\">Pricing tables</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"gallery_3_columns.html\">Gallery 3 columns</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"gallery_4_columns.html\">Gallery 4 columns</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"grid_gallery_1.html\">Grid gallery</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"grid_gallery_2.html\">Grid gallery with filters</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Pages</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact_us_1.html\">Contact us 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact_us_2.html\">Contact us 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog_right_sidebar.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog left sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"login.html\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"register.html\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"invoice.html\" target=\"_blank\">Invoice</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404 Error page</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"site_launch/index.html\">Site launch / Coming soon</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"timeline.html\">Tour timeline</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"page_with_map.html\"><i class=\"icon-map\"></i> Full screen
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmap</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Elements</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_2.html\"><i class=\"icon-columns\"></i> Footer with
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tworking newsletter</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_1.html\"><i class=\"icon-inbox-alt\"></i> Icon pack
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1 (1900)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_2.html\"><i class=\"icon-inbox-alt\"></i> Icon pack
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 (100)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_3.html\"><i class=\"icon-inbox-alt\"></i> Icon pack
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t3 (30)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_4.html\"><i class=\"icon-inbox-alt\"></i> Icon pack
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t4 (200)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_5.html\"><i class=\"icon-inbox-alt\"></i> Icon pack
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t5 (360)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shortcodes.html\"><i class=\"icon-tools\"></i> Shortcodes</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"newsletter_template/newsletter.html\" target=\"blank\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\" icon-mail\"></i> Responsive email template</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"admin.html\"><i class=\"icon-cog-1\"></i> Admin area</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"html_rtl/index.html\"><i class=\"icon-align-right\"></i> RTL
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVersion</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><!-- End row -->
\t\t\t\t\t\t\t\t\t</div><!-- End menu-wrapper -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- End main-menu -->
\t\t\t\t\t\t<ul id=\"top_tools\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"search-overlay-menu-btn\"><i class=\"icon_search\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"dropdown dropdown-cart\">
\t\t\t\t\t\t\t\t\t<a href=\"#0\" data-bs-toggle=\"dropdown\" class=\"cart_bt\"><i
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon_bag_alt\"></i><strong>3</strong></a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" id=\"cart_items\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"img/thumb_cart_1.jpg\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t\t<strong><a href=\"#\">Louvre museum</a>1x \$36.00 </strong>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"img/thumb_cart_2.jpg\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t\t<strong><a href=\"#\">Versailles tour</a>2x \$36.00 </strong>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"img/thumb_cart_3.jpg\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t\t<strong><a href=\"#\">Versailles tour</a>1x \$36.00 </strong>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div>Total: <span>\$120.00</span></div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"cart.html\" class=\"button_drop\">Go to cart</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"payment.html\" class=\"button_drop outline\">Check out</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div><!-- End dropdown-cart-->
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div><!-- container -->
\t\t</header><!-- End Header -->


\t<section id=\"hero_2\" class=\"background-image\" data-background=\"url(img/restaurant_top_in.jpg)\">
\t\t<div class=\"opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.4)\">
\t\t\t<div class=\"intro_title\">
\t\t\t\t<h1>Place your order</h1>
\t\t\t\t<div class=\"bs-wizard row\">

\t\t\t\t\t<div class=\"col-6 bs-wizard-step complete\">
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Your details</div>
\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t<div class=\"progress-bar\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-6 bs-wizard-step disabled\">
\t\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\">Finish!</div>
\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t<div class=\"progress-bar\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"confirmation_restaurant.html\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- End bs-wizard -->
\t\t\t</div>
\t\t\t<!-- End intro-title -->
\t\t</div>
\t\t<!-- End opacity-mask-->
\t</section>
\t<!-- End Section hero_2 -->

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
\t\t<!-- End position -->

\t\t<div class=\"container margin_60\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 add_bottom_15\">
\t\t\t\t\t<div class=\"form_title\">
\t\t\t\t\t\t<h3><strong>1</strong>Your Details</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tMussum ipsum cacilds, vidis litro abertis.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>First name</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"firstname_booking\"
\t\t\t\t\t\t\t\t\t\tname=\"firstname_booking\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Last name</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lastname_booking\"
\t\t\t\t\t\t\t\t\t\tname=\"lastname_booking\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email_booking\" name=\"email_booking\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Confirm email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email_booking_2\" name=\"email_booking_2\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Telephone</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"telephone_booking\" name=\"telephone_booking\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--End step -->

\t\t\t\t\t<div class=\"form_title\">
\t\t\t\t\t\t<h3><strong>2</strong>Payment Information</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tMussum ipsum cacilds, vidis litro abertis.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label>Name on card</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name_card_bookign\" name=\"name_card_bookign\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Card number</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"card_number\" name=\"card_number\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t<img src=\"img/cards.png\" width=\"207\" height=\"43\" alt=\"Cards\" class=\"cards\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<label>Expiration date</label>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"expire_month\" name=\"expire_month\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" placeholder=\"MM\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"expire_year\" name=\"expire_year\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"Year\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Security code</label>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"ccv\" name=\"ccv\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"CCV\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/icon_ccv.gif\" width=\"50\" height=\"29\" alt=\"ccv\"><small>Last 3
\t\t\t\t\t\t\t\t\t\t\t\tdigits</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--End row -->

\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<h4>Or checkout with Paypal</h4>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent
\t\t\t\t\t\t\tornatus molestie, reque fierent dissentiunt mel ea.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<img src=\"img/paypal_bt.png\" alt=\"Image\">
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<!--End step -->

\t\t\t\t\t<div class=\"form_title\">
\t\t\t\t\t\t<h3><strong>3</strong>Billing Address</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tMussum ipsum cacilds, vidis litro abertis.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Country</label>
\t\t\t\t\t\t\t\t\t<div class=\"styled-select-common\">
\t\t\t\t\t\t\t\t\t\t<select name=\"country\" id=\"country\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected>Select your country</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe\">Europe</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"United states\">United states</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia\">Asia</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Street line 1</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"street_1\" name=\"street_1\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Street line 2</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"street_2\" name=\"street_2\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>City</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"city_booking\" name=\"city_booking\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>State</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"state_booking\" name=\"state_booking\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Postal code</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"postal_code\" name=\"postal_code\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--End row -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--End step -->

\t\t\t\t\t<div id=\"policy\">
\t\t\t\t\t\t<h4>Cancellation policy</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"container_check\">
\t\t\t\t\t\t\t\tI accept terms and conditions and general policy.
\t\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t\t<span class=\"checkmark\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"confirmation_restaurant.html\" class=\"btn_1 green medium\">Book now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<aside class=\"col-lg-4\">
\t\t\t\t\t<div class=\"box_style_1\">
\t\t\t\t\t\t<h3 class=\"inner\">- Summary -</h3>
\t\t\t\t\t\t<table class=\"table table_summary\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\tAdults
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t2
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\tChildren
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\tDay
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t25/10/2015
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\tTime
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t7.30pm
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<a class=\"btn_full\" href=\"confirmation_restaurant.html\">Book now</a>
\t\t\t\t\t\t<a class=\"btn_full_outline\" href=\"#\"><i class=\"icon-right\"></i> Continue shopping</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box_style_4\">
\t\t\t\t\t\t<i class=\"icon_set_1_icon-57\"></i>
\t\t\t\t\t\t<h4>Need <span>Help?</span></h4>
\t\t\t\t\t\t<a href=\"tel://004542344599\" class=\"phone\">+216 423 445 99</a>
\t\t\t\t\t\t<small>Monday to Friday 9.00am - 7.30pm</small>
\t\t\t\t\t</div>
\t\t\t\t</aside>

\t\t\t</div>
\t\t\t<!--End row -->
\t\t</div>
\t\t<!--End container -->
\t</main>
\t<!-- End main -->

\t<footer class=\"revealed\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<h3>Need help?</h3>
\t\t\t\t\t<a href=\"tel://004542344599\" id=\"phone\">+45 423 445 99</a>
\t\t\t\t\t<a href=\"mailto:help@citytours.com\" id=\"email_footer\">help@citytours.com</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<h3>About</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">About us</a></li>
\t\t\t\t\t\t<li><a href=\"#\">FAQ</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Login</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Register</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Terms and condition</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<h3>Discover</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Community blog</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Tour guide</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Wishlist</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Gallery</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<h3>Settings</h3>
\t\t\t\t\t<div class=\"styled-select\">
\t\t\t\t\t\t<select name=\"lang\" id=\"lang\">
\t\t\t\t\t\t\t<option value=\"English\" selected>English</option>
\t\t\t\t\t\t\t<option value=\"French\">French</option>
\t\t\t\t\t\t\t<option value=\"Spanish\">Spanish</option>
\t\t\t\t\t\t\t<option value=\"Russian\">Russian</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"styled-select\">
\t\t\t\t\t\t<select name=\"currency\" id=\"currency\">
\t\t\t\t\t\t\t<option value=\"USD\" selected>USD</option>
\t\t\t\t\t\t\t<option value=\"EUR\">EUR</option>
\t\t\t\t\t\t\t<option value=\"GBP\">GBP</option>
\t\t\t\t\t\t\t<option value=\"RUB\">RUB</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><!-- End row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div id=\"social_footer\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-google\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-instagram\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-pinterest\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-vimeo\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-youtube-play\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<p>© Citytours 2023</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><!-- End row -->
\t\t</div><!-- End container -->
\t</footer><!-- End footer -->

\t<div id=\"toTop\"></div><!-- Back to top button -->

\t<!-- Search Menu -->
\t<div class=\"search-overlay-menu\">
\t\t<span class=\"search-overlay-close\"><i class=\"icon_set_1_icon-77\"></i></span>
\t\t<form role=\"search\" id=\"searchform\" method=\"get\">
\t\t\t<input value=\"\" name=\"q\" type=\"text\" placeholder=\"Search...\" />
\t\t\t<button type=\"submit\"><i class=\"icon_set_1_icon-78\"></i>
\t\t\t</button>
\t\t</form>
\t</div><!-- End Search Menu -->

\t<!-- Sign In Popup -->
\t<div id=\"sign-in-dialog\" class=\"zoom-anim-dialog mfp-hide\">
\t\t<div class=\"small-dialog-header\">
\t\t\t<h3>Sign In</h3>
\t\t</div>
\t\t<form>
\t\t\t<div class=\"sign-in-wrapper\">
\t\t\t\t<a href=\"#0\" class=\"social_bt facebook\">Login with Facebook</a>
\t\t\t\t<a href=\"#0\" class=\"social_bt google\">Login with Google</a>
\t\t\t\t<div class=\"divider\"><span>Or</span></div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Email</label>
\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\">
\t\t\t\t\t<i class=\"icon_mail_alt\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Password</label>
\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" value=\"\">
\t\t\t\t\t<i class=\"icon_lock_alt\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix add_bottom_15\">
\t\t\t\t\t<div class=\"checkboxes float-start\">
\t\t\t\t\t\t<label class=\"container_check\">Remember me
\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t<span class=\"checkmark\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"float-end\"><a id=\"forgot\" href=\"javascript:void(0);\">Forgot Password?</a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center\"><input type=\"submit\" value=\"Log In\" class=\"btn_login\"></div>
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\tDon’t have an account? <a href=\"javascript:void(0);\">Sign up</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"forgot_pw\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Please confirm login email below</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email_forgot\" id=\"email_forgot\">
\t\t\t\t\t\t<i class=\"icon_mail_alt\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<p>You will receive an email containing a link allowing you to reset your password to a new
\t\t\t\t\t\tpreferred one.</p>
\t\t\t\t\t<div class=\"text-center\"><input type=\"submit\" value=\"Reset Password\" class=\"btn_1\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t\t<!--form -->
\t</div>
\t<!-- /Sign In Popup -->

\t<!-- Common scripts -->
\t<script src=\"js/jquery-3.7.0.min.js\"></script>
\t<script src=\"js/common_scripts_min.js\"></script>
\t<script src=\"js/functions.js\"></script>

\t<!-- SWITCHER  -->
\t<script src=\"js/switcher.js\"></script>
\t<div id=\"style-switcher\">
\t\t<h2>Color Switcher <a href=\"#\"><i class=\"icon_set_1_icon-65\"></i></a></h2>
\t\t<div>
\t\t\t<ul class=\"colors\" id=\"color1\">
\t\t\t\t<li><a href=\"#\" class=\"default\" title=\"Defaul\"></a></li>
\t\t\t\t<li><a href=\"#\" class=\"aqua\" title=\"Aqua\"></a></li>
\t\t\t\t<li><a href=\"#\" class=\"green_switcher\" title=\"Green\"></a></li>
\t\t\t\t<li><a href=\"#\" class=\"orange\" title=\"Orange\"></a></li>
\t\t\t\t<li><a href=\"#\" class=\"blue\" title=\"Blue\"></a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</body>


<!-- Mirrored from www.ansonika.com/citytours/payment_restaurant.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 19:13:47 GMT -->

</html>", "client/order.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\order.html.twig");
    }
}
