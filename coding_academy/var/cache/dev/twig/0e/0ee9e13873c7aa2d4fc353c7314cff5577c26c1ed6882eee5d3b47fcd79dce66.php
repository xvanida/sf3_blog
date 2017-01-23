<?php

/* post/new.html.twig */
class __TwigTemplate_789634524a94a720ccb331eda1d4ad288266cb34876069d0c3c6bbd06ae31d50 extends Twig_Template
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
        $__internal_ee2ceccd201e218afd95959a5f16a38c19694e501c8e11f730e80b1a497d347e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2ceccd201e218afd95959a5f16a38c19694e501c8e11f730e80b1a497d347e->enter($__internal_ee2ceccd201e218afd95959a5f16a38c19694e501c8e11f730e80b1a497d347e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $__internal_6482b1fae2ad4d7f3b411211e35d29072072857b6c22c35a453cefb8f87ee9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6482b1fae2ad4d7f3b411211e35d29072072857b6c22c35a453cefb8f87ee9ab->enter($__internal_6482b1fae2ad4d7f3b411211e35d29072072857b6c22c35a453cefb8f87ee9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee2ceccd201e218afd95959a5f16a38c19694e501c8e11f730e80b1a497d347e->leave($__internal_ee2ceccd201e218afd95959a5f16a38c19694e501c8e11f730e80b1a497d347e_prof);

        
        $__internal_6482b1fae2ad4d7f3b411211e35d29072072857b6c22c35a453cefb8f87ee9ab->leave($__internal_6482b1fae2ad4d7f3b411211e35d29072072857b6c22c35a453cefb8f87ee9ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_809811d950b95f95db4c6e187d9dd5af39f2e90526a10b4bca043e62050f3746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809811d950b95f95db4c6e187d9dd5af39f2e90526a10b4bca043e62050f3746->enter($__internal_809811d950b95f95db4c6e187d9dd5af39f2e90526a10b4bca043e62050f3746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_957ca6411992f0c0949cd725967a4036bd832c0e619e4ea113d58217a98f17c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957ca6411992f0c0949cd725967a4036bd832c0e619e4ea113d58217a98f17c3->enter($__internal_957ca6411992f0c0949cd725967a4036bd832c0e619e4ea113d58217a98f17c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_957ca6411992f0c0949cd725967a4036bd832c0e619e4ea113d58217a98f17c3->leave($__internal_957ca6411992f0c0949cd725967a4036bd832c0e619e4ea113d58217a98f17c3_prof);

        
        $__internal_809811d950b95f95db4c6e187d9dd5af39f2e90526a10b4bca043e62050f3746->leave($__internal_809811d950b95f95db4c6e187d9dd5af39f2e90526a10b4bca043e62050f3746_prof);

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
