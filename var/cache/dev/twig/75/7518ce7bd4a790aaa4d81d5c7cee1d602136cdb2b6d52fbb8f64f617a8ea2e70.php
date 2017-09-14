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
        $__internal_461ab5335a1b1f260fa8407a12704d2bf253f4b1bb0d214654e52d6c158e0766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461ab5335a1b1f260fa8407a12704d2bf253f4b1bb0d214654e52d6c158e0766->enter($__internal_461ab5335a1b1f260fa8407a12704d2bf253f4b1bb0d214654e52d6c158e0766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1cd1d97e83c3c6a86b8f2a5af2629c1ad3470f873666fd9790e0ced47715fe32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd1d97e83c3c6a86b8f2a5af2629c1ad3470f873666fd9790e0ced47715fe32->enter($__internal_1cd1d97e83c3c6a86b8f2a5af2629c1ad3470f873666fd9790e0ced47715fe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_461ab5335a1b1f260fa8407a12704d2bf253f4b1bb0d214654e52d6c158e0766->leave($__internal_461ab5335a1b1f260fa8407a12704d2bf253f4b1bb0d214654e52d6c158e0766_prof);

        
        $__internal_1cd1d97e83c3c6a86b8f2a5af2629c1ad3470f873666fd9790e0ced47715fe32->leave($__internal_1cd1d97e83c3c6a86b8f2a5af2629c1ad3470f873666fd9790e0ced47715fe32_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_03d391a31294a443a35f86be1fa40f12096375a2a6fc95555f613a9f4dc0237f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d391a31294a443a35f86be1fa40f12096375a2a6fc95555f613a9f4dc0237f->enter($__internal_03d391a31294a443a35f86be1fa40f12096375a2a6fc95555f613a9f4dc0237f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98641d5fe1708c5849af0611dc39fb60792162f163716510457cff5309ed587c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98641d5fe1708c5849af0611dc39fb60792162f163716510457cff5309ed587c->enter($__internal_98641d5fe1708c5849af0611dc39fb60792162f163716510457cff5309ed587c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_98641d5fe1708c5849af0611dc39fb60792162f163716510457cff5309ed587c->leave($__internal_98641d5fe1708c5849af0611dc39fb60792162f163716510457cff5309ed587c_prof);

        
        $__internal_03d391a31294a443a35f86be1fa40f12096375a2a6fc95555f613a9f4dc0237f->leave($__internal_03d391a31294a443a35f86be1fa40f12096375a2a6fc95555f613a9f4dc0237f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_46ff85345df8830ada30caf7fa0adb3a3c61abf2d132febc0e4e7a997f503cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ff85345df8830ada30caf7fa0adb3a3c61abf2d132febc0e4e7a997f503cfe->enter($__internal_46ff85345df8830ada30caf7fa0adb3a3c61abf2d132febc0e4e7a997f503cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6cfa0987640de8f6e1ec6176392105974194dba52de8686d91e5e178df70c228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfa0987640de8f6e1ec6176392105974194dba52de8686d91e5e178df70c228->enter($__internal_6cfa0987640de8f6e1ec6176392105974194dba52de8686d91e5e178df70c228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6cfa0987640de8f6e1ec6176392105974194dba52de8686d91e5e178df70c228->leave($__internal_6cfa0987640de8f6e1ec6176392105974194dba52de8686d91e5e178df70c228_prof);

        
        $__internal_46ff85345df8830ada30caf7fa0adb3a3c61abf2d132febc0e4e7a997f503cfe->leave($__internal_46ff85345df8830ada30caf7fa0adb3a3c61abf2d132febc0e4e7a997f503cfe_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_30527559a3c6d2ab4cacb1d7c3f4f26d282419a8a6c0d1b56e4b1c5034477cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30527559a3c6d2ab4cacb1d7c3f4f26d282419a8a6c0d1b56e4b1c5034477cf5->enter($__internal_30527559a3c6d2ab4cacb1d7c3f4f26d282419a8a6c0d1b56e4b1c5034477cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4181d63d075ac6255e529034d35b98232a9faef61278b5dea17f37bc962e1a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4181d63d075ac6255e529034d35b98232a9faef61278b5dea17f37bc962e1a11->enter($__internal_4181d63d075ac6255e529034d35b98232a9faef61278b5dea17f37bc962e1a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4181d63d075ac6255e529034d35b98232a9faef61278b5dea17f37bc962e1a11->leave($__internal_4181d63d075ac6255e529034d35b98232a9faef61278b5dea17f37bc962e1a11_prof);

        
        $__internal_30527559a3c6d2ab4cacb1d7c3f4f26d282419a8a6c0d1b56e4b1c5034477cf5->leave($__internal_30527559a3c6d2ab4cacb1d7c3f4f26d282419a8a6c0d1b56e4b1c5034477cf5_prof);

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
