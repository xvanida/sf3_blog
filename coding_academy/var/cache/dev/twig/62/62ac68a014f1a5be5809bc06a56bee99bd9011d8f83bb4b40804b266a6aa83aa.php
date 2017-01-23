<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_76e61b315397e6bbaa5a08fe26fbd4b0f52c5d35e281c2cec8ce42034285cc22 extends Twig_Template
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
        $__internal_eebea54b049eda3915a313e70fd72eedc6800adba900bf85fb3181fabea642f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eebea54b049eda3915a313e70fd72eedc6800adba900bf85fb3181fabea642f6->enter($__internal_eebea54b049eda3915a313e70fd72eedc6800adba900bf85fb3181fabea642f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b73ea6a7ff82ff03cd744a5928fbe1e042079718c9bba5250c3003953be2db36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73ea6a7ff82ff03cd744a5928fbe1e042079718c9bba5250c3003953be2db36->enter($__internal_b73ea6a7ff82ff03cd744a5928fbe1e042079718c9bba5250c3003953be2db36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_eebea54b049eda3915a313e70fd72eedc6800adba900bf85fb3181fabea642f6->leave($__internal_eebea54b049eda3915a313e70fd72eedc6800adba900bf85fb3181fabea642f6_prof);

        
        $__internal_b73ea6a7ff82ff03cd744a5928fbe1e042079718c9bba5250c3003953be2db36->leave($__internal_b73ea6a7ff82ff03cd744a5928fbe1e042079718c9bba5250c3003953be2db36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
