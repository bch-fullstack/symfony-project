<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8b87475347bcd6bc9fe060ec4260beea5b38d682fdb039cd2a60fac765d81f92 extends Twig_Template
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
        $__internal_81e032b7a13739f8c884f7b02b1ab272b161254247f062f841b223846ad78b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e032b7a13739f8c884f7b02b1ab272b161254247f062f841b223846ad78b55->enter($__internal_81e032b7a13739f8c884f7b02b1ab272b161254247f062f841b223846ad78b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_05388c104378a5b62c63b64a245d60177a48bf65dd63f3e2c886adaae93133cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05388c104378a5b62c63b64a245d60177a48bf65dd63f3e2c886adaae93133cb->enter($__internal_05388c104378a5b62c63b64a245d60177a48bf65dd63f3e2c886adaae93133cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_81e032b7a13739f8c884f7b02b1ab272b161254247f062f841b223846ad78b55->leave($__internal_81e032b7a13739f8c884f7b02b1ab272b161254247f062f841b223846ad78b55_prof);

        
        $__internal_05388c104378a5b62c63b64a245d60177a48bf65dd63f3e2c886adaae93133cb->leave($__internal_05388c104378a5b62c63b64a245d60177a48bf65dd63f3e2c886adaae93133cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
