<?php

/* /Applications/MAMP/htdocs/acme/themes/acme/pages/contact.htm */
class __TwigTemplate_602736d24dabd6bb5b609f56757f28453abaf6a376d544a1a045604dd22f848d extends Twig_Template
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
        return "/Applications/MAMP/htdocs/acme/themes/acme/pages/contact.htm";
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
</form>", "/Applications/MAMP/htdocs/acme/themes/acme/pages/contact.htm", "");
    }
}
