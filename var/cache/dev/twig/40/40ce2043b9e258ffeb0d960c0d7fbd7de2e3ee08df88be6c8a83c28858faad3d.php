<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_6a82ebb9df3d1178c46a8605184275b2108fd92cf62ba8a70ec528bffce47e18 extends Twig_Template
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
        $__internal_25a047a38f4f372ee37099c7cc36de8b9bae1da4b5aeed5eecc6ad96486cfb53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a047a38f4f372ee37099c7cc36de8b9bae1da4b5aeed5eecc6ad96486cfb53->enter($__internal_25a047a38f4f372ee37099c7cc36de8b9bae1da4b5aeed5eecc6ad96486cfb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_befa0f4dcf745ecb5924a2573dffd65a9f80d8de165e4a154cdfdde650053ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_befa0f4dcf745ecb5924a2573dffd65a9f80d8de165e4a154cdfdde650053ec6->enter($__internal_befa0f4dcf745ecb5924a2573dffd65a9f80d8de165e4a154cdfdde650053ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_25a047a38f4f372ee37099c7cc36de8b9bae1da4b5aeed5eecc6ad96486cfb53->leave($__internal_25a047a38f4f372ee37099c7cc36de8b9bae1da4b5aeed5eecc6ad96486cfb53_prof);

        
        $__internal_befa0f4dcf745ecb5924a2573dffd65a9f80d8de165e4a154cdfdde650053ec6->leave($__internal_befa0f4dcf745ecb5924a2573dffd65a9f80d8de165e4a154cdfdde650053ec6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
