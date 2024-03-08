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

/* back_office/user/edit.html.twig */
class __TwigTemplate_8bdd590ffe84fac1f876274ccc249ce1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/user/edit.html.twig"));

        $this->parent = $this->loadTemplate("back_office/base_back.html.twig", "back_office/user/edit.html.twig", 1);
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

    // line 6
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "
";
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app_back");
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

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "<div class=\"container-fluid\">
          
  
          <div class=\"row justify-content-center\">
            <!-- column -->
            <div class=\"col-lg-10\">
            

            <div class=\"card\">
                <div class=\"card-body\">
                    <h1 class=\"mb-4\">Edit User</h1>
            <form method=\"post\" novalidate enctype=\"multipart/form-data\">
                ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 39, $this->source); })()), 'form_start');
        echo "
                <div class=\"mb-4\">
                            <div class=\"text-center\">
                        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42), "image", [], "any", false, false, false, 42)) {
            // line 43
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 43, $this->source); })()), "vars", [], "any", false, false, false, 43), "value", [], "any", false, false, false, 43), "image", [], "any", false, false, false, 43))), "html", null, true);
            echo "\" alt=\"User Image\" class=\"rounded-circle\" width=\"200\" height=\"200\">
                        ";
        }
        // line 45
        echo "                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Email"]]);
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 52, $this->source); })()), "roles", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 57, $this->source); })()), "password", [], "any", false, false, false, 57), 'row', ["attr" => ["class" => "form-control form-control-lg password-toggle", "placeholder" => "Password"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 62, $this->source); })()), "lastname", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Lastname"]]);
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 65, $this->source); })()), "numtel", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Phone number"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 70, $this->source); })()), "adresse", [], "any", false, false, false, 70), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Address"]]);
        echo "
                    </div>
                </div>
               <div class=\"row mb-4\">
                    <div class=\"col\">
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 75, $this->source); })()), "image", [], "any", false, false, false, 75), 'row', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
                    </div>
                </div> 
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        <button type=\"submit\" class=\"btn btn-primary\">Update User</button>
                    </div>
                </div>
                ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 83, $this->source); })()), 'form_end');
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
        return "back_office/user/edit.html.twig";
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
        return array (  227 => 83,  216 => 75,  208 => 70,  200 => 65,  194 => 62,  186 => 57,  178 => 52,  172 => 49,  166 => 45,  160 => 43,  158 => 42,  152 => 39,  138 => 27,  128 => 26,  100 => 8,  97 => 7,  87 => 6,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back_office/base_back.html.twig' %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('styles_dashbaord') }}
{% endblock %}
    {% block javascripts %}

{{ encore_entry_script_tags('app_back') }}
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
{% block body %}
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
{% endblock %}
", "back_office/user/edit.html.twig", "C:\\xampp\\htdocs\\lekhreni\\PIdev\\templates\\back_office\\user\\edit.html.twig");
    }
}
