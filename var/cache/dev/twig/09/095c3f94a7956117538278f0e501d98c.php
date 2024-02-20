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

/* client/partenariats.html.twig */
class __TwigTemplate_e0a619b758bb4b90795d4231960c9bc8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/partenariats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/partenariats.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from www.ansonika.com/citytours/single_hotel_working_booking.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 19:13:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Citytours - Premium site template for city tours agencies, transfers and tickets.\">
    <meta name=\"author\" content=\"Ansonika\">
    <title>CITY TOURS - City tours and travel site template by Ansonika</title>

    <!-- Favicons-->
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"img/apple-touch-icon-57x57-precomposed.png\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"img/apple-touch-icon-72x72-precomposed.png\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\" href=\"img/apple-touch-icon-114x114-precomposed.png\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\" href=\"img/apple-touch-icon-144x144-precomposed.png\">

    <!-- GOOGLE WEB FONT -->
    <link href=\"https://fonts.googleapis.com/css2?family=Gochi+Hand&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap\" rel=\"stylesheet\">

    <!-- COMMON CSS -->
\t<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/style.css\" rel=\"stylesheet\">
\t<link href=\"css/vendors.css\" rel=\"stylesheet\">
\t
\t<!-- ALTERNATIVE COLORS CSS -->
    <link href=\"#\" id=\"colors\" rel=\"stylesheet\">
\t
</head>
<body class=\"datepicker_mobile_full\"> <!-- Remove this class to disable datepicker full on mobile -->


    <div id=\"preloader\">
        <div class=\"sk-spinner sk-spinner-wave\">
            <div class=\"sk-rect1\"></div>
            <div class=\"sk-rect2\"></div>
            <div class=\"sk-rect3\"></div>
            <div class=\"sk-rect4\"></div>
            <div class=\"sk-rect5\"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class=\"layer\"></div>
    <!-- Mobile menu overlay mask -->

     <!-- Header================================================== -->
\t<header>
\t\t<div id=\"top_line\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-6\"><i class=\"icon-phone\"></i><strong>0045 043204434</strong></div>
                    <div class=\"col-6\">
                        <ul id=\"top_links\">
                            <li><a href=\"#sign-in-dialog\" id=\"access_link\">Sign in</a></li>
                            <li><a href=\"wishlist.html\" id=\"wishlist_link\">Wishlist</a></li>
                            <li><a href=\"https://1.envato.market/ryzjQ\" target=\"_parent\">Purchase this template</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t<a href=\"index.html\"><img src=\"img/logo.png\" width=\"160\" height=\"34\" alt=\"City tours\" class=\"logo_normal\"></a>
\t\t\t\t\t\t<a href=\"index.html\"><img src=\"img/logo_sticky.png\" width=\"160\" height=\"34\" alt=\"City tours\" class=\"logo_sticky\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<nav class=\"col-9\">
                    <a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu mobile</span></a>
                    <div class=\"main-menu\">
                        <div id=\"header_menu\">
                            <img src=\"img/logo_sticky.png\" width=\"160\" height=\"34\" alt=\"City tours\">
                        </div>
                        <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_set_1_icon-77\"></i></a>
                         <ul>
                            <li class=\"submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu\">Home <i class=\"icon-down-open-mini\"></i></a>
                                <ul>
                                    <li><a href=\"index.html\">Owl Carousel Slider</a></li>
                                    <li><a href=\"index_25.html\">KenBurns Slider</a></li>
                                    <li><a href=\"index_22.html\">Home items with Carousel</a></li>
                                    <li><a href=\"index_23.html\">Home with Search V2</a></li>
                                   <li class=\"third-level\"><a href=\"javascript:void(0);\">Revolution slider <strong class=\"badge badge-danger\">New!</strong></a>
                                        <ul>
                                            <li><a href=\"index_24.html\">Default slider</a></li>
                                            <li><a href=\"index_20.html\">Basic slider</a></li>
                                            <li><a href=\"index_14.html\">Youtube Hero</a></li>
                                            <li><a href=\"index_15.html\">Vimeo Hero</a></li>
                                            <li><a href=\"index_17.html\">Full Screen <strong class=\"badge badge-danger\">New!</strong></a></li>
                                            <li><a href=\"index_21.html\">Full Screen Slicey <strong class=\"badge badge-danger\">New!</strong></a></li>
                                            <li><a href=\"index_16.html\">Carousel</a></li>
                                            <li><a href=\"index_19.html\">Mailchimp Newsletter</a></li>
                                            <li><a href=\"index_18.html\">Fixed Caption</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"index_12.html\">Layer slider</a></li>
                                    <li><a href=\"index_2.html\">With Only tours</a></li>
                                    <li><a href=\"index_3.html\">Single image</a></li>
                                    <li><a href=\"index_4.html\">Header video</a></li>
                                    <li><a href=\"index_7.html\">With search panel</a></li>
                                    <li><a href=\"index_13.html\">With tabs</a></li>
                                    <li><a href=\"index_5.html\">With map</a></li>
                                    <li><a href=\"index_6.html\">With search bar</a></li>
                                    <li><a href=\"index_8.html\">Search bar + Video</a></li>
                                    <li><a href=\"index_9.html\">With Text Rotator</a></li>
                                    <li><a href=\"index_10.html\">With Cookie Bar (EU law)</a></li>
                                    <li><a href=\"index_11.html\">Popup Advertising</a></li>
                                </ul>
                            </li>
                            <li class=\"submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu\">Tours <i class=\"icon-down-open-mini\"></i></a>
                                <ul>
                                    <li><a href=\"all_tours_list.html\">All tours list</a></li>
                                    <li><a href=\"all_tours_grid.html\">All tours grid</a></li>
                                    <li><a href=\"all_tours_grid_masonry.html\">All tours Sort Masonry</a></li>
                                    <li><a href=\"all_tours_map_listing.html\">All tours map listing</a></li>
                                    <li><a href=\"single_tour.html\">Single tour page</a></li>
                                    <li><a href=\"single_tour_with_gallery.html\">Single tour with gallery</a></li>
                                    <li class=\"third-level\"><a href=\"javascript:void(0);\">Single tour fixed sidebar</a>
                                        <ul>
                                            <li><a href=\"single_tour_fixed_sidebar.html\">Single tour fixed sidebar</a></li>
                                            <li><a href=\"single_tour_with_gallery_fixed_sidebar.html\">Single tour 2 Fixed Sidebar</a></li>
                                            <li><a href=\"cart_fixed_sidebar.html\">Cart Fixed Sidebar</a></li>
                                            <li><a href=\"payment_fixed_sidebar.html\">Payment Fixed Sidebar</a></li>
                                            <li><a href=\"confirmation_fixed_sidebar.html\">Confirmation Fixed Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"single_tour_working_booking.html\">Single tour working booking</a></li>
                                    <li><a href=\"cart.html\">Single tour cart</a></li>
                                    <li><a href=\"payment.html\">Single tour booking</a></li>
                                </ul>
                            </li>
                             <li class=\"submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu\">Hotels <i class=\"icon-down-open-mini\"></i></a><ul>
                                    <li><a href=\"all_hotels_list.html\">All hotels list</a></li>
                                    <li><a href=\"all_hotels_grid.html\">All hotels grid</a></li>
                                    <li><a href=\"all_hotels_grid_masonry.html\">All hotels Sort Masonry</a></li>
                                    <li><a href=\"all_hotels_map_listing.html\">All hotels map listing</a></li>
                                    <li><a href=\"single_hotel.html\">Single hotel page</a></li>
                                    <li><a href=\"single_hotel_working_booking.html\">Single hotel working booking</a></li>
                                    <li><a href=\"single_hotel_contact.html\">Single hotel contact working</a></li>
                                    <li><a href=\"cart_hotel.html\">Cart hotel</a></li>
                                    <li><a href=\"payment_hotel.html\">Booking hotel</a></li>
                                    <li><a href=\"confirmation_hotel.html\">Confirmation hotel</a></li>
                                </ul>
                            </li>
                            <li class=\"submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu\">Transfers <i class=\"icon-down-open-mini\"></i></a>
                                <ul>
                                    <li><a href=\"all_transfer_list.html\">All transfers list</a></li>
                                    <li><a href=\"all_transfer_grid.html\">All transfers grid</a></li>
                                    <li><a href=\"all_transfer_grid_masonry.html\">All transfers Sort Masonry</a></li>
                                    <li><a href=\"single_transfer.html\">Single transfer page</a></li>
                                    <li><a href=\"cart_transfer.html\">Cart transfers</a></li>
                                    <li><a href=\"payment_transfer.html\">Booking transfers</a></li>
                                    <li><a href=\"confirmation_transfer.html\">Confirmation transfers</a></li>
                                </ul>
                            </li>
                              <li class=\"submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu\">Restaurants <i class=\"icon-down-open-mini\"></i></a>
                                <ul>
                                    <li><a href=\"all_restaurants_list.html\">All restaurants list</a></li>
                                    <li><a href=\"all_restaurants_grid.html\">All restaurants grid</a></li>
                                    <li><a href=\"all_restaurants_grid_masonry.html\">All restaurants Sort Masonry</a></li>
                                    <li><a href=\"all_restaurants_map_listing.html\">All restaurants map listing</a></li>
                                    <li><a href=\"single_restaurant.html\">Single restaurant page</a></li>
                                    <li><a href=\"payment_restaurant.html\">Booking restaurant</a></li>
                                    <li><a href=\"confirmation_restaurant.html\">Confirmation restaurant</a></li>
                                </ul>
                            </li>
                             <li class=\"megamenu submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu-mega\">Bonus<i class=\"icon-down-open-mini\"></i></a>
                                <div class=\"menu-wrapper\">
                                \t<div class=\"row\">
                                        <div class=\"col-lg-4\">
                                            <h3>Header styles</h3>
                                            <ul>
                                                <li><a href=\"index.html\">Default transparent</a></li>
                                                <li><a href=\"header_2.html\">Plain color</a></li>
                                                <li><a href=\"header_3.html\">Plain color on scroll</a></li>
                                                <li><a href=\"header_4.html\">With socials on top</a></li>
                                                <li><a href=\"header_5.html\">With language selection</a></li>
                                                <li><a href=\"header_6.html\">With lang and conversion</a></li>
                                                <li><a href=\"header_7.html\">With full horizontal menu</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <h3>Footer styles</h3>
                                            <ul>
                                                <li><a href=\"index.html\">Footer default</a></li>
                                                <li><a href=\"footer_2.html\">Footer style 2</a></li>
                                                <li><a href=\"footer_3.html\">Footer style 3</a></li>
                                                <li><a href=\"footer_4.html\">Footer style 4</a></li>
                                                <li><a href=\"footer_6.html\">Footer style 6</a></li>
                                                <li><a href=\"footer_7.html\">Footer style 7</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <h3>Shop section</h3>
                                            <ul>
                                                <li><a href=\"shop.html\">Shop</a></li>
                                                <li><a href=\"shop-single.html\">Shop single</a></li>
                                                <li><a href=\"shopping-cart.html\">Shop cart</a></li>
                                                <li><a href=\"checkout.html\">Shop Checkout</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- End row -->
                                </div><!-- End menu-wrapper -->
                            </li>
                            <li class=\"megamenu submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu-mega\">Pages<i class=\"icon-down-open-mini\"></i></a>
                                <div class=\"menu-wrapper\">
                                \t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Pages</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About us</a></li>
