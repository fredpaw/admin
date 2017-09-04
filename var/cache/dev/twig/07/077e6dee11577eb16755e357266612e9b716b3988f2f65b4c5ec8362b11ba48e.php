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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bca98bff0974504e44121920331802dc98c180355e0e97492c461af3e125c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bca98bff0974504e44121920331802dc98c180355e0e97492c461af3e125c48->enter($__internal_5bca98bff0974504e44121920331802dc98c180355e0e97492c461af3e125c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $__internal_10cd0a8e4a757a445a786e371d69474241db9339179575bfd9b47648435daf38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cd0a8e4a757a445a786e371d69474241db9339179575bfd9b47648435daf38->enter($__internal_10cd0a8e4a757a445a786e371d69474241db9339179575bfd9b47648435daf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bca98bff0974504e44121920331802dc98c180355e0e97492c461af3e125c48->leave($__internal_5bca98bff0974504e44121920331802dc98c180355e0e97492c461af3e125c48_prof);

        
        $__internal_10cd0a8e4a757a445a786e371d69474241db9339179575bfd9b47648435daf38->leave($__internal_10cd0a8e4a757a445a786e371d69474241db9339179575bfd9b47648435daf38_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7294cbd9e071b6e58fb43b74b066061a13341395338fbf11a0bf5b56073fd7e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7294cbd9e071b6e58fb43b74b066061a13341395338fbf11a0bf5b56073fd7e9->enter($__internal_7294cbd9e071b6e58fb43b74b066061a13341395338fbf11a0bf5b56073fd7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b966f70f690ac70c9f367800922dd802ef1dba98e3ff3fac039fd2851eff874d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b966f70f690ac70c9f367800922dd802ef1dba98e3ff3fac039fd2851eff874d->enter($__internal_b966f70f690ac70c9f367800922dd802ef1dba98e3ff3fac039fd2851eff874d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:User:login";
        
        $__internal_b966f70f690ac70c9f367800922dd802ef1dba98e3ff3fac039fd2851eff874d->leave($__internal_b966f70f690ac70c9f367800922dd802ef1dba98e3ff3fac039fd2851eff874d_prof);

        
        $__internal_7294cbd9e071b6e58fb43b74b066061a13341395338fbf11a0bf5b56073fd7e9->leave($__internal_7294cbd9e071b6e58fb43b74b066061a13341395338fbf11a0bf5b56073fd7e9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7872178164824cefe1fe22ed4e977fc6688a5d9b460fc575c43897a17fb35173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7872178164824cefe1fe22ed4e977fc6688a5d9b460fc575c43897a17fb35173->enter($__internal_7872178164824cefe1fe22ed4e977fc6688a5d9b460fc575c43897a17fb35173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d854c5b1e016782bbbd9fdc537ef87f86be5ee9bb9cb5c04bcc4d2a68c8f1e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d854c5b1e016782bbbd9fdc537ef87f86be5ee9bb9cb5c04bcc4d2a68c8f1e2e->enter($__internal_d854c5b1e016782bbbd9fdc537ef87f86be5ee9bb9cb5c04bcc4d2a68c8f1e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the User:login page</h1>
";
        
        $__internal_d854c5b1e016782bbbd9fdc537ef87f86be5ee9bb9cb5c04bcc4d2a68c8f1e2e->leave($__internal_d854c5b1e016782bbbd9fdc537ef87f86be5ee9bb9cb5c04bcc4d2a68c8f1e2e_prof);

        
        $__internal_7872178164824cefe1fe22ed4e977fc6688a5d9b460fc575c43897a17fb35173->leave($__internal_7872178164824cefe1fe22ed4e977fc6688a5d9b460fc575c43897a17fb35173_prof);

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
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:User:login{% endblock %}

{% block body %}
<h1>Welcome to the User:login page</h1>
{% endblock %}
", "AppBundle:User:login.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/User/login.html.twig");
    }
}
