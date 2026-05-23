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

/* database/central_columns/edit_table_row.twig */
class __TwigTemplate_3f1ac037ba26501e1a89927e4a06563a extends Template
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
        yield "<tr>
  <input name=\"orig_col_name[";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "]\" type=\"hidden\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["row"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["col_name"] ?? null) : null), "html", null, true);
        yield "\">
  <td name=\"col_name\" class=\"text-nowrap\">
    ";
        // line 4
        yield from $this->load("columns_definitions/column_name.twig", 4)->unwrap()->yield(CoreExtension::toArray(["column_number" =>         // line 5
($context["row_num"] ?? null), "ci" => 0, "ci_offset" => 0, "column_meta" => ["Field" => (($_v1 =         // line 8
($context["row"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["col_name"] ?? null) : null)], "has_central_columns_feature" => false, "max_rows" =>         // line 10
($context["max_rows"] ?? null)]));
        // line 12
        yield "  </td>

  <td name=\"col_type\" class=\"text-nowrap\">
    <select class=\"column_type\" name=\"field_type[";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "_1\">
      ";
        // line 16
        yield PhpMyAdmin\Html\Generator::getSupportedDatatypes(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (($_v2 = ($context["row"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["col_type"] ?? null) : null)));
        yield "
    </select>
  </td>

  <td class=\"text-nowrap\" name=\"col_length\">
    <input id=\"field_";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "_2\" type=\"text\" name=\"field_length[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "]\" size=\"8\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["row"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["col_length"] ?? null) : null), "html", null, true);
        yield "\" class=\"textfield\">
    <p class=\"enum_notice\" id=\"enum_notice_";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "_2\">
      <a href=\"#\" class=\"open_enum_editor\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit ENUM/SET values"), "html", null, true);
        yield "</a>
    </p>
  </td>

  <td class=\"text-nowrap\" name=\"col_default\">
    <select name=\"field_default_type[";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "_3\" class=\"default_type\">
      <option value=\"NONE\"";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "DefaultType", [], "array", true, true, false, 29) && ((($_v4 = ($context["meta"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["DefaultType"] ?? null) : null) == "NONE"))) ? (" selected") : (""));
        yield ">
        ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("for default", "None"), "html", null, true);
        yield "
      </option>
      <option value=\"USER_DEFINED\"";
        // line 32
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "DefaultType", [], "array", true, true, false, 32) && ((($_v5 = ($context["meta"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["DefaultType"] ?? null) : null) == "USER_DEFINED"))) ? (" selected") : (""));
        yield ">
        ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("As defined:"), "html", null, true);
        yield "
      </option>
      <option value=\"NULL\"";
        // line 35
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "DefaultType", [], "array", true, true, false, 35) && ((($_v6 = ($context["meta"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["DefaultType"] ?? null) : null) == "NULL"))) ? (" selected") : (""));
        yield ">
        NULL
      </option>
      <option value=\"CURRENT_TIMESTAMP\"";
        // line 38
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "DefaultType", [], "array", true, true, false, 38) && ((($_v7 = ($context["meta"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["DefaultType"] ?? null) : null) == "CURRENT_TIMESTAMP"))) ? (" selected") : (""));
        yield ">
        CURRENT_TIMESTAMP
      </option>
    </select>
    ";
        // line 42
        if ((($context["char_editing"] ?? null) == "textarea")) {
            // line 43
            yield "      <textarea name=\"field_default_value[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
            yield "]\" cols=\"15\" class=\"textfield default_value\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = ($context["row"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["col_default"] ?? null) : null), "html", null, true);
            yield "</textarea>
    ";
        } else {
            // line 45
            yield "      <input type=\"text\" name=\"field_default_value[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
            yield "]\" size=\"12\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = ($context["row"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["col_default"] ?? null) : null), "html", null, true);
            yield "\" class=\"textfield default_value\">
    ";
        }
        // line 47
        yield "  </td>

  <td name=\"collation\" class=\"text-nowrap\">
    <select lang=\"en\" dir=\"ltr\" name=\"field_collation[";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "_4\">
      <option value=\"\"></option>
      ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 53
            yield "        <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 53), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 53), "html", null, true);
            yield "\">
          ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v10 = ($context["collations"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 54)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 55
                yield "            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 55), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getDescription", [], "method", false, false, false, 55), "html", null, true);
                yield "\"";
                yield ((((($_v11 = ($context["row"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["col_collation"] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 55))) ? (" selected") : (""));
                yield ">
              ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 56), "html", null, true);
                yield "
            </option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "        </optgroup>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "    </select>
  </td>

  <td class=\"text-nowrap\" name=\"col_attribute\">
    ";
        // line 65
        yield from $this->load("columns_definitions/column_attribute.twig", 65)->unwrap()->yield(CoreExtension::toArray(["column_number" =>         // line 66
($context["row_num"] ?? null), "ci" => 5, "ci_offset" => 0, "column_meta" => [], "extracted_columnspec" => ["attribute" => (($_v12 =         // line 70
($context["row"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["col_attribute"] ?? null) : null)], "submit_attribute" => false, "attribute_types" =>         // line 72
($context["attribute_types"] ?? null)]));
        // line 74
        yield "  </td>

  <td class=\"text-nowrap\" name=\"col_isNull\">
    <input name=\"field_null[";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "_6\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"";
        // line 78
        yield ((((( !Twig\Extension\CoreExtension::testEmpty((($_v13 = ($context["row"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["col_isNull"] ?? null) : null)) && ((($_v14 = ($context["row"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["col_isNull"] ?? null) : null) != "NO")) && ((($_v15 = ($context["row"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["col_isNull"] ?? null) : null) != "NOT NULL")) && ((($_v16 = ($context["row"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["col_isNull"] ?? null) : null) != 0))) ? (" checked") : (""));
        yield ">
  </td>

  <td class=\"text-nowrap\" name=\"col_extra\">
    <input name=\"col_extra[";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
        yield "_7\" type=\"checkbox\" value=\"auto_increment\"";
        // line 83
        yield ((( !Twig\Extension\CoreExtension::testEmpty((($_v17 = ($context["row"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["col_extra"] ?? null) : null)) && ((($_v18 = ($context["row"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["col_extra"] ?? null) : null) == "auto_increment"))) ? (" checked") : (""));
        yield ">
  </td>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/central_columns/edit_table_row.twig";
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
        return array (  236 => 83,  231 => 82,  224 => 78,  219 => 77,  214 => 74,  212 => 72,  211 => 70,  210 => 66,  209 => 65,  203 => 61,  196 => 59,  187 => 56,  178 => 55,  174 => 54,  167 => 53,  163 => 52,  156 => 50,  151 => 47,  143 => 45,  135 => 43,  133 => 42,  126 => 38,  120 => 35,  115 => 33,  111 => 32,  106 => 30,  102 => 29,  96 => 28,  88 => 23,  84 => 22,  76 => 21,  68 => 16,  62 => 15,  57 => 12,  55 => 10,  54 => 8,  53 => 5,  52 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/central_columns/edit_table_row.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/central_columns/edit_table_row.twig");
    }
}
