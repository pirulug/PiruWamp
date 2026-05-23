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

/* table/operations/index.twig */
class __TwigTemplate_9fa30fa759caf931af4491ba7dd9ba40 extends Template
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
        yield "<div class=\"container my-3\">
  <h2>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table operations"), "html", null, true);
        yield "</h2>

";
        // line 4
        if ((($tmp =  !($context["hide_order_table"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "  <form method=\"post\" id=\"alterTableOrderby\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/operations");
            yield "\">
    ";
            // line 6
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            yield "
    <input type=\"hidden\" name=\"submitorderby\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Alter table order by"), "html", null, true);
            yield "</div>
      <div class=\"card-body\">
        <div class=\"row g-3\">
          <div class=\"col-auto\">
            <label class=\"visually-hidden\" for=\"tableOrderFieldSelect\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
            yield "</label>
            <select id=\"tableOrderFieldSelect\" class=\"form-select\" name=\"order_field\" aria-describedby=\"tableOrderFieldSelectHelp\">
              ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 17
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 17), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 17), "html", null, true);
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "            </select>
            <small id=\"tableOrderFieldSelectHelp\" class=\"form-text text-body-secondary\">
              ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Alter table order by a single field.", "(singly)"), "html", null, true);
            yield "
            </small>
          </div>

          <div class=\"col-auto\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderAscRadio\" name=\"order_order\" type=\"radio\" value=\"asc\" checked>
              <label class=\"form-check-label\" for=\"tableOrderAscRadio\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Ascending"), "html", null, true);
            yield "</label>
            </div>
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderDescRadio\" name=\"order_order\" type=\"radio\" value=\"desc\">
              <label class=\"form-check-label\" for=\"tableOrderDescRadio\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Descending"), "html", null, true);
            yield "</label>
            </div>
          </div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
      </div>
    </div>
  </form>
";
        }
        // line 44
        yield "
