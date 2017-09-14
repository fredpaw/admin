<?php

/* AppBundle:default:index.html.twig */
class __TwigTemplate_d140e80ac6b2cfef61a233417a72f79cdaf68a3d97ec325da7d9c2ae9b1c2f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f89f1a0e90c80732ef3de62f23ff9b26c2fbb61a24587728885c173f4f2f00ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89f1a0e90c80732ef3de62f23ff9b26c2fbb61a24587728885c173f4f2f00ef->enter($__internal_f89f1a0e90c80732ef3de62f23ff9b26c2fbb61a24587728885c173f4f2f00ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $__internal_6191f4dd752faa92f4c3b49a82fc4b84d2886bef2de03436e73fb387fefbf157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6191f4dd752faa92f4c3b49a82fc4b84d2886bef2de03436e73fb387fefbf157->enter($__internal_6191f4dd752faa92f4c3b49a82fc4b84d2886bef2de03436e73fb387fefbf157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f89f1a0e90c80732ef3de62f23ff9b26c2fbb61a24587728885c173f4f2f00ef->leave($__internal_f89f1a0e90c80732ef3de62f23ff9b26c2fbb61a24587728885c173f4f2f00ef_prof);

        
        $__internal_6191f4dd752faa92f4c3b49a82fc4b84d2886bef2de03436e73fb387fefbf157->leave($__internal_6191f4dd752faa92f4c3b49a82fc4b84d2886bef2de03436e73fb387fefbf157_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_35d1f2a5baeff6cb2de126bd83cefae754eefd1ae12a9f92ca73e2e6b28f646d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d1f2a5baeff6cb2de126bd83cefae754eefd1ae12a9f92ca73e2e6b28f646d->enter($__internal_35d1f2a5baeff6cb2de126bd83cefae754eefd1ae12a9f92ca73e2e6b28f646d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54749b7deb45bfe3c81134bab9cddbb152dfd4f2097a5877a6447c9c2b8078a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54749b7deb45bfe3c81134bab9cddbb152dfd4f2097a5877a6447c9c2b8078a3->enter($__internal_54749b7deb45bfe3c81134bab9cddbb152dfd4f2097a5877a6447c9c2b8078a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_54749b7deb45bfe3c81134bab9cddbb152dfd4f2097a5877a6447c9c2b8078a3->leave($__internal_54749b7deb45bfe3c81134bab9cddbb152dfd4f2097a5877a6447c9c2b8078a3_prof);

        
        $__internal_35d1f2a5baeff6cb2de126bd83cefae754eefd1ae12a9f92ca73e2e6b28f646d->leave($__internal_35d1f2a5baeff6cb2de126bd83cefae754eefd1ae12a9f92ca73e2e6b28f646d_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1ed32d3cce83a10e3cfd4e87a027d98e137d8b87a25dd89bb33bb91245ea8cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed32d3cce83a10e3cfd4e87a027d98e137d8b87a25dd89bb33bb91245ea8cbd->enter($__internal_1ed32d3cce83a10e3cfd4e87a027d98e137d8b87a25dd89bb33bb91245ea8cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_735aaca4adc1c467865724126ceb740e9bd2fd5b312ea58ca1b8b242e948e5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735aaca4adc1c467865724126ceb740e9bd2fd5b312ea58ca1b8b242e948e5ee->enter($__internal_735aaca4adc1c467865724126ceb740e9bd2fd5b312ea58ca1b8b242e948e5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_735aaca4adc1c467865724126ceb740e9bd2fd5b312ea58ca1b8b242e948e5ee->leave($__internal_735aaca4adc1c467865724126ceb740e9bd2fd5b312ea58ca1b8b242e948e5ee_prof);

        
        $__internal_1ed32d3cce83a10e3cfd4e87a027d98e137d8b87a25dd89bb33bb91245ea8cbd->leave($__internal_1ed32d3cce83a10e3cfd4e87a027d98e137d8b87a25dd89bb33bb91245ea8cbd_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2321d2be723a05b9662c216f45072a0062779b6d5953a9c64c3b30ff88910f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2321d2be723a05b9662c216f45072a0062779b6d5953a9c64c3b30ff88910f23->enter($__internal_2321d2be723a05b9662c216f45072a0062779b6d5953a9c64c3b30ff88910f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7eb45a6c1a423e67cc09522c2c4ac9330cb064bad1dd088e805c60f87106910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7eb45a6c1a423e67cc09522c2c4ac9330cb064bad1dd088e805c60f87106910->enter($__internal_c7eb45a6c1a423e67cc09522c2c4ac9330cb064bad1dd088e805c60f87106910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Dashboard</a>
        <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_name"), "method"), "html", null, true);
        echo "</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Logout</a>
                </li>
            </ul>
            <form class=\"form-inline mt-2 mt-md-0\">
                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
    </nav>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <nav class=\"col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar\">
                <ul class=\"nav nav-pills flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Overview</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password");
        echo "\">Change Password</a>
                    </li>
                </ul>

                <ul class=\"nav nav-pills flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new-article");
        echo "\">New Article</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list-article");
        echo "\">Article List</a>
                    </li>
                </ul>
            </nav>

            <main class=\"col-sm-9 ml-sm-auto col-md-10 pt-3\" role=\"main\">
                ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "            </main>
        </div>
    </div>
";
        
        $__internal_c7eb45a6c1a423e67cc09522c2c4ac9330cb064bad1dd088e805c60f87106910->leave($__internal_c7eb45a6c1a423e67cc09522c2c4ac9330cb064bad1dd088e805c60f87106910_prof);

        
        $__internal_2321d2be723a05b9662c216f45072a0062779b6d5953a9c64c3b30ff88910f23->leave($__internal_2321d2be723a05b9662c216f45072a0062779b6d5953a9c64c3b30ff88910f23_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_fa0f6823d82ca27a8d10af511c48939ebade81d180252d038e6da7d217def442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa0f6823d82ca27a8d10af511c48939ebade81d180252d038e6da7d217def442->enter($__internal_fa0f6823d82ca27a8d10af511c48939ebade81d180252d038e6da7d217def442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_49d0763761db992cd7b629555fda4461704e7cef69d8b9cb15fc3ce0812599c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d0763761db992cd7b629555fda4461704e7cef69d8b9cb15fc3ce0812599c1->enter($__internal_49d0763761db992cd7b629555fda4461704e7cef69d8b9cb15fc3ce0812599c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 55
        echo "                <h1>Dashboard</h1>

                <section class=\"row text-center placeholders\">
                    <div class=\"col-12 col-sm-6 placeholder\">
                        <img src=\"data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=\" width=\"200\" height=\"200\" class=\"img-fluid rounded-circle\" alt=\"Generic placeholder thumbnail\">
                        <h4>Articles</h4>
                    </div>
                    <div class=\"col-12 col-sm-6 placeholder\">
                        <img src=\"data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=\" width=\"200\" height=\"200\" class=\"img-fluid rounded-circle\" alt=\"Generic placeholder thumbnail\">
                        <h4>Users</h4>
                    </div>
                </section>

                <h2>Summary</h2>
                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Article</td>
                            <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["T_total"]) ? $context["T_total"] : $this->getContext($context, "T_total")), 1, array(), "array"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>User</td>
                            <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["U_total"]) ? $context["U_total"] : $this->getContext($context, "U_total")), 1, array(), "array"), "html", null, true);
        echo "</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                ";
        
        $__internal_49d0763761db992cd7b629555fda4461704e7cef69d8b9cb15fc3ce0812599c1->leave($__internal_49d0763761db992cd7b629555fda4461704e7cef69d8b9cb15fc3ce0812599c1_prof);

        
        $__internal_fa0f6823d82ca27a8d10af511c48939ebade81d180252d038e6da7d217def442->leave($__internal_fa0f6823d82ca27a8d10af511c48939ebade81d180252d038e6da7d217def442_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9cd213b07b3d239b507393eacc983d69bfa5cbb3cf079c8de339a2eb45352bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd213b07b3d239b507393eacc983d69bfa5cbb3cf079c8de339a2eb45352bc4->enter($__internal_9cd213b07b3d239b507393eacc983d69bfa5cbb3cf079c8de339a2eb45352bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9262e1ebabebce73bb2f1bd2d4c1863087725ebb6be4c83d2f0b29e1e7ede0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9262e1ebabebce73bb2f1bd2d4c1863087725ebb6be4c83d2f0b29e1e7ede0ef->enter($__internal_9262e1ebabebce73bb2f1bd2d4c1863087725ebb6be4c83d2f0b29e1e7ede0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    <!-- Bootstrap core JavaScript
            ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery-3.2.1.slim.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/popper.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9262e1ebabebce73bb2f1bd2d4c1863087725ebb6be4c83d2f0b29e1e7ede0ef->leave($__internal_9262e1ebabebce73bb2f1bd2d4c1863087725ebb6be4c83d2f0b29e1e7ede0ef_prof);

        
        $__internal_9cd213b07b3d239b507393eacc983d69bfa5cbb3cf079c8de339a2eb45352bc4->leave($__internal_9cd213b07b3d239b507393eacc983d69bfa5cbb3cf079c8de339a2eb45352bc4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 105,  267 => 104,  263 => 103,  259 => 102,  253 => 98,  244 => 97,  228 => 87,  220 => 82,  191 => 55,  182 => 54,  169 => 93,  167 => 54,  158 => 48,  152 => 45,  143 => 39,  137 => 36,  119 => 21,  111 => 18,  100 => 10,  97 => 9,  88 => 8,  76 => 6,  71 => 5,  62 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Dashboard{% endblock %}
{% block stylesheets %}
    <link href=\"{{ asset('bundles/app/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/dashboard.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Dashboard</a>
        <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('password') }}\">{{ app.session.get('user_name') }}</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('logout') }}\">Logout</a>
                </li>
            </ul>
            <form class=\"form-inline mt-2 mt-md-0\">
                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
    </nav>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <nav class=\"col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar\">
                <ul class=\"nav nav-pills flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path(\"home\") }}\">Overview</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path(\"password\") }}\">Change Password</a>
                    </li>
                </ul>

                <ul class=\"nav nav-pills flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('new-article') }}\">New Article</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('list-article') }}\">Article List</a>
                    </li>
                </ul>
            </nav>

            <main class=\"col-sm-9 ml-sm-auto col-md-10 pt-3\" role=\"main\">
                {% block content %}
                <h1>Dashboard</h1>

                <section class=\"row text-center placeholders\">
                    <div class=\"col-12 col-sm-6 placeholder\">
                        <img src=\"data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=\" width=\"200\" height=\"200\" class=\"img-fluid rounded-circle\" alt=\"Generic placeholder thumbnail\">
                        <h4>Articles</h4>
                    </div>
                    <div class=\"col-12 col-sm-6 placeholder\">
                        <img src=\"data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=\" width=\"200\" height=\"200\" class=\"img-fluid rounded-circle\" alt=\"Generic placeholder thumbnail\">
                        <h4>Users</h4>
                    </div>
                </section>

                <h2>Summary</h2>
                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Article</td>
                            <td>{{ T_total[1] }}</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>User</td>
                            <td>{{ U_total[1] }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                {% endblock %}
            </main>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <!-- Bootstrap core JavaScript
            ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"{{ asset('bundles/app/js/ie10-viewport-bug-workaround.js') }}\"></script>
    <script src=\"{{ asset('bundles/app/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/app/js/jquery-3.2.1.slim.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/app/js/popper.min.js') }}\"></script>
{% endblock %}
", "AppBundle:default:index.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/default/index.html.twig");
    }
}
