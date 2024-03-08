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

/* front_office/service/profil.html.twig */
class __TwigTemplate_c3375a87fd6fd5edd2a1f11967b1f3ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front_office/base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/service/profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/service/profil.html.twig"));

        $this->parent = $this->loadTemplate("front_office/base_front.html.twig", "front_office/service/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
        // line 4
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("styles_front");
        echo "
\t";
        // line 5
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("styles_profile");
        echo "
\t\t  <style>
        /* Style pour le formulaire */
        .form-control-lg {
            padding: 1.5rem 1rem;
            border-radius: 0.5rem;
        }

        .password-toggle-btn {
            cursor: pointer;
            position: absolute;
            top: 50%;
            right: 1rem;
            transform: translateY(-50%);
        }
        /* Styles spécifiques pour le contenu de la page */
        .profile-card {
            border: 1px solid #e3e3e3;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .profile-card img {
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .profile-card .social-buttons button {
            margin-right: 10px;
        }

        /* Styles spécifiques pour le formulaire */
        .update-profile-form input[type=\"text\"],
        .update-profile-form input[type=\"email\"] {
            border: none;
            border-bottom: 1px solid #ced4da;
            border-radius: 0;
            box-shadow: none;
        }
       
    .larger-font {
        font-size: 20px;
    }
</style>
    </style>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "
        <div class=\"container mt-4\" style=\"background-color: #f7f7f7; padding: 100px; padding-bottom: 40px;\">
          
  
        
            <div class=\"card\">
                <div class=\"card-body\">
   <h1 class=\"page-title\">User Profil</h1>
        <div class=\"container-fluid\" >
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class=\"row\" >
                <!-- Column -->
                <div class=\"col-lg-4 col-xlg-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <center class=\"mt-4\"> 
                            <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "image", [], "any", false, false, false, 73))), "html", null, true);
        echo "\"  
                                    class=\"rounded-circle\" height=\"200\" width=\"200\" />
                                <h2 class=\"card-title mt-2\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "lastname", [], "any", false, false, false, 75), "html", null, true);
        echo "</h2>
                                <h2 class=\"card-subtitle\">  
                                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "roles", [], "any", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 78
            echo "                                ";
            $context["badgeColor"] = "primary";
            // line 79
            echo "<span class=\"badge bg-";
            echo twig_escape_filter($this->env, (isset($context["badgeColor"]) || array_key_exists("badgeColor", $context) ? $context["badgeColor"] : (function () { throw new RuntimeError('Variable "badgeColor" does not exist.', 79, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "</span>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "</h2>
                                
                            </center>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class=\"card-body\"> <small class=\"text-muted larger-font\">Email address </small>
                            <h4>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "email", [], "any", false, false, false, 88), "html", null, true);
        echo "</h4> <small class=\"text-muted larger-font\">Phone</small>
                            <h4>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "numtel", [], "any", false, false, false, 89), "html", null, true);
        echo "</h4> <small class=\"text-muted larger-font\">Address</small>
                                <h4>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "adresse", [], "any", false, false, false, 90), "html", null, true);
        echo "</h4>
                                <small class=\"text-muted larger-font\">Social Profile</small>
                                <br />
                                <button class=\"btn btn-circle btn-secondary\"><i class=\"mdi mdi-facebook\"></i></button>
                                <button class=\"btn btn-circle btn-secondary\"><i class=\"mdi mdi-twitter\"></i></button>
                                <button class=\"btn btn-circle btn-secondary\"><i
                                        class=\"mdi mdi-youtube-play\"></i></button>
                            </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class=\"col-lg-8 col-xlg-9\">
    <div class=\"card\">
        <div class=\"card-body\">
            <form class=\"form-horizontal form-material mx-2\" style=\"background-color: #f7f7f7; padding: 20px;\">
                <div class=\"form-group row\">
                    <label for=\"full-name\" class=\"col-md-3 col-form-label\">Full Name</label>
                    <div class=\"col-md-9\">
                        <input type=\"text\" id=\"full-name\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "lastname", [], "any", false, false, false, 109), "html", null, true);
        echo "\"
                               class=\"form-control form-control-lg form-control-line\">
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label for=\"email\" class=\"col-md-3 col-form-label\">Email</label>
                    <div class=\"col-md-9\">
                        <input type=\"email\" id=\"email\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "email", [], "any", false, false, false, 116), "html", null, true);
        echo "\"
                               class=\"form-control form-control-lg form-control-line\">
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label for=\"phone\" class=\"col-md-3 col-form-label\">Phone No</label>
                    <div class=\"col-md-9\">
                        <input type=\"text\" id=\"phone\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "numtel", [], "any", false, false, false, 123), "html", null, true);
        echo "\"
                               class=\"form-control form-control-lg form-control-line\">
                    </div>
                </div></br>
                <div class=\"form-group row\">
                    <div class=\"col-md-9 offset-md-3\">
                        <button type=\"submit\" class=\"btn btn-success\">
                            <a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_editfront", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130)]), "html", null, true);
        echo "\" class=\"text-white\">Update Profile</a>
                        </button>
                        <button type=\"submit\" class=\"btn btn-danger\" id=\"delete-profile-btn\">
                            <a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletefront", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "id", [], "any", false, false, false, 133)]), "html", null, true);
        echo "\" class=\"text-white\">Delete Profile</a>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

                <!-- Column -->
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
    </div>
