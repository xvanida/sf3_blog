<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5384edb8598d17273cbf36f28612cfe512bfe2a1a85dec4ef41b12ad37761e93 extends Twig_Template
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
        $__internal_11cf622cbf7c2c4735f21c481616321e275ea3ee44e4281bc6b29ffccc426a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cf622cbf7c2c4735f21c481616321e275ea3ee44e4281bc6b29ffccc426a62->enter($__internal_11cf622cbf7c2c4735f21c481616321e275ea3ee44e4281bc6b29ffccc426a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8bb8b61d8aeba90f1d8b5fd6dc9fde9afc85277481dd14a1c65733debcdc0da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb8b61d8aeba90f1d8b5fd6dc9fde9afc85277481dd14a1c65733debcdc0da9->enter($__internal_8bb8b61d8aeba90f1d8b5fd6dc9fde9afc85277481dd14a1c65733debcdc0da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_11cf622cbf7c2c4735f21c481616321e275ea3ee44e4281bc6b29ffccc426a62->leave($__internal_11cf622cbf7c2c4735f21c481616321e275ea3ee44e4281bc6b29ffccc426a62_prof);

        
        $__internal_8bb8b61d8aeba90f1d8b5fd6dc9fde9afc85277481dd14a1c65733debcdc0da9->leave($__internal_8bb8b61d8aeba90f1d8b5fd6dc9fde9afc85277481dd14a1c65733debcdc0da9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
