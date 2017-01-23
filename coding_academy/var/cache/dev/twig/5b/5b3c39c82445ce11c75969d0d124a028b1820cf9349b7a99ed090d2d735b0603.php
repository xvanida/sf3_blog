<?php

/* @CABlog/Session/login.html.twig */
class __TwigTemplate_1508e3857824e6d14082a2e675470d543c85a4ee2d371a4b1b14ab110313baa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@CABlog/Session/login.html.twig", 1);
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
        $__internal_108f20a88e8f391adeb42b85bcdebab022f84353c36c3e36eff43d8ed20c1b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108f20a88e8f391adeb42b85bcdebab022f84353c36c3e36eff43d8ed20c1b70->enter($__internal_108f20a88e8f391adeb42b85bcdebab022f84353c36c3e36eff43d8ed20c1b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CABlog/Session/login.html.twig"));

        $__internal_7af4b6c093de9a93d35615a0315b1f8e5bae34b45c653ac89814cb21a10a90f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af4b6c093de9a93d35615a0315b1f8e5bae34b45c653ac89814cb21a10a90f2->enter($__internal_7af4b6c093de9a93d35615a0315b1f8e5bae34b45c653ac89814cb21a10a90f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CABlog/Session/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_108f20a88e8f391adeb42b85bcdebab022f84353c36c3e36eff43d8ed20c1b70->leave($__internal_108f20a88e8f391adeb42b85bcdebab022f84353c36c3e36eff43d8ed20c1b70_prof);

        
        $__internal_7af4b6c093de9a93d35615a0315b1f8e5bae34b45c653ac89814cb21a10a90f2->leave($__internal_7af4b6c093de9a93d35615a0315b1f8e5bae34b45c653ac89814cb21a10a90f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3a10eedaaf61ad0f0045566633c6027ee2a2c3b7494dc220f4e6ed7f8013e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a10eedaaf61ad0f0045566633c6027ee2a2c3b7494dc220f4e6ed7f8013e63->enter($__internal_c3a10eedaaf61ad0f0045566633c6027ee2a2c3b7494dc220f4e6ed7f8013e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59ba0ad77f34d999dc8ee344e28ef2dcdfbfd5e25752c90b0c9965663e2c2106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ba0ad77f34d999dc8ee344e28ef2dcdfbfd5e25752c90b0c9965663e2c2106->enter($__internal_59ba0ad77f34d999dc8ee344e28ef2dcdfbfd5e25752c90b0c9965663e2c2106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CABlogBundle:Session:login";
        
        $__internal_59ba0ad77f34d999dc8ee344e28ef2dcdfbfd5e25752c90b0c9965663e2c2106->leave($__internal_59ba0ad77f34d999dc8ee344e28ef2dcdfbfd5e25752c90b0c9965663e2c2106_prof);

        
        $__internal_c3a10eedaaf61ad0f0045566633c6027ee2a2c3b7494dc220f4e6ed7f8013e63->leave($__internal_c3a10eedaaf61ad0f0045566633c6027ee2a2c3b7494dc220f4e6ed7f8013e63_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_15a7af8b47a7bf71f063143cacf48cf7870a30011cec8f55a70d1256a185abfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a7af8b47a7bf71f063143cacf48cf7870a30011cec8f55a70d1256a185abfd->enter($__internal_15a7af8b47a7bf71f063143cacf48cf7870a30011cec8f55a70d1256a185abfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30bfcf780c3f5952dc1e8e08b78fc0a85dd2953a378646fcfa57ba606f6d7d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bfcf780c3f5952dc1e8e08b78fc0a85dd2953a378646fcfa57ba606f6d7d79->enter($__internal_30bfcf780c3f5952dc1e8e08b78fc0a85dd2953a378646fcfa57ba606f6d7d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_30bfcf780c3f5952dc1e8e08b78fc0a85dd2953a378646fcfa57ba606f6d7d79->leave($__internal_30bfcf780c3f5952dc1e8e08b78fc0a85dd2953a378646fcfa57ba606f6d7d79_prof);

        
        $__internal_15a7af8b47a7bf71f063143cacf48cf7870a30011cec8f55a70d1256a185abfd->leave($__internal_15a7af8b47a7bf71f063143cacf48cf7870a30011cec8f55a70d1256a185abfd_prof);

    }

    public function getTemplateName()
    {
        return "@CABlog/Session/login.html.twig";
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
", "@CABlog/Session/login.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/src/CA/BlogBundle/Resources/views/Session/login.html.twig");
    }
}
