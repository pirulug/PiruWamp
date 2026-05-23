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

/* database/central_columns/main.twig */
class __TwigTemplate_bc2b2afc234b5cd038e9338546d4762a extends Template
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
        // line 2
        yield "<div id=\"add_col_div\" class=\"topmargin\">
    <a href=\"#\">
        <span>";
        // line 4
        yield (((($context["total_rows"] ?? null) > 0)) ? ("+") : ("-"));
        yield "</span>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add new column"), "html", null, true);
        yield "
    </a>
    <form id=\"add_new\" class=\"new_central_col";
        // line 6
        yield (((($context["total_rows"] ?? null) != 0)) ? (" hide") : (""));
        yield "\"
        method=\"post\" action=\"";
        // line 7
        yield PhpMyAdmin\Url::getFromRoute("/database/central-columns");
        yield "\">
        ";
        // line 8
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "
        <input type=\"hidden\" name=\"add_new_column\" value=\"add_new_column\">
        <div class=\"table-responsive\">
            <table class=\"table w-auto\">
                <thead>
                    <tr>
                        <th></th>
                        <th class=\"\" title=\"\" data-column=\"name\">
                            ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Name"), "html", null, true);
        yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"type\">
                            ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
        yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"length\">
                            ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Length/Value"), "html", null, true);
        yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"default\">
                            ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Default"), "html", null, true);
        yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"collation\">
                            ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"attribute\">
                            ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Attribute"), "html", null, true);
        yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"isnull\">
                            ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
        yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"extra\">
                            ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("A_I"), "html", null, true);
        yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td name=\"col_name\" class=\"text-nowrap\">
                            ";
        // line 54
        yield from $this->load("columns_definitions/column_name.twig", 54)->unwrap()->yield(CoreExtension::toArray(["column_number" => 0, "ci" => 0, "ci_offset" => 0, "column_meta" => [], "has_central_columns_feature" => false, "max_rows" =>         // line 60
($context["max_rows"] ?? null)]));
        // line 62
        yield "                        </td>
                        <td name=\"col_type\" class=\"text-nowrap\">
                          <select class=\"column_type\" name=\"field_type[0]\" id=\"field_0_1\">
                            ";
        // line 65
        yield PhpMyAdmin\Html\Generator::getSupportedDatatypes("");
        yield "
                          </select>
                        </td>
                        <td class=\"text-nowrap\" name=\"col_length\">
                          <input id=\"field_0_2\" type=\"text\" name=\"field_length[0]\" size=\"8\" value=\"\" class=\"textfield\">
                          <p class=\"enum_notice\" id=\"enum_notice_0_2\">
                            <a href=\"#\" class=\"open_enum_editor\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit ENUM/SET values"), "html", null, true);
        yield "</a>
                          </p>
                        </td>
                        <td class=\"text-nowrap\" name=\"col_default\">
                          <select name=\"field_default_type[0]\" id=\"field_0_3\" class=\"default_type\">
                            <option value=\"NONE\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("for default", "None"), "html", null, true);
        yield "</option>
                            <option value=\"USER_DEFINED\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("As defined:"), "html", null, true);
        yield "</option>
                            <option value=\"NULL\">NULL</option>
                            <option value=\"CURRENT_TIMESTAMP\">CURRENT_TIMESTAMP</option>
                          </select>
                          ";
        // line 81
        if ((($context["char_editing"] ?? null) == "textarea")) {
            // line 82
            yield "                            <textarea name=\"field_default_value[0]\" cols=\"15\" class=\"textfield default_value\"></textarea>
                          ";
        } else {
            // line 84
            yield "                            <input type=\"text\" name=\"field_default_value[0]\" size=\"12\" value=\"\" class=\"textfield default_value\">
                          ";
        }
        // line 86
        yield "                        </td>
                        <td name=\"collation\" class=\"text-nowrap\">
                          <select lang=\"en\" dir=\"ltr\" name=\"field_collation[0]\" id=\"field_0_4\">
                            <option value=\"\"></option>
                            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 91
            yield "                              <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 91), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 91), "html", null, true);
            yield "\">
                                ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 93
                yield "                                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 93), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 93), "html", null, true);
                yield "\">";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 94), "html", null, true);
                // line 95
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "                              </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "                          </select>
                        </td>
                        <td class=\"text-nowrap\" name=\"col_attribute\">
                            ";
        // line 102
        yield from $this->load("columns_definitions/column_attribute.twig", 102)->unwrap()->yield(CoreExtension::toArray(["column_number" => 0, "ci" => 5, "ci_offset" => 0, "extracted_columnspec" => [], "column_meta" => [], "submit_attribute" => false, "attribute_types" =>         // line 109
($context["attribute_types"] ?? null)]));
        // line 111
        yield "                        </td>
                        <td class=\"text-nowrap\" name=\"col_isNull\">
                          <input name=\"field_null[0]\" id=\"field_0_6\" type=\"checkbox\" value=\"YES\" class=\"allow_null\">
                        </td>
                        <td class=\"text-nowrap\" name=\"col_extra\">
                          <input name=\"col_extra[0]\" id=\"field_0_7\" type=\"checkbox\" value=\"auto_increment\">
                        </td>
                        <td>
                            <input id=\"add_column_save\" class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save"), "html", null, true);
        yield "\">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>
