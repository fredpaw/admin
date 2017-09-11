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
        $__internal_83af3b5f8b6c8fc0b37444e284d495ea21c93d51d267f3e5964bf877bf1c2730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83af3b5f8b6c8fc0b37444e284d495ea21c93d51d267f3e5964bf877bf1c2730->enter($__internal_83af3b5f8b6c8fc0b37444e284d495ea21c93d51d267f3e5964bf877bf1c2730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $__internal_5b39a4599a93a55e95bc1e4631616ebcba5de1bb581e3d5a4d4cfaf4cd13b9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b39a4599a93a55e95bc1e4631616ebcba5de1bb581e3d5a4d4cfaf4cd13b9bb->enter($__internal_5b39a4599a93a55e95bc1e4631616ebcba5de1bb581e3d5a4d4cfaf4cd13b9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83af3b5f8b6c8fc0b37444e284d495ea21c93d51d267f3e5964bf877bf1c2730->leave($__internal_83af3b5f8b6c8fc0b37444e284d495ea21c93d51d267f3e5964bf877bf1c2730_prof);

        
        $__internal_5b39a4599a93a55e95bc1e4631616ebcba5de1bb581e3d5a4d4cfaf4cd13b9bb->leave($__internal_5b39a4599a93a55e95bc1e4631616ebcba5de1bb581e3d5a4d4cfaf4cd13b9bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e00cbec66e6b19d35a9b1aa788c0778d2f1693949778c5a771c26605ee207204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00cbec66e6b19d35a9b1aa788c0778d2f1693949778c5a771c26605ee207204->enter($__internal_e00cbec66e6b19d35a9b1aa788c0778d2f1693949778c5a771c26605ee207204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7db25576986b3c5a64b9fdc27d60d3b171f89c539dd19f4511c21a5628054c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db25576986b3c5a64b9fdc27d60d3b171f89c539dd19f4511c21a5628054c3c->enter($__internal_7db25576986b3c5a64b9fdc27d60d3b171f89c539dd19f4511c21a5628054c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_7db25576986b3c5a64b9fdc27d60d3b171f89c539dd19f4511c21a5628054c3c->leave($__internal_7db25576986b3c5a64b9fdc27d60d3b171f89c539dd19f4511c21a5628054c3c_prof);

        
        $__internal_e00cbec66e6b19d35a9b1aa788c0778d2f1693949778c5a771c26605ee207204->leave($__internal_e00cbec66e6b19d35a9b1aa788c0778d2f1693949778c5a771c26605ee207204_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd16d0a8159c79fd2729d183f06ef145a504d702dfd54143bb544f7b40bb8f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd16d0a8159c79fd2729d183f06ef145a504d702dfd54143bb544f7b40bb8f8e->enter($__internal_dd16d0a8159c79fd2729d183f06ef145a504d702dfd54143bb544f7b40bb8f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9139c37d27e7b5c3624fc0e36f5b3c25062d01f56674799aed94ae36547784a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9139c37d27e7b5c3624fc0e36f5b3c25062d01f56674799aed94ae36547784a6->enter($__internal_9139c37d27e7b5c3624fc0e36f5b3c25062d01f56674799aed94ae36547784a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_9139c37d27e7b5c3624fc0e36f5b3c25062d01f56674799aed94ae36547784a6->leave($__internal_9139c37d27e7b5c3624fc0e36f5b3c25062d01f56674799aed94ae36547784a6_prof);

        
        $__internal_dd16d0a8159c79fd2729d183f06ef145a504d702dfd54143bb544f7b40bb8f8e->leave($__internal_dd16d0a8159c79fd2729d183f06ef145a504d702dfd54143bb544f7b40bb8f8e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2c85e113ce76414b06dd67734b7611cc67f103a68cd68ef28be230fc0e855d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c85e113ce76414b06dd67734b7611cc67f103a68cd68ef28be230fc0e855d1->enter($__internal_b2c85e113ce76414b06dd67734b7611cc67f103a68cd68ef28be230fc0e855d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e912af830d33d2f5cb13684c10da5d649d010a08a3765cbadc471cbc17aa726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e912af830d33d2f5cb13684c10da5d649d010a08a3765cbadc471cbc17aa726->enter($__internal_7e912af830d33d2f5cb13684c10da5d649d010a08a3765cbadc471cbc17aa726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <a class=\"nav-link\" href=\"#\">Article List</a>
                    </li>
                </ul>
            </nav>

            <main class=\"col-sm-9 ml-sm-auto col-md-10 pt-3\" role=\"main\">
                ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 209
        echo "            </main>
        </div>
    </div>
";
        
        $__internal_7e912af830d33d2f5cb13684c10da5d649d010a08a3765cbadc471cbc17aa726->leave($__internal_7e912af830d33d2f5cb13684c10da5d649d010a08a3765cbadc471cbc17aa726_prof);

        
        $__internal_b2c85e113ce76414b06dd67734b7611cc67f103a68cd68ef28be230fc0e855d1->leave($__internal_b2c85e113ce76414b06dd67734b7611cc67f103a68cd68ef28be230fc0e855d1_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_2d8a506e8389c1168b2d0ce614c2c737670864cf4143f6a6155acbd34c45bc4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d8a506e8389c1168b2d0ce614c2c737670864cf4143f6a6155acbd34c45bc4a->enter($__internal_2d8a506e8389c1168b2d0ce614c2c737670864cf4143f6a6155acbd34c45bc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_43085d10f1172d4c7d5b2342c0d5acde3ceb89bd84e6cd6e65b0324ee2eb63ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43085d10f1172d4c7d5b2342c0d5acde3ceb89bd84e6cd6e65b0324ee2eb63ec->enter($__internal_43085d10f1172d4c7d5b2342c0d5acde3ceb89bd84e6cd6e65b0324ee2eb63ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 55
        echo "                <h1>Dashboard</h1>

                <section class=\"row text-center placeholders\">
                    <div class=\"col-6 col-sm-3 placeholder\">
                        <img src=\"data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=\" width=\"200\" height=\"200\" class=\"img-fluid rounded-circle\" alt=\"Generic placeholder thumbnail\">
                        <h4>Label</h4>
                        <div class=\"text-muted\">Something else</div>
                    </div>
                    <div class=\"col-6 col-sm-3 placeholder\">
                        <img src=\"data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=\" width=\"200\" height=\"200\" class=\"img-fluid rounded-circle\" alt=\"Generic placeholder thumbnail\">
                        <h4>Label</h4>
                        <span class=\"text-muted\">Something else</span>
                    </div>
                    <div class=\"col-6 col-sm-3 placeholder\">
                        <img src=\"data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=\" width=\"200\" height=\"200\" class=\"img-fluid rounded-circle\" alt=\"Generic placeholder thumbnail\">
                        <h4>Label</h4>
                        <span class=\"text-muted\">Something else</span>
                    </div>
                    <div class=\"col-6 col-sm-3 placeholder\">
                        <img src=\"data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=\" width=\"200\" height=\"200\" class=\"img-fluid rounded-circle\" alt=\"Generic placeholder thumbnail\">
                        <h4>Label</h4>
                        <span class=\"text-muted\">Something else</span>
                    </div>
                </section>

                <h2>Section title</h2>
                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1,001</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                        </tr>
                        <tr>
                            <td>1,002</td>
                            <td>amet</td>
                            <td>consectetur</td>
                            <td>adipiscing</td>
                            <td>elit</td>
                        </tr>
                        <tr>
                            <td>1,003</td>
                            <td>Integer</td>
                            <td>nec</td>
                            <td>odio</td>
                            <td>Praesent</td>
                        </tr>
                        <tr>
                            <td>1,003</td>
                            <td>libero</td>
                            <td>Sed</td>
                            <td>cursus</td>
                            <td>ante</td>
                        </tr>
                        <tr>
                            <td>1,004</td>
                            <td>dapibus</td>
                            <td>diam</td>
                            <td>Sed</td>
                            <td>nisi</td>
                        </tr>
                        <tr>
                            <td>1,005</td>
                            <td>Nulla</td>
                            <td>quis</td>
                            <td>sem</td>
                            <td>at</td>
                        </tr>
                        <tr>
                            <td>1,006</td>
                            <td>nibh</td>
                            <td>elementum</td>
                            <td>imperdiet</td>
                            <td>Duis</td>
                        </tr>
                        <tr>
                            <td>1,007</td>
                            <td>sagittis</td>
                            <td>ipsum</td>
                            <td>Praesent</td>
                            <td>mauris</td>
                        </tr>
                        <tr>
                            <td>1,008</td>
                            <td>Fusce</td>
                            <td>nec</td>
                            <td>tellus</td>
                            <td>sed</td>
                        </tr>
                        <tr>
                            <td>1,009</td>
                            <td>augue</td>
                            <td>semper</td>
                            <td>porta</td>
                            <td>Mauris</td>
                        </tr>
                        <tr>
                            <td>1,010</td>
                            <td>massa</td>
                            <td>Vestibulum</td>
                            <td>lacinia</td>
                            <td>arcu</td>
                        </tr>
                        <tr>
                            <td>1,011</td>
                            <td>eget</td>
                            <td>nulla</td>
                            <td>Class</td>
                            <td>aptent</td>
                        </tr>
                        <tr>
                            <td>1,012</td>
                            <td>taciti</td>
                            <td>sociosqu</td>
                            <td>ad</td>
                            <td>litora</td>
                        </tr>
                        <tr>
                            <td>1,013</td>
                            <td>torquent</td>
                            <td>per</td>
                            <td>conubia</td>
                            <td>nostra</td>
                        </tr>
                        <tr>
                            <td>1,014</td>
                            <td>per</td>
                            <td>inceptos</td>
                            <td>himenaeos</td>
                            <td>Curabitur</td>
                        </tr>
                        <tr>
                            <td>1,015</td>
                            <td>sodales</td>
                            <td>ligula</td>
                            <td>in</td>
                            <td>libero</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                ";
        
        $__internal_43085d10f1172d4c7d5b2342c0d5acde3ceb89bd84e6cd6e65b0324ee2eb63ec->leave($__internal_43085d10f1172d4c7d5b2342c0d5acde3ceb89bd84e6cd6e65b0324ee2eb63ec_prof);

        
        $__internal_2d8a506e8389c1168b2d0ce614c2c737670864cf4143f6a6155acbd34c45bc4a->leave($__internal_2d8a506e8389c1168b2d0ce614c2c737670864cf4143f6a6155acbd34c45bc4a_prof);

    }

    // line 213
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a79c928b1d3725c23d830c98dc1efd1fd05fe9ce9fb2ca5c51466024a453f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a79c928b1d3725c23d830c98dc1efd1fd05fe9ce9fb2ca5c51466024a453f7d->enter($__internal_9a79c928b1d3725c23d830c98dc1efd1fd05fe9ce9fb2ca5c51466024a453f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8b506d23d4071c32cc04a0b8b5b4a988edf1f32eee58e8146c7065fa75f9d7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b506d23d4071c32cc04a0b8b5b4a988edf1f32eee58e8146c7065fa75f9d7b8->enter($__internal_8b506d23d4071c32cc04a0b8b5b4a988edf1f32eee58e8146c7065fa75f9d7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 214
        echo "    <!-- Bootstrap core JavaScript
            ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery-3.2.1.slim.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/popper.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8b506d23d4071c32cc04a0b8b5b4a988edf1f32eee58e8146c7065fa75f9d7b8->leave($__internal_8b506d23d4071c32cc04a0b8b5b4a988edf1f32eee58e8146c7065fa75f9d7b8_prof);

        
        $__internal_9a79c928b1d3725c23d830c98dc1efd1fd05fe9ce9fb2ca5c51466024a453f7d->leave($__internal_9a79c928b1d3725c23d830c98dc1efd1fd05fe9ce9fb2ca5c51466024a453f7d_prof);

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
        return array (  378 => 221,  374 => 220,  370 => 219,  366 => 218,  360 => 214,  351 => 213,  188 => 55,  179 => 54,  166 => 209,  164 => 54,  152 => 45,  143 => 39,  137 => 36,  119 => 21,  111 => 18,  100 => 10,  97 => 9,  88 => 8,  76 => 6,  71 => 5,  62 => 4,  44 => 3,  11 => 1,);
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
                        <a class=\"nav-link\" href=\"#\">Article List</a>
                    </li>
                </ul>
            </nav>

            <main class=\"col-sm-9 ml-sm-auto col-md-10 pt-3\" role=\"main\">
                {% block content %}
                <h1>Dashboard</h1>

                <section class=\"row text-center placeholders\">
                    <div class=\"col-6 col-sm-3 placeholder\">
                        <img src=\"data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=\" width=\"200\" height=\"200\" class=\"img-fluid rounded-circle\" alt=\"Generic placeholder thumbnail\">
                        <h4>Label</h4>
                        <div class=\"text-muted\">Something else</div>
                    </div>
                    <div class=\"col-6 col-sm-3 placeholder\">
                        <img src=\"data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=\" width=\"200\" height=\"200\" class=\"img-fluid rounded-circle\" alt=\"Generic placeholder thumbnail\">
                        <h4>Label</h4>
                        <span class=\"text-muted\">Something else</span>
                    </div>
                    <div class=\"col-6 col-sm-3 placeholder\">
                        <img src=\"data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=\" width=\"200\" height=\"200\" class=\"img-fluid rounded-circle\" alt=\"Generic placeholder thumbnail\">
                        <h4>Label</h4>
                        <span class=\"text-muted\">Something else</span>
                    </div>
                    <div class=\"col-6 col-sm-3 placeholder\">
                        <img src=\"data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=\" width=\"200\" height=\"200\" class=\"img-fluid rounded-circle\" alt=\"Generic placeholder thumbnail\">
                        <h4>Label</h4>
                        <span class=\"text-muted\">Something else</span>
                    </div>
                </section>

                <h2>Section title</h2>
                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1,001</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                        </tr>
                        <tr>
                            <td>1,002</td>
                            <td>amet</td>
                            <td>consectetur</td>
                            <td>adipiscing</td>
                            <td>elit</td>
                        </tr>
                        <tr>
                            <td>1,003</td>
                            <td>Integer</td>
                            <td>nec</td>
                            <td>odio</td>
                            <td>Praesent</td>
                        </tr>
                        <tr>
                            <td>1,003</td>
                            <td>libero</td>
                            <td>Sed</td>
                            <td>cursus</td>
                            <td>ante</td>
                        </tr>
                        <tr>
                            <td>1,004</td>
                            <td>dapibus</td>
                            <td>diam</td>
                            <td>Sed</td>
                            <td>nisi</td>
                        </tr>
                        <tr>
                            <td>1,005</td>
                            <td>Nulla</td>
                            <td>quis</td>
                            <td>sem</td>
                            <td>at</td>
                        </tr>
                        <tr>
                            <td>1,006</td>
                            <td>nibh</td>
                            <td>elementum</td>
                            <td>imperdiet</td>
                            <td>Duis</td>
                        </tr>
                        <tr>
                            <td>1,007</td>
                            <td>sagittis</td>
                            <td>ipsum</td>
                            <td>Praesent</td>
                            <td>mauris</td>
                        </tr>
                        <tr>
                            <td>1,008</td>
                            <td>Fusce</td>
                            <td>nec</td>
                            <td>tellus</td>
                            <td>sed</td>
                        </tr>
                        <tr>
                            <td>1,009</td>
                            <td>augue</td>
                            <td>semper</td>
                            <td>porta</td>
                            <td>Mauris</td>
                        </tr>
                        <tr>
                            <td>1,010</td>
                            <td>massa</td>
                            <td>Vestibulum</td>
                            <td>lacinia</td>
                            <td>arcu</td>
                        </tr>
                        <tr>
                            <td>1,011</td>
                            <td>eget</td>
                            <td>nulla</td>
                            <td>Class</td>
                            <td>aptent</td>
                        </tr>
                        <tr>
                            <td>1,012</td>
                            <td>taciti</td>
                            <td>sociosqu</td>
                            <td>ad</td>
                            <td>litora</td>
                        </tr>
                        <tr>
                            <td>1,013</td>
                            <td>torquent</td>
                            <td>per</td>
                            <td>conubia</td>
                            <td>nostra</td>
                        </tr>
                        <tr>
                            <td>1,014</td>
                            <td>per</td>
                            <td>inceptos</td>
                            <td>himenaeos</td>
                            <td>Curabitur</td>
                        </tr>
                        <tr>
                            <td>1,015</td>
                            <td>sodales</td>
                            <td>ligula</td>
                            <td>in</td>
                            <td>libero</td>
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
