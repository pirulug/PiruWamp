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

/* table/search/input_box.twig */
class __TwigTemplate_324c4f2301ff077835fb808200448358 extends Template
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
        if ((($tmp = ($context["has_foreigner"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    ";
            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, ($context["foreign_data"] ?? null), "dispRow", [], "any", false, false, false, 3))) {
                // line 4
                yield "        <select name=\"criteriaValues[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "]\"
            id=\"";
                // line 5
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_id"] ?? null), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 6
                yield ($context["foreign_dropdown"] ?? null);
                yield "
        </select>
    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 8
($context["foreign_data"] ?? null), "foreignLink", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "        <input type=\"text\"
            id=\"";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_id"] ?? null), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "\"
            name=\"criteriaValues[";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "]\"
            id=\"field_";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_name_hash"] ?? null), "html", null, true);
                yield "[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "]\"
            class=\"textfield\"
            ";
                // line 14
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array", true, true, false, 14)) {
                    // line 15
                    yield "                value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["criteria_values"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["column_index"] ?? null)] ?? null) : null), "html", null, true);
                    yield "\"
            ";
                }
                // line 16
                yield ">
        <a class=\"ajax browse_foreign\" href=\"";
                // line 17
                yield PhpMyAdmin\Url::getFromRoute("/browse-foreigners");
                yield "\" data-post=\"";
                // line 18
                yield PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)], "", false);
                // line 19
                yield "&amp;field=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(($context["column_name"] ?? null)), "html", null, true);
                yield "&amp;fieldkey=";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "&amp;fromsearch=1\">
            ";
                // line 21
                yield PhpMyAdmin\Html\Generator::getIcon("b_browse", \_gettext("Browse foreign values"));
                yield "
        </a>
    ";
            }
        } elseif (CoreExtension::inFilter(        // line 24
($context["column_type"] ?? null), PhpMyAdmin\Utils\Gis::getDataTypes())) {
            // line 25
            yield "    <input type=\"text\"
        name=\"criteriaValues[";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
            yield "]\"
        size=\"40\"
        class=\"textfield\"
        id=\"field_";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
            yield "\">
    ";
            // line 30
            if ((($tmp = ($context["in_fbs"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 31
                yield "      <button type=\"button\" class=\"btn btn-link open_search_gis_editor\" data-bs-toggle=\"modal\" data-bs-target=\"#gisEditorModal\">
        ";
                // line 32
                yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit/Insert"));
                yield "
      </button>
    ";
            }
        } elseif (((is_string($_v1 =         // line 35
($context["column_type"] ?? null)) && is_string($_v2 = "enum") && str_starts_with($_v1, $_v2)) || ((is_string($_v3 =         // line 36
($context["column_type"] ?? null)) && is_string($_v4 = "set") && str_starts_with($_v3, $_v4)) && ($context["in_zoom_search_edit"] ?? null)))) {
            // line 37
            yield "    ";
            $context["in_zoom_search_edit"] = false;
            // line 38
            yield "    ";
            $context["value"] = PhpMyAdmin\Util::parseEnumSetValues(($context["column_type"] ?? null));
            // line 39
            yield "    ";
            $context["cnt_value"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null));
            // line 40
            yield "    ";
            // line 46
            yield "    ";
            if ((((is_string($_v5 = ($context["column_type"] ?? null)) && is_string($_v6 = "enum") && str_starts_with($_v5, $_v6)) &&  !($context["in_zoom_search_edit"] ?? null)) || ((is_string($_v7 =             // line 47
($context["column_type"] ?? null)) && is_string($_v8 = "set") && str_starts_with($_v7, $_v8)) && ($context["in_zoom_search_edit"] ?? null)))) {
                // line 48
                yield "        <select name=\"criteriaValues[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "]\"
            id=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_id"] ?? null), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "\">
    ";
            } else {
                // line 51
                yield "        <select name=\"criteriaValues[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "]\"
            id=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_id"] ?? null), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "\"
            multiple=\"multiple\"
            size=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(3, ($context["cnt_value"] ?? null)), "html", null, true);
                yield "\">
    ";
            }
            // line 56
            yield "    ";
            // line 57
            yield "    <option value=\"\"></option>
    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["cnt_value"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 59
                yield "        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array", true, true, false, 59) && is_iterable((($_v9 =                 // line 60
($context["criteria_values"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[($context["column_index"] ?? null)] ?? null) : null))) && CoreExtension::inFilter((($_v10 =                 // line 61
($context["value"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[$context["i"]] ?? null) : null), (($_v11 = ($context["criteria_values"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[($context["column_index"] ?? null)] ?? null) : null)))) {
                    // line 62
                    yield "            <option value=\"";
                    yield (($_v12 = ($context["value"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[$context["i"]] ?? null) : null);
                    yield "\" selected>
                ";
                    // line 63
                    yield (($_v13 = ($context["value"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[$context["i"]] ?? null) : null);
                    yield "
            </option>
        ";
                } else {
                    // line 66
                    yield "            <option value=\"";
                    yield (($_v14 = ($context["value"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[$context["i"]] ?? null) : null);
                    yield "\">
                ";
                    // line 67
                    yield (($_v15 = ($context["value"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[$context["i"]] ?? null) : null);
                    yield "
            </option>
        ";
                }
                // line 70
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "    </select>
";
        } else {
            // line 73
            yield "    ";
            $context["the_class"] = "textfield";
            // line 74
            yield "    ";
            if ((($context["column_type"] ?? null) == "date")) {
                // line 75
                yield "        ";
                $context["the_class"] = (($context["the_class"] ?? null) . " datefield");
                // line 76
                yield "    ";
            } elseif (((($context["column_type"] ?? null) == "datetime") || (is_string($_v16 = ($context["column_type"] ?? null)) && is_string($_v17 = "timestamp") && str_starts_with($_v16, $_v17)))) {
                // line 77
                yield "        ";
                $context["the_class"] = (($context["the_class"] ?? null) . " datetimefield");
                // line 78
                yield "    ";
            } elseif ((is_string($_v18 = ($context["column_type"] ?? null)) && is_string($_v19 = "bit") && str_starts_with($_v18, $_v19))) {
                // line 79
                yield "        ";
                $context["the_class"] = (($context["the_class"] ?? null) . " bit");
                // line 80
                yield "    ";
            }
            // line 81
            yield "    <input
        ";
            // line 82
            if ((($context["is_integer"] ?? null) || ($context["is_float"] ?? null))) {
                // line 83
                yield "            type=\"number\"
            ";
                // line 84
                if ((($tmp = ($context["is_integer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 85
                    yield "                inputmode=\"numeric\"
            ";
                } else {
                    // line 87
                    yield "                inputmode=\"decimal\"
            ";
                }
                // line 89
                yield "        ";
            } else {
                // line 90
                yield "            type=\"text\"";
            }
            // line 92
            yield "
        name=\"criteriaValues[";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
            yield "]\"
        data-type=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_data_type"] ?? null), "html", null, true);
            yield "\"
        ";
            // line 95
            yield ($context["html_attributes"] ?? null);
            yield "
        size=\"40\"
        class=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["the_class"] ?? null), "html", null, true);
            yield "\"
        id=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_id"] ?? null), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
            yield "\"
        ";
            // line 99
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array", true, true, false, 99)) {
                // line 100
                yield "           value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v20 = ($context["criteria_values"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[($context["column_index"] ?? null)] ?? null) : null), "html", null, true);
                yield "\"";
            }
            // line 101
            yield ">
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/search/input_box.twig";
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
        return array (  310 => 101,  305 => 100,  303 => 99,  298 => 98,  294 => 97,  289 => 95,  285 => 94,  281 => 93,  278 => 92,  275 => 90,  272 => 89,  268 => 87,  264 => 85,  262 => 84,  259 => 83,  257 => 82,  254 => 81,  251 => 80,  248 => 79,  245 => 78,  242 => 77,  239 => 76,  236 => 75,  233 => 74,  230 => 73,  226 => 71,  220 => 70,  214 => 67,  209 => 66,  203 => 63,  198 => 62,  196 => 61,  195 => 60,  193 => 59,  189 => 58,  186 => 57,  184 => 56,  179 => 54,  173 => 52,  168 => 51,  162 => 49,  157 => 48,  155 => 47,  153 => 46,  151 => 40,  148 => 39,  145 => 38,  142 => 37,  140 => 36,  139 => 35,  133 => 32,  130 => 31,  128 => 30,  124 => 29,  118 => 26,  115 => 25,  113 => 24,  107 => 21,  103 => 20,  99 => 19,  97 => 18,  94 => 17,  91 => 16,  85 => 15,  83 => 14,  76 => 12,  72 => 11,  67 => 10,  64 => 9,  62 => 8,  57 => 6,  52 => 5,  47 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/search/input_box.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/search/input_box.twig");
    }
}
