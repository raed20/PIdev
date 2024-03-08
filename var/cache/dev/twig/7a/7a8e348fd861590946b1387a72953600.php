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

/* service/profil.html.twig */
class __TwigTemplate_85f34913c391e0f027e8f54042d5e4a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/profil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"keywords\" content=\"\">
\t\t<meta
\t\tname=\"description\" content=\"\">
\t\t<!-- Favicon -->
\t\t<link
\t\trel=\"icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">

\t\t<!-- Font Awesome CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">


\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" integrity=\"sha512-gFDr0Nd+47eR5L2Q3gx+FjYG6Dy+lyg8iYyYB7m1zTn4F2IolPZCW1dozLto2rXQk3Feg+DUf5eLgN3jS6e1Qg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

\t\t<!-- Symfony Encore CSS -->
";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "
\t</head>
\t<body>
\t\t<header class=\"header\" data-header>
\t\t\t<div class=\"container\">
\t\t\t\t<a href=\"/\" class=\"logo\">
\t\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("webpack/assets/images/logos/favicon.png"), "html", null, true);
        echo "\" width=\"32\" height=\"32\" alt=\"Cryptex logo\">
\t\t\t\t\tProsync
\t\t\t\t</a>
\t\t\t\t<nav class=\"navbar\" data-navbar>
\t\t\t\t\t<ul class=\"navbar-list\">
\t\t\t\t\t\t<li class=\"navbar-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navbar-link active\" data-nav-link>Homepage</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navbar-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navbar-link\" data-nav-link>Investissement</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navbar-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navbar-link\" data-nav-link>Pret</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navbar-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navbar-link\" data-nav-link>CRM</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navbar-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navbar-link\" data-nav-link>Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navbar-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navbar-link\" data-nav-link>Stock</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</nav>
\t\t\t\t<button class=\"nav-toggle-btn\" aria-label=\"Toggle menu\" data-nav-toggler>
\t\t\t\t\t<span class=\"line line-1\"></span>
\t\t\t\t\t<span class=\"line line-2\"></span>
\t\t\t\t\t<span class=\"line line-3\"></span>
\t\t\t\t</button>
<a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-outline\">Logout</a>

<ul>
<li class=\"nav-item dropdown\">
                
                  <img
                    src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "image", [], "any", false, false, false, 74))), "html", null, true);
        echo "\" 
                    alt=\"Photo de profil de l'utilisateur\"
                    class=\"rounded-circle\"
                    width=\"31\"
                  />
                
                
              </li>
\t\t\t  </ul>
              </div>
          

\t\t\t</header>

\t\t\t




        <div class=\"container-fluid\">
          
  
          <div class=\"row justify-content-center\">
            <!-- column -->
            <div class=\"col-lg-10\">
            

            <div class=\"card\">
                <div class=\"card-body\">
   <h4 class=\"page-title\">User profil</h4>
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
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115), "image", [], "any", false, false, false, 115))), "html", null, true);
        echo "\" alt=\"Photo de profil de l'utilisateur\" 
                                    class=\"rounded-circle\" height=\"200\" width=\"200\" />
                                <h4 class=\"card-title mt-2\">";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "lastname", [], "any", false, false, false, 117), "html", null, true);
        echo "</h4>
                                <h6 class=\"card-subtitle\">  
                                ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 119, $this->source); })()), "roles", [], "any", false, false, false, 119));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 120
            echo "                                 ";
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "</h6>
                                
                            </center>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class=\"card-body\"> <small class=\"text-muted\">Email address </small>
                            <h6>";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "email", [], "any", false, false, false, 129), "html", null, true);
        echo "</h6> <small class=\"text-muted pt-4 db\">Phone</small>
                            <h6>";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "numtel", [], "any", false, false, false, 130), "html", null, true);
        echo "</h6> <small class=\"text-muted pt-4 db\">Address</small>
                                <h6>";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "adresse", [], "any", false, false, false, 131), "html", null, true);
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
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "lastname", [], "any", false, false, false, 150), "html", null, true);
        echo "
                                            class=\"form-control form-control-line\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"example-email\" class=\"col-md-12\">Email</label>
                                    <div class=\"col-md-12\">
                                        <input type=\"email\"  value=";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157), "email", [], "any", false, false, false, 157), "html", null, true);
        echo "
                                            class=\"form-control form-control-line\" name=\"example-email\"
                                            id=\"example-email\">
                                    </div>
                                </div>
                                
                                <div class=\"form-group\">
                                    <label class=\"col-md-12\">Phone No</label>
                                    <div class=\"col-md-12\">
                                        <input type=\"text\" value=";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166), "numtel", [], "any", false, false, false, 166), "html", null, true);
        echo "
                                            class=\"form-control form-control-line\">
                                    </div>
                                </div>
                                
                               
                                <div class=\"form-group\">
                                    <div class=\"col-sm-12\">



                                        <button type=\"submit\" class=\"btn btn-success text-white\"><a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_editfront", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "user", [], "any", false, false, false, 177), "id", [], "any", false, false, false, 177)]), "html", null, true);
        echo "\" class=\"text-white\" >Update Profile</a> </button>
                                        <button type=\"submit\" class=\"btn btn-danger text-white\" id=\"delete-profile-btn\"><a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletefront", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178), "id", [], "any", false, false, false, 178)]), "html", null, true);
        echo "\" class=\"text-white\" >Delete Profile</a></button>

