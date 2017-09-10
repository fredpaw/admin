<?php

/* AppBundle:User:login.html.twig */
class __TwigTemplate_df9bbe6e433e8dfeaa2f5e083e628cb0668f79aa8085f6bdd71f454fbe8dffa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e48e5950abd17d1fc0d042f9c771f0192068f55c40746248c769ae62ec0fd12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e48e5950abd17d1fc0d042f9c771f0192068f55c40746248c769ae62ec0fd12->enter($__internal_9e48e5950abd17d1fc0d042f9c771f0192068f55c40746248c769ae62ec0fd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $__internal_59cb519cd611e4217e996f16368c4295bbfc329fd3935e0ed3d15ca0e099e59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cb519cd611e4217e996f16368c4295bbfc329fd3935e0ed3d15ca0e099e59e->enter($__internal_59cb519cd611e4217e996f16368c4295bbfc329fd3935e0ed3d15ca0e099e59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e48e5950abd17d1fc0d042f9c771f0192068f55c40746248c769ae62ec0fd12->leave($__internal_9e48e5950abd17d1fc0d042f9c771f0192068f55c40746248c769ae62ec0fd12_prof);

        
        $__internal_59cb519cd611e4217e996f16368c4295bbfc329fd3935e0ed3d15ca0e099e59e->leave($__internal_59cb519cd611e4217e996f16368c4295bbfc329fd3935e0ed3d15ca0e099e59e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a19055f6d26ad1b5c570dd114d5782173ddaed0be3f0e37db7f0a07d74b6ce7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19055f6d26ad1b5c570dd114d5782173ddaed0be3f0e37db7f0a07d74b6ce7c->enter($__internal_a19055f6d26ad1b5c570dd114d5782173ddaed0be3f0e37db7f0a07d74b6ce7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_748e66a8c14dbc6eb3b930d94a35eae59f6807ce6ad64d07f77ed40cf0c40a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748e66a8c14dbc6eb3b930d94a35eae59f6807ce6ad64d07f77ed40cf0c40a57->enter($__internal_748e66a8c14dbc6eb3b930d94a35eae59f6807ce6ad64d07f77ed40cf0c40a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "System Login";
        
        $__internal_748e66a8c14dbc6eb3b930d94a35eae59f6807ce6ad64d07f77ed40cf0c40a57->leave($__internal_748e66a8c14dbc6eb3b930d94a35eae59f6807ce6ad64d07f77ed40cf0c40a57_prof);

        
        $__internal_a19055f6d26ad1b5c570dd114d5782173ddaed0be3f0e37db7f0a07d74b6ce7c->leave($__internal_a19055f6d26ad1b5c570dd114d5782173ddaed0be3f0e37db7f0a07d74b6ce7c_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_833627704401177bec0b88ff2c40e0a0d5e966518b6ade5d62c73aa8678eaff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833627704401177bec0b88ff2c40e0a0d5e966518b6ade5d62c73aa8678eaff5->enter($__internal_833627704401177bec0b88ff2c40e0a0d5e966518b6ade5d62c73aa8678eaff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8345b8030235739fccd97fb1c47d3e4c8ee708c010cf17b4635f163dad3b6f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8345b8030235739fccd97fb1c47d3e4c8ee708c010cf17b4635f163dad3b6f2a->enter($__internal_8345b8030235739fccd97fb1c47d3e4c8ee708c010cf17b4635f163dad3b6f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_8345b8030235739fccd97fb1c47d3e4c8ee708c010cf17b4635f163dad3b6f2a->leave($__internal_8345b8030235739fccd97fb1c47d3e4c8ee708c010cf17b4635f163dad3b6f2a_prof);

        
        $__internal_833627704401177bec0b88ff2c40e0a0d5e966518b6ade5d62c73aa8678eaff5->leave($__internal_833627704401177bec0b88ff2c40e0a0d5e966518b6ade5d62c73aa8678eaff5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_76a27416fb5a294c5818a92b13ee2f7bc364ef7a1958486c243c9306deaf5819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a27416fb5a294c5818a92b13ee2f7bc364ef7a1958486c243c9306deaf5819->enter($__internal_76a27416fb5a294c5818a92b13ee2f7bc364ef7a1958486c243c9306deaf5819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c80d298a6364b24ecab705c13d9b2150254dc8f2e18ab0bf6ba3b46d8f91f3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80d298a6364b24ecab705c13d9b2150254dc8f2e18ab0bf6ba3b46d8f91f3d2->enter($__internal_c80d298a6364b24ecab705c13d9b2150254dc8f2e18ab0bf6ba3b46d8f91f3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-signin")));
        echo "
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "sr-only"), "label" => "Username"));
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Username")));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "sr-only"), "label" => "Username"));
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password")));
        echo "
        ";
        // line 19
        echo "            ";
        // line 20
        echo "                ";
        // line 21
        echo "            ";
        // line 22
        echo "        ";
        // line 23
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-lg btn-primary btn-block")));
        echo "

        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_c80d298a6364b24ecab705c13d9b2150254dc8f2e18ab0bf6ba3b46d8f91f3d2->leave($__internal_c80d298a6364b24ecab705c13d9b2150254dc8f2e18ab0bf6ba3b46d8f91f3d2_prof);

        
        $__internal_76a27416fb5a294c5818a92b13ee2f7bc364ef7a1958486c243c9306deaf5819->leave($__internal_76a27416fb5a294c5818a92b13ee2f7bc364ef7a1958486c243c9306deaf5819_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87227c14ef9aa565860a61523b2405a8f8bbd7fe15c54eeb3f36db8471fbaa26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87227c14ef9aa565860a61523b2405a8f8bbd7fe15c54eeb3f36db8471fbaa26->enter($__internal_87227c14ef9aa565860a61523b2405a8f8bbd7fe15c54eeb3f36db8471fbaa26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_04a6e2bc5cf306fa3290e588000bec504062a08aad486676d572f9ffce1fb378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a6e2bc5cf306fa3290e588000bec504062a08aad486676d572f9ffce1fb378->enter($__internal_04a6e2bc5cf306fa3290e588000bec504062a08aad486676d572f9ffce1fb378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    <!-- Bootstrap core JavaScript
            ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_04a6e2bc5cf306fa3290e588000bec504062a08aad486676d572f9ffce1fb378->leave($__internal_04a6e2bc5cf306fa3290e588000bec504062a08aad486676d572f9ffce1fb378_prof);

        
        $__internal_87227c14ef9aa565860a61523b2405a8f8bbd7fe15c54eeb3f36db8471fbaa26->leave($__internal_87227c14ef9aa565860a61523b2405a8f8bbd7fe15c54eeb3f36db8471fbaa26_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 33,  161 => 29,  152 => 28,  139 => 25,  133 => 23,  131 => 22,  129 => 21,  127 => 20,  125 => 19,  121 => 17,  117 => 16,  113 => 15,  109 => 14,  105 => 13,  100 => 11,  96 => 9,  87 => 8,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}System Login{% endblock %}
{% block stylesheets %}
    <link href=\"{{ asset('bundles/app/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/signin.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
    <div class=\"container\">

        {{ form_start(form, {'attr':{'class':'form-signin'}}) }}
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        {{ form_errors(form) }}
        {{ form_label(form.username,'Username',{'label_attr':{'class':'sr-only'}}) }}
        {{ form_widget(form.username, {'attr':{'class':'form-control', 'placeholder':'Username'}}) }}
        {{ form_label(form.password,'Username',{'label_attr':{'class':'sr-only'}}) }}
        {{ form_widget(form.password, {'attr':{'class':'form-control', 'placeholder':'Password'}}) }}
        {#<div class=\"checkbox\">#}
            {#<label>#}
                {#{{ form_widget(form.cookie) }} {{ form.cookie.vars.label }}#}
            {#</label>#}
        {#</div>#}
        {{ form_row(form.submit, {'attr':{'class':'btn btn-lg btn-primary btn-block'}}) }}

        {{ form_end(form) }}
    </div>
{% endblock %}
{% block javascripts %}
    <!-- Bootstrap core JavaScript
            ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"{{ asset('bundles/app/js/ie10-viewport-bug-workaround.js') }}\"></script>
{% endblock %}
", "AppBundle:User:login.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/User/login.html.twig");
    }
}
