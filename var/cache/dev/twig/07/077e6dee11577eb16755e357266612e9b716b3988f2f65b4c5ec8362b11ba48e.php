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
        $__internal_cd0d2d8fd6e3924aa93f059c22b5480fe94bc5bf3cb062472cf75d5e5d5a8852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0d2d8fd6e3924aa93f059c22b5480fe94bc5bf3cb062472cf75d5e5d5a8852->enter($__internal_cd0d2d8fd6e3924aa93f059c22b5480fe94bc5bf3cb062472cf75d5e5d5a8852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $__internal_eb73e1926bece6c184254206b0d05a790c8e2f175420f42ef501bdb23de13f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb73e1926bece6c184254206b0d05a790c8e2f175420f42ef501bdb23de13f07->enter($__internal_eb73e1926bece6c184254206b0d05a790c8e2f175420f42ef501bdb23de13f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd0d2d8fd6e3924aa93f059c22b5480fe94bc5bf3cb062472cf75d5e5d5a8852->leave($__internal_cd0d2d8fd6e3924aa93f059c22b5480fe94bc5bf3cb062472cf75d5e5d5a8852_prof);

        
        $__internal_eb73e1926bece6c184254206b0d05a790c8e2f175420f42ef501bdb23de13f07->leave($__internal_eb73e1926bece6c184254206b0d05a790c8e2f175420f42ef501bdb23de13f07_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a73c70923a2e204c507e57b5ec265ef5581211ec890515893fb624da40718cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a73c70923a2e204c507e57b5ec265ef5581211ec890515893fb624da40718cc->enter($__internal_6a73c70923a2e204c507e57b5ec265ef5581211ec890515893fb624da40718cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68d999a169e7f4f0ed84c90748cfaec08421b3f63bab39eb7506d7181edca5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d999a169e7f4f0ed84c90748cfaec08421b3f63bab39eb7506d7181edca5ff->enter($__internal_68d999a169e7f4f0ed84c90748cfaec08421b3f63bab39eb7506d7181edca5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "System Login";
        
        $__internal_68d999a169e7f4f0ed84c90748cfaec08421b3f63bab39eb7506d7181edca5ff->leave($__internal_68d999a169e7f4f0ed84c90748cfaec08421b3f63bab39eb7506d7181edca5ff_prof);

        
        $__internal_6a73c70923a2e204c507e57b5ec265ef5581211ec890515893fb624da40718cc->leave($__internal_6a73c70923a2e204c507e57b5ec265ef5581211ec890515893fb624da40718cc_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1ffd118a5abcf834d0feb0c3579d2560e4a8759896393a7708c10316015dbff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ffd118a5abcf834d0feb0c3579d2560e4a8759896393a7708c10316015dbff->enter($__internal_e1ffd118a5abcf834d0feb0c3579d2560e4a8759896393a7708c10316015dbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f625e261d8d0632122029f08ccc5832ed2c071fb3d6f136b7fe503507abb1a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f625e261d8d0632122029f08ccc5832ed2c071fb3d6f136b7fe503507abb1a08->enter($__internal_f625e261d8d0632122029f08ccc5832ed2c071fb3d6f136b7fe503507abb1a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_f625e261d8d0632122029f08ccc5832ed2c071fb3d6f136b7fe503507abb1a08->leave($__internal_f625e261d8d0632122029f08ccc5832ed2c071fb3d6f136b7fe503507abb1a08_prof);

        
        $__internal_e1ffd118a5abcf834d0feb0c3579d2560e4a8759896393a7708c10316015dbff->leave($__internal_e1ffd118a5abcf834d0feb0c3579d2560e4a8759896393a7708c10316015dbff_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_789d22bb8ae905d8afbcf6ea574d34cc1dcb3ada4526ce12c0fcc71a6a63122c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789d22bb8ae905d8afbcf6ea574d34cc1dcb3ada4526ce12c0fcc71a6a63122c->enter($__internal_789d22bb8ae905d8afbcf6ea574d34cc1dcb3ada4526ce12c0fcc71a6a63122c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a7ad18993cd76b0539b3132d8674a203feeb56b687332578811df33fe55513e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7ad18993cd76b0539b3132d8674a203feeb56b687332578811df33fe55513e->enter($__internal_4a7ad18993cd76b0539b3132d8674a203feeb56b687332578811df33fe55513e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-signin")));
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <h2 class=\"form-signin-heading\">Please sign in</h2>
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
        <div class=\"checkbox\">
            <label>
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cookie", array()), 'widget');
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cookie", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
            </label>
        </div>
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-lg btn-primary btn-block")));
        echo "

        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_4a7ad18993cd76b0539b3132d8674a203feeb56b687332578811df33fe55513e->leave($__internal_4a7ad18993cd76b0539b3132d8674a203feeb56b687332578811df33fe55513e_prof);

        
        $__internal_789d22bb8ae905d8afbcf6ea574d34cc1dcb3ada4526ce12c0fcc71a6a63122c->leave($__internal_789d22bb8ae905d8afbcf6ea574d34cc1dcb3ada4526ce12c0fcc71a6a63122c_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb9768353e90d014f0c4150ec0a298521f56225dde31320c814b1299ac0691b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9768353e90d014f0c4150ec0a298521f56225dde31320c814b1299ac0691b3->enter($__internal_eb9768353e90d014f0c4150ec0a298521f56225dde31320c814b1299ac0691b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_048c75233f5b8d21b143c78854c42a2dd3bc3f4b102de4fafde0bae60188a8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048c75233f5b8d21b143c78854c42a2dd3bc3f4b102de4fafde0bae60188a8d3->enter($__internal_048c75233f5b8d21b143c78854c42a2dd3bc3f4b102de4fafde0bae60188a8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_048c75233f5b8d21b143c78854c42a2dd3bc3f4b102de4fafde0bae60188a8d3->leave($__internal_048c75233f5b8d21b143c78854c42a2dd3bc3f4b102de4fafde0bae60188a8d3_prof);

        
        $__internal_eb9768353e90d014f0c4150ec0a298521f56225dde31320c814b1299ac0691b3->leave($__internal_eb9768353e90d014f0c4150ec0a298521f56225dde31320c814b1299ac0691b3_prof);

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
        return array (  168 => 33,  162 => 29,  153 => 28,  140 => 25,  135 => 23,  127 => 20,  121 => 17,  117 => 16,  113 => 15,  109 => 14,  104 => 12,  100 => 11,  96 => 9,  87 => 8,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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
        {{ form_errors(form) }}
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        {{ form_label(form.username,'Username',{'label_attr':{'class':'sr-only'}}) }}
        {{ form_widget(form.username, {'attr':{'class':'form-control', 'placeholder':'Username'}}) }}
        {{ form_label(form.password,'Username',{'label_attr':{'class':'sr-only'}}) }}
        {{ form_widget(form.password, {'attr':{'class':'form-control', 'placeholder':'Password'}}) }}
        <div class=\"checkbox\">
            <label>
                {{ form_widget(form.cookie) }} {{ form.cookie.vars.label }}
            </label>
        </div>
        {{ form_row(form.submit, {'attr':{'class':'btn btn-lg btn-primary btn-block'}}) }}

        {{ form_end(form, {'render_rest':false}) }}
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
