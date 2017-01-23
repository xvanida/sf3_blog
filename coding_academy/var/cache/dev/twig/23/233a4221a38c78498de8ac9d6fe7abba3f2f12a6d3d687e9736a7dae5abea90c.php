<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_083c5e26d3c15ab56bdcedf83a767c6a394074d8726cb70eb68955acbfe30803 extends Twig_Template
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
        $__internal_f4d9f76e5f9c9083d6e01d856d0b066181e9a90e6a00839c70290d4edff77a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d9f76e5f9c9083d6e01d856d0b066181e9a90e6a00839c70290d4edff77a64->enter($__internal_f4d9f76e5f9c9083d6e01d856d0b066181e9a90e6a00839c70290d4edff77a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_cc2e8c3c1d8c8c52ab9ee32203e72e4889b26a7f8ae4d97812bd4e07b16cfc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2e8c3c1d8c8c52ab9ee32203e72e4889b26a7f8ae4d97812bd4e07b16cfc2d->enter($__internal_cc2e8c3c1d8c8c52ab9ee32203e72e4889b26a7f8ae4d97812bd4e07b16cfc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f4d9f76e5f9c9083d6e01d856d0b066181e9a90e6a00839c70290d4edff77a64->leave($__internal_f4d9f76e5f9c9083d6e01d856d0b066181e9a90e6a00839c70290d4edff77a64_prof);

        
        $__internal_cc2e8c3c1d8c8c52ab9ee32203e72e4889b26a7f8ae4d97812bd4e07b16cfc2d->leave($__internal_cc2e8c3c1d8c8c52ab9ee32203e72e4889b26a7f8ae4d97812bd4e07b16cfc2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
