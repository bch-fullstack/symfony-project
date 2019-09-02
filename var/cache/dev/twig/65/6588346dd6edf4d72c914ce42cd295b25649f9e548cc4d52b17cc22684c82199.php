<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_acc67efbe8dfabf866610a8d2ddf729d502aec8ccff741537b46cc72db61ee6a extends Twig_Template
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
        $__internal_ee9e27cf7bf0910e507822e9895d4017a28282323239259381dfc7a999ed2669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9e27cf7bf0910e507822e9895d4017a28282323239259381dfc7a999ed2669->enter($__internal_ee9e27cf7bf0910e507822e9895d4017a28282323239259381dfc7a999ed2669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e90d435842738a1e7652734b362dd7813eea4e14df4ddd1f1105dc4bcabd06b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90d435842738a1e7652734b362dd7813eea4e14df4ddd1f1105dc4bcabd06b7->enter($__internal_e90d435842738a1e7652734b362dd7813eea4e14df4ddd1f1105dc4bcabd06b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ee9e27cf7bf0910e507822e9895d4017a28282323239259381dfc7a999ed2669->leave($__internal_ee9e27cf7bf0910e507822e9895d4017a28282323239259381dfc7a999ed2669_prof);

        
        $__internal_e90d435842738a1e7652734b362dd7813eea4e14df4ddd1f1105dc4bcabd06b7->leave($__internal_e90d435842738a1e7652734b362dd7813eea4e14df4ddd1f1105dc4bcabd06b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
