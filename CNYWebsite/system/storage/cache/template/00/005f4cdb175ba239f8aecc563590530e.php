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

/* catalog/view/template/account/payment_method_list.twig */
class __TwigTemplate_12a1fc54cab78a29a95b23a7ee82123d extends Template
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
        if (($context["payment_methods"] ?? null)) {
            // line 2
            echo "  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-start\">";
            // line 6
            echo ($context["column_payment_method"] ?? null);
            echo "</th>
          <th></th>
          <th class=\"text-start\">";
            // line 8
            echo ($context["column_type"] ?? null);
            echo "</th>
          <th class=\"text-start\">";
            // line 9
            echo ($context["column_date_expire"] ?? null);
            echo "</th>
          <th class=\"text-end\">";
            // line 10
            echo ($context["column_action"] ?? null);
            echo "</th>
        </tr>
      </thead>
      <tbody>
      <tbody>
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 16
                echo "          <tr>
            <td class=\"text-start\">";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "name", [], "any", false, false, false, 17);
                echo "</td>
            <td class=\"text-start\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "image", [], "any", false, false, false, 18);
                echo "</td>
            <td class=\"text-start\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "type", [], "any", false, false, false, 19);
                echo "</td>
            <td class=\"text-start\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "date_expire", [], "any", false, false, false, 20);
                echo "</td>
            <td class=\"text-end\"><a href=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "delete", [], "any", false, false, false, 21);
                echo "\" class=\"btn btn-danger\">";
                echo ($context["button_delete"] ?? null);
                echo "</a></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "      </tbody>
    </table>
  </div>
";
        } else {
            // line 28
            echo "  <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/payment_method_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  100 => 24,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  70 => 16,  66 => 15,  58 => 10,  54 => 9,  50 => 8,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/payment_method_list.twig", "C:\\xampp\\htdocs\\CNYWebsite\\catalog\\view\\template\\account\\payment_method_list.twig");
    }
}
