<?php

/* AppBundle:Page:edit.html.twig */
class __TwigTemplate_9050faa96cf41a26c349f80f51800abbfa957f968df450b1e88b8a308d7a5115 extends Twig_Template
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
        $__internal_0c01f2a4c09e3d1fffa001d4b5125e7ba526ae74ef06852951713af15547991d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c01f2a4c09e3d1fffa001d4b5125e7ba526ae74ef06852951713af15547991d->enter($__internal_0c01f2a4c09e3d1fffa001d4b5125e7ba526ae74ef06852951713af15547991d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:edit.html.twig"));

        $__internal_e7e7b6115c85f20a52ab6bf31e798f37e01adc5f0757b8ad9eb858b614e178eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e7b6115c85f20a52ab6bf31e798f37e01adc5f0757b8ad9eb858b614e178eb->enter($__internal_e7e7b6115c85f20a52ab6bf31e798f37e01adc5f0757b8ad9eb858b614e178eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c01f2a4c09e3d1fffa001d4b5125e7ba526ae74ef06852951713af15547991d->leave($__internal_0c01f2a4c09e3d1fffa001d4b5125e7ba526ae74ef06852951713af15547991d_prof);

        
        $__internal_e7e7b6115c85f20a52ab6bf31e798f37e01adc5f0757b8ad9eb858b614e178eb->leave($__internal_e7e7b6115c85f20a52ab6bf31e798f37e01adc5f0757b8ad9eb858b614e178eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f0d83d1bc163e4640378c371c0223d8a34dacc70f21351b5ae2292b3ba4bb2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0d83d1bc163e4640378c371c0223d8a34dacc70f21351b5ae2292b3ba4bb2a->enter($__internal_2f0d83d1bc163e4640378c371c0223d8a34dacc70f21351b5ae2292b3ba4bb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9adbcbdf4aebc02032076e33593b2d3e648909b011baf5e72d662e02f1f465aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9adbcbdf4aebc02032076e33593b2d3e648909b011baf5e72d662e02f1f465aa->enter($__internal_9adbcbdf4aebc02032076e33593b2d3e648909b011baf5e72d662e02f1f465aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Article";
        
        $__internal_9adbcbdf4aebc02032076e33593b2d3e648909b011baf5e72d662e02f1f465aa->leave($__internal_9adbcbdf4aebc02032076e33593b2d3e648909b011baf5e72d662e02f1f465aa_prof);

        
        $__internal_2f0d83d1bc163e4640378c371c0223d8a34dacc70f21351b5ae2292b3ba4bb2a->leave($__internal_2f0d83d1bc163e4640378c371c0223d8a34dacc70f21351b5ae2292b3ba4bb2a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00585fc5b5678a6608109ae63093fce7f34273c57bc4b363897246c655063e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00585fc5b5678a6608109ae63093fce7f34273c57bc4b363897246c655063e1d->enter($__internal_00585fc5b5678a6608109ae63093fce7f34273c57bc4b363897246c655063e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5e9bbdeeaedcbbc9eb757bfd65908d75ab6e78dc441c0a5d6122350be8cea532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9bbdeeaedcbbc9eb757bfd65908d75ab6e78dc441c0a5d6122350be8cea532->enter($__internal_5e9bbdeeaedcbbc9eb757bfd65908d75ab6e78dc441c0a5d6122350be8cea532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_5e9bbdeeaedcbbc9eb757bfd65908d75ab6e78dc441c0a5d6122350be8cea532->leave($__internal_5e9bbdeeaedcbbc9eb757bfd65908d75ab6e78dc441c0a5d6122350be8cea532_prof);

        
        $__internal_00585fc5b5678a6608109ae63093fce7f34273c57bc4b363897246c655063e1d->leave($__internal_00585fc5b5678a6608109ae63093fce7f34273c57bc4b363897246c655063e1d_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_d884be9ca6f7fc5901cb0ec233560eeab11b1134ace3a809122c1c3a39866d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d884be9ca6f7fc5901cb0ec233560eeab11b1134ace3a809122c1c3a39866d98->enter($__internal_d884be9ca6f7fc5901cb0ec233560eeab11b1134ace3a809122c1c3a39866d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1d70b7440f6bda449ff8b1dc32724d0ca3237c9a7b0b3cbaf63d51a6b21ddeae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d70b7440f6bda449ff8b1dc32724d0ca3237c9a7b0b3cbaf63d51a6b21ddeae->enter($__internal_1d70b7440f6bda449ff8b1dc32724d0ca3237c9a7b0b3cbaf63d51a6b21ddeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"container\">

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "route", array()), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "route", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Please enter route for the page")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Please enter content for the page", "rows" => "30")));
        echo "
        </div>
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_1d70b7440f6bda449ff8b1dc32724d0ca3237c9a7b0b3cbaf63d51a6b21ddeae->leave($__internal_1d70b7440f6bda449ff8b1dc32724d0ca3237c9a7b0b3cbaf63d51a6b21ddeae_prof);

        
        $__internal_d884be9ca6f7fc5901cb0ec233560eeab11b1134ace3a809122c1c3a39866d98->leave($__internal_d884be9ca6f7fc5901cb0ec233560eeab11b1134ace3a809122c1c3a39866d98_prof);

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
        return array (  133 => 24,  129 => 23,  124 => 21,  120 => 20,  114 => 17,  110 => 16,  104 => 13,  99 => 11,  95 => 9,  86 => 8,  74 => 6,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
