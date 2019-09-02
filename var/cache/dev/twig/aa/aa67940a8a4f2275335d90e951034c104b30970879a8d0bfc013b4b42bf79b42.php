<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3bebc8679f9932a3df7e07ad45f5a9b8adbda48f5750ff05169b957a8855987c extends Twig_Template
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
        $__internal_1e88e5d164ab780694af878cbf9f9a52544759e343fe39a650a3d0de9af5e8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e88e5d164ab780694af878cbf9f9a52544759e343fe39a650a3d0de9af5e8a6->enter($__internal_1e88e5d164ab780694af878cbf9f9a52544759e343fe39a650a3d0de9af5e8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_042a9e3bc2e0ec1f34c6ec26a13e0a0eaf758e8fa6d307f386ee846d2d3d5e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042a9e3bc2e0ec1f34c6ec26a13e0a0eaf758e8fa6d307f386ee846d2d3d5e7b->enter($__internal_042a9e3bc2e0ec1f34c6ec26a13e0a0eaf758e8fa6d307f386ee846d2d3d5e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1e88e5d164ab780694af878cbf9f9a52544759e343fe39a650a3d0de9af5e8a6->leave($__internal_1e88e5d164ab780694af878cbf9f9a52544759e343fe39a650a3d0de9af5e8a6_prof);

        
        $__internal_042a9e3bc2e0ec1f34c6ec26a13e0a0eaf758e8fa6d307f386ee846d2d3d5e7b->leave($__internal_042a9e3bc2e0ec1f34c6ec26a13e0a0eaf758e8fa6d307f386ee846d2d3d5e7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
