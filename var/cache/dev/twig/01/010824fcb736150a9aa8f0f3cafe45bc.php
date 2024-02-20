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

/* client/wishlist.html.twig */
class __TwigTemplate_5e18b594165a1958e2c7eb7640d4eab1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/wishlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/wishlist.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/wishlist.html.twig", 1);
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

        echo "Mes favoris | Eco tourism";
        
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
        echo "\t\t<div id=\"position\">
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
\t\t<!-- Position -->

\t\t<div class=\"collapse\" id=\"collapseMap\">
\t\t\t<div id=\"map\" class=\"map\"></div>
\t\t</div>
\t\t<!-- End Map -->

\t\t<div class=\"container margin_60\">

\t\t\t<div class=\"row\">
\t\t\t\t<aside class=\"col-lg-3\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<a class=\"btn_map\" data-bs-toggle=\"collapse\" href=\"#collapseMap\" aria-expanded=\"false\" aria-controls=\"collapseMap\" data-text-swap=\"Hide map\" data-text-original=\"View on map\">View on map</a>
\t\t\t\t\t</p>

\t\t\t\t\t<div id=\"filters_col\">
\t\t\t\t\t\t<a data-bs-toggle=\"collapse\" href=\"#collapseFilters\" aria-expanded=\"false\" aria-controls=\"collapseFilters\" id=\"filters_col_bt\"><i class=\"icon_set_1_icon-65\"></i>Filters</a>
\t\t\t\t\t\t<div class=\"collapse show\" id=\"collapseFilters\">
\t\t\t\t\t\t\t<div class=\"filter_type\">
\t\t\t\t\t\t\t\t<h6>Price</h6>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
                                        <label class=\"container_radio\">
                                            From \$10 to \$50
                                            <input type=\"radio\" checked=\"checked\" name=\"prices\">
                                            <span class=\"checkmark\"></span>
                                        </label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
                                        <label class=\"container_radio\">
                                            From \$50 to \$80
                                            <input type=\"radio\" name=\"prices\">
                                            <span class=\"checkmark\"></span>
                                        </label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
                                        <label class=\"container_radio\">
                                            From \$80 to \$100
                                            <input type=\"radio\" name=\"prices\">
                                            <span class=\"checkmark\"></span>
                                        </label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"filter_type\">
\t\t\t\t\t\t\t\t<h6>Rating</h6>
\t\t\t\t\t\t\t\t<ul>
                                    <li>
                                       <label class=\"container_check\">
                                            <span class=\"rating\">
                                                <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i>
                                            </span>
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"container_check\">
                                            <span class=\"rating\">
                                               <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i>
                                            </span>
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"container_check\">
                                            <span class=\"rating\">
                                               <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
                                            </span>
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"container_check\">
                                            <span class=\"rating\">
                                              <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
                                            </span>
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"container_check\">
                                            <span class=\"rating\">
                                             <i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
                                            </span>
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
                                    </li>
                                </ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"filter_type\">
\t\t\t\t\t\t\t\t<h6>Type</h6>
\t\t\t\t\t\t\t\t<ul class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<li> 
                                        <label class=\"container_check\">
                                            City tours
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
                                        <label class=\"container_check\">
                                            Hotels
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
                                        <label class=\"container_check\">
                                            Transfers
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--End collapse -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--End filters col-->
\t\t\t\t\t<div class=\"box_style_2\">
\t\t\t\t\t\t<i class=\"icon_set_1_icon-57\"></i>
\t\t\t\t\t\t<h4>Need <span>Help?</span></h4>
\t\t\t\t\t\t<a href=\"tel://004542344599\" class=\"phone\">+45 423 445 99</a>
\t\t\t\t\t\t<small>Monday to Friday 9.00am - 7.30pm</small>
\t\t\t\t\t</div>
\t\t\t\t</aside>
\t\t\t\t<!--End aside -->
\t\t\t\t<div class=\"col-lg-9\">

