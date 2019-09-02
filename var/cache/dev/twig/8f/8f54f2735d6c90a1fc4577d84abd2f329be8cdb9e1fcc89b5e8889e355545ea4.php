<?php

/* base.html.twig */
class __TwigTemplate_e1a21658618236c3ad4315e62836718610e2a7f3b7eb5435e504531ee60882fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37966841dc6b16b431491acd97ccd4a442afbb7b0409049adf2568cc330472aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37966841dc6b16b431491acd97ccd4a442afbb7b0409049adf2568cc330472aa->enter($__internal_37966841dc6b16b431491acd97ccd4a442afbb7b0409049adf2568cc330472aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cd7111615d4945573730ba1986ce7489bccaa9a35128fc901ea7089bc227770d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7111615d4945573730ba1986ce7489bccaa9a35128fc901ea7089bc227770d->enter($__internal_cd7111615d4945573730ba1986ce7489bccaa9a35128fc901ea7089bc227770d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    </head>
    <body>

        <!-- Start Top Bar -->
        <div class=\"top-bar\">
            <div class=\"row\">
                <div class=\"top-bar-left\">
                    <ul class=\"dropdown menu\" data-dropdown-menu>
                        <li>
                            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservations");
        echo "\">Reservations</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Top Bar -->

        <br>

        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "

        <div class=\"row column\">
            <hr>
            <ul class=\"menu\">
                <li class=\"float-right\">Copyright 2017</li>
            </ul>
        </div>

        <script>
            \$(document).foundation();
        </script>

        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate({format: 'yyyy-mm-dd', formatSubmit: 'yyyy-mm-dd'});
        </script>
    </body>
</html>
";
        
        $__internal_37966841dc6b16b431491acd97ccd4a442afbb7b0409049adf2568cc330472aa->leave($__internal_37966841dc6b16b431491acd97ccd4a442afbb7b0409049adf2568cc330472aa_prof);

        
        $__internal_cd7111615d4945573730ba1986ce7489bccaa9a35128fc901ea7089bc227770d->leave($__internal_cd7111615d4945573730ba1986ce7489bccaa9a35128fc901ea7089bc227770d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c7d81c2f4e320bd0151535c6b379c5eb25d2f38f05c9e5ab9f5d58a99654922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7d81c2f4e320bd0151535c6b379c5eb25d2f38f05c9e5ab9f5d58a99654922->enter($__internal_6c7d81c2f4e320bd0151535c6b379c5eb25d2f38f05c9e5ab9f5d58a99654922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2bc1346afc9ec83d3cbebd8df392288950ba150ba880d3f82898b2014d040a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc1346afc9ec83d3cbebd8df392288950ba150ba880d3f82898b2014d040a34->enter($__internal_2bc1346afc9ec83d3cbebd8df392288950ba150ba880d3f82898b2014d040a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App
            ";
        
        $__internal_2bc1346afc9ec83d3cbebd8df392288950ba150ba880d3f82898b2014d040a34->leave($__internal_2bc1346afc9ec83d3cbebd8df392288950ba150ba880d3f82898b2014d040a34_prof);

        
        $__internal_6c7d81c2f4e320bd0151535c6b379c5eb25d2f38f05c9e5ab9f5d58a99654922->leave($__internal_6c7d81c2f4e320bd0151535c6b379c5eb25d2f38f05c9e5ab9f5d58a99654922_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_759c97a77053a94703ff93d560beeedfc9c05f7e6699d413b88e949fe213e397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759c97a77053a94703ff93d560beeedfc9c05f7e6699d413b88e949fe213e397->enter($__internal_759c97a77053a94703ff93d560beeedfc9c05f7e6699d413b88e949fe213e397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e90c7afd22d140b42a36080b4c56a28437076e66cc3e66ac7cc836e4c1d00dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90c7afd22d140b42a36080b4c56a28437076e66cc3e66ac7cc836e4c1d00dfd->enter($__internal_e90c7afd22d140b42a36080b4c56a28437076e66cc3e66ac7cc836e4c1d00dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e90c7afd22d140b42a36080b4c56a28437076e66cc3e66ac7cc836e4c1d00dfd->leave($__internal_e90c7afd22d140b42a36080b4c56a28437076e66cc3e66ac7cc836e4c1d00dfd_prof);

        
        $__internal_759c97a77053a94703ff93d560beeedfc9c05f7e6699d413b88e949fe213e397->leave($__internal_759c97a77053a94703ff93d560beeedfc9c05f7e6699d413b88e949fe213e397_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_69cd8cedff2ee897267e2a72a740078333adccf3c6b8ee8a564ab7c03d44e9dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cd8cedff2ee897267e2a72a740078333adccf3c6b8ee8a564ab7c03d44e9dc->enter($__internal_69cd8cedff2ee897267e2a72a740078333adccf3c6b8ee8a564ab7c03d44e9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_968848b83e7666fa777439cbb70ac2dc0de80a3e86e4337e625e4493a31a73d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968848b83e7666fa777439cbb70ac2dc0de80a3e86e4337e625e4493a31a73d1->enter($__internal_968848b83e7666fa777439cbb70ac2dc0de80a3e86e4337e625e4493a31a73d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_968848b83e7666fa777439cbb70ac2dc0de80a3e86e4337e625e4493a31a73d1->leave($__internal_968848b83e7666fa777439cbb70ac2dc0de80a3e86e4337e625e4493a31a73d1_prof);

        
        $__internal_69cd8cedff2ee897267e2a72a740078333adccf3c6b8ee8a564ab7c03d44e9dc->leave($__internal_69cd8cedff2ee897267e2a72a740078333adccf3c6b8ee8a564ab7c03d44e9dc_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e0ace19b4f83323556826e8f756496018be7d78cd983f38b8b660ed0c8c1844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e0ace19b4f83323556826e8f756496018be7d78cd983f38b8b660ed0c8c1844->enter($__internal_0e0ace19b4f83323556826e8f756496018be7d78cd983f38b8b660ed0c8c1844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8bbf57db7385b13f0e15e7bb21fd4308c80c1450fe515dd01893544bfc1ce0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbf57db7385b13f0e15e7bb21fd4308c80c1450fe515dd01893544bfc1ce0e2->enter($__internal_8bbf57db7385b13f0e15e7bb21fd4308c80c1450fe515dd01893544bfc1ce0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8bbf57db7385b13f0e15e7bb21fd4308c80c1450fe515dd01893544bfc1ce0e2->leave($__internal_8bbf57db7385b13f0e15e7bb21fd4308c80c1450fe515dd01893544bfc1ce0e2_prof);

        
        $__internal_0e0ace19b4f83323556826e8f756496018be7d78cd983f38b8b660ed0c8c1844->leave($__internal_0e0ace19b4f83323556826e8f756496018be7d78cd983f38b8b660ed0c8c1844_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 54,  191 => 40,  174 => 9,  155 => 6,  138 => 60,  134 => 59,  130 => 58,  126 => 57,  122 => 56,  117 => 55,  115 => 54,  100 => 41,  98 => 40,  85 => 30,  79 => 27,  73 => 24,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  43 => 10,  41 => 9,  38 => 8,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>
            {% block title %}Landon Hotel App
            {% endblock %}
        </title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    </head>
    <body>

        <!-- Start Top Bar -->
        <div class=\"top-bar\">
            <div class=\"row\">
                <div class=\"top-bar-left\">
                    <ul class=\"dropdown menu\" data-dropdown-menu>
                        <li>
                            <a href=\"{{ path(\"home\") }}\">Home</a>
                        </li>
                        <li>
                            <a href=\"{{ path(\"index_clients\") }}\">Clients</a>
                        </li>
                        <li>
                            <a href=\"{{ path(\"reservations\") }}\">Reservations</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Top Bar -->

        <br>

        {% block body %}{% endblock %}


        <div class=\"row column\">
            <hr>
            <ul class=\"menu\">
                <li class=\"float-right\">Copyright 2017</li>
            </ul>
        </div>

        <script>
            \$(document).foundation();
        </script>

        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate({format: 'yyyy-mm-dd', formatSubmit: 'yyyy-mm-dd'});
        </script>
    </body>
</html>
", "base.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/app/Resources/views/base.html.twig");
    }
}
