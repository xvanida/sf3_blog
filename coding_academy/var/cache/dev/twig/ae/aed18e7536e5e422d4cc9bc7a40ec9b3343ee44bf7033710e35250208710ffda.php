<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_67c5fb8b402a0432c64400dc79f563138dbee8a9408c47ac39b373b5fc6a9cd2 extends Twig_Template
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
        $__internal_b72d2fc2e3c99e31d54fff6d6ac795d55cc013f6339e4edfe65fb9e807773783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72d2fc2e3c99e31d54fff6d6ac795d55cc013f6339e4edfe65fb9e807773783->enter($__internal_b72d2fc2e3c99e31d54fff6d6ac795d55cc013f6339e4edfe65fb9e807773783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3b6f16bbfe0e0b663bf0bf6e172c096d3986c9cea288c64aaa361917cc2d1331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6f16bbfe0e0b663bf0bf6e172c096d3986c9cea288c64aaa361917cc2d1331->enter($__internal_3b6f16bbfe0e0b663bf0bf6e172c096d3986c9cea288c64aaa361917cc2d1331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b72d2fc2e3c99e31d54fff6d6ac795d55cc013f6339e4edfe65fb9e807773783->leave($__internal_b72d2fc2e3c99e31d54fff6d6ac795d55cc013f6339e4edfe65fb9e807773783_prof);

        
        $__internal_3b6f16bbfe0e0b663bf0bf6e172c096d3986c9cea288c64aaa361917cc2d1331->leave($__internal_3b6f16bbfe0e0b663bf0bf6e172c096d3986c9cea288c64aaa361917cc2d1331_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93bbfe2b0b8be90d331c0a5c52dedafa8aa047154d430a21ec1c4532bfc517ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93bbfe2b0b8be90d331c0a5c52dedafa8aa047154d430a21ec1c4532bfc517ef->enter($__internal_93bbfe2b0b8be90d331c0a5c52dedafa8aa047154d430a21ec1c4532bfc517ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d5f8d0f34d22cdc128f21bc0887e352c239ec59c51e27fa9dfe603159260febc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f8d0f34d22cdc128f21bc0887e352c239ec59c51e27fa9dfe603159260febc->enter($__internal_d5f8d0f34d22cdc128f21bc0887e352c239ec59c51e27fa9dfe603159260febc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d5f8d0f34d22cdc128f21bc0887e352c239ec59c51e27fa9dfe603159260febc->leave($__internal_d5f8d0f34d22cdc128f21bc0887e352c239ec59c51e27fa9dfe603159260febc_prof);

        
        $__internal_93bbfe2b0b8be90d331c0a5c52dedafa8aa047154d430a21ec1c4532bfc517ef->leave($__internal_93bbfe2b0b8be90d331c0a5c52dedafa8aa047154d430a21ec1c4532bfc517ef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be9f6199e28cd6331159afbd1e0c739d861ce38c1170013212db557c51ff0824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9f6199e28cd6331159afbd1e0c739d861ce38c1170013212db557c51ff0824->enter($__internal_be9f6199e28cd6331159afbd1e0c739d861ce38c1170013212db557c51ff0824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7f8a09f59bcb228bcd80c55cecd02f7c3b0cfdf0c1747b56eb527791e95854c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8a09f59bcb228bcd80c55cecd02f7c3b0cfdf0c1747b56eb527791e95854c2->enter($__internal_7f8a09f59bcb228bcd80c55cecd02f7c3b0cfdf0c1747b56eb527791e95854c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7f8a09f59bcb228bcd80c55cecd02f7c3b0cfdf0c1747b56eb527791e95854c2->leave($__internal_7f8a09f59bcb228bcd80c55cecd02f7c3b0cfdf0c1747b56eb527791e95854c2_prof);

        
        $__internal_be9f6199e28cd6331159afbd1e0c739d861ce38c1170013212db557c51ff0824->leave($__internal_be9f6199e28cd6331159afbd1e0c739d861ce38c1170013212db557c51ff0824_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d410df74cae85d511c62dbcf7c6af42aa7773560c919348ad2f74b81bd2de74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d410df74cae85d511c62dbcf7c6af42aa7773560c919348ad2f74b81bd2de74->enter($__internal_5d410df74cae85d511c62dbcf7c6af42aa7773560c919348ad2f74b81bd2de74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_94cd42a86cd3278709d9d1ca9abf3bb3d55ce750a2bd32a16beb71ac91594a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94cd42a86cd3278709d9d1ca9abf3bb3d55ce750a2bd32a16beb71ac91594a5b->enter($__internal_94cd42a86cd3278709d9d1ca9abf3bb3d55ce750a2bd32a16beb71ac91594a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_94cd42a86cd3278709d9d1ca9abf3bb3d55ce750a2bd32a16beb71ac91594a5b->leave($__internal_94cd42a86cd3278709d9d1ca9abf3bb3d55ce750a2bd32a16beb71ac91594a5b_prof);

        
        $__internal_5d410df74cae85d511c62dbcf7c6af42aa7773560c919348ad2f74b81bd2de74->leave($__internal_5d410df74cae85d511c62dbcf7c6af42aa7773560c919348ad2f74b81bd2de74_prof);

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
