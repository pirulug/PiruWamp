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

/* export.twig */
class __TwigTemplate_7d661a926cdb80f60177e0c14f58dbbc extends Template
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
            'title' => [$this, 'block_title'],
            'message' => [$this, 'block_message'],
            'selection_options' => [$this, 'block_selection_options'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"container\">
  <h2 class=\"my-3\">
    ";
        // line 3
        yield PhpMyAdmin\Html\Generator::getImage("b_export", \_gettext("Export"));
        yield "
    ";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 5
        yield "  </h2>

  ";
        // line 7
        yield ($context["page_settings_error_html"] ?? null);
        yield "
  ";
        // line 8
        yield ($context["page_settings_html"] ?? null);
        yield "

  ";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/flash_messages.twig", [], false);
        yield "

  ";
        // line 12
        yield from $this->unwrap()->yieldBlock('message', $context, $blocks);
        // line 13
        yield "
  ";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["templates"] ?? null), "is_enabled", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "    <div class=\"card mb-3\">
      <div class=\"card-header\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export templates:"), "html", null, true);
            yield "</div>
      <div class=\"card-body row gy-3\">
        <form method=\"post\" action=\"";
            // line 18
            yield PhpMyAdmin\Url::getFromRoute("/export/template/create");
            yield "\" class=\"col-12 col-md disableAjax\">
          <fieldset>
            <legend>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("New template:"), "html", null, true);
            yield "</legend>
            <div class=\"row g-3 align-items-center\">
              <div class=\"col-auto\">
                <label for=\"templateName\" class=\"col-form-label\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Template name"), "html", null, true);
            yield "</label>
              </div>
              <div class=\"col-auto\">
                <input class=\"form-control\" type=\"text\" name=\"templateName\" id=\"templateName\" maxlength=\"64\" placeholder=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Template name"), "html", null, true);
            yield "\" required>
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" name=\"createTemplate\" id=\"createTemplate\" value=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create"), "html", null, true);
            yield "\">
              </div>
            </div>
          </fieldset>
        </form>

        <form method=\"post\" id=\"existingTemplatesForm\" class=\"col-12 col-md disableAjax\">
          <fieldset>
            <legend>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Existing templates:"), "html", null, true);
            yield "</legend>
            <div class=\"row g-3 align-items-center\">
              <div class=\"col-auto\">
                <label for=\"template\" class=\"col-form-label\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Template:"), "html", null, true);
            yield "</label>
              </div>
              <div class=\"col-auto\">
                <select class=\"form-select\" name=\"template\" id=\"template\" required>
                  <option value=\"\">-- ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select a template"), "html", null, true);
            yield " --</option>
                  ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["templates"] ?? null), "templates", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
                // line 46
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["template"], "getId", [], "method", false, false, false, 46), "html", null, true);
                yield "\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["template"], "getId", [], "method", false, false, false, 46) == CoreExtension::getAttribute($this->env, $this->source, ($context["templates"] ?? null), "selected", [], "any", false, false, false, 46))) ? (" selected") : (""));
                yield ">
                      ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["template"], "getName", [], "method", false, false, false, 47), "html", null, true);
                yield "
                    </option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['template'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "                </select>
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" formaction=\"";
            // line 53
            yield PhpMyAdmin\Url::getFromRoute("/export/template/update");
            yield "\" name=\"updateTemplate\" id=\"updateTemplate\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Update"), "html", null, true);
            yield "\">
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" formaction=\"";
            // line 56
            yield PhpMyAdmin\Url::getFromRoute("/export/template/delete");
            yield "\" name=\"deleteTemplate\" id=\"deleteTemplate\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete"), "html", null, true);
            yield "\">
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  ";
        }
        // line 64
        yield "
  ";
        // line 65
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["sql_query"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "    <div class=\"card mb-3\">
      <div class=\"card-header\">
        ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: Title of the option on the Export page
\_gettext("SQL query:")
, "html", null, true);
            yield "
      </div>
      <div class=\"card-body\">
        <div id=\"sqlqueryform\">
          <input class=\"btn btn-secondary\" type=\"submit\" id=\"showsqlquery\" value=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: Button to show the SQL query on the export page
