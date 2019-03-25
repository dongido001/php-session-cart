<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html */
class __TwigTemplate_e724be823fdf21ee7c4f332fba9ff165fe2173db2949bad550f1c84ee5cfa4e8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "  </head>
  <body>
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">Navbar w/ text</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                </ul>
                <span class=\"navbar-text\">
                Navbar text with an inline element
                </span>
            </div>
        </nav>
        <div id=\"content\">";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
        <footer class=\"fixed-bottom text-center\">
            ";
        // line 32
        $this->displayBlock('footer', $context, $blocks);
        // line 35
        echo "        </footer>
    </div>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
  </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "        <!-- <link rel=\"stylesheet\" href=\"style.css\" /> -->
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    ";
    }

    public function block_title($context, array $blocks = [])
    {
        echo " My Webpage ";
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
    }

    // line 32
    public function block_footer($context, array $blocks = [])
    {
        // line 33
        echo "                &copy; Copyright 2011 by <a href=\"http://domain.invalid/\">you</a>.
            ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  109 => 32,  104 => 30,  90 => 6,  87 => 5,  84 => 4,  74 => 35,  72 => 32,  67 => 30,  46 => 11,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    {% block head %}
        <!-- <link rel=\"stylesheet\" href=\"style.css\" /> -->
        <title>{% block title %} My Webpage {% endblock %}</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    {% endblock %}
  </head>
  <body>
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">Navbar w/ text</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                </ul>
                <span class=\"navbar-text\">
                Navbar text with an inline element
                </span>
            </div>
        </nav>
        <div id=\"content\">{% block content %}{% endblock %}</div>
        <footer class=\"fixed-bottom text-center\">
            {% block footer %}
                &copy; Copyright 2011 by <a href=\"http://domain.invalid/\">you</a>.
            {% endblock %}
        </footer>
    </div>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
  </body>
</html>", "base.html", "/Users/dongido/Projects/abc-hosting/views/base.html");
    }
}
