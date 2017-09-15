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
        $__internal_67804376c32ecb0fc84c22a4f35c5371d84d99ca53f59607821616d251129b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67804376c32ecb0fc84c22a4f35c5371d84d99ca53f59607821616d251129b04->enter($__internal_67804376c32ecb0fc84c22a4f35c5371d84d99ca53f59607821616d251129b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $__internal_e9dc17a73defe42a130a87a1d692d1ef351cb53b3578f5d97658efba74460c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9dc17a73defe42a130a87a1d692d1ef351cb53b3578f5d97658efba74460c11->enter($__internal_e9dc17a73defe42a130a87a1d692d1ef351cb53b3578f5d97658efba74460c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67804376c32ecb0fc84c22a4f35c5371d84d99ca53f59607821616d251129b04->leave($__internal_67804376c32ecb0fc84c22a4f35c5371d84d99ca53f59607821616d251129b04_prof);

        
        $__internal_e9dc17a73defe42a130a87a1d692d1ef351cb53b3578f5d97658efba74460c11->leave($__internal_e9dc17a73defe42a130a87a1d692d1ef351cb53b3578f5d97658efba74460c11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5bba910ea6d84d69029ff19bd40c473e37898d7b99d35accc17351a786f1ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5bba910ea6d84d69029ff19bd40c473e37898d7b99d35accc17351a786f1ad1->enter($__internal_a5bba910ea6d84d69029ff19bd40c473e37898d7b99d35accc17351a786f1ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b998927f65d22a5565c518a5bb9e559efd00046e75717ff3da2df5c3a6e1f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b998927f65d22a5565c518a5bb9e559efd00046e75717ff3da2df5c3a6e1f8d->enter($__internal_8b998927f65d22a5565c518a5bb9e559efd00046e75717ff3da2df5c3a6e1f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_8b998927f65d22a5565c518a5bb9e559efd00046e75717ff3da2df5c3a6e1f8d->leave($__internal_8b998927f65d22a5565c518a5bb9e559efd00046e75717ff3da2df5c3a6e1f8d_prof);

        
        $__internal_a5bba910ea6d84d69029ff19bd40c473e37898d7b99d35accc17351a786f1ad1->leave($__internal_a5bba910ea6d84d69029ff19bd40c473e37898d7b99d35accc17351a786f1ad1_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cd3a96028f1056ea15cdb79fe1fa44630e94dac4aaa5b5406289eb4a45bab80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd3a96028f1056ea15cdb79fe1fa44630e94dac4aaa5b5406289eb4a45bab80->enter($__internal_0cd3a96028f1056ea15cdb79fe1fa44630e94dac4aaa5b5406289eb4a45bab80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_80f9fc0d2967f3260f64fd2f2df9293e4618d919e2a68a405dd613e22d7a9ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f9fc0d2967f3260f64fd2f2df9293e4618d919e2a68a405dd613e22d7a9ddb->enter($__internal_80f9fc0d2967f3260f64fd2f2df9293e4618d919e2a68a405dd613e22d7a9ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_80f9fc0d2967f3260f64fd2f2df9293e4618d919e2a68a405dd613e22d7a9ddb->leave($__internal_80f9fc0d2967f3260f64fd2f2df9293e4618d919e2a68a405dd613e22d7a9ddb_prof);

        
        $__internal_0cd3a96028f1056ea15cdb79fe1fa44630e94dac4aaa5b5406289eb4a45bab80->leave($__internal_0cd3a96028f1056ea15cdb79fe1fa44630e94dac4aaa5b5406289eb4a45bab80_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_40af25647bb771cce6e663961a6fdf95ccdb62ee41495e60a345a58dcd196653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40af25647bb771cce6e663961a6fdf95ccdb62ee41495e60a345a58dcd196653->enter($__internal_40af25647bb771cce6e663961a6fdf95ccdb62ee41495e60a345a58dcd196653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_476acaad77358fbaa269976d96cb89480147b755dc4a6b6990b4130b09f329a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476acaad77358fbaa269976d96cb89480147b755dc4a6b6990b4130b09f329a1->enter($__internal_476acaad77358fbaa269976d96cb89480147b755dc4a6b6990b4130b09f329a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        
        $__internal_476acaad77358fbaa269976d96cb89480147b755dc4a6b6990b4130b09f329a1->leave($__internal_476acaad77358fbaa269976d96cb89480147b755dc4a6b6990b4130b09f329a1_prof);

        
        $__internal_40af25647bb771cce6e663961a6fdf95ccdb62ee41495e60a345a58dcd196653->leave($__internal_40af25647bb771cce6e663961a6fdf95ccdb62ee41495e60a345a58dcd196653_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_094de2112f9ff1115d05b2a2a9e0b30934ee6d6f03a34eaf966f7d71800c533c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094de2112f9ff1115d05b2a2a9e0b30934ee6d6f03a34eaf966f7d71800c533c->enter($__internal_094de2112f9ff1115d05b2a2a9e0b30934ee6d6f03a34eaf966f7d71800c533c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_41798fa310090e7bcae9c19fb518fc34cc8be9c47d0ba6ff28dda3021e83e732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41798fa310090e7bcae9c19fb518fc34cc8be9c47d0ba6ff28dda3021e83e732->enter($__internal_41798fa310090e7bcae9c19fb518fc34cc8be9c47d0ba6ff28dda3021e83e732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_41798fa310090e7bcae9c19fb518fc34cc8be9c47d0ba6ff28dda3021e83e732->leave($__internal_41798fa310090e7bcae9c19fb518fc34cc8be9c47d0ba6ff28dda3021e83e732_prof);

        
        $__internal_094de2112f9ff1115d05b2a2a9e0b30934ee6d6f03a34eaf966f7d71800c533c->leave($__internal_094de2112f9ff1115d05b2a2a9e0b30934ee6d6f03a34eaf966f7d71800c533c_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8982b50224100de4c9931d3699114997b60797bb3b6427fa7967ead4ac45859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8982b50224100de4c9931d3699114997b60797bb3b6427fa7967ead4ac45859->enter($__internal_b8982b50224100de4c9931d3699114997b60797bb3b6427fa7967ead4ac45859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e65f6bf7406b5e15753c68812d1f8aefb570dbbe593b7ff20912d26c5c8855eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65f6bf7406b5e15753c68812d1f8aefb570dbbe593b7ff20912d26c5c8855eb->enter($__internal_e65f6bf7406b5e15753c68812d1f8aefb570dbbe593b7ff20912d26c5c8855eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e65f6bf7406b5e15753c68812d1f8aefb570dbbe593b7ff20912d26c5c8855eb->leave($__internal_e65f6bf7406b5e15753c68812d1f8aefb570dbbe593b7ff20912d26c5c8855eb_prof);

        
        $__internal_b8982b50224100de4c9931d3699114997b60797bb3b6427fa7967ead4ac45859->leave($__internal_b8982b50224100de4c9931d3699114997b60797bb3b6427fa7967ead4ac45859_prof);

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
                    <a class=\"nav-link\" href=\"{{ path('password') }}\">{{ app.user.username }}</a>
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
