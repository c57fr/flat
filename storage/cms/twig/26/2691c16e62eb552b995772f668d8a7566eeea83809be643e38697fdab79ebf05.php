<?php

/* /opt/lampp/htdocs/flat/themes/website/pages/home.htm */
class __TwigTemplate_0f1ca6703f3885952d0aefd0e5d069edb22f283a153c81b396aef877be290368 extends Twig_Template
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
        echo "<h1>Hello ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!</h1>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/flat/themes/website/pages/home.htm";
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
        return new Twig_Source("<h1>Hello {{ name }}!</h1>", "/opt/lampp/htdocs/flat/themes/website/pages/home.htm", "");
    }
}
