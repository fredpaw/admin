<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f19207bdaa345ac6ca9e4eed27ef2e43bf0cde21d4a71567dbeed8fa538747ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28e3d3413adbb8d390cf7df1003bc1dceebe7ce28bf9621ae3d224d653f9a707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e3d3413adbb8d390cf7df1003bc1dceebe7ce28bf9621ae3d224d653f9a707->enter($__internal_28e3d3413adbb8d390cf7df1003bc1dceebe7ce28bf9621ae3d224d653f9a707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1ce0bcc13c5ca1bb7b04a22c7b9562f175f051ef316223ee07e4347eaadb30ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce0bcc13c5ca1bb7b04a22c7b9562f175f051ef316223ee07e4347eaadb30ef->enter($__internal_1ce0bcc13c5ca1bb7b04a22c7b9562f175f051ef316223ee07e4347eaadb30ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28e3d3413adbb8d390cf7df1003bc1dceebe7ce28bf9621ae3d224d653f9a707->leave($__internal_28e3d3413adbb8d390cf7df1003bc1dceebe7ce28bf9621ae3d224d653f9a707_prof);

        
        $__internal_1ce0bcc13c5ca1bb7b04a22c7b9562f175f051ef316223ee07e4347eaadb30ef->leave($__internal_1ce0bcc13c5ca1bb7b04a22c7b9562f175f051ef316223ee07e4347eaadb30ef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e47bb9cc3840505c5e6d6b41807ad88711004b718fc93e4161849b77e3f7a85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47bb9cc3840505c5e6d6b41807ad88711004b718fc93e4161849b77e3f7a85d->enter($__internal_e47bb9cc3840505c5e6d6b41807ad88711004b718fc93e4161849b77e3f7a85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7ce3331177b3781970926567b96374c9c21532e0bd8a2e74c1888e5d31877ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce3331177b3781970926567b96374c9c21532e0bd8a2e74c1888e5d31877ec7->enter($__internal_7ce3331177b3781970926567b96374c9c21532e0bd8a2e74c1888e5d31877ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7ce3331177b3781970926567b96374c9c21532e0bd8a2e74c1888e5d31877ec7->leave($__internal_7ce3331177b3781970926567b96374c9c21532e0bd8a2e74c1888e5d31877ec7_prof);

        
        $__internal_e47bb9cc3840505c5e6d6b41807ad88711004b718fc93e4161849b77e3f7a85d->leave($__internal_e47bb9cc3840505c5e6d6b41807ad88711004b718fc93e4161849b77e3f7a85d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\xampp\\htdocs\\admin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
