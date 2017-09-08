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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfd7a749e5c80c2731f3e4e04738ae65e6a609cc231ec8e05feaa4d565866f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd7a749e5c80c2731f3e4e04738ae65e6a609cc231ec8e05feaa4d565866f2d->enter($__internal_dfd7a749e5c80c2731f3e4e04738ae65e6a609cc231ec8e05feaa4d565866f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $__internal_aa9bc0cb7cdf29bde1c6fcd74d2b8628461fb59d5b75badea18c806472fd39bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9bc0cb7cdf29bde1c6fcd74d2b8628461fb59d5b75badea18c806472fd39bb->enter($__internal_aa9bc0cb7cdf29bde1c6fcd74d2b8628461fb59d5b75badea18c806472fd39bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd7a749e5c80c2731f3e4e04738ae65e6a609cc231ec8e05feaa4d565866f2d->leave($__internal_dfd7a749e5c80c2731f3e4e04738ae65e6a609cc231ec8e05feaa4d565866f2d_prof);

        
        $__internal_aa9bc0cb7cdf29bde1c6fcd74d2b8628461fb59d5b75badea18c806472fd39bb->leave($__internal_aa9bc0cb7cdf29bde1c6fcd74d2b8628461fb59d5b75badea18c806472fd39bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6942fae90d2b473f8fea3a47ea4a24e9e6fe2f4deddaccd349431601df2f5c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6942fae90d2b473f8fea3a47ea4a24e9e6fe2f4deddaccd349431601df2f5c0b->enter($__internal_6942fae90d2b473f8fea3a47ea4a24e9e6fe2f4deddaccd349431601df2f5c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3978ec8ad7b8d1136f383143c4159cebede7ef84a009d0e5397080e6d77a5d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3978ec8ad7b8d1136f383143c4159cebede7ef84a009d0e5397080e6d77a5d09->enter($__internal_3978ec8ad7b8d1136f383143c4159cebede7ef84a009d0e5397080e6d77a5d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "System Login";
        
        $__internal_3978ec8ad7b8d1136f383143c4159cebede7ef84a009d0e5397080e6d77a5d09->leave($__internal_3978ec8ad7b8d1136f383143c4159cebede7ef84a009d0e5397080e6d77a5d09_prof);

        
        $__internal_6942fae90d2b473f8fea3a47ea4a24e9e6fe2f4deddaccd349431601df2f5c0b->leave($__internal_6942fae90d2b473f8fea3a47ea4a24e9e6fe2f4deddaccd349431601df2f5c0b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_570726ed5c5042959a100b97c62ec56d21b7dabfe75411aaf3efd6d65cfe79a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570726ed5c5042959a100b97c62ec56d21b7dabfe75411aaf3efd6d65cfe79a3->enter($__internal_570726ed5c5042959a100b97c62ec56d21b7dabfe75411aaf3efd6d65cfe79a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cc001b608fb16b49aa309e5affe85c60720a04189f40b49a0fab783bea55d802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc001b608fb16b49aa309e5affe85c60720a04189f40b49a0fab783bea55d802->enter($__internal_cc001b608fb16b49aa309e5affe85c60720a04189f40b49a0fab783bea55d802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_cc001b608fb16b49aa309e5affe85c60720a04189f40b49a0fab783bea55d802->leave($__internal_cc001b608fb16b49aa309e5affe85c60720a04189f40b49a0fab783bea55d802_prof);

        
        $__internal_570726ed5c5042959a100b97c62ec56d21b7dabfe75411aaf3efd6d65cfe79a3->leave($__internal_570726ed5c5042959a100b97c62ec56d21b7dabfe75411aaf3efd6d65cfe79a3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_571b2a4b6eebee69ef7346c221b050cfd9cbfa38c0fc148db3a8ebffb25ef406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571b2a4b6eebee69ef7346c221b050cfd9cbfa38c0fc148db3a8ebffb25ef406->enter($__internal_571b2a4b6eebee69ef7346c221b050cfd9cbfa38c0fc148db3a8ebffb25ef406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_139c3e9e473f32fb45305dacad68ee6053d6235ca2177ffc5ad1dd1cfb40ba90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139c3e9e473f32fb45305dacad68ee6053d6235ca2177ffc5ad1dd1cfb40ba90->enter($__internal_139c3e9e473f32fb45305dacad68ee6053d6235ca2177ffc5ad1dd1cfb40ba90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Dashboard</a>
        <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Settings</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Profile</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Help</a>
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
                        <a class=\"nav-link active\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Overview <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Reports</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Analytics</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Export</a>
                    </li>
                </ul>

                <ul class=\"nav nav-pills flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Nav item</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Nav item again</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">One more nav</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Another nav item</a>
                    </li>
                </ul>

                <ul class=\"nav nav-pills flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Nav item again</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">One more nav</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Another nav item</a>
                    </li>
                </ul>
            </nav>

            <main class=\"col-sm-9 ml-sm-auto col-md-10 pt-3\" role=\"main\">
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
            </main>
        </div>
    </div>
";
        
        $__internal_139c3e9e473f32fb45305dacad68ee6053d6235ca2177ffc5ad1dd1cfb40ba90->leave($__internal_139c3e9e473f32fb45305dacad68ee6053d6235ca2177ffc5ad1dd1cfb40ba90_prof);

        
        $__internal_571b2a4b6eebee69ef7346c221b050cfd9cbfa38c0fc148db3a8ebffb25ef406->leave($__internal_571b2a4b6eebee69ef7346c221b050cfd9cbfa38c0fc148db3a8ebffb25ef406_prof);

    }

    // line 241
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f37ae2ea598319f9c2909d446405eee965cd610bd6dc47154f041410b1e7877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f37ae2ea598319f9c2909d446405eee965cd610bd6dc47154f041410b1e7877->enter($__internal_2f37ae2ea598319f9c2909d446405eee965cd610bd6dc47154f041410b1e7877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7a1a497cc6849ffc2006fb3b214e0f12443ae0379fc93f91b53a3f7933d76398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1a497cc6849ffc2006fb3b214e0f12443ae0379fc93f91b53a3f7933d76398->enter($__internal_7a1a497cc6849ffc2006fb3b214e0f12443ae0379fc93f91b53a3f7933d76398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 242
        echo "    <!-- Bootstrap core JavaScript
            ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery-3.2.1.slim.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/popper.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7a1a497cc6849ffc2006fb3b214e0f12443ae0379fc93f91b53a3f7933d76398->leave($__internal_7a1a497cc6849ffc2006fb3b214e0f12443ae0379fc93f91b53a3f7933d76398_prof);

        
        $__internal_2f37ae2ea598319f9c2909d446405eee965cd610bd6dc47154f041410b1e7877->leave($__internal_2f37ae2ea598319f9c2909d446405eee965cd610bd6dc47154f041410b1e7877_prof);

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
        return array (  364 => 249,  360 => 248,  356 => 247,  352 => 246,  346 => 242,  337 => 241,  96 => 9,  87 => 8,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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

{% block title %}System Login{% endblock %}
{% block stylesheets %}
    <link href=\"{{ asset('bundles/app/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/dashboard.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Dashboard</a>
        <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Settings</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Profile</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Help</a>
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
                        <a class=\"nav-link active\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Overview <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Reports</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Analytics</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Export</a>
                    </li>
                </ul>

                <ul class=\"nav nav-pills flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Nav item</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Nav item again</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">One more nav</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Another nav item</a>
                    </li>
                </ul>

                <ul class=\"nav nav-pills flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Nav item again</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">One more nav</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://getbootstrap.com/docs/4.0/examples/dashboard/#\">Another nav item</a>
                    </li>
                </ul>
            </nav>

            <main class=\"col-sm-9 ml-sm-auto col-md-10 pt-3\" role=\"main\">
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
