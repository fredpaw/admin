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
        $__internal_5991bab2abc62ef11ad25e87f8ab94825966c42e364bf6129dcacf94f1fda5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5991bab2abc62ef11ad25e87f8ab94825966c42e364bf6129dcacf94f1fda5aa->enter($__internal_5991bab2abc62ef11ad25e87f8ab94825966c42e364bf6129dcacf94f1fda5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c82f9d42a21ddc57a567d369f02029040b81de52ae8983c37e7b8c36dc8949fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82f9d42a21ddc57a567d369f02029040b81de52ae8983c37e7b8c36dc8949fe->enter($__internal_c82f9d42a21ddc57a567d369f02029040b81de52ae8983c37e7b8c36dc8949fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5991bab2abc62ef11ad25e87f8ab94825966c42e364bf6129dcacf94f1fda5aa->leave($__internal_5991bab2abc62ef11ad25e87f8ab94825966c42e364bf6129dcacf94f1fda5aa_prof);

        
        $__internal_c82f9d42a21ddc57a567d369f02029040b81de52ae8983c37e7b8c36dc8949fe->leave($__internal_c82f9d42a21ddc57a567d369f02029040b81de52ae8983c37e7b8c36dc8949fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13caa5380a58d90cecf056c9630efd6c53aee1fb376545d5caf4fbce6065167c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13caa5380a58d90cecf056c9630efd6c53aee1fb376545d5caf4fbce6065167c->enter($__internal_13caa5380a58d90cecf056c9630efd6c53aee1fb376545d5caf4fbce6065167c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6a24fe97ce52a77ba4dc6d16f0c1e595bd611246b30deff703fb504949aafa2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a24fe97ce52a77ba4dc6d16f0c1e595bd611246b30deff703fb504949aafa2a->enter($__internal_6a24fe97ce52a77ba4dc6d16f0c1e595bd611246b30deff703fb504949aafa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6a24fe97ce52a77ba4dc6d16f0c1e595bd611246b30deff703fb504949aafa2a->leave($__internal_6a24fe97ce52a77ba4dc6d16f0c1e595bd611246b30deff703fb504949aafa2a_prof);

        
        $__internal_13caa5380a58d90cecf056c9630efd6c53aee1fb376545d5caf4fbce6065167c->leave($__internal_13caa5380a58d90cecf056c9630efd6c53aee1fb376545d5caf4fbce6065167c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7836aba90a42f54769f638cfd127b5fadf798b6c6f3562eb8e04a76ba8a886c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7836aba90a42f54769f638cfd127b5fadf798b6c6f3562eb8e04a76ba8a886c3->enter($__internal_7836aba90a42f54769f638cfd127b5fadf798b6c6f3562eb8e04a76ba8a886c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_54eea85b002081df72f3478cd540abb8dc454e595b6077a161778c01e4730010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54eea85b002081df72f3478cd540abb8dc454e595b6077a161778c01e4730010->enter($__internal_54eea85b002081df72f3478cd540abb8dc454e595b6077a161778c01e4730010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_54eea85b002081df72f3478cd540abb8dc454e595b6077a161778c01e4730010->leave($__internal_54eea85b002081df72f3478cd540abb8dc454e595b6077a161778c01e4730010_prof);

        
        $__internal_7836aba90a42f54769f638cfd127b5fadf798b6c6f3562eb8e04a76ba8a886c3->leave($__internal_7836aba90a42f54769f638cfd127b5fadf798b6c6f3562eb8e04a76ba8a886c3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09c15a9859329b48ec17f7446481fbc2ad457763537bed88ec6963ebd5665b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c15a9859329b48ec17f7446481fbc2ad457763537bed88ec6963ebd5665b75->enter($__internal_09c15a9859329b48ec17f7446481fbc2ad457763537bed88ec6963ebd5665b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5b792dd35ec9817a57c1eb266f69ddda633bb4c5e82580622851bace429998a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b792dd35ec9817a57c1eb266f69ddda633bb4c5e82580622851bace429998a3->enter($__internal_5b792dd35ec9817a57c1eb266f69ddda633bb4c5e82580622851bace429998a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5b792dd35ec9817a57c1eb266f69ddda633bb4c5e82580622851bace429998a3->leave($__internal_5b792dd35ec9817a57c1eb266f69ddda633bb4c5e82580622851bace429998a3_prof);

        
        $__internal_09c15a9859329b48ec17f7446481fbc2ad457763537bed88ec6963ebd5665b75->leave($__internal_09c15a9859329b48ec17f7446481fbc2ad457763537bed88ec6963ebd5665b75_prof);

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
