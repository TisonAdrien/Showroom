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
        $__internal_e96310a2212e2850cbfa62dab446f8ce6d0469b3e020e67780e25c97e7cbd756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96310a2212e2850cbfa62dab446f8ce6d0469b3e020e67780e25c97e7cbd756->enter($__internal_e96310a2212e2850cbfa62dab446f8ce6d0469b3e020e67780e25c97e7cbd756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dafe364dec6aa168129873f62c917af7207daa8b269d93043043d6a34c354caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafe364dec6aa168129873f62c917af7207daa8b269d93043043d6a34c354caa->enter($__internal_dafe364dec6aa168129873f62c917af7207daa8b269d93043043d6a34c354caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e96310a2212e2850cbfa62dab446f8ce6d0469b3e020e67780e25c97e7cbd756->leave($__internal_e96310a2212e2850cbfa62dab446f8ce6d0469b3e020e67780e25c97e7cbd756_prof);

        
        $__internal_dafe364dec6aa168129873f62c917af7207daa8b269d93043043d6a34c354caa->leave($__internal_dafe364dec6aa168129873f62c917af7207daa8b269d93043043d6a34c354caa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7271a17e9a43aa3fef2c6edd48244399fb24f12453e21cd9c253b48e54688edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7271a17e9a43aa3fef2c6edd48244399fb24f12453e21cd9c253b48e54688edc->enter($__internal_7271a17e9a43aa3fef2c6edd48244399fb24f12453e21cd9c253b48e54688edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c60f9900c1bea65a5e4daa5c3baf467adfc671b5f9d8a10e96d22a0838a0a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c60f9900c1bea65a5e4daa5c3baf467adfc671b5f9d8a10e96d22a0838a0a13->enter($__internal_6c60f9900c1bea65a5e4daa5c3baf467adfc671b5f9d8a10e96d22a0838a0a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6c60f9900c1bea65a5e4daa5c3baf467adfc671b5f9d8a10e96d22a0838a0a13->leave($__internal_6c60f9900c1bea65a5e4daa5c3baf467adfc671b5f9d8a10e96d22a0838a0a13_prof);

        
        $__internal_7271a17e9a43aa3fef2c6edd48244399fb24f12453e21cd9c253b48e54688edc->leave($__internal_7271a17e9a43aa3fef2c6edd48244399fb24f12453e21cd9c253b48e54688edc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2a42b25e39b86519ddfa1fa8560c428d10451e91ab5d4788f64578d2b492413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a42b25e39b86519ddfa1fa8560c428d10451e91ab5d4788f64578d2b492413->enter($__internal_d2a42b25e39b86519ddfa1fa8560c428d10451e91ab5d4788f64578d2b492413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a41f3e34ceb52bd52830d2da6339d7f22c2f248d2c60a8da15421d9cb5ff80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a41f3e34ceb52bd52830d2da6339d7f22c2f248d2c60a8da15421d9cb5ff80f->enter($__internal_5a41f3e34ceb52bd52830d2da6339d7f22c2f248d2c60a8da15421d9cb5ff80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5a41f3e34ceb52bd52830d2da6339d7f22c2f248d2c60a8da15421d9cb5ff80f->leave($__internal_5a41f3e34ceb52bd52830d2da6339d7f22c2f248d2c60a8da15421d9cb5ff80f_prof);

        
        $__internal_d2a42b25e39b86519ddfa1fa8560c428d10451e91ab5d4788f64578d2b492413->leave($__internal_d2a42b25e39b86519ddfa1fa8560c428d10451e91ab5d4788f64578d2b492413_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fa96ab72aa126fa9fba6da7d0b5d389838cbe7f83bbacf8354890bb07774ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa96ab72aa126fa9fba6da7d0b5d389838cbe7f83bbacf8354890bb07774ddb->enter($__internal_0fa96ab72aa126fa9fba6da7d0b5d389838cbe7f83bbacf8354890bb07774ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8eff2ad25f215c47a1c72e7fc458b0dbbf941cad0804a102d85225e892e4cd20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eff2ad25f215c47a1c72e7fc458b0dbbf941cad0804a102d85225e892e4cd20->enter($__internal_8eff2ad25f215c47a1c72e7fc458b0dbbf941cad0804a102d85225e892e4cd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8eff2ad25f215c47a1c72e7fc458b0dbbf941cad0804a102d85225e892e4cd20->leave($__internal_8eff2ad25f215c47a1c72e7fc458b0dbbf941cad0804a102d85225e892e4cd20_prof);

        
        $__internal_0fa96ab72aa126fa9fba6da7d0b5d389838cbe7f83bbacf8354890bb07774ddb->leave($__internal_0fa96ab72aa126fa9fba6da7d0b5d389838cbe7f83bbacf8354890bb07774ddb_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/digital/Documents/showroom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
