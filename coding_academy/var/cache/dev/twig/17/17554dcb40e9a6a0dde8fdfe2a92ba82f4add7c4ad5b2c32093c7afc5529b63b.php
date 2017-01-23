<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_99d32c8bc8dabb7ef17730fbafe84a0dc5e1ffc15ed455185271c7f201eb9d29 extends Twig_Template
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
        $__internal_e6d81d0305fe45292138f2e95e08f78450b85d770c16a4a1c8a777e777e55acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d81d0305fe45292138f2e95e08f78450b85d770c16a4a1c8a777e777e55acc->enter($__internal_e6d81d0305fe45292138f2e95e08f78450b85d770c16a4a1c8a777e777e55acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_9057820a3a0c0d15325850e99b44d9d02dd474736bd1edb80028b8993b1c8d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9057820a3a0c0d15325850e99b44d9d02dd474736bd1edb80028b8993b1c8d77->enter($__internal_9057820a3a0c0d15325850e99b44d9d02dd474736bd1edb80028b8993b1c8d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e6d81d0305fe45292138f2e95e08f78450b85d770c16a4a1c8a777e777e55acc->leave($__internal_e6d81d0305fe45292138f2e95e08f78450b85d770c16a4a1c8a777e777e55acc_prof);

        
        $__internal_9057820a3a0c0d15325850e99b44d9d02dd474736bd1edb80028b8993b1c8d77->leave($__internal_9057820a3a0c0d15325850e99b44d9d02dd474736bd1edb80028b8993b1c8d77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
