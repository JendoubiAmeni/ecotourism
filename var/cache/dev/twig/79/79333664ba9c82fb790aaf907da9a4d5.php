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

/* baseAdmin.html.twig */
class __TwigTemplate_48a0ff0f0e64affe6bb0fc1bd792f6ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <title>Dashboard | Eco Tourism</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <meta content=\"ecotourism\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!-- App favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/images/favicon.ico"), "html", null, true);
        echo "\">

    <!-- C3 Chart css -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/c3/c3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- App css -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"bootstrap-stylesheet\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"app-stylesheet\" />
     
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/switchery/switchery.min.css\" rel=\"stylesheet"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/select2/select2.min.css\" rel=\"stylesheet"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/bootstrap-select/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- Plugin css -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <style>
        .logo-box,
        .left-side-menu {
            color: #333333 !important;
            background-color: #606060 !important;
        }
    </style>
</head>
<body>
<div id=\"wrapper\">
        <div class=\"navbar-custom\">
            <ul class=\"list-unstyled topnav-menu float-right mb-0\">

               

                <li class=\"dropdown notification-list\">
                    <a class=\"nav-link dropdown-toggle  waves-effect waves-light\" data-toggle=\"dropdown\" href=\"#\"
                        role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
                        <i class=\"dripicons-bell noti-icon\"></i>
                        <span class=\"badge badge-pink rounded-circle noti-icon-badge\">4</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-lg\">

                        <div class=\"dropdown-header noti-title\">
                            <h5 class=\"text-overflow m-0\"><span class=\"float-right\">
                                    <span class=\"badge badge-danger float-right\">5</span>
                                </span>Notification</h5>
                        </div>

                        <div class=\"slimscroll noti-scroll\">

                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon bg-success\"><i class=\"mdi mdi-comment-account-outline\"></i>
                                </div>
                                <p class=\"notify-details\">Robert S. Taylor commented on Admin<small class=\"text-muted\">1
                                        min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon bg-primary\">
                                    <i class=\"mdi mdi-settings-outline\"></i>
                                </div>
                                <p class=\"notify-details\">New settings
                                    <small class=\"text-muted\">There are new settings available</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon bg-warning\">
                                    <i class=\"mdi mdi-bell-outline\"></i>
                                </div>
                                <p class=\"notify-details\">Updates
                                    <small class=\"text-muted\">There are 2 new updates available</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon\">
                                    <img src=\"assets/images/users/avatar-4.jpg\" class=\"img-fluid rounded-circle\"
                                        alt=\"\" />
                                </div>
                                <p class=\"notify-details\">Karen Robinson</p>
                                <p class=\"text-muted mb-0 user-msg\">
                                    <small>Wow ! this admin looks good and awesome design</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon bg-danger\">
                                    <i class=\"mdi mdi-account-plus\"></i>
                                </div>
                                <p class=\"notify-details\">New user
                                    <small class=\"text-muted\">You have 10 unread messages</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon bg-info\">
                                    <i class=\"mdi mdi-comment-account-outline\"></i>
                                </div>
                                <p class=\"notify-details\">Caleb Flakelar commented on Admin
                                    <small class=\"text-muted\">4 days ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon bg-secondary\">
                                    <i class=\"mdi mdi-heart\"></i>
                                </div>
                                <p class=\"notify-details\">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class=\"text-muted\">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href=\"javascript:void(0);\"
                            class=\"dropdown-item text-center text-primary notify-item notify-all\">
                            View all
                            <i class=\"fi-arrow-right\"></i>
                        </a>

                    </div>
                </li>

                <li class=\"dropdown notification-list\">
                ";
        // line 143
        if (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", true, true, false, 143) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 143), "images", [], "any", true, true, false, 143)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "user", [], "any", false, false, false, 143), "images", [], "any", false, false, false, 143)) > 0))) {
            // line 144
            echo "                    <a class=\"nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light\" data-toggle=\"dropdown\"
                        href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
                        <img src=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/profils/mini/300x300-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "images", [], "any", false, false, false, 146), 0, [], "array", false, false, false, 146), "nom", [], "any", false, false, false, 146))), "html", null, true);
            echo "\" alt=\"user-image\" class=\"rounded-circle\">
                        <span class=\"pro-user-name ml-1\">
                            ";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148), "nom", [], "any", false, false, false, 148), "html", null, true);
            echo " <i class=\"mdi mdi-chevron-down\"></i>
                        </span>
                    </a>
             <div class=\"dropdown-menu dropdown-menu-right profile-dropdown \">
                   
                

                    <!-- item-->
                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                        <i class=\"fe-user\"></i>
                        <span>Profil</span>
                    </a>

                    <!-- item-->
                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                        <i class=\"fe-settings\"></i>
                        <span>Paramètres</span>
                    </a>

                    <!-- item-->
                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                        <i class=\"fe-lock\"></i>
                        <span>Verrouillage écran</span>
                    </a>

                    <div class=\"dropdown-divider\"></div>

                    <!-- item-->
                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                        <i class=\"fe-log-out\"></i>
                        <span>Déconnexion</span>
                    </a>
                </div>

                    ";
        }
        // line 183
        echo "                </li>

                <li class=\"dropdown notification-list\">
                    <a href=\"javascript:void(0);\" class=\"nav-link right-bar-toggle waves-effect waves-light\">
                        <i class=\"fe-settings noti-icon\"></i>
                    </a>
                </li>


            </ul>

            <!-- LOGO -->
            <div class=\"logo-box\">
                <a href=\"";
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\" class=\"logo text-center\">
                    <span class=\"logo-lg\">
                        <img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/images/logo-light.png"), "html", null, true);
        echo "\" alt=\"\" height=\"60\">
                      
                    </span>
                    <span class=\"logo-sm\">
                      
                        <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/images/logo-sm.png"), "html", null, true);
        echo "\" alt=\"\" height=\"60\">
                    </span>
                </a>
            </div>

            <ul class=\"list-unstyled topnav-menu topnav-menu-left m-0\">
                <li>
                    <button class=\"button-menu-mobile waves-effect waves-light\">
                        <i class=\"fe-menu\"></i>
                    </button>
                </li>

                <li class=\"d-none d-sm-block\">
                    <form class=\"app-search\">
                        <div class=\"app-search-box\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn\" type=\"submit\">
                                        <i class=\"fe-search\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>

            </ul>
        </div>
 
        <div class=\"left-side-menu\">

            <div class=\"slimscroll-menu\">

                <!--- Sidemenu -->
                <div id=\"sidebar-menu\">

                    <ul class=\"metismenu\" id=\"side-menu\">

                        <li class=\"menu-title\">Navigation</li>

                        <li>
                            <a href=\"";
        // line 245
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\">
                                <i class=\"fe-airplay\"></i>
                                <span class=\"badge badge-success badge-pill float-right\"></span>
                                <span> Dashboard </span>
                            </a>

                        </li>

                        <li>
                            <a >
                                <i class=\"fe-sidebar\"></i>
                                <span>Gestion Utilisateurs </span>
                                <span class=\"menu-arrow\"></span>
                            </a>
                            <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                <li><a href=\"";
        // line 260
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_list");
        echo "\">  <i class=\"fe-list\"></i>&ensp;Liste des utilisateurs</a></li>
                               
                                <li>   <a href=\"javascript: void(0);\">
                                <i class=\"fe-briefcase\"></i>&ensp;
                                <span> les partenariats </span>
                              
                            </a></li>
                               
                            </ul>
                        </li>

                        <li>
                            <a >
                                <i class=\"fe-map\"></i>
                                <span>Gestion Destinations </span>
                                <span class=\"menu-arrow\"></span>
                            </a>
                            <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                <li><a href=\"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_destination");
        echo "\"><i class=\"fe-plus\"></i>&ensp;ajouter</a></li>
                             
                                <li><a href=\"";
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_destination");
        echo "\"><i class=\"fe-list\"></i>&ensp;voir liste</a></li>
                             
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\">
                                <i class=\"fe-plus-square\"></i>
                                <span> Gestion Produits  </span>
                                <span class=\"menu-arrow\"></span>
                            </a>
                            <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                 <li><a href=\"";
        // line 292
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_Categorie");
        echo "\"><i class=\"fe-plus\"></i>&ensp;ajouter  une catégorie</a></li>
                             
                                <li><a href=\"";
        // line 294
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_product");
        echo "\"><i class=\"fe-plus\"></i>&ensp;ajouter  un produit</a></li>
                            
                                <li><a href=\"";
        // line 296
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_product");
        echo "\"><i class=\"fe-list\"></i>&ensp;liste des produits</a></li>
                             
                            </ul>
                        </li>

                       

                        <li>
                            <a href=\"javascript: void(0);\">
                                <i class=\"fe-calendar\"></i>
                                <span> Gestion Événements </span>
                                <span class=\"menu-arrow\"></span>
                            </a>
                         <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                <li><a href=\"";
        // line 310
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_evenement");
        echo "\"><i class=\"fe-plus\"></i>&ensp;Ajouter</a></li>
                             
                                <li><a href=\"";
        // line 312
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_evenement");
        echo "\"><i class=\"fe-list\"></i>&ensp;Voir liste</a></li>
                             
                                <li><a href=\"";
        // line 314
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_participant");
        echo "\"><i class=\"fe-list\"></i>&ensp; Participants</a></li>
                             
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\">
                                <i class=\"fe-box\"></i>
                                <span>Gestion Sensibilisation </span>
                                
                            </a>

                             <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                <li><a href=\"";
        // line 327
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_sensibilisation");
        echo "\"><i class=\"fe-plus\"></i>&ensp;sensibilisation</a></li>
                              <li><a href=\"";
        // line 328
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_quiz");
        echo "\"><i class=\"fe-plus\"></i>&ensp;ajouter  un quiz</a></li>
                             
                                <li><a href=\"";
        // line 330
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_sensibilisation");
        echo "\"><i class=\"fe-list\"></i>&ensp;sensibilisation</a></li>
                             
                               
                                <li><a href=\"";
        // line 333
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_quiz");
        echo "\"><i class=\"fe-list\"></i>&ensp;liste  des quizzes</a></li>
                             
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\">
                                <i class=\"fe-layers\"></i>
                                <span> Gestion Avis </span>
                                <span class=\"menu-arrow\"></span>
                            </a>
                             <ul class=\"nav-second-level\" aria-expanded=\"false\">

                                <li><a href=\"";
        // line 346
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_list_avis");
        echo "\"><i class=\"fe-list\"></i>&ensp;liste des avis</a></li>
                             
                            </ul>
                        </li>

                      

                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class=\"clearfix\"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
      ";
        // line 364
        $this->displayBlock('body', $context, $blocks);
        // line 365
        echo "   
 </div>
