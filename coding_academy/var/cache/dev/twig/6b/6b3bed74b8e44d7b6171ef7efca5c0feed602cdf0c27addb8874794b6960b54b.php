<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_cf9581aa86eec52dba10373b1433911c1560c0ccbd1e257c7d27183edb822756 extends Twig_Template
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
        $__internal_ca6434604cb86dee0b95ac898803ca731eefba2da85dfc52c1afd9d4f22b7a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6434604cb86dee0b95ac898803ca731eefba2da85dfc52c1afd9d4f22b7a0f->enter($__internal_ca6434604cb86dee0b95ac898803ca731eefba2da85dfc52c1afd9d4f22b7a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_27c455ed9c59917c7841ebcb524d01464dc8057445e6d764e01358ae016bfe3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c455ed9c59917c7841ebcb524d01464dc8057445e6d764e01358ae016bfe3f->enter($__internal_27c455ed9c59917c7841ebcb524d01464dc8057445e6d764e01358ae016bfe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_ca6434604cb86dee0b95ac898803ca731eefba2da85dfc52c1afd9d4f22b7a0f->leave($__internal_ca6434604cb86dee0b95ac898803ca731eefba2da85dfc52c1afd9d4f22b7a0f_prof);

        
        $__internal_27c455ed9c59917c7841ebcb524d01464dc8057445e6d764e01358ae016bfe3f->leave($__internal_27c455ed9c59917c7841ebcb524d01464dc8057445e6d764e01358ae016bfe3f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
