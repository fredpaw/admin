<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_413750e5031d1795d4006759d99f7e019f3bb2981f322fdd4412e19fe4c266be extends Twig_Template
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
        $__internal_0302f3235692b5d447d74e10d0a4486016e1b1df1e000a6f83c1d1e3a7d21e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0302f3235692b5d447d74e10d0a4486016e1b1df1e000a6f83c1d1e3a7d21e3e->enter($__internal_0302f3235692b5d447d74e10d0a4486016e1b1df1e000a6f83c1d1e3a7d21e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7883fb26ada98045bf5fa3233be540f55c7306c26270e301255b1905c6c5477f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7883fb26ada98045bf5fa3233be540f55c7306c26270e301255b1905c6c5477f->enter($__internal_7883fb26ada98045bf5fa3233be540f55c7306c26270e301255b1905c6c5477f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0302f3235692b5d447d74e10d0a4486016e1b1df1e000a6f83c1d1e3a7d21e3e->leave($__internal_0302f3235692b5d447d74e10d0a4486016e1b1df1e000a6f83c1d1e3a7d21e3e_prof);

        
        $__internal_7883fb26ada98045bf5fa3233be540f55c7306c26270e301255b1905c6c5477f->leave($__internal_7883fb26ada98045bf5fa3233be540f55c7306c26270e301255b1905c6c5477f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61d8f69795b012b52e2d86774f504442b0010e31ae79dbb8a976ddf1cf517595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d8f69795b012b52e2d86774f504442b0010e31ae79dbb8a976ddf1cf517595->enter($__internal_61d8f69795b012b52e2d86774f504442b0010e31ae79dbb8a976ddf1cf517595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d73a031f2bdf2d4d3ba9b9155d75d1a96fc2cdf6fadab95bf4406f5fefaca34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d73a031f2bdf2d4d3ba9b9155d75d1a96fc2cdf6fadab95bf4406f5fefaca34->enter($__internal_6d73a031f2bdf2d4d3ba9b9155d75d1a96fc2cdf6fadab95bf4406f5fefaca34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6d73a031f2bdf2d4d3ba9b9155d75d1a96fc2cdf6fadab95bf4406f5fefaca34->leave($__internal_6d73a031f2bdf2d4d3ba9b9155d75d1a96fc2cdf6fadab95bf4406f5fefaca34_prof);

        
        $__internal_61d8f69795b012b52e2d86774f504442b0010e31ae79dbb8a976ddf1cf517595->leave($__internal_61d8f69795b012b52e2d86774f504442b0010e31ae79dbb8a976ddf1cf517595_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3bcf61b9e47baded8fadae5c3650a4954b6f5c01156532d92c26480009b9d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3bcf61b9e47baded8fadae5c3650a4954b6f5c01156532d92c26480009b9d58->enter($__internal_b3bcf61b9e47baded8fadae5c3650a4954b6f5c01156532d92c26480009b9d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a6b8806aedd8adc167f0addf61ad23b1f8fcac07d9e1df8a64ec4c536da7ee8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b8806aedd8adc167f0addf61ad23b1f8fcac07d9e1df8a64ec4c536da7ee8f->enter($__internal_a6b8806aedd8adc167f0addf61ad23b1f8fcac07d9e1df8a64ec4c536da7ee8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a6b8806aedd8adc167f0addf61ad23b1f8fcac07d9e1df8a64ec4c536da7ee8f->leave($__internal_a6b8806aedd8adc167f0addf61ad23b1f8fcac07d9e1df8a64ec4c536da7ee8f_prof);

        
        $__internal_b3bcf61b9e47baded8fadae5c3650a4954b6f5c01156532d92c26480009b9d58->leave($__internal_b3bcf61b9e47baded8fadae5c3650a4954b6f5c01156532d92c26480009b9d58_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f08e100ac48361eb7fed320d2729db55c670047025b784f646cf35db60420a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08e100ac48361eb7fed320d2729db55c670047025b784f646cf35db60420a11->enter($__internal_f08e100ac48361eb7fed320d2729db55c670047025b784f646cf35db60420a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_332f3486b5a937a9db9aa18b8edb1f5ed7bc6ae520899f43a08d09655fb1808c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332f3486b5a937a9db9aa18b8edb1f5ed7bc6ae520899f43a08d09655fb1808c->enter($__internal_332f3486b5a937a9db9aa18b8edb1f5ed7bc6ae520899f43a08d09655fb1808c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_332f3486b5a937a9db9aa18b8edb1f5ed7bc6ae520899f43a08d09655fb1808c->leave($__internal_332f3486b5a937a9db9aa18b8edb1f5ed7bc6ae520899f43a08d09655fb1808c_prof);

        
        $__internal_f08e100ac48361eb7fed320d2729db55c670047025b784f646cf35db60420a11->leave($__internal_f08e100ac48361eb7fed320d2729db55c670047025b784f646cf35db60420a11_prof);

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
