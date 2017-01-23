<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3d83cc7f4a67640cf4366d51d8c47dccbb3ab825c9be740072656ff100b56b62 extends Twig_Template
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
        $__internal_0690ed460cc0490a628dfe2b975a83ec037f12a08bec0cd41743078e656f5f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0690ed460cc0490a628dfe2b975a83ec037f12a08bec0cd41743078e656f5f9d->enter($__internal_0690ed460cc0490a628dfe2b975a83ec037f12a08bec0cd41743078e656f5f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_3d6319beb24984ab5dbda9b0d3b39ae4611316fdceda6d645ca1e46320c2b598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6319beb24984ab5dbda9b0d3b39ae4611316fdceda6d645ca1e46320c2b598->enter($__internal_3d6319beb24984ab5dbda9b0d3b39ae4611316fdceda6d645ca1e46320c2b598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0690ed460cc0490a628dfe2b975a83ec037f12a08bec0cd41743078e656f5f9d->leave($__internal_0690ed460cc0490a628dfe2b975a83ec037f12a08bec0cd41743078e656f5f9d_prof);

        
        $__internal_3d6319beb24984ab5dbda9b0d3b39ae4611316fdceda6d645ca1e46320c2b598->leave($__internal_3d6319beb24984ab5dbda9b0d3b39ae4611316fdceda6d645ca1e46320c2b598_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
