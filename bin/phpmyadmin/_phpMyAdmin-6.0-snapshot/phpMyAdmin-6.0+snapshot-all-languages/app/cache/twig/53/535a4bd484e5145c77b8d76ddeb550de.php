<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* sql/_bookmark.twig */
class __TwigTemplate_e6add4d4408fe33e1657cff51a6934e5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<form action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/sql");
        yield "\" method=\"post\" class=\"card bookmarkQueryForm d-print-none disableAjax\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
  <input type=\"hidden\" name=\"db\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html_attr");
        yield "\">
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Url::getFromRoute("/sql", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "sql_query" => ($context["sql_query"] ?? null), "id_bookmark" => 1]), "html_attr");
        yield "\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_database]\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html_attr");
        yield "\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_user]\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user"] ?? null), "html_attr");
        yield "\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_sql_query]\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["complete_sql_query"] ?? null), "html_attr");
        yield "\">
  <input type=\"hidden\" name=\"store_bkm\" value=\"1\">

  <div class=\"card-header\">";
        // line 10
        yield PhpMyAdmin\Html\Generator::getIcon("b_bookmark", \_gettext("Bookmark this SQL query"), true);
        yield "</div>
  <div class=\"card-body\">
    <div class=\"mb-3\">
      <label class=\"form-label\" for=\"bookmarkLabelField\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Bookmark label:"), "html", null, true);
        yield "</label>
      <input class=\"form-control\" id=\"bookmarkLabelField\" type=\"text\" name=\"bkm_fields[bkm_label]\" value=\"\">
    </div>

    ";
        // line 17
        if ((($tmp = ($context["is_shared_bookmarks_allowed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "      <div class=\"form-check form-switch\">
        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"bookmarkAllUsersCheckbox\" name=\"bkm_all_users\" value=\"true\">
        <label class=\"form-check-label\" for=\"bookmarkAllUsersCheckbox\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Let every user access this bookmark"), "html", null, true);
            yield "</label>
      </div>
    ";
        }
        // line 23
        yield "  </div>
  <div class=\"card-footer\">
    <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create new bookmark"), "html", null, true);
        yield "\">
  </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sql/_bookmark.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  102 => 25,  98 => 23,  92 => 20,  88 => 18,  86 => 17,  79 => 13,  73 => 10,  67 => 7,  63 => 6,  59 => 5,  55 => 4,  51 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sql/_bookmark.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/sql/_bookmark.twig");
    }
}
