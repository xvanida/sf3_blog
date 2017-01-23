<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_16c52b50b7916eb2d6e6527435409844fb45f2e5f63db876607671bacf573010 extends Twig_Template
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
        $__internal_96f4bb0a0225a684596d56558b2a1d7b9162d09468238b09333cdbf63b8f02ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f4bb0a0225a684596d56558b2a1d7b9162d09468238b09333cdbf63b8f02ba->enter($__internal_96f4bb0a0225a684596d56558b2a1d7b9162d09468238b09333cdbf63b8f02ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_faade06d653fae62898968717ca60e9e1fd28da8984446c712eb54a7c37c7a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faade06d653fae62898968717ca60e9e1fd28da8984446c712eb54a7c37c7a60->enter($__internal_faade06d653fae62898968717ca60e9e1fd28da8984446c712eb54a7c37c7a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_96f4bb0a0225a684596d56558b2a1d7b9162d09468238b09333cdbf63b8f02ba->leave($__internal_96f4bb0a0225a684596d56558b2a1d7b9162d09468238b09333cdbf63b8f02ba_prof);

        
        $__internal_faade06d653fae62898968717ca60e9e1fd28da8984446c712eb54a7c37c7a60->leave($__internal_faade06d653fae62898968717ca60e9e1fd28da8984446c712eb54a7c37c7a60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
