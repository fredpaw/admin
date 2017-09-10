<?php

/* AppBundle:User:change.html.twig */
class __TwigTemplate_2d48f5c71c6f41f9132c6fd05dbb3ad6eb565a641a191642a667add8045681c1 extends Twig_Template
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
        $__internal_3e3ed1a6acfc001ced9599f1dfc86ad82613609934753d44d618c0944b4e726a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3ed1a6acfc001ced9599f1dfc86ad82613609934753d44d618c0944b4e726a->enter($__internal_3e3ed1a6acfc001ced9599f1dfc86ad82613609934753d44d618c0944b4e726a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:change.html.twig"));

        $__internal_abe978b26ced5eb67eb3b5f86f1f4b6e9a596f386aa2b6183330e633443db513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe978b26ced5eb67eb3b5f86f1f4b6e9a596f386aa2b6183330e633443db513->enter($__internal_abe978b26ced5eb67eb3b5f86f1f4b6e9a596f386aa2b6183330e633443db513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:change.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e3ed1a6acfc001ced9599f1dfc86ad82613609934753d44d618c0944b4e726a->leave($__internal_3e3ed1a6acfc001ced9599f1dfc86ad82613609934753d44d618c0944b4e726a_prof);

        
        $__internal_abe978b26ced5eb67eb3b5f86f1f4b6e9a596f386aa2b6183330e633443db513->leave($__internal_abe978b26ced5eb67eb3b5f86f1f4b6e9a596f386aa2b6183330e633443db513_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_acf86467bd66df18bd60e3e1bc2f7b6b38c4ccd854b7a2f57d83b677dcb6dd23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf86467bd66df18bd60e3e1bc2f7b6b38c4ccd854b7a2f57d83b677dcb6dd23->enter($__internal_acf86467bd66df18bd60e3e1bc2f7b6b38c4ccd854b7a2f57d83b677dcb6dd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cdd9594ccc66f5ac2a9415d41ac36ab763462feb64b7b0d6bb9c9ebd2912cae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd9594ccc66f5ac2a9415d41ac36ab763462feb64b7b0d6bb9c9ebd2912cae0->enter($__internal_cdd9594ccc66f5ac2a9415d41ac36ab763462feb64b7b0d6bb9c9ebd2912cae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Change Password";
        
        $__internal_cdd9594ccc66f5ac2a9415d41ac36ab763462feb64b7b0d6bb9c9ebd2912cae0->leave($__internal_cdd9594ccc66f5ac2a9415d41ac36ab763462feb64b7b0d6bb9c9ebd2912cae0_prof);

        
        $__internal_acf86467bd66df18bd60e3e1bc2f7b6b38c4ccd854b7a2f57d83b677dcb6dd23->leave($__internal_acf86467bd66df18bd60e3e1bc2f7b6b38c4ccd854b7a2f57d83b677dcb6dd23_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b55c964e1ca6635188413d6f1a9a28c47ba8fcd843be31e903906a035560c6ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55c964e1ca6635188413d6f1a9a28c47ba8fcd843be31e903906a035560c6ad->enter($__internal_b55c964e1ca6635188413d6f1a9a28c47ba8fcd843be31e903906a035560c6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4232c66c1ec845358d074100b107526228429a7d1d99f41b6957da678d07dd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4232c66c1ec845358d074100b107526228429a7d1d99f41b6957da678d07dd48->enter($__internal_4232c66c1ec845358d074100b107526228429a7d1d99f41b6957da678d07dd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_4232c66c1ec845358d074100b107526228429a7d1d99f41b6957da678d07dd48->leave($__internal_4232c66c1ec845358d074100b107526228429a7d1d99f41b6957da678d07dd48_prof);

        
        $__internal_b55c964e1ca6635188413d6f1a9a28c47ba8fcd843be31e903906a035560c6ad->leave($__internal_b55c964e1ca6635188413d6f1a9a28c47ba8fcd843be31e903906a035560c6ad_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_774328e5cb497b6b630b2f974ce9565f6f8e3209767b43ce2e37117e8d29a660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774328e5cb497b6b630b2f974ce9565f6f8e3209767b43ce2e37117e8d29a660->enter($__internal_774328e5cb497b6b630b2f974ce9565f6f8e3209767b43ce2e37117e8d29a660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_df96dad6cd26335c0ce6085a16afd6b3e56dbf98453b0ebd11d861bca157537e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df96dad6cd26335c0ce6085a16afd6b3e56dbf98453b0ebd11d861bca157537e->enter($__internal_df96dad6cd26335c0ce6085a16afd6b3e56dbf98453b0ebd11d861bca157537e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"container\">

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-signin")));
        echo "
        <h3 class=\"form-signin-heading\">Change Your Password</h3>
        ";
        // line 13
        if (($context["msg"] ?? $this->getContext($context, "msg"))) {
            // line 14
            echo "            <p>Notice: ";
            echo twig_escape_filter($this->env, ($context["msg"] ?? $this->getContext($context, "msg")), "html", null, true);
            echo "</p>
        ";
        }
        // line 16
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        <p>Username: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_name"), "method"), "html", null, true);
        echo "</p>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "newPassword", array()), 'label', array("label" => "New Password"));
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "newPassword", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "New Password")));
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "confirmPassword", array()), 'label', array("label" => "Confirm Password"));
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "confirmPassword", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirm Password")));
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-lg btn-primary btn-block")));
        echo "

        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_df96dad6cd26335c0ce6085a16afd6b3e56dbf98453b0ebd11d861bca157537e->leave($__internal_df96dad6cd26335c0ce6085a16afd6b3e56dbf98453b0ebd11d861bca157537e_prof);

        
        $__internal_774328e5cb497b6b630b2f974ce9565f6f8e3209767b43ce2e37117e8d29a660->leave($__internal_774328e5cb497b6b630b2f974ce9565f6f8e3209767b43ce2e37117e8d29a660_prof);

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
