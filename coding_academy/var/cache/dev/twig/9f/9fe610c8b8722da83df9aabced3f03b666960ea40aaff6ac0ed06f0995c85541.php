<?php

/* post/post.html.twig */
class __TwigTemplate_fddba3592cec84e8d8af7afd095f6f788a5aba703f59e98dafbb835a279feff8 extends Twig_Template
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
        $__internal_7e997223fd78cbcf0d62915685646de461cb8bebccad1b62e9e6a6f342e2814c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e997223fd78cbcf0d62915685646de461cb8bebccad1b62e9e6a6f342e2814c->enter($__internal_7e997223fd78cbcf0d62915685646de461cb8bebccad1b62e9e6a6f342e2814c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/post.html.twig"));

        $__internal_c5f3fc3d00c221cba77546612471591be45ade3f5590265da155418779a9c82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f3fc3d00c221cba77546612471591be45ade3f5590265da155418779a9c82c->enter($__internal_c5f3fc3d00c221cba77546612471591be45ade3f5590265da155418779a9c82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e997223fd78cbcf0d62915685646de461cb8bebccad1b62e9e6a6f342e2814c->leave($__internal_7e997223fd78cbcf0d62915685646de461cb8bebccad1b62e9e6a6f342e2814c_prof);

        
        $__internal_c5f3fc3d00c221cba77546612471591be45ade3f5590265da155418779a9c82c->leave($__internal_c5f3fc3d00c221cba77546612471591be45ade3f5590265da155418779a9c82c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c90f44e4b2551c48cbff9cf0a8f255585952348b85fac24656bde8ff3d6fd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c90f44e4b2551c48cbff9cf0a8f255585952348b85fac24656bde8ff3d6fd27->enter($__internal_1c90f44e4b2551c48cbff9cf0a8f255585952348b85fac24656bde8ff3d6fd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_868ce383ef255e341a67d21bd94db92e61abee9d09af7a6e6878c8a19ea2f0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868ce383ef255e341a67d21bd94db92e61abee9d09af7a6e6878c8a19ea2f0ad->enter($__internal_868ce383ef255e341a67d21bd94db92e61abee9d09af7a6e6878c8a19ea2f0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "username", array()), "html", null, true);
        echo " </a>
     <p> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo " </p>
</div>
";
        
        $__internal_868ce383ef255e341a67d21bd94db92e61abee9d09af7a6e6878c8a19ea2f0ad->leave($__internal_868ce383ef255e341a67d21bd94db92e61abee9d09af7a6e6878c8a19ea2f0ad_prof);

        
        $__internal_1c90f44e4b2551c48cbff9cf0a8f255585952348b85fac24656bde8ff3d6fd27->leave($__internal_1c90f44e4b2551c48cbff9cf0a8f255585952348b85fac24656bde8ff3d6fd27_prof);

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
        return array (  66 => 7,  60 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
     <a href=\"{{path('post_show', {'id': post.id}) }}\"> {{post.user.username}} </a>
     <p> {{ post.content }} </p>
</div>
{% endblock %}
", "post/post.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/app/Resources/views/post/post.html.twig");
    }
}
