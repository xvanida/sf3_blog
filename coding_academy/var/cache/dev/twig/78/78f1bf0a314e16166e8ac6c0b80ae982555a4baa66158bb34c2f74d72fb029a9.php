<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_25c65161d004ec50794a849170338c34132a0bb32e472a9a6fdca51f023bbad2 extends Twig_Template
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
        $__internal_cc453cfb5ab18ac479a38911b7adfef900e756d8210a1530a118f1705510b401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc453cfb5ab18ac479a38911b7adfef900e756d8210a1530a118f1705510b401->enter($__internal_cc453cfb5ab18ac479a38911b7adfef900e756d8210a1530a118f1705510b401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_963b3e99ac390de6e9aaf6ada95cebfcec85c246d66411cfa6733cc32b728560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963b3e99ac390de6e9aaf6ada95cebfcec85c246d66411cfa6733cc32b728560->enter($__internal_963b3e99ac390de6e9aaf6ada95cebfcec85c246d66411cfa6733cc32b728560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cc453cfb5ab18ac479a38911b7adfef900e756d8210a1530a118f1705510b401->leave($__internal_cc453cfb5ab18ac479a38911b7adfef900e756d8210a1530a118f1705510b401_prof);

        
        $__internal_963b3e99ac390de6e9aaf6ada95cebfcec85c246d66411cfa6733cc32b728560->leave($__internal_963b3e99ac390de6e9aaf6ada95cebfcec85c246d66411cfa6733cc32b728560_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
