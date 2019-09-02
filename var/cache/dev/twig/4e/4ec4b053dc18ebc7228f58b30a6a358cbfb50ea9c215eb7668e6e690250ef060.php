<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9c416650d2b1e5ef1a8e7ebdf9f82637796b29a736f060a449d843af5f5b66e1 extends Twig_Template
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
        $__internal_79940677288acd0737e92cbd29f127404ef1f586aeba9b7e2d084ba6322f1058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79940677288acd0737e92cbd29f127404ef1f586aeba9b7e2d084ba6322f1058->enter($__internal_79940677288acd0737e92cbd29f127404ef1f586aeba9b7e2d084ba6322f1058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_bd8c388bd2d696f6ec09315a4a05012281c51ee0abbd1cf9c9d02cf47c48c4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8c388bd2d696f6ec09315a4a05012281c51ee0abbd1cf9c9d02cf47c48c4ea->enter($__internal_bd8c388bd2d696f6ec09315a4a05012281c51ee0abbd1cf9c9d02cf47c48c4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_79940677288acd0737e92cbd29f127404ef1f586aeba9b7e2d084ba6322f1058->leave($__internal_79940677288acd0737e92cbd29f127404ef1f586aeba9b7e2d084ba6322f1058_prof);

        
        $__internal_bd8c388bd2d696f6ec09315a4a05012281c51ee0abbd1cf9c9d02cf47c48c4ea->leave($__internal_bd8c388bd2d696f6ec09315a4a05012281c51ee0abbd1cf9c9d02cf47c48c4ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