</div>
</div>

        
        
        
       
     

  





 ";
        // line 172
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 173
        echo "
";
        // line 174
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app_back");
        echo "

</section>
<script>
document.getElementById('delete-profile-btn').addEventListener('click', function(event) {
    event.preventDefault(); 

    var confirmation = confirm(\"Are you sure you want to delete your profile?\");
    if (confirmation) {
        window.location.href = \"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletefront", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 183, $this->source); })()), "user", [], "any", false, false, false, 183), "id", [], "any", false, false, false, 183)]), "html", null, true);
        echo "\";
    }
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front_office/service/profil.html.twig";
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
        return array (  347 => 183,  335 => 174,  332 => 173,  313 => 172,  271 => 133,  265 => 130,  255 => 123,  245 => 116,  235 => 109,  213 => 90,  209 => 89,  205 => 88,  195 => 80,  184 => 79,  181 => 78,  177 => 77,  172 => 75,  167 => 73,  146 => 54,  136 => 53,  79 => 5,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front_office/base_front.html.twig' %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('styles_front') }}
\t{{ encore_entry_link_tags('styles_profile') }}
\t\t  <style>
        /* Style pour le formulaire */
        .form-control-lg {
            padding: 1.5rem 1rem;
            border-radius: 0.5rem;
        }

        .password-toggle-btn {
            cursor: pointer;
            position: absolute;
            top: 50%;
            right: 1rem;
            transform: translateY(-50%);
        }
        /* Styles spécifiques pour le contenu de la page */
        .profile-card {
            border: 1px solid #e3e3e3;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .profile-card img {
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .profile-card .social-buttons button {
            margin-right: 10px;
        }

        /* Styles spécifiques pour le formulaire */
        .update-profile-form input[type=\"text\"],
        .update-profile-form input[type=\"email\"] {
            border: none;
            border-bottom: 1px solid #ced4da;
            border-radius: 0;
            box-shadow: none;
        }
       
    .larger-font {
        font-size: 20px;
    }
</style>
    </style>
\t{% endblock %}
   
{% block body %}

        <div class=\"container mt-4\" style=\"background-color: #f7f7f7; padding: 100px; padding-bottom: 40px;\">
          
  
        
            <div class=\"card\">
                <div class=\"card-body\">
   <h1 class=\"page-title\">User Profil</h1>
        <div class=\"container-fluid\" >
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class=\"row\" >
                <!-- Column -->
                <div class=\"col-lg-4 col-xlg-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <center class=\"mt-4\"> 
                            <img src=\"{{ asset('uploads/images/' ~ app.user.image) }}\"  
                                    class=\"rounded-circle\" height=\"200\" width=\"200\" />
                                <h2 class=\"card-title mt-2\">{{ app.user.lastname }}</h2>
                                <h2 class=\"card-subtitle\">  
                                {% for role in user.roles %}
                                {% set badgeColor = 'primary' %}
<span class=\"badge bg-{{ badgeColor }}\">{{ role }}</span>
                              {% endfor %}</h2>
                                
                            </center>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class=\"card-body\"> <small class=\"text-muted larger-font\">Email address </small>
                            <h4>{{ user.email }}</h4> <small class=\"text-muted larger-font\">Phone</small>
                            <h4>{{ user.numtel }}</h4> <small class=\"text-muted larger-font\">Address</small>
                                <h4>{{ user.adresse }}</h4>
                                <small class=\"text-muted larger-font\">Social Profile</small>
                                <br />
                                <button class=\"btn btn-circle btn-secondary\"><i class=\"mdi mdi-facebook\"></i></button>
                                <button class=\"btn btn-circle btn-secondary\"><i class=\"mdi mdi-twitter\"></i></button>
                                <button class=\"btn btn-circle btn-secondary\"><i
                                        class=\"mdi mdi-youtube-play\"></i></button>
                            </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class=\"col-lg-8 col-xlg-9\">
    <div class=\"card\">
        <div class=\"card-body\">
            <form class=\"form-horizontal form-material mx-2\" style=\"background-color: #f7f7f7; padding: 20px;\">
                <div class=\"form-group row\">
                    <label for=\"full-name\" class=\"col-md-3 col-form-label\">Full Name</label>
                    <div class=\"col-md-9\">
                        <input type=\"text\" id=\"full-name\" value=\"{{ app.user.lastname }}\"
                               class=\"form-control form-control-lg form-control-line\">
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label for=\"email\" class=\"col-md-3 col-form-label\">Email</label>
                    <div class=\"col-md-9\">
                        <input type=\"email\" id=\"email\" value=\"{{ app.user.email }}\"
                               class=\"form-control form-control-lg form-control-line\">
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label for=\"phone\" class=\"col-md-3 col-form-label\">Phone No</label>
                    <div class=\"col-md-9\">
                        <input type=\"text\" id=\"phone\" value=\"{{ app.user.numtel }}\"
                               class=\"form-control form-control-lg form-control-line\">
                    </div>
                </div></br>
                <div class=\"form-group row\">
                    <div class=\"col-md-9 offset-md-3\">
                        <button type=\"submit\" class=\"btn btn-success\">
                            <a href=\"{{ path('app_editfront', {'id': app.user.id}) }}\" class=\"text-white\">Update Profile</a>
                        </button>
                        <button type=\"submit\" class=\"btn btn-danger\" id=\"delete-profile-btn\">
                            <a href=\"{{ path('app_deletefront', {'id': app.user.id}) }}\" class=\"text-white\">Delete Profile</a>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

                <!-- Column -->
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
    </div>
</div>
</div>

        
        
        
       
     

  





 {% block javascripts %}

{{ encore_entry_script_tags('app_back') }}

</section>
<script>
document.getElementById('delete-profile-btn').addEventListener('click', function(event) {
    event.preventDefault(); 

    var confirmation = confirm(\"Are you sure you want to delete your profile?\");
    if (confirmation) {
        window.location.href = \"{{ path('app_deletefront', {'id': app.user.id}) }}\";
    }
});
</script>
{% endblock %}
{% endblock %}", "front_office/service/profil.html.twig", "C:\\xampp\\htdocs\\lekherni3\\PIdev\\templates\\front_office\\service\\profil.html.twig");
    }
}
