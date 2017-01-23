<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b60d08dddd832a0898df67b4d9182f85cfefeb4cf3e198e74da1e9467d5bd4f3 extends Twig_Template
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
        $__internal_5fdc151fcd491c04a38f28d13b27f3e6d6c277b251caf588ca69b3b6c17dc895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fdc151fcd491c04a38f28d13b27f3e6d6c277b251caf588ca69b3b6c17dc895->enter($__internal_5fdc151fcd491c04a38f28d13b27f3e6d6c277b251caf588ca69b3b6c17dc895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ac0ee6ff062ac78c994191d9a51a5f0d4a0bc88f1923524fe58778da0e6ae924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0ee6ff062ac78c994191d9a51a5f0d4a0bc88f1923524fe58778da0e6ae924->enter($__internal_ac0ee6ff062ac78c994191d9a51a5f0d4a0bc88f1923524fe58778da0e6ae924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5fdc151fcd491c04a38f28d13b27f3e6d6c277b251caf588ca69b3b6c17dc895->leave($__internal_5fdc151fcd491c04a38f28d13b27f3e6d6c277b251caf588ca69b3b6c17dc895_prof);

        
        $__internal_ac0ee6ff062ac78c994191d9a51a5f0d4a0bc88f1923524fe58778da0e6ae924->leave($__internal_ac0ee6ff062ac78c994191d9a51a5f0d4a0bc88f1923524fe58778da0e6ae924_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
