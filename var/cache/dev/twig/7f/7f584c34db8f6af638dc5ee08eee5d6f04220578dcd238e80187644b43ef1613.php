<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7a6fdc327dc8747a13a5413a15b34c103ab647e65b3b9f71cd948e3de5a6b772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba0d66349b9f26fa26e0f8b8f986413e4a9ef4c2b3e30c7e940642bc9f15f02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0d66349b9f26fa26e0f8b8f986413e4a9ef4c2b3e30c7e940642bc9f15f02b->enter($__internal_ba0d66349b9f26fa26e0f8b8f986413e4a9ef4c2b3e30c7e940642bc9f15f02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_2d84eabe22787b2fe640e7abbdb77bf9473b4995056b69257f63ec1168719300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d84eabe22787b2fe640e7abbdb77bf9473b4995056b69257f63ec1168719300->enter($__internal_2d84eabe22787b2fe640e7abbdb77bf9473b4995056b69257f63ec1168719300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba0d66349b9f26fa26e0f8b8f986413e4a9ef4c2b3e30c7e940642bc9f15f02b->leave($__internal_ba0d66349b9f26fa26e0f8b8f986413e4a9ef4c2b3e30c7e940642bc9f15f02b_prof);

        
        $__internal_2d84eabe22787b2fe640e7abbdb77bf9473b4995056b69257f63ec1168719300->leave($__internal_2d84eabe22787b2fe640e7abbdb77bf9473b4995056b69257f63ec1168719300_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ded681b96946bea3780c52616c0c529b107426d5fc434bb8963ac278048e0d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded681b96946bea3780c52616c0c529b107426d5fc434bb8963ac278048e0d89->enter($__internal_ded681b96946bea3780c52616c0c529b107426d5fc434bb8963ac278048e0d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e47bdf0baa4fc86b02ae08c6f9865fcf374bcfbcedbc41b4c0db74f5124bfc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47bdf0baa4fc86b02ae08c6f9865fcf374bcfbcedbc41b4c0db74f5124bfc18->enter($__internal_e47bdf0baa4fc86b02ae08c6f9865fcf374bcfbcedbc41b4c0db74f5124bfc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e47bdf0baa4fc86b02ae08c6f9865fcf374bcfbcedbc41b4c0db74f5124bfc18->leave($__internal_e47bdf0baa4fc86b02ae08c6f9865fcf374bcfbcedbc41b4c0db74f5124bfc18_prof);

        
        $__internal_ded681b96946bea3780c52616c0c529b107426d5fc434bb8963ac278048e0d89->leave($__internal_ded681b96946bea3780c52616c0c529b107426d5fc434bb8963ac278048e0d89_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3edc6d4f9e2b43303423a98f5b7e033b4fa22a9e5ae97bab84dd226dc787c71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edc6d4f9e2b43303423a98f5b7e033b4fa22a9e5ae97bab84dd226dc787c71d->enter($__internal_3edc6d4f9e2b43303423a98f5b7e033b4fa22a9e5ae97bab84dd226dc787c71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_816b0dbbfc902df9ec094a7f60dc90e22adc0efef1ffb5249baa4a96663ae377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816b0dbbfc902df9ec094a7f60dc90e22adc0efef1ffb5249baa4a96663ae377->enter($__internal_816b0dbbfc902df9ec094a7f60dc90e22adc0efef1ffb5249baa4a96663ae377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_816b0dbbfc902df9ec094a7f60dc90e22adc0efef1ffb5249baa4a96663ae377->leave($__internal_816b0dbbfc902df9ec094a7f60dc90e22adc0efef1ffb5249baa4a96663ae377_prof);

        
        $__internal_3edc6d4f9e2b43303423a98f5b7e033b4fa22a9e5ae97bab84dd226dc787c71d->leave($__internal_3edc6d4f9e2b43303423a98f5b7e033b4fa22a9e5ae97bab84dd226dc787c71d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
