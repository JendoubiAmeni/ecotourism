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

/* admin/listeAvis.html.twig */
class __TwigTemplate_9ea12978f6e1b569a73d0d7f71bbc2af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listeAvis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listeAvis.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/listeAvis.html.twig", 1);
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

        echo "Liste des Avis ";
        
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
        echo "   <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

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
                                    <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Avis</a></li>
                                    <li class=\"breadcrumb-item active\">Liste</li>
                                </ol>
                            </div>
                            <h4 class=\"page-title\">Liste des avis</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card-box table-responsive\">
                            <h4 class=\"header-title\">Informations sur les Avis</h4>
                            <p class=\"sub-header\">Affichage des informations sur les avis saisis.</p>

                            <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Utilisateur</th>
                                        <th>Voyage</th>
                                        <th>Produit</th>
                                        <th>Événement</th>
                                        <th>Guide de Voyage</th>
                                        <th>Note</th>
                                        <th>Commentaire</th>
                                        <th>Actions</th>
                                      
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- Remplacez les données suivantes par les informations réelles de vos avis -->
                                    <tr>
                                        <td>1</td>
                                        <td>Utilisateur 1</td>
                                        <td>Voyage 1</td>
                                        <td>Produit A</td>
                                        <td>Événement 1</td>
                                        <td>Guide A</td>
                                        <td>4.5</td>
                                        <td>Très bon produit!</td>
                                        <td>
                                            <button class=\"btn btn-info\">Restreindre</button>
                                           
                                        </td>
                                      
                                        <!-- Ajoutez plus de colonnes selon vos besoins -->
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Utilisateur 2</td>
                                        <td>Voyage 2</td>
                                        <td>Produit B</td>
                                        <td>Événement 2</td>
                                        <td>Guide B</td>
                                        <td> 2.7</td>
                                        <td>Bonne expérience!</td>
                                        <td>
                                              <button class=\"btn btn-info\">Restreindre</button>
                                            
                                        </td>
                                     
                                       
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- end row -->
            </div> <!-- end container-fluid -->
        </div> <!-- end content -->
    </div>
    <!-- End Page Content here -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/listeAvis.html.twig";
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

{% block title %}Liste des Avis {% endblock %}

{% block body %}
   <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

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
                                    <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Avis</a></li>
                                    <li class=\"breadcrumb-item active\">Liste</li>
                                </ol>
                            </div>
                            <h4 class=\"page-title\">Liste des avis</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card-box table-responsive\">
                            <h4 class=\"header-title\">Informations sur les Avis</h4>
                            <p class=\"sub-header\">Affichage des informations sur les avis saisis.</p>

                            <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Utilisateur</th>
                                        <th>Voyage</th>
                                        <th>Produit</th>
                                        <th>Événement</th>
                                        <th>Guide de Voyage</th>
                                        <th>Note</th>
                                        <th>Commentaire</th>
                                        <th>Actions</th>
                                      
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- Remplacez les données suivantes par les informations réelles de vos avis -->
                                    <tr>
                                        <td>1</td>
                                        <td>Utilisateur 1</td>
                                        <td>Voyage 1</td>
                                        <td>Produit A</td>
                                        <td>Événement 1</td>
                                        <td>Guide A</td>
                                        <td>4.5</td>
                                        <td>Très bon produit!</td>
                                        <td>
                                            <button class=\"btn btn-info\">Restreindre</button>
                                           
                                        </td>
                                      
                                        <!-- Ajoutez plus de colonnes selon vos besoins -->
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Utilisateur 2</td>
                                        <td>Voyage 2</td>
                                        <td>Produit B</td>
                                        <td>Événement 2</td>
                                        <td>Guide B</td>
                                        <td> 2.7</td>
                                        <td>Bonne expérience!</td>
                                        <td>
                                              <button class=\"btn btn-info\">Restreindre</button>
                                            
                                        </td>
                                     
                                       
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- end row -->
            </div> <!-- end container-fluid -->
        </div> <!-- end content -->
    </div>
    <!-- End Page Content here -->

{% endblock %}
", "admin/listeAvis.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\listeAvis.html.twig");
    }
}