\t\t\t\t\t<div id=\"tools\">
\t\t\t\t\t\t<div class=\"row justify-content-between\">
\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4 col-12\">
\t\t\t\t\t\t\t\t<div class=\"styled-select-filters\">
\t\t\t\t\t\t\t\t\t<select name=\"sort_price\" id=\"sort_price\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected>Sort by price</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"lower\">Lowest price</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"higher\">Highest price</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-4 d-none d-sm-block text-end\">
\t\t\t\t\t\t\t\t<a href=\"all_tours_grid.html\" class=\"bt_filters\"><i class=\"icon-th\"></i></a> <a href=\"#\" class=\"bt_filters\"><i class=\" icon-list\"></i></a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--/tools -->

\t\t\t\t\t<div class=\"strip_all_tour_list wow fadeIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 position-relative\">
\t\t\t\t\t\t\t\t<div class=\"wishlist_close\">-</div>
\t\t\t\t\t\t\t\t<div class=\"img_list\">
\t\t\t\t\t\t\t\t\t<a href=\"single_tour.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon popular\"></div><img src=\"img/tour_box_1.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\"><i class=\"icon_set_1_icon-4\"></i>Museums </div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_list_desc\">
\t\t\t\t\t\t\t\t\t<div class=\"rating\"><i class=\"icon-smile voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h3><strong>Arch Triomphe</strong> tour</h3>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
\t\t\t\t\t\t\t\t\t<ul class=\"add_info\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-83\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Schedule</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Saturday</strong> 09.00 AM - 5.30 PM
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Sunday</strong> <span class=\"label label-danger\">Closed</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-41\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Address</h4> Musée du Louvre, 75058 Paris - France
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-97\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Languages</h4> English - French - Chinese - Russian - Italian
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-27\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Parking</h4> 1-3 Rue Elisée Reclus
\t\t\t\t\t\t\t\t\t\t\t\t\t<br> 76 Rue du Général Leclerc
\t\t\t\t\t\t\t\t\t\t\t\t\t<br> 8 Rue Caillaux 94923
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-25\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Transport</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Metro: </strong>Musée du Louvre station (line 1)
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t<div class=\"price_list\">
\t\t\t\t\t\t\t\t\t<div><sup>\$</sup>39*<span class=\"normal_price_list\">\$99</span><small>*Per person</small>
\t\t\t\t\t\t\t\t\t\t<p><a href=\"single_tour.html\" class=\"btn_1\">Details</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--End strip -->

\t\t\t\t\t<div class=\"strip_all_tour_list wow fadeIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 position-relative\">
\t\t\t\t\t\t\t\t<div class=\"wishlist_close\">-</div>
\t\t\t\t\t\t\t\t<div class=\"img_list\">
\t\t\t\t\t\t\t\t\t<a href=\"single_hotel.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\"></div><img src=\"img/hotel_2.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\"><i class=\"icon_set_1_icon-6\"></i>Hotel</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_list_desc\">
\t\t\t\t\t\t\t\t\t<div class=\"score\">Superb<span>9.0</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"rating\"><i class=\"icon-star voted\"></i><i class=\"icon-star  voted\"></i><i class=\"icon-star  voted\"></i><i class=\"icon-star  voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h3><strong>Hotel</strong> Mariott</h3>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
\t\t\t\t\t\t\t\t\t<ul class=\"add_info\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"tooltip-1\" data-bs-placement=\"top\" title=\"Free Wifi\"><i class=\"icon_set_1_icon-86\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"tooltip-1\" data-bs-placement=\"top\" title=\"Plasma TV with cable channels\"><i class=\"icon_set_2_icon-116\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"tooltip-1\" data-bs-placement=\"top\" title=\"Swimming pool\"><i class=\"icon_set_2_icon-110\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"tooltip-1\" data-bs-placement=\"top\" title=\"Fitness Center\"><i class=\"icon_set_2_icon-117\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"tooltip-1\" data-bs-placement=\"top\" title=\"Restaurant\"><i class=\"icon_set_1_icon-58\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t<div class=\"price_list\">
\t\t\t\t\t\t\t\t\t<div><sup>\$</sup>39*<span class=\"normal_price_list\">\$99</span><small>*From/Per night</small>
\t\t\t\t\t\t\t\t\t\t<p><a href=\"single_hotel.html\" class=\"btn_1\">Details</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--End strip -->

