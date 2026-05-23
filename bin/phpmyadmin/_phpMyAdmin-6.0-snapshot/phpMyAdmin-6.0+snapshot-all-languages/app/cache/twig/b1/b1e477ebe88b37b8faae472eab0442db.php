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

/* columns_definitions/column_attributes.twig */
class __TwigTemplate_41a9e78f49ce325fd263b0f2111a8cc7 extends Template
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
        $context["ci"] = 0;
        // line 3
        yield "
";
        // line 6
        $context["ci_offset"] =  -1;
        // line 7
        yield "
<td class=\"text-center\">
    ";
        // line 10
        yield "    ";
        yield from $this->load("columns_definitions/column_name.twig", 10)->unwrap()->yield(CoreExtension::toArray(["column_number" =>         // line 11
($context["column_number"] ?? null), "ci" =>         // line 12
($context["ci"] ?? null), "ci_offset" =>         // line 13
($context["ci_offset"] ?? null), "column_meta" =>         // line 14
($context["column_meta"] ?? null), "has_central_columns_feature" =>  !(null === CoreExtension::getAttribute($this->env, $this->source,         // line 15
($context["relation_parameters"] ?? null), "centralColumnsFeature", [], "any", false, false, false, 15)), "max_rows" =>         // line 16
($context["max_rows"] ?? null)]));
        // line 18
        yield "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 19
        yield "</td>
<td class=\"text-center\">
  <select class=\"column_type form-select\" name=\"field_type[";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\"";
        // line 22
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 22) &&  !(($_v0 = (($_v1 = ($context["column_meta"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["column_status"] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["isEditable"] ?? null) : null))) ? (" disabled") : (""));
        yield ">
    ";
        // line 23
        yield PhpMyAdmin\Html\Generator::getSupportedDatatypes(($context["type_upper"] ?? null));
        yield "
  </select>
  ";
        // line 25
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 26
        yield "</td>
<td class=\"text-center\">
  <input id=\"field_";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\" type=\"text\" name=\"field_length[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" size=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["length_values_input_size"] ?? null), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["length"] ?? null), "html", null, true);
        yield "\" class=\"textfield form-control\">
  <p class=\"enum_notice\" id=\"enum_notice_";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\">
    <a href=\"#\" class=\"open_enum_editor\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit ENUM/SET values"), "html", null, true);
        yield "</a>
  </p>
  ";
        // line 33
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 34
        yield "</td>
