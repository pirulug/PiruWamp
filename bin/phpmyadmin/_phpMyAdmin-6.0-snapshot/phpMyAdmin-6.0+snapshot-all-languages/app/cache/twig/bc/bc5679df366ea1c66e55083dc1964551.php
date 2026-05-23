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

/* columns_definitions/column_definitions_form.twig */
class __TwigTemplate_efb915cd2e7e2652895e3f49be9a56bd extends Template
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
        yield "<form method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute(($context["action"] ?? null));
        yield "\" class=\"";
        // line 2
        yield (((($context["action"] ?? null) == "/table/create")) ? ("create_table_form") : ("append_fields_form"));
        yield " ajax lock-page\">
    ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null));
        yield "
    ";
        // line 5
        yield "    ";
        // line 6
        yield "    ";
        // line 7
        yield "    <input type=\"hidden\" name=\"primary_indexes\" value=\"";
        // line 8
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["primary_indexes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["primary_indexes"] ?? null), "html", null, true)) : ("[]"));
        yield "\">
    <input type=\"hidden\" name=\"unique_indexes\" value=\"";
        // line 10
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["unique_indexes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_indexes"] ?? null), "html", null, true)) : ("[]"));
        yield "\">
    <input type=\"hidden\" name=\"indexes\" value=\"";
        // line 12
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["indexes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["indexes"] ?? null), "html", null, true)) : ("[]"));
        yield "\">
    <input type=\"hidden\" name=\"fulltext_indexes\" value=\"";
        // line 14
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["fulltext_indexes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fulltext_indexes"] ?? null), "html", null, true)) : ("[]"));
        yield "\">
    <input type=\"hidden\" name=\"spatial_indexes\" value=\"";
        // line 16
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["spatial_indexes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["spatial_indexes"] ?? null), "html", null, true)) : ("[]"));
        yield "\">

    ";
        // line 18
        if ((($context["action"] ?? null) == "/table/create")) {
            // line 19
            yield "        <div id=\"table_name_col_no_outer\">
            <span>
                ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table name"), "html", null, true);
            yield ":
                <input type=\"text\"
                    name=\"table\"
                    size=\"40\"
                    maxlength=\"64\"
                    value=\"";
            // line 26
            yield ((array_key_exists("table", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true)) : (""));
            yield "\"
                    class=\"textfield\" autofocus required>
            </span>
            <span>
                ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add"), "html", null, true);
            yield "
                <input type=\"number\"
                    id=\"added_fields\"
                    name=\"added_fields\"
                    size=\"2\"
                    value=\"1\"
                    min=\"1\"
                    onfocus=\"this.select()\">
                ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("column(s)"), "html", null, true);
            yield "
                <input class=\"btn btn-secondary\" type=\"button\"
                    name=\"submit_num_fields\"
                    value=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
            </span>
        </div>
    ";
        }
        // line 45
        yield "    ";
        if (is_iterable(($context["content_cells"] ?? null))) {
            // line 46
            yield "        ";
            yield from $this->load("columns_definitions/table_fields_definitions.twig", 46)->unwrap()->yield(CoreExtension::toArray(["is_backup" =>             // line 47
($context["is_backup"] ?? null), "fields_meta" =>             // line 48
($context["fields_meta"] ?? null), "relation_parameters" =>             // line 49
($context["relation_parameters"] ?? null), "content_cells" =>             // line 50
($context["content_cells"] ?? null), "change_column" =>             // line 51
($context["change_column"] ?? null), "is_virtual_columns_supported" =>             // line 52
($context["is_virtual_columns_supported"] ?? null), "server_version" =>             // line 53
($context["server_version"] ?? null), "browse_mime" =>             // line 54
($context["browse_mime"] ?? null), "supports_stored_keyword" =>             // line 55
($context["supports_stored_keyword"] ?? null), "max_rows" =>             // line 56
($context["max_rows"] ?? null), "char_editing" =>             // line 57
($context["char_editing"] ?? null), "attribute_types" =>             // line 58
($context["attribute_types"] ?? null), "privs_available" =>             // line 59
($context["privs_available"] ?? null), "max_length" =>             // line 60
($context["max_length"] ?? null), "charsets" =>             // line 61
($context["charsets"] ?? null)]));
            // line 63
            yield "    ";
        }
        // line 64
        yield "    ";
        if ((($context["action"] ?? null) == "/table/create")) {
            // line 65
            yield "        <div class=\"responsivetable\">
        <table class=\"table table-borderless w-auto align-middle mb-0\">
            <tr class=\"align-top\">
                <th>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table comments:"), "html", null, true);
            yield "</th>
                <td width=\"25\">&nbsp;</td>
                <th>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation:"), "html", null, true);
            yield "</th>
                <td width=\"25\">&nbsp;</td>
                <th>
                    ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage Engine:"), "html", null, true);
            yield "
                    ";
            // line 74
            yield PhpMyAdmin\Html\MySQLDocumentation::show("Storage_engines");
            yield "
                </th>
                <td width=\"25\">&nbsp;</td>
                <th id=\"storage-engine-connection\">
                    ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Connection:"), "html", null, true);
            yield "
                    ";
            // line 79
            yield PhpMyAdmin\Html\MySQLDocumentation::show("federated-create-connection");
            yield "
                </th>
            </tr>
            <tr>
                <td>
                  <textarea 
                    name=\"comment\" 
                    maxlength=\"2048\" 
                    class=\"textfield\" 
                    rows=\"1\"
                    cols=\"30\">";
            // line 89
            yield ((array_key_exists("comment", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["comment"] ?? null), "html", null, true)) : (""));
            yield "</textarea>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
                    <option value=\"\"></option>
                    ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 96
                yield "                      <optgroup label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 96), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 96), "html", null, true);
                yield "\">
                        ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 97));
                foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                    // line 98
                    yield "                          <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 98), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 98), "html", null, true);
                    yield "\"";
                    // line 99
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 99) == ($context["tbl_collation"] ?? null))) ? (" selected") : (""));
                    yield ">";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 100), "html", null, true);
                    // line 101
                    yield "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                yield "                      </optgroup>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select class=\"form-select\" name=\"tbl_storage_engine\" aria-label=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage engine"), "html", null, true);
            yield "\">
                    ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["storage_engines"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
                // line 111
                yield "                      <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 111), "html", null, true);
                yield "\"";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 111))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 111), "html", null, true);
                    yield "\"";
                }
                // line 112
                yield ((((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 112)) == Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["tbl_storage_engine"] ?? null))) || (Twig\Extension\CoreExtension::testEmpty(($context["tbl_storage_engine"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "is_default", [], "any", false, false, false, 112)))) ? (" selected") : (""));
                yield ">";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 113), "html", null, true);
                // line 114
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['engine'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                    <input type=\"text\"
                        name=\"connection\"
                        size=\"40\"
                        value=\"";
            // line 123
            yield ((array_key_exists("connection", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["connection"] ?? null), "html", null, true)) : (""));
            yield "\"
                        placeholder=\"scheme://user_name[:password]@host_name[:port_num]/db_name/tbl_name\"
                        class=\"textfield\"
                        required>
                </td>
            </tr>
            ";
            // line 129
            if ((($tmp = ($context["have_partitioning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 130
                yield "                <tr class=\"align-top\">
                    <th colspan=\"5\">
                        ";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("PARTITION definition:"), "html", null, true);
                yield "
                        ";
                // line 133
                yield PhpMyAdmin\Html\MySQLDocumentation::show("Partitioning");
                yield "
                    </th>
                </tr>
                <tr>
                    <td colspan=\"5\">
                        ";
                // line 138
                yield from $this->load("columns_definitions/partitions.twig", 138)->unwrap()->yield(CoreExtension::toArray(["partition_details" =>                 // line 139
($context["partition_details"] ?? null), "storage_engines" =>                 // line 140
($context["storage_engines"] ?? null)]));
                // line 142
                yield "                    </td>
                </tr>
            ";
            }
            // line 145
            yield "        </table>
        </div>
    ";
        }
        // line 148
        yield "    <div class=\"card mt-3\">
      <div class=\"card-body\">
        ";
        // line 150
        if (((($context["action"] ?? null) == "/table/add-field") || (($context["action"] ?? null) == "/table/structure/save"))) {
            // line 151
            yield "            <input type=\"checkbox\" name=\"online_transaction\" value=\"ONLINE_TRANSACTION_ENABLED\" />";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Online transaction part of the SQL DDL for InnoDB", "Online transaction"), "html", null, true);
            yield PhpMyAdmin\Html\MySQLDocumentation::show("innodb-online-ddl");
            yield "
        ";
        }
        // line 153
        yield "        <input class=\"btn btn-secondary preview_sql\" type=\"button\"
            value=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Preview SQL"), "html", null, true);
        yield "\">
        <input class=\"btn btn-primary\" type=\"submit\"
            name=\"do_save_data\"
            value=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save"), "html", null, true);
        yield "\">
      </div>
    </div>
    <div id=\"properties_message\"></div>
     ";
        // line 161
        if ((($tmp = ($context["is_integers_length_restricted"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 162
            yield "        <div class=\"alert alert-primary\" id=\"length_not_allowed\" role=\"alert\">
            ";
            // line 163
            yield PhpMyAdmin\Html\Generator::getImage("s_notice");
            yield "
            ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("The column width of integer types is ignored in your MySQL version unless defining a TINYINT(1) column"), "html", null, true);
            yield "
            ";
            // line 165
            yield PhpMyAdmin\Html\MySQLDocumentation::show("", false, "https://dev.mysql.com/doc/relnotes/mysql/8.0/en/news-8-0-19.html");
            yield "
        </div>
     ";
        }
        // line 168
        yield "</form>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading"), "html", null, true);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 186
        yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/enum_set_editor.twig");
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/column_definitions_form.twig";
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
        return array (  407 => 186,  398 => 179,  390 => 174,  386 => 173,  379 => 168,  373 => 165,  369 => 164,  365 => 163,  362 => 162,  360 => 161,  353 => 157,  347 => 154,  344 => 153,  337 => 151,  335 => 150,  331 => 148,  326 => 145,  321 => 142,  319 => 140,  318 => 139,  317 => 138,  309 => 133,  305 => 132,  301 => 130,  299 => 129,  290 => 123,  281 => 116,  274 => 114,  272 => 113,  269 => 112,  260 => 111,  256 => 110,  252 => 109,  246 => 105,  239 => 103,  232 => 101,  230 => 100,  227 => 99,  221 => 98,  217 => 97,  210 => 96,  206 => 95,  197 => 89,  184 => 79,  180 => 78,  173 => 74,  169 => 73,  163 => 70,  158 => 68,  153 => 65,  150 => 64,  147 => 63,  145 => 61,  144 => 60,  143 => 59,  142 => 58,  141 => 57,  140 => 56,  139 => 55,  138 => 54,  137 => 53,  136 => 52,  135 => 51,  134 => 50,  133 => 49,  132 => 48,  131 => 47,  129 => 46,  126 => 45,  119 => 41,  113 => 38,  102 => 30,  95 => 26,  87 => 21,  83 => 19,  81 => 18,  76 => 16,  72 => 14,  68 => 12,  64 => 10,  60 => 8,  58 => 7,  56 => 6,  54 => 5,  50 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "columns_definitions/column_definitions_form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/column_definitions_form.twig");
    }
}
