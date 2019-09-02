<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1014ffb02c9983344996f6b1371c2163a75e9013959f3b811a136441d8153f72 extends Twig_Template
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
        $__internal_4ef35a6ed70000118b40dcf0d09f6a1fd60dd418c8dbf01105bc289715f7ccb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef35a6ed70000118b40dcf0d09f6a1fd60dd418c8dbf01105bc289715f7ccb7->enter($__internal_4ef35a6ed70000118b40dcf0d09f6a1fd60dd418c8dbf01105bc289715f7ccb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_74c03b249482cdc5aafd27f94ca8128e6d41ad9f08d8a90bc39aa5b880e9831f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c03b249482cdc5aafd27f94ca8128e6d41ad9f08d8a90bc39aa5b880e9831f->enter($__internal_74c03b249482cdc5aafd27f94ca8128e6d41ad9f08d8a90bc39aa5b880e9831f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_4ef35a6ed70000118b40dcf0d09f6a1fd60dd418c8dbf01105bc289715f7ccb7->leave($__internal_4ef35a6ed70000118b40dcf0d09f6a1fd60dd418c8dbf01105bc289715f7ccb7_prof);

        
        $__internal_74c03b249482cdc5aafd27f94ca8128e6d41ad9f08d8a90bc39aa5b880e9831f->leave($__internal_74c03b249482cdc5aafd27f94ca8128e6d41ad9f08d8a90bc39aa5b880e9831f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
