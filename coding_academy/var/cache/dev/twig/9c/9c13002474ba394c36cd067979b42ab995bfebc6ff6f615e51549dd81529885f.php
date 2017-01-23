<?php

/* base.html.twig */
class __TwigTemplate_8cef85058e195d938682da1ef6caa70b82090790cf74d0a14b691d0fbd904e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3da8febf389ad213d88f16064247a2823f09487b0b001251d4d14efd9e96b708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da8febf389ad213d88f16064247a2823f09487b0b001251d4d14efd9e96b708->enter($__internal_3da8febf389ad213d88f16064247a2823f09487b0b001251d4d14efd9e96b708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_835ed7ef0c0a279d3ea086d98a42a8c1bbdb7a1c1c4a0046585bc6b8f9410698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835ed7ef0c0a279d3ea086d98a42a8c1bbdb7a1c1c4a0046585bc6b8f9410698->enter($__internal_835ed7ef0c0a279d3ea086d98a42a8c1bbdb7a1c1c4a0046585bc6b8f9410698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
         ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "             <a class=\"link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
             ";
        } else {
            // line 13
            echo "             <a class=\"link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a>
         ";
        }
        // line 15
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_3da8febf389ad213d88f16064247a2823f09487b0b001251d4d14efd9e96b708->leave($__internal_3da8febf389ad213d88f16064247a2823f09487b0b001251d4d14efd9e96b708_prof);

        
        $__internal_835ed7ef0c0a279d3ea086d98a42a8c1bbdb7a1c1c4a0046585bc6b8f9410698->leave($__internal_835ed7ef0c0a279d3ea086d98a42a8c1bbdb7a1c1c4a0046585bc6b8f9410698_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0bf735cd45ddd07420f80bbcd7ca47f0c00f5ea2f939306b3ed38b828ec9068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0bf735cd45ddd07420f80bbcd7ca47f0c00f5ea2f939306b3ed38b828ec9068->enter($__internal_a0bf735cd45ddd07420f80bbcd7ca47f0c00f5ea2f939306b3ed38b828ec9068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1574b5efa141e201bed9085b450457d711dbed400510c070b43eecc0a11634c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1574b5efa141e201bed9085b450457d711dbed400510c070b43eecc0a11634c->enter($__internal_f1574b5efa141e201bed9085b450457d711dbed400510c070b43eecc0a11634c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f1574b5efa141e201bed9085b450457d711dbed400510c070b43eecc0a11634c->leave($__internal_f1574b5efa141e201bed9085b450457d711dbed400510c070b43eecc0a11634c_prof);

        
        $__internal_a0bf735cd45ddd07420f80bbcd7ca47f0c00f5ea2f939306b3ed38b828ec9068->leave($__internal_a0bf735cd45ddd07420f80bbcd7ca47f0c00f5ea2f939306b3ed38b828ec9068_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_626448113db9df1a956b59d26def6af5b7816716e1b69c994ff46b2170502fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626448113db9df1a956b59d26def6af5b7816716e1b69c994ff46b2170502fc7->enter($__internal_626448113db9df1a956b59d26def6af5b7816716e1b69c994ff46b2170502fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c253a0ee0ab94c7805263323580b950a2ddfc59dbf8cdfd5ece729d56ceb0be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c253a0ee0ab94c7805263323580b950a2ddfc59dbf8cdfd5ece729d56ceb0be6->enter($__internal_c253a0ee0ab94c7805263323580b950a2ddfc59dbf8cdfd5ece729d56ceb0be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c253a0ee0ab94c7805263323580b950a2ddfc59dbf8cdfd5ece729d56ceb0be6->leave($__internal_c253a0ee0ab94c7805263323580b950a2ddfc59dbf8cdfd5ece729d56ceb0be6_prof);

        
        $__internal_626448113db9df1a956b59d26def6af5b7816716e1b69c994ff46b2170502fc7->leave($__internal_626448113db9df1a956b59d26def6af5b7816716e1b69c994ff46b2170502fc7_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_18c3b3745c0a94c95b48d252b5e8b823c8addef4cc9118a5f98045375105ba87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c3b3745c0a94c95b48d252b5e8b823c8addef4cc9118a5f98045375105ba87->enter($__internal_18c3b3745c0a94c95b48d252b5e8b823c8addef4cc9118a5f98045375105ba87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97f02a8bce541ab7ae6ceeaa5d5f52870921d1edc0285ff7c6d0742cc39b8a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f02a8bce541ab7ae6ceeaa5d5f52870921d1edc0285ff7c6d0742cc39b8a67->enter($__internal_97f02a8bce541ab7ae6ceeaa5d5f52870921d1edc0285ff7c6d0742cc39b8a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
   ";
        
        $__internal_97f02a8bce541ab7ae6ceeaa5d5f52870921d1edc0285ff7c6d0742cc39b8a67->leave($__internal_97f02a8bce541ab7ae6ceeaa5d5f52870921d1edc0285ff7c6d0742cc39b8a67_prof);

        
        $__internal_18c3b3745c0a94c95b48d252b5e8b823c8addef4cc9118a5f98045375105ba87->leave($__internal_18c3b3745c0a94c95b48d252b5e8b823c8addef4cc9118a5f98045375105ba87_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_968a114798d080458bf6a1097957a20add972dec565345e7a8ac3af1df490610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968a114798d080458bf6a1097957a20add972dec565345e7a8ac3af1df490610->enter($__internal_968a114798d080458bf6a1097957a20add972dec565345e7a8ac3af1df490610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dcb1b704c76567f7c8b29abb294a7e529bfff29499655396dfe101d035b8b4db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb1b704c76567f7c8b29abb294a7e529bfff29499655396dfe101d035b8b4db->enter($__internal_dcb1b704c76567f7c8b29abb294a7e529bfff29499655396dfe101d035b8b4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dcb1b704c76567f7c8b29abb294a7e529bfff29499655396dfe101d035b8b4db->leave($__internal_dcb1b704c76567f7c8b29abb294a7e529bfff29499655396dfe101d035b8b4db_prof);

        
        $__internal_968a114798d080458bf6a1097957a20add972dec565345e7a8ac3af1df490610->leave($__internal_968a114798d080458bf6a1097957a20add972dec565345e7a8ac3af1df490610_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 18,  124 => 16,  115 => 15,  98 => 6,  80 => 5,  68 => 19,  65 => 18,  62 => 15,  56 => 13,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
         {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
             <a class=\"link\" href=\"{{ path('logout') }}\">Logout</a>
             {% else %}
             <a class=\"link\" href=\"{{ path('login') }}\">Login</a>
         {% endif %}
        {% block body %}

   {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/app/Resources/views/base.html.twig");
    }
}
