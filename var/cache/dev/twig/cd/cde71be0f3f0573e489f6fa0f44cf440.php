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

/* admin/index.html.twig */
class __TwigTemplate_de3eaeee1494fe44262bd6bed627fe89 extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/index.html.twig", 1);
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

        echo "Accueil Admin !";
        
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
        echo " <style>
    #sidebar-menu li  .active {
        color: #fff;
        background-color: none !important;
    }
</style>   
    
        <div class=\"content-page\">
            <div class=\"content\">

                <!-- Start Content-->
                <div class=\"container-fluid\">

                    <!-- start page title -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"page-title-box\">
                                <div class=\"page-title-right\">
                                    <ol class=\"breadcrumb m-0\">
                                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Admin</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Dashboard</a></li>
                                    
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class=\"row\">
                            <div class=\"col-xl-3 col-sm-6\">
                                <div class=\"card-box widget-box-two widget-two-custom\">
                                    <div class=\"media\">
                                        <div class=\"avatar-lg rounded-circle bg-primary widget-two-icon align-self-center\">
                                            <i class=\"mdi mdi-earth avatar-title font-30 text-white\"></i> <!-- Icône Voyage -->
                                        </div>
                                        <div class=\"wigdet-two-content media-body\">
                                            <p class=\"m-0 text-uppercase font-weight-medium text-truncate\" title=\"Statistiques\">Total des Voyages</p>
                                            <h3 class=\"font-weight-medium my-2\"> <span data-plugin=\"counterup\">65</span></h3>
                                            <p class=\"m-0\">Fev - Avr 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class=\"col-xl-3 col-sm-6\">
                                <div class=\"card-box widget-box-two widget-two-custom \">
                                    <div class=\"media\">
                                        <div class=\"avatar-lg rounded-circle bg-primary widget-two-icon align-self-center\">
                                            <i class=\"mdi mdi-account-multiple avatar-title font-30 text-white\"></i> <!-- Icône Utilisateurs -->
                                        </div>
                                        <div class=\"wigdet-two-content media-body\">
                                            <p class=\"m-0 text-uppercase font-weight-medium text-truncate\" title=\"Statistiques\">Total des Utilisateurs</p>
                                            <h3 class=\"font-weight-medium my-2\"> <span data-plugin=\"counterup\">221</span></h3>
                                            <p class=\"m-0\">Fev - Avr 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class=\"col-xl-3 col-sm-6\">
                                <div class=\"card-box widget-box-two widget-two-custom \">
                                    <div class=\"media\">
                                        <div class=\"avatar-lg rounded-circle bg-primary widget-two-icon align-self-center\">
                                            <i class=\"mdi mdi-shopping avatar-title font-30 text-white\"></i> <!-- Icône Commandes -->
                                        </div>
                                        <div class=\"wigdet-two-content media-body\">
                                            <p class=\"m-0 text-uppercase font-weight-medium text-truncate\" title=\"Statistiques\">Nombre de Commandes</p>
                                            <h3 class=\"font-weight-medium my-2\"><span data-plugin=\"counterup\">54</span></h3>
                                            <p class=\"m-0\">Fev - Avr 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class=\"col-xl-3 col-sm-6\">
                                <div class=\"card-box widget-box-two widget-two-custom \">
                                    <div class=\"media\">
                                        <div class=\"avatar-lg rounded-circle bg-primary widget-two-icon align-self-center\">
                                            <i class=\"mdi mdi-calendar-check avatar-title font-30 text-white\"></i> <!-- Icône Événements -->
                                        </div>
                                        <div class=\"wigdet-two-content media-body\">
                                            <p class=\"m-0 text-uppercase font-weight-medium text-truncate\" title=\"Statistiques\">Taux de Conversion</p>
                                            <h3 class=\"font-weight-medium my-2\"><span data-plugin=\"counterup\">47.19</span>%</h3>
                                            <p class=\"m-0\">Fev - Avr 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-4\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title mb-4\">Comparaison des Revenus</h4>

                                <div class=\"text-center\">
                                    <h5 class=\"font-weight-normal text-muted\">Montant à payer</h5>
                                    <h3 class=\"mb-3\"><i class=\"mdi mdi-arrow-up-bold-hexagon-outline text-success\"></i>
                                        25 643 <small>DT</small></h3>
                                </div>

                                <div class=\"chart-container\" dir=\"ltr\">
                                    <div class=\"\" style=\"height:280px\" id=\"platform_type_dates_donut\"></div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xl-4\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title mb-4\">Aperçu des Visiteurs</h4>

                                <div class=\"text-center\">
                                    <h5 class=\"font-weight-normal text-muted\">Montant à payer</h5>
                                    <h3 class=\"mb-3\"><i class=\"mdi mdi-arrow-down-bold-hexagon-outline text-danger\"></i>
                                        5 623 <small>DT</small></h3>
                                </div>

                                <div class=\"chart-container\" dir=\"ltr\">
                                    <div class=\"\" style=\"height:280px\" id=\"user_type_bar\"></div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xl-4\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title mb-4\">Réussite des Objectifs</h4>

                                <div class=\"text-center\">
                                    <h5 class=\"font-weight-normal text-muted\">Montant à payer</h5>
                                    <h3 class=\"mb-3\"><i class=\"mdi mdi-arrow-up-bold-hexagon-outline text-success\"></i>
                                        12 548 <small>DT</small></h3>
                                </div>

                                <div class=\"chart-container\" dir=\"ltr\">
                                    <div class=\"chart has-fixed-height\" style=\"height:280px\" id=\"page_views_today\">
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>

                    <!-- end row -->


                  <div class=\"row\">
                        <div class=\"col-xl-6 col-lg-12\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title\">Candidats Récents</h4>
                                <p class=\"sub-header\">
                                    Votre texte impressionnant va ici.
                                </p>

                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover m-0 table-actions-bar\">

                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class=\"btn-group dropdown\">
                                                        <button type=\"button\"
                                                            class=\"btn btn-light btn-xs dropdown-toggle waves-effect waves-light\"
                                                            data-toggle=\"dropdown\" aria-expanded=\"false\"> <i
                                                                class=\"mdi mdi-chevron-down\"></i></button>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"dropdown-item\" href=\"#\">Lien de la liste déroulante</a>
                                                            <a class=\"dropdown-item\" href=\"#\">Lien de la liste déroulante</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Nom</th>
                                                <th>Emplacement</th>
                                                <th>Horaires</th>
                                                <th>Salaire</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src=\"assets/images/users/avatar-2.jpg\" alt=\"contact-img\"
                                                        title=\"contact-img\" class=\"rounded-circle avatar-sm\" />
                                                </td>

                                                <td>
                                                    <h5 class=\"m-0 font-weight-medium\">Tomaslau</h5>
                                                </td>

                                                <td>
                                                    <i class=\"mdi mdi-map-marker text-primary\"></i> New York
                                                </td>

                                                <td>
                                                    <i class=\"mdi mdi-clock-outline text-success\"></i> Temps plein
                                                </td>

                                                <td>
                                                    <i class=\"mdi mdi-currency-DT text-warning\"></i> 3 265
                                                </td>

                                                <td>
                                                    <a href=\"#\" class=\"table-action-btn\"><i
                                                            class=\"mdi mdi-pencil\"></i></a>
                                                    <a href=\"#\" class=\"table-action-btn\"><i
                                                            class=\"mdi mdi-close\"></i></a>
                                                </td>
                                            </tr>

                                            <!-- Ajoutez d'autres lignes ici -->

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-3 col-lg-6\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title mb-4\">Total des Visiteurs Uniques</h4>

                                <div class=\"widget-chart text-center\" dir=\"ltr\">

                                    <div id=\"donut-chart\" style=\"height: 280px;\"></div>

                                    <div class=\"row text-center mt-4\">
                                        <div class=\"col-6\">
                                            <h3 data-plugin=\"counterup\">1 507</h3>
                                            <p class=\"text-muted mb-0\">Visiteurs Hommes</p>
                                        </div>
                                        <div class=\"col-6\">
                                            <h3 data-plugin=\"counterup\">854</h3>
                                            <p class=\"text-muted mb-1\">Visiteurs Femmes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xl-3 col-lg-6\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title mb-4\">Nombre de Transactions</h4>

                                <div class=\"widget-chart text-center\" dir=\"ltr\">

                                    <div id=\"pie-chart\" style=\"height: 280px;\"></div>

                                    <div class=\"row text-center mt-4\">
                                        <div class=\"col-6\">
                                            <h3 data-plugin=\"counterup\">2 854</h3>
                                            <p class=\"text-muted mb-0\">Paiement Effectué</p>
                                        </div>
                                        <div class=\"col-6\">
                                            <h3 data-plugin=\"counterup\">22</h3>
                                            <p class=\"text-muted mb-1\">Paiement Dû</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--- end row -->

                </div> <!-- end container-fluid -->

            </div> <!-- end content -->



            <!-- Footer Start -->
            <footer class=\"footer\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            2017 - 2019 &copy; Adminox theme by <a href=\"#\">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

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
        return "admin/index.html.twig";
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
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Accueil Admin !{% endblock %}

