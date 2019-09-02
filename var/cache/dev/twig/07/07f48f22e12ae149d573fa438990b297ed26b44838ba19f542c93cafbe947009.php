<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_6c2a44b87bf9f49fbc0b4be3750016bd380ada46eef127a512ee3808f984a286 extends Twig_Template
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
        $__internal_562de7f3e54101217cdf85077ac74ae81d61c4c2cbfe76cbd0d2c0e63a49f369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562de7f3e54101217cdf85077ac74ae81d61c4c2cbfe76cbd0d2c0e63a49f369->enter($__internal_562de7f3e54101217cdf85077ac74ae81d61c4c2cbfe76cbd0d2c0e63a49f369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_ce62ac3332fc471faa35ab14732299458fe8eb93b988d21655fbdd83c2acb5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce62ac3332fc471faa35ab14732299458fe8eb93b988d21655fbdd83c2acb5e9->enter($__internal_ce62ac3332fc471faa35ab14732299458fe8eb93b988d21655fbdd83c2acb5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_562de7f3e54101217cdf85077ac74ae81d61c4c2cbfe76cbd0d2c0e63a49f369->leave($__internal_562de7f3e54101217cdf85077ac74ae81d61c4c2cbfe76cbd0d2c0e63a49f369_prof);

        
        $__internal_ce62ac3332fc471faa35ab14732299458fe8eb93b988d21655fbdd83c2acb5e9->leave($__internal_ce62ac3332fc471faa35ab14732299458fe8eb93b988d21655fbdd83c2acb5e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
