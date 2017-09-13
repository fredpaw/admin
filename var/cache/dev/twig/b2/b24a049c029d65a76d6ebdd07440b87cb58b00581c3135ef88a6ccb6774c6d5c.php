<?php

/* @App/default/index.html.twig */
class __TwigTemplate_96979ffe826d4ae4e087a2b96edc1039567d50b1cb9f255aa5dea9abb8d37dbb extends Twig_Template
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
        $__internal_1c060a5ab1d3da991d1139c95dc8a07d5b41c9f7d7c9ac1f6a0f3e8b01e78c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c060a5ab1d3da991d1139c95dc8a07d5b41c9f7d7c9ac1f6a0f3e8b01e78c4a->enter($__internal_1c060a5ab1d3da991d1139c95dc8a07d5b41c9f7d7c9ac1f6a0f3e8b01e78c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_28485f755eab43787cc04bb6ccdb1aee09b25d896c8f9e318e7a350c45398176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28485f755eab43787cc04bb6ccdb1aee09b25d896c8f9e318e7a350c45398176->enter($__internal_28485f755eab43787cc04bb6ccdb1aee09b25d896c8f9e318e7a350c45398176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c060a5ab1d3da991d1139c95dc8a07d5b41c9f7d7c9ac1f6a0f3e8b01e78c4a->leave($__internal_1c060a5ab1d3da991d1139c95dc8a07d5b41c9f7d7c9ac1f6a0f3e8b01e78c4a_prof);

        
        $__internal_28485f755eab43787cc04bb6ccdb1aee09b25d896c8f9e318e7a350c45398176->leave($__internal_28485f755eab43787cc04bb6ccdb1aee09b25d896c8f9e318e7a350c45398176_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ed0bb894674a7a51637a7509c9e4d5b8c87d5adcc93dda33f92f81c4625925e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed0bb894674a7a51637a7509c9e4d5b8c87d5adcc93dda33f92f81c4625925e->enter($__internal_1ed0bb894674a7a51637a7509c9e4d5b8c87d5adcc93dda33f92f81c4625925e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc5a4f7f1ac63bb2d7c3ecea93de6335c8f61f0636077fbc3ad5143f6aa15be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5a4f7f1ac63bb2d7c3ecea93de6335c8f61f0636077fbc3ad5143f6aa15be6->enter($__internal_cc5a4f7f1ac63bb2d7c3ecea93de6335c8f61f0636077fbc3ad5143f6aa15be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_cc5a4f7f1ac63bb2d7c3ecea93de6335c8f61f0636077fbc3ad5143f6aa15be6->leave($__internal_cc5a4f7f1ac63bb2d7c3ecea93de6335c8f61f0636077fbc3ad5143f6aa15be6_prof);

        
        $__internal_1ed0bb894674a7a51637a7509c9e4d5b8c87d5adcc93dda33f92f81c4625925e->leave($__internal_1ed0bb894674a7a51637a7509c9e4d5b8c87d5adcc93dda33f92f81c4625925e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_79e5a2d779dba44e91ae1546c5d8cccb444a413615932d58b0a08af51376a612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e5a2d779dba44e91ae1546c5d8cccb444a413615932d58b0a08af51376a612->enter($__internal_79e5a2d779dba44e91ae1546c5d8cccb444a413615932d58b0a08af51376a612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_997e7c320faa4e9602c8a60cbb9c72464bfb08ba445f42d85fe516a6a8363164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997e7c320faa4e9602c8a60cbb9c72464bfb08ba445f42d85fe516a6a8363164->enter($__internal_997e7c320faa4e9602c8a60cbb9c72464bfb08ba445f42d85fe516a6a8363164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_997e7c320faa4e9602c8a60cbb9c72464bfb08ba445f42d85fe516a6a8363164->leave($__internal_997e7c320faa4e9602c8a60cbb9c72464bfb08ba445f42d85fe516a6a8363164_prof);

        
        $__internal_79e5a2d779dba44e91ae1546c5d8cccb444a413615932d58b0a08af51376a612->leave($__internal_79e5a2d779dba44e91ae1546c5d8cccb444a413615932d58b0a08af51376a612_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f1610433b5bf5ad100c284fe9015e2bf99c77a0a1f52776997ea24f2296b1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1610433b5bf5ad100c284fe9015e2bf99c77a0a1f52776997ea24f2296b1a9->enter($__internal_0f1610433b5bf5ad100c284fe9015e2bf99c77a0a1f52776997ea24f2296b1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0f8fe958317f20a8bda8dda3a28346bfb712c1c620da8ecf053fff81b88a7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f8fe958317f20a8bda8dda3a28346bfb712c1c620da8ecf053fff81b88a7a3->enter($__internal_c0f8fe958317f20a8bda8dda3a28346bfb712c1c620da8ecf053fff81b88a7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c0f8fe958317f20a8bda8dda3a28346bfb712c1c620da8ecf053fff81b88a7a3->leave($__internal_c0f8fe958317f20a8bda8dda3a28346bfb712c1c620da8ecf053fff81b88a7a3_prof);

        
        $__internal_0f1610433b5bf5ad100c284fe9015e2bf99c77a0a1f52776997ea24f2296b1a9->leave($__internal_0f1610433b5bf5ad100c284fe9015e2bf99c77a0a1f52776997ea24f2296b1a9_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_d8676c6c4a42b12fd86c3362faa8d9854bc5e710f60d09f0a0e253cfc6dc8500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8676c6c4a42b12fd86c3362faa8d9854bc5e710f60d09f0a0e253cfc6dc8500->enter($__internal_d8676c6c4a42b12fd86c3362faa8d9854bc5e710f60d09f0a0e253cfc6dc8500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_14023e93d5a4865470e286887bbcfc365285dae337cce838f37bb8cc4be97b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14023e93d5a4865470e286887bbcfc365285dae337cce838f37bb8cc4be97b57->enter($__internal_14023e93d5a4865470e286887bbcfc365285dae337cce838f37bb8cc4be97b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_14023e93d5a4865470e286887bbcfc365285dae337cce838f37bb8cc4be97b57->leave($__internal_14023e93d5a4865470e286887bbcfc365285dae337cce838f37bb8cc4be97b57_prof);

        
        $__internal_d8676c6c4a42b12fd86c3362faa8d9854bc5e710f60d09f0a0e253cfc6dc8500->leave($__internal_d8676c6c4a42b12fd86c3362faa8d9854bc5e710f60d09f0a0e253cfc6dc8500_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc51bd05331e14a233e1fcd3a9bde818b0563db848e1d0a1be0bf49038097223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc51bd05331e14a233e1fcd3a9bde818b0563db848e1d0a1be0bf49038097223->enter($__internal_cc51bd05331e14a233e1fcd3a9bde818b0563db848e1d0a1be0bf49038097223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba575da6d396cca5ceb133c976b942d3ebd8c679abcba9a5134b31ed02a75dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba575da6d396cca5ceb133c976b942d3ebd8c679abcba9a5134b31ed02a75dd2->enter($__internal_ba575da6d396cca5ceb133c976b942d3ebd8c679abcba9a5134b31ed02a75dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ba575da6d396cca5ceb133c976b942d3ebd8c679abcba9a5134b31ed02a75dd2->leave($__internal_ba575da6d396cca5ceb133c976b942d3ebd8c679abcba9a5134b31ed02a75dd2_prof);

        
        $__internal_cc51bd05331e14a233e1fcd3a9bde818b0563db848e1d0a1be0bf49038097223->leave($__internal_cc51bd05331e14a233e1fcd3a9bde818b0563db848e1d0a1be0bf49038097223_prof);

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
", "@App/default/index.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