";
        // line 127
        if ((($context["total_rows"] ?? null) <= 0)) {
            // line 128
            yield "  <div class=\"alert alert-info\" role=\"alert\">
    ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("The central list of columns for the current database is empty"), "html", null, true);
            yield "
  </div>
";
        } else {
            // line 132
            yield "    <table class=\"table table-borderless table-sm w-auto d-inline-block navigation\">
        <tr>
            <td class=\"navigation_separator\"></td>
            ";
            // line 135
            if (((($context["pos"] ?? null) - ($context["max_rows"] ?? null)) >= 0)) {
                // line 136
                yield "                <td>
                    <form action=\"";
                // line 137
                yield PhpMyAdmin\Url::getFromRoute("/database/central-columns");
                yield "\" method=\"post\">
                        ";
                // line 138
                yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
                yield "
                        <input type=\"hidden\" name=\"pos\" value=\"";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["pos"] ?? null) - ($context["max_rows"] ?? null)), "html", null, true);
                yield "\">
                        <input type=\"hidden\" name=\"total_rows\" value=\"";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_rows"] ?? null), "html", null, true);
                yield "\">
                        <input class=\"btn btn-secondary ajax\" type=\"submit\" name=\"navig\" value=\"&lt\">
                    </form>
                </td>
            ";
            }
            // line 145
            yield "            ";
            if ((($context["tn_nbTotalPage"] ?? null) > 1)) {
                // line 146
                yield "                <td>
                    <form action=\"";
                // line 147
                yield PhpMyAdmin\Url::getFromRoute("/database/central-columns");
                yield "\" method=\"post\">
                        ";
                // line 148
                yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
                yield "
                        <input type=\"hidden\" name=\"total_rows\" value=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_rows"] ?? null), "html", null, true);
                yield "\">
                        ";
                // line 150
                yield ($context["tn_page_selector"] ?? null);
                yield "
                    </form>
                </td>
            ";
            }
            // line 154
            yield "            ";
            if (((($context["pos"] ?? null) + ($context["max_rows"] ?? null)) < ($context["total_rows"] ?? null))) {
                // line 155
                yield "                <td>
                    <form action=\"";
                // line 156
                yield PhpMyAdmin\Url::getFromRoute("/database/central-columns");
                yield "\" method=\"post\">
                        ";
                // line 157
                yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
                yield "
                        <input type=\"hidden\" name=\"pos\" value=\"";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["pos"] ?? null) + ($context["max_rows"] ?? null)), "html", null, true);
                yield "\">
                        <input type=\"hidden\" name=\"total_rows\" value=\"";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_rows"] ?? null), "html", null, true);
                yield "\">
                        <input class=\"btn btn-secondary ajax\" type=\"submit\" name=\"navig\" value=\"&gt\">
                    </form>
                </td>
            ";
            }
            // line 164
            yield "            <td class=\"navigation_separator\"></td>
            <td>
              <div class=\"row align-items-center\">
                <div class=\"col-auto\">
                  <label for=\"filterRows\" class=\"col-form-label\">";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Filter rows:"), "html", null, true);
            yield "</label>
                </div>
                <div class=\"col-auto\">
                  <input type=\"text\" id=\"filterRows\" class=\"filter_rows form-control\" placeholder=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Search this table"), "html", null, true);
            yield "\">
                </div>
              </div>
            </td>
            <td class=\"navigation_separator\"></td>
        </tr>
    </table>
";
        }
        // line 179
        yield "
