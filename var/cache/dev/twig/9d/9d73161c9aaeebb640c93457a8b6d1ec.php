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

/* base.html.twig */
class __TwigTemplate_0679a7e320a55c4cabca169aca36bb87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>




<html dir=\"ltr\" lang=\"en\">
  <head>

  
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta
      name=\"keywords\"
      content=\"wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template\"
    />
    <meta
      name=\"description\"
      content=\"Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework\"
    />
    <meta name=\"robots\" content=\"noindex,nofollow\" />
    <title>Prosync</title>
    <!-- Favicon icon -->
    <link
      rel=\"icon\"
      type=\"image/png\"
      sizes=\"16x16\"
      href=\"../assets/images/favicon.png\"
    />
    <!-- Custom CSS -->
    <link
      href=\"../assets/libs/fullcalendar/dist/fullcalendar.min.css\"
      rel=\"stylesheet\"
    />
    <link href=\"../assets/extra-libs/calendar/calendar.css\" rel=\"stylesheet\" />
    <link href=\"../dist/css/style.min.css\" rel=\"stylesheet\" />
      </head>
       
            <body>
   
    <div class=\"preloader\">
      <div class=\"lds-ripple\">
        <div class=\"lds-pos\"></div>
        <div class=\"lds-pos\"></div>
      </div>
    </div>

    <div
      id=\"main-wrapper\"
      data-layout=\"vertical\"
      data-navbarbg=\"skin5\"
      data-sidebartype=\"full\"
      data-sidebar-position=\"absolute\"
      data-header-position=\"absolute\"
      data-boxed-layout=\"full\"
    >
      
      <header class=\"topbar\" data-navbarbg=\"skin5\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
          <div class=\"navbar-header\" data-logobg=\"skin5\">
          
            <a class=\"navbar-brand\" href=\"index.html\">
              <!-- Logo icon -->
              <b class=\"logo-icon ps-2\">
                <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src=\"../assets/images/logo_icon.png\"
                  alt=\"homepage\"
                  class=\"light-logo\"
                  width=\"210\"
                  
                />
              </b>
             
            </a>
            
            <a
              class=\"nav-toggler waves-effect waves-light d-block d-md-none\"
              href=\"javascript:void(0)\"
              ><i class=\"ti-menu ti-close\"></i
            ></a>
          </div>
        
          <div
            class=\"navbar-collapse collapse\"
            id=\"navbarSupportedContent\"
            data-navbarbg=\"skin5\"
          >
           
            <ul class=\"navbar-nav float-start me-auto\">
              <li class=\"nav-item d-none d-lg-block\">
                <a
                  class=\"nav-link sidebartoggler waves-effect waves-light\"
                  href=\"javascript:void(0)\"
                  data-sidebartype=\"mini-sidebar\"
                  ><i class=\"mdi mdi-menu font-24\"></i
                ></a>
              </li>
             
              <li class=\"nav-item dropdown\">
                <a
                  class=\"nav-link dropdown-toggle\"
                  href=\"#\"
                  id=\"navbarDropdown\"
                  role=\"button\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-md-block\"
                    >Create New <i class=\"fa fa-angle-down\"></i
                  ></span>
                  <span class=\"d-block d-md-none\"
                    ><i class=\"fa fa-plus\"></i
                  ></span>
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"#\">User</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Admin</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Fournisseur</a></li>     
                </ul>
              </li>
              
              <li class=\"nav-item search-box\">
                <a
                  class=\"nav-link waves-effect waves-dark\"
                  href=\"javascript:void(0)\"
                  ><i class=\"mdi mdi-magnify fs-4\"></i
                ></a>
                <form class=\"app-search position-absolute\">
                  <input
                    type=\"text\"
                    class=\"form-control\"
                    placeholder=\"Search &amp; enter\"
                  />
                  <a class=\"srh-btn\"><i class=\"mdi mdi-window-close\"></i></a>
                </form>
              </li>
            </ul>
        
            <ul class=\"navbar-nav float-end\">
              
              <li class=\"nav-item dropdown\">
                <a
                  class=\"nav-link dropdown-toggle\"
                  href=\"#\"
                  id=\"navbarDropdown\"
                  role=\"button\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <i class=\"mdi mdi-bell font-24\"></i>
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"#\">new</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Admin</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Fournisseur</a></li>     
                </ul>
              </li>
             
              <li class=\"nav-item dropdown\">
                <a
                  class=\"
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  \"
                  href=\"#\"
                  id=\"navbarDropdown\"
                  role=\"button\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <img
                    src=\"../assets/images/users/5.jpg\"
                    alt=\"user\"
                    class=\"rounded-circle\"
                    width=\"31\"
                  />
                </a>
                <ul
                  class=\"dropdown-menu dropdown-menu-end user-dd animated\"
                  aria-labelledby=\"navbarDropdown\"
                >
                  <a class=\"dropdown-item\" href=\"profileadmin.html\"
                    ><i class=\"mdi mdi-account me-1 ms-1\"></i> My Profile</a
                  >
                  <a class=\"dropdown-item\" href=\"javascript:void(0)\"
                    ><i class=\"mdi mdi-wallet me-1 ms-1\"></i> My Balance</a
                  >
                  <a class=\"dropdown-item\" href=\"javascript:void(0)\"
                    ><i class=\"mdi mdi-email me-1 ms-1\"></i> Inbox</a
                  >
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item\" href=\"javascript:void(0)\"
                    ><i class=\"mdi mdi-settings me-1 ms-1\"></i> Account
                    Setting</a
                  >
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item\" href=\"";
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"
                    ><i class=\"fa fa-power-off me-1 ms-1\" ></i> Logout</a
                  >

                   
                  <div class=\"dropdown-divider\"></div>
                  <div class=\"ps-4 p-10\">
                    <a
                      href=\"profileadmin.html\"
                      class=\"btn btn-sm btn-success btn-rounded text-white\"
                      >View Profile</a
                    >
                  </div>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
      
      <aside class=\"left-sidebar\" data-sidebarbg=\"skin5\">
        <!-- Sidebar scroll-->
        <div class=\"scroll-sidebar\">
          <!-- Sidebar navigation-->
          <nav class=\"sidebar-nav\">
            <ul id=\"sidebarnav\" class=\"pt-4\">
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"index.html\"
                  aria-expanded=\"false\"
                  ><i class=\"mdi mdi-view-dashboard\"></i
                  ><span class=\"hide-menu\">Dashboard</span></a
                >
              </li>
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"charts.html\"
                  aria-expanded=\"false\"
                  ><i class=\"mdi mdi-chart-bar\"></i
                  ><span class=\"hide-menu\">Charts</span></a
                >
              </li>
              
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"/AfficherListe\"
                  aria-expanded=\"false\"
                  ><i class=\"mdi mdi-border-inside\"></i
                  ><span class=\"hide-menu\">User</span></a
                >
              </li>

              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"/Adduser\"
                  aria-expanded=\"false\"
                  ><i class=\"me-2 mdi mdi-account-multiple-plus\"></i
                  ><span class=\"hide-menu\">Add User</span></a
                >
              </li>

              
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link has-arrow waves-effect waves-dark\"
                  href=\"javascript:void(0)\"
                  aria-expanded=\"false\"
                  ><i class=\"me-2 mdi mdi-account-circle\"></i
                  ><span class=\"hide-menu\">Profil </span></a
                >
                <ul aria-expanded=\"false\" class=\"collapse first-level\">
                  <li class=\"sidebar-item\">
                    <a href=\"profileadmin.html\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-all-inclusive\"></i
                      ><span class=\"hide-menu\"> Admin </span></a
                    >
                  </li>
            
                </ul>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
     
      <div class=\"page-wrapper\">
       
        <div class=\"page-breadcrumb\">
          <div class=\"row\">
            <div class=\"col-12 d-flex no-block align-items-center\">
              <h4 class=\"page-title\">Dashboard</h4>
              <div class=\"ms-auto text-end\">
                <nav aria-label=\"breadcrumb\">
                  <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
     
        <div class=\"container-fluid\">
          
  
          <div class=\"row\">
            <!-- column -->
            <div class=\"col-lg-6\">
              <div class=\"card\">
                <div class=\"card-body\">
                ";
        // line 323
        $this->displayBlock('body', $context, $blocks);
        // line 327
        echo "                  
       

       
     
