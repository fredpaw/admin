<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_5d185c7ea9fe2d134e9972420d7f6b4b218a6a4e1b7ebb25491805a36c072e69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cebbe7dd0244f3cd368f912c071b8552d9a85c5f68b77fd6662962f9bb0e4f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cebbe7dd0244f3cd368f912c071b8552d9a85c5f68b77fd6662962f9bb0e4f9->enter($__internal_9cebbe7dd0244f3cd368f912c071b8552d9a85c5f68b77fd6662962f9bb0e4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_66bdd3e5db05612af657bfc64d61a41ab1b8c4d988a95e917f0bf11ee1f8ab01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66bdd3e5db05612af657bfc64d61a41ab1b8c4d988a95e917f0bf11ee1f8ab01->enter($__internal_66bdd3e5db05612af657bfc64d61a41ab1b8c4d988a95e917f0bf11ee1f8ab01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9cebbe7dd0244f3cd368f912c071b8552d9a85c5f68b77fd6662962f9bb0e4f9->leave($__internal_9cebbe7dd0244f3cd368f912c071b8552d9a85c5f68b77fd6662962f9bb0e4f9_prof);

        
        $__internal_66bdd3e5db05612af657bfc64d61a41ab1b8c4d988a95e917f0bf11ee1f8ab01->leave($__internal_66bdd3e5db05612af657bfc64d61a41ab1b8c4d988a95e917f0bf11ee1f8ab01_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "D:\\xampp\\htdocs\\admin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
