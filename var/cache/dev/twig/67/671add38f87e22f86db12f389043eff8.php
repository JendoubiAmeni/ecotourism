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

/* admin/listeEvenement.html.twig */
class __TwigTemplate_04d9304263e3a8b15de99333b3445c3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listeEvenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listeEvenement.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/listeEvenement.html.twig", 1);
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
                            <th>Nom</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Lieu</th>
                            <th>Durée</th>
                            
                            <th>prixA</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      ";
        // line 52
        if ((array_key_exists("Evenement", $context) && (twig_length_filter($this->env, (isset($context["Evenement"]) || array_key_exists("Evenement", $context) ? $context["Evenement"] : (function () { throw new RuntimeError('Variable "Evenement" does not exist.', 52, $this->source); })())) > 0))) {
            // line 53
            echo "                       ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Evenement"]) || array_key_exists("Evenement", $context) ? $context["Evenement"] : (function () { throw new RuntimeError('Variable "Evenement" does not exist.', 53, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 54
                echo "                        <tr>
                            <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", [], "any", false, false, false, 56), "d-m-Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "lieu", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "duree", [], "any", false, false, false, 59), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "prixA", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                            <td><img src=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, false, 61))), "html", null, true);
                echo "\"   width=\"50\" height=\"50\" /></td>
                          ";
                // line 63
                echo "                          <td>
                                <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_update_evenement", ["id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">
                                    <i class=\"fas fa-edit\"></i> <!-- Font Awesome edit icon -->
                                </a>
                                <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_evenement", ["id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">
                                    <i class=\"fas fa-trash-alt\"></i> <!-- Font Awesome trash icon -->
                                </a>
                            </td>

                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                     ";
        }
        // line 75
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
        return "admin/listeEvenement.html.twig";
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
        return array (  199 => 75,  196 => 74,  183 => 67,  177 => 64,  174 => 63,  170 => 61,  166 => 60,  162 => 59,  158 => 58,  154 => 57,  150 => 56,  146 => 55,  143 => 54,  138 => 53,  136 => 52,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                            <th>Nom</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Lieu</th>
                            <th>Durée</th>
                            
                            <th>prixA</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      {% if Evenement is defined and Evenement | length > 0 %}
                       {% for row in Evenement %}
                        <tr>
                            <td>{{row.name}}</td>
                            <td>{{row.date | date('d-m-Y')}}</td>
                            <td>{{row.description}}</td>
                            <td>{{row.lieu}}</td>
                            <td>{{row.duree}}</td>
                            <td>{{row.prixA}}</td>
                            <td><img src=\"{{ asset ('uploads/images/' ~ row.image) }}\"   width=\"50\" height=\"50\" /></td>
                          {# admin_update_evenement #}
                          <td>
                                <a href=\"{{ path('admin_update_evenement',{'id':row.id}) }}\" class=\"btn btn-warning\">
                                    <i class=\"fas fa-edit\"></i> <!-- Font Awesome edit icon -->
                                </a>
                                <a href=\"{{ path('admin_delete_evenement',{'id':row.id}) }}\" class=\"btn btn-danger\">
                                    <i class=\"fas fa-trash-alt\"></i> <!-- Font Awesome trash icon -->
                                </a>
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

   {% endblock %}", "admin/listeEvenement.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\listeEvenement.html.twig");
    }
}
