<?php

/* ::base.html.twig */
class __TwigTemplate_7ba426c3fd6db79c519a62bea0910f1177809241c289686031b107a8977fbd24 extends Twig_Template
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
        $__internal_77eb61b01b88c8f1e50ed6597e5147dc9f7db7056264f0b2948afc2e5940629d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77eb61b01b88c8f1e50ed6597e5147dc9f7db7056264f0b2948afc2e5940629d->enter($__internal_77eb61b01b88c8f1e50ed6597e5147dc9f7db7056264f0b2948afc2e5940629d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7a14d371347e3bf176db832a8beff9817d6ff8f295c6ee96d6208e976ad8b49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a14d371347e3bf176db832a8beff9817d6ff8f295c6ee96d6208e976ad8b49c->enter($__internal_7a14d371347e3bf176db832a8beff9817d6ff8f295c6ee96d6208e976ad8b49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"js/ie10-viewport-bug-workaround.js\"></script>
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_77eb61b01b88c8f1e50ed6597e5147dc9f7db7056264f0b2948afc2e5940629d->leave($__internal_77eb61b01b88c8f1e50ed6597e5147dc9f7db7056264f0b2948afc2e5940629d_prof);

        
        $__internal_7a14d371347e3bf176db832a8beff9817d6ff8f295c6ee96d6208e976ad8b49c->leave($__internal_7a14d371347e3bf176db832a8beff9817d6ff8f295c6ee96d6208e976ad8b49c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a38cc9f72d63b32869cc4287f3827da1a80bce4e084b4cb5541ab9ac45dddac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38cc9f72d63b32869cc4287f3827da1a80bce4e084b4cb5541ab9ac45dddac9->enter($__internal_a38cc9f72d63b32869cc4287f3827da1a80bce4e084b4cb5541ab9ac45dddac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c2800f043f8ff4a80b293a9e6834c16071786ca0bf491a3dae4b62adda32ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2800f043f8ff4a80b293a9e6834c16071786ca0bf491a3dae4b62adda32ccd->enter($__internal_2c2800f043f8ff4a80b293a9e6834c16071786ca0bf491a3dae4b62adda32ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2c2800f043f8ff4a80b293a9e6834c16071786ca0bf491a3dae4b62adda32ccd->leave($__internal_2c2800f043f8ff4a80b293a9e6834c16071786ca0bf491a3dae4b62adda32ccd_prof);

        
        $__internal_a38cc9f72d63b32869cc4287f3827da1a80bce4e084b4cb5541ab9ac45dddac9->leave($__internal_a38cc9f72d63b32869cc4287f3827da1a80bce4e084b4cb5541ab9ac45dddac9_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da77c234a1ce75253dab39315f4d235a8138e5fca6c2da9d1f26f3a07867d64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da77c234a1ce75253dab39315f4d235a8138e5fca6c2da9d1f26f3a07867d64f->enter($__internal_da77c234a1ce75253dab39315f4d235a8138e5fca6c2da9d1f26f3a07867d64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_da991f80c4ea6b96acaa849380a69a60e5247c20ed0cf58a6b2769ea3e8fca51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da991f80c4ea6b96acaa849380a69a60e5247c20ed0cf58a6b2769ea3e8fca51->enter($__internal_da991f80c4ea6b96acaa849380a69a60e5247c20ed0cf58a6b2769ea3e8fca51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da991f80c4ea6b96acaa849380a69a60e5247c20ed0cf58a6b2769ea3e8fca51->leave($__internal_da991f80c4ea6b96acaa849380a69a60e5247c20ed0cf58a6b2769ea3e8fca51_prof);

        
        $__internal_da77c234a1ce75253dab39315f4d235a8138e5fca6c2da9d1f26f3a07867d64f->leave($__internal_da77c234a1ce75253dab39315f4d235a8138e5fca6c2da9d1f26f3a07867d64f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd4db3d21e51a920b4225f3f6c649e5ad19dfe723fddf968977a7f5d2e38543f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4db3d21e51a920b4225f3f6c649e5ad19dfe723fddf968977a7f5d2e38543f->enter($__internal_bd4db3d21e51a920b4225f3f6c649e5ad19dfe723fddf968977a7f5d2e38543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c39c909c9a3cc8564ec3b675d05d5b2a72406e655f54cbdea27ad57f78a6761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c39c909c9a3cc8564ec3b675d05d5b2a72406e655f54cbdea27ad57f78a6761->enter($__internal_1c39c909c9a3cc8564ec3b675d05d5b2a72406e655f54cbdea27ad57f78a6761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c39c909c9a3cc8564ec3b675d05d5b2a72406e655f54cbdea27ad57f78a6761->leave($__internal_1c39c909c9a3cc8564ec3b675d05d5b2a72406e655f54cbdea27ad57f78a6761_prof);

        
        $__internal_bd4db3d21e51a920b4225f3f6c649e5ad19dfe723fddf968977a7f5d2e38543f->leave($__internal_bd4db3d21e51a920b4225f3f6c649e5ad19dfe723fddf968977a7f5d2e38543f_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e475617fc27dd849b245bd99e713ce2ee2c56ed1011dbceba8efefc43c0490a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e475617fc27dd849b245bd99e713ce2ee2c56ed1011dbceba8efefc43c0490a->enter($__internal_4e475617fc27dd849b245bd99e713ce2ee2c56ed1011dbceba8efefc43c0490a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b846772ab11f10fa01f45468fff7b9e553683fb5b16573104a7190f79961c265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b846772ab11f10fa01f45468fff7b9e553683fb5b16573104a7190f79961c265->enter($__internal_b846772ab11f10fa01f45468fff7b9e553683fb5b16573104a7190f79961c265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b846772ab11f10fa01f45468fff7b9e553683fb5b16573104a7190f79961c265->leave($__internal_b846772ab11f10fa01f45468fff7b9e553683fb5b16573104a7190f79961c265_prof);

        
        $__internal_4e475617fc27dd849b245bd99e713ce2ee2c56ed1011dbceba8efefc43c0490a->leave($__internal_4e475617fc27dd849b245bd99e713ce2ee2c56ed1011dbceba8efefc43c0490a_prof);

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
        return array (  124 => 17,  107 => 11,  90 => 7,  72 => 5,  60 => 18,  58 => 17,  51 => 12,  49 => 11,  42 => 8,  40 => 7,  35 => 5,  29 => 1,);
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
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"js/ie10-viewport-bug-workaround.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\xampp\\htdocs\\admin\\app/Resources\\views/base.html.twig");
    }
}
