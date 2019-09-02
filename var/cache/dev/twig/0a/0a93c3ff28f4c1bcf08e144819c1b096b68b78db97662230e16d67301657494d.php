<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8d7fc57ec57976c834bdabbe0692a6b93448dc3d151726d1fff2da8573abd814 extends Twig_Template
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
        $__internal_4bba8d58cee65edbec0223e41f662403ea1ec54330504d0e019a5206086ada38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bba8d58cee65edbec0223e41f662403ea1ec54330504d0e019a5206086ada38->enter($__internal_4bba8d58cee65edbec0223e41f662403ea1ec54330504d0e019a5206086ada38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_bf2f12dd1338d8d44b99aec5ddd0fd6e9de0ed0c1a883ab53d0db879a4105fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2f12dd1338d8d44b99aec5ddd0fd6e9de0ed0c1a883ab53d0db879a4105fac->enter($__internal_bf2f12dd1338d8d44b99aec5ddd0fd6e9de0ed0c1a883ab53d0db879a4105fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4bba8d58cee65edbec0223e41f662403ea1ec54330504d0e019a5206086ada38->leave($__internal_4bba8d58cee65edbec0223e41f662403ea1ec54330504d0e019a5206086ada38_prof);

        
        $__internal_bf2f12dd1338d8d44b99aec5ddd0fd6e9de0ed0c1a883ab53d0db879a4105fac->leave($__internal_bf2f12dd1338d8d44b99aec5ddd0fd6e9de0ed0c1a883ab53d0db879a4105fac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/tietohallinto/Documents/GitHub/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
