<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/blockwishlist/views/templates/admin/home.html.twig */
class __TwigTemplate_289afeefc79f0bf648e5749d63dbec615bf34a722530e69143cdea9c99eaf247 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@Modules/blockwishlist/views/templates/admin/home.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        // line 22
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["configurationForm"] ?? null), 'form_start');
        echo "
    <div class=\"row justify-content-center\">
      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">edit</i> ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording", [], "Modules.Blockwishlist.Admin"), "html", null, true);
        echo "
          </h3>

          <div class=\"card-body\">
            <div class=\"form-wrapper\">
              ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["configurationForm"] ?? null), 'widget');
        echo "
            </div>
          </div>

          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Modules.Blockwishlist.Admin"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["configurationForm"] ?? null), 'form_end');
        echo "

  ";
        // line 46
        if ((($context["resultHandleForm"] ?? null) != null)) {
            // line 47
            echo "    ";
            // line 48
            echo "  ";
        }
    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        // line 52
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../modules/blockwishlist/public/form.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/views/templates/admin/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 53,  95 => 52,  92 => 51,  87 => 48,  85 => 47,  83 => 46,  78 => 44,  69 => 38,  60 => 32,  52 => 27,  43 => 22,  40 => 21,  30 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/views/templates/admin/home.html.twig", "C:\\xampp\\htdocs\\chino\\modules\\blockwishlist\\views\\templates\\admin\\home.html.twig");
    }
}
