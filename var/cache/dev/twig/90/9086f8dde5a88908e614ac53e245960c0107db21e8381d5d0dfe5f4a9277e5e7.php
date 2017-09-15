<?php

/* AppBundle:User:change.html.twig */
class __TwigTemplate_5ae25057f9a29c46b6aafda5d0c135da6eb9b325b3d2a24eebb2e0dc969755e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/default/index.html.twig", "AppBundle:User:change.html.twig", 1);
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
        $__internal_2d261cf599249871586e1b18a83373bee881b1e25e8304f18803ec95497134c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d261cf599249871586e1b18a83373bee881b1e25e8304f18803ec95497134c3->enter($__internal_2d261cf599249871586e1b18a83373bee881b1e25e8304f18803ec95497134c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:change.html.twig"));

        $__internal_1eb2ab5808e16da697d2fecda0bdce3d9e292308495b790cf1bec3d69e931472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb2ab5808e16da697d2fecda0bdce3d9e292308495b790cf1bec3d69e931472->enter($__internal_1eb2ab5808e16da697d2fecda0bdce3d9e292308495b790cf1bec3d69e931472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:change.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d261cf599249871586e1b18a83373bee881b1e25e8304f18803ec95497134c3->leave($__internal_2d261cf599249871586e1b18a83373bee881b1e25e8304f18803ec95497134c3_prof);

        
        $__internal_1eb2ab5808e16da697d2fecda0bdce3d9e292308495b790cf1bec3d69e931472->leave($__internal_1eb2ab5808e16da697d2fecda0bdce3d9e292308495b790cf1bec3d69e931472_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdadaa13ea60fca34dea74aa289b3a94b56702977c30a7071a0d1a58fd70f11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdadaa13ea60fca34dea74aa289b3a94b56702977c30a7071a0d1a58fd70f11f->enter($__internal_cdadaa13ea60fca34dea74aa289b3a94b56702977c30a7071a0d1a58fd70f11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c31f8d8267248194db5578a6c8cac982fb07fe5be313e8b92f47d7f6f8ef2827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31f8d8267248194db5578a6c8cac982fb07fe5be313e8b92f47d7f6f8ef2827->enter($__internal_c31f8d8267248194db5578a6c8cac982fb07fe5be313e8b92f47d7f6f8ef2827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Change Password";
        
        $__internal_c31f8d8267248194db5578a6c8cac982fb07fe5be313e8b92f47d7f6f8ef2827->leave($__internal_c31f8d8267248194db5578a6c8cac982fb07fe5be313e8b92f47d7f6f8ef2827_prof);

        
        $__internal_cdadaa13ea60fca34dea74aa289b3a94b56702977c30a7071a0d1a58fd70f11f->leave($__internal_cdadaa13ea60fca34dea74aa289b3a94b56702977c30a7071a0d1a58fd70f11f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3133558ba23612e45874daeddf5d5874269cbaa723134177704adb0bf2152527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3133558ba23612e45874daeddf5d5874269cbaa723134177704adb0bf2152527->enter($__internal_3133558ba23612e45874daeddf5d5874269cbaa723134177704adb0bf2152527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4574ef64a3560d43af0a4093937344d7cf7ea43bb38c898c06597b157cf94edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4574ef64a3560d43af0a4093937344d7cf7ea43bb38c898c06597b157cf94edb->enter($__internal_4574ef64a3560d43af0a4093937344d7cf7ea43bb38c898c06597b157cf94edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_4574ef64a3560d43af0a4093937344d7cf7ea43bb38c898c06597b157cf94edb->leave($__internal_4574ef64a3560d43af0a4093937344d7cf7ea43bb38c898c06597b157cf94edb_prof);

        
        $__internal_3133558ba23612e45874daeddf5d5874269cbaa723134177704adb0bf2152527->leave($__internal_3133558ba23612e45874daeddf5d5874269cbaa723134177704adb0bf2152527_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_dcee146ada6b808e1eb4dfab87916ae3920a81740b70c447b4fcc4d6c3bff670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcee146ada6b808e1eb4dfab87916ae3920a81740b70c447b4fcc4d6c3bff670->enter($__internal_dcee146ada6b808e1eb4dfab87916ae3920a81740b70c447b4fcc4d6c3bff670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2bbff01889db093520f066f6486072900cd6b43a294d06931038e635037fe11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbff01889db093520f066f6486072900cd6b43a294d06931038e635037fe11c->enter($__internal_2bbff01889db093520f066f6486072900cd6b43a294d06931038e635037fe11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"container\">

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-signin")));
        echo "
        <h3 class=\"form-signin-heading\">Change Your Password</h3>
        ";
        // line 13
        if ((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg"))) {
            // line 14
            echo "            <p>Notice: ";
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
            echo "</p>
        ";
        }
        // line 16
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <p>Username: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newPassword", array()), 'label', array("label" => "New Password"));
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "newPassword", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "New Password")));
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmPassword", array()), 'label', array("label" => "Confirm Password"));
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirmPassword", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirm Password")));
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-lg btn-primary btn-block")));
        echo "

        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_2bbff01889db093520f066f6486072900cd6b43a294d06931038e635037fe11c->leave($__internal_2bbff01889db093520f066f6486072900cd6b43a294d06931038e635037fe11c_prof);

        
        $__internal_dcee146ada6b808e1eb4dfab87916ae3920a81740b70c447b4fcc4d6c3bff670->leave($__internal_dcee146ada6b808e1eb4dfab87916ae3920a81740b70c447b4fcc4d6c3bff670_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:change.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 24,  137 => 22,  133 => 21,  129 => 20,  125 => 19,  121 => 18,  117 => 17,  112 => 16,  106 => 14,  104 => 13,  99 => 11,  95 => 9,  86 => 8,  74 => 6,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Change Password{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/app/css/signin.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block content %}
    <div class=\"container\">

        {{ form_start(form, {'attr':{'class':'form-signin'}}) }}
        <h3 class=\"form-signin-heading\">Change Your Password</h3>
        {% if (msg) %}
            <p>Notice: {{ msg }}</p>
        {% endif %}
        {{ form_errors(form) }}
        <p>Username: {{ app.user.username }}</p>
        {{ form_label(form.newPassword,'New Password') }}
        {{ form_widget(form.newPassword, {'attr':{'class':'form-control', 'placeholder':'New Password'}}) }}
        {{ form_label(form.confirmPassword,'Confirm Password') }}
        {{ form_widget(form.confirmPassword, {'attr':{'class':'form-control', 'placeholder':'Confirm Password'}}) }}
        {{ form_row(form.save, {'attr':{'class':'btn btn-lg btn-primary btn-block'}}) }}

        {{ form_end(form) }}
    </div>
{% endblock %}
", "AppBundle:User:change.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/User/change.html.twig");
    }
}
