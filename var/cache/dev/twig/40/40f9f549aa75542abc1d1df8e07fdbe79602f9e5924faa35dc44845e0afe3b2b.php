<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7bcdcbd17d7e3cac9211ac93d7e56b546580c775021defa5590ab503fe10c87c extends Twig_Template
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
        $__internal_6b1a09b1ab78c4de45e8d1e8ddea5f3dea604ccf2fd0a5fdfde9fb459c9d9711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1a09b1ab78c4de45e8d1e8ddea5f3dea604ccf2fd0a5fdfde9fb459c9d9711->enter($__internal_6b1a09b1ab78c4de45e8d1e8ddea5f3dea604ccf2fd0a5fdfde9fb459c9d9711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2ffd96ba795a896e330d76431ca3bfc332efafc799d713a8a868fb9477c7a7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ffd96ba795a896e330d76431ca3bfc332efafc799d713a8a868fb9477c7a7ed->enter($__internal_2ffd96ba795a896e330d76431ca3bfc332efafc799d713a8a868fb9477c7a7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6b1a09b1ab78c4de45e8d1e8ddea5f3dea604ccf2fd0a5fdfde9fb459c9d9711->leave($__internal_6b1a09b1ab78c4de45e8d1e8ddea5f3dea604ccf2fd0a5fdfde9fb459c9d9711_prof);

        
        $__internal_2ffd96ba795a896e330d76431ca3bfc332efafc799d713a8a868fb9477c7a7ed->leave($__internal_2ffd96ba795a896e330d76431ca3bfc332efafc799d713a8a868fb9477c7a7ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