\t\t\t\t\t<div class=\"strip_all_tour_list wow fadeIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 position-relative\">
\t\t\t\t\t\t\t\t<div class=\"wishlist_close\">-</div>
\t\t\t\t\t\t\t\t<div class=\"img_list\">
\t\t\t\t\t\t\t\t\t<a href=\"single_transfer.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\"></div><img src=\"img/transfer_3.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"short_info\"><i class=\"icon_set_1_icon-26\"></i>Transfer</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_list_desc\">
\t\t\t\t\t\t\t\t\t<div class=\"rating\"><i class=\"icon-smile voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h3><strong>Orly Airport</strong> group</h3>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
\t\t\t\t\t\t\t\t\t<ul class=\"add_info\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-70\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Passengers</h4> Up to 40 passengers.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-6\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Pick up</h4> Hotel pick up or different place with an extra cost.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-13\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Accessibility</h4> On request accessibility available.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-22\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Pet allowed</h4> On request pet allowed.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-33\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Baggage</h4> Large baggage drop available.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t<div class=\"price_list\">
\t\t\t\t\t\t\t\t\t<div><sup>\$</sup>39*<span class=\"normal_price_list\">\$99</span><small>*From/Per person</small>
\t\t\t\t\t\t\t\t\t\t<p><a href=\"single_transfer.html\" class=\"btn_1\">Details</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--End strip -->

\t\t\t\t\t<div class=\"strip_all_tour_list wow fadeIn\" data-wow-delay=\"0.7s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 position-relative\">
\t\t\t\t\t\t\t\t<div class=\"wishlist_close\">-</div>
\t\t\t\t\t\t\t\t<div class=\"img_list\">
\t\t\t\t\t\t\t\t\t<a href=\"single_tour.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\"></div><img src=\"img/tour_box_5.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\"><i class=\"icon_set_1_icon-44\"></i>Historic Building</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_list_desc\">
\t\t\t\t\t\t\t\t\t<div class=\"rating\"><i class=\"icon-smile voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h3><strong>Pantheon</strong> tour</h3>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
\t\t\t\t\t\t\t\t\t<ul class=\"add_info\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-83\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Schedule</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Saturday</strong> 09.00 AM - 5.30 PM
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Sunday</strong> <span class=\"label label-danger\">Closed</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-41\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Address</h4> Musée du Louvre, 75058 Paris - France
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View on map</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-97\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Languages</h4> English - French - Chinese - Russian - Italian
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-27\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Parking</h4> 1-3 Rue Elisée Reclus
\t\t\t\t\t\t\t\t\t\t\t\t\t<br> 76 Rue du Général Leclerc
\t\t\t\t\t\t\t\t\t\t\t\t\t<br> 8 Rue Caillaux 94923
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-25\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Transport</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Metro: </strong>Musée du Louvre station (line 1)
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t<div class=\"price_list\">
\t\t\t\t\t\t\t\t\t<div><sup>\$</sup>49*<span class=\"normal_price_list\">\$59</span><small>*Per person</small>
\t\t\t\t\t\t\t\t\t\t<p><a href=\"single_tour.html\" class=\"btn_1\">Details</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--End strip -->

\t\t\t\t\t<nav aria-label=\"Page navigation\">
\t\t\t\t\t\t<ul class=\"pagination justify-content-center\">
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&laquo;</span>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item active\"><span class=\"page-link\">1</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#\" aria-label=\"Next\">
\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&raquo;</span>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- end pagination-->

\t\t\t\t</div>
\t\t\t\t<!-- End col lg-9 -->
\t\t\t</div>
\t\t\t<!-- End row -->
\t\t</div>
\t\t<!-- End container -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/wishlist.html.twig";
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

