<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f98984adee02d152b80e35d966878cf5bb2a7fff21c8ed03e615c8da3e44d481 extends Twig_Template
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
        $__internal_6272a5153f4895f31dca0cb274ba7e357dedf017e81510b62990d26e34e54fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6272a5153f4895f31dca0cb274ba7e357dedf017e81510b62990d26e34e54fc0->enter($__internal_6272a5153f4895f31dca0cb274ba7e357dedf017e81510b62990d26e34e54fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_216a2de98039fe7d87660fe18f14d1bedbf6842f7ef604b84cb5d7e5c7207d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216a2de98039fe7d87660fe18f14d1bedbf6842f7ef604b84cb5d7e5c7207d20->enter($__internal_216a2de98039fe7d87660fe18f14d1bedbf6842f7ef604b84cb5d7e5c7207d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6272a5153f4895f31dca0cb274ba7e357dedf017e81510b62990d26e34e54fc0->leave($__internal_6272a5153f4895f31dca0cb274ba7e357dedf017e81510b62990d26e34e54fc0_prof);

        
        $__internal_216a2de98039fe7d87660fe18f14d1bedbf6842f7ef604b84cb5d7e5c7207d20->leave($__internal_216a2de98039fe7d87660fe18f14d1bedbf6842f7ef604b84cb5d7e5c7207d20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