\t\t\t\t\t\t\t\t\t\t\t   <li><a href=\"general_page.html\">General page</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tourist_guide.html\">Tourist guide</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"wishlist.html\">Wishlist page</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"faq.html\">Faq</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"faq_2.html\">Faq smooth scroll</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"pricing_tables.html\">Pricing tables</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"gallery_3_columns.html\">Gallery 3 columns</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"gallery_4_columns.html\">Gallery 4 columns</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"grid_gallery_1.html\">Grid gallery</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"grid_gallery_2.html\">Grid gallery with filters</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Pages</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact_us_1.html\">Contact us 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact_us_2.html\">Contact us 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"blog_right_sidebar.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog left sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"login.html\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"register.html\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"invoice.html\" target=\"_blank\">Invoice</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404 Error page</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"site_launch/index.html\">Site launch / Coming soon</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"timeline.html\">Tour timeline</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"page_with_map.html\"><i class=\"icon-map\"></i>  Full screen map</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Elements</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_2.html\"><i class=\"icon-columns\"></i> Footer with working newsletter</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_1.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 1 (1900)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_2.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 2 (100)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_3.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 3 (30)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_4.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 4 (200)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_5.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 5 (360)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shortcodes.html\"><i class=\"icon-tools\"></i> Shortcodes</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"newsletter_template/newsletter.html\" target=\"blank\"><i class=\" icon-mail\"></i> Responsive email template</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"admin.html\"><i class=\"icon-cog-1\"></i> Admin area</a></li>
                                                <li><a href=\"html_rtl/index.html\"><i class=\"icon-align-right\"></i>  RTL Version</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div><!-- End row -->
                                </div><!-- End menu-wrapper -->
                            </li>
                        </ul>
                    </div><!-- End main-menu -->
                    <ul id=\"top_tools\">
                        <li>
                            <a href=\"javascript:void(0);\" class=\"search-overlay-menu-btn\"><i class=\"icon_search\"></i></a>
                        </li>
                        <li>
                            <div class=\"dropdown dropdown-cart\">
                                <a href=\"#0\" data-bs-toggle=\"dropdown\" class=\"cart_bt\"><i class=\"icon_bag_alt\"></i><strong>3</strong></a>
                                <ul class=\"dropdown-menu\" id=\"cart_items\">
                                    <li>
                                        <div class=\"image\"><img src=\"img/thumb_cart_1.jpg\" alt=\"image\"></div>
                                        <strong><a href=\"#\">Louvre museum</a>1x \$36.00 </strong>
                                        <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                    </li>
                                    <li>
                                        <div class=\"image\"><img src=\"img/thumb_cart_2.jpg\" alt=\"image\"></div>
                                        <strong><a href=\"#\">Versailles tour</a>2x \$36.00 </strong>
                                        <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                    </li>
                                    <li>
                                        <div class=\"image\"><img src=\"img/thumb_cart_3.jpg\" alt=\"image\"></div>
                                        <strong><a href=\"#\">Versailles tour</a>1x \$36.00 </strong>
                                        <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                    </li>
                                    <li>
                                        <div>Total: <span>\$120.00</span></div>
                                        <a href=\"cart.html\" class=\"button_drop\">Go to cart</a>
                                        <a href=\"payment.html\" class=\"button_drop outline\">Check out</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
\t\t\t</div>
\t\t</div>
\t\t<!-- container -->
\t</header>
\t<!-- End Header -->

    <section class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"img/single_hotel_bg_1.jpg\" data-natural-width=\"1400\" data-natural-height=\"470\">
    <div class=\"parallax-content-2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <span class=\"rating\"><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\" icon-star-empty\"></i></span>
                    <h1>Mariott Hotel</h1>
                    <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span>
                </div>
                <div class=\"col-md-4\">
                    <div id=\"price_single_main\" class=\"hotel\">
                        from/per night <span><sup>\$</sup>95</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- End section -->
\t
\t<main>
\t<div id=\"position\">
\t\t<div class=\"container\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t<li><a href=\"#\">Category</a></li>
\t\t\t\t<li>Page active</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<!-- End Position -->

    
     <div class=\"collapse\" id=\"collapseMap\">
        <div id=\"map\" class=\"map\"></div>
    </div><!-- End Map -->
\t
    <div class=\"container margin_60\">
    <div class=\"row\">
        <div class=\"col-lg-8\" id=\"single_tour_desc\">
\t\t\t\t\t<div id=\"single_tour_feat\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon_set_2_icon-116\"></i>Plasma TV</li>
\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-86\"></i>Free Wifi</li>
\t\t\t\t\t\t\t<li><i class=\"icon_set_2_icon-110\"></i>Poll</li>
\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-59\"></i>Breakfast</li>
\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-22\"></i>Pet allowed</li>
\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-13\"></i>Accessibiliy</li>
\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-27\"></i>Parking</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"d-block d-lg-none\"><a class=\"btn_map\" data-bs-toggle=\"collapse\" href=\"#collapseMap\" aria-expanded=\"false\" aria-controls=\"collapseMap\" data-text-swap=\"Hide map\" data-text-original=\"View on map\">View on map</a>
\t\t\t\t\t</p>
\t\t\t\t\t<!-- Map button for tablets/mobiles -->
\t\t\t\t\t<div id=\"Img_carousel\" class=\"slider-pro\">
\t\t\t\t\t\t<div class=\"sp-slides\">

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/1_medium.jpg\" data-small=\"img/slider_single_tour/1_small.jpg\" data-medium=\"img/slider_single_tour/1_medium.jpg\" data-large=\"img/slider_single_tour/1_large.jpg\" data-retina=\"img/slider_single_tour/1_large.jpg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/2_medium.jpg\" data-small=\"img/slider_single_tour/2_small.jpg\" data-medium=\"img/slider_single_tour/2_medium.jpg\" data-large=\"img/slider_single_tour/2_large.jpg\" data-retina=\"img/slider_single_tour/2_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/3_medium.jpg\" data-small=\"img/slider_single_tour/3_small.jpg\" data-medium=\"img/slider_single_tour/3_medium.jpg\" data-large=\"img/slider_single_tour/3_large.jpg\" data-retina=\"img/slider_single_tour/3_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/4_medium.jpg\" data-small=\"img/slider_single_tour/4_small.jpg\" data-medium=\"img/slider_single_tour/4_medium.jpg\" data-large=\"img/slider_single_tour/4_large.jpg\" data-retina=\"img/slider_single_tour/4_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/5_medium.jpg\" data-small=\"img/slider_single_tour/5_small.jpg\" data-medium=\"img/slider_single_tour/5_medium.jpg\" data-large=\"img/slider_single_tour/5_large.jpg\" data-retina=\"img/slider_single_tour/5_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/6_medium.jpg\" data-small=\"img/slider_single_tour/6_small.jpg\" data-medium=\"img/slider_single_tour/6_medium.jpg\" data-large=\"img/slider_single_tour/6_large.jpg\" data-retina=\"img/slider_single_tour/6_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/7_medium.jpg\" data-small=\"img/slider_single_tour/7_small.jpg\" data-medium=\"img/slider_single_tour/7_medium.jpg\" data-large=\"img/slider_single_tour/7_large.jpg\" data-retina=\"img/slider_single_tour/7_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/8_medium.jpg\" data-small=\"img/slider_single_tour/8_small.jpg\" data-medium=\"img/slider_single_tour/8_medium.jpg\" data-large=\"img/slider_single_tour/8_large.jpg\" data-retina=\"img/slider_single_tour/8_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/9_medium.jpg\" data-small=\"img/slider_single_tour/9_small.jpg\" data-medium=\"img/slider_single_tour/9_medium.jpg\" data-large=\"img/slider_single_tour/9_large.jpg\" data-retina=\"img/slider_single_tour/9_large.jpg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sp-thumbnails\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/1_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/2_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/3_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/4_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/5_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/6_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/7_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/8_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/9_medium.jpg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<hr>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<h3>Description</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Hotel facilities</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>Lorem ipsum dolor sit amet</li>
\t\t\t\t\t\t\t\t\t\t<li>No scripta electram necessitatibus sit</li>
\t\t\t\t\t\t\t\t\t\t<li>Quidam percipitur instructior an eum</li>
\t\t\t\t\t\t\t\t\t\t<li>Ut est saepe munere ceteros</li>
\t\t\t\t\t\t\t\t\t\t<li>No scripta electram necessitatibus sit</li>
\t\t\t\t\t\t\t\t\t\t<li>Quidam percipitur instructior an eum</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>Lorem ipsum dolor sit amet</li>
\t\t\t\t\t\t\t\t\t\t<li>No scripta electram necessitatibus sit</li>
\t\t\t\t\t\t\t\t\t\t<li>Quidam percipitur instructior an eum</li>
\t\t\t\t\t\t\t\t\t\t<li>No scripta electram necessitatibus sit</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row  -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End col-md-9  -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row  -->

