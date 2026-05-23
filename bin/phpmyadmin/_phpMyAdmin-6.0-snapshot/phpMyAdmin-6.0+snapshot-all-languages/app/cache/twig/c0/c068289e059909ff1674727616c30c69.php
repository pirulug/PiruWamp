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

/* table/chart/tbl_chart.twig */
class __TwigTemplate_31929def5e08a2de894b1ab888c6a406 extends Template
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
        yield "<div id=\"div_view_options\" class=\"container\">
  <h2>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Display chart"), "html", null, true);
        yield "</h2>

  <div class=\"card\">
    <div class=\"card-body\">
      <form method=\"post\" id=\"tblchartform\" action=\"";
        // line 6
        yield PhpMyAdmin\Url::getFromRoute("/table/chart");
        yield "\" class=\"ajax\">
        ";
        // line 7
        yield PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        yield "

        <fieldset class=\"mb-3\" role=\"radiogroup\">
          <legend class=\"visually-hidden\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Chart type"), "html", null, true);
        yield "</legend>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"bar\" id=\"barChartTypeRadio\">
            <label class=\"form-check-label\" for=\"barChartTypeRadio\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Chart type", "Bar"), "html", null, true);
        yield "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"column\" id=\"columnChartTypeRadio\">
            <label class=\"form-check-label\" for=\"columnChartTypeRadio\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Chart type", "Column"), "html", null, true);
        yield "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"line\" id=\"lineChartTypeRadio\" checked>
            <label class=\"form-check-label\" for=\"lineChartTypeRadio\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Chart type", "Line"), "html", null, true);
        yield "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"spline\" id=\"splineChartTypeRadio\">
            <label class=\"form-check-label\" for=\"splineChartTypeRadio\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Chart type", "Spline"), "html", null, true);
        yield "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"area\" id=\"areaChartTypeRadio\">
            <label class=\"form-check-label\" for=\"areaChartTypeRadio\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Chart type", "Area"), "html", null, true);
        yield "</label>
          </div>
          <div class=\"form-check form-check-inline d-none\" id=\"pieChartType\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"pie\" id=\"pieChartTypeRadio\">
            <label class=\"form-check-label\" for=\"pieChartTypeRadio\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Chart type", "Pie"), "html", null, true);
        yield "</label>
          </div>
          <div class=\"form-check form-check-inline d-none\" id=\"timelineChartType\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"timeline\" id=\"timelineChartTypeRadio\">
            <label class=\"form-check-label\" for=\"timelineChartTypeRadio\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Chart type", "Timeline"), "html", null, true);
        yield "</label>
          </div>
          <div class=\"form-check form-check-inline d-none\" id=\"scatterChartType\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"scatter\" id=\"scatterChartTypeRadio\">
            <label class=\"form-check-label\" for=\"scatterChartTypeRadio\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Chart type", "Scatter"), "html", null, true);
        yield "</label>
          </div>
        </fieldset>

        <div class=\"form-check mb-3 d-none\" id=\"barStacked\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"barStackedCheckbox\" value=\"1\" id=\"barStackedCheckbox\">
          <label class=\"form-check-label\" for=\"barStackedCheckbox\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Stacked"), "html", null, true);
        yield "</label>
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartTitleInput\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Chart title:"), "html", null, true);
        yield "</label>
          <input class=\"form-control\" type=\"text\" name=\"chartTitleInput\" id=\"chartTitleInput\">
        </div>

        ";
        // line 55
        $context["xaxis"] = null;
        // line 56
        yield "        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartXAxisSelect\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("X-Axis:"), "html", null, true);
        yield "</label>
          <select class=\"form-select\" name=\"chartXAxisSelect\" id=\"chartXAxisSelect\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 60
            yield "              ";
            if ((($context["xaxis"] ?? null) === null)) {
                // line 61
                yield "                ";
                $context["xaxis"] = $context["idx"];
                // line 62
                yield "              ";
            }
            // line 63
            yield "              ";
            if ((($context["xaxis"] ?? null) === $context["idx"])) {
                // line 64
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["idx"], "html", null, true);
                yield "\" selected>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "</option>
              ";
            } else {
                // line 66
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["idx"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "</option>
              ";
            }
            // line 68
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['idx'], $context['key'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "          </select>
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartSeriesSelect\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Series:"), "html", null, true);
        yield "</label>
          <select class=\"form-select resize-vertical\" name=\"chartSeriesSelect\" id=\"chartSeriesSelect\" multiple>
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 76
            yield "              ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["fields_meta"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["idx"]] ?? null) : null), "isNumeric", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "                ";
                if ((($context["idx"] == ($context["xaxis"] ?? null)) && ($context["table_has_a_numeric_column"] ?? null))) {
                    // line 78
                    yield "                  <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["idx"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "</option>
                ";
                } else {
                    // line 80
                    yield "                  <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["idx"], "html", null, true);
                    yield "\" selected>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "</option>
                ";
                }
                // line 82
                yield "              ";
            }
            // line 83
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['idx'], $context['key'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "          </select>
        </div>

        <input type=\"hidden\" name=\"dateTimeCols\" value=\"";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 89
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["fields_meta"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["idx"]] ?? null) : null), "isDateTimeType", [], "method", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["idx"] . " "), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['idx'], $context['key'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "\">
        <input type=\"hidden\" name=\"numericCols\" value=\"";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 95
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["fields_meta"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[$context["idx"]] ?? null) : null), "isNumeric", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["idx"] . " "), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['idx'], $context['key'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "\">

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"xAxisLabelInput\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("X-Axis label:"), "html", null, true);
        yield "</label>
          <input class=\"form-control\" type=\"text\" name=\"xAxisLabelInput\" id=\"xAxisLabelInput\" value=\"";
        // line 102
        yield (((($context["xaxis"] ?? null) ==  -1)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("X Values"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["keys"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[($context["xaxis"] ?? null)] ?? null) : null), "html", null, true)));
        yield "\">
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"yAxisLabelInput\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Y-Axis label:"), "html", null, true);
        yield "</label>
          <input class=\"form-control\" type=\"text\" name=\"yAxisLabelInput\" id=\"yAxisLabelInput\" value=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Y Values"), "html", null, true);
        yield "\">
        </div>

        <div class=\"form-check mb-3\">
          <input class=\"form-check-input\" type=\"checkbox\" id=\"seriesColumnCheckbox\" name=\"seriesColumnCheckbox\" value=\"1\">
          <label class=\"form-check-label\" for=\"seriesColumnCheckbox\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Series names are in a column"), "html", null, true);
        yield "</label>
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartSeriesColumnSelect\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Series column:"), "html", null, true);
        yield "</label>
          <select class=\"form-select\" name=\"chartSeriesColumnSelect\" id=\"chartSeriesColumnSelect\" disabled>
            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 119
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["idx"], "html", null, true);
            yield "\"";
            yield ((($context["idx"] == 1)) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "</option>
              ";
            // line 120
            $context["series_column"] = $context["idx"];
            // line 121
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['idx'], $context['key'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "          </select>
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartValueColumnSelect\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Value Column:"), "html", null, true);
        yield "</label>
          <select class=\"form-select\" name=\"chartValueColumnSelect\" id=\"chartValueColumnSelect\" disabled>
            ";
        // line 128
        $context["selected"] = false;
        // line 129
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 130
            yield "              ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["fields_meta"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[$context["idx"]] ?? null) : null), "isNumeric", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 131
                yield "                ";
                if (((( !($context["selected"] ?? null) && ($context["idx"] != ($context["xaxis"] ?? null))) && array_key_exists("series_column", $context)) && ($context["idx"] != ($context["series_column"] ?? null)))) {
                    // line 132
                    yield "                  <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["idx"], "html", null, true);
                    yield "\" selected>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "</option>
                  ";
                    // line 133
                    $context["selected"] = true;
                    // line 134
                    yield "                ";
                } else {
                    // line 135
                    yield "                  <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["idx"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "</option>
                ";
                }
                // line 137
                yield "              ";
            }
            // line 138
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['idx'], $context['key'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "          </select>
        </div>

        ";
        // line 142
        yield Twig\Extension\CoreExtension::include($this->env, $context, "table/start_and_number_of_rows_fieldset.twig", ($context["start_and_number_of_rows_fieldset"] ?? null));
        yield "

        <div id=\"resizer\" class=\"mt-3\">
          <canvas id=\"queryChartCanvas\" aria-label=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("The generated chart"), "html", null, true);
        yield "\" role=\"img\"></canvas>
          <div class=\"position-absolute top-0 end-0 mt-1 me-1\">
            <a class=\"disableAjax btn btn-sm btn-outline-secondary\" id=\"saveChart\" href=\"#\" download=\"chart.png\">
              ";
        // line 148
        yield PhpMyAdmin\Html\Generator::getImage("b_saveimage", \_gettext("Save chart as image"));
        yield "
            </a>
          </div>
        </div>
      </form>
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
        return "table/chart/tbl_chart.twig";
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
        return array (  399 => 148,  393 => 145,  387 => 142,  382 => 139,  376 => 138,  373 => 137,  365 => 135,  362 => 134,  360 => 133,  353 => 132,  350 => 131,  347 => 130,  342 => 129,  340 => 128,  335 => 126,  329 => 122,  323 => 121,  321 => 120,  312 => 119,  308 => 118,  303 => 116,  296 => 112,  288 => 107,  284 => 106,  277 => 102,  273 => 101,  268 => 98,  261 => 96,  259 => 95,  255 => 94,  252 => 92,  245 => 90,  243 => 89,  239 => 88,  234 => 84,  228 => 83,  225 => 82,  217 => 80,  209 => 78,  206 => 77,  203 => 76,  199 => 75,  194 => 73,  188 => 69,  182 => 68,  174 => 66,  166 => 64,  163 => 63,  160 => 62,  157 => 61,  154 => 60,  150 => 59,  145 => 57,  142 => 56,  140 => 55,  133 => 51,  126 => 47,  117 => 41,  110 => 37,  103 => 33,  96 => 29,  89 => 25,  82 => 21,  75 => 17,  68 => 13,  62 => 10,  56 => 7,  52 => 6,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/chart/tbl_chart.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/chart/tbl_chart.twig");
    }
}
