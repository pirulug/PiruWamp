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

/* table/insert/actions_panel.twig */
class __TwigTemplate_05394c91f3982eb4e2e37a477756108d extends Template
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
        yield "<div class=\"card\">
<fieldset class=\"card-body\" id=\"actions_panel\">
  <table class=\"table table-borderless w-auto tdblock\">
    <tr>
      <td class=\"text-nowrap align-middle\">
        <select name=\"submit_type\" class=\"control_at_footer\">
          ";
        // line 7
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["where_clause"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "            <option value=\"save\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save"), "html", null, true);
            yield "</option>
          ";
        }
        // line 10
        yield "          <option value=\"insert\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Insert as new row"), "html", null, true);
        yield "</option>
          <option value=\"insertignore\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Insert as new row and ignore errors"), "html", null, true);
        yield "</option>
          <option value=\"showinsert\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show insert query"), "html", null, true);
        yield "</option>
        </select>
      </td>
      <td class=\"align-middle\">
        <strong>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("and then"), "html", null, true);
        yield "</strong>
      </td>
      <td class=\"text-nowrap align-middle\">
        <select name=\"after_insert\" class=\"control_at_footer\">
          <option value=\"back\"";
        // line 20
        yield (((($context["after_insert"] ?? null) == "back")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go back to previous page"), "html", null, true);
        yield "</option>
          <option value=\"new_insert\"";
        // line 21
        yield (((($context["after_insert"] ?? null) == "new_insert")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Insert another new row"), "html", null, true);
        yield "</option>
          ";
        // line 22
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["where_clause"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "            <option value=\"same_insert\"";
            yield (((($context["after_insert"] ?? null) == "same_insert")) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go back to this page"), "html", null, true);
            yield "</option>
            ";
            // line 24
            if ((($context["found_unique_key"] ?? null) && ($context["is_numeric"] ?? null))) {
                // line 25
                yield "              <option value=\"edit_next\"";
                yield (((($context["after_insert"] ?? null) == "edit_next")) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit next row"), "html", null, true);
                yield "</option>
            ";
            }
            // line 27
            yield "          ";
        }
        // line 28
        yield "        </select>
      </td>
    </tr>
    <tr>
      <td>
        ";
        // line 33
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Use TAB key to move from value to value, or CTRL+arrows to move anywhere."));
        yield "
      </td>
      <td colspan=\"3\" class=\"text-end align-middle pb-2\">
        <input type=\"button\" class=\"btn btn-secondary preview_sql control_at_footer\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Preview SQL"), "html", null, true);
        yield "\">
        <input type=\"reset\" class=\"btn btn-secondary control_at_footer\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Reset"), "html", null, true);
        yield "\">
        <input type=\"submit\" class=\"btn btn-primary control_at_footer\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\" id=\"buttonYes\">
      </td>
    </tr>
  </table>
</fieldset>
</div>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading"), "html", null, true);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/insert/actions_panel.twig";
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
        return array (  161 => 54,  153 => 49,  149 => 48,  136 => 38,  132 => 37,  128 => 36,  122 => 33,  115 => 28,  112 => 27,  104 => 25,  102 => 24,  95 => 23,  93 => 22,  87 => 21,  81 => 20,  74 => 16,  67 => 12,  63 => 11,  58 => 10,  52 => 8,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/insert/actions_panel.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/actions_panel.twig");
    }
}
