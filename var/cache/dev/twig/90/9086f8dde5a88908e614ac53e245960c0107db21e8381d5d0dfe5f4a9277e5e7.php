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
        $__internal_c8ffd77856c145c82381503ece7a91bcfa86bf3700c9241f711afa6b4304a79c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ffd77856c145c82381503ece7a91bcfa86bf3700c9241f711afa6b4304a79c->enter($__internal_c8ffd77856c145c82381503ece7a91bcfa86bf3700c9241f711afa6b4304a79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:change.html.twig"));

        $__internal_b0d2929d9fc63980a022de7bd52a238104a5b60f553b954c39ddda1c6b1da59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d2929d9fc63980a022de7bd52a238104a5b60f553b954c39ddda1c6b1da59f->enter($__internal_b0d2929d9fc63980a022de7bd52a238104a5b60f553b954c39ddda1c6b1da59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:change.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8ffd77856c145c82381503ece7a91bcfa86bf3700c9241f711afa6b4304a79c->leave($__internal_c8ffd77856c145c82381503ece7a91bcfa86bf3700c9241f711afa6b4304a79c_prof);

        
        $__internal_b0d2929d9fc63980a022de7bd52a238104a5b60f553b954c39ddda1c6b1da59f->leave($__internal_b0d2929d9fc63980a022de7bd52a238104a5b60f553b954c39ddda1c6b1da59f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eab680be7d0314498c72be5b3ed6d8bce13aed25ec2b500d7a64ccc1e02e2243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab680be7d0314498c72be5b3ed6d8bce13aed25ec2b500d7a64ccc1e02e2243->enter($__internal_eab680be7d0314498c72be5b3ed6d8bce13aed25ec2b500d7a64ccc1e02e2243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3cfe16a60265384058fd465c2f6b73d0079bf8800ee92dce6eb79937dc3d9489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cfe16a60265384058fd465c2f6b73d0079bf8800ee92dce6eb79937dc3d9489->enter($__internal_3cfe16a60265384058fd465c2f6b73d0079bf8800ee92dce6eb79937dc3d9489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Change Password";
        
        $__internal_3cfe16a60265384058fd465c2f6b73d0079bf8800ee92dce6eb79937dc3d9489->leave($__internal_3cfe16a60265384058fd465c2f6b73d0079bf8800ee92dce6eb79937dc3d9489_prof);

        
        $__internal_eab680be7d0314498c72be5b3ed6d8bce13aed25ec2b500d7a64ccc1e02e2243->leave($__internal_eab680be7d0314498c72be5b3ed6d8bce13aed25ec2b500d7a64ccc1e02e2243_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ca04dc3f9778f916bc110af7cbb228fc3f3dd69813fc911f586a7b1f47b9bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca04dc3f9778f916bc110af7cbb228fc3f3dd69813fc911f586a7b1f47b9bec->enter($__internal_2ca04dc3f9778f916bc110af7cbb228fc3f3dd69813fc911f586a7b1f47b9bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_09497ee93713f89ea7ade562dd84ab16d9f3446bd83344591462cb697d1c6ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09497ee93713f89ea7ade562dd84ab16d9f3446bd83344591462cb697d1c6ec4->enter($__internal_09497ee93713f89ea7ade562dd84ab16d9f3446bd83344591462cb697d1c6ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_09497ee93713f89ea7ade562dd84ab16d9f3446bd83344591462cb697d1c6ec4->leave($__internal_09497ee93713f89ea7ade562dd84ab16d9f3446bd83344591462cb697d1c6ec4_prof);

        
        $__internal_2ca04dc3f9778f916bc110af7cbb228fc3f3dd69813fc911f586a7b1f47b9bec->leave($__internal_2ca04dc3f9778f916bc110af7cbb228fc3f3dd69813fc911f586a7b1f47b9bec_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_19f56b435a12bb457797995683f8edb3639a257bffc432f498dd8fc3083fc786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f56b435a12bb457797995683f8edb3639a257bffc432f498dd8fc3083fc786->enter($__internal_19f56b435a12bb457797995683f8edb3639a257bffc432f498dd8fc3083fc786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c27cfaa84092621ee31cf9eaa589a991d8e970e27953849bd6c39e0118cd47b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27cfaa84092621ee31cf9eaa589a991d8e970e27953849bd6c39e0118cd47b2->enter($__internal_c27cfaa84092621ee31cf9eaa589a991d8e970e27953849bd6c39e0118cd47b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_name"), "method"), "html", null, true);
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
        
        $__internal_c27cfaa84092621ee31cf9eaa589a991d8e970e27953849bd6c39e0118cd47b2->leave($__internal_c27cfaa84092621ee31cf9eaa589a991d8e970e27953849bd6c39e0118cd47b2_prof);

        
        $__internal_19f56b435a12bb457797995683f8edb3639a257bffc432f498dd8fc3083fc786->leave($__internal_19f56b435a12bb457797995683f8edb3639a257bffc432f498dd8fc3083fc786_prof);

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
        <p>Username: {{ app.session.get('user_name') }}</p>
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
