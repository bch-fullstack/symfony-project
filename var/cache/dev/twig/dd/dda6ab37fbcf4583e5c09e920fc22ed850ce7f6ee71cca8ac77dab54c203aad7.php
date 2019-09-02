<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ef0bec61c4b2aa57b76a1d82b09797bc1877fb49da66dfdc43a5ff03a830d3a6 extends Twig_Template
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
        $__internal_51bb1a30d0fc358c4e228d6343836ffb236f8c260f01a206808f00717cb4ca09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bb1a30d0fc358c4e228d6343836ffb236f8c260f01a206808f00717cb4ca09->enter($__internal_51bb1a30d0fc358c4e228d6343836ffb236f8c260f01a206808f00717cb4ca09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_e7113fc4553cf4c19784e331c39e47e3a35d7cfbe53aa06b609cedc666433357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7113fc4553cf4c19784e331c39e47e3a35d7cfbe53aa06b609cedc666433357->enter($__internal_e7113fc4553cf4c19784e331c39e47e3a35d7cfbe53aa06b609cedc666433357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_51bb1a30d0fc358c4e228d6343836ffb236f8c260f01a206808f00717cb4ca09->leave($__internal_51bb1a30d0fc358c4e228d6343836ffb236f8c260f01a206808f00717cb4ca09_prof);

        
        $__internal_e7113fc4553cf4c19784e331c39e47e3a35d7cfbe53aa06b609cedc666433357->leave($__internal_e7113fc4553cf4c19784e331c39e47e3a35d7cfbe53aa06b609cedc666433357_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
