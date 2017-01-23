<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f2aa716c7c5f78d18a10af468fe600236bcbe59dafe84dc54d04f2cbbb09188e extends Twig_Template
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
        $__internal_b49a191461e0db6c683628b0140b8a5894a89559cf9ef47fdd673296801346a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49a191461e0db6c683628b0140b8a5894a89559cf9ef47fdd673296801346a7->enter($__internal_b49a191461e0db6c683628b0140b8a5894a89559cf9ef47fdd673296801346a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b482a5388028c81eabbfae04ece22934d95f3ba3ce6a183fb9feb7193892f8f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b482a5388028c81eabbfae04ece22934d95f3ba3ce6a183fb9feb7193892f8f7->enter($__internal_b482a5388028c81eabbfae04ece22934d95f3ba3ce6a183fb9feb7193892f8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b49a191461e0db6c683628b0140b8a5894a89559cf9ef47fdd673296801346a7->leave($__internal_b49a191461e0db6c683628b0140b8a5894a89559cf9ef47fdd673296801346a7_prof);

        
        $__internal_b482a5388028c81eabbfae04ece22934d95f3ba3ce6a183fb9feb7193892f8f7->leave($__internal_b482a5388028c81eabbfae04ece22934d95f3ba3ce6a183fb9feb7193892f8f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
