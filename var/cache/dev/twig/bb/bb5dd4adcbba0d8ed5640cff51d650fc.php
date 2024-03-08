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

/* back_office/dashboard_back.html.twig */
class __TwigTemplate_23902e6c3a0f6a86feb47c505eab8024 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/dashboard_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/dashboard_back.html.twig"));

        $this->parent = $this->loadTemplate("back_office/base_back.html.twig", "back_office/dashboard_back.html.twig", 1);
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
\t";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 262
        echo "
<!-- Symfony Encore JS -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t\t<!-- ======================= Cards ================== -->
\t\t<div class=\"sidebar\">
\t\t\t
\t\t\t<div class=\"cardBox\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"numbers\">1,504</div>
\t\t\t\t\t\t<div class=\"cardName\">Daily Views</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"iconBx\">
\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"numbers\">80</div>
\t\t\t\t\t\t<div class=\"cardName\">Sales</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"iconBx\">
\t\t\t\t\t\t<i class=\"fas fa-shopping-cart\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"numbers\">284</div>
\t\t\t\t\t\t<div class=\"cardName\">Comments</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"iconBx\">
\t\t\t\t\t\t<i class=\"fas fa-comment\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"numbers\">\$7,842</div>
\t\t\t\t\t\t<div class=\"cardName\">Earning</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"iconBx\">
\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- ================ Order Details List ================= -->
\t\t\t<div class=\"details\">
\t\t\t\t<div class=\"recentOrders\">
\t\t\t\t\t<div class=\"cardHeader\">
\t\t\t\t\t\t<h2>Recent Orders</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"btn\">View All</a>
\t\t\t\t\t</div>

\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Name</td>
\t\t\t\t\t\t\t\t<td>Price</td>
\t\t\t\t\t\t\t\t<td>Payment</td>
\t\t\t\t\t\t\t\t<td>Status</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>

\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Star Refrigerator</td>
\t\t\t\t\t\t\t\t<td>\$1200</td>
\t\t\t\t\t\t\t\t<td>Paid</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status delivered\">Delivered</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Dell Laptop</td>
\t\t\t\t\t\t\t\t<td>\$110</td>
\t\t\t\t\t\t\t\t<td>Due</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status pending\">Pending</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Apple Watch</td>
\t\t\t\t\t\t\t\t<td>\$1200</td>
\t\t\t\t\t\t\t\t<td>Paid</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status return\">Return</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Addidas Shoes</td>
\t\t\t\t\t\t\t\t<td>\$620</td>
\t\t\t\t\t\t\t\t<td>Due</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status inProgress\">In Progress</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Star Refrigerator</td>
\t\t\t\t\t\t\t\t<td>\$1200</td>
\t\t\t\t\t\t\t\t<td>Paid</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status delivered\">Delivered</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Dell Laptop</td>
\t\t\t\t\t\t\t\t<td>\$110</td>
\t\t\t\t\t\t\t\t<td>Due</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status pending\">Pending</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Apple Watch</td>
\t\t\t\t\t\t\t\t<td>\$1200</td>
\t\t\t\t\t\t\t\t<td>Paid</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status return\">Return</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Addidas Shoes</td>
\t\t\t\t\t\t\t\t<td>\$620</td>
\t\t\t\t\t\t\t\t<td>Due</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status inProgress\">In Progress</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<!-- ================= New Customers ================ -->
\t\t\t\t<div class=\"recentCustomers\">
\t\t\t\t\t<div class=\"cardHeader\">
\t\t\t\t\t\t<h2>Recent Customers</h2>
\t\t\t\t\t</div>

