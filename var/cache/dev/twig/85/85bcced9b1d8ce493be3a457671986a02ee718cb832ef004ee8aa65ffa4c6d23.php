<?php

/* AppBundle:default:index.html.twig */
class __TwigTemplate_d140e80ac6b2cfef61a233417a72f79cdaf68a3d97ec325da7d9c2ae9b1c2f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a025c1016c0edc400b6eaf164a6de6d8af168b59c4138b8191403949d4d79792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a025c1016c0edc400b6eaf164a6de6d8af168b59c4138b8191403949d4d79792->enter($__internal_a025c1016c0edc400b6eaf164a6de6d8af168b59c4138b8191403949d4d79792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $__internal_0a3b79ff06c04815d1cbf09fc878ea1826d74f4729bee5ea2dace50c51950504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3b79ff06c04815d1cbf09fc878ea1826d74f4729bee5ea2dace50c51950504->enter($__internal_0a3b79ff06c04815d1cbf09fc878ea1826d74f4729bee5ea2dace50c51950504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a025c1016c0edc400b6eaf164a6de6d8af168b59c4138b8191403949d4d79792->leave($__internal_a025c1016c0edc400b6eaf164a6de6d8af168b59c4138b8191403949d4d79792_prof);

        
        $__internal_0a3b79ff06c04815d1cbf09fc878ea1826d74f4729bee5ea2dace50c51950504->leave($__internal_0a3b79ff06c04815d1cbf09fc878ea1826d74f4729bee5ea2dace50c51950504_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18692afb4f7fc5433af3db3c4c76663f5c8f325036e5128ec556ea4d6c2bc754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18692afb4f7fc5433af3db3c4c76663f5c8f325036e5128ec556ea4d6c2bc754->enter($__internal_18692afb4f7fc5433af3db3c4c76663f5c8f325036e5128ec556ea4d6c2bc754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1335f079336fabb1c193e162afa9bdf83836fd066d4860d15135b9b8cc5a686f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1335f079336fabb1c193e162afa9bdf83836fd066d4860d15135b9b8cc5a686f->enter($__internal_1335f079336fabb1c193e162afa9bdf83836fd066d4860d15135b9b8cc5a686f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>This is Dashboard</h1>
";
        
        $__internal_1335f079336fabb1c193e162afa9bdf83836fd066d4860d15135b9b8cc5a686f->leave($__internal_1335f079336fabb1c193e162afa9bdf83836fd066d4860d15135b9b8cc5a686f_prof);

        
        $__internal_18692afb4f7fc5433af3db3c4c76663f5c8f325036e5128ec556ea4d6c2bc754->leave($__internal_18692afb4f7fc5433af3db3c4c76663f5c8f325036e5128ec556ea4d6c2bc754_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd287ef2edbe592ed875ca9b3537d4d989d08ba330ce827ccd75702450256187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd287ef2edbe592ed875ca9b3537d4d989d08ba330ce827ccd75702450256187->enter($__internal_fd287ef2edbe592ed875ca9b3537d4d989d08ba330ce827ccd75702450256187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bad9e92c625e0a39345c486eec8244e254e4e5b8350cdbbc98c20bae3aaec370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad9e92c625e0a39345c486eec8244e254e4e5b8350cdbbc98c20bae3aaec370->enter($__internal_bad9e92c625e0a39345c486eec8244e254e4e5b8350cdbbc98c20bae3aaec370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_bad9e92c625e0a39345c486eec8244e254e4e5b8350cdbbc98c20bae3aaec370->leave($__internal_bad9e92c625e0a39345c486eec8244e254e4e5b8350cdbbc98c20bae3aaec370_prof);

        
        $__internal_fd287ef2edbe592ed875ca9b3537d4d989d08ba330ce827ccd75702450256187->leave($__internal_fd287ef2edbe592ed875ca9b3537d4d989d08ba330ce827ccd75702450256187_prof);

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
        return array (  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>This is Dashboard</h1>
{% endblock %}

{% block stylesheets %}

{% endblock %}
", "AppBundle:default:index.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/default/index.html.twig");
    }
}
