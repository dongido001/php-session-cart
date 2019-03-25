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

/* index.html */
class __TwigTemplate_422dab30aa103e9a6409a84ff991f914818f935ea5b895795841cab578cb783f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "index.html", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Index.html";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        // line 11
        echo "   <div class=\"container-fluid\" style=\"padding: 14px;\">
    <div class=\"card-deck\">
        <div class=\"card\">
          <img src=\"...\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Card title</h5>
            <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class=\"card-footer\">
            <small class=\"text-muted\">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class=\"card\">
          <img src=\"...\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Card title</h5>
            <p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class=\"card-footer\">
            <small class=\"text-muted\">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class=\"card\">
          <img src=\"...\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Card title</h5>
            <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class=\"card-footer\">
            <small class=\"text-muted\">Last updated 3 mins ago</small>
          </div>
        </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  65 => 10,  55 => 5,  52 => 4,  46 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html\" %}

{% block title %}Index.html{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
{% endblock %}
{% block content %}
   <div class=\"container-fluid\" style=\"padding: 14px;\">
    <div class=\"card-deck\">
        <div class=\"card\">
          <img src=\"...\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Card title</h5>
            <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class=\"card-footer\">
            <small class=\"text-muted\">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class=\"card\">
          <img src=\"...\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Card title</h5>
            <p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class=\"card-footer\">
            <small class=\"text-muted\">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class=\"card\">
          <img src=\"...\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Card title</h5>
            <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class=\"card-footer\">
            <small class=\"text-muted\">Last updated 3 mins ago</small>
          </div>
        </div>
    </div>
  </div>
{% endblock %}", "index.html", "/Users/dongido/Projects/abc-hosting/views/index.html");
    }
}
