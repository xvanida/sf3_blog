<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e71d51fc44277dcd08ec3b48cc56d59e0557e681eb126acb8cbe472937f3ed9d extends Twig_Template
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
        $__internal_c2f41bd4abe76f1e0ede29323bba9fd119daf81e5ab3b61a92a19bc530e9b0b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f41bd4abe76f1e0ede29323bba9fd119daf81e5ab3b61a92a19bc530e9b0b5->enter($__internal_c2f41bd4abe76f1e0ede29323bba9fd119daf81e5ab3b61a92a19bc530e9b0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3143d0e377ca4190185f15b03d1a0157968d93d74adf71b0425307132efaf5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3143d0e377ca4190185f15b03d1a0157968d93d74adf71b0425307132efaf5e5->enter($__internal_3143d0e377ca4190185f15b03d1a0157968d93d74adf71b0425307132efaf5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c2f41bd4abe76f1e0ede29323bba9fd119daf81e5ab3b61a92a19bc530e9b0b5->leave($__internal_c2f41bd4abe76f1e0ede29323bba9fd119daf81e5ab3b61a92a19bc530e9b0b5_prof);

        
        $__internal_3143d0e377ca4190185f15b03d1a0157968d93d74adf71b0425307132efaf5e5->leave($__internal_3143d0e377ca4190185f15b03d1a0157968d93d74adf71b0425307132efaf5e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
