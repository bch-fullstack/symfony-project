<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7b8dedebbcaf0a4e981bec2f3859260da2ebd5acaa1d1b18c477fa7ae977e80f extends Twig_Template
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
        $__internal_f215f9593d4f1b95e14639a1db16903048c33b60e8057239537487ac1961940a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f215f9593d4f1b95e14639a1db16903048c33b60e8057239537487ac1961940a->enter($__internal_f215f9593d4f1b95e14639a1db16903048c33b60e8057239537487ac1961940a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_c0b549ea58c5c3cdb2b5cb5dc2b077c4bfef5546f7732447bbd6d7b04d802ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b549ea58c5c3cdb2b5cb5dc2b077c4bfef5546f7732447bbd6d7b04d802ed4->enter($__internal_c0b549ea58c5c3cdb2b5cb5dc2b077c4bfef5546f7732447bbd6d7b04d802ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_f215f9593d4f1b95e14639a1db16903048c33b60e8057239537487ac1961940a->leave($__internal_f215f9593d4f1b95e14639a1db16903048c33b60e8057239537487ac1961940a_prof);

        
        $__internal_c0b549ea58c5c3cdb2b5cb5dc2b077c4bfef5546f7732447bbd6d7b04d802ed4->leave($__internal_c0b549ea58c5c3cdb2b5cb5dc2b077c4bfef5546f7732447bbd6d7b04d802ed4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
