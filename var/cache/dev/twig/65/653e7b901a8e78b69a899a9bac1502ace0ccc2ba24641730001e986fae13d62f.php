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
        $__internal_d45657a24fcffca680f21676f8d404d86a53cf2910f6295c30fdad8b4076ce24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45657a24fcffca680f21676f8d404d86a53cf2910f6295c30fdad8b4076ce24->enter($__internal_d45657a24fcffca680f21676f8d404d86a53cf2910f6295c30fdad8b4076ce24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9e8554882db49b02259bfb4ee45380255d54b038dfedb8cd9a1def558f74e1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8554882db49b02259bfb4ee45380255d54b038dfedb8cd9a1def558f74e1bb->enter($__internal_9e8554882db49b02259bfb4ee45380255d54b038dfedb8cd9a1def558f74e1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d45657a24fcffca680f21676f8d404d86a53cf2910f6295c30fdad8b4076ce24->leave($__internal_d45657a24fcffca680f21676f8d404d86a53cf2910f6295c30fdad8b4076ce24_prof);

        
        $__internal_9e8554882db49b02259bfb4ee45380255d54b038dfedb8cd9a1def558f74e1bb->leave($__internal_9e8554882db49b02259bfb4ee45380255d54b038dfedb8cd9a1def558f74e1bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1629f80ab17c33066ac142e557a9eb641117212191ff33c500e2487b1bdf4ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1629f80ab17c33066ac142e557a9eb641117212191ff33c500e2487b1bdf4ec5->enter($__internal_1629f80ab17c33066ac142e557a9eb641117212191ff33c500e2487b1bdf4ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5fb63f6f1aaa96fa989c64dfcfe547743cf74394a71f9cba4f407f29f6006f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb63f6f1aaa96fa989c64dfcfe547743cf74394a71f9cba4f407f29f6006f0f->enter($__internal_5fb63f6f1aaa96fa989c64dfcfe547743cf74394a71f9cba4f407f29f6006f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5fb63f6f1aaa96fa989c64dfcfe547743cf74394a71f9cba4f407f29f6006f0f->leave($__internal_5fb63f6f1aaa96fa989c64dfcfe547743cf74394a71f9cba4f407f29f6006f0f_prof);

        
        $__internal_1629f80ab17c33066ac142e557a9eb641117212191ff33c500e2487b1bdf4ec5->leave($__internal_1629f80ab17c33066ac142e557a9eb641117212191ff33c500e2487b1bdf4ec5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_565e926f66d2bb87942da3accd3d257ac05fbc568a520b49df87e381a3412421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565e926f66d2bb87942da3accd3d257ac05fbc568a520b49df87e381a3412421->enter($__internal_565e926f66d2bb87942da3accd3d257ac05fbc568a520b49df87e381a3412421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_38a26c1d71c8c64c16666c7c7defe06c5c633691c1ee6bd0486a8091cf1a935c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a26c1d71c8c64c16666c7c7defe06c5c633691c1ee6bd0486a8091cf1a935c->enter($__internal_38a26c1d71c8c64c16666c7c7defe06c5c633691c1ee6bd0486a8091cf1a935c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_38a26c1d71c8c64c16666c7c7defe06c5c633691c1ee6bd0486a8091cf1a935c->leave($__internal_38a26c1d71c8c64c16666c7c7defe06c5c633691c1ee6bd0486a8091cf1a935c_prof);

        
        $__internal_565e926f66d2bb87942da3accd3d257ac05fbc568a520b49df87e381a3412421->leave($__internal_565e926f66d2bb87942da3accd3d257ac05fbc568a520b49df87e381a3412421_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4691fa146c15b204ff4e4acf7169b6a0f53dc86674671f1713f7694c241d295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4691fa146c15b204ff4e4acf7169b6a0f53dc86674671f1713f7694c241d295->enter($__internal_f4691fa146c15b204ff4e4acf7169b6a0f53dc86674671f1713f7694c241d295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c123709a70f4021f34cef002ec90f677e6b5e7c24df35f79f527f68c38f3dff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c123709a70f4021f34cef002ec90f677e6b5e7c24df35f79f527f68c38f3dff3->enter($__internal_c123709a70f4021f34cef002ec90f677e6b5e7c24df35f79f527f68c38f3dff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c123709a70f4021f34cef002ec90f677e6b5e7c24df35f79f527f68c38f3dff3->leave($__internal_c123709a70f4021f34cef002ec90f677e6b5e7c24df35f79f527f68c38f3dff3_prof);

        
        $__internal_f4691fa146c15b204ff4e4acf7169b6a0f53dc86674671f1713f7694c241d295->leave($__internal_f4691fa146c15b204ff4e4acf7169b6a0f53dc86674671f1713f7694c241d295_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/digital/Documents/showroom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
