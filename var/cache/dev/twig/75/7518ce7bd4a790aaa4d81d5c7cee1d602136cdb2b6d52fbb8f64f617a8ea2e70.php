<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_239d33d300abc6707f02b89ece7f9e920d827fd87fdba361fa1e2664a8dbcf29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8518b915d17c31d30c9cf81a79105b5f1dfccd749f235e215511fe5c760358c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8518b915d17c31d30c9cf81a79105b5f1dfccd749f235e215511fe5c760358c0->enter($__internal_8518b915d17c31d30c9cf81a79105b5f1dfccd749f235e215511fe5c760358c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cdf5ae7932afb4669317620e4e943780e6e5c60abbe56b9c6a010d83c4c1d883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf5ae7932afb4669317620e4e943780e6e5c60abbe56b9c6a010d83c4c1d883->enter($__internal_cdf5ae7932afb4669317620e4e943780e6e5c60abbe56b9c6a010d83c4c1d883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8518b915d17c31d30c9cf81a79105b5f1dfccd749f235e215511fe5c760358c0->leave($__internal_8518b915d17c31d30c9cf81a79105b5f1dfccd749f235e215511fe5c760358c0_prof);

        
        $__internal_cdf5ae7932afb4669317620e4e943780e6e5c60abbe56b9c6a010d83c4c1d883->leave($__internal_cdf5ae7932afb4669317620e4e943780e6e5c60abbe56b9c6a010d83c4c1d883_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_377898ac024b5506dc5d23b24f5ab1098a3f902553126e4fcc477fea5c225115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377898ac024b5506dc5d23b24f5ab1098a3f902553126e4fcc477fea5c225115->enter($__internal_377898ac024b5506dc5d23b24f5ab1098a3f902553126e4fcc477fea5c225115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39ed5afb3612e95787179a917957ea79aba226341e2d0096898afa2d550a1f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ed5afb3612e95787179a917957ea79aba226341e2d0096898afa2d550a1f5b->enter($__internal_39ed5afb3612e95787179a917957ea79aba226341e2d0096898afa2d550a1f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_39ed5afb3612e95787179a917957ea79aba226341e2d0096898afa2d550a1f5b->leave($__internal_39ed5afb3612e95787179a917957ea79aba226341e2d0096898afa2d550a1f5b_prof);

        
        $__internal_377898ac024b5506dc5d23b24f5ab1098a3f902553126e4fcc477fea5c225115->leave($__internal_377898ac024b5506dc5d23b24f5ab1098a3f902553126e4fcc477fea5c225115_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1528b0cf3a430a154cd4890ceb5bddf412a8dcdced42d679139263061a10f5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1528b0cf3a430a154cd4890ceb5bddf412a8dcdced42d679139263061a10f5eb->enter($__internal_1528b0cf3a430a154cd4890ceb5bddf412a8dcdced42d679139263061a10f5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5b3d13a61c473fda2a623d040890a89bcda1228d95952c9f4a1a9350f404e2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3d13a61c473fda2a623d040890a89bcda1228d95952c9f4a1a9350f404e2b8->enter($__internal_5b3d13a61c473fda2a623d040890a89bcda1228d95952c9f4a1a9350f404e2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5b3d13a61c473fda2a623d040890a89bcda1228d95952c9f4a1a9350f404e2b8->leave($__internal_5b3d13a61c473fda2a623d040890a89bcda1228d95952c9f4a1a9350f404e2b8_prof);

        
        $__internal_1528b0cf3a430a154cd4890ceb5bddf412a8dcdced42d679139263061a10f5eb->leave($__internal_1528b0cf3a430a154cd4890ceb5bddf412a8dcdced42d679139263061a10f5eb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cb9ed84be48d6911d1cfea667942baf1ba473ff44fae84986ae5c7ab35c9325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb9ed84be48d6911d1cfea667942baf1ba473ff44fae84986ae5c7ab35c9325->enter($__internal_7cb9ed84be48d6911d1cfea667942baf1ba473ff44fae84986ae5c7ab35c9325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a5eb1cb7b56dbac17ca1ae7849ebe2bac38717de0f0fb4f2598d30f1de16f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5eb1cb7b56dbac17ca1ae7849ebe2bac38717de0f0fb4f2598d30f1de16f05->enter($__internal_2a5eb1cb7b56dbac17ca1ae7849ebe2bac38717de0f0fb4f2598d30f1de16f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a5eb1cb7b56dbac17ca1ae7849ebe2bac38717de0f0fb4f2598d30f1de16f05->leave($__internal_2a5eb1cb7b56dbac17ca1ae7849ebe2bac38717de0f0fb4f2598d30f1de16f05_prof);

        
        $__internal_7cb9ed84be48d6911d1cfea667942baf1ba473ff44fae84986ae5c7ab35c9325->leave($__internal_7cb9ed84be48d6911d1cfea667942baf1ba473ff44fae84986ae5c7ab35c9325_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\xampp\\htdocs\\admin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
