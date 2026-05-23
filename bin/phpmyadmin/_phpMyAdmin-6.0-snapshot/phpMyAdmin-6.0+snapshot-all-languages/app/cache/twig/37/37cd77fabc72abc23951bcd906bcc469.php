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

/* database/designer/database_tables.twig */
class __TwigTemplate_33359e1d5a5cbc17711c6e4f27e586dd extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["designerTable"]) {
            // line 2
            yield "    ";
            $context["i"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 2);
            // line 3
            yield "    ";
            $context["t_n_url"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDbTableString", [], "method", false, false, false, 3), "url");
            // line 4
            yield "    ";
            $context["db"] = CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDatabaseName", [], "method", false, false, false, 4);
            // line 5
            yield "    ";
            $context["db_url"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "url");
            // line 6
            yield "    ";
            $context["t_n"] = CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDbTableString", [], "method", false, false, false, 6);
            // line 7
            yield "    ";
            $context["table_name"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getTableName", [], "method", false, false, false, 7), "html");
            // line 8
            yield "    <input name=\"t_x[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "]\" type=\"hidden\" id=\"t_x_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "_\" />
    <input name=\"t_y[";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "]\" type=\"hidden\" id=\"t_y_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "_\" />
    <input name=\"t_v[";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "]\" type=\"hidden\" id=\"t_v_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "_\" />
    <input name=\"t_h[";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "]\" type=\"hidden\" id=\"t_h_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "_\" />
    <table id=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "\"
        db_url=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDatabaseName", [], "method", false, false, false, 13), "url"), "html", null, true);
            yield "\"
        table_name_url=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getTableName", [], "method", false, false, false, 14), "url"), "html", null, true);
            yield "\"
        cellpadding=\"0\"
        cellspacing=\"0\"
        class=\"table table-sm table-striped table-hover w-auto designer_tab\"
        style=\"position:absolute; ";
            // line 18
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "text_dir", [], "any", false, false, false, 18) == "rtl")) ? ("right") : ("left"));
            yield ":";
            // line 19
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true, false, 19)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = (($_v1 = ($context["tab_pos"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["X"] ?? null) : null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), range(20, 700)), "html", null, true)));
            yield "px; top:";
            // line 20
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true, false, 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = (($_v3 = ($context["tab_pos"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["Y"] ?? null) : null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), range(20, 550)), "html", null, true)));
            yield "px; display:";
            // line 21
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true, false, 21) || (($context["display_page"] ?? null) ==  -1))) ? ("block") : ("none"));
            yield "; z-index: 1;\"> <!--\"-->
        <thead>
            <tr class=\"header\">
                ";
            // line 24
            if ((($tmp = ($context["has_query"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 25
                yield "                    <td class=\"select_all\">
                        <input class=\"select_all_1\"
                            type=\"checkbox\"
                            style=\"margin: 0;\"
                            value=\"select_all_";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                yield "\"
                            id=\"select_all_";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] ?? null), "html", null, true);
                yield "\"
                            title=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select all"), "html", null, true);
                yield "\"
                            table_name=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_name"] ?? null), "html", null, true);
                yield "\"
                            db_name=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
                yield "\">
                    </td>
                ";
            }
            // line 36
            yield "                <td class=\"small_tab\"
                    title=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show/hide columns"), "html", null, true);
            yield "\"
                    id=\"id_hide_tbody_";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "\"
                    table_name=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "\">";
            yield ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true, false, 39) ||  !Twig\Extension\CoreExtension::testEmpty((($_v4 = (($_v5 = ($context["tab_pos"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["V"] ?? null) : null)))) ? ("v") : ("&gt;"));
            yield "</td>
                <td class=\"small_tab_pref small_tab_pref_1\"
                    db=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDatabaseName", [], "method", false, false, false, 41), "html", null, true);
            yield "\"
                    db_url=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDatabaseName", [], "method", false, false, false, 42), "url"), "html", null, true);
            yield "\"
                    table_name=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getTableName", [], "method", false, false, false, 43), "html", null, true);
            yield "\"
                    table_name_url=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getTableName", [], "method", false, false, false, 44), "url"), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/exec_small.png"), "html", null, true);
            yield "\"
                        title=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("See table structure"), "html", null, true);
            yield "\">
                </td>
                <td id=\"id_zag_";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "\"
                    class=\"tab_zag text-nowrap tab_zag_noquery\"
                    table_name=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "\"
                    query_set=\"";
            // line 51
            yield (((($tmp = ($context["has_query"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
            yield "\">
                    <span class=\"owner\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDatabaseName", [], "method", false, false, false, 52), "html", null, true);
            yield "</span>
                    ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getTableName", [], "method", false, false, false, 53), "html", null, true);
            yield "
                </td>
                ";
            // line 55
            if ((($tmp = ($context["has_query"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "                    <td class=\"tab_zag tab_zag_query\"
                        id=\"id_zag_";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                yield "_2\"
                        table_name=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                yield "\">
                    </td>
               ";
            }
            // line 61
            yield "            </tr>
        </thead>
        <tbody id=\"id_tbody_";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "\"";
            // line 64
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true, false, 64) && Twig\Extension\CoreExtension::testEmpty((($_v6 = (($_v7 = ($context["tab_pos"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["V"] ?? null) : null)))) ? (" style=\"display: none\"") : (""));
            yield ">
            ";
            // line 65
            $context["display_field"] = CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDisplayField", [], "method", false, false, false, 65);
            // line 66
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v8 = ($context["tab_column"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[($context["t_n"] ?? null)] ?? null) : null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 67
                yield "                ";
                $context["col_name"] = CoreExtension::getAttribute($this->env, $this->source, (($_v9 = (($_v10 = ($context["tab_column"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[$context["j"]] ?? null) : null), "name", [], "any", false, false, false, 67);
                // line 68
                yield "                ";
                $context["tmp_column"] = ((($context["t_n"] ?? null) . ".") . CoreExtension::getAttribute($this->env, $this->source, (($_v11 = (($_v12 = ($context["tab_column"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[$context["j"]] ?? null) : null), "name", [], "any", false, false, false, 68));
                // line 69
                yield "                ";
                $context["click_field_param"] = [$this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,                 // line 70
$context["designerTable"], "getTableName", [], "method", false, false, false, 70), "url"), Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (($_v13 = (($_v14 =                 // line 71
($context["tab_column"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[$context["j"]] ?? null) : null), "name", [], "any", false, false, false, 71))];
                // line 73
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["tables_all_keys"] ?? null), ($context["tmp_column"] ?? null), [], "array", true, true, false, 73)) {
                    // line 74
                    yield "                    ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "supportsForeignkeys", [], "method", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 75
                        yield "                        ";
                        $context["click_field_param"] = Twig\Extension\CoreExtension::merge(($context["click_field_param"] ?? null), [(((($tmp = (($_v15 = ($context["tables_all_keys"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[($context["tmp_column"] ?? null)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0))]);
                        // line 76
                        yield "                    ";
                    } else {
                        // line 77
                        yield "                        ";
                        // line 79
                        yield "                        ";
                        $context["click_field_param"] = Twig\Extension\CoreExtension::merge(($context["click_field_param"] ?? null), [1]);
                        // line 80
                        yield "                    ";
                    }
                    // line 81
                    yield "                ";
                }
                // line 82
                yield "                ";
                $context["click_field_param"] = Twig\Extension\CoreExtension::merge(($context["click_field_param"] ?? null), [($context["db"] ?? null)]);
                // line 83
                yield "                <tr id=\"id_tr_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getTableName", [], "method", false, false, false, 83), "url"), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v16 = (($_v17 = ($context["tab_column"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[$context["j"]] ?? null) : null), "name", [], "any", false, false, false, 83), "html", null, true);
                yield "\" class=\"tab_field";
                // line 84
                yield (((($context["display_field"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, (($_v18 = (($_v19 = ($context["tab_column"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[$context["j"]] ?? null) : null), "name", [], "any", false, false, false, 84))) ? ("_3") : (""));
                yield "\" click_field_param=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["click_field_param"] ?? null), ","), "html", null, true);
                yield "\">
                    ";
                // line 86
                if ((($tmp = ($context["has_query"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 87
                    yield "                        <td class=\"select_all\">
                            <input class=\"select_all_store_col\"
                                value=\"";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (($_v20 = (($_v21 = ($context["tab_column"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[$context["j"]] ?? null) : null), "name", [], "any", false, false, false, 89)), "html", null, true);
                    yield "\"
                                type=\"checkbox\"
                                id=\"select_";
                    // line 91
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                    yield "._";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (($_v22 = (($_v23 = ($context["tab_column"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[$context["j"]] ?? null) : null), "name", [], "any", false, false, false, 91)), "html", null, true);
                    yield "\"
                                style=\"margin: 0;\"
                                title=\"";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Select \"%s\""), ($context["col_name"] ?? null)), "html", null, true);
                    yield "\"
                                id_check_all=\"select_all_";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] ?? null), "html", null, true);
                    yield "\"
                                db_name=\"";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
                    yield "\"
                                table_name=\"";
                    // line 96
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_name"] ?? null), "html", null, true);
                    yield "\"
                                col_name=\"";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["col_name"] ?? null), "html", null, true);
                    yield "\">
                        </td>
                    ";
                }
                // line 100
                yield "                    <td width=\"10px\" colspan=\"3\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                yield ".";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (($_v24 = (($_v25 = ($context["tab_column"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[$context["j"]] ?? null) : null), "name", [], "any", false, false, false, 101)), "html", null, true);
                yield "\">
                        <div class=\"text-nowrap\">
                            ";
                // line 103
                $context["type"] = (($_v26 = ($context["columns_type"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[((($context["t_n"] ?? null) . ".") . CoreExtension::getAttribute($this->env, $this->source, (($_v27 = (($_v28 = ($context["tab_column"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[$context["j"]] ?? null) : null), "name", [], "any", false, false, false, 103))] ?? null) : null);
                // line 104
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath(($context["type"] ?? null)), "html", null, true);
                yield ".png\" alt=\"*\">
                            ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v29 = (($_v30 = ($context["tab_column"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[$context["j"]] ?? null) : null), "name", [], "any", false, false, false, 105), "html", null, true);
                yield " : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v31 = (($_v32 = ($context["tab_column"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[($context["t_n"] ?? null)] ?? null) : null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[$context["j"]] ?? null) : null), "type", [], "any", false, false, false, 105), "html", null, true);
                yield "
                        </div>
                    </td>
                    ";
                // line 108
                if ((($tmp = ($context["has_query"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 109
                    yield "                        <td class=\"small_tab_pref small_tab_pref_click_opt\"
                            ";
                    // line 111
                    yield "                            option_col_name_modal=\"<strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Add an option for column \"%s\"."), ($context["col_name"] ?? null)), "html"), "html");
                    yield "</strong>\"
                            db_name=\"";
                    // line 112
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
                    yield "\"
                            table_name=\"";
                    // line 113
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_name"] ?? null), "html", null, true);
                    yield "\"
                            col_name=\"";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["col_name"] ?? null), "html", null, true);
                    yield "\"
                            db_table_name_url=\"";
                    // line 115
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                    yield "\">
                            <img src=\"";
                    // line 116
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/exec_small.png"), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Options"), "html", null, true);
                    yield "\" />
                        </td>
                    ";
                }
                // line 119
                yield "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['j'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "        </tbody>
    </table>
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
        unset($context['_seq'], $context['_key'], $context['designerTable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/designer/database_tables.twig";
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
        return array (  416 => 121,  409 => 119,  401 => 116,  397 => 115,  393 => 114,  389 => 113,  385 => 112,  380 => 111,  377 => 109,  375 => 108,  367 => 105,  362 => 104,  360 => 103,  355 => 101,  351 => 100,  345 => 97,  341 => 96,  337 => 95,  333 => 94,  329 => 93,  322 => 91,  316 => 89,  312 => 87,  310 => 86,  306 => 85,  303 => 84,  297 => 83,  294 => 82,  291 => 81,  288 => 80,  285 => 79,  283 => 77,  280 => 76,  277 => 75,  274 => 74,  271 => 73,  269 => 71,  268 => 70,  266 => 69,  263 => 68,  260 => 67,  255 => 66,  253 => 65,  249 => 64,  246 => 63,  242 => 61,  236 => 58,  232 => 57,  229 => 56,  227 => 55,  222 => 53,  218 => 52,  214 => 51,  210 => 50,  205 => 48,  200 => 46,  196 => 45,  192 => 44,  188 => 43,  184 => 42,  180 => 41,  173 => 39,  169 => 38,  165 => 37,  162 => 36,  156 => 33,  152 => 32,  148 => 31,  144 => 30,  140 => 29,  134 => 25,  132 => 24,  126 => 21,  123 => 20,  120 => 19,  117 => 18,  110 => 14,  106 => 13,  102 => 12,  96 => 11,  90 => 10,  84 => 9,  77 => 8,  74 => 7,  71 => 6,  68 => 5,  65 => 4,  62 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/designer/database_tables.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/designer/database_tables.twig");
    }
}
