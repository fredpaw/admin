<?php

/* AppBundle:Page:index.html.twig */
class __TwigTemplate_40a1fc1c3020c0409b12e80a731259f948eb066b41c194dee6b821a0a414cc3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/default/index.html.twig", "AppBundle:Page:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f15a764a3d0057e9a68109673704559c66681d82dd6eb85f8d2b35f3fc620109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15a764a3d0057e9a68109673704559c66681d82dd6eb85f8d2b35f3fc620109->enter($__internal_f15a764a3d0057e9a68109673704559c66681d82dd6eb85f8d2b35f3fc620109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:index.html.twig"));

        $__internal_7a03e29f3da99ac554396b0340f7796a35152a1078f49a2a7667a8bdce36ca00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a03e29f3da99ac554396b0340f7796a35152a1078f49a2a7667a8bdce36ca00->enter($__internal_7a03e29f3da99ac554396b0340f7796a35152a1078f49a2a7667a8bdce36ca00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f15a764a3d0057e9a68109673704559c66681d82dd6eb85f8d2b35f3fc620109->leave($__internal_f15a764a3d0057e9a68109673704559c66681d82dd6eb85f8d2b35f3fc620109_prof);

        
        $__internal_7a03e29f3da99ac554396b0340f7796a35152a1078f49a2a7667a8bdce36ca00->leave($__internal_7a03e29f3da99ac554396b0340f7796a35152a1078f49a2a7667a8bdce36ca00_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a04684bd93baf57912481809055e042ada738473552a9a70f548a837bc37d31f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04684bd93baf57912481809055e042ada738473552a9a70f548a837bc37d31f->enter($__internal_a04684bd93baf57912481809055e042ada738473552a9a70f548a837bc37d31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f6a5fa4c98ff5febb8472266b300803443c504385b57cd849b978c5bb626db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6a5fa4c98ff5febb8472266b300803443c504385b57cd849b978c5bb626db4->enter($__internal_4f6a5fa4c98ff5febb8472266b300803443c504385b57cd849b978c5bb626db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Article List";
        
        $__internal_4f6a5fa4c98ff5febb8472266b300803443c504385b57cd849b978c5bb626db4->leave($__internal_4f6a5fa4c98ff5febb8472266b300803443c504385b57cd849b978c5bb626db4_prof);

        
        $__internal_a04684bd93baf57912481809055e042ada738473552a9a70f548a837bc37d31f->leave($__internal_a04684bd93baf57912481809055e042ada738473552a9a70f548a837bc37d31f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_c8c0fe00f43e08c4a68b122f9b09688fb38b1d4f0eb9741da4541aad266fa919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c0fe00f43e08c4a68b122f9b09688fb38b1d4f0eb9741da4541aad266fa919->enter($__internal_c8c0fe00f43e08c4a68b122f9b09688fb38b1d4f0eb9741da4541aad266fa919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c42a2674d881b15e2f3324ed449e6f05db511d2422917d802acedc4a0dd49eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42a2674d881b15e2f3324ed449e6f05db511d2422917d802acedc4a0dd49eef->enter($__internal_c42a2674d881b15e2f3324ed449e6f05db511d2422917d802acedc4a0dd49eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h2>Section title</h2>
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publish Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "user", array()), "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "CreateDate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit-article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Edit</a><a style=\"margin-left:20px;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete-article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Delete</a></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_c42a2674d881b15e2f3324ed449e6f05db511d2422917d802acedc4a0dd49eef->leave($__internal_c42a2674d881b15e2f3324ed449e6f05db511d2422917d802acedc4a0dd49eef_prof);

        
        $__internal_c8c0fe00f43e08c4a68b122f9b09688fb38b1d4f0eb9741da4541aad266fa919->leave($__internal_c8c0fe00f43e08c4a68b122f9b09688fb38b1d4f0eb9741da4541aad266fa919_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  90 => 20,  87 => 19,  83 => 18,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title %}Article List{% endblock %}
{% block content %}
    <h2>Section title</h2>
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publish Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            {% for article in articles %}
            <tr>
                <td>{{ article.id }}</td>
                <td>{{ article.title }}</td>
                <td>{{ article.user.username }}</td>
                <td>{{ article.CreateDate | date('d-m-Y') }}</td>
                <td><a href=\"{{ path('edit-article', {'id': article.id}) }}\">Edit</a><a style=\"margin-left:20px;\" href=\"{{ path('delete-article', {'id': article.id}) }}\">Delete</a></td>
            </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "AppBundle:Page:index.html.twig", "D:\\xampp\\htdocs\\admin\\src\\AppBundle/Resources/views/Page/index.html.twig");
    }
}