<td class=\"text-center\">
  <select name=\"field_default_type[";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\" class=\"default_type form-select\">
    <option value=\"NONE\"";
        // line 37
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 37) && ((($_v2 = ($context["column_meta"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["DefaultType"] ?? null) : null) == "NONE"))) ? (" selected") : (""));
        yield ">
      ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("for default", "None"), "html", null, true);
        yield "
    </option>
    <option value=\"USER_DEFINED\"";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 40) && ((($_v3 = ($context["column_meta"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["DefaultType"] ?? null) : null) == "USER_DEFINED"))) ? (" selected") : (""));
        yield ">
      ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("As defined:"), "html", null, true);
        yield "
    </option>
    <option value=\"NULL\"";
        // line 43
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 43) && ((($_v4 = ($context["column_meta"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["DefaultType"] ?? null) : null) == "NULL"))) ? (" selected") : (""));
        yield ">
      NULL
    </option>
    <option value=\"CURRENT_TIMESTAMP\"";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 46) && ((($_v5 = ($context["column_meta"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["DefaultType"] ?? null) : null) == "CURRENT_TIMESTAMP"))) ? (" selected") : (""));
        yield ">
      CURRENT_TIMESTAMP
    </option>
    ";
        // line 49
        if ((($tmp = PhpMyAdmin\Util::isUUIDSupported()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "    <option value=\"UUID\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 50) && ((($_v6 = ($context["column_meta"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["DefaultType"] ?? null) : null) == "UUID"))) ? (" selected") : (""));
            yield ">
      UUID
    </option>
    ";
        }
        // line 54
        yield "  </select>
  ";
        // line 55
        if ((($context["char_editing"] ?? null) == "textarea")) {
            // line 56
            yield "    <textarea name=\"field_default_value[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" cols=\"15\" class=\"textfield default_value form-control\" style=\"resize: both;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["default_value"] ?? null), "html", null, true);
            yield "</textarea>
  ";
        } else {
            // line 58
            yield "    <input type=\"text\" name=\"field_default_value[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" size=\"12\" value=\"";
            yield (((array_key_exists("default_value", $context) &&  !(null === $context["default_value"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["default_value"], "html", null, true)) : (""));
            yield "\" class=\"textfield default_value form-control\">
  ";
        }
        // line 60
        yield "  ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 61
        yield "</td>
<td class=\"text-center\">
  ";
        // line 64
        yield "  <select lang=\"en\" dir=\"ltr\" name=\"field_collation[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\" class=\"form-select collation-select\"";
        // line 65
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Collation", [], "array", true, true, false, 65)) ? ((("data-selected=\"" . (($_v7 = ($context["column_meta"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["Collation"] ?? null) : null)) . "\"")) : (""));
        yield "></select>
  ";
        // line 66
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 67
        yield "</td>
<td class=\"text-center\">
    ";
        // line 70
        yield "    ";
        yield from $this->load("columns_definitions/column_attribute.twig", 70)->unwrap()->yield(CoreExtension::toArray(["column_number" =>         // line 71
($context["column_number"] ?? null), "ci" =>         // line 72
($context["ci"] ?? null), "ci_offset" =>         // line 73
($context["ci_offset"] ?? null), "column_meta" =>         // line 74
($context["column_meta"] ?? null), "extracted_columnspec" =>         // line 75
($context["extracted_columnspec"] ?? null), "submit_attribute" =>         // line 76
($context["submit_attribute"] ?? null), "attribute_types" =>         // line 77
($context["attribute_types"] ?? null)]));
        // line 79
        yield "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 80
        yield "</td>
<td class=\"text-center\">
    <input name=\"field_null[";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\" type=\"checkbox\" value=\"YES\" class=\"allow_null form-check-input\"";
        // line 83
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Null", [], "array", true, true, false, 83) &&  !Twig\Extension\CoreExtension::testEmpty((($_v8 = ($context["column_meta"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["Null"] ?? null) : null))) && ((($_v9 = ($context["column_meta"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["Null"] ?? null) : null) != "NO")) && ((($_v10 = ($context["column_meta"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["Null"] ?? null) : null) != "NOT NULL"))) ? (" checked") : (""));
        yield ">
    ";
        // line 84
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 85
        yield "</td>
";
        // line 86
        if ((array_key_exists("change_column", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["change_column"] ?? null)))) {
            // line 87
            yield "    ";
            // line 88
            yield "    <td class=\"text-center\">
      <input name=\"field_adjust_privileges[";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" type=\"checkbox\" value=\"NULL\" class=\"allow_null form-check-input\"";
            // line 90
            if ((($tmp = ($context["privs_available"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked>";
            } else {
                // line 91
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details"), "html", null, true);
                yield "\" disabled>";
            }
            // line 93
            yield "      ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 94
            yield "    </td>
";
        }
        // line 96
        if ((($tmp =  !($context["is_backup"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "    ";
            // line 98
            yield "    <td class=\"text-center\">
      <select name=\"field_key[";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" class=\"form-select\" data-index=\"\">
        <option value=\"none_";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "\">---</option>
        <option value=\"primary_";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Primary"), "html", null, true);
            yield "\"";
            // line 102
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 102) && ((($_v11 = ($context["column_meta"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["Key"] ?? null) : null) == "PRI"))) ? (" selected") : (""));
            yield ">
          PRIMARY
        </option>
        <option value=\"unique_";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Unique"), "html", null, true);
            yield "\"";
            // line 106
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 106) && ((($_v12 = ($context["column_meta"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["Key"] ?? null) : null) == "UNI"))) ? (" selected") : (""));
            yield ">
          UNIQUE
        </option>
        <option value=\"index_";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index"), "html", null, true);
            yield "\"";
            // line 110
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 110) && ((($_v13 = ($context["column_meta"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["Key"] ?? null) : null) == "MUL"))) ? (" selected") : (""));
            yield ">
          INDEX
        </option>
        <option value=\"fulltext_";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Fulltext"), "html", null, true);
            yield "\"";
            // line 114
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 114) && ((($_v14 = ($context["column_meta"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["Key"] ?? null) : null) == "FULLTEXT"))) ? (" selected") : (""));
            yield ">
          FULLTEXT
        </option>
        <option value=\"spatial_";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Spatial"), "html", null, true);
            yield "\"";
            // line 118
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 118) && ((($_v15 = ($context["column_meta"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["Key"] ?? null) : null) == "SPATIAL"))) ? (" selected") : (""));
            yield ">
          SPATIAL
        </option>
      </select>
      ";
            // line 122
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 123
            yield "    </td>
