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
        $__internal_eba56fdefddd486330534ef8a58696caf6da83ca662cd5dd3a2eacdc87ca9802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba56fdefddd486330534ef8a58696caf6da83ca662cd5dd3a2eacdc87ca9802->enter($__internal_eba56fdefddd486330534ef8a58696caf6da83ca662cd5dd3a2eacdc87ca9802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:edit.html.twig"));

        $__internal_5d1f4c67575922c1f9b615f06d8b31c8031c82297994a9a8af8ccf65ed51af28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1f4c67575922c1f9b615f06d8b31c8031c82297994a9a8af8ccf65ed51af28->enter($__internal_5d1f4c67575922c1f9b615f06d8b31c8031c82297994a9a8af8ccf65ed51af28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eba56fdefddd486330534ef8a58696caf6da83ca662cd5dd3a2eacdc87ca9802->leave($__internal_eba56fdefddd486330534ef8a58696caf6da83ca662cd5dd3a2eacdc87ca9802_prof);

        
        $__internal_5d1f4c67575922c1f9b615f06d8b31c8031c82297994a9a8af8ccf65ed51af28->leave($__internal_5d1f4c67575922c1f9b615f06d8b31c8031c82297994a9a8af8ccf65ed51af28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c44a4fcc1ac8d2d07918977a5d331bc9ab6448cf663c6a28de2670b90beca4f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44a4fcc1ac8d2d07918977a5d331bc9ab6448cf663c6a28de2670b90beca4f9->enter($__internal_c44a4fcc1ac8d2d07918977a5d331bc9ab6448cf663c6a28de2670b90beca4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_38090ff4b9c456e77b60345970e27f89b5603e30f7a045f9761146d436aab87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38090ff4b9c456e77b60345970e27f89b5603e30f7a045f9761146d436aab87a->enter($__internal_38090ff4b9c456e77b60345970e27f89b5603e30f7a045f9761146d436aab87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Article";
        
        $__internal_38090ff4b9c456e77b60345970e27f89b5603e30f7a045f9761146d436aab87a->leave($__internal_38090ff4b9c456e77b60345970e27f89b5603e30f7a045f9761146d436aab87a_prof);

        
        $__internal_c44a4fcc1ac8d2d07918977a5d331bc9ab6448cf663c6a28de2670b90beca4f9->leave($__internal_c44a4fcc1ac8d2d07918977a5d331bc9ab6448cf663c6a28de2670b90beca4f9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0fa894b3299484098d17485fdeb34e9601907db74b98db9293f76fead73d3657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa894b3299484098d17485fdeb34e9601907db74b98db9293f76fead73d3657->enter($__internal_0fa894b3299484098d17485fdeb34e9601907db74b98db9293f76fead73d3657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_99595758ba2334916eb14f7d8aa1ef7b2fe9689a3345ac40624b507beac096a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99595758ba2334916eb14f7d8aa1ef7b2fe9689a3345ac40624b507beac096a6->enter($__internal_99595758ba2334916eb14f7d8aa1ef7b2fe9689a3345ac40624b507beac096a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_99595758ba2334916eb14f7d8aa1ef7b2fe9689a3345ac40624b507beac096a6->leave($__internal_99595758ba2334916eb14f7d8aa1ef7b2fe9689a3345ac40624b507beac096a6_prof);

        
        $__internal_0fa894b3299484098d17485fdeb34e9601907db74b98db9293f76fead73d3657->leave($__internal_0fa894b3299484098d17485fdeb34e9601907db74b98db9293f76fead73d3657_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe85c1eee5f32c850d0299328c43eb8502b7abbd4e51f951996ae0d0bd28b527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe85c1eee5f32c850d0299328c43eb8502b7abbd4e51f951996ae0d0bd28b527->enter($__internal_fe85c1eee5f32c850d0299328c43eb8502b7abbd4e51f951996ae0d0bd28b527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_08ca08f3d498a452e2ca3e4ef5a16a75621c16cd04967024df4149bef1130a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ca08f3d498a452e2ca3e4ef5a16a75621c16cd04967024df4149bef1130a8d->enter($__internal_08ca08f3d498a452e2ca3e4ef5a16a75621c16cd04967024df4149bef1130a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_08ca08f3d498a452e2ca3e4ef5a16a75621c16cd04967024df4149bef1130a8d->leave($__internal_08ca08f3d498a452e2ca3e4ef5a16a75621c16cd04967024df4149bef1130a8d_prof);

        
        $__internal_fe85c1eee5f32c850d0299328c43eb8502b7abbd4e51f951996ae0d0bd28b527->leave($__internal_fe85c1eee5f32c850d0299328c43eb8502b7abbd4e51f951996ae0d0bd28b527_prof);

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
