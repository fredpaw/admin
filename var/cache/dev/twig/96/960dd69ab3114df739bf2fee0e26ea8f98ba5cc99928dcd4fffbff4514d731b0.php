<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2cb9bcdb914acea5868a69dd88c5f9ac970b9d4799243e9f9f215391a42881cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_52d22b65a6d25e925706057e7043ec43403b5b78a08eb003c3033bc43ded5b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d22b65a6d25e925706057e7043ec43403b5b78a08eb003c3033bc43ded5b47->enter($__internal_52d22b65a6d25e925706057e7043ec43403b5b78a08eb003c3033bc43ded5b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_515a095c3645c28aefb4822e0774cdc71c18bbf768d82038c19449024646008f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515a095c3645c28aefb4822e0774cdc71c18bbf768d82038c19449024646008f->enter($__internal_515a095c3645c28aefb4822e0774cdc71c18bbf768d82038c19449024646008f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d22b65a6d25e925706057e7043ec43403b5b78a08eb003c3033bc43ded5b47->leave($__internal_52d22b65a6d25e925706057e7043ec43403b5b78a08eb003c3033bc43ded5b47_prof);

        
        $__internal_515a095c3645c28aefb4822e0774cdc71c18bbf768d82038c19449024646008f->leave($__internal_515a095c3645c28aefb4822e0774cdc71c18bbf768d82038c19449024646008f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5fba620a2ecec1c7395aedbd9a30d80b7d31ea6d388154f1c863acfab77e2dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fba620a2ecec1c7395aedbd9a30d80b7d31ea6d388154f1c863acfab77e2dd3->enter($__internal_5fba620a2ecec1c7395aedbd9a30d80b7d31ea6d388154f1c863acfab77e2dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c74f8060e8ecc45bd5752577c937b48c101efecb260328721fb6d25d3f99e2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74f8060e8ecc45bd5752577c937b48c101efecb260328721fb6d25d3f99e2fe->enter($__internal_c74f8060e8ecc45bd5752577c937b48c101efecb260328721fb6d25d3f99e2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c74f8060e8ecc45bd5752577c937b48c101efecb260328721fb6d25d3f99e2fe->leave($__internal_c74f8060e8ecc45bd5752577c937b48c101efecb260328721fb6d25d3f99e2fe_prof);

        
        $__internal_5fba620a2ecec1c7395aedbd9a30d80b7d31ea6d388154f1c863acfab77e2dd3->leave($__internal_5fba620a2ecec1c7395aedbd9a30d80b7d31ea6d388154f1c863acfab77e2dd3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2cf1163f231e872ce5ed9936f08b5c6e760a22adba54ea33375dd5f91ca7840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2cf1163f231e872ce5ed9936f08b5c6e760a22adba54ea33375dd5f91ca7840->enter($__internal_b2cf1163f231e872ce5ed9936f08b5c6e760a22adba54ea33375dd5f91ca7840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3cf6034722748d643056935d0ed5226e7beae8f3cf0d855f6be667919a461bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf6034722748d643056935d0ed5226e7beae8f3cf0d855f6be667919a461bba->enter($__internal_3cf6034722748d643056935d0ed5226e7beae8f3cf0d855f6be667919a461bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3cf6034722748d643056935d0ed5226e7beae8f3cf0d855f6be667919a461bba->leave($__internal_3cf6034722748d643056935d0ed5226e7beae8f3cf0d855f6be667919a461bba_prof);

        
        $__internal_b2cf1163f231e872ce5ed9936f08b5c6e760a22adba54ea33375dd5f91ca7840->leave($__internal_b2cf1163f231e872ce5ed9936f08b5c6e760a22adba54ea33375dd5f91ca7840_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc26736ddcce87637703ec372b200fcbb9d73720e49f9f6761bc0f3097da94fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc26736ddcce87637703ec372b200fcbb9d73720e49f9f6761bc0f3097da94fb->enter($__internal_bc26736ddcce87637703ec372b200fcbb9d73720e49f9f6761bc0f3097da94fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2cb57662e98f5071cd95152aeaad86c6351c8ccddfab9a3eacd76eb09328030a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb57662e98f5071cd95152aeaad86c6351c8ccddfab9a3eacd76eb09328030a->enter($__internal_2cb57662e98f5071cd95152aeaad86c6351c8ccddfab9a3eacd76eb09328030a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2cb57662e98f5071cd95152aeaad86c6351c8ccddfab9a3eacd76eb09328030a->leave($__internal_2cb57662e98f5071cd95152aeaad86c6351c8ccddfab9a3eacd76eb09328030a_prof);

        
        $__internal_bc26736ddcce87637703ec372b200fcbb9d73720e49f9f6761bc0f3097da94fb->leave($__internal_bc26736ddcce87637703ec372b200fcbb9d73720e49f9f6761bc0f3097da94fb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\admin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
