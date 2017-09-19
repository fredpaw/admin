<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_65fd6a2ec1e865badcf9bd6df084beecab05e63c4b0a4b58c44323d3d48b2369 extends Twig_Template
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
        $__internal_9321a448cd3d197c503f4c570caecedb72100a59f31afd5df0f05661bdb5e21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9321a448cd3d197c503f4c570caecedb72100a59f31afd5df0f05661bdb5e21f->enter($__internal_9321a448cd3d197c503f4c570caecedb72100a59f31afd5df0f05661bdb5e21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4fd79cecc820b6849776812e7e4ef05028ab1c4b8d98e2e2e5b91692d8985a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd79cecc820b6849776812e7e4ef05028ab1c4b8d98e2e2e5b91692d8985a19->enter($__internal_4fd79cecc820b6849776812e7e4ef05028ab1c4b8d98e2e2e5b91692d8985a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9321a448cd3d197c503f4c570caecedb72100a59f31afd5df0f05661bdb5e21f->leave($__internal_9321a448cd3d197c503f4c570caecedb72100a59f31afd5df0f05661bdb5e21f_prof);

        
        $__internal_4fd79cecc820b6849776812e7e4ef05028ab1c4b8d98e2e2e5b91692d8985a19->leave($__internal_4fd79cecc820b6849776812e7e4ef05028ab1c4b8d98e2e2e5b91692d8985a19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae1355db812a71def93b94539ea1ccc29a6a678411ffcedac974465f5be1bcd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1355db812a71def93b94539ea1ccc29a6a678411ffcedac974465f5be1bcd5->enter($__internal_ae1355db812a71def93b94539ea1ccc29a6a678411ffcedac974465f5be1bcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0b2ba45fa9d966047e4db80cdb1ca88b558150c0826551434da5f0b71fbeca67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2ba45fa9d966047e4db80cdb1ca88b558150c0826551434da5f0b71fbeca67->enter($__internal_0b2ba45fa9d966047e4db80cdb1ca88b558150c0826551434da5f0b71fbeca67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0b2ba45fa9d966047e4db80cdb1ca88b558150c0826551434da5f0b71fbeca67->leave($__internal_0b2ba45fa9d966047e4db80cdb1ca88b558150c0826551434da5f0b71fbeca67_prof);

        
        $__internal_ae1355db812a71def93b94539ea1ccc29a6a678411ffcedac974465f5be1bcd5->leave($__internal_ae1355db812a71def93b94539ea1ccc29a6a678411ffcedac974465f5be1bcd5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dee243fe8dc5b9d91bce95b300188b10ed97fee9a7929707e868bae5a547eeec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee243fe8dc5b9d91bce95b300188b10ed97fee9a7929707e868bae5a547eeec->enter($__internal_dee243fe8dc5b9d91bce95b300188b10ed97fee9a7929707e868bae5a547eeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4883dbb39edb3e0d888154c4ed95a61b207151b233aa53874049dd2ac4d6bb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4883dbb39edb3e0d888154c4ed95a61b207151b233aa53874049dd2ac4d6bb8d->enter($__internal_4883dbb39edb3e0d888154c4ed95a61b207151b233aa53874049dd2ac4d6bb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4883dbb39edb3e0d888154c4ed95a61b207151b233aa53874049dd2ac4d6bb8d->leave($__internal_4883dbb39edb3e0d888154c4ed95a61b207151b233aa53874049dd2ac4d6bb8d_prof);

        
        $__internal_dee243fe8dc5b9d91bce95b300188b10ed97fee9a7929707e868bae5a547eeec->leave($__internal_dee243fe8dc5b9d91bce95b300188b10ed97fee9a7929707e868bae5a547eeec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0b0f74709bd4645c4895be7105ceb1b652056850c29c9d47188d414c7944ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b0f74709bd4645c4895be7105ceb1b652056850c29c9d47188d414c7944ddb->enter($__internal_c0b0f74709bd4645c4895be7105ceb1b652056850c29c9d47188d414c7944ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39bbb8597f2c7bad1c859155d6aa4add31d5628345fdc3268886e970953e0345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bbb8597f2c7bad1c859155d6aa4add31d5628345fdc3268886e970953e0345->enter($__internal_39bbb8597f2c7bad1c859155d6aa4add31d5628345fdc3268886e970953e0345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_39bbb8597f2c7bad1c859155d6aa4add31d5628345fdc3268886e970953e0345->leave($__internal_39bbb8597f2c7bad1c859155d6aa4add31d5628345fdc3268886e970953e0345_prof);

        
        $__internal_c0b0f74709bd4645c4895be7105ceb1b652056850c29c9d47188d414c7944ddb->leave($__internal_c0b0f74709bd4645c4895be7105ceb1b652056850c29c9d47188d414c7944ddb_prof);

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