<form method=\"post\" action=\"";
        // line 45
        yield PhpMyAdmin\Url::getFromRoute("/table/operations");
        yield "\" id=\"moveTableForm\" class=\"ajax\" onsubmit=\"return window.pmaEmptyCheckTheField(this, 'new_name')\">
  ";
        // line 46
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"what\" value=\"data\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Move table to (database.table)"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 56
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["database_list"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "              <select id=\"moveTableDatabaseInput\" class=\"form-select\" name=\"target_db\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "\">
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["database_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 59
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 59), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 59), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['each_db'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "              </select>
            ";
        } else {
            // line 63
            yield "              <input id=\"moveTableDatabaseInput\" class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "\">
            ";
        }
        // line 65
        yield "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" required name=\"new_name\" maxlength=\"64\" value=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
        yield "\">
          </div>
        </div>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_mv\">
        <label class=\"form-check-label\" for=\"checkbox_auto_increment_mv\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add AUTO_INCREMENT value"), "html", null, true);
        yield "</label>
      </div>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_tables_move\"";
        // line 77
        if ((($tmp = ($context["has_privileges"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        } else {
            yield " title=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details."), "html", null, true);
            yield "\" disabled";
        }
        yield ">
        <label class=\"form-check-label\" for=\"checkbox_privileges_tables_move\">
          ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Adjust privileges"), "html", null, true);
        yield "
          ";
        // line 81
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        yield "
        </label>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_move\" value=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 92
        yield PhpMyAdmin\Url::getFromRoute("/table/operations");
        yield "\" id=\"tableOptionsForm\" class=\"ajax\">
  ";
        // line 93
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"submitoptions\" value=\"1\">
  <input type=\"hidden\" name=\"prev_comment\" value=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_comment"] ?? null), "html", null, true);
        yield "\">
  ";
        // line 97
        if ((($tmp = ($context["has_auto_increment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "    <input type=\"hidden\" name=\"hidden_auto_increment\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["auto_increment"] ?? null), "html", null, true);
            yield "\">
  ";
        }
        // line 100
        yield "
  <div class=\"card mb-2\">
    <div class=\"card-header\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table options"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"renameTableInput\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Rename table to"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"renameTableInput\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"form-check col-12\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_table_options\"";
        // line 113
        if ((($tmp = ($context["has_privileges"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        } else {
            yield " title=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details."), "html", null, true);
            yield "\" disabled";
        }
        yield ">
          <label class=\"form-check-label\" for=\"checkbox_privileges_table_options\">
            ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Adjust privileges"), "html", null, true);
        yield "
            ";
        // line 117
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        yield "
          </label>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"tableCommentsInput\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table comments"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"col-6\">
          <textarea
            id=\"tableCommentsInput\"
            class=\"form-control\"
            name=\"comment\"
            maxlength=\"2048\"
            class=\"textfield\"
            rows=\"1\"
            cols=\"30\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_comment"] ?? null), "html", null, true);
        yield "</textarea>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label class=\"text-nowrap\" for=\"newTableStorageEngineSelect\">
            ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage engine"), "html", null, true);
        yield "
            ";
        // line 142
        yield PhpMyAdmin\Html\MySQLDocumentation::show("Storage_engines");
        yield "
          </label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" name=\"new_tbl_storage_engine\" id=\"newTableStorageEngineSelect\">
            ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["storage_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
            // line 148
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 148), "html", null, true);
            yield "\"";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 148))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 148), "html", null, true);
                yield "\"";
            }
            // line 149
            yield ((((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 149)) == Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["storage_engine"] ?? null))) || (Twig\Extension\CoreExtension::testEmpty(($context["storage_engine"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "is_default", [], "any", false, false, false, 149)))) ? (" selected") : (""));
            yield ">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 150), "html", null, true);
            // line 151
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['engine'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "          </select>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"collationSelect\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" id=\"collationSelect\" lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
            <option value=\"\"></option>
            ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 165
            yield "              <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 165), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 165), "html", null, true);
            yield "\">
                ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = ($context["collations"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 166)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 167
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 167), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getDescription", [], "method", false, false, false, 167), "html", null, true);
                yield "\"";
                yield (((($context["tbl_collation"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 167))) ? (" selected") : (""));
                yield ">
                    ";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 168), "html", null, true);
                yield "
                  </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            yield "              </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "          </select>
        </div>

        <div class=\"form-check col-12 ms-3\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"change_all_collations\" value=\"1\" id=\"checkbox_change_all_collations\">
          <label class=\"form-check-label\" for=\"checkbox_change_all_collations\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Change all column collations"), "html", null, true);
        yield "</label>
        </div>
      </div>

      ";
        // line 182
        if ((($tmp = ($context["has_pack_keys"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 183
            yield "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label for=\"new_pack_keys\">PACK_KEYS</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"new_pack_keys\" id=\"new_pack_keys\">
              <option value=\"DEFAULT\"";
            // line 189
            yield (((($context["pack_keys"] ?? null) == "DEFAULT")) ? (" selected") : (""));
            yield ">DEFAULT</option>
              <option value=\"0\"";
            // line 190
            yield (((($context["pack_keys"] ?? null) == "0")) ? (" selected") : (""));
            yield ">0</option>
              <option value=\"1\"";
            // line 191
            yield (((($context["pack_keys"] ?? null) == "1")) ? (" selected") : (""));
            yield ">1</option>
            </select>
          </div>
        </div>
      ";
        }
        // line 196
        yield "
      ";
        // line 197
        if ((($tmp = ($context["has_checksum_and_delay_key_write"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 198
            yield "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_checksum\" id=\"new_checksum\" value=\"1\"";
            // line 199
            yield (((($context["checksum"] ?? null) == "1")) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_checksum\">CHECKSUM</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_delay_key_write\" id=\"new_delay_key_write\" value=\"1\"";
            // line 204
            yield (((($context["delay_key_write"] ?? null) == "1")) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_delay_key_write\">DELAY_KEY_WRITE</label>
        </div>
      ";
        }
        // line 208
        yield "
      ";
        // line 209
        if ((($tmp = ($context["has_transactional_and_page_checksum"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 210
            yield "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_transactional\" id=\"new_transactional\" value=\"1\"";
            // line 211
            yield (((($context["transactional"] ?? null) == "1")) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_transactional\">TRANSACTIONAL</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_page_checksum\" id=\"new_page_checksum\" value=\"1\"";
            // line 216
            yield (((($context["page_checksum"] ?? null) == "1")) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_page_checksum\">PAGE_CHECKSUM</label>
        </div>
      ";
        }
        // line 220
        yield "
      ";
        // line 221
        if ((($tmp = ($context["has_auto_increment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 222
            yield "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"auto_increment_opt\">AUTO_INCREMENT</label>
          </div>
          <div class=\"col-12\">
            <input class=\"form-control\" id=\"auto_increment_opt\" type=\"number\" name=\"new_auto_increment\" value=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["auto_increment"] ?? null), "html", null, true);
            yield "\">
          </div>
        </div>
      ";
        }
        // line 231
        yield "
      ";
        // line 232
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["row_formats"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 233
            yield "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"new_row_format\">ROW_FORMAT</label>
          </div>
          <div class=\"col-12\">
            <select class=\"form-select\" id=\"new_row_format\" name=\"new_row_format\">
              ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["row_formats"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row_format"]) {
                // line 240
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["row_format"], "html", null, true);
                yield "\"";
                yield ((($context["row_format"] == Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["row_format_current"] ?? null)))) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["row_format"], "html", null, true);
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row_format'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            yield "            </select>
          </div>
        </div>
      ";
        }
        // line 246
        yield "    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 254
        yield PhpMyAdmin\Url::getFromRoute("/table/operations");
        yield "\" name=\"copyTable\" id=\"copyTable\" class=\"ajax\" onsubmit=\"return window.pmaEmptyCheckTheField(this, 'new_name')\">
  ";
        // line 255
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
  <input type=\"hidden\" name=\"reload\" value=\"1\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Copy table to (database.table)"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 264
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["database_list"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 265
            yield "              <select class=\"form-select\" name=\"target_db\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "\">
                ";
            // line 266
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["database_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 267
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 267), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 267)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 267), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['each_db'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            yield "              </select>
            ";
        } else {
            // line 271
            yield "              <input class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "\">
            ";
        }
        // line 273
        yield "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
        yield "\" required>
          </div>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio1\" value=\"structure\">
          <label class=\"form-check-label\" for=\"whatRadio1\">
            ";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure only"), "html", null, true);
        yield "
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio2\" value=\"data\" checked>
          <label class=\"form-check-label\" for=\"whatRadio2\">
            ";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure and data"), "html", null, true);
        yield "
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio3\" value=\"dataonly\">
          <label class=\"form-check-label\" for=\"whatRadio3\">
            ";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Data only"), "html", null, true);
        yield "
          </label>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"drop_if_exists\" value=\"true\" id=\"checkbox_drop\">
          <label class=\"form-check-label\" for=\"checkbox_drop\">";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Add %s"), "DROP TABLE"), "html", null, true);
        yield "</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_cp\">
          <label class=\"form-check-label\" for=\"checkbox_auto_increment_cp\">";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add AUTO_INCREMENT value"), "html", null, true);
        yield "</label>
        </div>

        ";
        // line 311
        if ((($tmp = ($context["has_foreign_keys"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 312
            yield "          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"add_constraints\" value=\"1\" id=\"checkbox_constraints\" checked>
            <label class=\"form-check-label\" for=\"checkbox_constraints\">";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add constraints"), "html", null, true);
            yield "</label>
          </div>
        ";
        }
        // line 317
        yield "
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_adjust_privileges\"";
        // line 320
        if ((($tmp = ($context["has_privileges"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked";
        } else {
            yield " title=\"";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details."), "html", null, true);
            yield "\" disabled";
        }
        yield ">
          <label class=\"form-check-label\" for=\"checkbox_adjust_privileges\">
            ";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Adjust privileges"), "html", null, true);
        yield "
            ";
        // line 324
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        yield "
          </label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"switch_to_new\" value=\"true\" id=\"checkbox_switch\"";
        // line 329
        yield (((($tmp = ($context["switch_to_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"checkbox_switch\">";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Switch to copied table"), "html", null, true);
        yield "</label>
        </div>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_copy\" value=\"";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </div>
</form>

<div class=\"card mb-2\">
  <div class=\"card-header\">";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table maintenance"), "html", null, true);
        yield "</div>
  <ul class=\"list-group list-group-flush\" id=\"tbl_maintenance\">
    ";
        // line 344
        if (CoreExtension::inFilter(($context["storage_engine"] ?? null), ["MYISAM", "ARIA", "INNODB", "TOKUDB"])) {
            // line 345
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 346
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/analyze");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
            yield "\">
          ";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Analyze table"), "html", null, true);
            yield "
        </a>
        ";
            // line 349
            yield PhpMyAdmin\Html\MySQLDocumentation::show("ANALYZE_TABLE");
            yield "
      </li>
    ";
        }
        // line 352
        yield "
    ";
        // line 353
        if (CoreExtension::inFilter(($context["storage_engine"] ?? null), ["MYISAM", "ARIA", "INNODB", "TOKUDB"])) {
            // line 354
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 355
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/check");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
            yield "\">
          ";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check table"), "html", null, true);
            yield "
        </a>
        ";
            // line 358
            yield PhpMyAdmin\Html\MySQLDocumentation::show("CHECK_TABLE");
            yield "
      </li>
    ";
        }
        // line 361
        yield "
    <li class=\"list-group-item\">
      <a href=\"";
        // line 363
        yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/checksum");
        yield "\" data-post=\"";
        yield PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
        yield "\">
        ";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Checksum table"), "html", null, true);
        yield "
      </a>
      ";
        // line 366
        yield PhpMyAdmin\Html\MySQLDocumentation::show("CHECKSUM_TABLE");
        yield "
    </li>

    ";
        // line 369
        if ((($context["storage_engine"] ?? null) == "INNODB")) {
            // line 370
            yield "      <li class=\"list-group-item\">
        <a class=\"maintain_action ajax\" href=\"";
            // line 371
            yield PhpMyAdmin\Url::getFromRoute("/sql");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(($context["table"] ?? null))) . " ENGINE = InnoDB;")]), "", false);
            yield "\">
          ";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Defragment table"), "html", null, true);
            yield "
        </a>
        ";
            // line 374
            yield PhpMyAdmin\Html\MySQLDocumentation::show("InnoDB_File_Defragmenting");
            yield "
      </li>
    ";
        }
        // line 377
        yield "
    <li class=\"list-group-item\">
      <a class=\"maintain_action ajax\" href=\"";
        // line 379
        yield PhpMyAdmin\Url::getFromRoute("/sql");
        yield "\" data-post=\"";
        yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["sql_query" => ("FLUSH TABLE " . PhpMyAdmin\Util::backquote(        // line 380
($context["table"] ?? null))), "message_to_show" => Twig\Extension\CoreExtension::sprintf(\_gettext("Table %s has been flushed."),         // line 381
($context["table"] ?? null)), "reload" => true]), "", false);
        // line 383
        yield "\">
        ";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Flush the table (FLUSH)"), "html", null, true);
        yield "
      </a>
      ";
        // line 386
        yield PhpMyAdmin\Html\MySQLDocumentation::show("FLUSH");
        yield "
    </li>

    ";
        // line 389
        if (CoreExtension::inFilter(($context["storage_engine"] ?? null), ["MYISAM", "ARIA", "INNODB", "TOKUDB"])) {
            // line 390
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 391
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/optimize");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
            yield "\">
          ";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Optimize table"), "html", null, true);
            yield "
        </a>
        ";
            // line 394
            yield PhpMyAdmin\Html\MySQLDocumentation::show("OPTIMIZE_TABLE");
            yield "
      </li>
    ";
        }
        // line 397
        yield "
    ";
        // line 398
        if (CoreExtension::inFilter(($context["storage_engine"] ?? null), ["MYISAM", "ARIA"])) {
            // line 399
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 400
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/repair");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
            yield "\">
          ";
            // line 401
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Repair table"), "html", null, true);
            yield "
        </a>
        ";
            // line 403
            yield PhpMyAdmin\Html\MySQLDocumentation::show("REPAIR_TABLE");
            yield "
      </li>
    ";
        }
        // line 406
        yield "  </ul>
</div>

";
        // line 409
        if ((($tmp =  !($context["is_system_schema"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 410
            yield "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
            // line 411
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete data or table"), "html", null, true);
            yield "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 413
            if ((($tmp =  !($context["is_view"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 414
                yield "        <li class=\"list-group-item\">
          ";
                // line 415
                yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), Twig\Extension\CoreExtension::merge(                // line 417
($context["url_params"] ?? null), ["sql_query" => ((("TRUNCATE TABLE " . PhpMyAdmin\Util::backquote(                // line 418
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null))), "goto" => PhpMyAdmin\Url::getFromRoute("/table/structure"), "reload" => true, "message_to_show" => Twig\Extension\CoreExtension::sprintf(\_gettext("Table %s has been emptied."),                 // line 421
($context["table"] ?? null))]), \_gettext("Empty the table (TRUNCATE)"), ["id" => "truncate_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("TRUNCATE TABLE " . PhpMyAdmin\Util::backquote(                // line 427
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null)))]);
                // line 429
                yield "
          ";
                // line 430
                yield PhpMyAdmin\Html\MySQLDocumentation::show("TRUNCATE_TABLE");
                yield "
        </li>
        <li class=\"list-group-item\">
          ";
                // line 433
                yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), Twig\Extension\CoreExtension::merge(                // line 435
($context["url_params"] ?? null), ["sql_query" => ((("DELETE FROM " . PhpMyAdmin\Util::backquote(                // line 436
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null))), "goto" => PhpMyAdmin\Url::getFromRoute("/table/structure"), "reload" => true, "message_to_show" => Twig\Extension\CoreExtension::sprintf(\_gettext("Table %s has been emptied."),                 // line 439
($context["table"] ?? null))]), \_gettext("Empty the table (DELETE FROM)"), ["id" => "delete_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DELETE FROM " . PhpMyAdmin\Util::backquote(                // line 445
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null)))]);
                // line 447
                yield "
          ";
                // line 448
                yield PhpMyAdmin\Html\MySQLDocumentation::show("DELETE");
                yield "
        </li>
      ";
            }
            // line 451
            yield "      <li class=\"list-group-item\">
        ";
            // line 452
            yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), Twig\Extension\CoreExtension::merge(            // line 454
($context["url_params"] ?? null), ["sql_query" => ((("DROP TABLE " . PhpMyAdmin\Util::backquote(            // line 455
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null))), "goto" => PhpMyAdmin\Url::getFromRoute("/database/operations"), "reload" => true, "purge" => true, "message_to_show" => (((($tmp =             // line 459
($context["is_view"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::sprintf(\_gettext("View %s has been dropped."), ($context["table"] ?? null))) : (Twig\Extension\CoreExtension::sprintf(\_gettext("Table %s has been dropped."), ($context["table"] ?? null)))), "table" =>             // line 460
($context["table"] ?? null)]), \_gettext("Delete the table (DROP)"), ["id" => "drop_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DROP TABLE " . PhpMyAdmin\Util::backquote(            // line 466
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null)))]);
            // line 468
            yield "
        ";
            // line 469
            yield PhpMyAdmin\Html\MySQLDocumentation::show("DROP_TABLE");
            yield "
      </li>
    </ul>
  </div>
";
        }
        // line 474
        yield "
";
        // line 475
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["partitions"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 476
            yield "  <form id=\"partitionsForm\" class=\"ajax\" method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/operations");
            yield "\">
    ";
            // line 477
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            yield "
    <input type=\"hidden\" name=\"submit_partition\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">
        ";
            // line 482
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partition maintenance"), "html", null, true);
            yield "
        ";
            // line 483
            yield PhpMyAdmin\Html\MySQLDocumentation::show("partitioning_maintenance");
            yield "
      </div>

      <div class=\"card-body\">
        <div class=\"mb-3\">
          <label for=\"partition_name\">";
            // line 488
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partition"), "html", null, true);
            yield "</label>
          <select class=\"form-select resize-vertical\" id=\"partition_name\" name=\"partition_name[]\" multiple required>
            ";
            // line 490
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["partitions"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 491
                yield "              <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["partition"], "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 491)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["partition"], "html", null, true);
                yield "</option>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 493
            yield "          </select>
        </div>

        <div class=\"mb-3 form-check-inline\">
          ";
            // line 497
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["partitions_choices"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["description"]) {
                // line 498
                yield "            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"partition_operation\" id=\"partitionOperationRadio";
                // line 499
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["value"]), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"";
                yield ((($context["value"] == "ANALYZE")) ? (" checked") : (""));
                yield ">
              <label class=\"form-check-label\" for=\"partitionOperationRadio";
                // line 500
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["value"]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["description"], "html", null, true);
                yield "</label>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['value'], $context['description'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 503
            yield "        </div>

        <div class=\"form-text\">
          <a href=\"";
            // line 506
            yield PhpMyAdmin\Url::getFromRoute("/sql", Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(            // line 507
($context["table"] ?? null))) . " REMOVE PARTITIONING;")]));
            // line 508
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove partitioning"), "html", null, true);
            yield "</a>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
      </div>
    </div>
  </form>
