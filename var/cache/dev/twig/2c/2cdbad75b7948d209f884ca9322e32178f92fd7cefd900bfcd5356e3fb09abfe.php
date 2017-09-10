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
        $__internal_5212cfab6e275324e2cff70937f0a433b651cff4aae90f1603964411bc0bec78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5212cfab6e275324e2cff70937f0a433b651cff4aae90f1603964411bc0bec78->enter($__internal_5212cfab6e275324e2cff70937f0a433b651cff4aae90f1603964411bc0bec78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_c7efe2f2f756e97a69727b1ed4ee406ba9c4b278e784165e924ceb33153b9960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7efe2f2f756e97a69727b1ed4ee406ba9c4b278e784165e924ceb33153b9960->enter($__internal_c7efe2f2f756e97a69727b1ed4ee406ba9c4b278e784165e924ceb33153b9960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5212cfab6e275324e2cff70937f0a433b651cff4aae90f1603964411bc0bec78->leave($__internal_5212cfab6e275324e2cff70937f0a433b651cff4aae90f1603964411bc0bec78_prof);

        
        $__internal_c7efe2f2f756e97a69727b1ed4ee406ba9c4b278e784165e924ceb33153b9960->leave($__internal_c7efe2f2f756e97a69727b1ed4ee406ba9c4b278e784165e924ceb33153b9960_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a910f1f87b843771a5c73a405aef1bd05308de42926d35d4f70286e6711f3bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a910f1f87b843771a5c73a405aef1bd05308de42926d35d4f70286e6711f3bc1->enter($__internal_a910f1f87b843771a5c73a405aef1bd05308de42926d35d4f70286e6711f3bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a51ccbd3f30890091895abe244cd3ecb9431585755da14d3923ae14fc86756e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a51ccbd3f30890091895abe244cd3ecb9431585755da14d3923ae14fc86756e->enter($__internal_6a51ccbd3f30890091895abe244cd3ecb9431585755da14d3923ae14fc86756e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_6a51ccbd3f30890091895abe244cd3ecb9431585755da14d3923ae14fc86756e->leave($__internal_6a51ccbd3f30890091895abe244cd3ecb9431585755da14d3923ae14fc86756e_prof);

        
        $__internal_a910f1f87b843771a5c73a405aef1bd05308de42926d35d4f70286e6711f3bc1->leave($__internal_a910f1f87b843771a5c73a405aef1bd05308de42926d35d4f70286e6711f3bc1_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8244735ce44145d267cfda4d8ec36f80dcd8d085ad045bf5e0168116e084b194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8244735ce44145d267cfda4d8ec36f80dcd8d085ad045bf5e0168116e084b194->enter($__internal_8244735ce44145d267cfda4d8ec36f80dcd8d085ad045bf5e0168116e084b194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ec3e4d7bfd6c0cfed9ffcdab0a801be8f5ecd56f61482b8fde3df2ad92746432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3e4d7bfd6c0cfed9ffcdab0a801be8f5ecd56f61482b8fde3df2ad92746432->enter($__internal_ec3e4d7bfd6c0cfed9ffcdab0a801be8f5ecd56f61482b8fde3df2ad92746432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_ec3e4d7bfd6c0cfed9ffcdab0a801be8f5ecd56f61482b8fde3df2ad92746432->leave($__internal_ec3e4d7bfd6c0cfed9ffcdab0a801be8f5ecd56f61482b8fde3df2ad92746432_prof);

        
        $__internal_8244735ce44145d267cfda4d8ec36f80dcd8d085ad045bf5e0168116e084b194->leave($__internal_8244735ce44145d267cfda4d8ec36f80dcd8d085ad045bf5e0168116e084b194_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac138c2d177406c627cdbd5fcb8247d3458df14e75056550b5d43fa50c526c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac138c2d177406c627cdbd5fcb8247d3458df14e75056550b5d43fa50c526c4e->enter($__internal_ac138c2d177406c627cdbd5fcb8247d3458df14e75056550b5d43fa50c526c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fdb230f8a0efa42f06263ce36f9b765be2b7ec1b04b9c0af508ffe8b356a2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdb230f8a0efa42f06263ce36f9b765be2b7ec1b04b9c0af508ffe8b356a2f1->enter($__internal_1fdb230f8a0efa42f06263ce36f9b765be2b7ec1b04b9c0af508ffe8b356a2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1fdb230f8a0efa42f06263ce36f9b765be2b7ec1b04b9c0af508ffe8b356a2f1->leave($__internal_1fdb230f8a0efa42f06263ce36f9b765be2b7ec1b04b9c0af508ffe8b356a2f1_prof);

        
        $__internal_ac138c2d177406c627cdbd5fcb8247d3458df14e75056550b5d43fa50c526c4e->leave($__internal_ac138c2d177406c627cdbd5fcb8247d3458df14e75056550b5d43fa50c526c4e_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_3130f0fdd67e12ce469d5cf549682e9b4c51e4e0d4010458c962531923b4583c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3130f0fdd67e12ce469d5cf549682e9b4c51e4e0d4010458c962531923b4583c->enter($__internal_3130f0fdd67e12ce469d5cf549682e9b4c51e4e0d4010458c962531923b4583c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fbdb90310523a8273cd80706b079d1aaf9f60bcffa980e111a90ebcb8258749d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbdb90310523a8273cd80706b079d1aaf9f60bcffa980e111a90ebcb8258749d->enter($__internal_fbdb90310523a8273cd80706b079d1aaf9f60bcffa980e111a90ebcb8258749d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fbdb90310523a8273cd80706b079d1aaf9f60bcffa980e111a90ebcb8258749d->leave($__internal_fbdb90310523a8273cd80706b079d1aaf9f60bcffa980e111a90ebcb8258749d_prof);

        
        $__internal_3130f0fdd67e12ce469d5cf549682e9b4c51e4e0d4010458c962531923b4583c->leave($__internal_3130f0fdd67e12ce469d5cf549682e9b4c51e4e0d4010458c962531923b4583c_prof);

    }

    // line 213
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e08152ee9fd17e892c0c570041443dbdf27effaa2b26f895b468fd4ac3e84fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e08152ee9fd17e892c0c570041443dbdf27effaa2b26f895b468fd4ac3e84fd->enter($__internal_0e08152ee9fd17e892c0c570041443dbdf27effaa2b26f895b468fd4ac3e84fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2310f57b7cd1fe561ddc27e8813a430e85844070a365f3aff2ee68478e1272e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2310f57b7cd1fe561ddc27e8813a430e85844070a365f3aff2ee68478e1272e9->enter($__internal_2310f57b7cd1fe561ddc27e8813a430e85844070a365f3aff2ee68478e1272e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2310f57b7cd1fe561ddc27e8813a430e85844070a365f3aff2ee68478e1272e9->leave($__internal_2310f57b7cd1fe561ddc27e8813a430e85844070a365f3aff2ee68478e1272e9_prof);

        
        $__internal_0e08152ee9fd17e892c0c570041443dbdf27effaa2b26f895b468fd4ac3e84fd->leave($__internal_0e08152ee9fd17e892c0c570041443dbdf27effaa2b26f895b468fd4ac3e84fd_prof);

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
