<?php

/* user/edit.html.twig */
class __TwigTemplate_1a0b3cfa9acd6b9074e638c2368e56ba5f789bdf62cce2f2125f1d19cb6bb745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_29b0ec249976066f7c5de9a63b4ce0669653bc8e1b167232a829734dfc0cc9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b0ec249976066f7c5de9a63b4ce0669653bc8e1b167232a829734dfc0cc9af->enter($__internal_29b0ec249976066f7c5de9a63b4ce0669653bc8e1b167232a829734dfc0cc9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_a10cf3a377113bb290c011ee2efa7f6f28be4d6346bac03051c2fabd389e382b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10cf3a377113bb290c011ee2efa7f6f28be4d6346bac03051c2fabd389e382b->enter($__internal_a10cf3a377113bb290c011ee2efa7f6f28be4d6346bac03051c2fabd389e382b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b0ec249976066f7c5de9a63b4ce0669653bc8e1b167232a829734dfc0cc9af->leave($__internal_29b0ec249976066f7c5de9a63b4ce0669653bc8e1b167232a829734dfc0cc9af_prof);

        
        $__internal_a10cf3a377113bb290c011ee2efa7f6f28be4d6346bac03051c2fabd389e382b->leave($__internal_a10cf3a377113bb290c011ee2efa7f6f28be4d6346bac03051c2fabd389e382b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e771264efb2053cc3c7dcfb8cb20a4dce81dc5b5660b849e518dc1335a0bb421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e771264efb2053cc3c7dcfb8cb20a4dce81dc5b5660b849e518dc1335a0bb421->enter($__internal_e771264efb2053cc3c7dcfb8cb20a4dce81dc5b5660b849e518dc1335a0bb421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83de9463a57886b98b1821e32f6d98a19057ad87a4dc6d5d59c2f732b181b554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83de9463a57886b98b1821e32f6d98a19057ad87a4dc6d5d59c2f732b181b554->enter($__internal_83de9463a57886b98b1821e32f6d98a19057ad87a4dc6d5d59c2f732b181b554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_83de9463a57886b98b1821e32f6d98a19057ad87a4dc6d5d59c2f732b181b554->leave($__internal_83de9463a57886b98b1821e32f6d98a19057ad87a4dc6d5d59c2f732b181b554_prof);

        
        $__internal_e771264efb2053cc3c7dcfb8cb20a4dce81dc5b5660b849e518dc1335a0bb421->leave($__internal_e771264efb2053cc3c7dcfb8cb20a4dce81dc5b5660b849e518dc1335a0bb421_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/edit.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/app/Resources/views/user/edit.html.twig");
    }
}
