<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_3e93d2c82efcb60f9380877ffcefce28f2a77c2c87f77709385aa67a8de48a0d extends Twig_Template
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
        $__internal_87e3c88ee4fe1a49425f38d10dfec64247d0b5df6a530cb37cda16754c947328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e3c88ee4fe1a49425f38d10dfec64247d0b5df6a530cb37cda16754c947328->enter($__internal_87e3c88ee4fe1a49425f38d10dfec64247d0b5df6a530cb37cda16754c947328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_600e2cd80391cb31594fded3cfea69beb6c9941d75530be03be03333eac22eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600e2cd80391cb31594fded3cfea69beb6c9941d75530be03be03333eac22eb2->enter($__internal_600e2cd80391cb31594fded3cfea69beb6c9941d75530be03be03333eac22eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_87e3c88ee4fe1a49425f38d10dfec64247d0b5df6a530cb37cda16754c947328->leave($__internal_87e3c88ee4fe1a49425f38d10dfec64247d0b5df6a530cb37cda16754c947328_prof);

        
        $__internal_600e2cd80391cb31594fded3cfea69beb6c9941d75530be03be03333eac22eb2->leave($__internal_600e2cd80391cb31594fded3cfea69beb6c9941d75530be03be03333eac22eb2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4fc07e8a474043e70ce934a4816bd2cc24681745ff76b830b6c5a286ba36b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fc07e8a474043e70ce934a4816bd2cc24681745ff76b830b6c5a286ba36b65->enter($__internal_a4fc07e8a474043e70ce934a4816bd2cc24681745ff76b830b6c5a286ba36b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ef5fe86efe5f75ebd8e22e8335f018bb25441d10e851208bcb930b13df73bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef5fe86efe5f75ebd8e22e8335f018bb25441d10e851208bcb930b13df73bee->enter($__internal_4ef5fe86efe5f75ebd8e22e8335f018bb25441d10e851208bcb930b13df73bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4ef5fe86efe5f75ebd8e22e8335f018bb25441d10e851208bcb930b13df73bee->leave($__internal_4ef5fe86efe5f75ebd8e22e8335f018bb25441d10e851208bcb930b13df73bee_prof);

        
        $__internal_a4fc07e8a474043e70ce934a4816bd2cc24681745ff76b830b6c5a286ba36b65->leave($__internal_a4fc07e8a474043e70ce934a4816bd2cc24681745ff76b830b6c5a286ba36b65_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_82dbb1529afa8ba1e74ba3082431e83d1a9448d6b36ee40b9a7ee6648b55cf4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82dbb1529afa8ba1e74ba3082431e83d1a9448d6b36ee40b9a7ee6648b55cf4d->enter($__internal_82dbb1529afa8ba1e74ba3082431e83d1a9448d6b36ee40b9a7ee6648b55cf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91d25e1789626fa927c30760ef3e4e48b267c870149a39cc940471e31c373df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d25e1789626fa927c30760ef3e4e48b267c870149a39cc940471e31c373df7->enter($__internal_91d25e1789626fa927c30760ef3e4e48b267c870149a39cc940471e31c373df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_91d25e1789626fa927c30760ef3e4e48b267c870149a39cc940471e31c373df7->leave($__internal_91d25e1789626fa927c30760ef3e4e48b267c870149a39cc940471e31c373df7_prof);

        
        $__internal_82dbb1529afa8ba1e74ba3082431e83d1a9448d6b36ee40b9a7ee6648b55cf4d->leave($__internal_82dbb1529afa8ba1e74ba3082431e83d1a9448d6b36ee40b9a7ee6648b55cf4d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_252552448d69aae88552c8e7201ab0993d86341d0461f6a11e62217e757b81da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252552448d69aae88552c8e7201ab0993d86341d0461f6a11e62217e757b81da->enter($__internal_252552448d69aae88552c8e7201ab0993d86341d0461f6a11e62217e757b81da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ba987d5885c15698f8164371a98c3e1b827a13d06db0a405ea549b412c72abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba987d5885c15698f8164371a98c3e1b827a13d06db0a405ea549b412c72abe->enter($__internal_4ba987d5885c15698f8164371a98c3e1b827a13d06db0a405ea549b412c72abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4ba987d5885c15698f8164371a98c3e1b827a13d06db0a405ea549b412c72abe->leave($__internal_4ba987d5885c15698f8164371a98c3e1b827a13d06db0a405ea549b412c72abe_prof);

        
        $__internal_252552448d69aae88552c8e7201ab0993d86341d0461f6a11e62217e757b81da->leave($__internal_252552448d69aae88552c8e7201ab0993d86341d0461f6a11e62217e757b81da_prof);

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
