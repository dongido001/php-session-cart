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

/* buy.html */
class __TwigTemplate_08efe563f80748def94f002dfc664e48980ec2a18532bb3ee8c2bc571e522e8a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "buy.html", 1);
        $this->blocks = [
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
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "   <div class=\"jumbotron\" style=\"margin: auto -14px 20px -14px;\">
        <h3> Checkout \\ Balance: \$";
        // line 5
        echo twig_escape_filter($this->env, ($context["credit"] ?? null), "html", null, true);
        echo " </h3>
   </div>
   <div class=\"container\">
    <form action=\"make-payment\" method=\"POST\">
        <div class=\"form-group\">
            <label for=\"exampleFormControlSelect1\">Transportation type</label>
            <select class=\"form-control\" required name=\"transport\">
                <option value=\"\"> Please select </option>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 14
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "id", []), "html", null, true);
            echo "\"> 
                        ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "name", []), "html", null, true);
            echo " -- \$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transport"], "price", []), "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"exampleFormControlTextarea1\">Additional info.</label>
            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
        </div>
        <div class=\"form-group\">
           <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Make Payment\"/>
        </div>
    </form>
   </div>
";
    }

    public function getTemplateName()
    {
        return "buy.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  70 => 15,  65 => 14,  61 => 13,  50 => 5,  47 => 4,  44 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html\" %}

{% block content %}
   <div class=\"jumbotron\" style=\"margin: auto -14px 20px -14px;\">
        <h3> Checkout \\ Balance: \${{ credit }} </h3>
   </div>
   <div class=\"container\">
    <form action=\"make-payment\" method=\"POST\">
        <div class=\"form-group\">
            <label for=\"exampleFormControlSelect1\">Transportation type</label>
            <select class=\"form-control\" required name=\"transport\">
                <option value=\"\"> Please select </option>
                {% for transport in transports %}
                    <option value=\"{{ transport.id }}\"> 
                        {{ transport.name }} -- \${{ transport.price }}
                    </option>
                {% endfor %}
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"exampleFormControlTextarea1\">Additional info.</label>
            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
        </div>
        <div class=\"form-group\">
           <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Make Payment\"/>
        </div>
    </form>
   </div>
{% endblock %}", "buy.html", "/Users/dongido/Projects/abc-hosting/views/buy.html");
    }
}
