<?php

/* AppBundle:Security:login.html.twig */
class __TwigTemplate_2bcf9a846d4e93c546e6ea9157adc41dc70d8cd382e1f1630459f0bb2d97cc33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Security:login.html.twig", 1);
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
        $__internal_9a70df4d818f2cceb7387fc8f41fbca51cc87f0e25b7f58e0d5eaeebc13b01f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a70df4d818f2cceb7387fc8f41fbca51cc87f0e25b7f58e0d5eaeebc13b01f8->enter($__internal_9a70df4d818f2cceb7387fc8f41fbca51cc87f0e25b7f58e0d5eaeebc13b01f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $__internal_9ff7f7926b55b40eb060f2399332f9a754a2b9490e86c09dc48dc5616301d940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff7f7926b55b40eb060f2399332f9a754a2b9490e86c09dc48dc5616301d940->enter($__internal_9ff7f7926b55b40eb060f2399332f9a754a2b9490e86c09dc48dc5616301d940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a70df4d818f2cceb7387fc8f41fbca51cc87f0e25b7f58e0d5eaeebc13b01f8->leave($__internal_9a70df4d818f2cceb7387fc8f41fbca51cc87f0e25b7f58e0d5eaeebc13b01f8_prof);

        
        $__internal_9ff7f7926b55b40eb060f2399332f9a754a2b9490e86c09dc48dc5616301d940->leave($__internal_9ff7f7926b55b40eb060f2399332f9a754a2b9490e86c09dc48dc5616301d940_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8058e0cd448952ce9e221c5578f46b4b28601ea99611c23212cddc1c118ac848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8058e0cd448952ce9e221c5578f46b4b28601ea99611c23212cddc1c118ac848->enter($__internal_8058e0cd448952ce9e221c5578f46b4b28601ea99611c23212cddc1c118ac848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97ea1a5731b2211066eaf159d272087777e46b6988de641b77936d9a199a12bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ea1a5731b2211066eaf159d272087777e46b6988de641b77936d9a199a12bb->enter($__internal_97ea1a5731b2211066eaf159d272087777e46b6988de641b77936d9a199a12bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "System Login";
        
        $__internal_97ea1a5731b2211066eaf159d272087777e46b6988de641b77936d9a199a12bb->leave($__internal_97ea1a5731b2211066eaf159d272087777e46b6988de641b77936d9a199a12bb_prof);

        
        $__internal_8058e0cd448952ce9e221c5578f46b4b28601ea99611c23212cddc1c118ac848->leave($__internal_8058e0cd448952ce9e221c5578f46b4b28601ea99611c23212cddc1c118ac848_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fafc5df9cd293352f81c43a1570d0178b919302b7e982fd86ab987671cb915b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fafc5df9cd293352f81c43a1570d0178b919302b7e982fd86ab987671cb915b3->enter($__internal_fafc5df9cd293352f81c43a1570d0178b919302b7e982fd86ab987671cb915b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_453355edf5c6b00cf9e93a58059e3966a5f0948b5d7da6ec8348ffe6e13ffa9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453355edf5c6b00cf9e93a58059e3966a5f0948b5d7da6ec8348ffe6e13ffa9d->enter($__internal_453355edf5c6b00cf9e93a58059e3966a5f0948b5d7da6ec8348ffe6e13ffa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_453355edf5c6b00cf9e93a58059e3966a5f0948b5d7da6ec8348ffe6e13ffa9d->leave($__internal_453355edf5c6b00cf9e93a58059e3966a5f0948b5d7da6ec8348ffe6e13ffa9d_prof);

        
        $__internal_fafc5df9cd293352f81c43a1570d0178b919302b7e982fd86ab987671cb915b3->leave($__internal_fafc5df9cd293352f81c43a1570d0178b919302b7e982fd86ab987671cb915b3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_babc59ddeabaa58907c761c19e4843d5ed2065bc4cafc9ebcf112f7b1e64c4f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babc59ddeabaa58907c761c19e4843d5ed2065bc4cafc9ebcf112f7b1e64c4f9->enter($__internal_babc59ddeabaa58907c761c19e4843d5ed2065bc4cafc9ebcf112f7b1e64c4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1e274c1c67aec49609fc8fc746914a2988db73b3982471dcf0c8eeede91c400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e274c1c67aec49609fc8fc746914a2988db73b3982471dcf0c8eeede91c400->enter($__internal_e1e274c1c67aec49609fc8fc746914a2988db73b3982471dcf0c8eeede91c400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">

        ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 14
        echo "
        <form class=\"form-signin\" action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
            <label class=\"sr-only\" for=\"username\">Username:</label>
            <input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

            <label class=\"sr-only\" for=\"password\">Password:</label>
            <input class=\"form-control\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" />

            ";
        // line 27
        echo "
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">login</button>
        </form>

    </div>
";
        
        $__internal_e1e274c1c67aec49609fc8fc746914a2988db73b3982471dcf0c8eeede91c400->leave($__internal_e1e274c1c67aec49609fc8fc746914a2988db73b3982471dcf0c8eeede91c400_prof);

        
        $__internal_babc59ddeabaa58907c761c19e4843d5ed2065bc4cafc9ebcf112f7b1e64c4f9->leave($__internal_babc59ddeabaa58907c761c19e4843d5ed2065bc4cafc9ebcf112f7b1e64c4f9_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad5d927f3747ea1159c6ec355369117b152ee7a6207be6b31fdb7b405aed8f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5d927f3747ea1159c6ec355369117b152ee7a6207be6b31fdb7b405aed8f85->enter($__internal_ad5d927f3747ea1159c6ec355369117b152ee7a6207be6b31fdb7b405aed8f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9953e891967d0908f1cdfcda2e9d3d32e415ca5339906b0c69999f1ca3abd9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9953e891967d0908f1cdfcda2e9d3d32e415ca5339906b0c69999f1ca3abd9d4->enter($__internal_9953e891967d0908f1cdfcda2e9d3d32e415ca5339906b0c69999f1ca3abd9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    <!-- Bootstrap core JavaScript
            ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9953e891967d0908f1cdfcda2e9d3d32e415ca5339906b0c69999f1ca3abd9d4->leave($__internal_9953e891967d0908f1cdfcda2e9d3d32e415ca5339906b0c69999f1ca3abd9d4_prof);

        
        $__internal_ad5d927f3747ea1159c6ec355369117b152ee7a6207be6b31fdb7b405aed8f85->leave($__internal_ad5d927f3747ea1159c6ec355369117b152ee7a6207be6b31fdb7b405aed8f85_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 39,  152 => 35,  143 => 34,  127 => 28,  124 => 27,  116 => 17,  111 => 15,  108 => 14,  102 => 12,  100 => 11,  96 => 9,  87 => 8,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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

        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

        <form class=\"form-signin\" action=\"{{ path('login') }}\" method=\"post\">
            <label class=\"sr-only\" for=\"username\">Username:</label>
            <input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

            <label class=\"sr-only\" for=\"password\">Password:</label>
            <input class=\"form-control\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" />

            {#
                If you want to control the URL the user
                is redirected to on success (more details below)
                <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
            #}

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">login</button>
        </form>

    </div>
{% endblock %}
{% block javascripts %}
    <!-- Bootstrap core JavaScript
            ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"{{ asset('bundles/app/js/ie10-viewport-bug-workaround.js') }}\"></script>
{% endblock %}
", "AppBundle:Security:login.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/Security/login.html.twig");
    }
}
