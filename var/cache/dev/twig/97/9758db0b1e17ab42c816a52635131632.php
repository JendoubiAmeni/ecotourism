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

/* base.html.twig */
class __TwigTemplate_a1a8719410c4573e6b39da2728386f2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "     <style>
        .sk-spinner-wave div {
            background-color: #76BA1B !important;
        }
        .top_links .fa{
            padding-left: 5px !important;
        }
       
        #custom-alert {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000; /* Ajustez selon les besoins */
        }
        header .row {

            height: 70px !important;
            /* Adjust the height value as needed */
        }

        header.sticky #logo_home h1 a,
        header#plain #logo_home h1 a {

            background-size: 160px 50px !important;
        }

        #logo_home h1 a {

            height: 70px !important
        }

        .sticky nav {
            margin-top: 18px !important;
        }

        @media only screen and (min--moz-device-pixel-ratio: 2),
        only screen and (-o-min-device-pixel-ratio: 21),
        only screen and (-webkit-min-device-pixel-ratio: 2),
        only screen and (min-device-pixel-ratio: 2) {

            #logo_home h1 a,
            header#colored #logo_home h1 a {

                background-size: 160px 50px !important;
            }

            header.sticky #logo_home h1 a,
            header#plain #logo_home h1 a {

                background-size: 160px 50px !important;
            }

            .sticky nav {
                margin-top: 15px !important;
            }
        }

        header .last .row {
            margin-top: 0 !important;
        }
        .header_menu{
          width: 160 px !important;
          height: 60 px! important ;
        }
    </style>
