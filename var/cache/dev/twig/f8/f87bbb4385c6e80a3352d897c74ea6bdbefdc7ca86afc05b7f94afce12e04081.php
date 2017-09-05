<?php

/* AppBundle:User:login.html.twig */
class __TwigTemplate_df9bbe6e433e8dfeaa2f5e083e628cb0668f79aa8085f6bdd71f454fbe8dffa8 extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd0ad8ca5ed6de7cd33d4ed9fb20879d071dd85e0c9aee746362d2fbcdb8c36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0ad8ca5ed6de7cd33d4ed9fb20879d071dd85e0c9aee746362d2fbcdb8c36f->enter($__internal_cd0ad8ca5ed6de7cd33d4ed9fb20879d071dd85e0c9aee746362d2fbcdb8c36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $__internal_314304d893bc8eaef5397bc9c917f0dabff04cb4511bac42cdab3d01da27323f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314304d893bc8eaef5397bc9c917f0dabff04cb4511bac42cdab3d01da27323f->enter($__internal_314304d893bc8eaef5397bc9c917f0dabff04cb4511bac42cdab3d01da27323f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd0ad8ca5ed6de7cd33d4ed9fb20879d071dd85e0c9aee746362d2fbcdb8c36f->leave($__internal_cd0ad8ca5ed6de7cd33d4ed9fb20879d071dd85e0c9aee746362d2fbcdb8c36f_prof);

        
        $__internal_314304d893bc8eaef5397bc9c917f0dabff04cb4511bac42cdab3d01da27323f->leave($__internal_314304d893bc8eaef5397bc9c917f0dabff04cb4511bac42cdab3d01da27323f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f75e26e44b215ac5d041afb977f039305768d90ff11c14aee020198e93cbe028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75e26e44b215ac5d041afb977f039305768d90ff11c14aee020198e93cbe028->enter($__internal_f75e26e44b215ac5d041afb977f039305768d90ff11c14aee020198e93cbe028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99e56be7777fcb3d3512dcad440dd469cbf5acccdab8c22ebc4bb4c6c7d4d750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e56be7777fcb3d3512dcad440dd469cbf5acccdab8c22ebc4bb4c6c7d4d750->enter($__internal_99e56be7777fcb3d3512dcad440dd469cbf5acccdab8c22ebc4bb4c6c7d4d750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "System Login";
        
        $__internal_99e56be7777fcb3d3512dcad440dd469cbf5acccdab8c22ebc4bb4c6c7d4d750->leave($__internal_99e56be7777fcb3d3512dcad440dd469cbf5acccdab8c22ebc4bb4c6c7d4d750_prof);

        
        $__internal_f75e26e44b215ac5d041afb977f039305768d90ff11c14aee020198e93cbe028->leave($__internal_f75e26e44b215ac5d041afb977f039305768d90ff11c14aee020198e93cbe028_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_689214bdaab246162206fdac62de6f5806b4ed712c51abd19f34ea9d99cde688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_689214bdaab246162206fdac62de6f5806b4ed712c51abd19f34ea9d99cde688->enter($__internal_689214bdaab246162206fdac62de6f5806b4ed712c51abd19f34ea9d99cde688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1b0798557d388493cfccc062df461cd26ca84e3d44df1eacaa45e26ef61e8d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0798557d388493cfccc062df461cd26ca84e3d44df1eacaa45e26ef61e8d7d->enter($__internal_1b0798557d388493cfccc062df461cd26ca84e3d44df1eacaa45e26ef61e8d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"css/signin.css\" rel=\"stylesheet\">
";
        
        $__internal_1b0798557d388493cfccc062df461cd26ca84e3d44df1eacaa45e26ef61e8d7d->leave($__internal_1b0798557d388493cfccc062df461cd26ca84e3d44df1eacaa45e26ef61e8d7d_prof);

        
        $__internal_689214bdaab246162206fdac62de6f5806b4ed712c51abd19f34ea9d99cde688->leave($__internal_689214bdaab246162206fdac62de6f5806b4ed712c51abd19f34ea9d99cde688_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b8ecaa4aa17bd6acc22096a429ff9b310e30abba2bb41b6b561c5f79841d043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8ecaa4aa17bd6acc22096a429ff9b310e30abba2bb41b6b561c5f79841d043->enter($__internal_7b8ecaa4aa17bd6acc22096a429ff9b310e30abba2bb41b6b561c5f79841d043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55268fa3a1287a6aedfc7a9c58059ce275dbc7537f182ea42445ca785398b3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55268fa3a1287a6aedfc7a9c58059ce275dbc7537f182ea42445ca785398b3d6->enter($__internal_55268fa3a1287a6aedfc7a9c58059ce275dbc7537f182ea42445ca785398b3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">

        <form class=\"form-signin\" method=\"post\" action=\"/login\">
            <h2 class=\"form-signin-heading\">Please sign in</h2>
            <label for=\"inputUsername\" class=\"sr-only\">Username</label>
            <input type=\"text\" id=\"inputUsername\" class=\"form-control\" placeholder=\"Username\" required=\"\" autofocus=\"\">
            <label for=\"inputPassword\" class=\"sr-only\">Password</label>
            <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required=\"\">
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" value=\"remember-me\"> Remember me
                </label>
            </div>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
        </form>

    </div> <!-- /container -->
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_55268fa3a1287a6aedfc7a9c58059ce275dbc7537f182ea42445ca785398b3d6->leave($__internal_55268fa3a1287a6aedfc7a9c58059ce275dbc7537f182ea42445ca785398b3d6_prof);

        
        $__internal_7b8ecaa4aa17bd6acc22096a429ff9b310e30abba2bb41b6b561c5f79841d043->leave($__internal_7b8ecaa4aa17bd6acc22096a429ff9b310e30abba2bb41b6b561c5f79841d043_prof);

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
        return array (  116 => 27,  112 => 26,  108 => 25,  89 => 8,  80 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
    <link href=\"css/signin.css\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
    <div class=\"container\">

        <form class=\"form-signin\" method=\"post\" action=\"/login\">
            <h2 class=\"form-signin-heading\">Please sign in</h2>
            <label for=\"inputUsername\" class=\"sr-only\">Username</label>
            <input type=\"text\" id=\"inputUsername\" class=\"form-control\" placeholder=\"Username\" required=\"\" autofocus=\"\">
            <label for=\"inputPassword\" class=\"sr-only\">Password</label>
            <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required=\"\">
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" value=\"remember-me\"> Remember me
                </label>
            </div>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
        </form>

    </div> <!-- /container -->
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "AppBundle:User:login.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/User/login.html.twig");
    }
}
