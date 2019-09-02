<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7b2117e1ceccd64d72d5f05077f27c022ddb91b0a90b387bc397c3ed6c381f93 extends Twig_Template
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
        $__internal_65e643da201b3b5b9e357c71d49dfd4f23557e3bc56b431999ce12734ec3c510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e643da201b3b5b9e357c71d49dfd4f23557e3bc56b431999ce12734ec3c510->enter($__internal_65e643da201b3b5b9e357c71d49dfd4f23557e3bc56b431999ce12734ec3c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_627c57b7833e71adcf192382958565adaf76b2a53d3661ded1a9dd0029427c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627c57b7833e71adcf192382958565adaf76b2a53d3661ded1a9dd0029427c09->enter($__internal_627c57b7833e71adcf192382958565adaf76b2a53d3661ded1a9dd0029427c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_65e643da201b3b5b9e357c71d49dfd4f23557e3bc56b431999ce12734ec3c510->leave($__internal_65e643da201b3b5b9e357c71d49dfd4f23557e3bc56b431999ce12734ec3c510_prof);

        
        $__internal_627c57b7833e71adcf192382958565adaf76b2a53d3661ded1a9dd0029427c09->leave($__internal_627c57b7833e71adcf192382958565adaf76b2a53d3661ded1a9dd0029427c09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
