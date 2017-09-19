<?php

/* AppBundle:Security:login.html.twig */
class __TwigTemplate_a98bf81402c4244c9841cf68842cd9df14f73fc53b04a36b17ffe0367daf17eb extends Twig_Template
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
        $__internal_fb5721cf117dc504cb1e3af7cde4250289dedf11aaf15df7460587854527c7f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5721cf117dc504cb1e3af7cde4250289dedf11aaf15df7460587854527c7f3->enter($__internal_fb5721cf117dc504cb1e3af7cde4250289dedf11aaf15df7460587854527c7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $__internal_0be535ce89f281302b3a134992013da6544d897a9995630c9b66259b8adfade8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be535ce89f281302b3a134992013da6544d897a9995630c9b66259b8adfade8->enter($__internal_0be535ce89f281302b3a134992013da6544d897a9995630c9b66259b8adfade8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb5721cf117dc504cb1e3af7cde4250289dedf11aaf15df7460587854527c7f3->leave($__internal_fb5721cf117dc504cb1e3af7cde4250289dedf11aaf15df7460587854527c7f3_prof);

        
        $__internal_0be535ce89f281302b3a134992013da6544d897a9995630c9b66259b8adfade8->leave($__internal_0be535ce89f281302b3a134992013da6544d897a9995630c9b66259b8adfade8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57b73602d77661d1ecc01fd5f51121a18b3fa5b5a12cc5ca5ba76db3e5839992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b73602d77661d1ecc01fd5f51121a18b3fa5b5a12cc5ca5ba76db3e5839992->enter($__internal_57b73602d77661d1ecc01fd5f51121a18b3fa5b5a12cc5ca5ba76db3e5839992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cce461eba0b293bee2b61564dd92677a9585cf1d6f506d7406374747ce4af57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce461eba0b293bee2b61564dd92677a9585cf1d6f506d7406374747ce4af57f->enter($__internal_cce461eba0b293bee2b61564dd92677a9585cf1d6f506d7406374747ce4af57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "System Login";
        
        $__internal_cce461eba0b293bee2b61564dd92677a9585cf1d6f506d7406374747ce4af57f->leave($__internal_cce461eba0b293bee2b61564dd92677a9585cf1d6f506d7406374747ce4af57f_prof);

        
        $__internal_57b73602d77661d1ecc01fd5f51121a18b3fa5b5a12cc5ca5ba76db3e5839992->leave($__internal_57b73602d77661d1ecc01fd5f51121a18b3fa5b5a12cc5ca5ba76db3e5839992_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_63af1c0d3f31b07930c8fa1e363b624e924fca4af96ec6309227735f53db48e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63af1c0d3f31b07930c8fa1e363b624e924fca4af96ec6309227735f53db48e7->enter($__internal_63af1c0d3f31b07930c8fa1e363b624e924fca4af96ec6309227735f53db48e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c14746f5b6fb01027f7f291c90e6c334a2238d7dd27b272f43fc255026af25cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14746f5b6fb01027f7f291c90e6c334a2238d7dd27b272f43fc255026af25cc->enter($__internal_c14746f5b6fb01027f7f291c90e6c334a2238d7dd27b272f43fc255026af25cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_c14746f5b6fb01027f7f291c90e6c334a2238d7dd27b272f43fc255026af25cc->leave($__internal_c14746f5b6fb01027f7f291c90e6c334a2238d7dd27b272f43fc255026af25cc_prof);

        
        $__internal_63af1c0d3f31b07930c8fa1e363b624e924fca4af96ec6309227735f53db48e7->leave($__internal_63af1c0d3f31b07930c8fa1e363b624e924fca4af96ec6309227735f53db48e7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_902f14bc1ef3a4cc881478ccf2fb7e85abdc772a6c9bbdc41ad48b7d94430de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902f14bc1ef3a4cc881478ccf2fb7e85abdc772a6c9bbdc41ad48b7d94430de6->enter($__internal_902f14bc1ef3a4cc881478ccf2fb7e85abdc772a6c9bbdc41ad48b7d94430de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8311b950ced4772efd33448e08e728742d8dbec6319d6c0a1d79fa1c9756023a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8311b950ced4772efd33448e08e728742d8dbec6319d6c0a1d79fa1c9756023a->enter($__internal_8311b950ced4772efd33448e08e728742d8dbec6319d6c0a1d79fa1c9756023a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8311b950ced4772efd33448e08e728742d8dbec6319d6c0a1d79fa1c9756023a->leave($__internal_8311b950ced4772efd33448e08e728742d8dbec6319d6c0a1d79fa1c9756023a_prof);

        
        $__internal_902f14bc1ef3a4cc881478ccf2fb7e85abdc772a6c9bbdc41ad48b7d94430de6->leave($__internal_902f14bc1ef3a4cc881478ccf2fb7e85abdc772a6c9bbdc41ad48b7d94430de6_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fe4d1227e6a8bf9a19c9fe80ebc2fb716b0751f813cc6c2735c8944afa29435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe4d1227e6a8bf9a19c9fe80ebc2fb716b0751f813cc6c2735c8944afa29435->enter($__internal_3fe4d1227e6a8bf9a19c9fe80ebc2fb716b0751f813cc6c2735c8944afa29435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_454ececc97f2c0ba280aef4e382998846d7aa0e8440ea7934be2952d8ba9cc95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454ececc97f2c0ba280aef4e382998846d7aa0e8440ea7934be2952d8ba9cc95->enter($__internal_454ececc97f2c0ba280aef4e382998846d7aa0e8440ea7934be2952d8ba9cc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_454ececc97f2c0ba280aef4e382998846d7aa0e8440ea7934be2952d8ba9cc95->leave($__internal_454ececc97f2c0ba280aef4e382998846d7aa0e8440ea7934be2952d8ba9cc95_prof);

        
        $__internal_3fe4d1227e6a8bf9a19c9fe80ebc2fb716b0751f813cc6c2735c8944afa29435->leave($__internal_3fe4d1227e6a8bf9a19c9fe80ebc2fb716b0751f813cc6c2735c8944afa29435_prof);

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