{% block title %}Mes favoris | Eco tourism{% endblock %}

{% block body %}
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
\t\t<!-- Position -->

\t\t<div class=\"collapse\" id=\"collapseMap\">
\t\t\t<div id=\"map\" class=\"map\"></div>
\t\t</div>
\t\t<!-- End Map -->

\t\t<div class=\"container margin_60\">

\t\t\t<div class=\"row\">
\t\t\t\t<aside class=\"col-lg-3\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<a class=\"btn_map\" data-bs-toggle=\"collapse\" href=\"#collapseMap\" aria-expanded=\"false\" aria-controls=\"collapseMap\" data-text-swap=\"Hide map\" data-text-original=\"View on map\">View on map</a>
\t\t\t\t\t</p>

\t\t\t\t\t<div id=\"filters_col\">
\t\t\t\t\t\t<a data-bs-toggle=\"collapse\" href=\"#collapseFilters\" aria-expanded=\"false\" aria-controls=\"collapseFilters\" id=\"filters_col_bt\"><i class=\"icon_set_1_icon-65\"></i>Filters</a>
\t\t\t\t\t\t<div class=\"collapse show\" id=\"collapseFilters\">
\t\t\t\t\t\t\t<div class=\"filter_type\">
\t\t\t\t\t\t\t\t<h6>Price</h6>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
                                        <label class=\"container_radio\">
                                            From \$10 to \$50
                                            <input type=\"radio\" checked=\"checked\" name=\"prices\">
                                            <span class=\"checkmark\"></span>
                                        </label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
                                        <label class=\"container_radio\">
                                            From \$50 to \$80
                                            <input type=\"radio\" name=\"prices\">
                                            <span class=\"checkmark\"></span>
                                        </label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
                                        <label class=\"container_radio\">
                                            From \$80 to \$100
                                            <input type=\"radio\" name=\"prices\">
                                            <span class=\"checkmark\"></span>
                                        </label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"filter_type\">
\t\t\t\t\t\t\t\t<h6>Rating</h6>
\t\t\t\t\t\t\t\t<ul>
                                    <li>
                                       <label class=\"container_check\">
                                            <span class=\"rating\">
                                                <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i>
                                            </span>
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"container_check\">
                                            <span class=\"rating\">
                                               <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i>
                                            </span>
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"container_check\">
                                            <span class=\"rating\">
                                               <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
                                            </span>
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"container_check\">
                                            <span class=\"rating\">
                                              <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
                                            </span>
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"container_check\">
                                            <span class=\"rating\">
                                             <i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i>
                                            </span>
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
                                    </li>
                                </ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"filter_type\">
\t\t\t\t\t\t\t\t<h6>Type</h6>
\t\t\t\t\t\t\t\t<ul class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<li> 
                                        <label class=\"container_check\">
                                            City tours
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
                                        <label class=\"container_check\">
                                            Hotels
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
                                        <label class=\"container_check\">
                                            Transfers
                                            <input type=\"checkbox\">
                                            <span class=\"checkmark\"></span>
                                        </label>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--End collapse -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--End filters col-->
\t\t\t\t\t<div class=\"box_style_2\">
\t\t\t\t\t\t<i class=\"icon_set_1_icon-57\"></i>
\t\t\t\t\t\t<h4>Need <span>Help?</span></h4>
\t\t\t\t\t\t<a href=\"tel://004542344599\" class=\"phone\">+45 423 445 99</a>
\t\t\t\t\t\t<small>Monday to Friday 9.00am - 7.30pm</small>
\t\t\t\t\t</div>
\t\t\t\t</aside>
\t\t\t\t<!--End aside -->
\t\t\t\t<div class=\"col-lg-9\">

