<?php

/* /Applications/MAMP/htdocs/acme/themes/acme/pages/about.htm */
class __TwigTemplate_0c4f8e6265472f305b5f514531a58b5fa858b35a8d2829361f7d8370add0e8e3 extends Twig_Template
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
        echo "<h1>About Us</h1>
<p>This is the about page</p>
<hr>

";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/acme/themes/acme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About Us</h1>
<p>This is the about page</p>
<hr>

{% component 'resourcesLinks'%}", "/Applications/MAMP/htdocs/acme/themes/acme/pages/about.htm", "");
    }
}
