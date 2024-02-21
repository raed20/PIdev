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
class __TwigTemplate_db87782bc2f79c5b211385e124b30a05 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-16\">
            <h3>Add User</h3></br></br>
            <form method=\"post\">
                ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
                <div class=\"row mb-4\"> <!-- Utilisation de mb-4 pour une marge inférieure plus grande -->
                    <div class=\"col\">
                        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Email"]]);
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 15, $this->source); })()), "roles", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\"> <!-- Utilisation de mb-4 pour une marge inférieure plus grande -->
                    <div class=\"col\">
                      
                             ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 21, $this->source); })()), "password", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control form-control-lg password-toggle", "placeholder" => "Password"]]);
        echo "
                            
                       

                         
                    </div>
                </div>
                <div class=\"row mb-4\"> <!-- Utilisation de mb-4 pour une marge inférieure plus grande -->
                    <div class=\"col\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 30, $this->source); })()), "lastname", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Lastname"]]);
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 33, $this->source); })()), "numtel", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Phone number"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\"> <!-- Utilisation de mb-4 pour une marge inférieure plus grande -->
                    <div class=\"col\">
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 38, $this->source); })()), "adresse", [], "any", false, false, false, 38), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Address"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\"> <!-- Utilisation de mb-4 pour une marge inférieure plus grande -->
                    <div class=\"col\">
                        <button type=\"submit\" class=\"btn btn-primary\">AddUser</button>
                    </div>
                </div>
                ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 46, $this->source); })()), 'form_end');
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
            // Changer l'icône en fonction du type de champ
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
        return array (  133 => 46,  122 => 38,  114 => 33,  108 => 30,  96 => 21,  87 => 15,  81 => 12,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-16\">
            <h3>Add User</h3></br></br>
            <form method=\"post\">
                {{ form_start(f) }}
                <div class=\"row mb-4\"> <!-- Utilisation de mb-4 pour une marge inférieure plus grande -->
                    <div class=\"col\">
                        {{ form_row(f.email, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Email'}}) }}
                    </div>
                    <div class=\"col\">
                        {{ form_row(f.roles, {'attr': {'class': 'form-control form-control-lg'}}) }}
                    </div>
                </div>
                <div class=\"row mb-4\"> <!-- Utilisation de mb-4 pour une marge inférieure plus grande -->
                    <div class=\"col\">
                      
                             {{ form_row(f.password, {'attr': {'class': 'form-control form-control-lg password-toggle', 'placeholder': 'Password'}}) }}
                            
                       

                         
                    </div>
                </div>
                <div class=\"row mb-4\"> <!-- Utilisation de mb-4 pour une marge inférieure plus grande -->
                    <div class=\"col\">
                        {{ form_row(f.lastname, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Lastname'}}) }}
                    </div>
                    <div class=\"col\">
                        {{ form_row(f.numtel, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Phone number'}}) }}
                    </div>
                </div>
                <div class=\"row mb-4\"> <!-- Utilisation de mb-4 pour une marge inférieure plus grande -->
                    <div class=\"col\">
                        {{ form_row(f.adresse, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Address'}}) }}
                    </div>
                </div>
                <div class=\"row mb-4\"> <!-- Utilisation de mb-4 pour une marge inférieure plus grande -->
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
            // Changer l'icône en fonction du type de champ
            \$(this).find('i').toggleClass('fa-eye fa-eye-slash');
        });
    });
});
</script>
{% endblock %}
", "user/add.html.twig", "C:\\xampp\\htdocs\\ProjetDev\\templates\\user\\add.html.twig");
    }
}
