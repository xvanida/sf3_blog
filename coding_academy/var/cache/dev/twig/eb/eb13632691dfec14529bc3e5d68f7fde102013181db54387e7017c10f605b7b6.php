<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_49aaf657b4e6121cc0f23b5f80df065fffb78a7157693ad836bbf18fdde96ba5 extends Twig_Template
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
        $__internal_47442f63ec780498937db664d994679e2b079a64a098ae44bd160f3aecf25cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47442f63ec780498937db664d994679e2b079a64a098ae44bd160f3aecf25cdd->enter($__internal_47442f63ec780498937db664d994679e2b079a64a098ae44bd160f3aecf25cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_cb5965b08841e54df50c18d82b6883e6cf8219e350cd12dcd5b823c9bab98a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5965b08841e54df50c18d82b6883e6cf8219e350cd12dcd5b823c9bab98a6a->enter($__internal_cb5965b08841e54df50c18d82b6883e6cf8219e350cd12dcd5b823c9bab98a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_47442f63ec780498937db664d994679e2b079a64a098ae44bd160f3aecf25cdd->leave($__internal_47442f63ec780498937db664d994679e2b079a64a098ae44bd160f3aecf25cdd_prof);

        
        $__internal_cb5965b08841e54df50c18d82b6883e6cf8219e350cd12dcd5b823c9bab98a6a->leave($__internal_cb5965b08841e54df50c18d82b6883e6cf8219e350cd12dcd5b823c9bab98a6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
