<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b0928880b95e6e41bc8da2a66a3fe74aa0f108b47cfd43b1fd15bb63604602d7 extends Twig_Template
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
        $__internal_7dbf22611b21307a3421e4fbb65905307de395038598be67b58fbd67ae1b596c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dbf22611b21307a3421e4fbb65905307de395038598be67b58fbd67ae1b596c->enter($__internal_7dbf22611b21307a3421e4fbb65905307de395038598be67b58fbd67ae1b596c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_cf3022a4abdcffa86c0f6df970f6a0b702a6d399d865f0ec2f9eaf375d77f4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3022a4abdcffa86c0f6df970f6a0b702a6d399d865f0ec2f9eaf375d77f4c4->enter($__internal_cf3022a4abdcffa86c0f6df970f6a0b702a6d399d865f0ec2f9eaf375d77f4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7dbf22611b21307a3421e4fbb65905307de395038598be67b58fbd67ae1b596c->leave($__internal_7dbf22611b21307a3421e4fbb65905307de395038598be67b58fbd67ae1b596c_prof);

        
        $__internal_cf3022a4abdcffa86c0f6df970f6a0b702a6d399d865f0ec2f9eaf375d77f4c4->leave($__internal_cf3022a4abdcffa86c0f6df970f6a0b702a6d399d865f0ec2f9eaf375d77f4c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
