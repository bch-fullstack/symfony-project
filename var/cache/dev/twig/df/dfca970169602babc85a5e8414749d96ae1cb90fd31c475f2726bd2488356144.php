<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5c9ea249044f0c04031d0d546035742f2da0baa58e900556385475f88ff8646c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aad047206df6534d56dfdd6afcaec5dea559334fce0e694af5a067bda32a0315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad047206df6534d56dfdd6afcaec5dea559334fce0e694af5a067bda32a0315->enter($__internal_aad047206df6534d56dfdd6afcaec5dea559334fce0e694af5a067bda32a0315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_0ab8763694031dcf11f9cce3e0f46c47f1160edc9e57cf4fa8461b4dca5e0cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab8763694031dcf11f9cce3e0f46c47f1160edc9e57cf4fa8461b4dca5e0cad->enter($__internal_0ab8763694031dcf11f9cce3e0f46c47f1160edc9e57cf4fa8461b4dca5e0cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_aad047206df6534d56dfdd6afcaec5dea559334fce0e694af5a067bda32a0315->leave($__internal_aad047206df6534d56dfdd6afcaec5dea559334fce0e694af5a067bda32a0315_prof);

        
        $__internal_0ab8763694031dcf11f9cce3e0f46c47f1160edc9e57cf4fa8461b4dca5e0cad->leave($__internal_0ab8763694031dcf11f9cce3e0f46c47f1160edc9e57cf4fa8461b4dca5e0cad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
