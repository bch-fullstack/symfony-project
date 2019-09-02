<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_111cad5bc22582befb62fbb9e2be65f365aeb260496cf9bc6a6f79c66b67624f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efa60f79bc24ce1fbe79f38e7307f27d302c41ab07fd05052f5fc483c9ac8565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa60f79bc24ce1fbe79f38e7307f27d302c41ab07fd05052f5fc483c9ac8565->enter($__internal_efa60f79bc24ce1fbe79f38e7307f27d302c41ab07fd05052f5fc483c9ac8565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_f9757727d4d42799844698087ad079ab60287889220a531934e4d54e52119b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9757727d4d42799844698087ad079ab60287889220a531934e4d54e52119b17->enter($__internal_f9757727d4d42799844698087ad079ab60287889220a531934e4d54e52119b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_efa60f79bc24ce1fbe79f38e7307f27d302c41ab07fd05052f5fc483c9ac8565->leave($__internal_efa60f79bc24ce1fbe79f38e7307f27d302c41ab07fd05052f5fc483c9ac8565_prof);

        
        $__internal_f9757727d4d42799844698087ad079ab60287889220a531934e4d54e52119b17->leave($__internal_f9757727d4d42799844698087ad079ab60287889220a531934e4d54e52119b17_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae5016ea650be80555814f4d359ce2ab5c73089ae4dd85c2374660e1681c5f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5016ea650be80555814f4d359ce2ab5c73089ae4dd85c2374660e1681c5f06->enter($__internal_ae5016ea650be80555814f4d359ce2ab5c73089ae4dd85c2374660e1681c5f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_53d9791a9f9a7c49947b1ea4dd96a7b1680ba20d94c30fc1d5d09bc8cfcc931d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d9791a9f9a7c49947b1ea4dd96a7b1680ba20d94c30fc1d5d09bc8cfcc931d->enter($__internal_53d9791a9f9a7c49947b1ea4dd96a7b1680ba20d94c30fc1d5d09bc8cfcc931d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_53d9791a9f9a7c49947b1ea4dd96a7b1680ba20d94c30fc1d5d09bc8cfcc931d->leave($__internal_53d9791a9f9a7c49947b1ea4dd96a7b1680ba20d94c30fc1d5d09bc8cfcc931d_prof);

        
        $__internal_ae5016ea650be80555814f4d359ce2ab5c73089ae4dd85c2374660e1681c5f06->leave($__internal_ae5016ea650be80555814f4d359ce2ab5c73089ae4dd85c2374660e1681c5f06_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
