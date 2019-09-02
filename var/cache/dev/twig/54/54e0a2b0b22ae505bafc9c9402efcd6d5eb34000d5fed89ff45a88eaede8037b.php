<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_117d7e6ba912c8024a0275b56ed8553d86fb57108b92f907017796efd08f20dd extends Twig_Template
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
        $__internal_d0c61c5bda0f7bfb49fe5c3e328f42ed0ef5240dca24547f705d90d0b3344d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c61c5bda0f7bfb49fe5c3e328f42ed0ef5240dca24547f705d90d0b3344d6c->enter($__internal_d0c61c5bda0f7bfb49fe5c3e328f42ed0ef5240dca24547f705d90d0b3344d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_14249988a4ee88c36f40e5cc8433866a297a24b9a1b133aad1148694cac01b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14249988a4ee88c36f40e5cc8433866a297a24b9a1b133aad1148694cac01b2c->enter($__internal_14249988a4ee88c36f40e5cc8433866a297a24b9a1b133aad1148694cac01b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d0c61c5bda0f7bfb49fe5c3e328f42ed0ef5240dca24547f705d90d0b3344d6c->leave($__internal_d0c61c5bda0f7bfb49fe5c3e328f42ed0ef5240dca24547f705d90d0b3344d6c_prof);

        
        $__internal_14249988a4ee88c36f40e5cc8433866a297a24b9a1b133aad1148694cac01b2c->leave($__internal_14249988a4ee88c36f40e5cc8433866a297a24b9a1b133aad1148694cac01b2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
