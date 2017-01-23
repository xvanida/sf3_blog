<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c6bdb98fb6080e85b5dbcbd2e94fe7b06427d161bb5b4ff0b96d40da2c0ffd1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d31da5a2a8f10cc7e3caa0d94c0aece6af02874af7d0f62dbd32ca7bf1ac526f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d31da5a2a8f10cc7e3caa0d94c0aece6af02874af7d0f62dbd32ca7bf1ac526f->enter($__internal_d31da5a2a8f10cc7e3caa0d94c0aece6af02874af7d0f62dbd32ca7bf1ac526f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3d1e069b81b3326db8d762defd6e011c2089f9897600aade0b51278d7e1f0004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1e069b81b3326db8d762defd6e011c2089f9897600aade0b51278d7e1f0004->enter($__internal_3d1e069b81b3326db8d762defd6e011c2089f9897600aade0b51278d7e1f0004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d31da5a2a8f10cc7e3caa0d94c0aece6af02874af7d0f62dbd32ca7bf1ac526f->leave($__internal_d31da5a2a8f10cc7e3caa0d94c0aece6af02874af7d0f62dbd32ca7bf1ac526f_prof);

        
        $__internal_3d1e069b81b3326db8d762defd6e011c2089f9897600aade0b51278d7e1f0004->leave($__internal_3d1e069b81b3326db8d762defd6e011c2089f9897600aade0b51278d7e1f0004_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f47db0367d3f84f9433dcf8d3464e02317dfb63654d414f6d7dfa11edd05623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f47db0367d3f84f9433dcf8d3464e02317dfb63654d414f6d7dfa11edd05623->enter($__internal_5f47db0367d3f84f9433dcf8d3464e02317dfb63654d414f6d7dfa11edd05623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8584953709deffe02d37f9133028dad5afeac3efd40ba8cee8f231b886090aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8584953709deffe02d37f9133028dad5afeac3efd40ba8cee8f231b886090aef->enter($__internal_8584953709deffe02d37f9133028dad5afeac3efd40ba8cee8f231b886090aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8584953709deffe02d37f9133028dad5afeac3efd40ba8cee8f231b886090aef->leave($__internal_8584953709deffe02d37f9133028dad5afeac3efd40ba8cee8f231b886090aef_prof);

        
        $__internal_5f47db0367d3f84f9433dcf8d3464e02317dfb63654d414f6d7dfa11edd05623->leave($__internal_5f47db0367d3f84f9433dcf8d3464e02317dfb63654d414f6d7dfa11edd05623_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_56f5e1039d8e888127deb7c2e9d40cbff6d89a4a9a26b6c8388072cffef61299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f5e1039d8e888127deb7c2e9d40cbff6d89a4a9a26b6c8388072cffef61299->enter($__internal_56f5e1039d8e888127deb7c2e9d40cbff6d89a4a9a26b6c8388072cffef61299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b34c0bbd48639582f96a28a4214d658416c3e4aff1cf189bb8bb1ab19ee9545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b34c0bbd48639582f96a28a4214d658416c3e4aff1cf189bb8bb1ab19ee9545->enter($__internal_4b34c0bbd48639582f96a28a4214d658416c3e4aff1cf189bb8bb1ab19ee9545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b34c0bbd48639582f96a28a4214d658416c3e4aff1cf189bb8bb1ab19ee9545->leave($__internal_4b34c0bbd48639582f96a28a4214d658416c3e4aff1cf189bb8bb1ab19ee9545_prof);

        
        $__internal_56f5e1039d8e888127deb7c2e9d40cbff6d89a4a9a26b6c8388072cffef61299->leave($__internal_56f5e1039d8e888127deb7c2e9d40cbff6d89a4a9a26b6c8388072cffef61299_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_25c09640db57c0ea34493bf0fd82bad7c5a91fa86ec38b0ce46e3c41633ffb22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c09640db57c0ea34493bf0fd82bad7c5a91fa86ec38b0ce46e3c41633ffb22->enter($__internal_25c09640db57c0ea34493bf0fd82bad7c5a91fa86ec38b0ce46e3c41633ffb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_581a5cecc213946a8f26f90ff6d2d7649722ff25ef1a30b23aeb55ad3e4c35d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581a5cecc213946a8f26f90ff6d2d7649722ff25ef1a30b23aeb55ad3e4c35d8->enter($__internal_581a5cecc213946a8f26f90ff6d2d7649722ff25ef1a30b23aeb55ad3e4c35d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_581a5cecc213946a8f26f90ff6d2d7649722ff25ef1a30b23aeb55ad3e4c35d8->leave($__internal_581a5cecc213946a8f26f90ff6d2d7649722ff25ef1a30b23aeb55ad3e4c35d8_prof);

        
        $__internal_25c09640db57c0ea34493bf0fd82bad7c5a91fa86ec38b0ce46e3c41633ffb22->leave($__internal_25c09640db57c0ea34493bf0fd82bad7c5a91fa86ec38b0ce46e3c41633ffb22_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
