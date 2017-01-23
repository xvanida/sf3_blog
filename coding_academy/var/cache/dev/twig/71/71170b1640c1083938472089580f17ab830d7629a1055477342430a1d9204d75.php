<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d45ba71e1181cc56aa6d2216ff56684684e7152f60fc5ed878fe668c059e12c4 extends Twig_Template
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
        $__internal_9bf74bef1761d0ed827c71aceb8bd0a316a5d5f2179b5dc2080ff821caefd512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf74bef1761d0ed827c71aceb8bd0a316a5d5f2179b5dc2080ff821caefd512->enter($__internal_9bf74bef1761d0ed827c71aceb8bd0a316a5d5f2179b5dc2080ff821caefd512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_ced634ee702806c258cdee47b1660d0549ae9aadc729889717f06ca531ec533a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced634ee702806c258cdee47b1660d0549ae9aadc729889717f06ca531ec533a->enter($__internal_ced634ee702806c258cdee47b1660d0549ae9aadc729889717f06ca531ec533a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9bf74bef1761d0ed827c71aceb8bd0a316a5d5f2179b5dc2080ff821caefd512->leave($__internal_9bf74bef1761d0ed827c71aceb8bd0a316a5d5f2179b5dc2080ff821caefd512_prof);

        
        $__internal_ced634ee702806c258cdee47b1660d0549ae9aadc729889717f06ca531ec533a->leave($__internal_ced634ee702806c258cdee47b1660d0549ae9aadc729889717f06ca531ec533a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
