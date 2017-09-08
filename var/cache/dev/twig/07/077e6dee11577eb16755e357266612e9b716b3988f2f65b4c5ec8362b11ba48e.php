<?php

/* AppBundle:User:login.html.twig */
class __TwigTemplate_7498b20450d07f766a5af75dbfe89030ce009a49acf3ef89eb53e1c84ecd7dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d3bc228fefd0397cbba76218b1896bd72a7be447e59681cbd652c87339bb68e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3bc228fefd0397cbba76218b1896bd72a7be447e59681cbd652c87339bb68e->enter($__internal_3d3bc228fefd0397cbba76218b1896bd72a7be447e59681cbd652c87339bb68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $__internal_1388d7cf29eedf00d5b78bbb49d0a2ae0f03f4c52bac1e17f271fffefb999b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1388d7cf29eedf00d5b78bbb49d0a2ae0f03f4c52bac1e17f271fffefb999b3f->enter($__internal_1388d7cf29eedf00d5b78bbb49d0a2ae0f03f4c52bac1e17f271fffefb999b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3bc228fefd0397cbba76218b1896bd72a7be447e59681cbd652c87339bb68e->leave($__internal_3d3bc228fefd0397cbba76218b1896bd72a7be447e59681cbd652c87339bb68e_prof);

        
        $__internal_1388d7cf29eedf00d5b78bbb49d0a2ae0f03f4c52bac1e17f271fffefb999b3f->leave($__internal_1388d7cf29eedf00d5b78bbb49d0a2ae0f03f4c52bac1e17f271fffefb999b3f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8ab19c79f7b6fb0698c0ff7351cb1a9405a312d1268f93d7d97c3705d125f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ab19c79f7b6fb0698c0ff7351cb1a9405a312d1268f93d7d97c3705d125f25->enter($__internal_d8ab19c79f7b6fb0698c0ff7351cb1a9405a312d1268f93d7d97c3705d125f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa316a5d998ac5761f0a31aaddb67ba21828ddf1007046b3b0e42559dcbd96c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa316a5d998ac5761f0a31aaddb67ba21828ddf1007046b3b0e42559dcbd96c0->enter($__internal_aa316a5d998ac5761f0a31aaddb67ba21828ddf1007046b3b0e42559dcbd96c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "System Login";
        
        $__internal_aa316a5d998ac5761f0a31aaddb67ba21828ddf1007046b3b0e42559dcbd96c0->leave($__internal_aa316a5d998ac5761f0a31aaddb67ba21828ddf1007046b3b0e42559dcbd96c0_prof);

        
        $__internal_d8ab19c79f7b6fb0698c0ff7351cb1a9405a312d1268f93d7d97c3705d125f25->leave($__internal_d8ab19c79f7b6fb0698c0ff7351cb1a9405a312d1268f93d7d97c3705d125f25_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2e11fc82bbf97dc4c0df0b268957ed4c8364108a2350852271c2ad4ab4f6fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e11fc82bbf97dc4c0df0b268957ed4c8364108a2350852271c2ad4ab4f6fc8->enter($__internal_c2e11fc82bbf97dc4c0df0b268957ed4c8364108a2350852271c2ad4ab4f6fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_77f0e222c7e1ed92691868b93d18baf051719366fdb3724959d367ebdc1e0731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f0e222c7e1ed92691868b93d18baf051719366fdb3724959d367ebdc1e0731->enter($__internal_77f0e222c7e1ed92691868b93d18baf051719366fdb3724959d367ebdc1e0731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_77f0e222c7e1ed92691868b93d18baf051719366fdb3724959d367ebdc1e0731->leave($__internal_77f0e222c7e1ed92691868b93d18baf051719366fdb3724959d367ebdc1e0731_prof);

        
        $__internal_c2e11fc82bbf97dc4c0df0b268957ed4c8364108a2350852271c2ad4ab4f6fc8->leave($__internal_c2e11fc82bbf97dc4c0df0b268957ed4c8364108a2350852271c2ad4ab4f6fc8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_fee5a3cff5312bbd124a044278af5fd0ceb34babc95fd41d1bf64ac72d2cdd47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee5a3cff5312bbd124a044278af5fd0ceb34babc95fd41d1bf64ac72d2cdd47->enter($__internal_fee5a3cff5312bbd124a044278af5fd0ceb34babc95fd41d1bf64ac72d2cdd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7dd6b7a86697b5d8e59ebbe8a584bf6db5f1c0c3b76ecd61b777b0e7022fd971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd6b7a86697b5d8e59ebbe8a584bf6db5f1c0c3b76ecd61b777b0e7022fd971->enter($__internal_7dd6b7a86697b5d8e59ebbe8a584bf6db5f1c0c3b76ecd61b777b0e7022fd971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-signin")));
        echo "
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors', array("attr" => array("class" => "list-group")));
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "sr-only"), "label" => "Username"));
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Username")));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "sr-only"), "label" => "Username"));
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password")));
        echo "
        ";
        // line 19
        echo "            ";
        // line 20
        echo "                ";
        // line 21
        echo "            ";
        // line 22
        echo "        ";
        // line 23
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-lg btn-primary btn-block")));
        echo "

        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_7dd6b7a86697b5d8e59ebbe8a584bf6db5f1c0c3b76ecd61b777b0e7022fd971->leave($__internal_7dd6b7a86697b5d8e59ebbe8a584bf6db5f1c0c3b76ecd61b777b0e7022fd971_prof);

        
        $__internal_fee5a3cff5312bbd124a044278af5fd0ceb34babc95fd41d1bf64ac72d2cdd47->leave($__internal_fee5a3cff5312bbd124a044278af5fd0ceb34babc95fd41d1bf64ac72d2cdd47_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b42f4ba75e02fe133a1caf302be3661bbfcb5355bcf5373d11f3516ca71408a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b42f4ba75e02fe133a1caf302be3661bbfcb5355bcf5373d11f3516ca71408a->enter($__internal_1b42f4ba75e02fe133a1caf302be3661bbfcb5355bcf5373d11f3516ca71408a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9feb6b99c58b221d8d8cb903d7b2f896a682347f8f37099c57ee7759450f14fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9feb6b99c58b221d8d8cb903d7b2f896a682347f8f37099c57ee7759450f14fe->enter($__internal_9feb6b99c58b221d8d8cb903d7b2f896a682347f8f37099c57ee7759450f14fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    <!-- Bootstrap core JavaScript
            ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9feb6b99c58b221d8d8cb903d7b2f896a682347f8f37099c57ee7759450f14fe->leave($__internal_9feb6b99c58b221d8d8cb903d7b2f896a682347f8f37099c57ee7759450f14fe_prof);

        
        $__internal_1b42f4ba75e02fe133a1caf302be3661bbfcb5355bcf5373d11f3516ca71408a->leave($__internal_1b42f4ba75e02fe133a1caf302be3661bbfcb5355bcf5373d11f3516ca71408a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 33,  161 => 29,  152 => 28,  139 => 25,  133 => 23,  131 => 22,  129 => 21,  127 => 20,  125 => 19,  121 => 17,  117 => 16,  113 => 15,  109 => 14,  105 => 13,  100 => 11,  96 => 9,  87 => 8,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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

{% block title %}System Login{% endblock %}
{% block stylesheets %}
    <link href=\"{{ asset('bundles/app/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/signin.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
    <div class=\"container\">

        {{ form_start(form, {'attr':{'class':'form-signin'}}) }}
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        {{ form_errors(form, {'attr':{'class':'list-group'}}) }}
        {{ form_label(form.username,'Username',{'label_attr':{'class':'sr-only'}}) }}
        {{ form_widget(form.username, {'attr':{'class':'form-control', 'placeholder':'Username'}}) }}
        {{ form_label(form.password,'Username',{'label_attr':{'class':'sr-only'}}) }}
        {{ form_widget(form.password, {'attr':{'class':'form-control', 'placeholder':'Password'}}) }}
        {#<div class=\"checkbox\">#}
            {#<label>#}
                {#{{ form_widget(form.cookie) }} {{ form.cookie.vars.label }}#}
            {#</label>#}
        {#</div>#}
        {{ form_row(form.submit, {'attr':{'class':'btn btn-lg btn-primary btn-block'}}) }}

        {{ form_end(form) }}
    </div>
{% endblock %}
{% block javascripts %}
    <!-- Bootstrap core JavaScript
            ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"{{ asset('bundles/app/js/ie10-viewport-bug-workaround.js') }}\"></script>
{% endblock %}
", "AppBundle:User:login.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/User/login.html.twig");
    }
}
