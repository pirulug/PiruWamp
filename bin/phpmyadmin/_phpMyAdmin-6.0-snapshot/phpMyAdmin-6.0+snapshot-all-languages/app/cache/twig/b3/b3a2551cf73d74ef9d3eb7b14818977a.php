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

/* database/events/index.twig */
class __TwigTemplate_a6acc3a224ae13de7d82fdf820e1b8c4 extends Template
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
        yield "<div class=\"container-fluid my-3\">
  <h2>
    ";
        // line 3
        yield PhpMyAdmin\Html\Generator::getIcon("b_events", \_gettext("Events"));
        yield "
    ";
        // line 4
        yield PhpMyAdmin\Html\MySQLDocumentation::show("EVENTS");
        yield "
  </h2>

  <div class=\"d-flex flex-wrap my-3\">";
        // line 8
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    <div>
      <div class=\"input-group\">
        <div class=\"input-group-text\">
          <div class=\"form-check mb-0\">
            <input class=\"form-check-input checkall_box\" type=\"checkbox\" value=\"\" id=\"checkAllCheckbox\" form=\"rteListForm\">
            <label class=\"form-check-label\" for=\"checkAllCheckbox\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "</label>
          </div>
        </div>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionExportButton\" type=\"submit\" name=\"submit_mult\" value=\"export\" form=\"rteListForm\" title=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export"), "html", null, true);
            yield "\">
          ";
            // line 18
            yield PhpMyAdmin\Html\Generator::getIcon("b_export", \_gettext("Export"));
            yield "
        </button>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionDropButton\" type=\"submit\" name=\"submit_mult\" value=\"drop\" form=\"rteListForm\" title=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Drop"), "html", null, true);
            yield "\">
          ";
            // line 21
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Drop"));
            yield "
        </button>
      </div>
    </div>";
        }
        // line 26
        yield "
    <div";
        // line 27
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"ms-auto\"") : (""));
        yield ">
      <a class=\"ajax add_anchor btn btn-primary";
        // line 28
        yield (((($tmp =  !($context["has_privilege"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" disabled") : (""));
        yield "\" href=\"";
        yield PhpMyAdmin\Url::getFromRoute("/database/events", ["db" => ($context["db"] ?? null), "add_item" => true]);
        yield "\" role=\"button\"";
        yield (((($tmp =  !($context["has_privilege"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" tabindex=\"-1\" aria-disabled=\"true\"") : (""));
        yield ">
        ";
        // line 29
        yield PhpMyAdmin\Html\Generator::getIcon("b_event_add", \_gettext("Create new event"));
        yield "
      </a>
    </div>
  </div>

  <form id=\"rteListForm\" class=\"disableAjax\" action=\"";
        // line 34
        yield PhpMyAdmin\Url::getFromRoute("/database/events");
        yield "\">
    ";
        // line 35
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "

    <div id=\"nothing2display\"";
        // line 37
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"hide\"") : (""));
        yield ">
      ";
        // line 38
        yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("There are no events to display."));
        yield "
    </div>

    <table id=\"eventsTable\" class=\"table table-striped table-hover";
        // line 41
        yield ((Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) ? (" hide") : (""));
        yield " w-auto data\">
      <thead>
      <tr>
        <th></th>
        <th>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Name"), "html", null, true);
        yield "</th>
        <th>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Status"), "html", null, true);
        yield "</th>
        <th>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
        yield "</th>
        <th colspan=\"3\"></th>
      </tr>
      </thead>
      <tbody>
      <tr class=\"hide\">";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            yield "<td></td>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</tr>

      ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 55
            yield "        <tr";
            yield (((($tmp = ($context["is_ajax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"ajaxInsert hide\"") : (""));
            yield ">
          <td>
            <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 57), "html", null, true);
            yield "\">
          </td>
          <td>
            <span class=\"drop_sql hide\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("DROP EVENT IF EXISTS %s", PhpMyAdmin\Util::backquote(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 60))), "html", null, true);
            yield "</span>
            <strong>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 61), "html", null, true);
            yield "</strong>
          </td>
          <td>
            ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 64), "html", null, true);
            yield "
          </td>
          <td>
            ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 67), "html", null, true);
            yield "
          </td>
          <td>
            ";
            // line 70
            if ((($tmp = ($context["has_privilege"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "              <a class=\"ajax edit_anchor\" href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/database/events", ["db" =>                 // line 72
($context["db"] ?? null), "edit_item" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source,                 // line 74
$context["event"], "name", [], "any", false, false, false, 74)]);
                // line 75
                yield "\">
                ";
                // line 76
                yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit"));
                yield "
              </a>
            ";
            } else {
                // line 79
                yield "              ";
                yield PhpMyAdmin\Html\Generator::getIcon("bd_edit", \_gettext("Edit"));
                yield "
            ";
            }
            // line 81
            yield "          </td>
          <td>
            <a class=\"ajax export_anchor\" href=\"";
            // line 83
            yield PhpMyAdmin\Url::getFromRoute("/database/events", ["db" =>             // line 84
($context["db"] ?? null), "export_item" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source,             // line 86
$context["event"], "name", [], "any", false, false, false, 86)]);
            // line 87
            yield "\">
              ";
            // line 88
            yield PhpMyAdmin\Html\Generator::getIcon("b_export", \_gettext("Export"));
            yield "
            </a>
          </td>
          <td>
            ";
            // line 92
            if ((($tmp = ($context["has_privilege"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 93
                yield "              ";
                yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), ["db" =>                 // line 96
($context["db"] ?? null), "sql_query" => Twig\Extension\CoreExtension::sprintf("DROP EVENT IF EXISTS %s", PhpMyAdmin\Util::backquote(CoreExtension::getAttribute($this->env, $this->source,                 // line 97
$context["event"], "name", [], "any", false, false, false, 97))), "goto" => PhpMyAdmin\Url::getFromRoute("/database/events", ["db" =>                 // line 98
($context["db"] ?? null)])], PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Drop")), ["class" => "ajax drop_anchor"]);
                // line 102
                yield "
            ";
            } else {
                // line 104
                yield "              ";
                yield PhpMyAdmin\Html\Generator::getIcon("bd_drop", \_gettext("Drop"));
                yield "
            ";
            }
            // line 106
            yield "          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "      </tbody>
    </table>
  </form>

  <div class=\"card mt-3\">
    <div class=\"card-header\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Event scheduler status"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
      <div class=\"wrap\">
        <div class=\"wrapper toggleAjax hide\">
          <div class=\"toggleButton\">
            <div title=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Click to toggle"), "html", null, true);
        yield "\" class=\"toggle-container ";
        yield (((($tmp = ($context["scheduler_state"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("on") : ("off"));
        yield "\">
              <img src=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath((("toggle-" . CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "text_dir", [], "any", false, false, false, 120)) . ".png")), "html", null, true);
        yield "\">
              <table>
                <tbody>
                <tr>
                  <td class=\"toggleOn\">
                  <span class=\"hide\">";
        // line 126
        yield PhpMyAdmin\Url::getFromRoute("/sql", ["db" =>         // line 127
($context["db"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/database/events", ["db" =>         // line 128
($context["db"] ?? null)]), "sql_query" => "SET GLOBAL event_scheduler=\"ON\""]);
        // line 131
        yield "</span>
                    <div>";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("ON"), "html", null, true);
        yield "</div>
                  </td>
                  <td><div>&nbsp;</div></td>
                  <td class=\"toggleOff\">
                  <span class=\"hide\">";
        // line 137
        yield PhpMyAdmin\Url::getFromRoute("/sql", ["db" =>         // line 138
($context["db"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/database/events", ["db" =>         // line 139
($context["db"] ?? null)]), "sql_query" => "SET GLOBAL event_scheduler=\"OFF\""]);
        // line 142
        yield "</span>
                    <div>";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("OFF"), "html", null, true);
        yield "</div>
                  </td>
                </tr>
                </tbody>
              </table>
              <span class=\"hide callback\">window.pmaSlidingMessage(data.sql_query);</span>
              <span class=\"hide text_direction\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "text_dir", [], "any", false, false, false, 149), "html", null, true);
        yield "</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"modal fade\" id=\"eventsEditorModal\" tabindex=\"-1\" aria-labelledby=\"eventsEditorModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-scrollable\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"eventsEditorModalLabel\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Event editor"), "html", null, true);
        yield "</h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading…"), "html", null, true);
        yield "</span>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"eventsEditorModalSaveButton\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save changes"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  </div>

  <div class=\"modal fade\" id=\"eventsExportModal\" tabindex=\"-1\" aria-labelledby=\"eventsExportModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"eventsExportModalLabel\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export event"), "html", null, true);
        yield "</h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
        </div>
        <div class=\"modal-body\"></div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
        </div>
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
        return "database/events/index.twig";
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
        return array (  392 => 186,  385 => 182,  381 => 181,  368 => 171,  364 => 170,  357 => 166,  350 => 162,  346 => 161,  331 => 149,  322 => 143,  319 => 142,  317 => 139,  316 => 138,  315 => 137,  308 => 132,  305 => 131,  303 => 128,  302 => 127,  301 => 126,  293 => 120,  287 => 119,  279 => 114,  272 => 109,  264 => 106,  258 => 104,  254 => 102,  252 => 98,  251 => 97,  250 => 96,  248 => 93,  246 => 92,  239 => 88,  236 => 87,  234 => 86,  233 => 84,  232 => 83,  228 => 81,  222 => 79,  216 => 76,  213 => 75,  211 => 74,  210 => 72,  208 => 71,  206 => 70,  200 => 67,  194 => 64,  188 => 61,  184 => 60,  178 => 57,  172 => 55,  168 => 54,  156 => 52,  148 => 47,  144 => 46,  140 => 45,  133 => 41,  127 => 38,  123 => 37,  118 => 35,  114 => 34,  106 => 29,  98 => 28,  94 => 27,  91 => 26,  84 => 21,  80 => 20,  75 => 18,  71 => 17,  65 => 14,  58 => 9,  56 => 8,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/events/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/events/index.twig");
    }
}
