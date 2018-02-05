<?php

/* default/index.html.twig */
class __TwigTemplate_7b749c18355ac39bfe62c7604b3bc1bb2efee814c2d2fe587c12c74252275c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c347dc18e6e329bb357f53f4211bdedde2e26062c9326541cb3a337657a3f070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c347dc18e6e329bb357f53f4211bdedde2e26062c9326541cb3a337657a3f070->enter($__internal_c347dc18e6e329bb357f53f4211bdedde2e26062c9326541cb3a337657a3f070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_896a832a9879e189f42d33e524db3b4e70f0a3ff56671dd8fc17afe3b0195e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896a832a9879e189f42d33e524db3b4e70f0a3ff56671dd8fc17afe3b0195e16->enter($__internal_896a832a9879e189f42d33e524db3b4e70f0a3ff56671dd8fc17afe3b0195e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c347dc18e6e329bb357f53f4211bdedde2e26062c9326541cb3a337657a3f070->leave($__internal_c347dc18e6e329bb357f53f4211bdedde2e26062c9326541cb3a337657a3f070_prof);

        
        $__internal_896a832a9879e189f42d33e524db3b4e70f0a3ff56671dd8fc17afe3b0195e16->leave($__internal_896a832a9879e189f42d33e524db3b4e70f0a3ff56671dd8fc17afe3b0195e16_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_857c3d086a51585bfa7522dd9b0c37835537bf52bd7c463a754a80355653bded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857c3d086a51585bfa7522dd9b0c37835537bf52bd7c463a754a80355653bded->enter($__internal_857c3d086a51585bfa7522dd9b0c37835537bf52bd7c463a754a80355653bded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_630f9d95ea3224b84ac4cde0398a51c233ce3f24b5f80648fddeced44be069c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630f9d95ea3224b84ac4cde0398a51c233ce3f24b5f80648fddeced44be069c0->enter($__internal_630f9d95ea3224b84ac4cde0398a51c233ce3f24b5f80648fddeced44be069c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello ";
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo " !
";
        
        $__internal_630f9d95ea3224b84ac4cde0398a51c233ce3f24b5f80648fddeced44be069c0->leave($__internal_630f9d95ea3224b84ac4cde0398a51c233ce3f24b5f80648fddeced44be069c0_prof);

        
        $__internal_857c3d086a51585bfa7522dd9b0c37835537bf52bd7c463a754a80355653bded->leave($__internal_857c3d086a51585bfa7522dd9b0c37835537bf52bd7c463a754a80355653bded_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_159440a1ae0be1f1d93cec462824fe87f35146285f5fc24e12635a7d5e86b011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159440a1ae0be1f1d93cec462824fe87f35146285f5fc24e12635a7d5e86b011->enter($__internal_159440a1ae0be1f1d93cec462824fe87f35146285f5fc24e12635a7d5e86b011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f2a92398d0eff0a5f7f1bf59d043a60f26c6e71c2514c70406c1007b660b2b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a92398d0eff0a5f7f1bf59d043a60f26c6e71c2514c70406c1007b660b2b56->enter($__internal_f2a92398d0eff0a5f7f1bf59d043a60f26c6e71c2514c70406c1007b660b2b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_f2a92398d0eff0a5f7f1bf59d043a60f26c6e71c2514c70406c1007b660b2b56->leave($__internal_f2a92398d0eff0a5f7f1bf59d043a60f26c6e71c2514c70406c1007b660b2b56_prof);

        
        $__internal_159440a1ae0be1f1d93cec462824fe87f35146285f5fc24e12635a7d5e86b011->leave($__internal_159440a1ae0be1f1d93cec462824fe87f35146285f5fc24e12635a7d5e86b011_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Hello {{ username }} !
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/index.html.twig", "/Users/digital/ShowController/app/Resources/views/default/index.html.twig");
    }
}
