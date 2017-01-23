<?php

/* post/edit.html.twig */
class __TwigTemplate_fffe66d233de857d04e6c8ab16a90f4e1faee58df2651ea58d222e608f587dc6 extends Twig_Template
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
        $__internal_3b694830c139eeeb45be37ad6b9a285087caf2b07502bd285f313e82e7e09a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b694830c139eeeb45be37ad6b9a285087caf2b07502bd285f313e82e7e09a65->enter($__internal_3b694830c139eeeb45be37ad6b9a285087caf2b07502bd285f313e82e7e09a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $__internal_10ef5f3d9b2beb47e719e95492a7aa22b5dd4a26a0e67258096480cc932e9d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ef5f3d9b2beb47e719e95492a7aa22b5dd4a26a0e67258096480cc932e9d2d->enter($__internal_10ef5f3d9b2beb47e719e95492a7aa22b5dd4a26a0e67258096480cc932e9d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b694830c139eeeb45be37ad6b9a285087caf2b07502bd285f313e82e7e09a65->leave($__internal_3b694830c139eeeb45be37ad6b9a285087caf2b07502bd285f313e82e7e09a65_prof);

        
        $__internal_10ef5f3d9b2beb47e719e95492a7aa22b5dd4a26a0e67258096480cc932e9d2d->leave($__internal_10ef5f3d9b2beb47e719e95492a7aa22b5dd4a26a0e67258096480cc932e9d2d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_020d48647c90a318d88050ab07a2b3dee8c248ef6993f88ae9e3bc445a97bf41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020d48647c90a318d88050ab07a2b3dee8c248ef6993f88ae9e3bc445a97bf41->enter($__internal_020d48647c90a318d88050ab07a2b3dee8c248ef6993f88ae9e3bc445a97bf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1021c6a049471afde6eac3af300d7eae901d8b276a6abcf38cf2dec032555443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1021c6a049471afde6eac3af300d7eae901d8b276a6abcf38cf2dec032555443->enter($__internal_1021c6a049471afde6eac3af300d7eae901d8b276a6abcf38cf2dec032555443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1021c6a049471afde6eac3af300d7eae901d8b276a6abcf38cf2dec032555443->leave($__internal_1021c6a049471afde6eac3af300d7eae901d8b276a6abcf38cf2dec032555443_prof);

        
        $__internal_020d48647c90a318d88050ab07a2b3dee8c248ef6993f88ae9e3bc445a97bf41->leave($__internal_020d48647c90a318d88050ab07a2b3dee8c248ef6993f88ae9e3bc445a97bf41_prof);

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
