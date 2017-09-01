<?php

/* index.twig */
class __TwigTemplate_7d3d21a07b02bf6e16fd3592ad618740a56d29be0742a9e13fdc5450e625392a extends Twig_Template
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
        // line 1
        echo "templates:
";
        // line 2
        echo twig_escape_filter($this->env, ($context["kopet"] ?? null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("templates:
{{kopet}}
", "index.twig", "/cluster/Others/Wikicoding/app/templates/index.twig");
    }
}
