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

/* Block/eyecatch.twig */
class __TwigTemplate_82958d579699ac10b56aa37748f60833c572671c2c33bdbf38da3961e8fef61d extends \Eccube\Twig\Template
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
        // line 11
        echo "
<div class=\"ec-role\">
    <div class=\"ec-eyecatchRole\">
        <div class=\"ec-eyecatchRole__image\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/421077_m.jpg", "user_data"), "html", null, true);
        echo "\" alt=\"\" role=\"presentation\"/>
        </div>
        <div class=\"ec-eyecatchRole__intro\">
            <p class=\"ec-eyecatchRole__introEnTitle\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.eyecatch.title__en"), "html", null, true);
        echo "</p>
            <p class=\"ec-eyecatchRole__introTitle\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("24時間の営業担当者を格安でご準備"), "html", null, true);
        echo "</p>
            <p class=\"ec-eyecatchRole__introDescription\">";
        // line 20
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("365日24時間､常に全力で営業に取り組んでくれる営業担当者をあなたの会社にも
"), "html", null, true));
        // line 21
        echo "</p>
            <a class=\"ec-blockBtn--top\" href=\"";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=2\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("一覧を見る"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/eyecatch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  60 => 21,  57 => 20,  53 => 19,  49 => 18,  43 => 15,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/eyecatch.twig", "/home/ctake/ctake.org/public_html/nreccubr/app/template/default/Block/eyecatch.twig");
    }
}