</head>
<body class=\"layout\">
     <div id=\"preloader\">
        <div class=\"sk-spinner sk-spinner-wave\">
            <div class=\"sk-rect1\"></div>
            <div class=\"sk-rect2\"></div>
            <div class=\"sk-rect3\"></div>
            <div class=\"sk-rect4\"></div>
            <div class=\"sk-rect5\"></div>
        </div>
    </div>
 <div class=\"layer\"></div>
  
   
    <header>
        <div id=\"top_line\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-6\">
                     ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120)) {
            // line 121
            echo "                      <div class=\"profile-picture\">
                        <img src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/profils/mini/300x300-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "images", [], "any", false, false, false, 122), 0, [], "array", false, false, false, 122), "nom", [], "any", false, false, false, 122))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "nom", [], "any", false, false, false, 122), "html", null, true);
            echo "\" width=\"25\" class=\"img-fluid rounded-circle\">
                     <strong> ";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "nom", [], "any", false, false, false, 123), "html", null, true);
            echo "</strong>
                    </div>
                           
                     ";
        }
        // line 127
        echo "                            </div>
                    <div class=\"col-6\">
                        <ul id=\"top_links\">
                            ";
        // line 130
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130)) {
            // line 131
            echo "                               <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\" > <i class=\"fa fa-user\">&nbsp;&nbsp;</i>Mon profil </a></li>
                               <li><a href=\"";
            // line 132
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" > <i class=\"fa fa-sign-in\">&nbsp;&nbsp;</i>Déconnexion </a></li>
                            
                            ";
        } else {
            // line 135
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">  <i class=\"fa fa-user\"> &nbsp;&nbsp;</i>Se connecter</a></li>
                                 <li><a href=\"";
            // line 136
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wishlist");
            echo "\" id=\"wishlist_link\">Mes favoris</a></li>
                            ";
        }
        // line 138
        echo "                            
                           
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>

        <div class=\"container last\">
            <div class=\"row\">
                <div class=\"col-3\">
                    <div id=\"logo_home\">
                        <h1><a href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" ></a></h1>
                    </div>
                </div>
                <nav class=\"col-9\">
                    <a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu
                            mobile</span></a>
                    <div class=\"main-menu\">
                        <div id=\"header_menu\">
                            <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" width=\"160\" height=\"60\" alt=\"eco tourism\">
                        </div>
                        <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_set_1_icon-77\"></i></a>
                        <ul>
                            <li class=\"submenu\">
                                <a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"show-submenu\">Accueil </a>
                                
                            </li>
                            <li class=\"submenu\">
                                <a href=\"";
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_destinations");
        echo "\" class=\"show-submenu\">Destinations </a>
                               
                            </li>
                            <li class=\"submenu\">
                                <a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event");
        echo "\" class=\"show-submenu\">Événements
                                   </a>
                            </li>
                            <li class=\"submenu\">
                                <a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        echo "\" class=\"show-submenu\">Boutique 
                                </a>
                            </li>
                            <li class=\"submenu\">
                                <a href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sensibilisation");
        echo "\" class=\"show-submenu\">Sensibilisation 
                                  </a>
                              
                            </li>
                            <li class=\"submenu\">
                                <a href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"show-submenu\">Partenariats et Durabilité </a>
                              
                            </li>
                              <li class=\"submenu\">
                                <a href=\"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis");
        echo "\" class=\"show-submenu\">Avis et Évaluations</a>
                            </li>
                            
                        </ul>
                    </div>
                    <ul id=\"top_tools\">
                        <li>
                            <a href=\"javascript:void(0);\" class=\"search-overlay-menu-btn\"><i
                                    class=\"icon_search\"></i></a>
                        </li>
                        <li>
                            <div class=\"dropdown dropdown-cart\">
                                <a href=\"#0\" data-bs-toggle=\"dropdown\" class=\"cart_bt\"><i
                                        class=\"icon_bag_alt\"></i><strong>3</strong></a>
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
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
   


    ";
        // line 235
        $this->loadTemplate("_partials/_flash.html.twig", "base.html.twig", 235)->display($context);
        // line 236
        echo "        <main>
       
      ";
        // line 238
        $this->displayBlock('body', $context, $blocks);
        // line 239
        echo "    </main>
    <footer class=\"revealed\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h3>Besoin d'aide ?</h3>
                <a href=\"tel://004542344599\" id=\"phone\">+216 423 445 99</a>
                <a href=\"mailto:help@ecotourism.com\" id=\"email_footer\">help@ecotourism.com</a>
            </div>
            <div class=\"col-md-3\">
                <h3>À propos</h3>
                <ul>
                   
                    <li><a href=\"#\">FAQ</a></li>
                    <li><a href=\"";
        // line 253
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion</a></li>
                    <li><a href=\"";
        // line 254
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_register");
        echo "\">Inscription</a></li>
                   
                </ul>
            </div>
            <div class=\"col-md-3\">
                <h3>Découvrir</h3>
                <ul>
                  
                    <li><a href=\"#\">Guide touristique</a></li>
                    <li><a href=\"#\">Liste de favoris</a></li>
                   
                </ul>
            </div>
            <div class=\"col-md-2\">
                <h3>Paramètres</h3>
                <div class=\"styled-select\">
                    <select name=\"lang\" id=\"lang\">
                        <option value=\"English\" selected>Anglais</option>
                        <option value=\"French\">Français</option>
                        <option value=\"Spanish\">Espagnol</option>
                        <option value=\"Russian\">Russe</option>
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
        </div>

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
                    <p>© Écotourisme <script>document.write(new Date().getFullYear());</script></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id=\"toTop\"></div>

<div class=\"search-overlay-menu\">
    <span class=\"search-overlay-close\"><i class=\"icon_set_1_icon-77\"></i></span>
    <form role=\"search\" id=\"searchform\" method=\"get\">
        <input value=\"\" name=\"q\" type=\"text\" placeholder=\"Rechercher...\" />
        <button type=\"submit\"><i class=\"icon_set_1_icon-78\"></i></button>
    </form>
</div>

 ";
        // line 317
        $this->displayBlock('javascripts', $context, $blocks);
        // line 431
        echo "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome Eco Tourism!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/apple-touch-icon-57x57-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/apple-touch-icon-72x72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\"
        href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/apple-touch-icon-114x114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\"
        href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/apple-touch-icon-144x144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" />
    <script src=\"https://kit.fontawesome.com/64d58efce2.js\" crossorigin=\"anonymous\"></script>
    <link href=\"https://fonts.googleapis.com/css2?family=Gochi+Hand&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap\"
        rel=\"stylesheet\">

   <!-- CSS -->
