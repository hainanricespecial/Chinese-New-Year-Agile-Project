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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_75fbdeb8fda9665daea51e46ae97c171 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-info\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">
      ";
        // line 10
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row mb-3\">
        <div class=\"col-sm\">
          ";
        // line 13
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 14
            echo "            <div class=\"image magnific-popup\">
              ";
            // line 15
            if (($context["thumb"] ?? null)) {
                // line 16
                echo "                <a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail mb-3\"/></a>
              ";
            }
            // line 18
            echo "              ";
            if (($context["images"] ?? null)) {
                // line 19
                echo "                <div>
                  ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 21
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 21);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 21);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"img-thumbnail\"/></a>&nbsp;
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                </div>
              ";
            }
            // line 25
            echo "            </div>
          ";
        }
        // line 27
        echo "
        </div>
        <div class=\"col-sm\">
          <h1>";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\" role=\"tabpanel\" aria-labelledby=\"description-tab\">";
        // line 31
        echo ($context["description"] ?? null);
        echo "</div>

          <ul class=\"list-unstyled\">
            ";
        // line 34
        if (($context["manufacturer"] ?? null)) {
            // line 35
            echo "              <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 37
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 38
        if (($context["reward"] ?? null)) {
            // line 39
            echo "              <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 41
        echo "            <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>

          ";
        // line 44
        if (($context["price"] ?? null)) {
            // line 45
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 46
            if ( !($context["special"] ?? null)) {
                // line 47
                echo "                <li>
                  <h2><span class=\"price-new\">";
                // line 48
                echo ($context["price"] ?? null);
                echo "</span></h2>
                </li>
              ";
            } else {
                // line 51
                echo "                <li><span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2><span class=\"price-new\">";
                // line 52
                echo ($context["special"] ?? null);
                echo "</span></h2></li>
              ";
            }
            // line 54
            echo "
              ";
            // line 55
            if (($context["tax"] ?? null)) {
                // line 56
                echo "                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
              ";
            }
            // line 58
            echo "
              ";
            // line 59
            if (($context["points"] ?? null)) {
                // line 60
                echo "                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
              ";
            }
            // line 62
            echo "              ";
            if (($context["discounts"] ?? null)) {
                // line 63
                echo "                <li>
                  <hr>
                </li>
                ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 67
                    echo "                  <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 67);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 67);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "              ";
            }
            // line 70
            echo "            </ul>
          ";
        }
        // line 72
        echo "          <form method=\"post\" data-oc-toggle=\"ajax\">
            
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 74
        echo ($context["product_id"] ?? null);
        echo "\"/>
          </form>
          <br/>

          <div id=\"product\">
            <form id=\"form-product\">

              ";
        // line 81
        if (($context["options"] ?? null)) {
            // line 82
            echo "            <hr>
              <h3>";
            // line 83
            echo ($context["text_option"] ?? null);
            echo "</h3>
              <div>
                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 86
                echo "
                  ";
                // line 87
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 87) == "select")) {
                    // line 88
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 88)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 89);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 89);
                    echo "</label> <select name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 89);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 89);
                    echo "\" class=\"form-select\">
                        <option value=\"\">";
                    // line 90
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 91
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 91));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 92
                        echo "                          <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 92);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 92);
                        echo "
                            ";
                        // line 93
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 93)) {
                            // line 94
                            echo "                              (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 94);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 94);
                            echo ")
                            ";
                        }
                        // line 95
                        echo "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    echo "                      </select>
                      <div id=\"error-option-";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 98);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 101
                echo "
                  ";
                // line 102
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 102) == "radio")) {
                    // line 103
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 103)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 104);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 105);
                    echo "\">
                        ";
                    // line 106
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 106));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 107
                        echo "                          <div class=\"form-check\">
                            <input type=\"radio\" name=\"option[";
                        // line 108
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 108);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 108);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 108);
                        echo "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 108);
                        echo "\" class=\"form-check-label\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 108)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 108);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 108);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 108)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 108);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 108);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 109
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 109);
                        echo "
                              ";
                        // line 110
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 110)) {
                            // line 111
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 111);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 111);
                            echo ")
                              ";
                        }
                        // line 113
                        echo "                            </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 116
                    echo "                      </div>
                      <div id=\"error-option-";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 117);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 120
                echo "
                  ";
                // line 121
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 121) == "checkbox")) {
                    // line 122
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 122)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 123);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 124);
                    echo "\">

                        ";
                    // line 126
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 126));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 127
                        echo "                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"option[";
                        // line 128
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 128);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 128);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 128);
                        echo "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 128);
                        echo "\" class=\"form-check-label\">
                              ";
                        // line 129
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 129)) {
                            // line 130
                            echo "                                <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 130);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 130);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 130)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 130);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 130);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 131
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 131);
                        echo "
                              ";
                        // line 132
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 132)) {
                            // line 133
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 133);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 133);
                            echo ")
                              ";
                        }
                        // line 134
                        echo "</label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "
                      </div>
                      <div id=\"error-option-";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 142
                echo "
                  ";
                // line 143
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 143) == "text")) {
                    // line 144
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 144)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 145);
                    echo "</label> <input type=\"text\" name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 145);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 145);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                    echo "\" class=\"form-control\"/>
                      <div id=\"error-option-";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 149
                echo "
                  ";
                // line 150
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 150) == "textarea")) {
                    // line 151
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 151)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 152);
                    echo "</label> <textarea name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 152);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 152);
                    echo "</textarea>
                      <div id=\"error-option-";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 156
                echo "
                  ";
                // line 157
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 157) == "file")) {
                    // line 158
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 158)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"button-upload-";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 159);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 159);
                    echo "</label>
                      <div>
                        <button type=\"button\" id=\"button-upload-";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "\" data-oc-toggle=\"upload\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-url=\"";
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "\" class=\"btn btn-light btn-block\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                        <input type=\"hidden\" name=\"option[";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    echo "]\" value=\"\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    echo "\"/>
                      </div>
                      <div id=\"error-option-";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 167
                echo "
                  ";
                // line 168
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 168) == "date")) {
                    // line 169
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 169)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 170);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 172);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "\" class=\"form-control date\"/>
                        <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 175);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 178
                echo "
                  ";
                // line 179
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 179) == "datetime")) {
                    // line 180
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 180)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 181);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 183);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    echo "\" class=\"form-control datetime\"/>
                        <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                      </div>

                      <div id=\"error-option-";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 190
                echo "
                  ";
                // line 191
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 191) == "time")) {
                    // line 192
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 192)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 193);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 195);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "\" class=\"form-control time\"/>
                        <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 201
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "                ";
        }
        // line 204
        echo "
                ";
        // line 205
        if (($context["subscription_plans"] ?? null)) {
            // line 206
            echo "                  <hr/>
                  <h3>";
            // line 207
            echo ($context["text_subscription"] ?? null);
            echo "</h3>

                  <div class=\"mb-3 required\">
                    <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                      <option value=\"\">";
            // line 211
            echo ($context["text_select"] ?? null);
            echo "</option>
                      ";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 213
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 213);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 213);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "                    </select>

                    ";
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 218
                echo "                      <div id=\"subscription-description-";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 218);
                echo "\" class=\"form-text subscription d-none\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 218);
                echo "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "
                    <div id=\"error-subscription\" class=\"invalid-feedback\"></div>

                  </div>
                ";
        }
        // line 225
        echo "
                <div class=\"mb-3\">
                  <label for=\"input-quantity\" class=\"form-label\">";
        // line 227
        echo ($context["entry_qty"] ?? null);
        echo "</label> <input type=\"text\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
                  <div id=\"error-quantity\" class=\"form-text\"></div>
                  <br/>
                  <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 230
        echo ($context["button_cart"] ?? null);
        echo "</button>
                </div>
                ";
        // line 232
        if ((($context["minimum"] ?? null) > 1)) {
            // line 233
            echo "                  <div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                ";
        }
        // line 235
        echo "              </div>

             

            </form>
          </div>
        </div>


        <ul class=\"nav nav-tabs\">
          
          ";
        // line 246
        if (($context["review_status"] ?? null)) {
            // line 247
            echo "            <li class=\"nav-item\"><a href=\"#tab-review\" id=\"review-tab\" class=\"nav-link\" data-bs-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
          ";
        }
        // line 249
        echo "        </ul>

        <div class=\"tab-content\">
          ";
        // line 252
        if (($context["attribute_groups"] ?? null)) {
            // line 253
            echo "            <div id=\"tab-specification\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"specification-tab\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  ";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 257
                echo "                    <thead>
                      <tr>
                        <td colspan=\"2\"><strong>";
                // line 259
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 259);
                echo "</strong></td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
                // line 263
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 263));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 264
                    echo "                        <tr>
                          <td>";
                    // line 265
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 265);
                    echo "</td>
                          <td>";
                    // line 266
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 266);
                    echo "</td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 269
                echo "                    </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "                </table>
              </div>
            </div>
          ";
        }
        // line 275
        echo "          ";
        if (($context["review_status"] ?? null)) {
            // line 276
            echo "            <div id=\"tab-review\" class=\"tab-pane fade\">
              <form id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 279
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 280
            if (($context["review_guest"] ?? null)) {
                // line 281
                echo "                  <div class=\"mb-3 required\">
                    <label for=\"input-name\" class=\"form-label\">";
                // line 282
                echo ($context["entry_name"] ?? null);
                echo "</label> <input type=\"text\" name=\"name\" value=\"";
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                    <div id=\"error-name\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"mb-3 required\">
                    <label for=\"input-review\" class=\"form-label\">";
                // line 286
                echo ($context["entry_review"] ?? null);
                echo "</label> <textarea name=\"text\" rows=\"5\" id=\"input-text\" class=\"form-control\"></textarea>
                    <div id=\"error-text\" class=\"invalid-feedback\"></div>
                    <div class=\"invalid-feedback\">";
                // line 288
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label class=\"form-label\">";
                // line 291
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    <div id=\"input-rating\">
                      ";
                // line 293
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"1\" class=\"form-check-input\"/>
                      &nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"2\" class=\"form-check-input\"/>
                      &nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"3\" class=\"form-check-input\"/>
                      &nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"4\" class=\"form-check-input\"/>
                      &nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"5\" class=\"form-check-input\"/>
                      &nbsp;";
                // line 303
                echo ($context["entry_good"] ?? null);
                echo "
                    </div>
                    <div id=\"error-rating\" class=\"invalid-feedback\"></div>
                  </div>
                  ";
                // line 307
                echo ($context["captcha"] ?? null);
                echo "
                  <div class=\"d-inline-block pt-2 pd-2 w-100\">
                    <div class=\"float-end\">
                      <button type=\"button\" id=\"button-review\" class=\"btn btn-primary\">";
                // line 310
                echo ($context["button_continue"] ?? null);
                echo "</button>
                    </div>
                  </div>
                ";
            } else {
                // line 314
                echo "                  ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 316
            echo "              </form>
            </div>
          ";
        }
        // line 318
        echo "</div>
      </div>


      ";
        // line 322
        if (($context["products"] ?? null)) {
            // line 323
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">
          ";
            // line 325
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 326
                echo "            <div class=\"col\">";
                echo $context["product"];
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            echo "        </div>
      ";
        }
        // line 330
        echo "
      ";
        // line 331
        if (($context["tags"] ?? null)) {
            // line 332
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 333
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 334
                echo "            ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    // line 335
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 335);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 335);
                    echo "</a>,
            ";
                } else {
                    // line 337
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["tags"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 337);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["tags"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 337);
                    echo "</a>
            ";
                }
                // line 339
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 340
            echo "        </p>
      ";
        }
        // line 342
        echo "
      ";
        // line 343
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 345
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-subscription').on('change', function (e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

