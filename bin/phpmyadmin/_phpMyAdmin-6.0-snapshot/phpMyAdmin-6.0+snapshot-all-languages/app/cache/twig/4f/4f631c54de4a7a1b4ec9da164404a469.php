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

/* server/status/monitor/index.twig */
class __TwigTemplate_7e41153b89d37d51f9fe56f6f213d43a extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "server/status/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["active"] = "monitor";
        // line 1
        $this->parent = $this->load("server/status/base.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "  <h2 class=\"mb-3\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("System monitor"), "html", null, true);
        yield "</h2>

  <div class=\"mb-3 d-print-none\">
    <button type=\"button\" class=\"btn btn-primary\" id=\"monitorPauseResumeButton\">";
        // line 7
        yield PhpMyAdmin\Html\Generator::getIcon("play", \_gettext("Start monitor"));
        yield "</button>
    <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"collapse\" data-bs-target=\"#monitorSettingsContent\" aria-expanded=\"false\" aria-controls=\"monitorSettingsContent\">";
        // line 8
        yield PhpMyAdmin\Html\Generator::getIcon("s_cog", \_gettext("Settings"));
        yield "</button>
    <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#monitorInstructionsModal\">";
        // line 9
        yield PhpMyAdmin\Html\Generator::getIcon("b_help", \_gettext("Instructions/Setup"));
        yield "</button>
  </div>

  <div class=\"collapse\" id=\"monitorSettingsContent\">
    <div class=\"card mb-3 d-print-none\">
      <div class=\"card-body\">
        <div class=\"mb-3\">
          <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorAddNewChartButton\">";
        // line 16
        yield PhpMyAdmin\Html\Generator::getIcon("b_chart", \_gettext("Add chart"));
        yield "</button>
          <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorRearrangeChartButton\">";
        // line 17
        yield PhpMyAdmin\Html\Generator::getIcon("b_tblops", \_gettext("Enable charts dragging"));
        yield "</button>
          <button type=\"button\" class=\"btn btn-primary d-none\" id=\"monitorDoneRearrangeChartButton\">";
        // line 18
        yield PhpMyAdmin\Html\Generator::getIcon("s_okay", \_gettext("Done dragging (rearranging) charts"));
        yield "</button>
        </div>

        <div class=\"row mb-3\">
          <div class=\"col-auto\">
            <label class=\"form-label\" for=\"monitorChartRefreshRateSelect\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Refresh rate"), "html", null, true);
        yield "</label>
            <select class=\"form-select\" id=\"monitorChartRefreshRateSelect\" name=\"monitorChartRefreshRate\">
              ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([2, 3, 4, 5, 10, 20, 40, 60, 120, 300, 600, 1200]);
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 26
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rate"], "html", null, true);
            yield "\"";
            yield ((($context["rate"] == 5)) ? (" selected") : (""));
            yield ">";
            // line 27
            if (($context["rate"] < 60)) {
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_ngettext("%d second", "%d seconds", $context["rate"]), $context["rate"]), "html", null, true);
            } else {
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_ngettext("%d minute", "%d minutes", ($context["rate"] / 60)), ($context["rate"] / 60)), "html", null, true);
            }
            // line 32
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rate'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "            </select>
          </div>

          <div class=\"col-auto\">
            <label class=\"form-label\" for=\"monitorChartColumnsSelect\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Chart columns"), "html", null, true);
        yield "</label>
            <select class=\"form-select\" id=\"monitorChartColumnsSelect\" name=\"monitorChartColumns\">
              ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["number_of_columns"]) {
            // line 41
            yield "                <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["number_of_columns"], "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['number_of_columns'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "            </select>
          </div>
        </div>

        <div>
          <p class=\"card-text\">
            <strong>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Chart arrangement"), "html", null, true);
        yield "</strong><br>
            <span class=\"text-body-secondary\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("The arrangement of the charts is stored to the browsers local storage. You may want to export it if you have a complicated set up."), "html", null, true);
        yield "</span>
          </p>
          <div>
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#monitorImportConfigModal\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Import"), "html", null, true);
        yield "</button>
            <div class=\"modal fade\" id=\"monitorImportConfigModal\" tabindex=\"-1\" aria-labelledby=\"monitorImportConfigModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h1 class=\"modal-title fs-5\" id=\"monitorImportConfigModalLabel\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Importing system monitor configuration"), "html", null, true);
        yield "</h1>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
                  </div>
                  <div class=\"modal-body\">
                    <form>
                      <label for=\"import_file\" class=\"form-label\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Please select the file you want to import:"), "html", null, true);
        yield "</label>
                      <input class=\"form-control\" type=\"file\" name=\"file\" id=\"import_file\">
                    </form>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"monitorImportConfigImportButton\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Import"), "html", null, true);
        yield "</button>
                  </div>
                </div>
              </div>
            </div>

            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorExportConfigButton\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export"), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorResetConfigButton\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Reset to default"), "html", null, true);
        yield "</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"modal fade\" id=\"monitorInstructionsModal\" tabindex=\"-1\" aria-labelledby=\"monitorInstructionsModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-scrollable\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"monitorInstructionsModalLabel\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("System monitor instructions"), "html", null, true);
        yield "</h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
        </div>
        <div class=\"modal-body\">
          <p>
            ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("The phpMyAdmin Monitor can assist you in optimizing the server configuration and track down time intensive queries. For the latter you will need to set log_output to 'TABLE' and have either the slow_query_log or general_log enabled. Note however, that the general_log produces a lot of data and increases server load by up to 15%."), "html", null, true);
        yield "
          </p>
          <img class=\"ajaxIcon\" src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("ajax_clock_small.gif"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading…"), "html", null, true);
        yield "\">

          <div class=\"ajaxContent\"></div>

          <div class=\"monitorUse hide\">
            <p><strong>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Using the monitor:"), "html", null, true);
        yield "</strong></p>
            <p>
              ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Your browser will refresh all displayed charts in a regular interval. You may add charts and change the refresh rate under 'Settings', or remove any chart using the cog icon on each respective chart."), "html", null, true);
        yield "
            </p>
            <p>
              ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("To display queries from the logs, click on any chart. Once confirmed, this will load a table of grouped queries, there you may click on any occurring SELECT statements to further analyze them."), "html", null, true);
        yield "
            </p>
            <p>
              ";
        // line 107
        yield PhpMyAdmin\Html\Generator::getImage("s_attention");
        yield "
              <strong>";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Please note:"), "html", null, true);
        yield "</strong>
            </p>
            <p>
              ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabling the general_log may increase the server load by 5-15%. Also be aware that generating statistics from the logs is a load intensive task, so it is advisable to select only a small time span and to disable the general_log and empty its table once monitoring is not required any more."), "html", null, true);
        yield "
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class=\"modal fade\" id=\"addChartModal\" tabindex=\"-1\" aria-labelledby=\"addChartModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"addChartModalLabel\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Chart Title"), "html", null, true);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"tabGridVariables\">
          <p>
            <input type=\"text\" name=\"chartTitle\" value=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Chart Title"), "html", null, true);
        yield "\">
          </p>
          <input type=\"radio\" name=\"chartType\" value=\"preset\" id=\"chartPreset\">

          <label for=\"chartPreset\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Preset chart"), "html", null, true);
        yield "</label>
          <select name=\"presetCharts\"></select>
          <br>

          <input type=\"radio\" name=\"chartType\" value=\"variable\" id=\"chartStatusVar\" checked>
          <label for=\"chartStatusVar\">
            ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Status variable(s)"), "html", null, true);
        yield "
          </label>
          <br>

          <div id=\"chartVariableSettings\">
            <label for=\"chartSeries\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select series:"), "html", null, true);
        yield "</label>
            <br>
            <select id=\"chartSeries\" name=\"varChartList\" size=\"1\">
              <option>";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Commonly monitored"), "html", null, true);
        yield "</option>
              <option>Processes</option>
              <option>Questions</option>
              <option>Connections</option>
              <option>Bytes_sent</option>
              <option>Bytes_received</option>
              <option>Threads_connected</option>
              <option>Created_tmp_disk_tables</option>
              <option>Handler_read_first</option>
              <option>Innodb_buffer_pool_wait_free</option>
              <option>Key_reads</option>
              <option>Open_tables</option>
              <option>Select_full_join</option>
              <option>Slow_queries</option>
            </select>
            <br>

            <label for=\"variableInput\">
              ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("or type variable name:"), "html", null, true);
        yield "
            </label>
            <input type=\"text\" name=\"variableInput\" id=\"variableInput\">
            <br>

            <input type=\"checkbox\" name=\"differentialValue\" id=\"differentialValue\" value=\"differential\" checked>
            <label for=\"differentialValue\">
              ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Display as differential value"), "html", null, true);
        yield "
            </label>
            <br>

            <input type=\"checkbox\" id=\"useDivisor\" name=\"useDivisor\" value=\"1\">
            <label for=\"useDivisor\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Apply a divisor"), "html", null, true);
        yield "</label>

            <span class=\"divisorInput hide\">
              <input type=\"text\" name=\"valueDivisor\" size=\"4\" value=\"1\">
              (<a href=\"#kibDivisor\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("KiB"), "html", null, true);
        yield "</a>,
              <a href=\"#mibDivisor\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("MiB"), "html", null, true);
        yield "</a>)
            </span>
            <br>

            <input type=\"checkbox\" id=\"useUnit\" name=\"useUnit\" value=\"1\">
            <label for=\"useUnit\">
              ";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Append unit to data values"), "html", null, true);
        yield "
            </label>
            <span class=\"unitInput hide\">
              <input type=\"text\" name=\"valueUnit\" size=\"4\" value=\"\">
            </span>

            <p>
              <a href=\"#submitAddSeries\">
                <strong>";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add this series"), "html", null, true);
        yield "</strong>
              </a>
              <span id=\"clearSeriesLink\" class=\"hide\">
                | <a href=\"#submitClearSeries\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Clear series"), "html", null, true);
        yield "</a>
              </span>
            </p>

            ";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Series in chart:"), "html", null, true);
        yield "
            <br>
            <span id=\"seriesPreview\">
              <em>";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
        yield "</em>
            </span>
          </div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"addChartButton\" data-bs-dismiss=\"modal\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add chart to grid"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"closeModalButton\" data-bs-dismiss=\"modal\">";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"logAnalyseModal\" tabindex=\"-1\" aria-labelledby=\"logAnalyseModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-dialog-scrollable\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"logAnalyseModalLabel\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log statistics"), "html", null, true);
        yield "</h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"logAnalyseDialog\">
          <p>
            ";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Selected time range:"), "html", null, true);
        yield "
            <input type=\"text\" name=\"dateStart\" class=\"datetimefield\" value=\"\">
            -
            <input type=\"text\" name=\"dateEnd\" class=\"datetimefield\" value=\"\">
          </p>

          <input type=\"checkbox\" id=\"limitTypes\" value=\"1\" checked>
          <label for=\"limitTypes\">
            ";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Only retrieve SELECT,INSERT,UPDATE and DELETE Statements"), "html", null, true);
        yield "
          </label>
          <br>

          <input type=\"checkbox\" id=\"removeVariables\" value=\"1\" checked>
          <label for=\"removeVariables\">
            ";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove variable data in INSERT statements for better grouping"), "html", null, true);
        yield "
          </label>

          <p>
            ";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Choose from which log you want the statistics to be generated from."), "html", null, true);
        yield "
          </p>
          <p>
            ";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Results are grouped by query text."), "html", null, true);
        yield "
          </p>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"logAnalyseModalSlowLogButton\">";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("From slow log"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"logAnalyseModalGeneralLogButton\">";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("From general log"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"queryAnalyzerModal\" tabindex=\"-1\" aria-labelledby=\"queryAnalyzerModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl modal-dialog-scrollable\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"queryAnalyzerModalLabel\">";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Query analyzer"), "html", null, true);
        yield "</h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"queryAnalyzerDialog\">
          <div>
            <textarea id=\"sqlquery\" aria-label=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Query"), "html", null, true);
        yield "\"></textarea>
          </div>
          <div class=\"placeHolder\"></div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"queryAnalyzerModalAnalyseButton\">";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Analyse query"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"analysingLogsModal\" tabindex=\"-1\" aria-labelledby=\"analysingLogsModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"analysingLogsModalLabel\">";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Analysing logs"), "html", null, true);
        yield "</h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel request"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Analysing and loading logs. This may take a while."), "html", null, true);
        yield "</p>
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading…"), "html", null, true);
        yield "</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel request"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"analysingLogsNoDataFoundModal\" tabindex=\"-1\" aria-labelledby=\"analysingLogsNoDataFoundModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"analysingLogsNoDataFoundModalLabel\">";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No data found"), "html", null, true);
        yield "</h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        ";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log analysed, but no data found in this time span."), "html", null, true);
        yield "
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"analysingLogsLogDataLoadedModal\" tabindex=\"-1\" aria-labelledby=\"analysingLogsLogDataLoadedModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"analysingLogsLogDataLoadedModalLabel\">";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading logs"), "html", null, true);
        yield "</h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log data loaded. Queries executed in this time span:"), "html", null, true);
        yield "</p>
        <div></div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"analysingLogsLogDataLoadedModalJumpButton\">";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Jump to the log table"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"serverResponseErrorModal\" tabindex=\"-1\" aria-labelledby=\"serverResponseErrorModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"serverResponseErrorModalLabel\">";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Monitor refresh failed"), "html", null, true);
        yield "</h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <span aria-label=\"";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Warning:"), "html", null, true);
        yield "\">";
        yield PhpMyAdmin\Html\Generator::getImage("s_attention");
        yield "</span>
        ";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("While requesting new chart data the server returned an invalid response. This is most likely because your session expired. Reloading the page and reentering your credentials should help."), "html", null, true);
        yield "
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"serverResponseErrorModalReloadButton\">";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Reload page"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"incompatibleMonitorConfigModal\" tabindex=\"-1\" aria-labelledby=\"incompatibleMonitorConfigModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"incompatibleMonitorConfigModalLabel\">";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Local monitor configuration incompatible!"), "html", null, true);
        yield "</h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <span aria-label=\"";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Warning:"), "html", null, true);
        yield "\">";
        yield PhpMyAdmin\Html\Generator::getImage("s_attention");
        yield "</span>
        ";
        // line 370
        yield PhpMyAdmin\Sanitize::convertBBCode(\_gettext("The chart arrangement configuration in your browsers local storage is not compatible anymore to the newer version of the monitor dialog. It is very likely that your current configuration will not work anymore. Please reset your configuration to default in the [em]Settings[/em] menu."));
        yield "
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>