\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/css/blog.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/css/vendors.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"#\" id=\"colors\" rel=\"stylesheet\">
    

    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/css/form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/tuner/css/colorpicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/tuner/css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/fonts/fi/flaticon.css"), "html", null, true);
        echo "\">
    
    <!-- SPECIFIC CSS -->
\t<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/css/shop.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 238
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 317
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 318
        echo "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>

<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
<script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/js/jquery-3.7.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/js/common_scripts_min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/js/functions.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/js/notify_func.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/js/tabs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/js/form.js"), "html", null, true);
        echo "\"></script>

  <!-- Map -->
\t
\t<script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/js/infobox.js"), "html", null, true);
        echo "\"></script>

    \t<!-- Specific scripts -->
\t<!-- Cat nav mobile -->
\t<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/js/cat_nav_mobile.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$('#cat_nav').mobileMenu();
\t</script>

\t<script>
\t\tnew CBPFWTabs(document.getElementById('tabs'));
        
\t</script>
";
        // line 345
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 345, $this->source); })()), "user", [], "any", false, false, false, 345) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 345, $this->source); })()), "user", [], "any", false, false, false, 345), "isVerified", [], "any", false, false, false, 345))) {
            // line 346
            echo "    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Compte non encore vérifié',
            html: 'Veuillez vérifier votre boîte de réception pour finaliser la vérification.<br> <a href=\"";
            // line 350
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resend_verification");
            echo "\" class=\"btn btn-success\">cliquez ici pour le renvoyer</a>',
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
        });
    </script>
";
        }
        // line 357
        echo "


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var customAlert = document.getElementById(\"custom-alert\");
        var closeButton = customAlert.querySelector('.close');

        closeButton.addEventListener('click', function () {
            customAlert.style.display = \"none\";
        });
    });
</script>


<script>
    function readURL(input) {
        var yourPicture = document.querySelector('.your_picture_image');
        
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                \$('.your_picture_image').attr('src', e.target.result);
                yourPicture.classList.add('file-selected'); // Add the class when a file is selected
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            \$('.your_picture_image').attr('src', '";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/your-picture.png"), "html", null, true);
        echo "');
            yourPicture.classList.remove('file-selected'); // Remove the class if no file is selected
        }
    }
