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
        $__internal_2f8838fb15a092559a2747df5b4351aa5892f95d65039eb3af7a1e7e89c5ea1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8838fb15a092559a2747df5b4351aa5892f95d65039eb3af7a1e7e89c5ea1f->enter($__internal_2f8838fb15a092559a2747df5b4351aa5892f95d65039eb3af7a1e7e89c5ea1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_2c2e366870f35373e5be4fed8c0f90dc3230ec38628654d3e412baeaf1392bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2e366870f35373e5be4fed8c0f90dc3230ec38628654d3e412baeaf1392bec->enter($__internal_2c2e366870f35373e5be4fed8c0f90dc3230ec38628654d3e412baeaf1392bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f8838fb15a092559a2747df5b4351aa5892f95d65039eb3af7a1e7e89c5ea1f->leave($__internal_2f8838fb15a092559a2747df5b4351aa5892f95d65039eb3af7a1e7e89c5ea1f_prof);

        
        $__internal_2c2e366870f35373e5be4fed8c0f90dc3230ec38628654d3e412baeaf1392bec->leave($__internal_2c2e366870f35373e5be4fed8c0f90dc3230ec38628654d3e412baeaf1392bec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_401b80f83d179d8adfd6dc2c0538c989a75e068fa8552fcb96cc792f001cbf26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_401b80f83d179d8adfd6dc2c0538c989a75e068fa8552fcb96cc792f001cbf26->enter($__internal_401b80f83d179d8adfd6dc2c0538c989a75e068fa8552fcb96cc792f001cbf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7123fc403dfbd629cf9adfce79c5ba0fbf1cfb93a4452665f61e5b162ce7c89a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7123fc403dfbd629cf9adfce79c5ba0fbf1cfb93a4452665f61e5b162ce7c89a->enter($__internal_7123fc403dfbd629cf9adfce79c5ba0fbf1cfb93a4452665f61e5b162ce7c89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <tr>
                    <td>Mr. Roy Adams</td>
                    <td>radams1v@xinhuanet.com</td>
                    <td>
                        <a class=\"hollow button\" href=\"/client/edit/1\">EDIT</a>
                        <a class=\"hollow button warning\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => "sample"));
        echo "\">BOOK A ROOM</a>
                    </td>
                </tr>
                <tr>
                    <td>Ms. Bonnie Clark</td>
                    <td>bclark@bing.com</td>
                    <td>
                        <a class=\"hollow button\" href=\"#\">EDIT</a>
                        <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>";
        
        $__internal_7123fc403dfbd629cf9adfce79c5ba0fbf1cfb93a4452665f61e5b162ce7c89a->leave($__internal_7123fc403dfbd629cf9adfce79c5ba0fbf1cfb93a4452665f61e5b162ce7c89a_prof);

        
        $__internal_401b80f83d179d8adfd6dc2c0538c989a75e068fa8552fcb96cc792f001cbf26->leave($__internal_401b80f83d179d8adfd6dc2c0538c989a75e068fa8552fcb96cc792f001cbf26_prof);

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
        return array (  72 => 25,  49 => 4,  40 => 3,  11 => 1,);
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
                <tr>
                    <td>Mr. Roy Adams</td>
                    <td>radams1v@xinhuanet.com</td>
                    <td>
                        <a class=\"hollow button\" href=\"/client/edit/1\">EDIT</a>
                        <a class=\"hollow button warning\" href=\"{{ path(\"booking\", { 'id_client': 'sample' }) }}\">BOOK A ROOM</a>
                    </td>
                </tr>
                <tr>
                    <td>Ms. Bonnie Clark</td>
                    <td>bclark@bing.com</td>
                    <td>
                        <a class=\"hollow button\" href=\"#\">EDIT</a>
                        <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>{% endblock %}
", "clients/index.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/app/Resources/views/clients/index.html.twig");
    }
}
