<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_15c00127392710abb9a21bacbad0f804745c7f2ad4b33d5628346b8c9bb9edc8 extends Twig_Template
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
        $__internal_1c35e623ae14650500d9a91bb664e9071bcbad7868314a144e2efcf27a4d9cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c35e623ae14650500d9a91bb664e9071bcbad7868314a144e2efcf27a4d9cc1->enter($__internal_1c35e623ae14650500d9a91bb664e9071bcbad7868314a144e2efcf27a4d9cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_8a65e14f22c7e2d6f05279e920fa689292a83345fb666b251b6d69fbb8f36dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a65e14f22c7e2d6f05279e920fa689292a83345fb666b251b6d69fbb8f36dd6->enter($__internal_8a65e14f22c7e2d6f05279e920fa689292a83345fb666b251b6d69fbb8f36dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1c35e623ae14650500d9a91bb664e9071bcbad7868314a144e2efcf27a4d9cc1->leave($__internal_1c35e623ae14650500d9a91bb664e9071bcbad7868314a144e2efcf27a4d9cc1_prof);

        
        $__internal_8a65e14f22c7e2d6f05279e920fa689292a83345fb666b251b6d69fbb8f36dd6->leave($__internal_8a65e14f22c7e2d6f05279e920fa689292a83345fb666b251b6d69fbb8f36dd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
