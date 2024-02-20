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

/* client/detailsEvent.html.twig */
class __TwigTemplate_7d706c17b2c6dec471409a603930f294 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/detailsEvent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/detailsEvent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/detailsEvent.html.twig", 1);
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

        echo "Événements | Eco tourism";
        
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
<section class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"img/bg_blog.jpg\" data-natural-width=\"1400\" data-natural-height=\"470\">
    <div class=\"parallax-content-1 opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.6)\">
        <div class=\"animated fadeInDown\">
            <h1>Blog de Voyage</h1>
            <p>Cursus neque cursus curae ante scelerisque vehicula.</p>
        </div>
    </div>
</section>
<!-- Fin de la section -->

<main>
    <div id=\"position\">
        <div class=\"container\">
            <ul>
                <li><a href=\"#\">Accueil</a></li>
                <li><a href=\"#\">Catégorie</a></li>
                <li>Page active</li>
            </ul>
        </div>
    </div>
    <!-- Fin de la position -->
    <div class=\"container margin_60\">
        <div class=\"row\">
            <div class=\"col-lg-9\">
                <div class=\"box_style_1\">
                    <div class=\"post nopadding\">
                        <img src=\"img/blog-1.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <div class=\"post_info clearfix\">
                            <div class=\"post-left\">
                                <ul>
                                    <li><i class=\"icon-calendar-empty\"></i>Le <span>12 Nov 2020</span></li>
                                    <li><i class=\"icon-inbox-alt\"></i>Dans <a href=\"#\">Tours populaires</a></li>
                                    <li><i class=\"icon-tags\"></i>Tags <a href=\"#\">Travaux</a> <a href=\"#\">Personnel</a></li>
                                </ul>
                            </div>
                            <div class=\"post-right\"><i class=\"icon-comment\"></i><a href=\"#\">25 </a>Commentaires</div>
                        </div>
                        <h2>Duis aute irure dolor in reprehenderit</h2>
                        <p>
                            Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.....
                        </p>
                        <p>
                            Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                        </p>
                        <blockquote class=\"styled\">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                            <small>Quelqu'un de célèbre dans <cite title=\"\">Corps de travail</cite></small>
                        </blockquote>
                    </div>
                    <!-- Fin du post -->
                </div>
                <!-- Fin de box_style_1 -->

                <h4>3 commentaires</h4>

                <div id=\"comments\">
                    <ol>
                        <li>
                            <div class=\"avatar\">
                                <a href=\"#\"><img src=\"img/avatar1.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"comment_right clearfix\">
                                <div class=\"comment_info\">
                                    Posté par <a href=\"#\">Anna Smith</a><span>|</span> 25 avr 2019 <span>|</span><a href=\"#\">Répondre</a>
                                </div>
                                <p>
                                    Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <div class=\"avatar\">
                                        <a href=\"#\"><img src=\"img/avatar2.jpg\" alt=\"Image\"></a>
                                    </div>

                                    <div class=\"comment_right clearfix\">
                                        <div class=\"comment_info\">
                                            Posté par <a href=\"#\">Tom Sawyer</a><span>|</span> 25 avr 2019 <span>|</span><a href=\"#\">Répondre</a>
                                        </div>
                                        <p>
                                            Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                        </p>
                                        <p>
                                            Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class=\"avatar\">
                                <a href=\"#\"><img src=\"img/avatar3.jpg\" alt=\"Image\"></a>
                            </div>

                            <div class=\"comment_right clearfix\">
                                <div class=\"comment_info\">
                                    Posté par <a href=\"#\">Adam White</a><span>|</span> 25 avr 2019 <span>|</span><a href=\"#\">Répondre</a>
                                </div>
                                <p>
                                    Cursus tellus quis magna porta adipiscin
                                </p>
                            </div>
                        </li>
                    </ol>
                </div>
                <!-- Fin des commentaires -->

                <h4>Laisser un commentaire</h4>
                <form action=\"#\" method=\"post\">
                    <div class=\"form-group\">
                        <input class=\"form-control style_2\" type=\"text\" name=\"name\" placeholder=\"Entrez votre nom\">
                    </div>
                    <div class=\"form-group\">
                        <input class=\"form-control style_2\" type=\"text\" name=\"mail\" placeholder=\"Entrez votre email\">
                    </div>
                    <div class=\"form-group\">
                        <textarea name=\"message\" class=\"form-control style_2\" style=\"height:150px;\" placeholder=\"Message\"></textarea>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"reset\" class=\"btn_1\" value=\"Effacer le formulaire\" />
                        <input type=\"submit\" class=\"btn_1\" value=\"Poster un commentaire\" />
                    </div>
                </form>
            </div>
            <!-- Fin de col-md-8-->

            <aside class=\"col-lg-3 add_bottom_30\">
                <div class=\"widget\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\" style=\"margin-left:0;\"><i class=\"icon-search\"></i></button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- Fin de la recherche -->
                <hr>
                <div class=\"widget\" id=\"cat_blog\">
                    <h4>Catégories</h4>
                    <ul>
                        <li><a href=\"#\">Lieux à visiter</a></li>
                        <li><a href=\"#\">Tours populaires</a></li>
                        <li><a href=\"#\">Conseils pour les voyageurs</a></li>
                        <li><a href=\"#\">Événements</a></li>
                    </ul>
                </div>
                <!-- Fin du widget -->

                <hr>

                <div class=\"widget\">
                    <h4>Articles récents</h4>
                    <ul class=\"recent_post\">
                        <li>
                            <i class=\"icon-calendar-empty\"></i> 16 juillet 2020
                            <div><a href=\"#\">C'est un fait établi de longue date qu'un lecteur sera distrait </a></div>
                        </li>
                        <li>
                            <i class=\"icon-calendar-empty\"></i> 16 juillet 2020
                            <div><a href=\"#\">C'est un fait établi de longue date qu'un lecteur sera distrait </a></div>
                        </li>
                        <li>
                            <i class=\"icon-calendar-empty\"></i> 16 juillet 2020
                            <div><a href=\"#\">C'est un fait établi de longue date qu'un lecteur sera distrait </a></div>
                        </li>
                    </ul>
                </div>
                <!-- Fin du widget -->
                <hr>
                <div class=\"widget tags\">
                    <h4>Mots-clés</h4>
                    <a href=\"#\">Lorem ipsum</a>
                    <a href=\"#\">Dolor</a>
                    <a href=\"#\">Long établi</a>
                    <a href=\"#\">Sit amet</a>
                    <a href=\"#\">Mots latins</a>
                    <a href=\"#\">Excepteur sint</a>
                </div>
                <!-- Fin du widget -->
            </aside>
            <!-- Fin du aside -->
        </div>
        <!-- Fin de la row -->
    </div>
    <!-- Fin du container -->
