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
class __TwigTemplate_f2acf966a5dbc81d5bd6a79dacc7f7f6 extends Template
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
        echo "
";
        // line 2
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

        // line 3
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
        <form method=\"post\" novalidate enctype=\"multipart/form-data\">
          ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), 'errors');
        echo "

          <!-- Ajout du jeton CSRF -->
          ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "_token", [], "any", false, false, false, 23), 'widget');
        echo "

          <!-- Email input -->
          <div class=\"form-outline mb-4\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Email address"]]);
        echo "
          </div>

          <!-- Lastname input -->
          <div class=\"form-outline mb-4\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "lastname", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Lastname"]]);
        echo "
          </div>

          <!-- Numtel input -->
          <div class=\"form-outline mb-4\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "numtel", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Phone number"]]);
        echo "
          </div>

          <!-- Adresse input -->
          <div class=\"form-outline mb-4\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "adresse", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Address"]]);
        echo "
          </div>

          <!-- Password input -->
          <div class=\"form-outline mb-4\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "plainPassword", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Password"]]);
        echo "
          </div>

          <!-- Role input -->
          <div class=\"form-outline mb-4\">
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "roles", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Roles"]]);
        echo "
</div>



          <!-- Photo input -->
          <div class=\"form-outline mb-4\">
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "image", [], "any", false, false, false, 59), 'row', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
          </div>
          

          <!-- AgreeTerms checkbox -->
          <div class=\"form-check mb-4\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "agreeTerms", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-check-input", "type" => "checkbox"]]);
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "agreeTerms", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "I agree to the terms and conditions"]);
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
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
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
        return array (  161 => 66,  157 => 65,  148 => 59,  138 => 52,  130 => 47,  122 => 42,  114 => 37,  106 => 32,  98 => 27,  91 => 23,  85 => 20,  66 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}
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
        <form method=\"post\" novalidate enctype=\"multipart/form-data\">
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
            {{ form_row(registrationForm.plainPassword, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Password'}}) }}
          </div>

          <!-- Role input -->
          <div class=\"form-outline mb-4\">
    {{ form_widget(registrationForm.roles, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Roles'}}) }}
</div>



          <!-- Photo input -->
          <div class=\"form-outline mb-4\">
            {{ form_row(registrationForm.image, {'attr': {'class': 'form-control form-control-lg'}}) }}
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
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
{% endblock %}
", "registration/register.html.twig", "C:\\xampp\\htdocs\\lekhreni\\PIdev\\templates\\registration\\register.html.twig");
    }
}
