<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8c647dc3fe76bc6399839bfa0f6da327a8ed977d04d3757ac7ca5a7a6ae90a51 extends Twig_Template
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
        $__internal_702fd07567e1b50f11a0044e263e67ac0f7a1d914a335e1df2da0c6db627faea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702fd07567e1b50f11a0044e263e67ac0f7a1d914a335e1df2da0c6db627faea->enter($__internal_702fd07567e1b50f11a0044e263e67ac0f7a1d914a335e1df2da0c6db627faea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_55c317742592570a5b81883498b88e752a464fc7254ae39f70fd16a443793559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c317742592570a5b81883498b88e752a464fc7254ae39f70fd16a443793559->enter($__internal_55c317742592570a5b81883498b88e752a464fc7254ae39f70fd16a443793559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_702fd07567e1b50f11a0044e263e67ac0f7a1d914a335e1df2da0c6db627faea->leave($__internal_702fd07567e1b50f11a0044e263e67ac0f7a1d914a335e1df2da0c6db627faea_prof);

        
        $__internal_55c317742592570a5b81883498b88e752a464fc7254ae39f70fd16a443793559->leave($__internal_55c317742592570a5b81883498b88e752a464fc7254ae39f70fd16a443793559_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
