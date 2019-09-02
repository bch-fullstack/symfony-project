<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e4c86ebf21fa1de0698f826157bf5325ac9095d891346e86322a0006806767c6 extends Twig_Template
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
        $__internal_bd8b5ebda473dcb83c0fb978573a6884243da16eeb350aa6b59f750d56db9baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8b5ebda473dcb83c0fb978573a6884243da16eeb350aa6b59f750d56db9baf->enter($__internal_bd8b5ebda473dcb83c0fb978573a6884243da16eeb350aa6b59f750d56db9baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_31bbce846201f760469d9557cf54b14a695a5ac0222f958dc7bd7652969a95fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bbce846201f760469d9557cf54b14a695a5ac0222f958dc7bd7652969a95fd->enter($__internal_31bbce846201f760469d9557cf54b14a695a5ac0222f958dc7bd7652969a95fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bd8b5ebda473dcb83c0fb978573a6884243da16eeb350aa6b59f750d56db9baf->leave($__internal_bd8b5ebda473dcb83c0fb978573a6884243da16eeb350aa6b59f750d56db9baf_prof);

        
        $__internal_31bbce846201f760469d9557cf54b14a695a5ac0222f958dc7bd7652969a95fd->leave($__internal_31bbce846201f760469d9557cf54b14a695a5ac0222f958dc7bd7652969a95fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
