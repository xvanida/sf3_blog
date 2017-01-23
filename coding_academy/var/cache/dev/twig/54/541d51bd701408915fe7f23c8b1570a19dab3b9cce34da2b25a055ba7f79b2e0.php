<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_2f0abc36a76879b2101380feaff1e568534bca7fec586d3e6613e4bf840a4f59 extends Twig_Template
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
        $__internal_999cae182c59646d41af9b2e5832eaf04dc58de1fb83fe7f5bc78b6dabf4be79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999cae182c59646d41af9b2e5832eaf04dc58de1fb83fe7f5bc78b6dabf4be79->enter($__internal_999cae182c59646d41af9b2e5832eaf04dc58de1fb83fe7f5bc78b6dabf4be79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_4327892b3c8fc9e8ad8acfe521f5b808847fefe2d2aded5f536b5106ba9f78c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4327892b3c8fc9e8ad8acfe521f5b808847fefe2d2aded5f536b5106ba9f78c4->enter($__internal_4327892b3c8fc9e8ad8acfe521f5b808847fefe2d2aded5f536b5106ba9f78c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_999cae182c59646d41af9b2e5832eaf04dc58de1fb83fe7f5bc78b6dabf4be79->leave($__internal_999cae182c59646d41af9b2e5832eaf04dc58de1fb83fe7f5bc78b6dabf4be79_prof);

        
        $__internal_4327892b3c8fc9e8ad8acfe521f5b808847fefe2d2aded5f536b5106ba9f78c4->leave($__internal_4327892b3c8fc9e8ad8acfe521f5b808847fefe2d2aded5f536b5106ba9f78c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
