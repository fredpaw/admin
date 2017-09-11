<?php

/* @App/default/index.html.twig */
class __TwigTemplate_183a52c43ad7aa82a51369f83928740d8fbeb4e67ec72c0b90efc769dcded993 extends Twig_Template
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
        $__internal_87f9e8a4fb556d155350b25562e2f5400e781523c2671b5cd742481ddc6048a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f9e8a4fb556d155350b25562e2f5400e781523c2671b5cd742481ddc6048a2->enter($__internal_87f9e8a4fb556d155350b25562e2f5400e781523c2671b5cd742481ddc6048a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_1c62d3c90ab92798ed0dca302cafb95814721170d3e3e5342f293e9d4657248b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c62d3c90ab92798ed0dca302cafb95814721170d3e3e5342f293e9d4657248b->enter($__internal_1c62d3c90ab92798ed0dca302cafb95814721170d3e3e5342f293e9d4657248b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f9e8a4fb556d155350b25562e2f5400e781523c2671b5cd742481ddc6048a2->leave($__internal_87f9e8a4fb556d155350b25562e2f5400e781523c2671b5cd742481ddc6048a2_prof);

        
        $__internal_1c62d3c90ab92798ed0dca302cafb95814721170d3e3e5342f293e9d4657248b->leave($__internal_1c62d3c90ab92798ed0dca302cafb95814721170d3e3e5342f293e9d4657248b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e615d5032d3563b1f3ada03794c0a99822fd0d739543b7ed07fc99a1e1d878e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e615d5032d3563b1f3ada03794c0a99822fd0d739543b7ed07fc99a1e1d878e->enter($__internal_6e615d5032d3563b1f3ada03794c0a99822fd0d739543b7ed07fc99a1e1d878e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d75b28a002b4f0f5d1cfc3030c5c27eac3749aec95e9e48c7ec45f220758446b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75b28a002b4f0f5d1cfc3030c5c27eac3749aec95e9e48c7ec45f220758446b->enter($__internal_d75b28a002b4f0f5d1cfc3030c5c27eac3749aec95e9e48c7ec45f220758446b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_d75b28a002b4f0f5d1cfc3030c5c27eac3749aec95e9e48c7ec45f220758446b->leave($__internal_d75b28a002b4f0f5d1cfc3030c5c27eac3749aec95e9e48c7ec45f220758446b_prof);

        
        $__internal_6e615d5032d3563b1f3ada03794c0a99822fd0d739543b7ed07fc99a1e1d878e->leave($__internal_6e615d5032d3563b1f3ada03794c0a99822fd0d739543b7ed07fc99a1e1d878e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_272cf258cac229c00c57d48c14dd2357196bf9de30f62166936e1f07b9d6914d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272cf258cac229c00c57d48c14dd2357196bf9de30f62166936e1f07b9d6914d->enter($__internal_272cf258cac229c00c57d48c14dd2357196bf9de30f62166936e1f07b9d6914d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_91d68f2d420f7fda0a5bfbd5033321aeb5f91764ab272b5781c9d102446c3fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d68f2d420f7fda0a5bfbd5033321aeb5f91764ab272b5781c9d102446c3fe6->enter($__internal_91d68f2d420f7fda0a5bfbd5033321aeb5f91764ab272b5781c9d102446c3fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_91d68f2d420f7fda0a5bfbd5033321aeb5f91764ab272b5781c9d102446c3fe6->leave($__internal_91d68f2d420f7fda0a5bfbd5033321aeb5f91764ab272b5781c9d102446c3fe6_prof);

        
        $__internal_272cf258cac229c00c57d48c14dd2357196bf9de30f62166936e1f07b9d6914d->leave($__internal_272cf258cac229c00c57d48c14dd2357196bf9de30f62166936e1f07b9d6914d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd316831d2562f038634d1f28a8327ab96d3b63f42ec16e63e00066b7e3a5e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd316831d2562f038634d1f28a8327ab96d3b63f42ec16e63e00066b7e3a5e1d->enter($__internal_fd316831d2562f038634d1f28a8327ab96d3b63f42ec16e63e00066b7e3a5e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11e8a07e114ff151af436dfbd52ffb05b634465b6c8bcb830d576f54d3993d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e8a07e114ff151af436dfbd52ffb05b634465b6c8bcb830d576f54d3993d0c->enter($__internal_11e8a07e114ff151af436dfbd52ffb05b634465b6c8bcb830d576f54d3993d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_11e8a07e114ff151af436dfbd52ffb05b634465b6c8bcb830d576f54d3993d0c->leave($__internal_11e8a07e114ff151af436dfbd52ffb05b634465b6c8bcb830d576f54d3993d0c_prof);

        
        $__internal_fd316831d2562f038634d1f28a8327ab96d3b63f42ec16e63e00066b7e3a5e1d->leave($__internal_fd316831d2562f038634d1f28a8327ab96d3b63f42ec16e63e00066b7e3a5e1d_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_50d685a91ce62532bce7ff3aa3dcc826bd9b7c7abfc1819235ae43f8e14c4c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d685a91ce62532bce7ff3aa3dcc826bd9b7c7abfc1819235ae43f8e14c4c67->enter($__internal_50d685a91ce62532bce7ff3aa3dcc826bd9b7c7abfc1819235ae43f8e14c4c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_97f3c6e0436849c848c6f43b455dc702aa6eb0bb81dea60b938d44149ec4d7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f3c6e0436849c848c6f43b455dc702aa6eb0bb81dea60b938d44149ec4d7ae->enter($__internal_97f3c6e0436849c848c6f43b455dc702aa6eb0bb81dea60b938d44149ec4d7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_97f3c6e0436849c848c6f43b455dc702aa6eb0bb81dea60b938d44149ec4d7ae->leave($__internal_97f3c6e0436849c848c6f43b455dc702aa6eb0bb81dea60b938d44149ec4d7ae_prof);

        
        $__internal_50d685a91ce62532bce7ff3aa3dcc826bd9b7c7abfc1819235ae43f8e14c4c67->leave($__internal_50d685a91ce62532bce7ff3aa3dcc826bd9b7c7abfc1819235ae43f8e14c4c67_prof);

    }

    // line 213
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a6225fd6a339d71f6f1e262ad4448048269fbf8650492eb09b4bd9c9e3961f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6225fd6a339d71f6f1e262ad4448048269fbf8650492eb09b4bd9c9e3961f1->enter($__internal_4a6225fd6a339d71f6f1e262ad4448048269fbf8650492eb09b4bd9c9e3961f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c2e63dabd64e0010eff0947af437ad6649cbdfdb1f4acd461442981610c7787f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e63dabd64e0010eff0947af437ad6649cbdfdb1f4acd461442981610c7787f->enter($__internal_c2e63dabd64e0010eff0947af437ad6649cbdfdb1f4acd461442981610c7787f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c2e63dabd64e0010eff0947af437ad6649cbdfdb1f4acd461442981610c7787f->leave($__internal_c2e63dabd64e0010eff0947af437ad6649cbdfdb1f4acd461442981610c7787f_prof);

        
        $__internal_4a6225fd6a339d71f6f1e262ad4448048269fbf8650492eb09b4bd9c9e3961f1->leave($__internal_4a6225fd6a339d71f6f1e262ad4448048269fbf8650492eb09b4bd9c9e3961f1_prof);

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
", "@App/default/index.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
