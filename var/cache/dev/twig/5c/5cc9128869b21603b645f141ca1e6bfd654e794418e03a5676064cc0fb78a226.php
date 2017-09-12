<?php

/* AppBundle:default:index.html.twig */
class __TwigTemplate_9abeb2b5168e44668ad7ac38d6fa8be5b8dc2e69bf17ef78daf225fc53c56fed extends Twig_Template
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
        $__internal_ec1dceed91c18fad37983ffa46edd974403cfb8965f0e8c361a15ee751371407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1dceed91c18fad37983ffa46edd974403cfb8965f0e8c361a15ee751371407->enter($__internal_ec1dceed91c18fad37983ffa46edd974403cfb8965f0e8c361a15ee751371407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $__internal_670bf1836a2216d2efe993ce216653a89a27fe73e393cf4ee4001edd1016f311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670bf1836a2216d2efe993ce216653a89a27fe73e393cf4ee4001edd1016f311->enter($__internal_670bf1836a2216d2efe993ce216653a89a27fe73e393cf4ee4001edd1016f311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec1dceed91c18fad37983ffa46edd974403cfb8965f0e8c361a15ee751371407->leave($__internal_ec1dceed91c18fad37983ffa46edd974403cfb8965f0e8c361a15ee751371407_prof);

        
        $__internal_670bf1836a2216d2efe993ce216653a89a27fe73e393cf4ee4001edd1016f311->leave($__internal_670bf1836a2216d2efe993ce216653a89a27fe73e393cf4ee4001edd1016f311_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eacc7c67f687d8966c29c3b3dbc9caf0a4a5b0fa7009486488e2a5c73712c4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eacc7c67f687d8966c29c3b3dbc9caf0a4a5b0fa7009486488e2a5c73712c4c8->enter($__internal_eacc7c67f687d8966c29c3b3dbc9caf0a4a5b0fa7009486488e2a5c73712c4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f44efef61ad21366a1d3566089c486b6fa4b5019535211767e9b1ce19655aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f44efef61ad21366a1d3566089c486b6fa4b5019535211767e9b1ce19655aeb->enter($__internal_2f44efef61ad21366a1d3566089c486b6fa4b5019535211767e9b1ce19655aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_2f44efef61ad21366a1d3566089c486b6fa4b5019535211767e9b1ce19655aeb->leave($__internal_2f44efef61ad21366a1d3566089c486b6fa4b5019535211767e9b1ce19655aeb_prof);

        
        $__internal_eacc7c67f687d8966c29c3b3dbc9caf0a4a5b0fa7009486488e2a5c73712c4c8->leave($__internal_eacc7c67f687d8966c29c3b3dbc9caf0a4a5b0fa7009486488e2a5c73712c4c8_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d38d32cef3902baea1edbbc0af0f26d967e7467c010541abfcb895d33a0b7bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38d32cef3902baea1edbbc0af0f26d967e7467c010541abfcb895d33a0b7bc0->enter($__internal_d38d32cef3902baea1edbbc0af0f26d967e7467c010541abfcb895d33a0b7bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3e98df4d62734c0cd325498c6f4586e2bbb00016530e45459063af7c504c22c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e98df4d62734c0cd325498c6f4586e2bbb00016530e45459063af7c504c22c3->enter($__internal_3e98df4d62734c0cd325498c6f4586e2bbb00016530e45459063af7c504c22c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_3e98df4d62734c0cd325498c6f4586e2bbb00016530e45459063af7c504c22c3->leave($__internal_3e98df4d62734c0cd325498c6f4586e2bbb00016530e45459063af7c504c22c3_prof);

        
        $__internal_d38d32cef3902baea1edbbc0af0f26d967e7467c010541abfcb895d33a0b7bc0->leave($__internal_d38d32cef3902baea1edbbc0af0f26d967e7467c010541abfcb895d33a0b7bc0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3aac77d1e89be06a329f3b6d61699b4169599db057b79ef06f21513607a442c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3aac77d1e89be06a329f3b6d61699b4169599db057b79ef06f21513607a442c->enter($__internal_a3aac77d1e89be06a329f3b6d61699b4169599db057b79ef06f21513607a442c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d0c41825a2654a6272bd707b894c6248efc1df5c6098e72a37fe70413bc61aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0c41825a2654a6272bd707b894c6248efc1df5c6098e72a37fe70413bc61aa->enter($__internal_4d0c41825a2654a6272bd707b894c6248efc1df5c6098e72a37fe70413bc61aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4d0c41825a2654a6272bd707b894c6248efc1df5c6098e72a37fe70413bc61aa->leave($__internal_4d0c41825a2654a6272bd707b894c6248efc1df5c6098e72a37fe70413bc61aa_prof);

        
        $__internal_a3aac77d1e89be06a329f3b6d61699b4169599db057b79ef06f21513607a442c->leave($__internal_a3aac77d1e89be06a329f3b6d61699b4169599db057b79ef06f21513607a442c_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_64bb2de9ac13bef447a0040c82d5139eb0127ba1e0d33d2c3011904524b37869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64bb2de9ac13bef447a0040c82d5139eb0127ba1e0d33d2c3011904524b37869->enter($__internal_64bb2de9ac13bef447a0040c82d5139eb0127ba1e0d33d2c3011904524b37869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_977edc79f7871c5f559660981eb1a5021beadcff9ad96d1447d0496929ae7087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977edc79f7871c5f559660981eb1a5021beadcff9ad96d1447d0496929ae7087->enter($__internal_977edc79f7871c5f559660981eb1a5021beadcff9ad96d1447d0496929ae7087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_977edc79f7871c5f559660981eb1a5021beadcff9ad96d1447d0496929ae7087->leave($__internal_977edc79f7871c5f559660981eb1a5021beadcff9ad96d1447d0496929ae7087_prof);

        
        $__internal_64bb2de9ac13bef447a0040c82d5139eb0127ba1e0d33d2c3011904524b37869->leave($__internal_64bb2de9ac13bef447a0040c82d5139eb0127ba1e0d33d2c3011904524b37869_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e8dec43a14499f8aa7dd2c9c5bc7164afa92db388ab802ce32ffa61c54c7859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8dec43a14499f8aa7dd2c9c5bc7164afa92db388ab802ce32ffa61c54c7859->enter($__internal_1e8dec43a14499f8aa7dd2c9c5bc7164afa92db388ab802ce32ffa61c54c7859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ebfec4ab7cbe4a85740a6f90a43ee72ba4717ff78d7e7ca25ccb29767f36f1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebfec4ab7cbe4a85740a6f90a43ee72ba4717ff78d7e7ca25ccb29767f36f1d1->enter($__internal_ebfec4ab7cbe4a85740a6f90a43ee72ba4717ff78d7e7ca25ccb29767f36f1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ebfec4ab7cbe4a85740a6f90a43ee72ba4717ff78d7e7ca25ccb29767f36f1d1->leave($__internal_ebfec4ab7cbe4a85740a6f90a43ee72ba4717ff78d7e7ca25ccb29767f36f1d1_prof);

        
        $__internal_1e8dec43a14499f8aa7dd2c9c5bc7164afa92db388ab802ce32ffa61c54c7859->leave($__internal_1e8dec43a14499f8aa7dd2c9c5bc7164afa92db388ab802ce32ffa61c54c7859_prof);

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
", "AppBundle:default:index.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/default/index.html.twig");
    }
}
