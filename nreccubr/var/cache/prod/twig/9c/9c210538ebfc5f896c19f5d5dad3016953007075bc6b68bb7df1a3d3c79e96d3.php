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

/* Block/new_item.twig */
class __TwigTemplate_816e8f6cedfdd6c25647310c43dbbd86e7cb7a96126582ce92a48fe602a53149 extends \Eccube\Twig\Template
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
        // line 8
        $context["Products"] = $this->extensions['Customize\Twig\Extension\TwigExtension']->getCustomizeNewProduct();
        // line 9
        if ((twig_length_filter($this->env, ($context["Products"] ?? null)) > 0)) {
            // line 10
            echo "<div class=\"ec-role\">
    <div class=\"ec-newItemRole\">
        <div class=\"ec-newItemRole__list\">
            <div class=\"ec-newItemRole__listItem\">
                <div class=\"ec-newItemRole__listItemHeading ec-secHeading--tandem\">
                    <span class=\"ec-secHeading__en\">";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("NEW ITEM"), "html", null, true);
            echo "</span>
                    <span class=\"ec-secHeading__line\"></span>
                    <span class=\"ec-secHeading__ja\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新着商品"), "html", null, true);
            echo "</span>
                    <a class=\"ec-inlineBtn--top\" href=\"";
            // line 18
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
            echo "?orderby=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_product_order_newer", [], "any", false, false, false, 18), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more"), "html", null, true);
            echo "</a>
                </div>
            </div>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 22
                echo "            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, $context["Product"], "main_list_image", [], "any", false, false, false, 24)), "save_image"), "html", null, true);
                echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 25), "html", null, true);
                echo "</p>
                    <p class=\"ec-newItemRole__listItemPrice\">
                    ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, false, 28) == twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, false, 28))) {
                        // line 29
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 29)), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 31
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 31)), "html", null, true);
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMax", [], "any", false, false, false, 31)), "html", null, true);
                        echo "
                        ";
                    }
                    // line 33
                    echo "                    ";
                } else {
                    // line 34
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 34)), "html", null, true);
                    echo "
                    ";
                }
                // line 36
                echo "                    </p>
                </a>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "Block/new_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  115 => 36,  109 => 34,  106 => 33,  98 => 31,  92 => 29,  89 => 28,  87 => 27,  82 => 25,  78 => 24,  74 => 23,  71 => 22,  67 => 21,  57 => 18,  53 => 17,  48 => 15,  41 => 10,  39 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/new_item.twig", "/home/ctake/ctake.org/public_html/nreccubr/app/template/default/Block/new_item.twig");
    }
}
