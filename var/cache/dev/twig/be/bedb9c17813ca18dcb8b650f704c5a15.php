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

/* security/login.html.twig */
class __TwigTemplate_871d6bfab5782b1a27d5f28a931cd78a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg\" class=\"img-fluid\" alt=\"Phone image\">
      </div>
      <div class=\"col-md-7 col-lg-5 col-xl-5 offset-xl-1\">
      <h1>Login Here</h1></br>
        <form method=\"post\">
          ";
        // line 18
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageKey", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageData", [], "any", false, false, false, 19), "security"), "html", null, true);
            echo "</div>
          ";
        }
        // line 21
        echo "
          ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "            <div class=\"mb-3\">
                You are logged in as ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "userIdentifier", [], "any", false, false, false, 24), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
          ";
        }
        // line 27
        echo "
          <!-- Email input -->
          <div class=\"form-outline mb-4\">
            <input type=\"email\" id=\"form1Example13\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" class=\"form-control form-control-lg\" />
            <label class=\"form-label\" for=\"form1Example13\">Email address</label>
          </div>

          <!-- Password input -->
          <div class=\"form-outline mb-4\">
             <div class=\"input-group\">
              <input type=\"password\" id=\"form1Example23\" name=\"password\" class=\"form-control form-control-lg\" />
              <span class=\"input-group-text password-toggle-btn\" id=\"togglePassword\"><i class=\"fa fa-eye\"></i></span>
            </div>
            
            <label class=\"form-label\" for=\"form1Example23\">Password</label>
          </div>

          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

          <div class=\"d-flex justify-content-around align-items-center mb-4\">
            <!-- Checkbox -->
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"form1Example3\" checked />
              <label class=\"form-check-label\" for=\"form1Example3\"> Remember me </label>
            </div>
            <a href=\"#!\">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Sign in</button>

          <div class=\"divider d-flex align-items-center my-4\">
            <p class=\"text-center fw-bold mx-3 mb-0 text-muted\">OR</p>
          </div>

         
        </form>
 <a class=\"btn btn-primary btn-lg btn-block\" style=\"background-color: #3b5998\" href=\"/register\" role=\"button\">
           <i class=\"fas fa-user-plus me-2\"></i>Registration
          </a>
        
      </div>
    </div>
  </div>
</section>

<style>
.divider:after,
.divider:before {
  content: \"\";
  flex: 1;
  height: 1px;
  background: #eee;
}
</style>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<script>
  \$(document).ready(function() {
    \$('#togglePassword').click(function() {
      var passwordField = \$('#form1Example23');
      var fieldType = passwordField.attr('type');
      if (fieldType === 'password') {
        passwordField.attr('type', 'text');
        \$(this).find('i').removeClass('fa-eye').addClass('fa-eye-slash');
      } else {
        passwordField.attr('type', 'password');
        \$(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');
      }
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
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  129 => 44,  112 => 30,  107 => 27,  99 => 24,  96 => 23,  94 => 22,  91 => 21,  85 => 19,  83 => 18,  66 => 3,  47 => 2,  44 => 1,);
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
        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg\" class=\"img-fluid\" alt=\"Phone image\">
      </div>
      <div class=\"col-md-7 col-lg-5 col-xl-5 offset-xl-1\">
      <h1>Login Here</h1></br>
        <form method=\"post\">
          {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
          {% endif %}

          {% if app.user %}
            <div class=\"mb-3\">
                You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
          {% endif %}

          <!-- Email input -->
          <div class=\"form-outline mb-4\">
            <input type=\"email\" id=\"form1Example13\" value=\"{{ last_username }}\" name=\"email\" class=\"form-control form-control-lg\" />
            <label class=\"form-label\" for=\"form1Example13\">Email address</label>
          </div>

          <!-- Password input -->
          <div class=\"form-outline mb-4\">
             <div class=\"input-group\">
              <input type=\"password\" id=\"form1Example23\" name=\"password\" class=\"form-control form-control-lg\" />
              <span class=\"input-group-text password-toggle-btn\" id=\"togglePassword\"><i class=\"fa fa-eye\"></i></span>
            </div>
            
            <label class=\"form-label\" for=\"form1Example23\">Password</label>
          </div>

          <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

          <div class=\"d-flex justify-content-around align-items-center mb-4\">
            <!-- Checkbox -->
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"form1Example3\" checked />
              <label class=\"form-check-label\" for=\"form1Example3\"> Remember me </label>
            </div>
            <a href=\"#!\">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Sign in</button>

          <div class=\"divider d-flex align-items-center my-4\">
            <p class=\"text-center fw-bold mx-3 mb-0 text-muted\">OR</p>
          </div>

         
        </form>
 <a class=\"btn btn-primary btn-lg btn-block\" style=\"background-color: #3b5998\" href=\"/register\" role=\"button\">
           <i class=\"fas fa-user-plus me-2\"></i>Registration
          </a>
        
      </div>
    </div>
  </div>
</section>

<style>
.divider:after,
.divider:before {
  content: \"\";
  flex: 1;
  height: 1px;
  background: #eee;
}
</style>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<script>
  \$(document).ready(function() {
    \$('#togglePassword').click(function() {
      var passwordField = \$('#form1Example23');
      var fieldType = passwordField.attr('type');
      if (fieldType === 'password') {
        passwordField.attr('type', 'text');
        \$(this).find('i').removeClass('fa-eye').addClass('fa-eye-slash');
      } else {
        passwordField.attr('type', 'password');
        \$(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');
      }
    });
  });
</script>
{% endblock %}
", "security/login.html.twig", "C:\\xampp\\htdocs\\lekhreni\\PIdev\\templates\\security\\login.html.twig");
    }
}
