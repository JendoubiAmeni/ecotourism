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

/* admin/listeParticipants.html.twig */
class __TwigTemplate_00c595cef1d1e251015a4c61dd3613a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listeParticipants.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listeParticipants.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/listeParticipants.html.twig", 1);
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

        echo "liste des participants ";
        
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
                                <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Evénements</a></li>
                                <li class=\"breadcrumb-item active\">Liste</li>
                            </ol>
                        </div>
                        <h4 class=\"page-title\">Liste des événements</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

        <div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card-box\">
            <h4 class=\"header-title\">Liste des Événements</h4>

            <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>N° </th>
                            <th>Nom complet</th>
                            <th>Nom de l'événement</th>
                        
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      ";
        // line 48
        if ((array_key_exists("Participant", $context) && (twig_length_filter($this->env, (isset($context["Participant"]) || array_key_exists("Participant", $context) ? $context["Participant"] : (function () { throw new RuntimeError('Variable "Participant" does not exist.', 48, $this->source); })())) > 0))) {
            // line 49
            echo "                       ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Participant"]) || array_key_exists("Participant", $context) ? $context["Participant"] : (function () { throw new RuntimeError('Variable "Participant" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 50
                echo "                        <tr>
                            <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                            <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fullname", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                            <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "evenements", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                       
                          ";
                // line 56
                echo "                            <td>
                               
                                <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_adh", ["id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Supprimer</a>
                            </td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                     ";
        }
        // line 63
        echo "                    </tbody>
                </table>
            </div>
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
        return "admin/listeParticipants.html.twig";
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
        return array (  172 => 63,  169 => 62,  159 => 58,  155 => 56,  150 => 53,  146 => 52,  142 => 51,  139 => 50,  134 => 49,  132 => 48,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}liste des participants {% endblock %}

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
                                <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Evénements</a></li>
                                <li class=\"breadcrumb-item active\">Liste</li>
                            </ol>
                        </div>
                        <h4 class=\"page-title\">Liste des événements</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

        <div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card-box\">
            <h4 class=\"header-title\">Liste des Événements</h4>

            <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>N° </th>
                            <th>Nom complet</th>
                            <th>Nom de l'événement</th>
                        
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      {% if Participant is defined and Participant | length > 0 %}
                       {% for row in Participant %}
                        <tr>
                            <td>{{row.id}}</td>
                            <td>{{row.fullname}}</td>
                            <td>{{row.evenements}}</td>
                       
                          {# admin_update_evenement #}
                            <td>
                               
                                <a href=\"{{ path('delete_adh',{'id':row.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
                            </td>
                        </tr>
                      {% endfor %}
                     {% endif %}
                    </tbody>
                </table>
            </div>
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

   {% endblock %}", "admin/listeParticipants.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\listeParticipants.html.twig");
    }
}
