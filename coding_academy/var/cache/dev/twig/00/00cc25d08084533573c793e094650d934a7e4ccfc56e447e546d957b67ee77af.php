<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_05df047184e4785d4cd18dc0cd190470ac7181e2abe31e0e8bb84410d5831618 extends Twig_Template
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
        $__internal_12e063bb3f5d23d28f092d7e429f85571ecac207423844beeefba31db1f449b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e063bb3f5d23d28f092d7e429f85571ecac207423844beeefba31db1f449b1->enter($__internal_12e063bb3f5d23d28f092d7e429f85571ecac207423844beeefba31db1f449b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_7a38e621396449956a6601dde07cbabbf6edc2f66c230c3f79730a7e3987ef07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a38e621396449956a6601dde07cbabbf6edc2f66c230c3f79730a7e3987ef07->enter($__internal_7a38e621396449956a6601dde07cbabbf6edc2f66c230c3f79730a7e3987ef07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_12e063bb3f5d23d28f092d7e429f85571ecac207423844beeefba31db1f449b1->leave($__internal_12e063bb3f5d23d28f092d7e429f85571ecac207423844beeefba31db1f449b1_prof);

        
        $__internal_7a38e621396449956a6601dde07cbabbf6edc2f66c230c3f79730a7e3987ef07->leave($__internal_7a38e621396449956a6601dde07cbabbf6edc2f66c230c3f79730a7e3987ef07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
