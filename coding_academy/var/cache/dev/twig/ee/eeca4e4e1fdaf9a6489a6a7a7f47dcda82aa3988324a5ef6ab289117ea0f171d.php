<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_928b65361d976b567f694af5f7337a0c3a855e3669ed393679b0f7fb05e6f7d3 extends Twig_Template
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
        $__internal_a6cecace7e7457a4d5229831b4ecc1386923c63fe9a7402e22cbd9d292af0609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6cecace7e7457a4d5229831b4ecc1386923c63fe9a7402e22cbd9d292af0609->enter($__internal_a6cecace7e7457a4d5229831b4ecc1386923c63fe9a7402e22cbd9d292af0609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_233bef96228bf47c93c26288f06ae5bb8e4e8b266c2fd5ae704350a3178b2724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233bef96228bf47c93c26288f06ae5bb8e4e8b266c2fd5ae704350a3178b2724->enter($__internal_233bef96228bf47c93c26288f06ae5bb8e4e8b266c2fd5ae704350a3178b2724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a6cecace7e7457a4d5229831b4ecc1386923c63fe9a7402e22cbd9d292af0609->leave($__internal_a6cecace7e7457a4d5229831b4ecc1386923c63fe9a7402e22cbd9d292af0609_prof);

        
        $__internal_233bef96228bf47c93c26288f06ae5bb8e4e8b266c2fd5ae704350a3178b2724->leave($__internal_233bef96228bf47c93c26288f06ae5bb8e4e8b266c2fd5ae704350a3178b2724_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
