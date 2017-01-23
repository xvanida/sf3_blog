<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_28e6cd10f34d057a0beab98497d9511feeb7d5b8677a85ca60a7dd8f273a21fc extends Twig_Template
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
        $__internal_66666d389cee0fef4caa93374e71abfc97c5034998fd255cd110dc352a53a671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66666d389cee0fef4caa93374e71abfc97c5034998fd255cd110dc352a53a671->enter($__internal_66666d389cee0fef4caa93374e71abfc97c5034998fd255cd110dc352a53a671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_39dc31d13aa5db8839e39cc27f92ffe9eb4ac2acd0e0357da777663753befe57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dc31d13aa5db8839e39cc27f92ffe9eb4ac2acd0e0357da777663753befe57->enter($__internal_39dc31d13aa5db8839e39cc27f92ffe9eb4ac2acd0e0357da777663753befe57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_66666d389cee0fef4caa93374e71abfc97c5034998fd255cd110dc352a53a671->leave($__internal_66666d389cee0fef4caa93374e71abfc97c5034998fd255cd110dc352a53a671_prof);

        
        $__internal_39dc31d13aa5db8839e39cc27f92ffe9eb4ac2acd0e0357da777663753befe57->leave($__internal_39dc31d13aa5db8839e39cc27f92ffe9eb4ac2acd0e0357da777663753befe57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
