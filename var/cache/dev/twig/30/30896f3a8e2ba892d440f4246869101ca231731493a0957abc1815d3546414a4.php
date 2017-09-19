<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c5b4ffbf62842ec94a6b890fd0edbc97b5add409471888fb7c99fdf6d0b0dd8d extends Twig_Template
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
        $__internal_f23b9bfc54212a0f70a1614226548190bb9f79d73cad691a28323d6dbc2a2516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f23b9bfc54212a0f70a1614226548190bb9f79d73cad691a28323d6dbc2a2516->enter($__internal_f23b9bfc54212a0f70a1614226548190bb9f79d73cad691a28323d6dbc2a2516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8fe280d96ba8568c7b0b49255d0ab5cd5fc031b1e39a56699eaf3a60eb202184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe280d96ba8568c7b0b49255d0ab5cd5fc031b1e39a56699eaf3a60eb202184->enter($__internal_8fe280d96ba8568c7b0b49255d0ab5cd5fc031b1e39a56699eaf3a60eb202184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f23b9bfc54212a0f70a1614226548190bb9f79d73cad691a28323d6dbc2a2516->leave($__internal_f23b9bfc54212a0f70a1614226548190bb9f79d73cad691a28323d6dbc2a2516_prof);

        
        $__internal_8fe280d96ba8568c7b0b49255d0ab5cd5fc031b1e39a56699eaf3a60eb202184->leave($__internal_8fe280d96ba8568c7b0b49255d0ab5cd5fc031b1e39a56699eaf3a60eb202184_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d23ebba67fe6ae54016880a2c5b57df6cf9fee6ef182a4488d60589fe2b5cca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23ebba67fe6ae54016880a2c5b57df6cf9fee6ef182a4488d60589fe2b5cca7->enter($__internal_d23ebba67fe6ae54016880a2c5b57df6cf9fee6ef182a4488d60589fe2b5cca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b7b53b28191dec7b4aa3b162548498a2900e231b894b3e9e4965acafad31c4a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b53b28191dec7b4aa3b162548498a2900e231b894b3e9e4965acafad31c4a5->enter($__internal_b7b53b28191dec7b4aa3b162548498a2900e231b894b3e9e4965acafad31c4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b7b53b28191dec7b4aa3b162548498a2900e231b894b3e9e4965acafad31c4a5->leave($__internal_b7b53b28191dec7b4aa3b162548498a2900e231b894b3e9e4965acafad31c4a5_prof);

        
        $__internal_d23ebba67fe6ae54016880a2c5b57df6cf9fee6ef182a4488d60589fe2b5cca7->leave($__internal_d23ebba67fe6ae54016880a2c5b57df6cf9fee6ef182a4488d60589fe2b5cca7_prof);

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
