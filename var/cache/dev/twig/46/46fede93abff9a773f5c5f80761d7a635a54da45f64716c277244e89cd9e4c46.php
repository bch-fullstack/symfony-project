<?php

/* clients/form.html.twig */
class __TwigTemplate_ce18e47ee04cb7e7ab0432bf867b59c8d6d90ba3d4e79c9d4114516f067d1828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/form.html.twig", 1);
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
        $__internal_c944d7da46c32ee56523bb05be38ee70d3c786b3a1bcb25eef01c7ba215f7f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c944d7da46c32ee56523bb05be38ee70d3c786b3a1bcb25eef01c7ba215f7f93->enter($__internal_c944d7da46c32ee56523bb05be38ee70d3c786b3a1bcb25eef01c7ba215f7f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_f199a678a3c6c04193f285ec49dba40dde976442e9a0cdd7670740398d25395e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f199a678a3c6c04193f285ec49dba40dde976442e9a0cdd7670740398d25395e->enter($__internal_f199a678a3c6c04193f285ec49dba40dde976442e9a0cdd7670740398d25395e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c944d7da46c32ee56523bb05be38ee70d3c786b3a1bcb25eef01c7ba215f7f93->leave($__internal_c944d7da46c32ee56523bb05be38ee70d3c786b3a1bcb25eef01c7ba215f7f93_prof);

        
        $__internal_f199a678a3c6c04193f285ec49dba40dde976442e9a0cdd7670740398d25395e->leave($__internal_f199a678a3c6c04193f285ec49dba40dde976442e9a0cdd7670740398d25395e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ca64fab882a55cf8f55ece8cbee5d44f1309e62b19f11673ed31709289146b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca64fab882a55cf8f55ece8cbee5d44f1309e62b19f11673ed31709289146b9->enter($__internal_9ca64fab882a55cf8f55ece8cbee5d44f1309e62b19f11673ed31709289146b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe74a366a36f9e1bb391bb7a9741ec172270a29bfb1ab83f2653be68d8c62310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe74a366a36f9e1bb391bb7a9741ec172270a29bfb1ab83f2653be68d8c62310->enter($__internal_fe74a366a36f9e1bb391bb7a9741ec172270a29bfb1ab83f2653be68d8c62310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>New Client</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
              <option value=\"mr\">Mr.</option>
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

";
        
        $__internal_fe74a366a36f9e1bb391bb7a9741ec172270a29bfb1ab83f2653be68d8c62310->leave($__internal_fe74a366a36f9e1bb391bb7a9741ec172270a29bfb1ab83f2653be68d8c62310_prof);

        
        $__internal_9ca64fab882a55cf8f55ece8cbee5d44f1309e62b19f11673ed31709289146b9->leave($__internal_9ca64fab882a55cf8f55ece8cbee5d44f1309e62b19f11673ed31709289146b9_prof);

    }

    public function getTemplateName()
    {
        return "clients/form.html.twig";
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
        <h4>New Client</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
              <option value=\"mr\">Mr.</option>
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[lastName]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zipCode]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>

{% endblock %}
", "clients/form.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/app/Resources/views/clients/form.html.twig");
    }
}
