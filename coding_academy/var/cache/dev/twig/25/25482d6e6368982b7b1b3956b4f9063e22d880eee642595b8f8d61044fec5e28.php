<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_853970894709f4efb6a2dccdc14ee7b6c2ac01b45ae1cd916547413d4fecd609 extends Twig_Template
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
        $__internal_a08d93f0135b4f59fe082a1dd5ae193e397458d9403628ff2f99ef0de310759c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08d93f0135b4f59fe082a1dd5ae193e397458d9403628ff2f99ef0de310759c->enter($__internal_a08d93f0135b4f59fe082a1dd5ae193e397458d9403628ff2f99ef0de310759c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a562328f7c86026d283d4502c394e6320dd85390f6d4d9097774a4545f21d3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a562328f7c86026d283d4502c394e6320dd85390f6d4d9097774a4545f21d3cc->enter($__internal_a562328f7c86026d283d4502c394e6320dd85390f6d4d9097774a4545f21d3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a08d93f0135b4f59fe082a1dd5ae193e397458d9403628ff2f99ef0de310759c->leave($__internal_a08d93f0135b4f59fe082a1dd5ae193e397458d9403628ff2f99ef0de310759c_prof);

        
        $__internal_a562328f7c86026d283d4502c394e6320dd85390f6d4d9097774a4545f21d3cc->leave($__internal_a562328f7c86026d283d4502c394e6320dd85390f6d4d9097774a4545f21d3cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
