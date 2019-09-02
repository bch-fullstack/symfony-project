<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0d48afd35a046e2b2baa6070668a4a3311cbcce476240d4c94916fabf34a99bd extends Twig_Template
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
        $__internal_6f21469e3d87ea66942db1a15862d94f380d08a9e7e120fc65259fe07aa327cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f21469e3d87ea66942db1a15862d94f380d08a9e7e120fc65259fe07aa327cf->enter($__internal_6f21469e3d87ea66942db1a15862d94f380d08a9e7e120fc65259fe07aa327cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_1fd9234229464c6a7d756e33d26b9ee74da452835a14b2200cd46a4b73562b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd9234229464c6a7d756e33d26b9ee74da452835a14b2200cd46a4b73562b3e->enter($__internal_1fd9234229464c6a7d756e33d26b9ee74da452835a14b2200cd46a4b73562b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6f21469e3d87ea66942db1a15862d94f380d08a9e7e120fc65259fe07aa327cf->leave($__internal_6f21469e3d87ea66942db1a15862d94f380d08a9e7e120fc65259fe07aa327cf_prof);

        
        $__internal_1fd9234229464c6a7d756e33d26b9ee74da452835a14b2200cd46a4b73562b3e->leave($__internal_1fd9234229464c6a7d756e33d26b9ee74da452835a14b2200cd46a4b73562b3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
