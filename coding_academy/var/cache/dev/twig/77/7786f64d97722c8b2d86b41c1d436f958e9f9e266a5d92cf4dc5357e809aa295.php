<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b37901052a51eebf86b6073601e0f05b0ba965f0f494cce4b6813f29b630c489 extends Twig_Template
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
        $__internal_3a9be168331e3d027532d620dfcdad976c28b839ba4603a1764887db2c14e57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9be168331e3d027532d620dfcdad976c28b839ba4603a1764887db2c14e57c->enter($__internal_3a9be168331e3d027532d620dfcdad976c28b839ba4603a1764887db2c14e57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2246a1358b8101ae9f98053a68313dee87abdec92f74c5ca803acf8e4d827681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2246a1358b8101ae9f98053a68313dee87abdec92f74c5ca803acf8e4d827681->enter($__internal_2246a1358b8101ae9f98053a68313dee87abdec92f74c5ca803acf8e4d827681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3a9be168331e3d027532d620dfcdad976c28b839ba4603a1764887db2c14e57c->leave($__internal_3a9be168331e3d027532d620dfcdad976c28b839ba4603a1764887db2c14e57c_prof);

        
        $__internal_2246a1358b8101ae9f98053a68313dee87abdec92f74c5ca803acf8e4d827681->leave($__internal_2246a1358b8101ae9f98053a68313dee87abdec92f74c5ca803acf8e4d827681_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
