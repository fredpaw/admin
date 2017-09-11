<?php

/* AppBundle:Page:edit.html.twig */
class __TwigTemplate_82b1778f1fa64502154c9f29488f03190f09da9785c9edbca2e71f9cc8fa615e extends Twig_Template
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
        $__internal_c57c052da46fc6e6f5df63d6cf17b46252e91eb7b9668d8a7055baa28d8cc951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c57c052da46fc6e6f5df63d6cf17b46252e91eb7b9668d8a7055baa28d8cc951->enter($__internal_c57c052da46fc6e6f5df63d6cf17b46252e91eb7b9668d8a7055baa28d8cc951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:edit.html.twig"));

        $__internal_3e80e9f0f1d3f95d8706cbb66aeeba08f1e4906e1240171194ac951ce3e71d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e80e9f0f1d3f95d8706cbb66aeeba08f1e4906e1240171194ac951ce3e71d8b->enter($__internal_3e80e9f0f1d3f95d8706cbb66aeeba08f1e4906e1240171194ac951ce3e71d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c57c052da46fc6e6f5df63d6cf17b46252e91eb7b9668d8a7055baa28d8cc951->leave($__internal_c57c052da46fc6e6f5df63d6cf17b46252e91eb7b9668d8a7055baa28d8cc951_prof);

        
        $__internal_3e80e9f0f1d3f95d8706cbb66aeeba08f1e4906e1240171194ac951ce3e71d8b->leave($__internal_3e80e9f0f1d3f95d8706cbb66aeeba08f1e4906e1240171194ac951ce3e71d8b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_839dfb69abb2500e12c6a82bdef5de099c1bc9f13525004046074cbb14346949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839dfb69abb2500e12c6a82bdef5de099c1bc9f13525004046074cbb14346949->enter($__internal_839dfb69abb2500e12c6a82bdef5de099c1bc9f13525004046074cbb14346949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d857e1a259d61383f1ac4b355edc12126008ab5c9f83045d6f93e630c34beb84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d857e1a259d61383f1ac4b355edc12126008ab5c9f83045d6f93e630c34beb84->enter($__internal_d857e1a259d61383f1ac4b355edc12126008ab5c9f83045d6f93e630c34beb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Article";
        
        $__internal_d857e1a259d61383f1ac4b355edc12126008ab5c9f83045d6f93e630c34beb84->leave($__internal_d857e1a259d61383f1ac4b355edc12126008ab5c9f83045d6f93e630c34beb84_prof);

        
        $__internal_839dfb69abb2500e12c6a82bdef5de099c1bc9f13525004046074cbb14346949->leave($__internal_839dfb69abb2500e12c6a82bdef5de099c1bc9f13525004046074cbb14346949_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_510be0168435c7a6b91d9f85229331d4beb913c74b381d2e9edf62842822669c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510be0168435c7a6b91d9f85229331d4beb913c74b381d2e9edf62842822669c->enter($__internal_510be0168435c7a6b91d9f85229331d4beb913c74b381d2e9edf62842822669c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9e8a2a8e2c25a0017019903de1370d6d831b69d977a59590cbaa4890b96280a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8a2a8e2c25a0017019903de1370d6d831b69d977a59590cbaa4890b96280a1->enter($__internal_9e8a2a8e2c25a0017019903de1370d6d831b69d977a59590cbaa4890b96280a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_9e8a2a8e2c25a0017019903de1370d6d831b69d977a59590cbaa4890b96280a1->leave($__internal_9e8a2a8e2c25a0017019903de1370d6d831b69d977a59590cbaa4890b96280a1_prof);

        
        $__internal_510be0168435c7a6b91d9f85229331d4beb913c74b381d2e9edf62842822669c->leave($__internal_510be0168435c7a6b91d9f85229331d4beb913c74b381d2e9edf62842822669c_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_0a150fa7fc3779d96c24e767c6a28c94c453dd5bcb8725a64a7a73e47be648d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a150fa7fc3779d96c24e767c6a28c94c453dd5bcb8725a64a7a73e47be648d6->enter($__internal_0a150fa7fc3779d96c24e767c6a28c94c453dd5bcb8725a64a7a73e47be648d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c482dcc62217f98b70e09a2bb46d1d94bb72514e88b2c07a836a478587ddb0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c482dcc62217f98b70e09a2bb46d1d94bb72514e88b2c07a836a478587ddb0ec->enter($__internal_c482dcc62217f98b70e09a2bb46d1d94bb72514e88b2c07a836a478587ddb0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "route", array()), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "route", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Please enter route for the page")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Please enter content for the page", "rows" => "30")));
        echo "
        </div>
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_c482dcc62217f98b70e09a2bb46d1d94bb72514e88b2c07a836a478587ddb0ec->leave($__internal_c482dcc62217f98b70e09a2bb46d1d94bb72514e88b2c07a836a478587ddb0ec_prof);

        
        $__internal_0a150fa7fc3779d96c24e767c6a28c94c453dd5bcb8725a64a7a73e47be648d6->leave($__internal_0a150fa7fc3779d96c24e767c6a28c94c453dd5bcb8725a64a7a73e47be648d6_prof);

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
