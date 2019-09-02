<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_732ac4de1dadfb5a86d1f907235868aa30d0ab9a4c07060de1755fcb83a7e1e2 extends Twig_Template
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
        $__internal_64287f7af7c439e1c7416ea65666883cfe0ac7d21f358ff65eff5313e7f16e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64287f7af7c439e1c7416ea65666883cfe0ac7d21f358ff65eff5313e7f16e59->enter($__internal_64287f7af7c439e1c7416ea65666883cfe0ac7d21f358ff65eff5313e7f16e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b1e287239eee604e80798f01bc54a7a585b1e5f9b076b30140ff5e752321ab10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e287239eee604e80798f01bc54a7a585b1e5f9b076b30140ff5e752321ab10->enter($__internal_b1e287239eee604e80798f01bc54a7a585b1e5f9b076b30140ff5e752321ab10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_64287f7af7c439e1c7416ea65666883cfe0ac7d21f358ff65eff5313e7f16e59->leave($__internal_64287f7af7c439e1c7416ea65666883cfe0ac7d21f358ff65eff5313e7f16e59_prof);

        
        $__internal_b1e287239eee604e80798f01bc54a7a585b1e5f9b076b30140ff5e752321ab10->leave($__internal_b1e287239eee604e80798f01bc54a7a585b1e5f9b076b30140ff5e752321ab10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
