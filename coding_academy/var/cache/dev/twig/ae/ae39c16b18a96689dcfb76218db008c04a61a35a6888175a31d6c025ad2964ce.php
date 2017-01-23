<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1ef9711d5812e446bdf8ddc16ec977eb826d3ab3cb26507456c9b09b7c4aa358 extends Twig_Template
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
        $__internal_c4301a4ee7d7c9ecdd3f1bf5a54ec75aff6bd88014fc16ef580b3e23e91da6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4301a4ee7d7c9ecdd3f1bf5a54ec75aff6bd88014fc16ef580b3e23e91da6a6->enter($__internal_c4301a4ee7d7c9ecdd3f1bf5a54ec75aff6bd88014fc16ef580b3e23e91da6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_8c3ae89d9bedae29ea8df7d8e8c478d60d97f2db128b5f29f7e0972ba1ddb4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3ae89d9bedae29ea8df7d8e8c478d60d97f2db128b5f29f7e0972ba1ddb4a0->enter($__internal_8c3ae89d9bedae29ea8df7d8e8c478d60d97f2db128b5f29f7e0972ba1ddb4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c4301a4ee7d7c9ecdd3f1bf5a54ec75aff6bd88014fc16ef580b3e23e91da6a6->leave($__internal_c4301a4ee7d7c9ecdd3f1bf5a54ec75aff6bd88014fc16ef580b3e23e91da6a6_prof);

        
        $__internal_8c3ae89d9bedae29ea8df7d8e8c478d60d97f2db128b5f29f7e0972ba1ddb4a0->leave($__internal_8c3ae89d9bedae29ea8df7d8e8c478d60d97f2db128b5f29f7e0972ba1ddb4a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
