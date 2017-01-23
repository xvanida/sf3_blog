<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_171717644e7a301d325108976286d53aebb33aec152d92a608afbffc7a177153 extends Twig_Template
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
        $__internal_431dbe90e1e667f97afbf5463b6de4faa58ce03669cc20d670df792818f34da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431dbe90e1e667f97afbf5463b6de4faa58ce03669cc20d670df792818f34da7->enter($__internal_431dbe90e1e667f97afbf5463b6de4faa58ce03669cc20d670df792818f34da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_492e9e35958bf59e3f39659b39f96381d91ce1d67bdc473e1ba3ae72b10bc574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492e9e35958bf59e3f39659b39f96381d91ce1d67bdc473e1ba3ae72b10bc574->enter($__internal_492e9e35958bf59e3f39659b39f96381d91ce1d67bdc473e1ba3ae72b10bc574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_431dbe90e1e667f97afbf5463b6de4faa58ce03669cc20d670df792818f34da7->leave($__internal_431dbe90e1e667f97afbf5463b6de4faa58ce03669cc20d670df792818f34da7_prof);

        
        $__internal_492e9e35958bf59e3f39659b39f96381d91ce1d67bdc473e1ba3ae72b10bc574->leave($__internal_492e9e35958bf59e3f39659b39f96381d91ce1d67bdc473e1ba3ae72b10bc574_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
