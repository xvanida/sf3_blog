<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8108f5d1ee36c3878b2175a55b3d302e34d4747217b0f55cddfb625da60cfabe extends Twig_Template
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
        $__internal_e17e410bb521c7a7fabb6feee307291cece0daf856b363a959143feb9f33aff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17e410bb521c7a7fabb6feee307291cece0daf856b363a959143feb9f33aff4->enter($__internal_e17e410bb521c7a7fabb6feee307291cece0daf856b363a959143feb9f33aff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_98ad26e97b9e76ea9e66ea6c011509873baffe746ea7a484e7517b435d664bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ad26e97b9e76ea9e66ea6c011509873baffe746ea7a484e7517b435d664bb6->enter($__internal_98ad26e97b9e76ea9e66ea6c011509873baffe746ea7a484e7517b435d664bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e17e410bb521c7a7fabb6feee307291cece0daf856b363a959143feb9f33aff4->leave($__internal_e17e410bb521c7a7fabb6feee307291cece0daf856b363a959143feb9f33aff4_prof);

        
        $__internal_98ad26e97b9e76ea9e66ea6c011509873baffe746ea7a484e7517b435d664bb6->leave($__internal_98ad26e97b9e76ea9e66ea6c011509873baffe746ea7a484e7517b435d664bb6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c842097fe1baf483766bdf551a59d5a720143589fd0b81ff49082a31267e4d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c842097fe1baf483766bdf551a59d5a720143589fd0b81ff49082a31267e4d64->enter($__internal_c842097fe1baf483766bdf551a59d5a720143589fd0b81ff49082a31267e4d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ba9b11894abc72901012ed2509ebe18fb457c652201cbdc823de7adbb1bcd53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9b11894abc72901012ed2509ebe18fb457c652201cbdc823de7adbb1bcd53a->enter($__internal_ba9b11894abc72901012ed2509ebe18fb457c652201cbdc823de7adbb1bcd53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba9b11894abc72901012ed2509ebe18fb457c652201cbdc823de7adbb1bcd53a->leave($__internal_ba9b11894abc72901012ed2509ebe18fb457c652201cbdc823de7adbb1bcd53a_prof);

        
        $__internal_c842097fe1baf483766bdf551a59d5a720143589fd0b81ff49082a31267e4d64->leave($__internal_c842097fe1baf483766bdf551a59d5a720143589fd0b81ff49082a31267e4d64_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c150f2fe0df458349bb5b1809fb5c7b131e6d530ddbff134d4ebfc31c6eb8077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c150f2fe0df458349bb5b1809fb5c7b131e6d530ddbff134d4ebfc31c6eb8077->enter($__internal_c150f2fe0df458349bb5b1809fb5c7b131e6d530ddbff134d4ebfc31c6eb8077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f0d2a93b6471ff554ce89d9c03153429c3a9f2eb5ba6e5b14dc0ad4cca61cffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d2a93b6471ff554ce89d9c03153429c3a9f2eb5ba6e5b14dc0ad4cca61cffb->enter($__internal_f0d2a93b6471ff554ce89d9c03153429c3a9f2eb5ba6e5b14dc0ad4cca61cffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f0d2a93b6471ff554ce89d9c03153429c3a9f2eb5ba6e5b14dc0ad4cca61cffb->leave($__internal_f0d2a93b6471ff554ce89d9c03153429c3a9f2eb5ba6e5b14dc0ad4cca61cffb_prof);

        
        $__internal_c150f2fe0df458349bb5b1809fb5c7b131e6d530ddbff134d4ebfc31c6eb8077->leave($__internal_c150f2fe0df458349bb5b1809fb5c7b131e6d530ddbff134d4ebfc31c6eb8077_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f69d9861d7d086e1249fad4e8484f15deb2d89fa3a0dc0e619d4900f8456c9ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69d9861d7d086e1249fad4e8484f15deb2d89fa3a0dc0e619d4900f8456c9ea->enter($__internal_f69d9861d7d086e1249fad4e8484f15deb2d89fa3a0dc0e619d4900f8456c9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c454550bec89c792af0141a34f0d6ee36d5ab0d1dfcd84c7fe2fb88b1817cf4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c454550bec89c792af0141a34f0d6ee36d5ab0d1dfcd84c7fe2fb88b1817cf4f->enter($__internal_c454550bec89c792af0141a34f0d6ee36d5ab0d1dfcd84c7fe2fb88b1817cf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c454550bec89c792af0141a34f0d6ee36d5ab0d1dfcd84c7fe2fb88b1817cf4f->leave($__internal_c454550bec89c792af0141a34f0d6ee36d5ab0d1dfcd84c7fe2fb88b1817cf4f_prof);

        
        $__internal_f69d9861d7d086e1249fad4e8484f15deb2d89fa3a0dc0e619d4900f8456c9ea->leave($__internal_f69d9861d7d086e1249fad4e8484f15deb2d89fa3a0dc0e619d4900f8456c9ea_prof);

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
