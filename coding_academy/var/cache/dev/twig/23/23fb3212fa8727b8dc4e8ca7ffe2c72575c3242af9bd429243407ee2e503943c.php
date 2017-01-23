<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_73ea895c3f0bba9dae1b52918831cd597178155d55a8661f8ed01c595c64d34e extends Twig_Template
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
        $__internal_cb40ad58a1860896e690fc80a91ff25b4878ca44b26bbec4a4a176696155723e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb40ad58a1860896e690fc80a91ff25b4878ca44b26bbec4a4a176696155723e->enter($__internal_cb40ad58a1860896e690fc80a91ff25b4878ca44b26bbec4a4a176696155723e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4bab127cc1f3f518d99737dce1e3f281df7178a311c05a65535896e306db93df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bab127cc1f3f518d99737dce1e3f281df7178a311c05a65535896e306db93df->enter($__internal_4bab127cc1f3f518d99737dce1e3f281df7178a311c05a65535896e306db93df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_cb40ad58a1860896e690fc80a91ff25b4878ca44b26bbec4a4a176696155723e->leave($__internal_cb40ad58a1860896e690fc80a91ff25b4878ca44b26bbec4a4a176696155723e_prof);

        
        $__internal_4bab127cc1f3f518d99737dce1e3f281df7178a311c05a65535896e306db93df->leave($__internal_4bab127cc1f3f518d99737dce1e3f281df7178a311c05a65535896e306db93df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
