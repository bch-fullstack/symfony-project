<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_6fab1bb7aeb690b637254b9f083a29f2bbfa7ca82d585cf8d5f5672c35e23dba extends Twig_Template
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
        $__internal_4816d4fae4176cf34b33b857e95c61d50b9f366319f0c6a52c33b7fbc0581109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4816d4fae4176cf34b33b857e95c61d50b9f366319f0c6a52c33b7fbc0581109->enter($__internal_4816d4fae4176cf34b33b857e95c61d50b9f366319f0c6a52c33b7fbc0581109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3013fa30e98ebe9b83534a46334656eb8abde6163f438f03e64b2c97b4116476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3013fa30e98ebe9b83534a46334656eb8abde6163f438f03e64b2c97b4116476->enter($__internal_3013fa30e98ebe9b83534a46334656eb8abde6163f438f03e64b2c97b4116476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4816d4fae4176cf34b33b857e95c61d50b9f366319f0c6a52c33b7fbc0581109->leave($__internal_4816d4fae4176cf34b33b857e95c61d50b9f366319f0c6a52c33b7fbc0581109_prof);

        
        $__internal_3013fa30e98ebe9b83534a46334656eb8abde6163f438f03e64b2c97b4116476->leave($__internal_3013fa30e98ebe9b83534a46334656eb8abde6163f438f03e64b2c97b4116476_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
