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

/* user/Affiche.html.twig */
class __TwigTemplate_fd10cd6172f1a5eaf0108d2ccf29f166 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Affiche.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Affiche.html.twig"));

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
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
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
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class=\"navbar-collapse collapse\"
            id=\"navbarSupportedContent\"
            data-navbarbg=\"skin5\"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class=\"navbar-nav float-start me-auto\">
              <li class=\"nav-item d-none d-lg-block\">
                <a
                  class=\"nav-link sidebartoggler waves-effect waves-light\"
                  href=\"javascript:void(0)\"
                  data-sidebartype=\"mini-sidebar\"
                  ><i class=\"mdi mdi-menu font-24\"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
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
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
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
                  <li><a class=\"dropdown-item\" href=\"/Adduser\">User</a></li>
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
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"
                    ><i class=\"fa fa-power-off me-1 ms-1\"></i> Logout</a
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
                  href=\"/home\"
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
                    <a href=\"/user\" class=\"sidebar-link\"
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
              <h4 class=\"page-title\">Users</h4>
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
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
";
        // line 319
        $this->displayBlock('javascripts', $context, $blocks);
        // line 334
        echo "




              <div class=\"card\">
                <div class=\"card-body\">
                  <h3 class=\"card-title\">User table</h3></br>





                
           <form class=\"d-flex me-2\" method=\"get\" action=\"";
        // line 348
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherliste");
        echo "\">
                    <input class=\"form-control\" type=\"text\" name=\"search\" value=\"";
        // line 349
        echo twig_escape_filter($this->env, (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 349, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Search user here\" aria-label=\"Search\">
                   
                </form></br>
     



                  
                  <div class=\"table-responsive\">
                  
                      
                    <table
                      id=\"zero_config\"
                      class=\"table table-striped table-bordered\"
                    >
                    
                      <thead>
                      
                        <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>NumTel</th>   
    
    <th>Role</th>
    <th>Edit</th>
    <th>Delete</th>
    ";
        // line 376
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 376, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 377
            echo "</tr>

        <td>";
            // line 379
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "lastname", [], "any", false, false, false, 379), "html", null, true);
            echo "</td>
        <td> ";
            // line 380
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "email", [], "any", false, false, false, 380), "html", null, true);
            echo "</td>
    <td>";
            // line 381
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "adresse", [], "any", false, false, false, 381), "html", null, true);
            echo "</td>
    <td>";
            // line 382
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "numtel", [], "any", false, false, false, 382), "html", null, true);
            echo "</td>
    <td></td>
    
   
    
    <td><a href=\"";
            // line 387
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 387)]), "html", null, true);
            echo "\" ><i class=\"fas fa-edit\" style=\"color:black\"></i></a></td>
<td><a href=\"";
            // line 388
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 388)]), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\" style=\"color:red\"></i> </a></td>

    

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 393
        echo "
</table>
<div class=\"row\">
            <div class=\"col\">
                <nav aria-label=\"Page navigation example\">
                    <ul class=\"pagination justify-content-center\">
                        ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 399, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 400
            echo "                            <li class=\"page-item ";
            if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 400, $this->source); })()))) {
                echo "active";
            }
            echo "\">
                                <a class=\"page-link\" href=\"";
            // line 401
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherliste", ["page" => $context["page"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 404
        echo "                    </ul>
                </nav>
            </div>
        </div>
