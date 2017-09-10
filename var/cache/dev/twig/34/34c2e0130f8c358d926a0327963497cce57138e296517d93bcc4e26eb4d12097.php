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
        $__internal_8c0237f53e9510267b4f2dcb3f8b2108128443cda4e25d9dc11fbd63630c5d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0237f53e9510267b4f2dcb3f8b2108128443cda4e25d9dc11fbd63630c5d35->enter($__internal_8c0237f53e9510267b4f2dcb3f8b2108128443cda4e25d9dc11fbd63630c5d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_85592057202e9971bf14d36ca59de3eded599b79a13e82a1bd8277482dc5ccf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85592057202e9971bf14d36ca59de3eded599b79a13e82a1bd8277482dc5ccf8->enter($__internal_85592057202e9971bf14d36ca59de3eded599b79a13e82a1bd8277482dc5ccf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8c0237f53e9510267b4f2dcb3f8b2108128443cda4e25d9dc11fbd63630c5d35->leave($__internal_8c0237f53e9510267b4f2dcb3f8b2108128443cda4e25d9dc11fbd63630c5d35_prof);

        
        $__internal_85592057202e9971bf14d36ca59de3eded599b79a13e82a1bd8277482dc5ccf8->leave($__internal_85592057202e9971bf14d36ca59de3eded599b79a13e82a1bd8277482dc5ccf8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f08bd3553404344489020fcd4a756e8ee2c2c4c0b126b41c5e2ffd8b01dd0237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08bd3553404344489020fcd4a756e8ee2c2c4c0b126b41c5e2ffd8b01dd0237->enter($__internal_f08bd3553404344489020fcd4a756e8ee2c2c4c0b126b41c5e2ffd8b01dd0237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c45fdb2d6b1112492a3445c5e884c5cc60fb03b3703d4fefc56c87353c5913c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c45fdb2d6b1112492a3445c5e884c5cc60fb03b3703d4fefc56c87353c5913c->enter($__internal_5c45fdb2d6b1112492a3445c5e884c5cc60fb03b3703d4fefc56c87353c5913c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5c45fdb2d6b1112492a3445c5e884c5cc60fb03b3703d4fefc56c87353c5913c->leave($__internal_5c45fdb2d6b1112492a3445c5e884c5cc60fb03b3703d4fefc56c87353c5913c_prof);

        
        $__internal_f08bd3553404344489020fcd4a756e8ee2c2c4c0b126b41c5e2ffd8b01dd0237->leave($__internal_f08bd3553404344489020fcd4a756e8ee2c2c4c0b126b41c5e2ffd8b01dd0237_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db52648017f0e594d8bcb93bad8befd4bfa2f6b4aa1cf7d3152c62e08aba1409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db52648017f0e594d8bcb93bad8befd4bfa2f6b4aa1cf7d3152c62e08aba1409->enter($__internal_db52648017f0e594d8bcb93bad8befd4bfa2f6b4aa1cf7d3152c62e08aba1409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_630226eaa5dcdeb3049673b331c88ddbf98c9f611d4f02424b1dbc0533fcc069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630226eaa5dcdeb3049673b331c88ddbf98c9f611d4f02424b1dbc0533fcc069->enter($__internal_630226eaa5dcdeb3049673b331c88ddbf98c9f611d4f02424b1dbc0533fcc069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_630226eaa5dcdeb3049673b331c88ddbf98c9f611d4f02424b1dbc0533fcc069->leave($__internal_630226eaa5dcdeb3049673b331c88ddbf98c9f611d4f02424b1dbc0533fcc069_prof);

        
        $__internal_db52648017f0e594d8bcb93bad8befd4bfa2f6b4aa1cf7d3152c62e08aba1409->leave($__internal_db52648017f0e594d8bcb93bad8befd4bfa2f6b4aa1cf7d3152c62e08aba1409_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b16890cd0779449dcf1a77a966868b8ee54e1be55694956071ffdd1a165357ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16890cd0779449dcf1a77a966868b8ee54e1be55694956071ffdd1a165357ee->enter($__internal_b16890cd0779449dcf1a77a966868b8ee54e1be55694956071ffdd1a165357ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37309647234597bd2477dbedbade16e035000d2654e45d4054c937dac1c68bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37309647234597bd2477dbedbade16e035000d2654e45d4054c937dac1c68bf8->enter($__internal_37309647234597bd2477dbedbade16e035000d2654e45d4054c937dac1c68bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37309647234597bd2477dbedbade16e035000d2654e45d4054c937dac1c68bf8->leave($__internal_37309647234597bd2477dbedbade16e035000d2654e45d4054c937dac1c68bf8_prof);

        
        $__internal_b16890cd0779449dcf1a77a966868b8ee54e1be55694956071ffdd1a165357ee->leave($__internal_b16890cd0779449dcf1a77a966868b8ee54e1be55694956071ffdd1a165357ee_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64c70891a518d260915105e3454d3e854a94a4de142cc57ba22eacf0ede7db67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c70891a518d260915105e3454d3e854a94a4de142cc57ba22eacf0ede7db67->enter($__internal_64c70891a518d260915105e3454d3e854a94a4de142cc57ba22eacf0ede7db67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ebd5a6b9a4c7c72ad968ec20eec91cce5e7f2ac49b742341cd840158b951dfc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd5a6b9a4c7c72ad968ec20eec91cce5e7f2ac49b742341cd840158b951dfc8->enter($__internal_ebd5a6b9a4c7c72ad968ec20eec91cce5e7f2ac49b742341cd840158b951dfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ebd5a6b9a4c7c72ad968ec20eec91cce5e7f2ac49b742341cd840158b951dfc8->leave($__internal_ebd5a6b9a4c7c72ad968ec20eec91cce5e7f2ac49b742341cd840158b951dfc8_prof);

        
        $__internal_64c70891a518d260915105e3454d3e854a94a4de142cc57ba22eacf0ede7db67->leave($__internal_64c70891a518d260915105e3454d3e854a94a4de142cc57ba22eacf0ede7db67_prof);

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
