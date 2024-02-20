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

/* client/security/inscription.html.twig */
class __TwigTemplate_770d716fc304cc71139dfa05e0c1a61f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/security/inscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/security/inscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/security/inscription.html.twig", 1);
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

        echo "Accueil | Eco tourism";
        
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
        echo "<style>
    .form-title {
    font-size: 24px;
    color: #76BA1B; 
    margin-bottom: 20px; 
    text-align: center; 
}
.top{
    margin-top: 15px !important;
}
.form-group {
    position: relative;
}

.toggle-password {
    position: absolute;
    right: 10px;
    top: 60%;
    transform: translateY(-50%);
    cursor: pointer;
}

.password-input {
    padding-right: 30px;
}
.field {
            position: relative;
            width: 312px !important;
            margin-top: 6px;
            margin-bottom: 20px;
        }
.form-container{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
.btn_full{
      position: relative;
            width: 312px !important;
          
            
            margin-left: 45px;
}
/* FILE */
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .inputfile+label {
            text-transform: uppercase;
        }

        .inputfile+label {
            max-width: 100%;
            font-size: 10px;
            font-weight: bold;
            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            text-align: center;
        }

        .inputfile+label figure {
            width: 100px !important;
            height: 100px !important;
            border-radius: 50%;
            background-color: transparent;
            display: block;
             margin: 0 !important;
            margin-bottom: 0px !important;
        }
        .your_picture{
        margin-left: 100px !important;
        }
        .inputfile+label figure img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border-color: #8EC038 !important;
        }

        @media screen and (max-width: 768px) {
            .form-file {
                margin-bottom: 0px !important;
            }
        }
        .file-selected {
    border: 2px solid #A7C94D; 
}
</style>
<section id=\"hero\" class=\"login\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-8 col-lg-9 col-md-10 col-sm-12\">
                <div id=\"login\">
                    
                    <h4 class=\"form-title\">";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "</h4>
                    <form method='post' style=\"width: 100%;\" class=\"form\" enctype=\"multipart/form-data\">
                    <div class=\"form-container\">
                        
                         <div class=\"form-group field\">
                            <span class=\"input-icon\"><i class=\"fas fa-card\"></i></span>
                             ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 115, $this->source); })()), "cin", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "CIN"]]);
        echo "
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 116, $this->source); })()), "cin", [], "any", false, false, false, 116), 'errors');
        echo "
                           ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 117, $this->source); })()), "phone", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "form-control top", "placeholder" => "Téléphone"]]);
        echo "
                            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 118, $this->source); })()), "phone", [], "any", false, false, false, 118), 'errors');
        echo "
                        </div>
                 <div class=\"form-group field\">
                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 121, $this->source); })()), "images", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "inputfile", "onchange" => "readURL(this);"]]);
        echo "
                    <label for=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 122, $this->source); })()), "images", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "id", [], "any", false, false, false, 122), "html", null, true);
        echo "\" class=\"your_picture\">
                        <figure>
                            <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/your-picture.png"), "html", null, true);
        echo "\" alt=\"\" class=\"your_picture_image\" style=\"width: 100px; height: 100px;\">
                        </figure>
                    </label>
                </div>

                       
                        <div class=\"form-group field\">
                            ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 131, $this->source); })()), "nom", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        echo "
                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 132, $this->source); })()), "nom", [], "any", false, false, false, 132), 'errors');
        echo "
                        </div>

                        <div class=\"form-group field\">
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 136, $this->source); })()), "prenom", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"]]);
        echo "
                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 137, $this->source); })()), "prenom", [], "any", false, false, false, 137), 'errors');
        echo "
                        </div>
                        <div class=\"form-group field\">
                            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 140, $this->source); })()), "email", [], "any", false, false, false, 140), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        echo "
                            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 141, $this->source); })()), "email", [], "any", false, false, false, 141), 'errors');
        echo "
                        </div>
                        <div class=\"form-group field\">
                            ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 144, $this->source); })()), "ville", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ville"]]);
        echo "
                            ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 145, $this->source); })()), "ville", [], "any", false, false, false, 145), 'errors');
        echo "
                        </div>
                         <div class=\"form-group field\">
                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 148, $this->source); })()), "pays", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Pays"]]);
        echo "
                            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 149, $this->source); })()), "pays", [], "any", false, false, false, 149), 'errors');
        echo "
                        </div>
                        <div class=\"form-group field\">
                            ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 152, $this->source); })()), "adresse", [], "any", false, false, false, 152), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        echo "
                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 153, $this->source); })()), "adresse", [], "any", false, false, false, 153), 'errors');
        echo "
                        </div>

                        <div class=\"form-group field\">
                            ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 157, $this->source); })()), "zipcode", [], "any", false, false, false, 157), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Code Postal"]]);
        echo "
                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 158, $this->source); })()), "zipcode", [], "any", false, false, false, 158), 'errors');
        echo "
                        </div>
                        <div class=\"form-group field\">
                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 161, $this->source); })()), "dateNaissance", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Date de Naissance"]]);
        echo "
                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 162, $this->source); })()), "dateNaissance", [], "any", false, false, false, 162), 'errors');
        echo "
                        </div>

                       
                        
                           <div class=\"form-group field\">
                            ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 168, $this->source); })()), "password", [], "any", false, false, false, 168), "first", [], "any", false, false, false, 168), 'widget', ["attr" => ["class" => "form-control password-input password", "placeholder" => "Mot de passe", "id" => "password"]]);
        echo "
                            <span class=\"toggle-password\" >
                                <i id=\"eye\" class=\"far fa-eye-slash\" onclick=\"showHidePwd();\"></i>
                            </span>
                        </div>

                        <div class=\"form-group field\">
                            ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 175, $this->source); })()), "password", [], "any", false, false, false, 175), "second", [], "any", false, false, false, 175), 'row', ["attr" => ["class" => "form-control password-input repassword", "placeholder" => "Confirmer le mot de passe", "id" => "repassword"]]);
        echo "
                            <span class=\"toggle-password\" toggle=\"#password-field-second\">
                                <i id=\"eye1\" class=\"far fa-eye-slash\" onclick=\"showHideRPwd();\"></i>
                            </span>
                            ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 179, $this->source); })()), "password", [], "any", false, false, false, 179), "second", [], "any", false, false, false, 179), 'errors');
        echo "
                        </div> </div>
                         ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 181, $this->source); })()), "submit", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => "btn_full top"]]);
        echo "
                        ";
        // line 182
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registerform"]) || array_key_exists("registerform", $context) ? $context["registerform"] : (function () { throw new RuntimeError('Variable "registerform" does not exist.', 182, $this->source); })()), 'form_end');
        echo "
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>