<div class=\"right-bar\">
    <div class=\"rightbar-title\">
        <a href=\"javascript:void(0);\" class=\"right-bar-toggle float-right\">
            <i class=\"mdi mdi-close\"></i>
        </a>
        <h4 class=\"font-16 m-0 text-white\">Theme Customizer</h4>
    </div>
    <div class=\"slimscroll-menu\">

        <div class=\"p-3\">
            <div class=\"alert alert-warning\" role=\"alert\">
                <strong>Customize </strong> the overall color scheme, layout, etc.
            </div>
            <div class=\"mb-2\">
                <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/images/layouts/light.png"), "html", null, true);
        echo "\" class=\"img-fluid img-thumbnail\" alt=\"\">
            </div>
            <div class=\"custom-control custom-switch mb-3\">
                <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"light-mode-switch\" checked />
                <label class=\"custom-control-label\" for=\"light-mode-switch\">Light Mode</label>
            </div>

         

        </div>
    </div> 
</div>

<div class=\"rightbar-overlay\"></div>



 ";
        // line 398
        $this->displayBlock('javascripts', $context, $blocks);
        // line 513
        echo "</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 364
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

    // line 398
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 399
        echo "
       <!-- rating js -->
        <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/ratings/jquery.raty-fa.js"), "html", null, true);
        echo "\"></script>

        <!-- Init js -->
        <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/js/pages/rating.init.js"), "html", null, true);
        echo "\"></script>
  <!-- plugin js -->
        <script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Calendar init -->
        <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/js/pages/calendar.init.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/sweetalert2/sweetalert2.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/js/pages/sweet-alerts.init.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/js/vendor.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/d3/d3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/c3/c3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/js/pages/dashboard.init.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/js/app.min.js"), "html", null, true);
        echo "\"></script>

