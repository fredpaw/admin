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
        $__internal_aed3b600fbfb202703a56b86b03749b3361780aebd5f65c016628fcc97e9b0e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed3b600fbfb202703a56b86b03749b3361780aebd5f65c016628fcc97e9b0e1->enter($__internal_aed3b600fbfb202703a56b86b03749b3361780aebd5f65c016628fcc97e9b0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_28d87d9f64a46f0c6d1b9e80ad38051cc7af269902166791817ac043a72d0043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d87d9f64a46f0c6d1b9e80ad38051cc7af269902166791817ac043a72d0043->enter($__internal_28d87d9f64a46f0c6d1b9e80ad38051cc7af269902166791817ac043a72d0043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aed3b600fbfb202703a56b86b03749b3361780aebd5f65c016628fcc97e9b0e1->leave($__internal_aed3b600fbfb202703a56b86b03749b3361780aebd5f65c016628fcc97e9b0e1_prof);

        
        $__internal_28d87d9f64a46f0c6d1b9e80ad38051cc7af269902166791817ac043a72d0043->leave($__internal_28d87d9f64a46f0c6d1b9e80ad38051cc7af269902166791817ac043a72d0043_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4dc9adad0255222c32d911fbe8c17a1803840504794dcfe649c798f81980062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4dc9adad0255222c32d911fbe8c17a1803840504794dcfe649c798f81980062->enter($__internal_f4dc9adad0255222c32d911fbe8c17a1803840504794dcfe649c798f81980062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43fa32708812a2ae11aaad6040ab2c39c278a3427c12e5f5d1d8e2b70175b57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fa32708812a2ae11aaad6040ab2c39c278a3427c12e5f5d1d8e2b70175b57c->enter($__internal_43fa32708812a2ae11aaad6040ab2c39c278a3427c12e5f5d1d8e2b70175b57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_43fa32708812a2ae11aaad6040ab2c39c278a3427c12e5f5d1d8e2b70175b57c->leave($__internal_43fa32708812a2ae11aaad6040ab2c39c278a3427c12e5f5d1d8e2b70175b57c_prof);

        
        $__internal_f4dc9adad0255222c32d911fbe8c17a1803840504794dcfe649c798f81980062->leave($__internal_f4dc9adad0255222c32d911fbe8c17a1803840504794dcfe649c798f81980062_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d304d690eae3aa9257cc0dfa20a38b5fa767d61c096534d2ae0b94e655595c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d304d690eae3aa9257cc0dfa20a38b5fa767d61c096534d2ae0b94e655595c0b->enter($__internal_d304d690eae3aa9257cc0dfa20a38b5fa767d61c096534d2ae0b94e655595c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2e223a0ea26b4dc579b3226174f2f3fb323c850e0ff7b39d1bf83891b70e6585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e223a0ea26b4dc579b3226174f2f3fb323c850e0ff7b39d1bf83891b70e6585->enter($__internal_2e223a0ea26b4dc579b3226174f2f3fb323c850e0ff7b39d1bf83891b70e6585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_2e223a0ea26b4dc579b3226174f2f3fb323c850e0ff7b39d1bf83891b70e6585->leave($__internal_2e223a0ea26b4dc579b3226174f2f3fb323c850e0ff7b39d1bf83891b70e6585_prof);

        
        $__internal_d304d690eae3aa9257cc0dfa20a38b5fa767d61c096534d2ae0b94e655595c0b->leave($__internal_d304d690eae3aa9257cc0dfa20a38b5fa767d61c096534d2ae0b94e655595c0b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b7795aabd63ba31538b69b95ccb0d44085689dd5ad15ecd4634e35fdf13704c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7795aabd63ba31538b69b95ccb0d44085689dd5ad15ecd4634e35fdf13704c->enter($__internal_8b7795aabd63ba31538b69b95ccb0d44085689dd5ad15ecd4634e35fdf13704c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f1d409d6a972ba77377cea01b673c26d2ac03fc59ad0d44791275191ab1eb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1d409d6a972ba77377cea01b673c26d2ac03fc59ad0d44791275191ab1eb2f->enter($__internal_7f1d409d6a972ba77377cea01b673c26d2ac03fc59ad0d44791275191ab1eb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f1d409d6a972ba77377cea01b673c26d2ac03fc59ad0d44791275191ab1eb2f->leave($__internal_7f1d409d6a972ba77377cea01b673c26d2ac03fc59ad0d44791275191ab1eb2f_prof);

        
        $__internal_8b7795aabd63ba31538b69b95ccb0d44085689dd5ad15ecd4634e35fdf13704c->leave($__internal_8b7795aabd63ba31538b69b95ccb0d44085689dd5ad15ecd4634e35fdf13704c_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ba65eb3455adb0354f6b0e11e37145a932828fcf5e5ca2b5f218dc926276892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba65eb3455adb0354f6b0e11e37145a932828fcf5e5ca2b5f218dc926276892->enter($__internal_2ba65eb3455adb0354f6b0e11e37145a932828fcf5e5ca2b5f218dc926276892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8eb6775f00bef4dd4d99bb825afba16756213e70bf1abb62dcaf2d51486d1cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb6775f00bef4dd4d99bb825afba16756213e70bf1abb62dcaf2d51486d1cd6->enter($__internal_8eb6775f00bef4dd4d99bb825afba16756213e70bf1abb62dcaf2d51486d1cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8eb6775f00bef4dd4d99bb825afba16756213e70bf1abb62dcaf2d51486d1cd6->leave($__internal_8eb6775f00bef4dd4d99bb825afba16756213e70bf1abb62dcaf2d51486d1cd6_prof);

        
        $__internal_2ba65eb3455adb0354f6b0e11e37145a932828fcf5e5ca2b5f218dc926276892->leave($__internal_2ba65eb3455adb0354f6b0e11e37145a932828fcf5e5ca2b5f218dc926276892_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40792da36c3a71a90ed2e12c4b95a7887e305f09316cf9fdb7c9399c6bdfc201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40792da36c3a71a90ed2e12c4b95a7887e305f09316cf9fdb7c9399c6bdfc201->enter($__internal_40792da36c3a71a90ed2e12c4b95a7887e305f09316cf9fdb7c9399c6bdfc201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_27a55a2622724c15b813664a84e258e6f361c3be870c3c1e2fcbd28353deab64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a55a2622724c15b813664a84e258e6f361c3be870c3c1e2fcbd28353deab64->enter($__internal_27a55a2622724c15b813664a84e258e6f361c3be870c3c1e2fcbd28353deab64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_27a55a2622724c15b813664a84e258e6f361c3be870c3c1e2fcbd28353deab64->leave($__internal_27a55a2622724c15b813664a84e258e6f361c3be870c3c1e2fcbd28353deab64_prof);

        
        $__internal_40792da36c3a71a90ed2e12c4b95a7887e305f09316cf9fdb7c9399c6bdfc201->leave($__internal_40792da36c3a71a90ed2e12c4b95a7887e305f09316cf9fdb7c9399c6bdfc201_prof);

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
", "@App/default/index.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
