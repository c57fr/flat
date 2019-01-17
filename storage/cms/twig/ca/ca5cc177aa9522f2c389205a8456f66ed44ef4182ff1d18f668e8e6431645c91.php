<?php

/* /opt/lampp/htdocs/flat/themes/website/layouts/default.htm */
class __TwigTemplate_d9f8ca4ef427e112556b181438c3a81866ea2cee720af3bcdf471e02fdffe546 extends Twig_Template
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
        echo "<html>

<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <link href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/styles.css", 1 => "assets/font.css"));
        echo "\" rel=\"stylesheet\">
</head>

<body>
    ";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 10
        echo "    <hr />
    ";
        // line 11
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['name'] = "Lio"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/flat/themes/website/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  44 => 11,  41 => 10,  39 => 9,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>

<head>
    <title>{{ this.page.title }}</title>
    <link href=\"{{ ['assets/styles.css', 'assets/font.css']|theme }}\" rel=\"stylesheet\">
</head>

<body>
    {% page %}
    <hr />
    {% partial 'footer' name='Lio' %}
</body>

</html>", "/opt/lampp/htdocs/flat/themes/website/layouts/default.htm", "");
    }
}