\t\t\t\t\t<hr>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<h3>Rooms Types</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t<h4>Single Room</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_icons\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-86\"></i> Free wifi</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon_set_2_icon-116\"></i> Plasma Tv</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon_set_2_icon-106\"></i> Safety box</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>Lorem ipsum dolor sit amet</li>
\t\t\t\t\t\t\t\t\t\t<li>No scripta electram necessitatibus sit</li>
\t\t\t\t\t\t\t\t\t\t<li>Quidam percipitur instructior an eum</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row  -->
\t\t\t\t\t\t\t<div class=\"owl-carousel owl-theme carousel-thumbs-2 magnific-gallery\">
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/1.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/1.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/2.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/2.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/3.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/3.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/4.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/4.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End photo carousel  -->

\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t<h4>Double Room</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_icons\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-86\"></i> Free wifi</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon_set_2_icon-116\"></i> Plasma Tv</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon_set_2_icon-106\"></i> Safety box</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>Lorem ipsum dolor sit amet</li>
\t\t\t\t\t\t\t\t\t\t<li>No scripta electram necessitatibus sit</li>
\t\t\t\t\t\t\t\t\t\t<li>Quidam percipitur instructior an eum</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row  -->
\t\t\t\t\t\t\t<div class=\"owl-carousel owl-theme carousel-thumbs-2 magnific-gallery\">
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/1.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/1.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/2.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/2.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/3.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/3.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/4.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/4.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End photo carousel  -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End col-md-9  -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row  -->

\t\t\t\t\t<hr>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<h3>Reviews</h3>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn_1 add_bottom_30\" data-bs-toggle=\"modal\" data-bs-target=\"#myReview\">Leave a review</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t<div id=\"score_detail\"><span>7.5</span>Good <small>(Based on 34 reviews)</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End general_rating -->
\t\t\t\t\t\t\t<div class=\"row\" id=\"rating_summary\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>Position
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>Comfort
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>Price
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>Quality
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row -->
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"review_strip_single\">
\t\t\t\t\t\t\t\t<img src=\"img/avatar1.jpg\" alt=\"Image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t<small> - 10 March 2015 -</small>
\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End review strip -->

\t\t\t\t\t\t\t<div class=\"review_strip_single\">
\t\t\t\t\t\t\t\t<img src=\"img/avatar2.jpg\" alt=\"Image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t<small> - 10 March 2015 -</small>
\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End review strip -->

\t\t\t\t\t\t\t<div class=\"review_strip_single last\">
\t\t\t\t\t\t\t\t<img src=\"img/avatar3.jpg\" alt=\"Image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t<small> - 10 March 2015 -</small>
\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End review strip -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--End  single_tour_desc-->
        
        <aside class=\"col-lg-4\">
        <p class=\"d-none d-xl-block d-lg-block\">
            <a class=\"btn_map\" data-bs-toggle=\"collapse\" href=\"#collapseMap\" aria-expanded=\"false\" aria-controls=\"collapseMap\" data-text-swap=\"Hide map\" data-text-original=\"View on map\">View on map</a>
        </p>
        <div class=\"box_style_1 expose\">
                <form id=\"booking_hotel\" action=\"#\" method=\"post\">
            <h3 class=\"inner\">Check Availability</h3>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group\">
                        <label><i class=\"icon-calendar-7\"></i> Check in / Check out</label>
                        <input class=\"date-pick form-control required\" type=\"text\" placeholder=\"Select dates\" name=\"check_in_hotel\">
                    </div>
               </div>
            </div>
            <div class=\"row\">
                <div class=\"col-6\">
                    <div class=\"form-group\">
                        <label>Adults</label>
                        <div class=\"numbers-row\">
                            <input type=\"text\" value=\"1\" id=\"adults_hotel\" class=\"qty2 form-control required\" name=\"adults_hotel\">
                        </div>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"form-group\">
                        <label>Children</label>
                        <div class=\"numbers-row\">
                            <input type=\"text\" value=\"0\" id=\"children_hotels\" class=\"qty2 form-control required\" name=\"children_hotels\">
                        </div>
                    </div>
                </div>
                </div>
                 <hr>
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label>Name</label>
\t\t\t\t\t\t\t<input class=\"form-control required\" name=\"name_hotel_booking\" id=\"name_hotel_booking\" type=\"text\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label>Last name</label>
\t\t\t\t\t\t\t<input class=\"form-control required\" name=\"last_hotel_name_booking\" id=\"last_hotel_name_booking\" type=\"text\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
               
\t\t\t\t<div class=\"form-group\" style=\"position:relative\">
\t\t\t\t\t<label>Email</label>
\t\t\t\t\t<input class=\"form-control required\" type=\"email\" name=\"email_hotel_booking\" id=\"email_hotel_booking\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" style=\"position:relative\">
\t\t\t\t\t<label>Telephone</label>
\t\t\t\t\t<input class=\"form-control required\" type=\"text\" name=\"phone_hotel_booking\" id=\"phone_hotel_booking\">
\t\t\t\t</div>
            <br>
            
            <button type=\"submit\" class=\"btn_full\">Check now</button>
            <a class=\"btn_full_outline\" href=\"#\"><i class=\" icon-heart\"></i> Add to whislist</a>
            </form>
            \t\t<!-- END SEND MAIL SCRIPT -->   
        </div><!--/box_style_1 -->
        
        <div class=\"box_style_4\">
            <i class=\"icon_set_1_icon-90\"></i>
            <h4><span>Book</span> by phone</h4>
            <a href=\"tel://004542344599\" class=\"phone\">+45 423 445 99</a>
            <small>Monday to Friday 9.00am - 7.30pm</small>
        </div>
        
        </aside>
    </div><!--End row -->
    </div><!--End container -->
    
    <div id=\"overlay\"></div><!-- Mask on input focus --> 
    
    </main><!-- End main -->
\t
 \t<footer class=\"revealed\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h3>Need help?</h3>
                    <a href=\"tel://004542344599\" id=\"phone\">+45 423 445 99</a>
                    <a href=\"mailto:help@citytours.com\" id=\"email_footer\">help@citytours.com</a>
                </div>
                <div class=\"col-md-3\">
                    <h3>About</h3>
                    <ul>
                        <li><a href=\"#\">About us</a></li>
                        <li><a href=\"#\">FAQ</a></li>
                        <li><a href=\"#\">Login</a></li>
                        <li><a href=\"#\">Register</a></li>
                         <li><a href=\"#\">Terms and condition</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href=\"#\">Community blog</a></li>
                        <li><a href=\"#\">Tour guide</a></li>
                        <li><a href=\"#\">Wishlist</a></li>
                         <li><a href=\"#\">Gallery</a></li>
                    </ul>
                </div>
                <div class=\"col-md-2\">
                    <h3>Settings</h3>
                    <div class=\"styled-select\">
                        <select name=\"lang\" id=\"lang\">
                            <option value=\"English\" selected>English</option>
                            <option value=\"French\">French</option>
                            <option value=\"Spanish\">Spanish</option>
                            <option value=\"Russian\">Russian</option>
                        </select>
                    </div>
                    <div class=\"styled-select\">
                        <select name=\"currency\" id=\"currency\">
                            <option value=\"USD\" selected>USD</option>
                            <option value=\"EUR\">EUR</option>
                            <option value=\"GBP\">GBP</option>
                            <option value=\"RUB\">RUB</option>
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"social_footer\">
                        <ul>
                            <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"icon-google\"></i></a></li>
                            <li><a href=\"#\"><i class=\"icon-instagram\"></i></a></li>
                            <li><a href=\"#\"><i class=\"icon-pinterest\"></i></a></li>
                            <li><a href=\"#\"><i class=\"icon-vimeo\"></i></a></li>
                            <li><a href=\"#\"><i class=\"icon-youtube-play\"></i></a></li>
                        </ul>
                        <p>© Citytours 2023</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

