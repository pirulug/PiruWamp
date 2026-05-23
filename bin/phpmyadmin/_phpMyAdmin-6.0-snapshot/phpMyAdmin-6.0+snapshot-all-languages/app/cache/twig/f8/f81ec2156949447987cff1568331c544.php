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

/* table/insert/column_row.twig */
class __TwigTemplate_c53f74612fa474df85a2d03c203aa28e extends Template
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
        yield "<tr class=\"noclick\">
  <td class=\"text-center\">
    ";
        // line 3
        yield ($context["field_title"] ?? null);
        yield "
    <input type=\"hidden\" name=\"fields_name[multi_edit][";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
        yield "][";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 4), "html", null, true);
        yield "]\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "field", [], "any", false, false, false, 4), "html", null, true);
        yield "\">
  </td>

  ";
        // line 7
        if ((($tmp = ($context["show_field_types_in_data_edit_view"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "    <td class=\"text-center";
            yield ((!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 8), ["set", "enum"])) ? (" text-nowrap") : (""));
            yield "\">
      <span class=\"column_type\" dir=\"ltr\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["displayType"] ?? null), "html", null, true);
            yield "</span>
    </td>
  ";
        }
        // line 12
        yield "
  ";
        // line 13
        if ((($tmp = ($context["show_function_fields"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "    ";
            if ((($tmp = ($context["is_column_binary"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "      <td class=\"text-center\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Binary"), "html", null, true);
                yield "</td>
    ";
            } elseif ((CoreExtension::inFilter("enum", CoreExtension::getAttribute($this->env, $this->source,             // line 16
($context["column"] ?? null), "trueType", [], "any", false, false, false, 16)) || CoreExtension::inFilter("set", CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 16)))) {
                // line 17
                yield "      <td class=\"text-center\">--</td>
    ";
            } else {
                // line 19
                yield "      <td>
        <select name=\"funcs[multi_edit][";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 20), "html", null, true);
                yield "]\" onchange=\"return verificationsAfterFieldChange('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 20), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 20), "html", null, true);
                yield "')\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                yield "_1\">
          ";
                // line 21
                yield ($context["function_options"] ?? null);
                yield "
        </select>
      </td>
    ";
            }
            // line 25
            yield "  ";
        }
        // line 26
        yield "
  <td>
    ";
        // line 28
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "isNull", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "      <input type=\"hidden\" name=\"fields_null_prev[multi_edit][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
            yield "][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 29), "html", null, true);
            yield "]\"";
            yield (((($context["real_null_value"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "firstTimestamp", [], "any", false, false, false, 29))) ? (" value=\"on\"") : (""));
            yield ">
      <input type=\"checkbox\" class=\"checkbox_null\" name=\"fields_null[multi_edit][";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
            yield "][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 30), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
            yield "_2\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use the NULL value for this column."), "html", null, true);
            yield "\"";
            yield (((($tmp = ($context["real_null_value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
      <input type=\"hidden\" class=\"nullify_code\" name=\"nullify_code[multi_edit][";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
            yield "][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 31), "html", null, true);
            yield "]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nullify_code"] ?? null), "html", null, true);
            yield "\">
      <input type=\"hidden\" class=\"hashed_field\" name=\"hashed_field[multi_edit][";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
            yield "][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 32), "html", null, true);
            yield "]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 32), "html", null, true);
            yield "\">
      <input type=\"hidden\" class=\"multi_edit\" name=\"multi_edit[multi_edit][";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
            yield "][";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 33), "html", null, true);
            yield "]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("[multi_edit][" . ($context["row_id"] ?? null)) . "]"), "html", null, true);
            yield "\">
    ";
        }
        // line 35
        yield "  </td>

  <td data-type=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
        yield "\" data-decimals=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["decimals"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 39
        yield "    <span class=\"default_value hide\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["special_chars"] ?? null), "html", null, true);
        yield "</span>

    ";
        // line 41
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["transformed_value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "      ";
            yield ($context["transformed_value"] ?? null);
            yield "
    ";
        } else {
            // line 44
            yield "      ";
            if ((($tmp = ($context["is_value_foreign_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 45
                yield "        ";
                yield ($context["backup_field"] ?? null);
                yield "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 46), "html", null, true);
                yield "]\" value=\"foreign\">
        <input type=\"text\" name=\"fields[multi_edit][";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 47), "html", null, true);
                yield "]\" class=\"textfield\" tabindex=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                yield "\" onchange=\"return verificationsAfterFieldChange('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 47), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 47), "html", null, true);
                yield "')\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                yield "_3\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["data"] ?? null), "html", null, true);
                yield "\">
        <a class=\"ajax browse_foreign\" href=\"";
                // line 48
                yield PhpMyAdmin\Url::getFromRoute("/browse-foreigners");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "field" => CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "field", [], "any", false, false, false, 48), "rownumber" => ($context["row_id"] ?? null), "data" => ($context["data"] ?? null)]);
                yield "\">";
                yield PhpMyAdmin\Html\Generator::getIcon("b_browse", \_gettext("Browse foreign values"));
                yield "</a>
      ";
            } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(            // line 49
($context["foreign_dropdown"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 50
                yield "        ";
                yield ($context["backup_field"] ?? null);
                yield "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 51), "html", null, true);
                yield "]\" value=\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "isBinary", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("hex") : ("foreign"));
                yield "\">
        <select name=\"fields[multi_edit][";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 52), "html", null, true);
                yield "]\" class=\"textfield\" tabindex=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                yield "\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                yield "_3\" onchange=\"return verificationsAfterFieldChange('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 52), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 52), "html", null, true);
                yield "')\">
          ";
                // line 53
                yield ($context["foreign_dropdown"] ?? null);
                yield "
        </select>
      ";
            } elseif ((((            // line 55
($context["longtext_double_textarea"] ?? null) && CoreExtension::inFilter("longtext", CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 55))) || CoreExtension::inFilter("json", CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 55))) || CoreExtension::inFilter("text", CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 55)))) {
                // line 56
                yield "        ";
                yield ($context["backup_field"] ?? null);
                yield "
        <textarea name=\"fields[multi_edit][";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 57), "html", null, true);
                yield "]\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                yield "_3\" data-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["data_type"] ?? null), "html", null, true);
                yield "\" dir=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "text_dir", [], "any", false, false, false, 57), "html", null, true);
                yield "\" rows=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["textarea_rows"] ?? null), "html", null, true);
                yield "\" cols=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["textarea_cols"] ?? null), "html", null, true);
                yield "\" tabindex=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                yield "\"";
                // line 58
                yield (((($tmp = ($context["max_length"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((" data-maxlength=\"" . ($context["max_length"] ?? null)) . "\""), "html", null, true)) : (""));
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "isChar", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"charField\"") : (""));
                yield " onchange=\"return verificationsAfterFieldChange('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 58), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 58), "html", null, true);
                yield "')\">";
                // line 60
                yield (((is_string($_v0 = ($context["special_chars"] ?? null)) && is_string($_v1 = "
") && str_starts_with($_v0, $_v1))) ? ("
") : (""));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["special_chars"] ?? null), "html", null, true);
                // line 61
                yield "</textarea>
        ";
                // line 62
                if ((CoreExtension::inFilter("text", CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 62)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["special_chars"] ?? null)) > 32000))) {
                    // line 63
                    yield "          </td>
          <td>
          ";
                    // line 65
                    yield \_gettext("Because of its length,<br> this column might not be editable.");
                    yield "
        ";
                }
                // line 67
                yield "      ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 67) == "enum")) {
                // line 68
                yield "        ";
                yield ($context["backup_field"] ?? null);
                yield "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 69), "html", null, true);
                yield "]\" value=\"enum\">
        ";
                // line 70
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "type", [], "any", false, false, false, 70)) > 20)) {
                    // line 71
                    yield "          <select name=\"fields[multi_edit][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 71), "html", null, true);
                    yield "]\" class=\"textfield\" tabindex=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                    yield "\" id=\"field_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                    yield "_3\" onchange=\"return verificationsAfterFieldChange('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 71), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 71), "html", null, true);
                    yield "')\">
            <option value=\"\"></option>
            ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["enum_values"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["enum_value"]) {
                        // line 74
                        yield "              <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["enum_value"], "html", null, true);
                        yield "\"";
                        yield ((($context["enum_value"] == ($context["enum_selected_value"] ?? null))) ? (" selected") : (""));
                        yield ">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["enum_value"], "html", null, true);
                        yield "</option>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['enum_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    yield "          </select>
        ";
                } else {
                    // line 78
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["enum_values"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["enum_value"]) {
                        // line 79
                        yield "            <input type=\"radio\" name=\"fields[multi_edit][";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                        yield "][";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 79), "html", null, true);
                        yield "]\" value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["enum_value"], "html", null, true);
                        yield "\" class=\"textfield\" tabindex=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                        yield "\" id=\"field_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                        yield "_3_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 79), "html", null, true);
                        yield "\" onchange=\"return verificationsAfterFieldChange('";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 79), "js"), "html", null, true);
                        yield "', '";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "js"), "html", null, true);
                        yield "', '";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 79), "html", null, true);
                        yield "')\"";
                        yield ((($context["enum_value"] == ($context["enum_selected_value"] ?? null))) ? (" checked") : (""));
                        yield ">
            <label for=\"field_";
                        // line 80
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                        yield "_3_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 80), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["enum_value"], "html", null, true);
                        yield "</label>
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
                    unset($context['_seq'], $context['_key'], $context['enum_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    yield "        ";
                }
                // line 83
                yield "      ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 83) == "set")) {
                // line 84
                yield "        ";
                yield ($context["backup_field"] ?? null);
                yield "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 85), "html", null, true);
                yield "]\" value=\"set\">
        <select name=\"fields[multi_edit][";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 86), "html", null, true);
                yield "][]\" class=\"textfield\" tabindex=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                yield "\" size=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["set_select_size"] ?? null), "html", null, true);
                yield "\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                yield "_3\" onchange=\"return verificationsAfterFieldChange('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 86), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 86), "html", null, true);
                yield "')\" multiple>
          ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["set_values"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["set_value"]) {
                    // line 88
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["set_value"], "html", null, true);
                    yield "\"";
                    yield ((CoreExtension::inFilter($context["set_value"], Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["data"] ?? null), ","))) ? (" selected") : (""));
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["set_value"], "html", null, true);
                    yield "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['set_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                yield "        </select>
      ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 91
