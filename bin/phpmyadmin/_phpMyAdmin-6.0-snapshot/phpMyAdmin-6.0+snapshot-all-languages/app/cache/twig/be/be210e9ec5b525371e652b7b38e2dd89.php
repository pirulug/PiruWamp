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

/* triggers/row.twig */
class __TwigTemplate_9deb41426d242c1f18c89cdce08d3ce2 extends Template
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
        yield ">
  <td>
    <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["trigger"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        yield "\">
  </td>
  <td>
    <span class='drop_sql hide'>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["trigger"] ?? null), "getDropSql", [], "method", false, false, false, 6), "html", null, true);
        yield "</span>
    <strong>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["trigger"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</strong>
  </td>
  ";
        // line 9
        if (Twig\Extension\CoreExtension::testEmpty(($context["table"] ?? null))) {
            // line 10
            yield "    <td>
      <a href=\"";
            // line 11
            yield PhpMyAdmin\Url::getFromRoute("/triggers", ["db" => ($context["db"] ?? null), "table" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["trigger"] ?? null), "table", [], "any", false, false, false, 11), "getName", [], "method", false, false, false, 11)]);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["trigger"] ?? null), "table", [], "any", false, false, false, 11), "html", null, true);
            yield "</a>
    </td>
  ";
        }
        // line 14
        yield "  <td>
    ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["trigger"] ?? null), "timing", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15), "html", null, true);
        yield "
  </td>
  <td>
    ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["trigger"] ?? null), "event", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18), "html", null, true);
        yield "
  </td>
  <td>
    ";
        // line 21
        if ((($tmp = ($context["has_edit_privilege"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "      <a class=\"ajax edit_anchor\" href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/triggers", ["db" =>             // line 23
($context["db"] ?? null), "table" =>             // line 24
($context["table"] ?? null), "edit_item" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 26
($context["trigger"] ?? null), "name", [], "any", false, false, false, 26), "getName", [], "method", false, false, false, 26)]);
            // line 27
            yield "\">
        ";
            // line 28
            yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit"));
            yield "
      </a>
    ";
        } else {
            // line 31
            yield "      ";
            yield PhpMyAdmin\Html\Generator::getIcon("bd_edit", \_gettext("Edit"));
            yield "
    ";
        }
        // line 33
        yield "  </td>
  <td>
    <a class=\"ajax export_anchor\" href=\"";
        // line 35
        yield PhpMyAdmin\Url::getFromRoute("/triggers", ["db" =>         // line 36
($context["db"] ?? null), "table" =>         // line 37
($context["table"] ?? null), "export_item" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["trigger"] ?? null), "name", [], "any", false, false, false, 39), "getName", [], "method", false, false, false, 39)]);
        // line 40
        yield "\">
      ";
        // line 41
        yield PhpMyAdmin\Html\Generator::getIcon("b_export", \_gettext("Export"));
        yield "
    </a>
  </td>
  <td>
    ";
        // line 45
        if ((($tmp = ($context["has_drop_privilege"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "      ";
            yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), ["db" =>             // line 49
($context["db"] ?? null), "table" =>             // line 50
($context["table"] ?? null), "sql_query" => CoreExtension::getAttribute($this->env, $this->source,             // line 51
($context["trigger"] ?? null), "getDropSql", [], "method", false, false, false, 51), "goto" => PhpMyAdmin\Url::getFromRoute("/triggers", ["db" =>             // line 52
($context["db"] ?? null)])], PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Drop")), ["class" => "ajax drop_anchor"]);
            // line 56
            yield "
    ";
        } else {
            // line 58
            yield "      ";
            yield PhpMyAdmin\Html\Generator::getIcon("bd_drop", \_gettext("Drop"));
            yield "
    ";
        }
        // line 60
        yield "  </td>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "triggers/row.twig";
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
        return array (  156 => 60,  150 => 58,  146 => 56,  144 => 52,  143 => 51,  142 => 50,  141 => 49,  139 => 46,  137 => 45,  130 => 41,  127 => 40,  125 => 39,  124 => 37,  123 => 36,  122 => 35,  118 => 33,  112 => 31,  106 => 28,  103 => 27,  101 => 26,  100 => 24,  99 => 23,  97 => 22,  95 => 21,  89 => 18,  83 => 15,  80 => 14,  72 => 11,  69 => 10,  67 => 9,  62 => 7,  58 => 6,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "triggers/row.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/triggers/row.twig");
    }
}
