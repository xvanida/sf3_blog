<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b9bc5e6949cf687e112dc306ab9355c199d7cd7d89ea38462bc9381124e8050e extends Twig_Template
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
        $__internal_51ea646ff797670132df1394cf0a3a0411110c3d8be297266899b181bf9915dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ea646ff797670132df1394cf0a3a0411110c3d8be297266899b181bf9915dc->enter($__internal_51ea646ff797670132df1394cf0a3a0411110c3d8be297266899b181bf9915dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_46f54d008255803a1e17609c335104a169c2a326383a723e3f5de43d3ae0cdeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f54d008255803a1e17609c335104a169c2a326383a723e3f5de43d3ae0cdeb->enter($__internal_46f54d008255803a1e17609c335104a169c2a326383a723e3f5de43d3ae0cdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_51ea646ff797670132df1394cf0a3a0411110c3d8be297266899b181bf9915dc->leave($__internal_51ea646ff797670132df1394cf0a3a0411110c3d8be297266899b181bf9915dc_prof);

        
        $__internal_46f54d008255803a1e17609c335104a169c2a326383a723e3f5de43d3ae0cdeb->leave($__internal_46f54d008255803a1e17609c335104a169c2a326383a723e3f5de43d3ae0cdeb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
