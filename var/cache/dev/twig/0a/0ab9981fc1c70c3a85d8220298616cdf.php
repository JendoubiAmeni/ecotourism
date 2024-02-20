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

/* client/participants.html.twig */
class __TwigTemplate_97268928f2c6213f71cf66697a06e647 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/participants.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/participants.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/participants.html.twig", 1);
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

        echo "Participation | Écotourisme";
        
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
        echo "   ";
        if ((array_key_exists("singleEvent", $context) && (twig_length_filter($this->env, (isset($context["singleEvent"]) || array_key_exists("singleEvent", $context) ? $context["singleEvent"] : (function () { throw new RuntimeError('Variable "singleEvent" does not exist.', 6, $this->source); })())) > 0))) {
            // line 7
            echo "    
 
<style>
.sp-image{
\twidth: 400 px !important;
\theight: 300 px !important;
}
</style>
   <section class=\"parallax-window\" data-parallax=\"scroll\" style=\"\" data-natural-width=\"1400\" data-natural-height=\"50\">
    <div class=\"parallax-content-1 opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.4)\">
        <div class=\"animated fadeInDown\">
            <h1>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["singleEvent"]) || array_key_exists("singleEvent", $context) ? $context["singleEvent"] : (function () { throw new RuntimeError('Variable "singleEvent" does not exist.', 18, $this->source); })()), "Name", [], "any", false, false, false, 18), "html", null, true);
            echo "</h1>
          
        </div>
    </div>
</section>

\t<main>
\t\t<div id=\"position\">
\t\t\t<div class=\"container\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">Category</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>Page active</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Position -->

\t\t<div class=\"collapse\" id=\"collapseMap\">
\t\t\t<div id=\"map\" class=\"map\"></div>
\t\t</div>
\t\t<!-- End Map -->

\t\t<div class=\"container margin_60\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\" id=\"single_tour_desc\">
\t\t\t\t\t
\t\t\t\t
                  
\t\t\t\t\t<!-- Map button for tablets/mobiles -->
\t\t\t\t\t<div id=\"Img_carousel\" class=\"slider-pro\">
\t\t\t\t\t\t<div class=\"sp-slides\">

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["singleEvent"]) || array_key_exists("singleEvent", $context) ? $context["singleEvent"] : (function () { throw new RuntimeError('Variable "singleEvent" does not exist.', 54, $this->source); })()), "image", [], "any", false, false, false, 54))), "html", null, true);
            echo "\" width=\"300\" height=\"200\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sp-thumbnails\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["singleEvent"]) || array_key_exists("singleEvent", $context) ? $context["singleEvent"] : (function () { throw new RuntimeError('Variable "singleEvent" does not exist.', 60, $this->source); })()), "image", [], "any", false, false, false, 60))), "html", null, true);
            echo "\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<hr>

\t\t\t\t
\t\t\t\t\t<hr>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<h3>Description</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["singleEvent"]) || array_key_exists("singleEvent", $context) ? $context["singleEvent"] : (function () { throw new RuntimeError('Variable "singleEvent" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Lieu</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["singleEvent"]) || array_key_exists("singleEvent", $context) ? $context["singleEvent"] : (function () { throw new RuntimeError('Variable "singleEvent" does not exist.', 83, $this->source); })()), "lieu", [], "any", false, false, false, 83), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>Prix</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["singleEvent"]) || array_key_exists("singleEvent", $context) ? $context["singleEvent"] : (function () { throw new RuntimeError('Variable "singleEvent" does not exist.', 94, $this->source); })()), "prixA", [], "any", false, false, false, 94), "html", null, true);
            echo " DT</li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
                            \t<h4>Durée</h4>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["singleEvent"]) || array_key_exists("singleEvent", $context) ? $context["singleEvent"] : (function () { throw new RuntimeError('Variable "singleEvent" does not exist.', 104, $this->source); })()), "duree", [], "any", false, false, false, 104), "html", null, true);
            echo " Minutes</li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row  -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End col-md-9  -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row  -->

\t\t\t\t\t<hr>

\t\t\t\t\t

\t\t\t\t   
\t\t\t\t</div>
\t\t\t\t<!--End  single_tour_desc-->

\t\t\t\t<aside class=\"col-lg-4\">
\t\t\t\t 
\t\t\t\t\t<div class=\"box_style_1 expose\">
\t\t\t\t\t\t<h3 class=\"inner\">Inscription à l'événement</h3>
                        ";
            // line 128
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formParticipant"]) || array_key_exists("formParticipant", $context) ? $context["formParticipant"] : (function () { throw new RuntimeError('Variable "formParticipant" does not exist.', 128, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
                               
\t\t\t\t\t\t\t\t\t<label><i class=\"icon-user\"></i> Nom complet</label>
\t\t\t\t\t\t\t\t\t";
            // line 135
            echo "                                   ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formParticipant"]) || array_key_exists("formParticipant", $context) ? $context["formParticipant"] : (function () { throw new RuntimeError('Variable "formParticipant" does not exist.', 135, $this->source); })()), "fullname", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "votre nom complet"]]);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<br>
                            ";
            // line 141
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formParticipant"]) || array_key_exists("formParticipant", $context) ? $context["formParticipant"] : (function () { throw new RuntimeError('Variable "formParticipant" does not exist.', 141, $this->source); })()), "participater", [], "any", false, false, false, 141), 'widget', ["attr" => ["class" => "btn_full"]]);
            echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 143
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formParticipant"]) || array_key_exists("formParticipant", $context) ? $context["formParticipant"] : (function () { throw new RuntimeError('Variable "formParticipant" does not exist.', 143, $this->source); })()), 'form_end');
            echo "
