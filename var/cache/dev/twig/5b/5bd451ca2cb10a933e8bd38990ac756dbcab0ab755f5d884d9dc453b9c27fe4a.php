<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_67ed0b308a3b20af32497669367b6f76949cf51537563c750d886bdd9c14e7ab extends Twig_Template
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
        $__internal_d219624d2ec39881e31ec298cec3342e5d4284aca4b1445ecb64a4fc5270fd0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d219624d2ec39881e31ec298cec3342e5d4284aca4b1445ecb64a4fc5270fd0a->enter($__internal_d219624d2ec39881e31ec298cec3342e5d4284aca4b1445ecb64a4fc5270fd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_03439d224f3f505478dd98e39fe196056486175402bf910b2b35782d64374b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03439d224f3f505478dd98e39fe196056486175402bf910b2b35782d64374b12->enter($__internal_03439d224f3f505478dd98e39fe196056486175402bf910b2b35782d64374b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d219624d2ec39881e31ec298cec3342e5d4284aca4b1445ecb64a4fc5270fd0a->leave($__internal_d219624d2ec39881e31ec298cec3342e5d4284aca4b1445ecb64a4fc5270fd0a_prof);

        
        $__internal_03439d224f3f505478dd98e39fe196056486175402bf910b2b35782d64374b12->leave($__internal_03439d224f3f505478dd98e39fe196056486175402bf910b2b35782d64374b12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
