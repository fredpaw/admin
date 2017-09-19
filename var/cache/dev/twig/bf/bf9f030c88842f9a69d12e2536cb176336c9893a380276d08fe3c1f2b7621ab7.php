<?php

/* ::base.html.twig */
class __TwigTemplate_aa7954d399b3d53b15c0c5962dda6e518e7ed0471a936179f4de9209631171f6 extends Twig_Template
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
        $__internal_1aaf6a1883ca68dc2f0d4a1c6b91507b9104881b4edc9608a8667c074331073d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aaf6a1883ca68dc2f0d4a1c6b91507b9104881b4edc9608a8667c074331073d->enter($__internal_1aaf6a1883ca68dc2f0d4a1c6b91507b9104881b4edc9608a8667c074331073d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b629f51e843512f00262eb997b33431e8e035bcf38d574d1bcbfc4d5081fa9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b629f51e843512f00262eb997b33431e8e035bcf38d574d1bcbfc4d5081fa9a5->enter($__internal_b629f51e843512f00262eb997b33431e8e035bcf38d574d1bcbfc4d5081fa9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1aaf6a1883ca68dc2f0d4a1c6b91507b9104881b4edc9608a8667c074331073d->leave($__internal_1aaf6a1883ca68dc2f0d4a1c6b91507b9104881b4edc9608a8667c074331073d_prof);

        
        $__internal_b629f51e843512f00262eb997b33431e8e035bcf38d574d1bcbfc4d5081fa9a5->leave($__internal_b629f51e843512f00262eb997b33431e8e035bcf38d574d1bcbfc4d5081fa9a5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_51aa02d22490ddab9b62493199779d4d815f00590282b22d066a177fcbc5eba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51aa02d22490ddab9b62493199779d4d815f00590282b22d066a177fcbc5eba6->enter($__internal_51aa02d22490ddab9b62493199779d4d815f00590282b22d066a177fcbc5eba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6038ad30676edb6dfb7e1bbd7b1946e01b24cc1c06f672176d71a5942f1b97cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6038ad30676edb6dfb7e1bbd7b1946e01b24cc1c06f672176d71a5942f1b97cd->enter($__internal_6038ad30676edb6dfb7e1bbd7b1946e01b24cc1c06f672176d71a5942f1b97cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6038ad30676edb6dfb7e1bbd7b1946e01b24cc1c06f672176d71a5942f1b97cd->leave($__internal_6038ad30676edb6dfb7e1bbd7b1946e01b24cc1c06f672176d71a5942f1b97cd_prof);

        
        $__internal_51aa02d22490ddab9b62493199779d4d815f00590282b22d066a177fcbc5eba6->leave($__internal_51aa02d22490ddab9b62493199779d4d815f00590282b22d066a177fcbc5eba6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7829ce38d641e817479c8481749a0561e1a0fbadc6ca9c6aadf1734b44b858b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7829ce38d641e817479c8481749a0561e1a0fbadc6ca9c6aadf1734b44b858b->enter($__internal_c7829ce38d641e817479c8481749a0561e1a0fbadc6ca9c6aadf1734b44b858b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_15ea5e57a4e0d9be5d50193e709623784557ce325336df037019c948079c9840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ea5e57a4e0d9be5d50193e709623784557ce325336df037019c948079c9840->enter($__internal_15ea5e57a4e0d9be5d50193e709623784557ce325336df037019c948079c9840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_15ea5e57a4e0d9be5d50193e709623784557ce325336df037019c948079c9840->leave($__internal_15ea5e57a4e0d9be5d50193e709623784557ce325336df037019c948079c9840_prof);

        
        $__internal_c7829ce38d641e817479c8481749a0561e1a0fbadc6ca9c6aadf1734b44b858b->leave($__internal_c7829ce38d641e817479c8481749a0561e1a0fbadc6ca9c6aadf1734b44b858b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3abc8330f2fd7ee772d4c17cda8bc56b6c1d6d7ab2527f23e6173efa50467d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abc8330f2fd7ee772d4c17cda8bc56b6c1d6d7ab2527f23e6173efa50467d53->enter($__internal_3abc8330f2fd7ee772d4c17cda8bc56b6c1d6d7ab2527f23e6173efa50467d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3305c9dc7dfdee4061d417583dae6e90b721ae001706f0bf54673c7776e47570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3305c9dc7dfdee4061d417583dae6e90b721ae001706f0bf54673c7776e47570->enter($__internal_3305c9dc7dfdee4061d417583dae6e90b721ae001706f0bf54673c7776e47570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3305c9dc7dfdee4061d417583dae6e90b721ae001706f0bf54673c7776e47570->leave($__internal_3305c9dc7dfdee4061d417583dae6e90b721ae001706f0bf54673c7776e47570_prof);

        
        $__internal_3abc8330f2fd7ee772d4c17cda8bc56b6c1d6d7ab2527f23e6173efa50467d53->leave($__internal_3abc8330f2fd7ee772d4c17cda8bc56b6c1d6d7ab2527f23e6173efa50467d53_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_baf3229360c38a959fee1255916cba6b2ed74ead64590fd77d228c78f0364773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baf3229360c38a959fee1255916cba6b2ed74ead64590fd77d228c78f0364773->enter($__internal_baf3229360c38a959fee1255916cba6b2ed74ead64590fd77d228c78f0364773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_965f41ab06725013ee57e9e8a869b23310585cc997f1d7ebe84538082511f104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965f41ab06725013ee57e9e8a869b23310585cc997f1d7ebe84538082511f104->enter($__internal_965f41ab06725013ee57e9e8a869b23310585cc997f1d7ebe84538082511f104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_965f41ab06725013ee57e9e8a869b23310585cc997f1d7ebe84538082511f104->leave($__internal_965f41ab06725013ee57e9e8a869b23310585cc997f1d7ebe84538082511f104_prof);

        
        $__internal_baf3229360c38a959fee1255916cba6b2ed74ead64590fd77d228c78f0364773->leave($__internal_baf3229360c38a959fee1255916cba6b2ed74ead64590fd77d228c78f0364773_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\xampp\\htdocs\\admin\\app/Resources\\views/base.html.twig");
    }
}
