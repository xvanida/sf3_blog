<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_53cffb39e2741b475995220b9752f0b648b1f897c6060d4f8f11efcb8503422e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34ed99f85a783006c23ecee23eb02920ec10751faea3b10f83a0614e4a9fdb6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ed99f85a783006c23ecee23eb02920ec10751faea3b10f83a0614e4a9fdb6a->enter($__internal_34ed99f85a783006c23ecee23eb02920ec10751faea3b10f83a0614e4a9fdb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_9bd2c228e66dc74af6afb1b6e3c50e39f166dce284829634ae2e9b52fc93f158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd2c228e66dc74af6afb1b6e3c50e39f166dce284829634ae2e9b52fc93f158->enter($__internal_9bd2c228e66dc74af6afb1b6e3c50e39f166dce284829634ae2e9b52fc93f158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_34ed99f85a783006c23ecee23eb02920ec10751faea3b10f83a0614e4a9fdb6a->leave($__internal_34ed99f85a783006c23ecee23eb02920ec10751faea3b10f83a0614e4a9fdb6a_prof);

        
        $__internal_9bd2c228e66dc74af6afb1b6e3c50e39f166dce284829634ae2e9b52fc93f158->leave($__internal_9bd2c228e66dc74af6afb1b6e3c50e39f166dce284829634ae2e9b52fc93f158_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
