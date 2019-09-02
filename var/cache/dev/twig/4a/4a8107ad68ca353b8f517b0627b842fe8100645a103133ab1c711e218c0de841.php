<?php

/* reservations/book.html.twig */
class __TwigTemplate_64c0cb274f827e5d938cbe7702f25fe23a40ed4a35a04d5324219e193814e3cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/book.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee256c8328781319746bea8628769d036e240c3163ffcf0f047d3f9f95994082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee256c8328781319746bea8628769d036e240c3163ffcf0f047d3f9f95994082->enter($__internal_ee256c8328781319746bea8628769d036e240c3163ffcf0f047d3f9f95994082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_111d6b4068dce0b6448a61eaa26f821eaa7f4a8832db53feccf212042ac9db78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111d6b4068dce0b6448a61eaa26f821eaa7f4a8832db53feccf212042ac9db78->enter($__internal_111d6b4068dce0b6448a61eaa26f821eaa7f4a8832db53feccf212042ac9db78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee256c8328781319746bea8628769d036e240c3163ffcf0f047d3f9f95994082->leave($__internal_ee256c8328781319746bea8628769d036e240c3163ffcf0f047d3f9f95994082_prof);

        
        $__internal_111d6b4068dce0b6448a61eaa26f821eaa7f4a8832db53feccf212042ac9db78->leave($__internal_111d6b4068dce0b6448a61eaa26f821eaa7f4a8832db53feccf212042ac9db78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91a263a92428a65d95c3c91557fe6c412fe3281102cb431068a6153455496a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a263a92428a65d95c3c91557fe6c412fe3281102cb431068a6153455496a50->enter($__internal_91a263a92428a65d95c3c91557fe6c412fe3281102cb431068a6153455496a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ff49d788396d43fdae77f088021cfc2b065d07c3aef1400202bf91adda513b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff49d788396d43fdae77f088021cfc2b065d07c3aef1400202bf91adda513b8->enter($__internal_7ff49d788396d43fdae77f088021cfc2b065d07c3aef1400202bf91adda513b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
            <h4>Clients/Booking
                ";
        // line 8
        echo twig_escape_filter($this->env, ($context["something"] ?? $this->getContext($context, "something")), "html", null, true);
        echo "</h4>
            <div class=\"medium-2  columns\">BOOKING FOR:
                ";
        // line 10
        echo twig_escape_filter($this->env, ($context["something"] ?? $this->getContext($context, "something")), "html", null, true);
        echo "</div>
            <div class=\"medium-2  columns\">
                <b>Client Name</b>
            </div>
            <form action=\"\" method=\"post\">
                <div class=\"medium-1  columns\">FROM:</div>
                <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\"/></div>
                <div class=\"medium-1  columns\">TO:</div>
                <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\"/></div>
                <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\"/></div>
            </form>

            <table class=\"stack\">
                <thead>
                    <tr>
                        <th width=\"200\">Room</th>
                        <th width=\"200\">Availability</th>
                        <th width=\"200\">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>101</td>
                        <td>
                            <div class=\"callout success\">
                                <h7>Available</h7>
                            </div>
                        </td>
                        <td>
                            <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

";
        
        $__internal_7ff49d788396d43fdae77f088021cfc2b065d07c3aef1400202bf91adda513b8->leave($__internal_7ff49d788396d43fdae77f088021cfc2b065d07c3aef1400202bf91adda513b8_prof);

        
        $__internal_91a263a92428a65d95c3c91557fe6c412fe3281102cb431068a6153455496a50->leave($__internal_91a263a92428a65d95c3c91557fe6c412fe3281102cb431068a6153455496a50_prof);

    }

    public function getTemplateName()
    {
        return "reservations/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
            <h4>Clients/Booking
                {{ something }}</h4>
            <div class=\"medium-2  columns\">BOOKING FOR:
                {{ something }}</div>
            <div class=\"medium-2  columns\">
                <b>Client Name</b>
            </div>
            <form action=\"\" method=\"post\">
                <div class=\"medium-1  columns\">FROM:</div>
                <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\"/></div>
                <div class=\"medium-1  columns\">TO:</div>
                <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\"/></div>
                <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\"/></div>
            </form>

            <table class=\"stack\">
                <thead>
                    <tr>
                        <th width=\"200\">Room</th>
                        <th width=\"200\">Availability</th>
                        <th width=\"200\">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>101</td>
                        <td>
                            <div class=\"callout success\">
                                <h7>Available</h7>
                            </div>
                        </td>
                        <td>
                            <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

{% endblock %}
", "reservations/book.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/app/Resources/views/reservations/book.html.twig");
    }
}