\$('#form-product').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart|add&language=";
        // line 361
        echo ($context["language"] ?? null);
        echo "',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function () {
            \$('#button-cart').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-cart').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#header-cart').load('index.php?route=common/cart|info');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#review').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/review|review&product_id=";
        // line 407
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function () {
    \$.ajax({
        url: 'index.php?route=product/review|write&product_id=";
        // line 411
        echo ($context["product_id"] ?? null);
        echo "',
        type: 'post',
        dataType: 'json',
        data: \$('#form-review').serialize(),
        beforeSend: function () {
            \$('#button-review').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-review').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-name').val('');
                \$('#input-text').val('');
                \$('input[name=\\'rating\\']:checked').prop('checked', false);
            }
        }
    });
});

\$(document).ready(function () {
    \$('.magnific-popup').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });

    \$('.date').daterangepicker({
        singleDatePicker: true,
        autoApply: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });

    \$('.time').daterangepicker({
        singleDatePicker: true,
        datePicker: false,
        autoApply: true,
        timePicker: true,
        timePicker24Hour: true,
        locale: {
            format: 'HH:mm'
        }
    }).on('show.daterangepicker', function (ev, picker) {
        picker.container.find('.calendar-table').hide();
    });

    \$('.datetime').daterangepicker({
        singleDatePicker: true,
        autoApply: true,
        timePicker: true,
        timePicker24Hour: true,
        locale: {
            format: 'YYYY-MM-DD HH:mm'
        }
    });
});
//--></script>
";
        // line 483
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1230 => 483,  1155 => 411,  1148 => 407,  1099 => 361,  1080 => 345,  1075 => 343,  1072 => 342,  1068 => 340,  1062 => 339,  1054 => 337,  1046 => 335,  1043 => 334,  1039 => 333,  1034 => 332,  1032 => 331,  1029 => 330,  1025 => 328,  1016 => 326,  1012 => 325,  1006 => 323,  1004 => 322,  998 => 318,  993 => 316,  987 => 314,  980 => 310,  974 => 307,  967 => 303,  954 => 293,  949 => 291,  943 => 288,  938 => 286,  929 => 282,  926 => 281,  924 => 280,  920 => 279,  915 => 276,  912 => 275,  906 => 271,  899 => 269,  890 => 266,  886 => 265,  883 => 264,  879 => 263,  872 => 259,  868 => 257,  864 => 256,  859 => 253,  857 => 252,  852 => 249,  846 => 247,  844 => 246,  831 => 235,  825 => 233,  823 => 232,  818 => 230,  808 => 227,  804 => 225,  797 => 220,  786 => 218,  782 => 217,  778 => 215,  767 => 213,  763 => 212,  759 => 211,  752 => 207,  749 => 206,  747 => 205,  744 => 204,  741 => 203,  734 => 201,  728 => 198,  718 => 195,  711 => 193,  704 => 192,  702 => 191,  699 => 190,  693 => 187,  682 => 183,  675 => 181,  668 => 180,  666 => 179,  663 => 178,  657 => 175,  647 => 172,  640 => 170,  633 => 169,  631 => 168,  628 => 167,  622 => 164,  615 => 162,  601 => 161,  594 => 159,  587 => 158,  585 => 157,  582 => 156,  576 => 153,  562 => 152,  555 => 151,  553 => 150,  550 => 149,  544 => 146,  530 => 145,  523 => 144,  521 => 143,  518 => 142,  512 => 139,  508 => 137,  500 => 134,  493 => 133,  491 => 132,  486 => 131,  473 => 130,  471 => 129,  461 => 128,  458 => 127,  454 => 126,  449 => 124,  445 => 123,  438 => 122,  436 => 121,  433 => 120,  427 => 117,  424 => 116,  416 => 113,  409 => 111,  407 => 110,  402 => 109,  380 => 108,  377 => 107,  373 => 106,  369 => 105,  365 => 104,  358 => 103,  356 => 102,  353 => 101,  347 => 98,  344 => 97,  337 => 95,  330 => 94,  328 => 93,  321 => 92,  317 => 91,  313 => 90,  303 => 89,  296 => 88,  294 => 87,  291 => 86,  287 => 85,  282 => 83,  279 => 82,  277 => 81,  267 => 74,  263 => 72,  259 => 70,  256 => 69,  245 => 67,  241 => 66,  236 => 63,  233 => 62,  225 => 60,  223 => 59,  220 => 58,  212 => 56,  210 => 55,  207 => 54,  202 => 52,  197 => 51,  191 => 48,  188 => 47,  186 => 46,  183 => 45,  181 => 44,  172 => 41,  164 => 39,  162 => 38,  155 => 37,  145 => 35,  143 => 34,  137 => 31,  133 => 30,  128 => 27,  124 => 25,  120 => 23,  103 => 21,  99 => 20,  96 => 19,  93 => 18,  79 => 16,  77 => 15,  74 => 14,  72 => 13,  66 => 10,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/product.twig", "C:\\xampp\\htdocs\\CNYWebsite\\catalog\\view\\template\\product\\product.twig");
    }
}
