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

/* admin/ajouterSensibilisation.html.twig */
class __TwigTemplate_237a0be7ade9c93dec3c2376595e4f3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterSensibilisation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterSensibilisation.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/ajouterSensibilisation.html.twig", 1);
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

        echo "Ajouter Sensibilisation/Education | Admin ";
        
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
        echo "    <div class=\"content-page\">
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
                                    <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Sensibilisation/Education</a></li>
                                    <li class=\"breadcrumb-item active\">Ajouter</li>
                                </ol>
                            </div>
                            <h4 class=\"page-title\">Ajouter Sensibilisation/Education</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card-box\">
                            <h4 class=\"header-title\">Formulaire de Sensibilisation/Education</h4>
                            <p class=\"sub-header\">
                                Le formulaire ci-dessous vous permet d'ajouter des informations sur la sensibilisation et
                                l'éducation.
                            </p>

                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <form method=\"post\" class=\"form-horizontal\">
                                        <!-- Ajoutez les champs spécifiques pour la sensibilisation et l'éducation -->
                                        <div class=\"form-group row\">
                                            <label class=\"col-md-2 col-form-label\" for=\"titre\">Titre</label>
                                            <div class=\"col-md-10\">
                                                <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" placeholder=\"Entrez le titre...\">
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">
                                            <label class=\"col-md-2 col-form-label\" for=\"description\">Description</label>
                                            <div class=\"col-md-10\">
                                                <textarea name=\"description\" id=\"description\" class=\"form-control\" rows=\"5\" placeholder=\"Entrez une description...\"></textarea>
                                            </div>
                                        </div>

                                        <!-- Ajoutez le champ de sélection pour les quizzes -->
                                        <div class=\"form-group row\">
                                            <label class=\"col-md-2 col-form-label\" for=\"quiz\">Quiz</label>
                                            <div class=\"col-md-10\">
                                                <select class=\"form-control\" id=\"quiz\" name=\"quiz\">
                                                    <option value=\"1\">Quiz 1</option>
                                                    <option value=\"2\">Quiz 2</option>
                                                    <!-- Ajoutez dynamiquement les options en fonction de la liste des quizzes -->
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Ajoutez d'autres champs au besoin -->

                                        <div class=\"form-group text-right mb-0\">
                                            <button class=\"btn btn-primary waves-effect waves-light mr-1\" type=\"submit\">
                                                Ajouter
                                            </button>
                                            <button type=\"reset\" class=\"btn btn-secondary waves-effect waves-light\">
                                                Annuler
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end row -->
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
        return "admin/ajouterSensibilisation.html.twig";
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

{% block title %}Ajouter Sensibilisation/Education | Admin {% endblock %}

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
                                    <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Sensibilisation/Education</a></li>
                                    <li class=\"breadcrumb-item active\">Ajouter</li>
                                </ol>
                            </div>
                            <h4 class=\"page-title\">Ajouter Sensibilisation/Education</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card-box\">
                            <h4 class=\"header-title\">Formulaire de Sensibilisation/Education</h4>
                            <p class=\"sub-header\">
                                Le formulaire ci-dessous vous permet d'ajouter des informations sur la sensibilisation et
                                l'éducation.
                            </p>

                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <form method=\"post\" class=\"form-horizontal\">
                                        <!-- Ajoutez les champs spécifiques pour la sensibilisation et l'éducation -->
                                        <div class=\"form-group row\">
                                            <label class=\"col-md-2 col-form-label\" for=\"titre\">Titre</label>
                                            <div class=\"col-md-10\">
                                                <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" placeholder=\"Entrez le titre...\">
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">
                                            <label class=\"col-md-2 col-form-label\" for=\"description\">Description</label>
                                            <div class=\"col-md-10\">
                                                <textarea name=\"description\" id=\"description\" class=\"form-control\" rows=\"5\" placeholder=\"Entrez une description...\"></textarea>
                                            </div>
                                        </div>

                                        <!-- Ajoutez le champ de sélection pour les quizzes -->
                                        <div class=\"form-group row\">
                                            <label class=\"col-md-2 col-form-label\" for=\"quiz\">Quiz</label>
                                            <div class=\"col-md-10\">
                                                <select class=\"form-control\" id=\"quiz\" name=\"quiz\">
                                                    <option value=\"1\">Quiz 1</option>
                                                    <option value=\"2\">Quiz 2</option>
                                                    <!-- Ajoutez dynamiquement les options en fonction de la liste des quizzes -->
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Ajoutez d'autres champs au besoin -->

                                        <div class=\"form-group text-right mb-0\">
                                            <button class=\"btn btn-primary waves-effect waves-light mr-1\" type=\"submit\">
                                                Ajouter
                                            </button>
                                            <button type=\"reset\" class=\"btn btn-secondary waves-effect waves-light\">
                                                Annuler
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end row -->
                        </div> <!-- end card-box -->
                    </div><!-- end col -->
                </div>

                <!-- end row -->
            </div> <!-- end container-fluid -->
        </div> <!-- end content -->
    </div>
{% endblock %}
", "admin/ajouterSensibilisation.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\ajouterSensibilisation.html.twig");
    }
}
