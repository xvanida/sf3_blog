<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_71bebd6b020a05f151cf140392e2b64f00c0c93947f29cc03338ff170739e2b4 extends Twig_Template
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
        $__internal_6c1dc42ee75201a6740b616c4a2d63eaeb56de0f87b4895fd1505ac5e9b74155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1dc42ee75201a6740b616c4a2d63eaeb56de0f87b4895fd1505ac5e9b74155->enter($__internal_6c1dc42ee75201a6740b616c4a2d63eaeb56de0f87b4895fd1505ac5e9b74155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_67c9cd2818e3d1435743557d3af5e2b15ad302856cd107f4a92d8a3697ce4e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c9cd2818e3d1435743557d3af5e2b15ad302856cd107f4a92d8a3697ce4e2e->enter($__internal_67c9cd2818e3d1435743557d3af5e2b15ad302856cd107f4a92d8a3697ce4e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6c1dc42ee75201a6740b616c4a2d63eaeb56de0f87b4895fd1505ac5e9b74155->leave($__internal_6c1dc42ee75201a6740b616c4a2d63eaeb56de0f87b4895fd1505ac5e9b74155_prof);

        
        $__internal_67c9cd2818e3d1435743557d3af5e2b15ad302856cd107f4a92d8a3697ce4e2e->leave($__internal_67c9cd2818e3d1435743557d3af5e2b15ad302856cd107f4a92d8a3697ce4e2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
