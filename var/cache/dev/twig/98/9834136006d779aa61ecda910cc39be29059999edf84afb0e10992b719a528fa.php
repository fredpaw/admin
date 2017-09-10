<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
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
        $__internal_2a3dec567f614ef49afd2ad34f4ed5807a71ffa8a8e01cb92a554537e0e8f723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3dec567f614ef49afd2ad34f4ed5807a71ffa8a8e01cb92a554537e0e8f723->enter($__internal_2a3dec567f614ef49afd2ad34f4ed5807a71ffa8a8e01cb92a554537e0e8f723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_361094f374b48c9f4f5341cad38a6739ed96db11075ddd294563c7244accecc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361094f374b48c9f4f5341cad38a6739ed96db11075ddd294563c7244accecc1->enter($__internal_361094f374b48c9f4f5341cad38a6739ed96db11075ddd294563c7244accecc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a3dec567f614ef49afd2ad34f4ed5807a71ffa8a8e01cb92a554537e0e8f723->leave($__internal_2a3dec567f614ef49afd2ad34f4ed5807a71ffa8a8e01cb92a554537e0e8f723_prof);

        
        $__internal_361094f374b48c9f4f5341cad38a6739ed96db11075ddd294563c7244accecc1->leave($__internal_361094f374b48c9f4f5341cad38a6739ed96db11075ddd294563c7244accecc1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_569b0a1ecc328bd35d4b4ed47eda8d6d396786cd1f260c2a7676119537c76e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569b0a1ecc328bd35d4b4ed47eda8d6d396786cd1f260c2a7676119537c76e44->enter($__internal_569b0a1ecc328bd35d4b4ed47eda8d6d396786cd1f260c2a7676119537c76e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a8cefcb5f79ed506bc8976a6d067c56ce9e22df970bf3bd30c8df9ef97f80fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cefcb5f79ed506bc8976a6d067c56ce9e22df970bf3bd30c8df9ef97f80fd7->enter($__internal_a8cefcb5f79ed506bc8976a6d067c56ce9e22df970bf3bd30c8df9ef97f80fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a8cefcb5f79ed506bc8976a6d067c56ce9e22df970bf3bd30c8df9ef97f80fd7->leave($__internal_a8cefcb5f79ed506bc8976a6d067c56ce9e22df970bf3bd30c8df9ef97f80fd7_prof);

        
        $__internal_569b0a1ecc328bd35d4b4ed47eda8d6d396786cd1f260c2a7676119537c76e44->leave($__internal_569b0a1ecc328bd35d4b4ed47eda8d6d396786cd1f260c2a7676119537c76e44_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c005b4c7dbb5b9b54ea82c0bce1beb63b10ef51a9c26a61789d13a9812bae8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c005b4c7dbb5b9b54ea82c0bce1beb63b10ef51a9c26a61789d13a9812bae8a->enter($__internal_8c005b4c7dbb5b9b54ea82c0bce1beb63b10ef51a9c26a61789d13a9812bae8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_95b68d67ca4506fe0f78a3b679ae8d05a05c73eb6d97af76d8159e2350518670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b68d67ca4506fe0f78a3b679ae8d05a05c73eb6d97af76d8159e2350518670->enter($__internal_95b68d67ca4506fe0f78a3b679ae8d05a05c73eb6d97af76d8159e2350518670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_95b68d67ca4506fe0f78a3b679ae8d05a05c73eb6d97af76d8159e2350518670->leave($__internal_95b68d67ca4506fe0f78a3b679ae8d05a05c73eb6d97af76d8159e2350518670_prof);

        
        $__internal_8c005b4c7dbb5b9b54ea82c0bce1beb63b10ef51a9c26a61789d13a9812bae8a->leave($__internal_8c005b4c7dbb5b9b54ea82c0bce1beb63b10ef51a9c26a61789d13a9812bae8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff771381c3d06d1ce27d04576e93a65063781af39e24b9951977edd0856f17e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff771381c3d06d1ce27d04576e93a65063781af39e24b9951977edd0856f17e7->enter($__internal_ff771381c3d06d1ce27d04576e93a65063781af39e24b9951977edd0856f17e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_34c69fb3307fd667c187912a2a1dc9d16dcab34f829ac815fd8beec2f450bbf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c69fb3307fd667c187912a2a1dc9d16dcab34f829ac815fd8beec2f450bbf4->enter($__internal_34c69fb3307fd667c187912a2a1dc9d16dcab34f829ac815fd8beec2f450bbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_34c69fb3307fd667c187912a2a1dc9d16dcab34f829ac815fd8beec2f450bbf4->leave($__internal_34c69fb3307fd667c187912a2a1dc9d16dcab34f829ac815fd8beec2f450bbf4_prof);

        
        $__internal_ff771381c3d06d1ce27d04576e93a65063781af39e24b9951977edd0856f17e7->leave($__internal_ff771381c3d06d1ce27d04576e93a65063781af39e24b9951977edd0856f17e7_prof);

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
