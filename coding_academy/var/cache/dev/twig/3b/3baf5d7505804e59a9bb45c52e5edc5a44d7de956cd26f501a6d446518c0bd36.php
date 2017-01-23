<?php

/* CABlogBundle:Session:login.html.twig */
class __TwigTemplate_1a78a05f537117817b15956a6fda688b40aca672d4457e45e4e7567d6810da8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CABlogBundle:Session:login.html.twig", 1);
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
        $__internal_218092b146d1b0cb885c808e39593a4537264f91b8140ca8778563343db4b283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218092b146d1b0cb885c808e39593a4537264f91b8140ca8778563343db4b283->enter($__internal_218092b146d1b0cb885c808e39593a4537264f91b8140ca8778563343db4b283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CABlogBundle:Session:login.html.twig"));

        $__internal_a6743caad61412eeb47102b148c09e72e9e4388589a1f193f5aa62742abdd254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6743caad61412eeb47102b148c09e72e9e4388589a1f193f5aa62742abdd254->enter($__internal_a6743caad61412eeb47102b148c09e72e9e4388589a1f193f5aa62742abdd254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CABlogBundle:Session:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_218092b146d1b0cb885c808e39593a4537264f91b8140ca8778563343db4b283->leave($__internal_218092b146d1b0cb885c808e39593a4537264f91b8140ca8778563343db4b283_prof);

        
        $__internal_a6743caad61412eeb47102b148c09e72e9e4388589a1f193f5aa62742abdd254->leave($__internal_a6743caad61412eeb47102b148c09e72e9e4388589a1f193f5aa62742abdd254_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93e83213f3b7eb16d6cbadb4193c9e73fbe7947eae258c113ae4590d21794e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e83213f3b7eb16d6cbadb4193c9e73fbe7947eae258c113ae4590d21794e3b->enter($__internal_93e83213f3b7eb16d6cbadb4193c9e73fbe7947eae258c113ae4590d21794e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb3e2c813eda7be38d266ad1a68bb5523eb3d613149293b14f900ae978b8f0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3e2c813eda7be38d266ad1a68bb5523eb3d613149293b14f900ae978b8f0f2->enter($__internal_fb3e2c813eda7be38d266ad1a68bb5523eb3d613149293b14f900ae978b8f0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CABlogBundle:Session:login";
        
        $__internal_fb3e2c813eda7be38d266ad1a68bb5523eb3d613149293b14f900ae978b8f0f2->leave($__internal_fb3e2c813eda7be38d266ad1a68bb5523eb3d613149293b14f900ae978b8f0f2_prof);

        
        $__internal_93e83213f3b7eb16d6cbadb4193c9e73fbe7947eae258c113ae4590d21794e3b->leave($__internal_93e83213f3b7eb16d6cbadb4193c9e73fbe7947eae258c113ae4590d21794e3b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab36e8948fc721f4efed9cc0c950c5fc235cf9296bc80c54815122b2a01831b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab36e8948fc721f4efed9cc0c950c5fc235cf9296bc80c54815122b2a01831b3->enter($__internal_ab36e8948fc721f4efed9cc0c950c5fc235cf9296bc80c54815122b2a01831b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd8402f19e71650f48a7f28d7e2f01ae2729d5a0e495596ecec63af4301f73ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8402f19e71650f48a7f28d7e2f01ae2729d5a0e495596ecec63af4301f73ab->enter($__internal_cd8402f19e71650f48a7f28d7e2f01ae2729d5a0e495596ecec63af4301f73ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "<div id=\"connection_error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
     <label for=\"username\">Username:</label>
     <input type=\"text\" id=\"username\" name=\"_username\"  />

     <label for=\"password\">Password:</label>
     <input type=\"password\" id=\"password\" name=\"_password\" />
     
     <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
     <label for=\"remember_me\">Keep me logged in</label>

     ";
        // line 26
        echo "
     <button type=\"submit\">login</button>
</form>
";
        
        $__internal_cd8402f19e71650f48a7f28d7e2f01ae2729d5a0e495596ecec63af4301f73ab->leave($__internal_cd8402f19e71650f48a7f28d7e2f01ae2729d5a0e495596ecec63af4301f73ab_prof);

        
        $__internal_ab36e8948fc721f4efed9cc0c950c5fc235cf9296bc80c54815122b2a01831b3->leave($__internal_ab36e8948fc721f4efed9cc0c950c5fc235cf9296bc80c54815122b2a01831b3_prof);

    }

    public function getTemplateName()
    {
        return "CABlogBundle:Session:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  82 => 11,  79 => 10,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}CABlogBundle:Session:login{% endblock %}

{% block body %}

{% if error %}
<div id=\"connection_error\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
     <label for=\"username\">Username:</label>
     <input type=\"text\" id=\"username\" name=\"_username\"  />

     <label for=\"password\">Password:</label>
     <input type=\"password\" id=\"password\" name=\"_password\" />
     
     <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
     <label for=\"remember_me\">Keep me logged in</label>

     {#
     If you want to control the URL the user
     is redirected to on success (more details below)
     <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
     #}

     <button type=\"submit\">login</button>
</form>
{% endblock %}
", "CABlogBundle:Session:login.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/var/cache/dev/../../../src/CA/BlogBundle/Resources/views/Session/login.html.twig");
    }
}