\t\t\t\t\t</div>
                  
\t\t\t\t\t<!--/box_style_1 -->

\t\t\t\t\t<div class=\"box_style_4\">
\t\t\t\t\t\t<i class=\"icon_set_1_icon-90\"></i>
\t\t\t\t\t\t<h4><span>Book</span> by phone</h4>
\t\t\t\t\t\t<a href=\"tel://004542344599\" class=\"phone\">+216 423 445 99</a>
\t\t\t\t\t\t<small>Monday to Friday 9.00am - 7.30pm</small>
\t\t\t\t\t</div>

\t\t\t\t</aside>
\t\t\t</div>
\t\t\t<!--End row -->
\t\t</div>
\t\t<!--End container -->
        
        <div id=\"overlay\"></div>
\t\t<!-- Mask on input focus -->
    
\t</main>

    ";
        }
        // line 167
        echo "\t<!-- End main -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/participants.html.twig";
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
        return array (  286 => 167,  259 => 143,  254 => 141,  244 => 135,  235 => 128,  208 => 104,  195 => 94,  181 => 83,  171 => 76,  152 => 60,  143 => 54,  104 => 18,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Participation | Écotourisme{% endblock %}

{% block body %}
   {% if singleEvent is defined and singleEvent | length > 0 %}
    
 
<style>
.sp-image{
\twidth: 400 px !important;
\theight: 300 px !important;
}
</style>
   <section class=\"parallax-window\" data-parallax=\"scroll\" style=\"\" data-natural-width=\"1400\" data-natural-height=\"50\">
    <div class=\"parallax-content-1 opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.4)\">
        <div class=\"animated fadeInDown\">
            <h1>{{singleEvent.Name}}</h1>
          
        </div>
    </div>
</section>

\t<main>
\t\t<div id=\"position\">
\t\t\t<div class=\"container\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">Category</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>Page active</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Position -->

\t\t<div class=\"collapse\" id=\"collapseMap\">
\t\t\t<div id=\"map\" class=\"map\"></div>
\t\t</div>
\t\t<!-- End Map -->

\t\t<div class=\"container margin_60\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\" id=\"single_tour_desc\">
\t\t\t\t\t
\t\t\t\t
                  
\t\t\t\t\t<!-- Map button for tablets/mobiles -->
\t\t\t\t\t<div id=\"Img_carousel\" class=\"slider-pro\">
\t\t\t\t\t\t<div class=\"sp-slides\">

\t\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-image\" src=\"{{ asset ('uploads/images/' ~ singleEvent.image) }}\" width=\"300\" height=\"200\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sp-thumbnails\">
\t\t\t\t\t\t\t<img alt=\"Image\" class=\"sp-thumbnail\" src=\"{{ asset ('uploads/images/' ~ singleEvent.image) }}\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<hr>

\t\t\t\t
\t\t\t\t\t<hr>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<h3>Description</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{{singleEvent.description}}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Lieu</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>{{singleEvent.lieu}}</li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>Prix</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>{{singleEvent.prixA}} DT</li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
                            \t<h4>Durée</h4>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_ok\">
\t\t\t\t\t\t\t\t\t\t<li>{{singleEvent.duree}} Minutes</li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End row  -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End col-md-9  -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End row  -->

\t\t\t\t\t<hr>

\t\t\t\t\t

\t\t\t\t   
\t\t\t\t</div>
\t\t\t\t<!--End  single_tour_desc-->

\t\t\t\t<aside class=\"col-lg-4\">
\t\t\t\t 
\t\t\t\t\t<div class=\"box_style_1 expose\">
\t\t\t\t\t\t<h3 class=\"inner\">Inscription à l'événement</h3>
                        {{form_start(formParticipant,{'attr' :{'novalidate':'novalidate'}})}}
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
                               
\t\t\t\t\t\t\t\t\t<label><i class=\"icon-user\"></i> Nom complet</label>
\t\t\t\t\t\t\t\t\t{# <input class=\"date-pick form-control\" type=\"text\" placeholder=\"votre nom complet\"> #}
                                   {{form_widget(formParticipant.fullname,{'attr' :{'class':'form-control','placeholder':'votre nom complet'}})}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<br>
                            {{form_widget(formParticipant.participater,{'attr' :{'class':'btn_full'}})}}
\t\t\t\t\t\t
\t\t\t\t\t\t{{ form_end(formParticipant) }}
\t\t\t\t\t</div>
                  
\t\t\t\t\t<!--/box_style_1 -->

\t\t\t\t\t<div class=\"box_style_4\">
\t\t\t\t\t\t<i class=\"icon_set_1_icon-90\"></i>
\t\t\t\t\t\t<h4><span>Book</span> by phone</h4>
\t\t\t\t\t\t<a href=\"tel://004542344599\" class=\"phone\">+216 423 445 99</a>
\t\t\t\t\t\t<small>Monday to Friday 9.00am - 7.30pm</small>
\t\t\t\t\t</div>

\t\t\t\t</aside>
\t\t\t</div>
\t\t\t<!--End row -->
\t\t</div>
\t\t<!--End container -->
        
        <div id=\"overlay\"></div>
\t\t<!-- Mask on input focus -->
    
\t</main>

    {% endif %}
\t<!-- End main -->
    {% endblock %}
", "client/participants.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\participants.html.twig");
    }
}
