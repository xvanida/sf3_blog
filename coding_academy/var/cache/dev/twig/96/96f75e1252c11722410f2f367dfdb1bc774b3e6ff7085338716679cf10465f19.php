<?php

/* @CABlog/Blog/index.html.twig */
class __TwigTemplate_1033501e5ece4eff399485332dd1f0eb13a6ae633c82c5123b22baaac340f972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@CABlog/Blog/index.html.twig", 1);
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
        $__internal_88caac7f0240bc44e9de9b12a22dc23f35eea7fba451a325b3aa69aeba93c93e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88caac7f0240bc44e9de9b12a22dc23f35eea7fba451a325b3aa69aeba93c93e->enter($__internal_88caac7f0240bc44e9de9b12a22dc23f35eea7fba451a325b3aa69aeba93c93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CABlog/Blog/index.html.twig"));

        $__internal_416fe99f0447f3e7681be312393b828a249bf93fb96841af1401c41a58d673a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416fe99f0447f3e7681be312393b828a249bf93fb96841af1401c41a58d673a5->enter($__internal_416fe99f0447f3e7681be312393b828a249bf93fb96841af1401c41a58d673a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CABlog/Blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88caac7f0240bc44e9de9b12a22dc23f35eea7fba451a325b3aa69aeba93c93e->leave($__internal_88caac7f0240bc44e9de9b12a22dc23f35eea7fba451a325b3aa69aeba93c93e_prof);

        
        $__internal_416fe99f0447f3e7681be312393b828a249bf93fb96841af1401c41a58d673a5->leave($__internal_416fe99f0447f3e7681be312393b828a249bf93fb96841af1401c41a58d673a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2eed8655021796e322938e2d1ac1132cb3243110c0ae509d8fde8477acae367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2eed8655021796e322938e2d1ac1132cb3243110c0ae509d8fde8477acae367->enter($__internal_e2eed8655021796e322938e2d1ac1132cb3243110c0ae509d8fde8477acae367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_280b916e972bc80f464f72eb44a3a3deda785012f66c1c9ff63c2d28f40e6b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280b916e972bc80f464f72eb44a3a3deda785012f66c1c9ff63c2d28f40e6b0c->enter($__internal_280b916e972bc80f464f72eb44a3a3deda785012f66c1c9ff63c2d28f40e6b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CABlogBundle:Blog:index";
        
        $__internal_280b916e972bc80f464f72eb44a3a3deda785012f66c1c9ff63c2d28f40e6b0c->leave($__internal_280b916e972bc80f464f72eb44a3a3deda785012f66c1c9ff63c2d28f40e6b0c_prof);

        
        $__internal_e2eed8655021796e322938e2d1ac1132cb3243110c0ae509d8fde8477acae367->leave($__internal_e2eed8655021796e322938e2d1ac1132cb3243110c0ae509d8fde8477acae367_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b7183061692cda7cb701b9b17376cfc2063d200b6dbb5e61d0ee7636cc45508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7183061692cda7cb701b9b17376cfc2063d200b6dbb5e61d0ee7636cc45508->enter($__internal_3b7183061692cda7cb701b9b17376cfc2063d200b6dbb5e61d0ee7636cc45508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_851275564653365f88c5ed21dd6aee79a8e51b45576af17a27806e96287acf91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851275564653365f88c5ed21dd6aee79a8e51b45576af17a27806e96287acf91->enter($__internal_851275564653365f88c5ed21dd6aee79a8e51b45576af17a27806e96287acf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Blog:index page</h1>



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
        
        $__internal_851275564653365f88c5ed21dd6aee79a8e51b45576af17a27806e96287acf91->leave($__internal_851275564653365f88c5ed21dd6aee79a8e51b45576af17a27806e96287acf91_prof);

        
        $__internal_3b7183061692cda7cb701b9b17376cfc2063d200b6dbb5e61d0ee7636cc45508->leave($__internal_3b7183061692cda7cb701b9b17376cfc2063d200b6dbb5e61d0ee7636cc45508_prof);

    }

    public function getTemplateName()
    {
        return "@CABlog/Blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 14,  89 => 13,  81 => 12,  78 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
<h1>Welcome to the Blog:index page</h1>



   {% for post in posts  %}
   <div class=\"post\">
        <p><a href=\"{{path('post_post', {'id': post.id}) }}\">{{ post.title }}</a> {{ post.created|date('Y-m-d H:i:s') }} by </p>
        <a href=\"{{path('post_show', {'id': post.id}) }}\">User</a>
        <p> {{ post.content }} </p>
   </div>
   <hr />


{% endfor %}
{% endblock %}
", "@CABlog/Blog/index.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/src/CA/BlogBundle/Resources/views/Blog/index.html.twig");
    }
}
