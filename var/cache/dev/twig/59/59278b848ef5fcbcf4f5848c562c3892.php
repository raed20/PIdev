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

/* security/login1.html.twig */
class __TwigTemplate_66037f4666d9c8f721d72eca466b716c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login1.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>ProSync</title>
  <link rel=\"shortcut icon\" type=\"image/png\" href=\"../assetss/images/logos/favicon.png\" />
  <link rel=\"stylesheet\" href=\"../assetss/css/styles.min.css\" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class=\"page-wrapper\" id=\"main-wrapper\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\"
    data-sidebar-position=\"fixed\" data-header-position=\"fixed\">
    <div
      class=\"position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center\">
      <div class=\"d-flex align-items-center justify-content-center w-100\">
        <div class=\"row justify-content-center w-100\">
          <div class=\"col-md-8 col-lg-6 col-xxl-3\">
            <div class=\"card mb-0\">
              <div class=\"card-body\">
                <a href=\"index.html\" class=\"text-nowrap logo-img text-center d-block py-3 w-100\">
                  <img src=\"../assetss/images/logos/prosyc.jpg\" width=\"200\" alt=\"\">
                </a>
                <p class=\"text-center\">Alliance stratégiques impact puissant</p>
                <form>
                  <div class=\"mb-3\">
                    <label for=\"exampleInputEmail1\" class=\"form-label\">Username</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                  </div>
                  <div class=\"mb-4\">
                    <label for=\"exampleInputPassword1\" class=\"form-label\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
                  </div>
                  <div class=\"d-flex align-items-center justify-content-between mb-4\">
                    <div class=\"form-check\">
                      <input class=\"form-check-input primary\" type=\"checkbox\" value=\"\" id=\"flexCheckChecked\" checked>
                      <label class=\"form-check-label text-dark\" for=\"flexCheckChecked\">
                        Remeber this Device
                      </label>
                    </div>
                    <!-- <a class=\"text-primary fw-bold\" href=\"./index.html\">Forgot Password ?</a> -->
                  </div>
                  <a href=\"./index.html\" class=\"btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2\">Sign In</a>
                  <div class=\"d-flex align-items-center justify-content-center\">
                    <p class=\"fs-4 mb-0 fw-bold\">New to Prosync ?</p>
                    <a class=\"text-primary fw-bold ms-2\" href=\"register.html\">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src=\"../assetss/libs/jquery/dist/jquery.min.js\"></script>
  <script src=\"../assetss/libs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
  
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login1.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>ProSync</title>
  <link rel=\"shortcut icon\" type=\"image/png\" href=\"../assetss/images/logos/favicon.png\" />
  <link rel=\"stylesheet\" href=\"../assetss/css/styles.min.css\" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class=\"page-wrapper\" id=\"main-wrapper\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\"
    data-sidebar-position=\"fixed\" data-header-position=\"fixed\">
    <div
      class=\"position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center\">
      <div class=\"d-flex align-items-center justify-content-center w-100\">
        <div class=\"row justify-content-center w-100\">
          <div class=\"col-md-8 col-lg-6 col-xxl-3\">
            <div class=\"card mb-0\">
              <div class=\"card-body\">
                <a href=\"index.html\" class=\"text-nowrap logo-img text-center d-block py-3 w-100\">
                  <img src=\"../assetss/images/logos/prosyc.jpg\" width=\"200\" alt=\"\">
                </a>
                <p class=\"text-center\">Alliance stratégiques impact puissant</p>
                <form>
                  <div class=\"mb-3\">
                    <label for=\"exampleInputEmail1\" class=\"form-label\">Username</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                  </div>
                  <div class=\"mb-4\">
                    <label for=\"exampleInputPassword1\" class=\"form-label\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
                  </div>
                  <div class=\"d-flex align-items-center justify-content-between mb-4\">
                    <div class=\"form-check\">
                      <input class=\"form-check-input primary\" type=\"checkbox\" value=\"\" id=\"flexCheckChecked\" checked>
                      <label class=\"form-check-label text-dark\" for=\"flexCheckChecked\">
                        Remeber this Device
                      </label>
                    </div>
                    <!-- <a class=\"text-primary fw-bold\" href=\"./index.html\">Forgot Password ?</a> -->
                  </div>
                  <a href=\"./index.html\" class=\"btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2\">Sign In</a>
                  <div class=\"d-flex align-items-center justify-content-center\">
                    <p class=\"fs-4 mb-0 fw-bold\">New to Prosync ?</p>
                    <a class=\"text-primary fw-bold ms-2\" href=\"register.html\">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src=\"../assetss/libs/jquery/dist/jquery.min.js\"></script>
  <script src=\"../assetss/libs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
  
</body>

</html>", "security/login1.html.twig", "C:\\xampp\\htdocs\\ProjetDev\\templates\\security\\login1.html.twig");
    }
}
