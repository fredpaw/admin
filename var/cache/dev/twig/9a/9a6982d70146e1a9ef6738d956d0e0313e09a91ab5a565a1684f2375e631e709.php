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
        $__internal_a089ec55bcc6425180ab404119a5713040d46b2e0d5f0815842142b9cd54f562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a089ec55bcc6425180ab404119a5713040d46b2e0d5f0815842142b9cd54f562->enter($__internal_a089ec55bcc6425180ab404119a5713040d46b2e0d5f0815842142b9cd54f562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1cff69c1965162d5b7f2a9d89d0cbadffe2437531df73c2f3f63e00947835cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cff69c1965162d5b7f2a9d89d0cbadffe2437531df73c2f3f63e00947835cfe->enter($__internal_1cff69c1965162d5b7f2a9d89d0cbadffe2437531df73c2f3f63e00947835cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a089ec55bcc6425180ab404119a5713040d46b2e0d5f0815842142b9cd54f562->leave($__internal_a089ec55bcc6425180ab404119a5713040d46b2e0d5f0815842142b9cd54f562_prof);

        
        $__internal_1cff69c1965162d5b7f2a9d89d0cbadffe2437531df73c2f3f63e00947835cfe->leave($__internal_1cff69c1965162d5b7f2a9d89d0cbadffe2437531df73c2f3f63e00947835cfe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79a1d75efc5d2d4cef451afab747d358620a85cf5d233a6cbfdedc83d4beff99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a1d75efc5d2d4cef451afab747d358620a85cf5d233a6cbfdedc83d4beff99->enter($__internal_79a1d75efc5d2d4cef451afab747d358620a85cf5d233a6cbfdedc83d4beff99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2d4d6935f0015a39125686f29e40e562f53e9c857e3ff6e8d79ab3aa917fd209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4d6935f0015a39125686f29e40e562f53e9c857e3ff6e8d79ab3aa917fd209->enter($__internal_2d4d6935f0015a39125686f29e40e562f53e9c857e3ff6e8d79ab3aa917fd209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2d4d6935f0015a39125686f29e40e562f53e9c857e3ff6e8d79ab3aa917fd209->leave($__internal_2d4d6935f0015a39125686f29e40e562f53e9c857e3ff6e8d79ab3aa917fd209_prof);

        
        $__internal_79a1d75efc5d2d4cef451afab747d358620a85cf5d233a6cbfdedc83d4beff99->leave($__internal_79a1d75efc5d2d4cef451afab747d358620a85cf5d233a6cbfdedc83d4beff99_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_37bb21a4f90d150cab4b459285ec6be21abe9a719be7a62f9c2b48f4bf630f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37bb21a4f90d150cab4b459285ec6be21abe9a719be7a62f9c2b48f4bf630f51->enter($__internal_37bb21a4f90d150cab4b459285ec6be21abe9a719be7a62f9c2b48f4bf630f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6175289243b3ba446d4d0da8c57e2d66a88a51b778a61d6d75cd27b36c4c710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6175289243b3ba446d4d0da8c57e2d66a88a51b778a61d6d75cd27b36c4c710->enter($__internal_a6175289243b3ba446d4d0da8c57e2d66a88a51b778a61d6d75cd27b36c4c710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a6175289243b3ba446d4d0da8c57e2d66a88a51b778a61d6d75cd27b36c4c710->leave($__internal_a6175289243b3ba446d4d0da8c57e2d66a88a51b778a61d6d75cd27b36c4c710_prof);

        
        $__internal_37bb21a4f90d150cab4b459285ec6be21abe9a719be7a62f9c2b48f4bf630f51->leave($__internal_37bb21a4f90d150cab4b459285ec6be21abe9a719be7a62f9c2b48f4bf630f51_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e396e7a61fb34cf2d6007d93b4b02d080780c055d6cdcb444592b45b85ccdd5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e396e7a61fb34cf2d6007d93b4b02d080780c055d6cdcb444592b45b85ccdd5f->enter($__internal_e396e7a61fb34cf2d6007d93b4b02d080780c055d6cdcb444592b45b85ccdd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f0ac2db54d97db61f89b0f834a4e129d09b85b935fb8f8020e32cf9bd6fc1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0ac2db54d97db61f89b0f834a4e129d09b85b935fb8f8020e32cf9bd6fc1ea->enter($__internal_7f0ac2db54d97db61f89b0f834a4e129d09b85b935fb8f8020e32cf9bd6fc1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7f0ac2db54d97db61f89b0f834a4e129d09b85b935fb8f8020e32cf9bd6fc1ea->leave($__internal_7f0ac2db54d97db61f89b0f834a4e129d09b85b935fb8f8020e32cf9bd6fc1ea_prof);

        
        $__internal_e396e7a61fb34cf2d6007d93b4b02d080780c055d6cdcb444592b45b85ccdd5f->leave($__internal_e396e7a61fb34cf2d6007d93b4b02d080780c055d6cdcb444592b45b85ccdd5f_prof);

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
