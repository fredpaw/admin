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
        $__internal_706fd3300a65d74ef20a6e3e7c4b03c4c93811b3408e8bef86629d89466cf91b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706fd3300a65d74ef20a6e3e7c4b03c4c93811b3408e8bef86629d89466cf91b->enter($__internal_706fd3300a65d74ef20a6e3e7c4b03c4c93811b3408e8bef86629d89466cf91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_cb451f6f9644d8b74c9b66dccd0a2684fce8c720688c3f421d342d02f6e2696d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb451f6f9644d8b74c9b66dccd0a2684fce8c720688c3f421d342d02f6e2696d->enter($__internal_cb451f6f9644d8b74c9b66dccd0a2684fce8c720688c3f421d342d02f6e2696d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_706fd3300a65d74ef20a6e3e7c4b03c4c93811b3408e8bef86629d89466cf91b->leave($__internal_706fd3300a65d74ef20a6e3e7c4b03c4c93811b3408e8bef86629d89466cf91b_prof);

        
        $__internal_cb451f6f9644d8b74c9b66dccd0a2684fce8c720688c3f421d342d02f6e2696d->leave($__internal_cb451f6f9644d8b74c9b66dccd0a2684fce8c720688c3f421d342d02f6e2696d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d74b6bef73489893d24c4c4d6deec9ece2591fa36d12a01dfddbff12d8221ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d74b6bef73489893d24c4c4d6deec9ece2591fa36d12a01dfddbff12d8221ba->enter($__internal_8d74b6bef73489893d24c4c4d6deec9ece2591fa36d12a01dfddbff12d8221ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_859f27c0836d9be1cad07931bea067a130f35eb57247026f3a772b5afa0c6cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859f27c0836d9be1cad07931bea067a130f35eb57247026f3a772b5afa0c6cbe->enter($__internal_859f27c0836d9be1cad07931bea067a130f35eb57247026f3a772b5afa0c6cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_859f27c0836d9be1cad07931bea067a130f35eb57247026f3a772b5afa0c6cbe->leave($__internal_859f27c0836d9be1cad07931bea067a130f35eb57247026f3a772b5afa0c6cbe_prof);

        
        $__internal_8d74b6bef73489893d24c4c4d6deec9ece2591fa36d12a01dfddbff12d8221ba->leave($__internal_8d74b6bef73489893d24c4c4d6deec9ece2591fa36d12a01dfddbff12d8221ba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_485a91b6f311bf3b8ff8c81449c880ccb17dfd4a046b4423f34b29acec85e076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485a91b6f311bf3b8ff8c81449c880ccb17dfd4a046b4423f34b29acec85e076->enter($__internal_485a91b6f311bf3b8ff8c81449c880ccb17dfd4a046b4423f34b29acec85e076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1915a5f42e0c32d1736d0dd345289a5082ae3cf93675dbd94723762f599cdb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1915a5f42e0c32d1736d0dd345289a5082ae3cf93675dbd94723762f599cdb56->enter($__internal_1915a5f42e0c32d1736d0dd345289a5082ae3cf93675dbd94723762f599cdb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1915a5f42e0c32d1736d0dd345289a5082ae3cf93675dbd94723762f599cdb56->leave($__internal_1915a5f42e0c32d1736d0dd345289a5082ae3cf93675dbd94723762f599cdb56_prof);

        
        $__internal_485a91b6f311bf3b8ff8c81449c880ccb17dfd4a046b4423f34b29acec85e076->leave($__internal_485a91b6f311bf3b8ff8c81449c880ccb17dfd4a046b4423f34b29acec85e076_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dadfeb75ea7722d007d4c8baae93ef66b0a737f394afde6f22c00d646f6b493d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dadfeb75ea7722d007d4c8baae93ef66b0a737f394afde6f22c00d646f6b493d->enter($__internal_dadfeb75ea7722d007d4c8baae93ef66b0a737f394afde6f22c00d646f6b493d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_558af4e3538ef9001bb6e9c2d9c7e223234e41864819aa8bb880bc5f6841f081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558af4e3538ef9001bb6e9c2d9c7e223234e41864819aa8bb880bc5f6841f081->enter($__internal_558af4e3538ef9001bb6e9c2d9c7e223234e41864819aa8bb880bc5f6841f081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_558af4e3538ef9001bb6e9c2d9c7e223234e41864819aa8bb880bc5f6841f081->leave($__internal_558af4e3538ef9001bb6e9c2d9c7e223234e41864819aa8bb880bc5f6841f081_prof);

        
        $__internal_dadfeb75ea7722d007d4c8baae93ef66b0a737f394afde6f22c00d646f6b493d->leave($__internal_dadfeb75ea7722d007d4c8baae93ef66b0a737f394afde6f22c00d646f6b493d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df1b1be061241b42a2002929d62030eb8dcea195a4af216146d026691216575b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1b1be061241b42a2002929d62030eb8dcea195a4af216146d026691216575b->enter($__internal_df1b1be061241b42a2002929d62030eb8dcea195a4af216146d026691216575b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_511abb433c863d083fae5a7ccb13e9ba7f0091cb859b670143762c9a194e88f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511abb433c863d083fae5a7ccb13e9ba7f0091cb859b670143762c9a194e88f7->enter($__internal_511abb433c863d083fae5a7ccb13e9ba7f0091cb859b670143762c9a194e88f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_511abb433c863d083fae5a7ccb13e9ba7f0091cb859b670143762c9a194e88f7->leave($__internal_511abb433c863d083fae5a7ccb13e9ba7f0091cb859b670143762c9a194e88f7_prof);

        
        $__internal_df1b1be061241b42a2002929d62030eb8dcea195a4af216146d026691216575b->leave($__internal_df1b1be061241b42a2002929d62030eb8dcea195a4af216146d026691216575b_prof);

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
