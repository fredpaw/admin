<?php

/* AppBundle:user:login.html.twig */
class __TwigTemplate_6afd511f8517a30b46db1879c773a9fa30a879ddc011f88e60f5611076e51bcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:user:login.html.twig", 1);
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
        $__internal_ed4425a4c6a680839de12886a222373a93a1a1186bd3ccb02ad6f526c747b0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed4425a4c6a680839de12886a222373a93a1a1186bd3ccb02ad6f526c747b0c5->enter($__internal_ed4425a4c6a680839de12886a222373a93a1a1186bd3ccb02ad6f526c747b0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:login.html.twig"));

        $__internal_65b80e3b278b087f00a3ab51057a70b501d4b97cf161c8902758b2592115b693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b80e3b278b087f00a3ab51057a70b501d4b97cf161c8902758b2592115b693->enter($__internal_65b80e3b278b087f00a3ab51057a70b501d4b97cf161c8902758b2592115b693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed4425a4c6a680839de12886a222373a93a1a1186bd3ccb02ad6f526c747b0c5->leave($__internal_ed4425a4c6a680839de12886a222373a93a1a1186bd3ccb02ad6f526c747b0c5_prof);

        
        $__internal_65b80e3b278b087f00a3ab51057a70b501d4b97cf161c8902758b2592115b693->leave($__internal_65b80e3b278b087f00a3ab51057a70b501d4b97cf161c8902758b2592115b693_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d738d475a6579402b8762e5bd4fc436bfe366098e595610dbf8f7ffa0feef50e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d738d475a6579402b8762e5bd4fc436bfe366098e595610dbf8f7ffa0feef50e->enter($__internal_d738d475a6579402b8762e5bd4fc436bfe366098e595610dbf8f7ffa0feef50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe24431b5f6b62bc6bd3c3735b3bb1672765b529bcae3381d7d968e5da3d896d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe24431b5f6b62bc6bd3c3735b3bb1672765b529bcae3381d7d968e5da3d896d->enter($__internal_fe24431b5f6b62bc6bd3c3735b3bb1672765b529bcae3381d7d968e5da3d896d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:User:login";
        
        $__internal_fe24431b5f6b62bc6bd3c3735b3bb1672765b529bcae3381d7d968e5da3d896d->leave($__internal_fe24431b5f6b62bc6bd3c3735b3bb1672765b529bcae3381d7d968e5da3d896d_prof);

        
        $__internal_d738d475a6579402b8762e5bd4fc436bfe366098e595610dbf8f7ffa0feef50e->leave($__internal_d738d475a6579402b8762e5bd4fc436bfe366098e595610dbf8f7ffa0feef50e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed8887537501d334192bd0e7d6fb6577cf3294f30fa7877208cbeff8ffa7f61e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8887537501d334192bd0e7d6fb6577cf3294f30fa7877208cbeff8ffa7f61e->enter($__internal_ed8887537501d334192bd0e7d6fb6577cf3294f30fa7877208cbeff8ffa7f61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b15a05df25682ff4e2ff298d6168c80eab05386dd11614fbea2e30dc1eac3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b15a05df25682ff4e2ff298d6168c80eab05386dd11614fbea2e30dc1eac3bb->enter($__internal_7b15a05df25682ff4e2ff298d6168c80eab05386dd11614fbea2e30dc1eac3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the User:login page</h1>
";
        
        $__internal_7b15a05df25682ff4e2ff298d6168c80eab05386dd11614fbea2e30dc1eac3bb->leave($__internal_7b15a05df25682ff4e2ff298d6168c80eab05386dd11614fbea2e30dc1eac3bb_prof);

        
        $__internal_ed8887537501d334192bd0e7d6fb6577cf3294f30fa7877208cbeff8ffa7f61e->leave($__internal_ed8887537501d334192bd0e7d6fb6577cf3294f30fa7877208cbeff8ffa7f61e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user:login.html.twig";
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
", "AppBundle:user:login.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/user/login.html.twig");
    }
}
