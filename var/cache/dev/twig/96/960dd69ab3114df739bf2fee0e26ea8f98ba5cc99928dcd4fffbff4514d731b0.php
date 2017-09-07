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
        $__internal_6f5639b3478716d18e083563213b8d1dd4fb7dae5a2ad958aacd323248109060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5639b3478716d18e083563213b8d1dd4fb7dae5a2ad958aacd323248109060->enter($__internal_6f5639b3478716d18e083563213b8d1dd4fb7dae5a2ad958aacd323248109060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c26c3ae1f7057243c57f61781e5dbf939f3597dc634960212d7b01be3d6fa062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26c3ae1f7057243c57f61781e5dbf939f3597dc634960212d7b01be3d6fa062->enter($__internal_c26c3ae1f7057243c57f61781e5dbf939f3597dc634960212d7b01be3d6fa062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f5639b3478716d18e083563213b8d1dd4fb7dae5a2ad958aacd323248109060->leave($__internal_6f5639b3478716d18e083563213b8d1dd4fb7dae5a2ad958aacd323248109060_prof);

        
        $__internal_c26c3ae1f7057243c57f61781e5dbf939f3597dc634960212d7b01be3d6fa062->leave($__internal_c26c3ae1f7057243c57f61781e5dbf939f3597dc634960212d7b01be3d6fa062_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b9bcf2be5a716101450eb3464bff60dc72c1d2b6c7a1460e239ae609cdd0277e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9bcf2be5a716101450eb3464bff60dc72c1d2b6c7a1460e239ae609cdd0277e->enter($__internal_b9bcf2be5a716101450eb3464bff60dc72c1d2b6c7a1460e239ae609cdd0277e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_97028a0c059c514815534e1c9b267822981a08b61f1713a0bee06649f7df07d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97028a0c059c514815534e1c9b267822981a08b61f1713a0bee06649f7df07d8->enter($__internal_97028a0c059c514815534e1c9b267822981a08b61f1713a0bee06649f7df07d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97028a0c059c514815534e1c9b267822981a08b61f1713a0bee06649f7df07d8->leave($__internal_97028a0c059c514815534e1c9b267822981a08b61f1713a0bee06649f7df07d8_prof);

        
        $__internal_b9bcf2be5a716101450eb3464bff60dc72c1d2b6c7a1460e239ae609cdd0277e->leave($__internal_b9bcf2be5a716101450eb3464bff60dc72c1d2b6c7a1460e239ae609cdd0277e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d226a12a1a93ee385badbe00a2293395a405b741c1c549e88a20727d3ee77df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d226a12a1a93ee385badbe00a2293395a405b741c1c549e88a20727d3ee77df->enter($__internal_6d226a12a1a93ee385badbe00a2293395a405b741c1c549e88a20727d3ee77df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9e396c97beb6b38c9a2db462e74f3c9072223923d8a9930f9132165415fc6b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e396c97beb6b38c9a2db462e74f3c9072223923d8a9930f9132165415fc6b42->enter($__internal_9e396c97beb6b38c9a2db462e74f3c9072223923d8a9930f9132165415fc6b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9e396c97beb6b38c9a2db462e74f3c9072223923d8a9930f9132165415fc6b42->leave($__internal_9e396c97beb6b38c9a2db462e74f3c9072223923d8a9930f9132165415fc6b42_prof);

        
        $__internal_6d226a12a1a93ee385badbe00a2293395a405b741c1c549e88a20727d3ee77df->leave($__internal_6d226a12a1a93ee385badbe00a2293395a405b741c1c549e88a20727d3ee77df_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2380e93fde4548cb97ba07d1d69a85cf64966f923b815ecda8c69d0075ab565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2380e93fde4548cb97ba07d1d69a85cf64966f923b815ecda8c69d0075ab565->enter($__internal_c2380e93fde4548cb97ba07d1d69a85cf64966f923b815ecda8c69d0075ab565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1a6ee67d29409eaa516021c25a4c23cace3ddf9a0c4d80dbe9e5a46ce3c7d36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6ee67d29409eaa516021c25a4c23cace3ddf9a0c4d80dbe9e5a46ce3c7d36d->enter($__internal_1a6ee67d29409eaa516021c25a4c23cace3ddf9a0c4d80dbe9e5a46ce3c7d36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1a6ee67d29409eaa516021c25a4c23cace3ddf9a0c4d80dbe9e5a46ce3c7d36d->leave($__internal_1a6ee67d29409eaa516021c25a4c23cace3ddf9a0c4d80dbe9e5a46ce3c7d36d_prof);

        
        $__internal_c2380e93fde4548cb97ba07d1d69a85cf64966f923b815ecda8c69d0075ab565->leave($__internal_c2380e93fde4548cb97ba07d1d69a85cf64966f923b815ecda8c69d0075ab565_prof);

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
