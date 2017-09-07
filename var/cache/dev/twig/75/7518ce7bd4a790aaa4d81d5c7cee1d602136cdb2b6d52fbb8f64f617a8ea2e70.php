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
        $__internal_be9045fd450ced888eb66878a3473227c651fbca19091c530b08327301fb7090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9045fd450ced888eb66878a3473227c651fbca19091c530b08327301fb7090->enter($__internal_be9045fd450ced888eb66878a3473227c651fbca19091c530b08327301fb7090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_357dafd471e3c1915019a2c90b0c0375743d9c28bc53b44905c08cebd414a36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357dafd471e3c1915019a2c90b0c0375743d9c28bc53b44905c08cebd414a36e->enter($__internal_357dafd471e3c1915019a2c90b0c0375743d9c28bc53b44905c08cebd414a36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_be9045fd450ced888eb66878a3473227c651fbca19091c530b08327301fb7090->leave($__internal_be9045fd450ced888eb66878a3473227c651fbca19091c530b08327301fb7090_prof);

        
        $__internal_357dafd471e3c1915019a2c90b0c0375743d9c28bc53b44905c08cebd414a36e->leave($__internal_357dafd471e3c1915019a2c90b0c0375743d9c28bc53b44905c08cebd414a36e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_32dc03fbc5934cdb229b355e001c91ca4ad3945f543d2baf1bdc0b13b263e876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32dc03fbc5934cdb229b355e001c91ca4ad3945f543d2baf1bdc0b13b263e876->enter($__internal_32dc03fbc5934cdb229b355e001c91ca4ad3945f543d2baf1bdc0b13b263e876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_323175fbed048c157bc7f04922bf637a098d433a553c233d1dcd97ee8a0a9715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323175fbed048c157bc7f04922bf637a098d433a553c233d1dcd97ee8a0a9715->enter($__internal_323175fbed048c157bc7f04922bf637a098d433a553c233d1dcd97ee8a0a9715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_323175fbed048c157bc7f04922bf637a098d433a553c233d1dcd97ee8a0a9715->leave($__internal_323175fbed048c157bc7f04922bf637a098d433a553c233d1dcd97ee8a0a9715_prof);

        
        $__internal_32dc03fbc5934cdb229b355e001c91ca4ad3945f543d2baf1bdc0b13b263e876->leave($__internal_32dc03fbc5934cdb229b355e001c91ca4ad3945f543d2baf1bdc0b13b263e876_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ab1fe674b475131276509a2023c307bf9eb3a5b7bf71280219d64b57b5d79e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab1fe674b475131276509a2023c307bf9eb3a5b7bf71280219d64b57b5d79e0->enter($__internal_9ab1fe674b475131276509a2023c307bf9eb3a5b7bf71280219d64b57b5d79e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0c7a05bde93aa8137fa1a0f25504205dc9f7f1749ef95a3f6f213dab3839bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c7a05bde93aa8137fa1a0f25504205dc9f7f1749ef95a3f6f213dab3839bf1->enter($__internal_e0c7a05bde93aa8137fa1a0f25504205dc9f7f1749ef95a3f6f213dab3839bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e0c7a05bde93aa8137fa1a0f25504205dc9f7f1749ef95a3f6f213dab3839bf1->leave($__internal_e0c7a05bde93aa8137fa1a0f25504205dc9f7f1749ef95a3f6f213dab3839bf1_prof);

        
        $__internal_9ab1fe674b475131276509a2023c307bf9eb3a5b7bf71280219d64b57b5d79e0->leave($__internal_9ab1fe674b475131276509a2023c307bf9eb3a5b7bf71280219d64b57b5d79e0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_81831f9a69d8bb2a5a0a1bddc974a05264a59d99e7cdf7811195e0539d115b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81831f9a69d8bb2a5a0a1bddc974a05264a59d99e7cdf7811195e0539d115b5d->enter($__internal_81831f9a69d8bb2a5a0a1bddc974a05264a59d99e7cdf7811195e0539d115b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_778aa22fe230335fc3604c8ac99735ee1dbb0535613ce5351151e456f33ec837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778aa22fe230335fc3604c8ac99735ee1dbb0535613ce5351151e456f33ec837->enter($__internal_778aa22fe230335fc3604c8ac99735ee1dbb0535613ce5351151e456f33ec837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_778aa22fe230335fc3604c8ac99735ee1dbb0535613ce5351151e456f33ec837->leave($__internal_778aa22fe230335fc3604c8ac99735ee1dbb0535613ce5351151e456f33ec837_prof);

        
        $__internal_81831f9a69d8bb2a5a0a1bddc974a05264a59d99e7cdf7811195e0539d115b5d->leave($__internal_81831f9a69d8bb2a5a0a1bddc974a05264a59d99e7cdf7811195e0539d115b5d_prof);

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
