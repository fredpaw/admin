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
        $__internal_01b09e665b01d3f43626fce80c7c30853d3d5a8acf32072134c2ab6014c23b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b09e665b01d3f43626fce80c7c30853d3d5a8acf32072134c2ab6014c23b44->enter($__internal_01b09e665b01d3f43626fce80c7c30853d3d5a8acf32072134c2ab6014c23b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $__internal_157dd19e4ceb3670e7f7ce203aa0da16efb251d6764ad2da1aad5fb20273f438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157dd19e4ceb3670e7f7ce203aa0da16efb251d6764ad2da1aad5fb20273f438->enter($__internal_157dd19e4ceb3670e7f7ce203aa0da16efb251d6764ad2da1aad5fb20273f438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01b09e665b01d3f43626fce80c7c30853d3d5a8acf32072134c2ab6014c23b44->leave($__internal_01b09e665b01d3f43626fce80c7c30853d3d5a8acf32072134c2ab6014c23b44_prof);

        
        $__internal_157dd19e4ceb3670e7f7ce203aa0da16efb251d6764ad2da1aad5fb20273f438->leave($__internal_157dd19e4ceb3670e7f7ce203aa0da16efb251d6764ad2da1aad5fb20273f438_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f997d64f821d0cf9e316ea32284166622e64314015336e39277b072b97d7dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f997d64f821d0cf9e316ea32284166622e64314015336e39277b072b97d7dff->enter($__internal_8f997d64f821d0cf9e316ea32284166622e64314015336e39277b072b97d7dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5ec006155d76181ce5ae514b56baa21e7b34df4155b1761abf2a988d07fe280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ec006155d76181ce5ae514b56baa21e7b34df4155b1761abf2a988d07fe280->enter($__internal_c5ec006155d76181ce5ae514b56baa21e7b34df4155b1761abf2a988d07fe280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_c5ec006155d76181ce5ae514b56baa21e7b34df4155b1761abf2a988d07fe280->leave($__internal_c5ec006155d76181ce5ae514b56baa21e7b34df4155b1761abf2a988d07fe280_prof);

        
        $__internal_8f997d64f821d0cf9e316ea32284166622e64314015336e39277b072b97d7dff->leave($__internal_8f997d64f821d0cf9e316ea32284166622e64314015336e39277b072b97d7dff_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3cc92426592f5b1a60d6378f4b3250b0177335cd391740d98134f2b42bc0fef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc92426592f5b1a60d6378f4b3250b0177335cd391740d98134f2b42bc0fef7->enter($__internal_3cc92426592f5b1a60d6378f4b3250b0177335cd391740d98134f2b42bc0fef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_681ca9b8ea2c90b2360519af637c0d305c2a7135d59f7453e0e241a87d729dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681ca9b8ea2c90b2360519af637c0d305c2a7135d59f7453e0e241a87d729dfd->enter($__internal_681ca9b8ea2c90b2360519af637c0d305c2a7135d59f7453e0e241a87d729dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_681ca9b8ea2c90b2360519af637c0d305c2a7135d59f7453e0e241a87d729dfd->leave($__internal_681ca9b8ea2c90b2360519af637c0d305c2a7135d59f7453e0e241a87d729dfd_prof);

        
        $__internal_3cc92426592f5b1a60d6378f4b3250b0177335cd391740d98134f2b42bc0fef7->leave($__internal_3cc92426592f5b1a60d6378f4b3250b0177335cd391740d98134f2b42bc0fef7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_87a34b505bf68d53ba96d1618188f0225a598f413248124ba9462ecab2c1c79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a34b505bf68d53ba96d1618188f0225a598f413248124ba9462ecab2c1c79b->enter($__internal_87a34b505bf68d53ba96d1618188f0225a598f413248124ba9462ecab2c1c79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2911bf345ba870cebc231f0c575deb9a3bcf9e0828d154f4d087ac5f55200ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2911bf345ba870cebc231f0c575deb9a3bcf9e0828d154f4d087ac5f55200ef->enter($__internal_a2911bf345ba870cebc231f0c575deb9a3bcf9e0828d154f4d087ac5f55200ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a2911bf345ba870cebc231f0c575deb9a3bcf9e0828d154f4d087ac5f55200ef->leave($__internal_a2911bf345ba870cebc231f0c575deb9a3bcf9e0828d154f4d087ac5f55200ef_prof);

        
        $__internal_87a34b505bf68d53ba96d1618188f0225a598f413248124ba9462ecab2c1c79b->leave($__internal_87a34b505bf68d53ba96d1618188f0225a598f413248124ba9462ecab2c1c79b_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_697b4c02479e0e57a4caa967e16e0abdcf6665ddd2f5d0d24905528e31d10099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697b4c02479e0e57a4caa967e16e0abdcf6665ddd2f5d0d24905528e31d10099->enter($__internal_697b4c02479e0e57a4caa967e16e0abdcf6665ddd2f5d0d24905528e31d10099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2832c225bb69a12c8fd6b7f3f11a5542b154de068ba7f8c562382152da855839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2832c225bb69a12c8fd6b7f3f11a5542b154de068ba7f8c562382152da855839->enter($__internal_2832c225bb69a12c8fd6b7f3f11a5542b154de068ba7f8c562382152da855839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2832c225bb69a12c8fd6b7f3f11a5542b154de068ba7f8c562382152da855839->leave($__internal_2832c225bb69a12c8fd6b7f3f11a5542b154de068ba7f8c562382152da855839_prof);

        
        $__internal_697b4c02479e0e57a4caa967e16e0abdcf6665ddd2f5d0d24905528e31d10099->leave($__internal_697b4c02479e0e57a4caa967e16e0abdcf6665ddd2f5d0d24905528e31d10099_prof);

    }

    // line 213
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3998ce0c53ae222e11f244deeeadc45ef5a035a0444c27f44b9d5bb9a33cfbee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3998ce0c53ae222e11f244deeeadc45ef5a035a0444c27f44b9d5bb9a33cfbee->enter($__internal_3998ce0c53ae222e11f244deeeadc45ef5a035a0444c27f44b9d5bb9a33cfbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2a241d41c23b45a8b7cd8f0aebc9fd1fec19573096a087cedd162fec1e105a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a241d41c23b45a8b7cd8f0aebc9fd1fec19573096a087cedd162fec1e105a0d->enter($__internal_2a241d41c23b45a8b7cd8f0aebc9fd1fec19573096a087cedd162fec1e105a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2a241d41c23b45a8b7cd8f0aebc9fd1fec19573096a087cedd162fec1e105a0d->leave($__internal_2a241d41c23b45a8b7cd8f0aebc9fd1fec19573096a087cedd162fec1e105a0d_prof);

        
        $__internal_3998ce0c53ae222e11f244deeeadc45ef5a035a0444c27f44b9d5bb9a33cfbee->leave($__internal_3998ce0c53ae222e11f244deeeadc45ef5a035a0444c27f44b9d5bb9a33cfbee_prof);

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
