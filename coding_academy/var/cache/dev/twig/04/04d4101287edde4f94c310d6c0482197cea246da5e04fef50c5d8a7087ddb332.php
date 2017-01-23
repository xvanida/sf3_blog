<?php

/* user/index.html.twig */
class __TwigTemplate_d333ea8325daa37dcf3caff2eb833268a6cababe4c09ac5eeaed881bc0b820d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_c8e30b66939da825c6dd5e5e002de26c1882ea356d3572e2eba7cf37ffa164b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e30b66939da825c6dd5e5e002de26c1882ea356d3572e2eba7cf37ffa164b3->enter($__internal_c8e30b66939da825c6dd5e5e002de26c1882ea356d3572e2eba7cf37ffa164b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_5583c1e94887b02cfdf117de04a2983bdb3df8d79c5371bfb984ba2b6b76b708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5583c1e94887b02cfdf117de04a2983bdb3df8d79c5371bfb984ba2b6b76b708->enter($__internal_5583c1e94887b02cfdf117de04a2983bdb3df8d79c5371bfb984ba2b6b76b708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8e30b66939da825c6dd5e5e002de26c1882ea356d3572e2eba7cf37ffa164b3->leave($__internal_c8e30b66939da825c6dd5e5e002de26c1882ea356d3572e2eba7cf37ffa164b3_prof);

        
        $__internal_5583c1e94887b02cfdf117de04a2983bdb3df8d79c5371bfb984ba2b6b76b708->leave($__internal_5583c1e94887b02cfdf117de04a2983bdb3df8d79c5371bfb984ba2b6b76b708_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d028d294f99a5a03f36e79de7eb056b7c61efd2fa67fd34387b687504c1ebaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d028d294f99a5a03f36e79de7eb056b7c61efd2fa67fd34387b687504c1ebaa->enter($__internal_2d028d294f99a5a03f36e79de7eb056b7c61efd2fa67fd34387b687504c1ebaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_967fb7399c3a8896bb5768444033e221eb1599ba42727c90dd9b71f4da1f855f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967fb7399c3a8896bb5768444033e221eb1599ba42727c90dd9b71f4da1f855f->enter($__internal_967fb7399c3a8896bb5768444033e221eb1599ba42727c90dd9b71f4da1f855f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Salt</th>
                <th>Mail</th>
                <th>Roles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "salt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "mail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["user"], "roles", array())) {
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["user"], "roles", array()), ", "), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        ";
            // line 32
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 33
                echo "                        <li>
                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                        </li>
                        ";
            }
            // line 37
            echo "                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_967fb7399c3a8896bb5768444033e221eb1599ba42727c90dd9b71f4da1f855f->leave($__internal_967fb7399c3a8896bb5768444033e221eb1599ba42727c90dd9b71f4da1f855f_prof);

        
        $__internal_2d028d294f99a5a03f36e79de7eb056b7c61efd2fa67fd34387b687504c1ebaa->leave($__internal_2d028d294f99a5a03f36e79de7eb056b7c61efd2fa67fd34387b687504c1ebaa_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  129 => 41,  120 => 37,  114 => 34,  111 => 33,  109 => 32,  104 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Salt</th>
                <th>Mail</th>
                <th>Roles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.username }}</td>
                <td>{{ user.password }}</td>
                <td>{{ user.salt }}</td>
                <td>{{ user.mail }}</td>
                <td>{% if user.roles %}{{ user.roles|join(', ') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        {% if is_granted('ROLE_ADMIN') %}
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                        {% endif %}
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/app/Resources/views/user/index.html.twig");
    }
}
