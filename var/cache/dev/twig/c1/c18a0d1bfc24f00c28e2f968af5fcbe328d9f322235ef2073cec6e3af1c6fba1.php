<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b4ab0f48e35d788846c09bea88b0a9bbc4773e662c28c735c4f7216f52d4696b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_fefdd721674a614c19fc2d1ae8a71df84c9f07d50a9519d135694d11a7231b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fefdd721674a614c19fc2d1ae8a71df84c9f07d50a9519d135694d11a7231b60->enter($__internal_fefdd721674a614c19fc2d1ae8a71df84c9f07d50a9519d135694d11a7231b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_73f1b63e2be31864dbe9c8f3247d13d598ff99d0931b737125ff5121cd1085bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f1b63e2be31864dbe9c8f3247d13d598ff99d0931b737125ff5121cd1085bf->enter($__internal_73f1b63e2be31864dbe9c8f3247d13d598ff99d0931b737125ff5121cd1085bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fefdd721674a614c19fc2d1ae8a71df84c9f07d50a9519d135694d11a7231b60->leave($__internal_fefdd721674a614c19fc2d1ae8a71df84c9f07d50a9519d135694d11a7231b60_prof);

        
        $__internal_73f1b63e2be31864dbe9c8f3247d13d598ff99d0931b737125ff5121cd1085bf->leave($__internal_73f1b63e2be31864dbe9c8f3247d13d598ff99d0931b737125ff5121cd1085bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aafeb2f1aa3ab0c5fa91e0e993670df561f9b33657061ec3c737bd3648229245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aafeb2f1aa3ab0c5fa91e0e993670df561f9b33657061ec3c737bd3648229245->enter($__internal_aafeb2f1aa3ab0c5fa91e0e993670df561f9b33657061ec3c737bd3648229245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2d8b10ac670c1255ba44ddfa7260655280c76dca4a4202202327029e2bfc1d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8b10ac670c1255ba44ddfa7260655280c76dca4a4202202327029e2bfc1d2d->enter($__internal_2d8b10ac670c1255ba44ddfa7260655280c76dca4a4202202327029e2bfc1d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2d8b10ac670c1255ba44ddfa7260655280c76dca4a4202202327029e2bfc1d2d->leave($__internal_2d8b10ac670c1255ba44ddfa7260655280c76dca4a4202202327029e2bfc1d2d_prof);

        
        $__internal_aafeb2f1aa3ab0c5fa91e0e993670df561f9b33657061ec3c737bd3648229245->leave($__internal_aafeb2f1aa3ab0c5fa91e0e993670df561f9b33657061ec3c737bd3648229245_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1b221e76d6c14c127cc5ac36d6e11730a61637bba83e2c123029b553ec57b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b221e76d6c14c127cc5ac36d6e11730a61637bba83e2c123029b553ec57b44->enter($__internal_c1b221e76d6c14c127cc5ac36d6e11730a61637bba83e2c123029b553ec57b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_483d6881ee80104285f888ae1a62fbd717f26db3ed559b54e346489767ea5676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483d6881ee80104285f888ae1a62fbd717f26db3ed559b54e346489767ea5676->enter($__internal_483d6881ee80104285f888ae1a62fbd717f26db3ed559b54e346489767ea5676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_483d6881ee80104285f888ae1a62fbd717f26db3ed559b54e346489767ea5676->leave($__internal_483d6881ee80104285f888ae1a62fbd717f26db3ed559b54e346489767ea5676_prof);

        
        $__internal_c1b221e76d6c14c127cc5ac36d6e11730a61637bba83e2c123029b553ec57b44->leave($__internal_c1b221e76d6c14c127cc5ac36d6e11730a61637bba83e2c123029b553ec57b44_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b42d0e4e804eb29a1c4ef2242c18d9335cbd186a7c53fba4ba5295c1fe661c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b42d0e4e804eb29a1c4ef2242c18d9335cbd186a7c53fba4ba5295c1fe661c5->enter($__internal_7b42d0e4e804eb29a1c4ef2242c18d9335cbd186a7c53fba4ba5295c1fe661c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b3481fc8385099742be399168edcdb5683d08955930118074f3108aecde08d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3481fc8385099742be399168edcdb5683d08955930118074f3108aecde08d4->enter($__internal_3b3481fc8385099742be399168edcdb5683d08955930118074f3108aecde08d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3b3481fc8385099742be399168edcdb5683d08955930118074f3108aecde08d4->leave($__internal_3b3481fc8385099742be399168edcdb5683d08955930118074f3108aecde08d4_prof);

        
        $__internal_7b42d0e4e804eb29a1c4ef2242c18d9335cbd186a7c53fba4ba5295c1fe661c5->leave($__internal_7b42d0e4e804eb29a1c4ef2242c18d9335cbd186a7c53fba4ba5295c1fe661c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