</script>

  <script>
    function showHidePwd() {
        var input = document.querySelector('.password');
        if (input.type === \"password\") {
            input.type = \"text\";
            document.getElementById(\"eye\").className = \"far fa-eye\";
        } else {
            input.type = \"password\";
            document.getElementById(\"eye\").className = \"far fa-eye-slash\";
        }
    }

    function showHideRPwd() {
        var input = document.querySelector('.repassword');
        if (input.type === \"password\") {
            input.type = \"text\";
            document.getElementById(\"eye1\").className = \"far fa-eye\";
        } else {
            input.type = \"password\";
            document.getElementById(\"eye1\").className = \"far fa-eye-slash\";
        }
    }
</script>
<!-- Inclure SweetAlert depuis un CDN -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css\">
";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 418, $this->source); })()), "session", [], "any", false, false, false, 418), "flashbag", [], "any", false, false, false, 418), "get", ["success"], "method", false, false, false, 418));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 419
            echo "        <script>
            Swal.fire({
                icon: 'info',
                title: 'Vous avez participé à l\\'événement avec succès',
                showCloseButton: true,
                showCancelButton: false,
                showConfirmButton: false,
            });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 429
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  719 => 429,  704 => 419,  700 => 418,  665 => 386,  634 => 357,  624 => 350,  618 => 346,  616 => 345,  604 => 336,  597 => 332,  590 => 328,  586 => 327,  582 => 326,  578 => 325,  574 => 324,  570 => 323,  563 => 318,  553 => 317,  535 => 238,  523 => 34,  517 => 31,  513 => 30,  509 => 29,  505 => 28,  498 => 24,  494 => 23,  490 => 22,  486 => 21,  482 => 20,  472 => 13,  467 => 11,  462 => 9,  458 => 8,  453 => 7,  443 => 6,  424 => 5,  413 => 431,  411 => 317,  345 => 254,  341 => 253,  325 => 239,  323 => 238,  319 => 236,  317 => 235,  268 => 189,  261 => 185,  253 => 180,  246 => 176,  239 => 172,  232 => 168,  225 => 164,  217 => 159,  206 => 151,  191 => 138,  186 => 136,  181 => 135,  175 => 132,  170 => 131,  168 => 130,  163 => 127,  156 => 123,  150 => 122,  147 => 121,  145 => 120,  59 => 36,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome Eco Tourism!{% endblock %}</title>
{% block stylesheets %}
    <link rel=\"shortcut icon\" href=\"{{ asset('Frontend/img/favicon.ico') }}\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"{{ asset('Frontend/img/apple-touch-icon-57x57-precomposed.png') }}\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"{{ asset('Frontend/img/apple-touch-icon-72x72-precomposed.png') }}\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\"
        href=\"{{ asset('Frontend/img/apple-touch-icon-114x114-precomposed.png') }}\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\"
        href=\"{{ asset('Frontend/img/apple-touch-icon-144x144-precomposed.png') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" />
    <script src=\"https://kit.fontawesome.com/64d58efce2.js\" crossorigin=\"anonymous\"></script>
    <link href=\"https://fonts.googleapis.com/css2?family=Gochi+Hand&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap\"
        rel=\"stylesheet\">

   <!-- CSS -->
\t<link href=\"{{ asset('Frontend/css/blog.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Frontend/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Frontend/css/style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Frontend/css/vendors.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Frontend/css/admin.css')}}\" rel=\"stylesheet\">
    <link href=\"#\" id=\"colors\" rel=\"stylesheet\">
    

    <link href=\"{{ asset('Frontend/css/form.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{asset('Frontend/tuner/css/colorpicker.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('Frontend/tuner/css/styles.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('Frontend/fonts/fi/flaticon.css')}}\">
    
    <!-- SPECIFIC CSS -->
\t<link href=\"{{asset('Frontend/css/shop.css')}}\" rel=\"stylesheet\">
    {% endblock %}
     <style>
        .sk-spinner-wave div {
            background-color: #76BA1B !important;
        }
        .top_links .fa{
            padding-left: 5px !important;
        }
       
        #custom-alert {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000; /* Ajustez selon les besoins */
        }
        header .row {

            height: 70px !important;
            /* Adjust the height value as needed */
        }

        header.sticky #logo_home h1 a,
        header#plain #logo_home h1 a {

            background-size: 160px 50px !important;
        }

        #logo_home h1 a {

            height: 70px !important
        }

        .sticky nav {
            margin-top: 18px !important;
        }

        @media only screen and (min--moz-device-pixel-ratio: 2),
        only screen and (-o-min-device-pixel-ratio: 21),
        only screen and (-webkit-min-device-pixel-ratio: 2),
        only screen and (min-device-pixel-ratio: 2) {

            #logo_home h1 a,
            header#colored #logo_home h1 a {

                background-size: 160px 50px !important;
            }

            header.sticky #logo_home h1 a,
            header#plain #logo_home h1 a {

                background-size: 160px 50px !important;
            }

            .sticky nav {
                margin-top: 15px !important;
            }
        }

        header .last .row {
            margin-top: 0 !important;
        }
        .header_menu{
          width: 160 px !important;
          height: 60 px! important ;
        }
    </style>
