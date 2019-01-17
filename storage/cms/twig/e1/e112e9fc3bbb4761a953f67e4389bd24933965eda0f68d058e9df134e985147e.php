<?php

/* /opt/lampp/htdocs/flat/themes/website/layouts/fallback.htm */
class __TwigTemplate_c6201b479a5218e045017446c90f2ea31c695dd4d3125a8039a82dd78706b529 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/flat/themes/website/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/opt/lampp/htdocs/flat/themes/website/layouts/fallback.htm", "");
    }
}
