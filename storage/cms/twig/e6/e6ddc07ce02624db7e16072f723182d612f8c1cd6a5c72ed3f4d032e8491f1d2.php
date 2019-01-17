<?php

/* /opt/lampp/htdocs/flat/themes/website/pages/about.htm */
class __TwigTemplate_e6f7f9173c4ae506305ee5a8c69a6761c8fa34045b5ed0abd4d9b7457a99b9f9 extends Twig_Template
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
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction((($context["filename"] ?? null) . ".md")        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/flat/themes/website/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% content filename ~ '.md' %}", "/opt/lampp/htdocs/flat/themes/website/pages/about.htm", "");
    }
}