{% block body %}
 <style>
    #sidebar-menu li  .active {
        color: #fff;
        background-color: none !important;
    }
</style>   
    
        <div class=\"content-page\">
            <div class=\"content\">

                <!-- Start Content-->
                <div class=\"container-fluid\">

                    <!-- start page title -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"page-title-box\">
                                <div class=\"page-title-right\">
                                    <ol class=\"breadcrumb m-0\">
                                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Admin</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Dashboard</a></li>
                                    
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class=\"row\">
                            <div class=\"col-xl-3 col-sm-6\">
                                <div class=\"card-box widget-box-two widget-two-custom\">
                                    <div class=\"media\">
                                        <div class=\"avatar-lg rounded-circle bg-primary widget-two-icon align-self-center\">
                                            <i class=\"mdi mdi-earth avatar-title font-30 text-white\"></i> <!-- Icône Voyage -->
                                        </div>
                                        <div class=\"wigdet-two-content media-body\">
                                            <p class=\"m-0 text-uppercase font-weight-medium text-truncate\" title=\"Statistiques\">Total des Voyages</p>
                                            <h3 class=\"font-weight-medium my-2\"> <span data-plugin=\"counterup\">65</span></h3>
                                            <p class=\"m-0\">Fev - Avr 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class=\"col-xl-3 col-sm-6\">
                                <div class=\"card-box widget-box-two widget-two-custom \">
                                    <div class=\"media\">
                                        <div class=\"avatar-lg rounded-circle bg-primary widget-two-icon align-self-center\">
                                            <i class=\"mdi mdi-account-multiple avatar-title font-30 text-white\"></i> <!-- Icône Utilisateurs -->
                                        </div>
                                        <div class=\"wigdet-two-content media-body\">
                                            <p class=\"m-0 text-uppercase font-weight-medium text-truncate\" title=\"Statistiques\">Total des Utilisateurs</p>
                                            <h3 class=\"font-weight-medium my-2\"> <span data-plugin=\"counterup\">221</span></h3>
                                            <p class=\"m-0\">Fev - Avr 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class=\"col-xl-3 col-sm-6\">
                                <div class=\"card-box widget-box-two widget-two-custom \">
                                    <div class=\"media\">
                                        <div class=\"avatar-lg rounded-circle bg-primary widget-two-icon align-self-center\">
                                            <i class=\"mdi mdi-shopping avatar-title font-30 text-white\"></i> <!-- Icône Commandes -->
                                        </div>
                                        <div class=\"wigdet-two-content media-body\">
                                            <p class=\"m-0 text-uppercase font-weight-medium text-truncate\" title=\"Statistiques\">Nombre de Commandes</p>
                                            <h3 class=\"font-weight-medium my-2\"><span data-plugin=\"counterup\">54</span></h3>
                                            <p class=\"m-0\">Fev - Avr 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class=\"col-xl-3 col-sm-6\">
                                <div class=\"card-box widget-box-two widget-two-custom \">
                                    <div class=\"media\">
                                        <div class=\"avatar-lg rounded-circle bg-primary widget-two-icon align-self-center\">
                                            <i class=\"mdi mdi-calendar-check avatar-title font-30 text-white\"></i> <!-- Icône Événements -->
                                        </div>
                                        <div class=\"wigdet-two-content media-body\">
                                            <p class=\"m-0 text-uppercase font-weight-medium text-truncate\" title=\"Statistiques\">Taux de Conversion</p>
                                            <h3 class=\"font-weight-medium my-2\"><span data-plugin=\"counterup\">47.19</span>%</h3>
                                            <p class=\"m-0\">Fev - Avr 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-4\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title mb-4\">Comparaison des Revenus</h4>

                                <div class=\"text-center\">
                                    <h5 class=\"font-weight-normal text-muted\">Montant à payer</h5>
                                    <h3 class=\"mb-3\"><i class=\"mdi mdi-arrow-up-bold-hexagon-outline text-success\"></i>
                                        25 643 <small>DT</small></h3>
                                </div>

                                <div class=\"chart-container\" dir=\"ltr\">
                                    <div class=\"\" style=\"height:280px\" id=\"platform_type_dates_donut\"></div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xl-4\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title mb-4\">Aperçu des Visiteurs</h4>

                                <div class=\"text-center\">
                                    <h5 class=\"font-weight-normal text-muted\">Montant à payer</h5>
                                    <h3 class=\"mb-3\"><i class=\"mdi mdi-arrow-down-bold-hexagon-outline text-danger\"></i>
                                        5 623 <small>DT</small></h3>
                                </div>

                                <div class=\"chart-container\" dir=\"ltr\">
                                    <div class=\"\" style=\"height:280px\" id=\"user_type_bar\"></div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xl-4\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title mb-4\">Réussite des Objectifs</h4>

                                <div class=\"text-center\">
                                    <h5 class=\"font-weight-normal text-muted\">Montant à payer</h5>
                                    <h3 class=\"mb-3\"><i class=\"mdi mdi-arrow-up-bold-hexagon-outline text-success\"></i>
                                        12 548 <small>DT</small></h3>
                                </div>

                                <div class=\"chart-container\" dir=\"ltr\">
                                    <div class=\"chart has-fixed-height\" style=\"height:280px\" id=\"page_views_today\">
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>

                    <!-- end row -->


                  <div class=\"row\">
                        <div class=\"col-xl-6 col-lg-12\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title\">Candidats Récents</h4>
                                <p class=\"sub-header\">
                                    Votre texte impressionnant va ici.
                                </p>

                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover m-0 table-actions-bar\">

                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class=\"btn-group dropdown\">
                                                        <button type=\"button\"
                                                            class=\"btn btn-light btn-xs dropdown-toggle waves-effect waves-light\"
                                                            data-toggle=\"dropdown\" aria-expanded=\"false\"> <i
                                                                class=\"mdi mdi-chevron-down\"></i></button>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"dropdown-item\" href=\"#\">Lien de la liste déroulante</a>
                                                            <a class=\"dropdown-item\" href=\"#\">Lien de la liste déroulante</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Nom</th>
                                                <th>Emplacement</th>
                                                <th>Horaires</th>
                                                <th>Salaire</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src=\"assets/images/users/avatar-2.jpg\" alt=\"contact-img\"
                                                        title=\"contact-img\" class=\"rounded-circle avatar-sm\" />
                                                </td>

                                                <td>
                                                    <h5 class=\"m-0 font-weight-medium\">Tomaslau</h5>
                                                </td>

                                                <td>
                                                    <i class=\"mdi mdi-map-marker text-primary\"></i> New York
                                                </td>

                                                <td>
                                                    <i class=\"mdi mdi-clock-outline text-success\"></i> Temps plein
                                                </td>

                                                <td>
                                                    <i class=\"mdi mdi-currency-DT text-warning\"></i> 3 265
                                                </td>

                                                <td>
                                                    <a href=\"#\" class=\"table-action-btn\"><i
                                                            class=\"mdi mdi-pencil\"></i></a>
                                                    <a href=\"#\" class=\"table-action-btn\"><i
                                                            class=\"mdi mdi-close\"></i></a>
                                                </td>
                                            </tr>

                                            <!-- Ajoutez d'autres lignes ici -->

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-3 col-lg-6\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title mb-4\">Total des Visiteurs Uniques</h4>

                                <div class=\"widget-chart text-center\" dir=\"ltr\">

                                    <div id=\"donut-chart\" style=\"height: 280px;\"></div>

                                    <div class=\"row text-center mt-4\">
                                        <div class=\"col-6\">
                                            <h3 data-plugin=\"counterup\">1 507</h3>
                                            <p class=\"text-muted mb-0\">Visiteurs Hommes</p>
                                        </div>
                                        <div class=\"col-6\">
                                            <h3 data-plugin=\"counterup\">854</h3>
                                            <p class=\"text-muted mb-1\">Visiteurs Femmes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xl-3 col-lg-6\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title mb-4\">Nombre de Transactions</h4>

                                <div class=\"widget-chart text-center\" dir=\"ltr\">

                                    <div id=\"pie-chart\" style=\"height: 280px;\"></div>

                                    <div class=\"row text-center mt-4\">
                                        <div class=\"col-6\">
                                            <h3 data-plugin=\"counterup\">2 854</h3>
                                            <p class=\"text-muted mb-0\">Paiement Effectué</p>
                                        </div>
                                        <div class=\"col-6\">
                                            <h3 data-plugin=\"counterup\">22</h3>
                                            <p class=\"text-muted mb-1\">Paiement Dû</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--- end row -->

                </div> <!-- end container-fluid -->

            </div> <!-- end content -->



            <!-- Footer Start -->
            <footer class=\"footer\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            2017 - 2019 &copy; Adminox theme by <a href=\"#\">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

      

   
   
{% endblock %}
", "admin/index.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\index.html.twig");
    }
}