\t<div id=\"toTop\"></div><!-- Back to top button -->
\t
\t<!-- Search Menu -->
\t<div class=\"search-overlay-menu\">
\t\t<span class=\"search-overlay-close\"><i class=\"icon_set_1_icon-77\"></i></span>
\t\t<form role=\"search\" id=\"searchform\" method=\"get\">
\t\t\t<input value=\"\" name=\"q\" type=\"text\" placeholder=\"Search...\" />
\t\t\t<button type=\"submit\"><i class=\"icon_set_1_icon-78\"></i>
\t\t\t</button>
\t\t</form>
\t</div><!-- End Search Menu -->
\t
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
                          <input type=\"checkbox\">
                          <span class=\"checkmark\"></span>
                        </label>
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
\t\t\t\t\t<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
\t\t\t\t\t<div class=\"text-center\"><input type=\"submit\" value=\"Reset Password\" class=\"btn_1\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t\t<!--form -->
\t</div>
\t<!-- /Sign In Popup -->   

<!-- Modal Review -->
<div class=\"modal fade\" id=\"myReview\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myReviewLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\" id=\"myReviewLabel\">Write your review</h4>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"message-review\">
\t\t\t\t</div>
\t\t\t\t<form method=\"post\" action=\"https://www.ansonika.com/citytours/assets/review_hotel.php\" name=\"review_hotel\" id=\"review_hotel\">
                <input name=\"hotel_name\" id=\"hotel_name\" type=\"hidden\" value=\"Mariott Hotel Paris\">\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input name=\"name_review\" id=\"name_review\" type=\"text\" placeholder=\"Your name\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input name=\"lastname_review\" id=\"lastname_review\" type=\"text\" placeholder=\"Your last name\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input name=\"email_review\" id=\"email_review\" type=\"email\" placeholder=\"Your email\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"room_type_review\" id=\"room_type_review\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Select room type</option>
\t\t\t\t\t\t\t\t\t<option value=\"Single room\">Single Room</option>
\t\t\t\t\t\t\t\t\t<option value=\"Double Room\">Double Room</option>
\t\t\t\t\t\t\t\t\t<option value=\"King double room\">King Double Room</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row -->
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Cleanliness</label>
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"cleanliness_review\" id=\"cleanliness_review\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Please review</option>
\t\t\t\t\t\t\t\t\t<option value=\"Low\">Low</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sufficient\">Sufficient</option>
\t\t\t\t\t\t\t\t\t<option value=\"Good\">Good</option>
\t\t\t\t\t\t\t\t\t<option value=\"Excellent\">Excellent</option>
\t\t\t\t\t\t\t\t\t<option value=\"Superb\">Super</option>
\t\t\t\t\t\t\t\t\t<option value=\"Not rated\">I don't know</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Comfort</label>
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"comfort_review\" id=\"comfort_review\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Please review</option>
\t\t\t\t\t\t\t\t\t<option value=\"Low\">Low</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sufficient\">Sufficient</option>
\t\t\t\t\t\t\t\t\t<option value=\"Good\">Good</option>
\t\t\t\t\t\t\t\t\t<option value=\"Excellent\">Excellent</option>
\t\t\t\t\t\t\t\t\t<option value=\"Superb\">Super</option>
\t\t\t\t\t\t\t\t\t<option value=\"Not rated\">I don't know</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Price</label>
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"price_review\" id=\"price_review\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Please review</option>
\t\t\t\t\t\t\t\t\t<option value=\"Low\">Low</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sufficient\">Sufficient</option>
\t\t\t\t\t\t\t\t\t<option value=\"Good\">Good</option>
\t\t\t\t\t\t\t\t\t<option value=\"Excellent\">Excellent</option>
\t\t\t\t\t\t\t\t\t<option value=\"Superb\">Super</option>
\t\t\t\t\t\t\t\t\t<option value=\"Not rated\">I don't know</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Quality</label>
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"quality_review\" id=\"quality_review\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Please review</option>
\t\t\t\t\t\t\t\t\t<option value=\"Low\">Low</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sufficient\">Sufficient</option>
\t\t\t\t\t\t\t\t\t<option value=\"Good\">Good</option>
\t\t\t\t\t\t\t\t\t<option value=\"Excellent\">Excellent</option>
\t\t\t\t\t\t\t\t\t<option value=\"Superb\">Super</option>
\t\t\t\t\t\t\t\t\t<option value=\"Not rated\">I don't know</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row -->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<textarea name=\"review_text\" id=\"review_text\" class=\"form-control\" style=\"height:100px\" placeholder=\"Write your review\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" id=\"verify_review\" class=\" form-control\" placeholder=\"Are you human? 3 + 1 =\">
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" value=\"Submit\" class=\"btn_1\" id=\"submit-review\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div><!-- End modal review -->

 <!-- Common scripts -->
<script src=\"js/jquery-3.7.0.min.js\"></script>
<script src=\"js/common_scripts_min.js\"></script>
<script src=\"js/functions.js\"></script>

\t<!-- Specific scripts -->
\t<script src=\"js/jquery.validate.js\"></script>
\t<!-- Date and time pickers -->
\t<script src=\"js/jquery.sliderPro.min.js\"></script>
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(\$) {
\t\t\t\$('#Img_carousel').sliderPro({
\t\t\t\twidth: 960,
\t\t\t\theight: 500,
\t\t\t\tfade: true,
\t\t\t\tarrows: true,
\t\t\t\tbuttons: false,
\t\t\t\tfullScreen: false,
\t\t\t\tsmallSize: 500,
\t\t\t\tstartSlide: 0,
\t\t\t\tmediumSize: 1000,
\t\t\t\tlargeSize: 3000,
\t\t\t\tthumbnailArrows: true,
\t\t\t\tautoplay: false
\t\t\t});
\t\t});
\t</script>

