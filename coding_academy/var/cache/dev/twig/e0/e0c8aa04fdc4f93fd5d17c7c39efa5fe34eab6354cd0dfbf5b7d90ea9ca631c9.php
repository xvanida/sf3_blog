<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_60ccab1ae98bc49f6dc172751e57766837a820c9da1545a7405627a9f96c589e extends Twig_Template
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
        $__internal_1ae590919982b2963d178d2eedcd9b2d03e8ac7cb52d57e5ce16a4d3c5040d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae590919982b2963d178d2eedcd9b2d03e8ac7cb52d57e5ce16a4d3c5040d17->enter($__internal_1ae590919982b2963d178d2eedcd9b2d03e8ac7cb52d57e5ce16a4d3c5040d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_2724f357f6906ae7014f2161cc3a89ad6856bc1a392d9168bc565dfae6ecf647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2724f357f6906ae7014f2161cc3a89ad6856bc1a392d9168bc565dfae6ecf647->enter($__internal_2724f357f6906ae7014f2161cc3a89ad6856bc1a392d9168bc565dfae6ecf647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1ae590919982b2963d178d2eedcd9b2d03e8ac7cb52d57e5ce16a4d3c5040d17->leave($__internal_1ae590919982b2963d178d2eedcd9b2d03e8ac7cb52d57e5ce16a4d3c5040d17_prof);

        
        $__internal_2724f357f6906ae7014f2161cc3a89ad6856bc1a392d9168bc565dfae6ecf647->leave($__internal_2724f357f6906ae7014f2161cc3a89ad6856bc1a392d9168bc565dfae6ecf647_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
