<?php

/* @CABlog/Default/index.html.twig */
class __TwigTemplate_ec5b6c3deffc694980200e54f7aa6b17a99377abdfa4be91e6b0dd551a2d64af extends Twig_Template
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
        $__internal_1aa1afcc096e1ea858fa051b07e81c5828bde2c60fd0e9818ea51446c4e25705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa1afcc096e1ea858fa051b07e81c5828bde2c60fd0e9818ea51446c4e25705->enter($__internal_1aa1afcc096e1ea858fa051b07e81c5828bde2c60fd0e9818ea51446c4e25705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CABlog/Default/index.html.twig"));

        $__internal_0027bdc8c633a24e0280583788b99503ae88722a727b403cdeacd7e746c79bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0027bdc8c633a24e0280583788b99503ae88722a727b403cdeacd7e746c79bfd->enter($__internal_0027bdc8c633a24e0280583788b99503ae88722a727b403cdeacd7e746c79bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CABlog/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_1aa1afcc096e1ea858fa051b07e81c5828bde2c60fd0e9818ea51446c4e25705->leave($__internal_1aa1afcc096e1ea858fa051b07e81c5828bde2c60fd0e9818ea51446c4e25705_prof);

        
        $__internal_0027bdc8c633a24e0280583788b99503ae88722a727b403cdeacd7e746c79bfd->leave($__internal_0027bdc8c633a24e0280583788b99503ae88722a727b403cdeacd7e746c79bfd_prof);

    }

    public function getTemplateName()
    {
        return "@CABlog/Default/index.html.twig";
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
        return new Twig_Source("Hello World!
", "@CABlog/Default/index.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/src/CA/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
