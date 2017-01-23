<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8a33f8f647c8cdf7d8d757c18b5ca06db587ee49b8e44288c872530fa87d1ed9 extends Twig_Template
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
        $__internal_ec38ac45f474b21dbffb2f9082a8058dcc2bd445280aadf71c886031804332dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec38ac45f474b21dbffb2f9082a8058dcc2bd445280aadf71c886031804332dc->enter($__internal_ec38ac45f474b21dbffb2f9082a8058dcc2bd445280aadf71c886031804332dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8ebdd51df5899e1fcc723487ec822538ebd4a55c92ade54eaa777ca709a0bf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ebdd51df5899e1fcc723487ec822538ebd4a55c92ade54eaa777ca709a0bf67->enter($__internal_8ebdd51df5899e1fcc723487ec822538ebd4a55c92ade54eaa777ca709a0bf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ec38ac45f474b21dbffb2f9082a8058dcc2bd445280aadf71c886031804332dc->leave($__internal_ec38ac45f474b21dbffb2f9082a8058dcc2bd445280aadf71c886031804332dc_prof);

        
        $__internal_8ebdd51df5899e1fcc723487ec822538ebd4a55c92ade54eaa777ca709a0bf67->leave($__internal_8ebdd51df5899e1fcc723487ec822538ebd4a55c92ade54eaa777ca709a0bf67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
