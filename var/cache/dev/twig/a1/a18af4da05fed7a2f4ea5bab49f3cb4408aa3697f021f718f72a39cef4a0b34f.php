<?php

/* AppBundle:Page:edit.html.twig */
class __TwigTemplate_4549b81c79327ebbe9146fe94314adcf5aaf9df2ecc43ac840bc2be6b09dccf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/default/index.html.twig", "AppBundle:Page:edit.html.twig", 1);
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
        $__internal_9c98b9824959107c9d9fbb8f511806685003d960fe1379c364ebbf17969109d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c98b9824959107c9d9fbb8f511806685003d960fe1379c364ebbf17969109d0->enter($__internal_9c98b9824959107c9d9fbb8f511806685003d960fe1379c364ebbf17969109d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:edit.html.twig"));

        $__internal_f41c0eff1f6826f57aa4467f315d057489916fae56e2529fdd517d504c0c14c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41c0eff1f6826f57aa4467f315d057489916fae56e2529fdd517d504c0c14c4->enter($__internal_f41c0eff1f6826f57aa4467f315d057489916fae56e2529fdd517d504c0c14c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c98b9824959107c9d9fbb8f511806685003d960fe1379c364ebbf17969109d0->leave($__internal_9c98b9824959107c9d9fbb8f511806685003d960fe1379c364ebbf17969109d0_prof);

        
        $__internal_f41c0eff1f6826f57aa4467f315d057489916fae56e2529fdd517d504c0c14c4->leave($__internal_f41c0eff1f6826f57aa4467f315d057489916fae56e2529fdd517d504c0c14c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_14e63c91a3fc1fb9326f74eeb32e7e9d661c02393e538ccb548d951b8714825f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e63c91a3fc1fb9326f74eeb32e7e9d661c02393e538ccb548d951b8714825f->enter($__internal_14e63c91a3fc1fb9326f74eeb32e7e9d661c02393e538ccb548d951b8714825f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_509eef0025d5354f83fecea28806faae69826762d19763ec1217b864a1b67a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509eef0025d5354f83fecea28806faae69826762d19763ec1217b864a1b67a4b->enter($__internal_509eef0025d5354f83fecea28806faae69826762d19763ec1217b864a1b67a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Article";
        
        $__internal_509eef0025d5354f83fecea28806faae69826762d19763ec1217b864a1b67a4b->leave($__internal_509eef0025d5354f83fecea28806faae69826762d19763ec1217b864a1b67a4b_prof);

        
        $__internal_14e63c91a3fc1fb9326f74eeb32e7e9d661c02393e538ccb548d951b8714825f->leave($__internal_14e63c91a3fc1fb9326f74eeb32e7e9d661c02393e538ccb548d951b8714825f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c90eb8ccbb3e7dd71180a5531d17980b3708ee844d2ca795ecda253390a5cb68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90eb8ccbb3e7dd71180a5531d17980b3708ee844d2ca795ecda253390a5cb68->enter($__internal_c90eb8ccbb3e7dd71180a5531d17980b3708ee844d2ca795ecda253390a5cb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f333590e05fdf587372f996a10826ab70b026cb3894078b89049b7af331254b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f333590e05fdf587372f996a10826ab70b026cb3894078b89049b7af331254b2->enter($__internal_f333590e05fdf587372f996a10826ab70b026cb3894078b89049b7af331254b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_f333590e05fdf587372f996a10826ab70b026cb3894078b89049b7af331254b2->leave($__internal_f333590e05fdf587372f996a10826ab70b026cb3894078b89049b7af331254b2_prof);

        
        $__internal_c90eb8ccbb3e7dd71180a5531d17980b3708ee844d2ca795ecda253390a5cb68->leave($__internal_c90eb8ccbb3e7dd71180a5531d17980b3708ee844d2ca795ecda253390a5cb68_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_cd58c36e678d4f4431999b2f3875a494c92f5d5a649449f7a407225c513c5702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd58c36e678d4f4431999b2f3875a494c92f5d5a649449f7a407225c513c5702->enter($__internal_cd58c36e678d4f4431999b2f3875a494c92f5d5a649449f7a407225c513c5702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_53c64e6d24b50365c4280f112d4c14ceb2fd493e32513741ebe20ce28b2691ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c64e6d24b50365c4280f112d4c14ceb2fd493e32513741ebe20ce28b2691ea->enter($__internal_53c64e6d24b50365c4280f112d4c14ceb2fd493e32513741ebe20ce28b2691ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"container\">

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Please enter the title")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "route", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "route", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Please enter route for the page")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Please enter content for the page", "rows" => "30")));
        echo "
        </div>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_53c64e6d24b50365c4280f112d4c14ceb2fd493e32513741ebe20ce28b2691ea->leave($__internal_53c64e6d24b50365c4280f112d4c14ceb2fd493e32513741ebe20ce28b2691ea_prof);

        
        $__internal_cd58c36e678d4f4431999b2f3875a494c92f5d5a649449f7a407225c513c5702->leave($__internal_cd58c36e678d4f4431999b2f3875a494c92f5d5a649449f7a407225c513c5702_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Page:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 28,  139 => 27,  134 => 25,  130 => 24,  124 => 21,  120 => 20,  114 => 17,  110 => 16,  104 => 13,  99 => 11,  95 => 9,  86 => 8,  74 => 6,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Edit Article{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/app/css/signin.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block content %}
    <div class=\"container\">

        {{ form_start(form) }}
        <div class=\"form-group\">
            {{ form_errors(form) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.title) }}
            {{ form_widget(form.title, {'attr': {'class':'form-control', 'placeholder':'Please enter the title'}}) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.route) }}
            {{ form_widget(form.route, {'attr': {'class':'form-control', 'placeholder':'Please enter route for the page'}}) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.content) }}
            {{ form_widget(form.content, {'attr': {'class':'form-control', 'placeholder':'Please enter content for the page','rows':'30'}}) }}
        </div>
        {{ form_widget(form.save) }}
        {{ form_end(form) }}
    </div>
{% endblock %}

", "AppBundle:Page:edit.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/Page/edit.html.twig");
    }
}
