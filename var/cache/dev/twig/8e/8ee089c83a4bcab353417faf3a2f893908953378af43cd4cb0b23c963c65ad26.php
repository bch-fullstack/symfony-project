<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a6c30209a0ee35b37683e288466f63f773d44181ece6d4f921f4433a2ec8b871 extends Twig_Template
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
        $__internal_dcabd4f0208ff77e0bdf8d71cd79ca6d85b73c61992abca8a48e78625abaa1b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcabd4f0208ff77e0bdf8d71cd79ca6d85b73c61992abca8a48e78625abaa1b1->enter($__internal_dcabd4f0208ff77e0bdf8d71cd79ca6d85b73c61992abca8a48e78625abaa1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_67983fdd74649548e42e6fddc2b0a28bd9aaf2084f72bb77197c2d86be6115e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67983fdd74649548e42e6fddc2b0a28bd9aaf2084f72bb77197c2d86be6115e6->enter($__internal_67983fdd74649548e42e6fddc2b0a28bd9aaf2084f72bb77197c2d86be6115e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_dcabd4f0208ff77e0bdf8d71cd79ca6d85b73c61992abca8a48e78625abaa1b1->leave($__internal_dcabd4f0208ff77e0bdf8d71cd79ca6d85b73c61992abca8a48e78625abaa1b1_prof);

        
        $__internal_67983fdd74649548e42e6fddc2b0a28bd9aaf2084f72bb77197c2d86be6115e6->leave($__internal_67983fdd74649548e42e6fddc2b0a28bd9aaf2084f72bb77197c2d86be6115e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
