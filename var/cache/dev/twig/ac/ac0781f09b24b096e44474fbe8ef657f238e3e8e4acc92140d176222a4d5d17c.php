<?php

/* base.html.twig */
class __TwigTemplate_886c1b70435d387549d9d68eca962f5f84ed0580117c741f70daece1a19cce62 extends Twig_Template
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
        $__internal_9b32e741dfeb0a89867231bc82dbf56fb8b3a0697a8bd9a42d7f950f5f97a0e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b32e741dfeb0a89867231bc82dbf56fb8b3a0697a8bd9a42d7f950f5f97a0e1->enter($__internal_9b32e741dfeb0a89867231bc82dbf56fb8b3a0697a8bd9a42d7f950f5f97a0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_106d391e2c53af40a1e64a4149a3f9cc879c7253c89c1a2ba6f0c84b0fac3fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106d391e2c53af40a1e64a4149a3f9cc879c7253c89c1a2ba6f0c84b0fac3fce->enter($__internal_106d391e2c53af40a1e64a4149a3f9cc879c7253c89c1a2ba6f0c84b0fac3fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9b32e741dfeb0a89867231bc82dbf56fb8b3a0697a8bd9a42d7f950f5f97a0e1->leave($__internal_9b32e741dfeb0a89867231bc82dbf56fb8b3a0697a8bd9a42d7f950f5f97a0e1_prof);

        
        $__internal_106d391e2c53af40a1e64a4149a3f9cc879c7253c89c1a2ba6f0c84b0fac3fce->leave($__internal_106d391e2c53af40a1e64a4149a3f9cc879c7253c89c1a2ba6f0c84b0fac3fce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0791175b5c57f266c402bf41a1141a51eed06b2f7991cd48f2343b634322d7b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0791175b5c57f266c402bf41a1141a51eed06b2f7991cd48f2343b634322d7b5->enter($__internal_0791175b5c57f266c402bf41a1141a51eed06b2f7991cd48f2343b634322d7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4726febfaf8582c9b74e33eae618d82780e780699ae3f070d21e794fd5db881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4726febfaf8582c9b74e33eae618d82780e780699ae3f070d21e794fd5db881->enter($__internal_f4726febfaf8582c9b74e33eae618d82780e780699ae3f070d21e794fd5db881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f4726febfaf8582c9b74e33eae618d82780e780699ae3f070d21e794fd5db881->leave($__internal_f4726febfaf8582c9b74e33eae618d82780e780699ae3f070d21e794fd5db881_prof);

        
        $__internal_0791175b5c57f266c402bf41a1141a51eed06b2f7991cd48f2343b634322d7b5->leave($__internal_0791175b5c57f266c402bf41a1141a51eed06b2f7991cd48f2343b634322d7b5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1efe962d3a1fffa54a914c817d23604dc36de31faad5ff200fe4f14d4805b0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efe962d3a1fffa54a914c817d23604dc36de31faad5ff200fe4f14d4805b0f3->enter($__internal_1efe962d3a1fffa54a914c817d23604dc36de31faad5ff200fe4f14d4805b0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fbf6a793eccdd7ab01e0b926e2e81c303d1a1e2a2da85155e6c6f83ac854da7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf6a793eccdd7ab01e0b926e2e81c303d1a1e2a2da85155e6c6f83ac854da7a->enter($__internal_fbf6a793eccdd7ab01e0b926e2e81c303d1a1e2a2da85155e6c6f83ac854da7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fbf6a793eccdd7ab01e0b926e2e81c303d1a1e2a2da85155e6c6f83ac854da7a->leave($__internal_fbf6a793eccdd7ab01e0b926e2e81c303d1a1e2a2da85155e6c6f83ac854da7a_prof);

        
        $__internal_1efe962d3a1fffa54a914c817d23604dc36de31faad5ff200fe4f14d4805b0f3->leave($__internal_1efe962d3a1fffa54a914c817d23604dc36de31faad5ff200fe4f14d4805b0f3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cb7f454a96efbaa28f6dbe50de20efc04415aa8ce4688d09b9c3c5c2f067912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb7f454a96efbaa28f6dbe50de20efc04415aa8ce4688d09b9c3c5c2f067912->enter($__internal_6cb7f454a96efbaa28f6dbe50de20efc04415aa8ce4688d09b9c3c5c2f067912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61b4aa86f7a5f5c4facfa4d966c7f72ae97ddddf18404a7fd668fe53191473db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b4aa86f7a5f5c4facfa4d966c7f72ae97ddddf18404a7fd668fe53191473db->enter($__internal_61b4aa86f7a5f5c4facfa4d966c7f72ae97ddddf18404a7fd668fe53191473db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61b4aa86f7a5f5c4facfa4d966c7f72ae97ddddf18404a7fd668fe53191473db->leave($__internal_61b4aa86f7a5f5c4facfa4d966c7f72ae97ddddf18404a7fd668fe53191473db_prof);

        
        $__internal_6cb7f454a96efbaa28f6dbe50de20efc04415aa8ce4688d09b9c3c5c2f067912->leave($__internal_6cb7f454a96efbaa28f6dbe50de20efc04415aa8ce4688d09b9c3c5c2f067912_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b52676485d13f0e2dddd0fe5985fd6db1187042f8b1949b4da6797c81b614764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52676485d13f0e2dddd0fe5985fd6db1187042f8b1949b4da6797c81b614764->enter($__internal_b52676485d13f0e2dddd0fe5985fd6db1187042f8b1949b4da6797c81b614764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_52ca0be45e95271f4aeec2f1df9319c8979961d853cb3b3fc2522191e8ddac16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ca0be45e95271f4aeec2f1df9319c8979961d853cb3b3fc2522191e8ddac16->enter($__internal_52ca0be45e95271f4aeec2f1df9319c8979961d853cb3b3fc2522191e8ddac16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_52ca0be45e95271f4aeec2f1df9319c8979961d853cb3b3fc2522191e8ddac16->leave($__internal_52ca0be45e95271f4aeec2f1df9319c8979961d853cb3b3fc2522191e8ddac16_prof);

        
        $__internal_b52676485d13f0e2dddd0fe5985fd6db1187042f8b1949b4da6797c81b614764->leave($__internal_b52676485d13f0e2dddd0fe5985fd6db1187042f8b1949b4da6797c81b614764_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/digital/ShowController/app/Resources/views/base.html.twig");
    }
}