<div class=\"clearfloat\"></div>
<div><table class=\"clearfloat tdblock\" id=\"chartGrid\"></table></div>
<div id=\"logTable\"><br></div>

<script>
  var variableNames = [
    ";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["javascript_variable_names"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["variable_name"]) {
            // line 386
            yield "      \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["variable_name"], "js"), "html", null, true);
            yield "\",
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['variable_name'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        yield "  ];
</script>

<form id=\"js_data\" class=\"d-none disableAjax\">
  ";
        // line 392
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 393
            yield "    <input type=\"hidden\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
        yield "</form>

<div id=\"profiling_docu\" class=\"hide\">
  ";
        // line 398
        yield PhpMyAdmin\Html\MySQLDocumentation::show("general-thread-states");
        yield "
</div>

<div id=\"explain_docu\" class=\"hide\">
  ";
        // line 402
        yield PhpMyAdmin\Html\MySQLDocumentation::show("explain-output");
        yield "
</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/status/monitor/index.twig";
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
        return array (  789 => 402,  782 => 398,  777 => 395,  766 => 393,  762 => 392,  756 => 388,  747 => 386,  743 => 385,  728 => 373,  722 => 370,  716 => 369,  710 => 366,  706 => 365,  693 => 355,  689 => 354,  683 => 351,  677 => 350,  671 => 347,  667 => 346,  654 => 336,  650 => 335,  643 => 331,  637 => 328,  633 => 327,  620 => 317,  614 => 314,  608 => 311,  604 => 310,  591 => 300,  584 => 296,  579 => 294,  573 => 291,  569 => 290,  556 => 280,  552 => 279,  543 => 273,  535 => 268,  531 => 267,  518 => 257,  514 => 256,  510 => 255,  502 => 250,  496 => 247,  489 => 243,  480 => 237,  469 => 229,  461 => 224,  457 => 223,  444 => 213,  440 => 212,  431 => 206,  425 => 203,  418 => 199,  412 => 196,  401 => 188,  392 => 182,  388 => 181,  381 => 177,  373 => 172,  363 => 165,  342 => 147,  336 => 144,  328 => 139,  319 => 133,  312 => 129,  304 => 124,  300 => 123,  285 => 111,  279 => 108,  275 => 107,  269 => 104,  263 => 101,  258 => 99,  248 => 94,  243 => 92,  236 => 88,  232 => 87,  218 => 76,  214 => 75,  205 => 69,  201 => 68,  193 => 63,  186 => 59,  182 => 58,  174 => 53,  168 => 50,  164 => 49,  156 => 43,  147 => 41,  143 => 40,  138 => 38,  132 => 34,  125 => 32,  122 => 30,  119 => 28,  117 => 27,  111 => 26,  107 => 25,  102 => 23,  94 => 18,  90 => 17,  86 => 16,  76 => 9,  72 => 8,  68 => 7,  61 => 4,  54 => 3,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/status/monitor/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/monitor/index.twig");
    }
}
