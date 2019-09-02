<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_59f88757b98d8f593e93b5e4010a407efd290aaddebc0e4c7aca77f44dc752d7 extends Twig_Template
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
        $__internal_fa1ee83025cb3c1b77a3fc11bdaa86067285b8185e9066f128db1060b4893a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1ee83025cb3c1b77a3fc11bdaa86067285b8185e9066f128db1060b4893a7c->enter($__internal_fa1ee83025cb3c1b77a3fc11bdaa86067285b8185e9066f128db1060b4893a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e8090f86f4a92ffbdbd2760788ad9f531c75f45780af7cfdd7cfdcabf3e4ad75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8090f86f4a92ffbdbd2760788ad9f531c75f45780af7cfdd7cfdcabf3e4ad75->enter($__internal_e8090f86f4a92ffbdbd2760788ad9f531c75f45780af7cfdd7cfdcabf3e4ad75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fa1ee83025cb3c1b77a3fc11bdaa86067285b8185e9066f128db1060b4893a7c->leave($__internal_fa1ee83025cb3c1b77a3fc11bdaa86067285b8185e9066f128db1060b4893a7c_prof);

        
        $__internal_e8090f86f4a92ffbdbd2760788ad9f531c75f45780af7cfdd7cfdcabf3e4ad75->leave($__internal_e8090f86f4a92ffbdbd2760788ad9f531c75f45780af7cfdd7cfdcabf3e4ad75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
