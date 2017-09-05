<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_ac12c574132227140b686f2370e565f8f8810500cd69524bf391681d60e32a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e69fa0d0781c4ca10f93f9d6022dd77065959523c676a9d42ab2031c77f61f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69fa0d0781c4ca10f93f9d6022dd77065959523c676a9d42ab2031c77f61f3b->enter($__internal_e69fa0d0781c4ca10f93f9d6022dd77065959523c676a9d42ab2031c77f61f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_168882c789920b57f6fbde8a36f367a81e65044d4476e6f84e917b05f09d0e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168882c789920b57f6fbde8a36f367a81e65044d4476e6f84e917b05f09d0e15->enter($__internal_168882c789920b57f6fbde8a36f367a81e65044d4476e6f84e917b05f09d0e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e69fa0d0781c4ca10f93f9d6022dd77065959523c676a9d42ab2031c77f61f3b->leave($__internal_e69fa0d0781c4ca10f93f9d6022dd77065959523c676a9d42ab2031c77f61f3b_prof);

        
        $__internal_168882c789920b57f6fbde8a36f367a81e65044d4476e6f84e917b05f09d0e15->leave($__internal_168882c789920b57f6fbde8a36f367a81e65044d4476e6f84e917b05f09d0e15_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a70e90b0287b4c5cad7c64920e22a7836bd1fa2823599fcd1cbd6d1dfec83eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70e90b0287b4c5cad7c64920e22a7836bd1fa2823599fcd1cbd6d1dfec83eae->enter($__internal_a70e90b0287b4c5cad7c64920e22a7836bd1fa2823599fcd1cbd6d1dfec83eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3f2822bed6f3e8ef027ab3f1d230d4074543c4a31b8fa81b168d50d8aaa88d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2822bed6f3e8ef027ab3f1d230d4074543c4a31b8fa81b168d50d8aaa88d0a->enter($__internal_3f2822bed6f3e8ef027ab3f1d230d4074543c4a31b8fa81b168d50d8aaa88d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3f2822bed6f3e8ef027ab3f1d230d4074543c4a31b8fa81b168d50d8aaa88d0a->leave($__internal_3f2822bed6f3e8ef027ab3f1d230d4074543c4a31b8fa81b168d50d8aaa88d0a_prof);

        
        $__internal_a70e90b0287b4c5cad7c64920e22a7836bd1fa2823599fcd1cbd6d1dfec83eae->leave($__internal_a70e90b0287b4c5cad7c64920e22a7836bd1fa2823599fcd1cbd6d1dfec83eae_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_092857473ec55a31dad1ca8106c192959e06a9bb0b54b83daab289bdf00c88d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092857473ec55a31dad1ca8106c192959e06a9bb0b54b83daab289bdf00c88d6->enter($__internal_092857473ec55a31dad1ca8106c192959e06a9bb0b54b83daab289bdf00c88d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7ef599d7b7715358c4a339893b02943e0d078fbf58bbd3878fcad78913db284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ef599d7b7715358c4a339893b02943e0d078fbf58bbd3878fcad78913db284->enter($__internal_b7ef599d7b7715358c4a339893b02943e0d078fbf58bbd3878fcad78913db284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_b7ef599d7b7715358c4a339893b02943e0d078fbf58bbd3878fcad78913db284->leave($__internal_b7ef599d7b7715358c4a339893b02943e0d078fbf58bbd3878fcad78913db284_prof);

        
        $__internal_092857473ec55a31dad1ca8106c192959e06a9bb0b54b83daab289bdf00c88d6->leave($__internal_092857473ec55a31dad1ca8106c192959e06a9bb0b54b83daab289bdf00c88d6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "D:\\xampp\\htdocs\\admin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
