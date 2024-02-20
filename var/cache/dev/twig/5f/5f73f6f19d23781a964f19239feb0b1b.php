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

/* email/activation.html.twig */
class __TwigTemplate_de803a612ae6a26b42dd69577f81bdf4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/activation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/activation.html.twig"));

        // line 1
        echo "<style type=\"text/css\">
\t\t
\t\ttable {
\t\t\tborder-collapse: separate;
\t\t}

\t\ta,
\t\ta:link,
\t\ta:visited {
\t\t\ttext-decoration: none;
\t\t\tcolor: #488dc6
\t\t}

\t\th2,
\t\th2 a,
\t\th2 a:visited,
\t\th3,
\t\th3 a,
\t\th3 a:visited,
\t\th4,
\t\th5,
\t\th6,
\t\t.t_cht {
\t\t\tcolor: #333333 !important
\t\t}

\t\tp {
\t\t\tmargin-bottom: 0
\t\t}

\t\t.ExternalClass p,
\t\t.ExternalClass span,
\t\t.ExternalClass font,
\t\t.ExternalClass td {
\t\t\tline-height: 100%
\t\t}

\t\t/**This is to center your email in Outlook.com************/
\t\t.ExternalClass {
\t\t\twidth: 100%;
\t\t}

\t\t/* General Resets */
\t\t#outlook a {
\t\t\tpadding: 0;
\t\t}

\t\tbody,
\t\t#body-table {
\t\t\theight: 100% !important;
\t\t\twidth: 100% !important;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 0;
\t\t\tline-height: 100% !important;
\t\t\tfont-family: Arial, Helvetica, sans-serif;
\t\t\tfont-size: 13px;
\t\t}

\t\timg,
\t\ta img {
\t\t\tborder: 0;
\t\t\toutline: none;
\t\t\ttext-decoration: none;
\t\t}

\t\t.image-fix {
\t\t\tdisplay: block;
\t\t}

\t\ttable,
\t\ttd {
\t\t\tborder-collapse: collapse;
\t\t}

\t\t/* Client Specific Resets */
\t\t.ReadMsgBody {
\t\t\twidth: 100%;
\t\t}

\t\t.ExternalClass {
\t\t\twidth: 100%;
\t\t}

\t\t.ExternalClass,
\t\t.ExternalClass p,
\t\t.ExternalClass span,
\t\t.ExternalClass font,
\t\t.ExternalClass td,
\t\t.ExternalClass div {
\t\t\tline-height: 100% !important;
\t\t}

\t\t.ExternalClass * {
\t\t\tline-height: 100% !important;
\t\t}

\t\ttable,
\t\ttd {
\t\t\tmso-table-lspace: 0pt;
\t\t\tmso-table-rspace: 0pt;
\t\t}

\t\timg {
\t\t\toutline: none;
\t\t\tborder: none;
\t\t\ttext-decoration: none;
\t\t\t-ms-interpolation-mode: bicubic;
\t\t}

\t\tbody,
\t\ttable,
\t\ttd,
\t\tp,
\t\ta,
\t\tli,
\t\tblockquote {
\t\t\t-ms-text-size-adjust: 100%;
\t\t\t-webkit-text-size-adjust: 100%;
\t\t}

\t\tbody.outlook img {
\t\t\twidth: auto !important;
\t\t\tmax-width: none !important;
\t\t}

\t\t/* Start Template Styles */
\t\t/* Main */
\t\tbody {
\t\t\t-webkit-text-size-adjust: 100%;
\t\t\t-ms-text-size-adjust: 100%;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\t-webkit-font-smoothing: antialiased;
\t\t}

\t\tbody,
\t\t#body-table {
\t\t\tbackground-color: #e8e8e8 margin:0 auto !important;
\t\t\t;
\t\t\tmargin: 0 auto !important;
\t\t\ttext-align: center !important;
\t\t}

\t\tp {
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\tline-height: 24px;
\t\t\tfont-family: Arial, Helvetica, sans-serif;
\t\t}

