<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_35559e23a2a8137c2affca3a547cf70ac2fae06a66e9b4a770cf9caeeebaa7d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efe7d326eff578eb2c78ba5f1ab54bf181ede867d33997456e34390ce743e611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe7d326eff578eb2c78ba5f1ab54bf181ede867d33997456e34390ce743e611->enter($__internal_efe7d326eff578eb2c78ba5f1ab54bf181ede867d33997456e34390ce743e611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_fb685a2a53d58a5281ad85b6568a2f890f23609c02435209d8555af173aaa411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb685a2a53d58a5281ad85b6568a2f890f23609c02435209d8555af173aaa411->enter($__internal_fb685a2a53d58a5281ad85b6568a2f890f23609c02435209d8555af173aaa411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_efe7d326eff578eb2c78ba5f1ab54bf181ede867d33997456e34390ce743e611->leave($__internal_efe7d326eff578eb2c78ba5f1ab54bf181ede867d33997456e34390ce743e611_prof);

        
        $__internal_fb685a2a53d58a5281ad85b6568a2f890f23609c02435209d8555af173aaa411->leave($__internal_fb685a2a53d58a5281ad85b6568a2f890f23609c02435209d8555af173aaa411_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
