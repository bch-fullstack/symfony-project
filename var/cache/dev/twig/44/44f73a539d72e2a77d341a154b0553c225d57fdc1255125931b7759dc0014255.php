<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_803e6b93a43353ebf5b4337111eb311404ed0a7ff058d44294aa81d91230fd3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23de99b430848ae34b5ee58e3a0e44a4af70a0d75c039af3e3a7d2aa80af7364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23de99b430848ae34b5ee58e3a0e44a4af70a0d75c039af3e3a7d2aa80af7364->enter($__internal_23de99b430848ae34b5ee58e3a0e44a4af70a0d75c039af3e3a7d2aa80af7364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_270f066e873a4979a0b209c838e45a126ef0d8c65d4353b50c94ec05080b3db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270f066e873a4979a0b209c838e45a126ef0d8c65d4353b50c94ec05080b3db3->enter($__internal_270f066e873a4979a0b209c838e45a126ef0d8c65d4353b50c94ec05080b3db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_23de99b430848ae34b5ee58e3a0e44a4af70a0d75c039af3e3a7d2aa80af7364->leave($__internal_23de99b430848ae34b5ee58e3a0e44a4af70a0d75c039af3e3a7d2aa80af7364_prof);

        
        $__internal_270f066e873a4979a0b209c838e45a126ef0d8c65d4353b50c94ec05080b3db3->leave($__internal_270f066e873a4979a0b209c838e45a126ef0d8c65d4353b50c94ec05080b3db3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
