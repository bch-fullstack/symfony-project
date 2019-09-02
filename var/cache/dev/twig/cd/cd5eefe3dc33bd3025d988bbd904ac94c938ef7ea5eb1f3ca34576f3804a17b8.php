<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_db569b3f96c5c2488946217496f960117d133363ab56acf6bdd35d230ce8f6b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb866fe3cbc09826590aa1b258cdfd943ba37c277d29aa431e06d3fdd06a14f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb866fe3cbc09826590aa1b258cdfd943ba37c277d29aa431e06d3fdd06a14f7->enter($__internal_eb866fe3cbc09826590aa1b258cdfd943ba37c277d29aa431e06d3fdd06a14f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_7e9a7890ac32830acb6036c10e7fca65861052e0906f6841b739568fea50d03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9a7890ac32830acb6036c10e7fca65861052e0906f6841b739568fea50d03f->enter($__internal_7e9a7890ac32830acb6036c10e7fca65861052e0906f6841b739568fea50d03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb866fe3cbc09826590aa1b258cdfd943ba37c277d29aa431e06d3fdd06a14f7->leave($__internal_eb866fe3cbc09826590aa1b258cdfd943ba37c277d29aa431e06d3fdd06a14f7_prof);

        
        $__internal_7e9a7890ac32830acb6036c10e7fca65861052e0906f6841b739568fea50d03f->leave($__internal_7e9a7890ac32830acb6036c10e7fca65861052e0906f6841b739568fea50d03f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7043d60c1e69394dd5d1bd3876f9a712b5d382c7bea49556ccd06ed5dc150cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7043d60c1e69394dd5d1bd3876f9a712b5d382c7bea49556ccd06ed5dc150cfe->enter($__internal_7043d60c1e69394dd5d1bd3876f9a712b5d382c7bea49556ccd06ed5dc150cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_075b4eaaf490d9af1ccb33a593b9689fb2c5fc2e6577c039b8c98965d49df606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075b4eaaf490d9af1ccb33a593b9689fb2c5fc2e6577c039b8c98965d49df606->enter($__internal_075b4eaaf490d9af1ccb33a593b9689fb2c5fc2e6577c039b8c98965d49df606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_075b4eaaf490d9af1ccb33a593b9689fb2c5fc2e6577c039b8c98965d49df606->leave($__internal_075b4eaaf490d9af1ccb33a593b9689fb2c5fc2e6577c039b8c98965d49df606_prof);

        
        $__internal_7043d60c1e69394dd5d1bd3876f9a712b5d382c7bea49556ccd06ed5dc150cfe->leave($__internal_7043d60c1e69394dd5d1bd3876f9a712b5d382c7bea49556ccd06ed5dc150cfe_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e749fa9fcbe8898fe654d8f44823c5c0470e3e8eef6722091234a1c5efb946d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e749fa9fcbe8898fe654d8f44823c5c0470e3e8eef6722091234a1c5efb946d->enter($__internal_1e749fa9fcbe8898fe654d8f44823c5c0470e3e8eef6722091234a1c5efb946d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_487580f1acbfd7194387edd03347de1bf6fa6052b52c0b662da3aa1340eb9701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487580f1acbfd7194387edd03347de1bf6fa6052b52c0b662da3aa1340eb9701->enter($__internal_487580f1acbfd7194387edd03347de1bf6fa6052b52c0b662da3aa1340eb9701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_487580f1acbfd7194387edd03347de1bf6fa6052b52c0b662da3aa1340eb9701->leave($__internal_487580f1acbfd7194387edd03347de1bf6fa6052b52c0b662da3aa1340eb9701_prof);

        
        $__internal_1e749fa9fcbe8898fe654d8f44823c5c0470e3e8eef6722091234a1c5efb946d->leave($__internal_1e749fa9fcbe8898fe654d8f44823c5c0470e3e8eef6722091234a1c5efb946d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
