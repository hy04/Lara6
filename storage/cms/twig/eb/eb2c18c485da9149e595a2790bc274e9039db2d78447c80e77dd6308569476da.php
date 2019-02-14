<?php

/* /Applications/MAMP/htdocs/acme/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_dc455f9153dabe5c2a2b223cdc1f3458f247f33ade68b37faad9b93c6bbff05d extends Twig_Template
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
        echo "<h1>Contact Us</h1>
<form>
  <div class=\"form-group\">
    <label>Name</label>
    <input type=\"text\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
    <label>Email</label>
    <input type=\"text\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
    <label>Message</label>
    <textarea class=\"form-control\"></textarea>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/acme/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact Us</h1>
<form>
  <div class=\"form-group\">
    <label>Name</label>
    <input type=\"text\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
    <label>Email</label>
    <input type=\"text\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
    <label>Message</label>
    <textarea class=\"form-control\"></textarea>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>", "/Applications/MAMP/htdocs/acme/themes/responsiv-clean/pages/contact.htm", "");
    }
}
