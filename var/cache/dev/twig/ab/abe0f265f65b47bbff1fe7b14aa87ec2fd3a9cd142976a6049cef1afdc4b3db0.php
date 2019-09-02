<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_495cfb1d25d8f3bdec897196383990c2ecbced19b77ac0f19df36d603f51b252 extends Twig_Template
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
        $__internal_7964e913deb38d1e38b429f93cf450e4d7abcf732c4e4dd3e6cd416c63a67caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7964e913deb38d1e38b429f93cf450e4d7abcf732c4e4dd3e6cd416c63a67caf->enter($__internal_7964e913deb38d1e38b429f93cf450e4d7abcf732c4e4dd3e6cd416c63a67caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_dc4ed1478b90812fbcb717e9550122127636dbd04367837fc1c00309e38edd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4ed1478b90812fbcb717e9550122127636dbd04367837fc1c00309e38edd8a->enter($__internal_dc4ed1478b90812fbcb717e9550122127636dbd04367837fc1c00309e38edd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7964e913deb38d1e38b429f93cf450e4d7abcf732c4e4dd3e6cd416c63a67caf->leave($__internal_7964e913deb38d1e38b429f93cf450e4d7abcf732c4e4dd3e6cd416c63a67caf_prof);

        
        $__internal_dc4ed1478b90812fbcb717e9550122127636dbd04367837fc1c00309e38edd8a->leave($__internal_dc4ed1478b90812fbcb717e9550122127636dbd04367837fc1c00309e38edd8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
