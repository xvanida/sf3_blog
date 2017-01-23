<?php

/* post/post.html.twig */
class __TwigTemplate_926966e8f0ee73d9e23c8d87a9088582a97cb4fb5ef37e7f8a1b5adb9f05e4fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/post.html.twig", 1);
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
        $__internal_581fe4762de23eb9ce94bd0dcfa84a8dcd93cdedec69404f8955e76da378da99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_581fe4762de23eb9ce94bd0dcfa84a8dcd93cdedec69404f8955e76da378da99->enter($__internal_581fe4762de23eb9ce94bd0dcfa84a8dcd93cdedec69404f8955e76da378da99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/post.html.twig"));

        $__internal_e8c07a78057e36c7d27edb7faf1c5f5572ac587182bd5cb28729346fc7844413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c07a78057e36c7d27edb7faf1c5f5572ac587182bd5cb28729346fc7844413->enter($__internal_e8c07a78057e36c7d27edb7faf1c5f5572ac587182bd5cb28729346fc7844413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_581fe4762de23eb9ce94bd0dcfa84a8dcd93cdedec69404f8955e76da378da99->leave($__internal_581fe4762de23eb9ce94bd0dcfa84a8dcd93cdedec69404f8955e76da378da99_prof);

        
        $__internal_e8c07a78057e36c7d27edb7faf1c5f5572ac587182bd5cb28729346fc7844413->leave($__internal_e8c07a78057e36c7d27edb7faf1c5f5572ac587182bd5cb28729346fc7844413_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5afb0168f30cd9a2789976728d96188b2f2eda9dbcbf24b16b2f7c33c9f5472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5afb0168f30cd9a2789976728d96188b2f2eda9dbcbf24b16b2f7c33c9f5472->enter($__internal_b5afb0168f30cd9a2789976728d96188b2f2eda9dbcbf24b16b2f7c33c9f5472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6e5acf2ce00e5738527035ea93ef4aacbac97b03ad1b0df3e0c4eadb3038461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e5acf2ce00e5738527035ea93ef4aacbac97b03ad1b0df3e0c4eadb3038461->enter($__internal_f6e5acf2ce00e5738527035ea93ef4aacbac97b03ad1b0df3e0c4eadb3038461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"post\">
     <p><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_post", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</a> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        echo " by </p>
     <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">User</a>
     <p> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo " </p>
</div>
";
        
        $__internal_f6e5acf2ce00e5738527035ea93ef4aacbac97b03ad1b0df3e0c4eadb3038461->leave($__internal_f6e5acf2ce00e5738527035ea93ef4aacbac97b03ad1b0df3e0c4eadb3038461_prof);

        
        $__internal_b5afb0168f30cd9a2789976728d96188b2f2eda9dbcbf24b16b2f7c33c9f5472->leave($__internal_b5afb0168f30cd9a2789976728d96188b2f2eda9dbcbf24b16b2f7c33c9f5472_prof);

    }

    public function getTemplateName()
    {
        return "post/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 7,  60 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"post\">
     <p><a href=\"{{path('post_post', {'id': post.id}) }}\">{{ post.title }}</a> {{ post.created|date('Y-m-d H:i:s') }} by </p>
     <a href=\"{{path('post_show', {'id': post.id}) }}\">User</a>
     <p> {{ post.content }} </p>
</div>
{% endblock %}
", "post/post.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/app/Resources/views/post/post.html.twig");
    }
}
