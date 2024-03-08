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
class __TwigTemplate_79c261b9aa905a9eab656e9e5d9ab1af extends Template
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
        return "back_office/base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Affiche.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Affiche.html.twig"));

        $this->parent = $this->loadTemplate("back_office/base_back.html.twig", "user/Affiche.html.twig", 1);
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

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"container-fluid\">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    <div class=\"container-fluid\">
          
  
          <div class=\"row\">
            <!-- column -->
            <div class=\"col-lg-15\">
             

    <div class=\"card\">
        <div class=\"card-body\">
            <h3 class=\"card-title\">User table</h3>
            <form class=\"d-flex me-2\" method=\"get\" action=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherlisteusers");
        echo "\">
                <input class=\"form-control\" type=\"text\" name=\"search\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Search user here\" aria-label=\"Search\">
            </form><br>
            <div class=\"table-responsive\">
                <table id=\"zero_config\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th><h5>Image</h5></th>
                            <th><h5>Name</h5></th>
                            <th><h5>Email</h5></th>
                            <th><h5>Address</h5></th>
                            <th><h5>NumTel</h5></th>
                            <th><h5>Role</h5></th>
                            <th><h5>Edit</h5></th>
                            <th><h5>Delete</h5></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 59
            echo "                        <tr>
                            <td><div class=\"col-md-4\">
                
                                     ";
            // line 62
            if (twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 62)) {
                // line 63
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 63))), "html", null, true);
                echo "\" alt=\"Photo de profil de l'utilisateur\" class=\"img-fluid\" width=\"150\" height=\"150\">
                                     ";
            }
            // line 65
            echo "
                            </div></td>
                            <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "lastname", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                            <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "email", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                            <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "adresse", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                            <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "numtel", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 72
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["a"], "roles", [], "any", false, false, false, 72))) {
                // line 73
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["a"], "roles", [], "any", false, false, false, 73));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 74
                    echo "                                ";
                    $context["badgeColor"] = ((($context["role"] == "ROLE_ADMIN")) ? ("success") : (((($context["role"] == "ROLE_FOURNISSEUR")) ? ("primary") : ("info"))));
                    // line 75
                    echo "                                <span class=\"badge bg-";
                    echo twig_escape_filter($this->env, (isset($context["badgeColor"]) || array_key_exists("badgeColor", $context) ? $context["badgeColor"] : (function () { throw new RuntimeError('Variable "badgeColor" does not exist.', 75, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "</span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                                ";
            } else {
                // line 78
                echo "                                <p>No roles assigned</p>
                                ";
            }
            // line 80
            echo "                            </td>
                            <td><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\" style=\"color:black\"></i></a></td>
                            <td><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\" style=\"color:red\"></i></a></td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    </tbody>
                </table>
                <div class=\"row\">
                    <div class=\"col\">
                        <nav aria-label=\"Page navigation example\">
                            <ul class=\"pagination justify-content-center\">
                                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 91, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 92
            echo "                                <li class=\"page-item ";
            if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 92, $this->source); })()))) {
                echo "active";
            }
            echo "\">
                                    <a class=\"page-link\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherlisteusers", ["page" => $context["page"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<footer class=\"footer text-center\">
    All Rights Reserved by ProSync. Designed and Developed by
    <a href=\"https://www.Prosync.com\">ProSync</a>.
</footer>



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
    \$(document).ready(function () {
        \$(\"#zero_config\").DataTable();
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo " 
";
        // line 15
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app_back");
        echo "
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
    <script>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "flashbag", [], "any", false, false, false, 18), "get", ["success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "        
        Swal.fire({
            icon: 'success',
            title: 'Suppression réussie!',
            text: '";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "',
            showConfirmButton: true
        });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
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
        return array (  338 => 27,  328 => 23,  322 => 19,  318 => 18,  312 => 15,  309 => 14,  299 => 13,  256 => 96,  245 => 93,  238 => 92,  234 => 91,  226 => 85,  217 => 82,  213 => 81,  210 => 80,  206 => 78,  203 => 77,  192 => 75,  189 => 74,  184 => 73,  182 => 72,  177 => 70,  173 => 69,  169 => 68,  165 => 67,  161 => 65,  155 => 63,  153 => 62,  148 => 59,  144 => 58,  124 => 41,  120 => 40,  107 => 29,  105 => 13,  98 => 8,  88 => 7,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back_office/base_back.html.twig' %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('styles_dashbaord') }}
    
{% endblock %}
\t{% block body %}

<div class=\"container-fluid\">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    {% block javascripts %}
 
{{ encore_entry_script_tags('app_back') }}
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
    <script>
        {% for flashMessage in app.session.flashbag.get('success') %}
        
        Swal.fire({
            icon: 'success',
            title: 'Suppression réussie!',
            text: '{{ flashMessage }}',
            showConfirmButton: true
        });
        {% endfor %}
    </script>
    {% endblock %}
    <div class=\"container-fluid\">
          
  
          <div class=\"row\">
            <!-- column -->
            <div class=\"col-lg-15\">
             

    <div class=\"card\">
        <div class=\"card-body\">
            <h3 class=\"card-title\">User table</h3>
            <form class=\"d-flex me-2\" method=\"get\" action=\"{{ path('app_afficherlisteusers') }}\">
                <input class=\"form-control\" type=\"text\" name=\"search\" value=\"{{ searchQuery }}\" placeholder=\"Search user here\" aria-label=\"Search\">
            </form><br>
            <div class=\"table-responsive\">
                <table id=\"zero_config\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th><h5>Image</h5></th>
                            <th><h5>Name</h5></th>
                            <th><h5>Email</h5></th>
                            <th><h5>Address</h5></th>
                            <th><h5>NumTel</h5></th>
                            <th><h5>Role</h5></th>
                            <th><h5>Edit</h5></th>
                            <th><h5>Delete</h5></th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for a in user %}
                        <tr>
                            <td><div class=\"col-md-4\">
                
                                     {% if a.image %}
                                            <img src=\"{{ asset('uploads/images/' ~ a.image) }}\" alt=\"Photo de profil de l'utilisateur\" class=\"img-fluid\" width=\"150\" height=\"150\">
                                     {% endif %}

                            </div></td>
                            <td>{{ a.lastname }}</td>
                            <td>{{ a.email }}</td>
                            <td>{{ a.adresse }}</td>
                            <td>{{ a.numtel }}</td>
                            <td>
                                {% if a.roles is not empty %}
                                {% for role in a.roles %}
                                {% set badgeColor = role == 'ROLE_ADMIN' ? 'success' : (role == 'ROLE_FOURNISSEUR' ? 'primary' : 'info') %}
                                <span class=\"badge bg-{{ badgeColor }}\">{{ role }}</span>
                                {% endfor %}
                                {% else %}
                                <p>No roles assigned</p>
                                {% endif %}
                            </td>
                            <td><a href=\"{{ path('app_edit', {'id': a.id}) }}\"><i class=\"fas fa-edit\" style=\"color:black\"></i></a></td>
                            <td><a href=\"{{ path('app_delete', {'id': a.id}) }}\"><i class=\"fas fa-trash-alt\" style=\"color:red\"></i></a></td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
                <div class=\"row\">
                    <div class=\"col\">
                        <nav aria-label=\"Page navigation example\">
                            <ul class=\"pagination justify-content-center\">
                                {% for page in 1..totalPages %}
                                <li class=\"page-item {% if page == currentPage %}active{% endif %}\">
                                    <a class=\"page-link\" href=\"{{ path('app_afficherlisteusers', {'page': page}) }}\">{{ page }}</a>
                                </li>
                                {% endfor %}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<footer class=\"footer text-center\">
    All Rights Reserved by ProSync. Designed and Developed by
    <a href=\"https://www.Prosync.com\">ProSync</a>.
</footer>



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
    \$(document).ready(function () {
        \$(\"#zero_config\").DataTable();
    });
</script>
{% endblock %}
", "user/Affiche.html.twig", "C:\\xampp\\htdocs\\lekhreni\\PIdev\\templates\\user\\affiche.html.twig");
    }
}
