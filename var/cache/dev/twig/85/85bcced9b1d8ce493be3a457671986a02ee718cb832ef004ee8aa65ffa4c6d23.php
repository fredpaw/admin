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
        $__internal_1306226a73aeea5fdbc4202fb347529e6541206f20554b38f27a36cf71376c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1306226a73aeea5fdbc4202fb347529e6541206f20554b38f27a36cf71376c69->enter($__internal_1306226a73aeea5fdbc4202fb347529e6541206f20554b38f27a36cf71376c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $__internal_4c039655808bc561ff2995b17be981185e050fef583855dd91f25affc6d45dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c039655808bc561ff2995b17be981185e050fef583855dd91f25affc6d45dc5->enter($__internal_4c039655808bc561ff2995b17be981185e050fef583855dd91f25affc6d45dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1306226a73aeea5fdbc4202fb347529e6541206f20554b38f27a36cf71376c69->leave($__internal_1306226a73aeea5fdbc4202fb347529e6541206f20554b38f27a36cf71376c69_prof);

        
        $__internal_4c039655808bc561ff2995b17be981185e050fef583855dd91f25affc6d45dc5->leave($__internal_4c039655808bc561ff2995b17be981185e050fef583855dd91f25affc6d45dc5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_faca085dee930fd76bb179878877885efabb85e4c14cf9979d1c3711585cf45b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faca085dee930fd76bb179878877885efabb85e4c14cf9979d1c3711585cf45b->enter($__internal_faca085dee930fd76bb179878877885efabb85e4c14cf9979d1c3711585cf45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_004068b2de2a537db8f6582bba961d9caed5a949309890fbf69a7c103c4815a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004068b2de2a537db8f6582bba961d9caed5a949309890fbf69a7c103c4815a7->enter($__internal_004068b2de2a537db8f6582bba961d9caed5a949309890fbf69a7c103c4815a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_004068b2de2a537db8f6582bba961d9caed5a949309890fbf69a7c103c4815a7->leave($__internal_004068b2de2a537db8f6582bba961d9caed5a949309890fbf69a7c103c4815a7_prof);

        
        $__internal_faca085dee930fd76bb179878877885efabb85e4c14cf9979d1c3711585cf45b->leave($__internal_faca085dee930fd76bb179878877885efabb85e4c14cf9979d1c3711585cf45b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8bea506644ac47b71e1e118cad6356ac048e68b53d1fa86b8f836b7650197456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bea506644ac47b71e1e118cad6356ac048e68b53d1fa86b8f836b7650197456->enter($__internal_8bea506644ac47b71e1e118cad6356ac048e68b53d1fa86b8f836b7650197456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_98d93205022329de84abb63bf98469aa5af32f2d50b0b7bdd9df0cd2b6eecfdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d93205022329de84abb63bf98469aa5af32f2d50b0b7bdd9df0cd2b6eecfdf->enter($__internal_98d93205022329de84abb63bf98469aa5af32f2d50b0b7bdd9df0cd2b6eecfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_98d93205022329de84abb63bf98469aa5af32f2d50b0b7bdd9df0cd2b6eecfdf->leave($__internal_98d93205022329de84abb63bf98469aa5af32f2d50b0b7bdd9df0cd2b6eecfdf_prof);

        
        $__internal_8bea506644ac47b71e1e118cad6356ac048e68b53d1fa86b8f836b7650197456->leave($__internal_8bea506644ac47b71e1e118cad6356ac048e68b53d1fa86b8f836b7650197456_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5da493ea518b35273a0ac4f75bee5305103137426bc2a0682467d10346f44779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da493ea518b35273a0ac4f75bee5305103137426bc2a0682467d10346f44779->enter($__internal_5da493ea518b35273a0ac4f75bee5305103137426bc2a0682467d10346f44779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62268fb4843eaa4d80a4a768383f765b5864b97c5c578c934e9828f644223b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62268fb4843eaa4d80a4a768383f765b5864b97c5c578c934e9828f644223b4c->enter($__internal_62268fb4843eaa4d80a4a768383f765b5864b97c5c578c934e9828f644223b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 88
        echo "            </main>
        </div>
    </div>
";
        
        $__internal_62268fb4843eaa4d80a4a768383f765b5864b97c5c578c934e9828f644223b4c->leave($__internal_62268fb4843eaa4d80a4a768383f765b5864b97c5c578c934e9828f644223b4c_prof);

        
        $__internal_5da493ea518b35273a0ac4f75bee5305103137426bc2a0682467d10346f44779->leave($__internal_5da493ea518b35273a0ac4f75bee5305103137426bc2a0682467d10346f44779_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef9737ec8e07bc2ee8af85da0f0b42d1e9d9802bb5467988fd8eab8776eb3888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9737ec8e07bc2ee8af85da0f0b42d1e9d9802bb5467988fd8eab8776eb3888->enter($__internal_ef9737ec8e07bc2ee8af85da0f0b42d1e9d9802bb5467988fd8eab8776eb3888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bd0595e3a200f619e4f19fa98729f8e26e2ff5dc60d4ea2700d6d3f786f39296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0595e3a200f619e4f19fa98729f8e26e2ff5dc60d4ea2700d6d3f786f39296->enter($__internal_bd0595e3a200f619e4f19fa98729f8e26e2ff5dc60d4ea2700d6d3f786f39296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_bd0595e3a200f619e4f19fa98729f8e26e2ff5dc60d4ea2700d6d3f786f39296->leave($__internal_bd0595e3a200f619e4f19fa98729f8e26e2ff5dc60d4ea2700d6d3f786f39296_prof);

        
        $__internal_ef9737ec8e07bc2ee8af85da0f0b42d1e9d9802bb5467988fd8eab8776eb3888->leave($__internal_ef9737ec8e07bc2ee8af85da0f0b42d1e9d9802bb5467988fd8eab8776eb3888_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c25b0c839a4bc20cc20590c37869311ef873a159269aece56a43a64e9c433519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25b0c839a4bc20cc20590c37869311ef873a159269aece56a43a64e9c433519->enter($__internal_c25b0c839a4bc20cc20590c37869311ef873a159269aece56a43a64e9c433519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f4b3d3ff536318ba5df98756129f6207012970747a9341b467c8468af26d1835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b3d3ff536318ba5df98756129f6207012970747a9341b467c8468af26d1835->enter($__internal_f4b3d3ff536318ba5df98756129f6207012970747a9341b467c8468af26d1835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f4b3d3ff536318ba5df98756129f6207012970747a9341b467c8468af26d1835->leave($__internal_f4b3d3ff536318ba5df98756129f6207012970747a9341b467c8468af26d1835_prof);

        
        $__internal_c25b0c839a4bc20cc20590c37869311ef873a159269aece56a43a64e9c433519->leave($__internal_c25b0c839a4bc20cc20590c37869311ef873a159269aece56a43a64e9c433519_prof);

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
