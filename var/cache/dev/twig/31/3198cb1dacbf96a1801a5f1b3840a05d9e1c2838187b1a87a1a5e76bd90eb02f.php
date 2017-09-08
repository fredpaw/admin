<?php

/* base.html.twig */
class __TwigTemplate_79edc3f4c1d0bf2b285c68f8d99e793c8175003b3194091f5cbe331b26eb8c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dadc02c65f1791b6e1e9354e721b4c0b0d3263fbd33db0c26ad470169072ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dadc02c65f1791b6e1e9354e721b4c0b0d3263fbd33db0c26ad470169072ef8->enter($__internal_4dadc02c65f1791b6e1e9354e721b4c0b0d3263fbd33db0c26ad470169072ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7afab77b467aa55fe109cde8720adca9e362f254ed1dbc31c21c2e0127a2dc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afab77b467aa55fe109cde8720adca9e362f254ed1dbc31c21c2e0127a2dc4e->enter($__internal_7afab77b467aa55fe109cde8720adca9e362f254ed1dbc31c21c2e0127a2dc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4dadc02c65f1791b6e1e9354e721b4c0b0d3263fbd33db0c26ad470169072ef8->leave($__internal_4dadc02c65f1791b6e1e9354e721b4c0b0d3263fbd33db0c26ad470169072ef8_prof);

        
        $__internal_7afab77b467aa55fe109cde8720adca9e362f254ed1dbc31c21c2e0127a2dc4e->leave($__internal_7afab77b467aa55fe109cde8720adca9e362f254ed1dbc31c21c2e0127a2dc4e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f75d9d19d0e8b62003d1400b36b09c4f84217dfd21fc5e70833ad388b1c2f0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75d9d19d0e8b62003d1400b36b09c4f84217dfd21fc5e70833ad388b1c2f0f3->enter($__internal_f75d9d19d0e8b62003d1400b36b09c4f84217dfd21fc5e70833ad388b1c2f0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88b69002eb74d26e5bdd09037ec353b760070335d5040937122564933eb41de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b69002eb74d26e5bdd09037ec353b760070335d5040937122564933eb41de2->enter($__internal_88b69002eb74d26e5bdd09037ec353b760070335d5040937122564933eb41de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_88b69002eb74d26e5bdd09037ec353b760070335d5040937122564933eb41de2->leave($__internal_88b69002eb74d26e5bdd09037ec353b760070335d5040937122564933eb41de2_prof);

        
        $__internal_f75d9d19d0e8b62003d1400b36b09c4f84217dfd21fc5e70833ad388b1c2f0f3->leave($__internal_f75d9d19d0e8b62003d1400b36b09c4f84217dfd21fc5e70833ad388b1c2f0f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98f0cf28963bc03127354a3e468e8fb8d70a62209515928542325e2d2c4279af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f0cf28963bc03127354a3e468e8fb8d70a62209515928542325e2d2c4279af->enter($__internal_98f0cf28963bc03127354a3e468e8fb8d70a62209515928542325e2d2c4279af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d5686133ffb6435719ccd55723bf79022babdee27685b717f59ada015f2a3915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5686133ffb6435719ccd55723bf79022babdee27685b717f59ada015f2a3915->enter($__internal_d5686133ffb6435719ccd55723bf79022babdee27685b717f59ada015f2a3915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d5686133ffb6435719ccd55723bf79022babdee27685b717f59ada015f2a3915->leave($__internal_d5686133ffb6435719ccd55723bf79022babdee27685b717f59ada015f2a3915_prof);

        
        $__internal_98f0cf28963bc03127354a3e468e8fb8d70a62209515928542325e2d2c4279af->leave($__internal_98f0cf28963bc03127354a3e468e8fb8d70a62209515928542325e2d2c4279af_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bffbb81285197b18353293b14b3bbd6e9d4a2a68ca3c8d1c094569e6b37f88d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bffbb81285197b18353293b14b3bbd6e9d4a2a68ca3c8d1c094569e6b37f88d2->enter($__internal_bffbb81285197b18353293b14b3bbd6e9d4a2a68ca3c8d1c094569e6b37f88d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cfcf77d8b094959b8e7e739a5e186e842321a9b4da509fb84852239ec33080c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfcf77d8b094959b8e7e739a5e186e842321a9b4da509fb84852239ec33080c1->enter($__internal_cfcf77d8b094959b8e7e739a5e186e842321a9b4da509fb84852239ec33080c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cfcf77d8b094959b8e7e739a5e186e842321a9b4da509fb84852239ec33080c1->leave($__internal_cfcf77d8b094959b8e7e739a5e186e842321a9b4da509fb84852239ec33080c1_prof);

        
        $__internal_bffbb81285197b18353293b14b3bbd6e9d4a2a68ca3c8d1c094569e6b37f88d2->leave($__internal_bffbb81285197b18353293b14b3bbd6e9d4a2a68ca3c8d1c094569e6b37f88d2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c2f2078637ba80c4f31682274f9846c0bf786e0858b6f406d9b77f0cd0ea8283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f2078637ba80c4f31682274f9846c0bf786e0858b6f406d9b77f0cd0ea8283->enter($__internal_c2f2078637ba80c4f31682274f9846c0bf786e0858b6f406d9b77f0cd0ea8283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7baac5c949707d5078de7d80331b5568277d1f75fd123be57641895e5224254d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7baac5c949707d5078de7d80331b5568277d1f75fd123be57641895e5224254d->enter($__internal_7baac5c949707d5078de7d80331b5568277d1f75fd123be57641895e5224254d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7baac5c949707d5078de7d80331b5568277d1f75fd123be57641895e5224254d->leave($__internal_7baac5c949707d5078de7d80331b5568277d1f75fd123be57641895e5224254d_prof);

        
        $__internal_c2f2078637ba80c4f31682274f9846c0bf786e0858b6f406d9b77f0cd0ea8283->leave($__internal_c2f2078637ba80c4f31682274f9846c0bf786e0858b6f406d9b77f0cd0ea8283_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\xampp\\htdocs\\admin\\app\\Resources\\views\\base.html.twig");
    }
}
