<?php

/* AppBundle:Page:index.html.twig */
class __TwigTemplate_293657d8f2a206dbaa32512be65f6e179ca48b7767cc07127fb931d7bda6a279 extends Twig_Template
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
        $__internal_a2568badebf0f51ef10d61daa85bb9d151bb2e851e46cff90d138c7d5aa2b184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2568badebf0f51ef10d61daa85bb9d151bb2e851e46cff90d138c7d5aa2b184->enter($__internal_a2568badebf0f51ef10d61daa85bb9d151bb2e851e46cff90d138c7d5aa2b184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:index.html.twig"));

        $__internal_cd2a109aa401d5e2bf87aa569a0c6f82cde92ee863e11f2419ce7dc0eb794d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2a109aa401d5e2bf87aa569a0c6f82cde92ee863e11f2419ce7dc0eb794d9c->enter($__internal_cd2a109aa401d5e2bf87aa569a0c6f82cde92ee863e11f2419ce7dc0eb794d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2568badebf0f51ef10d61daa85bb9d151bb2e851e46cff90d138c7d5aa2b184->leave($__internal_a2568badebf0f51ef10d61daa85bb9d151bb2e851e46cff90d138c7d5aa2b184_prof);

        
        $__internal_cd2a109aa401d5e2bf87aa569a0c6f82cde92ee863e11f2419ce7dc0eb794d9c->leave($__internal_cd2a109aa401d5e2bf87aa569a0c6f82cde92ee863e11f2419ce7dc0eb794d9c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccdce76e2955aa51775b3e6b970b559e65a9ec349ed9027878c416d16d443c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccdce76e2955aa51775b3e6b970b559e65a9ec349ed9027878c416d16d443c42->enter($__internal_ccdce76e2955aa51775b3e6b970b559e65a9ec349ed9027878c416d16d443c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4cdc1c3f330f08f71db887e97b0419e5bb69efe1f98061d5c5b29d8b9db0a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cdc1c3f330f08f71db887e97b0419e5bb69efe1f98061d5c5b29d8b9db0a31->enter($__internal_b4cdc1c3f330f08f71db887e97b0419e5bb69efe1f98061d5c5b29d8b9db0a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Article List";
        
        $__internal_b4cdc1c3f330f08f71db887e97b0419e5bb69efe1f98061d5c5b29d8b9db0a31->leave($__internal_b4cdc1c3f330f08f71db887e97b0419e5bb69efe1f98061d5c5b29d8b9db0a31_prof);

        
        $__internal_ccdce76e2955aa51775b3e6b970b559e65a9ec349ed9027878c416d16d443c42->leave($__internal_ccdce76e2955aa51775b3e6b970b559e65a9ec349ed9027878c416d16d443c42_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_9eee5022ab9867c751daa74bf9b98dc242a39efd0bc262de9f2228d6d3af215b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eee5022ab9867c751daa74bf9b98dc242a39efd0bc262de9f2228d6d3af215b->enter($__internal_9eee5022ab9867c751daa74bf9b98dc242a39efd0bc262de9f2228d6d3af215b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2f31c047c8aece55a59b9adcdc4dbe943e1fa0166740a0a0bd515b0bee9b2d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f31c047c8aece55a59b9adcdc4dbe943e1fa0166740a0a0bd515b0bee9b2d62->enter($__internal_2f31c047c8aece55a59b9adcdc4dbe943e1fa0166740a0a0bd515b0bee9b2d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2f31c047c8aece55a59b9adcdc4dbe943e1fa0166740a0a0bd515b0bee9b2d62->leave($__internal_2f31c047c8aece55a59b9adcdc4dbe943e1fa0166740a0a0bd515b0bee9b2d62_prof);

        
        $__internal_9eee5022ab9867c751daa74bf9b98dc242a39efd0bc262de9f2228d6d3af215b->leave($__internal_9eee5022ab9867c751daa74bf9b98dc242a39efd0bc262de9f2228d6d3af215b_prof);

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
