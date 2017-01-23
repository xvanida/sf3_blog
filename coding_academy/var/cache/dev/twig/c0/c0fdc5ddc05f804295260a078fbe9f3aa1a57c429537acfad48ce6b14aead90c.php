<?php

/* user/new.html.twig */
class __TwigTemplate_da8c1646e3b844b75c31f8b8e38f7fbd1de1d14272c22a7fd7b7b899459ded72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee5a91420bb5bb950007a13292d46a593f5578c27f93e5750dd9f71eb7a44b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5a91420bb5bb950007a13292d46a593f5578c27f93e5750dd9f71eb7a44b10->enter($__internal_ee5a91420bb5bb950007a13292d46a593f5578c27f93e5750dd9f71eb7a44b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_a4e0206ef47ee0c4508755a934b74dbfcce2e8b6a699397d5e4b85eefcc93ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e0206ef47ee0c4508755a934b74dbfcce2e8b6a699397d5e4b85eefcc93ea3->enter($__internal_a4e0206ef47ee0c4508755a934b74dbfcce2e8b6a699397d5e4b85eefcc93ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee5a91420bb5bb950007a13292d46a593f5578c27f93e5750dd9f71eb7a44b10->leave($__internal_ee5a91420bb5bb950007a13292d46a593f5578c27f93e5750dd9f71eb7a44b10_prof);

        
        $__internal_a4e0206ef47ee0c4508755a934b74dbfcce2e8b6a699397d5e4b85eefcc93ea3->leave($__internal_a4e0206ef47ee0c4508755a934b74dbfcce2e8b6a699397d5e4b85eefcc93ea3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c04cf66220ca529097d53f57007fe7a353ec09aa21ab57896956d60594a405d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04cf66220ca529097d53f57007fe7a353ec09aa21ab57896956d60594a405d3->enter($__internal_c04cf66220ca529097d53f57007fe7a353ec09aa21ab57896956d60594a405d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c58fb1303ad6ecd97073b15690b87b7e9e7f95612a4080577c94ebc272d9aa6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58fb1303ad6ecd97073b15690b87b7e9e7f95612a4080577c94ebc272d9aa6d->enter($__internal_c58fb1303ad6ecd97073b15690b87b7e9e7f95612a4080577c94ebc272d9aa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c58fb1303ad6ecd97073b15690b87b7e9e7f95612a4080577c94ebc272d9aa6d->leave($__internal_c58fb1303ad6ecd97073b15690b87b7e9e7f95612a4080577c94ebc272d9aa6d_prof);

        
        $__internal_c04cf66220ca529097d53f57007fe7a353ec09aa21ab57896956d60594a405d3->leave($__internal_c04cf66220ca529097d53f57007fe7a353ec09aa21ab57896956d60594a405d3_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/app/Resources/views/user/new.html.twig");
    }
}