</main>
<!-- Fin de main -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/detailsEvent.html.twig";
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Événements | Eco tourism{% endblock %}

{% block body %}

<section class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"img/bg_blog.jpg\" data-natural-width=\"1400\" data-natural-height=\"470\">
    <div class=\"parallax-content-1 opacity-mask\" data-opacity-mask=\"rgba(0, 0, 0, 0.6)\">
        <div class=\"animated fadeInDown\">
            <h1>Blog de Voyage</h1>
            <p>Cursus neque cursus curae ante scelerisque vehicula.</p>
        </div>
    </div>
</section>
<!-- Fin de la section -->

<main>
    <div id=\"position\">
        <div class=\"container\">
            <ul>
                <li><a href=\"#\">Accueil</a></li>
                <li><a href=\"#\">Catégorie</a></li>
                <li>Page active</li>
            </ul>
        </div>
    </div>
    <!-- Fin de la position -->
    <div class=\"container margin_60\">
        <div class=\"row\">
            <div class=\"col-lg-9\">
                <div class=\"box_style_1\">
                    <div class=\"post nopadding\">
                        <img src=\"img/blog-1.jpg\" alt=\"Image\" class=\"img-fluid\">
                        <div class=\"post_info clearfix\">
                            <div class=\"post-left\">
                                <ul>
                                    <li><i class=\"icon-calendar-empty\"></i>Le <span>12 Nov 2020</span></li>
                                    <li><i class=\"icon-inbox-alt\"></i>Dans <a href=\"#\">Tours populaires</a></li>
                                    <li><i class=\"icon-tags\"></i>Tags <a href=\"#\">Travaux</a> <a href=\"#\">Personnel</a></li>
                                </ul>
                            </div>
                            <div class=\"post-right\"><i class=\"icon-comment\"></i><a href=\"#\">25 </a>Commentaires</div>
                        </div>
                        <h2>Duis aute irure dolor in reprehenderit</h2>
                        <p>
                            Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.....
                        </p>
                        <p>
                            Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                        </p>
                        <blockquote class=\"styled\">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                            <small>Quelqu'un de célèbre dans <cite title=\"\">Corps de travail</cite></small>
                        </blockquote>
                    </div>
                    <!-- Fin du post -->
                </div>
                <!-- Fin de box_style_1 -->

                <h4>3 commentaires</h4>

                <div id=\"comments\">
                    <ol>
                        <li>
                            <div class=\"avatar\">
                                <a href=\"#\"><img src=\"img/avatar1.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"comment_right clearfix\">
                                <div class=\"comment_info\">
                                    Posté par <a href=\"#\">Anna Smith</a><span>|</span> 25 avr 2019 <span>|</span><a href=\"#\">Répondre</a>
                                </div>
                                <p>
                                    Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <div class=\"avatar\">
                                        <a href=\"#\"><img src=\"img/avatar2.jpg\" alt=\"Image\"></a>
                                    </div>

                                    <div class=\"comment_right clearfix\">
                                        <div class=\"comment_info\">
                                            Posté par <a href=\"#\">Tom Sawyer</a><span>|</span> 25 avr 2019 <span>|</span><a href=\"#\">Répondre</a>
                                        </div>
                                        <p>
                                            Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                        </p>
                                        <p>
                                            Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class=\"avatar\">
                                <a href=\"#\"><img src=\"img/avatar3.jpg\" alt=\"Image\"></a>
                            </div>

                            <div class=\"comment_right clearfix\">
                                <div class=\"comment_info\">
                                    Posté par <a href=\"#\">Adam White</a><span>|</span> 25 avr 2019 <span>|</span><a href=\"#\">Répondre</a>
                                </div>
                                <p>
                                    Cursus tellus quis magna porta adipiscin
                                </p>
                            </div>
                        </li>
                    </ol>
                </div>
                <!-- Fin des commentaires -->

                <h4>Laisser un commentaire</h4>
                <form action=\"#\" method=\"post\">
                    <div class=\"form-group\">
                        <input class=\"form-control style_2\" type=\"text\" name=\"name\" placeholder=\"Entrez votre nom\">
                    </div>
                    <div class=\"form-group\">
                        <input class=\"form-control style_2\" type=\"text\" name=\"mail\" placeholder=\"Entrez votre email\">
                    </div>
                    <div class=\"form-group\">
                        <textarea name=\"message\" class=\"form-control style_2\" style=\"height:150px;\" placeholder=\"Message\"></textarea>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"reset\" class=\"btn_1\" value=\"Effacer le formulaire\" />
                        <input type=\"submit\" class=\"btn_1\" value=\"Poster un commentaire\" />
                    </div>
                </form>
            </div>
            <!-- Fin de col-md-8-->

            <aside class=\"col-lg-3 add_bottom_30\">
                <div class=\"widget\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\" style=\"margin-left:0;\"><i class=\"icon-search\"></i></button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- Fin de la recherche -->
                <hr>
                <div class=\"widget\" id=\"cat_blog\">
                    <h4>Catégories</h4>
                    <ul>
                        <li><a href=\"#\">Lieux à visiter</a></li>
                        <li><a href=\"#\">Tours populaires</a></li>
                        <li><a href=\"#\">Conseils pour les voyageurs</a></li>
                        <li><a href=\"#\">Événements</a></li>
                    </ul>
                </div>
                <!-- Fin du widget -->

                <hr>

                <div class=\"widget\">
                    <h4>Articles récents</h4>
                    <ul class=\"recent_post\">
                        <li>
                            <i class=\"icon-calendar-empty\"></i> 16 juillet 2020
                            <div><a href=\"#\">C'est un fait établi de longue date qu'un lecteur sera distrait </a></div>
                        </li>
                        <li>
                            <i class=\"icon-calendar-empty\"></i> 16 juillet 2020
                            <div><a href=\"#\">C'est un fait établi de longue date qu'un lecteur sera distrait </a></div>
                        </li>
                        <li>
                            <i class=\"icon-calendar-empty\"></i> 16 juillet 2020
                            <div><a href=\"#\">C'est un fait établi de longue date qu'un lecteur sera distrait </a></div>
                        </li>
                    </ul>
                </div>
                <!-- Fin du widget -->
                <hr>
                <div class=\"widget tags\">
                    <h4>Mots-clés</h4>
                    <a href=\"#\">Lorem ipsum</a>
                    <a href=\"#\">Dolor</a>
                    <a href=\"#\">Long établi</a>
                    <a href=\"#\">Sit amet</a>
                    <a href=\"#\">Mots latins</a>
                    <a href=\"#\">Excepteur sint</a>
                </div>
                <!-- Fin du widget -->
            </aside>
            <!-- Fin du aside -->
        </div>
        <!-- Fin de la row -->
    </div>
    <!-- Fin du container -->
</main>
<!-- Fin de main -->

{% endblock %}", "client/detailsEvent.html.twig", "C:\\Users\\Amoun\\Desktop\\Ecotourism-main\\templates\\client\\detailsEvent.html.twig");
    }
}
