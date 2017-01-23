<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_b6d0cd2008afda9e72bf292b09ff9aba9e089f53a8620393b4e731ac68514ee8 extends Twig_Template
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
        $__internal_f46029b7424251993bcff359decfc500b55ec98e96afcfefd1f61a0a92d79e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46029b7424251993bcff359decfc500b55ec98e96afcfefd1f61a0a92d79e98->enter($__internal_f46029b7424251993bcff359decfc500b55ec98e96afcfefd1f61a0a92d79e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_bb0fa7a0a97182e8fc29104df4ea88b8a37d4374e91136c80d2b017995888e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0fa7a0a97182e8fc29104df4ea88b8a37d4374e91136c80d2b017995888e02->enter($__internal_bb0fa7a0a97182e8fc29104df4ea88b8a37d4374e91136c80d2b017995888e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_f46029b7424251993bcff359decfc500b55ec98e96afcfefd1f61a0a92d79e98->leave($__internal_f46029b7424251993bcff359decfc500b55ec98e96afcfefd1f61a0a92d79e98_prof);

        
        $__internal_bb0fa7a0a97182e8fc29104df4ea88b8a37d4374e91136c80d2b017995888e02->leave($__internal_bb0fa7a0a97182e8fc29104df4ea88b8a37d4374e91136c80d2b017995888e02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
