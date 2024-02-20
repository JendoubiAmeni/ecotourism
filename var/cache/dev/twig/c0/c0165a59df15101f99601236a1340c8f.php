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

/* client/security/connexion.html.twig */
class __TwigTemplate_f5fc4596b928b7a27807008acc79c490 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/security/connexion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/security/connexion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/security/connexion.html.twig", 1);
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

        echo "Connexion | Eco tourism";
        
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
        echo "
  <section id=\"hero\" class=\"login\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-4 col-lg-5 col-md-6 col-sm-8\">
                <div id=\"login\">
                   
                      
                    <form  method=\"post\">
                ";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageKey", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageData", [], "any", false, false, false, 16), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 18
        echo "
                  
                        <a href=\"#0\" class=\"social_bt facebook\">Connexion avec Facebook</a>
                        <a href=\"#0\" class=\"social_bt google\">Connexion avec Google</a>
                        <br>
                        <div class=\"divider\"><span>Ou</span></div>   <br>
                        <div class=\"form-group\">
                             <input type=\"email\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" placeholder=\"E-mail\" class=\"form-control\" autocomplete=\"email\"  autofocus>
                            
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Mot de passe\" class=\"form-control\" autocomplete=\"current-password\" >
                        </div>
                         <input type=\"hidden\" name=\"_csrf_token\"
                            value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                        
                        <p class=\"small\">
                            <a href=\"#\">Mot de passe oublié ?</a>
                        </p>
                       <button type=\"submit\" class=\"btn_full\">Se connecter</button>
                        <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_register");
        echo "\" class=\"btn_full_outline\">S'inscrire</a>
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
        return "client/security/connexion.html.twig";
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
        return array (  135 => 38,  126 => 32,  116 => 25,  107 => 18,  101 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion | Eco tourism{% endblock %}

{% block body %}

  <section id=\"hero\" class=\"login\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-4 col-lg-5 col-md-6 col-sm-8\">
                <div id=\"login\">
                   
                      
                    <form  method=\"post\">
                {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                  
                        <a href=\"#0\" class=\"social_bt facebook\">Connexion avec Facebook</a>
                        <a href=\"#0\" class=\"social_bt google\">Connexion avec Google</a>
                        <br>
                        <div class=\"divider\"><span>Ou</span></div>   <br>
                        <div class=\"form-group\">
                             <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" placeholder=\"E-mail\" class=\"form-control\" autocomplete=\"email\"  autofocus>
                            
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Mot de passe\" class=\"form-control\" autocomplete=\"current-password\" >
                        </div>
                         <input type=\"hidden\" name=\"_csrf_token\"
                            value=\"{{ csrf_token('authenticate') }}\">
                        
                        <p class=\"small\">
                            <a href=\"#\">Mot de passe oublié ?</a>
                        </p>
                       <button type=\"submit\" class=\"btn_full\">Se connecter</button>
                        <a href=\"{{ path('app_user_register') }}\" class=\"btn_full_outline\">S'inscrire</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "client/security/connexion.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\security\\connexion.html.twig");
    }
}
