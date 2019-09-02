<?php

/* reservations/index.html.twig */
class __TwigTemplate_ee463235539b69cc2e9539d7966d9f32fe53bacc1e659a0314b14f019bed78a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/index.html.twig", 1);
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
        $__internal_cf578cf8553ef80b2d53ca6537ed434a01f7d4c84b2a814273b59ce5c0742029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf578cf8553ef80b2d53ca6537ed434a01f7d4c84b2a814273b59ce5c0742029->enter($__internal_cf578cf8553ef80b2d53ca6537ed434a01f7d4c84b2a814273b59ce5c0742029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_379ea01329336954e21c0b7d3b81a325f6a183e8ed8589e6ca375d4b0635eca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379ea01329336954e21c0b7d3b81a325f6a183e8ed8589e6ca375d4b0635eca0->enter($__internal_379ea01329336954e21c0b7d3b81a325f6a183e8ed8589e6ca375d4b0635eca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf578cf8553ef80b2d53ca6537ed434a01f7d4c84b2a814273b59ce5c0742029->leave($__internal_cf578cf8553ef80b2d53ca6537ed434a01f7d4c84b2a814273b59ce5c0742029_prof);

        
        $__internal_379ea01329336954e21c0b7d3b81a325f6a183e8ed8589e6ca375d4b0635eca0->leave($__internal_379ea01329336954e21c0b7d3b81a325f6a183e8ed8589e6ca375d4b0635eca0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e35d0237118767e06f0dc3de5b757559487f2d86d6f89ebbb88ab871fee35e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e35d0237118767e06f0dc3de5b757559487f2d86d6f89ebbb88ab871fee35e3->enter($__internal_7e35d0237118767e06f0dc3de5b757559487f2d86d6f89ebbb88ab871fee35e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6996ca1e98711306aeb1be3cd99d85d3030d0624b1a1bfeedf44d3f6f480fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6996ca1e98711306aeb1be3cd99d85d3030d0624b1a1bfeedf44d3f6f480fa4->enter($__internal_b6996ca1e98711306aeb1be3cd99d85d3030d0624b1a1bfeedf44d3f6f480fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_b6996ca1e98711306aeb1be3cd99d85d3030d0624b1a1bfeedf44d3f6f480fa4->leave($__internal_b6996ca1e98711306aeb1be3cd99d85d3030d0624b1a1bfeedf44d3f6f480fa4_prof);

        
        $__internal_7e35d0237118767e06f0dc3de5b757559487f2d86d6f89ebbb88ab871fee35e3->leave($__internal_7e35d0237118767e06f0dc3de5b757559487f2d86d6f89ebbb88ab871fee35e3_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/index.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/app/Resources/views/reservations/index.html.twig");
    }
}
