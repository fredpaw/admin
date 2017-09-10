<?php

/* AppBundle:Page:new.html.twig */
class __TwigTemplate_d503997f6515b8a970ed3e0451b0501986fc5fff4c103c3b20ae06d2344334f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/default/index.html.twig", "AppBundle:Page:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84311bdc8065d9d7c3873500c3f3fafe0aeddb866a85b75e3a4369186711f6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84311bdc8065d9d7c3873500c3f3fafe0aeddb866a85b75e3a4369186711f6e1->enter($__internal_84311bdc8065d9d7c3873500c3f3fafe0aeddb866a85b75e3a4369186711f6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:new.html.twig"));

        $__internal_43bebb20f1b0aedac2985fea9c4c713f2bc3103fd034fb31f867f3b67c0f3446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43bebb20f1b0aedac2985fea9c4c713f2bc3103fd034fb31f867f3b67c0f3446->enter($__internal_43bebb20f1b0aedac2985fea9c4c713f2bc3103fd034fb31f867f3b67c0f3446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84311bdc8065d9d7c3873500c3f3fafe0aeddb866a85b75e3a4369186711f6e1->leave($__internal_84311bdc8065d9d7c3873500c3f3fafe0aeddb866a85b75e3a4369186711f6e1_prof);

        
        $__internal_43bebb20f1b0aedac2985fea9c4c713f2bc3103fd034fb31f867f3b67c0f3446->leave($__internal_43bebb20f1b0aedac2985fea9c4c713f2bc3103fd034fb31f867f3b67c0f3446_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ab79bf0df89acabd2d3fc464974aa5fe1670b295a98e41535b956099aa30991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab79bf0df89acabd2d3fc464974aa5fe1670b295a98e41535b956099aa30991->enter($__internal_5ab79bf0df89acabd2d3fc464974aa5fe1670b295a98e41535b956099aa30991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c70b13cdb35c7fd286bf1a6bd75e04e6431d65897ad693786802b4fa1d61ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c70b13cdb35c7fd286bf1a6bd75e04e6431d65897ad693786802b4fa1d61ccc->enter($__internal_5c70b13cdb35c7fd286bf1a6bd75e04e6431d65897ad693786802b4fa1d61ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Article";
        
        $__internal_5c70b13cdb35c7fd286bf1a6bd75e04e6431d65897ad693786802b4fa1d61ccc->leave($__internal_5c70b13cdb35c7fd286bf1a6bd75e04e6431d65897ad693786802b4fa1d61ccc_prof);

        
        $__internal_5ab79bf0df89acabd2d3fc464974aa5fe1670b295a98e41535b956099aa30991->leave($__internal_5ab79bf0df89acabd2d3fc464974aa5fe1670b295a98e41535b956099aa30991_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0b77de0d333856c40a62593f3f9e671b4a7304299000bb319230fdfcabf763d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b77de0d333856c40a62593f3f9e671b4a7304299000bb319230fdfcabf763d->enter($__internal_a0b77de0d333856c40a62593f3f9e671b4a7304299000bb319230fdfcabf763d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_82e05b4e93292514fcb38451337637988b5da4595329719883dd27f6ef9be666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e05b4e93292514fcb38451337637988b5da4595329719883dd27f6ef9be666->enter($__internal_82e05b4e93292514fcb38451337637988b5da4595329719883dd27f6ef9be666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_82e05b4e93292514fcb38451337637988b5da4595329719883dd27f6ef9be666->leave($__internal_82e05b4e93292514fcb38451337637988b5da4595329719883dd27f6ef9be666_prof);

        
        $__internal_a0b77de0d333856c40a62593f3f9e671b4a7304299000bb319230fdfcabf763d->leave($__internal_a0b77de0d333856c40a62593f3f9e671b4a7304299000bb319230fdfcabf763d_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_eba8fada5194bca8ea20c71ebd7f364cd5590bca04aba96e45d2cd50a1a0e7a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba8fada5194bca8ea20c71ebd7f364cd5590bca04aba96e45d2cd50a1a0e7a8->enter($__internal_eba8fada5194bca8ea20c71ebd7f364cd5590bca04aba96e45d2cd50a1a0e7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5c762361250e81a71d66679814fbe8a1c4f512d49c024fa3743743f4521fa31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c762361250e81a71d66679814fbe8a1c4f512d49c024fa3743743f4521fa31d->enter($__internal_5c762361250e81a71d66679814fbe8a1c4f512d49c024fa3743743f4521fa31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"container\">

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "route", array()), 'label');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "route", array()), 'widget');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'label');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget');
        echo "
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_5c762361250e81a71d66679814fbe8a1c4f512d49c024fa3743743f4521fa31d->leave($__internal_5c762361250e81a71d66679814fbe8a1c4f512d49c024fa3743743f4521fa31d_prof);

        
        $__internal_eba8fada5194bca8ea20c71ebd7f364cd5590bca04aba96e45d2cd50a1a0e7a8->leave($__internal_eba8fada5194bca8ea20c71ebd7f364cd5590bca04aba96e45d2cd50a1a0e7a8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Page:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 15,  111 => 14,  107 => 13,  103 => 12,  99 => 11,  95 => 10,  91 => 8,  82 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@App/default/index.html.twig\" %}

{% block title %}New Article{% endblock %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block content %}
    <div class=\"container\">

        {{ form_start(form) }}
        {{ form_label(form.route) }}
        {{ form_widget(form.route) }}
        {{ form_label(form.content) }}
        {{ form_widget(form.content) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}", "AppBundle:Page:new.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/Page/new.html.twig");
    }
}
