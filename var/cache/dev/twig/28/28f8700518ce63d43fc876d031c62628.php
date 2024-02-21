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

/* registration/register.html.twig */
class __TwigTemplate_26b0c70322aff17c9a2be2dbd32f171a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<!-- Styles CSS de Bootstrap et de MDB5 -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"https://cdn.jsdelivr.net/npm/mdb@5.3.0-alpha1/dist/css/mdb.min.css\" rel=\"stylesheet\">

<!-- Font Awesome (facultatif, si vous en avez besoin) -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">
<section class=\"vh-100\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex align-items-center justify-content-center h-100\">
      <div class=\"col-md-8 col-lg-7 col-xl-6\">
        <!-- Image à gauche -->
        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg\" class=\"img-fluid\" alt=\"Phone image\">
      </div>
      <div class=\"col-md-7 col-lg-5 col-xl-5 offset-xl-1\">
        <!-- Formulaire à droite -->
        <h1>Register Here</h1></br>
        <form method=\"post\">
          ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'errors');
        echo "

          <!-- Ajout du jeton CSRF -->
          ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "_token", [], "any", false, false, false, 22), 'widget');
        echo "

          <!-- Email input -->
          <div class=\"form-outline mb-4\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Email address"]]);
        echo "
          </div>

          <!-- Lastname input -->
          <div class=\"form-outline mb-4\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "lastname", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Lastname"]]);
        echo "
          </div>

          <!-- Numtel input -->
          <div class=\"form-outline mb-4\">
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "numtel", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Phone number"]]);
        echo "
          </div>

          <!-- Adresse input -->
          <div class=\"form-outline mb-4\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "adresse", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Address"]]);
        echo "
          </div>

          <!-- Password input -->
          <div class=\"form-outline mb-4\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "plainPassword", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Password"]]);
        echo "
          </div>

          <!-- Role input -->
          <div class=\"form-outline mb-4\">
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "roles", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Roles"]]);
        echo "
          </div>

          <!-- AgreeTerms checkbox -->
          <div class=\"form-check mb-4\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "agreeTerms", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-check-input", "type" => "checkbox"]]);
        echo "
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "agreeTerms", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "I agree to the terms and conditions"]);
        echo "
          </div>

          <!-- Submit button -->
          <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Register</button>
                            <a href=\"/login\" class=\"btn btn-sucess btn-lg btn-block\">Login</a>

        </form>

      </div>
    </div>
  </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  147 => 57,  143 => 56,  135 => 51,  127 => 46,  119 => 41,  111 => 36,  103 => 31,  95 => 26,  88 => 22,  82 => 19,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<!-- Styles CSS de Bootstrap et de MDB5 -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"https://cdn.jsdelivr.net/npm/mdb@5.3.0-alpha1/dist/css/mdb.min.css\" rel=\"stylesheet\">

<!-- Font Awesome (facultatif, si vous en avez besoin) -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">
<section class=\"vh-100\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex align-items-center justify-content-center h-100\">
      <div class=\"col-md-8 col-lg-7 col-xl-6\">
        <!-- Image à gauche -->
        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg\" class=\"img-fluid\" alt=\"Phone image\">
      </div>
      <div class=\"col-md-7 col-lg-5 col-xl-5 offset-xl-1\">
        <!-- Formulaire à droite -->
        <h1>Register Here</h1></br>
        <form method=\"post\">
          {{ form_errors(registrationForm) }}

          <!-- Ajout du jeton CSRF -->
          {{ form_widget(registrationForm._token) }}

          <!-- Email input -->
          <div class=\"form-outline mb-4\">
            {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Email address'}}) }}
          </div>

          <!-- Lastname input -->
          <div class=\"form-outline mb-4\">
            {{ form_widget(registrationForm.lastname, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Lastname'}}) }}
          </div>

          <!-- Numtel input -->
          <div class=\"form-outline mb-4\">
            {{ form_widget(registrationForm.numtel, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Phone number'}}) }}
          </div>

          <!-- Adresse input -->
          <div class=\"form-outline mb-4\">
            {{ form_widget(registrationForm.adresse, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Address'}}) }}
          </div>

          <!-- Password input -->
          <div class=\"form-outline mb-4\">
            {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Password'}}) }}
          </div>

          <!-- Role input -->
          <div class=\"form-outline mb-4\">
            {{ form_widget(registrationForm.roles, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Roles'}}) }}
          </div>

          <!-- AgreeTerms checkbox -->
          <div class=\"form-check mb-4\">
            {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input', 'type': 'checkbox'}}) }}
            {{ form_label(registrationForm.agreeTerms, 'I agree to the terms and conditions', {'label_attr': {'class': 'form-check-label'}}) }}
          </div>

          <!-- Submit button -->
          <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Register</button>
                            <a href=\"/login\" class=\"btn btn-sucess btn-lg btn-block\">Login</a>

        </form>

      </div>
    </div>
  </div>
</section>
{% endblock %}
", "registration/register.html.twig", "C:\\xampp\\htdocs\\ProjetDev\\templates\\registration\\register.html.twig");
    }
}