<script>
document.getElementById('delete-profile-btn').addEventListener('click', function(event) {
    event.preventDefault(); 

    var confirmation = confirm(\"Are you sure you want to delete your profile?\");
    if (confirmation) {
        window.location.href = \"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletefront", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "user", [], "any", false, false, false, 186), "id", [], "any", false, false, false, 186)]), "html", null, true);
        echo "\";
    }
});
</script>


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
      
     
    </div></div></div></div>




\t\t\t<!-- FOOTER -->

\t\t\t<footer class=\"footer\">

\t\t\t\t<div class=\"footer-top\" data-section>
\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<div class=\"footer-brand\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("webpack/assets/images/logos/favicon.png"), "html", null, true);
        echo "\" width=\"50\" height=\"50\" alt=\"Prosync logo\">
\t\t\t\t\t\t\t\tProsync
\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t<a href=\"tel:+123456789101\" class=\"footer-contact-link\">+12 345 678 9101</a>

\t\t\t\t\t\t\t<a href=\"mailto:hello.cryptex@gmail.com\" class=\"footer-contact-link\">hello.Prosync@gmail.com</a>

\t\t\t\t\t\t\t<address class=\"footer-contact-link\">
\t\t\t\t\t\t\t\tTunis 012 espirt ariana
\t\t\t\t\t\t\t</address>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"footer-list\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p class=\"footer-list-title\">Products</p>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Fornisseur</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Place Holder</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Place Holder</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Exchange</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Launchpad</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">CRM</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<ul class=\"footer-list\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p class=\"footer-list-title\">Services</p>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Stock</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Markets</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Tranding Fee</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Affiliate Program</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Referral Program</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">API</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<ul class=\"footer-list\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p class=\"footer-list-title\">Support</p>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Prosync Learn</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Help Center</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">User Feedback</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Submit a request</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">API Documentation</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Trading Rules</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<ul class=\"footer-list\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p class=\"footer-list-title\">About Us</p>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">About Prosync</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Authenticity Check</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Careers</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Business Contacts</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Blog</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t
";
        // line 379
        $this->displayBlock('javascripts', $context, $blocks);
        // line 382
        echo "</footer>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("webpack/assets/css/front_office/style_frontoffice.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 379
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 380
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("webpack/assets/js/front_office/frontoffice.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "service/profil.html.twig";
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
        return array (  559 => 380,  549 => 379,  536 => 29,  526 => 28,  506 => 6,  492 => 382,  490 => 379,  344 => 236,  291 => 186,  280 => 178,  276 => 177,  262 => 166,  250 => 157,  240 => 150,  218 => 131,  214 => 130,  210 => 129,  200 => 121,  191 => 120,  187 => 119,  182 => 117,  177 => 115,  133 => 74,  124 => 68,  90 => 37,  82 => 31,  80 => 28,  64 => 15,  55 => 8,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"keywords\" content=\"\">
\t\t<meta
\t\tname=\"description\" content=\"\">
\t\t<!-- Favicon -->
\t\t<link
\t\trel=\"icon\" href=\"{{ asset('images/favicon.ico')}}\">

\t\t<!-- Font Awesome CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">


\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" integrity=\"sha512-gFDr0Nd+47eR5L2Q3gx+FjYG6Dy+lyg8iYyYB7m1zTn4F2IolPZCW1dozLto2rXQk3Feg+DUf5eLgN3jS6e1Qg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

\t\t<!-- Symfony Encore CSS -->
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('webpack/assets/css/front_office/style_frontoffice.css') }}\">
{% endblock %}

