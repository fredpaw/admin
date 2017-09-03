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
        $__internal_2f689eb72622e4d936f45c9a2cb105148de20a3ee313ff38854d191419d4b5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f689eb72622e4d936f45c9a2cb105148de20a3ee313ff38854d191419d4b5aa->enter($__internal_2f689eb72622e4d936f45c9a2cb105148de20a3ee313ff38854d191419d4b5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_364332b01c9942c756c33a29ae7bef71d95899b7f36e8d53a9e51ec0a1e340b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364332b01c9942c756c33a29ae7bef71d95899b7f36e8d53a9e51ec0a1e340b5->enter($__internal_364332b01c9942c756c33a29ae7bef71d95899b7f36e8d53a9e51ec0a1e340b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f689eb72622e4d936f45c9a2cb105148de20a3ee313ff38854d191419d4b5aa->leave($__internal_2f689eb72622e4d936f45c9a2cb105148de20a3ee313ff38854d191419d4b5aa_prof);

        
        $__internal_364332b01c9942c756c33a29ae7bef71d95899b7f36e8d53a9e51ec0a1e340b5->leave($__internal_364332b01c9942c756c33a29ae7bef71d95899b7f36e8d53a9e51ec0a1e340b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_215e6473eb4f77240388473cccf5eda240be38ea5f533ad3eb4ab7d7ac4003c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215e6473eb4f77240388473cccf5eda240be38ea5f533ad3eb4ab7d7ac4003c5->enter($__internal_215e6473eb4f77240388473cccf5eda240be38ea5f533ad3eb4ab7d7ac4003c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_293dc04c18e0d6da18764f0f26605bf6a4b7a5f30e5e5d3ea6fcd9fa27162430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293dc04c18e0d6da18764f0f26605bf6a4b7a5f30e5e5d3ea6fcd9fa27162430->enter($__internal_293dc04c18e0d6da18764f0f26605bf6a4b7a5f30e5e5d3ea6fcd9fa27162430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_293dc04c18e0d6da18764f0f26605bf6a4b7a5f30e5e5d3ea6fcd9fa27162430->leave($__internal_293dc04c18e0d6da18764f0f26605bf6a4b7a5f30e5e5d3ea6fcd9fa27162430_prof);

        
        $__internal_215e6473eb4f77240388473cccf5eda240be38ea5f533ad3eb4ab7d7ac4003c5->leave($__internal_215e6473eb4f77240388473cccf5eda240be38ea5f533ad3eb4ab7d7ac4003c5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_720868d655a5774fc97c6ffdc3e13d38013c80cc821dade30d84dbed66535104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720868d655a5774fc97c6ffdc3e13d38013c80cc821dade30d84dbed66535104->enter($__internal_720868d655a5774fc97c6ffdc3e13d38013c80cc821dade30d84dbed66535104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_041ada435d9b859f683508b2cd65d1f23004079f6175f2741d794df9e73354d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041ada435d9b859f683508b2cd65d1f23004079f6175f2741d794df9e73354d4->enter($__internal_041ada435d9b859f683508b2cd65d1f23004079f6175f2741d794df9e73354d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_041ada435d9b859f683508b2cd65d1f23004079f6175f2741d794df9e73354d4->leave($__internal_041ada435d9b859f683508b2cd65d1f23004079f6175f2741d794df9e73354d4_prof);

        
        $__internal_720868d655a5774fc97c6ffdc3e13d38013c80cc821dade30d84dbed66535104->leave($__internal_720868d655a5774fc97c6ffdc3e13d38013c80cc821dade30d84dbed66535104_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_121fe2419cd5d2f05aed1b1d9a51ea6e8efb47fed532ebe0682c5c5d169f3bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121fe2419cd5d2f05aed1b1d9a51ea6e8efb47fed532ebe0682c5c5d169f3bcd->enter($__internal_121fe2419cd5d2f05aed1b1d9a51ea6e8efb47fed532ebe0682c5c5d169f3bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2393252a418d5435f53d415a4ed412fb6503926c47f9fb08fd2c8dd945b990b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2393252a418d5435f53d415a4ed412fb6503926c47f9fb08fd2c8dd945b990b1->enter($__internal_2393252a418d5435f53d415a4ed412fb6503926c47f9fb08fd2c8dd945b990b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2393252a418d5435f53d415a4ed412fb6503926c47f9fb08fd2c8dd945b990b1->leave($__internal_2393252a418d5435f53d415a4ed412fb6503926c47f9fb08fd2c8dd945b990b1_prof);

        
        $__internal_121fe2419cd5d2f05aed1b1d9a51ea6e8efb47fed532ebe0682c5c5d169f3bcd->leave($__internal_121fe2419cd5d2f05aed1b1d9a51ea6e8efb47fed532ebe0682c5c5d169f3bcd_prof);

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
