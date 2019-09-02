<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_126ff0bbf48f3cb1013d0339b5f96018de579560c1e7852b08a3b1a3badc6868 extends Twig_Template
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
        $__internal_ca9d5121fa2d61adabfece80175321fec732106de26c67d543e8d100707a5281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9d5121fa2d61adabfece80175321fec732106de26c67d543e8d100707a5281->enter($__internal_ca9d5121fa2d61adabfece80175321fec732106de26c67d543e8d100707a5281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2b3a601780e114d65b56b5dadb572a8e9e40bd5eb160885708ea8acbb69bf83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3a601780e114d65b56b5dadb572a8e9e40bd5eb160885708ea8acbb69bf83b->enter($__internal_2b3a601780e114d65b56b5dadb572a8e9e40bd5eb160885708ea8acbb69bf83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ca9d5121fa2d61adabfece80175321fec732106de26c67d543e8d100707a5281->leave($__internal_ca9d5121fa2d61adabfece80175321fec732106de26c67d543e8d100707a5281_prof);

        
        $__internal_2b3a601780e114d65b56b5dadb572a8e9e40bd5eb160885708ea8acbb69bf83b->leave($__internal_2b3a601780e114d65b56b5dadb572a8e9e40bd5eb160885708ea8acbb69bf83b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
