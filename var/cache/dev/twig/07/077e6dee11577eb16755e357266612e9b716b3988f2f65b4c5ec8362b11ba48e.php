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
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79c66f3cfc0ac208c378383c39a25bf70c0993378ff2466607e21b5edd0e4715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c66f3cfc0ac208c378383c39a25bf70c0993378ff2466607e21b5edd0e4715->enter($__internal_79c66f3cfc0ac208c378383c39a25bf70c0993378ff2466607e21b5edd0e4715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $__internal_3d661cbb9b8f1a668065fddbc89c9b668c7933e8893b241cd64e029f04826af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d661cbb9b8f1a668065fddbc89c9b668c7933e8893b241cd64e029f04826af1->enter($__internal_3d661cbb9b8f1a668065fddbc89c9b668c7933e8893b241cd64e029f04826af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79c66f3cfc0ac208c378383c39a25bf70c0993378ff2466607e21b5edd0e4715->leave($__internal_79c66f3cfc0ac208c378383c39a25bf70c0993378ff2466607e21b5edd0e4715_prof);

        
        $__internal_3d661cbb9b8f1a668065fddbc89c9b668c7933e8893b241cd64e029f04826af1->leave($__internal_3d661cbb9b8f1a668065fddbc89c9b668c7933e8893b241cd64e029f04826af1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5eac1ade1e560a070f154308a3a7ed255b81f548eef6027c4c4e15668f98d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5eac1ade1e560a070f154308a3a7ed255b81f548eef6027c4c4e15668f98d24->enter($__internal_a5eac1ade1e560a070f154308a3a7ed255b81f548eef6027c4c4e15668f98d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0fd728e7c244365934efe9b3a7d74ff76689f395738888a126b0bac33c529960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd728e7c244365934efe9b3a7d74ff76689f395738888a126b0bac33c529960->enter($__internal_0fd728e7c244365934efe9b3a7d74ff76689f395738888a126b0bac33c529960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "System Login";
        
        $__internal_0fd728e7c244365934efe9b3a7d74ff76689f395738888a126b0bac33c529960->leave($__internal_0fd728e7c244365934efe9b3a7d74ff76689f395738888a126b0bac33c529960_prof);

        
        $__internal_a5eac1ade1e560a070f154308a3a7ed255b81f548eef6027c4c4e15668f98d24->leave($__internal_a5eac1ade1e560a070f154308a3a7ed255b81f548eef6027c4c4e15668f98d24_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_053f880ed0e93af0e552edb7ec847476fdc673e0de54a6742eed7cc86df9e904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053f880ed0e93af0e552edb7ec847476fdc673e0de54a6742eed7cc86df9e904->enter($__internal_053f880ed0e93af0e552edb7ec847476fdc673e0de54a6742eed7cc86df9e904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_34d02d37f48adba9be6937846b7039db59b44ed7268dcadb2378da3868d30b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d02d37f48adba9be6937846b7039db59b44ed7268dcadb2378da3868d30b26->enter($__internal_34d02d37f48adba9be6937846b7039db59b44ed7268dcadb2378da3868d30b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"css/signin.css\" rel=\"stylesheet\">
";
        
        $__internal_34d02d37f48adba9be6937846b7039db59b44ed7268dcadb2378da3868d30b26->leave($__internal_34d02d37f48adba9be6937846b7039db59b44ed7268dcadb2378da3868d30b26_prof);

        
        $__internal_053f880ed0e93af0e552edb7ec847476fdc673e0de54a6742eed7cc86df9e904->leave($__internal_053f880ed0e93af0e552edb7ec847476fdc673e0de54a6742eed7cc86df9e904_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fed05e74c6856bf31608239510710a74f4b68d130c9b59d75a489be2cea1f37e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed05e74c6856bf31608239510710a74f4b68d130c9b59d75a489be2cea1f37e->enter($__internal_fed05e74c6856bf31608239510710a74f4b68d130c9b59d75a489be2cea1f37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3294002d4920ea256f8645f8541735be20cd427248df1efe3b1796a4d1a8f508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3294002d4920ea256f8645f8541735be20cd427248df1efe3b1796a4d1a8f508->enter($__internal_3294002d4920ea256f8645f8541735be20cd427248df1efe3b1796a4d1a8f508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3294002d4920ea256f8645f8541735be20cd427248df1efe3b1796a4d1a8f508->leave($__internal_3294002d4920ea256f8645f8541735be20cd427248df1efe3b1796a4d1a8f508_prof);

        
        $__internal_fed05e74c6856bf31608239510710a74f4b68d130c9b59d75a489be2cea1f37e->leave($__internal_fed05e74c6856bf31608239510710a74f4b68d130c9b59d75a489be2cea1f37e_prof);

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