\_gettext("Show SQL query")
, "html", null, true);
            yield "\">
        </div>
        <div class=\"d-none\"></div>
      </div>
    </div>
    <div class=\"modal fade\" id=\"showSqlQueryModal\" tabindex=\"-1\" aria-labelledby=\"showSqlQueryModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"showSqlQueryModalLabel\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading"), "html", null, true);
            yield "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "\"></button>
          </div>
          <div class=\"modal-body\">
            <div id=\"export_sql_modal_content\">
              <pre><code class=\"sql\" dir=\"ltr\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sql_query"] ?? null), "html", null, true);
            yield "</code></pre>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "</button>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 96
        yield "
  <form method=\"post\" action=\"";
        // line 97
        yield PhpMyAdmin\Url::getFromRoute("/export");
        yield "\" name=\"dump\" class=\"disableAjax\">
    ";
        // line 98
        yield PhpMyAdmin\Url::getHiddenInputs(($context["hidden_inputs"] ?? null));
        yield "

    ";
        // line 100
        if ((($context["export_method"] ?? null) != "custom-no-form")) {
            // line 101
            yield "      <div class=\"card mb-3\" id=\"quick_or_custom\">
        <div class=\"card-header\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export method:"), "html", null, true);
            yield "</div>
        <div class=\"card-body\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"quick_or_custom\" value=\"quick\" id=\"radio_quick_export\"";
            // line 105
            yield (((($context["export_method"] ?? null) == "quick")) ? (" checked") : (""));
            yield ">
            <label class=\"form-check-label\" for=\"radio_quick_export\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Quick - display only the minimal options"), "html", null, true);
            yield "</label>
          </div>
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"quick_or_custom\" value=\"custom\" id=\"radio_custom_export\"";
            // line 109
            yield (((($context["export_method"] ?? null) == "custom")) ? (" checked") : (""));
            yield ">
            <label class=\"form-check-label\" for=\"radio_custom_export\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Custom - display all possible options"), "html", null, true);
            yield "</label>
          </div>
        </div>
      </div>
    ";
        }
        // line 115
        yield "
    <div class=\"card mb-3\" id=\"format\">
      <div class=\"card-header\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Format:"), "html", null, true);
        yield "</div>
      <div class=\"card-body\">
        <select class=\"form-select\" id=\"plugins\" name=\"what\" aria-label=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("File format to export"), "html", null, true);
        yield "\">
          ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["plugins_choice"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 121
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 121), "html", null, true);
            yield "\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
            yield " data-is-binary=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "is_binary", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "text", [], "any", false, false, false, 121), "html", null, true);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "        </select>
      </div>
    </div>

    ";
        // line 127
        yield from $this->unwrap()->yieldBlock('selection_options', $context, $blocks);
        // line 128
        yield "
    ";
        // line 129
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["rows"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "      <div class=\"card mb-3 d-none\" id=\"rows\">
        <div class=\"card-header\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Rows:"), "html", null, true);
            yield "</div>
        <div class=\"card-body\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"allrows\" value=\"1\" id=\"radio_allrows_1\"";
            // line 134
            yield ((((null === CoreExtension::getAttribute($this->env, $this->source, ($context["rows"] ?? null), "allrows", [], "any", false, false, false, 134)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["rows"] ?? null), "allrows", [], "any", false, false, false, 134) == 1))) ? (" checked") : (""));
            yield ">
            <label class=\"form-check-label\" for=\"radio_allrows_1\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Dump all rows"), "html", null, true);
            yield "</label>
          </div>
          <div class=\"form-check mb-2\">
            <input class=\"form-check-input\" type=\"radio\" name=\"allrows\" value=\"0\" id=\"radio_allrows_0\"";
            // line 138
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["rows"] ?? null), "allrows", [], "any", false, false, false, 138)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["rows"] ?? null), "allrows", [], "any", false, false, false, 138) == 0))) ? (" checked") : (""));
            yield ">
            <label class=\"form-check-label\" for=\"radio_allrows_0\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Dump some row(s)"), "html", null, true);
            yield "</label>
          </div>
          <ul class=\"list-group\">
            <li class=\"list-group-item\">
              <label class=\"form-label\" for=\"limit_to\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Number of rows:"), "html", null, true);
            yield "</label>
              <input class=\"form-control\" type=\"text\" id=\"limit_to\" name=\"limit_to\" size=\"5\" value=\"";
            // line 145
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["rows"] ?? null), "limit_to", [], "any", false, false, false, 145))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rows"] ?? null), "limit_to", [], "any", false, false, false, 146), "html", null, true);
            } elseif (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,             // line 147
($context["rows"] ?? null), "unlim_num_rows", [], "any", false, false, false, 147)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["rows"] ?? null), "unlim_num_rows", [], "any", false, false, false, 147) != 0))) {
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rows"] ?? null), "unlim_num_rows", [], "any", false, false, false, 148), "html", null, true);
            } else {
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rows"] ?? null), "number_of_rows", [], "any", false, false, false, 150), "html", null, true);
            }
            // line 151
            yield "\" onfocus=\"this.select()\">
            </li>
            <li class=\"list-group-item\">
              <label class=\"form-label\" for=\"limit_from\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Row to begin at:"), "html", null, true);
            yield "</label>
              <input class=\"form-control\" type=\"text\" id=\"limit_from\" name=\"limit_from\" size=\"5\" value=\"";
            // line 155
            yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["rows"] ?? null), "limit_from", [], "any", false, false, false, 155))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rows"] ?? null), "limit_from", [], "any", false, false, false, 155), "html", null, true)) : (0));
            yield "\" onfocus=\"this.select()\">
            </li>
          </ul>
        </div>
      </div>
    ";
        }
        // line 161
        yield "
    ";
        // line 162
        if ((($tmp = ($context["has_save_dir"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 163
            yield "      <div class=\"card mb-3 d-none\" id=\"output_quick_export\">
        <div class=\"card-header\">";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Output:"), "html", null, true);
            yield "</div>
        <div class=\"card-body\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"quick_export_onserver\" value=\"saveit\" id=\"checkbox_quick_dump_onserver\"";
            // line 167
            yield (((($tmp = ($context["export_is_checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
            <label class=\"form-check-label\" for=\"checkbox_quick_dump_onserver\">
              ";
            // line 169
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("Save on server in the directory <strong>%s</strong>"), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["save_dir"] ?? null)));
            yield "
            </label>
          </div>
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"quick_export_onserver_overwrite\" value=\"saveitover\" id=\"checkbox_quick_dump_onserver_overwrite\"";
            // line 174
            yield (((($tmp = ($context["export_overwrite_is_checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
            <label class=\"form-check-label\" for=\"checkbox_quick_dump_onserver_overwrite\">
              ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Overwrite existing file(s)"), "html", null, true);
            yield "
            </label>
          </div>
        </div>
      </div>
    ";
        }
        // line 182
        yield "
    <div class=\"modal fade\" id=\"renameExportModal\" tabindex=\"-1\" aria-labelledby=\"renameExportModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"renameExportModalLabel\">";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Rename exported databases/tables/columns"), "html", null, true);
        yield "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
          </div>
          <div class=\"modal-body overflow-auto\">
            <table class=\"table align-middle mb-3\" id=\"alias_data\">
              <thead>
                <tr>
                  <th colspan=\"4\">
                    ";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Defined aliases"), "html", null, true);
        yield "
                  </th>
                </tr>
              </thead>

              <tbody>
                ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aliases"] ?? null));
        foreach ($context['_seq'] as $context["db"] => $context["db_data"]) {
            // line 202
            yield "                  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["db_data"], "alias", [], "any", true, true, false, 202) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["db_data"], "alias", [], "any", false, false, false, 202)))) {
                // line 203
                yield "                    <tr>
                      <th>";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Alias", "Database"), "html", null, true);
                yield "</th>
                      <td>";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["db"], "html", null, true);
                yield "</td>
                      <td>
                        <input name=\"aliases[";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["db"], "html", null, true);
                yield "][alias]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["db_data"], "alias", [], "any", false, false, false, 207), "html", null, true);
                yield "\" type=\"text\">
                      </td>
                      <td>
                        <button class=\"alias_remove btn btn-secondary\">";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove"), "html", null, true);
                yield "</button>
                      </td>
                    </tr>
                  ";
            }
            // line 214
            yield "
                  ";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, $context["db_data"], "tables", [], "any", true, true, false, 215) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["db_data"], "tables", [], "any", false, false, false, 215)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["db_data"], "tables", [], "any", false, false, false, 215)) : ([])));
            foreach ($context['_seq'] as $context["table"] => $context["table_data"]) {
                // line 216
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["table_data"], "alias", [], "any", true, true, false, 216) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["table_data"], "alias", [], "any", false, false, false, 216)))) {
                    // line 217
                    yield "                      <tr>
                        <th>";
                    // line 218
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Alias", "Table"), "html", null, true);
                    yield "</th>
                        <td>";
                    // line 219
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["db"], "html", null, true);
                    yield ".";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield "</td>
                        <td>
                          <input name=\"aliases[";
                    // line 221
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["db"], "html", null, true);
                    yield "][tables][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield "][alias]\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table_data"], "alias", [], "any", false, false, false, 221), "html", null, true);
                    yield "\" type=\"text\">
                        </td>
                        <td>
                          <button class=\"alias_remove btn btn-secondary\">";
                    // line 224
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove"), "html", null, true);
                    yield "</button>
                        </td>
                      </tr>
                    ";
                }
                // line 228
                yield "
                    ";
                // line 229
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, $context["table_data"], "columns", [], "any", true, true, false, 229) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["table_data"], "columns", [], "any", false, false, false, 229)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["table_data"], "columns", [], "any", false, false, false, 229)) : ([])));
                foreach ($context['_seq'] as $context["column"] => $context["column_name"]) {
                    // line 230
                    yield "                      <tr>
                        <th>";
                    // line 231
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Alias", "Column"), "html", null, true);
                    yield "</th>
                        <td>";
                    // line 232
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["db"], "html", null, true);
                    yield ".";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield ".";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column"], "html", null, true);
                    yield "</td>
                        <td>
                          <input name=\"aliases[";
                    // line 234
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["db"], "html", null, true);
                    yield "][tables][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield "][colums][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column"], "html", null, true);
                    yield "]\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column_name"], "html", null, true);
                    yield "\" type=\"text\">
                        </td>
                        <td>
                          <button class=\"alias_remove btn btn-secondary\">";
                    // line 237
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove"), "html", null, true);
                    yield "</button>
                        </td>
                      </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['column'], $context['column_name'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 241
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['table'], $context['table_data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['db'], $context['db_data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        yield "              </tbody>

              ";
        // line 246
        yield "              <tfoot class=\"hide\">
                <tr>
                  <th></th>
                  <td></td>
                  <td>
                    <input name=\"aliases_new\" value=\"\" type=\"text\">
                  </td>
                  <td>
                    <button class=\"alias_remove btn btn-secondary\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove"), "html", null, true);
        yield "</button>
                  </td>
                </tr>
              </tfoot>
            </table>

            <table class=\"table align-middle\">
              <thead>
                <tr>
                  <th colspan=\"4\">";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Define new aliases"), "html", null, true);
        yield "</th>
                </tr>
              </thead>
              <tr>
                <td>
                  <label>";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select database:"), "html", null, true);
        yield "</label>
                </td>
                <td>
                  <select id=\"db_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"db_alias_name\" placeholder=\"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("New database name"), "html", null, true);
        yield "\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"db_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add"), "html", null, true);
        yield "</button>
                </td>
              </tr>
              <tr>
                <td>
                  <label>";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select table:"), "html", null, true);
        yield "</label>
                </td>
                <td>
                  <select id=\"table_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"table_alias_name\" placeholder=\"";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("New table name"), "html", null, true);
        yield "\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"table_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add"), "html", null, true);
        yield "</button>
                </td>
              </tr>
              <tr>
                <td>
                  <label>";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select column:"), "html", null, true);
        yield "</label>
                </td>
                <td>
                  <select id=\"column_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"column_alias_name\" placeholder=\"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("New column name"), "html", null, true);
        yield "\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"column_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add"), "html", null, true);
        yield "</button>
                </td>
              </tr>
            </table>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" id=\"saveAndCloseBtn\" data-bs-dismiss=\"modal\">
              ";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save & close"), "html", null, true);
        yield "
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"card mb-3 d-none\" id=\"output\">
      <div class=\"card-header\">";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Output:"), "html", null, true);
        yield "</div>
      <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"btn_alias_config\"";
        // line 330
        yield (((($tmp = ($context["has_aliases"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
            <label class=\"form-check-label\" for=\"btn_alias_config\">";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Rename exported databases/tables/columns"), "html", null, true);
        yield "</label>
          </div>
        </li>

        ";
        // line 335
        if ((($context["export_type"] ?? null) != "server")) {
            // line 336
            yield "          <li class=\"list-group-item\">
            <div class=\"form-check form-switch\">
              <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"lock_tables\" value=\"y\" id=\"checkbox_lock_tables\"";
            // line 339
            yield (((( !($context["repopulate"] ?? null) && ($context["is_checked_lock_tables"] ?? null)) || ($context["lock_tables"] ?? null))) ? (" checked") : (""));
            yield ">
              <label class=\"form-check-label\" for=\"checkbox_lock_tables\">
                ";
            // line 341
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("Use %s statement"), "<code>LOCK TABLES</code>");
            yield "
              </label>
            </div>
          </li>
        ";
        }
        // line 346
        yield "
        <li class=\"list-group-item\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" id=\"radio_view_as_text\" name=\"output_format\" value=\"astext\"";
        // line 349
        yield (((($context["repopulate"] ?? null) || (($context["export_asfile"] ?? null) == false))) ? (" checked") : (""));
        yield ">
            <label class=\"form-check-label\" for=\"radio_view_as_text\">";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("View output as text"), "html", null, true);
        yield "</label>
          </div>
          <div class=\"form-check mb-2\">
            <input class=\"form-check-input\" type=\"radio\" name=\"output_format\" value=\"sendit\" id=\"radio_dump_asfile\"";
        // line 353
        yield ((( !($context["repopulate"] ?? null) && ($context["is_checked_asfile"] ?? null))) ? (" checked") : (""));
        yield ">
            <label class=\"form-check-label\" for=\"radio_dump_asfile\">";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save output to a file"), "html", null, true);
        yield "</label>
          </div>
          <div class=\"hstack gap-3\">
            <div class=\"vr\"></div>
            <ul class=\"list-group\" id=\"ul_save_asfile\">
              ";
        // line 359
        if ((($tmp = ($context["has_save_dir"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 360
            yield "                <li class=\"list-group-item\">
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"onserver\" value=\"saveit\" id=\"checkbox_dump_onserver\"";
            // line 362
            yield (((($tmp = ($context["is_checked_export"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
                    <label class=\"form-check-label\" for=\"checkbox_dump_onserver\">
                      ";
            // line 364
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("Save on server in the directory <strong>%s</strong>"), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["save_dir"] ?? null)));
            yield "
                    </label>
                  </div>
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"onserver_overwrite\" value=\"saveitover\" id=\"checkbox_dump_onserver_overwrite\"";
            // line 369
            yield (((($tmp = ($context["is_checked_export_overwrite"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
                    <label class=\"form-check-label\" for=\"checkbox_dump_onserver_overwrite\">
                      ";
            // line 371
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Overwrite existing file(s)"), "html", null, true);
            yield "
                    </label>
                  </div>
                </li>
              ";
        }
        // line 376
        yield "
              <li class=\"list-group-item\">
                <div class=\"row g-3 align-items-center\">
                  <div class=\"col-auto\">
                    <label for=\"filename_template\" class=\"col-form-label\">
                      ";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("File name template:"), "html", null, true);
        yield "
                      ";
        // line 382
        yield PhpMyAdmin\Html\Generator::showHint(Twig\Extension\CoreExtension::sprintf(\_gettext("This value is interpreted using the 'strftime' function, so you can use time formatting strings. Additionally the following transformations will happen: %s Other text will be kept as is. See the FAQ 6.27 for details."), ($context["filename_hint"] ?? null)));
        yield "
                    </label>
                  </div>
                  <div class=\"col-auto\">
                    <input type=\"text\" class=\"form-control\" name=\"filename_template\" id=\"filename_template\" value=\"";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename_template"] ?? null), "html", null, true);
        yield "\">
                  </div>
                  <div class=\"col-auto\">
                    <div class=\"form-check form-switch\">
                      <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"remember_template\" id=\"checkbox_remember_template\"";
        // line 390
        yield (((($tmp = ($context["is_checked_remember_file_template"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
                      <label class=\"form-check-label\" for=\"checkbox_remember_template\">
                        ";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use this for future exports"), "html", null, true);
        yield "
                      </label>
                    </div>
                  </div>
                </div>
              </li>

              ";
        // line 399
        if ((($tmp = ($context["is_encoding_supported"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 400
            yield "                <li class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-auto\">
                      <label for=\"select_charset\" class=\"col-form-label\">";
            // line 403
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Character set of the file:"), "html", null, true);
            yield "</label>
                    </div>
                    <div class=\"col-auto\">
                      <select class=\"form-select\" id=\"select_charset\" name=\"charset\">
                        ";
            // line 407
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["encodings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 408
                yield "                          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["charset"], "html", null, true);
                yield "\"";
                // line 409
                yield ((((Twig\Extension\CoreExtension::testEmpty(($context["export_charset"] ?? null)) && ($context["charset"] == "utf-8")) || ($context["charset"] == ($context["export_charset"] ?? null)))) ? (" selected") : (""));
                yield ">";
                // line 410
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["charset"], "html", null, true);
                // line 411
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 413
            yield "                      </select>
                    </div>
                  </div>
                </li>
              ";
        }
        // line 418
        yield "
              ";
        // line 419
        if ((($context["has_zip"] ?? null) || ($context["has_gzip"] ?? null))) {
            // line 420
            yield "                <li class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-auto\">
                      <label for=\"compression\" class=\"col-form-label\">";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Compression:"), "html", null, true);
            yield "</label>
                    </div>
                    <div class=\"col-auto\">
                      <select class=\"form-select\" id=\"compression\" name=\"compression\">
                        <option value=\"none\">";
            // line 427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "</option>
                        ";
            // line 428
            if ((($tmp = ($context["has_zip"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 429
                yield "                          <option value=\"zip\"";
                // line 430
                yield (((($context["selected_compression"] ?? null) == "zip")) ? (" selected") : (""));
                yield ">
                            ";
                // line 431
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("zipped"), "html", null, true);
                yield "
                          </option>
                        ";
            }
            // line 434
            yield "                        ";
            if ((($tmp = ($context["has_gzip"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 435
                yield "                          <option value=\"gzip\"";
                // line 436
                yield (((($context["selected_compression"] ?? null) == "gzip")) ? (" selected") : (""));
                yield ">
                            ";
                // line 437
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("gzipped"), "html", null, true);
                yield "
                          </option>
                        ";
            }
            // line 440
            yield "                      </select>
                    </div>
                  </div>
                </li>
              ";
        } else {
            // line 445
            yield "                <input type=\"hidden\" name=\"compression\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selected_compression"] ?? null), "html", null, true);
            yield "\">
              ";
        }
        // line 447
        yield "
              ";
        // line 448
        if (((($context["export_type"] ?? null) == "server") || (($context["export_type"] ?? null) == "database"))) {
            // line 449
            yield "                <li class=\"list-group-item\">
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"checkbox_as_separate_files\" name=\"as_separate_files\" value=\"";
            // line 451
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["export_type"] ?? null), "html", null, true);
            yield "\"";
            // line 452
            yield (((($tmp = ($context["is_checked_as_separate_files"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
                    <label class=\"form-check-label\" for=\"checkbox_as_separate_files\">
                      ";
            // line 454
            if ((($context["export_type"] ?? null) == "server")) {
                // line 455
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export databases as separate files"), "html", null, true);
                yield "
                      ";
            } elseif ((            // line 456
($context["export_type"] ?? null) == "database")) {
                // line 457
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export tables as separate files"), "html", null, true);
                yield "
                      ";
            }
            // line 459
            yield "                    </label>
                  </div>
                </li>
              ";
        }
        // line 463
        yield "            </ul>
          </div>
        </li>

        <li class=\"list-group-item\">
          <label for=\"maxsize\" class=\"form-label\">";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Skip tables larger than:"), "html", null, true);
        yield "</label>
          <input class=\"form-control\" type=\"number\" id=\"maxsize\" name=\"maxsize\" aria-describedby=\"maxsizeHelp\">
          <div id=\"maxsizeHelp\" class=\"form-text\">";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("The size is measured in MiB."), "html", null, true);
        yield "</div>
        </li>
      </ul>
    </div>

    <div class=\"card mb-3 d-none\" id=\"format_specific_opts\">
      <div class=\"card-header\">";
        // line 476
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Format-specific options:"), "html", null, true);
        yield "</div>
      <div class=\"card-body\">
        ";
        // line 478
        yield ($context["options"] ?? null);
        yield "
      </div>
    </div>

    ";
        // line 482
        if ((($tmp = ($context["can_convert_kanji"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 483
            yield "      ";
            // line 484
            yield "      <div class=\"card mb-3\" id=\"kanji_encoding\">
        <div class=\"card-header\">";
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Encoding Conversion:"), "html", null, true);
            yield "</div>
        <div class=\"card-body\">
          ";
            // line 487
            yield from $this->load("encoding/kanji_encoding_form.twig", 487)->unwrap()->yield($context);
            // line 488
            yield "        </div>
      </div>
    ";
        }
        // line 491
        yield "
    <div id=\"submit\">
      <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export"), "html", null, true);
        yield "\" data-exec-time-limit=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["exec_time_limit"] ?? null), "html", null, true);
        yield "\">
    </div>
  </form>
</div>
";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_message(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 127
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_selection_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "export.twig";
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
        return array (  1089 => 127,  1079 => 12,  1069 => 4,  1057 => 493,  1053 => 491,  1048 => 488,  1046 => 487,  1041 => 485,  1038 => 484,  1036 => 483,  1034 => 482,  1027 => 478,  1022 => 476,  1013 => 470,  1008 => 468,  1001 => 463,  995 => 459,  989 => 457,  987 => 456,  982 => 455,  980 => 454,  975 => 452,  972 => 451,  968 => 449,  966 => 448,  963 => 447,  957 => 445,  950 => 440,  944 => 437,  940 => 436,  938 => 435,  935 => 434,  929 => 431,  925 => 430,  923 => 429,  921 => 428,  917 => 427,  910 => 423,  905 => 420,  903 => 419,  900 => 418,  893 => 413,  886 => 411,  884 => 410,  881 => 409,  877 => 408,  873 => 407,  866 => 403,  861 => 400,  859 => 399,  849 => 392,  844 => 390,  837 => 386,  830 => 382,  826 => 381,  819 => 376,  811 => 371,  806 => 369,  799 => 364,  794 => 362,  790 => 360,  788 => 359,  780 => 354,  776 => 353,  770 => 350,  766 => 349,  761 => 346,  753 => 341,  748 => 339,  744 => 336,  742 => 335,  735 => 331,  731 => 330,  724 => 326,  713 => 318,  703 => 311,  697 => 308,  686 => 300,  678 => 295,  672 => 292,  661 => 284,  653 => 279,  647 => 276,  636 => 268,  628 => 263,  616 => 254,  606 => 246,  602 => 243,  596 => 242,  590 => 241,  580 => 237,  568 => 234,  559 => 232,  555 => 231,  552 => 230,  548 => 229,  545 => 228,  538 => 224,  528 => 221,  521 => 219,  517 => 218,  514 => 217,  511 => 216,  507 => 215,  504 => 214,  497 => 210,  489 => 207,  484 => 205,  480 => 204,  477 => 203,  474 => 202,  470 => 201,  461 => 195,  451 => 188,  447 => 187,  440 => 182,  431 => 176,  426 => 174,  419 => 169,  414 => 167,  408 => 164,  405 => 163,  403 => 162,  400 => 161,  391 => 155,  387 => 154,  382 => 151,  379 => 150,  376 => 148,  374 => 147,  372 => 146,  370 => 145,  366 => 143,  359 => 139,  355 => 138,  349 => 135,  345 => 134,  339 => 131,  336 => 130,  334 => 129,  331 => 128,  329 => 127,  323 => 123,  308 => 121,  304 => 120,  300 => 119,  295 => 117,  291 => 115,  283 => 110,  279 => 109,  273 => 106,  269 => 105,  263 => 102,  260 => 101,  258 => 100,  253 => 98,  249 => 97,  246 => 96,  237 => 90,  230 => 86,  223 => 82,  219 => 81,  204 => 72,  194 => 68,  190 => 66,  188 => 65,  185 => 64,  172 => 56,  164 => 53,  159 => 50,  150 => 47,  143 => 46,  139 => 45,  135 => 44,  128 => 40,  122 => 37,  111 => 29,  105 => 26,  99 => 23,  93 => 20,  88 => 18,  83 => 16,  80 => 15,  78 => 14,  75 => 13,  73 => 12,  68 => 10,  63 => 8,  59 => 7,  55 => 5,  53 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "export.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/export.twig");
    }
}
