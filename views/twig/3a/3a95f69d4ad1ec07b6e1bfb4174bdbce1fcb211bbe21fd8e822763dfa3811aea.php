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
class __TwigTemplate_42a25f3f1cc3f7dd0f014ebf7c6f52403da9e2249a8aee61cb4bf34bbd78dd31 extends \Twig\Template
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
            'script' => [$this, 'block_script'],
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
        echo "Home";
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
        .starrr {
          display: inline-block; 
        }
        .starrr a {
          font-size: 16px;
          padding: 0 1px;
          cursor: pointer;
          color: #FFD119;
          text-decoration: none;
        }
    </style>
";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        // line 21
        echo "   <div class=\"container\" style=\"padding: 14px;\">
    ";
        // line 22
        if (($context["cart_item"] ?? null)) {
            // line 23
            echo "    <table class=\"table table-striped\">
        <thead>
          <tr>
            <th scope=\"col\">Item</th>
            <th scope=\"col\">Name</th>
            <th scope=\"col\">Quantity</th>
            <th scope=\"col\">Unit Price</th>
            <th scope=\"col\">Action</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 34
            $context["totalNum"] = 0;
            // line 35
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cart_item"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 36
                echo "            ";
                $context["totalNum"] = (($context["totalNum"] ?? null) + (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", []) * twig_get_attribute($this->env, $this->source, $context["item"], "price", [])));
                // line 37
                echo "            <tr>
              <td scope=\"row\"> 
                <img width=\"120\" height=\"80\" src=\"images/";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", []), "html", null, true);
                echo "\" alt=\"Remove Item\" /> 
              </td>
              <td class=\"align-middle\"> ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
                echo " </td>
              <td class=\"align-middle\"> ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", []), "html", null, true);
                echo " </td>
              <td class=\"align-middle\"> \$";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", []), "html", null, true);
                echo " </td>
              <td class=\"align-middle\"> 
                <div>
                  <form method=\"POST\" action=\"add-to-cart\">
                    <div class=\"cart-action\">
                      <input type=\"text\" class=\"product-quantity\" name=\"quantity\" value=\"1\" size=\"2\" />
                      <input type=\"hidden\" name=\"id\" value=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "code", []), "html", null, true);
                echo "\" />
                      <input type=\"submit\" class=\"btn btn-secondary btn-sm\" value=\"Add Item\"/>
                    </div>
                  </form>
                </div>
                <div>
                  <br />
                  <form method=\"post\" action=\"remove-from-cart\">
                    <div class=\"cart-action\">
                      <input type=\"text\" class=\"product-quantity\" name=\"quantity\" value=\"1\" size=\"2\" />
                      <input type=\"hidden\" name=\"id\" value=\"";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "code", []), "html", null, true);
                echo "\" />
                      <input type=\"submit\" class=\"btn btn-secondary btn-sm\" value=\"Remove\"/>
                    </div>
                  </form>
                </div>
                
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "          <tr>
            <td colspan=\"2\" align=\"right\">Total:</td>
            <td align=\"\"><strong>  \$";
            // line 70
            echo twig_escape_filter($this->env, ($context["totalNum"] ?? null), "html", null, true);
            echo " </strong></td>
            <td align=\"left\" colspan=\"2\"> 
              <a href=\"checkout\" type=\"botton\" class=\"btn btn-success\"> Make Payment </a>
            </td>
          </tr>
        </tbody>
      </table>
    ";
        }
        // line 78
        echo "    <div class=\"card-deck\">
      <div class=\"row\">
        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 81
            echo "          <div class=\"col-md-4\" style=\"margin-bottom: 40px;\">
              <div class=\"card\">
                <img src=\"images/";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", []), "html", null, true);
            echo "\" class=\"card-img-top\" height=\"300\">
                <div class=\"card-body\" style=\"height: 200px;\">
                  <h5 class=\"card-title\"> ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", []), "html", null, true);
            echo " </h5>
                  <p class=\"card-text\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", []), "html", null, true);
            echo "</p>
                </div>
                <div class=\"card-footer\">
                  <div class=\"row\">
                    <div class=\"col-lg-12\">
                      <div class='starrr' data-hasreview=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "has_review", []), "html", null, true);
            echo "\" data-star=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", []), "html", null, true);
            echo "\" data-review=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "review", []), "html", null, true);
            echo "\"></div>
                    </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col-md-4\">
                        <p class=\"align-middle\"> \$";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", []), "html", null, true);
            echo " </p>
                      </div>
                      <div class=\"col-md-8 text-right\">
                        <form method=\"post\" action=\"add-to-cart\">
                          <div class=\"cart-action\">
                            <input type=\"text\" class=\"product-quantity\" name=\"quantity\" value=\"1\" size=\"2\" />
                            <input type=\"hidden\" name=\"id\" value=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", []), "html", null, true);
            echo "\" />
                            <input type=\"submit\" class=\"btn\" value=\" Add to Cart\" style=\"background-color: #a84949; color: wheat;\"/>
                          </div>
                        </form>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "      </div>
    </div>
  </div>