";
        }
        // line 125
        yield "<td class=\"text-center\">
  <input name=\"field_extra[";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\" type=\"checkbox\" value=\"AUTO_INCREMENT\" class=\"form-check-input\"";
        // line 127
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 127) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), (($_v16 = ($context["column_meta"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["Extra"] ?? null) : null)) == "auto_increment"))) ? (" checked") : (""));
        yield ">
  ";
        // line 128
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 129
        yield "</td>
<td class=\"text-center\">
  <textarea id=\"field_";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\" rows=\"1\" name=\"field_comments[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" maxlength=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["max_length"] ?? null), "html", null, true);
        yield "\" class=\"form-control\" style=\"resize: both;\">";
        // line 132
        yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 132) && is_iterable(($context["comments_map"] ?? null))) && CoreExtension::getAttribute($this->env, $this->source, ($context["comments_map"] ?? null), (($_v17 = ($context["column_meta"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["Field"] ?? null) : null), [], "array", true, true, false, 132))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v18 = ($context["comments_map"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[(($_v19 = ($context["column_meta"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["Field"] ?? null) : null)] ?? null) : null), "html", null, true)) : (""));
        // line 133
        yield "</textarea>
  ";
        // line 134
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 135
        yield "</td>
 ";
        // line 137
        if ((($tmp = ($context["is_virtual_columns_supported"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 138
            yield "    <td class=\"text-center\">
      <select name=\"field_virtuality[";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" class=\"virtuality form-select\">
        ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 141
                yield "          ";
                $context["virtuality"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 141)) ? ((($_v20 = ($context["column_meta"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["Extra"] ?? null) : null)) : (null));
                // line 142
                yield "          ";
                // line 143
                yield "          ";
                $context["virtuality"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Virtuality", [], "array", true, true, false, 143)) ? ((($_v21 = ($context["column_meta"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["Virtuality"] ?? null) : null)) : (($context["virtuality"] ?? null)));
                // line 144
                yield "
          <option value=\"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                yield (((( !(null === ($context["virtuality"] ?? null)) && ($context["key"] != "")) && (Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["virtuality"] ?? null), 0, Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["key"])) === $context["key"]))) ? (" selected") : (""));
                yield ">
            ";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            yield "      </select>

      ";
            // line 151
            if ((($context["char_editing"] ?? null) == "textarea")) {
                // line 152
                yield "        <textarea name=\"field_expression[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
                yield "]\" cols=\"15\" class=\"textfield expression form-control\" style=\"resize: both;\">";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Expression", [], "array", true, true, false, 152)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v22 = ($context["column_meta"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["Expression"] ?? null) : null), "html", null, true)) : (""));
                yield "</textarea>
      ";
            } else {
                // line 154
                yield "        <input type=\"text\" name=\"field_expression[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
                yield "]\" size=\"12\" value=\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Expression", [], "array", true, true, false, 154)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v23 = ($context["column_meta"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["Expression"] ?? null) : null), "html", null, true)) : (""));
                yield "\" placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Expression"), "html", null, true);
                yield "\" class=\"textfield expression form-control\">
      ";
            }
            // line 156
            yield "      ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 157
            yield "    </td>