";
        }
        // line 518
        yield "
";
        // line 519
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["foreigners"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 520
            yield "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
            // line 521
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check referential integrity"), "html", null, true);
            yield "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 523
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["foreigners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["foreign"]) {
                // line 524
                yield "        <li class=\"list-group-item\">
          <a class=\"text-nowrap\" href=\"";
                // line 525
                yield PhpMyAdmin\Url::getFromRoute("/sql", CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "params", [], "any", false, false, false, 525));
                yield "\">
            ";
                // line 526
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "master", [], "any", false, false, false, 526), "html", null, true);
                yield " -> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "db", [], "any", false, false, false, 526), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "table", [], "any", false, false, false, 526), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "field", [], "any", false, false, false, 526), "html", null, true);
                yield "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['foreign'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 530
            yield "    </ul>
  </div>
";
        }
        // line 533
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
        return "table/operations/index.twig";
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
        return array (  1173 => 533,  1168 => 530,  1152 => 526,  1148 => 525,  1145 => 524,  1141 => 523,  1136 => 521,  1133 => 520,  1131 => 519,  1128 => 518,  1120 => 513,  1111 => 508,  1109 => 507,  1108 => 506,  1103 => 503,  1092 => 500,  1084 => 499,  1081 => 498,  1077 => 497,  1071 => 493,  1050 => 491,  1033 => 490,  1028 => 488,  1020 => 483,  1016 => 482,  1008 => 477,  1003 => 476,  1001 => 475,  998 => 474,  990 => 469,  987 => 468,  985 => 466,  984 => 460,  983 => 459,  982 => 455,  981 => 454,  980 => 452,  977 => 451,  971 => 448,  968 => 447,  966 => 445,  965 => 439,  964 => 436,  963 => 435,  962 => 433,  956 => 430,  953 => 429,  951 => 427,  950 => 421,  949 => 418,  948 => 417,  947 => 415,  944 => 414,  942 => 413,  937 => 411,  934 => 410,  932 => 409,  927 => 406,  921 => 403,  916 => 401,  910 => 400,  907 => 399,  905 => 398,  902 => 397,  896 => 394,  891 => 392,  885 => 391,  882 => 390,  880 => 389,  874 => 386,  869 => 384,  866 => 383,  864 => 381,  863 => 380,  860 => 379,  856 => 377,  850 => 374,  845 => 372,  839 => 371,  836 => 370,  834 => 369,  828 => 366,  823 => 364,  817 => 363,  813 => 361,  807 => 358,  802 => 356,  796 => 355,  793 => 354,  791 => 353,  788 => 352,  782 => 349,  777 => 347,  771 => 346,  768 => 345,  766 => 344,  761 => 342,  752 => 336,  743 => 330,  739 => 329,  731 => 324,  727 => 323,  720 => 321,  715 => 320,  711 => 317,  705 => 314,  701 => 312,  699 => 311,  693 => 308,  685 => 303,  674 => 295,  665 => 289,  656 => 283,  642 => 274,  639 => 273,  631 => 271,  627 => 269,  614 => 267,  610 => 266,  605 => 265,  603 => 264,  595 => 259,  588 => 255,  584 => 254,  576 => 249,  571 => 246,  565 => 242,  552 => 240,  548 => 239,  540 => 233,  538 => 232,  535 => 231,  528 => 227,  521 => 222,  519 => 221,  516 => 220,  509 => 216,  501 => 211,  498 => 210,  496 => 209,  493 => 208,  486 => 204,  478 => 199,  475 => 198,  473 => 197,  470 => 196,  462 => 191,  458 => 190,  454 => 189,  446 => 183,  444 => 182,  437 => 178,  430 => 173,  423 => 171,  414 => 168,  405 => 167,  401 => 166,  394 => 165,  390 => 164,  382 => 159,  374 => 153,  367 => 151,  365 => 150,  362 => 149,  353 => 148,  349 => 147,  341 => 142,  337 => 141,  327 => 134,  314 => 124,  304 => 117,  300 => 116,  293 => 114,  288 => 113,  282 => 109,  276 => 106,  269 => 102,  265 => 100,  259 => 98,  257 => 97,  253 => 96,  247 => 93,  243 => 92,  235 => 87,  226 => 81,  222 => 80,  215 => 78,  210 => 77,  204 => 73,  192 => 66,  189 => 65,  181 => 63,  177 => 61,  164 => 59,  160 => 58,  155 => 57,  153 => 56,  145 => 51,  137 => 46,  133 => 45,  130 => 44,  122 => 39,  112 => 32,  105 => 28,  95 => 21,  91 => 19,  80 => 17,  76 => 16,  71 => 14,  64 => 10,  57 => 6,  52 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/operations/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/operations/index.twig");
    }
}
