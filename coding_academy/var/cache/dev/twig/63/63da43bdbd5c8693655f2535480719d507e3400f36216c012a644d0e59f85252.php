<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_28e705f056180ea68eb0655f43f78da599490ebd82844bec379d4e2eca0af02a extends Twig_Template
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
        $__internal_f2c15cb8189b3d9b4990f4e46822097c7b6e9c2fb41f2d13484b533ce9257f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c15cb8189b3d9b4990f4e46822097c7b6e9c2fb41f2d13484b533ce9257f20->enter($__internal_f2c15cb8189b3d9b4990f4e46822097c7b6e9c2fb41f2d13484b533ce9257f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_855c5a82a7954acd8ae5ce2c52fd9c4158681b02873e7d69837e4e091d763621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855c5a82a7954acd8ae5ce2c52fd9c4158681b02873e7d69837e4e091d763621->enter($__internal_855c5a82a7954acd8ae5ce2c52fd9c4158681b02873e7d69837e4e091d763621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f2c15cb8189b3d9b4990f4e46822097c7b6e9c2fb41f2d13484b533ce9257f20->leave($__internal_f2c15cb8189b3d9b4990f4e46822097c7b6e9c2fb41f2d13484b533ce9257f20_prof);

        
        $__internal_855c5a82a7954acd8ae5ce2c52fd9c4158681b02873e7d69837e4e091d763621->leave($__internal_855c5a82a7954acd8ae5ce2c52fd9c4158681b02873e7d69837e4e091d763621_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
