<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
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
        $__internal_de628d99840d22ba96bcbe4b5f70eaadb639b68475308f71d5c567f664ff5541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de628d99840d22ba96bcbe4b5f70eaadb639b68475308f71d5c567f664ff5541->enter($__internal_de628d99840d22ba96bcbe4b5f70eaadb639b68475308f71d5c567f664ff5541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1674680a91c54d0853fb916354c535c20f832e9be715c64c54313f45ddaf3094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1674680a91c54d0853fb916354c535c20f832e9be715c64c54313f45ddaf3094->enter($__internal_1674680a91c54d0853fb916354c535c20f832e9be715c64c54313f45ddaf3094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_de628d99840d22ba96bcbe4b5f70eaadb639b68475308f71d5c567f664ff5541->leave($__internal_de628d99840d22ba96bcbe4b5f70eaadb639b68475308f71d5c567f664ff5541_prof);

        
        $__internal_1674680a91c54d0853fb916354c535c20f832e9be715c64c54313f45ddaf3094->leave($__internal_1674680a91c54d0853fb916354c535c20f832e9be715c64c54313f45ddaf3094_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a286530010a5e4ab584682f47a4d5aef52a311956ac084939275cd0ee192504e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a286530010a5e4ab584682f47a4d5aef52a311956ac084939275cd0ee192504e->enter($__internal_a286530010a5e4ab584682f47a4d5aef52a311956ac084939275cd0ee192504e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb7ac12b43f4985465e022bf7b06f3801df0b2fc5106f2226c42ea87a77e1bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7ac12b43f4985465e022bf7b06f3801df0b2fc5106f2226c42ea87a77e1bfb->enter($__internal_cb7ac12b43f4985465e022bf7b06f3801df0b2fc5106f2226c42ea87a77e1bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cb7ac12b43f4985465e022bf7b06f3801df0b2fc5106f2226c42ea87a77e1bfb->leave($__internal_cb7ac12b43f4985465e022bf7b06f3801df0b2fc5106f2226c42ea87a77e1bfb_prof);

        
        $__internal_a286530010a5e4ab584682f47a4d5aef52a311956ac084939275cd0ee192504e->leave($__internal_a286530010a5e4ab584682f47a4d5aef52a311956ac084939275cd0ee192504e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31371477e7983be0d8956bd974d95ccbb873587baa313a5464d6d7752343a793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31371477e7983be0d8956bd974d95ccbb873587baa313a5464d6d7752343a793->enter($__internal_31371477e7983be0d8956bd974d95ccbb873587baa313a5464d6d7752343a793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5b6db9032ec0361b611261248b37e669e9e192128adc08ea9bc3f3405b16bbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6db9032ec0361b611261248b37e669e9e192128adc08ea9bc3f3405b16bbbc->enter($__internal_5b6db9032ec0361b611261248b37e669e9e192128adc08ea9bc3f3405b16bbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5b6db9032ec0361b611261248b37e669e9e192128adc08ea9bc3f3405b16bbbc->leave($__internal_5b6db9032ec0361b611261248b37e669e9e192128adc08ea9bc3f3405b16bbbc_prof);

        
        $__internal_31371477e7983be0d8956bd974d95ccbb873587baa313a5464d6d7752343a793->leave($__internal_31371477e7983be0d8956bd974d95ccbb873587baa313a5464d6d7752343a793_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa6d5077048b09299d098913377650f05199c30f2b2cae1cfa3240300553a90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6d5077048b09299d098913377650f05199c30f2b2cae1cfa3240300553a90b->enter($__internal_aa6d5077048b09299d098913377650f05199c30f2b2cae1cfa3240300553a90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_617e30fa280ea9ce08eeea7fcb12b19a68e4e7afee4b0c75c1a870c0ac742852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617e30fa280ea9ce08eeea7fcb12b19a68e4e7afee4b0c75c1a870c0ac742852->enter($__internal_617e30fa280ea9ce08eeea7fcb12b19a68e4e7afee4b0c75c1a870c0ac742852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_617e30fa280ea9ce08eeea7fcb12b19a68e4e7afee4b0c75c1a870c0ac742852->leave($__internal_617e30fa280ea9ce08eeea7fcb12b19a68e4e7afee4b0c75c1a870c0ac742852_prof);

        
        $__internal_aa6d5077048b09299d098913377650f05199c30f2b2cae1cfa3240300553a90b->leave($__internal_aa6d5077048b09299d098913377650f05199c30f2b2cae1cfa3240300553a90b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4339dd28e9156b95046006d05e0f149d8b22554cba865652ff2a3f4193e42e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4339dd28e9156b95046006d05e0f149d8b22554cba865652ff2a3f4193e42e19->enter($__internal_4339dd28e9156b95046006d05e0f149d8b22554cba865652ff2a3f4193e42e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_effd283e6877801c6d63c6df120da4f96b552e39df1b5a0896c0982d01a0a3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effd283e6877801c6d63c6df120da4f96b552e39df1b5a0896c0982d01a0a3aa->enter($__internal_effd283e6877801c6d63c6df120da4f96b552e39df1b5a0896c0982d01a0a3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_effd283e6877801c6d63c6df120da4f96b552e39df1b5a0896c0982d01a0a3aa->leave($__internal_effd283e6877801c6d63c6df120da4f96b552e39df1b5a0896c0982d01a0a3aa_prof);

        
        $__internal_4339dd28e9156b95046006d05e0f149d8b22554cba865652ff2a3f4193e42e19->leave($__internal_4339dd28e9156b95046006d05e0f149d8b22554cba865652ff2a3f4193e42e19_prof);

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