\t<!-- Date pickers -->
    <script>
    \$(function() {
      'use strict';
      \$(\"#booking_hotel\").validate();
      \$('input.date-pick').daterangepicker({
          autoUpdateInput: false,
          opens: 'left',
          minDate:new Date(),
          locale: {
              cancelLabel: 'Clear'
          }
      });
      \$('input.date-pick').on('apply.daterangepicker', function(ev, picker) {
          \$(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
      });
      \$('input.date-pick').on('cancel.daterangepicker', function(ev, picker) {
          \$(this).val('');
      });
    });
    </script>

\t<!-- Map -->
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAUQKuq-IHkzCt4VoGq2z4XYJ_ip7ZRkws\"></script>
\t<script src=\"js/map.js\"></script>
\t<script src=\"js/infobox.js\"></script>

\t<!-- Carousel -->
\t<script>
\t\t\$('.carousel-thumbs-2').owlCarousel({
\t\t\tloop: false,
\t\t\tmargin: 5,
\t\t\tresponsiveClass: true,
\t\t\tnav: false,
\t\t\tresponsive: {
\t\t\t\t0: {
\t\t\t\t\titems: 1
\t\t\t\t},
\t\t\t\t600: {
\t\t\t\t\titems: 3
\t\t\t\t},
\t\t\t\t1000: {
\t\t\t\t\titems: 4,
\t\t\t\t\tnav: false
\t\t\t\t}
\t\t\t}
\t\t});
\t</script>
\t<!--Review modal validation -->
\t<script src=\"assets/validate.js\"></script>
\t
  <!-- SWITCHER  -->
    <script src=\"js/switcher.js\"></script>
    <div id=\"style-switcher\">
        <h2>Color Switcher <a href=\"#\"><i class=\"icon_set_1_icon-65\"></i></a></h2>
        <div>
            <ul class=\"colors\" id=\"color1\">
                <li><a href=\"#\" class=\"default\" title=\"Defaul\"></a></li>
                <li><a href=\"#\" class=\"aqua\" title=\"Aqua\"></a></li>
                <li><a href=\"#\" class=\"green_switcher\" title=\"Green\"></a></li>
                <li><a href=\"#\" class=\"orange\" title=\"Orange\"></a></li>
                <li><a href=\"#\" class=\"blue\" title=\"Blue\"></a></li>
            </ul>
        </div>
    </div>
</body>

<!-- Mirrored from www.ansonika.com/citytours/single_hotel_working_booking.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 19:13:44 GMT -->
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/partenariats.html.twig";
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


<!-- Mirrored from www.ansonika.com/citytours/single_hotel_working_booking.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 19:13:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Citytours - Premium site template for city tours agencies, transfers and tickets.\">
    <meta name=\"author\" content=\"Ansonika\">
    <title>CITY TOURS - City tours and travel site template by Ansonika</title>

    <!-- Favicons-->
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"img/apple-touch-icon-57x57-precomposed.png\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"img/apple-touch-icon-72x72-precomposed.png\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\" href=\"img/apple-touch-icon-114x114-precomposed.png\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\" href=\"img/apple-touch-icon-144x144-precomposed.png\">

    <!-- GOOGLE WEB FONT -->
    <link href=\"https://fonts.googleapis.com/css2?family=Gochi+Hand&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap\" rel=\"stylesheet\">

    <!-- COMMON CSS -->
\t<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/style.css\" rel=\"stylesheet\">
\t<link href=\"css/vendors.css\" rel=\"stylesheet\">
\t
\t<!-- ALTERNATIVE COLORS CSS -->
    <link href=\"#\" id=\"colors\" rel=\"stylesheet\">
\t
</head>
<body class=\"datepicker_mobile_full\"> <!-- Remove this class to disable datepicker full on mobile -->


    <div id=\"preloader\">
        <div class=\"sk-spinner sk-spinner-wave\">
            <div class=\"sk-rect1\"></div>
            <div class=\"sk-rect2\"></div>
            <div class=\"sk-rect3\"></div>
            <div class=\"sk-rect4\"></div>
            <div class=\"sk-rect5\"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class=\"layer\"></div>
    <!-- Mobile menu overlay mask -->

     <!-- Header================================================== -->
\t<header>
\t\t<div id=\"top_line\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-6\"><i class=\"icon-phone\"></i><strong>0045 043204434</strong></div>
                    <div class=\"col-6\">
                        <ul id=\"top_links\">
                            <li><a href=\"#sign-in-dialog\" id=\"access_link\">Sign in</a></li>
                            <li><a href=\"wishlist.html\" id=\"wishlist_link\">Wishlist</a></li>
                            <li><a href=\"https://1.envato.market/ryzjQ\" target=\"_parent\">Purchase this template</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t<a href=\"index.html\"><img src=\"img/logo.png\" width=\"160\" height=\"34\" alt=\"City tours\" class=\"logo_normal\"></a>
\t\t\t\t\t\t<a href=\"index.html\"><img src=\"img/logo_sticky.png\" width=\"160\" height=\"34\" alt=\"City tours\" class=\"logo_sticky\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<nav class=\"col-9\">
                    <a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu mobile</span></a>
                    <div class=\"main-menu\">
                        <div id=\"header_menu\">
                            <img src=\"img/logo_sticky.png\" width=\"160\" height=\"34\" alt=\"City tours\">
                        </div>
                        <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_set_1_icon-77\"></i></a>
                         <ul>
                            <li class=\"submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu\">Home <i class=\"icon-down-open-mini\"></i></a>
                                <ul>
                                    <li><a href=\"index.html\">Owl Carousel Slider</a></li>
                                    <li><a href=\"index_25.html\">KenBurns Slider</a></li>
                                    <li><a href=\"index_22.html\">Home items with Carousel</a></li>
                                    <li><a href=\"index_23.html\">Home with Search V2</a></li>
                                   <li class=\"third-level\"><a href=\"javascript:void(0);\">Revolution slider <strong class=\"badge badge-danger\">New!</strong></a>
                                        <ul>
                                            <li><a href=\"index_24.html\">Default slider</a></li>
                                            <li><a href=\"index_20.html\">Basic slider</a></li>
                                            <li><a href=\"index_14.html\">Youtube Hero</a></li>
                                            <li><a href=\"index_15.html\">Vimeo Hero</a></li>
                                            <li><a href=\"index_17.html\">Full Screen <strong class=\"badge badge-danger\">New!</strong></a></li>
                                            <li><a href=\"index_21.html\">Full Screen Slicey <strong class=\"badge badge-danger\">New!</strong></a></li>
                                            <li><a href=\"index_16.html\">Carousel</a></li>
                                            <li><a href=\"index_19.html\">Mailchimp Newsletter</a></li>
                                            <li><a href=\"index_18.html\">Fixed Caption</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"index_12.html\">Layer slider</a></li>
                                    <li><a href=\"index_2.html\">With Only tours</a></li>
                                    <li><a href=\"index_3.html\">Single image</a></li>
                                    <li><a href=\"index_4.html\">Header video</a></li>
                                    <li><a href=\"index_7.html\">With search panel</a></li>
                                    <li><a href=\"index_13.html\">With tabs</a></li>
                                    <li><a href=\"index_5.html\">With map</a></li>
                                    <li><a href=\"index_6.html\">With search bar</a></li>
                                    <li><a href=\"index_8.html\">Search bar + Video</a></li>
                                    <li><a href=\"index_9.html\">With Text Rotator</a></li>
                                    <li><a href=\"index_10.html\">With Cookie Bar (EU law)</a></li>
                                    <li><a href=\"index_11.html\">Popup Advertising</a></li>
                                </ul>
                            </li>
                            <li class=\"submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu\">Tours <i class=\"icon-down-open-mini\"></i></a>
                                <ul>
                                    <li><a href=\"all_tours_list.html\">All tours list</a></li>
                                    <li><a href=\"all_tours_grid.html\">All tours grid</a></li>
                                    <li><a href=\"all_tours_grid_masonry.html\">All tours Sort Masonry</a></li>
                                    <li><a href=\"all_tours_map_listing.html\">All tours map listing</a></li>
                                    <li><a href=\"single_tour.html\">Single tour page</a></li>
                                    <li><a href=\"single_tour_with_gallery.html\">Single tour with gallery</a></li>
                                    <li class=\"third-level\"><a href=\"javascript:void(0);\">Single tour fixed sidebar</a>
                                        <ul>
                                            <li><a href=\"single_tour_fixed_sidebar.html\">Single tour fixed sidebar</a></li>
                                            <li><a href=\"single_tour_with_gallery_fixed_sidebar.html\">Single tour 2 Fixed Sidebar</a></li>
                                            <li><a href=\"cart_fixed_sidebar.html\">Cart Fixed Sidebar</a></li>
                                            <li><a href=\"payment_fixed_sidebar.html\">Payment Fixed Sidebar</a></li>
                                            <li><a href=\"confirmation_fixed_sidebar.html\">Confirmation Fixed Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"single_tour_working_booking.html\">Single tour working booking</a></li>
                                    <li><a href=\"cart.html\">Single tour cart</a></li>
                                    <li><a href=\"payment.html\">Single tour booking</a></li>
                                </ul>
                            </li>
                             <li class=\"submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu\">Hotels <i class=\"icon-down-open-mini\"></i></a><ul>
                                    <li><a href=\"all_hotels_list.html\">All hotels list</a></li>
                                    <li><a href=\"all_hotels_grid.html\">All hotels grid</a></li>
                                    <li><a href=\"all_hotels_grid_masonry.html\">All hotels Sort Masonry</a></li>
                                    <li><a href=\"all_hotels_map_listing.html\">All hotels map listing</a></li>
                                    <li><a href=\"single_hotel.html\">Single hotel page</a></li>
                                    <li><a href=\"single_hotel_working_booking.html\">Single hotel working booking</a></li>
                                    <li><a href=\"single_hotel_contact.html\">Single hotel contact working</a></li>
                                    <li><a href=\"cart_hotel.html\">Cart hotel</a></li>
                                    <li><a href=\"payment_hotel.html\">Booking hotel</a></li>
                                    <li><a href=\"confirmation_hotel.html\">Confirmation hotel</a></li>
                                </ul>
                            </li>
                            <li class=\"submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu\">Transfers <i class=\"icon-down-open-mini\"></i></a>
                                <ul>
                                    <li><a href=\"all_transfer_list.html\">All transfers list</a></li>
                                    <li><a href=\"all_transfer_grid.html\">All transfers grid</a></li>
                                    <li><a href=\"all_transfer_grid_masonry.html\">All transfers Sort Masonry</a></li>
                                    <li><a href=\"single_transfer.html\">Single transfer page</a></li>
                                    <li><a href=\"cart_transfer.html\">Cart transfers</a></li>
                                    <li><a href=\"payment_transfer.html\">Booking transfers</a></li>
                                    <li><a href=\"confirmation_transfer.html\">Confirmation transfers</a></li>
                                </ul>
                            </li>
                              <li class=\"submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu\">Restaurants <i class=\"icon-down-open-mini\"></i></a>
                                <ul>
                                    <li><a href=\"all_restaurants_list.html\">All restaurants list</a></li>
                                    <li><a href=\"all_restaurants_grid.html\">All restaurants grid</a></li>
                                    <li><a href=\"all_restaurants_grid_masonry.html\">All restaurants Sort Masonry</a></li>
                                    <li><a href=\"all_restaurants_map_listing.html\">All restaurants map listing</a></li>
                                    <li><a href=\"single_restaurant.html\">Single restaurant page</a></li>
                                    <li><a href=\"payment_restaurant.html\">Booking restaurant</a></li>
                                    <li><a href=\"confirmation_restaurant.html\">Confirmation restaurant</a></li>
                                </ul>
                            </li>
                             <li class=\"megamenu submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu-mega\">Bonus<i class=\"icon-down-open-mini\"></i></a>
                                <div class=\"menu-wrapper\">
                                \t<div class=\"row\">
                                        <div class=\"col-lg-4\">
                                            <h3>Header styles</h3>
                                            <ul>
                                                <li><a href=\"index.html\">Default transparent</a></li>
                                                <li><a href=\"header_2.html\">Plain color</a></li>
                                                <li><a href=\"header_3.html\">Plain color on scroll</a></li>
                                                <li><a href=\"header_4.html\">With socials on top</a></li>
                                                <li><a href=\"header_5.html\">With language selection</a></li>
                                                <li><a href=\"header_6.html\">With lang and conversion</a></li>
                                                <li><a href=\"header_7.html\">With full horizontal menu</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <h3>Footer styles</h3>
                                            <ul>
                                                <li><a href=\"index.html\">Footer default</a></li>
                                                <li><a href=\"footer_2.html\">Footer style 2</a></li>
                                                <li><a href=\"footer_3.html\">Footer style 3</a></li>
                                                <li><a href=\"footer_4.html\">Footer style 4</a></li>
                                                <li><a href=\"footer_6.html\">Footer style 6</a></li>
                                                <li><a href=\"footer_7.html\">Footer style 7</a></li>
                                            </ul>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <h3>Shop section</h3>
                                            <ul>
                                                <li><a href=\"shop.html\">Shop</a></li>
                                                <li><a href=\"shop-single.html\">Shop single</a></li>
                                                <li><a href=\"shopping-cart.html\">Shop cart</a></li>
                                                <li><a href=\"checkout.html\">Shop Checkout</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- End row -->
                                </div><!-- End menu-wrapper -->
                            </li>
                            <li class=\"megamenu submenu\">
                                <a href=\"javascript:void(0);\" class=\"show-submenu-mega\">Pages<i class=\"icon-down-open-mini\"></i></a>
                                <div class=\"menu-wrapper\">
                                \t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Pages</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About us</a></li>
\t\t\t\t\t\t\t\t\t\t\t   <li><a href=\"general_page.html\">General page</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tourist_guide.html\">Tourist guide</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"wishlist.html\">Wishlist page</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"faq.html\">Faq</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"faq_2.html\">Faq smooth scroll</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"pricing_tables.html\">Pricing tables</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"gallery_3_columns.html\">Gallery 3 columns</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"gallery_4_columns.html\">Gallery 4 columns</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"grid_gallery_1.html\">Grid gallery</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"grid_gallery_2.html\">Grid gallery with filters</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Pages</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact_us_1.html\">Contact us 1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact_us_2.html\">Contact us 2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t <li><a href=\"blog_right_sidebar.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog left sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"login.html\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"register.html\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"invoice.html\" target=\"_blank\">Invoice</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404 Error page</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"site_launch/index.html\">Site launch / Coming soon</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"timeline.html\">Tour timeline</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"page_with_map.html\"><i class=\"icon-map\"></i>  Full screen map</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Elements</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"footer_2.html\"><i class=\"icon-columns\"></i> Footer with working newsletter</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_1.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 1 (1900)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_2.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 2 (100)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_3.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 3 (30)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_4.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 4 (200)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"icon_pack_5.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 5 (360)</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shortcodes.html\"><i class=\"icon-tools\"></i> Shortcodes</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"newsletter_template/newsletter.html\" target=\"blank\"><i class=\" icon-mail\"></i> Responsive email template</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"admin.html\"><i class=\"icon-cog-1\"></i> Admin area</a></li>
                                                <li><a href=\"html_rtl/index.html\"><i class=\"icon-align-right\"></i>  RTL Version</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div><!-- End row -->
                                </div><!-- End menu-wrapper -->
                            </li>
                        </ul>
                    </div><!-- End main-menu -->
                    <ul id=\"top_tools\">
                        <li>
                            <a href=\"javascript:void(0);\" class=\"search-overlay-menu-btn\"><i class=\"icon_search\"></i></a>
                        </li>
                        <li>
                            <div class=\"dropdown dropdown-cart\">
                                <a href=\"#0\" data-bs-toggle=\"dropdown\" class=\"cart_bt\"><i class=\"icon_bag_alt\"></i><strong>3</strong></a>
                                <ul class=\"dropdown-menu\" id=\"cart_items\">
                                    <li>
                                        <div class=\"image\"><img src=\"img/thumb_cart_1.jpg\" alt=\"image\"></div>
                                        <strong><a href=\"#\">Louvre museum</a>1x \$36.00 </strong>
                                        <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                    </li>
                                    <li>
                                        <div class=\"image\"><img src=\"img/thumb_cart_2.jpg\" alt=\"image\"></div>
                                        <strong><a href=\"#\">Versailles tour</a>2x \$36.00 </strong>
                                        <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                    </li>
                                    <li>
                                        <div class=\"image\"><img src=\"img/thumb_cart_3.jpg\" alt=\"image\"></div>
                                        <strong><a href=\"#\">Versailles tour</a>1x \$36.00 </strong>
                                        <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                    </li>
                                    <li>
                                        <div>Total: <span>\$120.00</span></div>
                                        <a href=\"cart.html\" class=\"button_drop\">Go to cart</a>
                                        <a href=\"payment.html\" class=\"button_drop outline\">Check out</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
\t\t\t</div>
\t\t</div>
\t\t<!-- container -->
\t</header>
\t<!-- End Header -->

    <section class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"img/single_hotel_bg_1.jpg\" data-natural-width=\"1400\" data-natural-height=\"470\">
    <div class=\"parallax-content-2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <span class=\"rating\"><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\" icon-star-empty\"></i></span>
                    <h1>Mariott Hotel</h1>
                    <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span>
                </div>
                <div class=\"col-md-4\">
                    <div id=\"price_single_main\" class=\"hotel\">
                        from/per night <span><sup>\$</sup>95</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- End section -->
\t
\t<main>
\t<div id=\"position\">
\t\t<div class=\"container\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t<li><a href=\"#\">Category</a></li>
\t\t\t\t<li>Page active</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<!-- End Position -->

    
     <div class=\"collapse\" id=\"collapseMap\">
        <div id=\"map\" class=\"map\"></div>
    </div><!-- End Map -->
\t
    <div class=\"container margin_60\">
    <div class=\"row\">
        <div class=\"col-lg-8\" id=\"single_tour_desc\">
\t\t\t\t\t<div id=\"single_tour_feat\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"icon_set_2_icon-116\"></i>Plasma TV</li>
\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-86\"></i>Free Wifi</li>
\t\t\t\t\t\t\t<li><i class=\"icon_set_2_icon-110\"></i>Poll</li>
\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-59\"></i>Breakfast</li>
\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-22\"></i>Pet allowed</li>
\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-13\"></i>Accessibiliy</li>
\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-27\"></i>Parking</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"d-block d-lg-none\"><a class=\"btn_map\" data-bs-toggle=\"collapse\" href=\"#collapseMap\" aria-expanded=\"false\" aria-controls=\"collapseMap\" data-text-swap=\"Hide map\" data-text-original=\"View on map\">View on map</a>
\t\t\t\t\t</p>
\t\t\t\t\t<!-- Map button for tablets/mobiles -->
\t\t\t\t\t<div id=\"Img_carousel\" class=\"slider-pro\">
\t\t\t\t\t\t<div class=\"sp-slides\">

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/1_medium.jpg\" data-small=\"img/slider_single_tour/1_small.jpg\" data-medium=\"img/slider_single_tour/1_medium.jpg\" data-large=\"img/slider_single_tour/1_large.jpg\" data-retina=\"img/slider_single_tour/1_large.jpg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/2_medium.jpg\" data-small=\"img/slider_single_tour/2_small.jpg\" data-medium=\"img/slider_single_tour/2_medium.jpg\" data-large=\"img/slider_single_tour/2_large.jpg\" data-retina=\"img/slider_single_tour/2_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/3_medium.jpg\" data-small=\"img/slider_single_tour/3_small.jpg\" data-medium=\"img/slider_single_tour/3_medium.jpg\" data-large=\"img/slider_single_tour/3_large.jpg\" data-retina=\"img/slider_single_tour/3_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/4_medium.jpg\" data-small=\"img/slider_single_tour/4_small.jpg\" data-medium=\"img/slider_single_tour/4_medium.jpg\" data-large=\"img/slider_single_tour/4_large.jpg\" data-retina=\"img/slider_single_tour/4_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/5_medium.jpg\" data-small=\"img/slider_single_tour/5_small.jpg\" data-medium=\"img/slider_single_tour/5_medium.jpg\" data-large=\"img/slider_single_tour/5_large.jpg\" data-retina=\"img/slider_single_tour/5_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/6_medium.jpg\" data-small=\"img/slider_single_tour/6_small.jpg\" data-medium=\"img/slider_single_tour/6_medium.jpg\" data-large=\"img/slider_single_tour/6_large.jpg\" data-retina=\"img/slider_single_tour/6_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/7_medium.jpg\" data-small=\"img/slider_single_tour/7_small.jpg\" data-medium=\"img/slider_single_tour/7_medium.jpg\" data-large=\"img/slider_single_tour/7_large.jpg\" data-retina=\"img/slider_single_tour/7_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/8_medium.jpg\" data-small=\"img/slider_single_tour/8_small.jpg\" data-medium=\"img/slider_single_tour/8_medium.jpg\" data-large=\"img/slider_single_tour/8_large.jpg\" data-retina=\"img/slider_single_tour/8_large.jpg\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"css/images/blank.gif\" data-src=\"img/slider_single_tour/9_medium.jpg\" data-small=\"img/slider_single_tour/9_small.jpg\" data-medium=\"img/slider_single_tour/9_medium.jpg\" data-large=\"img/slider_single_tour/9_large.jpg\" data-retina=\"img/slider_single_tour/9_large.jpg\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sp-thumbnails\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/1_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/2_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/3_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/4_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/5_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/6_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/7_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/8_medium.jpg\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"img/slider_single_tour/9_medium.jpg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<hr>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<h3>Description</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Hotel facilities</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>Lorem ipsum dolor sit amet</li>
\t\t\t\t\t\t\t\t\t\t<li>No scripta electram necessitatibus sit</li>
\t\t\t\t\t\t\t\t\t\t<li>Quidam percipitur instructior an eum</li>
\t\t\t\t\t\t\t\t\t\t<li>Ut est saepe munere ceteros</li>
\t\t\t\t\t\t\t\t\t\t<li>No scripta electram necessitatibus sit</li>
\t\t\t\t\t\t\t\t\t\t<li>Quidam percipitur instructior an eum</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>Lorem ipsum dolor sit amet</li>
\t\t\t\t\t\t\t\t\t\t<li>No scripta electram necessitatibus sit</li>
\t\t\t\t\t\t\t\t\t\t<li>Quidam percipitur instructior an eum</li>
\t\t\t\t\t\t\t\t\t\t<li>No scripta electram necessitatibus sit</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row  -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End col-md-9  -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row  -->

\t\t\t\t\t<hr>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<h3>Rooms Types</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t<h4>Single Room</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_icons\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-86\"></i> Free wifi</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon_set_2_icon-116\"></i> Plasma Tv</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon_set_2_icon-106\"></i> Safety box</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>Lorem ipsum dolor sit amet</li>
\t\t\t\t\t\t\t\t\t\t<li>No scripta electram necessitatibus sit</li>
\t\t\t\t\t\t\t\t\t\t<li>Quidam percipitur instructior an eum</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row  -->
\t\t\t\t\t\t\t<div class=\"owl-carousel owl-theme carousel-thumbs-2 magnific-gallery\">
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/1.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/1.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/2.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/2.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/3.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/3.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/4.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/4.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End photo carousel  -->

\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t<h4>Double Room</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_icons\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon_set_1_icon-86\"></i> Free wifi</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon_set_2_icon-116\"></i> Plasma Tv</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon_set_2_icon-106\"></i> Safety box</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>Lorem ipsum dolor sit amet</li>
\t\t\t\t\t\t\t\t\t\t<li>No scripta electram necessitatibus sit</li>
\t\t\t\t\t\t\t\t\t\t<li>Quidam percipitur instructior an eum</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row  -->
\t\t\t\t\t\t\t<div class=\"owl-carousel owl-theme carousel-thumbs-2 magnific-gallery\">
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/1.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/1.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/2.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/2.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/3.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/3.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<a href=\"img/carousel/4.jpg\" data-effect=\"mfp-zoom-in\"><img src=\"img/carousel/4.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End photo carousel  -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End col-md-9  -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row  -->

\t\t\t\t\t<hr>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<h3>Reviews</h3>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn_1 add_bottom_30\" data-bs-toggle=\"modal\" data-bs-target=\"#myReview\">Leave a review</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t<div id=\"score_detail\"><span>7.5</span>Good <small>(Based on 34 reviews)</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End general_rating -->
\t\t\t\t\t\t\t<div class=\"row\" id=\"rating_summary\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>Position
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>Comfort
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>Price
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>Quality
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row -->
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"review_strip_single\">
\t\t\t\t\t\t\t\t<img src=\"img/avatar1.jpg\" alt=\"Image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t<small> - 10 March 2015 -</small>
\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End review strip -->

\t\t\t\t\t\t\t<div class=\"review_strip_single\">
\t\t\t\t\t\t\t\t<img src=\"img/avatar2.jpg\" alt=\"Image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t<small> - 10 March 2015 -</small>
\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End review strip -->

\t\t\t\t\t\t\t<div class=\"review_strip_single last\">
\t\t\t\t\t\t\t\t<img src=\"img/avatar3.jpg\" alt=\"Image\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t<small> - 10 March 2015 -</small>
\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\"
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End review strip -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--End  single_tour_desc-->
        
        <aside class=\"col-lg-4\">
        <p class=\"d-none d-xl-block d-lg-block\">
            <a class=\"btn_map\" data-bs-toggle=\"collapse\" href=\"#collapseMap\" aria-expanded=\"false\" aria-controls=\"collapseMap\" data-text-swap=\"Hide map\" data-text-original=\"View on map\">View on map</a>
        </p>
        <div class=\"box_style_1 expose\">
                <form id=\"booking_hotel\" action=\"#\" method=\"post\">
            <h3 class=\"inner\">Check Availability</h3>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group\">
                        <label><i class=\"icon-calendar-7\"></i> Check in / Check out</label>
                        <input class=\"date-pick form-control required\" type=\"text\" placeholder=\"Select dates\" name=\"check_in_hotel\">
                    </div>
               </div>
            </div>
            <div class=\"row\">
                <div class=\"col-6\">
                    <div class=\"form-group\">
                        <label>Adults</label>
                        <div class=\"numbers-row\">
                            <input type=\"text\" value=\"1\" id=\"adults_hotel\" class=\"qty2 form-control required\" name=\"adults_hotel\">
                        </div>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"form-group\">
                        <label>Children</label>
                        <div class=\"numbers-row\">
                            <input type=\"text\" value=\"0\" id=\"children_hotels\" class=\"qty2 form-control required\" name=\"children_hotels\">
                        </div>
                    </div>
                </div>
                </div>
                 <hr>
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label>Name</label>
\t\t\t\t\t\t\t<input class=\"form-control required\" name=\"name_hotel_booking\" id=\"name_hotel_booking\" type=\"text\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label>Last name</label>
\t\t\t\t\t\t\t<input class=\"form-control required\" name=\"last_hotel_name_booking\" id=\"last_hotel_name_booking\" type=\"text\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
               
\t\t\t\t<div class=\"form-group\" style=\"position:relative\">
\t\t\t\t\t<label>Email</label>
\t\t\t\t\t<input class=\"form-control required\" type=\"email\" name=\"email_hotel_booking\" id=\"email_hotel_booking\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" style=\"position:relative\">
\t\t\t\t\t<label>Telephone</label>
\t\t\t\t\t<input class=\"form-control required\" type=\"text\" name=\"phone_hotel_booking\" id=\"phone_hotel_booking\">
\t\t\t\t</div>
            <br>
            
            <button type=\"submit\" class=\"btn_full\">Check now</button>
            <a class=\"btn_full_outline\" href=\"#\"><i class=\" icon-heart\"></i> Add to whislist</a>
            </form>
            \t\t<!-- END SEND MAIL SCRIPT -->   
        </div><!--/box_style_1 -->
        
        <div class=\"box_style_4\">
            <i class=\"icon_set_1_icon-90\"></i>
            <h4><span>Book</span> by phone</h4>
            <a href=\"tel://004542344599\" class=\"phone\">+45 423 445 99</a>
            <small>Monday to Friday 9.00am - 7.30pm</small>
        </div>
        
        </aside>
    </div><!--End row -->
    </div><!--End container -->
    
    <div id=\"overlay\"></div><!-- Mask on input focus --> 
    
    </main><!-- End main -->
\t
 \t<footer class=\"revealed\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h3>Need help?</h3>
                    <a href=\"tel://004542344599\" id=\"phone\">+45 423 445 99</a>
                    <a href=\"mailto:help@citytours.com\" id=\"email_footer\">help@citytours.com</a>
                </div>
                <div class=\"col-md-3\">
                    <h3>About</h3>
                    <ul>
                        <li><a href=\"#\">About us</a></li>
                        <li><a href=\"#\">FAQ</a></li>
                        <li><a href=\"#\">Login</a></li>
                        <li><a href=\"#\">Register</a></li>
                         <li><a href=\"#\">Terms and condition</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href=\"#\">Community blog</a></li>
                        <li><a href=\"#\">Tour guide</a></li>
                        <li><a href=\"#\">Wishlist</a></li>
                         <li><a href=\"#\">Gallery</a></li>
                    </ul>
                </div>
                <div class=\"col-md-2\">
                    <h3>Settings</h3>
                    <div class=\"styled-select\">
                        <select name=\"lang\" id=\"lang\">
                            <option value=\"English\" selected>English</option>
                            <option value=\"French\">French</option>
                            <option value=\"Spanish\">Spanish</option>
                            <option value=\"Russian\">Russian</option>
                        </select>
                    </div>
                    <div class=\"styled-select\">
                        <select name=\"currency\" id=\"currency\">
                            <option value=\"USD\" selected>USD</option>
                            <option value=\"EUR\">EUR</option>
                            <option value=\"GBP\">GBP</option>
                            <option value=\"RUB\">RUB</option>
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"social_footer\">
                        <ul>
                            <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"icon-google\"></i></a></li>
                            <li><a href=\"#\"><i class=\"icon-instagram\"></i></a></li>
                            <li><a href=\"#\"><i class=\"icon-pinterest\"></i></a></li>
                            <li><a href=\"#\"><i class=\"icon-vimeo\"></i></a></li>
                            <li><a href=\"#\"><i class=\"icon-youtube-play\"></i></a></li>
                        </ul>
                        <p>© Citytours 2023</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

\t<div id=\"toTop\"></div><!-- Back to top button -->
\t
\t<!-- Search Menu -->
\t<div class=\"search-overlay-menu\">
\t\t<span class=\"search-overlay-close\"><i class=\"icon_set_1_icon-77\"></i></span>
\t\t<form role=\"search\" id=\"searchform\" method=\"get\">
\t\t\t<input value=\"\" name=\"q\" type=\"text\" placeholder=\"Search...\" />
\t\t\t<button type=\"submit\"><i class=\"icon_set_1_icon-78\"></i>
\t\t\t</button>
\t\t</form>
\t</div><!-- End Search Menu -->
\t
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
                          <input type=\"checkbox\">
                          <span class=\"checkmark\"></span>
                        </label>
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
\t\t\t\t\t<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
\t\t\t\t\t<div class=\"text-center\"><input type=\"submit\" value=\"Reset Password\" class=\"btn_1\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t\t<!--form -->
\t</div>
\t<!-- /Sign In Popup -->   

<!-- Modal Review -->
<div class=\"modal fade\" id=\"myReview\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myReviewLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\" id=\"myReviewLabel\">Write your review</h4>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"message-review\">
\t\t\t\t</div>
\t\t\t\t<form method=\"post\" action=\"https://www.ansonika.com/citytours/assets/review_hotel.php\" name=\"review_hotel\" id=\"review_hotel\">
                <input name=\"hotel_name\" id=\"hotel_name\" type=\"hidden\" value=\"Mariott Hotel Paris\">\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input name=\"name_review\" id=\"name_review\" type=\"text\" placeholder=\"Your name\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input name=\"lastname_review\" id=\"lastname_review\" type=\"text\" placeholder=\"Your last name\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input name=\"email_review\" id=\"email_review\" type=\"email\" placeholder=\"Your email\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"room_type_review\" id=\"room_type_review\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Select room type</option>
\t\t\t\t\t\t\t\t\t<option value=\"Single room\">Single Room</option>
\t\t\t\t\t\t\t\t\t<option value=\"Double Room\">Double Room</option>
\t\t\t\t\t\t\t\t\t<option value=\"King double room\">King Double Room</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row -->
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Cleanliness</label>
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"cleanliness_review\" id=\"cleanliness_review\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Please review</option>
\t\t\t\t\t\t\t\t\t<option value=\"Low\">Low</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sufficient\">Sufficient</option>
\t\t\t\t\t\t\t\t\t<option value=\"Good\">Good</option>
\t\t\t\t\t\t\t\t\t<option value=\"Excellent\">Excellent</option>
\t\t\t\t\t\t\t\t\t<option value=\"Superb\">Super</option>
\t\t\t\t\t\t\t\t\t<option value=\"Not rated\">I don't know</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Comfort</label>
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"comfort_review\" id=\"comfort_review\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Please review</option>
\t\t\t\t\t\t\t\t\t<option value=\"Low\">Low</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sufficient\">Sufficient</option>
\t\t\t\t\t\t\t\t\t<option value=\"Good\">Good</option>
\t\t\t\t\t\t\t\t\t<option value=\"Excellent\">Excellent</option>
\t\t\t\t\t\t\t\t\t<option value=\"Superb\">Super</option>
\t\t\t\t\t\t\t\t\t<option value=\"Not rated\">I don't know</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Price</label>
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"price_review\" id=\"price_review\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Please review</option>
\t\t\t\t\t\t\t\t\t<option value=\"Low\">Low</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sufficient\">Sufficient</option>
\t\t\t\t\t\t\t\t\t<option value=\"Good\">Good</option>
\t\t\t\t\t\t\t\t\t<option value=\"Excellent\">Excellent</option>
\t\t\t\t\t\t\t\t\t<option value=\"Superb\">Super</option>
\t\t\t\t\t\t\t\t\t<option value=\"Not rated\">I don't know</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Quality</label>
\t\t\t\t\t\t\t\t<select class=\"form-select\" name=\"quality_review\" id=\"quality_review\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Please review</option>
\t\t\t\t\t\t\t\t\t<option value=\"Low\">Low</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sufficient\">Sufficient</option>
\t\t\t\t\t\t\t\t\t<option value=\"Good\">Good</option>
\t\t\t\t\t\t\t\t\t<option value=\"Excellent\">Excellent</option>
\t\t\t\t\t\t\t\t\t<option value=\"Superb\">Super</option>
\t\t\t\t\t\t\t\t\t<option value=\"Not rated\">I don't know</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row -->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<textarea name=\"review_text\" id=\"review_text\" class=\"form-control\" style=\"height:100px\" placeholder=\"Write your review\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" id=\"verify_review\" class=\" form-control\" placeholder=\"Are you human? 3 + 1 =\">
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" value=\"Submit\" class=\"btn_1\" id=\"submit-review\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div><!-- End modal review -->

 <!-- Common scripts -->
<script src=\"js/jquery-3.7.0.min.js\"></script>
<script src=\"js/common_scripts_min.js\"></script>
<script src=\"js/functions.js\"></script>

\t<!-- Specific scripts -->
\t<script src=\"js/jquery.validate.js\"></script>
\t<!-- Date and time pickers -->
\t<script src=\"js/jquery.sliderPro.min.js\"></script>
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(\$) {
\t\t\t\$('#Img_carousel').sliderPro({
\t\t\t\twidth: 960,
\t\t\t\theight: 500,
\t\t\t\tfade: true,
\t\t\t\tarrows: true,
\t\t\t\tbuttons: false,
\t\t\t\tfullScreen: false,
\t\t\t\tsmallSize: 500,
\t\t\t\tstartSlide: 0,
\t\t\t\tmediumSize: 1000,
\t\t\t\tlargeSize: 3000,
\t\t\t\tthumbnailArrows: true,
\t\t\t\tautoplay: false
\t\t\t});
\t\t});
\t</script>

\t<!-- Date pickers -->
    <script>
    \$(function() {
      'use strict';
      \$(\"#booking_hotel\").validate();
      \$('input.date-pick').daterangepicker({
          autoUpdateInput: false,
          opens: 'left',
          minDate:new Date(),
          locale: {
              cancelLabel: 'Clear'
          }
      });
      \$('input.date-pick').on('apply.daterangepicker', function(ev, picker) {
          \$(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
      });
      \$('input.date-pick').on('cancel.daterangepicker', function(ev, picker) {
          \$(this).val('');
      });
    });
    </script>

\t<!-- Map -->
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAUQKuq-IHkzCt4VoGq2z4XYJ_ip7ZRkws\"></script>
\t<script src=\"js/map.js\"></script>
\t<script src=\"js/infobox.js\"></script>

\t<!-- Carousel -->
\t<script>
\t\t\$('.carousel-thumbs-2').owlCarousel({
\t\t\tloop: false,
\t\t\tmargin: 5,
\t\t\tresponsiveClass: true,
\t\t\tnav: false,
\t\t\tresponsive: {
\t\t\t\t0: {
\t\t\t\t\titems: 1
\t\t\t\t},
\t\t\t\t600: {
\t\t\t\t\titems: 3
\t\t\t\t},
\t\t\t\t1000: {
\t\t\t\t\titems: 4,
\t\t\t\t\tnav: false
\t\t\t\t}
\t\t\t}
\t\t});
\t</script>
\t<!--Review modal validation -->
\t<script src=\"assets/validate.js\"></script>
\t
  <!-- SWITCHER  -->
    <script src=\"js/switcher.js\"></script>
    <div id=\"style-switcher\">
        <h2>Color Switcher <a href=\"#\"><i class=\"icon_set_1_icon-65\"></i></a></h2>
        <div>
            <ul class=\"colors\" id=\"color1\">
                <li><a href=\"#\" class=\"default\" title=\"Defaul\"></a></li>
                <li><a href=\"#\" class=\"aqua\" title=\"Aqua\"></a></li>
                <li><a href=\"#\" class=\"green_switcher\" title=\"Green\"></a></li>
                <li><a href=\"#\" class=\"orange\" title=\"Orange\"></a></li>
                <li><a href=\"#\" class=\"blue\" title=\"Blue\"></a></li>
            </ul>
        </div>
    </div>
</body>

<!-- Mirrored from www.ansonika.com/citytours/single_hotel_working_booking.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 19:13:44 GMT -->
</html>", "client/partenariats.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\partenariats.html.twig");
    }
}
