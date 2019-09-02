<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2256ecca45113b85f61bda3af7ace20b8e4179eac1b60fcbdcb2ec05e5ed29ac extends Twig_Template
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
        $__internal_f9dd0ae2625bb0e11670080cffa507178a0d5a0a79600fd1689fbc1b39eebe86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9dd0ae2625bb0e11670080cffa507178a0d5a0a79600fd1689fbc1b39eebe86->enter($__internal_f9dd0ae2625bb0e11670080cffa507178a0d5a0a79600fd1689fbc1b39eebe86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5129aae7dffddd5ce85a2f5df865f47e8014820abbe90243dd1fc0e022cfb59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5129aae7dffddd5ce85a2f5df865f47e8014820abbe90243dd1fc0e022cfb59c->enter($__internal_5129aae7dffddd5ce85a2f5df865f47e8014820abbe90243dd1fc0e022cfb59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f9dd0ae2625bb0e11670080cffa507178a0d5a0a79600fd1689fbc1b39eebe86->leave($__internal_f9dd0ae2625bb0e11670080cffa507178a0d5a0a79600fd1689fbc1b39eebe86_prof);

        
        $__internal_5129aae7dffddd5ce85a2f5df865f47e8014820abbe90243dd1fc0e022cfb59c->leave($__internal_5129aae7dffddd5ce85a2f5df865f47e8014820abbe90243dd1fc0e022cfb59c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