\t\t\t\t\t<div id=\"tools\">
\t\t\t\t\t\t<div class=\"row justify-content-between\">
\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4 col-12\">
\t\t\t\t\t\t\t\t<div class=\"styled-select-filters\">
\t\t\t\t\t\t\t\t\t<select name=\"sort_price\" id=\"sort_price\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected>Sort by price</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"lower\">Lowest price</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"higher\">Highest price</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-4 d-none d-sm-block text-end\">
\t\t\t\t\t\t\t\t<a href=\"all_tours_grid.html\" class=\"bt_filters\"><i class=\"icon-th\"></i></a> <a href=\"#\" class=\"bt_filters\"><i class=\" icon-list\"></i></a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--/tools -->

\t\t\t\t\t<div class=\"strip_all_tour_list wow fadeIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 position-relative\">
\t\t\t\t\t\t\t\t<div class=\"wishlist_close\">-</div>
\t\t\t\t\t\t\t\t<div class=\"img_list\">
\t\t\t\t\t\t\t\t\t<a href=\"single_tour.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon popular\"></div><img src=\"img/tour_box_1.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\"><i class=\"icon_set_1_icon-4\"></i>Museums </div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_list_desc\">
\t\t\t\t\t\t\t\t\t<div class=\"rating\"><i class=\"icon-smile voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h3><strong>Arch Triomphe</strong> tour</h3>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
\t\t\t\t\t\t\t\t\t<ul class=\"add_info\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-83\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Schedule</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Saturday</strong> 09.00 AM - 5.30 PM
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Sunday</strong> <span class=\"label label-danger\">Closed</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-41\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Address</h4> Musée du Louvre, 75058 Paris - France
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-97\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Languages</h4> English - French - Chinese - Russian - Italian
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-27\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Parking</h4> 1-3 Rue Elisée Reclus
\t\t\t\t\t\t\t\t\t\t\t\t\t<br> 76 Rue du Général Leclerc
\t\t\t\t\t\t\t\t\t\t\t\t\t<br> 8 Rue Caillaux 94923
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-25\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Transport</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Metro: </strong>Musée du Louvre station (line 1)
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t<div class=\"price_list\">
\t\t\t\t\t\t\t\t\t<div><sup>\$</sup>39*<span class=\"normal_price_list\">\$99</span><small>*Per person</small>
\t\t\t\t\t\t\t\t\t\t<p><a href=\"single_tour.html\" class=\"btn_1\">Details</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--End strip -->

\t\t\t\t\t<div class=\"strip_all_tour_list wow fadeIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 position-relative\">
\t\t\t\t\t\t\t\t<div class=\"wishlist_close\">-</div>
\t\t\t\t\t\t\t\t<div class=\"img_list\">
\t\t\t\t\t\t\t\t\t<a href=\"single_hotel.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\"></div><img src=\"img/hotel_2.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\"><i class=\"icon_set_1_icon-6\"></i>Hotel</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_list_desc\">
\t\t\t\t\t\t\t\t\t<div class=\"score\">Superb<span>9.0</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"rating\"><i class=\"icon-star voted\"></i><i class=\"icon-star  voted\"></i><i class=\"icon-star  voted\"></i><i class=\"icon-star  voted\"></i><i class=\"icon-star-empty\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h3><strong>Hotel</strong> Mariott</h3>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
\t\t\t\t\t\t\t\t\t<ul class=\"add_info\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"tooltip-1\" data-bs-placement=\"top\" title=\"Free Wifi\"><i class=\"icon_set_1_icon-86\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"tooltip-1\" data-bs-placement=\"top\" title=\"Plasma TV with cable channels\"><i class=\"icon_set_2_icon-116\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"tooltip-1\" data-bs-placement=\"top\" title=\"Swimming pool\"><i class=\"icon_set_2_icon-110\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"tooltip-1\" data-bs-placement=\"top\" title=\"Fitness Center\"><i class=\"icon_set_2_icon-117\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"tooltip-1\" data-bs-placement=\"top\" title=\"Restaurant\"><i class=\"icon_set_1_icon-58\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t<div class=\"price_list\">
\t\t\t\t\t\t\t\t\t<div><sup>\$</sup>39*<span class=\"normal_price_list\">\$99</span><small>*From/Per night</small>
\t\t\t\t\t\t\t\t\t\t<p><a href=\"single_hotel.html\" class=\"btn_1\">Details</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--End strip -->