\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer02.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>David
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>Italy</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer01.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>Amit
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>India</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer02.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>David
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>Italy</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer01.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>Amit
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>India</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer02.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>David
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>Italy</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer01.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>Amit
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>India</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer01.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>David
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>Italy</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer02.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>Amit
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>India</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 263
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 264
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app_back");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back_office/dashboard_back.html.twig";
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
        return array (  395 => 264,  385 => 263,  124 => 10,  114 => 9,  103 => 262,  101 => 9,  98 => 8,  88 => 7,  76 => 4,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back_office/base_back.html.twig' %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('styles_dashbaord') }}
{% endblock %}

{% block content %}

\t{% block body %}
\t\t<!-- ======================= Cards ================== -->
\t\t<div class=\"sidebar\">
\t\t\t
\t\t\t<div class=\"cardBox\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"numbers\">1,504</div>
\t\t\t\t\t\t<div class=\"cardName\">Daily Views</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"iconBx\">
\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"numbers\">80</div>
\t\t\t\t\t\t<div class=\"cardName\">Sales</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"iconBx\">
\t\t\t\t\t\t<i class=\"fas fa-shopping-cart\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"numbers\">284</div>
\t\t\t\t\t\t<div class=\"cardName\">Comments</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"iconBx\">
\t\t\t\t\t\t<i class=\"fas fa-comment\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"numbers\">\$7,842</div>
\t\t\t\t\t\t<div class=\"cardName\">Earning</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"iconBx\">
\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- ================ Order Details List ================= -->
\t\t\t<div class=\"details\">
\t\t\t\t<div class=\"recentOrders\">
\t\t\t\t\t<div class=\"cardHeader\">
\t\t\t\t\t\t<h2>Recent Orders</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"btn\">View All</a>
\t\t\t\t\t</div>

\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Name</td>
\t\t\t\t\t\t\t\t<td>Price</td>
\t\t\t\t\t\t\t\t<td>Payment</td>
\t\t\t\t\t\t\t\t<td>Status</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>

\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Star Refrigerator</td>
\t\t\t\t\t\t\t\t<td>\$1200</td>
\t\t\t\t\t\t\t\t<td>Paid</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status delivered\">Delivered</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Dell Laptop</td>
\t\t\t\t\t\t\t\t<td>\$110</td>
\t\t\t\t\t\t\t\t<td>Due</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status pending\">Pending</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Apple Watch</td>
\t\t\t\t\t\t\t\t<td>\$1200</td>
\t\t\t\t\t\t\t\t<td>Paid</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status return\">Return</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Addidas Shoes</td>
\t\t\t\t\t\t\t\t<td>\$620</td>
\t\t\t\t\t\t\t\t<td>Due</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status inProgress\">In Progress</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Star Refrigerator</td>
\t\t\t\t\t\t\t\t<td>\$1200</td>
\t\t\t\t\t\t\t\t<td>Paid</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status delivered\">Delivered</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Dell Laptop</td>
\t\t\t\t\t\t\t\t<td>\$110</td>
\t\t\t\t\t\t\t\t<td>Due</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status pending\">Pending</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Apple Watch</td>
\t\t\t\t\t\t\t\t<td>\$1200</td>
\t\t\t\t\t\t\t\t<td>Paid</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status return\">Return</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Addidas Shoes</td>
\t\t\t\t\t\t\t\t<td>\$620</td>
\t\t\t\t\t\t\t\t<td>Due</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"status inProgress\">In Progress</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<!-- ================= New Customers ================ -->
\t\t\t\t<div class=\"recentCustomers\">
\t\t\t\t\t<div class=\"cardHeader\">
\t\t\t\t\t\t<h2>Recent Customers</h2>
\t\t\t\t\t</div>

\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer02.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>David
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>Italy</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer01.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>Amit
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>India</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer02.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>David
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>Italy</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer01.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>Amit
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>India</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer02.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>David
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>Italy</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer01.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>Amit
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>India</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer01.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>David
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>Italy</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"60px\">
\t\t\t\t\t\t\t\t<div class=\"imgBx\"><img src=\"assets/imgs/customer02.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h4>Amit
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span>India</span>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</body>
{% endblock %}

<!-- Symfony Encore JS -->{% endblock %}{% block javascripts %}
{{ encore_entry_script_tags('app_back') }}{% endblock %}
", "back_office/dashboard_back.html.twig", "C:\\xampp\\htdocs\\lekhreni\\PIdev\\templates\\back_office\\dashboard_back.html.twig");
    }
}
