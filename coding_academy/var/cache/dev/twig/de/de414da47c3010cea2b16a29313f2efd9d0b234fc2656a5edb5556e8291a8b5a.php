<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_59ad285c96328f8c24e063c3e3a9c14e02f3bac9cfe79e2ee508a0e6cc50f161 extends Twig_Template
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
        $__internal_88f7aad910f6835994bb129a53d5e0e69a0a3d5abb984bd3ee2378bddfb43d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f7aad910f6835994bb129a53d5e0e69a0a3d5abb984bd3ee2378bddfb43d31->enter($__internal_88f7aad910f6835994bb129a53d5e0e69a0a3d5abb984bd3ee2378bddfb43d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_9065e95e4e315233f808fd8b4cca4922e362d85d37da9920e17b1662543cf2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9065e95e4e315233f808fd8b4cca4922e362d85d37da9920e17b1662543cf2e0->enter($__internal_9065e95e4e315233f808fd8b4cca4922e362d85d37da9920e17b1662543cf2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_88f7aad910f6835994bb129a53d5e0e69a0a3d5abb984bd3ee2378bddfb43d31->leave($__internal_88f7aad910f6835994bb129a53d5e0e69a0a3d5abb984bd3ee2378bddfb43d31_prof);

        
        $__internal_9065e95e4e315233f808fd8b4cca4922e362d85d37da9920e17b1662543cf2e0->leave($__internal_9065e95e4e315233f808fd8b4cca4922e362d85d37da9920e17b1662543cf2e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