\t\t\t\t\t<div class=\"strip_all_tour_list wow fadeIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 position-relative\">
\t\t\t\t\t\t\t\t<div class=\"wishlist_close\">-</div>
\t\t\t\t\t\t\t\t<div class=\"img_list\">
\t\t\t\t\t\t\t\t\t<a href=\"single_transfer.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\"></div><img src=\"img/transfer_3.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"short_info\"><i class=\"icon_set_1_icon-26\"></i>Transfer</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_list_desc\">
\t\t\t\t\t\t\t\t\t<div class=\"rating\"><i class=\"icon-smile voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h3><strong>Orly Airport</strong> group</h3>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
\t\t\t\t\t\t\t\t\t<ul class=\"add_info\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-70\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Passengers</h4> Up to 40 passengers.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-6\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Pick up</h4> Hotel pick up or different place with an extra cost.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-13\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Accessibility</h4> On request accessibility available.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-22\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Pet allowed</h4> On request pet allowed.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-33\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Baggage</h4> Large baggage drop available.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t<div class=\"price_list\">
\t\t\t\t\t\t\t\t\t<div><sup>\$</sup>39*<span class=\"normal_price_list\">\$99</span><small>*From/Per person</small>
\t\t\t\t\t\t\t\t\t\t<p><a href=\"single_transfer.html\" class=\"btn_1\">Details</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--End strip -->

\t\t\t\t\t<div class=\"strip_all_tour_list wow fadeIn\" data-wow-delay=\"0.7s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 position-relative\">
\t\t\t\t\t\t\t\t<div class=\"wishlist_close\">-</div>
\t\t\t\t\t\t\t\t<div class=\"img_list\">
\t\t\t\t\t\t\t\t\t<a href=\"single_tour.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ribbon top_rated\"></div><img src=\"img/tour_box_5.jpg\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"short_info\"><i class=\"icon_set_1_icon-44\"></i>Historic Building</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"tour_list_desc\">
\t\t\t\t\t\t\t\t\t<div class=\"rating\"><i class=\"icon-smile voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile  voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h3><strong>Pantheon</strong> tour</h3>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
\t\t\t\t\t\t\t\t\t<ul class=\"add_info\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-83\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Schedule</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Saturday</strong> 09.00 AM - 5.30 PM
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Sunday</strong> <span class=\"label label-danger\">Closed</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-41\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Address</h4> Musée du Louvre, 75058 Paris - France
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View on map</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-97\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Languages</h4> English - French - Chinese - Russian - Italian
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-27\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Parking</h4> 1-3 Rue Elisée Reclus
\t\t\t\t\t\t\t\t\t\t\t\t\t<br> 76 Rue du Général Leclerc
\t\t\t\t\t\t\t\t\t\t\t\t\t<br> 8 Rue Caillaux 94923
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_styled tooltip-effect-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip-item\"><i class=\"icon_set_1_icon-25\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Transport</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Metro: </strong>Musée du Louvre station (line 1)
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2\">
\t\t\t\t\t\t\t\t<div class=\"price_list\">
\t\t\t\t\t\t\t\t\t<div><sup>\$</sup>49*<span class=\"normal_price_list\">\$59</span><small>*Per person</small>
\t\t\t\t\t\t\t\t\t\t<p><a href=\"single_tour.html\" class=\"btn_1\">Details</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--End strip -->

\t\t\t\t\t<nav aria-label=\"Page navigation\">
\t\t\t\t\t\t<ul class=\"pagination justify-content-center\">
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&laquo;</span>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item active\"><span class=\"page-link\">1</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#\" aria-label=\"Next\">
\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&raquo;</span>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- end pagination-->

\t\t\t\t</div>
\t\t\t\t<!-- End col lg-9 -->
\t\t\t</div>
\t\t\t<!-- End row -->
\t\t</div>
\t\t<!-- End container -->
{% endblock %}", "client/wishlist.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\wishlist.html.twig");
    }
}
