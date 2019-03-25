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

/* index.twig */
class __TwigTemplate_8169967506b505a57fba1f275d89e1dd628179ed667218395d8f1c187c7eab33 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "    </head>
    <body>
        <div id=\"content\">";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
        <div id=\"footer\">
            ";
        // line 12
        $this->displayBlock('footer', $context, $blocks);
        // line 15
        echo "        </div>
    </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "            <link rel=\"stylesheet\" href=\"style.css\" />
            <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
        ";
    }

    public function block_title($context, array $blocks = [])
    {
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
    }

    // line 12
    public function block_footer($context, array $blocks = [])
    {
        // line 13
        echo "                &copy; Copyright 2011 by <a href=\"http://domain.invalid/\">you</a>.
            ";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 13,  84 => 12,  79 => 10,  69 => 6,  66 => 5,  63 => 4,  57 => 15,  55 => 12,  50 => 10,  46 => 8,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% block head %}
            <link rel=\"stylesheet\" href=\"style.css\" />
            <title>{% block title %}{% endblock %} - My Webpage</title>
        {% endblock %}
    </head>
    <body>
        <div id=\"content\">{% block content %}{% endblock %}</div>
        <div id=\"footer\">
            {% block footer %}
                &copy; Copyright 2011 by <a href=\"http://domain.invalid/\">you</a>.
            {% endblock %}
        </div>
    </body>
</html>", "index.twig", "/Users/dongido/Projects/abc-hosting/views/index.twig");
    }
}
