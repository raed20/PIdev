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

/* service/index.html.twig */
class __TwigTemplate_3514156cd820cb3249f018e45f6bcc88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

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

<a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profilefront");
        echo "\">
                
                  <img
\t\t\t\t    href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profilefront");
        echo "\"
                    src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "image", [], "any", false, false, false, 74))), "html", null, true);
        echo "\" 
                    alt=\"Photo de profil de l'utilisateur\"
                    class=\"rounded-circle\"
                    width=\"31\"
                  />
                
                
             
          

\t\t\t</header>

\t\t\t";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "
\t\t\t<!-- FOOTER -->

\t\t\t<footer class=\"footer\">

\t\t\t\t<div class=\"footer-top\" data-section>
\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<div class=\"footer-brand\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 98
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
        // line 241
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

    // line 86
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 241
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 242
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
        return "service/index.html.twig";
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
        return array (  397 => 242,  387 => 241,  369 => 86,  356 => 29,  346 => 28,  326 => 6,  316 => 241,  170 => 98,  157 => 87,  155 => 86,  140 => 74,  136 => 73,  130 => 70,  125 => 68,  91 => 37,  83 => 31,  81 => 28,  65 => 15,  56 => 8,  54 => 6,  47 => 1,);
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

<a href=\"{{ path('app_profilefront') }}\">
                
                  <img
\t\t\t\t    href=\"{{ path('app_profilefront') }}\"
                    src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" 
                    alt=\"Photo de profil de l'utilisateur\"
                    class=\"rounded-circle\"
                    width=\"31\"
                  />
                
                
             
          

\t\t\t</header>

\t\t\t{% block body %}{% endblock %}

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
", "service/index.html.twig", "C:\\xampp\\htdocs\\lekhreni\\PIdev\\templates\\service\\index.html.twig");
    }
}
