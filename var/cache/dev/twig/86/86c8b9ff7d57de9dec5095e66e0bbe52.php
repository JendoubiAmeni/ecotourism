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

/* admin/ajouterEvenement.html.twig */
class __TwigTemplate_7f13760618675f1e5a463da5d0718e18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterEvenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterEvenement.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/ajouterEvenement.html.twig", 1);
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

        echo "Ajouter un Événement | Admin ";
        
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
        echo "<div class=\"content-page\">
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
                                <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Événement</a></li>
                                <li class=\"breadcrumb-item active\">Ajouter</li>
                            </ol>
                        </div>
                        <h4 class=\"page-title\">Ajouter un Événement</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card-box\">
                        <h4 class=\"header-title\">Formulaire d'Ajout d'Événement</h4>
                        <p class=\"sub-header\">
                            Remplissez les informations pour ajouter un nouvel événement.
                        </p>
                     ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    
                          <div class=\"eventForm-group\">
                                <label for=\"nomEvenement\">Nom de l'Événement</label>
                                  ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le nom de l'événement"]]);
        echo "
                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 39, $this->source); })()), 'errors');
        echo "
                            </div>
                         <div class=\"form-group\">
                             <label for=\"dateEvenement\">Date de l'Événement</label>
                                  ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 43, $this->source); })()), "date", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez la durée"]]);
        echo "
                                   ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 44, $this->source); })()), 'errors');
        echo "
                            </div>
                         <div class=\"form-group\">
                                <label for=\"dateEvenement\">Durée</label>
                                  ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 48, $this->source); })()), "duree", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Durée (en minutes)"]]);
        echo "
                                  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 49, $this->source); })()), 'errors');
        echo "
                            </div>
                         <div class=\"form-group\">
                                <label for=\"dateEvenement\">Prix</label>
                                  ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 53, $this->source); })()), "prixA", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le prix"]]);
        echo "
                                 ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 54, $this->source); })()), 'errors');
        echo "
                            </div>
                         <div class=\"form-group\">
                                <label for=\"descriptionEvenement\">Description de l'Événement</label>
                                  ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 58, $this->source); })()), "description", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description de l'Événement"]]);
        echo "
                                     ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 59, $this->source); })()), 'errors');
        echo "
                            </div>
                         <div class=\"form-group\">
                                <label for=\"lieuEvenement\">Lieu de l'Événement</label>
                                  ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 63, $this->source); })()), "lieu", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Lieu de l'Événement"]]);
        echo "
                                     ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 64, $this->source); })()), 'errors');
        echo "
                            </div>
                         <div class=\"form-group\">
                         <div class=\"form-group\">
                                <label for=\"lieuEvenement\">Image</label><br>
                                  ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 69, $this->source); })()), "image", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "fileStyle btn-primary", "placeholder" => "Image"]]);
        echo "
                            
                            </div>
                         <div class=\"form-group\">
                           
                                  ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 74, $this->source); })()), "submit", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                            </div>
                            ";
        // line 85
        echo "                       ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 85, $this->source); })()), 'form_end');
        echo "
                      

                    
                    </div>
                </div>
            </div>
           
            
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
        return "admin/ajouterEvenement.html.twig";
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
        return array (  205 => 85,  200 => 74,  192 => 69,  184 => 64,  180 => 63,  173 => 59,  169 => 58,  162 => 54,  158 => 53,  151 => 49,  147 => 48,  140 => 44,  136 => 43,  129 => 39,  125 => 38,  118 => 34,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Ajouter un Événement | Admin {% endblock %}

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
                                <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Événement</a></li>
                                <li class=\"breadcrumb-item active\">Ajouter</li>
                            </ol>
                        </div>
                        <h4 class=\"page-title\">Ajouter un Événement</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card-box\">
                        <h4 class=\"header-title\">Formulaire d'Ajout d'Événement</h4>
                        <p class=\"sub-header\">
                            Remplissez les informations pour ajouter un nouvel événement.
                        </p>
                     {{form_start(eventForm,{'attr' :{'novalidate':'novalidate'}})}}
                    
                          <div class=\"eventForm-group\">
                                <label for=\"nomEvenement\">Nom de l'Événement</label>
                                  {{form_widget(eventForm.name,{'attr' :{'class':'form-control','placeholder':'Entrez le nom de l\\'événement'}})}}
                                {{form_errors(eventForm)}}
                            </div>
                         <div class=\"form-group\">
                             <label for=\"dateEvenement\">Date de l'Événement</label>
                                  {{form_widget(eventForm.date,{'attr' :{'class':'form-control','placeholder':'Entrez la durée'}})}}
                                   {{form_errors(eventForm)}}
                            </div>
                         <div class=\"form-group\">
                                <label for=\"dateEvenement\">Durée</label>
                                  {{form_widget(eventForm.duree,{'attr' :{'class':'form-control','placeholder':'Durée (en minutes)'}})}}
                                  {{form_errors(eventForm)}}
                            </div>
                         <div class=\"form-group\">
                                <label for=\"dateEvenement\">Prix</label>
                                  {{form_widget(eventForm.prixA,{'attr' :{'class':'form-control','placeholder':'Entrez le prix'}})}}
                                 {{form_errors(eventForm)}}
                            </div>
                         <div class=\"form-group\">
                                <label for=\"descriptionEvenement\">Description de l'Événement</label>
                                  {{form_widget(eventForm.description,{'attr' :{'class':'form-control','placeholder':'Description de l\\'Événement'}})}}
                                     {{form_errors(eventForm)}}
                            </div>
                         <div class=\"form-group\">
                                <label for=\"lieuEvenement\">Lieu de l'Événement</label>
                                  {{form_widget(eventForm.lieu,{'attr' :{'class':'form-control','placeholder':'Lieu de l\\'Événement'}})}}
                                     {{form_errors(eventForm)}}
                            </div>
                         <div class=\"form-group\">
                         <div class=\"form-group\">
                                <label for=\"lieuEvenement\">Image</label><br>
                                  {{form_widget(eventForm.image,{'attr' :{'class':'fileStyle btn-primary','placeholder':'Image'}})}}
                            
                            </div>
                         <div class=\"form-group\">
                           
                                  {{form_widget(eventForm.submit,{'attr' :{'class':'btn btn-primary'}})}}
                            </div>
                            {# <div class=\"form-group\">
                                <label for=\"typeEvenement\">Type de l'Événement</label>
                                <select class=\"form-control\" id=\"typeEvenement\" required>
                                    <option value=\"conference\">Conférence</option>
                                    <option value=\"concert\">Concert</option>
                                    <option value=\"exposition\">Exposition</option>
                                    <!-- Ajoutez d'autres types selon vos besoins -->
                                </select>
                            </div> #}
                       {{ form_end(eventForm) }}
                      

                    
                    </div>
                </div>
            </div>
           
            
        </div> <!-- end container-fluid -->
    </div> <!-- end content -->
</div>

{% endblock %}", "admin/ajouterEvenement.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\ajouterEvenement.html.twig");
    }
}
