<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_08246d6fc50b9cb2f66a1e754433bcd9d9ae852716012dcf2b11d6975c1c9907 extends Twig_Template
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
        $__internal_8a32fef2b783bfc8e227aa23f54a863f4c9b74e8d119983118deb98e064b3fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a32fef2b783bfc8e227aa23f54a863f4c9b74e8d119983118deb98e064b3fa5->enter($__internal_8a32fef2b783bfc8e227aa23f54a863f4c9b74e8d119983118deb98e064b3fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_2d7367d1a87a4f672262e26b7efeaa834c5916257451beec0ddbd878b03a062d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7367d1a87a4f672262e26b7efeaa834c5916257451beec0ddbd878b03a062d->enter($__internal_2d7367d1a87a4f672262e26b7efeaa834c5916257451beec0ddbd878b03a062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8a32fef2b783bfc8e227aa23f54a863f4c9b74e8d119983118deb98e064b3fa5->leave($__internal_8a32fef2b783bfc8e227aa23f54a863f4c9b74e8d119983118deb98e064b3fa5_prof);

        
        $__internal_2d7367d1a87a4f672262e26b7efeaa834c5916257451beec0ddbd878b03a062d->leave($__internal_2d7367d1a87a4f672262e26b7efeaa834c5916257451beec0ddbd878b03a062d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
