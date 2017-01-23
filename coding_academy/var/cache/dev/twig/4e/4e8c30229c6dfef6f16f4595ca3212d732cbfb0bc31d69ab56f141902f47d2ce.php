<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_dc6c134dbcd5f256d914fe323d5b27195e997782e74fdf40d12efa5c5c2e1092 extends Twig_Template
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
        $__internal_28a7b5ced3f51d4fc77bea2b00b7911c5fd76c49af7127b1b37a5a72ddd57626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a7b5ced3f51d4fc77bea2b00b7911c5fd76c49af7127b1b37a5a72ddd57626->enter($__internal_28a7b5ced3f51d4fc77bea2b00b7911c5fd76c49af7127b1b37a5a72ddd57626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_70c809418d84fb4cac377ff99bf58e0f8a9436dc4cb2d6ddbe553a629c299f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c809418d84fb4cac377ff99bf58e0f8a9436dc4cb2d6ddbe553a629c299f19->enter($__internal_70c809418d84fb4cac377ff99bf58e0f8a9436dc4cb2d6ddbe553a629c299f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_28a7b5ced3f51d4fc77bea2b00b7911c5fd76c49af7127b1b37a5a72ddd57626->leave($__internal_28a7b5ced3f51d4fc77bea2b00b7911c5fd76c49af7127b1b37a5a72ddd57626_prof);

        
        $__internal_70c809418d84fb4cac377ff99bf58e0f8a9436dc4cb2d6ddbe553a629c299f19->leave($__internal_70c809418d84fb4cac377ff99bf58e0f8a9436dc4cb2d6ddbe553a629c299f19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
