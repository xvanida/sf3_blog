<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f0f6a3af6f5fc7bfb5539c6e5c07b7ddf4482b0c9862fa12829f179125c86b18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abe3ff041bc7f0de13c10467869bdf07d2ad704d4ee9d2b4825fda3ece2ca455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abe3ff041bc7f0de13c10467869bdf07d2ad704d4ee9d2b4825fda3ece2ca455->enter($__internal_abe3ff041bc7f0de13c10467869bdf07d2ad704d4ee9d2b4825fda3ece2ca455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f95d5ec156ca9f9c36aad0837af2ba5c3876a67241fa2b777ebe5d3bc56b281c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95d5ec156ca9f9c36aad0837af2ba5c3876a67241fa2b777ebe5d3bc56b281c->enter($__internal_f95d5ec156ca9f9c36aad0837af2ba5c3876a67241fa2b777ebe5d3bc56b281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abe3ff041bc7f0de13c10467869bdf07d2ad704d4ee9d2b4825fda3ece2ca455->leave($__internal_abe3ff041bc7f0de13c10467869bdf07d2ad704d4ee9d2b4825fda3ece2ca455_prof);

        
        $__internal_f95d5ec156ca9f9c36aad0837af2ba5c3876a67241fa2b777ebe5d3bc56b281c->leave($__internal_f95d5ec156ca9f9c36aad0837af2ba5c3876a67241fa2b777ebe5d3bc56b281c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_459f2646a71c93f055e58905cf3d2d8ac5df18a0702dcc81ec08429517e1cf1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459f2646a71c93f055e58905cf3d2d8ac5df18a0702dcc81ec08429517e1cf1d->enter($__internal_459f2646a71c93f055e58905cf3d2d8ac5df18a0702dcc81ec08429517e1cf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5a732210fd6072d9888cdf51f3fc0b0deb6df56e3b4f4cf1bb70e252f4e6ec3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a732210fd6072d9888cdf51f3fc0b0deb6df56e3b4f4cf1bb70e252f4e6ec3e->enter($__internal_5a732210fd6072d9888cdf51f3fc0b0deb6df56e3b4f4cf1bb70e252f4e6ec3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5a732210fd6072d9888cdf51f3fc0b0deb6df56e3b4f4cf1bb70e252f4e6ec3e->leave($__internal_5a732210fd6072d9888cdf51f3fc0b0deb6df56e3b4f4cf1bb70e252f4e6ec3e_prof);

        
        $__internal_459f2646a71c93f055e58905cf3d2d8ac5df18a0702dcc81ec08429517e1cf1d->leave($__internal_459f2646a71c93f055e58905cf3d2d8ac5df18a0702dcc81ec08429517e1cf1d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
