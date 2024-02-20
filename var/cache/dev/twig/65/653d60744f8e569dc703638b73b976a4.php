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

/* admin/listeQuiz.html.twig */
class __TwigTemplate_337a451e793f77f1d98043f036e9551a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listeQuiz.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listeQuiz.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/listeQuiz.html.twig", 1);
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

        echo "Liste des Quiz";
        
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
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"page-title-box\">
                            <div class=\"page-title-right\">
                                <ol class=\"breadcrumb m-0\">
                                    <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Admin</a></li>
                                    <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Quiz</a></li>
                                    <li class=\"breadcrumb-item active\">Liste</li>
                                </ol>
                            </div>
                            <h4 class=\"page-title\">Liste des Quiz</h4>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card-box table-responsive\">
                            <h4 class=\"header-title\">Informations sur les Quiz</h4>
                            <p class=\"sub-header\">
                                Affichage des informations sur les quiz éducatifs.
                            </p>

                            <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>Question</th>
                                        <th>Options</th>
                                        <th>Réponse Correcte</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- Remplacez les données suivantes par les informations réelles de vos quiz -->
                                    <tr>
                                        <td>Question 1</td>
                                        <td>Option 1, Option 2, Option 3</td>
                                        <td>Réponse 1</td>
                                        <td>
                                            <button class=\"btn btn-warning\">Modifier</button>
                                            <button class=\"btn btn-danger\">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Question 2</td>
                                        <td>Option 1, Option 2, Option 3, Option 4</td>
                                        <td>Réponse 2</td>
                                        <td>
                                            <button class=\"btn btn-warning\">Modifier</button>
                                            <button class=\"btn btn-danger\">Supprimer</button>
                                        </td>
                                    </tr>
                                    <!-- Ajoutez plus de lignes selon vos besoins -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        return "admin/listeQuiz.html.twig";
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

{% block title %}Liste des Quiz{% endblock %}

{% block body %}
    <div class=\"content-page\">
        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"page-title-box\">
                            <div class=\"page-title-right\">
                                <ol class=\"breadcrumb m-0\">
                                    <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Admin</a></li>
                                    <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Quiz</a></li>
                                    <li class=\"breadcrumb-item active\">Liste</li>
                                </ol>
                            </div>
                            <h4 class=\"page-title\">Liste des Quiz</h4>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card-box table-responsive\">
                            <h4 class=\"header-title\">Informations sur les Quiz</h4>
                            <p class=\"sub-header\">
                                Affichage des informations sur les quiz éducatifs.
                            </p>

                            <table id=\"datatable-buttons\" class=\"table table-striped table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>Question</th>
                                        <th>Options</th>
                                        <th>Réponse Correcte</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- Remplacez les données suivantes par les informations réelles de vos quiz -->
                                    <tr>
                                        <td>Question 1</td>
                                        <td>Option 1, Option 2, Option 3</td>
                                        <td>Réponse 1</td>
                                        <td>
                                            <button class=\"btn btn-warning\">Modifier</button>
                                            <button class=\"btn btn-danger\">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Question 2</td>
                                        <td>Option 1, Option 2, Option 3, Option 4</td>
                                        <td>Réponse 2</td>
                                        <td>
                                            <button class=\"btn btn-warning\">Modifier</button>
                                            <button class=\"btn btn-danger\">Supprimer</button>
                                        </td>
                                    </tr>
                                    <!-- Ajoutez plus de lignes selon vos besoins -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/listeQuiz.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\listeQuiz.html.twig");
    }
}