<!-- Init js-->
    <script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/js/pages/form-advanced.init.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/switchery/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/jquery-mockjax/jquery.mockjax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/autocomplete/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/bootstrap-filestyle2/bootstrap-filestyle.min.js"), "html", null, true);
        echo "\"></script>



     <!-- Required datatable js -->
    <script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Buttons examples -->
    <script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/datatables/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/jszip/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/pdfmake/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/pdfmake/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/datatables/buttons.colVis.js"), "html", null, true);
        echo "\"></script>

    <!-- Responsive examples -->
    <script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/libs/datatables/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables init -->
    <script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/js/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>
<!-- Include SweetAlert library -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>

<script>
    function confirmDelete(deleteUrl) {
    Swal.fire({
        title: 'Êtes-vous sûr(e) ?',
        text: \"Vous ne pourrez pas revenir en arrière !\",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, supprimer !'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = deleteUrl;
        } else {
            console.log(\"Suppression annulée\");
        }
    });
}
</script>
";
        // line 480
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 480, $this->source); })()), "user", [], "any", false, false, false, 480) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 480, $this->source); })()), "user", [], "any", false, false, false, 480), "isVerified", [], "any", false, false, false, 480))) {
            // line 481
            echo "    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Compte non encore vérifié',
            html: 'Veuillez vérifier votre boîte de réception pour finaliser la vérification.<br> <a href=\"";
            // line 485
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resend_verification");
            echo "\" class=\"btn btn-success\">cliquez ici pour le renvoyer</a>',
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
        });
    </script>
