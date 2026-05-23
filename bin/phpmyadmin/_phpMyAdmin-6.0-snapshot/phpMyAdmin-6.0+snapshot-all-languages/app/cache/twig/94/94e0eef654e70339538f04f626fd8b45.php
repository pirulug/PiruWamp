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

/* server/databases/index.twig */
class __TwigTemplate_9e0ee2b932e188c7ccc5c2f5cc9fb915 extends Template
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
        yield PhpMyAdmin\Html\Generator::getIcon("s_db", (((($tmp = ($context["has_statistics"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (\_gettext("Databases statistics")) : (\_gettext("Databases"))));
        yield "
  </h2>

  ";
        // line 6
        if ((($tmp = ($context["is_create_database_shown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "    <div class=\"card\">
      <div class=\"card-header\">
        ";
            // line 9
            yield PhpMyAdmin\Html\Generator::getIcon("b_newdb", \_gettext("Create database"));
            yield "
        ";
            // line 10
            yield PhpMyAdmin\Html\MySQLDocumentation::show("CREATE_DATABASE");
            yield "
      </div>
      <div class=\"card-body\">
        ";
            // line 13
            if ((($tmp = ($context["has_create_database_privileges"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 14
                yield "          <form method=\"post\" action=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/databases/create");
                yield "\" id=\"create_database_form\" class=\"ajax row row-cols-md-auto g-3 align-items-center\">
            ";
                // line 15
                yield PhpMyAdmin\Url::getHiddenInputs("", "");
                yield "
            <input type=\"hidden\" name=\"reload\" value=\"1\">
            ";
                // line 17
                if ((($tmp = ($context["has_statistics"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 18
                    yield "              <input type=\"hidden\" name=\"statistics\" value=\"1\">
            ";
                }
                // line 20
                yield "
            <div class=\"col-12\">
              <input autocomplete=\"off\" type=\"text\" name=\"new_db\" maxlength=\"64\" class=\"form-control\" value=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["database_to_create"] ?? null), "html", null, true);
                yield "\" id=\"text_create_db\" placeholder=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database name"), "html", null, true);
                yield "\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database name"), "html", null, true);
                yield "\" required>
            </div>

            ";
                // line 27
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["charsets"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 28
                    yield "              <div class=\"col-12\">
                <select lang=\"en\" dir=\"ltr\" name=\"db_collation\" class=\"form-select\" aria-label=\"";
                    // line 29
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
                    yield "\">
                  <option value=\"\">";
                    // line 30
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
                    yield "</option>
                  <option value=\"\"></option>
                  ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                        // line 33
                        yield "                    <optgroup label=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 33), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 33), "html", null, true);
                        yield "\">
                      ";
                        // line 34
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 34));
                        foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                            // line 35
                            yield "                        <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 35), "html", null, true);
                            yield "\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 35), "html", null, true);
                            yield "\"";
                            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "is_selected", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                            yield ">";
                            // line 36
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 36), "html", null, true);
                            // line 37
                            yield "</option>
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        yield "                    </optgroup>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    yield "                </select>
              </div>
            ";
                }
                // line 44
                yield "
            <div class=\"col-12\">
              <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create"), "html", null, true);
                yield "\">
            </div>
          </form>
        ";
            } else {
                // line 50
                yield "          <span class=\"text-danger\">";
                yield PhpMyAdmin\Html\Generator::getIcon("s_error", \_gettext("No privileges to create databases"));
                yield "</span>
        ";
            }
            // line 52
            yield "      </div>
    </div>
  ";
        }
        // line 55
        yield "
  ";
        // line 56
        if ((($context["database_count"] ?? null) > 0)) {
            // line 57
            yield "    <div class=\"d-flex flex-wrap my-3\">
      ";
            // line 58
            if ((($tmp = ($context["is_drop_allowed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "        <div>
          <div class=\"input-group\">
            <div class=\"input-group-text\">
              <div class=\"form-check mb-0\">
                <input class=\"form-check-input checkall_box\" type=\"checkbox\" value=\"\" id=\"checkAllCheckbox\" form=\"dbStatsForm\">
                <label class=\"form-check-label\" for=\"checkAllCheckbox\">";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
                yield "</label>
              </div>
            </div>
            <button class=\"btn btn-outline-secondary\" id=\"bulkActionDropButton\" type=\"submit\" name=\"submit_mult\" value=\"Drop\" form=\"dbStatsForm\" title=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Drop"), "html", null, true);
                yield "\">
              ";
                // line 68
                yield PhpMyAdmin\Html\Generator::getIcon("db_drop", \_gettext("Drop"));
                yield "
            </button>
          </div>
        </div>
      ";
            }
            // line 73
            yield "
      <div class=\"ms-auto\">
        <div class=\"input-group\">
          <span class=\"input-group-text\">";
            // line 76
            yield PhpMyAdmin\Html\Generator::getImage("b_search", \_gettext("Search"));
            yield "</span>
          <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"\" placeholder=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Search"), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Search"), "html", null, true);
            yield "\">
        </div>
      </div>
    </div>

    ";
            // line 82
            yield PhpMyAdmin\Html\Generator::getListNavigator(            // line 83
($context["database_count"] ?? null),             // line 84
($context["pos"] ?? null),             // line 85
($context["url_params"] ?? null), PhpMyAdmin\Url::getFromRoute("/server/databases"), "frame_content",             // line 88
($context["max_db_list"] ?? null));
            // line 89
            yield "

    <form class=\"ajax\" action=\"";
            // line 91
            yield PhpMyAdmin\Url::getFromRoute("/server/databases");
            yield "\" method=\"post\" name=\"dbStatsForm\" id=\"dbStatsForm\">
      ";
            // line 92
            yield PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
            yield "
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover w-auto\">
          <thead>
            <tr>
              ";
            // line 97
            if ((($tmp = ($context["is_drop_allowed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 98
                yield "                <th></th>
              ";
            }
            // line 100
            yield "              <th>
                <a href=\"";
            // line 101
            yield PhpMyAdmin\Url::getFromRoute("/server/databases", Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["sort_by" => "SCHEMA_NAME", "sort_order" => ((((CoreExtension::getAttribute($this->env, $this->source,             // line 103
($context["url_params"] ?? null), "sort_by", [], "any", false, false, false, 103) == "SCHEMA_NAME") && (CoreExtension::getAttribute($this->env, $this->source,             // line 104
($context["url_params"] ?? null), "sort_order", [], "any", false, false, false, 104) == "asc"))) ? ("desc") : ("asc"))]));
            // line 105
            yield "\">
                  ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "
                  ";
            // line 107
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["url_params"] ?? null), "sort_by", [], "any", false, false, false, 107) == "SCHEMA_NAME")) {
                // line 108
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["url_params"] ?? null), "sort_order", [], "any", false, false, false, 108) == "asc")) {
                    // line 109
                    yield "                      ";
                    yield PhpMyAdmin\Html\Generator::getImage("s_asc", \_gettext("Ascending"));
                    yield "
                    ";
                } else {
                    // line 111
                    yield "                      ";
                    yield PhpMyAdmin\Html\Generator::getImage("s_desc", \_gettext("Descending"));
                    yield "
                    ";
                }
                // line 113
                yield "                  ";
            }
            // line 114
            yield "                </a>
              </th>

              <th>
                <a href=\"";
            // line 118
            yield PhpMyAdmin\Url::getFromRoute("/server/databases", Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["sort_by" => "DEFAULT_COLLATION_NAME", "sort_order" => ((((CoreExtension::getAttribute($this->env, $this->source,             // line 120
($context["url_params"] ?? null), "sort_by", [], "any", false, false, false, 120) == "DEFAULT_COLLATION_NAME") && (CoreExtension::getAttribute($this->env, $this->source,             // line 121
($context["url_params"] ?? null), "sort_order", [], "any", false, false, false, 121) == "asc"))) ? ("desc") : ("asc"))]));
            // line 122
            yield "\">
                  ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
            yield "
                  ";
            // line 124
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["url_params"] ?? null), "sort_by", [], "any", false, false, false, 124) == "DEFAULT_COLLATION_NAME")) {
                // line 125
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["url_params"] ?? null), "sort_order", [], "any", false, false, false, 125) == "asc")) {
                    // line 126
                    yield "                      ";
                    yield PhpMyAdmin\Html\Generator::getImage("s_asc", \_gettext("Ascending"));
                    yield "
                    ";
                } else {
                    // line 128
                    yield "                      ";
                    yield PhpMyAdmin\Html\Generator::getImage("s_desc", \_gettext("Descending"));
                    yield "
                    ";
                }
                // line 130
                yield "                  ";
            }
            // line 131
            yield "                </a>
              </th>

              ";
            // line 134
            if ((($tmp = ($context["has_statistics"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 135
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["header_statistics"] ?? null));
                foreach ($context['_seq'] as $context["name"] => $context["statistic"]) {
                    // line 136
                    yield "                  <th";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "format", [], "any", false, false, false, 136) == "byte")) ? (" colspan=\"2\"") : (""));
                    yield ">
                    <a href=\"";
                    // line 137
                    yield PhpMyAdmin\Url::getFromRoute("/server/databases", Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["sort_by" =>                     // line 138
$context["name"], "sort_order" => ((((CoreExtension::getAttribute($this->env, $this->source,                     // line 139
($context["url_params"] ?? null), "sort_by", [], "any", false, false, false, 139) == $context["name"]) && (CoreExtension::getAttribute($this->env, $this->source,                     // line 140
($context["url_params"] ?? null), "sort_order", [], "any", false, false, false, 140) == "asc"))) ? ("desc") : ("asc"))]));
                    // line 141
                    yield "\">
                      ";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "title", [], "any", false, false, false, 142), "html", null, true);
                    yield "
                      ";
                    // line 143
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["url_params"] ?? null), "sort_by", [], "any", false, false, false, 143) == $context["name"])) {
                        // line 144
                        yield "                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["url_params"] ?? null), "sort_order", [], "any", false, false, false, 144) == "asc")) {
                            // line 145
                            yield "                          ";
                            yield PhpMyAdmin\Html\Generator::getImage("s_asc", \_gettext("Ascending"));
                            yield "
                        ";
                        } else {
                            // line 147
                            yield "                          ";
                            yield PhpMyAdmin\Html\Generator::getImage("s_desc", \_gettext("Descending"));
                            yield "
                        ";
                        }
                        // line 149
                        yield "                      ";
                    }
                    // line 150
                    yield "                    </a>
                  </th>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['name'], $context['statistic'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                yield "              ";
            }
            // line 154
            yield "
              ";
            // line 155
            if ((($tmp = ($context["has_primary_replication"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 156
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Primary replication"), "html", null, true);
                yield "</th>
              ";
            }
            // line 158
            yield "
              ";
            // line 159
            if ((($tmp = ($context["has_replica_replication"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 160
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replica replication"), "html", null, true);
                yield "</th>
              ";
            }
            // line 162
            yield "
              <th colspan=\"2\">";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
            yield "</th>
            </tr>
          </thead>

          <tbody>
            ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["databases"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                // line 169
                yield "              <tr class=\"db-row";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["database"], "is_system_schema", [], "any", false, false, false, 169) || CoreExtension::getAttribute($this->env, $this->source, $context["database"], "is_pmadb", [], "any", false, false, false, 169))) ? (" noclick") : (""));
                yield "\" data-filter-row=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 169)), "html", null, true);
                yield "\">
                ";
                // line 170
                if ((($tmp = ($context["is_drop_allowed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 171
                    yield "                  <td class=\"tool\">
                    <input type=\"checkbox\" name=\"selected_dbs[]\" class=\"checkall\" title=\"";
                    // line 173
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 173), "html", null, true);
                    yield "\" value=\"";
                    // line 174
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 174), "html", null, true);
                    yield "\"";
                    // line 175
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["database"], "is_system_schema", [], "any", false, false, false, 175) || CoreExtension::getAttribute($this->env, $this->source, $context["database"], "is_pmadb", [], "any", false, false, false, 175))) ? (" disabled") : (""));
                    yield ">
                  </td>
                ";
                }
                // line 178
                yield "
                <td class=\"name\">
                  <a class=\"disableAjax\" href=\"";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["database"], "url", [], "any", false, false, false, 180), "html", null, true);
                yield "\" title=\"";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Jump to database '%s'"), CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 181)), "html", null, true);
                yield "\">
                    ";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 182), "html", null, true);
                yield "
                  </a>
                </td>

                <td class=\"value\">
                  <dfn title=\"";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["database"], "collation", [], "any", false, false, false, 187), "description", [], "any", false, false, false, 187), "html", null, true);
                yield "\">
                    ";
                // line 188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["database"], "collation", [], "any", false, false, false, 188), "name", [], "any", false, false, false, 188), "html", null, true);
                yield "
                  </dfn>
                </td>

                ";
                // line 192
                if ((($tmp = ($context["has_statistics"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 193
                    yield "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["database"], "statistics", [], "any", false, false, false, 193));
                    foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                        // line 194
                        yield "                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "format", [], "any", false, false, false, 194) === "byte")) {
                            // line 195
                            yield "                      ";
                            $context["value"] = PhpMyAdmin\Util::formatByteDown(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 195), 3, 1);
                            // line 196
                            yield "                      <td class=\"value\">
                        <data value=\"";
                            // line 197
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 197), "html", null, true);
                            yield "\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 197), "html", null, true);
                            yield "\">
                          ";
                            // line 198
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["value"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "html", null, true);
                            yield "
                        </data>
                      </td>
                      <td class=\"unit\">";
                            // line 201
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["value"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[1] ?? null) : null), "html", null, true);
                            yield "</td>
                    ";
                        } else {
                            // line 203
                            yield "                      <td class=\"value\">
                        <data value=\"";
                            // line 204
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 204), "html", null, true);
                            yield "\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 204), "html", null, true);
                            yield "\">
                          ";
                            // line 205
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 205), 0), "html", null, true);
                            yield "
                        </data>
                      </td>
                    ";
                        }
                        // line 209
                        yield "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['statistic'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 210
                    yield "                ";
                }
                // line 211
                yield "
                ";
                // line 212
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["database"], "replication", [], "any", false, false, false, 212), "primary", [], "any", false, false, false, 212), "status", [], "any", false, false, false, 212)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 213
                    yield "                  ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["database"], "replication", [], "any", false, false, false, 213), "primary", [], "any", false, false, false, 213), "is_replicated", [], "any", false, false, false, 213)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 214
                        yield "                    <td class=\"tool text-center\">
                      ";
                        // line 215
                        yield PhpMyAdmin\Html\Generator::getIcon("s_success", \_gettext("Replicated"));
                        yield "
                    </td>
                  ";
                    } else {
                        // line 218
                        yield "                    <td class=\"tool text-center\">
                      ";
                        // line 219
                        yield PhpMyAdmin\Html\Generator::getIcon("s_cancel", \_gettext("Not replicated"));
                        yield "
                    </td>
                  ";
                    }
                    // line 222
                    yield "                ";
                }
                // line 223
                yield "
                ";
                // line 224
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["database"], "replication", [], "any", false, false, false, 224), "replica", [], "any", false, false, false, 224), "status", [], "any", false, false, false, 224)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 225
                    yield "                  ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["database"], "replication", [], "any", false, false, false, 225), "replica", [], "any", false, false, false, 225), "is_replicated", [], "any", false, false, false, 225)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 226
                        yield "                    <td class=\"tool text-center\">
                      ";
                        // line 227
                        yield PhpMyAdmin\Html\Generator::getIcon("s_success", \_gettext("Replicated"));
                        yield "
                    </td>
                  ";
                    } else {
                        // line 230
                        yield "                    <td class=\"tool text-center\">
                      ";
                        // line 231
                        yield PhpMyAdmin\Html\Generator::getIcon("s_cancel", \_gettext("Not replicated"));
                        yield "
                    </td>
                  ";
                    }
                    // line 234
                    yield "                ";
                }
                // line 235
                yield "
                <td class=\"tool\">
                  <a class=\"disableAjax\" href=\"";
                // line 237
                yield PhpMyAdmin\Url::getFromRoute("/database/privileges", ["db" => CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 237)]);
                yield "\" title=\"";
                // line 238
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Check privileges for database \"%s\"."), CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 238)), "html", null, true);
                yield "\">
                    ";
                // line 239
                yield PhpMyAdmin\Html\Generator::getIcon("s_rights", \_gettext("Check privileges"));
                yield "
                  </a>
                </td>
                <td class=\"tool\">
                  <a class=\"disableAjax\" href=\"";
                // line 243
                yield PhpMyAdmin\Url::getFromRoute("/database/sql", ["db" => CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 243)]);
                yield "\" title=\"";
                // line 244
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Run SQL queries on database \"%s\"."), CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 244)), "html", null, true);
                yield "\">
                    ";
                // line 245
                yield PhpMyAdmin\Html\Generator::getIcon("b_sql", \_gettext("SQL"));
                yield "
                  </a>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['database'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            yield "          </tbody>

          <tfoot>
            <tr>
              <th colspan=\"";
            // line 254
            yield (((($tmp = ($context["is_drop_allowed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("3") : ("2"));
            yield "\">
                ";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Total:"), "html", null, true);
            yield "
                <span id=\"filter-rows-count\">";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["database_count"] ?? null), "html", null, true);
            // line 258
            yield "</span>
              </th>

              ";
            // line 261
            if ((($tmp = ($context["has_statistics"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 262
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["total_statistics"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                    // line 263
                    yield "                  ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "format", [], "any", false, false, false, 263) === "byte")) {
                        // line 264
                        yield "                    ";
                        $context["value"] = PhpMyAdmin\Util::formatByteDown(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 264), 3, 1);
                        // line 265
                        yield "                    <th class=\"value\">
                      <data value=\"";
                        // line 266
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 266), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 266), "html", null, true);
                        yield "\">
                        ";
                        // line 267
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["value"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[0] ?? null) : null), "html", null, true);
                        yield "
                      </data>
                    </th>
                    <th class=\"unit\">";
                        // line 270
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["value"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[1] ?? null) : null), "html", null, true);
                        yield "</th>
                  ";
                    } else {
                        // line 272
                        yield "                    <th class=\"value\">
                      <data value=\"";
                        // line 273
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 273), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 273), "html", null, true);
                        yield "\">
                        ";
                        // line 274
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 274), 0), "html", null, true);
                        yield "
                      </data>
                    </th>
                  ";
                    }
                    // line 278
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['statistic'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 279
                yield "              ";
            }
            // line 280
            yield "
              ";
            // line 281
            if ((($tmp = ($context["has_primary_replication"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 282
                yield "                <th></th>
              ";
            }
            // line 284
            yield "
              ";
            // line 285
            if ((($tmp = ($context["has_replica_replication"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 286
                yield "                <th></th>
              ";
            }
            // line 288
            yield "
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </form>

    ";
            // line 296
            if ((($tmp =  !($context["has_statistics"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 297
                yield "      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"alert alert-info\" role=\"alert\">
            ";
                // line 300
                yield PhpMyAdmin\Html\Generator::getIcon("s_notice", \_gettext("Note: Enabling the database statistics here might cause heavy traffic between the web server and the MySQL server."));
                yield "
          </div>
          <a class=\"card-link\" href=\"";
                // line 302
                yield PhpMyAdmin\Url::getFromRoute("/server/databases");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["statistics" => "1"], "", false);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enable statistics"), "html", null, true);
                yield "\">
            ";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enable statistics"), "html", null, true);
                yield "
          </a>
        </div>
      </div>
    ";
            }
            // line 308
            yield "  ";
        } else {
            // line 309
            yield "    <div class=\"alert alert-primary my-3\" role=\"alert\">
      ";
            // line 310
            yield PhpMyAdmin\Html\Generator::getIcon("s_notice", \_gettext("No databases"));
            yield "
    </div>
  ";
        }
        // line 313
        yield "</div>

";
        // line 315
        if ((($tmp = ($context["is_drop_allowed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 316
            yield "  <div class=\"modal fade\" id=\"dropDatabaseModal\" tabindex=\"-1\" aria-labelledby=\"dropDatabaseModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-scrollable\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"dropDatabaseModalLabel\">";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Confirm"), "html", null, true);
            yield "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
            yield "\"></button>
        </div>
        <div class=\"modal-body\"></div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
            yield "</button>
          <button type=\"button\" class=\"btn btn-danger\" id=\"dropDatabaseModalDropButton\">";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Drop"), "html", null, true);
            yield "</button>
        </div>
      </div>
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
        return "server/databases/index.twig";
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
        return array (  811 => 326,  807 => 325,  800 => 321,  796 => 320,  790 => 316,  788 => 315,  784 => 313,  778 => 310,  775 => 309,  772 => 308,  764 => 303,  756 => 302,  751 => 300,  746 => 297,  744 => 296,  734 => 288,  730 => 286,  728 => 285,  725 => 284,  721 => 282,  719 => 281,  716 => 280,  713 => 279,  707 => 278,  700 => 274,  694 => 273,  691 => 272,  686 => 270,  680 => 267,  674 => 266,  671 => 265,  668 => 264,  665 => 263,  660 => 262,  658 => 261,  653 => 258,  651 => 257,  647 => 255,  643 => 254,  637 => 250,  626 => 245,  622 => 244,  619 => 243,  612 => 239,  608 => 238,  605 => 237,  601 => 235,  598 => 234,  592 => 231,  589 => 230,  583 => 227,  580 => 226,  577 => 225,  575 => 224,  572 => 223,  569 => 222,  563 => 219,  560 => 218,  554 => 215,  551 => 214,  548 => 213,  546 => 212,  543 => 211,  540 => 210,  534 => 209,  527 => 205,  521 => 204,  518 => 203,  513 => 201,  507 => 198,  501 => 197,  498 => 196,  495 => 195,  492 => 194,  487 => 193,  485 => 192,  478 => 188,  474 => 187,  466 => 182,  462 => 181,  459 => 180,  455 => 178,  449 => 175,  446 => 174,  443 => 173,  440 => 171,  438 => 170,  431 => 169,  427 => 168,  419 => 163,  416 => 162,  410 => 160,  408 => 159,  405 => 158,  399 => 156,  397 => 155,  394 => 154,  391 => 153,  383 => 150,  380 => 149,  374 => 147,  368 => 145,  365 => 144,  363 => 143,  359 => 142,  356 => 141,  354 => 140,  353 => 139,  352 => 138,  351 => 137,  346 => 136,  341 => 135,  339 => 134,  334 => 131,  331 => 130,  325 => 128,  319 => 126,  316 => 125,  314 => 124,  310 => 123,  307 => 122,  305 => 121,  304 => 120,  303 => 118,  297 => 114,  294 => 113,  288 => 111,  282 => 109,  279 => 108,  277 => 107,  273 => 106,  270 => 105,  268 => 104,  267 => 103,  266 => 101,  263 => 100,  259 => 98,  257 => 97,  249 => 92,  245 => 91,  241 => 89,  239 => 88,  238 => 85,  237 => 84,  236 => 83,  235 => 82,  225 => 77,  221 => 76,  216 => 73,  208 => 68,  204 => 67,  198 => 64,  191 => 59,  189 => 58,  186 => 57,  184 => 56,  181 => 55,  176 => 52,  170 => 50,  163 => 46,  159 => 44,  154 => 41,  147 => 39,  140 => 37,  138 => 36,  130 => 35,  126 => 34,  119 => 33,  115 => 32,  110 => 30,  106 => 29,  103 => 28,  101 => 27,  93 => 24,  90 => 23,  86 => 20,  82 => 18,  80 => 17,  75 => 15,  70 => 14,  68 => 13,  62 => 10,  58 => 9,  54 => 7,  52 => 6,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/databases/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/databases/index.twig");
    }
}
