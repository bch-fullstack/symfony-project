<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_cd5652ebacd9dfddf5784ed9afcdcc0904a62fe3c3f8dc825f8ab84b48236128 extends Twig_Template
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
        $__internal_e3b0219217e5c5c516ada4feaa05789d1eeeb82ffeb0372dbff56f9f029fe020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b0219217e5c5c516ada4feaa05789d1eeeb82ffeb0372dbff56f9f029fe020->enter($__internal_e3b0219217e5c5c516ada4feaa05789d1eeeb82ffeb0372dbff56f9f029fe020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_cb6942247c2f106822f5023cc5cbcc621cca3339197e8301ae0136953f9d1f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6942247c2f106822f5023cc5cbcc621cca3339197e8301ae0136953f9d1f35->enter($__internal_cb6942247c2f106822f5023cc5cbcc621cca3339197e8301ae0136953f9d1f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e3b0219217e5c5c516ada4feaa05789d1eeeb82ffeb0372dbff56f9f029fe020->leave($__internal_e3b0219217e5c5c516ada4feaa05789d1eeeb82ffeb0372dbff56f9f029fe020_prof);

        
        $__internal_cb6942247c2f106822f5023cc5cbcc621cca3339197e8301ae0136953f9d1f35->leave($__internal_cb6942247c2f106822f5023cc5cbcc621cca3339197e8301ae0136953f9d1f35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
