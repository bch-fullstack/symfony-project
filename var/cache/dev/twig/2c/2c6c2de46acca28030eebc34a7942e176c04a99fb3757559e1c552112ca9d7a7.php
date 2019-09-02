<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3e350fe11d29c7026f598fb1f4febdb72797f9f8cc3a0704d0a7346f746d8a52 extends Twig_Template
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
        $__internal_e38724d90f0c6348301d7b12dba7c4a90209f635b8c1bb920987394923d355b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38724d90f0c6348301d7b12dba7c4a90209f635b8c1bb920987394923d355b4->enter($__internal_e38724d90f0c6348301d7b12dba7c4a90209f635b8c1bb920987394923d355b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b7b4d9117abf1e8d5f9f728812ec81c90a47a23c072dfa5aaf5e68c10965b5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b4d9117abf1e8d5f9f728812ec81c90a47a23c072dfa5aaf5e68c10965b5a7->enter($__internal_b7b4d9117abf1e8d5f9f728812ec81c90a47a23c072dfa5aaf5e68c10965b5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e38724d90f0c6348301d7b12dba7c4a90209f635b8c1bb920987394923d355b4->leave($__internal_e38724d90f0c6348301d7b12dba7c4a90209f635b8c1bb920987394923d355b4_prof);

        
        $__internal_b7b4d9117abf1e8d5f9f728812ec81c90a47a23c072dfa5aaf5e68c10965b5a7->leave($__internal_b7b4d9117abf1e8d5f9f728812ec81c90a47a23c072dfa5aaf5e68c10965b5a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
