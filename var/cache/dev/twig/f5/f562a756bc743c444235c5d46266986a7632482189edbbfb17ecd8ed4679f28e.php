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
        $__internal_6026f75933e62a127c679505fa3c2725e2a995cb447bee0cec6e882b2414b332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6026f75933e62a127c679505fa3c2725e2a995cb447bee0cec6e882b2414b332->enter($__internal_6026f75933e62a127c679505fa3c2725e2a995cb447bee0cec6e882b2414b332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $__internal_1cf776d05d5b09353dcbc2c7dbaed9440e5ecfcfbc2a2e952ad6feea449c598b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf776d05d5b09353dcbc2c7dbaed9440e5ecfcfbc2a2e952ad6feea449c598b->enter($__internal_1cf776d05d5b09353dcbc2c7dbaed9440e5ecfcfbc2a2e952ad6feea449c598b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6026f75933e62a127c679505fa3c2725e2a995cb447bee0cec6e882b2414b332->leave($__internal_6026f75933e62a127c679505fa3c2725e2a995cb447bee0cec6e882b2414b332_prof);

        
        $__internal_1cf776d05d5b09353dcbc2c7dbaed9440e5ecfcfbc2a2e952ad6feea449c598b->leave($__internal_1cf776d05d5b09353dcbc2c7dbaed9440e5ecfcfbc2a2e952ad6feea449c598b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3d761f2d92c86ac018728caa32eee45cb37e18acb15622ab3b0f2b00d49d196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d761f2d92c86ac018728caa32eee45cb37e18acb15622ab3b0f2b00d49d196->enter($__internal_e3d761f2d92c86ac018728caa32eee45cb37e18acb15622ab3b0f2b00d49d196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26532a53e07942b08eef1e8e1ac5e9067308180c2cbc9bc7c7e3078c5af439f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26532a53e07942b08eef1e8e1ac5e9067308180c2cbc9bc7c7e3078c5af439f8->enter($__internal_26532a53e07942b08eef1e8e1ac5e9067308180c2cbc9bc7c7e3078c5af439f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_26532a53e07942b08eef1e8e1ac5e9067308180c2cbc9bc7c7e3078c5af439f8->leave($__internal_26532a53e07942b08eef1e8e1ac5e9067308180c2cbc9bc7c7e3078c5af439f8_prof);

        
        $__internal_e3d761f2d92c86ac018728caa32eee45cb37e18acb15622ab3b0f2b00d49d196->leave($__internal_e3d761f2d92c86ac018728caa32eee45cb37e18acb15622ab3b0f2b00d49d196_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad8b158ea42dc9ebe2a38b8bcefa111dce6318efad52c0de6b352410433c3d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8b158ea42dc9ebe2a38b8bcefa111dce6318efad52c0de6b352410433c3d03->enter($__internal_ad8b158ea42dc9ebe2a38b8bcefa111dce6318efad52c0de6b352410433c3d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac3adfe96dcdf50d35068aba5e0710f5dc1efe0a830990c1ce24bf80e23fffd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3adfe96dcdf50d35068aba5e0710f5dc1efe0a830990c1ce24bf80e23fffd3->enter($__internal_ac3adfe96dcdf50d35068aba5e0710f5dc1efe0a830990c1ce24bf80e23fffd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_ac3adfe96dcdf50d35068aba5e0710f5dc1efe0a830990c1ce24bf80e23fffd3->leave($__internal_ac3adfe96dcdf50d35068aba5e0710f5dc1efe0a830990c1ce24bf80e23fffd3_prof);

        
        $__internal_ad8b158ea42dc9ebe2a38b8bcefa111dce6318efad52c0de6b352410433c3d03->leave($__internal_ad8b158ea42dc9ebe2a38b8bcefa111dce6318efad52c0de6b352410433c3d03_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6bb46b840890fb8d9a5e50885020b5616d5b857e342f9621b2d7a1d0f731eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bb46b840890fb8d9a5e50885020b5616d5b857e342f9621b2d7a1d0f731eaa->enter($__internal_c6bb46b840890fb8d9a5e50885020b5616d5b857e342f9621b2d7a1d0f731eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e18c7cfa5d15dbe026b52962b8ca0909a4a93c7d76b82591b25d0c5f1bb83fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e18c7cfa5d15dbe026b52962b8ca0909a4a93c7d76b82591b25d0c5f1bb83fa->enter($__internal_6e18c7cfa5d15dbe026b52962b8ca0909a4a93c7d76b82591b25d0c5f1bb83fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e18c7cfa5d15dbe026b52962b8ca0909a4a93c7d76b82591b25d0c5f1bb83fa->leave($__internal_6e18c7cfa5d15dbe026b52962b8ca0909a4a93c7d76b82591b25d0c5f1bb83fa_prof);

        
        $__internal_c6bb46b840890fb8d9a5e50885020b5616d5b857e342f9621b2d7a1d0f731eaa->leave($__internal_c6bb46b840890fb8d9a5e50885020b5616d5b857e342f9621b2d7a1d0f731eaa_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed85e0deab62c4fd7bd741b570469a5aa01a3109248b348eba8186e2f21f1606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed85e0deab62c4fd7bd741b570469a5aa01a3109248b348eba8186e2f21f1606->enter($__internal_ed85e0deab62c4fd7bd741b570469a5aa01a3109248b348eba8186e2f21f1606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3609937927f37ce202e0d2f8843eb38571e313c8fa07f767eadc9586c07354c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3609937927f37ce202e0d2f8843eb38571e313c8fa07f767eadc9586c07354c0->enter($__internal_3609937927f37ce202e0d2f8843eb38571e313c8fa07f767eadc9586c07354c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3609937927f37ce202e0d2f8843eb38571e313c8fa07f767eadc9586c07354c0->leave($__internal_3609937927f37ce202e0d2f8843eb38571e313c8fa07f767eadc9586c07354c0_prof);

        
        $__internal_ed85e0deab62c4fd7bd741b570469a5aa01a3109248b348eba8186e2f21f1606->leave($__internal_ed85e0deab62c4fd7bd741b570469a5aa01a3109248b348eba8186e2f21f1606_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2003ea5b16d15e20b13919a5411e54ac02ad82b9d4208c6a5e9701f529af3d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2003ea5b16d15e20b13919a5411e54ac02ad82b9d4208c6a5e9701f529af3d13->enter($__internal_2003ea5b16d15e20b13919a5411e54ac02ad82b9d4208c6a5e9701f529af3d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bfd2bbd3cbd0d207f8a83322416797840b8e8053422bd4240501813fee6b42da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd2bbd3cbd0d207f8a83322416797840b8e8053422bd4240501813fee6b42da->enter($__internal_bfd2bbd3cbd0d207f8a83322416797840b8e8053422bd4240501813fee6b42da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bfd2bbd3cbd0d207f8a83322416797840b8e8053422bd4240501813fee6b42da->leave($__internal_bfd2bbd3cbd0d207f8a83322416797840b8e8053422bd4240501813fee6b42da_prof);

        
        $__internal_2003ea5b16d15e20b13919a5411e54ac02ad82b9d4208c6a5e9701f529af3d13->leave($__internal_2003ea5b16d15e20b13919a5411e54ac02ad82b9d4208c6a5e9701f529af3d13_prof);

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
