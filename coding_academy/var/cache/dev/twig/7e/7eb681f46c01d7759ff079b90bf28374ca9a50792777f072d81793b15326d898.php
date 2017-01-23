<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fb119405b368fa8247cecef5b9b88ae299d02e96ae115f1fe7e136e453c08792 extends Twig_Template
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
        $__internal_461d8982005e49d206bf87f0c370fdd00a3895107e7a82089023c00b3cee83f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461d8982005e49d206bf87f0c370fdd00a3895107e7a82089023c00b3cee83f7->enter($__internal_461d8982005e49d206bf87f0c370fdd00a3895107e7a82089023c00b3cee83f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c9ad17926cd1604692986cd631d4f61d2c93a71a3d371856f0dfe41d3aaf6c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ad17926cd1604692986cd631d4f61d2c93a71a3d371856f0dfe41d3aaf6c04->enter($__internal_c9ad17926cd1604692986cd631d4f61d2c93a71a3d371856f0dfe41d3aaf6c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_461d8982005e49d206bf87f0c370fdd00a3895107e7a82089023c00b3cee83f7->leave($__internal_461d8982005e49d206bf87f0c370fdd00a3895107e7a82089023c00b3cee83f7_prof);

        
        $__internal_c9ad17926cd1604692986cd631d4f61d2c93a71a3d371856f0dfe41d3aaf6c04->leave($__internal_c9ad17926cd1604692986cd631d4f61d2c93a71a3d371856f0dfe41d3aaf6c04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
