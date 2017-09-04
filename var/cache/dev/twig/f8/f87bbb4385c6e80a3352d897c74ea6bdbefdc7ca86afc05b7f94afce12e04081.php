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
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7068d4c369aa16142dd09f2fdd199e43cf4eba1e7a1dc171a0080f4d953a7cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7068d4c369aa16142dd09f2fdd199e43cf4eba1e7a1dc171a0080f4d953a7cf3->enter($__internal_7068d4c369aa16142dd09f2fdd199e43cf4eba1e7a1dc171a0080f4d953a7cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $__internal_df62bea6d89383d68efb69e704a471dc5b2ffe02e2a7962c5c2cb8feb9fd8cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df62bea6d89383d68efb69e704a471dc5b2ffe02e2a7962c5c2cb8feb9fd8cc2->enter($__internal_df62bea6d89383d68efb69e704a471dc5b2ffe02e2a7962c5c2cb8feb9fd8cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7068d4c369aa16142dd09f2fdd199e43cf4eba1e7a1dc171a0080f4d953a7cf3->leave($__internal_7068d4c369aa16142dd09f2fdd199e43cf4eba1e7a1dc171a0080f4d953a7cf3_prof);

        
        $__internal_df62bea6d89383d68efb69e704a471dc5b2ffe02e2a7962c5c2cb8feb9fd8cc2->leave($__internal_df62bea6d89383d68efb69e704a471dc5b2ffe02e2a7962c5c2cb8feb9fd8cc2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f8c9bcbf61018b276c5ecc475a8e9dedb3fa8312db06bfdbc6d44f18936325d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8c9bcbf61018b276c5ecc475a8e9dedb3fa8312db06bfdbc6d44f18936325d->enter($__internal_3f8c9bcbf61018b276c5ecc475a8e9dedb3fa8312db06bfdbc6d44f18936325d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbc7d3e86c1f873dedc2de9a0a16b81a4dcfe669e67f50550246437f386f5df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc7d3e86c1f873dedc2de9a0a16b81a4dcfe669e67f50550246437f386f5df3->enter($__internal_dbc7d3e86c1f873dedc2de9a0a16b81a4dcfe669e67f50550246437f386f5df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "System Login";
        
        $__internal_dbc7d3e86c1f873dedc2de9a0a16b81a4dcfe669e67f50550246437f386f5df3->leave($__internal_dbc7d3e86c1f873dedc2de9a0a16b81a4dcfe669e67f50550246437f386f5df3_prof);

        
        $__internal_3f8c9bcbf61018b276c5ecc475a8e9dedb3fa8312db06bfdbc6d44f18936325d->leave($__internal_3f8c9bcbf61018b276c5ecc475a8e9dedb3fa8312db06bfdbc6d44f18936325d_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1848c2eb5a4dbac6ca8c8b502ec440a23d48fe7070315f8d4a2182a9f5e01cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1848c2eb5a4dbac6ca8c8b502ec440a23d48fe7070315f8d4a2182a9f5e01cae->enter($__internal_1848c2eb5a4dbac6ca8c8b502ec440a23d48fe7070315f8d4a2182a9f5e01cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_841ce591b2a13112514558d678cefc1233d01a548e05c5501ed7010f45144c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841ce591b2a13112514558d678cefc1233d01a548e05c5501ed7010f45144c65->enter($__internal_841ce591b2a13112514558d678cefc1233d01a548e05c5501ed7010f45144c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"css/signin.css\" rel=\"stylesheet\">
";
        
        $__internal_841ce591b2a13112514558d678cefc1233d01a548e05c5501ed7010f45144c65->leave($__internal_841ce591b2a13112514558d678cefc1233d01a548e05c5501ed7010f45144c65_prof);

        
        $__internal_1848c2eb5a4dbac6ca8c8b502ec440a23d48fe7070315f8d4a2182a9f5e01cae->leave($__internal_1848c2eb5a4dbac6ca8c8b502ec440a23d48fe7070315f8d4a2182a9f5e01cae_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6428a2d214aae279e9a71e1381482b78b2197d487042ccb7f854bcf00d277750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6428a2d214aae279e9a71e1381482b78b2197d487042ccb7f854bcf00d277750->enter($__internal_6428a2d214aae279e9a71e1381482b78b2197d487042ccb7f854bcf00d277750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ba2d075bb8e01e8fab9ff92d28cbfd926a91fbec1b008188bfe9d17f8d09618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba2d075bb8e01e8fab9ff92d28cbfd926a91fbec1b008188bfe9d17f8d09618->enter($__internal_8ba2d075bb8e01e8fab9ff92d28cbfd926a91fbec1b008188bfe9d17f8d09618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">

        <form class=\"form-signin\" method=\"post\" action=\"/login\">
            <h2 class=\"form-signin-heading\">Please sign in</h2>
            <label for=\"inputUsername\" class=\"sr-only\">Username</label>
            <input type=\"text\" id=\"inputUsername\" class=\"form-control\" placeholder=\"Username\" required=\"\" autofocus=\"\">
            <label for=\"inputPassword\" class=\"sr-only\">Password</label>
            <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required=\"\">
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" value=\"remember-me\"> Remember me
                </label>
            </div>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
        </form>

    </div> <!-- /container -->
";
        
        $__internal_8ba2d075bb8e01e8fab9ff92d28cbfd926a91fbec1b008188bfe9d17f8d09618->leave($__internal_8ba2d075bb8e01e8fab9ff92d28cbfd926a91fbec1b008188bfe9d17f8d09618_prof);

        
        $__internal_6428a2d214aae279e9a71e1381482b78b2197d487042ccb7f854bcf00d277750->leave($__internal_6428a2d214aae279e9a71e1381482b78b2197d487042ccb7f854bcf00d277750_prof);

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
        return array (  89 => 8,  80 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
    <link href=\"css/signin.css\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
    <div class=\"container\">

        <form class=\"form-signin\" method=\"post\" action=\"/login\">
            <h2 class=\"form-signin-heading\">Please sign in</h2>
            <label for=\"inputUsername\" class=\"sr-only\">Username</label>
            <input type=\"text\" id=\"inputUsername\" class=\"form-control\" placeholder=\"Username\" required=\"\" autofocus=\"\">
            <label for=\"inputPassword\" class=\"sr-only\">Password</label>
            <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required=\"\">
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" value=\"remember-me\"> Remember me
                </label>
            </div>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
        </form>

    </div> <!-- /container -->
{% endblock %}
", "AppBundle:User:login.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/User/login.html.twig");
    }
}
