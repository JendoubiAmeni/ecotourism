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

/* admin/listeProduits.html.twig */
class __TwigTemplate_954e2de05b62db9d3fa6a9511ff76462 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listeProduits.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listeProduits.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/listeProduits.html.twig", 1);
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

        echo "liste des produits ";
        
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
        echo "           <!-- ============================================================== -->
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
                                <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Produits</a></li>
                                <li class=\"breadcrumb-item active\">Liste</li>
                            </ol>
                        </div>
                        <h4 class=\"page-title\">Liste des produits</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card-box table-responsive\">
                        <h4 class=\"header-title\">Informations sur les Produits</h4>
                        <p class=\"sub-header\">
                            Affichage des informations sur les produits disponibles.
                        </p>

                        <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                            <thead>
                                <tr>
                                    <th>Désignation du Produit</th>
                                    <th>Prix unitaire</th>
                                    <th>Catégorie</th>
                                    <th>Image du Produit</th>
                                    <th>Quantité en Stock</th>
                                    <th>Actions</th>
                                    <!-- Ajoutez plus d'en-têtes pour d'autres champs si nécessaire -->
                                </tr>
                            </thead>

                            <tbody>
                                <!-- Remplacez les données suivantes par les informations réelles de vos produits -->
                                <tr>
                                    <td>Produit 1</td>
                                    <td>19.99</td>
                                    <td>Catégorie 1</td>
                                    <td><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/images/produit1.png"), "html", null, true);
        echo "\" alt=\"Image Produit 1\" width=\"50\" height=\"50\"></td>
                                    <td>100</td>
                                    <td>
                                        <button class=\"btn btn-warning\">Modifier</button>
                                        <button class=\"btn btn-danger\">Supprimer</button>
                                    </td>
                                    <!-- Ajoutez plus de colonnes selon vos besoins -->
                                </tr>
                                <tr>
                                    <td>Produit 2</td>
                                    <td>29.99</td>
                                    <td>Catégorie 2</td>
                                    <td><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/images/produit2.png"), "html", null, true);
        echo "\" alt=\"Image Produit 2\" width=\"50\" height=\"50\"></td>
                                    <td>50</td>
                                    <td>
                                        <button class=\"btn btn-warning\">Modifier</button>
                                        <button class=\"btn btn-danger\">Supprimer</button>
                                    </td>
                                    <!-- Ajoutez plus de colonnes selon vos besoins -->
                                </tr>
                                <!-- Ajoutez plus de lignes selon vos besoins -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- end container-fluid -->
    </div> <!-- end content -->
</div>


            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/listeProduits.html.twig";
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
        return array (  157 => 70,  142 => 58,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}liste des produits {% endblock %}

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
                                <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Produits</a></li>
                                <li class=\"breadcrumb-item active\">Liste</li>
                            </ol>
                        </div>
                        <h4 class=\"page-title\">Liste des produits</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card-box table-responsive\">
                        <h4 class=\"header-title\">Informations sur les Produits</h4>
                        <p class=\"sub-header\">
                            Affichage des informations sur les produits disponibles.
                        </p>

                        <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                            <thead>
                                <tr>
                                    <th>Désignation du Produit</th>
                                    <th>Prix unitaire</th>
                                    <th>Catégorie</th>
                                    <th>Image du Produit</th>
                                    <th>Quantité en Stock</th>
                                    <th>Actions</th>
                                    <!-- Ajoutez plus d'en-têtes pour d'autres champs si nécessaire -->
                                </tr>
                            </thead>

                            <tbody>
                                <!-- Remplacez les données suivantes par les informations réelles de vos produits -->
                                <tr>
                                    <td>Produit 1</td>
                                    <td>19.99</td>
                                    <td>Catégorie 1</td>
                                    <td><img src=\"{{asset('Backend/assets/images/produit1.png')}}\" alt=\"Image Produit 1\" width=\"50\" height=\"50\"></td>
                                    <td>100</td>
                                    <td>
                                        <button class=\"btn btn-warning\">Modifier</button>
                                        <button class=\"btn btn-danger\">Supprimer</button>
                                    </td>
                                    <!-- Ajoutez plus de colonnes selon vos besoins -->
                                </tr>
                                <tr>
                                    <td>Produit 2</td>
                                    <td>29.99</td>
                                    <td>Catégorie 2</td>
                                    <td><img src=\"{{asset('Backend/assets/images/produit2.png')}}\" alt=\"Image Produit 2\" width=\"50\" height=\"50\"></td>
                                    <td>50</td>
                                    <td>
                                        <button class=\"btn btn-warning\">Modifier</button>
                                        <button class=\"btn btn-danger\">Supprimer</button>
                                    </td>
                                    <!-- Ajoutez plus de colonnes selon vos besoins -->
                                </tr>
                                <!-- Ajoutez plus de lignes selon vos besoins -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- end container-fluid -->
    </div> <!-- end content -->
</div>


            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

   {% endblock %}", "admin/listeProduits.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\listeProduits.html.twig");
    }
}
