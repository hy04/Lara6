<?php

/* /Applications/MAMP/htdocs/acme/themes/acme/partials/site/footer.htm */
class __TwigTemplate_7a0a0a37cb96cbd6aae83643bd3d8d8675d39b748281d51dd76606b87462fb85 extends Twig_Template
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
        echo "<p class=\"text-center\">Copyright &copy; 2019 Acme Services</p>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/acme/themes/acme/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p class=\"text-center\">Copyright &copy; 2019 Acme Services</p>", "/Applications/MAMP/htdocs/acme/themes/acme/partials/site/footer.htm", "");
    }
}
