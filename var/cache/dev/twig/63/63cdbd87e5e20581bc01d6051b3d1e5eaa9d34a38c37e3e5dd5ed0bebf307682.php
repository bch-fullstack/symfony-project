<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2876ca16d5c07b86cb194c73514e1def2ed1e7f254770bedd482dd06f0e666ab extends Twig_Template
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
        $__internal_f7862896dc5dce23535ac6c833b261d226cf82d87f19d99a7ee650676a53d4b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7862896dc5dce23535ac6c833b261d226cf82d87f19d99a7ee650676a53d4b5->enter($__internal_f7862896dc5dce23535ac6c833b261d226cf82d87f19d99a7ee650676a53d4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_5c7dc301901fce356013e75edfb6189d53983e55b1897e33abe7b57d1bfc0d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7dc301901fce356013e75edfb6189d53983e55b1897e33abe7b57d1bfc0d15->enter($__internal_5c7dc301901fce356013e75edfb6189d53983e55b1897e33abe7b57d1bfc0d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f7862896dc5dce23535ac6c833b261d226cf82d87f19d99a7ee650676a53d4b5->leave($__internal_f7862896dc5dce23535ac6c833b261d226cf82d87f19d99a7ee650676a53d4b5_prof);

        
        $__internal_5c7dc301901fce356013e75edfb6189d53983e55b1897e33abe7b57d1bfc0d15->leave($__internal_5c7dc301901fce356013e75edfb6189d53983e55b1897e33abe7b57d1bfc0d15_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