";
    }

    // line 117
    public function block_script($context, array $blocks = [])
    {
        // line 118
        echo "  ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
   <script src=\"js/starr.js\"></script>
   <script> 
    function handleNewReview(e, review) {
      // \$(this).removeData('starr')
      // \$(this).starrr('setRating', 2)
      setTimeout( () => {
        var formData = new FormData();

        formData.append('review', review);
        formData.append('product_id', e.target.dataset.star);

        fetch('add-review', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .catch(error => console.error('Error:', error))
        .then(response => console.log('Success:', JSON.stringify(response)));
      }, 20)
    }

    \$('.starrr').starrr({
      change: handleNewReview,
    }) 
   </script>
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
        return array (  252 => 118,  249 => 117,  242 => 112,  226 => 102,  217 => 96,  205 => 91,  197 => 86,  193 => 85,  188 => 83,  184 => 81,  180 => 80,  176 => 78,  165 => 70,  161 => 68,  146 => 59,  133 => 49,  124 => 43,  120 => 42,  116 => 41,  111 => 39,  107 => 37,  104 => 36,  99 => 35,  97 => 34,  84 => 23,  82 => 22,  79 => 21,  76 => 20,  56 => 5,  53 => 4,  47 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html\" %}

{% block title %}Home{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }
        .starrr {
          display: inline-block; 
        }
        .starrr a {
          font-size: 16px;
          padding: 0 1px;
          cursor: pointer;
          color: #FFD119;
          text-decoration: none;
        }
    </style>
{% endblock %}
{% block content %}
   <div class=\"container\" style=\"padding: 14px;\">
    {% if cart_item %}
    <table class=\"table table-striped\">
        <thead>
          <tr>
            <th scope=\"col\">Item</th>
            <th scope=\"col\">Name</th>
            <th scope=\"col\">Quantity</th>
            <th scope=\"col\">Unit Price</th>
            <th scope=\"col\">Action</th>
          </tr>
        </thead>
        <tbody>
          {% set totalNum = 0 %}
          {% for item in cart_item %}
            {% set totalNum = totalNum + (item.quantity * item.price) %}
            <tr>
              <td scope=\"row\"> 
                <img width=\"120\" height=\"80\" src=\"images/{{ item.image }}\" alt=\"Remove Item\" /> 
              </td>
              <td class=\"align-middle\"> {{ item.name }} </td>
              <td class=\"align-middle\"> {{ item.quantity }} </td>
              <td class=\"align-middle\"> \${{ item.price }} </td>
              <td class=\"align-middle\"> 
                <div>
                  <form method=\"POST\" action=\"add-to-cart\">
                    <div class=\"cart-action\">
                      <input type=\"text\" class=\"product-quantity\" name=\"quantity\" value=\"1\" size=\"2\" />
                      <input type=\"hidden\" name=\"id\" value=\"{{ item.code }}\" />
                      <input type=\"submit\" class=\"btn btn-secondary btn-sm\" value=\"Add Item\"/>
                    </div>
                  </form>
                </div>
                <div>
                  <br />
                  <form method=\"post\" action=\"remove-from-cart\">
                    <div class=\"cart-action\">
                      <input type=\"text\" class=\"product-quantity\" name=\"quantity\" value=\"1\" size=\"2\" />
                      <input type=\"hidden\" name=\"id\" value=\"{{ item.code }}\" />
                      <input type=\"submit\" class=\"btn btn-secondary btn-sm\" value=\"Remove\"/>
                    </div>
                  </form>
                </div>
                
              </td>
            </tr>
          {% endfor %}
          <tr>
            <td colspan=\"2\" align=\"right\">Total:</td>
            <td align=\"\"><strong>  \${{ totalNum }} </strong></td>
            <td align=\"left\" colspan=\"2\"> 
              <a href=\"checkout\" type=\"botton\" class=\"btn btn-success\"> Make Payment </a>
            </td>
          </tr>
        </tbody>
      </table>
    {% endif %}
    <div class=\"card-deck\">
      <div class=\"row\">
        {% for product in products %}
          <div class=\"col-md-4\" style=\"margin-bottom: 40px;\">
              <div class=\"card\">
                <img src=\"images/{{ product.image }}\" class=\"card-img-top\" height=\"300\">
                <div class=\"card-body\" style=\"height: 200px;\">
                  <h5 class=\"card-title\"> {{ product.title }} </h5>
                  <p class=\"card-text\">{{ product.description }}</p>
                </div>
                <div class=\"card-footer\">
                  <div class=\"row\">
                    <div class=\"col-lg-12\">
                      <div class='starrr' data-hasreview=\"{{product.has_review}}\" data-star=\"{{ product.id }}\" data-review=\"{{ product.review }}\"></div>
                    </div>
                  </div>
                  <div class=\"row\">
                      <div class=\"col-md-4\">
                        <p class=\"align-middle\"> \${{ product.price }} </p>
                      </div>
                      <div class=\"col-md-8 text-right\">
                        <form method=\"post\" action=\"add-to-cart\">
                          <div class=\"cart-action\">
                            <input type=\"text\" class=\"product-quantity\" name=\"quantity\" value=\"1\" size=\"2\" />
                            <input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\" />
                            <input type=\"submit\" class=\"btn\" value=\" Add to Cart\" style=\"background-color: #a84949; color: wheat;\"/>
                          </div>
                        </form>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        {% endfor %}
      </div>
    </div>
  </div>
{% endblock %}

{% block script %}
  {{ parent() }}
   <script src=\"js/starr.js\"></script>
   <script> 
    function handleNewReview(e, review) {
      // \$(this).removeData('starr')
      // \$(this).starrr('setRating', 2)
      setTimeout( () => {
        var formData = new FormData();

        formData.append('review', review);
        formData.append('product_id', e.target.dataset.star);

        fetch('add-review', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .catch(error => console.error('Error:', error))
        .then(response => console.log('Success:', JSON.stringify(response)));
      }, 20)
    }

    \$('.starrr').starrr({
      change: handleNewReview,
    }) 
   </script>
{% endblock %}", "index.html", "/Users/dongido/Projects/abc-hosting/views/index.html");
    }
}
