<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
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
        $__internal_3a5b54567bb59a61cc1e78c8a8a9fec9463be11a98676103b48d4992167737c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5b54567bb59a61cc1e78c8a8a9fec9463be11a98676103b48d4992167737c6->enter($__internal_3a5b54567bb59a61cc1e78c8a8a9fec9463be11a98676103b48d4992167737c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_dadd103311ccf7339e704ab6f01af82a94119190439d9836a236919d66274ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadd103311ccf7339e704ab6f01af82a94119190439d9836a236919d66274ed4->enter($__internal_dadd103311ccf7339e704ab6f01af82a94119190439d9836a236919d66274ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3a5b54567bb59a61cc1e78c8a8a9fec9463be11a98676103b48d4992167737c6->leave($__internal_3a5b54567bb59a61cc1e78c8a8a9fec9463be11a98676103b48d4992167737c6_prof);

        
        $__internal_dadd103311ccf7339e704ab6f01af82a94119190439d9836a236919d66274ed4->leave($__internal_dadd103311ccf7339e704ab6f01af82a94119190439d9836a236919d66274ed4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c50c77066f1936a5f7dc479063e6f6212d63ba1f075923ae2a37c4f4b2819b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c50c77066f1936a5f7dc479063e6f6212d63ba1f075923ae2a37c4f4b2819b2->enter($__internal_1c50c77066f1936a5f7dc479063e6f6212d63ba1f075923ae2a37c4f4b2819b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3c09ffe619e5061b0c912d1b7529a1d05988a5118b88bc8b1de8fc590fa9e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c09ffe619e5061b0c912d1b7529a1d05988a5118b88bc8b1de8fc590fa9e67->enter($__internal_c3c09ffe619e5061b0c912d1b7529a1d05988a5118b88bc8b1de8fc590fa9e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c3c09ffe619e5061b0c912d1b7529a1d05988a5118b88bc8b1de8fc590fa9e67->leave($__internal_c3c09ffe619e5061b0c912d1b7529a1d05988a5118b88bc8b1de8fc590fa9e67_prof);

        
        $__internal_1c50c77066f1936a5f7dc479063e6f6212d63ba1f075923ae2a37c4f4b2819b2->leave($__internal_1c50c77066f1936a5f7dc479063e6f6212d63ba1f075923ae2a37c4f4b2819b2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9fcbf2846ca26d0d24d8861e4467760c5abd1ccd89cf251369544b714bb97ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fcbf2846ca26d0d24d8861e4467760c5abd1ccd89cf251369544b714bb97ff4->enter($__internal_9fcbf2846ca26d0d24d8861e4467760c5abd1ccd89cf251369544b714bb97ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_efda3605bb29f6e4915d5d9a0e2b413d64f7b52852731576e05c60056ad7f4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efda3605bb29f6e4915d5d9a0e2b413d64f7b52852731576e05c60056ad7f4a3->enter($__internal_efda3605bb29f6e4915d5d9a0e2b413d64f7b52852731576e05c60056ad7f4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_efda3605bb29f6e4915d5d9a0e2b413d64f7b52852731576e05c60056ad7f4a3->leave($__internal_efda3605bb29f6e4915d5d9a0e2b413d64f7b52852731576e05c60056ad7f4a3_prof);

        
        $__internal_9fcbf2846ca26d0d24d8861e4467760c5abd1ccd89cf251369544b714bb97ff4->leave($__internal_9fcbf2846ca26d0d24d8861e4467760c5abd1ccd89cf251369544b714bb97ff4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_50df641834b58c7a5e042312aec099e7783529cad07ecda737557a8a8783afd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50df641834b58c7a5e042312aec099e7783529cad07ecda737557a8a8783afd0->enter($__internal_50df641834b58c7a5e042312aec099e7783529cad07ecda737557a8a8783afd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45f4bc016c607fad7023989fc51b9172efeafb04371f0655666f5611901c64c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f4bc016c607fad7023989fc51b9172efeafb04371f0655666f5611901c64c1->enter($__internal_45f4bc016c607fad7023989fc51b9172efeafb04371f0655666f5611901c64c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_45f4bc016c607fad7023989fc51b9172efeafb04371f0655666f5611901c64c1->leave($__internal_45f4bc016c607fad7023989fc51b9172efeafb04371f0655666f5611901c64c1_prof);

        
        $__internal_50df641834b58c7a5e042312aec099e7783529cad07ecda737557a8a8783afd0->leave($__internal_50df641834b58c7a5e042312aec099e7783529cad07ecda737557a8a8783afd0_prof);

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
