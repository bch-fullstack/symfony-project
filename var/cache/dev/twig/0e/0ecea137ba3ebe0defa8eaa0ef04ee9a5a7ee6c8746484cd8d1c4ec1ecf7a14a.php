<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_208be8c6764811f33bd143a36f331c65ffd53d52cb9aecbcf5d11fb50be0281c extends Twig_Template
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
        $__internal_e71a19e8f348d0b312da556e3325032bf521fdb0954923e686874a345a71b668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71a19e8f348d0b312da556e3325032bf521fdb0954923e686874a345a71b668->enter($__internal_e71a19e8f348d0b312da556e3325032bf521fdb0954923e686874a345a71b668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b5473b0bed16ce0092abe3db1fd3f9d6d7fe58edf69de1fa09b4a24706826d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5473b0bed16ce0092abe3db1fd3f9d6d7fe58edf69de1fa09b4a24706826d66->enter($__internal_b5473b0bed16ce0092abe3db1fd3f9d6d7fe58edf69de1fa09b4a24706826d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e71a19e8f348d0b312da556e3325032bf521fdb0954923e686874a345a71b668->leave($__internal_e71a19e8f348d0b312da556e3325032bf521fdb0954923e686874a345a71b668_prof);

        
        $__internal_b5473b0bed16ce0092abe3db1fd3f9d6d7fe58edf69de1fa09b4a24706826d66->leave($__internal_b5473b0bed16ce0092abe3db1fd3f9d6d7fe58edf69de1fa09b4a24706826d66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
