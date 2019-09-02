<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_27ea32d78ca7ec7014d1408831d6d540aea23ce2a4f50f184848a34b6ab01782 extends Twig_Template
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
        $__internal_bceece1b96531c27278b596829c135a0807d6da441d08fef427fd1570318cc93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bceece1b96531c27278b596829c135a0807d6da441d08fef427fd1570318cc93->enter($__internal_bceece1b96531c27278b596829c135a0807d6da441d08fef427fd1570318cc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_78db2e9bbf7a24e0cc6d4e5f9aba86d75bf70b7d2a2b2968416aa7a7a9d90a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78db2e9bbf7a24e0cc6d4e5f9aba86d75bf70b7d2a2b2968416aa7a7a9d90a30->enter($__internal_78db2e9bbf7a24e0cc6d4e5f9aba86d75bf70b7d2a2b2968416aa7a7a9d90a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_bceece1b96531c27278b596829c135a0807d6da441d08fef427fd1570318cc93->leave($__internal_bceece1b96531c27278b596829c135a0807d6da441d08fef427fd1570318cc93_prof);

        
        $__internal_78db2e9bbf7a24e0cc6d4e5f9aba86d75bf70b7d2a2b2968416aa7a7a9d90a30->leave($__internal_78db2e9bbf7a24e0cc6d4e5f9aba86d75bf70b7d2a2b2968416aa7a7a9d90a30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
