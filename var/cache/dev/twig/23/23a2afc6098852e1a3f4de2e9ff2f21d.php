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

/* user/profil.html.twig */
class __TwigTemplate_97a36f01b647f7a4cc2c3494b7b11928 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back_office/base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profil.html.twig"));

        $this->parent = $this->loadTemplate("back_office/base_back.html.twig", "user/profil.html.twig", 1);
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("styles_dashbaord");
        echo "
    <!-- Ajout de styles spécifiques pour la page -->
    <style>
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
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "
";
        // line 49
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app_back");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "<div class=\"container-fluid\">
          
  
          <div class=\"row justify-content-center\">
            <!-- column -->
            <div class=\"col-lg-10\">
            

            <div class=\"card\">
                <div class=\"card-body\">
   <h4 class=\"page-title\">Admin profil</h4>
        <div class=\"container-fluid\">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class=\"row\">
                <!-- Column -->
                <div class=\"col-lg-4 col-xlg-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <center class=\"mt-4\"> 
                            <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "image", [], "any", false, false, false, 75))), "html", null, true);
        echo "\" alt=\"Photo de profil de l'utilisateur\" 
                                    class=\"rounded-circle\" height=\"200\" width=\"200\" />
                                <h4 class=\"card-title mt-2\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "lastname", [], "any", false, false, false, 77), "html", null, true);
        echo "</h4>
                                <h6 class=\"card-subtitle\">  
                                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "roles", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 80
            echo "                                 ";
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "</h6>
                                
                            </center>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class=\"card-body\"> <small class=\"text-muted\">Email address </small>
                            <h6>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "email", [], "any", false, false, false, 89), "html", null, true);
        echo "</h6> <small class=\"text-muted pt-4 db\">Phone</small>
                            <h6>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "numtel", [], "any", false, false, false, 90), "html", null, true);
        echo "</h6> <small class=\"text-muted pt-4 db\">Address</small>
                                <h6>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "adresse", [], "any", false, false, false, 91), "html", null, true);
        echo "</h6>
                                <small class=\"text-muted pt-4 db\">Social Profile</small>
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
                            <form class=\"form-horizontal form-material mx-2\">
                                <div class=\"form-group\">
                                    <label class=\"col-md-12\">Full Name</label>
                                    <div class=\"col-md-12\">
                                        <input type=\"text\"  value=";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110), "lastname", [], "any", false, false, false, 110), "html", null, true);
        echo "
                                            class=\"form-control form-control-line\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"example-email\" class=\"col-md-12\">Email</label>
                                    <div class=\"col-md-12\">
                                        <input type=\"email\"  value=";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "email", [], "any", false, false, false, 117), "html", null, true);
        echo "
                                            class=\"form-control form-control-line\" name=\"example-email\"
                                            id=\"example-email\">
                                    </div>
                                </div>
                                
                                <div class=\"form-group\">
                                    <label class=\"col-md-12\">Phone No</label>
                                    <div class=\"col-md-12\">
                                        <input type=\"text\" value=";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126), "numtel", [], "any", false, false, false, 126), "html", null, true);
        echo "
                                            class=\"form-control form-control-line\">
                                    </div>
                                </div>
                                
                               
                                <div class=\"form-group\">
                                    <div class=\"col-sm-12\">



                                        <button type=\"submit\" class=\"btn btn-success text-white\"><a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137)]), "html", null, true);
        echo "\" class=\"text-white\" >Update Profile</a> </button>
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
    <footer class=\"footer text-center\">
          All Rights Reserved by ProSync. Designed and Developed by
          <a href=\"https://www.Prosync.com\">ProSync</a>.
        </footer>
   

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"../assets/libs/jquery/dist/jquery.min.js\"></script>
  
    <script src=\"../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
   
    <script src=\"../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js\"></script>
    <script src=\"../assets/extra-libs/sparkline/sparkline.js\"></script>
  
    <script src=\"../dist/js/waves.js\"></script>
   
    <script src=\"../dist/js/sidebarmenu.js\"></script>
   
    <script src=\"../dist/js/custom.min.js\"></script>
 
    <script src=\"../assets/extra-libs/multicheck/datatable-checkbox-init.js\"></script>
    <script src=\"../assets/extra-libs/multicheck/jquery.multicheck.js\"></script>
    <script src=\"../assets/extra-libs/DataTables/datatables.min.js\"></script>
   


