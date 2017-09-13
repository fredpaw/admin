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
        $__internal_fde3363077b9eddc7283bff2920d1fe7ef7caf84774a984f176004cd10de5c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde3363077b9eddc7283bff2920d1fe7ef7caf84774a984f176004cd10de5c55->enter($__internal_fde3363077b9eddc7283bff2920d1fe7ef7caf84774a984f176004cd10de5c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $__internal_cb837d1a9d15911ba31efecd0529554d8203e39abf0e217581e0e81fa12ecdf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb837d1a9d15911ba31efecd0529554d8203e39abf0e217581e0e81fa12ecdf6->enter($__internal_cb837d1a9d15911ba31efecd0529554d8203e39abf0e217581e0e81fa12ecdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fde3363077b9eddc7283bff2920d1fe7ef7caf84774a984f176004cd10de5c55->leave($__internal_fde3363077b9eddc7283bff2920d1fe7ef7caf84774a984f176004cd10de5c55_prof);

        
        $__internal_cb837d1a9d15911ba31efecd0529554d8203e39abf0e217581e0e81fa12ecdf6->leave($__internal_cb837d1a9d15911ba31efecd0529554d8203e39abf0e217581e0e81fa12ecdf6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb8a2f3043df8751abe010d86103bcf513ce17dda38e92e72135c5b9972c5743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8a2f3043df8751abe010d86103bcf513ce17dda38e92e72135c5b9972c5743->enter($__internal_cb8a2f3043df8751abe010d86103bcf513ce17dda38e92e72135c5b9972c5743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4fd57c6273efc97174d2c87ded454e2e84d697307f43c9fad59f65268dd317d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd57c6273efc97174d2c87ded454e2e84d697307f43c9fad59f65268dd317d1->enter($__internal_4fd57c6273efc97174d2c87ded454e2e84d697307f43c9fad59f65268dd317d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_4fd57c6273efc97174d2c87ded454e2e84d697307f43c9fad59f65268dd317d1->leave($__internal_4fd57c6273efc97174d2c87ded454e2e84d697307f43c9fad59f65268dd317d1_prof);

        
        $__internal_cb8a2f3043df8751abe010d86103bcf513ce17dda38e92e72135c5b9972c5743->leave($__internal_cb8a2f3043df8751abe010d86103bcf513ce17dda38e92e72135c5b9972c5743_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_854c6a96f837fd8ac3c60dcda0fa0601bb687720cb719d87161477b5eaf4ebc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854c6a96f837fd8ac3c60dcda0fa0601bb687720cb719d87161477b5eaf4ebc8->enter($__internal_854c6a96f837fd8ac3c60dcda0fa0601bb687720cb719d87161477b5eaf4ebc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3ada7e34601310ba4c94ef98deaebe59a64b5b1e33182605b3484fec0e371810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ada7e34601310ba4c94ef98deaebe59a64b5b1e33182605b3484fec0e371810->enter($__internal_3ada7e34601310ba4c94ef98deaebe59a64b5b1e33182605b3484fec0e371810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_3ada7e34601310ba4c94ef98deaebe59a64b5b1e33182605b3484fec0e371810->leave($__internal_3ada7e34601310ba4c94ef98deaebe59a64b5b1e33182605b3484fec0e371810_prof);

        
        $__internal_854c6a96f837fd8ac3c60dcda0fa0601bb687720cb719d87161477b5eaf4ebc8->leave($__internal_854c6a96f837fd8ac3c60dcda0fa0601bb687720cb719d87161477b5eaf4ebc8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a809cd773240722797f31a137017d3e5f620b09d6188940b95b51bbac177481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a809cd773240722797f31a137017d3e5f620b09d6188940b95b51bbac177481->enter($__internal_8a809cd773240722797f31a137017d3e5f620b09d6188940b95b51bbac177481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_509a9660bfa9b8a737a62f956772408dbd08e1fd6d929d8be86403d0652542f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509a9660bfa9b8a737a62f956772408dbd08e1fd6d929d8be86403d0652542f2->enter($__internal_509a9660bfa9b8a737a62f956772408dbd08e1fd6d929d8be86403d0652542f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_509a9660bfa9b8a737a62f956772408dbd08e1fd6d929d8be86403d0652542f2->leave($__internal_509a9660bfa9b8a737a62f956772408dbd08e1fd6d929d8be86403d0652542f2_prof);

        
        $__internal_8a809cd773240722797f31a137017d3e5f620b09d6188940b95b51bbac177481->leave($__internal_8a809cd773240722797f31a137017d3e5f620b09d6188940b95b51bbac177481_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_06bba0f2033d49be54ad4a54c5a2760ba4aa7b664c0e3aacb5c73dd64222aee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06bba0f2033d49be54ad4a54c5a2760ba4aa7b664c0e3aacb5c73dd64222aee2->enter($__internal_06bba0f2033d49be54ad4a54c5a2760ba4aa7b664c0e3aacb5c73dd64222aee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4e9225ca76c41b811f44ef52799b4543e51e8ac5b0e6a813e0123ef3f95842be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9225ca76c41b811f44ef52799b4543e51e8ac5b0e6a813e0123ef3f95842be->enter($__internal_4e9225ca76c41b811f44ef52799b4543e51e8ac5b0e6a813e0123ef3f95842be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4e9225ca76c41b811f44ef52799b4543e51e8ac5b0e6a813e0123ef3f95842be->leave($__internal_4e9225ca76c41b811f44ef52799b4543e51e8ac5b0e6a813e0123ef3f95842be_prof);

        
        $__internal_06bba0f2033d49be54ad4a54c5a2760ba4aa7b664c0e3aacb5c73dd64222aee2->leave($__internal_06bba0f2033d49be54ad4a54c5a2760ba4aa7b664c0e3aacb5c73dd64222aee2_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb2b012643ac5756dd2c67a22c5d5cfbb04927aa5f6f0748d43989ca6b75a057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2b012643ac5756dd2c67a22c5d5cfbb04927aa5f6f0748d43989ca6b75a057->enter($__internal_bb2b012643ac5756dd2c67a22c5d5cfbb04927aa5f6f0748d43989ca6b75a057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_74421d4aaab58d787c79d0a3e2d23afa0bc7277663265e8fbe78849ddd61d155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74421d4aaab58d787c79d0a3e2d23afa0bc7277663265e8fbe78849ddd61d155->enter($__internal_74421d4aaab58d787c79d0a3e2d23afa0bc7277663265e8fbe78849ddd61d155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_74421d4aaab58d787c79d0a3e2d23afa0bc7277663265e8fbe78849ddd61d155->leave($__internal_74421d4aaab58d787c79d0a3e2d23afa0bc7277663265e8fbe78849ddd61d155_prof);

        
        $__internal_bb2b012643ac5756dd2c67a22c5d5cfbb04927aa5f6f0748d43989ca6b75a057->leave($__internal_bb2b012643ac5756dd2c67a22c5d5cfbb04927aa5f6f0748d43989ca6b75a057_prof);

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
