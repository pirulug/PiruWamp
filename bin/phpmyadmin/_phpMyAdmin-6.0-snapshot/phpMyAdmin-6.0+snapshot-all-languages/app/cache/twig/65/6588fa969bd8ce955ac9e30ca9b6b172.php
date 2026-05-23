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

/* database/routines/row.twig */
class __TwigTemplate_04b347d62a38ed5b43b15876bf84f022 extends Template
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
        yield "<tr";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["row_class"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_class"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " data-filter-row=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["routine"] ?? null), "name", [], "any", false, false, false, 1)), "html", null, true);
        yield "\">
  <td>
    <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["routine"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        yield "\">
  </td>
  <td>
    <span class=\"drop_sql hide\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sql_drop"] ?? null), "html", null, true);
        yield "</span>
    <strong>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["routine"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</strong>
  </td>
  <td>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["routine"] ?? null), "type", [], "any", false, false, false, 9), "html", null, true);
        yield "</td>
  <td dir=\"ltr\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["routine"] ?? null), "returns", [], "any", false, false, false, 10), "html", null, true);
        yield "</td>
  <td>
    ";
        // line 12
        if ((($tmp = ($context["has_edit_privilege"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "      <a class=\"ajax edit_anchor\" href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" =>             // line 14
($context["db"] ?? null), "table" =>             // line 15
($context["table"] ?? null), "edit_item" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source,             // line 17
($context["routine"] ?? null), "name", [], "any", false, false, false, 17), "item_type" => CoreExtension::getAttribute($this->env, $this->source,             // line 18
($context["routine"] ?? null), "type", [], "any", false, false, false, 18)]);
            // line 19
            yield "\">
        ";
            // line 20
            yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit"));
            yield "
      </a>
    ";
        } else {
            // line 23
            yield "      ";
            yield PhpMyAdmin\Html\Generator::getIcon("bd_edit", \_gettext("Edit"));
            yield "
    ";
        }
        // line 25
        yield "  </td>
  <td>
    ";
        // line 27
        if ((($tmp = ($context["has_execute_privilege"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "      <a class=\"ajax exec_anchor\" href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" =>             // line 29
($context["db"] ?? null), "table" =>             // line 30
($context["table"] ?? null), "execute_dialog" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source,             // line 32
($context["routine"] ?? null), "name", [], "any", false, false, false, 32), "item_type" => CoreExtension::getAttribute($this->env, $this->source,             // line 33
($context["routine"] ?? null), "type", [], "any", false, false, false, 33)]);
            // line 34
            yield "\">
        ";
            // line 35
            yield PhpMyAdmin\Html\Generator::getIcon("b_nextpage", \_gettext("Execute"));
            yield "
      </a>
    ";
        } else {
            // line 38
            yield "      ";
            yield PhpMyAdmin\Html\Generator::getIcon("bd_nextpage", \_gettext("Execute"));
            yield "
    ";
        }
        // line 40
        yield "  </td>
  <td>
    ";
        // line 42
        if ((($tmp = ($context["has_export_privilege"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "      <a class=\"ajax export_anchor\" href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" =>             // line 44
($context["db"] ?? null), "table" =>             // line 45
($context["table"] ?? null), "export_item" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source,             // line 47
($context["routine"] ?? null), "name", [], "any", false, false, false, 47), "item_type" => CoreExtension::getAttribute($this->env, $this->source,             // line 48
($context["routine"] ?? null), "type", [], "any", false, false, false, 48)]);
            // line 49
            yield "\">
        ";
            // line 50
            yield PhpMyAdmin\Html\Generator::getIcon("b_export", \_gettext("Export"));
            yield "
      </a>
    ";
        } else {
            // line 53
            yield "      ";
            yield PhpMyAdmin\Html\Generator::getIcon("bd_export", \_gettext("Export"));
            yield "
    ";
        }
        // line 55
        yield "  </td>
  <td>
    ";
        // line 57
        yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), ["db" =>         // line 60
($context["db"] ?? null), "table" =>         // line 61
($context["table"] ?? null), "sql_query" =>         // line 62
($context["sql_drop"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" =>         // line 63
($context["db"] ?? null)])], PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Drop")), ["class" => "ajax drop_anchor"]);
        // line 67
        yield "
  </td>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/routines/row.twig";
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
        return array (  168 => 67,  166 => 63,  165 => 62,  164 => 61,  163 => 60,  162 => 57,  158 => 55,  152 => 53,  146 => 50,  143 => 49,  141 => 48,  140 => 47,  139 => 45,  138 => 44,  136 => 43,  134 => 42,  130 => 40,  124 => 38,  118 => 35,  115 => 34,  113 => 33,  112 => 32,  111 => 30,  110 => 29,  108 => 28,  106 => 27,  102 => 25,  96 => 23,  90 => 20,  87 => 19,  85 => 18,  84 => 17,  83 => 15,  82 => 14,  80 => 13,  78 => 12,  73 => 10,  69 => 9,  64 => 7,  60 => 6,  54 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/routines/row.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/routines/row.twig");
    }
}
