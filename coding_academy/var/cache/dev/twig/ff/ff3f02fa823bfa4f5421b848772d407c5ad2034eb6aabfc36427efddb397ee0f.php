<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8f4edfd7c699a67ca1a7ebdecae963e1b29b917bee72d01b01dfe291ad6477c1 extends Twig_Template
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
        $__internal_e621137b5cb9fd3ba43e567450ae91be01046dd6b9eef4567580eca9b2039337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e621137b5cb9fd3ba43e567450ae91be01046dd6b9eef4567580eca9b2039337->enter($__internal_e621137b5cb9fd3ba43e567450ae91be01046dd6b9eef4567580eca9b2039337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_1f25098e0808eede8dc40462024af98d8eb197b0276a70668d23030520837e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f25098e0808eede8dc40462024af98d8eb197b0276a70668d23030520837e78->enter($__internal_1f25098e0808eede8dc40462024af98d8eb197b0276a70668d23030520837e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e621137b5cb9fd3ba43e567450ae91be01046dd6b9eef4567580eca9b2039337->leave($__internal_e621137b5cb9fd3ba43e567450ae91be01046dd6b9eef4567580eca9b2039337_prof);

        
        $__internal_1f25098e0808eede8dc40462024af98d8eb197b0276a70668d23030520837e78->leave($__internal_1f25098e0808eede8dc40462024af98d8eb197b0276a70668d23030520837e78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
