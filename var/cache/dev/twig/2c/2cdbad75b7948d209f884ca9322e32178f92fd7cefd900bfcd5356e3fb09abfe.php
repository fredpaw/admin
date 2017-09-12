<?php

/* @App/default/index.html.twig */
class __TwigTemplate_183a52c43ad7aa82a51369f83928740d8fbeb4e67ec72c0b90efc769dcded993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/default/index.html.twig", 1);
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
        $__internal_d3bcba67445dc321e42bccbfb7eee5b4ea497ed894ec61d413491d4e08340e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3bcba67445dc321e42bccbfb7eee5b4ea497ed894ec61d413491d4e08340e55->enter($__internal_d3bcba67445dc321e42bccbfb7eee5b4ea497ed894ec61d413491d4e08340e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_4dc561955901da0bb4f38c11616dcdfae79386867a640d13dd2c1eb7ea468d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc561955901da0bb4f38c11616dcdfae79386867a640d13dd2c1eb7ea468d70->enter($__internal_4dc561955901da0bb4f38c11616dcdfae79386867a640d13dd2c1eb7ea468d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3bcba67445dc321e42bccbfb7eee5b4ea497ed894ec61d413491d4e08340e55->leave($__internal_d3bcba67445dc321e42bccbfb7eee5b4ea497ed894ec61d413491d4e08340e55_prof);

        
        $__internal_4dc561955901da0bb4f38c11616dcdfae79386867a640d13dd2c1eb7ea468d70->leave($__internal_4dc561955901da0bb4f38c11616dcdfae79386867a640d13dd2c1eb7ea468d70_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7f95a59f23d3ddc9892e69bc110a2390040e4a9356a532f1888015b8edbca1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f95a59f23d3ddc9892e69bc110a2390040e4a9356a532f1888015b8edbca1e->enter($__internal_a7f95a59f23d3ddc9892e69bc110a2390040e4a9356a532f1888015b8edbca1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_046f17cbb4cd5e09f47df6c28a5cf3ad3ad0048b024742669af69b560b751cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046f17cbb4cd5e09f47df6c28a5cf3ad3ad0048b024742669af69b560b751cfa->enter($__internal_046f17cbb4cd5e09f47df6c28a5cf3ad3ad0048b024742669af69b560b751cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_046f17cbb4cd5e09f47df6c28a5cf3ad3ad0048b024742669af69b560b751cfa->leave($__internal_046f17cbb4cd5e09f47df6c28a5cf3ad3ad0048b024742669af69b560b751cfa_prof);

        
        $__internal_a7f95a59f23d3ddc9892e69bc110a2390040e4a9356a532f1888015b8edbca1e->leave($__internal_a7f95a59f23d3ddc9892e69bc110a2390040e4a9356a532f1888015b8edbca1e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5a541f04d8d886e3e7635ecbc4c91ae92848d88bfb12ff03e4ef8406db0f863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5a541f04d8d886e3e7635ecbc4c91ae92848d88bfb12ff03e4ef8406db0f863->enter($__internal_c5a541f04d8d886e3e7635ecbc4c91ae92848d88bfb12ff03e4ef8406db0f863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_02ba2fb289f49ae0f4f974adab9456f07dfde8059a5afd301ec68eb54e100904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ba2fb289f49ae0f4f974adab9456f07dfde8059a5afd301ec68eb54e100904->enter($__internal_02ba2fb289f49ae0f4f974adab9456f07dfde8059a5afd301ec68eb54e100904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_02ba2fb289f49ae0f4f974adab9456f07dfde8059a5afd301ec68eb54e100904->leave($__internal_02ba2fb289f49ae0f4f974adab9456f07dfde8059a5afd301ec68eb54e100904_prof);

        
        $__internal_c5a541f04d8d886e3e7635ecbc4c91ae92848d88bfb12ff03e4ef8406db0f863->leave($__internal_c5a541f04d8d886e3e7635ecbc4c91ae92848d88bfb12ff03e4ef8406db0f863_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b451f1b67b0d5676196ad27532aac0490ca99a3b4b30c16471533d6fd4db7864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b451f1b67b0d5676196ad27532aac0490ca99a3b4b30c16471533d6fd4db7864->enter($__internal_b451f1b67b0d5676196ad27532aac0490ca99a3b4b30c16471533d6fd4db7864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9af7b29776b78c0b50664df6f1e5ebfed5e384e562037e6f7cc635184d5caf26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af7b29776b78c0b50664df6f1e5ebfed5e384e562037e6f7cc635184d5caf26->enter($__internal_9af7b29776b78c0b50664df6f1e5ebfed5e384e562037e6f7cc635184d5caf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_name"), "method"), "html", null, true);
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
        // line 88
        echo "            </main>
        </div>
    </div>
";
        
        $__internal_9af7b29776b78c0b50664df6f1e5ebfed5e384e562037e6f7cc635184d5caf26->leave($__internal_9af7b29776b78c0b50664df6f1e5ebfed5e384e562037e6f7cc635184d5caf26_prof);

        
        $__internal_b451f1b67b0d5676196ad27532aac0490ca99a3b4b30c16471533d6fd4db7864->leave($__internal_b451f1b67b0d5676196ad27532aac0490ca99a3b4b30c16471533d6fd4db7864_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_800681adefc08d66d1c921a37679e325f113450047b54e2482cf4172d1e213b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800681adefc08d66d1c921a37679e325f113450047b54e2482cf4172d1e213b8->enter($__internal_800681adefc08d66d1c921a37679e325f113450047b54e2482cf4172d1e213b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d482fb19b48fe935f46a9a579827795ddb3377cc88a178182727b785ab400286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d482fb19b48fe935f46a9a579827795ddb3377cc88a178182727b785ab400286->enter($__internal_d482fb19b48fe935f46a9a579827795ddb3377cc88a178182727b785ab400286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                            <td>1,001</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                ";
        
        $__internal_d482fb19b48fe935f46a9a579827795ddb3377cc88a178182727b785ab400286->leave($__internal_d482fb19b48fe935f46a9a579827795ddb3377cc88a178182727b785ab400286_prof);

        
        $__internal_800681adefc08d66d1c921a37679e325f113450047b54e2482cf4172d1e213b8->leave($__internal_800681adefc08d66d1c921a37679e325f113450047b54e2482cf4172d1e213b8_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9384ae3bd18fe60d95d7f27a9853aaa06210fad559fe65181b8805bfa51aea38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9384ae3bd18fe60d95d7f27a9853aaa06210fad559fe65181b8805bfa51aea38->enter($__internal_9384ae3bd18fe60d95d7f27a9853aaa06210fad559fe65181b8805bfa51aea38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_725b9172b59a94eb5b71e86b53e21bf51aac3ca7f041cd367606be1a6daf4143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725b9172b59a94eb5b71e86b53e21bf51aac3ca7f041cd367606be1a6daf4143->enter($__internal_725b9172b59a94eb5b71e86b53e21bf51aac3ca7f041cd367606be1a6daf4143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    <!-- Bootstrap core JavaScript
            ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery-3.2.1.slim.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/popper.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_725b9172b59a94eb5b71e86b53e21bf51aac3ca7f041cd367606be1a6daf4143->leave($__internal_725b9172b59a94eb5b71e86b53e21bf51aac3ca7f041cd367606be1a6daf4143_prof);

        
        $__internal_9384ae3bd18fe60d95d7f27a9853aaa06210fad559fe65181b8805bfa51aea38->leave($__internal_9384ae3bd18fe60d95d7f27a9853aaa06210fad559fe65181b8805bfa51aea38_prof);

    }

    public function getTemplateName()
    {
        return "@App/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 100,  256 => 99,  252 => 98,  248 => 97,  242 => 93,  233 => 92,  191 => 55,  182 => 54,  169 => 88,  167 => 54,  158 => 48,  152 => 45,  143 => 39,  137 => 36,  119 => 21,  111 => 18,  100 => 10,  97 => 9,  88 => 8,  76 => 6,  71 => 5,  62 => 4,  44 => 3,  11 => 1,);
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
                            <td>1,001</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
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
", "@App/default/index.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
