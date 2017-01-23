<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f9d0643677e54094d23d82b3ea78f8acc0aeccb706212c05826a7854cf29aff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d79a26c90e8d65621ff7938062dc9cbb25c0144aa34d7dec4d34822e101bfdd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d79a26c90e8d65621ff7938062dc9cbb25c0144aa34d7dec4d34822e101bfdd6->enter($__internal_d79a26c90e8d65621ff7938062dc9cbb25c0144aa34d7dec4d34822e101bfdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_be1a581676ebd78dcabc55e404e54cdcb99f4f54e0b4cb722ceafe5324ff98d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1a581676ebd78dcabc55e404e54cdcb99f4f54e0b4cb722ceafe5324ff98d4->enter($__internal_be1a581676ebd78dcabc55e404e54cdcb99f4f54e0b4cb722ceafe5324ff98d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d79a26c90e8d65621ff7938062dc9cbb25c0144aa34d7dec4d34822e101bfdd6->leave($__internal_d79a26c90e8d65621ff7938062dc9cbb25c0144aa34d7dec4d34822e101bfdd6_prof);

        
        $__internal_be1a581676ebd78dcabc55e404e54cdcb99f4f54e0b4cb722ceafe5324ff98d4->leave($__internal_be1a581676ebd78dcabc55e404e54cdcb99f4f54e0b4cb722ceafe5324ff98d4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f59c8744b3d83f880fa3c2233e7bc04731401703074330b5ede59dbd8ce996fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59c8744b3d83f880fa3c2233e7bc04731401703074330b5ede59dbd8ce996fa->enter($__internal_f59c8744b3d83f880fa3c2233e7bc04731401703074330b5ede59dbd8ce996fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_938c45e7f8eed76894a9a388658a458e204af16a15e8e4ac7cb4a8e4808495bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938c45e7f8eed76894a9a388658a458e204af16a15e8e4ac7cb4a8e4808495bd->enter($__internal_938c45e7f8eed76894a9a388658a458e204af16a15e8e4ac7cb4a8e4808495bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_938c45e7f8eed76894a9a388658a458e204af16a15e8e4ac7cb4a8e4808495bd->leave($__internal_938c45e7f8eed76894a9a388658a458e204af16a15e8e4ac7cb4a8e4808495bd_prof);

        
        $__internal_f59c8744b3d83f880fa3c2233e7bc04731401703074330b5ede59dbd8ce996fa->leave($__internal_f59c8744b3d83f880fa3c2233e7bc04731401703074330b5ede59dbd8ce996fa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e138fc85c512c424dda02cd9bf630826d3dabc351f7b3186843aa7a0a880ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e138fc85c512c424dda02cd9bf630826d3dabc351f7b3186843aa7a0a880ae6->enter($__internal_7e138fc85c512c424dda02cd9bf630826d3dabc351f7b3186843aa7a0a880ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61c4a7c31e73b58968fd2591b43e28b773abfa69addf9e0d831ff23a2256d008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c4a7c31e73b58968fd2591b43e28b773abfa69addf9e0d831ff23a2256d008->enter($__internal_61c4a7c31e73b58968fd2591b43e28b773abfa69addf9e0d831ff23a2256d008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_61c4a7c31e73b58968fd2591b43e28b773abfa69addf9e0d831ff23a2256d008->leave($__internal_61c4a7c31e73b58968fd2591b43e28b773abfa69addf9e0d831ff23a2256d008_prof);

        
        $__internal_7e138fc85c512c424dda02cd9bf630826d3dabc351f7b3186843aa7a0a880ae6->leave($__internal_7e138fc85c512c424dda02cd9bf630826d3dabc351f7b3186843aa7a0a880ae6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