($context["column"] ?? null), "isBinary", [], "any", false, false, false, 91) || CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "isBlob", [], "any", false, false, false, 91))) {
                // line 92
                yield "        ";
                if ((($tmp = ($context["is_column_protected_blob"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 93
                    yield "          ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Binary - do not edit"), "html", null, true);
                    yield "
          (";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["blob_value"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["blob_value_unit"] ?? null), "html", null, true);
                    yield ")
          <input type=\"hidden\" name=\"fields[multi_edit][";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 95), "html", null, true);
                    yield "]\" value=\"\">
          <input type=\"hidden\" name=\"fields_type[multi_edit][";
                    // line 96
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 96), "html", null, true);
                    yield "]\" value=\"protected\">
        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 97
($context["column"] ?? null), "isBlob", [], "any", false, false, false, 97) || (CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "length", [], "any", false, false, false, 97) > ($context["limit_chars"] ?? null)))) {
                    // line 98
                    yield "          ";
                    yield ($context["backup_field"] ?? null);
                    yield "
          <input type=\"hidden\" name=\"fields_type[multi_edit][";
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 99), "html", null, true);
                    yield "]\" value=\"hex\">
          <textarea name=\"fields[multi_edit][";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 100), "html", null, true);
                    yield "]\" id=\"field_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                    yield "_3\" data-type=\"HEX\" dir=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "text_dir", [], "any", false, false, false, 100), "html", null, true);
                    yield "\" rows=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["textarea_rows"] ?? null), "html", null, true);
                    yield "\" cols=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["textarea_cols"] ?? null), "html", null, true);
                    yield "\" tabindex=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                    yield "\"";
                    // line 101
                    yield (((($tmp = ($context["max_length"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((" data-maxlength=\"" . ($context["max_length"] ?? null)) . "\""), "html", null, true)) : (""));
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "isChar", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"charField\"") : (""));
                    yield " onchange=\"return verificationsAfterFieldChange('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 101), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 101), "html", null, true);
                    yield "')\">";
                    // line 103
                    yield (((is_string($_v2 = ($context["special_chars"] ?? null)) && is_string($_v3 = "
") && str_starts_with($_v2, $_v3))) ? ("
") : (""));
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["special_chars"] ?? null), "html", null, true);
                    // line 104
                    yield "</textarea>
        ";
                } else {
                    // line 106
                    yield "          ";
                    yield ($context["backup_field"] ?? null);
                    yield "
          <input type=\"hidden\" name=\"fields_type[multi_edit][";
                    // line 107
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 107), "html", null, true);
                    yield "]\" value=\"hex\">
          <input type=\"text\" name=\"fields[multi_edit][";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 108), "html", null, true);
                    yield "]\"
            value=\"";
                    // line 109
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["special_chars"] ?? null), "html", null, true);
                    yield "\" size=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hex_input_size"] ?? null), "html", null, true);
                    yield "\" data-type=\"HEX\" class=\"textfield\"
            onchange=\"return verificationsAfterFieldChange('";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 110), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 110), "html", null, true);
                    yield "')\"
            id=\"field_";
                    // line 111
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                    yield "_3\">
        ";
                }
                // line 113
                yield "        ";
                if ((($context["is_upload"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "isBlob", [], "any", false, false, false, 113))) {
                    // line 114
                    yield "          <br>
          ";
                    // line 116
                    yield "          <input type=\"file\" name=\"fields_upload[multi_edit][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                    yield "][";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 116), "html", null, true);
                    yield "]\" class=\"textfield noDragDrop\" id=\"field_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_index"] ?? null), "html", null, true);
                    yield "_3\" size=\"10\" onchange=\"return verificationsAfterFieldChange('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 116), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 116), "html", null, true);
                    yield "')\">
          ";
                    // line 117
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["max_upload_size"] ?? null), "html", null, true);
                    yield "
        ";
                }
                // line 119
                yield "        ";
                yield ($context["select_option_for_upload"] ?? null);
                yield "
      ";
            } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,             // line 120
