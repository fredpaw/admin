<?php

/* AppBundle:default:index.html.twig */
class __TwigTemplate_b9ce3d69d10d710771df423c04ba981887ef9faf62a12374d7d47a26c2495bff extends Twig_Template
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
        $__internal_b1153c39b63c74fd0e1da1a775ab0deed3306c5a3b11d039c5ff6fdb2af59dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1153c39b63c74fd0e1da1a775ab0deed3306c5a3b11d039c5ff6fdb2af59dc5->enter($__internal_b1153c39b63c74fd0e1da1a775ab0deed3306c5a3b11d039c5ff6fdb2af59dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $__internal_00e0b158c08f86e766211bc89d0d92d5f63047be55be3893707ecb197513ba6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e0b158c08f86e766211bc89d0d92d5f63047be55be3893707ecb197513ba6e->enter($__internal_00e0b158c08f86e766211bc89d0d92d5f63047be55be3893707ecb197513ba6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1153c39b63c74fd0e1da1a775ab0deed3306c5a3b11d039c5ff6fdb2af59dc5->leave($__internal_b1153c39b63c74fd0e1da1a775ab0deed3306c5a3b11d039c5ff6fdb2af59dc5_prof);

        
        $__internal_00e0b158c08f86e766211bc89d0d92d5f63047be55be3893707ecb197513ba6e->leave($__internal_00e0b158c08f86e766211bc89d0d92d5f63047be55be3893707ecb197513ba6e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4df8df46c75e87551d8a254d6d944f7783d64a4cc6bd760261e747e6bd572931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df8df46c75e87551d8a254d6d944f7783d64a4cc6bd760261e747e6bd572931->enter($__internal_4df8df46c75e87551d8a254d6d944f7783d64a4cc6bd760261e747e6bd572931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ad5d12e924ad3c8211a7fe6cfd4cb025b151c91e28e160ac135769ddd3e38c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad5d12e924ad3c8211a7fe6cfd4cb025b151c91e28e160ac135769ddd3e38c6->enter($__internal_6ad5d12e924ad3c8211a7fe6cfd4cb025b151c91e28e160ac135769ddd3e38c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_6ad5d12e924ad3c8211a7fe6cfd4cb025b151c91e28e160ac135769ddd3e38c6->leave($__internal_6ad5d12e924ad3c8211a7fe6cfd4cb025b151c91e28e160ac135769ddd3e38c6_prof);

        
        $__internal_4df8df46c75e87551d8a254d6d944f7783d64a4cc6bd760261e747e6bd572931->leave($__internal_4df8df46c75e87551d8a254d6d944f7783d64a4cc6bd760261e747e6bd572931_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_924772265569a49de79599e39380f538763aa25f1c6bc9a057d26338fa855178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924772265569a49de79599e39380f538763aa25f1c6bc9a057d26338fa855178->enter($__internal_924772265569a49de79599e39380f538763aa25f1c6bc9a057d26338fa855178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_07a993e404dc036bfedd365a8859955df34b95961b10413d1073cd2bb6425d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a993e404dc036bfedd365a8859955df34b95961b10413d1073cd2bb6425d67->enter($__internal_07a993e404dc036bfedd365a8859955df34b95961b10413d1073cd2bb6425d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_07a993e404dc036bfedd365a8859955df34b95961b10413d1073cd2bb6425d67->leave($__internal_07a993e404dc036bfedd365a8859955df34b95961b10413d1073cd2bb6425d67_prof);

        
        $__internal_924772265569a49de79599e39380f538763aa25f1c6bc9a057d26338fa855178->leave($__internal_924772265569a49de79599e39380f538763aa25f1c6bc9a057d26338fa855178_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a594af841659d3a594af3836339dd6348866c4c6001f09be3b77059d4a23878f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a594af841659d3a594af3836339dd6348866c4c6001f09be3b77059d4a23878f->enter($__internal_a594af841659d3a594af3836339dd6348866c4c6001f09be3b77059d4a23878f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b13a01e21df4c146fd22149abd30a3f2dedd08dabe021551b4fb4c84632daab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13a01e21df4c146fd22149abd30a3f2dedd08dabe021551b4fb4c84632daab9->enter($__internal_b13a01e21df4c146fd22149abd30a3f2dedd08dabe021551b4fb4c84632daab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b13a01e21df4c146fd22149abd30a3f2dedd08dabe021551b4fb4c84632daab9->leave($__internal_b13a01e21df4c146fd22149abd30a3f2dedd08dabe021551b4fb4c84632daab9_prof);

        
        $__internal_a594af841659d3a594af3836339dd6348866c4c6001f09be3b77059d4a23878f->leave($__internal_a594af841659d3a594af3836339dd6348866c4c6001f09be3b77059d4a23878f_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_dbf5e86aa26482b021b237a538806d069c87e5c23bd1f2f6dfa680b3bd91caca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf5e86aa26482b021b237a538806d069c87e5c23bd1f2f6dfa680b3bd91caca->enter($__internal_dbf5e86aa26482b021b237a538806d069c87e5c23bd1f2f6dfa680b3bd91caca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_48e3ea028a03e9a70e3f9c0074f3afd42f0fa0201b4a11fe8e3410d30ed740d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e3ea028a03e9a70e3f9c0074f3afd42f0fa0201b4a11fe8e3410d30ed740d4->enter($__internal_48e3ea028a03e9a70e3f9c0074f3afd42f0fa0201b4a11fe8e3410d30ed740d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_48e3ea028a03e9a70e3f9c0074f3afd42f0fa0201b4a11fe8e3410d30ed740d4->leave($__internal_48e3ea028a03e9a70e3f9c0074f3afd42f0fa0201b4a11fe8e3410d30ed740d4_prof);

        
        $__internal_dbf5e86aa26482b021b237a538806d069c87e5c23bd1f2f6dfa680b3bd91caca->leave($__internal_dbf5e86aa26482b021b237a538806d069c87e5c23bd1f2f6dfa680b3bd91caca_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_334566fb80a6b8ef631b07fafdb82782888255b2587be6ea975a582c5a4c7003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334566fb80a6b8ef631b07fafdb82782888255b2587be6ea975a582c5a4c7003->enter($__internal_334566fb80a6b8ef631b07fafdb82782888255b2587be6ea975a582c5a4c7003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9a353c6ef6167bdfa755c7d64b3bb2cac69d1b3896f3eaf7e507e449b977662a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a353c6ef6167bdfa755c7d64b3bb2cac69d1b3896f3eaf7e507e449b977662a->enter($__internal_9a353c6ef6167bdfa755c7d64b3bb2cac69d1b3896f3eaf7e507e449b977662a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9a353c6ef6167bdfa755c7d64b3bb2cac69d1b3896f3eaf7e507e449b977662a->leave($__internal_9a353c6ef6167bdfa755c7d64b3bb2cac69d1b3896f3eaf7e507e449b977662a_prof);

        
        $__internal_334566fb80a6b8ef631b07fafdb82782888255b2587be6ea975a582c5a4c7003->leave($__internal_334566fb80a6b8ef631b07fafdb82782888255b2587be6ea975a582c5a4c7003_prof);

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
