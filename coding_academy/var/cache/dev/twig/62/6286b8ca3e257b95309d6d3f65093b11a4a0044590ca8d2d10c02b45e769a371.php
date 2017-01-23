<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7523740042894085c30d6fd3c3108f26c2220b12406f79b342f40bc78e4baad extends Twig_Template
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
        $__internal_c8ff30a013562e5fb66032998024860351ac7379c2f932da94d5b0c06a696e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ff30a013562e5fb66032998024860351ac7379c2f932da94d5b0c06a696e77->enter($__internal_c8ff30a013562e5fb66032998024860351ac7379c2f932da94d5b0c06a696e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_634b503d7f318dcfc47fbf64d5fde4c93fe6ac7e4525af541ca1889672917bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634b503d7f318dcfc47fbf64d5fde4c93fe6ac7e4525af541ca1889672917bf9->enter($__internal_634b503d7f318dcfc47fbf64d5fde4c93fe6ac7e4525af541ca1889672917bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c8ff30a013562e5fb66032998024860351ac7379c2f932da94d5b0c06a696e77->leave($__internal_c8ff30a013562e5fb66032998024860351ac7379c2f932da94d5b0c06a696e77_prof);

        
        $__internal_634b503d7f318dcfc47fbf64d5fde4c93fe6ac7e4525af541ca1889672917bf9->leave($__internal_634b503d7f318dcfc47fbf64d5fde4c93fe6ac7e4525af541ca1889672917bf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
