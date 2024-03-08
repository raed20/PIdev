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

/* front_office/service/edit.html.twig */
class __TwigTemplate_f50851172be57c268b73717d82aa1d67 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front_office/base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/service/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/service/edit.html.twig"));

        $this->parent = $this->loadTemplate("front_office/base_front.html.twig", "front_office/service/edit.html.twig", 1);
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("styles_front");
        echo "
\t";
        // line 5
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("styles_profile");
        echo "
\t\t  <style>
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
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "\t\t\t
<div class=\"container mt-5\" style=\"background-color: #f7f7f7; padding-top: 90px; padding-bottom: 60px;\"> 
          <div class=\"row justify-content-center\" >
            <!-- column -->
            <div class=\"col-lg-10\" >
            

            <div class=\"card\" >
                <div class=\"card-body\" >
                    <h1 class=\"mb-4\" >Edit User</h1>
            <form method=\"post\" novalidate enctype=\"multipart/form-data\" >
                ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 59, $this->source); })()), 'form_start');
        echo "
                <div class=\"mb-4\" >
                            <div class=\"text-center\">
                        ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 62, $this->source); })()), "vars", [], "any", false, false, false, 62), "value", [], "any", false, false, false, 62), "image", [], "any", false, false, false, 62)) {
            // line 63
            echo "                         <div class=\"d-flex justify-content-center align-items-center\">
                            <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 64, $this->source); })()), "vars", [], "any", false, false, false, 64), "value", [], "any", false, false, false, 64), "image", [], "any", false, false, false, 64))), "html", null, true);
            echo "\" alt=\"User Image\" class=\"rounded-circle\" width=\"200\" height=\"200\">
                        ";
        }
        // line 66
        echo "                    </div>
                </div></br></br>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Email"]]);
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 73, $this->source); })()), "roles", [], "any", false, false, false, 73), 'row', ["attr" => ["class" => ""]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 78, $this->source); })()), "password", [], "any", false, false, false, 78), 'row', ["attr" => ["class" => "form-control form-control-lg password-toggle", "placeholder" => "Password"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 83, $this->source); })()), "lastname", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Lastname"]]);
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 86, $this->source); })()), "numtel", [], "any", false, false, false, 86), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Phone number"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 91, $this->source); })()), "adresse", [], "any", false, false, false, 91), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Address"]]);
        echo "
                    </div>
                </div>
               <div class=\"row mb-4\">
                    <div class=\"col\">
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 96, $this->source); })()), "image", [], "any", false, false, false, 96), 'row', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
                    </div>
                </div> 
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        <button type=\"submit\" class=\"btn btn-primary\">Update User</button>
                    </div>
                </div>
                ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 104, $this->source); })()), 'form_end');
        echo "
            </form>
        </div>
    </div>
</div>
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

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
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
        return "front_office/service/edit.html.twig";
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
        return array (  278 => 134,  268 => 133,  230 => 104,  219 => 96,  211 => 91,  203 => 86,  197 => 83,  189 => 78,  181 => 73,  175 => 70,  169 => 66,  164 => 64,  161 => 63,  159 => 62,  153 => 59,  131 => 48,  79 => 5,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front_office/base_front.html.twig' %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('styles_front') }}
\t{{ encore_entry_link_tags('styles_profile') }}
\t\t  <style>
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
\t{% endblock %}
   
{% block body %}\t\t\t
<div class=\"container mt-5\" style=\"background-color: #f7f7f7; padding-top: 90px; padding-bottom: 60px;\"> 
          <div class=\"row justify-content-center\" >
            <!-- column -->
            <div class=\"col-lg-10\" >
            

            <div class=\"card\" >
                <div class=\"card-body\" >
                    <h1 class=\"mb-4\" >Edit User</h1>
            <form method=\"post\" novalidate enctype=\"multipart/form-data\" >
                {{ form_start(f) }}
                <div class=\"mb-4\" >
                            <div class=\"text-center\">
                        {% if f.vars.value.image %}
                         <div class=\"d-flex justify-content-center align-items-center\">
                            <img src=\"{{ asset('uploads/images/' ~ f.vars.value.image) }}\" alt=\"User Image\" class=\"rounded-circle\" width=\"200\" height=\"200\">
                        {% endif %}
                    </div>
                </div></br></br>
                <div class=\"row mb-4\"> 
                    <div class=\"col\">
                        {{ form_row(f.email, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Email'}}) }}
                    </div>
                    <div class=\"col\">
                        {{ form_row(f.roles, {'attr': {'class': ''}}) }}
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
\t\t\t\t
{% block javascripts %}
    <script src=\"{{ asset('webpack/assets/js/front_office/frontoffice.js') }}\"></script>
{% endblock %}
", "front_office/service/edit.html.twig", "C:\\xampp\\htdocs\\lekherni3\\PIdev\\templates\\front_office\\service\\edit.html.twig");
    }
}
