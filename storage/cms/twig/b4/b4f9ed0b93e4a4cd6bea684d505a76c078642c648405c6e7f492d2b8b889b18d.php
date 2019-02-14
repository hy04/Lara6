<?php

/* /Applications/MAMP/htdocs/acme/themes/acme/layouts/default.htm */
class __TwigTemplate_05d26d8c67c0ec73c490c7c34dcd5649c115b24e0c0ae186c8ef6d77fb4e8d98 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
  <head>
    <title>Acme - ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/sandstone/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\">
    ";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 9
        echo "  </head>
  <body>
    <header>
      ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "    </header>
    <div class=\"container\">
      ";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 16
        echo "    </div>
    <footer>
      ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "    </footer>
    <script src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/app.js");
        echo "\"></script>



  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/acme/themes/acme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  74 => 21,  70 => 20,  67 => 19,  63 => 18,  59 => 16,  57 => 15,  53 => 13,  49 => 12,  44 => 9,  41 => 8,  37 => 7,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
  <head>
    <title>Acme - {{this.page.title}}</title>
    <meta name=\"description\" content=\"{{this.page.meta_description}}\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/sandstone/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/theme.css'|theme}}\">
    {% styles %}
  </head>
  <body>
    <header>
      {% partial 'site/header' %}
    </header>
    <div class=\"container\">
      {% page %}
    </div>
    <footer>
      {% partial 'site/footer' %}
    </footer>
    <script src=\"{{'assets/vendor/jquery.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/bootstrap.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/app.js'|theme}}\"></script>



  </body>
</html>", "/Applications/MAMP/htdocs/acme/themes/acme/layouts/default.htm", "");
    }
}
