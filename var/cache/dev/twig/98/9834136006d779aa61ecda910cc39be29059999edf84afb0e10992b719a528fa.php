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
        $__internal_bb5221edcfc4e5b74aa10a7297e09e2d213088d1ba0c3916e0ea28be6fd183ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5221edcfc4e5b74aa10a7297e09e2d213088d1ba0c3916e0ea28be6fd183ac->enter($__internal_bb5221edcfc4e5b74aa10a7297e09e2d213088d1ba0c3916e0ea28be6fd183ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e261b234cbf2a6b17cbf2bed63c04479fd3f77e3c417d4fbd7f3c09d955b657f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e261b234cbf2a6b17cbf2bed63c04479fd3f77e3c417d4fbd7f3c09d955b657f->enter($__internal_e261b234cbf2a6b17cbf2bed63c04479fd3f77e3c417d4fbd7f3c09d955b657f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb5221edcfc4e5b74aa10a7297e09e2d213088d1ba0c3916e0ea28be6fd183ac->leave($__internal_bb5221edcfc4e5b74aa10a7297e09e2d213088d1ba0c3916e0ea28be6fd183ac_prof);

        
        $__internal_e261b234cbf2a6b17cbf2bed63c04479fd3f77e3c417d4fbd7f3c09d955b657f->leave($__internal_e261b234cbf2a6b17cbf2bed63c04479fd3f77e3c417d4fbd7f3c09d955b657f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7735b964a8ea59733f56ece0308d5b23e389672035608c9865eb9a4eb3a46e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7735b964a8ea59733f56ece0308d5b23e389672035608c9865eb9a4eb3a46e8a->enter($__internal_7735b964a8ea59733f56ece0308d5b23e389672035608c9865eb9a4eb3a46e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a517ad954e11dbf9fc44e9299febb303079a836167c22ff649516e184b8e6323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a517ad954e11dbf9fc44e9299febb303079a836167c22ff649516e184b8e6323->enter($__internal_a517ad954e11dbf9fc44e9299febb303079a836167c22ff649516e184b8e6323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a517ad954e11dbf9fc44e9299febb303079a836167c22ff649516e184b8e6323->leave($__internal_a517ad954e11dbf9fc44e9299febb303079a836167c22ff649516e184b8e6323_prof);

        
        $__internal_7735b964a8ea59733f56ece0308d5b23e389672035608c9865eb9a4eb3a46e8a->leave($__internal_7735b964a8ea59733f56ece0308d5b23e389672035608c9865eb9a4eb3a46e8a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d23c072efd8c18a79fb4242a0c14789c2dd8718b945c776caea29e9cc6c16994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23c072efd8c18a79fb4242a0c14789c2dd8718b945c776caea29e9cc6c16994->enter($__internal_d23c072efd8c18a79fb4242a0c14789c2dd8718b945c776caea29e9cc6c16994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a69857ce4a85b0bb2551d30ccf61d6bd7538ea0c0b5819b2fcaae9e10301c23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69857ce4a85b0bb2551d30ccf61d6bd7538ea0c0b5819b2fcaae9e10301c23e->enter($__internal_a69857ce4a85b0bb2551d30ccf61d6bd7538ea0c0b5819b2fcaae9e10301c23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a69857ce4a85b0bb2551d30ccf61d6bd7538ea0c0b5819b2fcaae9e10301c23e->leave($__internal_a69857ce4a85b0bb2551d30ccf61d6bd7538ea0c0b5819b2fcaae9e10301c23e_prof);

        
        $__internal_d23c072efd8c18a79fb4242a0c14789c2dd8718b945c776caea29e9cc6c16994->leave($__internal_d23c072efd8c18a79fb4242a0c14789c2dd8718b945c776caea29e9cc6c16994_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4bba40b3f799fab482f9ab027017c39208717732f4c5d88b6ed797a99ceea615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bba40b3f799fab482f9ab027017c39208717732f4c5d88b6ed797a99ceea615->enter($__internal_4bba40b3f799fab482f9ab027017c39208717732f4c5d88b6ed797a99ceea615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4b3495c7e85ebb7144b3cd75fe4eeda897881248741eb476b52b54ebfbaa4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b3495c7e85ebb7144b3cd75fe4eeda897881248741eb476b52b54ebfbaa4a1->enter($__internal_b4b3495c7e85ebb7144b3cd75fe4eeda897881248741eb476b52b54ebfbaa4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b4b3495c7e85ebb7144b3cd75fe4eeda897881248741eb476b52b54ebfbaa4a1->leave($__internal_b4b3495c7e85ebb7144b3cd75fe4eeda897881248741eb476b52b54ebfbaa4a1_prof);

        
        $__internal_4bba40b3f799fab482f9ab027017c39208717732f4c5d88b6ed797a99ceea615->leave($__internal_4bba40b3f799fab482f9ab027017c39208717732f4c5d88b6ed797a99ceea615_prof);

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
