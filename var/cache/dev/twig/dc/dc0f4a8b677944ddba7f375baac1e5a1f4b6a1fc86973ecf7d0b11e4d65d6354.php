<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4d4feffea5edcccc51cda82847fdd83d69a97886366809a7595d4698e3f2af24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cda1fa89fdf31861a8c603f13462f7d17fc78c69c0e4525ddb53df8f9784af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cda1fa89fdf31861a8c603f13462f7d17fc78c69c0e4525ddb53df8f9784af7->enter($__internal_2cda1fa89fdf31861a8c603f13462f7d17fc78c69c0e4525ddb53df8f9784af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3f173931cffbd4b69f2c86ae70ddf84b62e20dc8a3e2c714cf3fe494bfbf7253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f173931cffbd4b69f2c86ae70ddf84b62e20dc8a3e2c714cf3fe494bfbf7253->enter($__internal_3f173931cffbd4b69f2c86ae70ddf84b62e20dc8a3e2c714cf3fe494bfbf7253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cda1fa89fdf31861a8c603f13462f7d17fc78c69c0e4525ddb53df8f9784af7->leave($__internal_2cda1fa89fdf31861a8c603f13462f7d17fc78c69c0e4525ddb53df8f9784af7_prof);

        
        $__internal_3f173931cffbd4b69f2c86ae70ddf84b62e20dc8a3e2c714cf3fe494bfbf7253->leave($__internal_3f173931cffbd4b69f2c86ae70ddf84b62e20dc8a3e2c714cf3fe494bfbf7253_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4fbb1e15a4c3d8a01798203aed496ef2c17e5ab60c6ffe7e6269c47d90d898af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbb1e15a4c3d8a01798203aed496ef2c17e5ab60c6ffe7e6269c47d90d898af->enter($__internal_4fbb1e15a4c3d8a01798203aed496ef2c17e5ab60c6ffe7e6269c47d90d898af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6bf023f9931812677f8d654fbd13c5165dd0abf2ff291001212af99849d5aeb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf023f9931812677f8d654fbd13c5165dd0abf2ff291001212af99849d5aeb4->enter($__internal_6bf023f9931812677f8d654fbd13c5165dd0abf2ff291001212af99849d5aeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6bf023f9931812677f8d654fbd13c5165dd0abf2ff291001212af99849d5aeb4->leave($__internal_6bf023f9931812677f8d654fbd13c5165dd0abf2ff291001212af99849d5aeb4_prof);

        
        $__internal_4fbb1e15a4c3d8a01798203aed496ef2c17e5ab60c6ffe7e6269c47d90d898af->leave($__internal_4fbb1e15a4c3d8a01798203aed496ef2c17e5ab60c6ffe7e6269c47d90d898af_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0780985b6984f9a0e38d61cf76487dcc8c524de842f7c41dab564e9c3e6c160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0780985b6984f9a0e38d61cf76487dcc8c524de842f7c41dab564e9c3e6c160->enter($__internal_b0780985b6984f9a0e38d61cf76487dcc8c524de842f7c41dab564e9c3e6c160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7f6b3a5d0ac1533a41d297ea4f3e9e40d7af198cf6d578f5658654ee9c5435bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6b3a5d0ac1533a41d297ea4f3e9e40d7af198cf6d578f5658654ee9c5435bc->enter($__internal_7f6b3a5d0ac1533a41d297ea4f3e9e40d7af198cf6d578f5658654ee9c5435bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f6b3a5d0ac1533a41d297ea4f3e9e40d7af198cf6d578f5658654ee9c5435bc->leave($__internal_7f6b3a5d0ac1533a41d297ea4f3e9e40d7af198cf6d578f5658654ee9c5435bc_prof);

        
        $__internal_b0780985b6984f9a0e38d61cf76487dcc8c524de842f7c41dab564e9c3e6c160->leave($__internal_b0780985b6984f9a0e38d61cf76487dcc8c524de842f7c41dab564e9c3e6c160_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0367ebbca4dc5565ddbb4673ade581bc7aeced51498fc4266536272578a65b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0367ebbca4dc5565ddbb4673ade581bc7aeced51498fc4266536272578a65b81->enter($__internal_0367ebbca4dc5565ddbb4673ade581bc7aeced51498fc4266536272578a65b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7865ae2470ccf923ce2dbe728e7be9da182334bf952afc47bbfb43fe84e2adb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7865ae2470ccf923ce2dbe728e7be9da182334bf952afc47bbfb43fe84e2adb1->enter($__internal_7865ae2470ccf923ce2dbe728e7be9da182334bf952afc47bbfb43fe84e2adb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7865ae2470ccf923ce2dbe728e7be9da182334bf952afc47bbfb43fe84e2adb1->leave($__internal_7865ae2470ccf923ce2dbe728e7be9da182334bf952afc47bbfb43fe84e2adb1_prof);

        
        $__internal_0367ebbca4dc5565ddbb4673ade581bc7aeced51498fc4266536272578a65b81->leave($__internal_0367ebbca4dc5565ddbb4673ade581bc7aeced51498fc4266536272578a65b81_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
