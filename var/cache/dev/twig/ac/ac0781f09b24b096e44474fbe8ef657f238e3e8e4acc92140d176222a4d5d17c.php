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
        $__internal_6414309df57ed45154cb8898174ef9b61369e352ad35cdc9849790be873392a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6414309df57ed45154cb8898174ef9b61369e352ad35cdc9849790be873392a6->enter($__internal_6414309df57ed45154cb8898174ef9b61369e352ad35cdc9849790be873392a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_02447bd7a7d5821203ad92337dd96cb6bcbb270c60f65949a75a99e32ddfeb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02447bd7a7d5821203ad92337dd96cb6bcbb270c60f65949a75a99e32ddfeb9d->enter($__internal_02447bd7a7d5821203ad92337dd96cb6bcbb270c60f65949a75a99e32ddfeb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6414309df57ed45154cb8898174ef9b61369e352ad35cdc9849790be873392a6->leave($__internal_6414309df57ed45154cb8898174ef9b61369e352ad35cdc9849790be873392a6_prof);

        
        $__internal_02447bd7a7d5821203ad92337dd96cb6bcbb270c60f65949a75a99e32ddfeb9d->leave($__internal_02447bd7a7d5821203ad92337dd96cb6bcbb270c60f65949a75a99e32ddfeb9d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8d95747eed0959a2b54b06fe5dffa139e7ece90eb528956645ae380ef221f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d95747eed0959a2b54b06fe5dffa139e7ece90eb528956645ae380ef221f56->enter($__internal_f8d95747eed0959a2b54b06fe5dffa139e7ece90eb528956645ae380ef221f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_101c08435deccd553d65518d374ce6ef1a23350dc30e730191e5f8212d98b3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101c08435deccd553d65518d374ce6ef1a23350dc30e730191e5f8212d98b3bd->enter($__internal_101c08435deccd553d65518d374ce6ef1a23350dc30e730191e5f8212d98b3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_101c08435deccd553d65518d374ce6ef1a23350dc30e730191e5f8212d98b3bd->leave($__internal_101c08435deccd553d65518d374ce6ef1a23350dc30e730191e5f8212d98b3bd_prof);

        
        $__internal_f8d95747eed0959a2b54b06fe5dffa139e7ece90eb528956645ae380ef221f56->leave($__internal_f8d95747eed0959a2b54b06fe5dffa139e7ece90eb528956645ae380ef221f56_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_80c4db4ecda8844d6bda54293ccec73c6dc01e862569f2cebcd89e4df1e4bd32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c4db4ecda8844d6bda54293ccec73c6dc01e862569f2cebcd89e4df1e4bd32->enter($__internal_80c4db4ecda8844d6bda54293ccec73c6dc01e862569f2cebcd89e4df1e4bd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f2ddc8593b81a70b41e7cfed1a6f31cd784517beb1c511df26677cb8ea32ba73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ddc8593b81a70b41e7cfed1a6f31cd784517beb1c511df26677cb8ea32ba73->enter($__internal_f2ddc8593b81a70b41e7cfed1a6f31cd784517beb1c511df26677cb8ea32ba73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f2ddc8593b81a70b41e7cfed1a6f31cd784517beb1c511df26677cb8ea32ba73->leave($__internal_f2ddc8593b81a70b41e7cfed1a6f31cd784517beb1c511df26677cb8ea32ba73_prof);

        
        $__internal_80c4db4ecda8844d6bda54293ccec73c6dc01e862569f2cebcd89e4df1e4bd32->leave($__internal_80c4db4ecda8844d6bda54293ccec73c6dc01e862569f2cebcd89e4df1e4bd32_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef320741fc054381c0b689db2a7ca921051c527ec070b0c6d0607826de78f844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef320741fc054381c0b689db2a7ca921051c527ec070b0c6d0607826de78f844->enter($__internal_ef320741fc054381c0b689db2a7ca921051c527ec070b0c6d0607826de78f844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_566d9dc374b05ace8ffef42c1d1b6c5ac6a3a88635ee9852468a26d7b4115a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566d9dc374b05ace8ffef42c1d1b6c5ac6a3a88635ee9852468a26d7b4115a26->enter($__internal_566d9dc374b05ace8ffef42c1d1b6c5ac6a3a88635ee9852468a26d7b4115a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_566d9dc374b05ace8ffef42c1d1b6c5ac6a3a88635ee9852468a26d7b4115a26->leave($__internal_566d9dc374b05ace8ffef42c1d1b6c5ac6a3a88635ee9852468a26d7b4115a26_prof);

        
        $__internal_ef320741fc054381c0b689db2a7ca921051c527ec070b0c6d0607826de78f844->leave($__internal_ef320741fc054381c0b689db2a7ca921051c527ec070b0c6d0607826de78f844_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc496dad84cc30f828722a6886608d1b48a84732c920229c4618c342597ca72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc496dad84cc30f828722a6886608d1b48a84732c920229c4618c342597ca72b->enter($__internal_bc496dad84cc30f828722a6886608d1b48a84732c920229c4618c342597ca72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c5ee4538ef4f18c72394a57b3c87ad17132b1e8e52077bed0fb65e84f7e6b554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ee4538ef4f18c72394a57b3c87ad17132b1e8e52077bed0fb65e84f7e6b554->enter($__internal_c5ee4538ef4f18c72394a57b3c87ad17132b1e8e52077bed0fb65e84f7e6b554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c5ee4538ef4f18c72394a57b3c87ad17132b1e8e52077bed0fb65e84f7e6b554->leave($__internal_c5ee4538ef4f18c72394a57b3c87ad17132b1e8e52077bed0fb65e84f7e6b554_prof);

        
        $__internal_bc496dad84cc30f828722a6886608d1b48a84732c920229c4618c342597ca72b->leave($__internal_bc496dad84cc30f828722a6886608d1b48a84732c920229c4618c342597ca72b_prof);

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
", "base.html.twig", "/Users/digital/Documents/showroom/app/Resources/views/base.html.twig");
    }
}