\t\ta,
\t\ta:link {
\t\t\tcolor: #1c344d;
\t\t\ttext-decoration: none !important;
\t\t}

\t\t.footer-link a,
\t\t.nav-link a {
\t\t\tcolor: #fff6e5;
\t\t}

\t\t/* Yahoo Mail */
\t\t.thread-item.expanded .thread-body {
\t\t\tbackground-color: #edf6ea !important;
\t\t}

\t\t.thread-item.expanded .thread-body .body,
\t\t.msg-body {
\t\t\tdisplay: block !important;
\t\t}

\t\t#body-table .undoreset table {
\t\t\tdisplay: table !important;
\t\t\ttable-layout: fixed !important;
\t\t}

\t\t/* Start Media Queries */
\t\t@media only screen and (max-width: 640px) {

\t\t\ta[href^=\"tel\"],
\t\t\ta[href^=\"sms\"] {
\t\t\t\ttext-decoration: none;
\t\t\t\tpointer-events: none;
\t\t\t\tcursor: default;
\t\t\t}

\t\t\t.mobile_link a[href^=\"tel\"],
\t\t\t.mobile_link a[href^=\"sms\"] {
\t\t\t\ttext-decoration: default;
\t\t\t\tpointer-events: auto;
\t\t\t\tcursor: default;
\t\t\t}

\t\t\t*[class].full-width {
\t\t\t\twidth: 100% !important;
\t\t\t}

\t\t\t*[class].mobile-width {
\t\t\t\twidth: 440px !important;
\t\t\t\tpadding: 0 4px;
\t\t\t}

\t\t\t*[class].content-width {
\t\t\t\twidth: 360px !important;
\t\t\t}

\t\t\t*[class].content-width-menu {
\t\t\t\twidth: 360px !important;
\t\t\t}

\t\t\t*[class].center {
\t\t\t\ttext-align: center !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].center-stack {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t\ttext-align: center !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].stack {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].gallery {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t}

\t\t\t*[class].fluid-img {
\t\t\t\theight: auto !important;
\t\t\t\tmax-width: 600px !important;
\t\t\t\twidth: 100% !important;
\t\t\t}

\t\t\t*[class].block {
\t\t\t\tdisplay: block !important;
\t\t\t}

\t\t\t*[class].midaling {
\t\t\t\twidth: 100% !important;
\t\t\t\tborder: none !important;
\t\t\t}

\t\t\t*[class].emailImage {
\t\t\t\theight: auto !important;
\t\t\t\tmax-width: 600px !important;
\t\t\t\twidth: 100% !important;
\t\t\t}
\t\t}

\t\t@media only screen and (max-width: 480px) {
\t\t\t*[class].full-width {
\t\t\t\twidth: 100% !important;
\t\t\t}

\t\t\t*[class].mobile-width {
\t\t\t\twidth: 320px !important;
\t\t\t\tpadding: 0 4px;
\t\t\t}

\t\t\t*[class].content-width {
\t\t\t\twidth: 240px !important;
\t\t\t}

\t\t\t*[class].content-width-menu {
\t\t\t\twidth: 320px !important;
\t\t\t}

\t\t\t*[class].navlink {
\t\t\t\tfont-size: 13px !important;
\t\t\t}

\t\t\t*[class].center {
\t\t\t\ttext-align: center !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].center-stack {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t\ttext-align: center !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].stack {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].gallery {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t}

\t\t\t*[class].fluid-img {
\t\t\t\theight: auto !important;
\t\t\t\tmax-width: 600px !important;
\t\t\t\twidth: 100% !important;
\t\t\t\tmin-width: 320px !important;
\t\t\t}

\t\t\t*[class].midaling {
\t\t\t\twidth: 100% !important;
\t\t\t\tborder: none !important;
\t\t\t}

\t\t\t*[class].navlink {
\t\t\t\twidth: 600px !important;
\t\t\t\tborder: none !important;
\t\t\t}

\t\t\t*[class].footer_link {
\t\t\t\tdisplay: block !important;
\t\t\t\tmargin-bottom: 5px !important;
\t\t\t}

\t\t\t*[class].hide {
\t\t\t\tdisplay: none !important;
\t\t\t}
\t\t}

\t\t@media only screen and (max-width: 320px) {
\t\t\t*[class].full-width {
\t\t\t\twidth: 100% !important;
\t\t\t}

\t\t\t*[class].mobile-width {
\t\t\t\twidth: 100% !important;
\t\t\t\tpadding: 0 4px;
\t\t\t}

\t\t\t*[class].content-width {
\t\t\t\twidth: 240px !important;
\t\t\t}

\t\t\t*[class].center {
\t\t\t\ttext-align: center !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].center-stack {
\t\t\t\tpadding-bottom: 30px !important;
\t\t\t\ttext-align: center !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].stack {
\t\t\t\tpadding-bottom: 30px !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].gallery {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t}

\t\t\t*[class].fluid-img {
\t\t\t\theight: auto !important;
\t\t\t\tmax-width: 600px !important;
\t\t\t\twidth: 100% !important;
\t\t\t\tmin-width: 320px !important;
\t\t\t}

\t\t\t*[class].midaling {
\t\t\t\twidth: 100% !important;
\t\t\t\tborder: none !important;
\t\t\t}
\t\t}
</style>
\t<table id=\"body-table\" align=\"center\" width=\"100%\" bgcolor=\"#e6e5e7\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
\t\tstyle=\"table-layout:fixed;\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<!-- Début de l'espace -->
\t\t\t\t\t<table width=\"100%\" bgcolor=\"#e8e8e8\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"full-width\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td height=\"28\" align=\"center\"
\t\t\t\t\t\t\t\t\tstyle=\"font-family: Arial, Helvetica, sans-serif;font-size:11px; font-weight:normal; color:#7f8c8d;\">

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t<!-- Fin de l'espace -->
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td valign=\"top\" bgcolor=\"#e8e8e8\" align=\"center\">
\t\t\t\t\t<table width=\"600\" bgcolor=\"#ffffff\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
\t\t\t\t\t\tclass=\"mobile-width\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td valign=\"top\" bgcolor=\"#ffffff\" align=\"center\">
\t\t\t\t\t\t\t\t\t<!-- Début de l'espace -->
\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"full-width\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"26\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<!-- Fin de l'espace -->

\t\t\t\t\t\t\t\t\t<!-- Section 1 Débute / Logo et réseaux sociaux ================ -->
\t\t\t\t\t\t\t\t\t<table width=\"550\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
\t\t\t\t\t\t\t\t\t\tclass=\"content-width-menu\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"25\" valign=\"middle\" align=\"left\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Début du logo -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"160\" align=\"left\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder=\"0\" class=\"full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"34\" valign=\"middle\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"center-stack\"><a href=\"#\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"img/logo.png\" width=\"160\" height=\"34\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\" /></a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Fin du logo -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Début des réseaux sociaux -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<table align=\"right\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"content-width-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"34\" valign=\"bottom\" align=\"right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"text-decoration: none; border:0;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#\"><img src=\"img/fb_bt.jpg\" width=\"27\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\theight=\"27\" alt=\"Facebook\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"text-decoration: none; border:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#\"><img src=\"img/google_pl_bt.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"27\" height=\"27\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Google plus\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"text-decoration: none; border:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#\"><img src=\"img/twitter_bt.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"27\" height=\"27\" alt=\"Youtube\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Fin des réseaux sociaux -->
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<!-- Section 1 Fin / Logo et réseaux sociaux ========================= -->

\t\t\t\t\t\t\t\t\t<!-- Début de l'espace ====================== -->
\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"full-width\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"25\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<!-- Fin de l'espace ===================== -->


\t\t\t\t\t\t\t\t\t<!-- Section de présentation=============== -->
\t\t\t\t\t\t\t\t\t<table width=\"600\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
\t\t\t\t\t\t\t\t\t\tclass=\"mobile-width\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Start Block Content -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"550\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder=\"0\" class=\"content-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Start Column 1 -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" align=\"center\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" border=\"0\" class=\"full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"30\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"img/logo_small.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"58\" height=\"38\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Image\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"10\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-size:10px; mso-line-height-rule:exactly; line-height:10px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"font_fix\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-size:16px; mso-line-height-rule:exactly; line-height:20px; color:#555555; font-weight:bold; font-family: 'Montserrat', sans-serif;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-size:20px; text-transform:uppercase;\">Finalisez
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvotre inscription</strong><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMerci de choisir nos services. Pour
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfinaliser la création de votre
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcompte, veuillez cliquer sur le
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tlien ci-dessous :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"20\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"line-height:20px; \"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"20\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-size:20px; mso-line-height-rule:exactly; line-height:20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-radius:3px; color:#ffffff; display:block; font-family: Arial, Helvetica, sans-serif; font-size:12px; line-height:12px; text-align:center; text-decoration:none; padding-top: 10px; padding-bottom: 10px; width:110px; -webkit-text-size-adjust:none; background-color:#51bce6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"color:#ffffff; font-family: Arial, Helvetica, sans-serif; font-size:12px; text-decoration:none !important\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verify_user", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 530, $this->source); })())])), "html", null, true);
        echo "\">Finaliser</a>
                                                                                                         
                                                                                                        </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"30\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Column 1 -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Block Content -->
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table><!-- End Section présentation ================== -->


\t\t\t\t\t\t\t\t\t<!-- Start footer ================= -->
\t\t\t\t\t\t\t\t\t<table width=\"600\" bgcolor=\"#76BA1B\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\tborder=\"0\" class=\"mobile-width\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Start Block Content -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"550\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder=\"0\" class=\"content-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Start Column 1 -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table align=\"center\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" border=\"0\" class=\"full-width\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"50\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"font_fix\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-size:14px; height:20px; color:#ffffff; font-weight:normal; font-family: 'Montserrat', sans-serif;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\">Contactez-nous</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"font_fix\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-family: 'Montserrat', sans-serif; font-size:28px;mso-line-height-rule:exactly; line-height:28px; font-weight:bold; color:#ffffff;text-decoration:none !important; \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\">+216 00 11 22 33</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"font_fix\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-size:12px; font-family: 'Montserrat', sans-serif; line-height:14px; color:#ffffff; font-weight:bold; padding-top:5px\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"><a href=\"#\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:#ffffff;text-decoration:none !important;\">info@ecotourism.com</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t- <a href=\"#\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:#ffffff;text-decoration:none !important; \">www.ecotourism.com</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Column 1 -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Block Content -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Section img footer -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<table bgcolor=\"#76BA1B\" width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" border=\"0\" class=\"full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"bottom\" align=\"left\" height=\"71\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Frontend/img/bg_footer.jpg")), "html", null, true);
        echo "\" class=\"emailImage\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Main banner\" border=\"0\" width=\"600\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\theight=\"71\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Section img footer  -->

\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table> <!-- End footer ==================-->

\t\t\t\t\t\t\t\t\t<!-- Start second footer ============ -->
\t\t\t\t\t\t\t\t\t<table width=\"600\" bgcolor=\"#464646\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\tborder=\"0\" class=\"mobile-width\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Start Space -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"550\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder=\"0\" class=\"content-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" valign=\"middle\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-family: Arial, Helvetica, sans-serif;font-size:11px; font-weight:normal; color:#cccccc; padding-top:10px; padding-bottom:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Droits d'auteur © 2024
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEco-tourism</strong><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSi vous souhaitez vous désabonner, veuillez
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:#ffffff; text-decoration:underline\">cliquer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tici</a>.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Space -->
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table><!-- End Second footer =========== -->
\t\t\t\t\t\t\t\t\t<table width=\"100%\" bgcolor=\"#e8e8e8\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
\t\t\t\t\t\t\t\t\t\tclass=\"full-width\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"28\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-family: Arial, Helvetica, sans-serif;font-size:11px; font-weight:normal; color:#7f8c8d;\">

\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table><!-- End main table white containe -->
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "email/activation.html.twig";
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
        return array (  658 => 611,  574 => 530,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
\t\t
\t\ttable {
\t\t\tborder-collapse: separate;
\t\t}

\t\ta,
\t\ta:link,
\t\ta:visited {
\t\t\ttext-decoration: none;
\t\t\tcolor: #488dc6
\t\t}

\t\th2,
\t\th2 a,
\t\th2 a:visited,
\t\th3,
\t\th3 a,
\t\th3 a:visited,
\t\th4,
\t\th5,
\t\th6,
\t\t.t_cht {
\t\t\tcolor: #333333 !important
\t\t}

\t\tp {
\t\t\tmargin-bottom: 0
\t\t}

\t\t.ExternalClass p,
\t\t.ExternalClass span,
\t\t.ExternalClass font,
\t\t.ExternalClass td {
\t\t\tline-height: 100%
\t\t}

\t\t/**This is to center your email in Outlook.com************/
\t\t.ExternalClass {
\t\t\twidth: 100%;
\t\t}

\t\t/* General Resets */
\t\t#outlook a {
\t\t\tpadding: 0;
\t\t}

\t\tbody,
\t\t#body-table {
\t\t\theight: 100% !important;
\t\t\twidth: 100% !important;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 0;
\t\t\tline-height: 100% !important;
\t\t\tfont-family: Arial, Helvetica, sans-serif;
\t\t\tfont-size: 13px;
\t\t}

\t\timg,
\t\ta img {
\t\t\tborder: 0;
\t\t\toutline: none;
\t\t\ttext-decoration: none;
\t\t}

\t\t.image-fix {
\t\t\tdisplay: block;
\t\t}

\t\ttable,
\t\ttd {
\t\t\tborder-collapse: collapse;
\t\t}

\t\t/* Client Specific Resets */
\t\t.ReadMsgBody {
\t\t\twidth: 100%;
\t\t}

\t\t.ExternalClass {
\t\t\twidth: 100%;
\t\t}

\t\t.ExternalClass,
\t\t.ExternalClass p,
\t\t.ExternalClass span,
\t\t.ExternalClass font,
\t\t.ExternalClass td,
\t\t.ExternalClass div {
\t\t\tline-height: 100% !important;
\t\t}

\t\t.ExternalClass * {
\t\t\tline-height: 100% !important;
\t\t}

\t\ttable,
\t\ttd {
\t\t\tmso-table-lspace: 0pt;
\t\t\tmso-table-rspace: 0pt;
\t\t}

\t\timg {
\t\t\toutline: none;
\t\t\tborder: none;
\t\t\ttext-decoration: none;
\t\t\t-ms-interpolation-mode: bicubic;
\t\t}

\t\tbody,
\t\ttable,
\t\ttd,
\t\tp,
\t\ta,
\t\tli,
\t\tblockquote {
\t\t\t-ms-text-size-adjust: 100%;
\t\t\t-webkit-text-size-adjust: 100%;
\t\t}

\t\tbody.outlook img {
\t\t\twidth: auto !important;
\t\t\tmax-width: none !important;
\t\t}

\t\t/* Start Template Styles */
\t\t/* Main */
\t\tbody {
\t\t\t-webkit-text-size-adjust: 100%;
\t\t\t-ms-text-size-adjust: 100%;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\t-webkit-font-smoothing: antialiased;
\t\t}

\t\tbody,
\t\t#body-table {
\t\t\tbackground-color: #e8e8e8 margin:0 auto !important;
\t\t\t;
\t\t\tmargin: 0 auto !important;
\t\t\ttext-align: center !important;
\t\t}

