<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6531444ead0163edc5b0ce7b67b2b7164e092a598d5885e2092e2e990aa6f808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cedf5487049ace388a75d3dbd4235d6658b9ac6f7cae06a7be65513dfd8a1000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cedf5487049ace388a75d3dbd4235d6658b9ac6f7cae06a7be65513dfd8a1000->enter($__internal_cedf5487049ace388a75d3dbd4235d6658b9ac6f7cae06a7be65513dfd8a1000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_bd8a7ae890414fe8db971d5074b7a5922d25cbe6d93e2b7a67cf0887ff9cdff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8a7ae890414fe8db971d5074b7a5922d25cbe6d93e2b7a67cf0887ff9cdff2->enter($__internal_bd8a7ae890414fe8db971d5074b7a5922d25cbe6d93e2b7a67cf0887ff9cdff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cedf5487049ace388a75d3dbd4235d6658b9ac6f7cae06a7be65513dfd8a1000->leave($__internal_cedf5487049ace388a75d3dbd4235d6658b9ac6f7cae06a7be65513dfd8a1000_prof);

        
        $__internal_bd8a7ae890414fe8db971d5074b7a5922d25cbe6d93e2b7a67cf0887ff9cdff2->leave($__internal_bd8a7ae890414fe8db971d5074b7a5922d25cbe6d93e2b7a67cf0887ff9cdff2_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_06d805455ca80ceebb88ba63e6f9f42dfeaa1ff3cd08bd4c730f084dea4d0e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d805455ca80ceebb88ba63e6f9f42dfeaa1ff3cd08bd4c730f084dea4d0e69->enter($__internal_06d805455ca80ceebb88ba63e6f9f42dfeaa1ff3cd08bd4c730f084dea4d0e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ad999d82029b314bb78ea733682982c6cfff5561e6db8eb7f3898e6a1c9a38ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad999d82029b314bb78ea733682982c6cfff5561e6db8eb7f3898e6a1c9a38ed->enter($__internal_ad999d82029b314bb78ea733682982c6cfff5561e6db8eb7f3898e6a1c9a38ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_ad999d82029b314bb78ea733682982c6cfff5561e6db8eb7f3898e6a1c9a38ed->leave($__internal_ad999d82029b314bb78ea733682982c6cfff5561e6db8eb7f3898e6a1c9a38ed_prof);

        
        $__internal_06d805455ca80ceebb88ba63e6f9f42dfeaa1ff3cd08bd4c730f084dea4d0e69->leave($__internal_06d805455ca80ceebb88ba63e6f9f42dfeaa1ff3cd08bd4c730f084dea4d0e69_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_499ccb5380d9fea6b4a25dde935cf77d84cda4800e4bad3ca90dff165491ecf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499ccb5380d9fea6b4a25dde935cf77d84cda4800e4bad3ca90dff165491ecf0->enter($__internal_499ccb5380d9fea6b4a25dde935cf77d84cda4800e4bad3ca90dff165491ecf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bfd210a824d41d71c5bfb775a64650caee4ca6331223b03559a72f49764b439f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd210a824d41d71c5bfb775a64650caee4ca6331223b03559a72f49764b439f->enter($__internal_bfd210a824d41d71c5bfb775a64650caee4ca6331223b03559a72f49764b439f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_bfd210a824d41d71c5bfb775a64650caee4ca6331223b03559a72f49764b439f->leave($__internal_bfd210a824d41d71c5bfb775a64650caee4ca6331223b03559a72f49764b439f_prof);

        
        $__internal_499ccb5380d9fea6b4a25dde935cf77d84cda4800e4bad3ca90dff165491ecf0->leave($__internal_499ccb5380d9fea6b4a25dde935cf77d84cda4800e4bad3ca90dff165491ecf0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
