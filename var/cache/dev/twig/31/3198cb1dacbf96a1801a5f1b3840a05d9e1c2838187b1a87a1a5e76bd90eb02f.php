<?php

/* base.html.twig */
class __TwigTemplate_79edc3f4c1d0bf2b285c68f8d99e793c8175003b3194091f5cbe331b26eb8c38 extends Twig_Template
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
        $__internal_b2fd33fad0357d6140edeb34be18c332ff5c683cd9b730937df12719d44fbdbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2fd33fad0357d6140edeb34be18c332ff5c683cd9b730937df12719d44fbdbc->enter($__internal_b2fd33fad0357d6140edeb34be18c332ff5c683cd9b730937df12719d44fbdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a731b2e73664c775fa13ad4d4a68128e3ac7fbc898fec2e5adce6521eab96bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a731b2e73664c775fa13ad4d4a68128e3ac7fbc898fec2e5adce6521eab96bf5->enter($__internal_a731b2e73664c775fa13ad4d4a68128e3ac7fbc898fec2e5adce6521eab96bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b2fd33fad0357d6140edeb34be18c332ff5c683cd9b730937df12719d44fbdbc->leave($__internal_b2fd33fad0357d6140edeb34be18c332ff5c683cd9b730937df12719d44fbdbc_prof);

        
        $__internal_a731b2e73664c775fa13ad4d4a68128e3ac7fbc898fec2e5adce6521eab96bf5->leave($__internal_a731b2e73664c775fa13ad4d4a68128e3ac7fbc898fec2e5adce6521eab96bf5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_530e432a3d2309a89d7165297f35c54e3603ba104d50f2533e3f8f3d58d03889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530e432a3d2309a89d7165297f35c54e3603ba104d50f2533e3f8f3d58d03889->enter($__internal_530e432a3d2309a89d7165297f35c54e3603ba104d50f2533e3f8f3d58d03889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1a04a37d4d31980e08e99aeb442d8ba2c075483071192a6cb4f2d7331b4fd65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a04a37d4d31980e08e99aeb442d8ba2c075483071192a6cb4f2d7331b4fd65->enter($__internal_d1a04a37d4d31980e08e99aeb442d8ba2c075483071192a6cb4f2d7331b4fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d1a04a37d4d31980e08e99aeb442d8ba2c075483071192a6cb4f2d7331b4fd65->leave($__internal_d1a04a37d4d31980e08e99aeb442d8ba2c075483071192a6cb4f2d7331b4fd65_prof);

        
        $__internal_530e432a3d2309a89d7165297f35c54e3603ba104d50f2533e3f8f3d58d03889->leave($__internal_530e432a3d2309a89d7165297f35c54e3603ba104d50f2533e3f8f3d58d03889_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ba899ea76a794799d17fe728997f830c03a70dea98bf2de94f27a7cb3ef7b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba899ea76a794799d17fe728997f830c03a70dea98bf2de94f27a7cb3ef7b7d->enter($__internal_3ba899ea76a794799d17fe728997f830c03a70dea98bf2de94f27a7cb3ef7b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_961ec3d67c1a8a8c3588b89b76220ff3aa06295fdbee4babd736678c4edb5ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961ec3d67c1a8a8c3588b89b76220ff3aa06295fdbee4babd736678c4edb5ff9->enter($__internal_961ec3d67c1a8a8c3588b89b76220ff3aa06295fdbee4babd736678c4edb5ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_961ec3d67c1a8a8c3588b89b76220ff3aa06295fdbee4babd736678c4edb5ff9->leave($__internal_961ec3d67c1a8a8c3588b89b76220ff3aa06295fdbee4babd736678c4edb5ff9_prof);

        
        $__internal_3ba899ea76a794799d17fe728997f830c03a70dea98bf2de94f27a7cb3ef7b7d->leave($__internal_3ba899ea76a794799d17fe728997f830c03a70dea98bf2de94f27a7cb3ef7b7d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_244eeecd417eb67c5a046fe04d3a9038ecfdcf3e6b7832ab303d06e60d647847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_244eeecd417eb67c5a046fe04d3a9038ecfdcf3e6b7832ab303d06e60d647847->enter($__internal_244eeecd417eb67c5a046fe04d3a9038ecfdcf3e6b7832ab303d06e60d647847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b89fafc6450a855638255359ae114f1b1531ad9c43ad0c4b0e71e1695844ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b89fafc6450a855638255359ae114f1b1531ad9c43ad0c4b0e71e1695844ae2->enter($__internal_2b89fafc6450a855638255359ae114f1b1531ad9c43ad0c4b0e71e1695844ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b89fafc6450a855638255359ae114f1b1531ad9c43ad0c4b0e71e1695844ae2->leave($__internal_2b89fafc6450a855638255359ae114f1b1531ad9c43ad0c4b0e71e1695844ae2_prof);

        
        $__internal_244eeecd417eb67c5a046fe04d3a9038ecfdcf3e6b7832ab303d06e60d647847->leave($__internal_244eeecd417eb67c5a046fe04d3a9038ecfdcf3e6b7832ab303d06e60d647847_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7deb05f607811655712512405de10a1ce57959393ac919d632b67580b0289e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7deb05f607811655712512405de10a1ce57959393ac919d632b67580b0289e78->enter($__internal_7deb05f607811655712512405de10a1ce57959393ac919d632b67580b0289e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7922549c8b6e612a5d4c14e74a6edd27bc7641c115f7be66b99a9bee1771b7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7922549c8b6e612a5d4c14e74a6edd27bc7641c115f7be66b99a9bee1771b7da->enter($__internal_7922549c8b6e612a5d4c14e74a6edd27bc7641c115f7be66b99a9bee1771b7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7922549c8b6e612a5d4c14e74a6edd27bc7641c115f7be66b99a9bee1771b7da->leave($__internal_7922549c8b6e612a5d4c14e74a6edd27bc7641c115f7be66b99a9bee1771b7da_prof);

        
        $__internal_7deb05f607811655712512405de10a1ce57959393ac919d632b67580b0289e78->leave($__internal_7deb05f607811655712512405de10a1ce57959393ac919d632b67580b0289e78_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "D:\\xampp\\htdocs\\admin\\app\\Resources\\views\\base.html.twig");
    }
}
