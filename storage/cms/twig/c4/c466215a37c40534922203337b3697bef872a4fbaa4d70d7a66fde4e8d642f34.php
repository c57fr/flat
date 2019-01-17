<?php

/* /opt/lampp/htdocs/flat/themes/website/partials/footer.htm */
class __TwigTemplate_11cc619e0166768bdcb593871a16fab7c545c2502db36a8dadfccda002666f41 extends Twig_Template
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
        echo "Thanks for visiting ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "! Like us on facebook...";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/flat/themes/website/partials/footer.htm";
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
        return new Twig_Source("Thanks for visiting {{ name }}! Like us on facebook...", "/opt/lampp/htdocs/flat/themes/website/partials/footer.htm", "");
    }
}
