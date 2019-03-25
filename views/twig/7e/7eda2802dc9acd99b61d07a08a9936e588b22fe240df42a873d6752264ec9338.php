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
class __TwigTemplate_3a7bcdf80ee87e505e8a751d7700f7d88b213046f6c284f63c5e1a55b693b3c0 extends \Twig\Template
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
            'script' => [$this, 'block_script'],
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
        // line 17
        echo "    </head>
  <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"background: #7CA2C1 !important;\">
            <a class=\"navbar-brand\" href=\"/\">Shop</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                </ul>
                <span class=\"navbar-text\" style=\"font-size: 23px;\">
                   Balance: ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "credit", []), "html", null, true);
        echo "
                </span>
            </div>
        </nav>
        <div class=\"container-fluid\">
            ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "        </div>

        <footer class=\"text-center\">
            ";
        // line 40
        $this->displayBlock('footer', $context, $blocks);
        // line 43
        echo "        </footer>

        ";
        // line 45
        $this->displayBlock('script', $context, $blocks);
        // line 50
        echo "  </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "            <!-- <link rel=\"stylesheet\" href=\"style.css\" /> -->
            <title>Welcome to shop -- ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
            <style>
                #top_10{
                    display: none;
                }
            </style>
        ";
    }

    public function block_title($context, array $blocks = [])
    {
        echo " My Webpage ";
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
    }

    // line 40
    public function block_footer($context, array $blocks = [])
    {
        // line 41
        echo "                &copy; Copyright 2019 by <a href=\"http://gideononwuka.com\">dongido</a>.
            ";
    }

    // line 45
    public function block_script($context, array $blocks = [])
    {
        echo " 
            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 45,  125 => 41,  122 => 40,  117 => 36,  97 => 6,  94 => 5,  91 => 4,  86 => 50,  84 => 45,  80 => 43,  78 => 40,  73 => 37,  71 => 36,  63 => 31,  47 => 17,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
    <head>
        {% block head %}
            <!-- <link rel=\"stylesheet\" href=\"style.css\" /> -->
            <title>Welcome to shop -- {% block title %} My Webpage {% endblock %}</title>
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
            <style>
                #top_10{
                    display: none;
                }
            </style>
        {% endblock %}
    </head>
  <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"background: #7CA2C1 !important;\">
            <a class=\"navbar-brand\" href=\"/\">Shop</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                </ul>
                <span class=\"navbar-text\" style=\"font-size: 23px;\">
                   Balance: {{ session.credit }}
                </span>
            </div>
        </nav>
        <div class=\"container-fluid\">
            {% block content %}{% endblock %}
        </div>

        <footer class=\"text-center\">
            {% block footer %}
                &copy; Copyright 2019 by <a href=\"http://gideononwuka.com\">dongido</a>.
            {% endblock %}
        </footer>

        {% block script %} 
            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        {% endblock %}
  </body>
</html>", "base.html", "/Users/dongido/Projects/abc-hosting/views/base.html");
    }
}
