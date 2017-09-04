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
        $__internal_fa44d4d93131b7c26cc75d0e7390d608cdfea1bb3a4db3dde4fafc602fdf53cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa44d4d93131b7c26cc75d0e7390d608cdfea1bb3a4db3dde4fafc602fdf53cc->enter($__internal_fa44d4d93131b7c26cc75d0e7390d608cdfea1bb3a4db3dde4fafc602fdf53cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_88a1288206edf205dca87337f98ac9073e26489bde768fd29c19a7b4009ff9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a1288206edf205dca87337f98ac9073e26489bde768fd29c19a7b4009ff9ae->enter($__internal_88a1288206edf205dca87337f98ac9073e26489bde768fd29c19a7b4009ff9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fa44d4d93131b7c26cc75d0e7390d608cdfea1bb3a4db3dde4fafc602fdf53cc->leave($__internal_fa44d4d93131b7c26cc75d0e7390d608cdfea1bb3a4db3dde4fafc602fdf53cc_prof);

        
        $__internal_88a1288206edf205dca87337f98ac9073e26489bde768fd29c19a7b4009ff9ae->leave($__internal_88a1288206edf205dca87337f98ac9073e26489bde768fd29c19a7b4009ff9ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e3bbe4e668deaf3ed8ede17c154c9492fabb3711c33093299eda0c8dabe2146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3bbe4e668deaf3ed8ede17c154c9492fabb3711c33093299eda0c8dabe2146->enter($__internal_9e3bbe4e668deaf3ed8ede17c154c9492fabb3711c33093299eda0c8dabe2146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52e7cef7f700e1939a46fdfaf7f596fc9efb568ff4c13b0c0331416630fa9dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e7cef7f700e1939a46fdfaf7f596fc9efb568ff4c13b0c0331416630fa9dfe->enter($__internal_52e7cef7f700e1939a46fdfaf7f596fc9efb568ff4c13b0c0331416630fa9dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_52e7cef7f700e1939a46fdfaf7f596fc9efb568ff4c13b0c0331416630fa9dfe->leave($__internal_52e7cef7f700e1939a46fdfaf7f596fc9efb568ff4c13b0c0331416630fa9dfe_prof);

        
        $__internal_9e3bbe4e668deaf3ed8ede17c154c9492fabb3711c33093299eda0c8dabe2146->leave($__internal_9e3bbe4e668deaf3ed8ede17c154c9492fabb3711c33093299eda0c8dabe2146_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1f0a707a120f356608621acfe3347d444d823ad6b8eaec35fbfa94dac2d8c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f0a707a120f356608621acfe3347d444d823ad6b8eaec35fbfa94dac2d8c53->enter($__internal_a1f0a707a120f356608621acfe3347d444d823ad6b8eaec35fbfa94dac2d8c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7eba6d1a372ef77ac4dfb62013c99c7d241f43954627b8b2acb6ec2370a8edb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eba6d1a372ef77ac4dfb62013c99c7d241f43954627b8b2acb6ec2370a8edb9->enter($__internal_7eba6d1a372ef77ac4dfb62013c99c7d241f43954627b8b2acb6ec2370a8edb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7eba6d1a372ef77ac4dfb62013c99c7d241f43954627b8b2acb6ec2370a8edb9->leave($__internal_7eba6d1a372ef77ac4dfb62013c99c7d241f43954627b8b2acb6ec2370a8edb9_prof);

        
        $__internal_a1f0a707a120f356608621acfe3347d444d823ad6b8eaec35fbfa94dac2d8c53->leave($__internal_a1f0a707a120f356608621acfe3347d444d823ad6b8eaec35fbfa94dac2d8c53_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_33446db716594226be1fbca9a26ad92db4f485756321c20f154aed5bc1c4c30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33446db716594226be1fbca9a26ad92db4f485756321c20f154aed5bc1c4c30b->enter($__internal_33446db716594226be1fbca9a26ad92db4f485756321c20f154aed5bc1c4c30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bdb4a5897743c357845a86d498d469c5bc076f0559a50a53bf9d6fd4a74abac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb4a5897743c357845a86d498d469c5bc076f0559a50a53bf9d6fd4a74abac9->enter($__internal_bdb4a5897743c357845a86d498d469c5bc076f0559a50a53bf9d6fd4a74abac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bdb4a5897743c357845a86d498d469c5bc076f0559a50a53bf9d6fd4a74abac9->leave($__internal_bdb4a5897743c357845a86d498d469c5bc076f0559a50a53bf9d6fd4a74abac9_prof);

        
        $__internal_33446db716594226be1fbca9a26ad92db4f485756321c20f154aed5bc1c4c30b->leave($__internal_33446db716594226be1fbca9a26ad92db4f485756321c20f154aed5bc1c4c30b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4164dd118bdd662a5ce9c4d4d42437119600dfa7c7e2fb8ae84a944cd248163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4164dd118bdd662a5ce9c4d4d42437119600dfa7c7e2fb8ae84a944cd248163->enter($__internal_d4164dd118bdd662a5ce9c4d4d42437119600dfa7c7e2fb8ae84a944cd248163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1ea6c8767955dcb834bcd1cd4ceacc8c828575a5e504b5b91c28e857a9ac3954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea6c8767955dcb834bcd1cd4ceacc8c828575a5e504b5b91c28e857a9ac3954->enter($__internal_1ea6c8767955dcb834bcd1cd4ceacc8c828575a5e504b5b91c28e857a9ac3954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1ea6c8767955dcb834bcd1cd4ceacc8c828575a5e504b5b91c28e857a9ac3954->leave($__internal_1ea6c8767955dcb834bcd1cd4ceacc8c828575a5e504b5b91c28e857a9ac3954_prof);

        
        $__internal_d4164dd118bdd662a5ce9c4d4d42437119600dfa7c7e2fb8ae84a944cd248163->leave($__internal_d4164dd118bdd662a5ce9c4d4d42437119600dfa7c7e2fb8ae84a944cd248163_prof);

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
