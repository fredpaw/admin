<?php

/* AppBundle:User:login.html.twig */
class __TwigTemplate_7498b20450d07f766a5af75dbfe89030ce009a49acf3ef89eb53e1c84ecd7dd0 extends Twig_Template
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
        $__internal_d0079b7afb95eac44e187f48a2840f867ac87019e252b1476a0f80d8a3dfdc94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0079b7afb95eac44e187f48a2840f867ac87019e252b1476a0f80d8a3dfdc94->enter($__internal_d0079b7afb95eac44e187f48a2840f867ac87019e252b1476a0f80d8a3dfdc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $__internal_08bcce56c29bf1d82e0c3c223bc31ef326052d356bee280a7ac0affad8167330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bcce56c29bf1d82e0c3c223bc31ef326052d356bee280a7ac0affad8167330->enter($__internal_08bcce56c29bf1d82e0c3c223bc31ef326052d356bee280a7ac0affad8167330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0079b7afb95eac44e187f48a2840f867ac87019e252b1476a0f80d8a3dfdc94->leave($__internal_d0079b7afb95eac44e187f48a2840f867ac87019e252b1476a0f80d8a3dfdc94_prof);

        
        $__internal_08bcce56c29bf1d82e0c3c223bc31ef326052d356bee280a7ac0affad8167330->leave($__internal_08bcce56c29bf1d82e0c3c223bc31ef326052d356bee280a7ac0affad8167330_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ffdf51affafd237db70b773bf140a24474bdb660f7a21f6ec91120ec406676b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffdf51affafd237db70b773bf140a24474bdb660f7a21f6ec91120ec406676b->enter($__internal_2ffdf51affafd237db70b773bf140a24474bdb660f7a21f6ec91120ec406676b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6b31beccb1ce9b1efb93bdd31c65a9e2f376adccf596a2327eac4834f7479c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b31beccb1ce9b1efb93bdd31c65a9e2f376adccf596a2327eac4834f7479c5->enter($__internal_f6b31beccb1ce9b1efb93bdd31c65a9e2f376adccf596a2327eac4834f7479c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "System Login";
        
        $__internal_f6b31beccb1ce9b1efb93bdd31c65a9e2f376adccf596a2327eac4834f7479c5->leave($__internal_f6b31beccb1ce9b1efb93bdd31c65a9e2f376adccf596a2327eac4834f7479c5_prof);

        
        $__internal_2ffdf51affafd237db70b773bf140a24474bdb660f7a21f6ec91120ec406676b->leave($__internal_2ffdf51affafd237db70b773bf140a24474bdb660f7a21f6ec91120ec406676b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f59a0fbe77c479a05a96ed42378d48fbd76f6c6fb61cd4c85f1e491df22ab182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59a0fbe77c479a05a96ed42378d48fbd76f6c6fb61cd4c85f1e491df22ab182->enter($__internal_f59a0fbe77c479a05a96ed42378d48fbd76f6c6fb61cd4c85f1e491df22ab182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4e37c478c8048610755bb16c9e4698f025930333dbbf8350ce216a8bf1c73e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e37c478c8048610755bb16c9e4698f025930333dbbf8350ce216a8bf1c73e3c->enter($__internal_4e37c478c8048610755bb16c9e4698f025930333dbbf8350ce216a8bf1c73e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_4e37c478c8048610755bb16c9e4698f025930333dbbf8350ce216a8bf1c73e3c->leave($__internal_4e37c478c8048610755bb16c9e4698f025930333dbbf8350ce216a8bf1c73e3c_prof);

        
        $__internal_f59a0fbe77c479a05a96ed42378d48fbd76f6c6fb61cd4c85f1e491df22ab182->leave($__internal_f59a0fbe77c479a05a96ed42378d48fbd76f6c6fb61cd4c85f1e491df22ab182_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b180cfdc73584edfffb3b131150e246b81d86c72eb76764fb4ab2644174cfb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b180cfdc73584edfffb3b131150e246b81d86c72eb76764fb4ab2644174cfb0->enter($__internal_0b180cfdc73584edfffb3b131150e246b81d86c72eb76764fb4ab2644174cfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e89403a321822f27729e98686a0bd9c92a8cbca48cb16535d0b0d05a78a48e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e89403a321822f27729e98686a0bd9c92a8cbca48cb16535d0b0d05a78a48e6->enter($__internal_7e89403a321822f27729e98686a0bd9c92a8cbca48cb16535d0b0d05a78a48e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-signin")));
        echo "
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "sr-only"), "label" => "Username"));
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Username")));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "sr-only"), "label" => "Username"));
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-lg btn-primary btn-block")));
        echo "

        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_7e89403a321822f27729e98686a0bd9c92a8cbca48cb16535d0b0d05a78a48e6->leave($__internal_7e89403a321822f27729e98686a0bd9c92a8cbca48cb16535d0b0d05a78a48e6_prof);

        
        $__internal_0b180cfdc73584edfffb3b131150e246b81d86c72eb76764fb4ab2644174cfb0->leave($__internal_0b180cfdc73584edfffb3b131150e246b81d86c72eb76764fb4ab2644174cfb0_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c99bfcabb459af16e1e1578d31ef15638194bacfbcd50fb081cdf078b2f73be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c99bfcabb459af16e1e1578d31ef15638194bacfbcd50fb081cdf078b2f73be->enter($__internal_9c99bfcabb459af16e1e1578d31ef15638194bacfbcd50fb081cdf078b2f73be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5be151e52b012a7e9043e8164e01daf082a920dda66c0782bdf4db9427ed2d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be151e52b012a7e9043e8164e01daf082a920dda66c0782bdf4db9427ed2d50->enter($__internal_5be151e52b012a7e9043e8164e01daf082a920dda66c0782bdf4db9427ed2d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5be151e52b012a7e9043e8164e01daf082a920dda66c0782bdf4db9427ed2d50->leave($__internal_5be151e52b012a7e9043e8164e01daf082a920dda66c0782bdf4db9427ed2d50_prof);

        
        $__internal_9c99bfcabb459af16e1e1578d31ef15638194bacfbcd50fb081cdf078b2f73be->leave($__internal_9c99bfcabb459af16e1e1578d31ef15638194bacfbcd50fb081cdf078b2f73be_prof);

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
