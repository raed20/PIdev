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

/* front_office/base_front.html.twig */
class __TwigTemplate_67f31cc24a8953e2a6dd597d1462d28d extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/base_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/base_front.html.twig"));

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
\t\t\t\t


";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) {
            // line 40
            echo "    ";
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "roles", [], "any", false, false, false, 40))) {
                // line 41
                echo "        <!-- L'utilisateur est connecté en tant qu'admin, lien vers app_home pour admin -->
        <a href=\"";
                // line 42
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
                echo "\" class=\"logo\">
            <img href=\"";
                // line 43
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("webpack/assets/images/logos/favicon.png"), "html", null, true);
                echo "\" width=\"32\" height=\"32\" alt=\"Cryptex logo\">
            Prosync
        </a>
    ";
            } else {
                // line 47
                echo "        <!-- L'utilisateur est connecté mais n'est pas admin, lien vers app_home pour non-admin -->
        <a href=\"";
                // line 48
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home1");
                echo "\" class=\"logo\">
            <img href=\"";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home1");
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("webpack/assets/images/logos/favicon.png"), "html", null, true);
                echo "\" width=\"32\" height=\"32\" alt=\"Cryptex logo\">
            Prosync
        </a>
    ";
            }
        }
        // line 54
        echo "



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
\t\t\t\t</nav>
\t\t\t\t<button class=\"nav-toggle-btn\" aria-label=\"Toggle menu\" data-nav-toggler>
\t\t\t\t\t<span class=\"line line-1\"></span>
\t\t\t\t\t<span class=\"line line-2\"></span>
\t\t\t\t\t<span class=\"line line-3\"></span>
\t\t\t\t</button>


\t\t\t\t
";
        // line 88
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88)) {
            // line 89
            echo "            ";
            // line 90
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-outline\">Logout</a>


\t\t\t
\t\t\t";
            // line 94
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "roles", [], "any", false, false, false, 94))) {
                // line 95
                echo "        <!-- L'utilisateur est connecté en tant qu'admin, afficher le bouton \"Dashboard\" -->
        <a href=\"";
                // line 96
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
                echo "\" class=\"btn btn-outline\">Dashboard</a>
    ";
            }
            // line 98
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profilefront");
            echo "\">              
                  <img
\t\t\t\t  
                    src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "image", [], "any", false, false, false, 101))), "html", null, true);
            echo "\" 
                    
                    class=\"rounded-circle\"
                    width=\"31\"
                  />
                
                </a> 
              
        ";
        } else {
            // line 110
            echo "            ";
            // line 111
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-outline\">Login</a>
        ";
        }
        // line 113
        echo "\t\t\t</header>




\t\t";
        // line 118
        $this->displayBlock('body', $context, $blocks);
        // line 120
        echo "





\t\t\t<!-- FOOTER -->

\t\t\t<footer class=\"footer\">

\t\t\t\t<div class=\"footer-top\" data-section>
\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<div class=\"footer-brand\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 136
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
        // line 279
        $this->displayBlock('javascripts', $context, $blocks);
        
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

    // line 118
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 119
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 279
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 280
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
        return "front_office/base_front.html.twig";
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
        return array (  472 => 280,  462 => 279,  452 => 119,  442 => 118,  429 => 29,  419 => 28,  399 => 6,  389 => 279,  243 => 136,  225 => 120,  223 => 118,  216 => 113,  210 => 111,  208 => 110,  196 => 101,  189 => 98,  184 => 96,  181 => 95,  179 => 94,  171 => 90,  169 => 89,  167 => 88,  131 => 54,  121 => 49,  117 => 48,  114 => 47,  105 => 43,  101 => 42,  98 => 41,  95 => 40,  93 => 39,  83 => 31,  81 => 28,  65 => 15,  56 => 8,  54 => 6,  47 => 1,);
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
\t\t\t\t


{% if app.user %}
    {% if 'ROLE_ADMIN' in app.user.roles %}
        <!-- L'utilisateur est connecté en tant qu'admin, lien vers app_home pour admin -->
        <a href=\"{{ path('app_home') }}\" class=\"logo\">
            <img href=\"{{ path('app_home') }}\" src=\"{{ asset('webpack/assets/images/logos/favicon.png') }}\" width=\"32\" height=\"32\" alt=\"Cryptex logo\">
            Prosync
        </a>
    {% else %}
        <!-- L'utilisateur est connecté mais n'est pas admin, lien vers app_home pour non-admin -->
        <a href=\"{{ path('app_home1') }}\" class=\"logo\">
            <img href=\"{{ path('app_home1') }}\" src=\"{{ asset('webpack/assets/images/logos/favicon.png') }}\" width=\"32\" height=\"32\" alt=\"Cryptex logo\">
            Prosync
        </a>
    {% endif %}
{% endif %}




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
\t\t\t\t</nav>
\t\t\t\t<button class=\"nav-toggle-btn\" aria-label=\"Toggle menu\" data-nav-toggler>
\t\t\t\t\t<span class=\"line line-1\"></span>
\t\t\t\t\t<span class=\"line line-2\"></span>
\t\t\t\t\t<span class=\"line line-3\"></span>
\t\t\t\t</button>


\t\t\t\t
{% if app.user %}
            {# Si l'utilisateur est connecté, affichez un lien de déconnexion #}
            <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline\">Logout</a>


\t\t\t
\t\t\t{% if 'ROLE_ADMIN' in app.user.roles %}
        <!-- L'utilisateur est connecté en tant qu'admin, afficher le bouton \"Dashboard\" -->
        <a href=\"{{ path('app_dashboard') }}\" class=\"btn btn-outline\">Dashboard</a>
    {% endif %}
\t\t\t<a href=\"{{ path('app_profilefront') }}\">              
                  <img
\t\t\t\t  
                    src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" 
                    
                    class=\"rounded-circle\"
                    width=\"31\"
                  />
                
                </a> 
              
        {% else %}
            {# Si l'utilisateur n'est pas connecté, affichez un lien de connexion #}
            <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline\">Login</a>
        {% endif %}
\t\t\t</header>




\t\t{% block body %}
\t\t{% endblock %}






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
", "front_office/base_front.html.twig", "C:\\xampp\\htdocs\\lekherni3\\PIdev\\templates\\front_office\\base_front.html.twig");
    }
}
