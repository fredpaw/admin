<?php

/* AppBundle:Page:edit.html.twig */
class __TwigTemplate_82b1778f1fa64502154c9f29488f03190f09da9785c9edbca2e71f9cc8fa615e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/default/index.html.twig", "AppBundle:Page:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_254af43181d288d0a71911e92c1d1543e362bf61c3f287d9c8a3b49a9bb9bd86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254af43181d288d0a71911e92c1d1543e362bf61c3f287d9c8a3b49a9bb9bd86->enter($__internal_254af43181d288d0a71911e92c1d1543e362bf61c3f287d9c8a3b49a9bb9bd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:edit.html.twig"));

        $__internal_c231b6df4b03f4d61f10385d0916a82358339b003c65c397b899ba54a48560c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c231b6df4b03f4d61f10385d0916a82358339b003c65c397b899ba54a48560c9->enter($__internal_c231b6df4b03f4d61f10385d0916a82358339b003c65c397b899ba54a48560c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254af43181d288d0a71911e92c1d1543e362bf61c3f287d9c8a3b49a9bb9bd86->leave($__internal_254af43181d288d0a71911e92c1d1543e362bf61c3f287d9c8a3b49a9bb9bd86_prof);

        
        $__internal_c231b6df4b03f4d61f10385d0916a82358339b003c65c397b899ba54a48560c9->leave($__internal_c231b6df4b03f4d61f10385d0916a82358339b003c65c397b899ba54a48560c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ed2baf82e7b0ca441c8ac374623f882850461b2b4aa2e0cd502961df6af9d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed2baf82e7b0ca441c8ac374623f882850461b2b4aa2e0cd502961df6af9d31->enter($__internal_2ed2baf82e7b0ca441c8ac374623f882850461b2b4aa2e0cd502961df6af9d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24dca3fa84287a52d34034b6823f121dcc071ccb9fe08c478576ebe0915a480a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24dca3fa84287a52d34034b6823f121dcc071ccb9fe08c478576ebe0915a480a->enter($__internal_24dca3fa84287a52d34034b6823f121dcc071ccb9fe08c478576ebe0915a480a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Article";
        
        $__internal_24dca3fa84287a52d34034b6823f121dcc071ccb9fe08c478576ebe0915a480a->leave($__internal_24dca3fa84287a52d34034b6823f121dcc071ccb9fe08c478576ebe0915a480a_prof);

        
        $__internal_2ed2baf82e7b0ca441c8ac374623f882850461b2b4aa2e0cd502961df6af9d31->leave($__internal_2ed2baf82e7b0ca441c8ac374623f882850461b2b4aa2e0cd502961df6af9d31_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a77cc626b4510ee96c176fd4902ac285bf42e19b7e8156f24a1a6188b4f3ff86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77cc626b4510ee96c176fd4902ac285bf42e19b7e8156f24a1a6188b4f3ff86->enter($__internal_a77cc626b4510ee96c176fd4902ac285bf42e19b7e8156f24a1a6188b4f3ff86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3b7329df22c16890c2dfb9684276b73ac0e8914dd31be2ebb3ff1fc127641420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7329df22c16890c2dfb9684276b73ac0e8914dd31be2ebb3ff1fc127641420->enter($__internal_3b7329df22c16890c2dfb9684276b73ac0e8914dd31be2ebb3ff1fc127641420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_3b7329df22c16890c2dfb9684276b73ac0e8914dd31be2ebb3ff1fc127641420->leave($__internal_3b7329df22c16890c2dfb9684276b73ac0e8914dd31be2ebb3ff1fc127641420_prof);

        
        $__internal_a77cc626b4510ee96c176fd4902ac285bf42e19b7e8156f24a1a6188b4f3ff86->leave($__internal_a77cc626b4510ee96c176fd4902ac285bf42e19b7e8156f24a1a6188b4f3ff86_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_8adb44ee9aec4cf1d1f7ddf1442094d0570c753e199164d9f6d6837fd9a98275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8adb44ee9aec4cf1d1f7ddf1442094d0570c753e199164d9f6d6837fd9a98275->enter($__internal_8adb44ee9aec4cf1d1f7ddf1442094d0570c753e199164d9f6d6837fd9a98275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_787594ef31079c03c880ae6be811fae0a0272109e64fcc9c77e703939103964e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787594ef31079c03c880ae6be811fae0a0272109e64fcc9c77e703939103964e->enter($__internal_787594ef31079c03c880ae6be811fae0a0272109e64fcc9c77e703939103964e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"container\">

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Please enter the title")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "route", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "route", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Please enter route for the page")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Please enter content for the page", "rows" => "30")));
        echo "
        </div>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_787594ef31079c03c880ae6be811fae0a0272109e64fcc9c77e703939103964e->leave($__internal_787594ef31079c03c880ae6be811fae0a0272109e64fcc9c77e703939103964e_prof);

        
        $__internal_8adb44ee9aec4cf1d1f7ddf1442094d0570c753e199164d9f6d6837fd9a98275->leave($__internal_8adb44ee9aec4cf1d1f7ddf1442094d0570c753e199164d9f6d6837fd9a98275_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Page:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 28,  139 => 27,  134 => 25,  130 => 24,  124 => 21,  120 => 20,  114 => 17,  110 => 16,  104 => 13,  99 => 11,  95 => 9,  86 => 8,  74 => 6,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@App/default/index.html.twig\" %}

{% block title %}Edit Article{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/app/css/signin.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block content %}
    <div class=\"container\">

        {{ form_start(form) }}
        <div class=\"form-group\">
            {{ form_errors(form) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.title) }}
            {{ form_widget(form.title, {'attr': {'class':'form-control', 'placeholder':'Please enter the title'}}) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.route) }}
            {{ form_widget(form.route, {'attr': {'class':'form-control', 'placeholder':'Please enter route for the page'}}) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.content) }}
            {{ form_widget(form.content, {'attr': {'class':'form-control', 'placeholder':'Please enter content for the page','rows':'30'}}) }}
        </div>
        {{ form_widget(form.save) }}
        {{ form_end(form) }}
    </div>
{% endblock %}

", "AppBundle:Page:edit.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/Page/edit.html.twig");
    }
}