($context["column"] ?? null), "trueType", [], "any", false, false, false, 120), ($context["gis_data_types"] ?? null))) {
                // line 121
                yield "        ";
                yield ($context["value"] ?? null);
                yield "
        <button type=\"button\" class=\"btn btn-link open_gis_editor\" data-bs-toggle=\"modal\" data-bs-target=\"#gisEditorModal\" data-row-id=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                yield "\">
          ";
                // line 123
                yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit/Insert"));
                yield "
        </button>
      ";
            } else {
                // line 126
                yield "        ";
                yield ($context["value"] ?? null);
                yield "
      ";
            }
            // line 128
            yield "    ";
        }
        // line 129
        yield "  </td>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/insert/column_row.twig";
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
        return array (  663 => 129,  660 => 128,  654 => 126,  648 => 123,  644 => 122,  639 => 121,  637 => 120,  632 => 119,  627 => 117,  612 => 116,  609 => 114,  606 => 113,  601 => 111,  593 => 110,  587 => 109,  581 => 108,  575 => 107,  570 => 106,  566 => 104,  561 => 103,  551 => 101,  536 => 100,  530 => 99,  525 => 98,  523 => 97,  517 => 96,  511 => 95,  505 => 94,  500 => 93,  497 => 92,  495 => 91,  492 => 90,  479 => 88,  475 => 87,  457 => 86,  451 => 85,  446 => 84,  443 => 83,  440 => 82,  420 => 80,  397 => 79,  379 => 78,  375 => 76,  362 => 74,  358 => 73,  340 => 71,  338 => 70,  332 => 69,  327 => 68,  324 => 67,  319 => 65,  315 => 63,  313 => 62,  310 => 61,  305 => 60,  295 => 58,  278 => 57,  273 => 56,  271 => 55,  266 => 53,  250 => 52,  242 => 51,  237 => 50,  235 => 49,  227 => 48,  209 => 47,  203 => 46,  198 => 45,  195 => 44,  189 => 42,  187 => 41,  181 => 39,  175 => 37,  171 => 35,  162 => 33,  154 => 32,  146 => 31,  134 => 30,  125 => 29,  123 => 28,  119 => 26,  116 => 25,  109 => 21,  95 => 20,  92 => 19,  88 => 17,  86 => 16,  81 => 15,  78 => 14,  76 => 13,  73 => 12,  67 => 9,  62 => 8,  60 => 7,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/insert/column_row.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/column_row.twig");
    }
}