\t\tp {
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\tline-height: 24px;
\t\t\tfont-family: Arial, Helvetica, sans-serif;
\t\t}

\t\ta,
\t\ta:link {
\t\t\tcolor: #1c344d;
\t\t\ttext-decoration: none !important;
\t\t}

\t\t.footer-link a,
\t\t.nav-link a {
\t\t\tcolor: #fff6e5;
\t\t}

\t\t/* Yahoo Mail */
\t\t.thread-item.expanded .thread-body {
\t\t\tbackground-color: #edf6ea !important;
\t\t}

\t\t.thread-item.expanded .thread-body .body,
\t\t.msg-body {
\t\t\tdisplay: block !important;
\t\t}

\t\t#body-table .undoreset table {
\t\t\tdisplay: table !important;
\t\t\ttable-layout: fixed !important;
\t\t}

\t\t/* Start Media Queries */
\t\t@media only screen and (max-width: 640px) {

\t\t\ta[href^=\"tel\"],
\t\t\ta[href^=\"sms\"] {
\t\t\t\ttext-decoration: none;
\t\t\t\tpointer-events: none;
\t\t\t\tcursor: default;
\t\t\t}

\t\t\t.mobile_link a[href^=\"tel\"],
\t\t\t.mobile_link a[href^=\"sms\"] {
\t\t\t\ttext-decoration: default;
\t\t\t\tpointer-events: auto;
\t\t\t\tcursor: default;
\t\t\t}

\t\t\t*[class].full-width {
\t\t\t\twidth: 100% !important;
\t\t\t}

\t\t\t*[class].mobile-width {
\t\t\t\twidth: 440px !important;
\t\t\t\tpadding: 0 4px;
\t\t\t}

\t\t\t*[class].content-width {
\t\t\t\twidth: 360px !important;
\t\t\t}

\t\t\t*[class].content-width-menu {
\t\t\t\twidth: 360px !important;
\t\t\t}

\t\t\t*[class].center {
\t\t\t\ttext-align: center !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].center-stack {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t\ttext-align: center !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].stack {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].gallery {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t}

\t\t\t*[class].fluid-img {
\t\t\t\theight: auto !important;
\t\t\t\tmax-width: 600px !important;
\t\t\t\twidth: 100% !important;
\t\t\t}

\t\t\t*[class].block {
\t\t\t\tdisplay: block !important;
\t\t\t}

\t\t\t*[class].midaling {
\t\t\t\twidth: 100% !important;
\t\t\t\tborder: none !important;
\t\t\t}

\t\t\t*[class].emailImage {
\t\t\t\theight: auto !important;
\t\t\t\tmax-width: 600px !important;
\t\t\t\twidth: 100% !important;
\t\t\t}
\t\t}

\t\t@media only screen and (max-width: 480px) {
\t\t\t*[class].full-width {
\t\t\t\twidth: 100% !important;
\t\t\t}

\t\t\t*[class].mobile-width {
\t\t\t\twidth: 320px !important;
\t\t\t\tpadding: 0 4px;
\t\t\t}

\t\t\t*[class].content-width {
\t\t\t\twidth: 240px !important;
\t\t\t}

\t\t\t*[class].content-width-menu {
\t\t\t\twidth: 320px !important;
\t\t\t}

\t\t\t*[class].navlink {
\t\t\t\tfont-size: 13px !important;
\t\t\t}

\t\t\t*[class].center {
\t\t\t\ttext-align: center !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].center-stack {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t\ttext-align: center !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].stack {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].gallery {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t}

\t\t\t*[class].fluid-img {
\t\t\t\theight: auto !important;
\t\t\t\tmax-width: 600px !important;
\t\t\t\twidth: 100% !important;
\t\t\t\tmin-width: 320px !important;
\t\t\t}

\t\t\t*[class].midaling {
\t\t\t\twidth: 100% !important;
\t\t\t\tborder: none !important;
\t\t\t}

\t\t\t*[class].navlink {
\t\t\t\twidth: 600px !important;
\t\t\t\tborder: none !important;
\t\t\t}

\t\t\t*[class].footer_link {
\t\t\t\tdisplay: block !important;
\t\t\t\tmargin-bottom: 5px !important;
\t\t\t}

\t\t\t*[class].hide {
\t\t\t\tdisplay: none !important;
\t\t\t}
\t\t}

\t\t@media only screen and (max-width: 320px) {
\t\t\t*[class].full-width {
\t\t\t\twidth: 100% !important;
\t\t\t}

\t\t\t*[class].mobile-width {
\t\t\t\twidth: 100% !important;
\t\t\t\tpadding: 0 4px;
\t\t\t}

\t\t\t*[class].content-width {
\t\t\t\twidth: 240px !important;
\t\t\t}

\t\t\t*[class].center {
\t\t\t\ttext-align: center !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].center-stack {
\t\t\t\tpadding-bottom: 30px !important;
\t\t\t\ttext-align: center !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].stack {
\t\t\t\tpadding-bottom: 30px !important;
\t\t\t\theight: auto !important;
\t\t\t}

\t\t\t*[class].gallery {
\t\t\t\tpadding-bottom: 20px !important;
\t\t\t}

\t\t\t*[class].fluid-img {
\t\t\t\theight: auto !important;
\t\t\t\tmax-width: 600px !important;
\t\t\t\twidth: 100% !important;
\t\t\t\tmin-width: 320px !important;
\t\t\t}

\t\t\t*[class].midaling {
\t\t\t\twidth: 100% !important;
\t\t\t\tborder: none !important;
\t\t\t}
\t\t}
</style>
\t<table id=\"body-table\" align=\"center\" width=\"100%\" bgcolor=\"#e6e5e7\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
\t\tstyle=\"table-layout:fixed;\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<!-- Début de l'espace -->
\t\t\t\t\t<table width=\"100%\" bgcolor=\"#e8e8e8\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"full-width\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td height=\"28\" align=\"center\"
\t\t\t\t\t\t\t\t\tstyle=\"font-family: Arial, Helvetica, sans-serif;font-size:11px; font-weight:normal; color:#7f8c8d;\">

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t<!-- Fin de l'espace -->
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td valign=\"top\" bgcolor=\"#e8e8e8\" align=\"center\">
\t\t\t\t\t<table width=\"600\" bgcolor=\"#ffffff\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
\t\t\t\t\t\tclass=\"mobile-width\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td valign=\"top\" bgcolor=\"#ffffff\" align=\"center\">
\t\t\t\t\t\t\t\t\t<!-- Début de l'espace -->
\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"full-width\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"26\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<!-- Fin de l'espace -->

\t\t\t\t\t\t\t\t\t<!-- Section 1 Débute / Logo et réseaux sociaux ================ -->
\t\t\t\t\t\t\t\t\t<table width=\"550\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
\t\t\t\t\t\t\t\t\t\tclass=\"content-width-menu\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"25\" valign=\"middle\" align=\"left\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Début du logo -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"160\" align=\"left\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder=\"0\" class=\"full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"34\" valign=\"middle\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"center-stack\"><a href=\"#\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"img/logo.png\" width=\"160\" height=\"34\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\" /></a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Fin du logo -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Début des réseaux sociaux -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<table align=\"right\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"content-width-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"34\" valign=\"bottom\" align=\"right\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"text-decoration: none; border:0;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#\"><img src=\"img/fb_bt.jpg\" width=\"27\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\theight=\"27\" alt=\"Facebook\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"text-decoration: none; border:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#\"><img src=\"img/google_pl_bt.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"27\" height=\"27\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Google plus\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"text-decoration: none; border:0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#\"><img src=\"img/twitter_bt.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"27\" height=\"27\" alt=\"Youtube\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Fin des réseaux sociaux -->
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<!-- Section 1 Fin / Logo et réseaux sociaux ========================= -->

\t\t\t\t\t\t\t\t\t<!-- Début de l'espace ====================== -->
\t\t\t\t\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"full-width\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"25\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<!-- Fin de l'espace ===================== -->


\t\t\t\t\t\t\t\t\t<!-- Section de présentation=============== -->
\t\t\t\t\t\t\t\t\t<table width=\"600\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
\t\t\t\t\t\t\t\t\t\tclass=\"mobile-width\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Start Block Content -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"550\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder=\"0\" class=\"content-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Start Column 1 -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" align=\"center\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" border=\"0\" class=\"full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"30\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"img/logo_small.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"58\" height=\"38\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Image\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"10\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-size:10px; mso-line-height-rule:exactly; line-height:10px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"font_fix\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-size:16px; mso-line-height-rule:exactly; line-height:20px; color:#555555; font-weight:bold; font-family: 'Montserrat', sans-serif;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-size:20px; text-transform:uppercase;\">Finalisez
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvotre inscription</strong><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMerci de choisir nos services. Pour
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfinaliser la création de votre
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcompte, veuillez cliquer sur le
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tlien ci-dessous :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"20\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"line-height:20px; \"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"20\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-size:20px; mso-line-height-rule:exactly; line-height:20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" border=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-radius:3px; color:#ffffff; display:block; font-family: Arial, Helvetica, sans-serif; font-size:12px; line-height:12px; text-align:center; text-decoration:none; padding-top: 10px; padding-bottom: 10px; width:110px; -webkit-text-size-adjust:none; background-color:#51bce6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"color:#ffffff; font-family: Arial, Helvetica, sans-serif; font-size:12px; text-decoration:none !important\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"{{absolute_url(path('verify_user',{token: token}))}}\">Finaliser</a>
                                                                                                         
                                                                                                        </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"30\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Column 1 -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Block Content -->
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table><!-- End Section présentation ================== -->


\t\t\t\t\t\t\t\t\t<!-- Start footer ================= -->
\t\t\t\t\t\t\t\t\t<table width=\"600\" bgcolor=\"#76BA1B\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\tborder=\"0\" class=\"mobile-width\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Start Block Content -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"550\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder=\"0\" class=\"content-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\" align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Start Column 1 -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table align=\"center\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" border=\"0\" class=\"full-width\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"50\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"font_fix\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-size:14px; height:20px; color:#ffffff; font-weight:normal; font-family: 'Montserrat', sans-serif;\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\">Contactez-nous</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"font_fix\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-family: 'Montserrat', sans-serif; font-size:28px;mso-line-height-rule:exactly; line-height:28px; font-weight:bold; color:#ffffff;text-decoration:none !important; \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\">+216 00 11 22 33</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"font_fix\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-size:12px; font-family: 'Montserrat', sans-serif; line-height:14px; color:#ffffff; font-weight:bold; padding-top:5px\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\"><a href=\"#\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:#ffffff;text-decoration:none !important;\">info@ecotourism.com</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t- <a href=\"#\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:#ffffff;text-decoration:none !important; \">www.ecotourism.com</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Column 1 -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Block Content -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Section img footer -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<table bgcolor=\"#76BA1B\" width=\"100%\" cellspacing=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tcellpadding=\"0\" border=\"0\" class=\"full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td valign=\"bottom\" align=\"left\" height=\"71\"><img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{absolute_url(asset('Frontend/img/bg_footer.jpg'))}}\" class=\"emailImage\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Main banner\" border=\"0\" width=\"600\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\theight=\"71\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Section img footer  -->

\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table> <!-- End footer ==================-->

\t\t\t\t\t\t\t\t\t<!-- Start second footer ============ -->
\t\t\t\t\t\t\t\t\t<table width=\"600\" bgcolor=\"#464646\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\tborder=\"0\" class=\"mobile-width\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Start Space -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"550\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tborder=\"0\" class=\"content-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\" valign=\"middle\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-family: Arial, Helvetica, sans-serif;font-size:11px; font-weight:normal; color:#cccccc; padding-top:10px; padding-bottom:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Droits d'auteur © 2024
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEco-tourism</strong><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSi vous souhaitez vous désabonner, veuillez
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"color:#ffffff; text-decoration:underline\">cliquer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tici</a>.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Space -->
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table><!-- End Second footer =========== -->
\t\t\t\t\t\t\t\t\t<table width=\"100%\" bgcolor=\"#e8e8e8\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
\t\t\t\t\t\t\t\t\t\tclass=\"full-width\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td height=\"28\" align=\"center\"
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-family: Arial, Helvetica, sans-serif;font-size:11px; font-weight:normal; color:#7f8c8d;\">

\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table><!-- End main table white containe -->
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>", "email/activation.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\email\\activation.html.twig");
    }
}
