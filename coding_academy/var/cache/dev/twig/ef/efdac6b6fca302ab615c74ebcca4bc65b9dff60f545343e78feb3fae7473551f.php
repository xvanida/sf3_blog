<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e15f514d4c9801978aee1706ff032ca081e62d1a7ea90dcd5ac8a7de0799426a extends Twig_Template
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
        $__internal_66e7fb353d25c4cf65d269c73601ae480ad9b4c3261bf141ee0b187100694497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e7fb353d25c4cf65d269c73601ae480ad9b4c3261bf141ee0b187100694497->enter($__internal_66e7fb353d25c4cf65d269c73601ae480ad9b4c3261bf141ee0b187100694497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2942938094cc2a46e7ca30549ef6b8918f05d0f403b755aefe9a3e7990965d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2942938094cc2a46e7ca30549ef6b8918f05d0f403b755aefe9a3e7990965d9b->enter($__internal_2942938094cc2a46e7ca30549ef6b8918f05d0f403b755aefe9a3e7990965d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_66e7fb353d25c4cf65d269c73601ae480ad9b4c3261bf141ee0b187100694497->leave($__internal_66e7fb353d25c4cf65d269c73601ae480ad9b4c3261bf141ee0b187100694497_prof);

        
        $__internal_2942938094cc2a46e7ca30549ef6b8918f05d0f403b755aefe9a3e7990965d9b->leave($__internal_2942938094cc2a46e7ca30549ef6b8918f05d0f403b755aefe9a3e7990965d9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
