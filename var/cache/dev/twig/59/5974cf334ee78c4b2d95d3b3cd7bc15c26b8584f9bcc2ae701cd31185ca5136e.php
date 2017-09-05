<?php

/* ::base.html.twig */
class __TwigTemplate_19a6c2d8e9e40a9f9bffc2acae057fa40c6067b4ef68dbe4f7de40837e37f601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba8e5370d42df6f25b1815ba2b8dbadd192f0cac94526b82240b191b93fe5543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8e5370d42df6f25b1815ba2b8dbadd192f0cac94526b82240b191b93fe5543->enter($__internal_ba8e5370d42df6f25b1815ba2b8dbadd192f0cac94526b82240b191b93fe5543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_94cce5a01d1946fc5718ac59a972cd8844a3a9181ffcf378d50808ae6011da56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94cce5a01d1946fc5718ac59a972cd8844a3a9181ffcf378d50808ae6011da56->enter($__internal_94cce5a01d1946fc5718ac59a972cd8844a3a9181ffcf378d50808ae6011da56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"js/ie10-viewport-bug-workaround.js\"></script>
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_ba8e5370d42df6f25b1815ba2b8dbadd192f0cac94526b82240b191b93fe5543->leave($__internal_ba8e5370d42df6f25b1815ba2b8dbadd192f0cac94526b82240b191b93fe5543_prof);

        
        $__internal_94cce5a01d1946fc5718ac59a972cd8844a3a9181ffcf378d50808ae6011da56->leave($__internal_94cce5a01d1946fc5718ac59a972cd8844a3a9181ffcf378d50808ae6011da56_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a70e8078fba7e02376d0246e9dee0ff86aa03b99bdb85a892133e9fb538612f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70e8078fba7e02376d0246e9dee0ff86aa03b99bdb85a892133e9fb538612f8->enter($__internal_a70e8078fba7e02376d0246e9dee0ff86aa03b99bdb85a892133e9fb538612f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_324df6e1f584c2afc3ad26af647e2815d3f53fab90b4434c943667d1fc25e897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324df6e1f584c2afc3ad26af647e2815d3f53fab90b4434c943667d1fc25e897->enter($__internal_324df6e1f584c2afc3ad26af647e2815d3f53fab90b4434c943667d1fc25e897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_324df6e1f584c2afc3ad26af647e2815d3f53fab90b4434c943667d1fc25e897->leave($__internal_324df6e1f584c2afc3ad26af647e2815d3f53fab90b4434c943667d1fc25e897_prof);

        
        $__internal_a70e8078fba7e02376d0246e9dee0ff86aa03b99bdb85a892133e9fb538612f8->leave($__internal_a70e8078fba7e02376d0246e9dee0ff86aa03b99bdb85a892133e9fb538612f8_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39a6a21f890af5ffaedaca5e75a5f8de3f5d7badf0f11a0684d876469abcee05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a6a21f890af5ffaedaca5e75a5f8de3f5d7badf0f11a0684d876469abcee05->enter($__internal_39a6a21f890af5ffaedaca5e75a5f8de3f5d7badf0f11a0684d876469abcee05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_823e3cc15f605070bbf389286f00034b2766b1547ec8218846a734dc1646799f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823e3cc15f605070bbf389286f00034b2766b1547ec8218846a734dc1646799f->enter($__internal_823e3cc15f605070bbf389286f00034b2766b1547ec8218846a734dc1646799f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_823e3cc15f605070bbf389286f00034b2766b1547ec8218846a734dc1646799f->leave($__internal_823e3cc15f605070bbf389286f00034b2766b1547ec8218846a734dc1646799f_prof);

        
        $__internal_39a6a21f890af5ffaedaca5e75a5f8de3f5d7badf0f11a0684d876469abcee05->leave($__internal_39a6a21f890af5ffaedaca5e75a5f8de3f5d7badf0f11a0684d876469abcee05_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6560e5dd455aa19d22bfc404dbadf5c4503cefd247672a869cc7ba3e5bd600c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6560e5dd455aa19d22bfc404dbadf5c4503cefd247672a869cc7ba3e5bd600c->enter($__internal_f6560e5dd455aa19d22bfc404dbadf5c4503cefd247672a869cc7ba3e5bd600c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d0a3830890e47fe9fc68d4cd7bbeedd7558b77f1a56d8ac9c392b74ff6a7f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0a3830890e47fe9fc68d4cd7bbeedd7558b77f1a56d8ac9c392b74ff6a7f5a->enter($__internal_4d0a3830890e47fe9fc68d4cd7bbeedd7558b77f1a56d8ac9c392b74ff6a7f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4d0a3830890e47fe9fc68d4cd7bbeedd7558b77f1a56d8ac9c392b74ff6a7f5a->leave($__internal_4d0a3830890e47fe9fc68d4cd7bbeedd7558b77f1a56d8ac9c392b74ff6a7f5a_prof);

        
        $__internal_f6560e5dd455aa19d22bfc404dbadf5c4503cefd247672a869cc7ba3e5bd600c->leave($__internal_f6560e5dd455aa19d22bfc404dbadf5c4503cefd247672a869cc7ba3e5bd600c_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a89e381b7df86152b65e4eb1b1e3f57c6ea46b86561d188485f3d73961fe3a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89e381b7df86152b65e4eb1b1e3f57c6ea46b86561d188485f3d73961fe3a56->enter($__internal_a89e381b7df86152b65e4eb1b1e3f57c6ea46b86561d188485f3d73961fe3a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c73e84ab464745cea3fe0dee15ad3d451d1474c2f447267020a28cc650cc85dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73e84ab464745cea3fe0dee15ad3d451d1474c2f447267020a28cc650cc85dd->enter($__internal_c73e84ab464745cea3fe0dee15ad3d451d1474c2f447267020a28cc650cc85dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c73e84ab464745cea3fe0dee15ad3d451d1474c2f447267020a28cc650cc85dd->leave($__internal_c73e84ab464745cea3fe0dee15ad3d451d1474c2f447267020a28cc650cc85dd_prof);

        
        $__internal_a89e381b7df86152b65e4eb1b1e3f57c6ea46b86561d188485f3d73961fe3a56->leave($__internal_a89e381b7df86152b65e4eb1b1e3f57c6ea46b86561d188485f3d73961fe3a56_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 17,  107 => 11,  90 => 7,  72 => 5,  60 => 18,  58 => 17,  51 => 12,  49 => 11,  42 => 8,  40 => 7,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"js/ie10-viewport-bug-workaround.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\xampp\\htdocs\\admin\\app/Resources\\views/base.html.twig");
    }
}
