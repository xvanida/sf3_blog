<?php

/* CABlogBundle:Blog:index.html.twig */
class __TwigTemplate_7fd66e648fe8c1ff9690c4d4a8bdde00ce55da83d1601fd6c43b75a8deb49d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CABlogBundle:Blog:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09133badfcb47b99f884a549f23225038705757be727465d055e176c9862c03c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09133badfcb47b99f884a549f23225038705757be727465d055e176c9862c03c->enter($__internal_09133badfcb47b99f884a549f23225038705757be727465d055e176c9862c03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CABlogBundle:Blog:index.html.twig"));

        $__internal_4e954bf9cce682add761741fe8b689bac4767e72a4c87d16f4b94b8ee1ee17a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e954bf9cce682add761741fe8b689bac4767e72a4c87d16f4b94b8ee1ee17a1->enter($__internal_4e954bf9cce682add761741fe8b689bac4767e72a4c87d16f4b94b8ee1ee17a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CABlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09133badfcb47b99f884a549f23225038705757be727465d055e176c9862c03c->leave($__internal_09133badfcb47b99f884a549f23225038705757be727465d055e176c9862c03c_prof);

        
        $__internal_4e954bf9cce682add761741fe8b689bac4767e72a4c87d16f4b94b8ee1ee17a1->leave($__internal_4e954bf9cce682add761741fe8b689bac4767e72a4c87d16f4b94b8ee1ee17a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad1e1b27ad9047ae8638cfd2cf5554179f807785f1bd5683b10ab0b214fc8e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad1e1b27ad9047ae8638cfd2cf5554179f807785f1bd5683b10ab0b214fc8e78->enter($__internal_ad1e1b27ad9047ae8638cfd2cf5554179f807785f1bd5683b10ab0b214fc8e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b048237673bad681c1b79266948d40bb4ec349361a80dc328e1b4f9bba2995b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b048237673bad681c1b79266948d40bb4ec349361a80dc328e1b4f9bba2995b9->enter($__internal_b048237673bad681c1b79266948d40bb4ec349361a80dc328e1b4f9bba2995b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CABlogBundle:Blog:index";
        
        $__internal_b048237673bad681c1b79266948d40bb4ec349361a80dc328e1b4f9bba2995b9->leave($__internal_b048237673bad681c1b79266948d40bb4ec349361a80dc328e1b4f9bba2995b9_prof);

        
        $__internal_ad1e1b27ad9047ae8638cfd2cf5554179f807785f1bd5683b10ab0b214fc8e78->leave($__internal_ad1e1b27ad9047ae8638cfd2cf5554179f807785f1bd5683b10ab0b214fc8e78_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c781555357d6b1a32feba6d437ac71adf332d0af3cf091bcffcab51d16b81f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c781555357d6b1a32feba6d437ac71adf332d0af3cf091bcffcab51d16b81f2->enter($__internal_4c781555357d6b1a32feba6d437ac71adf332d0af3cf091bcffcab51d16b81f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f2a8ff637c27eec91ef99f6dbd36d35255144ca302742a333edbef3a0c1bebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2a8ff637c27eec91ef99f6dbd36d35255144ca302742a333edbef3a0c1bebb->enter($__internal_1f2a8ff637c27eec91ef99f6dbd36d35255144ca302742a333edbef3a0c1bebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to my Symfony Bloooooog </h1>



   ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")),  -10, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "   <div class=\"post\">

        <p> ";
            // line 13
            if (($this->getAttribute($context["post"], "user", array()) != null)) {
                // line 14
                echo "             <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_post", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a>
               ";
            } else {
                // line 15
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo " ";
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " by
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 17
            if (($this->getAttribute($context["post"], "user", array()) != null)) {
                // line 18
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "username", array()), "html", null, true);
                echo "
        ";
            } else {
                // line 19
                echo " Unknown ";
            }
            echo " </a></p>
        <p> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo " </p>
   </div>
   <hr />


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1f2a8ff637c27eec91ef99f6dbd36d35255144ca302742a333edbef3a0c1bebb->leave($__internal_1f2a8ff637c27eec91ef99f6dbd36d35255144ca302742a333edbef3a0c1bebb_prof);

        
        $__internal_4c781555357d6b1a32feba6d437ac71adf332d0af3cf091bcffcab51d16b81f2->leave($__internal_4c781555357d6b1a32feba6d437ac71adf332d0af3cf091bcffcab51d16b81f2_prof);

    }

    public function getTemplateName()
    {
        return "CABlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 20,  113 => 19,  107 => 18,  105 => 17,  101 => 16,  92 => 15,  84 => 14,  82 => 13,  78 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}CABlogBundle:Blog:index{% endblock %}

{% block body %}
<h1>Welcome to my Symfony Bloooooog </h1>



   {% for post in posts|slice(-10, 10)  %}
   <div class=\"post\">

        <p> {% if post.user != NULL %}
             <a href=\"{{path('post_post', {'id': post.id}) }}\">{{ post.title }}</a>
               {% else  %} {{ post.title}} {%endif%} {{ post.created|date('Y-m-d H:i:s') }} by
        <a href=\"{{path('post_show', {'id': post.id}) }}\">
        {% if post.user != NULL %}
        {{ post.user.username}}
        {% else  %} Unknown {%endif%} </a></p>
        <p> {{ post.content }} </p>
   </div>
   <hr />


{% endfor %}
{% endblock %}
", "CABlogBundle:Blog:index.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/var/cache/dev/../../../src/CA/BlogBundle/Resources/views/Blog/index.html.twig");
    }
}
