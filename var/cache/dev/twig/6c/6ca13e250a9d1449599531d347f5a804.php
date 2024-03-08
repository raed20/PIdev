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

/* user/add.html.twig */
class __TwigTemplate_6d7e1b63d0513a82096b5e72d4809e3f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/add.html.twig"));

        $this->parent = $this->loadTemplate("back_office/base_back.html.twig", "user/add.html.twig", 1);
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
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "
";
        // line 24
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app_back");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "<div class=\"container-fluid\">
          
  
          <div class=\"row justify-content-center\">
            <!-- column -->
            <div class=\"col-lg-10\">
            

            <div class=\"card\">
                <div class=\"card-body\">
            <h3>Add User</h3></br></br>
            <form method=\"post\" novalidate enctype=\"multipart/form-data\" >
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 41, $this->source); })()), 'form_start');
        echo "
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Email Here"]]);
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 47, $this->source); })()), "roles", [], "any", false, false, false, 47), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col\">
                    <label for=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 52, $this->source); })()), "password", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
        echo "\" class=\"form-label\">Password</label>
                        <div class=\"input-group\">
                          ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control form-control-lg password-toggle", "placeholder" => "Password Here"]]);
        echo "    
                             <i class=\"bi bi-eye-slash\"></i>          
                       </div>
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 61, $this->source); })()), "lastname", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Lastname Here"]]);
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 64, $this->source); })()), "numtel", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Phone number Here"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 69, $this->source); })()), "adresse", [], "any", false, false, false, 69), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Address Here"]]);
        echo "
                    </div>
                </div>                
                <div class=\"row mb-4\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 73, $this->source); })()), "image", [], "any", false, false, false, 73), 'row', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        <button type=\"submit\" class=\"btn btn-primary\">AddUser</button>
                    </div>
                </div>
                ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 80, $this->source); })()), 'form_end');
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/add.html.twig";
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
        return array (  218 => 80,  208 => 73,  201 => 69,  193 => 64,  187 => 61,  177 => 54,  172 => 52,  164 => 47,  158 => 44,  152 => 41,  138 => 29,  128 => 28,  116 => 24,  113 => 23,  103 => 22,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
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
            <h3>Add User</h3></br></br>
            <form method=\"post\" novalidate enctype=\"multipart/form-data\" >
                {{ form_start(f) }}
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        {{ form_row(f.email, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Email Here'}}) }}
                    </div>
                    <div class=\"col\">
                        {{ form_row(f.roles) }}
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col\">
                    <label for=\"{{ f.password.vars.id }}\" class=\"form-label\">Password</label>
                        <div class=\"input-group\">
                          {{ form_widget(f.password, {'attr': {'class': 'form-control form-control-lg password-toggle', 'placeholder': 'Password Here'}}) }}    
                             <i class=\"bi bi-eye-slash\"></i>          
                       </div>
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        {{ form_row(f.lastname, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Lastname Here'}}) }}
                    </div>
                    <div class=\"col\">
                        {{ form_row(f.numtel, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Phone number Here'}}) }}
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        {{ form_row(f.adresse, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Address Here'}}) }}
                    </div>
                </div>                
                <div class=\"row mb-4\">
                        {{ form_row(f.image, {'attr': {'class': 'form-control form-control-lg'}}) }}
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        <button type=\"submit\" class=\"btn btn-primary\">AddUser</button>
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
{% endblock %}
", "user/add.html.twig", "C:\\xampp\\htdocs\\lekhreni\\PIdev\\templates\\user\\add.html.twig");
    }
}