\t</head>
\t<body>
\t\t<header class=\"header\" data-header>
\t\t\t<div class=\"container\">
\t\t\t\t<a href=\"/\" class=\"logo\">
\t\t\t\t\t<img src=\"{{ asset('webpack/assets/images/logos/favicon.png') }}\" width=\"32\" height=\"32\" alt=\"Cryptex logo\">
\t\t\t\t\tProsync
\t\t\t\t</a>
\t\t\t\t<nav class=\"navbar\" data-navbar>
\t\t\t\t\t<ul class=\"navbar-list\">
\t\t\t\t\t\t<li class=\"navbar-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navbar-link active\" data-nav-link>Homepage</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navbar-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navbar-link\" data-nav-link>Investissement</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navbar-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navbar-link\" data-nav-link>Pret</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navbar-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navbar-link\" data-nav-link>CRM</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navbar-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navbar-link\" data-nav-link>Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navbar-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"navbar-link\" data-nav-link>Stock</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</nav>
\t\t\t\t<button class=\"nav-toggle-btn\" aria-label=\"Toggle menu\" data-nav-toggler>
\t\t\t\t\t<span class=\"line line-1\"></span>
\t\t\t\t\t<span class=\"line line-2\"></span>
\t\t\t\t\t<span class=\"line line-3\"></span>
\t\t\t\t</button>
<a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline\">Logout</a>

<ul>
<li class=\"nav-item dropdown\">
                
                  <img
                    src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" 
                    alt=\"Photo de profil de l'utilisateur\"
                    class=\"rounded-circle\"
                    width=\"31\"
                  />
                
                
              </li>
\t\t\t  </ul>
              </div>
          

\t\t\t</header>

\t\t\t




        <div class=\"container-fluid\">
          
  
          <div class=\"row justify-content-center\">
            <!-- column -->
            <div class=\"col-lg-10\">
            

            <div class=\"card\">
                <div class=\"card-body\">
   <h4 class=\"page-title\">User profil</h4>
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



                                        <button type=\"submit\" class=\"btn btn-success text-white\"><a href=\"{{ path('app_editfront', {'id': app.user.id}) }}\" class=\"text-white\" >Update Profile</a> </button>
                                        <button type=\"submit\" class=\"btn btn-danger text-white\" id=\"delete-profile-btn\"><a href=\"{{ path('app_deletefront', {'id': app.user.id}) }}\" class=\"text-white\" >Delete Profile</a></button>

<script>
document.getElementById('delete-profile-btn').addEventListener('click', function(event) {
    event.preventDefault(); 

    var confirmation = confirm(\"Are you sure you want to delete your profile?\");
    if (confirmation) {
        window.location.href = \"{{ path('app_deletefront', {'id': app.user.id}) }}\";
    }
});
</script>


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
      
     
    </div></div></div></div>




\t\t\t<!-- FOOTER -->

\t\t\t<footer class=\"footer\">

\t\t\t\t<div class=\"footer-top\" data-section>
\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<div class=\"footer-brand\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('webpack/assets/images/logos/favicon.png') }}\" width=\"50\" height=\"50\" alt=\"Prosync logo\">
\t\t\t\t\t\t\t\tProsync
\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t<a href=\"tel:+123456789101\" class=\"footer-contact-link\">+12 345 678 9101</a>

\t\t\t\t\t\t\t<a href=\"mailto:hello.cryptex@gmail.com\" class=\"footer-contact-link\">hello.Prosync@gmail.com</a>

\t\t\t\t\t\t\t<address class=\"footer-contact-link\">
\t\t\t\t\t\t\t\tTunis 012 espirt ariana
\t\t\t\t\t\t\t</address>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"footer-list\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p class=\"footer-list-title\">Products</p>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Fornisseur</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Place Holder</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Place Holder</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Exchange</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Launchpad</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">CRM</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<ul class=\"footer-list\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p class=\"footer-list-title\">Services</p>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Stock</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Markets</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Tranding Fee</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Affiliate Program</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Referral Program</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">API</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<ul class=\"footer-list\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p class=\"footer-list-title\">Support</p>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Prosync Learn</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Help Center</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">User Feedback</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Submit a request</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">API Documentation</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Trading Rules</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<ul class=\"footer-list\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<p class=\"footer-list-title\">About Us</p>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">About Prosync</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Authenticity Check</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Careers</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Business Contacts</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"footer-link\">Blog</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t
{% block javascripts %}
    <script src=\"{{ asset('webpack/assets/js/front_office/frontoffice.js') }}\"></script>
{% endblock %}
</footer>

</body>
</html>
", "service/profil.html.twig", "C:\\xampp\\htdocs\\lekhreni\\PIdev\\templates\\service\\profil.html.twig");
    }
}
