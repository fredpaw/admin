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
        $__internal_1dca90e88b9ec8226e389f3e264b2e89ad9861e8c3bff068e263e254552a8948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dca90e88b9ec8226e389f3e264b2e89ad9861e8c3bff068e263e254552a8948->enter($__internal_1dca90e88b9ec8226e389f3e264b2e89ad9861e8c3bff068e263e254552a8948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_303947bbac76cc62410569f94cc3ec4234216b2b59c9931d09611e2669d54ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303947bbac76cc62410569f94cc3ec4234216b2b59c9931d09611e2669d54ee5->enter($__internal_303947bbac76cc62410569f94cc3ec4234216b2b59c9931d09611e2669d54ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dca90e88b9ec8226e389f3e264b2e89ad9861e8c3bff068e263e254552a8948->leave($__internal_1dca90e88b9ec8226e389f3e264b2e89ad9861e8c3bff068e263e254552a8948_prof);

        
        $__internal_303947bbac76cc62410569f94cc3ec4234216b2b59c9931d09611e2669d54ee5->leave($__internal_303947bbac76cc62410569f94cc3ec4234216b2b59c9931d09611e2669d54ee5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d536a5f5948dfc1459c84e5153f01f9afebfbe56813ea77f1b3dfb75c50e38a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d536a5f5948dfc1459c84e5153f01f9afebfbe56813ea77f1b3dfb75c50e38a0->enter($__internal_d536a5f5948dfc1459c84e5153f01f9afebfbe56813ea77f1b3dfb75c50e38a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3fee8b5476e7f7f3d95466368628eac97c2667e383a4f6a832c73adba91c4f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fee8b5476e7f7f3d95466368628eac97c2667e383a4f6a832c73adba91c4f09->enter($__internal_3fee8b5476e7f7f3d95466368628eac97c2667e383a4f6a832c73adba91c4f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3fee8b5476e7f7f3d95466368628eac97c2667e383a4f6a832c73adba91c4f09->leave($__internal_3fee8b5476e7f7f3d95466368628eac97c2667e383a4f6a832c73adba91c4f09_prof);

        
        $__internal_d536a5f5948dfc1459c84e5153f01f9afebfbe56813ea77f1b3dfb75c50e38a0->leave($__internal_d536a5f5948dfc1459c84e5153f01f9afebfbe56813ea77f1b3dfb75c50e38a0_prof);

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
