<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cf87945dc46870d0a47bcda5fa4941638ec2457ee267cd083784caf1fc0e869b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c92dacc2297648ac2e46bc296e080ea4902bdacea8e4abca5b62fe52f73f286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c92dacc2297648ac2e46bc296e080ea4902bdacea8e4abca5b62fe52f73f286->enter($__internal_1c92dacc2297648ac2e46bc296e080ea4902bdacea8e4abca5b62fe52f73f286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8a6ffa326d0c80d57c9727eb634e6fa4ba5f64db69cc6ba927e8caa755367780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6ffa326d0c80d57c9727eb634e6fa4ba5f64db69cc6ba927e8caa755367780->enter($__internal_8a6ffa326d0c80d57c9727eb634e6fa4ba5f64db69cc6ba927e8caa755367780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c92dacc2297648ac2e46bc296e080ea4902bdacea8e4abca5b62fe52f73f286->leave($__internal_1c92dacc2297648ac2e46bc296e080ea4902bdacea8e4abca5b62fe52f73f286_prof);

        
        $__internal_8a6ffa326d0c80d57c9727eb634e6fa4ba5f64db69cc6ba927e8caa755367780->leave($__internal_8a6ffa326d0c80d57c9727eb634e6fa4ba5f64db69cc6ba927e8caa755367780_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f58bd5d5d84c4b3ceaee6f573f11e8d95bb99661332589ba069361f662478d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58bd5d5d84c4b3ceaee6f573f11e8d95bb99661332589ba069361f662478d15->enter($__internal_f58bd5d5d84c4b3ceaee6f573f11e8d95bb99661332589ba069361f662478d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fb78dac11fa24eb85bf3bf89e8eb8760a3b80e396687a886c9b5c6b37b2d7a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb78dac11fa24eb85bf3bf89e8eb8760a3b80e396687a886c9b5c6b37b2d7a00->enter($__internal_fb78dac11fa24eb85bf3bf89e8eb8760a3b80e396687a886c9b5c6b37b2d7a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fb78dac11fa24eb85bf3bf89e8eb8760a3b80e396687a886c9b5c6b37b2d7a00->leave($__internal_fb78dac11fa24eb85bf3bf89e8eb8760a3b80e396687a886c9b5c6b37b2d7a00_prof);

        
        $__internal_f58bd5d5d84c4b3ceaee6f573f11e8d95bb99661332589ba069361f662478d15->leave($__internal_f58bd5d5d84c4b3ceaee6f573f11e8d95bb99661332589ba069361f662478d15_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20033affdf464ae986060a10077af32c3d5fe2ec24e4757cfb58b92daa7cb5ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20033affdf464ae986060a10077af32c3d5fe2ec24e4757cfb58b92daa7cb5ff->enter($__internal_20033affdf464ae986060a10077af32c3d5fe2ec24e4757cfb58b92daa7cb5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_61e8145e2fea2fd2a1b81b4d7981f4c094e6e3c5c152adf9522868444190289c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e8145e2fea2fd2a1b81b4d7981f4c094e6e3c5c152adf9522868444190289c->enter($__internal_61e8145e2fea2fd2a1b81b4d7981f4c094e6e3c5c152adf9522868444190289c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_61e8145e2fea2fd2a1b81b4d7981f4c094e6e3c5c152adf9522868444190289c->leave($__internal_61e8145e2fea2fd2a1b81b4d7981f4c094e6e3c5c152adf9522868444190289c_prof);

        
        $__internal_20033affdf464ae986060a10077af32c3d5fe2ec24e4757cfb58b92daa7cb5ff->leave($__internal_20033affdf464ae986060a10077af32c3d5fe2ec24e4757cfb58b92daa7cb5ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef9a4f4d9080e5bfa5d9b09c02718c7f006e82ba0bfc19974e358ef47a2269ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9a4f4d9080e5bfa5d9b09c02718c7f006e82ba0bfc19974e358ef47a2269ec->enter($__internal_ef9a4f4d9080e5bfa5d9b09c02718c7f006e82ba0bfc19974e358ef47a2269ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a24821b271f4898f158381c146d48e67ba3f9fc482cb7fb0448b76be6081e2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24821b271f4898f158381c146d48e67ba3f9fc482cb7fb0448b76be6081e2e5->enter($__internal_a24821b271f4898f158381c146d48e67ba3f9fc482cb7fb0448b76be6081e2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a24821b271f4898f158381c146d48e67ba3f9fc482cb7fb0448b76be6081e2e5->leave($__internal_a24821b271f4898f158381c146d48e67ba3f9fc482cb7fb0448b76be6081e2e5_prof);

        
        $__internal_ef9a4f4d9080e5bfa5d9b09c02718c7f006e82ba0bfc19974e358ef47a2269ec->leave($__internal_ef9a4f4d9080e5bfa5d9b09c02718c7f006e82ba0bfc19974e358ef47a2269ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/digital/ShowController/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