<table class=\"table table-borderless table-sm w-auto d-inline-block\">
    <tr>
        <td class=\"navigation_separator largescreenonly\"></td>
        <td class=\"central_columns_navigation\">
            ";
        // line 184
        yield PhpMyAdmin\Html\Generator::getIcon("centralColumns_add", \_gettext("Add column"));
        yield "
            <form id=\"add_column\" action=\"";
        // line 185
        yield PhpMyAdmin\Url::getFromRoute("/database/central-columns");
        yield "\" method=\"post\">
                ";
        // line 186
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "
                <input type=\"hidden\" name=\"add_column\" value=\"add\">
                <input type=\"hidden\" name=\"pos\" value=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pos"] ?? null), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"total_rows\" value=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_rows"] ?? null), "html", null, true);
        yield "\">
                ";
        // line 191
        yield "                <select name=\"table-select\" id=\"table-select\">
                    <option value=\"\" disabled selected>
                        ";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select a table"), "html", null, true);
        yield "
                    </option>
                    ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 196
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"]);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"]);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['table'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "                </select>
                <select name=\"column-select\" id=\"column-select\">
                    <option value=\"\" selected>";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select a column."), "html", null, true);
        yield "</option>
                </select>
                <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add"), "html", null, true);
        yield "\">
            </form>
        </td>
        <td class=\"navigation_separator largescreenonly\"></td>
    </tr>
</table>
";
        // line 208
        if ((($context["total_rows"] ?? null) > 0)) {
            // line 209
            yield "    <form method=\"post\" id=\"del_form\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/database/central-columns");
            yield "\">
        ";
            // line 210
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            yield "
        <input id=\"del_col_name\" type=\"hidden\" name=\"col_name\" value=\"\">
        <input type=\"hidden\" name=\"pos\" value=\"";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pos"] ?? null), "html", null, true);
            yield "\">
        <input type=\"hidden\" name=\"delete_save\" value=\"delete\">
    </form>
    <div id=\"tableslistcontainer\">
        <form name=\"tableslistcontainer\">
            <table id=\"table_columns\" class=\"table table-striped table-hover tablesorter w-auto\">
                ";
            // line 218
            $context["class"] = "column_heading";
            // line 219
            yield "                ";
            $context["title"] = \_gettext("Click to sort.");
            // line 220
            yield "                <thead>
                    <tr>
                        <th class=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\"></th>
                        <th class=\"hide\"></th>
                        <th class=\"column_action\" colspan=\"2\">";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
            yield "</th>
                        <th class=\"";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"name\">
                            ";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Name"), "html", null, true);
            yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"type\">
                            ";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
            yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"length\">
                            ";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Length/Value"), "html", null, true);
            yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"default\">
                            ";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Default"), "html", null, true);
            yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"collation\">
                            ";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
            yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"attribute\">
                            ";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Attribute"), "html", null, true);
            yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"isnull\">
                            ";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
            yield "
                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"extra\">
                            ";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("A_I"), "html", null, true);
            yield "
                            <div class=\"sorticon\"></div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 260
            $context["row_num"] = 0;
            // line 261
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 262
                yield "                        ";
                // line 263
                yield "                        <tr data-rownum=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("f_" . ($context["row_num"] ?? null)), "html", null, true);
                yield "\">
                            ";
                // line 264
                yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
                yield "
                            <input type=\"hidden\" name=\"edit_save\" value=\"save\">
                            <td class=\"text-nowrap\">
                                <input type=\"checkbox\" class=\"checkall\" name=\"selected_fld[]\"
                                value=\"";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = $context["row"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["col_name"] ?? null) : null), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("checkbox_row_" . ($context["row_num"] ?? null)), "html", null, true);
                yield "\">
                            </td>
                            <td id=\"";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("edit_" . ($context["row_num"] ?? null)), "html", null, true);
                yield "\" class=\"edit text-center\">
                                <a href=\"#\"> ";
                // line 271
                yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit"));
                yield "</a>
                            </td>
                            <td class=\"del_row\" data-rownum = \"";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "\">
                                <a href=\"#\">";
                // line 274
                yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Delete"));
                yield "</a>
                                <input type=\"submit\" data-rownum = \"";
                // line 275
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "\" class=\"btn btn-secondary edit_cancel_form\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
                yield "\">
                            </td>
                            <td id=\"";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("save_" . ($context["row_num"] ?? null)), "html", null, true);
                yield "\" class=\"hide\">
                                <input type=\"submit\" data-rownum=\"";
                // line 278
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "\" class=\"btn btn-primary edit_save_form\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save"), "html", null, true);
                yield "\">
                            </td>
                            <td name=\"col_name\" class=\"text-nowrap\">
                                <span>";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["row"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["col_name"] ?? null) : null), "html", null, true);
                yield "</span>
                                <input name=\"orig_col_name\" type=\"hidden\" value=\"";
                // line 282
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["row"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["col_name"] ?? null) : null), "html", null, true);
                yield "\">
                                ";
                // line 283
                yield from $this->load("columns_definitions/column_name.twig", 283)->unwrap()->yield(CoreExtension::toArray(["column_number" =>                 // line 284
($context["row_num"] ?? null), "ci" => 0, "ci_offset" => 0, "column_meta" => ["Field" => (($_v3 =                 // line 288
$context["row"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["col_name"] ?? null) : null)], "has_central_columns_feature" => false, "max_rows" =>                 // line 291
($context["max_rows"] ?? null)]));
                // line 293
                yield "                            </td>
                            <td name=\"col_type\" class=\"text-nowrap\">
                              <span>";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = $context["row"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["col_type"] ?? null) : null), "html", null, true);
                yield "</span>
                              <select class=\"column_type\" name=\"field_type[";
                // line 296
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "]\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_1\">
                                ";
                // line 297
                yield PhpMyAdmin\Html\Generator::getSupportedDatatypes((($_v5 = ($context["types_upper"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["row_num"] ?? null)] ?? null) : null));
                yield "
                              </select>
                            </td>
                            <td class=\"text-nowrap\" name=\"col_length\">
                              <span>";
                // line 301
                yield (((($tmp = (($_v6 = $context["row"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["col_length"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = $context["row"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["col_length"] ?? null) : null), "html", null, true)) : (""));
                yield "</span>
                              <input id=\"field_";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_2\" type=\"text\" name=\"field_length[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "]\" size=\"8\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = $context["row"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["col_length"] ?? null) : null), "html", null, true);
                yield "\" class=\"textfield\">
                              <p class=\"enum_notice\" id=\"enum_notice_";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_2\">
                                <a href=\"#\" class=\"open_enum_editor\">";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit ENUM/SET values"), "html", null, true);
                yield "</a>
                              </p>
                            </td>
                            <td class=\"text-nowrap\" name=\"col_default\">
                              ";
                // line 308
                if (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "col_default", [], "array", true, true, false, 308)) {
                    // line 309
                    yield "                                <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = $context["row"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["col_default"] ?? null) : null), "html", null, true);
                    yield "</span>
                              ";
                } else {
                    // line 311
                    yield "                                <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
                    yield "</span>
                              ";
                }
                // line 313
                yield "                              <select name=\"field_default_type[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "]\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_3\" class=\"default_type\">
                                <option value=\"NONE\"";
                // line 314
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["rows_meta"] ?? null), ($context["row_num"] ?? null), [], "array", false, true, false, 314), "DefaultType", [], "array", true, true, false, 314) && ((($_v10 = (($_v11 = ($context["rows_meta"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[($context["row_num"] ?? null)] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["DefaultType"] ?? null) : null) == "NONE"))) ? (" selected") : (""));
                yield ">
                                  ";
                // line 315
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("for default", "None"), "html", null, true);
                yield "
                                </option>
                                <option value=\"USER_DEFINED\"";
                // line 317
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["rows_meta"] ?? null), ($context["row_num"] ?? null), [], "array", false, true, false, 317), "DefaultType", [], "array", true, true, false, 317) && ((($_v12 = (($_v13 = ($context["rows_meta"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[($context["row_num"] ?? null)] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["DefaultType"] ?? null) : null) == "USER_DEFINED"))) ? (" selected") : (""));
                yield ">
                                  ";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("As defined:"), "html", null, true);
                yield "
                                </option>
                                <option value=\"NULL\"";
                // line 320
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["rows_meta"] ?? null), ($context["row_num"] ?? null), [], "array", false, true, false, 320), "DefaultType", [], "array", true, true, false, 320) && ((($_v14 = (($_v15 = ($context["rows_meta"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[($context["row_num"] ?? null)] ?? null) : null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["DefaultType"] ?? null) : null) == "NULL"))) ? (" selected") : (""));
                yield ">
                                  NULL
                                </option>
                                <option value=\"CURRENT_TIMESTAMP\"";
                // line 323
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["rows_meta"] ?? null), ($context["row_num"] ?? null), [], "array", false, true, false, 323), "DefaultType", [], "array", true, true, false, 323) && ((($_v16 = (($_v17 = ($context["rows_meta"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[($context["row_num"] ?? null)] ?? null) : null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["DefaultType"] ?? null) : null) == "CURRENT_TIMESTAMP"))) ? (" selected") : (""));
                yield ">
                                  CURRENT_TIMESTAMP
                                </option>
                              </select>
                              ";
                // line 327
                if ((($context["char_editing"] ?? null) == "textarea")) {
                    // line 328
                    yield "                                <textarea name=\"field_default_value[";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                    yield "]\" cols=\"15\" class=\"textfield default_value\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v18 = ($context["default_values"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[($context["row_num"] ?? null)] ?? null) : null), "html", null, true);
                    yield "</textarea>
                              ";
                } else {
                    // line 330
                    yield "                                <input type=\"text\" name=\"field_default_value[";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                    yield "]\" size=\"12\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v19 = ($context["default_values"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[($context["row_num"] ?? null)] ?? null) : null), "html", null, true);
                    yield "\" class=\"textfield default_value\">
                              ";
                }
                // line 332
                yield "                            </td>
                            <td name=\"collation\" class=\"text-nowrap\">
                                <span>";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v20 = $context["row"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["col_collation"] ?? null) : null), "html", null, true);
                yield "</span>
                                <select lang=\"en\" dir=\"ltr\" name=\"field_collation[";
                // line 335
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "]\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_4\">
                                  <option value=\"\"></option>
                                  ";
                // line 337
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                    // line 338
                    yield "                                    <optgroup label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 338), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 338), "html", null, true);
                    yield "\">
                                      ";
                    // line 339
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 339));
                    foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                        // line 340
                        yield "                                        <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 340), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 340), "html", null, true);
                        yield "\"";
                        // line 341
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 341) == (($_v21 = $context["row"]) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["col_collation"] ?? null) : null))) ? (" selected") : (""));
                        yield ">";
                        // line 342
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 342), "html", null, true);
                        // line 343
                        yield "</option>
                                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 345
                    yield "                                    </optgroup>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 347
                yield "                                </select>
                            </td>
                            <td class=\"text-nowrap\" name=\"col_attribute\">
                                <span>";
                // line 350
                yield (((($tmp = (($_v22 = $context["row"]) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["col_attribute"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v23 = $context["row"]) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["col_attribute"] ?? null) : null), "html", null, true)) : (""));
                yield "</span>
                                ";
                // line 351
                yield from $this->load("columns_definitions/column_attribute.twig", 351)->unwrap()->yield(CoreExtension::toArray(["column_number" =>                 // line 352
($context["row_num"] ?? null), "ci" => 5, "ci_offset" => 0, "extracted_columnspec" => [], "column_meta" => (($_v24 =                 // line 356
$context["row"]) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["col_attribute"] ?? null) : null), "submit_attribute" => false, "attribute_types" =>                 // line 358
($context["attribute_types"] ?? null)]));
                // line 360
                yield "                            </td>
                            <td class=\"text-nowrap\" name=\"col_isNull\">
                                <span>";
                // line 362
                yield (((($tmp = (($_v25 = $context["row"]) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["col_isNull"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
                yield "</span>
                                <input name=\"field_null[";
                // line 363
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "]\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_6\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"";
                // line 364
                yield ((((( !Twig\Extension\CoreExtension::testEmpty((($_v26 = $context["row"]) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["col_isNull"] ?? null) : null)) && ((($_v27 = $context["row"]) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["col_isNull"] ?? null) : null) != "NO")) && ((($_v28 = $context["row"]) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["col_isNull"] ?? null) : null) != "NOT NULL")) && ((($_v29 = $context["row"]) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["col_isNull"] ?? null) : null) != 0))) ? (" checked") : (""));
                yield ">
                            </td>
                            <td class=\"text-nowrap\" name=\"col_extra\">
                              <span>";
                // line 367
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v30 = $context["row"]) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["col_extra"] ?? null) : null), "html", null, true);
                yield "</span>
                              <input name=\"col_extra[";
                // line 368
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "]\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_7\" type=\"checkbox\" value=\"auto_increment\"";
                // line 369
                yield ((( !Twig\Extension\CoreExtension::testEmpty((($_v31 = $context["row"]) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["col_extra"] ?? null) : null)) && ((($_v32 = $context["row"]) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["col_extra"] ?? null) : null) == "auto_increment"))) ? (" checked") : (""));
                yield ">
                            </td>
                        </tr>
                        ";
                // line 372
                $context["row_num"] = (($context["row_num"] ?? null) + 1);
                // line 373
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            yield "                </tbody>
            </table>

            ";
            // line 377
            yield from $this->load("select_all.twig", 377)->unwrap()->yield(CoreExtension::toArray(["form_name" => "tableslistcontainer"]));
            // line 380
            yield "            <button class=\"btn btn-link mult_submit change_central_columns\" type=\"submit\" name=\"edit_central_columns\"
                    value=\"edit central columns\" title=\"";
            // line 381
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit"), "html", null, true);
            yield "\">
                ";
            // line 382
            yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit"));
            yield "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"delete_central_columns\"
                    value=\"remove_from_central_columns\" title=\"";
            // line 385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete"), "html", null, true);
            yield "\">
                ";
            // line 386
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Delete"));
            yield "
            </button>
        </form>
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
        return "database/central_columns/main.twig";
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
        return array (  903 => 386,  899 => 385,  893 => 382,  889 => 381,  886 => 380,  884 => 377,  879 => 374,  873 => 373,  871 => 372,  865 => 369,  860 => 368,  856 => 367,  850 => 364,  845 => 363,  841 => 362,  837 => 360,  835 => 358,  834 => 356,  833 => 352,  832 => 351,  828 => 350,  823 => 347,  816 => 345,  809 => 343,  807 => 342,  804 => 341,  798 => 340,  794 => 339,  787 => 338,  783 => 337,  776 => 335,  772 => 334,  768 => 332,  760 => 330,  752 => 328,  750 => 327,  743 => 323,  737 => 320,  732 => 318,  728 => 317,  723 => 315,  719 => 314,  712 => 313,  706 => 311,  700 => 309,  698 => 308,  691 => 304,  687 => 303,  679 => 302,  675 => 301,  668 => 297,  662 => 296,  658 => 295,  654 => 293,  652 => 291,  651 => 288,  650 => 284,  649 => 283,  645 => 282,  641 => 281,  633 => 278,  629 => 277,  622 => 275,  618 => 274,  614 => 273,  609 => 271,  605 => 270,  598 => 268,  591 => 264,  584 => 263,  582 => 262,  577 => 261,  575 => 260,  566 => 254,  560 => 253,  554 => 250,  548 => 249,  542 => 246,  536 => 245,  530 => 242,  524 => 241,  518 => 238,  512 => 237,  506 => 234,  500 => 233,  494 => 230,  488 => 229,  482 => 226,  476 => 225,  472 => 224,  467 => 222,  463 => 220,  460 => 219,  458 => 218,  449 => 212,  444 => 210,  439 => 209,  437 => 208,  428 => 202,  423 => 200,  419 => 198,  408 => 196,  404 => 195,  399 => 193,  395 => 191,  391 => 189,  387 => 188,  382 => 186,  378 => 185,  374 => 184,  367 => 179,  356 => 171,  350 => 168,  344 => 164,  336 => 159,  332 => 158,  328 => 157,  324 => 156,  321 => 155,  318 => 154,  311 => 150,  307 => 149,  303 => 148,  299 => 147,  296 => 146,  293 => 145,  285 => 140,  281 => 139,  277 => 138,  273 => 137,  270 => 136,  268 => 135,  263 => 132,  257 => 129,  254 => 128,  252 => 127,  241 => 119,  231 => 111,  229 => 109,  228 => 102,  223 => 99,  216 => 97,  209 => 95,  207 => 94,  201 => 93,  197 => 92,  190 => 91,  186 => 90,  180 => 86,  176 => 84,  172 => 82,  170 => 81,  163 => 77,  159 => 76,  151 => 71,  142 => 65,  137 => 62,  135 => 60,  134 => 54,  121 => 44,  114 => 40,  107 => 36,  100 => 32,  93 => 28,  86 => 24,  79 => 20,  72 => 16,  61 => 8,  57 => 7,  53 => 6,  46 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/central_columns/main.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/central_columns/main.twig");
    }
}
