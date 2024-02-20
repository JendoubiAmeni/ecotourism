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

/* admin/security/reset.html.twig */
class __TwigTemplate_e7dc701d73b14f34b8e3e9119b9fa85c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/reset.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <title>
      Recover Password |  Dashboard
    </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!-- App favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/images/favicon.ico"), "html", null, true);
        echo "\" />

    <!-- App css -->
    <link
      href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\"
      rel=\"stylesheet\"
      type=\"text/css\"
      id=\"bootstrap-stylesheet\"
    />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link
      href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Backend/assets/css/app.min.css"), "html", null, true);
        echo "\"
      rel=\"stylesheet\"
      type=\"text/css\"
      id=\"app-stylesheet\"
    />
    <style>
      .bg-primary {
        background-color: #ffff !important;
      }

      .text-green {
        color: #76ba1b !important;
      }
    </style>
  </head>

  <body
    class=\"authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100\"
  >
    

<div class=\"account-pages w-100 mt-5 mb-5\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 col-lg-6 col-xl-5\">
                <div class=\"card mb-0\">
                    <div class=\"card-body p-4\">
                        <div class=\"account-box\">
                            <div class=\"text-center account-logo-box\">
                                <div>
                                    <a href=\"index.html\">
                                        <img
                                            src=\"assets/images/logo-dark.png\"
                                            alt=\"\"
                                            height=\"30\"
                                        />
                                    </a>
                                </div>
                            </div>
                            <div class=\"account-content mt-4\">
                                <div class=\"text-center\">
                                    <p class=\"text-muted mb-0 mb-3\">
                                        Entrez votre adresse e-mail et nous vous enverrons un e-mail avec des instructions pour réinitialiser votre mot de passe.
                                    </p>
                                </div>
                                <form class=\"form-horizontal\" action=\"#\">
                                    <div class=\"form-group row\">
                                        <div class=\"col-12\">
                                            <label for=\"emailaddress\">Adresse e-mail</label>
                                            <input
                                                class=\"form-control\"
                                                type=\"email\"
                                                id=\"emailaddress\"
                                                required=\"\"
                                                placeholder=\"admin@eco.tn\"
                                            />
                                        </div>
                                    </div>

                                    <div class=\"form-group row text-center mt-2\">
                                        <div class=\"col-12\">
                                            <button
                                                class=\"btn btn-md btn-block btn-primary waves-effect waves-light\"
                                                type=\"submit\"
                                            >
                                                Réinitialiser le mot de passe
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <div class=\"clearfix\"></div>

                                <div class=\"row mt-4\">
                                    <div class=\"col-sm-12 text-center\">
                                        <p class=\"text-muted mb-0\">
                                            Retour à la page de
                                            <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_login");
        echo "\" class=\"text-dark ml-1\"
                                            ><b>connexion</b></a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card-box-->
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

    <!-- end page -->

    <!-- Vendor js -->
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor.min.js"), "html", null, true);
        echo "\"></script>

    <!-- App js -->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.min.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/security/reset.html.twig";
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
        return array (  189 => 127,  183 => 124,  157 => 101,  77 => 24,  72 => 22,  64 => 17,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <title>
      Recover Password |  Dashboard
    </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!-- App favicon -->
    <link rel=\"shortcut icon\" href=\"{{asset('Backend/assets/images/favicon.ico')}}\" />

    <!-- App css -->
    <link
      href=\"{{asset('Backend/assets/css/bootstrap.min.css')}}\"
      rel=\"stylesheet\"
      type=\"text/css\"
      id=\"bootstrap-stylesheet\"
    />
    <link href=\"{{asset('Backend/assets/css/icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link
      href=\"{{asset('Backend/assets/css/app.min.css')}}\"
      rel=\"stylesheet\"
      type=\"text/css\"
      id=\"app-stylesheet\"
    />
    <style>
      .bg-primary {
        background-color: #ffff !important;
      }

      .text-green {
        color: #76ba1b !important;
      }
    </style>
  </head>

  <body
    class=\"authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100\"
  >
    

<div class=\"account-pages w-100 mt-5 mb-5\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 col-lg-6 col-xl-5\">
                <div class=\"card mb-0\">
                    <div class=\"card-body p-4\">
                        <div class=\"account-box\">
                            <div class=\"text-center account-logo-box\">
                                <div>
                                    <a href=\"index.html\">
                                        <img
                                            src=\"assets/images/logo-dark.png\"
                                            alt=\"\"
                                            height=\"30\"
                                        />
                                    </a>
                                </div>
                            </div>
                            <div class=\"account-content mt-4\">
                                <div class=\"text-center\">
                                    <p class=\"text-muted mb-0 mb-3\">
                                        Entrez votre adresse e-mail et nous vous enverrons un e-mail avec des instructions pour réinitialiser votre mot de passe.
                                    </p>
                                </div>
                                <form class=\"form-horizontal\" action=\"#\">
                                    <div class=\"form-group row\">
                                        <div class=\"col-12\">
                                            <label for=\"emailaddress\">Adresse e-mail</label>
                                            <input
                                                class=\"form-control\"
                                                type=\"email\"
                                                id=\"emailaddress\"
                                                required=\"\"
                                                placeholder=\"admin@eco.tn\"
                                            />
                                        </div>
                                    </div>

                                    <div class=\"form-group row text-center mt-2\">
                                        <div class=\"col-12\">
                                            <button
                                                class=\"btn btn-md btn-block btn-primary waves-effect waves-light\"
                                                type=\"submit\"
                                            >
                                                Réinitialiser le mot de passe
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <div class=\"clearfix\"></div>

                                <div class=\"row mt-4\">
                                    <div class=\"col-sm-12 text-center\">
                                        <p class=\"text-muted mb-0\">
                                            Retour à la page de
                                            <a href=\"{{path('app_admin_login')}}\" class=\"text-dark ml-1\"
                                            ><b>connexion</b></a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card-box-->
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

    <!-- end page -->

    <!-- Vendor js -->
    <script src=\"{{asset('assets/js/vendor.min.js')}}\"></script>

    <!-- App js -->
    <script src=\"{{asset('assets/js/app.min.js')}}\"></script>
  </body>
</html>
", "admin/security/reset.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\security\\reset.html.twig");
    }
}
