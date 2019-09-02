<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9ef369a0eeb937e09fc70afea8044e9a68d1b1c0247bd7907f7eb3b45eaa1377 extends Twig_Template
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
        $__internal_3b7645a9e3280a6230b50ce2dc27bd6c914752172f863bd7e07196af9b2322f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7645a9e3280a6230b50ce2dc27bd6c914752172f863bd7e07196af9b2322f2->enter($__internal_3b7645a9e3280a6230b50ce2dc27bd6c914752172f863bd7e07196af9b2322f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3f57693e3af2954146f4f883b6d6e18469decfd58fc54cf923f61e87abc0ccd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f57693e3af2954146f4f883b6d6e18469decfd58fc54cf923f61e87abc0ccd6->enter($__internal_3f57693e3af2954146f4f883b6d6e18469decfd58fc54cf923f61e87abc0ccd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3b7645a9e3280a6230b50ce2dc27bd6c914752172f863bd7e07196af9b2322f2->leave($__internal_3b7645a9e3280a6230b50ce2dc27bd6c914752172f863bd7e07196af9b2322f2_prof);

        
        $__internal_3f57693e3af2954146f4f883b6d6e18469decfd58fc54cf923f61e87abc0ccd6->leave($__internal_3f57693e3af2954146f4f883b6d6e18469decfd58fc54cf923f61e87abc0ccd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
