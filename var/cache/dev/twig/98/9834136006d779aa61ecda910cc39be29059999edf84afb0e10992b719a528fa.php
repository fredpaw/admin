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
        $__internal_1b0d89cafc6f3ab4a68534fd1c2dec240da6e00167fff3fe53655eca96248be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0d89cafc6f3ab4a68534fd1c2dec240da6e00167fff3fe53655eca96248be5->enter($__internal_1b0d89cafc6f3ab4a68534fd1c2dec240da6e00167fff3fe53655eca96248be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6d7ba4275fd5628e991b1261f083a8f0d4ca86351a30b15b95c3d6046abcbe0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7ba4275fd5628e991b1261f083a8f0d4ca86351a30b15b95c3d6046abcbe0a->enter($__internal_6d7ba4275fd5628e991b1261f083a8f0d4ca86351a30b15b95c3d6046abcbe0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b0d89cafc6f3ab4a68534fd1c2dec240da6e00167fff3fe53655eca96248be5->leave($__internal_1b0d89cafc6f3ab4a68534fd1c2dec240da6e00167fff3fe53655eca96248be5_prof);

        
        $__internal_6d7ba4275fd5628e991b1261f083a8f0d4ca86351a30b15b95c3d6046abcbe0a->leave($__internal_6d7ba4275fd5628e991b1261f083a8f0d4ca86351a30b15b95c3d6046abcbe0a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24405dc745a79dd6553f89bc913b4bd7a04232fdbec5815e4f49ffe4fbf574f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24405dc745a79dd6553f89bc913b4bd7a04232fdbec5815e4f49ffe4fbf574f8->enter($__internal_24405dc745a79dd6553f89bc913b4bd7a04232fdbec5815e4f49ffe4fbf574f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_424d7db851c8c2f3756b43063a33f393c5320fe8f2439fe397c3a2a0020aab5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424d7db851c8c2f3756b43063a33f393c5320fe8f2439fe397c3a2a0020aab5b->enter($__internal_424d7db851c8c2f3756b43063a33f393c5320fe8f2439fe397c3a2a0020aab5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_424d7db851c8c2f3756b43063a33f393c5320fe8f2439fe397c3a2a0020aab5b->leave($__internal_424d7db851c8c2f3756b43063a33f393c5320fe8f2439fe397c3a2a0020aab5b_prof);

        
        $__internal_24405dc745a79dd6553f89bc913b4bd7a04232fdbec5815e4f49ffe4fbf574f8->leave($__internal_24405dc745a79dd6553f89bc913b4bd7a04232fdbec5815e4f49ffe4fbf574f8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d3520d3c3765280cdf6e57a8be7508e3f2df3f0bb58b594344f82489227300a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3520d3c3765280cdf6e57a8be7508e3f2df3f0bb58b594344f82489227300a->enter($__internal_9d3520d3c3765280cdf6e57a8be7508e3f2df3f0bb58b594344f82489227300a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f2e933c8940fceca30bb29db17a060df44ea92f4cf8968d3be803ce42e8fcf1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e933c8940fceca30bb29db17a060df44ea92f4cf8968d3be803ce42e8fcf1f->enter($__internal_f2e933c8940fceca30bb29db17a060df44ea92f4cf8968d3be803ce42e8fcf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f2e933c8940fceca30bb29db17a060df44ea92f4cf8968d3be803ce42e8fcf1f->leave($__internal_f2e933c8940fceca30bb29db17a060df44ea92f4cf8968d3be803ce42e8fcf1f_prof);

        
        $__internal_9d3520d3c3765280cdf6e57a8be7508e3f2df3f0bb58b594344f82489227300a->leave($__internal_9d3520d3c3765280cdf6e57a8be7508e3f2df3f0bb58b594344f82489227300a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c14a0311c4d498f7525f989f60d1d7e6ca4e6d4bc944f99854aeafd5c60e4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c14a0311c4d498f7525f989f60d1d7e6ca4e6d4bc944f99854aeafd5c60e4ba->enter($__internal_1c14a0311c4d498f7525f989f60d1d7e6ca4e6d4bc944f99854aeafd5c60e4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_12726910db9e2eed2f87ae536535fcef2647aab8b5279df8b0ec9f7800e6b86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12726910db9e2eed2f87ae536535fcef2647aab8b5279df8b0ec9f7800e6b86c->enter($__internal_12726910db9e2eed2f87ae536535fcef2647aab8b5279df8b0ec9f7800e6b86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_12726910db9e2eed2f87ae536535fcef2647aab8b5279df8b0ec9f7800e6b86c->leave($__internal_12726910db9e2eed2f87ae536535fcef2647aab8b5279df8b0ec9f7800e6b86c_prof);

        
        $__internal_1c14a0311c4d498f7525f989f60d1d7e6ca4e6d4bc944f99854aeafd5c60e4ba->leave($__internal_1c14a0311c4d498f7525f989f60d1d7e6ca4e6d4bc944f99854aeafd5c60e4ba_prof);

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
