<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_b83d5b2f40169e59f48efdd2f9af27908d818c858a1188697760897519592de7 extends Twig_Template
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
        $__internal_4198b140e0cc923230c7ff5c76d24ea7d3edac381a220441fc2afcf2264c5e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4198b140e0cc923230c7ff5c76d24ea7d3edac381a220441fc2afcf2264c5e01->enter($__internal_4198b140e0cc923230c7ff5c76d24ea7d3edac381a220441fc2afcf2264c5e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_70b9924db9c774c530dda20bec5f301eb392d9cd94c0558aa4e940b074182e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b9924db9c774c530dda20bec5f301eb392d9cd94c0558aa4e940b074182e26->enter($__internal_70b9924db9c774c530dda20bec5f301eb392d9cd94c0558aa4e940b074182e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_4198b140e0cc923230c7ff5c76d24ea7d3edac381a220441fc2afcf2264c5e01->leave($__internal_4198b140e0cc923230c7ff5c76d24ea7d3edac381a220441fc2afcf2264c5e01_prof);

        
        $__internal_70b9924db9c774c530dda20bec5f301eb392d9cd94c0558aa4e940b074182e26->leave($__internal_70b9924db9c774c530dda20bec5f301eb392d9cd94c0558aa4e940b074182e26_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
