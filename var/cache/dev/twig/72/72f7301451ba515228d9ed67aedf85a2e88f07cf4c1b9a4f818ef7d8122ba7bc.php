<?php

/* clients/index.html.twig */
class __TwigTemplate_01553599b1627482f7dcac53533ad427a13e26fde9cc797f725c5f6906645da7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
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
        $__internal_31cd94f32c3e1ee1ec3b54a9e316ba22bb702d7951e584087cdbd52c07684825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31cd94f32c3e1ee1ec3b54a9e316ba22bb702d7951e584087cdbd52c07684825->enter($__internal_31cd94f32c3e1ee1ec3b54a9e316ba22bb702d7951e584087cdbd52c07684825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_5a11ecb7f59aea9b630f085cd0cc102a49e6c3e41f9a87a0a7c7c34632a1a0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a11ecb7f59aea9b630f085cd0cc102a49e6c3e41f9a87a0a7c7c34632a1a0cb->enter($__internal_5a11ecb7f59aea9b630f085cd0cc102a49e6c3e41f9a87a0a7c7c34632a1a0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31cd94f32c3e1ee1ec3b54a9e316ba22bb702d7951e584087cdbd52c07684825->leave($__internal_31cd94f32c3e1ee1ec3b54a9e316ba22bb702d7951e584087cdbd52c07684825_prof);

        
        $__internal_5a11ecb7f59aea9b630f085cd0cc102a49e6c3e41f9a87a0a7c7c34632a1a0cb->leave($__internal_5a11ecb7f59aea9b630f085cd0cc102a49e6c3e41f9a87a0a7c7c34632a1a0cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_382cfc129b14da4339e0e0c2291d2924288646fa4524b61226b9915db42dc3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382cfc129b14da4339e0e0c2291d2924288646fa4524b61226b9915db42dc3bf->enter($__internal_382cfc129b14da4339e0e0c2291d2924288646fa4524b61226b9915db42dc3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d4f6f943071bdb092153fac169001604a338cb7f3496083cbaf974c9ee88950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4f6f943071bdb092153fac169001604a338cb7f3496083cbaf974c9ee88950->enter($__internal_4d4f6f943071bdb092153fac169001604a338cb7f3496083cbaf974c9ee88950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"medium-12 large-12 columns\">
            <h4>Clients</h4>
            <div class=\"medium-2  columns\">
                <a class=\"button\" href=\"#\">ADD NEW CLIENT</a>
            </div>

            <table class=\"stack\">
                <thead>
                    <tr>
                        <th width=\"200\">Name</th>
                        <th width=\"200\">Email</th>
                        <th width=\"200\">Action</th>
                    </tr>
                </thead>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 21
            echo "                    <tr>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "name", array()), "title", array())), "html", null, true);
            echo ".
                            ";
            // line 23
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "name", array()), "first", array())), "html", null, true);
            echo "
                            ";
            // line 24
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "name", array()), "last", array())), "html", null, true);
            echo "
                        </td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"hollow button\" href=\"/client/edit/1\">EDIT</a>
                            <a class=\"hollow button warning\" href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => "sample"));
            echo "\">BOOK A ROOM</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
            </tbody>
        </table>
    </div>
</div>";
        
        $__internal_4d4f6f943071bdb092153fac169001604a338cb7f3496083cbaf974c9ee88950->leave($__internal_4d4f6f943071bdb092153fac169001604a338cb7f3496083cbaf974c9ee88950_prof);

        
        $__internal_382cfc129b14da4339e0e0c2291d2924288646fa4524b61226b9915db42dc3bf->leave($__internal_382cfc129b14da4339e0e0c2291d2924288646fa4524b61226b9915db42dc3bf_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  93 => 29,  87 => 26,  82 => 24,  78 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
            <h4>Clients</h4>
            <div class=\"medium-2  columns\">
                <a class=\"button\" href=\"#\">ADD NEW CLIENT</a>
            </div>

            <table class=\"stack\">
                <thead>
                    <tr>
                        <th width=\"200\">Name</th>
                        <th width=\"200\">Email</th>
                        <th width=\"200\">Action</th>
                    </tr>
                </thead>
                {% for client in clients %}
                    <tr>
                        <td>{{ client.name.title | capitalize }}.
                            {{ client.name.first | capitalize }}
                            {{ client.name.last | capitalize }}
                        </td>
                        <td>{{ client.email }}</td>
                        <td>
                            <a class=\"hollow button\" href=\"/client/edit/1\">EDIT</a>
                            <a class=\"hollow button warning\" href=\"{{ path(\"booking\", { 'id_client': 'sample' }) }}\">BOOK A ROOM</a>
                        </td>
                    </tr>
                {% endfor %}

            </tbody>
        </table>
    </div>
</div>{% endblock %}
", "clients/index.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/app/Resources/views/clients/index.html.twig");
    }
}
