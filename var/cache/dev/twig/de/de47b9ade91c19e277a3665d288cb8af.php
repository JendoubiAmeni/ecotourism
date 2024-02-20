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

/* admin/confirm-mail.html.twig */
class __TwigTemplate_9019fca06c64c0fba1673575309c1925 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/confirm-mail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/confirm-mail.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from coderthemes.com/adminox/layouts/vertical/page-confirm-mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 04:11:06 GMT -->

<head>
    <meta charset=\"utf-8\" />
    <title>Confirm mail | Adminox - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                            <img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"30\">
                                        </a>
                                    </div>
                                </div>

                                <div class=\"account-content\">
                                    <div class=\"mt-2 text-center\">
                                        <svg version=\"1.1\" xmlns:x=\"&ns_extend;\" xmlns:i=\"&ns_ai;\"
                                            xmlns:graph=\"&ns_graphs;\" xmlns=\"http://www.w3.org/2000/svg\"
                                            xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                            viewBox=\"0 0 98 98\" style=\"enable-background:new 0 0 98 98;height: 140px;\"
                                            xml:space=\"preserve\">
                                            <style type=\"text/css\">
                                                .st0 {
                                                    fill: transparent;
                                                }

                                                .st1 {
                                                    fill: #43b39c;
                                                }

                                                .st2 {
                                                    fill: #FFFFFF;
                                                    stroke: #43b39c;
                                                    stroke-width: 2;
                                                    stroke-miterlimit: 10;
                                                }

                                                .st3 {
                                                    fill: none;
                                                    stroke: #FFFFFF;
                                                    stroke-width: 2;
                                                    stroke-linecap: round;
                                                    stroke-miterlimit: 10;
                                                }
                                            </style>
                                            <g i:extraneous=\"self\">
                                                <circle id=\"XMLID_50_\" class=\"st0\" cx=\"49\" cy=\"49\" r=\"49\" />
                                                <g id=\"XMLID_4_\">
                                                    <path id=\"XMLID_49_\" class=\"st1\"
                                                        d=\"M77.3,42.7V77c0,0.6-0.4,1-1,1H21.7c-0.5,0-1-0.5-1-1V42.7c0-0.3,0.1-0.6,0.4-0.8l27.3-21.7
                                                                c0.3-0.3,0.8-0.3,1.2,0l27.3,21.7C77.1,42.1,77.3,42.4,77.3,42.7z\" />
                                                    <path id=\"XMLID_48_\" class=\"st2\" d=\"M66.5,69.5h-35c-1.1,0-2-0.9-2-2V26.8c0-1.1,0.9-2,2-2h35c1.1,0,2,0.9,2,2v40.7
                                                                C68.5,68.6,67.6,69.5,66.5,69.5z\" />
                                                    <path id=\"XMLID_47_\" class=\"st1\"
                                                        d=\"M62.9,33.4H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                                c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,33,63.4,33.4,62.9,33.4z\" />
                                                    <path id=\"XMLID_46_\" class=\"st1\"
                                                        d=\"M62.9,40.3H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                                c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,39.9,63.4,40.3,62.9,40.3z\" />
                                                    <path id=\"XMLID_45_\" class=\"st1\"
                                                        d=\"M62.9,47.2H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                                c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,46.8,63.4,47.2,62.9,47.2z\" />
                                                    <path id=\"XMLID_44_\" class=\"st1\"
                                                        d=\"M62.9,54.1H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                                c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,53.7,63.4,54.1,62.9,54.1z\" />
                                                    <path id=\"XMLID_43_\" class=\"st2\" d=\"M41.6,40.1h-5.8c-0.6,0-1-0.4-1-1v-6.7c0-0.6,0.4-1,1-1h5.8c0.6,0,1,0.4,1,1v6.7
                                                                C42.6,39.7,42.2,40.1,41.6,40.1z\" />
                                                    <path id=\"XMLID_42_\" class=\"st2\" d=\"M41.6,54.2h-5.8c-0.6,0-1-0.4-1-1v-6.7c0-0.6,0.4-1,1-1h5.8c0.6,0,1,0.4,1,1v6.7
                                                                C42.6,53.8,42.2,54.2,41.6,54.2z\" />
                                                    <path id=\"XMLID_41_\" class=\"st1\"
                                                        d=\"M23.4,46.2l25,17.8c0.3,0.2,0.7,0.2,1.1,0l26.8-19.8l-3.3,30.9H27.7L23.4,46.2z\" />
                                                    <path id=\"XMLID_40_\" class=\"st3\"
                                                        d=\"M74.9,45.2L49.5,63.5c-0.3,0.2-0.7,0.2-1.1,0L23.2,45.2\" />
                                                </g>
                                            </g>
                                        </svg>

                                        <p class=\"text-muted font-13 mt-2\"> A email has been send to
                                            <b>youremail@domain.com</b>.
                                            Please check for an email from company and click on the included link to
                                            reset your password.
                                        </p>

                                        <a href=\"index.html\"
                                            class=\"btn btn-md btn-block btn-primary waves-effect waves-light mt-4\">Back
                                            to Home</a>
                                    </div>




                                </div>
                            </div>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->
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


