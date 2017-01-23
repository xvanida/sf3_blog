<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_f545595115687d7ed2aa66cb0ce4caa35974271ff400b6f173f5a4bbdacda6d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_676fe3f6e2b2eb46011d5bf26b9b26e89bb4ef99ccedf0e3c59dd221793d4b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676fe3f6e2b2eb46011d5bf26b9b26e89bb4ef99ccedf0e3c59dd221793d4b2a->enter($__internal_676fe3f6e2b2eb46011d5bf26b9b26e89bb4ef99ccedf0e3c59dd221793d4b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_53f6067972946c2ded9689b9cf92f07fbdfe7509b945cd9ce1a1986249d32093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f6067972946c2ded9689b9cf92f07fbdfe7509b945cd9ce1a1986249d32093->enter($__internal_53f6067972946c2ded9689b9cf92f07fbdfe7509b945cd9ce1a1986249d32093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_676fe3f6e2b2eb46011d5bf26b9b26e89bb4ef99ccedf0e3c59dd221793d4b2a->leave($__internal_676fe3f6e2b2eb46011d5bf26b9b26e89bb4ef99ccedf0e3c59dd221793d4b2a_prof);

        
        $__internal_53f6067972946c2ded9689b9cf92f07fbdfe7509b945cd9ce1a1986249d32093->leave($__internal_53f6067972946c2ded9689b9cf92f07fbdfe7509b945cd9ce1a1986249d32093_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_305d9d2467299d3820cf01a28464b0b14f572431ba5db6d74e935b97eeb961f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305d9d2467299d3820cf01a28464b0b14f572431ba5db6d74e935b97eeb961f3->enter($__internal_305d9d2467299d3820cf01a28464b0b14f572431ba5db6d74e935b97eeb961f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_13171edf43914d8546a50a8b7b66b016a34d32ce12ba0478780f0a93624af1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13171edf43914d8546a50a8b7b66b016a34d32ce12ba0478780f0a93624af1e9->enter($__internal_13171edf43914d8546a50a8b7b66b016a34d32ce12ba0478780f0a93624af1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_13171edf43914d8546a50a8b7b66b016a34d32ce12ba0478780f0a93624af1e9->leave($__internal_13171edf43914d8546a50a8b7b66b016a34d32ce12ba0478780f0a93624af1e9_prof);

        
        $__internal_305d9d2467299d3820cf01a28464b0b14f572431ba5db6d74e935b97eeb961f3->leave($__internal_305d9d2467299d3820cf01a28464b0b14f572431ba5db6d74e935b97eeb961f3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
