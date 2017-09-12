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
        $__internal_e530515ddb7b4df2bd57c777312ce298f817c317b0c6aec8f9a0762c9f6486c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e530515ddb7b4df2bd57c777312ce298f817c317b0c6aec8f9a0762c9f6486c4->enter($__internal_e530515ddb7b4df2bd57c777312ce298f817c317b0c6aec8f9a0762c9f6486c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:edit.html.twig"));

        $__internal_ddc4bb5cce55b49f553a5f158a8792bbe373f3f057232cc102959b3545995547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc4bb5cce55b49f553a5f158a8792bbe373f3f057232cc102959b3545995547->enter($__internal_ddc4bb5cce55b49f553a5f158a8792bbe373f3f057232cc102959b3545995547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e530515ddb7b4df2bd57c777312ce298f817c317b0c6aec8f9a0762c9f6486c4->leave($__internal_e530515ddb7b4df2bd57c777312ce298f817c317b0c6aec8f9a0762c9f6486c4_prof);

        
        $__internal_ddc4bb5cce55b49f553a5f158a8792bbe373f3f057232cc102959b3545995547->leave($__internal_ddc4bb5cce55b49f553a5f158a8792bbe373f3f057232cc102959b3545995547_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc1ae42984a2bfa33403080e5695c538dbd93e6abc0842ec79dc034e3fb263e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1ae42984a2bfa33403080e5695c538dbd93e6abc0842ec79dc034e3fb263e0->enter($__internal_fc1ae42984a2bfa33403080e5695c538dbd93e6abc0842ec79dc034e3fb263e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70f2b6828c133778abe965aa2b6caa11ec7833e41ba760c8cb3473ad19573f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f2b6828c133778abe965aa2b6caa11ec7833e41ba760c8cb3473ad19573f75->enter($__internal_70f2b6828c133778abe965aa2b6caa11ec7833e41ba760c8cb3473ad19573f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Article";
        
        $__internal_70f2b6828c133778abe965aa2b6caa11ec7833e41ba760c8cb3473ad19573f75->leave($__internal_70f2b6828c133778abe965aa2b6caa11ec7833e41ba760c8cb3473ad19573f75_prof);

        
        $__internal_fc1ae42984a2bfa33403080e5695c538dbd93e6abc0842ec79dc034e3fb263e0->leave($__internal_fc1ae42984a2bfa33403080e5695c538dbd93e6abc0842ec79dc034e3fb263e0_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6891bb039653e001c2f21b008fb245682e51694f4024f89bfe45c6c44376845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6891bb039653e001c2f21b008fb245682e51694f4024f89bfe45c6c44376845->enter($__internal_b6891bb039653e001c2f21b008fb245682e51694f4024f89bfe45c6c44376845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_abafb44c30ae13ad0a7d8c7fa4419a69499fb5aacbc2e725c2fbe6942cd8b660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abafb44c30ae13ad0a7d8c7fa4419a69499fb5aacbc2e725c2fbe6942cd8b660->enter($__internal_abafb44c30ae13ad0a7d8c7fa4419a69499fb5aacbc2e725c2fbe6942cd8b660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_abafb44c30ae13ad0a7d8c7fa4419a69499fb5aacbc2e725c2fbe6942cd8b660->leave($__internal_abafb44c30ae13ad0a7d8c7fa4419a69499fb5aacbc2e725c2fbe6942cd8b660_prof);

        
        $__internal_b6891bb039653e001c2f21b008fb245682e51694f4024f89bfe45c6c44376845->leave($__internal_b6891bb039653e001c2f21b008fb245682e51694f4024f89bfe45c6c44376845_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_389ce36402a6cdb3686c61e79556958760772b7b67962ae2fa9ad535fdf0aa94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_389ce36402a6cdb3686c61e79556958760772b7b67962ae2fa9ad535fdf0aa94->enter($__internal_389ce36402a6cdb3686c61e79556958760772b7b67962ae2fa9ad535fdf0aa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0f7fc14bdec3286097b95807779f52069b1d807fd1b3d4ead8f649448dce021e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7fc14bdec3286097b95807779f52069b1d807fd1b3d4ead8f649448dce021e->enter($__internal_0f7fc14bdec3286097b95807779f52069b1d807fd1b3d4ead8f649448dce021e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Please enter the title")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "route", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "route", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Please enter route for the page")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Please enter content for the page", "rows" => "30")));
        echo "
        </div>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_0f7fc14bdec3286097b95807779f52069b1d807fd1b3d4ead8f649448dce021e->leave($__internal_0f7fc14bdec3286097b95807779f52069b1d807fd1b3d4ead8f649448dce021e_prof);

        
        $__internal_389ce36402a6cdb3686c61e79556958760772b7b67962ae2fa9ad535fdf0aa94->leave($__internal_389ce36402a6cdb3686c61e79556958760772b7b67962ae2fa9ad535fdf0aa94_prof);

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
