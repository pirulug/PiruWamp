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

/* table/index_form.twig */
class __TwigTemplate_59aa08d6bf0dc35d0bddc6076d6a399c extends Template
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
        yield "<form action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/table/indexes");
        yield "\"
    method=\"post\"
    name=\"index_frm\"
    id=\"index_frm\"
    class=\"card ajax\">

    ";
        // line 7
        yield PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null));
        yield "
    ";
        // line 8
        if ((($tmp = ($context["is_from_nav"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "      <input type=\"hidden\" name=\"do_save_data\" value=\"1\">
    ";
        }
        // line 11
        yield "
    <div class=\"card-body\">
        <div class=\"index_info\">
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_name\">
                            ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index name:"), "html", null, true);
        yield "
                            ";
        // line 19
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!"));
        yield "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_name]\"
                    id=\"input_index_name\"
                    size=\"25\"
                    maxlength=\"64\"
                    value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getName", [], "method", false, false, false, 29), "html", null, true);
        yield "\"
                    onfocus=\"this.select()\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_choice\">
                            ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index choice:"), "html", null, true);
        yield "
                            ";
        // line 38
        yield PhpMyAdmin\Html\MySQLDocumentation::show("ALTER_TABLE");
        yield "
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_choice]\" id=\"select_index_choice\"";
        // line 43
        yield (((($tmp = ($context["create_edit_table"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" disabled") : (""));
        yield ">
                ";
        // line 44
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 44) == "PRIMARY") ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "hasPrimary", [], "method", false, false, false, 44))) {
            // line 45
            yield "                  <option value=\"PRIMARY\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 45) == "PRIMARY")) ? (" selected") : (""));
            yield ">PRIMARY</option>
                ";
        }
        // line 47
        yield "                <option value=\"INDEX\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 47) == "INDEX")) ? (" selected") : (""));
        yield ">INDEX</option>
                <option value=\"UNIQUE\"";
        // line 48
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 48) == "UNIQUE")) ? (" selected") : (""));
        yield ">UNIQUE</option>
                <option value=\"SPATIAL\"";
        // line 49
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 49) == "SPATIAL")) ? (" selected") : (""));
        yield ">SPATIAL</option>
                <option value=\"FULLTEXT\"";
        // line 50
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 50) == "FULLTEXT")) ? (" selected") : (""));
        yield ">FULLTEXT</option>
              </select>
            </div>

            ";
        // line 54
        if ((($context["default_sliders_state"] ?? null) != "disabled")) {
            // line 55
            yield "            <div class=\"mb-3\">
              <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#advancedOptions\" aria-expanded=\"";
            // line 56
            yield (((($context["default_sliders_state"] ?? null) == "open")) ? ("true") : ("false"));
            yield "\" aria-controls=\"advancedOptions\">
                ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Advanced options"), "html", null, true);
            yield "
              </button>
            </div>
            <div class=\"collapse mb-3";
            // line 60
            yield (((($context["default_sliders_state"] ?? null) == "open")) ? (" show") : (""));
            yield "\" id=\"advancedOptions\">
            ";
        }
        // line 62
        yield "
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_key_block_size\">
                            ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Key block size:"), "html", null, true);
        yield "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_block_size]\"
                    id=\"input_key_block_size\"
                    size=\"30\"
                    value=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getKeyBlockSize", [], "method", false, false, false, 76), "html", null, true);
        yield "\">
            </div>

            <div>

                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_type\">
                            ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index type:"), "html", null, true);
        yield "
                            ";
        // line 85
        yield PhpMyAdmin\Html\MySQLDocumentation::show("ALTER_TABLE");
        yield "
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_type]\" id=\"select_index_type\">
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["", "BTREE", "HASH"]);
        foreach ($context['_seq'] as $context["_key"] => $context["index_type"]) {
            // line 92
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index_type"], "html", null, true);
            yield "\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getType", [], "method", false, false, false, 92) == $context["index_type"])) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index_type"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['index_type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "              </select>
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_parser\">
                            ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Parser:"), "html", null, true);
        yield "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Parser]\"
                    id=\"input_parse\"
                    size=\"30\"
                    value=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getParser", [], "method", false, false, false, 110), "html", null, true);
        yield "\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_comment\">
                            ";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comment:"), "html", null, true);
        yield "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Index_comment]\"
                    id=\"input_index_comment\"
                    size=\"30\"
                    maxlength=\"1024\"
                    value=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getComment", [], "method", false, false, false, 127), "html", null, true);
        yield "\">
            </div>

            ";
        // line 130
        if ((($context["default_sliders_state"] ?? null) != "disabled")) {
            // line 131
            yield "            </div>
            ";
        }
        // line 133
        yield "
        <div class=\"clearfloat\"></div>

        <table class=\"table align-middle\" id=\"index_columns\">
            <thead>
                <tr>
                    <th></th>
                    <th>
                        ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
        yield "
                    </th>
                    <th>
                        ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Size"), "html", null, true);
        yield "
                    </th>
                    <th>
                        ";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "
                    </th>
                </tr>
            </thead>
            ";
        // line 151
        $context["spatial_types"] = ["geometry", "point", "linestring", "polygon", "multipoint", "multilinestring", "multipolygon", "geomtrycollection"];
        // line 161
        yield "            <tbody>
                ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getColumns", [], "method", false, false, false, 162));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 163
            yield "                    <tr class=\"noclick\">
                        <td>
                            <span class=\"drag_icon\" title=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Drag to reorder"), "html", null, true);
            yield "\"></span>
                        </td>
                        <td>
                            <select name=\"index[columns][names][]\">
                                <option value=\"\">
                                    -- ";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Ignore"), "html", null, true);
            yield " --
                                </option>
                                ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                // line 173
                yield "                                    ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 173) != "FULLTEXT") || CoreExtension::matches("/(char|text)/i",                 // line 174
