<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c5574891a8b980cce628984681949843c286794583f49f0e9f1ff6b002d9074e extends Twig_Template
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
        $__internal_d28880bd9c9404a3422ac5823b09977b94b66523a0d5bd7d301f0382486df6a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28880bd9c9404a3422ac5823b09977b94b66523a0d5bd7d301f0382486df6a1->enter($__internal_d28880bd9c9404a3422ac5823b09977b94b66523a0d5bd7d301f0382486df6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e35f0af7ba9f8ee2a326dd518981ed8306dde98ea824823a9cbf7b3a118abb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35f0af7ba9f8ee2a326dd518981ed8306dde98ea824823a9cbf7b3a118abb39->enter($__internal_e35f0af7ba9f8ee2a326dd518981ed8306dde98ea824823a9cbf7b3a118abb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d28880bd9c9404a3422ac5823b09977b94b66523a0d5bd7d301f0382486df6a1->leave($__internal_d28880bd9c9404a3422ac5823b09977b94b66523a0d5bd7d301f0382486df6a1_prof);

        
        $__internal_e35f0af7ba9f8ee2a326dd518981ed8306dde98ea824823a9cbf7b3a118abb39->leave($__internal_e35f0af7ba9f8ee2a326dd518981ed8306dde98ea824823a9cbf7b3a118abb39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
