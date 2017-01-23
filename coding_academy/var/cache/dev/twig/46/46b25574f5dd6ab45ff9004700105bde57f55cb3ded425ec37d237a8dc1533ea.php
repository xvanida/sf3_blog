<?php

/* user/show.html.twig */
class __TwigTemplate_dac2df01138bd2d1919a95a85bd01e40e1189c1491a9cef4663870ed57bfbd7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_c0e9c42c058a2ce7f4c9bbe5b39d9b67f5258c6277a42f1d87b8614d3dec8c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e9c42c058a2ce7f4c9bbe5b39d9b67f5258c6277a42f1d87b8614d3dec8c4b->enter($__internal_c0e9c42c058a2ce7f4c9bbe5b39d9b67f5258c6277a42f1d87b8614d3dec8c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_224d21abac46285f839543696ede93152be749c8f92d38bca60b814d44dc2866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224d21abac46285f839543696ede93152be749c8f92d38bca60b814d44dc2866->enter($__internal_224d21abac46285f839543696ede93152be749c8f92d38bca60b814d44dc2866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0e9c42c058a2ce7f4c9bbe5b39d9b67f5258c6277a42f1d87b8614d3dec8c4b->leave($__internal_c0e9c42c058a2ce7f4c9bbe5b39d9b67f5258c6277a42f1d87b8614d3dec8c4b_prof);

        
        $__internal_224d21abac46285f839543696ede93152be749c8f92d38bca60b814d44dc2866->leave($__internal_224d21abac46285f839543696ede93152be749c8f92d38bca60b814d44dc2866_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74b8da3a5293c56fc75d750e707befb7c0a72c0257f822841bb35dd35617489c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b8da3a5293c56fc75d750e707befb7c0a72c0257f822841bb35dd35617489c->enter($__internal_74b8da3a5293c56fc75d750e707befb7c0a72c0257f822841bb35dd35617489c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8be5bd969efb955396f413b93b79f2e0d5bda7e153cbf627a84402490caee328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be5bd969efb955396f413b93b79f2e0d5bda7e153cbf627a84402490caee328->enter($__internal_8be5bd969efb955396f413b93b79f2e0d5bda7e153cbf627a84402490caee328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Salt</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salt", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array())) {
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()), ", "), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8be5bd969efb955396f413b93b79f2e0d5bda7e153cbf627a84402490caee328->leave($__internal_8be5bd969efb955396f413b93b79f2e0d5bda7e153cbf627a84402490caee328_prof);

        
        $__internal_74b8da3a5293c56fc75d750e707befb7c0a72c0257f822841bb35dd35617489c->leave($__internal_74b8da3a5293c56fc75d750e707befb7c0a72c0257f822841bb35dd35617489c_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  116 => 43,  110 => 40,  104 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ user.username }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ user.password }}</td>
            </tr>
            <tr>
                <th>Salt</th>
                <td>{{ user.salt }}</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>{{ user.mail }}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{% if user.roles %}{{ user.roles|join(', ') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/show.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/app/Resources/views/user/show.html.twig");
    }
}
