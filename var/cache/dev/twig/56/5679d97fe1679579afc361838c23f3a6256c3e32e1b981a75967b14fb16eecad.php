<?php

/* AppBundle:Page:index.html.twig */
class __TwigTemplate_54bd63c9936c088e8d5b46cd0e753efbbc36d71465d68a4957a1b4eada8d7484 extends Twig_Template
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
        $__internal_54340428fc471133d5e11dbd9a95e2d1ec54d62478bbfceaa339970da4027712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54340428fc471133d5e11dbd9a95e2d1ec54d62478bbfceaa339970da4027712->enter($__internal_54340428fc471133d5e11dbd9a95e2d1ec54d62478bbfceaa339970da4027712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:index.html.twig"));

        $__internal_dbbfbc879a2d90c09d4d7ab2f19ddead146acb40261f8cdbdba5c61648d14c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbfbc879a2d90c09d4d7ab2f19ddead146acb40261f8cdbdba5c61648d14c93->enter($__internal_dbbfbc879a2d90c09d4d7ab2f19ddead146acb40261f8cdbdba5c61648d14c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54340428fc471133d5e11dbd9a95e2d1ec54d62478bbfceaa339970da4027712->leave($__internal_54340428fc471133d5e11dbd9a95e2d1ec54d62478bbfceaa339970da4027712_prof);

        
        $__internal_dbbfbc879a2d90c09d4d7ab2f19ddead146acb40261f8cdbdba5c61648d14c93->leave($__internal_dbbfbc879a2d90c09d4d7ab2f19ddead146acb40261f8cdbdba5c61648d14c93_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0728d912226938147f8ecca66ba88b8a8cc5d6316ae8cb67a32448f6ab781a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0728d912226938147f8ecca66ba88b8a8cc5d6316ae8cb67a32448f6ab781a8->enter($__internal_e0728d912226938147f8ecca66ba88b8a8cc5d6316ae8cb67a32448f6ab781a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eedc00b440b286b1ce1676ea7739971500274904176e7c05c49ad8d5b79c7933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eedc00b440b286b1ce1676ea7739971500274904176e7c05c49ad8d5b79c7933->enter($__internal_eedc00b440b286b1ce1676ea7739971500274904176e7c05c49ad8d5b79c7933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Article List";
        
        $__internal_eedc00b440b286b1ce1676ea7739971500274904176e7c05c49ad8d5b79c7933->leave($__internal_eedc00b440b286b1ce1676ea7739971500274904176e7c05c49ad8d5b79c7933_prof);

        
        $__internal_e0728d912226938147f8ecca66ba88b8a8cc5d6316ae8cb67a32448f6ab781a8->leave($__internal_e0728d912226938147f8ecca66ba88b8a8cc5d6316ae8cb67a32448f6ab781a8_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_8c02faabcbc9a0848bee1d621c47cade0042afa8700a217aaf2336e3b5e59af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c02faabcbc9a0848bee1d621c47cade0042afa8700a217aaf2336e3b5e59af2->enter($__internal_8c02faabcbc9a0848bee1d621c47cade0042afa8700a217aaf2336e3b5e59af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_01d41ff00e29e41806d2fc4b00673967bd8d911b8717adfcd919e3475cd31b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d41ff00e29e41806d2fc4b00673967bd8d911b8717adfcd919e3475cd31b70->enter($__internal_01d41ff00e29e41806d2fc4b00673967bd8d911b8717adfcd919e3475cd31b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
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
        
        $__internal_01d41ff00e29e41806d2fc4b00673967bd8d911b8717adfcd919e3475cd31b70->leave($__internal_01d41ff00e29e41806d2fc4b00673967bd8d911b8717adfcd919e3475cd31b70_prof);

        
        $__internal_8c02faabcbc9a0848bee1d621c47cade0042afa8700a217aaf2336e3b5e59af2->leave($__internal_8c02faabcbc9a0848bee1d621c47cade0042afa8700a217aaf2336e3b5e59af2_prof);

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
