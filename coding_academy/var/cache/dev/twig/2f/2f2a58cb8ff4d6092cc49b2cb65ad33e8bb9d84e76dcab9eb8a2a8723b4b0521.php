<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_9bec2cb366f3c3c697d0661247e618e3b9cae099356c3bf454e5436a1a4b84a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e989d5ebd85f8b9e25180c33773c83627b4c04a63db63d714de806a63e485d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e989d5ebd85f8b9e25180c33773c83627b4c04a63db63d714de806a63e485d77->enter($__internal_e989d5ebd85f8b9e25180c33773c83627b4c04a63db63d714de806a63e485d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_3b26ea039fe050a676d5316c7dc5c8a98a39b3e4d448f133e84992d9d19bb65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b26ea039fe050a676d5316c7dc5c8a98a39b3e4d448f133e84992d9d19bb65a->enter($__internal_3b26ea039fe050a676d5316c7dc5c8a98a39b3e4d448f133e84992d9d19bb65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e989d5ebd85f8b9e25180c33773c83627b4c04a63db63d714de806a63e485d77->leave($__internal_e989d5ebd85f8b9e25180c33773c83627b4c04a63db63d714de806a63e485d77_prof);

        
        $__internal_3b26ea039fe050a676d5316c7dc5c8a98a39b3e4d448f133e84992d9d19bb65a->leave($__internal_3b26ea039fe050a676d5316c7dc5c8a98a39b3e4d448f133e84992d9d19bb65a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6c42f7ed05354faf5b8f8bd5ada83256be2530cb395ec2b715c9f6c6b61a75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c42f7ed05354faf5b8f8bd5ada83256be2530cb395ec2b715c9f6c6b61a75d->enter($__internal_d6c42f7ed05354faf5b8f8bd5ada83256be2530cb395ec2b715c9f6c6b61a75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3d72815742434c5cd7a06d9302d057ad44e1a3349f909e4870cddfaa798a3e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d72815742434c5cd7a06d9302d057ad44e1a3349f909e4870cddfaa798a3e3f->enter($__internal_3d72815742434c5cd7a06d9302d057ad44e1a3349f909e4870cddfaa798a3e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3d72815742434c5cd7a06d9302d057ad44e1a3349f909e4870cddfaa798a3e3f->leave($__internal_3d72815742434c5cd7a06d9302d057ad44e1a3349f909e4870cddfaa798a3e3f_prof);

        
        $__internal_d6c42f7ed05354faf5b8f8bd5ada83256be2530cb395ec2b715c9f6c6b61a75d->leave($__internal_d6c42f7ed05354faf5b8f8bd5ada83256be2530cb395ec2b715c9f6c6b61a75d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_77d3906005f773772ea1eeac322748f936c3a18d74e3e21585592363c7e0e393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d3906005f773772ea1eeac322748f936c3a18d74e3e21585592363c7e0e393->enter($__internal_77d3906005f773772ea1eeac322748f936c3a18d74e3e21585592363c7e0e393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c10785fa42783ea209a5a350dae81685cef11e1d747453da7d69c172405af14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c10785fa42783ea209a5a350dae81685cef11e1d747453da7d69c172405af14->enter($__internal_7c10785fa42783ea209a5a350dae81685cef11e1d747453da7d69c172405af14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_7c10785fa42783ea209a5a350dae81685cef11e1d747453da7d69c172405af14->leave($__internal_7c10785fa42783ea209a5a350dae81685cef11e1d747453da7d69c172405af14_prof);

        
        $__internal_77d3906005f773772ea1eeac322748f936c3a18d74e3e21585592363c7e0e393->leave($__internal_77d3906005f773772ea1eeac322748f936c3a18d74e3e21585592363c7e0e393_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
