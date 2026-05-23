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

/* table/zoom_search/index.twig */
class __TwigTemplate_26ed747d279287de26a7cfd7f261bd1a extends Template
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
        yield "<ul class=\"nav nav-pills m-2\">
  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 3
        yield PhpMyAdmin\Url::getFromRoute("/table/search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "pos" => 0]);
        yield "\">
      ";
        // line 4
        yield PhpMyAdmin\Html\Generator::getIcon("b_search", \_gettext("Table search"), false, false, "TabsMode");
        yield "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link active disableAjax\" href=\"";
        // line 9
        yield PhpMyAdmin\Url::getFromRoute("/table/zoom-search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
        yield "\">
      ";
        // line 10
        yield PhpMyAdmin\Html\Generator::getIcon("b_select", \_gettext("Zoom search"), false, false, "TabsMode");
        yield "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 15
        yield PhpMyAdmin\Url::getFromRoute("/table/find-replace", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
        yield "\">
      ";
        // line 16
        yield PhpMyAdmin\Html\Generator::getIcon("b_find_replace", \_gettext("Find and replace"), false, false, "TabsMode");
        yield "
    </a>
  </li>
</ul>

<form method=\"post\" action=\"";
        // line 21
        yield PhpMyAdmin\Url::getFromRoute("/table/zoom-search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
        yield "\" name=\"insertForm\" id=\"zoom_search_form\" class=\"ajax lock-page\">
  ";
        // line 22
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["goto"] ?? null), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"back\" value=\"";
        // line 24
        yield PhpMyAdmin\Url::getFromRoute("/table/zoom-search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
        yield "\">

  <div class=\"card mb-3\">
    <div class=\"card-header\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Do a \"query by example\" (wildcard: \"%\") for two different columns"), "html", null, true);
        yield "</div>

    <div class=\"card-body\" id=\"inputSection\">
      <table class=\"table table-striped table-hover table-sm w-auto\" id=\"tableFieldsId\">
        <thead>
          <tr>
            ";
        // line 33
        if ((($tmp = ($context["geom_column_flag"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "              <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Function"), "html", null, true);
            yield "</th>
            ";
        }
        // line 36
        yield "            <th>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
        yield "</th>
            <th>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
        yield "</th>
            <th>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "</th>
            <th>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Operator"), "html", null, true);
        yield "</th>
            <th>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Value"), "html", null, true);
        yield "</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 44
        $context["type"] = [];
        // line 45
        yield "          ";
        $context["collation"] = [];
        // line 46
        yield "          ";
        $context["func"] = [];
        // line 47
        yield "          ";
        $context["value"] = [];
        // line 48
        yield "
          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            yield "            ";
            // line 51
            yield "            ";
            if (($context["i"] == 2)) {
                // line 52
                yield "              <tr>
                <th>
                  ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Additional search criteria"), "html", null, true);
                yield "
                </th>
              </tr>
            ";
            }
            // line 58
            yield "            <tr class=\"noclick\">
              <th>
                <select name=\"criteriaColumnNames[]\" id=\"tableid_";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">
                  <option value=\"pma_null\">
                    ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "
                  </option>
                  ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["column_names"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 65
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_column_names"] ?? null), $context["i"], [], "array", true, true, false, 65) && ((($_v0 = ($context["criteria_column_names"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["i"]] ?? null) : null) == (($_v1 = ($context["column_names"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["j"]] ?? null) : null)))) {
                    // line 66
                    yield "                      <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["column_names"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[$context["j"]] ?? null) : null), "html", null, true);
                    yield "\" selected>
                        ";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["column_names"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[$context["j"]] ?? null) : null), "html", null, true);
                    yield "
                      </option>
                    ";
                } else {
                    // line 70
                    yield "                      <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["column_names"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[$context["j"]] ?? null) : null), "html", null, true);
                    yield "\">
                        ";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = ($context["column_names"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[$context["j"]] ?? null) : null), "html", null, true);
                    yield "
                      </option>
                    ";
                }
                // line 74
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['j'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "                </select>
              </th>
              ";
            // line 77
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_column_names"] ?? null), $context["i"], [], "array", true, true, false, 77) && ((($_v6 = ($context["criteria_column_names"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[$context["i"]] ?? null) : null) != "pma_null"))) {
                // line 78
                yield "                ";
                $context["type"] = Twig\Extension\CoreExtension::merge(($context["type"] ?? null), [ (string)$context["i"] => (($_v7 = (($_v8 = ($context["properties"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[$context["i"]] ?? null) : null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["type"] ?? null) : null)]);
                // line 79
                yield "                ";
                $context["collation"] = Twig\Extension\CoreExtension::merge(($context["collation"] ?? null), [ (string)$context["i"] => (($_v9 = (($_v10 = ($context["properties"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[$context["i"]] ?? null) : null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["collation"] ?? null) : null)]);
                // line 80
                yield "                ";
                $context["func"] = Twig\Extension\CoreExtension::merge(($context["func"] ?? null), [ (string)$context["i"] => (($_v11 = (($_v12 = ($context["properties"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[$context["i"]] ?? null) : null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["func"] ?? null) : null)]);
                // line 81
                yield "                ";
                $context["value"] = Twig\Extension\CoreExtension::merge(($context["value"] ?? null), [ (string)$context["i"] => (($_v13 = (($_v14 = ($context["properties"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[$context["i"]] ?? null) : null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["value"] ?? null) : null)]);
                // line 82
                yield "              ";
            }
            // line 83
            yield "              ";
            // line 84
            yield "              <td dir=\"ltr\">
                ";
            // line 85
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["type"] ?? null), $context["i"], [], "array", true, true, false, 85)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v15 = ($context["type"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[$context["i"]] ?? null) : null), "html", null, true)) : (""));
            yield "
              </td>
              ";
            // line 88
            yield "              <td>
                ";
            // line 89
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collation"] ?? null), $context["i"], [], "array", true, true, false, 89)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v16 = ($context["collation"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[$context["i"]] ?? null) : null), "html", null, true)) : (""));
            yield "
              </td>
              ";
            // line 92
            yield "              <td>
                ";
            // line 93
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["func"] ?? null), $context["i"], [], "array", true, true, false, 93)) ? ((($_v17 = ($context["func"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[$context["i"]] ?? null) : null)) : (""));
            yield "
              </td>
              ";
            // line 96
            yield "              <td>
                ";
            // line 97
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), $context["i"], [], "array", true, true, false, 97)) ? ((($_v18 = ($context["value"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[$context["i"]] ?? null) : null)) : (""));
            yield "
              </td>
              <td>
                ";
            // line 101
            yield "                <input type=\"hidden\" name=\"criteriaColumnTypes[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "]\" id=\"types_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\"";
            // line 102
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_column_types"] ?? null), $context["i"], [], "array", true, true, false, 102)) {
                yield " value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v19 = ($context["criteria_column_types"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[$context["i"]] ?? null) : null), "html", null, true);
                yield "\"";
            }
            yield ">
                <input type=\"hidden\" name=\"criteriaColumnCollations[";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "]\" id=\"collations_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "        </tbody>
      </table>

      <table class=\"table table-borderless table-sm w-auto\">
        <tr>
          <td>
            <label for=\"dataLabel\">
              ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use this column to label each point"), "html", null, true);
        yield "
            </label>
          </td>
          <td>
            <select name=\"dataLabel\" id=\"dataLabel\">
              <option value=\"\">
                ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
        yield "
              </option>
              ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["column_names"] ?? null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 123
            yield "                ";
            if ((array_key_exists("data_label", $context) && (($context["data_label"] ?? null) == $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v20 = ($context["column_names"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[$context["i"]] ?? null) : null))))) {
                // line 124
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v21 = ($context["column_names"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[$context["i"]] ?? null) : null), "html", null, true);
                yield "\" selected>
                    ";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v22 = ($context["column_names"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[$context["i"]] ?? null) : null), "html", null, true);
                yield "
                  </option>
                ";
            } else {
                // line 128
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v23 = ($context["column_names"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[$context["i"]] ?? null) : null), "html", null, true);
                yield "\">
                    ";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v24 = ($context["column_names"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[$context["i"]] ?? null) : null), "html", null, true);
                yield "
                  </option>
                ";
            }
            // line 132
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label for=\"maxRowPlotLimit\">
              ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Maximum rows to plot"), "html", null, true);
        yield "
            </label>
          </td>
          <td>
            <input type=\"number\" name=\"maxPlotLimit\" id=\"maxRowPlotLimit\" required value=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["max_plot_limit"] ?? null), "html", null, true);
        yield "\">
          </td>
        </tr>
      </table>

      ";
        // line 148
        yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/gis_editor.twig");
        yield "
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"zoom_submit\" id=\"inputFormSubmitId\" value=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </div>
</form>
<div id=\"sqlqueryresultsouter\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/zoom_search/index.twig";
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
        return array (  394 => 152,  387 => 148,  379 => 143,  372 => 139,  364 => 133,  358 => 132,  352 => 129,  347 => 128,  341 => 125,  336 => 124,  333 => 123,  329 => 122,  324 => 120,  315 => 114,  306 => 107,  294 => 103,  286 => 102,  280 => 101,  274 => 97,  271 => 96,  266 => 93,  263 => 92,  258 => 89,  255 => 88,  250 => 85,  247 => 84,  245 => 83,  242 => 82,  239 => 81,  236 => 80,  233 => 79,  230 => 78,  228 => 77,  224 => 75,  218 => 74,  212 => 71,  207 => 70,  201 => 67,  196 => 66,  193 => 65,  189 => 64,  184 => 62,  179 => 60,  175 => 58,  168 => 54,  164 => 52,  161 => 51,  159 => 50,  155 => 49,  152 => 48,  149 => 47,  146 => 46,  143 => 45,  141 => 44,  134 => 40,  130 => 39,  126 => 38,  122 => 37,  117 => 36,  111 => 34,  109 => 33,  100 => 27,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  74 => 16,  70 => 15,  62 => 10,  58 => 9,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/zoom_search/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/zoom_search/index.twig");
    }
}
