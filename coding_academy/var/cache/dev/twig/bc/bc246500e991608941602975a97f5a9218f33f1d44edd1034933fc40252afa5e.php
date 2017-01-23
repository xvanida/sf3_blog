<?php

/* post/index.html.twig */
class __TwigTemplate_6fe0aebf76bd4c876ef09affa780239eedc2f7489c14803a05ee3ce6ac0585c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
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
        $__internal_cf343b9a35a5870068ff07f9a3db003baa31c646b89cc0d2df3c19a9c2b29819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf343b9a35a5870068ff07f9a3db003baa31c646b89cc0d2df3c19a9c2b29819->enter($__internal_cf343b9a35a5870068ff07f9a3db003baa31c646b89cc0d2df3c19a9c2b29819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_faff2fb5797d921ded37d802053734f0bb8f2ea26d27f8773c29cc19f683fa63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faff2fb5797d921ded37d802053734f0bb8f2ea26d27f8773c29cc19f683fa63->enter($__internal_faff2fb5797d921ded37d802053734f0bb8f2ea26d27f8773c29cc19f683fa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf343b9a35a5870068ff07f9a3db003baa31c646b89cc0d2df3c19a9c2b29819->leave($__internal_cf343b9a35a5870068ff07f9a3db003baa31c646b89cc0d2df3c19a9c2b29819_prof);

        
        $__internal_faff2fb5797d921ded37d802053734f0bb8f2ea26d27f8773c29cc19f683fa63->leave($__internal_faff2fb5797d921ded37d802053734f0bb8f2ea26d27f8773c29cc19f683fa63_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ecf8d48d5a16d76bdd98362d228b0e6758b20e3bf0e836d4686cd34c7782dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecf8d48d5a16d76bdd98362d228b0e6758b20e3bf0e836d4686cd34c7782dc9->enter($__internal_6ecf8d48d5a16d76bdd98362d228b0e6758b20e3bf0e836d4686cd34c7782dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d496a783efb5525407f9feae9922a11ec50e0b74e8e0c756a23ead73433f47d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d496a783efb5525407f9feae9922a11ec50e0b74e8e0c756a23ead73433f47d3->enter($__internal_d496a783efb5525407f9feae9922a11ec50e0b74e8e0c756a23ead73433f47d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["post"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["post"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 26
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 27
                echo "                    <ul>
                        <li>
                            <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            ";
            }
            // line 34
            echo "                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

";
        // line 42
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
            echo "    <ul>

        <li>
            <a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
            echo "\">Create a new post</a>
        </li>
    </ul>
    ";
        }
        
        $__internal_d496a783efb5525407f9feae9922a11ec50e0b74e8e0c756a23ead73433f47d3->leave($__internal_d496a783efb5525407f9feae9922a11ec50e0b74e8e0c756a23ead73433f47d3_prof);

        
        $__internal_6ecf8d48d5a16d76bdd98362d228b0e6758b20e3bf0e836d4686cd34c7782dc9->leave($__internal_6ecf8d48d5a16d76bdd98362d228b0e6758b20e3bf0e836d4686cd34c7782dc9_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 46,  133 => 43,  131 => 42,  126 => 39,  116 => 34,  111 => 32,  105 => 29,  101 => 27,  99 => 26,  92 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                <td>{{ post.title }}</td>
                <td>{{ post.content }}</td>
                <td>{% if post.created %}{{ post.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if post.updated %}{{ post.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                    <ul>
                        <li>
                            <a href=\"{{ path('post_show', { 'id': post.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">edit</a>
                            {% endif %}
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% if  (is_granted('IS_AUTHENTICATED_REMEMBERED')) %}
    <ul>

        <li>
            <a href=\"{{ path('post_new') }}\">Create a new post</a>
        </li>
    </ul>
    {% endif %}
{% endblock %}
", "post/index.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/app/Resources/views/post/index.html.twig");
    }
}
