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

/* admin/ajouterDestination.html.twig */
class __TwigTemplate_0e14917a72019f2c2e703150c4cc5606 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterDestination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterDestination.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/ajouterDestination.html.twig", 1);
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

        echo "Ajouter une destination | Admin ";
        
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
        echo " <div class=\"content-page\">
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
                                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Destination</a></li>
                                        <li class=\"breadcrumb-item active\">Ajouter</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Ajouter une destination</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title\">Formulaire de Destinations de Voyage Écologique</h4>
                                <p class=\"sub-header\">
                                    Le formulaire ci-dessous vous permet de saisir les informations sur les destinations
                                    de voyage
                                    écologiques.
                                </p>

                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div>
                                            <form class=\"form-horizontal\">
                                                <div class=\"form-group row\">
                                                    <label class=\"col-md-2 col-form-label\" for=\"nom-destination\">Nom de
                                                        la
                                                        Destination</label>
                                                    <div class=\"col-md-10\">
                                                        <input type=\"text\" id=\"nom-destination\" class=\"form-control\"
                                                            placeholder=\"Entrez le nom de la destination...\">
                                                    </div>
                                                </div>

                                                <div class=\"form-group row\">
                                                    <label class=\"col-md-2 col-form-label\"
                                                        for=\"description-destination\">Description</label>
                                                    <div class=\"col-md-10\">
                                                        <textarea class=\"form-control\" rows=\"5\"
                                                            id=\"description-destination\"
                                                            placeholder=\"Entrez une description de la destination\"></textarea>
                                                    </div>
                                                </div>

                                                <div class=\"form-group row\">
                                                    <label class=\"col-md-2 col-form-label\" for=\"image-destination\">Image
                                                        de la
                                                        Destination</label>
                                                    <div class=\"col-md-10\">
                                                        <input type=\"file\" id=\"image-destination\" class=\"form-control\">
                                                    </div>
                                                </div>

                                                <div class=\"form-group row\">
                                                    <label class=\"col-md-2 col-form-label\" for=\"date-depart\">Date de
                                                        Départ</label>
                                                    <div class=\"col-md-10\">
                                                        <input class=\"form-control\" id=\"date-depart\" type=\"date\"
                                                            name=\"date-depart\">
                                                    </div>
                                                </div>

                                                <div class=\"form-group row\">
                                                    <label class=\"col-md-2 col-form-label\" for=\"duree-sejour\">Durée du
                                                        Séjour</label>
                                                    <div class=\"col-md-10\">
                                                        <input class=\"form-control\" id=\"duree-sejour\" type=\"number\"
                                                            name=\"duree-sejour\">
                                                    </div>
                                                </div>

                                                <div class=\"form-group row\">
                                                    <label class=\"col-md-2 col-form-label\" for=\"type-voyage\">Type de
                                                        Voyage</label>
                                                    <div class=\"col-md-10\">
                                                        <select class=\"form-control\" id=\"type-voyage\">
                                                            <option>Voyage Écologique</option>
                                                            <option>Plage</option>
                                                            <option>Aventure</option>
                                                            <option>Ville</option>
                                                            <option>Culture</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Ajoutez d'autres champs de formulaire écologique au besoin -->

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                            <div class=\"form-group text-right mb-0\">
                                            <button class=\"btn btn-primary waves-effect waves-light mr-1\" type=\"submit\">
                                                Ajouter
                                            </button>
                                            <button type=\"reset\" class=\"btn btn-secondary waves-effect waves-light\">
                                                Annuler
                                            </button>
                                        </div>
                            </div> <!-- end card-box -->
                        </div><!-- end col -->
                    </div>

                    <!-- end row -->




                 

                </div> <!-- end container-fluid -->

            </div> <!-- end content -->
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
        return "admin/ajouterDestination.html.twig";
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

{% block title %}Ajouter une destination | Admin {% endblock %}

{% block body %}
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
                                        <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Destination</a></li>
                                        <li class=\"breadcrumb-item active\">Ajouter</li>
                                    </ol>
                                </div>
                                <h4 class=\"page-title\">Ajouter une destination</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card-box\">
                                <h4 class=\"header-title\">Formulaire de Destinations de Voyage Écologique</h4>
                                <p class=\"sub-header\">
                                    Le formulaire ci-dessous vous permet de saisir les informations sur les destinations
                                    de voyage
                                    écologiques.
                                </p>

                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div>
                                            <form class=\"form-horizontal\">
                                                <div class=\"form-group row\">
                                                    <label class=\"col-md-2 col-form-label\" for=\"nom-destination\">Nom de
                                                        la
                                                        Destination</label>
                                                    <div class=\"col-md-10\">
                                                        <input type=\"text\" id=\"nom-destination\" class=\"form-control\"
                                                            placeholder=\"Entrez le nom de la destination...\">
                                                    </div>
                                                </div>

                                                <div class=\"form-group row\">
                                                    <label class=\"col-md-2 col-form-label\"
                                                        for=\"description-destination\">Description</label>
                                                    <div class=\"col-md-10\">
                                                        <textarea class=\"form-control\" rows=\"5\"
                                                            id=\"description-destination\"
                                                            placeholder=\"Entrez une description de la destination\"></textarea>
                                                    </div>
                                                </div>

                                                <div class=\"form-group row\">
                                                    <label class=\"col-md-2 col-form-label\" for=\"image-destination\">Image
                                                        de la
                                                        Destination</label>
                                                    <div class=\"col-md-10\">
                                                        <input type=\"file\" id=\"image-destination\" class=\"form-control\">
                                                    </div>
                                                </div>

                                                <div class=\"form-group row\">
                                                    <label class=\"col-md-2 col-form-label\" for=\"date-depart\">Date de
                                                        Départ</label>
                                                    <div class=\"col-md-10\">
                                                        <input class=\"form-control\" id=\"date-depart\" type=\"date\"
                                                            name=\"date-depart\">
                                                    </div>
                                                </div>

                                                <div class=\"form-group row\">
                                                    <label class=\"col-md-2 col-form-label\" for=\"duree-sejour\">Durée du
                                                        Séjour</label>
                                                    <div class=\"col-md-10\">
                                                        <input class=\"form-control\" id=\"duree-sejour\" type=\"number\"
                                                            name=\"duree-sejour\">
                                                    </div>
                                                </div>

                                                <div class=\"form-group row\">
                                                    <label class=\"col-md-2 col-form-label\" for=\"type-voyage\">Type de
                                                        Voyage</label>
                                                    <div class=\"col-md-10\">
                                                        <select class=\"form-control\" id=\"type-voyage\">
                                                            <option>Voyage Écologique</option>
                                                            <option>Plage</option>
                                                            <option>Aventure</option>
                                                            <option>Ville</option>
                                                            <option>Culture</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Ajoutez d'autres champs de formulaire écologique au besoin -->

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                            <div class=\"form-group text-right mb-0\">
                                            <button class=\"btn btn-primary waves-effect waves-light mr-1\" type=\"submit\">
                                                Ajouter
                                            </button>
                                            <button type=\"reset\" class=\"btn btn-secondary waves-effect waves-light\">
                                                Annuler
                                            </button>
                                        </div>
                            </div> <!-- end card-box -->
                        </div><!-- end col -->
                    </div>

                    <!-- end row -->




                 

                </div> <!-- end container-fluid -->

            </div> <!-- end content -->
</div> 
{% endblock %}", "admin/ajouterDestination.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\ajouterDestination.html.twig");
    }
}
