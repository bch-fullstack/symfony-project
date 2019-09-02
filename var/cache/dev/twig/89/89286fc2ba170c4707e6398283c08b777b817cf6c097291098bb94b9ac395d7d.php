<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7db9032a528ac897a0aa9513cc3133c8d4ad9f605b092b4c3753ff5351bfb33d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1575689c81021dfa21b85f886a3fd0bfd46e5bbb7f2c619342552399173cccde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1575689c81021dfa21b85f886a3fd0bfd46e5bbb7f2c619342552399173cccde->enter($__internal_1575689c81021dfa21b85f886a3fd0bfd46e5bbb7f2c619342552399173cccde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_74e77b233ca8e876a014c127497802234abba24a6e6aaabc1f4c47a032380ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e77b233ca8e876a014c127497802234abba24a6e6aaabc1f4c47a032380ed1->enter($__internal_74e77b233ca8e876a014c127497802234abba24a6e6aaabc1f4c47a032380ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1575689c81021dfa21b85f886a3fd0bfd46e5bbb7f2c619342552399173cccde->leave($__internal_1575689c81021dfa21b85f886a3fd0bfd46e5bbb7f2c619342552399173cccde_prof);

        
        $__internal_74e77b233ca8e876a014c127497802234abba24a6e6aaabc1f4c47a032380ed1->leave($__internal_74e77b233ca8e876a014c127497802234abba24a6e6aaabc1f4c47a032380ed1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b44d2a785d1bb827cc486b3e080d59b034db63d9f1cb875bc5162a8861d9a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b44d2a785d1bb827cc486b3e080d59b034db63d9f1cb875bc5162a8861d9a43->enter($__internal_8b44d2a785d1bb827cc486b3e080d59b034db63d9f1cb875bc5162a8861d9a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d25418a39cfdc8f5f33d0a91762389f79b900db87a6ad1b430ce48b8fad2e0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25418a39cfdc8f5f33d0a91762389f79b900db87a6ad1b430ce48b8fad2e0d9->enter($__internal_d25418a39cfdc8f5f33d0a91762389f79b900db87a6ad1b430ce48b8fad2e0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d25418a39cfdc8f5f33d0a91762389f79b900db87a6ad1b430ce48b8fad2e0d9->leave($__internal_d25418a39cfdc8f5f33d0a91762389f79b900db87a6ad1b430ce48b8fad2e0d9_prof);

        
        $__internal_8b44d2a785d1bb827cc486b3e080d59b034db63d9f1cb875bc5162a8861d9a43->leave($__internal_8b44d2a785d1bb827cc486b3e080d59b034db63d9f1cb875bc5162a8861d9a43_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21467e348a48af75a619ab664e04345f53dbc5931c19db2a284f358fc6d5f87a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21467e348a48af75a619ab664e04345f53dbc5931c19db2a284f358fc6d5f87a->enter($__internal_21467e348a48af75a619ab664e04345f53dbc5931c19db2a284f358fc6d5f87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b36fe5de4cad0427dfdd652aa585299546744265c29bedd2ef8bdcaf613b3ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36fe5de4cad0427dfdd652aa585299546744265c29bedd2ef8bdcaf613b3ef0->enter($__internal_b36fe5de4cad0427dfdd652aa585299546744265c29bedd2ef8bdcaf613b3ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b36fe5de4cad0427dfdd652aa585299546744265c29bedd2ef8bdcaf613b3ef0->leave($__internal_b36fe5de4cad0427dfdd652aa585299546744265c29bedd2ef8bdcaf613b3ef0_prof);

        
        $__internal_21467e348a48af75a619ab664e04345f53dbc5931c19db2a284f358fc6d5f87a->leave($__internal_21467e348a48af75a619ab664e04345f53dbc5931c19db2a284f358fc6d5f87a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2db61b0e06b29c4f550c72989e4f50bd9422270c7c04107e5ab6abf6007ef1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2db61b0e06b29c4f550c72989e4f50bd9422270c7c04107e5ab6abf6007ef1c->enter($__internal_e2db61b0e06b29c4f550c72989e4f50bd9422270c7c04107e5ab6abf6007ef1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b977f9b14017561759e0bd1f49486f05415807aa384e662a84fbd53b6b8501c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b977f9b14017561759e0bd1f49486f05415807aa384e662a84fbd53b6b8501c4->enter($__internal_b977f9b14017561759e0bd1f49486f05415807aa384e662a84fbd53b6b8501c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b977f9b14017561759e0bd1f49486f05415807aa384e662a84fbd53b6b8501c4->leave($__internal_b977f9b14017561759e0bd1f49486f05415807aa384e662a84fbd53b6b8501c4_prof);

        
        $__internal_e2db61b0e06b29c4f550c72989e4f50bd9422270c7c04107e5ab6abf6007ef1c->leave($__internal_e2db61b0e06b29c4f550c72989e4f50bd9422270c7c04107e5ab6abf6007ef1c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