";
        }
        // line 160
        if (array_key_exists("fields_meta", $context)) {
            // line 161
            yield "    ";
            $context["current_index"] = 0;
            // line 162
            yield "    ";
            $context["break"] = false;
            // line 163
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["move_columns"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["move_column"]) {
                // line 164
                yield "      ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 164) == (($_v24 = ($context["column_meta"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["Field"] ?? null) : null)) &&  !($context["break"] ?? null))) {
                    // line 165
                    yield "        ";
                    $context["current_index"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 165);
                    // line 166
                    yield "        ";
                    $context["break"] = true;
                    // line 167
                    yield "      ";
                }
                // line 168
                yield "    ";
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
            unset($context['_seq'], $context['_key'], $context['move_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            yield "
    <td class=\"text-center\">
      <select id=\"field_";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" name=\"field_move_to[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" size=\"1\" class=\"form-select\">
        <option value=\"\" selected>&nbsp;</option>
        <option value=\"-first\"";
            // line 173
            yield (((($context["current_index"] ?? null) == 0)) ? (" disabled") : (""));
            yield ">
          ";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("first"), "html", null, true);
            yield "
        </option>
        ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["move_columns"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["move_column"]) {
                // line 177
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 177), "html", null, true);
                yield "\"";
                // line 178
                yield ((((($context["current_index"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 178)) || (($context["current_index"] ?? null) == (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 178) + 1)))) ? (" disabled") : (""));
                yield ">
            ";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("after %s"), PhpMyAdmin\Util::backquote($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 179)))), "html", null, true);
                yield "
          </option>
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
            unset($context['_seq'], $context['_key'], $context['move_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            yield "      </select>
      ";
            // line 183
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 184
            yield "    </td>
";
        }
        // line 186
        yield "
";
        // line 187
        if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "browserTransformationFeature", [], "any", false, false, false, 187)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "columnCommentsFeature", [], "any", false, false, false, 187))) && ($context["browse_mime"] ?? null))) {
            // line 188
            yield "    <td class=\"text-center\">
      <select id=\"field_";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" size=\"1\" name=\"field_mimetype[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" class=\"form-select\">
        <option value=\"\">&nbsp;</option>
        ";
            // line 191
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["available_mime"] ?? null), "mimetype", [], "array", true, true, false, 191) && is_iterable((($_v25 = ($context["available_mime"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["mimetype"] ?? null) : null)))) {
                // line 192
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v26 = ($context["available_mime"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["mimetype"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["media_type"]) {
                    // line 193
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["media_type"], ["/" => "_"]), "html", null, true);
                    yield "\"";
                    // line 194
                    yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 194) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), (($_v27 = ($context["column_meta"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["Field"] ?? null) : null), [], "array", false, true, false, 194), "mimetype", [], "array", true, true, false, 194)) && ((($_v28 = (($_v29 =                     // line 195
($context["mime_map"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[(($_v30 = ($context["column_meta"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["Field"] ?? null) : null)] ?? null) : null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["mimetype"] ?? null) : null) == Twig\Extension\CoreExtension::replace($context["media_type"], ["/" => "_"])))) ? (" selected") : (""));
                    yield ">
              ";
                    // line 196
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["media_type"]), "html", null, true);
                    yield "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['media_type'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 199
                yield "        ";
            }
            // line 200
            yield "      </select>
      ";
            // line 201
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 202
            yield "    </td>
    <td class=\"text-center\">
      <select id=\"field_";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" size=\"1\" name=\"field_transformation[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" class=\"form-select\">
        <option value=\"\" title=\"";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "\"></option>
        ";
            // line 206
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["available_mime"] ?? null), "transformation", [], "array", true, true, false, 206) && is_iterable((($_v31 = ($context["available_mime"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["transformation"] ?? null) : null)))) {
                // line 207
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v32 = ($context["available_mime"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["transformation"] ?? null) : null));
                foreach ($context['_seq'] as $context["mimekey"] => $context["transform"]) {
                    // line 208
                    yield "            ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["transform"], ":");
                    // line 209
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v33 = (($_v34 = ($context["available_mime"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["transformation_file"] ?? null) : null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[$context["mimekey"]] ?? null) : null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Transformations')->getDescription((($_v35 = (($_v36 = ($context["available_mime"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["transformation_file"] ?? null) : null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[$context["mimekey"]] ?? null) : null)), "html", null, true);
                    yield "\"";
                    // line 210
                    yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 210) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 211
($context["mime_map"] ?? null), (($_v37 = ($context["column_meta"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["Field"] ?? null) : null), [], "array", false, true, false, 211), "transformation", [], "array", true, true, false, 211)) &&  !(null === (($_v38 = (($_v39 =                     // line 212
($context["mime_map"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[(($_v40 = ($context["column_meta"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["Field"] ?? null) : null)] ?? null) : null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["transformation"] ?? null) : null))) && CoreExtension::matches((("@" . (($_v41 = (($_v42 =                     // line 213
($context["available_mime"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42["transformation_file_quoted"] ?? null) : null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[$context["mimekey"]] ?? null) : null)) . "3?@i"), (($_v43 = (($_v44 = ($context["mime_map"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[(($_v45 = ($context["column_meta"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45["Field"] ?? null) : null)] ?? null) : null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["transformation"] ?? null) : null)))) ? (" selected") : (""));
                    yield ">
              ";
                    // line 214
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((($this->env->getRuntime('PhpMyAdmin\Transformations')->getName((($_v46 = (($_v47 = ($context["available_mime"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47["transformation_file"] ?? null) : null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46[$context["mimekey"]] ?? null) : null)) . " (") . Twig\Extension\CoreExtension::lower($this->env->getCharset(), (($_v48 = ($context["parts"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48[0] ?? null) : null))) . ":") . (($_v49 = ($context["parts"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[1] ?? null) : null)) . ")"), "html", null, true);
                    yield "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['mimekey'], $context['transform'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                yield "        ";
            }
            // line 218
            yield "      </select>
      ";
            // line 219
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 220
            yield "    </td>
    <td class=\"text-center\">
      <input id=\"field_";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" type=\"text\" name=\"field_transformation_options[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" size=\"16\" class=\"textfield form-control\" value=\"";
            // line 223
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 223) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), (($_v50 = ($context["column_meta"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["Field"] ?? null) : null), [], "array", false, true, false, 223), "transformation_options", [], "array", true, true, false, 223))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v51 = (($_v52 = ($context["mime_map"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52[(($_v53 = ($context["column_meta"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53["Field"] ?? null) : null)] ?? null) : null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51["transformation_options"] ?? null) : null), "html", null, true)) : (""));
            yield "\">
      ";
            // line 224
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 225
            yield "    </td>
    <td class=\"text-center\">
      <select id=\"field_";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" size=\"1\" name=\"field_input_transformation[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" class=\"form-select\">
        <option value=\"\" title=\"";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "\"></option>
        ";
            // line 229
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["available_mime"] ?? null), "input_transformation", [], "array", true, true, false, 229) && is_iterable((($_v54 = ($context["available_mime"] ?? null)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54["input_transformation"] ?? null) : null)))) {
                // line 230
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v55 = ($context["available_mime"] ?? null)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55["input_transformation"] ?? null) : null));
                foreach ($context['_seq'] as $context["mimekey"] => $context["transform"]) {
                    // line 231
                    yield "            ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["transform"], ":");
                    // line 232
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v56 = (($_v57 = ($context["available_mime"] ?? null)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57["input_transformation_file"] ?? null) : null)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56[$context["mimekey"]] ?? null) : null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Transformations')->getDescription((($_v58 = (($_v59 = ($context["available_mime"] ?? null)) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59["input_transformation_file"] ?? null) : null)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58[$context["mimekey"]] ?? null) : null)), "html", null, true);
                    yield "\"";
                    // line 233
                    yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 233) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), (($_v60 = ($context["column_meta"] ?? null)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60["Field"] ?? null) : null), [], "array", false, true, false, 233), "input_transformation", [], "array", true, true, false, 233)) && CoreExtension::matches((("@" . (($_v61 = (($_v62 =                     // line 234
($context["available_mime"] ?? null)) && is_array($_v62) || $_v62 instanceof ArrayAccess ? ($_v62["input_transformation_file_quoted"] ?? null) : null)) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61[$context["mimekey"]] ?? null) : null)) . "3?@i"), (($_v63 = (($_v64 = ($context["mime_map"] ?? null)) && is_array($_v64) || $_v64 instanceof ArrayAccess ? ($_v64[(($_v65 = ($context["column_meta"] ?? null)) && is_array($_v65) || $_v65 instanceof ArrayAccess ? ($_v65["Field"] ?? null) : null)] ?? null) : null)) && is_array($_v63) || $_v63 instanceof ArrayAccess ? ($_v63["input_transformation"] ?? null) : null)))) ? (" selected") : (""));
                    yield ">
              ";
                    // line 235
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((($this->env->getRuntime('PhpMyAdmin\Transformations')->getName((($_v66 = (($_v67 = ($context["available_mime"] ?? null)) && is_array($_v67) || $_v67 instanceof ArrayAccess ? ($_v67["input_transformation_file"] ?? null) : null)) && is_array($_v66) || $_v66 instanceof ArrayAccess ? ($_v66[$context["mimekey"]] ?? null) : null)) . " (") . Twig\Extension\CoreExtension::lower($this->env->getCharset(), (($_v68 = ($context["parts"] ?? null)) && is_array($_v68) || $_v68 instanceof ArrayAccess ? ($_v68[0] ?? null) : null))) . ":") . (($_v69 = ($context["parts"] ?? null)) && is_array($_v69) || $_v69 instanceof ArrayAccess ? ($_v69[1] ?? null) : null)) . ")"), "html", null, true);
                    yield "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['mimekey'], $context['transform'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 238
                yield "        ";
            }
            // line 239
            yield "      </select>
      ";
            // line 240
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 241
            yield "    </td>
    <td class=\"text-center\">
      <input id=\"field_";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" type=\"text\" name=\"field_input_transformation_options[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" size=\"16\" class=\"textfield form-control\" value=\"";
            // line 244
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 244) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), (($_v70 = ($context["column_meta"] ?? null)) && is_array($_v70) || $_v70 instanceof ArrayAccess ? ($_v70["Field"] ?? null) : null), [], "array", false, true, false, 244), "input_transformation_options", [], "array", true, true, false, 244))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v71 = (($_v72 = ($context["mime_map"] ?? null)) && is_array($_v72) || $_v72 instanceof ArrayAccess ? ($_v72[(($_v73 = ($context["column_meta"] ?? null)) && is_array($_v73) || $_v73 instanceof ArrayAccess ? ($_v73["Field"] ?? null) : null)] ?? null) : null)) && is_array($_v71) || $_v71 instanceof ArrayAccess ? ($_v71["input_transformation_options"] ?? null) : null), "html", null, true)) : (""));
            yield "\">
      ";
            // line 245
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 246
            yield "    </td>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/column_attributes.twig";
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
        return array (  791 => 246,  789 => 245,  785 => 244,  778 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  757 => 235,  753 => 234,  752 => 233,  746 => 232,  743 => 231,  738 => 230,  736 => 229,  732 => 228,  724 => 227,  720 => 225,  718 => 224,  714 => 223,  707 => 222,  703 => 220,  701 => 219,  698 => 218,  695 => 217,  686 => 214,  682 => 213,  681 => 212,  680 => 211,  679 => 210,  673 => 209,  670 => 208,  665 => 207,  663 => 206,  659 => 205,  651 => 204,  647 => 202,  645 => 201,  642 => 200,  639 => 199,  630 => 196,  626 => 195,  625 => 194,  621 => 193,  616 => 192,  614 => 191,  605 => 189,  602 => 188,  600 => 187,  597 => 186,  593 => 184,  591 => 183,  588 => 182,  571 => 179,  567 => 178,  563 => 177,  546 => 176,  541 => 174,  537 => 173,  528 => 171,  524 => 169,  510 => 168,  507 => 167,  504 => 166,  501 => 165,  498 => 164,  480 => 163,  477 => 162,  474 => 161,  472 => 160,  468 => 157,  465 => 156,  455 => 154,  447 => 152,  445 => 151,  441 => 149,  432 => 146,  426 => 145,  423 => 144,  420 => 143,  418 => 142,  415 => 141,  411 => 140,  403 => 139,  400 => 138,  398 => 137,  395 => 135,  393 => 134,  390 => 133,  388 => 132,  379 => 131,  375 => 129,  373 => 128,  369 => 127,  362 => 126,  359 => 125,  355 => 123,  353 => 122,  346 => 118,  341 => 117,  335 => 114,  330 => 113,  324 => 110,  319 => 109,  313 => 106,  308 => 105,  302 => 102,  297 => 101,  293 => 100,  285 => 99,  282 => 98,  280 => 97,  278 => 96,  274 => 94,  271 => 93,  266 => 91,  262 => 90,  255 => 89,  252 => 88,  250 => 87,  248 => 86,  245 => 85,  243 => 84,  239 => 83,  232 => 82,  228 => 80,  225 => 79,  223 => 77,  222 => 76,  221 => 75,  220 => 74,  219 => 73,  218 => 72,  217 => 71,  215 => 70,  211 => 67,  209 => 66,  205 => 65,  197 => 64,  193 => 61,  190 => 60,  182 => 58,  174 => 56,  172 => 55,  169 => 54,  161 => 50,  159 => 49,  153 => 46,  147 => 43,  142 => 41,  138 => 40,  133 => 38,  129 => 37,  121 => 36,  117 => 34,  115 => 33,  110 => 31,  104 => 30,  98 => 29,  91 => 28,  87 => 26,  85 => 25,  80 => 23,  76 => 22,  69 => 21,  65 => 19,  62 => 18,  60 => 16,  59 => 15,  58 => 14,  57 => 13,  56 => 12,  55 => 11,  53 => 10,  49 => 7,  47 => 6,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "columns_definitions/column_attributes.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/column_attributes.twig");
    }
}
