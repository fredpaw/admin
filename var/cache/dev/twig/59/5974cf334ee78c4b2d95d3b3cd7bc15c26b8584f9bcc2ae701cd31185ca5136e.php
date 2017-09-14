<?php

/* ::base.html.twig */
class __TwigTemplate_19a6c2d8e9e40a9f9bffc2acae057fa40c6067b4ef68dbe4f7de40837e37f601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_859e9ed86ffcd04a66b5ed54d12d5878a8251c8ef608e30fd4dcc9166b412ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859e9ed86ffcd04a66b5ed54d12d5878a8251c8ef608e30fd4dcc9166b412ee3->enter($__internal_859e9ed86ffcd04a66b5ed54d12d5878a8251c8ef608e30fd4dcc9166b412ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b75bbeee82dc129637f89e37b0f844648e09073ecd2791cf6f300ffa678f15de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75bbeee82dc129637f89e37b0f844648e09073ecd2791cf6f300ffa678f15de->enter($__internal_b75bbeee82dc129637f89e37b0f844648e09073ecd2791cf6f300ffa678f15de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_859e9ed86ffcd04a66b5ed54d12d5878a8251c8ef608e30fd4dcc9166b412ee3->leave($__internal_859e9ed86ffcd04a66b5ed54d12d5878a8251c8ef608e30fd4dcc9166b412ee3_prof);

        
        $__internal_b75bbeee82dc129637f89e37b0f844648e09073ecd2791cf6f300ffa678f15de->leave($__internal_b75bbeee82dc129637f89e37b0f844648e09073ecd2791cf6f300ffa678f15de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_402b6859ef9b79c4b291df03f48af7b68e0d6afda8561df8f22faebf80d59f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402b6859ef9b79c4b291df03f48af7b68e0d6afda8561df8f22faebf80d59f0e->enter($__internal_402b6859ef9b79c4b291df03f48af7b68e0d6afda8561df8f22faebf80d59f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df95a97081d6c4fb4eb1b445b2a333e709ebeb59fcd9d4a686135f55b98e6770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df95a97081d6c4fb4eb1b445b2a333e709ebeb59fcd9d4a686135f55b98e6770->enter($__internal_df95a97081d6c4fb4eb1b445b2a333e709ebeb59fcd9d4a686135f55b98e6770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_df95a97081d6c4fb4eb1b445b2a333e709ebeb59fcd9d4a686135f55b98e6770->leave($__internal_df95a97081d6c4fb4eb1b445b2a333e709ebeb59fcd9d4a686135f55b98e6770_prof);

        
        $__internal_402b6859ef9b79c4b291df03f48af7b68e0d6afda8561df8f22faebf80d59f0e->leave($__internal_402b6859ef9b79c4b291df03f48af7b68e0d6afda8561df8f22faebf80d59f0e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3dceb20fcccef449cc2501d78d14330344b36252ab3b301962ace3f6f812729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3dceb20fcccef449cc2501d78d14330344b36252ab3b301962ace3f6f812729->enter($__internal_a3dceb20fcccef449cc2501d78d14330344b36252ab3b301962ace3f6f812729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_68a45a0c5dc4bab4838acfd9c521cb73b9b4e05a37881180d8751fbd822e92c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a45a0c5dc4bab4838acfd9c521cb73b9b4e05a37881180d8751fbd822e92c7->enter($__internal_68a45a0c5dc4bab4838acfd9c521cb73b9b4e05a37881180d8751fbd822e92c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_68a45a0c5dc4bab4838acfd9c521cb73b9b4e05a37881180d8751fbd822e92c7->leave($__internal_68a45a0c5dc4bab4838acfd9c521cb73b9b4e05a37881180d8751fbd822e92c7_prof);

        
        $__internal_a3dceb20fcccef449cc2501d78d14330344b36252ab3b301962ace3f6f812729->leave($__internal_a3dceb20fcccef449cc2501d78d14330344b36252ab3b301962ace3f6f812729_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c98ec27ed55c6b501ee2a7666f119a5359712ff2249198a042ec41682411ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c98ec27ed55c6b501ee2a7666f119a5359712ff2249198a042ec41682411ace->enter($__internal_7c98ec27ed55c6b501ee2a7666f119a5359712ff2249198a042ec41682411ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94a667932c00d2bf9885996d313b85048a6f6f950c56de109e73a1093feab875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a667932c00d2bf9885996d313b85048a6f6f950c56de109e73a1093feab875->enter($__internal_94a667932c00d2bf9885996d313b85048a6f6f950c56de109e73a1093feab875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_94a667932c00d2bf9885996d313b85048a6f6f950c56de109e73a1093feab875->leave($__internal_94a667932c00d2bf9885996d313b85048a6f6f950c56de109e73a1093feab875_prof);

        
        $__internal_7c98ec27ed55c6b501ee2a7666f119a5359712ff2249198a042ec41682411ace->leave($__internal_7c98ec27ed55c6b501ee2a7666f119a5359712ff2249198a042ec41682411ace_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_413506b8d4cf0296a82e20f9ff042a6e2218fb697c47737daa16cce3c51dfe4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413506b8d4cf0296a82e20f9ff042a6e2218fb697c47737daa16cce3c51dfe4f->enter($__internal_413506b8d4cf0296a82e20f9ff042a6e2218fb697c47737daa16cce3c51dfe4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ebf38aa0d89145d40c6d66744a2e756576c26b48514a1b89f759b70be9ea19db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf38aa0d89145d40c6d66744a2e756576c26b48514a1b89f759b70be9ea19db->enter($__internal_ebf38aa0d89145d40c6d66744a2e756576c26b48514a1b89f759b70be9ea19db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ebf38aa0d89145d40c6d66744a2e756576c26b48514a1b89f759b70be9ea19db->leave($__internal_ebf38aa0d89145d40c6d66744a2e756576c26b48514a1b89f759b70be9ea19db_prof);

        
        $__internal_413506b8d4cf0296a82e20f9ff042a6e2218fb697c47737daa16cce3c51dfe4f->leave($__internal_413506b8d4cf0296a82e20f9ff042a6e2218fb697c47737daa16cce3c51dfe4f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\xampp\\htdocs\\admin\\app/Resources\\views/base.html.twig");
    }
}
