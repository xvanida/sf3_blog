<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b9d171de1fc17f7d7a699aaf9f4dd5e018eac2e452701ac05e85df0aaceb2885 extends Twig_Template
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
        $__internal_6e5c9a734d677bf1357a3d54b3de7d8643f147fa90e4b387912185ea371adaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5c9a734d677bf1357a3d54b3de7d8643f147fa90e4b387912185ea371adaa9->enter($__internal_6e5c9a734d677bf1357a3d54b3de7d8643f147fa90e4b387912185ea371adaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_bed3fbcc2777605b7605e9a77ba2053f815f848c1b9b0d72e8dd02ff773c4db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed3fbcc2777605b7605e9a77ba2053f815f848c1b9b0d72e8dd02ff773c4db6->enter($__internal_bed3fbcc2777605b7605e9a77ba2053f815f848c1b9b0d72e8dd02ff773c4db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_6e5c9a734d677bf1357a3d54b3de7d8643f147fa90e4b387912185ea371adaa9->leave($__internal_6e5c9a734d677bf1357a3d54b3de7d8643f147fa90e4b387912185ea371adaa9_prof);

        
        $__internal_bed3fbcc2777605b7605e9a77ba2053f815f848c1b9b0d72e8dd02ff773c4db6->leave($__internal_bed3fbcc2777605b7605e9a77ba2053f815f848c1b9b0d72e8dd02ff773c4db6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
