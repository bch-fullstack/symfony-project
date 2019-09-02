<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1e7a1f8bab4e20aa4dbb7afd21f0d1832f11973f4703c9c645f0aa3e13638cc7 extends Twig_Template
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
        $__internal_2518320d8ba58972e2708f61d4ef7b342779423140648341b151d8280b458019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2518320d8ba58972e2708f61d4ef7b342779423140648341b151d8280b458019->enter($__internal_2518320d8ba58972e2708f61d4ef7b342779423140648341b151d8280b458019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_17f21cab96d69d5e20e2b42864a62c81a2d54da6eb1e5fe197212f5af71a40e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f21cab96d69d5e20e2b42864a62c81a2d54da6eb1e5fe197212f5af71a40e3->enter($__internal_17f21cab96d69d5e20e2b42864a62c81a2d54da6eb1e5fe197212f5af71a40e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2518320d8ba58972e2708f61d4ef7b342779423140648341b151d8280b458019->leave($__internal_2518320d8ba58972e2708f61d4ef7b342779423140648341b151d8280b458019_prof);

        
        $__internal_17f21cab96d69d5e20e2b42864a62c81a2d54da6eb1e5fe197212f5af71a40e3->leave($__internal_17f21cab96d69d5e20e2b42864a62c81a2d54da6eb1e5fe197212f5af71a40e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
