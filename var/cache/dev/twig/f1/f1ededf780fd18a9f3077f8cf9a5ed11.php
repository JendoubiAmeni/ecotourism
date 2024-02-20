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

/* admin/ajouterProduit.html.twig */
class __TwigTemplate_835a289f66d8499cbe8fa9faef27f077 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterProduit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterProduit.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/ajouterProduit.html.twig", 1);
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

        echo "Ajouter produit ";
        
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
        echo "       <!-- ============================================================== -->
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
                                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Formulaire</a></li>
                                        <li class=\"breadcrumb-item active\">Produits</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Formulaire d'ajout de produits</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"card-box\">
                               
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"demo-box\">
                                                <div class=\"form-group\">
                                                    <p>Désignation du produit</p>
                                                    <input type=\"text\" name=\"productName\" id=\"\"
                                                        class=\"form-control\">
                                                </div>
                                                <div class=\"form-group\">


                                                    <p>Catégorie</p>
                                                    <select class=\"form-control\" data-toggle=\"select2\">
                                                        <option>Selectionnez la catégorie</option>
                                                        <optgroup>
                                                            <option value=\"AK\">Alaska</option>
                                                            <option value=\"HI\">Hawaii</option>
                                                        </optgroup>

                                                    </select>
                                                </div>
                                                 <div class=\"form-group\">
                                                    <p>Quantité en stock</p>
                                                    <input type=\"number\" name=\"prix\" id=\"autocomplete-ajax\"
                                                        class=\"form-control\">
                                                </div>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-6\">
                                        <div class=\"demo-box mt-4 mt-lg-0\">
                                           
                                                <div class=\"form-group\">
                                                    <p>Prix unitaire</p>
                                                    <input type=\"number\" name=\"prix\" id=\"autocomplete-ajax\"
                                                        class=\"form-control\">
                                                </div>
                                                <div class=\"form-group\">
                                                    <div class=\"form-group mb-0\">
                                                        <p>Image du produit</p>
                                                        <input type=\"file\" class=\"filestyle\"
                                                            data-btnClass=\"btn-primary\">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                </div> <!-- end row -->


                                         <div class=\"form-group text-right mb-0\">
                                            <button class=\"btn btn-primary waves-effect waves-light mr-1\" type=\"submit\">
                                                Ajouter
                                            </button>
                                            <button type=\"reset\" class=\"btn btn-secondary waves-effect waves-light\">
                                                Annuler
                                            </button>
                                        </div>
                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
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
        return "admin/ajouterProduit.html.twig";
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

{% block title %}Ajouter produit {% endblock %}

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
                                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Formulaire</a></li>
                                        <li class=\"breadcrumb-item active\">Produits</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Formulaire d'ajout de produits</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"card-box\">
                               
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"demo-box\">
                                                <div class=\"form-group\">
                                                    <p>Désignation du produit</p>
                                                    <input type=\"text\" name=\"productName\" id=\"\"
                                                        class=\"form-control\">
                                                </div>
                                                <div class=\"form-group\">


                                                    <p>Catégorie</p>
                                                    <select class=\"form-control\" data-toggle=\"select2\">
                                                        <option>Selectionnez la catégorie</option>
                                                        <optgroup>
                                                            <option value=\"AK\">Alaska</option>
                                                            <option value=\"HI\">Hawaii</option>
                                                        </optgroup>

                                                    </select>
                                                </div>
                                                 <div class=\"form-group\">
                                                    <p>Quantité en stock</p>
                                                    <input type=\"number\" name=\"prix\" id=\"autocomplete-ajax\"
                                                        class=\"form-control\">
                                                </div>
                                        </div>
                                    </div>

                                    <div class=\"col-lg-6\">
                                        <div class=\"demo-box mt-4 mt-lg-0\">
                                           
                                                <div class=\"form-group\">
                                                    <p>Prix unitaire</p>
                                                    <input type=\"number\" name=\"prix\" id=\"autocomplete-ajax\"
                                                        class=\"form-control\">
                                                </div>
                                                <div class=\"form-group\">
                                                    <div class=\"form-group mb-0\">
                                                        <p>Image du produit</p>
                                                        <input type=\"file\" class=\"filestyle\"
                                                            data-btnClass=\"btn-primary\">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                </div> <!-- end row -->


                                         <div class=\"form-group text-right mb-0\">
                                            <button class=\"btn btn-primary waves-effect waves-light mr-1\" type=\"submit\">
                                                Ajouter
                                            </button>
                                            <button type=\"reset\" class=\"btn btn-secondary waves-effect waves-light\">
                                                Annuler
                                            </button>
                                        </div>
                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                                       
                </div> <!-- end container-fluid -->

            </div> <!-- end content -->



         

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
{% endblock %}", "admin/ajouterProduit.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\ajouterProduit.html.twig");
    }
}
