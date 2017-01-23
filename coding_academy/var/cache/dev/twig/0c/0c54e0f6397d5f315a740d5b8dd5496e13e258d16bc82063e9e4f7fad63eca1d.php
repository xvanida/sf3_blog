<?php

/* user/posts.html.twig */
class __TwigTemplate_23f5a5afe26c4ae1227128074f93211108b8efc891e0fdb0624433150066d903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "user/posts.html.twig", 1);
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
        $__internal_2b9297cdca8ea24dc396da3dd3bd832dc61130d0a350edbd2982c387b872b9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9297cdca8ea24dc396da3dd3bd832dc61130d0a350edbd2982c387b872b9bc->enter($__internal_2b9297cdca8ea24dc396da3dd3bd832dc61130d0a350edbd2982c387b872b9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/posts.html.twig"));

        $__internal_9684f79941797eea3f1d974305024fcad7f80f9b50af83c4b40d9c13aa2931b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9684f79941797eea3f1d974305024fcad7f80f9b50af83c4b40d9c13aa2931b9->enter($__internal_9684f79941797eea3f1d974305024fcad7f80f9b50af83c4b40d9c13aa2931b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/posts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b9297cdca8ea24dc396da3dd3bd832dc61130d0a350edbd2982c387b872b9bc->leave($__internal_2b9297cdca8ea24dc396da3dd3bd832dc61130d0a350edbd2982c387b872b9bc_prof);

        
        $__internal_9684f79941797eea3f1d974305024fcad7f80f9b50af83c4b40d9c13aa2931b9->leave($__internal_9684f79941797eea3f1d974305024fcad7f80f9b50af83c4b40d9c13aa2931b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df6b2024484057d26affcff330772ee7e52092bb924c30e2feb7206883c177f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6b2024484057d26affcff330772ee7e52092bb924c30e2feb7206883c177f8->enter($__internal_df6b2024484057d26affcff330772ee7e52092bb924c30e2feb7206883c177f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b4ae7d52422ad761efde3d99f7121aa8e7125f74c78836df946a1158eee1e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4ae7d52422ad761efde3d99f7121aa8e7125f74c78836df946a1158eee1e82->enter($__internal_7b4ae7d52422ad761efde3d99f7121aa8e7125f74c78836df946a1158eee1e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CABlogBundle:Blog:index";
        
        $__internal_7b4ae7d52422ad761efde3d99f7121aa8e7125f74c78836df946a1158eee1e82->leave($__internal_7b4ae7d52422ad761efde3d99f7121aa8e7125f74c78836df946a1158eee1e82_prof);

        
        $__internal_df6b2024484057d26affcff330772ee7e52092bb924c30e2feb7206883c177f8->leave($__internal_df6b2024484057d26affcff330772ee7e52092bb924c30e2feb7206883c177f8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c96225eb122e799cfa466468e97d3269131908ff1ecde2bc3be7280c2e1cb088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96225eb122e799cfa466468e97d3269131908ff1ecde2bc3be7280c2e1cb088->enter($__internal_c96225eb122e799cfa466468e97d3269131908ff1ecde2bc3be7280c2e1cb088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2822e428664a98c1ebc8c4d4dea2ff1e65db7d30603c951d970c2889e942ead1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2822e428664a98c1ebc8c4d4dea2ff1e65db7d30603c951d970c2889e942ead1->enter($__internal_2822e428664a98c1ebc8c4d4dea2ff1e65db7d30603c951d970c2889e942ead1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), 0, array(), "array"), "user", array()), "username", array()), "html", null, true);
        echo "'Profile</h1>



   ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "   <div class=\"post\">
        <p><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_post", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " by </p>
        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">User</a>
        <p> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo " </p>
   </div>
   <hr />


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2822e428664a98c1ebc8c4d4dea2ff1e65db7d30603c951d970c2889e942ead1->leave($__internal_2822e428664a98c1ebc8c4d4dea2ff1e65db7d30603c951d970c2889e942ead1_prof);

        
        $__internal_c96225eb122e799cfa466468e97d3269131908ff1ecde2bc3be7280c2e1cb088->leave($__internal_c96225eb122e799cfa466468e97d3269131908ff1ecde2bc3be7280c2e1cb088_prof);

    }

    public function getTemplateName()
    {
        return "user/posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  91 => 13,  83 => 12,  80 => 11,  76 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
<h1> {{ posts[0].user.username }}'Profile</h1>



   {% for post in posts  %}
   <div class=\"post\">
        <p><a href=\"{{path('post_post', {'id': post.id}) }}\">{{ post.title }}</a> {{ post.created|date('Y-m-d H:i:s') }} by </p>
        <a href=\"{{path('post_show', {'id': post.id}) }}\">User</a>
        <p> {{ post.content }} </p>
   </div>
   <hr />


{% endfor %}
{% endblock %}
", "user/posts.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/app/Resources/views/user/posts.html.twig");
    }
}
