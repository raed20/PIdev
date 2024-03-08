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

/* back_office/base_back.html.twig */
class __TwigTemplate_8460659ea5f14e069ef4f5481b3abd8e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/base_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/base_back.html.twig"));

        // line 1
        echo "<head>
\t<meta charset=\"UTF-8\">
\t<title></title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t <title>ProSync</title>
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"description\" content=\"\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

\t<link
\thref=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
\t<!-- Favicon -->
\t<link
\t src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "image", [], "any", false, false, false, 16))), "html", null, true);
        echo "\">

\t<!-- Symfony Encore CSS -->
\t";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "</head>
<body>
\t<!-- =============== Navigation ================ -->
\t<div class=\"container_side\">
\t\t<div class=\"navigation\">
\t\t\t<div class=\"scrollable\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><img class=\"ion-icon logo\"src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        echo "\" width=\"32\" height=\"32\" alt=\"Prosync logo\"></span><span class=\"title\">Prosync</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fas fa-home ion-icon\"></i></span><span class=\"title\">Dashboard</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fas fa-users ion-icon\"></i></span><span class=\"title\">CRM</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fas fa-chart-line ion-icon\"></i></span><span class=\"title\">Gestion investissement</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fas fa-money-bill-alt ion-icon\"></i></span><span class=\"title\">Pret</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fa fa-newspaper ion-icon\"></i></span><span class=\"title\">Blog</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fas fa-briefcase ion-icon\"></i></span><span class=\"title\">Categories</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fas fa-shopping-bag ion-icon\"></i></span><span class=\"title\">Porducts</span></a></li>
\t\t\t\t<li><a href=\"/AfficherListeUsers\"><span class=\"icon\"><i class=\"fas fa-users ion-icon\"></i></span><span class=\"title\">Utilisateurs</span></a></li>
\t\t\t\t<li><a href=\"/home/Adduser\"><span class=\"icon\"><i class=\"fas fa-user-plus ion-icon\"></i></span><span class=\"title\">Ajouter utilisateur</span></a></li>
                <li><a href=\"/profile\"><span class=\"icon\"><i class=\"fas fa-user ion-icon\"></i></span><span class=\"title\">Mon profile</span></a></li>
\t\t\t\t<li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><span class=\"icon\"><i class=\"fas fa-sign-out-alt ion-icon\"></i></span><span class=\"title\">Sign Out</span></a></li>
\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- ========================= Main ==================== -->
\t<div class=\"main\">
\t\t<div class=\"topbar\">
\t\t\t<div class=\"toggle\">
\t\t\t\t<i class=\"fas fa-bars fa-2x ion-icon\"></i>
\t\t\t</div>

\t\t\t<div class=\"user\"><img src=\"#\" alt=\"\"></div>
\t\t</div>

\t\t";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        echo "<!-- Symfony Encore JS -->";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "
\t\t";
        // line 21
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("styles_back");
        echo "
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
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

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app_back");
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back_office/base_back.html.twig";
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
        return array (  178 => 59,  151 => 58,  139 => 21,  136 => 20,  126 => 19,  114 => 58,  94 => 41,  80 => 30,  71 => 23,  69 => 19,  63 => 16,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
\t<meta charset=\"UTF-8\">
\t<title></title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t <title>ProSync</title>
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"description\" content=\"\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

\t<link
\thref=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
\t<!-- Favicon -->
\t<link
\t src=\"{{ asset('uploads/images/' ~ app.user.image) }}\">

\t<!-- Symfony Encore CSS -->
\t{% block stylesheets %}

\t\t{{ encore_entry_link_tags('styles_back') }}
\t{% endblock %}
</head>
<body>
\t<!-- =============== Navigation ================ -->
\t<div class=\"container_side\">
\t\t<div class=\"navigation\">
\t\t\t<div class=\"scrollable\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><img class=\"ion-icon logo\"src=\"{{ asset('assets/images/favicon.png') }}\" width=\"32\" height=\"32\" alt=\"Prosync logo\"></span><span class=\"title\">Prosync</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fas fa-home ion-icon\"></i></span><span class=\"title\">Dashboard</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fas fa-users ion-icon\"></i></span><span class=\"title\">CRM</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fas fa-chart-line ion-icon\"></i></span><span class=\"title\">Gestion investissement</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fas fa-money-bill-alt ion-icon\"></i></span><span class=\"title\">Pret</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fa fa-newspaper ion-icon\"></i></span><span class=\"title\">Blog</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fas fa-briefcase ion-icon\"></i></span><span class=\"title\">Categories</span></a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"icon\"><i class=\"fas fa-shopping-bag ion-icon\"></i></span><span class=\"title\">Porducts</span></a></li>
\t\t\t\t<li><a href=\"/AfficherListeUsers\"><span class=\"icon\"><i class=\"fas fa-users ion-icon\"></i></span><span class=\"title\">Utilisateurs</span></a></li>
\t\t\t\t<li><a href=\"/home/Adduser\"><span class=\"icon\"><i class=\"fas fa-user-plus ion-icon\"></i></span><span class=\"title\">Ajouter utilisateur</span></a></li>
                <li><a href=\"/profile\"><span class=\"icon\"><i class=\"fas fa-user ion-icon\"></i></span><span class=\"title\">Mon profile</span></a></li>
\t\t\t\t<li><a href=\"{{ path('app_logout') }}\"><span class=\"icon\"><i class=\"fas fa-sign-out-alt ion-icon\"></i></span><span class=\"title\">Sign Out</span></a></li>
\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- ========================= Main ==================== -->
\t<div class=\"main\">
\t\t<div class=\"topbar\">
\t\t\t<div class=\"toggle\">
\t\t\t\t<i class=\"fas fa-bars fa-2x ion-icon\"></i>
\t\t\t</div>

\t\t\t<div class=\"user\"><img src=\"#\" alt=\"\"></div>
\t\t</div>

\t\t{% block body %}{% endblock %}<!-- Symfony Encore JS -->{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app_back') }}
\t\t{% endblock %}
", "back_office/base_back.html.twig", "C:\\xampp\\htdocs\\lekherni3\\PIdev\\templates\\back_office\\base_back.html.twig");
    }
}
