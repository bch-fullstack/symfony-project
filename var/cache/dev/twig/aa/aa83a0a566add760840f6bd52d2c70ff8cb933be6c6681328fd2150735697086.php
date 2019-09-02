<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d5cca6cc74f015fb48d321ef79264e7cc69bfdadc255f22b73c3e73eed45a5a9 extends Twig_Template
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
        $__internal_b85bde242f26a07d3d4333a0e51ae5023d9f0f459411ad0a4714152d9e8f58de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85bde242f26a07d3d4333a0e51ae5023d9f0f459411ad0a4714152d9e8f58de->enter($__internal_b85bde242f26a07d3d4333a0e51ae5023d9f0f459411ad0a4714152d9e8f58de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_94bccb68b91190f04e4ccba46a4388a12d82a6e42f7a66931bd78a17d702e0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bccb68b91190f04e4ccba46a4388a12d82a6e42f7a66931bd78a17d702e0e3->enter($__internal_94bccb68b91190f04e4ccba46a4388a12d82a6e42f7a66931bd78a17d702e0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b85bde242f26a07d3d4333a0e51ae5023d9f0f459411ad0a4714152d9e8f58de->leave($__internal_b85bde242f26a07d3d4333a0e51ae5023d9f0f459411ad0a4714152d9e8f58de_prof);

        
        $__internal_94bccb68b91190f04e4ccba46a4388a12d82a6e42f7a66931bd78a17d702e0e3->leave($__internal_94bccb68b91190f04e4ccba46a4388a12d82a6e42f7a66931bd78a17d702e0e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
