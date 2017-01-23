<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7a6ed0459933bd6095be2233ce5695b0ea2d616467c02e7cd24d66def159b9a0 extends Twig_Template
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
        $__internal_6bde7640ab61e634f040f2d1211bac93d288127046bb2e180620838d088e7825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bde7640ab61e634f040f2d1211bac93d288127046bb2e180620838d088e7825->enter($__internal_6bde7640ab61e634f040f2d1211bac93d288127046bb2e180620838d088e7825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_49c43b95823565c7d3e9f37e3517d6d07e0d769488e56eab5ebc0f66b8879a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c43b95823565c7d3e9f37e3517d6d07e0d769488e56eab5ebc0f66b8879a80->enter($__internal_49c43b95823565c7d3e9f37e3517d6d07e0d769488e56eab5ebc0f66b8879a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6bde7640ab61e634f040f2d1211bac93d288127046bb2e180620838d088e7825->leave($__internal_6bde7640ab61e634f040f2d1211bac93d288127046bb2e180620838d088e7825_prof);

        
        $__internal_49c43b95823565c7d3e9f37e3517d6d07e0d769488e56eab5ebc0f66b8879a80->leave($__internal_49c43b95823565c7d3e9f37e3517d6d07e0d769488e56eab5ebc0f66b8879a80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