";
        }
        // line 492
        echo "<script>
    // Initialisez Raty pour chaque section d'avis avec des options spécifiques si nécessaire
    \$('#avisVoyages').raty({
        readOnly: true, // ou false si vous souhaitez permettre la notation
        score: function() {
            return \$(this).attr('data-score');
        }
    });

    // Initialisez d'autres sections d'avis ici
    \$('#avisDestinations').raty({
        readOnly: true,
        score: function() {
            return \$(this).attr('data-score');
        }
    });

    // Ajoutez d'autres initialisations Raty ici pour chaque section d'avis

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
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
        return array (  803 => 492,  793 => 485,  787 => 481,  785 => 480,  758 => 456,  752 => 453,  748 => 452,  742 => 449,  738 => 448,  734 => 447,  730 => 446,  726 => 445,  722 => 444,  718 => 443,  714 => 442,  709 => 440,  705 => 439,  697 => 434,  693 => 433,  689 => 432,  685 => 431,  681 => 430,  677 => 429,  673 => 428,  669 => 427,  665 => 426,  661 => 425,  655 => 422,  651 => 421,  647 => 420,  643 => 419,  639 => 418,  635 => 417,  630 => 415,  625 => 413,  620 => 411,  614 => 408,  610 => 407,  606 => 406,  601 => 404,  595 => 401,  591 => 399,  581 => 398,  563 => 364,  550 => 513,  548 => 398,  528 => 381,  510 => 365,  508 => 364,  487 => 346,  471 => 333,  465 => 330,  460 => 328,  456 => 327,  440 => 314,  435 => 312,  430 => 310,  413 => 296,  408 => 294,  403 => 292,  388 => 280,  383 => 278,  362 => 260,  344 => 245,  299 => 203,  291 => 198,  286 => 196,  271 => 183,  233 => 148,  228 => 146,  224 => 144,  222 => 143,  104 => 28,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  77 => 19,  73 => 18,  69 => 17,  63 => 14,  57 => 11,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <title>Dashboard | Eco Tourism</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <meta content=\"ecotourism\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!-- App favicon -->
    <link rel=\"shortcut icon\" href=\"{{ asset('Backend/assets/images/favicon.ico') }}\">

    <!-- C3 Chart css -->
    <link href=\"{{ asset('Backend/assets/libs/c3/c3.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- App css -->
    <link href=\"{{ asset('Backend/assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" id=\"bootstrap-stylesheet\" />
    <link href=\"{{ asset('Backend/assets/css/icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('Backend/assets/css/app.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" id=\"app-stylesheet\" />
     
    <link href=\"{{ asset('Backend/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('Backend/assets/libs/switchery/switchery.min.css\" rel=\"stylesheet') }}\" type=\"text/css\" />
    <link href=\"{{ asset('Backend/assets/libs/select2/select2.min.css\" rel=\"stylesheet') }}\" type=\"text/css\" />
    <link href=\"{{ asset('Backend/assets/libs/bootstrap-select/bootstrap-select.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('Backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- Plugin css -->
    <link href=\"{{ asset('Backend/assets/libs/fullcalendar/fullcalendar.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

    <style>
        .logo-box,
        .left-side-menu {
            color: #333333 !important;
            background-color: #606060 !important;
        }
    </style>
</head>
<body>
<div id=\"wrapper\">
        <div class=\"navbar-custom\">
            <ul class=\"list-unstyled topnav-menu float-right mb-0\">

               

                <li class=\"dropdown notification-list\">
                    <a class=\"nav-link dropdown-toggle  waves-effect waves-light\" data-toggle=\"dropdown\" href=\"#\"
                        role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
                        <i class=\"dripicons-bell noti-icon\"></i>
                        <span class=\"badge badge-pink rounded-circle noti-icon-badge\">4</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-lg\">

                        <div class=\"dropdown-header noti-title\">
                            <h5 class=\"text-overflow m-0\"><span class=\"float-right\">
                                    <span class=\"badge badge-danger float-right\">5</span>
                                </span>Notification</h5>
                        </div>

                        <div class=\"slimscroll noti-scroll\">

                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon bg-success\"><i class=\"mdi mdi-comment-account-outline\"></i>
                                </div>
                                <p class=\"notify-details\">Robert S. Taylor commented on Admin<small class=\"text-muted\">1
                                        min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon bg-primary\">
                                    <i class=\"mdi mdi-settings-outline\"></i>
                                </div>
                                <p class=\"notify-details\">New settings
                                    <small class=\"text-muted\">There are new settings available</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon bg-warning\">
                                    <i class=\"mdi mdi-bell-outline\"></i>
                                </div>
                                <p class=\"notify-details\">Updates
                                    <small class=\"text-muted\">There are 2 new updates available</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon\">
                                    <img src=\"assets/images/users/avatar-4.jpg\" class=\"img-fluid rounded-circle\"
                                        alt=\"\" />
                                </div>
                                <p class=\"notify-details\">Karen Robinson</p>
                                <p class=\"text-muted mb-0 user-msg\">
                                    <small>Wow ! this admin looks good and awesome design</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon bg-danger\">
                                    <i class=\"mdi mdi-account-plus\"></i>
                                </div>
                                <p class=\"notify-details\">New user
                                    <small class=\"text-muted\">You have 10 unread messages</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon bg-info\">
                                    <i class=\"mdi mdi-comment-account-outline\"></i>
                                </div>
                                <p class=\"notify-details\">Caleb Flakelar commented on Admin
                                    <small class=\"text-muted\">4 days ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                <div class=\"notify-icon bg-secondary\">
                                    <i class=\"mdi mdi-heart\"></i>
                                </div>
                                <p class=\"notify-details\">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class=\"text-muted\">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href=\"javascript:void(0);\"
                            class=\"dropdown-item text-center text-primary notify-item notify-all\">
                            View all
                            <i class=\"fi-arrow-right\"></i>
                        </a>

                    </div>
                </li>

                <li class=\"dropdown notification-list\">
                {% if app.user is defined and app.user.images is defined and app.user.images|length > 0 %}
                    <a class=\"nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light\" data-toggle=\"dropdown\"
                        href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
                        <img src=\"{{ asset('assets/uploads/profils/mini/300x300-' ~ app.user.images[0].nom ) }}\" alt=\"user-image\" class=\"rounded-circle\">
                        <span class=\"pro-user-name ml-1\">
                            {{app.user.nom}} <i class=\"mdi mdi-chevron-down\"></i>
                        </span>
                    </a>
             <div class=\"dropdown-menu dropdown-menu-right profile-dropdown \">
                   
                

                    <!-- item-->
                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                        <i class=\"fe-user\"></i>
                        <span>Profil</span>
                    </a>

                    <!-- item-->
                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                        <i class=\"fe-settings\"></i>
                        <span>Paramètres</span>
                    </a>

                    <!-- item-->
                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                        <i class=\"fe-lock\"></i>
                        <span>Verrouillage écran</span>
                    </a>

                    <div class=\"dropdown-divider\"></div>

                    <!-- item-->
                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                        <i class=\"fe-log-out\"></i>
                        <span>Déconnexion</span>
                    </a>
                </div>

                    {% endif %}
                </li>

                <li class=\"dropdown notification-list\">
                    <a href=\"javascript:void(0);\" class=\"nav-link right-bar-toggle waves-effect waves-light\">
                        <i class=\"fe-settings noti-icon\"></i>
                    </a>
                </li>


            </ul>

            <!-- LOGO -->
            <div class=\"logo-box\">
                <a href=\"{{ path('app_admin') }}\" class=\"logo text-center\">
                    <span class=\"logo-lg\">
                        <img src=\"{{ asset('Backend/assets/images/logo-light.png')}}\" alt=\"\" height=\"60\">
                      
                    </span>
                    <span class=\"logo-sm\">
                      
                        <img src=\"{{ asset('Backend/assets/images/logo-sm.png')}}\" alt=\"\" height=\"60\">
                    </span>
                </a>
            </div>

            <ul class=\"list-unstyled topnav-menu topnav-menu-left m-0\">
                <li>
                    <button class=\"button-menu-mobile waves-effect waves-light\">
                        <i class=\"fe-menu\"></i>
                    </button>
                </li>

                <li class=\"d-none d-sm-block\">
                    <form class=\"app-search\">
                        <div class=\"app-search-box\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn\" type=\"submit\">
                                        <i class=\"fe-search\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>

            </ul>
        </div>
 
        <div class=\"left-side-menu\">

            <div class=\"slimscroll-menu\">

                <!--- Sidemenu -->
                <div id=\"sidebar-menu\">

                    <ul class=\"metismenu\" id=\"side-menu\">

                        <li class=\"menu-title\">Navigation</li>

                        <li>
                            <a href=\"{{ path('app_admin') }}\">
                                <i class=\"fe-airplay\"></i>
                                <span class=\"badge badge-success badge-pill float-right\"></span>
                                <span> Dashboard </span>
                            </a>

                        </li>

                        <li>
                            <a >
                                <i class=\"fe-sidebar\"></i>
                                <span>Gestion Utilisateurs </span>
                                <span class=\"menu-arrow\"></span>
                            </a>
                            <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                <li><a href=\"{{ path('app_admin_list') }}\">  <i class=\"fe-list\"></i>&ensp;Liste des utilisateurs</a></li>
                               
                                <li>   <a href=\"javascript: void(0);\">
                                <i class=\"fe-briefcase\"></i>&ensp;
                                <span> les partenariats </span>
                              
                            </a></li>
                               
                            </ul>
                        </li>

                        <li>
                            <a >
                                <i class=\"fe-map\"></i>
                                <span>Gestion Destinations </span>
                                <span class=\"menu-arrow\"></span>
                            </a>
                            <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                <li><a href=\"{{path('app_add_destination')}}\"><i class=\"fe-plus\"></i>&ensp;ajouter</a></li>
                             
                                <li><a href=\"{{path('app_list_destination')}}\"><i class=\"fe-list\"></i>&ensp;voir liste</a></li>
                             
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\">
                                <i class=\"fe-plus-square\"></i>
                                <span> Gestion Produits  </span>
                                <span class=\"menu-arrow\"></span>
                            </a>
                            <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                 <li><a href=\"{{ path('app_add_Categorie') }}\"><i class=\"fe-plus\"></i>&ensp;ajouter  une catégorie</a></li>
                             
                                <li><a href=\"{{ path('app_add_product') }}\"><i class=\"fe-plus\"></i>&ensp;ajouter  un produit</a></li>
                            
                                <li><a href=\"{{ path('app_list_product') }}\"><i class=\"fe-list\"></i>&ensp;liste des produits</a></li>
                             
                            </ul>
                        </li>

                       

                        <li>
                            <a href=\"javascript: void(0);\">
                                <i class=\"fe-calendar\"></i>
                                <span> Gestion Événements </span>
                                <span class=\"menu-arrow\"></span>
                            </a>
                         <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                <li><a href=\"{{path('app_add_evenement')}}\"><i class=\"fe-plus\"></i>&ensp;Ajouter</a></li>
                             
                                <li><a href=\"{{path('app_list_evenement')}}\"><i class=\"fe-list\"></i>&ensp;Voir liste</a></li>
                             
                                <li><a href=\"{{path('afficher_participant')}}\"><i class=\"fe-list\"></i>&ensp; Participants</a></li>
                             
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\">
                                <i class=\"fe-box\"></i>
                                <span>Gestion Sensibilisation </span>
                                
                            </a>

                             <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                <li><a href=\"{{path('app_add_sensibilisation')}}\"><i class=\"fe-plus\"></i>&ensp;sensibilisation</a></li>
                              <li><a href=\"{{path('app_add_quiz')}}\"><i class=\"fe-plus\"></i>&ensp;ajouter  un quiz</a></li>
                             
                                <li><a href=\"{{path('app_list_sensibilisation')}}\"><i class=\"fe-list\"></i>&ensp;sensibilisation</a></li>
                             
                               
                                <li><a href=\"{{path('app_list_quiz')}}\"><i class=\"fe-list\"></i>&ensp;liste  des quizzes</a></li>
                             
                            </ul>
                        </li>

                        <li>
                            <a href=\"javascript: void(0);\">
                                <i class=\"fe-layers\"></i>
                                <span> Gestion Avis </span>
                                <span class=\"menu-arrow\"></span>
                            </a>
                             <ul class=\"nav-second-level\" aria-expanded=\"false\">

                                <li><a href=\"{{path('app_admin_list_avis')}}\"><i class=\"fe-list\"></i>&ensp;liste des avis</a></li>
                             
                            </ul>
                        </li>

                      

                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class=\"clearfix\"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
      {% block body %}{% endblock %}
   
 </div>
<div class=\"right-bar\">
    <div class=\"rightbar-title\">
        <a href=\"javascript:void(0);\" class=\"right-bar-toggle float-right\">
            <i class=\"mdi mdi-close\"></i>
        </a>
        <h4 class=\"font-16 m-0 text-white\">Theme Customizer</h4>
    </div>
    <div class=\"slimscroll-menu\">

        <div class=\"p-3\">
            <div class=\"alert alert-warning\" role=\"alert\">
                <strong>Customize </strong> the overall color scheme, layout, etc.
            </div>
            <div class=\"mb-2\">
                <img src=\"{{ asset('Backend/assets/images/layouts/light.png') }}\" class=\"img-fluid img-thumbnail\" alt=\"\">
            </div>
            <div class=\"custom-control custom-switch mb-3\">
                <input type=\"checkbox\" class=\"custom-control-input theme-choice\" id=\"light-mode-switch\" checked />
                <label class=\"custom-control-label\" for=\"light-mode-switch\">Light Mode</label>
            </div>

         

        </div>
    </div> 
</div>

<div class=\"rightbar-overlay\"></div>



 {% block javascripts %}

       <!-- rating js -->
        <script src=\"{{ asset('Backend/assets/libs/ratings/jquery.raty-fa.js')}}\"></script>

        <!-- Init js -->
        <script src=\"{{ asset('Backend/assets/js/pages/rating.init.js')}}\"></script>
  <!-- plugin js -->
        <script src=\"{{ asset('Backend/assets/libs/moment/moment.min.js')}}\"></script>
        <script src=\"{{ asset('Backend/assets/libs/jquery-ui/jquery-ui.min.js')}}\"></script>
        <script src=\"{{ asset('Backend/assets/libs/fullcalendar/fullcalendar.min.js')}}\"></script>

        <!-- Calendar init -->
        <script src=\"{{ asset('Backend/assets/js/pages/calendar.init.js')}}\"></script>

<script src=\"{{ asset('Backend/assets/libs/sweetalert2/sweetalert2.min.js')}}\"></script>

        <script src=\"{{ asset('Backend/assets/js/pages/sweet-alerts.init.js')}}\"></script>

<script src=\"{{ asset('Backend/assets/js/vendor.min.js') }}\"></script>
<script src=\"{{ asset('Backend/assets/libs/d3/d3.min.js') }}\"></script>
<script src=\"{{ asset('Backend/assets/libs/c3/c3.min.js') }}\"></script>
<script src=\"{{ asset('Backend/assets/libs/echarts/echarts.min.js') }}\"></script>
<script src=\"{{ asset('Backend/assets/js/pages/dashboard.init.js') }}\"></script>
<script src=\"{{ asset('Backend/assets/js/app.min.js') }}\"></script>

<!-- Init js-->
    <script src=\"{{ asset('Backend/assets/js/pages/form-advanced.init.js') }}\"></script>
       <script src=\"{{ asset('Backend/assets/libs/switchery/switchery.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/select2/select2.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/jquery-mockjax/jquery.mockjax.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/autocomplete/jquery.autocomplete.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/bootstrap-select/bootstrap-select.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/bootstrap-filestyle2/bootstrap-filestyle.min.js') }}\"></script>



     <!-- Required datatable js -->
    <script src=\"{{ asset('Backend/assets/libs/datatables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/datatables/dataTables.bootstrap4.min.js') }}\"></script>
    <!-- Buttons examples -->
    <script src=\"{{ asset('Backend/assets/libs/datatables/dataTables.buttons.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/datatables/buttons.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/jszip/jszip.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/pdfmake/pdfmake.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/pdfmake/vfs_fonts.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/datatables/buttons.html5.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/datatables/buttons.print.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/datatables/buttons.colVis.js') }}\"></script>

    <!-- Responsive examples -->
    <script src=\"{{ asset('Backend/assets/libs/datatables/dataTables.responsive.min.js') }}\"></script>
    <script src=\"{{ asset('Backend/assets/libs/datatables/responsive.bootstrap4.min.js') }}\"></script>

    <!-- Datatables init -->
    <script src=\"{{ asset('Backend/assets/js/pages/datatables.init.js') }}\"></script>
<!-- Include SweetAlert library -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>

<script>
    function confirmDelete(deleteUrl) {
    Swal.fire({
        title: 'Êtes-vous sûr(e) ?',
        text: \"Vous ne pourrez pas revenir en arrière !\",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, supprimer !'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = deleteUrl;
        } else {
            console.log(\"Suppression annulée\");
        }
    });
}
</script>
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
    // Initialisez Raty pour chaque section d'avis avec des options spécifiques si nécessaire
    \$('#avisVoyages').raty({
        readOnly: true, // ou false si vous souhaitez permettre la notation
        score: function() {
            return \$(this).attr('data-score');
        }
    });

    // Initialisez d'autres sections d'avis ici
    \$('#avisDestinations').raty({
        readOnly: true,
        score: function() {
            return \$(this).attr('data-score');
        }
    });

    // Ajoutez d'autres initialisations Raty ici pour chaque section d'avis

</script>
{% endblock %}
</body>
</html>

", "baseAdmin.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\baseAdmin.html.twig");
    }
}
