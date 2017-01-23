<?php

/* base.html.twig */
class __TwigTemplate_c6b56aef91f99a389e1a6f47f71cf0ca91dfaf9399112057d815c56c69b075fb extends Twig_Template
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
        $__internal_9aa145ecbfc6c9a35560b903a1107b987655915da45318aea8525c155f87c4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa145ecbfc6c9a35560b903a1107b987655915da45318aea8525c155f87c4c8->enter($__internal_9aa145ecbfc6c9a35560b903a1107b987655915da45318aea8525c155f87c4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7b1c9299bf586ba4240a067105ebbc5d87d2295994645e2a9d4f2e2482b0bd53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1c9299bf586ba4240a067105ebbc5d87d2295994645e2a9d4f2e2482b0bd53->enter($__internal_7b1c9299bf586ba4240a067105ebbc5d87d2295994645e2a9d4f2e2482b0bd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "             <a class=\"link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
             ";
        } else {
            // line 13
            echo "             <a class=\"link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a>
         ";
        }
        // line 15
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_9aa145ecbfc6c9a35560b903a1107b987655915da45318aea8525c155f87c4c8->leave($__internal_9aa145ecbfc6c9a35560b903a1107b987655915da45318aea8525c155f87c4c8_prof);

        
        $__internal_7b1c9299bf586ba4240a067105ebbc5d87d2295994645e2a9d4f2e2482b0bd53->leave($__internal_7b1c9299bf586ba4240a067105ebbc5d87d2295994645e2a9d4f2e2482b0bd53_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_94e23519dae074e456599dee7b0d244101781b97e6a6c61d3266a29575d52960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e23519dae074e456599dee7b0d244101781b97e6a6c61d3266a29575d52960->enter($__internal_94e23519dae074e456599dee7b0d244101781b97e6a6c61d3266a29575d52960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bf02413df6ee1b8161b36c52b0af7d627fa78c94f395329f622ff6331910fe1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf02413df6ee1b8161b36c52b0af7d627fa78c94f395329f622ff6331910fe1d->enter($__internal_bf02413df6ee1b8161b36c52b0af7d627fa78c94f395329f622ff6331910fe1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bf02413df6ee1b8161b36c52b0af7d627fa78c94f395329f622ff6331910fe1d->leave($__internal_bf02413df6ee1b8161b36c52b0af7d627fa78c94f395329f622ff6331910fe1d_prof);

        
        $__internal_94e23519dae074e456599dee7b0d244101781b97e6a6c61d3266a29575d52960->leave($__internal_94e23519dae074e456599dee7b0d244101781b97e6a6c61d3266a29575d52960_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02c170912380616f58393a70254834d529444429b4b6e474881c65195fe1ab79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c170912380616f58393a70254834d529444429b4b6e474881c65195fe1ab79->enter($__internal_02c170912380616f58393a70254834d529444429b4b6e474881c65195fe1ab79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5eae4c74e3e4e4dba9abf43516804b48ab9497296c84d9510c198bdea1571402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eae4c74e3e4e4dba9abf43516804b48ab9497296c84d9510c198bdea1571402->enter($__internal_5eae4c74e3e4e4dba9abf43516804b48ab9497296c84d9510c198bdea1571402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5eae4c74e3e4e4dba9abf43516804b48ab9497296c84d9510c198bdea1571402->leave($__internal_5eae4c74e3e4e4dba9abf43516804b48ab9497296c84d9510c198bdea1571402_prof);

        
        $__internal_02c170912380616f58393a70254834d529444429b4b6e474881c65195fe1ab79->leave($__internal_02c170912380616f58393a70254834d529444429b4b6e474881c65195fe1ab79_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_e583fd184d41970eaf9d24c69132d4502d0047443885b36b50923c886b40e570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e583fd184d41970eaf9d24c69132d4502d0047443885b36b50923c886b40e570->enter($__internal_e583fd184d41970eaf9d24c69132d4502d0047443885b36b50923c886b40e570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ce88a6ec15ce4408d2336ffe3eae9dd49b1e39a0fe987cb6926066a2b008bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce88a6ec15ce4408d2336ffe3eae9dd49b1e39a0fe987cb6926066a2b008bcb->enter($__internal_9ce88a6ec15ce4408d2336ffe3eae9dd49b1e39a0fe987cb6926066a2b008bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
   ";
        
        $__internal_9ce88a6ec15ce4408d2336ffe3eae9dd49b1e39a0fe987cb6926066a2b008bcb->leave($__internal_9ce88a6ec15ce4408d2336ffe3eae9dd49b1e39a0fe987cb6926066a2b008bcb_prof);

        
        $__internal_e583fd184d41970eaf9d24c69132d4502d0047443885b36b50923c886b40e570->leave($__internal_e583fd184d41970eaf9d24c69132d4502d0047443885b36b50923c886b40e570_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a7e60eecf784039bd7ee493c1963883049af36b20b2ec9481eb317efb64de19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7e60eecf784039bd7ee493c1963883049af36b20b2ec9481eb317efb64de19->enter($__internal_9a7e60eecf784039bd7ee493c1963883049af36b20b2ec9481eb317efb64de19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_71c154602bd06f08ab19d6c513c3048ed4fd2f298cc7d2678512f941e0c242a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c154602bd06f08ab19d6c513c3048ed4fd2f298cc7d2678512f941e0c242a6->enter($__internal_71c154602bd06f08ab19d6c513c3048ed4fd2f298cc7d2678512f941e0c242a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_71c154602bd06f08ab19d6c513c3048ed4fd2f298cc7d2678512f941e0c242a6->leave($__internal_71c154602bd06f08ab19d6c513c3048ed4fd2f298cc7d2678512f941e0c242a6_prof);

        
        $__internal_9a7e60eecf784039bd7ee493c1963883049af36b20b2ec9481eb317efb64de19->leave($__internal_9a7e60eecf784039bd7ee493c1963883049af36b20b2ec9481eb317efb64de19_prof);

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
        return array (  135 => 18,  124 => 16,  115 => 15,  98 => 6,  80 => 5,  68 => 19,  65 => 18,  62 => 15,  56 => 13,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
         {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
             <a class=\"link\" href=\"{{ path('logout') }}\">Logout</a>
             {% else %}
             <a class=\"link\" href=\"{{ path('login') }}\">Login</a>
         {% endif %}
        {% block body %}

   {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/app/Resources/views/base.html.twig");
    }
}