<!-- Mirrored from coderthemes.com/adminox/layouts/vertical/page-confirm-mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 04:11:06 GMT -->

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/confirm-mail.html.twig";
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


<!-- Mirrored from coderthemes.com/adminox/layouts/vertical/page-confirm-mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 04:11:06 GMT -->

<head>
    <meta charset=\"utf-8\" />
    <title>Confirm mail | Adminox - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                            <img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"30\">
                                        </a>
                                    </div>
                                </div>

                                <div class=\"account-content\">
                                    <div class=\"mt-2 text-center\">
                                        <svg version=\"1.1\" xmlns:x=\"&ns_extend;\" xmlns:i=\"&ns_ai;\"
                                            xmlns:graph=\"&ns_graphs;\" xmlns=\"http://www.w3.org/2000/svg\"
                                            xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                            viewBox=\"0 0 98 98\" style=\"enable-background:new 0 0 98 98;height: 140px;\"
                                            xml:space=\"preserve\">
                                            <style type=\"text/css\">
                                                .st0 {
                                                    fill: transparent;
                                                }

                                                .st1 {
                                                    fill: #43b39c;
                                                }

                                                .st2 {
                                                    fill: #FFFFFF;
                                                    stroke: #43b39c;
                                                    stroke-width: 2;
                                                    stroke-miterlimit: 10;
                                                }

                                                .st3 {
                                                    fill: none;
                                                    stroke: #FFFFFF;
                                                    stroke-width: 2;
                                                    stroke-linecap: round;
                                                    stroke-miterlimit: 10;
                                                }
                                            </style>
                                            <g i:extraneous=\"self\">
                                                <circle id=\"XMLID_50_\" class=\"st0\" cx=\"49\" cy=\"49\" r=\"49\" />
                                                <g id=\"XMLID_4_\">
                                                    <path id=\"XMLID_49_\" class=\"st1\"
                                                        d=\"M77.3,42.7V77c0,0.6-0.4,1-1,1H21.7c-0.5,0-1-0.5-1-1V42.7c0-0.3,0.1-0.6,0.4-0.8l27.3-21.7
                                                                c0.3-0.3,0.8-0.3,1.2,0l27.3,21.7C77.1,42.1,77.3,42.4,77.3,42.7z\" />
                                                    <path id=\"XMLID_48_\" class=\"st2\" d=\"M66.5,69.5h-35c-1.1,0-2-0.9-2-2V26.8c0-1.1,0.9-2,2-2h35c1.1,0,2,0.9,2,2v40.7
                                                                C68.5,68.6,67.6,69.5,66.5,69.5z\" />
                                                    <path id=\"XMLID_47_\" class=\"st1\"
                                                        d=\"M62.9,33.4H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                                c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,33,63.4,33.4,62.9,33.4z\" />
                                                    <path id=\"XMLID_46_\" class=\"st1\"
                                                        d=\"M62.9,40.3H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                                c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,39.9,63.4,40.3,62.9,40.3z\" />
                                                    <path id=\"XMLID_45_\" class=\"st1\"
                                                        d=\"M62.9,47.2H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                                c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,46.8,63.4,47.2,62.9,47.2z\" />
                                                    <path id=\"XMLID_44_\" class=\"st1\"
                                                        d=\"M62.9,54.1H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                                c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,53.7,63.4,54.1,62.9,54.1z\" />
                                                    <path id=\"XMLID_43_\" class=\"st2\" d=\"M41.6,40.1h-5.8c-0.6,0-1-0.4-1-1v-6.7c0-0.6,0.4-1,1-1h5.8c0.6,0,1,0.4,1,1v6.7
                                                                C42.6,39.7,42.2,40.1,41.6,40.1z\" />
                                                    <path id=\"XMLID_42_\" class=\"st2\" d=\"M41.6,54.2h-5.8c-0.6,0-1-0.4-1-1v-6.7c0-0.6,0.4-1,1-1h5.8c0.6,0,1,0.4,1,1v6.7
                                                                C42.6,53.8,42.2,54.2,41.6,54.2z\" />
                                                    <path id=\"XMLID_41_\" class=\"st1\"
                                                        d=\"M23.4,46.2l25,17.8c0.3,0.2,0.7,0.2,1.1,0l26.8-19.8l-3.3,30.9H27.7L23.4,46.2z\" />
                                                    <path id=\"XMLID_40_\" class=\"st3\"
                                                        d=\"M74.9,45.2L49.5,63.5c-0.3,0.2-0.7,0.2-1.1,0L23.2,45.2\" />
                                                </g>
                                            </g>
                                        </svg>

                                        <p class=\"text-muted font-13 mt-2\"> A email has been send to
                                            <b>youremail@domain.com</b>.
                                            Please check for an email from company and click on the included link to
                                            reset your password.
                                        </p>

                                        <a href=\"index.html\"
                                            class=\"btn btn-md btn-block btn-primary waves-effect waves-light mt-4\">Back
                                            to Home</a>
                                    </div>




                                </div>
                            </div>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->
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


<!-- Mirrored from coderthemes.com/adminox/layouts/vertical/page-confirm-mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 04:11:06 GMT -->

</html>", "admin/confirm-mail.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\confirm-mail.html.twig");
    }
}
