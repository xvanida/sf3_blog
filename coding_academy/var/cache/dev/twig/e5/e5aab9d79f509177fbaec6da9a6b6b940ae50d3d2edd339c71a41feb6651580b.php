<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5292470ab53dd14c9ea48e6560d38e55b3c90c1bd0e09273d4b0ba4341108e70 extends Twig_Template
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
        $__internal_8cb351728c1619d65706ee35c1a1632197c6e3c3c19871542a24ad0891ee9eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb351728c1619d65706ee35c1a1632197c6e3c3c19871542a24ad0891ee9eaa->enter($__internal_8cb351728c1619d65706ee35c1a1632197c6e3c3c19871542a24ad0891ee9eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_f01df54ee2c056edda90c10b7db26d463b3f6bc0d8724ce9b393007c3b64d900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01df54ee2c056edda90c10b7db26d463b3f6bc0d8724ce9b393007c3b64d900->enter($__internal_f01df54ee2c056edda90c10b7db26d463b3f6bc0d8724ce9b393007c3b64d900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8cb351728c1619d65706ee35c1a1632197c6e3c3c19871542a24ad0891ee9eaa->leave($__internal_8cb351728c1619d65706ee35c1a1632197c6e3c3c19871542a24ad0891ee9eaa_prof);

        
        $__internal_f01df54ee2c056edda90c10b7db26d463b3f6bc0d8724ce9b393007c3b64d900->leave($__internal_f01df54ee2c056edda90c10b7db26d463b3f6bc0d8724ce9b393007c3b64d900_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
