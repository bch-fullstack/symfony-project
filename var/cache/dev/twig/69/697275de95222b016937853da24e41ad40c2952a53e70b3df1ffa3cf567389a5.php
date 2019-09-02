<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_74b6eb33431e1d2269b8a34ddf75e4ac32bc6551b85f60c0f8b13f43a4f556e8 extends Twig_Template
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
        $__internal_4c4bd1ff2f78d0262f33842d3ddb0da47d67d8d9adc9cbf3d6c6a555ccdad5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4bd1ff2f78d0262f33842d3ddb0da47d67d8d9adc9cbf3d6c6a555ccdad5a1->enter($__internal_4c4bd1ff2f78d0262f33842d3ddb0da47d67d8d9adc9cbf3d6c6a555ccdad5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_84f6ab66c7625372b5c92067134600892ab856159a261b8be8d6482d49eb19a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f6ab66c7625372b5c92067134600892ab856159a261b8be8d6482d49eb19a4->enter($__internal_84f6ab66c7625372b5c92067134600892ab856159a261b8be8d6482d49eb19a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4c4bd1ff2f78d0262f33842d3ddb0da47d67d8d9adc9cbf3d6c6a555ccdad5a1->leave($__internal_4c4bd1ff2f78d0262f33842d3ddb0da47d67d8d9adc9cbf3d6c6a555ccdad5a1_prof);

        
        $__internal_84f6ab66c7625372b5c92067134600892ab856159a261b8be8d6482d49eb19a4->leave($__internal_84f6ab66c7625372b5c92067134600892ab856159a261b8be8d6482d49eb19a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
