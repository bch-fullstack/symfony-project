<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c894797157bdf3a7c1341bccd7bceff6a1f87da3d39b5477103fd25bd29f0c9b extends Twig_Template
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
        $__internal_ef24ee70072ed76824911bbc88a529d8db43b3106b5abb9495ad1f5d0ba15e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef24ee70072ed76824911bbc88a529d8db43b3106b5abb9495ad1f5d0ba15e59->enter($__internal_ef24ee70072ed76824911bbc88a529d8db43b3106b5abb9495ad1f5d0ba15e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_07cb8e1573663d39721e463c81adf7d8f60edf21f7a8f8951f9d81e0063bdaaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cb8e1573663d39721e463c81adf7d8f60edf21f7a8f8951f9d81e0063bdaaa->enter($__internal_07cb8e1573663d39721e463c81adf7d8f60edf21f7a8f8951f9d81e0063bdaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ef24ee70072ed76824911bbc88a529d8db43b3106b5abb9495ad1f5d0ba15e59->leave($__internal_ef24ee70072ed76824911bbc88a529d8db43b3106b5abb9495ad1f5d0ba15e59_prof);

        
        $__internal_07cb8e1573663d39721e463c81adf7d8f60edf21f7a8f8951f9d81e0063bdaaa->leave($__internal_07cb8e1573663d39721e463c81adf7d8f60edf21f7a8f8951f9d81e0063bdaaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
