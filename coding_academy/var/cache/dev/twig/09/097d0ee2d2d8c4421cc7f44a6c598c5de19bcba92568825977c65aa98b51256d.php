<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_cceb737a2ae9450e18628b7f29eebd0fa36ff449f807176e49cfde2bb18c301a extends Twig_Template
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
        $__internal_203d610b17faaa835ddcdda740f26033b22f894d3c069ea72e1b4eede8ce9cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_203d610b17faaa835ddcdda740f26033b22f894d3c069ea72e1b4eede8ce9cef->enter($__internal_203d610b17faaa835ddcdda740f26033b22f894d3c069ea72e1b4eede8ce9cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ccb4ad2be20e97643d42c46c36167f4940716e3a406c1ee421f6dc438f6f01dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb4ad2be20e97643d42c46c36167f4940716e3a406c1ee421f6dc438f6f01dc->enter($__internal_ccb4ad2be20e97643d42c46c36167f4940716e3a406c1ee421f6dc438f6f01dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_203d610b17faaa835ddcdda740f26033b22f894d3c069ea72e1b4eede8ce9cef->leave($__internal_203d610b17faaa835ddcdda740f26033b22f894d3c069ea72e1b4eede8ce9cef_prof);

        
        $__internal_ccb4ad2be20e97643d42c46c36167f4940716e3a406c1ee421f6dc438f6f01dc->leave($__internal_ccb4ad2be20e97643d42c46c36167f4940716e3a406c1ee421f6dc438f6f01dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
