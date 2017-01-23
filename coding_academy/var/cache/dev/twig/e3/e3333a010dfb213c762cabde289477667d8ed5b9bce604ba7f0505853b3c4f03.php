<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7819cbcaf132f83337cfd290e3422eedff83905a625b4a036e16e6dd930eedc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57d9709ced140bf0249e8d5f268b5f31dd57c59b3941a52a71ab3244961e20f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d9709ced140bf0249e8d5f268b5f31dd57c59b3941a52a71ab3244961e20f8->enter($__internal_57d9709ced140bf0249e8d5f268b5f31dd57c59b3941a52a71ab3244961e20f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b82f4bf870d504b63c876908dd169405da781b2f722f9c4360a7724a24fdd59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82f4bf870d504b63c876908dd169405da781b2f722f9c4360a7724a24fdd59b->enter($__internal_b82f4bf870d504b63c876908dd169405da781b2f722f9c4360a7724a24fdd59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57d9709ced140bf0249e8d5f268b5f31dd57c59b3941a52a71ab3244961e20f8->leave($__internal_57d9709ced140bf0249e8d5f268b5f31dd57c59b3941a52a71ab3244961e20f8_prof);

        
        $__internal_b82f4bf870d504b63c876908dd169405da781b2f722f9c4360a7724a24fdd59b->leave($__internal_b82f4bf870d504b63c876908dd169405da781b2f722f9c4360a7724a24fdd59b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64bde4903ed2abc0c27f90ecb6ef692a0a05dd5db26d1cbfc4f5b0204f99748f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64bde4903ed2abc0c27f90ecb6ef692a0a05dd5db26d1cbfc4f5b0204f99748f->enter($__internal_64bde4903ed2abc0c27f90ecb6ef692a0a05dd5db26d1cbfc4f5b0204f99748f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_09835e2df56db41b2b1578f17e209de6676c05c2e78a3d1956b4607c39cb0663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09835e2df56db41b2b1578f17e209de6676c05c2e78a3d1956b4607c39cb0663->enter($__internal_09835e2df56db41b2b1578f17e209de6676c05c2e78a3d1956b4607c39cb0663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_09835e2df56db41b2b1578f17e209de6676c05c2e78a3d1956b4607c39cb0663->leave($__internal_09835e2df56db41b2b1578f17e209de6676c05c2e78a3d1956b4607c39cb0663_prof);

        
        $__internal_64bde4903ed2abc0c27f90ecb6ef692a0a05dd5db26d1cbfc4f5b0204f99748f->leave($__internal_64bde4903ed2abc0c27f90ecb6ef692a0a05dd5db26d1cbfc4f5b0204f99748f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_695fc0cde6e875d7a457704adff1fb7fcec1d6e9b7e246a31e3402eb98da5a5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695fc0cde6e875d7a457704adff1fb7fcec1d6e9b7e246a31e3402eb98da5a5a->enter($__internal_695fc0cde6e875d7a457704adff1fb7fcec1d6e9b7e246a31e3402eb98da5a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8722951e683bda382aa1ff3beaf6be70ee9d3f95d32f448ccb5734e9b4a1dc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8722951e683bda382aa1ff3beaf6be70ee9d3f95d32f448ccb5734e9b4a1dc24->enter($__internal_8722951e683bda382aa1ff3beaf6be70ee9d3f95d32f448ccb5734e9b4a1dc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8722951e683bda382aa1ff3beaf6be70ee9d3f95d32f448ccb5734e9b4a1dc24->leave($__internal_8722951e683bda382aa1ff3beaf6be70ee9d3f95d32f448ccb5734e9b4a1dc24_prof);

        
        $__internal_695fc0cde6e875d7a457704adff1fb7fcec1d6e9b7e246a31e3402eb98da5a5a->leave($__internal_695fc0cde6e875d7a457704adff1fb7fcec1d6e9b7e246a31e3402eb98da5a5a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e14a99ef07b25f1a30e28bc6fb87f9de0d048bc96efe7d7ed7f86498e1a7787c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14a99ef07b25f1a30e28bc6fb87f9de0d048bc96efe7d7ed7f86498e1a7787c->enter($__internal_e14a99ef07b25f1a30e28bc6fb87f9de0d048bc96efe7d7ed7f86498e1a7787c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aecb01c2577f8fb60e662b7b0a184d1def8a81051dfb3013a4ebece0f094d185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecb01c2577f8fb60e662b7b0a184d1def8a81051dfb3013a4ebece0f094d185->enter($__internal_aecb01c2577f8fb60e662b7b0a184d1def8a81051dfb3013a4ebece0f094d185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_aecb01c2577f8fb60e662b7b0a184d1def8a81051dfb3013a4ebece0f094d185->leave($__internal_aecb01c2577f8fb60e662b7b0a184d1def8a81051dfb3013a4ebece0f094d185_prof);

        
        $__internal_e14a99ef07b25f1a30e28bc6fb87f9de0d048bc96efe7d7ed7f86498e1a7787c->leave($__internal_e14a99ef07b25f1a30e28bc6fb87f9de0d048bc96efe7d7ed7f86498e1a7787c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
