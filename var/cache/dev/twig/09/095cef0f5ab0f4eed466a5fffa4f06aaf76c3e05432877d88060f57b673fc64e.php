<?php

/* admin/index.html.twig */
class __TwigTemplate_811f2a1ba1a458f4cc309dde3eba8143027c8d96070b02c7e579dfd0591c693b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_ccf291e556d0e0458bab0f6de78aa586b907f51dee803ee95bf1635788704a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf291e556d0e0458bab0f6de78aa586b907f51dee803ee95bf1635788704a9a->enter($__internal_ccf291e556d0e0458bab0f6de78aa586b907f51dee803ee95bf1635788704a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_e8edbc1e1a62893c26f8ecff88de8799ecf415bd91eb5a0f102b557e4f3062ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8edbc1e1a62893c26f8ecff88de8799ecf415bd91eb5a0f102b557e4f3062ba->enter($__internal_e8edbc1e1a62893c26f8ecff88de8799ecf415bd91eb5a0f102b557e4f3062ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccf291e556d0e0458bab0f6de78aa586b907f51dee803ee95bf1635788704a9a->leave($__internal_ccf291e556d0e0458bab0f6de78aa586b907f51dee803ee95bf1635788704a9a_prof);

        
        $__internal_e8edbc1e1a62893c26f8ecff88de8799ecf415bd91eb5a0f102b557e4f3062ba->leave($__internal_e8edbc1e1a62893c26f8ecff88de8799ecf415bd91eb5a0f102b557e4f3062ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfcbd39e4e1424ae617b9cdf703737a05af223b6898b3d492230fc45e325f215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfcbd39e4e1424ae617b9cdf703737a05af223b6898b3d492230fc45e325f215->enter($__internal_cfcbd39e4e1424ae617b9cdf703737a05af223b6898b3d492230fc45e325f215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_119ce88cf87fd76aeff6ccc9d6f5131db836ae01d97fc9bf31bd05e41c26bb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119ce88cf87fd76aeff6ccc9d6f5131db836ae01d97fc9bf31bd05e41c26bb6f->enter($__internal_119ce88cf87fd76aeff6ccc9d6f5131db836ae01d97fc9bf31bd05e41c26bb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

";
        
        $__internal_119ce88cf87fd76aeff6ccc9d6f5131db836ae01d97fc9bf31bd05e41c26bb6f->leave($__internal_119ce88cf87fd76aeff6ccc9d6f5131db836ae01d97fc9bf31bd05e41c26bb6f_prof);

        
        $__internal_cfcbd39e4e1424ae617b9cdf703737a05af223b6898b3d492230fc45e325f215->leave($__internal_cfcbd39e4e1424ae617b9cdf703737a05af223b6898b3d492230fc45e325f215_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/app/Resources/views/admin/index.html.twig");
    }
}