<script>
    \$(document).ready(function() {
       
        \$('#updateProfileForm').submit(function(e) {
           
            e.preventDefault();

       
            var formData = \$(this).serialize();

           
            \$.ajax({
                type: 'POST', 
                url: '/update-profile', 
                data: formData, 
                success: function(response) {
                    
                    console.log(response);
                },
                error: function(error) {
                    
                    console.log(error);
                }
            });
        });
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
        return "user/profil.html.twig";
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
        return array (  286 => 137,  272 => 126,  260 => 117,  250 => 110,  228 => 91,  224 => 90,  220 => 89,  210 => 81,  201 => 80,  197 => 79,  192 => 77,  187 => 75,  163 => 53,  153 => 52,  141 => 49,  138 => 48,  128 => 47,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back_office/base_back.html.twig' %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('styles_dashbaord') }}
    <!-- Ajout de styles spécifiques pour la page -->
    <style>
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
    </style>
{% endblock %}
    {% block javascripts %}

{{ encore_entry_script_tags('app_back') }}
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
          
  
          <div class=\"row justify-content-center\">
            <!-- column -->
            <div class=\"col-lg-10\">
            

            <div class=\"card\">
                <div class=\"card-body\">
   <h4 class=\"page-title\">Admin profil</h4>
        <div class=\"container-fluid\">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class=\"row\">
                <!-- Column -->
                <div class=\"col-lg-4 col-xlg-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <center class=\"mt-4\"> 
                            <img src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" alt=\"Photo de profil de l'utilisateur\" 
                                    class=\"rounded-circle\" height=\"200\" width=\"200\" />
                                <h4 class=\"card-title mt-2\">{{ app.user.lastname }}</h4>
                                <h6 class=\"card-subtitle\">  
                                {% for role in user.roles %}
                                 {{ role }}
                              {% endfor %}</h6>
                                
                            </center>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class=\"card-body\"> <small class=\"text-muted\">Email address </small>
                            <h6>{{ user.email }}</h6> <small class=\"text-muted pt-4 db\">Phone</small>
                            <h6>{{ user.numtel }}</h6> <small class=\"text-muted pt-4 db\">Address</small>
                                <h6>{{ user.adresse }}</h6>
                                <small class=\"text-muted pt-4 db\">Social Profile</small>
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
                            <form class=\"form-horizontal form-material mx-2\">
                                <div class=\"form-group\">
                                    <label class=\"col-md-12\">Full Name</label>
                                    <div class=\"col-md-12\">
                                        <input type=\"text\"  value={{ app.user.lastname }}
                                            class=\"form-control form-control-line\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"example-email\" class=\"col-md-12\">Email</label>
                                    <div class=\"col-md-12\">
                                        <input type=\"email\"  value={{ app.user.email }}
                                            class=\"form-control form-control-line\" name=\"example-email\"
                                            id=\"example-email\">
                                    </div>
                                </div>
                                
                                <div class=\"form-group\">
                                    <label class=\"col-md-12\">Phone No</label>
                                    <div class=\"col-md-12\">
                                        <input type=\"text\" value={{ app.user.numtel }}
                                            class=\"form-control form-control-line\">
                                    </div>
                                </div>
                                
                               
                                <div class=\"form-group\">
                                    <div class=\"col-sm-12\">



                                        <button type=\"submit\" class=\"btn btn-success text-white\"><a href=\"{{ path('app_edit', {'id': app.user.id}) }}\" class=\"text-white\" >Update Profile</a> </button>
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
    <footer class=\"footer text-center\">
          All Rights Reserved by ProSync. Designed and Developed by
          <a href=\"https://www.Prosync.com\">ProSync</a>.
        </footer>
   

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"../assets/libs/jquery/dist/jquery.min.js\"></script>
  
    <script src=\"../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
   
    <script src=\"../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js\"></script>
    <script src=\"../assets/extra-libs/sparkline/sparkline.js\"></script>
  
    <script src=\"../dist/js/waves.js\"></script>
   
    <script src=\"../dist/js/sidebarmenu.js\"></script>
   
    <script src=\"../dist/js/custom.min.js\"></script>
 
    <script src=\"../assets/extra-libs/multicheck/datatable-checkbox-init.js\"></script>
    <script src=\"../assets/extra-libs/multicheck/jquery.multicheck.js\"></script>
    <script src=\"../assets/extra-libs/DataTables/datatables.min.js\"></script>
   


<script>
    \$(document).ready(function() {
       
        \$('#updateProfileForm').submit(function(e) {
           
            e.preventDefault();

       
            var formData = \$(this).serialize();

           
            \$.ajax({
                type: 'POST', 
                url: '/update-profile', 
                data: formData, 
                success: function(response) {
                    
                    console.log(response);
                },
                error: function(error) {
                    
                    console.log(error);
                }
            });
        });
    });
</script>


  

{% endblock %}
", "user/profil.html.twig", "C:\\xampp\\htdocs\\lekhreni\\PIdev\\templates\\user\\profil.html.twig");
    }
}
