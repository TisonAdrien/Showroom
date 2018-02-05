<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4cc1f419d6e299be85f55c4eb9e710d5d3091a5cc34b02f8347a02e17a5ac064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9e2842039a16617ac3cf328e31b715e85b300ad8ba1c3638e9a780aec9c3c2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2842039a16617ac3cf328e31b715e85b300ad8ba1c3638e9a780aec9c3c2e4->enter($__internal_9e2842039a16617ac3cf328e31b715e85b300ad8ba1c3638e9a780aec9c3c2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_948035dcd0a2dffb99e1790a6b552c5d8c3c15ce04ea25f46150d69a538881c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948035dcd0a2dffb99e1790a6b552c5d8c3c15ce04ea25f46150d69a538881c5->enter($__internal_948035dcd0a2dffb99e1790a6b552c5d8c3c15ce04ea25f46150d69a538881c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e2842039a16617ac3cf328e31b715e85b300ad8ba1c3638e9a780aec9c3c2e4->leave($__internal_9e2842039a16617ac3cf328e31b715e85b300ad8ba1c3638e9a780aec9c3c2e4_prof);

        
        $__internal_948035dcd0a2dffb99e1790a6b552c5d8c3c15ce04ea25f46150d69a538881c5->leave($__internal_948035dcd0a2dffb99e1790a6b552c5d8c3c15ce04ea25f46150d69a538881c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e277000c53bcb0cf87934a3e4b2a5e38a50835288eb2d291ddc17a1774da67b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e277000c53bcb0cf87934a3e4b2a5e38a50835288eb2d291ddc17a1774da67b0->enter($__internal_e277000c53bcb0cf87934a3e4b2a5e38a50835288eb2d291ddc17a1774da67b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73c693d072ac8eaafb3f690141929728bacfa7178adaee4c5b2e6d1a6f13aa13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c693d072ac8eaafb3f690141929728bacfa7178adaee4c5b2e6d1a6f13aa13->enter($__internal_73c693d072ac8eaafb3f690141929728bacfa7178adaee4c5b2e6d1a6f13aa13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_73c693d072ac8eaafb3f690141929728bacfa7178adaee4c5b2e6d1a6f13aa13->leave($__internal_73c693d072ac8eaafb3f690141929728bacfa7178adaee4c5b2e6d1a6f13aa13_prof);

        
        $__internal_e277000c53bcb0cf87934a3e4b2a5e38a50835288eb2d291ddc17a1774da67b0->leave($__internal_e277000c53bcb0cf87934a3e4b2a5e38a50835288eb2d291ddc17a1774da67b0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32ae040afb57ce569e35142e6804ac5fe5f28349c01eab1ce3cbdf03be0cf521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ae040afb57ce569e35142e6804ac5fe5f28349c01eab1ce3cbdf03be0cf521->enter($__internal_32ae040afb57ce569e35142e6804ac5fe5f28349c01eab1ce3cbdf03be0cf521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5098650e3f0a4df3a3255925263d19a99956b2a31aaee6803cff7c9357e27eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5098650e3f0a4df3a3255925263d19a99956b2a31aaee6803cff7c9357e27eb0->enter($__internal_5098650e3f0a4df3a3255925263d19a99956b2a31aaee6803cff7c9357e27eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5098650e3f0a4df3a3255925263d19a99956b2a31aaee6803cff7c9357e27eb0->leave($__internal_5098650e3f0a4df3a3255925263d19a99956b2a31aaee6803cff7c9357e27eb0_prof);

        
        $__internal_32ae040afb57ce569e35142e6804ac5fe5f28349c01eab1ce3cbdf03be0cf521->leave($__internal_32ae040afb57ce569e35142e6804ac5fe5f28349c01eab1ce3cbdf03be0cf521_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90636bb956758d42185af7a93bb68e82fd801158947f342652806de89898f2d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90636bb956758d42185af7a93bb68e82fd801158947f342652806de89898f2d4->enter($__internal_90636bb956758d42185af7a93bb68e82fd801158947f342652806de89898f2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c4405cd8e572eaad6480e351c0a7451c96a7c12763236bf5cc378c169c58fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4405cd8e572eaad6480e351c0a7451c96a7c12763236bf5cc378c169c58fff->enter($__internal_3c4405cd8e572eaad6480e351c0a7451c96a7c12763236bf5cc378c169c58fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3c4405cd8e572eaad6480e351c0a7451c96a7c12763236bf5cc378c169c58fff->leave($__internal_3c4405cd8e572eaad6480e351c0a7451c96a7c12763236bf5cc378c169c58fff_prof);

        
        $__internal_90636bb956758d42185af7a93bb68e82fd801158947f342652806de89898f2d4->leave($__internal_90636bb956758d42185af7a93bb68e82fd801158947f342652806de89898f2d4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/digital/ShowController/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
