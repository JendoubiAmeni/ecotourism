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

/* admin/security/connexion.html.twig */
class __TwigTemplate_541b09a244fa12c0d01794251fca1f34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/connexion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/connexion.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <title>Connexion | Admin</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta content=\"logintheme\" name=\"ecotourism\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!-- App favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/images/favicon.ico"), "html", null, true);
        echo "\">

    <!-- App css -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"bootstrap-stylesheet\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"app-stylesheet\" />
    <style>
        .bg-primary {
            background-color: #ffff !important;

        }

        .text-green {
            color: #76BA1B !important;
        }
    </style>
</head>
<body class=\"authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100\">

    <div class=\"home-btn d-none d-sm-block\">
        <a href=\"index.html\"><i class=\"fas fa-home h2 text-white\"></i></a>
    </div>

    <div class=\"account-pages w-100 mt-5 mb-5\">
        <div class=\"container\">

            <div class=\"row justify-content-center\">
                <div class=\"col-md-8 col-lg-6 col-xl-5\">
                    <div class=\"card mb-0\">

                        <div class=\"card-body p-4\">

                            <div class=\"account-box\">
                                <div class=\"account-logo-box\">
                                    <div class=\"text-center\">
                                        <a href=\"index.html\">
                                            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/images/logo-dark.png"), "html", null, true);
        echo "\" alt=\"\" height=\"30\">
                                        </a>
                                    </div>
                                    <h5 class=\"text-uppercase mb-1 mt-4\">Se Connecter</h5>
                                    <p class=\"mb-0\">Connectez-vous à votre compte Admin</p>
                                </div>

                                <div class=\"account-content mt-4\">
                                    <form class=\"form-horizontal\" method=\"post\">
                                        ";
        // line 56
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "                                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 57, $this->source); })()), "messageKey", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 57, $this->source); })()), "messageData", [], "any", false, false, false, 57), "security"), "html", null, true);
            echo "</div>
                                        ";
        }
        // line 59
        echo "                                        <div class=\"form-group row\">
                                            <div class=\"col-12\">
                                                <label for=\"emailaddress\">Adresse e-mail</label>
                                                <input class=\"form-control\" type=\"email\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\"  autofocus
                                                    placeholder=\"admin@eco.tn\">
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">
                                            <div class=\"col-12\">
                                                <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reset");
        echo "\"
                                                    class=\"text-muted float-right\"><small>Mot de passe oublié?</small></a>
                                                <label for=\"password\">Mot de passe</label>
                                                <input class=\"form-control\" type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" 
                                                    placeholder=\"Entrez votre mot de passe\">
                                                    <input type=\"hidden\" name=\"_csrf_token\"
                                                        value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">
                                            <div class=\"col-12\">

                                                <div class=\"checkbox checkbox-success\">
                                                    <input id=\"remember\" type=\"checkbox\" checked=\"\">
                                                    <label for=\"remember\">
                                                        Se souvenir de moi
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class=\"form-group row text-center mt-2\">
                                            <div class=\"col-12\">
                                                <button
                                                    class=\"btn btn-md btn-block btn-primary waves-effect waves-light\"
                                                    type=\"submit\">Se Connecter</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <div class=\"text-center\">
                                                <button type=\"button\"
                                                    class=\"btn mr-1 btn-facebook waves-effect waves-light\">
                                                    <i class=\"fab fa-facebook-f\"></i>
                                                </button>
                                                <button type=\"button\"
                                                    class=\"btn mr-1 btn-googleplus waves-effect waves-light\">
                                                    <i class=\"fab fa-google\"></i>
                                                </button>
                                                <button type=\"button\"
                                                    class=\"btn mr-1 btn-twitter waves-effect waves-light\">
                                                    <i class=\"fab fa-twitter\"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row mt-4 pt-2\">
                                        <div class=\"col-sm-12 text-center\">
                                            <!--  <p class=\"text-muted mb-0\">Vous n'avez pas de compte? <a
                                                    href=\"page-register.html\" class=\"text-dark ml-1\"><b>S'inscrire</b></a>
                                            </p> -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

