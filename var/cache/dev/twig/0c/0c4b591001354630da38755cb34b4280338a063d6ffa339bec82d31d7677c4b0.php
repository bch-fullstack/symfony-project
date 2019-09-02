<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4b2e27988eed615d35295441117f8caf5fbec0967cbda51c9f86f9e55d4bde81 extends Twig_Template
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
        $__internal_884c39757ead2ddb7ce72aa2c28419ef95bfe512e820b8df9cdc423aa458c3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884c39757ead2ddb7ce72aa2c28419ef95bfe512e820b8df9cdc423aa458c3ca->enter($__internal_884c39757ead2ddb7ce72aa2c28419ef95bfe512e820b8df9cdc423aa458c3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d291e3eb01bd8e6e393067d466a94a6628199db584a25e6a78bc4a51f5aed379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d291e3eb01bd8e6e393067d466a94a6628199db584a25e6a78bc4a51f5aed379->enter($__internal_d291e3eb01bd8e6e393067d466a94a6628199db584a25e6a78bc4a51f5aed379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_884c39757ead2ddb7ce72aa2c28419ef95bfe512e820b8df9cdc423aa458c3ca->leave($__internal_884c39757ead2ddb7ce72aa2c28419ef95bfe512e820b8df9cdc423aa458c3ca_prof);

        
        $__internal_d291e3eb01bd8e6e393067d466a94a6628199db584a25e6a78bc4a51f5aed379->leave($__internal_d291e3eb01bd8e6e393067d466a94a6628199db584a25e6a78bc4a51f5aed379_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