</head>
<body class=\"layout\">
     <div id=\"preloader\">
        <div class=\"sk-spinner sk-spinner-wave\">
            <div class=\"sk-rect1\"></div>
            <div class=\"sk-rect2\"></div>
            <div class=\"sk-rect3\"></div>
            <div class=\"sk-rect4\"></div>
            <div class=\"sk-rect5\"></div>
        </div>
    </div>
 <div class=\"layer\"></div>
  
   
    <header>
        <div id=\"top_line\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-6\">
                     {% if app.user %}
                      <div class=\"profile-picture\">
                        <img src=\"{{ asset('assets/uploads/profils/mini/300x300-' ~ app.user.images[0].nom ) }}\" alt=\"{{ app.user.nom }}\" width=\"25\" class=\"img-fluid rounded-circle\">
                     <strong> {{ app.user.nom }}</strong>
                    </div>
                           
                     {% endif %}
                            </div>
                    <div class=\"col-6\">
                        <ul id=\"top_links\">
                            {% if app.user %}
                               <li><a href=\"{{ path('app_profile') }}\" > <i class=\"fa fa-user\">&nbsp;&nbsp;</i>Mon profil </a></li>
                               <li><a href=\"{{ path('app_logout') }}\" > <i class=\"fa fa-sign-in\">&nbsp;&nbsp;</i>Déconnexion </a></li>
                            
                            {% else %}
                                <li><a href=\"{{ path('app_login') }}\">  <i class=\"fa fa-user\"> &nbsp;&nbsp;</i>Se connecter</a></li>
                                 <li><a href=\"{{ path('app_wishlist') }}\" id=\"wishlist_link\">Mes favoris</a></li>
                            {% endif %}
                            
                           
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>

        <div class=\"container last\">
            <div class=\"row\">
                <div class=\"col-3\">
                    <div id=\"logo_home\">
                        <h1><a href=\"{{ path('app_index') }}\" ></a></h1>
                    </div>
                </div>
                <nav class=\"col-9\">
                    <a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu
                            mobile</span></a>
                    <div class=\"main-menu\">
                        <div id=\"header_menu\">
                            <img src=\"{{asset('img/logo.png')}}\" width=\"160\" height=\"60\" alt=\"eco tourism\">
                        </div>
                        <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_set_1_icon-77\"></i></a>
                        <ul>
                            <li class=\"submenu\">
                                <a href=\"{{ path('app_index') }}\" class=\"show-submenu\">Accueil </a>
                                
                            </li>
                            <li class=\"submenu\">
                                <a href=\"{{ path('app_destinations') }}\" class=\"show-submenu\">Destinations </a>
                               
                            </li>
                            <li class=\"submenu\">
                                <a href=\"{{ path('app_event') }}\" class=\"show-submenu\">Événements
                                   </a>
                            </li>
                            <li class=\"submenu\">
                                <a href=\"{{ path('app_shop') }}\" class=\"show-submenu\">Boutique 
                                </a>
                            </li>
                            <li class=\"submenu\">
                                <a href=\"{{ path('app_sensibilisation') }}\" class=\"show-submenu\">Sensibilisation 
                                  </a>
                              
                            </li>
                            <li class=\"submenu\">
                                <a href=\"{{ path('app_index') }}\" class=\"show-submenu\">Partenariats et Durabilité </a>
                              
                            </li>
                              <li class=\"submenu\">
                                <a href=\"{{ path('app_avis') }}\" class=\"show-submenu\">Avis et Évaluations</a>
                            </li>
                            
                        </ul>
                    </div>
                    <ul id=\"top_tools\">
                        <li>
                            <a href=\"javascript:void(0);\" class=\"search-overlay-menu-btn\"><i
                                    class=\"icon_search\"></i></a>
                        </li>
                        <li>
                            <div class=\"dropdown dropdown-cart\">
                                <a href=\"#0\" data-bs-toggle=\"dropdown\" class=\"cart_bt\"><i
                                        class=\"icon_bag_alt\"></i><strong>3</strong></a>
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
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
   


    {% include \"_partials/_flash.html.twig\" %}
        <main>
       
      {% block body %}{% endblock %}
    </main>
    <footer class=\"revealed\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h3>Besoin d'aide ?</h3>
                <a href=\"tel://004542344599\" id=\"phone\">+216 423 445 99</a>
                <a href=\"mailto:help@ecotourism.com\" id=\"email_footer\">help@ecotourism.com</a>
            </div>
            <div class=\"col-md-3\">
                <h3>À propos</h3>
                <ul>
                   
                    <li><a href=\"#\">FAQ</a></li>
                    <li><a href=\"{{path('app_login')}}\">Connexion</a></li>
                    <li><a href=\"{{path('app_user_register')}}\">Inscription</a></li>
                   
                </ul>
            </div>
            <div class=\"col-md-3\">
                <h3>Découvrir</h3>
                <ul>
                  
                    <li><a href=\"#\">Guide touristique</a></li>
                    <li><a href=\"#\">Liste de favoris</a></li>
                   
                </ul>
            </div>
            <div class=\"col-md-2\">
                <h3>Paramètres</h3>
                <div class=\"styled-select\">
                    <select name=\"lang\" id=\"lang\">
                        <option value=\"English\" selected>Anglais</option>
                        <option value=\"French\">Français</option>
                        <option value=\"Spanish\">Espagnol</option>
                        <option value=\"Russian\">Russe</option>
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
        </div>

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
                    <p>© Écotourisme <script>document.write(new Date().getFullYear());</script></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id=\"toTop\"></div>

<div class=\"search-overlay-menu\">
    <span class=\"search-overlay-close\"><i class=\"icon_set_1_icon-77\"></i></span>
    <form role=\"search\" id=\"searchform\" method=\"get\">
        <input value=\"\" name=\"q\" type=\"text\" placeholder=\"Rechercher...\" />
        <button type=\"submit\"><i class=\"icon_set_1_icon-78\"></i></button>
    </form>
</div>

 {% block javascripts %}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>

<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
<script src=\"{{ asset('Frontend/js/jquery-3.7.0.min.js') }}\"></script>
<script src=\"{{ asset('Frontend/js/common_scripts_min.js') }}\"></script>
<script src=\"{{ asset('Frontend/js/functions.js') }}\"></script>
<script src=\"{{ asset('Frontend/js/notify_func.js') }}\"></script>
<script src=\"{{ asset('Frontend/js/tabs.js')}}\"></script>
<script src=\"{{ asset('Frontend/js/form.js')}}\"></script>

  <!-- Map -->
\t
\t<script src=\"{{ asset('Frontend/js/infobox.js')}}\"></script>

    \t<!-- Specific scripts -->
\t<!-- Cat nav mobile -->
\t<script src=\"{{ asset('Frontend/js/cat_nav_mobile.js')}}\"></script>
\t<script>
\t\t\$('#cat_nav').mobileMenu();
\t</script>

\t<script>
\t\tnew CBPFWTabs(document.getElementById('tabs'));
        
\t</script>
{% if app.user and not app.user.isVerified %}
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Compte non encore vérifié',
            html: 'Veuillez vérifier votre boîte de réception pour finaliser la vérification.<br> <a href=\"{{ path('resend_verification') }}\" class=\"btn btn-success\">cliquez ici pour le renvoyer</a>',
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
        });
    </script>
{% endif %}



