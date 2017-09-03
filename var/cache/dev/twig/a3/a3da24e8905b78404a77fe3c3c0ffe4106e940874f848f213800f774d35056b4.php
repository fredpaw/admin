<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
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
        $__internal_d39d8421394174f4007bf80485b69c8f1b318506ddfd3a08d56c6197a97ad448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39d8421394174f4007bf80485b69c8f1b318506ddfd3a08d56c6197a97ad448->enter($__internal_d39d8421394174f4007bf80485b69c8f1b318506ddfd3a08d56c6197a97ad448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9a29072a25d151a1ddf41952067aadc106bfaf48a408ca1f88d6c494f6f5d530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a29072a25d151a1ddf41952067aadc106bfaf48a408ca1f88d6c494f6f5d530->enter($__internal_9a29072a25d151a1ddf41952067aadc106bfaf48a408ca1f88d6c494f6f5d530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d39d8421394174f4007bf80485b69c8f1b318506ddfd3a08d56c6197a97ad448->leave($__internal_d39d8421394174f4007bf80485b69c8f1b318506ddfd3a08d56c6197a97ad448_prof);

        
        $__internal_9a29072a25d151a1ddf41952067aadc106bfaf48a408ca1f88d6c494f6f5d530->leave($__internal_9a29072a25d151a1ddf41952067aadc106bfaf48a408ca1f88d6c494f6f5d530_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d376703e709c85d436ab45bf8d53fa4275baf5e854a396a9aedf0fc4e626911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d376703e709c85d436ab45bf8d53fa4275baf5e854a396a9aedf0fc4e626911->enter($__internal_2d376703e709c85d436ab45bf8d53fa4275baf5e854a396a9aedf0fc4e626911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12c3e79d793d593de4fec983013a61b1720d24622d7cb7b9281f5e35c8d3f6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c3e79d793d593de4fec983013a61b1720d24622d7cb7b9281f5e35c8d3f6a4->enter($__internal_12c3e79d793d593de4fec983013a61b1720d24622d7cb7b9281f5e35c8d3f6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_12c3e79d793d593de4fec983013a61b1720d24622d7cb7b9281f5e35c8d3f6a4->leave($__internal_12c3e79d793d593de4fec983013a61b1720d24622d7cb7b9281f5e35c8d3f6a4_prof);

        
        $__internal_2d376703e709c85d436ab45bf8d53fa4275baf5e854a396a9aedf0fc4e626911->leave($__internal_2d376703e709c85d436ab45bf8d53fa4275baf5e854a396a9aedf0fc4e626911_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02ed6d767d42846cb0924cfc93c105824a8297b6506efd67c69d60d29b27e6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ed6d767d42846cb0924cfc93c105824a8297b6506efd67c69d60d29b27e6e0->enter($__internal_02ed6d767d42846cb0924cfc93c105824a8297b6506efd67c69d60d29b27e6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e2087cbd36bdebf4ecf6768a7618de7e7dc082354cefc46d4121605c39cc4130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2087cbd36bdebf4ecf6768a7618de7e7dc082354cefc46d4121605c39cc4130->enter($__internal_e2087cbd36bdebf4ecf6768a7618de7e7dc082354cefc46d4121605c39cc4130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e2087cbd36bdebf4ecf6768a7618de7e7dc082354cefc46d4121605c39cc4130->leave($__internal_e2087cbd36bdebf4ecf6768a7618de7e7dc082354cefc46d4121605c39cc4130_prof);

        
        $__internal_02ed6d767d42846cb0924cfc93c105824a8297b6506efd67c69d60d29b27e6e0->leave($__internal_02ed6d767d42846cb0924cfc93c105824a8297b6506efd67c69d60d29b27e6e0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f39887847a9074a636828cc69dc386e2193637d4094c1d3cea0e00b8cc2ce02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f39887847a9074a636828cc69dc386e2193637d4094c1d3cea0e00b8cc2ce02->enter($__internal_1f39887847a9074a636828cc69dc386e2193637d4094c1d3cea0e00b8cc2ce02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec1f8e5866e43e472cec64e0cc511982541c3f79c605fd438e6dcd8e177ef458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1f8e5866e43e472cec64e0cc511982541c3f79c605fd438e6dcd8e177ef458->enter($__internal_ec1f8e5866e43e472cec64e0cc511982541c3f79c605fd438e6dcd8e177ef458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec1f8e5866e43e472cec64e0cc511982541c3f79c605fd438e6dcd8e177ef458->leave($__internal_ec1f8e5866e43e472cec64e0cc511982541c3f79c605fd438e6dcd8e177ef458_prof);

        
        $__internal_1f39887847a9074a636828cc69dc386e2193637d4094c1d3cea0e00b8cc2ce02->leave($__internal_1f39887847a9074a636828cc69dc386e2193637d4094c1d3cea0e00b8cc2ce02_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40e099955aaeb4d4ccf61494e65ce2d9f267c6a5a61b737df9b7b065d49c352b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e099955aaeb4d4ccf61494e65ce2d9f267c6a5a61b737df9b7b065d49c352b->enter($__internal_40e099955aaeb4d4ccf61494e65ce2d9f267c6a5a61b737df9b7b065d49c352b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2c6227d8c9295d908968268b08dda3264cfddb13fc2d5525f3eedfe78bf47778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6227d8c9295d908968268b08dda3264cfddb13fc2d5525f3eedfe78bf47778->enter($__internal_2c6227d8c9295d908968268b08dda3264cfddb13fc2d5525f3eedfe78bf47778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2c6227d8c9295d908968268b08dda3264cfddb13fc2d5525f3eedfe78bf47778->leave($__internal_2c6227d8c9295d908968268b08dda3264cfddb13fc2d5525f3eedfe78bf47778_prof);

        
        $__internal_40e099955aaeb4d4ccf61494e65ce2d9f267c6a5a61b737df9b7b065d49c352b->leave($__internal_40e099955aaeb4d4ccf61494e65ce2d9f267c6a5a61b737df9b7b065d49c352b_prof);

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