</div>
                </div>
              </div>
            </div>
          </div>
      
        </div>
        
        <footer class=\"footer text-center\">
          All Rights Reserved by ProSync. Designed and Developed by
          <a href=\"https://www.Prosync.com\">ProSync</a>.
        </footer>
       
      </div>
     
    </div>
   
    <script src=\"../assets/libs/jquery/dist/jquery.min.js\"></script>
  
    <script src=\"../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
   
    <script src=\"../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js\"></script>
    <script src=\"../assets/extra-libs/sparkline/sparkline.js\"></script>
  
    <script src=\"../dist/js/waves.js\"></script>
   
    <script src=\"../dist/js/sidebarmenu.js\"></script>
   
    <script src=\"../dist/js/custom.min.js\"></script>
 
    <script src=\"../assets/extra-libs/multicheck/datatable-checkbox-init.js\"></script>
    <script src=\"../assets/extra-libs/multicheck/jquery.multicheck.js\"></script>
    <script src=\"../assets/extra-libs/DataTables/datatables.min.js\"></script>
    <script>
    
      \$(\"#zero_config\").DataTable();
    </script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 319
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 320
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
    <script>
        ";
        // line 322
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 322, $this->source); })()), "session", [], "any", false, false, false, 322), "flashbag", [], "any", false, false, false, 322), "get", ["success"], "method", false, false, false, 322));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 323
            echo "            // Afficher la notification avec SweetAlert2
            Swal.fire({
                icon: 'success',
                title: 'Suppression réussie!',
                text: '";
            // line 327
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "',
                showConfirmButton: true,
                
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 332
        echo "    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/Affiche.html.twig";
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
        return array (  580 => 332,  569 => 327,  563 => 323,  559 => 322,  555 => 320,  545 => 319,  492 => 404,  481 => 401,  474 => 400,  470 => 399,  462 => 393,  451 => 388,  447 => 387,  439 => 382,  435 => 381,  431 => 380,  427 => 379,  423 => 377,  419 => 376,  389 => 349,  385 => 348,  369 => 334,  367 => 319,  251 => 206,  44 => 1,);
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
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
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
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class=\"navbar-collapse collapse\"
            id=\"navbarSupportedContent\"
            data-navbarbg=\"skin5\"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class=\"navbar-nav float-start me-auto\">
              <li class=\"nav-item d-none d-lg-block\">
                <a
                  class=\"nav-link sidebartoggler waves-effect waves-light\"
                  href=\"javascript:void(0)\"
                  data-sidebartype=\"mini-sidebar\"
                  ><i class=\"mdi mdi-menu font-24\"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
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
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
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
                  <li><a class=\"dropdown-item\" href=\"/Adduser\">User</a></li>
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
                    ><i class=\"fa fa-power-off me-1 ms-1\"></i> Logout</a
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
                  href=\"/home\"
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
                    <a href=\"/user\" class=\"sidebar-link\"
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
              <h4 class=\"page-title\">Users</h4>
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
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
{% block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
    <script>
        {% for flashMessage in app.session.flashbag.get('success') %}
            // Afficher la notification avec SweetAlert2
            Swal.fire({
                icon: 'success',
                title: 'Suppression réussie!',
                text: '{{ flashMessage }}',
                showConfirmButton: true,
                
            });
        {% endfor %}
    </script>
{% endblock %}





              <div class=\"card\">
                <div class=\"card-body\">
                  <h3 class=\"card-title\">User table</h3></br>





                
           <form class=\"d-flex me-2\" method=\"get\" action=\"{{ path('app_afficherliste') }}\">
                    <input class=\"form-control\" type=\"text\" name=\"search\" value=\"{{ searchQuery }}\" placeholder=\"Search user here\" aria-label=\"Search\">
                   
                </form></br>
     



                  
                  <div class=\"table-responsive\">
                  
                      
                    <table
                      id=\"zero_config\"
                      class=\"table table-striped table-bordered\"
                    >
                    
                      <thead>
                      
                        <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>NumTel</th>   
    
    <th>Role</th>
    <th>Edit</th>
    <th>Delete</th>
    {% for a in user %}
</tr>

        <td>{{ a.lastname }}</td>
        <td> {{ a.email }}</td>
    <td>{{ a.adresse }}</td>
    <td>{{ a.numtel }}</td>
    <td></td>
    
   
    
    <td><a href=\"{{ path('app_edit', {'id': a.id}) }}\" ><i class=\"fas fa-edit\" style=\"color:black\"></i></a></td>
<td><a href=\"{{ path('app_delete', {'id': a.id}) }}\"><i class=\"fas fa-trash-alt\" style=\"color:red\"></i> </a></td>

    

    {% endfor %}

</table>
<div class=\"row\">
            <div class=\"col\">
                <nav aria-label=\"Page navigation example\">
                    <ul class=\"pagination justify-content-center\">
                        {% for page in 1..totalPages %}
                            <li class=\"page-item {% if page == currentPage %}active{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('app_afficherliste', {'page': page}) }}\">{{ page }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </nav>
            </div>
        </div>
</div>
                </div>
              </div>
            </div>
          </div>
      
        </div>
        
        <footer class=\"footer text-center\">
          All Rights Reserved by ProSync. Designed and Developed by
          <a href=\"https://www.Prosync.com\">ProSync</a>.
        </footer>
       
      </div>
     
    </div>
   
    <script src=\"../assets/libs/jquery/dist/jquery.min.js\"></script>
  
    <script src=\"../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
   
    <script src=\"../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js\"></script>
    <script src=\"../assets/extra-libs/sparkline/sparkline.js\"></script>
  
    <script src=\"../dist/js/waves.js\"></script>
   
    <script src=\"../dist/js/sidebarmenu.js\"></script>
   
    <script src=\"../dist/js/custom.min.js\"></script>
 
    <script src=\"../assets/extra-libs/multicheck/datatable-checkbox-init.js\"></script>
    <script src=\"../assets/extra-libs/multicheck/jquery.multicheck.js\"></script>
    <script src=\"../assets/extra-libs/DataTables/datatables.min.js\"></script>
    <script>
    
      \$(\"#zero_config\").DataTable();
    </script>
  </body>
</html>
", "user/Affiche.html.twig", "C:\\xampp\\htdocs\\ProjetDev\\templates\\user\\affiche.html.twig");
    }
}
