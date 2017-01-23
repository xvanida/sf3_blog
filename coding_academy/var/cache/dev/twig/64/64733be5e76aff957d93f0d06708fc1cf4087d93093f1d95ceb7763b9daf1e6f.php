<?php

/* ::base.html.twig */
class __TwigTemplate_fd283b80088269500e2bb44ac6a7e25c421e502e6bdda4fcd95934f1da67dc42 extends Twig_Template
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
        $__internal_11b6ff978459e305a448ed6e0d790741ec60f1023675ea016715ecc1097da1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b6ff978459e305a448ed6e0d790741ec60f1023675ea016715ecc1097da1d0->enter($__internal_11b6ff978459e305a448ed6e0d790741ec60f1023675ea016715ecc1097da1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_fb6fe4b84438f8d7f326cf000005ac7f331dc95f58f4cab22d7e3da3699f5430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6fe4b84438f8d7f326cf000005ac7f331dc95f58f4cab22d7e3da3699f5430->enter($__internal_fb6fe4b84438f8d7f326cf000005ac7f331dc95f58f4cab22d7e3da3699f5430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_11b6ff978459e305a448ed6e0d790741ec60f1023675ea016715ecc1097da1d0->leave($__internal_11b6ff978459e305a448ed6e0d790741ec60f1023675ea016715ecc1097da1d0_prof);

        
        $__internal_fb6fe4b84438f8d7f326cf000005ac7f331dc95f58f4cab22d7e3da3699f5430->leave($__internal_fb6fe4b84438f8d7f326cf000005ac7f331dc95f58f4cab22d7e3da3699f5430_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9518aecfafb369149d92994316f8a23066b8c2f66b203d49a4025ac828d1040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9518aecfafb369149d92994316f8a23066b8c2f66b203d49a4025ac828d1040->enter($__internal_d9518aecfafb369149d92994316f8a23066b8c2f66b203d49a4025ac828d1040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4b6824c6023782dab1cf3ed6dee287bb6503f272f7b7d756e99c22eea80699b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b6824c6023782dab1cf3ed6dee287bb6503f272f7b7d756e99c22eea80699b->enter($__internal_f4b6824c6023782dab1cf3ed6dee287bb6503f272f7b7d756e99c22eea80699b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f4b6824c6023782dab1cf3ed6dee287bb6503f272f7b7d756e99c22eea80699b->leave($__internal_f4b6824c6023782dab1cf3ed6dee287bb6503f272f7b7d756e99c22eea80699b_prof);

        
        $__internal_d9518aecfafb369149d92994316f8a23066b8c2f66b203d49a4025ac828d1040->leave($__internal_d9518aecfafb369149d92994316f8a23066b8c2f66b203d49a4025ac828d1040_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_143131ca370d2f9f709161885c9a49b9b6581d7bc0984345813ca70593c9faf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143131ca370d2f9f709161885c9a49b9b6581d7bc0984345813ca70593c9faf4->enter($__internal_143131ca370d2f9f709161885c9a49b9b6581d7bc0984345813ca70593c9faf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f14348a28401c6754e09cdd7713544ecdab5f03a79c013961307ce9a7884e24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14348a28401c6754e09cdd7713544ecdab5f03a79c013961307ce9a7884e24a->enter($__internal_f14348a28401c6754e09cdd7713544ecdab5f03a79c013961307ce9a7884e24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f14348a28401c6754e09cdd7713544ecdab5f03a79c013961307ce9a7884e24a->leave($__internal_f14348a28401c6754e09cdd7713544ecdab5f03a79c013961307ce9a7884e24a_prof);

        
        $__internal_143131ca370d2f9f709161885c9a49b9b6581d7bc0984345813ca70593c9faf4->leave($__internal_143131ca370d2f9f709161885c9a49b9b6581d7bc0984345813ca70593c9faf4_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2f82cfa6d92caf7685101468381ec786facc5ce3f7822884eaeb9ae39f400a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f82cfa6d92caf7685101468381ec786facc5ce3f7822884eaeb9ae39f400a1->enter($__internal_b2f82cfa6d92caf7685101468381ec786facc5ce3f7822884eaeb9ae39f400a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43cebbb55f1a3b1ed5cbf67aa457f6970645bcffd2c938b0d795a8f0f5444042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cebbb55f1a3b1ed5cbf67aa457f6970645bcffd2c938b0d795a8f0f5444042->enter($__internal_43cebbb55f1a3b1ed5cbf67aa457f6970645bcffd2c938b0d795a8f0f5444042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
   ";
        
        $__internal_43cebbb55f1a3b1ed5cbf67aa457f6970645bcffd2c938b0d795a8f0f5444042->leave($__internal_43cebbb55f1a3b1ed5cbf67aa457f6970645bcffd2c938b0d795a8f0f5444042_prof);

        
        $__internal_b2f82cfa6d92caf7685101468381ec786facc5ce3f7822884eaeb9ae39f400a1->leave($__internal_b2f82cfa6d92caf7685101468381ec786facc5ce3f7822884eaeb9ae39f400a1_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04ded4752d4ecaf846ccd761574eda2979fa5439e2d80c0836d5ff18dd83a9cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ded4752d4ecaf846ccd761574eda2979fa5439e2d80c0836d5ff18dd83a9cd->enter($__internal_04ded4752d4ecaf846ccd761574eda2979fa5439e2d80c0836d5ff18dd83a9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_989d863b3df2bc2612aa486fb8c2711364694801c1d8244f239ed482eb867216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989d863b3df2bc2612aa486fb8c2711364694801c1d8244f239ed482eb867216->enter($__internal_989d863b3df2bc2612aa486fb8c2711364694801c1d8244f239ed482eb867216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_989d863b3df2bc2612aa486fb8c2711364694801c1d8244f239ed482eb867216->leave($__internal_989d863b3df2bc2612aa486fb8c2711364694801c1d8244f239ed482eb867216_prof);

        
        $__internal_04ded4752d4ecaf846ccd761574eda2979fa5439e2d80c0836d5ff18dd83a9cd->leave($__internal_04ded4752d4ecaf846ccd761574eda2979fa5439e2d80c0836d5ff18dd83a9cd_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/home/changeme/rendu/symfony/Symfony_Jour_03/ex_6/coding_academy/var/cache/dev/../../../app/Resources/views/base.html.twig");
    }
}
