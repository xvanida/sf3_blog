<?php

/* user/new.html.twig */
class __TwigTemplate_d6524a78d08d59c15cc6cbbb956afedb4f332a582b1671f6aba3fca28d671efd extends Twig_Template
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
        $__internal_94558fe6cf37dfd9c4b5e12d7d30e3cfa30f61042bf94972f1b1d185e580b9ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94558fe6cf37dfd9c4b5e12d7d30e3cfa30f61042bf94972f1b1d185e580b9ca->enter($__internal_94558fe6cf37dfd9c4b5e12d7d30e3cfa30f61042bf94972f1b1d185e580b9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_9a971756a73f9572b019314f49aeb5498af4243d46b28748e44a7051b5484cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a971756a73f9572b019314f49aeb5498af4243d46b28748e44a7051b5484cc2->enter($__internal_9a971756a73f9572b019314f49aeb5498af4243d46b28748e44a7051b5484cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94558fe6cf37dfd9c4b5e12d7d30e3cfa30f61042bf94972f1b1d185e580b9ca->leave($__internal_94558fe6cf37dfd9c4b5e12d7d30e3cfa30f61042bf94972f1b1d185e580b9ca_prof);

        
        $__internal_9a971756a73f9572b019314f49aeb5498af4243d46b28748e44a7051b5484cc2->leave($__internal_9a971756a73f9572b019314f49aeb5498af4243d46b28748e44a7051b5484cc2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ee29b62f148ab4879229b1da8d792f7067a0b3d6738cd63cc875794668f7912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee29b62f148ab4879229b1da8d792f7067a0b3d6738cd63cc875794668f7912->enter($__internal_8ee29b62f148ab4879229b1da8d792f7067a0b3d6738cd63cc875794668f7912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67fd272f6b090c7eb0fe359b1af6826c9e8a973da22f02e2d1063161682d1ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fd272f6b090c7eb0fe359b1af6826c9e8a973da22f02e2d1063161682d1ab4->enter($__internal_67fd272f6b090c7eb0fe359b1af6826c9e8a973da22f02e2d1063161682d1ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "
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
        
        $__internal_67fd272f6b090c7eb0fe359b1af6826c9e8a973da22f02e2d1063161682d1ab4->leave($__internal_67fd272f6b090c7eb0fe359b1af6826c9e8a973da22f02e2d1063161682d1ab4_prof);

        
        $__internal_8ee29b62f148ab4879229b1da8d792f7067a0b3d6738cd63cc875794668f7912->leave($__internal_8ee29b62f148ab4879229b1da8d792f7067a0b3d6738cd63cc875794668f7912_prof);

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
        return array (  72 => 13,  65 => 9,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {{form_errors(form.password.first)}}
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
