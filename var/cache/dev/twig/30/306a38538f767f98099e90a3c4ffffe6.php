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

/* admin/recoverpw.html.twig */
class __TwigTemplate_9ff205313417c5da56c530345ed9c74a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recoverpw.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recoverpw.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from coderthemes.com/adminox/layouts/vertical/page-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 04:11:06 GMT -->

<head>
    <meta charset=\"utf-8\" />
    <title>Recover Password | Adminox - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!-- App favicon -->
    <link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\">

    <!-- App css -->
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"bootstrap-stylesheet\" />
    <link href=\"assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"app-stylesheet\" />
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
                                <div class=\"text-center account-logo-box\">
                                    <div>
                                        <a href=\"index.html\">
                                            <img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"30\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"account-content mt-4\">
                                    <div class=\"text-center\">
                                        <p class=\"text-muted mb-0 mb-3\">Enter your email address and we'll send you an
                                            email with instructions to reset your password. </p>
                                    </div>
                                    <form class=\"form-horizontal\" action=\"#\">

                                        <div class=\"form-group row\">
                                            <div class=\"col-12\">
                                                <label for=\"emailaddress\">Email address</label>
                                                <input class=\"form-control\" type=\"email\" id=\"emailaddress\" required=\"\"
                                                    placeholder=\"john@deo.com\">
                                            </div>
                                        </div>

                                        <div class=\"form-group row text-center mt-2\">
                                            <div class=\"col-12\">
                                                <button
                                                    class=\"btn btn-md btn-block btn-primary waves-effect waves-light\"
                                                    type=\"submit\">Reset Password</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class=\"clearfix\"></div>

                                    <div class=\"row mt-4\">
                                        <div class=\"col-sm-12 text-center\">
                                            <p class=\"text-muted mb-0\">Back to <a href=\"page-login.html\"
                                                    class=\"text-dark ml-1\"><b>Sign In</b></a></p>
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
    <script src=\"assets/js/vendor.min.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.min.js\"></script>

</body>


<!-- Mirrored from coderthemes.com/adminox/layouts/vertical/page-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 04:11:06 GMT -->

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/recoverpw.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from coderthemes.com/adminox/layouts/vertical/page-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 04:11:06 GMT -->

<head>
    <meta charset=\"utf-8\" />
    <title>Recover Password | Adminox - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!-- App favicon -->
    <link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\">

    <!-- App css -->
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"bootstrap-stylesheet\" />
    <link href=\"assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"app-stylesheet\" />
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
                                <div class=\"text-center account-logo-box\">
                                    <div>
                                        <a href=\"index.html\">
                                            <img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"30\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"account-content mt-4\">
                                    <div class=\"text-center\">
                                        <p class=\"text-muted mb-0 mb-3\">Enter your email address and we'll send you an
                                            email with instructions to reset your password. </p>
                                    </div>
                                    <form class=\"form-horizontal\" action=\"#\">

                                        <div class=\"form-group row\">
                                            <div class=\"col-12\">
                                                <label for=\"emailaddress\">Email address</label>
                                                <input class=\"form-control\" type=\"email\" id=\"emailaddress\" required=\"\"
                                                    placeholder=\"john@deo.com\">
                                            </div>
                                        </div>

                                        <div class=\"form-group row text-center mt-2\">
                                            <div class=\"col-12\">
                                                <button
                                                    class=\"btn btn-md btn-block btn-primary waves-effect waves-light\"
                                                    type=\"submit\">Reset Password</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class=\"clearfix\"></div>

                                    <div class=\"row mt-4\">
                                        <div class=\"col-sm-12 text-center\">
                                            <p class=\"text-muted mb-0\">Back to <a href=\"page-login.html\"
                                                    class=\"text-dark ml-1\"><b>Sign In</b></a></p>
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
    <script src=\"assets/js/vendor.min.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.min.js\"></script>

</body>


<!-- Mirrored from coderthemes.com/adminox/layouts/vertical/page-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 04:11:06 GMT -->

</html>", "admin/recoverpw.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\recoverpw.html.twig");
    }
}
