<?php

/* post/new.html.twig */
class __TwigTemplate_e42d8e0022953189ec90a50c3859ecee81b2594fd3611014895c297e1aceeb85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/new.html.twig", 1);
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
        $__internal_b9820a42613c4383de275d3b1c5d3c0a9b1005b6d315522faadfbfbdd79fade8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9820a42613c4383de275d3b1c5d3c0a9b1005b6d315522faadfbfbdd79fade8->enter($__internal_b9820a42613c4383de275d3b1c5d3c0a9b1005b6d315522faadfbfbdd79fade8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $__internal_f0bfacc730d2cca22477b2c8c82fbaced0a0143ea8da7fd1f50eea6a8fc26fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0bfacc730d2cca22477b2c8c82fbaced0a0143ea8da7fd1f50eea6a8fc26fb8->enter($__internal_f0bfacc730d2cca22477b2c8c82fbaced0a0143ea8da7fd1f50eea6a8fc26fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9820a42613c4383de275d3b1c5d3c0a9b1005b6d315522faadfbfbdd79fade8->leave($__internal_b9820a42613c4383de275d3b1c5d3c0a9b1005b6d315522faadfbfbdd79fade8_prof);

        
        $__internal_f0bfacc730d2cca22477b2c8c82fbaced0a0143ea8da7fd1f50eea6a8fc26fb8->leave($__internal_f0bfacc730d2cca22477b2c8c82fbaced0a0143ea8da7fd1f50eea6a8fc26fb8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9deaa256a6e3a626d4ca9a52b00cd81ec01855df7efea38048d22002bc6da5c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9deaa256a6e3a626d4ca9a52b00cd81ec01855df7efea38048d22002bc6da5c3->enter($__internal_9deaa256a6e3a626d4ca9a52b00cd81ec01855df7efea38048d22002bc6da5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f9b34558a3012d5c23cdfc32093cb610aa1f9e405a1b79cdfcee76b9896904f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9b34558a3012d5c23cdfc32093cb610aa1f9e405a1b79cdfcee76b9896904f->enter($__internal_0f9b34558a3012d5c23cdfc32093cb610aa1f9e405a1b79cdfcee76b9896904f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0f9b34558a3012d5c23cdfc32093cb610aa1f9e405a1b79cdfcee76b9896904f->leave($__internal_0f9b34558a3012d5c23cdfc32093cb610aa1f9e405a1b79cdfcee76b9896904f_prof);

        
        $__internal_9deaa256a6e3a626d4ca9a52b00cd81ec01855df7efea38048d22002bc6da5c3->leave($__internal_9deaa256a6e3a626d4ca9a52b00cd81ec01855df7efea38048d22002bc6da5c3_prof);

    }

    public function getTemplateName()
    {
        return "post/new.html.twig";
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
    <h1>Post creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "post/new.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/app/Resources/views/post/new.html.twig");
    }
}
