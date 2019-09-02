<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_44bf8ebaa60aa3923717b0613d579fb96e739e4724e4bed73bdd8897a5366928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92bb4ed715c96deec6ef5f94e3906fac089a60b156c5360cbc8d88ccda6beb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92bb4ed715c96deec6ef5f94e3906fac089a60b156c5360cbc8d88ccda6beb77->enter($__internal_92bb4ed715c96deec6ef5f94e3906fac089a60b156c5360cbc8d88ccda6beb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_1adb90421ba804306e37e1c4386702ae24fe18b2a499740e33db7cfbee9e3f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1adb90421ba804306e37e1c4386702ae24fe18b2a499740e33db7cfbee9e3f39->enter($__internal_1adb90421ba804306e37e1c4386702ae24fe18b2a499740e33db7cfbee9e3f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92bb4ed715c96deec6ef5f94e3906fac089a60b156c5360cbc8d88ccda6beb77->leave($__internal_92bb4ed715c96deec6ef5f94e3906fac089a60b156c5360cbc8d88ccda6beb77_prof);

        
        $__internal_1adb90421ba804306e37e1c4386702ae24fe18b2a499740e33db7cfbee9e3f39->leave($__internal_1adb90421ba804306e37e1c4386702ae24fe18b2a499740e33db7cfbee9e3f39_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f15585564d1529e1fb3e7d66d9eee767aeabb702103f97a74f35e050ebfbd2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15585564d1529e1fb3e7d66d9eee767aeabb702103f97a74f35e050ebfbd2e0->enter($__internal_f15585564d1529e1fb3e7d66d9eee767aeabb702103f97a74f35e050ebfbd2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d81afc4c26c8a8af6af29ae69b7863d601c4528713c1204e213210ac946325ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81afc4c26c8a8af6af29ae69b7863d601c4528713c1204e213210ac946325ae->enter($__internal_d81afc4c26c8a8af6af29ae69b7863d601c4528713c1204e213210ac946325ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_d81afc4c26c8a8af6af29ae69b7863d601c4528713c1204e213210ac946325ae->leave($__internal_d81afc4c26c8a8af6af29ae69b7863d601c4528713c1204e213210ac946325ae_prof);

        
        $__internal_f15585564d1529e1fb3e7d66d9eee767aeabb702103f97a74f35e050ebfbd2e0->leave($__internal_f15585564d1529e1fb3e7d66d9eee767aeabb702103f97a74f35e050ebfbd2e0_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eed4b9438fa52d4b7ee2bdc166a29f89da4ac88e181f28c990b0f49d62272f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed4b9438fa52d4b7ee2bdc166a29f89da4ac88e181f28c990b0f49d62272f66->enter($__internal_eed4b9438fa52d4b7ee2bdc166a29f89da4ac88e181f28c990b0f49d62272f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1aec7d117196cf5ffb028415efa0c28abe09c28614dd1f129aa3d746b3a29fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aec7d117196cf5ffb028415efa0c28abe09c28614dd1f129aa3d746b3a29fe3->enter($__internal_1aec7d117196cf5ffb028415efa0c28abe09c28614dd1f129aa3d746b3a29fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1aec7d117196cf5ffb028415efa0c28abe09c28614dd1f129aa3d746b3a29fe3->leave($__internal_1aec7d117196cf5ffb028415efa0c28abe09c28614dd1f129aa3d746b3a29fe3_prof);

        
        $__internal_eed4b9438fa52d4b7ee2bdc166a29f89da4ac88e181f28c990b0f49d62272f66->leave($__internal_eed4b9438fa52d4b7ee2bdc166a29f89da4ac88e181f28c990b0f49d62272f66_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