$context["field_type"])) && ((CoreExtension::getAttribute($this->env, $this->source,                 // line 175
($context["index"] ?? null), "getChoice", [], "method", false, false, false, 175) != "SPATIAL") || CoreExtension::inFilter(                // line 176
$context["field_type"], ($context["spatial_types"] ?? null))))) {
                    // line 177
                    yield "
                                        <option value=\"";
                    // line 178
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                    yield "\"";
                    // line 179
                    if (($context["field_name"] == CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 179))) {
                        // line 180
                        yield "                                                selected";
                    }
                    // line 181
                    yield ">
                                            ";
                    // line 182
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                    yield " [";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_type"], "html", null, true);
                    yield "]
                                        </option>
                                    ";
                }
                // line 185
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['field_name'], $context['field_type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            yield "                            </select>
                        </td>
                        <td>
                            <input type=\"text\"
                                size=\"5\"
                                onfocus=\"this.select()\"
                                name=\"index[columns][sub_parts][]\"
                                value=\"";
            // line 193
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 193) != "SPATIAL")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 194
$context["column"], "getSubPart", [], "method", false, false, false, 194), "html", null, true)) : (""));
            yield "\">
                        </td>
                        <td>
                            <select name=\"index[columns][collations][]\">
                                <option value=\"\"";
            // line 198
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "Collation", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "</option>
                                <option value=\"A\"";
            // line 199
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "Collation", [], "any", false, false, false, 199) == "A")) ? (" selected") : (""));
            yield " title=\"ASC\">A</option>
                                <option value=\"D\"";
            // line 200
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "Collation", [], "any", false, false, false, 200) == "D")) ? (" selected") : (""));
            yield " title=\"DESC\">D</option>
                            </select>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        yield "                ";
        if ((($context["add_fields"] ?? null) > 0)) {
            // line 206
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["add_fields"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 207
                yield "                        <tr class=\"noclick\">
                            <td>
                                <span class=\"drag_icon\" title=\"";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Drag to reorder"), "html", null, true);
                yield "\"></span>
                            </td>
                            <td>
                                <select name=\"index[columns][names][]\">
                                    <option value=\"\">-- ";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Ignore"), "html", null, true);
                yield " --</option>
                                    ";
                // line 214
                $context["j"] = 0;
                // line 215
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
                foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                    // line 216
                    yield "                                        ";
                    if ((($tmp = ($context["create_edit_table"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 217
                        yield "                                            ";
                        $context["col_index"] = (($_v0 = $context["field_type"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[1] ?? null) : null);
                        // line 218
                        yield "                                            ";
                        $context["field_type"] = (($_v1 = $context["field_type"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null);
                        // line 219
                        yield "                                        ";
                    }
                    // line 220
                    yield "                                        ";
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 221
                    yield "                                        <option value=\"";
                    yield ((array_key_exists("col_index", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(                    // line 222
($context["col_index"] ?? null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true)));
                    yield "\"";
                    // line 223
                    yield (((($context["j"] ?? null) == $context["i"])) ? (" selected") : (""));
                    yield ">
                                            ";
                    // line 224
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                    yield " [";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_type"], "html", null, true);
                    yield "]
                                        </option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['field_name'], $context['field_type'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                yield "                                </select>
                            </td>
                            <td>
                                <input type=\"text\"
                                    size=\"5\"
                                    onfocus=\"this.select()\"
                                    name=\"index[columns][sub_parts][]\"
                                    value=\"\">
                            </td>
                            <td>
                                <select name=\"index[columns][collations][]\">
                                    <option value=\"\" selected>";
                // line 238
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
                yield "</option>
                                    <option value=\"A\" title=\"ASC\">A</option>
                                    <option value=\"D\" title=\"DESC\">D</option>
                                </select>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            yield "                ";
        }
        // line 246
        yield "            </tbody>
        </table>
        <div class=\"add_more\">

            <div class=\"slider\"></div>
            <div class=\"add_fields hide\">
                <input class=\"btn btn-secondary\" type=\"submit\"
                    id=\"add_fields\"
                    value=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Add %s column(s) to index"), 1), "html", null, true);
        yield "\">
            </div>
        </div>
        </div>
    </div>
    ";
        // line 260
        if ((($tmp =  !($context["create_edit_table"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 261
            yield "<div class=\"card-footer\">
        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "</button>
        <button class=\"btn btn-secondary\" type=\"submit\" id=\"preview_index_frm\">";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Preview SQL"), "html", null, true);
            yield "</button>
    </div>";
        }
        // line 266
        yield "</form>
";
        // line 267
        if ((($tmp = ($context["is_from_nav"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 268
            yield "  ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/preview_sql_modal.twig");
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/index_form.twig";
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
        return array (  541 => 268,  539 => 267,  536 => 266,  531 => 263,  527 => 262,  524 => 261,  522 => 260,  514 => 254,  504 => 246,  501 => 245,  488 => 238,  475 => 227,  464 => 224,  460 => 223,  457 => 222,  455 => 221,  452 => 220,  449 => 219,  446 => 218,  443 => 217,  440 => 216,  435 => 215,  433 => 214,  429 => 213,  422 => 209,  418 => 207,  413 => 206,  410 => 205,  399 => 200,  395 => 199,  389 => 198,  382 => 194,  381 => 193,  372 => 186,  366 => 185,  358 => 182,  355 => 181,  352 => 180,  350 => 179,  347 => 178,  344 => 177,  342 => 176,  341 => 175,  340 => 174,  338 => 173,  334 => 172,  329 => 170,  321 => 165,  317 => 163,  313 => 162,  310 => 161,  308 => 151,  301 => 147,  295 => 144,  289 => 141,  279 => 133,  275 => 131,  273 => 130,  267 => 127,  254 => 117,  244 => 110,  232 => 101,  223 => 94,  210 => 92,  206 => 91,  197 => 85,  193 => 84,  182 => 76,  170 => 67,  163 => 62,  158 => 60,  152 => 57,  148 => 56,  145 => 55,  143 => 54,  136 => 50,  132 => 49,  128 => 48,  123 => 47,  117 => 45,  115 => 44,  111 => 43,  103 => 38,  99 => 37,  88 => 29,  75 => 19,  71 => 18,  62 => 11,  58 => 9,  56 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/index_form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/index_form.twig");
    }
}
