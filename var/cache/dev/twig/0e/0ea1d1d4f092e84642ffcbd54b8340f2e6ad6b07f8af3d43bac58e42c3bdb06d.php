<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_dc947c03ff27153303aee18d5a493371064f8f2590e9dc6ee4a72b1ab21cc233 extends Twig_Template
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
        $__internal_bc6161a85753e0b319ddf63695ca9a96390c295db114e1e5090f567840ae5113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6161a85753e0b319ddf63695ca9a96390c295db114e1e5090f567840ae5113->enter($__internal_bc6161a85753e0b319ddf63695ca9a96390c295db114e1e5090f567840ae5113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_efe472d1b35eb67e6e1c4670092c149c686bd8504e1f69b764ac08f829800ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe472d1b35eb67e6e1c4670092c149c686bd8504e1f69b764ac08f829800ab8->enter($__internal_efe472d1b35eb67e6e1c4670092c149c686bd8504e1f69b764ac08f829800ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bc6161a85753e0b319ddf63695ca9a96390c295db114e1e5090f567840ae5113->leave($__internal_bc6161a85753e0b319ddf63695ca9a96390c295db114e1e5090f567840ae5113_prof);

        
        $__internal_efe472d1b35eb67e6e1c4670092c149c686bd8504e1f69b764ac08f829800ab8->leave($__internal_efe472d1b35eb67e6e1c4670092c149c686bd8504e1f69b764ac08f829800ab8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
