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

/* admin/liste.html.twig */
class __TwigTemplate_310bff480e1f8402619f5415d4f3d655 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/liste.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/liste.html.twig", 1);
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

        echo "liste des utilisateurs ";
        
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
<style>

.border-eco {
    border: 2px solid #77B82A; 
}
.border-eco:focus {
    border-color: #A7C94D; 
}
.btn-custom {
    background-color: #77B82A; 
    color: #fff; 
    border: 2px solid #77B82A; 
}

.btn-custom:hover {
    background-color: #6C9C22; 
    border: 2px solid #6C9C22; 
    color: #fff; 
}
 .center-container {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: auto !important;
    }
      .no-users-message {
        font-size: 24px;  /* Ajustez la taille de police selon vos besoins */
        animation: blink 1s infinite;  /* Animation de battement des cils */
    }

    @keyframes blink {
        50% {
            opacity: 0.5;
        }
    }
</style>
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
                                            <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Dashboard</a></li>
                                           
                                            <li class=\"breadcrumb-item active\">Liste des utilisateurs</li>
                                        </ol>
                                    </div>
                                    <h4 class=\"page-title\">Liste</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <a href=\"#custom-modal\" class=\"btn btn-primary waves-effect waves-light mb-3\" data-animation=\"fadein\" data-plugin=\"custommodal\"
                                   data-overlaySpeed=\"200\" data-overlayColor=\"#36404a\"><i class=\"md md-add\"></i> Ajouter un admin</a>
                            </div><!-- end col -->
                            <div class=\"col-sm-8\">
                                <div class=\"text-right\">
                                    <ul class=\"pagination pagination-split mt-0 float-right\">
                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                                                <span aria-hidden=\"true\">«</span>
                                                <span class=\"sr-only\">Previous</span>
                                            </a>
                                        </li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                                        <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">2</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                                                <span aria-hidden=\"true\">»</span>
                                                <span class=\"sr-only\">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                  <div class=\"row\">
                    <div class=\"col-md-8 mx-auto rounded p-4 b-search\">
                        <form method=\"post\" class=\"p-3\" action=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_users");
        echo "\">
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control form-control-lg rounded-0 border-eco\" placeholder=\"Rechercher...\" autocomplete=\"off\" required>
                                <div class=\"input-group-append\">
                                    <input type=\"submit\" name=\"submit\" value=\"Search\" class=\"btn btn-custom btn-lg rounded-0\">
                                </div>
                            </div>
                        </form>
                    </div>
                   
                </div>


                        <div class=\"row\">
                             ";
        // line 114
        if ((array_key_exists("users", $context) && (twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 114, $this->source); })())) > 0))) {
            // line 115
            echo "                             ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 115, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 116
                echo "                            <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <div class=\"member-card-alt\">
                                        <div class=\"avatar-xxl member-thumb mb-2 float-left\">
                                            <img src=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/profils/mini/300x300-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "images", [], "any", false, false, false, 120), 0, [], "array", false, false, false, 120), "nom", [], "any", false, false, false, 120))), "html", null, true);
                echo "\" class=\"img-thumbnail\" alt=\"profile-image- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nom", [], "any", false, false, false, 120), "html", null, true);
                echo "\">
                                            <i class=\"mdi mdi-star-circle member-star text-success\" title=\"verified user\"></i>
                                             <p class=\"text-muted font-13 mt-40\"></p><br>

                                            <a href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_block", ["id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 124)]), "html", null, true);
                echo "\" class=\"btn btn-secondary btn-sm mt-2 waves-effect waves-light\">
                                                <i class=\"fas fa-block\"></i> voir ses voyages
                                            </a>
                                           
                                        </div>

                                        <div class=\"member-card-alt-info\">
                                           <h4 class=\"mb-1 mt-0\">";
                // line 131
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "nom", [], "any", false, false, false, 131) . " ") . twig_get_attribute($this->env, $this->source, $context["row"], "prenom", [], "any", false, false, false, 131)), "html", null, true);
                echo "</h4>

                                          <p class=\"text-muted\">@ExplorateurEco <span> | 7 voyage(s)</span> <span> <a href=\"#\" class=\"text-custom\">ecotourism.com</a> </span></p>
                                           <p class=\"text-muted font-13\">
                                                🌿 Explorateur Éco pour un voyage durable. 🍃 Passionné par la nature, je laisse des empreintes positives. Ensemble, impactons le monde tout en profitant des merveilles du voyage éco-tourism. 🌍✈️ #VoyageEco #NatureLover
                                            </p>




                                            <ul class=\"social-links list-inline mt-3\">
                                                <li class=\"list-inline-item\">
                                                    <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"#\" data-original-title=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                    <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"#\" data-original-title=\"Twitter\"><i class=\"fab fa-twitter\"></i></a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                    <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"#\" data-original-title=\"Skype\"><i class=\"fab fa-skype\"></i></a>
                                                </li>
                                            </ul>

                                           
                                           
                                            <a href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_block", ["id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 155)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm mt-2 waves-effect waves-light\">
                                                <i class=\"fas fa-block\"></i> bloquer
                                            </a>
                                           <a href=\"#\" class=\"btn btn-link text-danger btn-sm mt-2 waves-effect waves-light\" onclick=\"confirmDelete('";
                // line 158
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_user", ["id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 158)]), "html", null, true);
                echo "')\">
                                                <i class=\"fas fa-trash-alt\"></i> delete
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div> 
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "                            ";
        } else {
            // line 171
            echo "                            <div class=\"center-container\">
                            <div class=\"no-users-message\">
                                😕 Aucun utilisateur trouvé: \" ";
            // line 173
            echo twig_escape_filter($this->env, (isset($context["recherche"]) || array_key_exists("recherche", $context) ? $context["recherche"] : (function () { throw new RuntimeError('Variable "recherche" does not exist.', 173, $this->source); })()), "html", null, true);
            echo " \"
                            </div>
                        </div>

                            ";
        }
        // line 178
        echo "                        </div>
                     
                        
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
        return "admin/liste.html.twig";
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
        return array (  299 => 178,  291 => 173,  287 => 171,  284 => 170,  266 => 158,  260 => 155,  233 => 131,  223 => 124,  214 => 120,  208 => 116,  203 => 115,  201 => 114,  184 => 100,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}liste des utilisateurs {% endblock %}

