<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b5dc5a4086d0bd5a883a791f2bb2c564c1c9a8ce99041ca6478472090a147fe9 extends Twig_Template
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
        $__internal_c25262e2f4e0eebe7ec35e01713fedb3a135a2de806954b98c727a552363bcaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25262e2f4e0eebe7ec35e01713fedb3a135a2de806954b98c727a552363bcaf->enter($__internal_c25262e2f4e0eebe7ec35e01713fedb3a135a2de806954b98c727a552363bcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_7f7ec889a79eac89945594668817aa2d2f802b495de7d0840cd0931bd25bae89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7ec889a79eac89945594668817aa2d2f802b495de7d0840cd0931bd25bae89->enter($__internal_7f7ec889a79eac89945594668817aa2d2f802b495de7d0840cd0931bd25bae89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_c25262e2f4e0eebe7ec35e01713fedb3a135a2de806954b98c727a552363bcaf->leave($__internal_c25262e2f4e0eebe7ec35e01713fedb3a135a2de806954b98c727a552363bcaf_prof);

        
        $__internal_7f7ec889a79eac89945594668817aa2d2f802b495de7d0840cd0931bd25bae89->leave($__internal_7f7ec889a79eac89945594668817aa2d2f802b495de7d0840cd0931bd25bae89_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
