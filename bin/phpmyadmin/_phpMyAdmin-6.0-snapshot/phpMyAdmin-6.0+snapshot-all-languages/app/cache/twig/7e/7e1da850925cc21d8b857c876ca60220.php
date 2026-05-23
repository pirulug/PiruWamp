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

/* database/export/index.twig */
class __TwigTemplate_e2ee295031cb4ea3eee08df209907294 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'selection_options' => [$this, 'block_selection_options'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "export.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        $context["filename_hint"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 61
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("@SERVER@ will become the server name and @DATABASE@ will become the database name."), "html", null, true);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->load("export.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "  ";
        if ((($context["export_type"] ?? null) == "raw")) {
            // line 5
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: A query that the user has written freely
\_gettext("Exporting a raw query")
, "html", null, true);
            yield "
  ";
        } else {
            // line 7
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Exporting tables from \"%s\" database"), ($context["db"] ?? null)), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_selection_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "  ";
        if ((($context["export_type"] ?? null) != "raw")) {
            // line 13
            yield "    <div class=\"card mb-3 d-none\" id=\"databases_and_tables\">
      <div class=\"card-header\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Tables:"), "html", null, true);
            yield "</div>
      <div class=\"card-body\" style=\"overflow-y: scroll; max-height: 20em;\">
        <input type=\"hidden\" name=\"structure_or_data_forced\" value=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["structure_or_data_forced"] ?? null), "html", null, true);
            yield "\">

        <table class=\"table table-sm table-striped table-hover export_table_select\">
          <thead>
            <tr>
              <th></th>
              <th>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Tables"), "html", null, true);
            yield "</th>
              <th class=\"export_structure text-center\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure"), "html", null, true);
            yield "</th>
              <th class=\"export_data text-center\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Data"), "html", null, true);
            yield "</th>
            </tr>
            <tr>
              <td></td>
              <td class=\"align-middle\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select all"), "html", null, true);
            yield "</td>
              <td class=\"export_structure text-center\">
                <input type=\"checkbox\" id=\"table_structure_all\" aria-label=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export the structure of all tables."), "html", null, true);
            yield "\">
              </td>
              <td class=\"export_data text-center\">
                <input type=\"checkbox\" id=\"table_data_all\" aria-label=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export the data of all tables."), "html", null, true);
            yield "\">
              </td>
            </tr>
          </thead>

          <tbody>
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["each_table"]) {
                // line 40
                yield "              <tr class=\"marked\">
                <td>
                  <input class=\"checkall\" type=\"checkbox\" name=\"table_select[]\" value=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_table"], "name", [], "any", false, false, false, 42), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["each_table"], "is_checked_select", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
                yield ">
                </td>
                <td class=\"align-middle text-nowrap\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_table"], "name", [], "any", false, false, false, 44), "html", null, true);
                yield "</td>
                <td class=\"export_structure text-center\">
                  <input type=\"checkbox\" name=\"table_structure[]\" value=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_table"], "name", [], "any", false, false, false, 46), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["each_table"], "is_checked_structure", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
                yield ">
                </td>
                <td class=\"export_data text-center\">
                  <input type=\"checkbox\" name=\"table_data[]\" value=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_table"], "name", [], "any", false, false, false, 49), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["each_table"], "is_checked_data", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
                yield ">
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['each_table'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "          </tbody>
        </table>
      </div>
    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/export/index.twig";
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
        return array (  192 => 53,  180 => 49,  172 => 46,  167 => 44,  160 => 42,  156 => 40,  152 => 39,  143 => 33,  137 => 30,  132 => 28,  125 => 24,  121 => 23,  117 => 22,  108 => 16,  103 => 14,  100 => 13,  97 => 12,  90 => 11,  81 => 7,  72 => 5,  69 => 4,  62 => 3,  57 => 1,  50 => 61,  48 => 60,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/export/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/export/index.twig");
    }
}
