<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_66972de9cead211ed5d3f75777067ba2939d38d5a3d4995f69318a122c4bafc5 extends Twig_Template
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
        $__internal_2f670d5baa77c16b8b602977c1d4c3ccfdedb4d9042d6075a9bec08b3b707d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f670d5baa77c16b8b602977c1d4c3ccfdedb4d9042d6075a9bec08b3b707d90->enter($__internal_2f670d5baa77c16b8b602977c1d4c3ccfdedb4d9042d6075a9bec08b3b707d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_8d9f975f16acaed3d29cd8d0bef9b3e5a00520e47ba7d3d1b55b5a7f31cc5903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9f975f16acaed3d29cd8d0bef9b3e5a00520e47ba7d3d1b55b5a7f31cc5903->enter($__internal_8d9f975f16acaed3d29cd8d0bef9b3e5a00520e47ba7d3d1b55b5a7f31cc5903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_2f670d5baa77c16b8b602977c1d4c3ccfdedb4d9042d6075a9bec08b3b707d90->leave($__internal_2f670d5baa77c16b8b602977c1d4c3ccfdedb4d9042d6075a9bec08b3b707d90_prof);

        
        $__internal_8d9f975f16acaed3d29cd8d0bef9b3e5a00520e47ba7d3d1b55b5a7f31cc5903->leave($__internal_8d9f975f16acaed3d29cd8d0bef9b3e5a00520e47ba7d3d1b55b5a7f31cc5903_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
