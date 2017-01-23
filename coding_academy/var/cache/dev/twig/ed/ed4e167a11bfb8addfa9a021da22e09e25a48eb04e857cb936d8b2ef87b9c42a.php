<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2543fe1526e01805f137bcc240fa8e650c5d509e578293cf993b1cb9cbf48fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_57c5ede6c160c433ea07e6196c7576c8da7cb4815b82636238037b6b47400acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c5ede6c160c433ea07e6196c7576c8da7cb4815b82636238037b6b47400acd->enter($__internal_57c5ede6c160c433ea07e6196c7576c8da7cb4815b82636238037b6b47400acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_261808c30efb72082648c792b374dc243983cec82489d75b2bf53b5bca406ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261808c30efb72082648c792b374dc243983cec82489d75b2bf53b5bca406ead->enter($__internal_261808c30efb72082648c792b374dc243983cec82489d75b2bf53b5bca406ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57c5ede6c160c433ea07e6196c7576c8da7cb4815b82636238037b6b47400acd->leave($__internal_57c5ede6c160c433ea07e6196c7576c8da7cb4815b82636238037b6b47400acd_prof);

        
        $__internal_261808c30efb72082648c792b374dc243983cec82489d75b2bf53b5bca406ead->leave($__internal_261808c30efb72082648c792b374dc243983cec82489d75b2bf53b5bca406ead_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7274afd233ce15135579e33a53d049114424628c54c663c93444ac43df8b76e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7274afd233ce15135579e33a53d049114424628c54c663c93444ac43df8b76e->enter($__internal_a7274afd233ce15135579e33a53d049114424628c54c663c93444ac43df8b76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_50d06a12629bc60f1711f59e261894a8e83cbc4b12d2cd100df3d8fab5dbd682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d06a12629bc60f1711f59e261894a8e83cbc4b12d2cd100df3d8fab5dbd682->enter($__internal_50d06a12629bc60f1711f59e261894a8e83cbc4b12d2cd100df3d8fab5dbd682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_50d06a12629bc60f1711f59e261894a8e83cbc4b12d2cd100df3d8fab5dbd682->leave($__internal_50d06a12629bc60f1711f59e261894a8e83cbc4b12d2cd100df3d8fab5dbd682_prof);

        
        $__internal_a7274afd233ce15135579e33a53d049114424628c54c663c93444ac43df8b76e->leave($__internal_a7274afd233ce15135579e33a53d049114424628c54c663c93444ac43df8b76e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b37ab8d95b8c5876d4df0d313c7e2bf8c9a967fc109fe4dfbb2de76ce5a9f1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37ab8d95b8c5876d4df0d313c7e2bf8c9a967fc109fe4dfbb2de76ce5a9f1cb->enter($__internal_b37ab8d95b8c5876d4df0d313c7e2bf8c9a967fc109fe4dfbb2de76ce5a9f1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b224ed22f626b678e0289b374fb9f004a11949fd73364a2bcfbcb0f2c4a5267a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b224ed22f626b678e0289b374fb9f004a11949fd73364a2bcfbcb0f2c4a5267a->enter($__internal_b224ed22f626b678e0289b374fb9f004a11949fd73364a2bcfbcb0f2c4a5267a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b224ed22f626b678e0289b374fb9f004a11949fd73364a2bcfbcb0f2c4a5267a->leave($__internal_b224ed22f626b678e0289b374fb9f004a11949fd73364a2bcfbcb0f2c4a5267a_prof);

        
        $__internal_b37ab8d95b8c5876d4df0d313c7e2bf8c9a967fc109fe4dfbb2de76ce5a9f1cb->leave($__internal_b37ab8d95b8c5876d4df0d313c7e2bf8c9a967fc109fe4dfbb2de76ce5a9f1cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c0ecf01d14ffcb83ae558b686fbab51d8a83e7490cef66f6e25e368667652d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0ecf01d14ffcb83ae558b686fbab51d8a83e7490cef66f6e25e368667652d0->enter($__internal_6c0ecf01d14ffcb83ae558b686fbab51d8a83e7490cef66f6e25e368667652d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0320e3351590f4b08d9dfa4c2402a18eb4bbab7ddb617005eb77094f4e3577c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0320e3351590f4b08d9dfa4c2402a18eb4bbab7ddb617005eb77094f4e3577c0->enter($__internal_0320e3351590f4b08d9dfa4c2402a18eb4bbab7ddb617005eb77094f4e3577c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0320e3351590f4b08d9dfa4c2402a18eb4bbab7ddb617005eb77094f4e3577c0->leave($__internal_0320e3351590f4b08d9dfa4c2402a18eb4bbab7ddb617005eb77094f4e3577c0_prof);

        
        $__internal_6c0ecf01d14ffcb83ae558b686fbab51d8a83e7490cef66f6e25e368667652d0->leave($__internal_6c0ecf01d14ffcb83ae558b686fbab51d8a83e7490cef66f6e25e368667652d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
