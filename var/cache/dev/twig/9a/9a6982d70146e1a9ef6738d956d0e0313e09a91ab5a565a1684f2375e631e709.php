<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_08eda9fd8f4586963fcd9b6037d2dd27f2cf59667da62654227fb0c8ec97dfd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60a4da384d50b3f410923d4432a87a95d7314b929066b1743aa3672eff4589b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a4da384d50b3f410923d4432a87a95d7314b929066b1743aa3672eff4589b0->enter($__internal_60a4da384d50b3f410923d4432a87a95d7314b929066b1743aa3672eff4589b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fa853e84f74f80f127def7931204b7fa98a3caa836efe01ba31ce64e3eed3d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa853e84f74f80f127def7931204b7fa98a3caa836efe01ba31ce64e3eed3d01->enter($__internal_fa853e84f74f80f127def7931204b7fa98a3caa836efe01ba31ce64e3eed3d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a4da384d50b3f410923d4432a87a95d7314b929066b1743aa3672eff4589b0->leave($__internal_60a4da384d50b3f410923d4432a87a95d7314b929066b1743aa3672eff4589b0_prof);

        
        $__internal_fa853e84f74f80f127def7931204b7fa98a3caa836efe01ba31ce64e3eed3d01->leave($__internal_fa853e84f74f80f127def7931204b7fa98a3caa836efe01ba31ce64e3eed3d01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65888f4df03d8b41f466e3e5ebd1b49d53b37ba8b166c7393715b30dd0e27d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65888f4df03d8b41f466e3e5ebd1b49d53b37ba8b166c7393715b30dd0e27d37->enter($__internal_65888f4df03d8b41f466e3e5ebd1b49d53b37ba8b166c7393715b30dd0e27d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3857294b0809ecf42ac6fb20b3a911e9013605814e6ecee6fecb380b5c97b5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3857294b0809ecf42ac6fb20b3a911e9013605814e6ecee6fecb380b5c97b5fe->enter($__internal_3857294b0809ecf42ac6fb20b3a911e9013605814e6ecee6fecb380b5c97b5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3857294b0809ecf42ac6fb20b3a911e9013605814e6ecee6fecb380b5c97b5fe->leave($__internal_3857294b0809ecf42ac6fb20b3a911e9013605814e6ecee6fecb380b5c97b5fe_prof);

        
        $__internal_65888f4df03d8b41f466e3e5ebd1b49d53b37ba8b166c7393715b30dd0e27d37->leave($__internal_65888f4df03d8b41f466e3e5ebd1b49d53b37ba8b166c7393715b30dd0e27d37_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_94a7487f1d3aeb194af554a540413e46e4480a8e6771d60f2b8bbab2180b2578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a7487f1d3aeb194af554a540413e46e4480a8e6771d60f2b8bbab2180b2578->enter($__internal_94a7487f1d3aeb194af554a540413e46e4480a8e6771d60f2b8bbab2180b2578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e73c79c9600f54779c5d014c74720f1a802abf48e5e9b999d6da1c68905415b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e73c79c9600f54779c5d014c74720f1a802abf48e5e9b999d6da1c68905415b->enter($__internal_1e73c79c9600f54779c5d014c74720f1a802abf48e5e9b999d6da1c68905415b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1e73c79c9600f54779c5d014c74720f1a802abf48e5e9b999d6da1c68905415b->leave($__internal_1e73c79c9600f54779c5d014c74720f1a802abf48e5e9b999d6da1c68905415b_prof);

        
        $__internal_94a7487f1d3aeb194af554a540413e46e4480a8e6771d60f2b8bbab2180b2578->leave($__internal_94a7487f1d3aeb194af554a540413e46e4480a8e6771d60f2b8bbab2180b2578_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9d5cda5eae814a6b9c242973ed9c18027c9d0f0bd2799be4cde68c637593179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d5cda5eae814a6b9c242973ed9c18027c9d0f0bd2799be4cde68c637593179->enter($__internal_c9d5cda5eae814a6b9c242973ed9c18027c9d0f0bd2799be4cde68c637593179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21361b526d08bea37076b44a22022c54237e3730ff78764a1c30b4246823a6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21361b526d08bea37076b44a22022c54237e3730ff78764a1c30b4246823a6e8->enter($__internal_21361b526d08bea37076b44a22022c54237e3730ff78764a1c30b4246823a6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_21361b526d08bea37076b44a22022c54237e3730ff78764a1c30b4246823a6e8->leave($__internal_21361b526d08bea37076b44a22022c54237e3730ff78764a1c30b4246823a6e8_prof);

        
        $__internal_c9d5cda5eae814a6b9c242973ed9c18027c9d0f0bd2799be4cde68c637593179->leave($__internal_c9d5cda5eae814a6b9c242973ed9c18027c9d0f0bd2799be4cde68c637593179_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\xampp\\htdocs\\admin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
