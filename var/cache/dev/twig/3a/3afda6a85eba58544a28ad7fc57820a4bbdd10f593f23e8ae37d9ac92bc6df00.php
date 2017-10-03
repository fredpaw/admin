<?php

/* @App/default/index.html.twig */
class __TwigTemplate_63982fe65a1a5307204c325202e9a180c6b568f1a7ecaf582161bdbafe254795 extends Twig_Template
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
        $__internal_002f5fd61108f43890b2db43f9b1b872e7f65d76a4983384d827697b1f36ff63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_002f5fd61108f43890b2db43f9b1b872e7f65d76a4983384d827697b1f36ff63->enter($__internal_002f5fd61108f43890b2db43f9b1b872e7f65d76a4983384d827697b1f36ff63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_3e7c3654f9ca0a39a2c6253b3281acae034a26fe33c9c906eb41796306ddaf44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7c3654f9ca0a39a2c6253b3281acae034a26fe33c9c906eb41796306ddaf44->enter($__internal_3e7c3654f9ca0a39a2c6253b3281acae034a26fe33c9c906eb41796306ddaf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_002f5fd61108f43890b2db43f9b1b872e7f65d76a4983384d827697b1f36ff63->leave($__internal_002f5fd61108f43890b2db43f9b1b872e7f65d76a4983384d827697b1f36ff63_prof);

        
        $__internal_3e7c3654f9ca0a39a2c6253b3281acae034a26fe33c9c906eb41796306ddaf44->leave($__internal_3e7c3654f9ca0a39a2c6253b3281acae034a26fe33c9c906eb41796306ddaf44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_162c803bced8f5c05054794a57a6ff4e1c0db72ed685f040186313a8cb206e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162c803bced8f5c05054794a57a6ff4e1c0db72ed685f040186313a8cb206e18->enter($__internal_162c803bced8f5c05054794a57a6ff4e1c0db72ed685f040186313a8cb206e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e7e396f501eb13526999bdb5cd99d6c4869d109710da60732a732075c6eb986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7e396f501eb13526999bdb5cd99d6c4869d109710da60732a732075c6eb986->enter($__internal_5e7e396f501eb13526999bdb5cd99d6c4869d109710da60732a732075c6eb986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_5e7e396f501eb13526999bdb5cd99d6c4869d109710da60732a732075c6eb986->leave($__internal_5e7e396f501eb13526999bdb5cd99d6c4869d109710da60732a732075c6eb986_prof);

        
        $__internal_162c803bced8f5c05054794a57a6ff4e1c0db72ed685f040186313a8cb206e18->leave($__internal_162c803bced8f5c05054794a57a6ff4e1c0db72ed685f040186313a8cb206e18_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7272e86116f923cb95fc64995d738468e983992457be2ec2bbb6627dbe0fd3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7272e86116f923cb95fc64995d738468e983992457be2ec2bbb6627dbe0fd3e2->enter($__internal_7272e86116f923cb95fc64995d738468e983992457be2ec2bbb6627dbe0fd3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_962f0a1daa25290fcf19b7abb9e34b68d70c3ada3251b329dede14d5ce3f00d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962f0a1daa25290fcf19b7abb9e34b68d70c3ada3251b329dede14d5ce3f00d5->enter($__internal_962f0a1daa25290fcf19b7abb9e34b68d70c3ada3251b329dede14d5ce3f00d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_962f0a1daa25290fcf19b7abb9e34b68d70c3ada3251b329dede14d5ce3f00d5->leave($__internal_962f0a1daa25290fcf19b7abb9e34b68d70c3ada3251b329dede14d5ce3f00d5_prof);

        
        $__internal_7272e86116f923cb95fc64995d738468e983992457be2ec2bbb6627dbe0fd3e2->leave($__internal_7272e86116f923cb95fc64995d738468e983992457be2ec2bbb6627dbe0fd3e2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ab6a9a3ee2f3667a2cb58bb12906e3b011c8a0e4905f23f1c1ee48df417ade1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab6a9a3ee2f3667a2cb58bb12906e3b011c8a0e4905f23f1c1ee48df417ade1->enter($__internal_1ab6a9a3ee2f3667a2cb58bb12906e3b011c8a0e4905f23f1c1ee48df417ade1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5a7bfa466cac81507e02a8102d9fe1362755547332f04e88bf22159e4cc0d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a7bfa466cac81507e02a8102d9fe1362755547332f04e88bf22159e4cc0d30->enter($__internal_c5a7bfa466cac81507e02a8102d9fe1362755547332f04e88bf22159e4cc0d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c5a7bfa466cac81507e02a8102d9fe1362755547332f04e88bf22159e4cc0d30->leave($__internal_c5a7bfa466cac81507e02a8102d9fe1362755547332f04e88bf22159e4cc0d30_prof);

        
        $__internal_1ab6a9a3ee2f3667a2cb58bb12906e3b011c8a0e4905f23f1c1ee48df417ade1->leave($__internal_1ab6a9a3ee2f3667a2cb58bb12906e3b011c8a0e4905f23f1c1ee48df417ade1_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_949ceb7ae25b9da9015d76460ef40556625cf56413588d5661b2604ef0bb1b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_949ceb7ae25b9da9015d76460ef40556625cf56413588d5661b2604ef0bb1b91->enter($__internal_949ceb7ae25b9da9015d76460ef40556625cf56413588d5661b2604ef0bb1b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_91a74937f27acbe9f5ed29dd05594eac176e4bfe824d2ef9c029f69f1fbe01b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a74937f27acbe9f5ed29dd05594eac176e4bfe824d2ef9c029f69f1fbe01b5->enter($__internal_91a74937f27acbe9f5ed29dd05594eac176e4bfe824d2ef9c029f69f1fbe01b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_91a74937f27acbe9f5ed29dd05594eac176e4bfe824d2ef9c029f69f1fbe01b5->leave($__internal_91a74937f27acbe9f5ed29dd05594eac176e4bfe824d2ef9c029f69f1fbe01b5_prof);

        
        $__internal_949ceb7ae25b9da9015d76460ef40556625cf56413588d5661b2604ef0bb1b91->leave($__internal_949ceb7ae25b9da9015d76460ef40556625cf56413588d5661b2604ef0bb1b91_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7d175f2e32d7d189d2f4a993e73fc83a7326ceec5875fc3f7c38b58666709da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d175f2e32d7d189d2f4a993e73fc83a7326ceec5875fc3f7c38b58666709da->enter($__internal_b7d175f2e32d7d189d2f4a993e73fc83a7326ceec5875fc3f7c38b58666709da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ff90bfbd6e1ef6cb05dd84e67e765012a88c0faf1b2a7f838c3c51ab51ce52b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff90bfbd6e1ef6cb05dd84e67e765012a88c0faf1b2a7f838c3c51ab51ce52b7->enter($__internal_ff90bfbd6e1ef6cb05dd84e67e765012a88c0faf1b2a7f838c3c51ab51ce52b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ff90bfbd6e1ef6cb05dd84e67e765012a88c0faf1b2a7f838c3c51ab51ce52b7->leave($__internal_ff90bfbd6e1ef6cb05dd84e67e765012a88c0faf1b2a7f838c3c51ab51ce52b7_prof);

        
        $__internal_b7d175f2e32d7d189d2f4a993e73fc83a7326ceec5875fc3f7c38b58666709da->leave($__internal_b7d175f2e32d7d189d2f4a993e73fc83a7326ceec5875fc3f7c38b58666709da_prof);

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
