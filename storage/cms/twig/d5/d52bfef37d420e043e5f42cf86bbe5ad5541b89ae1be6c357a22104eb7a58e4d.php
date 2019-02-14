<?php

/* /Applications/MAMP/htdocs/acme/themes/acme/partials/site/header.htm */
class __TwigTemplate_56d51536acec3577c5c2fe9d0884f5fee213b462d4a1337b39d3a19b0555db80 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"/acme\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
      <li class=\"";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
      </li>
      <li class=\"";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
      </li>
      <li class=\"";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a>
      </li>
      <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "active";
        }
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
      </li>
    </ul>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/acme/themes/acme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  68 => 17,  63 => 15,  57 => 14,  52 => 12,  46 => 11,  41 => 9,  35 => 8,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"/acme\">{{this.theme.site_name}}</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
      <li class=\"{% if this.page.id == 'home' %}active{% endif %}\">
        <a class=\"nav-link\" href=\"{{ 'home'|page}}\">Home</a>
      </li>
      <li class=\"{% if this.page.id == 'about' %}active{% endif %}\">
        <a class=\"nav-link\" href=\"{{ 'about'|page}}\">About</a>
      </li>
      <li class=\"{% if this.page.id == 'blog' %}active{% endif %}\">
        <a class=\"nav-link\" href=\"{{ 'blog'|page}}\">Blog</a>
      </li>
      <li class=\"{% if this.page.id == 'contact' %}active{% endif %}\">
        <a class=\"nav-link\" href=\"{{ 'contact'|page}}\">Contact</a>
      </li>
    </ul>
  </div>
</nav>", "/Applications/MAMP/htdocs/acme/themes/acme/partials/site/header.htm", "");
    }
}
