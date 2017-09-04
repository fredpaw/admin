<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42434e9f9292b29eaf5adacc48c4868f1ae6481fe49bf97ed939b76e08e4f2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42434e9f9292b29eaf5adacc48c4868f1ae6481fe49bf97ed939b76e08e4f2a0->enter($__internal_42434e9f9292b29eaf5adacc48c4868f1ae6481fe49bf97ed939b76e08e4f2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2d9652409f59419d21467edc5e7b772548035b7e9f911175aaacc9ee14ff44b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9652409f59419d21467edc5e7b772548035b7e9f911175aaacc9ee14ff44b5->enter($__internal_2d9652409f59419d21467edc5e7b772548035b7e9f911175aaacc9ee14ff44b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42434e9f9292b29eaf5adacc48c4868f1ae6481fe49bf97ed939b76e08e4f2a0->leave($__internal_42434e9f9292b29eaf5adacc48c4868f1ae6481fe49bf97ed939b76e08e4f2a0_prof);

        
        $__internal_2d9652409f59419d21467edc5e7b772548035b7e9f911175aaacc9ee14ff44b5->leave($__internal_2d9652409f59419d21467edc5e7b772548035b7e9f911175aaacc9ee14ff44b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_920b8a876086b4a3827924e16d28f8125d10f86456af1bd95c7ae75a9a005582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920b8a876086b4a3827924e16d28f8125d10f86456af1bd95c7ae75a9a005582->enter($__internal_920b8a876086b4a3827924e16d28f8125d10f86456af1bd95c7ae75a9a005582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_db97d052591f6306777460f53b23844c58937d12cb31779616e7af3492cd4ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db97d052591f6306777460f53b23844c58937d12cb31779616e7af3492cd4ddb->enter($__internal_db97d052591f6306777460f53b23844c58937d12cb31779616e7af3492cd4ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_db97d052591f6306777460f53b23844c58937d12cb31779616e7af3492cd4ddb->leave($__internal_db97d052591f6306777460f53b23844c58937d12cb31779616e7af3492cd4ddb_prof);

        
        $__internal_920b8a876086b4a3827924e16d28f8125d10f86456af1bd95c7ae75a9a005582->leave($__internal_920b8a876086b4a3827924e16d28f8125d10f86456af1bd95c7ae75a9a005582_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9191b053abd21b5199ffe2bfea9ecb44bd727e190b270aae38f6eeaa1ad36f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9191b053abd21b5199ffe2bfea9ecb44bd727e190b270aae38f6eeaa1ad36f8f->enter($__internal_9191b053abd21b5199ffe2bfea9ecb44bd727e190b270aae38f6eeaa1ad36f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bb0639e5f1788f9d14498fb66619f8fca0d355812e93dfd6a6547324fe426cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0639e5f1788f9d14498fb66619f8fca0d355812e93dfd6a6547324fe426cc7->enter($__internal_bb0639e5f1788f9d14498fb66619f8fca0d355812e93dfd6a6547324fe426cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bb0639e5f1788f9d14498fb66619f8fca0d355812e93dfd6a6547324fe426cc7->leave($__internal_bb0639e5f1788f9d14498fb66619f8fca0d355812e93dfd6a6547324fe426cc7_prof);

        
        $__internal_9191b053abd21b5199ffe2bfea9ecb44bd727e190b270aae38f6eeaa1ad36f8f->leave($__internal_9191b053abd21b5199ffe2bfea9ecb44bd727e190b270aae38f6eeaa1ad36f8f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b34d3cdadda80dcdc00893e9fe8173e5a99f725527cb87ec613aa453632146f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b34d3cdadda80dcdc00893e9fe8173e5a99f725527cb87ec613aa453632146f->enter($__internal_6b34d3cdadda80dcdc00893e9fe8173e5a99f725527cb87ec613aa453632146f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3091f5b4766998f78248f62ea2e913ae0e6085b7dd8c23c9b78646c9f6c04d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3091f5b4766998f78248f62ea2e913ae0e6085b7dd8c23c9b78646c9f6c04d6a->enter($__internal_3091f5b4766998f78248f62ea2e913ae0e6085b7dd8c23c9b78646c9f6c04d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3091f5b4766998f78248f62ea2e913ae0e6085b7dd8c23c9b78646c9f6c04d6a->leave($__internal_3091f5b4766998f78248f62ea2e913ae0e6085b7dd8c23c9b78646c9f6c04d6a_prof);

        
        $__internal_6b34d3cdadda80dcdc00893e9fe8173e5a99f725527cb87ec613aa453632146f->leave($__internal_6b34d3cdadda80dcdc00893e9fe8173e5a99f725527cb87ec613aa453632146f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp\\htdocs\\admin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
