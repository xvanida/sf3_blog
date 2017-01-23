<?php

/* post/show.html.twig */
class __TwigTemplate_319889764dacc631713e533fb82e8377f4f9a48f7150c6a677552fd53dd8f452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04ad30d5ca7c588d84328e9a330e65188abe442241d68b9992bea7aee5d0e097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ad30d5ca7c588d84328e9a330e65188abe442241d68b9992bea7aee5d0e097->enter($__internal_04ad30d5ca7c588d84328e9a330e65188abe442241d68b9992bea7aee5d0e097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_cc3ad5c4423fc0a13d9b5aa73f2668c5e2b9cd33bb3f603fd85e04bb62eabc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3ad5c4423fc0a13d9b5aa73f2668c5e2b9cd33bb3f603fd85e04bb62eabc13->enter($__internal_cc3ad5c4423fc0a13d9b5aa73f2668c5e2b9cd33bb3f603fd85e04bb62eabc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04ad30d5ca7c588d84328e9a330e65188abe442241d68b9992bea7aee5d0e097->leave($__internal_04ad30d5ca7c588d84328e9a330e65188abe442241d68b9992bea7aee5d0e097_prof);

        
        $__internal_cc3ad5c4423fc0a13d9b5aa73f2668c5e2b9cd33bb3f603fd85e04bb62eabc13->leave($__internal_cc3ad5c4423fc0a13d9b5aa73f2668c5e2b9cd33bb3f603fd85e04bb62eabc13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9950954b2eaae9431a878329c02dab05c542d91febee67dc40bfdedc283c45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9950954b2eaae9431a878329c02dab05c542d91febee67dc40bfdedc283c45f->enter($__internal_a9950954b2eaae9431a878329c02dab05c542d91febee67dc40bfdedc283c45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58b64bfdb3b75e2fa5ea7dfa76477a21a2ce75faba9ef31f1df8fef088e2ff5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b64bfdb3b75e2fa5ea7dfa76477a21a2ce75faba9ef31f1df8fef088e2ff5f->enter($__internal_58b64bfdb3b75e2fa5ea7dfa76477a21a2ce75faba9ef31f1df8fef088e2ff5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        ";
        // line 38
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "        <li>
            ";
            // line 40
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
                <input type=\"submit\" value=\"Delete\">
            ";
            // line 42
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
        </li>
        ";
        }
        // line 45
        echo "    </ul>
";
        
        $__internal_58b64bfdb3b75e2fa5ea7dfa76477a21a2ce75faba9ef31f1df8fef088e2ff5f->leave($__internal_58b64bfdb3b75e2fa5ea7dfa76477a21a2ce75faba9ef31f1df8fef088e2ff5f_prof);

        
        $__internal_a9950954b2eaae9431a878329c02dab05c542d91febee67dc40bfdedc283c45f->leave($__internal_a9950954b2eaae9431a878329c02dab05c542d91febee67dc40bfdedc283c45f_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  120 => 42,  115 => 40,  112 => 39,  110 => 38,  105 => 36,  99 => 33,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ post.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ post.title }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ post.content }}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if post.created %}{{ post.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{% if post.updated %}{{ post.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">Edit</a>
        </li>
        {% if  (is_granted('ROLE_ADMIN')) %}
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
        {% endif %}
    </ul>
{% endblock %}
", "post/show.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/app/Resources/views/post/show.html.twig");
    }
}