<script src=\"../assets/libs/jquery/dist/jquery.min.js\"></script>
    
    <script src=\"../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js\"></script>
    <script src=\"../assets/extra-libs/sparkline/sparkline.js\"></script>
   
    <script src=\"../dist/js/waves.js\"></script>
   
    <script src=\"../dist/js/sidebarmenu.js\"></script>
   
    <script src=\"../dist/js/custom.min.js\"></script>
    
    <script src=\"../assets/libs/flot/excanvas.js\"></script>
    <script src=\"../assets/libs/flot/jquery.flot.js\"></script>
    <script src=\"../assets/libs/flot/jquery.flot.pie.js\"></script>
    <script src=\"../assets/libs/flot/jquery.flot.time.js\"></script>
    <script src=\"../assets/libs/flot/jquery.flot.stack.js\"></script>
    <script src=\"../assets/libs/flot/jquery.flot.crosshair.js\"></script>
    <script src=\"../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js\"></script>
    <script src=\"../dist/js/pages/chart/chart-page-init.js\"></script>     
    </head>
    <body>
        


      
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 323
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 324
        echo "        
        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  426 => 324,  416 => 323,  373 => 327,  371 => 323,  248 => 203,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>




<html dir=\"ltr\" lang=\"en\">
  <head>

  
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta
      name=\"keywords\"
      content=\"wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template\"
    />
    <meta
      name=\"description\"
      content=\"Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework\"
    />
    <meta name=\"robots\" content=\"noindex,nofollow\" />
    <title>Prosync</title>
    <!-- Favicon icon -->
    <link
      rel=\"icon\"
      type=\"image/png\"
      sizes=\"16x16\"
      href=\"../assets/images/favicon.png\"
    />
    <!-- Custom CSS -->
    <link
      href=\"../assets/libs/fullcalendar/dist/fullcalendar.min.css\"
      rel=\"stylesheet\"
    />
    <link href=\"../assets/extra-libs/calendar/calendar.css\" rel=\"stylesheet\" />
    <link href=\"../dist/css/style.min.css\" rel=\"stylesheet\" />
      </head>
       
            <body>
   
    <div class=\"preloader\">
      <div class=\"lds-ripple\">
        <div class=\"lds-pos\"></div>
        <div class=\"lds-pos\"></div>
      </div>
    </div>

    <div
      id=\"main-wrapper\"
      data-layout=\"vertical\"
      data-navbarbg=\"skin5\"
      data-sidebartype=\"full\"
      data-sidebar-position=\"absolute\"
      data-header-position=\"absolute\"
      data-boxed-layout=\"full\"
    >
      
      <header class=\"topbar\" data-navbarbg=\"skin5\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
          <div class=\"navbar-header\" data-logobg=\"skin5\">
          
            <a class=\"navbar-brand\" href=\"index.html\">
              <!-- Logo icon -->
              <b class=\"logo-icon ps-2\">
                <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src=\"../assets/images/logo_icon.png\"
                  alt=\"homepage\"
                  class=\"light-logo\"
                  width=\"210\"
                  
                />
              </b>
             
            </a>
            
            <a
              class=\"nav-toggler waves-effect waves-light d-block d-md-none\"
              href=\"javascript:void(0)\"
              ><i class=\"ti-menu ti-close\"></i
            ></a>
          </div>
        
          <div
            class=\"navbar-collapse collapse\"
            id=\"navbarSupportedContent\"
            data-navbarbg=\"skin5\"
          >
           
            <ul class=\"navbar-nav float-start me-auto\">
              <li class=\"nav-item d-none d-lg-block\">
                <a
                  class=\"nav-link sidebartoggler waves-effect waves-light\"
                  href=\"javascript:void(0)\"
                  data-sidebartype=\"mini-sidebar\"
                  ><i class=\"mdi mdi-menu font-24\"></i
                ></a>
              </li>
             
              <li class=\"nav-item dropdown\">
                <a
                  class=\"nav-link dropdown-toggle\"
                  href=\"#\"
                  id=\"navbarDropdown\"
                  role=\"button\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <span class=\"d-none d-md-block\"
                    >Create New <i class=\"fa fa-angle-down\"></i
                  ></span>
                  <span class=\"d-block d-md-none\"
                    ><i class=\"fa fa-plus\"></i
                  ></span>
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"#\">User</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Admin</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Fournisseur</a></li>     
                </ul>
              </li>
              
              <li class=\"nav-item search-box\">
                <a
                  class=\"nav-link waves-effect waves-dark\"
                  href=\"javascript:void(0)\"
                  ><i class=\"mdi mdi-magnify fs-4\"></i
                ></a>
                <form class=\"app-search position-absolute\">
                  <input
                    type=\"text\"
                    class=\"form-control\"
                    placeholder=\"Search &amp; enter\"
                  />
                  <a class=\"srh-btn\"><i class=\"mdi mdi-window-close\"></i></a>
                </form>
              </li>
            </ul>
        
            <ul class=\"navbar-nav float-end\">
              
              <li class=\"nav-item dropdown\">
                <a
                  class=\"nav-link dropdown-toggle\"
                  href=\"#\"
                  id=\"navbarDropdown\"
                  role=\"button\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <i class=\"mdi mdi-bell font-24\"></i>
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <li><a class=\"dropdown-item\" href=\"#\">new</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Admin</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Fournisseur</a></li>     
                </ul>
              </li>
             
              <li class=\"nav-item dropdown\">
                <a
                  class=\"
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  \"
                  href=\"#\"
                  id=\"navbarDropdown\"
                  role=\"button\"
                  data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\"
                >
                  <img
                    src=\"../assets/images/users/5.jpg\"
                    alt=\"user\"
                    class=\"rounded-circle\"
                    width=\"31\"
                  />
                </a>
                <ul
                  class=\"dropdown-menu dropdown-menu-end user-dd animated\"
                  aria-labelledby=\"navbarDropdown\"
                >
                  <a class=\"dropdown-item\" href=\"profileadmin.html\"
                    ><i class=\"mdi mdi-account me-1 ms-1\"></i> My Profile</a
                  >
                  <a class=\"dropdown-item\" href=\"javascript:void(0)\"
                    ><i class=\"mdi mdi-wallet me-1 ms-1\"></i> My Balance</a
                  >
                  <a class=\"dropdown-item\" href=\"javascript:void(0)\"
                    ><i class=\"mdi mdi-email me-1 ms-1\"></i> Inbox</a
                  >
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item\" href=\"javascript:void(0)\"
                    ><i class=\"mdi mdi-settings me-1 ms-1\"></i> Account
                    Setting</a
                  >
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"
                    ><i class=\"fa fa-power-off me-1 ms-1\" ></i> Logout</a
                  >

                   
                  <div class=\"dropdown-divider\"></div>
                  <div class=\"ps-4 p-10\">
                    <a
                      href=\"profileadmin.html\"
                      class=\"btn btn-sm btn-success btn-rounded text-white\"
                      >View Profile</a
                    >
                  </div>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
      
      <aside class=\"left-sidebar\" data-sidebarbg=\"skin5\">
        <!-- Sidebar scroll-->
        <div class=\"scroll-sidebar\">
          <!-- Sidebar navigation-->
          <nav class=\"sidebar-nav\">
            <ul id=\"sidebarnav\" class=\"pt-4\">
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"index.html\"
                  aria-expanded=\"false\"
                  ><i class=\"mdi mdi-view-dashboard\"></i
                  ><span class=\"hide-menu\">Dashboard</span></a
                >
              </li>
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"charts.html\"
                  aria-expanded=\"false\"
                  ><i class=\"mdi mdi-chart-bar\"></i
                  ><span class=\"hide-menu\">Charts</span></a
                >
              </li>
              
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"/AfficherListe\"
                  aria-expanded=\"false\"
                  ><i class=\"mdi mdi-border-inside\"></i
                  ><span class=\"hide-menu\">User</span></a
                >
              </li>

              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"/Adduser\"
                  aria-expanded=\"false\"
                  ><i class=\"me-2 mdi mdi-account-multiple-plus\"></i
                  ><span class=\"hide-menu\">Add User</span></a
                >
              </li>

              
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link has-arrow waves-effect waves-dark\"
                  href=\"javascript:void(0)\"
                  aria-expanded=\"false\"
                  ><i class=\"me-2 mdi mdi-account-circle\"></i
                  ><span class=\"hide-menu\">Profil </span></a
                >
                <ul aria-expanded=\"false\" class=\"collapse first-level\">
                  <li class=\"sidebar-item\">
                    <a href=\"profileadmin.html\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-all-inclusive\"></i
                      ><span class=\"hide-menu\"> Admin </span></a
                    >
                  </li>
            
                </ul>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
     
      <div class=\"page-wrapper\">
       
        <div class=\"page-breadcrumb\">
          <div class=\"row\">
            <div class=\"col-12 d-flex no-block align-items-center\">
              <h4 class=\"page-title\">Dashboard</h4>
              <div class=\"ms-auto text-end\">
                <nav aria-label=\"breadcrumb\">
                  <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
     
        <div class=\"container-fluid\">
          
  
          <div class=\"row\">
            <!-- column -->
            <div class=\"col-lg-6\">
              <div class=\"card\">
                <div class=\"card-body\">
                {% block body %}
        
        
        {% endblock %}
                  
       

       
     
<script src=\"../assets/libs/jquery/dist/jquery.min.js\"></script>
    
    <script src=\"../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js\"></script>
    <script src=\"../assets/extra-libs/sparkline/sparkline.js\"></script>
   
    <script src=\"../dist/js/waves.js\"></script>
   
    <script src=\"../dist/js/sidebarmenu.js\"></script>
   
    <script src=\"../dist/js/custom.min.js\"></script>
    
    <script src=\"../assets/libs/flot/excanvas.js\"></script>
    <script src=\"../assets/libs/flot/jquery.flot.js\"></script>
    <script src=\"../assets/libs/flot/jquery.flot.pie.js\"></script>
    <script src=\"../assets/libs/flot/jquery.flot.time.js\"></script>
    <script src=\"../assets/libs/flot/jquery.flot.stack.js\"></script>
    <script src=\"../assets/libs/flot/jquery.flot.crosshair.js\"></script>
    <script src=\"../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js\"></script>
    <script src=\"../dist/js/pages/chart/chart-page-init.js\"></script>     
    </head>
    <body>
        


      
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\ProjetDev\\templates\\base.html.twig");
    }
}