<script>
    document.addEventListener('DOMContentLoaded', function () {
        var customAlert = document.getElementById(\"custom-alert\");
        var closeButton = customAlert.querySelector('.close');

        closeButton.addEventListener('click', function () {
            customAlert.style.display = \"none\";
        });
    });
</script>


<script>
    function readURL(input) {
        var yourPicture = document.querySelector('.your_picture_image');
        
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                \$('.your_picture_image').attr('src', e.target.result);
                yourPicture.classList.add('file-selected'); // Add the class when a file is selected
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            \$('.your_picture_image').attr('src', '{{asset('Frontend/img/your-picture.png')}}');
            yourPicture.classList.remove('file-selected'); // Remove the class if no file is selected
        }
    }
</script>

  <script>
    function showHidePwd() {
        var input = document.querySelector('.password');
        if (input.type === \"password\") {
            input.type = \"text\";
            document.getElementById(\"eye\").className = \"far fa-eye\";
        } else {
            input.type = \"password\";
            document.getElementById(\"eye\").className = \"far fa-eye-slash\";
        }
    }

    function showHideRPwd() {
        var input = document.querySelector('.repassword');
        if (input.type === \"password\") {
            input.type = \"text\";
            document.getElementById(\"eye1\").className = \"far fa-eye\";
        } else {
            input.type = \"password\";
            document.getElementById(\"eye1\").className = \"far fa-eye-slash\";
        }
    }
</script>
<!-- Inclure SweetAlert depuis un CDN -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css\">
{% for flash_message in app.session.flashbag.get('success') %}
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Vous avez participé à l\\'événement avec succès',
                showCloseButton: true,
                showCancelButton: false,
                showConfirmButton: false,
            });
        </script>
    {% endfor %}

{% endblock %}
    </body>
</html>", "base.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\base.html.twig");
    }
}
