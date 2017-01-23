<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b5fa16348afc5b8545b052f0bf678f4e5e9b262b5c2282a9c02546ca5f0965c2 extends Twig_Template
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
        $__internal_bf6bbf36ec118a580471bd2b31b5f34b6dd69eebf725474fc1ce44616c426040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf6bbf36ec118a580471bd2b31b5f34b6dd69eebf725474fc1ce44616c426040->enter($__internal_bf6bbf36ec118a580471bd2b31b5f34b6dd69eebf725474fc1ce44616c426040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_dfc5b4e068f69511d5ba06b1494cfc4d1b00d97e6cbd2da13ed02ef1c235a866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc5b4e068f69511d5ba06b1494cfc4d1b00d97e6cbd2da13ed02ef1c235a866->enter($__internal_dfc5b4e068f69511d5ba06b1494cfc4d1b00d97e6cbd2da13ed02ef1c235a866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_bf6bbf36ec118a580471bd2b31b5f34b6dd69eebf725474fc1ce44616c426040->leave($__internal_bf6bbf36ec118a580471bd2b31b5f34b6dd69eebf725474fc1ce44616c426040_prof);

        
        $__internal_dfc5b4e068f69511d5ba06b1494cfc4d1b00d97e6cbd2da13ed02ef1c235a866->leave($__internal_dfc5b4e068f69511d5ba06b1494cfc4d1b00d97e6cbd2da13ed02ef1c235a866_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
