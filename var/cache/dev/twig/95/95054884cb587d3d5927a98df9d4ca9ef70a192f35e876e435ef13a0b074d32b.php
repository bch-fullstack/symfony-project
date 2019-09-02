<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_560e8b52d178a5a334d440485f5e98e60f11474ae76e82c895bc816739d46ed5 extends Twig_Template
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
        $__internal_4947caf2b6d400edc44135f8e01e5b5e302638452a941de2027e57d05b1c6a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4947caf2b6d400edc44135f8e01e5b5e302638452a941de2027e57d05b1c6a3b->enter($__internal_4947caf2b6d400edc44135f8e01e5b5e302638452a941de2027e57d05b1c6a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_597e0db77e76568ccce035d03bc8a556683e02afc1ea9e8437c9227f500d10ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597e0db77e76568ccce035d03bc8a556683e02afc1ea9e8437c9227f500d10ed->enter($__internal_597e0db77e76568ccce035d03bc8a556683e02afc1ea9e8437c9227f500d10ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4947caf2b6d400edc44135f8e01e5b5e302638452a941de2027e57d05b1c6a3b->leave($__internal_4947caf2b6d400edc44135f8e01e5b5e302638452a941de2027e57d05b1c6a3b_prof);

        
        $__internal_597e0db77e76568ccce035d03bc8a556683e02afc1ea9e8437c9227f500d10ed->leave($__internal_597e0db77e76568ccce035d03bc8a556683e02afc1ea9e8437c9227f500d10ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
