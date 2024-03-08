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

/* service/edit.html.twig */
class __TwigTemplate_5b323894d8d0e7a5cfee009cc91192d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/edit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <!-- Favicon -->
    <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
    <!-- Font Awesome CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <!-- Symfony Encore CSS -->
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "</head>
\t<body>
\t\t<header class=\"header\" data-header>
\t\t\t<div class=\"container\">
\t\t\t\t<a href=\"/\" class=\"logo\">
\t\t\t\t\t<img src=\"";
        // line 24
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
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-outline\">Logout</a>

<ul>
<li class=\"nav-item dropdown\">
                
                  <img
                    src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "image", [], "any", false, false, false, 61))), "html", null, true);
        echo "\" 
                    alt=\"Photo de profil de l'utilisateur\"
                    class=\"rounded-circle\"
                    width=\"31\"
                  />
                
                
              </li>
\t\t\t  </ul>
          

\t\t\t</header>

\t\t\t
<div class=\"container-fluid\">
          
  
          <div class=\"row justify-content-center\">
            <!-- column -->
            <div class=\"col-lg-10\">
            

            <div class=\"card\">
                <div class=\"card-body\">
                    <h1 class=\"mb-4\">Edit User</h1>
            <form method=\"post\" novalidate enctype=\"multipart/form-data\">
                ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 87, $this->source); })()), 'form_start');
        echo "
                <div class=\"mb-4\">
                            <div class=\"text-center\">
                        ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 90, $this->source); })()), "vars", [], "any", false, false, false, 90), "value", [], "any", false, false, false, 90), "image", [], "any", false, false, false, 90)) {
            // line 91
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 91, $this->source); })()), "vars", [], "any", false, false, false, 91), "value", [], "any", false, false, false, 91), "image", [], "any", false, false, false, 91))), "html", null, true);
            echo "\" alt=\"User Image\" class=\"rounded-circle\" width=\"200\" height=\"200\">
                        ";
        }
        // line 93
        echo "                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 97, $this->source); })()), "email", [], "any", false, false, false, 97), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Email"]]);
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 100, $this->source); })()), "roles", [], "any", false, false, false, 100), 'row', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 105, $this->source); })()), "password", [], "any", false, false, false, 105), 'row', ["attr" => ["class" => "form-control form-control-lg password-toggle", "placeholder" => "Password"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 110, $this->source); })()), "lastname", [], "any", false, false, false, 110), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Lastname"]]);
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 113, $this->source); })()), "numtel", [], "any", false, false, false, 113), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Phone number"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 118, $this->source); })()), "adresse", [], "any", false, false, false, 118), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Address"]]);
        echo "
                    </div>
                </div>
               <div class=\"row mb-4\">
                    <div class=\"col\">
                        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 123, $this->source); })()), "image", [], "any", false, false, false, 123), 'row', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
                    </div>
                </div> 
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        <button type=\"submit\" class=\"btn btn-primary\">Update User</button>
                    </div>
                </div>
                ";
        // line 131
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 131, $this->source); })()), 'form_end');
        echo "
            </form>
        </div>
    </div>
</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<script>
\$(document).ready(function() {
    \$('.password-toggle').each(function() {
        var \$input = \$(this);
        var \$toggle = \$('<span class=\"password-toggle-btn\"><i class=\"fa fa-eye\"></i></span>');
        \$input.after(\$toggle);

        \$toggle.on('click', function() {
            var type = \$input.attr('type') === 'password' ? 'text' : 'password';
            \$input.attr('type', type);
           
           
            \$(this).find('i').toggleClass('fa-eye fa-eye-slash');
        });
    });
});
</script>

<!-- FOOTER -->

\t\t\t<footer class=\"footer\">

\t\t\t\t<div class=\"footer-top\" data-section>
\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<div class=\"footer-brand\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 166
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
        // line 309
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("webpack/assets/css/front_office/style_frontoffice.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 309
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 310
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
        return "service/edit.html.twig";
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
        return array (  471 => 310,  461 => 309,  448 => 17,  438 => 16,  419 => 5,  409 => 309,  263 => 166,  225 => 131,  214 => 123,  206 => 118,  198 => 113,  192 => 110,  184 => 105,  176 => 100,  170 => 97,  164 => 93,  158 => 91,  156 => 90,  150 => 87,  121 => 61,  112 => 55,  78 => 24,  71 => 19,  69 => 16,  60 => 10,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <!-- Favicon -->
    <link rel=\"icon\" href=\"{{ asset('images/favicon.ico')}}\">
    <!-- Font Awesome CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <!-- Symfony Encore CSS -->
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('webpack/assets/css/front_office/style_frontoffice.css') }}\">
    {% endblock %}
</head>
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
          

\t\t\t</header>

\t\t\t
<div class=\"container-fluid\">
          
  
          <div class=\"row justify-content-center\">
            <!-- column -->
            <div class=\"col-lg-10\">
            

            <div class=\"card\">
                <div class=\"card-body\">
                    <h1 class=\"mb-4\">Edit User</h1>
            <form method=\"post\" novalidate enctype=\"multipart/form-data\">
                {{ form_start(f) }}
                <div class=\"mb-4\">
                            <div class=\"text-center\">
                        {% if f.vars.value.image %}
                            <img src=\"{{ asset('uploads/images/' ~ f.vars.value.image) }}\" alt=\"User Image\" class=\"rounded-circle\" width=\"200\" height=\"200\">
                        {% endif %}
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        {{ form_row(f.email, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Email'}}) }}
                    </div>
                    <div class=\"col\">
                        {{ form_row(f.roles, {'attr': {'class': 'form-control form-control-lg'}}) }}
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        {{ form_row(f.password, {'attr': {'class': 'form-control form-control-lg password-toggle', 'placeholder': 'Password'}}) }}
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        {{ form_row(f.lastname, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Lastname'}}) }}
                    </div>
                    <div class=\"col\">
                        {{ form_row(f.numtel, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Phone number'}}) }}
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        {{ form_row(f.adresse, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Address'}}) }}
                    </div>
                </div>
               <div class=\"row mb-4\">
                    <div class=\"col\">
                        {{ form_row(f.image, {'attr': {'class': 'form-control form-control-lg'}}) }}
                    </div>
                </div> 
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        <button type=\"submit\" class=\"btn btn-primary\">Update User</button>
                    </div>
                </div>
                {{ form_end(f) }}
            </form>
        </div>
    </div>
</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<script>
\$(document).ready(function() {
    \$('.password-toggle').each(function() {
        var \$input = \$(this);
        var \$toggle = \$('<span class=\"password-toggle-btn\"><i class=\"fa fa-eye\"></i></span>');
        \$input.after(\$toggle);

        \$toggle.on('click', function() {
            var type = \$input.attr('type') === 'password' ? 'text' : 'password';
            \$input.attr('type', type);
           
           
            \$(this).find('i').toggleClass('fa-eye fa-eye-slash');
        });
    });
});
</script>

<!-- FOOTER -->

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
", "service/edit.html.twig", "C:\\xampp\\htdocs\\lekhreni\\PIdev\\templates\\service\\edit.html.twig");
    }
}
