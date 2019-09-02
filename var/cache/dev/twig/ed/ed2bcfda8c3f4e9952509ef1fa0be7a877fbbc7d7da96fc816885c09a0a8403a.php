<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_966c31e5eba600d44dd07f93b2e403c957bf8804aef09a9f8c45109fc681a15b extends Twig_Template
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
        $__internal_3cadc2c273f18017a39b070d30702cb764db884b8729c20ff8ad203bc451873c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cadc2c273f18017a39b070d30702cb764db884b8729c20ff8ad203bc451873c->enter($__internal_3cadc2c273f18017a39b070d30702cb764db884b8729c20ff8ad203bc451873c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_58158a28fe07d751230ce0a450cb8965b43aa1c4a349ddd140ac016564c351d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58158a28fe07d751230ce0a450cb8965b43aa1c4a349ddd140ac016564c351d9->enter($__internal_58158a28fe07d751230ce0a450cb8965b43aa1c4a349ddd140ac016564c351d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3cadc2c273f18017a39b070d30702cb764db884b8729c20ff8ad203bc451873c->leave($__internal_3cadc2c273f18017a39b070d30702cb764db884b8729c20ff8ad203bc451873c_prof);

        
        $__internal_58158a28fe07d751230ce0a450cb8965b43aa1c4a349ddd140ac016564c351d9->leave($__internal_58158a28fe07d751230ce0a450cb8965b43aa1c4a349ddd140ac016564c351d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