</body>

 <!-- Vendor js -->
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/js/vendor.min.js"), "html", null, true);
        echo "\"></script>

    <!-- App js -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/js/app.min.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/security/connexion.html.twig";
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
        return array (  227 => 149,  221 => 146,  147 => 75,  138 => 69,  128 => 62,  123 => 59,  117 => 57,  115 => 56,  103 => 47,  69 => 16,  65 => 15,  61 => 14,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <title>Connexion | Admin</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta content=\"logintheme\" name=\"ecotourism\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!-- App favicon -->
    <link rel=\"shortcut icon\" href=\"{{asset('Backend/assets/images/favicon.ico')}}\">

    <!-- App css -->
    <link href=\"{{asset('Backend/assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" id=\"bootstrap-stylesheet\" />
    <link href=\"{{asset('Backend/assets/css/icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('Backend/assets/css/app.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" id=\"app-stylesheet\" />
    <style>
        .bg-primary {
            background-color: #ffff !important;

        }

        .text-green {
            color: #76BA1B !important;
        }
    </style>
</head>
<body class=\"authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100\">

    <div class=\"home-btn d-none d-sm-block\">
        <a href=\"index.html\"><i class=\"fas fa-home h2 text-white\"></i></a>
    </div>

    <div class=\"account-pages w-100 mt-5 mb-5\">
        <div class=\"container\">

            <div class=\"row justify-content-center\">
                <div class=\"col-md-8 col-lg-6 col-xl-5\">
                    <div class=\"card mb-0\">

                        <div class=\"card-body p-4\">

                            <div class=\"account-box\">
                                <div class=\"account-logo-box\">
                                    <div class=\"text-center\">
                                        <a href=\"index.html\">
                                            <img src=\"{{asset('Backend/assets/images/logo-dark.png')}}\" alt=\"\" height=\"30\">
                                        </a>
                                    </div>
                                    <h5 class=\"text-uppercase mb-1 mt-4\">Se Connecter</h5>
                                    <p class=\"mb-0\">Connectez-vous à votre compte Admin</p>
                                </div>

                                <div class=\"account-content mt-4\">
                                    <form class=\"form-horizontal\" method=\"post\">
                                        {% if error %}
                                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                        {% endif %}
                                        <div class=\"form-group row\">
                                            <div class=\"col-12\">
                                                <label for=\"emailaddress\">Adresse e-mail</label>
                                                <input class=\"form-control\" type=\"email\" value=\"{{ email }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\"  autofocus
                                                    placeholder=\"admin@eco.tn\">
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">
                                            <div class=\"col-12\">
                                                <a href=\"{{path('app_admin_reset')}}\"
                                                    class=\"text-muted float-right\"><small>Mot de passe oublié?</small></a>
                                                <label for=\"password\">Mot de passe</label>
                                                <input class=\"form-control\" type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" 
                                                    placeholder=\"Entrez votre mot de passe\">
                                                    <input type=\"hidden\" name=\"_csrf_token\"
                                                        value=\"{{ csrf_token('authenticate') }}\">
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">
                                            <div class=\"col-12\">

                                                <div class=\"checkbox checkbox-success\">
                                                    <input id=\"remember\" type=\"checkbox\" checked=\"\">
                                                    <label for=\"remember\">
                                                        Se souvenir de moi
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class=\"form-group row text-center mt-2\">
                                            <div class=\"col-12\">
                                                <button
                                                    class=\"btn btn-md btn-block btn-primary waves-effect waves-light\"
                                                    type=\"submit\">Se Connecter</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <div class=\"text-center\">
                                                <button type=\"button\"
                                                    class=\"btn mr-1 btn-facebook waves-effect waves-light\">
                                                    <i class=\"fab fa-facebook-f\"></i>
                                                </button>
                                                <button type=\"button\"
                                                    class=\"btn mr-1 btn-googleplus waves-effect waves-light\">
                                                    <i class=\"fab fa-google\"></i>
                                                </button>
                                                <button type=\"button\"
                                                    class=\"btn mr-1 btn-twitter waves-effect waves-light\">
                                                    <i class=\"fab fa-twitter\"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row mt-4 pt-2\">
                                        <div class=\"col-sm-12 text-center\">
                                            <!--  <p class=\"text-muted mb-0\">Vous n'avez pas de compte? <a
                                                    href=\"page-register.html\" class=\"text-dark ml-1\"><b>S'inscrire</b></a>
                                            </p> -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

</body>

 <!-- Vendor js -->
    <script src=\"{{asset('Backend/assets/js/vendor.min.js')}}\"></script>

    <!-- App js -->
    <script src=\"{{asset('Backend/assets/js/app.min.js')}}\"></script>", "admin/security/connexion.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\security\\connexion.html.twig");
    }
}