{% block body %}

<style>

.border-eco {
    border: 2px solid #77B82A; 
}
.border-eco:focus {
    border-color: #A7C94D; 
}
.btn-custom {
    background-color: #77B82A; 
    color: #fff; 
    border: 2px solid #77B82A; 
}

.btn-custom:hover {
    background-color: #6C9C22; 
    border: 2px solid #6C9C22; 
    color: #fff; 
}
 .center-container {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: auto !important;
    }
      .no-users-message {
        font-size: 24px;  /* Ajustez la taille de police selon vos besoins */
        animation: blink 1s infinite;  /* Animation de battement des cils */
    }

    @keyframes blink {
        50% {
            opacity: 0.5;
        }
    }
</style>
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
                                            <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">Dashboard</a></li>
                                           
                                            <li class=\"breadcrumb-item active\">Liste des utilisateurs</li>
                                        </ol>
                                    </div>
                                    <h4 class=\"page-title\">Liste</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <a href=\"#custom-modal\" class=\"btn btn-primary waves-effect waves-light mb-3\" data-animation=\"fadein\" data-plugin=\"custommodal\"
                                   data-overlaySpeed=\"200\" data-overlayColor=\"#36404a\"><i class=\"md md-add\"></i> Ajouter un admin</a>
                            </div><!-- end col -->
                            <div class=\"col-sm-8\">
                                <div class=\"text-right\">
                                    <ul class=\"pagination pagination-split mt-0 float-right\">
                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                                                <span aria-hidden=\"true\">«</span>
                                                <span class=\"sr-only\">Previous</span>
                                            </a>
                                        </li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                                        <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">2</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                                                <span aria-hidden=\"true\">»</span>
                                                <span class=\"sr-only\">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                  <div class=\"row\">
                    <div class=\"col-md-8 mx-auto rounded p-4 b-search\">
                        <form method=\"post\" class=\"p-3\" action=\"{{ path('search_users') }}\">
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control form-control-lg rounded-0 border-eco\" placeholder=\"Rechercher...\" autocomplete=\"off\" required>
                                <div class=\"input-group-append\">
                                    <input type=\"submit\" name=\"submit\" value=\"Search\" class=\"btn btn-custom btn-lg rounded-0\">
                                </div>
                            </div>
                        </form>
                    </div>
                   
                </div>


                        <div class=\"row\">
                             {% if users is defined and users | length > 0 %}
                             {% for row in users %}
                            <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <div class=\"member-card-alt\">
                                        <div class=\"avatar-xxl member-thumb mb-2 float-left\">
                                            <img src=\"{{ asset('assets/uploads/profils/mini/300x300-' ~ row.images[0].nom ) }}\" class=\"img-thumbnail\" alt=\"profile-image- {{row.nom}}\">
                                            <i class=\"mdi mdi-star-circle member-star text-success\" title=\"verified user\"></i>
                                             <p class=\"text-muted font-13 mt-40\"></p><br>

                                            <a href=\"{{ path('app_edit_block', {'id': row.id}) }}\" class=\"btn btn-secondary btn-sm mt-2 waves-effect waves-light\">
                                                <i class=\"fas fa-block\"></i> voir ses voyages
                                            </a>
                                           
                                        </div>

                                        <div class=\"member-card-alt-info\">
                                           <h4 class=\"mb-1 mt-0\">{{ row.nom ~ ' ' ~ row.prenom }}</h4>

                                          <p class=\"text-muted\">@ExplorateurEco <span> | 7 voyage(s)</span> <span> <a href=\"#\" class=\"text-custom\">ecotourism.com</a> </span></p>
                                           <p class=\"text-muted font-13\">
                                                🌿 Explorateur Éco pour un voyage durable. 🍃 Passionné par la nature, je laisse des empreintes positives. Ensemble, impactons le monde tout en profitant des merveilles du voyage éco-tourism. 🌍✈️ #VoyageEco #NatureLover
                                            </p>




                                            <ul class=\"social-links list-inline mt-3\">
                                                <li class=\"list-inline-item\">
                                                    <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"#\" data-original-title=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                    <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"#\" data-original-title=\"Twitter\"><i class=\"fab fa-twitter\"></i></a>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                    <a title=\"\" data-placement=\"top\" data-toggle=\"tooltip\" class=\"tooltips\" href=\"#\" data-original-title=\"Skype\"><i class=\"fab fa-skype\"></i></a>
                                                </li>
                                            </ul>

                                           
                                           
                                            <a href=\"{{ path('app_edit_block', {'id': row.id}) }}\" class=\"btn btn-primary btn-sm mt-2 waves-effect waves-light\">
                                                <i class=\"fas fa-block\"></i> bloquer
                                            </a>
                                           <a href=\"#\" class=\"btn btn-link text-danger btn-sm mt-2 waves-effect waves-light\" onclick=\"confirmDelete('{{ path('app_delete_user', {'id': row.id}) }}')\">
                                                <i class=\"fas fa-trash-alt\"></i> delete
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div> 
                            {% endfor %}
                            {% else %}
                            <div class=\"center-container\">
                            <div class=\"no-users-message\">
                                😕 Aucun utilisateur trouvé: \" {{ recherche }} \"
                            </div>
                        </div>

                            {% endif %}
                        </div>
                     
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

              

            </div>
     
          {% endblock %}", "admin/liste.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\admin\\liste.html.twig");
    }
}
