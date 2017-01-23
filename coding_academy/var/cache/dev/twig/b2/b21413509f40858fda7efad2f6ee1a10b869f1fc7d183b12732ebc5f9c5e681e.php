<?php

/* post/edit.html.twig */
class __TwigTemplate_acb7389db4571f93db903f44b154669363672b28af34544d29e18eed7f01109b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/edit.html.twig", 1);
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
        $__internal_0d77a9cc7bd1f12e118ad7e0f631ea53f63e9b09d6944696dd31ff587ffe00a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d77a9cc7bd1f12e118ad7e0f631ea53f63e9b09d6944696dd31ff587ffe00a2->enter($__internal_0d77a9cc7bd1f12e118ad7e0f631ea53f63e9b09d6944696dd31ff587ffe00a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $__internal_05bfcf1258e55c3d60e0704b9d34c1b6e28cbedf13bbb2de214caca4b775f159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bfcf1258e55c3d60e0704b9d34c1b6e28cbedf13bbb2de214caca4b775f159->enter($__internal_05bfcf1258e55c3d60e0704b9d34c1b6e28cbedf13bbb2de214caca4b775f159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d77a9cc7bd1f12e118ad7e0f631ea53f63e9b09d6944696dd31ff587ffe00a2->leave($__internal_0d77a9cc7bd1f12e118ad7e0f631ea53f63e9b09d6944696dd31ff587ffe00a2_prof);

        
        $__internal_05bfcf1258e55c3d60e0704b9d34c1b6e28cbedf13bbb2de214caca4b775f159->leave($__internal_05bfcf1258e55c3d60e0704b9d34c1b6e28cbedf13bbb2de214caca4b775f159_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67172156f20e597fcb5d3c53fc559dfe262816fc7a78e7afcfa380551dd7c336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67172156f20e597fcb5d3c53fc559dfe262816fc7a78e7afcfa380551dd7c336->enter($__internal_67172156f20e597fcb5d3c53fc559dfe262816fc7a78e7afcfa380551dd7c336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e27342ca017eb8d240c9132cfe75def635ff237d61622280bd5866ca8cd75684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27342ca017eb8d240c9132cfe75def635ff237d61622280bd5866ca8cd75684->enter($__internal_e27342ca017eb8d240c9132cfe75def635ff237d61622280bd5866ca8cd75684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "        <li>
            ";
            // line 17
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
                <input type=\"submit\" value=\"Delete\">
            ";
            // line 19
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
        </li>
        ";
        }
        // line 22
        echo "    </ul>
";
        
        $__internal_e27342ca017eb8d240c9132cfe75def635ff237d61622280bd5866ca8cd75684->leave($__internal_e27342ca017eb8d240c9132cfe75def635ff237d61622280bd5866ca8cd75684_prof);

        
        $__internal_67172156f20e597fcb5d3c53fc559dfe262816fc7a78e7afcfa380551dd7c336->leave($__internal_67172156f20e597fcb5d3c53fc559dfe262816fc7a78e7afcfa380551dd7c336_prof);

    }

    public function getTemplateName()
    {
        return "post/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  84 => 19,  79 => 17,  76 => 16,  74 => 15,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Post edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        {% if  (is_granted('ROLE_ADMIN')) %}
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
        {% endif %}
    </ul>
{% endblock %}
", "post/edit.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/app/Resources/views/post/edit.html.twig");
    }
}
