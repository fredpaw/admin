<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_06b88042a272dde5d9dea4f403a32fa8e4e3eb7da12ecdfb78241f7067c45a03 extends Twig_Template
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
        $__internal_a358364a6a26c572ac3c3742c0a955e2bf53f91b0bd4e4074d6357a72bd26c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a358364a6a26c572ac3c3742c0a955e2bf53f91b0bd4e4074d6357a72bd26c14->enter($__internal_a358364a6a26c572ac3c3742c0a955e2bf53f91b0bd4e4074d6357a72bd26c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_14293d61cd2232dcdd48cf75147ca56be0db23766edbf2f31676f800b433a91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14293d61cd2232dcdd48cf75147ca56be0db23766edbf2f31676f800b433a91b->enter($__internal_14293d61cd2232dcdd48cf75147ca56be0db23766edbf2f31676f800b433a91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a358364a6a26c572ac3c3742c0a955e2bf53f91b0bd4e4074d6357a72bd26c14->leave($__internal_a358364a6a26c572ac3c3742c0a955e2bf53f91b0bd4e4074d6357a72bd26c14_prof);

        
        $__internal_14293d61cd2232dcdd48cf75147ca56be0db23766edbf2f31676f800b433a91b->leave($__internal_14293d61cd2232dcdd48cf75147ca56be0db23766edbf2f31676f800b433a91b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f060f97eebff9515de3a32f89bd48c00209bd780269e307106ade03569de4421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f060f97eebff9515de3a32f89bd48c00209bd780269e307106ade03569de4421->enter($__internal_f060f97eebff9515de3a32f89bd48c00209bd780269e307106ade03569de4421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_57a3fac5ce2be3e2bb0ec3bc7702fc0a6dd300dae5a7f6e0155db02b09962e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a3fac5ce2be3e2bb0ec3bc7702fc0a6dd300dae5a7f6e0155db02b09962e9f->enter($__internal_57a3fac5ce2be3e2bb0ec3bc7702fc0a6dd300dae5a7f6e0155db02b09962e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57a3fac5ce2be3e2bb0ec3bc7702fc0a6dd300dae5a7f6e0155db02b09962e9f->leave($__internal_57a3fac5ce2be3e2bb0ec3bc7702fc0a6dd300dae5a7f6e0155db02b09962e9f_prof);

        
        $__internal_f060f97eebff9515de3a32f89bd48c00209bd780269e307106ade03569de4421->leave($__internal_f060f97eebff9515de3a32f89bd48c00209bd780269e307106ade03569de4421_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c5b4b20aed2d412ff1a8a8eb61358c8737224d40f475d5df2fe32b7cf7be62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5b4b20aed2d412ff1a8a8eb61358c8737224d40f475d5df2fe32b7cf7be62d->enter($__internal_5c5b4b20aed2d412ff1a8a8eb61358c8737224d40f475d5df2fe32b7cf7be62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d336a63336f64e52775c191371013c6543cf4d2b17201012d669d723e036efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d336a63336f64e52775c191371013c6543cf4d2b17201012d669d723e036efe->enter($__internal_5d336a63336f64e52775c191371013c6543cf4d2b17201012d669d723e036efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d336a63336f64e52775c191371013c6543cf4d2b17201012d669d723e036efe->leave($__internal_5d336a63336f64e52775c191371013c6543cf4d2b17201012d669d723e036efe_prof);

        
        $__internal_5c5b4b20aed2d412ff1a8a8eb61358c8737224d40f475d5df2fe32b7cf7be62d->leave($__internal_5c5b4b20aed2d412ff1a8a8eb61358c8737224d40f475d5df2fe32b7cf7be62d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59f8cc5d819aec9711a11e9c620c9de8ca4885e11329923b1c1fd534bdcf0649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f8cc5d819aec9711a11e9c620c9de8ca4885e11329923b1c1fd534bdcf0649->enter($__internal_59f8cc5d819aec9711a11e9c620c9de8ca4885e11329923b1c1fd534bdcf0649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a7e1ee4ae083977649951346b8b51167db393f8e5514ccbc77f14bb6d0e9a698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e1ee4ae083977649951346b8b51167db393f8e5514ccbc77f14bb6d0e9a698->enter($__internal_a7e1ee4ae083977649951346b8b51167db393f8e5514ccbc77f14bb6d0e9a698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a7e1ee4ae083977649951346b8b51167db393f8e5514ccbc77f14bb6d0e9a698->leave($__internal_a7e1ee4ae083977649951346b8b51167db393f8e5514ccbc77f14bb6d0e9a698_prof);

        
        $__internal_59f8cc5d819aec9711a11e9c620c9de8ca4885e11329923b1c1fd534bdcf0649->leave($__internal_59f8cc5d819aec9711a11e9c620c9de8ca4885e11329923b1c1fd534bdcf0649_prof);

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