";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/security/inscription.html.twig";
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
        return array (  350 => 182,  346 => 181,  341 => 179,  334 => 175,  324 => 168,  315 => 162,  311 => 161,  305 => 158,  301 => 157,  294 => 153,  290 => 152,  284 => 149,  280 => 148,  274 => 145,  270 => 144,  264 => 141,  260 => 140,  254 => 137,  250 => 136,  243 => 132,  239 => 131,  229 => 124,  224 => 122,  220 => 121,  214 => 118,  210 => 117,  206 => 116,  202 => 115,  193 => 109,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil | Eco tourism{% endblock %}

{% block body %}
<style>
    .form-title {
    font-size: 24px;
    color: #76BA1B; 
    margin-bottom: 20px; 
    text-align: center; 
}
.top{
    margin-top: 15px !important;
}
.form-group {
    position: relative;
}

.toggle-password {
    position: absolute;
    right: 10px;
    top: 60%;
    transform: translateY(-50%);
    cursor: pointer;
}

.password-input {
    padding-right: 30px;
}
.field {
            position: relative;
            width: 312px !important;
            margin-top: 6px;
            margin-bottom: 20px;
        }
.form-container{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
.btn_full{
      position: relative;
            width: 312px !important;
          
            
            margin-left: 45px;
}
/* FILE */
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .inputfile+label {
            text-transform: uppercase;
        }

        .inputfile+label {
            max-width: 100%;
            font-size: 10px;
            font-weight: bold;
            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            text-align: center;
        }

        .inputfile+label figure {
            width: 100px !important;
            height: 100px !important;
            border-radius: 50%;
            background-color: transparent;
            display: block;
             margin: 0 !important;
            margin-bottom: 0px !important;
        }
        .your_picture{
        margin-left: 100px !important;
        }
        .inputfile+label figure img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border-color: #8EC038 !important;
        }

        @media screen and (max-width: 768px) {
            .form-file {
                margin-bottom: 0px !important;
            }
        }
        .file-selected {
    border: 2px solid #A7C94D; 
}
</style>
<section id=\"hero\" class=\"login\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-8 col-lg-9 col-md-10 col-sm-12\">
                <div id=\"login\">
                    
                    <h4 class=\"form-title\">{{title}}</h4>
                    <form method='post' style=\"width: 100%;\" class=\"form\" enctype=\"multipart/form-data\">
                    <div class=\"form-container\">
                        
                         <div class=\"form-group field\">
                            <span class=\"input-icon\"><i class=\"fas fa-card\"></i></span>
                             {{ form_widget(registerform.cin, { 'attr': {'class': 'form-control', 'placeholder': 'CIN' } }) }}
                            {{ form_errors(registerform.cin) }}
                           {{ form_widget(registerform.phone, { 'attr': {'class': 'form-control top', 'placeholder': 'Téléphone' } }) }}
                            {{ form_errors(registerform.phone) }}
                        </div>
                 <div class=\"form-group field\">
                    {{ form_widget(registerform.images, { 'attr': {'class': 'inputfile', 'onchange': 'readURL(this);'} }) }}
                    <label for=\"{{ registerform.images.vars.id }}\" class=\"your_picture\">
                        <figure>
                            <img src=\"{{ asset('Frontend/img/your-picture.png') }}\" alt=\"\" class=\"your_picture_image\" style=\"width: 100px; height: 100px;\">
                        </figure>
                    </label>
                </div>

                       
                        <div class=\"form-group field\">
                            {{ form_widget(registerform.nom, { 'attr': {'class': 'form-control', 'placeholder': 'Nom' } }) }}
                            {{ form_errors(registerform.nom) }}
                        </div>

                        <div class=\"form-group field\">
                            {{ form_widget(registerform.prenom, { 'attr': {'class': 'form-control', 'placeholder': 'Prénom' } }) }}
                            {{ form_errors(registerform.prenom) }}
                        </div>
                        <div class=\"form-group field\">
                            {{ form_widget(registerform.email, { 'attr': {'class': 'form-control', 'placeholder': 'Email' } }) }}
                            {{ form_errors(registerform.email) }}
                        </div>
                        <div class=\"form-group field\">
                            {{ form_widget(registerform.ville, { 'attr': {'class': 'form-control', 'placeholder': 'Ville' } }) }}
                            {{ form_errors(registerform.ville) }}
                        </div>
                         <div class=\"form-group field\">
                            {{ form_widget(registerform.pays, { 'attr': {'class': 'form-control', 'placeholder': 'Pays' } }) }}
                            {{ form_errors(registerform.pays) }}
                        </div>
                        <div class=\"form-group field\">
                            {{ form_widget(registerform.adresse, { 'attr': {'class': 'form-control', 'placeholder': 'Adresse' } }) }}
                            {{ form_errors(registerform.adresse) }}
                        </div>

                        <div class=\"form-group field\">
                            {{ form_widget(registerform.zipcode, { 'attr': {'class': 'form-control', 'placeholder': 'Code Postal' } }) }}
                            {{ form_errors(registerform.zipcode) }}
                        </div>
                        <div class=\"form-group field\">
                            {{ form_widget(registerform.dateNaissance, { 'attr': {'class': 'form-control', 'placeholder': 'Date de Naissance' } }) }}
                            {{ form_errors(registerform.dateNaissance) }}
                        </div>

                       
                        
                           <div class=\"form-group field\">
                            {{ form_widget(registerform.password.first, { 'attr': {'class': 'form-control password-input password', 'placeholder': 'Mot de passe', 'id': 'password' } }) }}
                            <span class=\"toggle-password\" >
                                <i id=\"eye\" class=\"far fa-eye-slash\" onclick=\"showHidePwd();\"></i>
                            </span>
                        </div>

                        <div class=\"form-group field\">
                            {{ form_row(registerform.password.second, { 'attr': {'class': 'form-control password-input repassword', 'placeholder': 'Confirmer le mot de passe', 'id': 'repassword' } }) }}
                            <span class=\"toggle-password\" toggle=\"#password-field-second\">
                                <i id=\"eye1\" class=\"far fa-eye-slash\" onclick=\"showHideRPwd();\"></i>
                            </span>
                            {{ form_errors(registerform.password.second) }}
                        </div> </div>
                         {{ form_widget(registerform.submit, { 'attr': {'class': 'btn_full top' } }) }}
                        {{ form_end(registerform) }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>








{% endblock %}", "client/security/inscription.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\security\\inscription.html.twig");
    }
}
