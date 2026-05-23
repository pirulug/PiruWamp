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

/* table/structure/display_structure.twig */
class __TwigTemplate_d0d5ea489809386d0fc3e1e095a30d92 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "table/page_with_secondary_tabs.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("table/page_with_secondary_tabs.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "<h1 class=\"d-none d-print-block\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true);
        yield "</h1>
<form method=\"post\" action=\"";
        // line 4
        yield PhpMyAdmin\Url::getFromRoute("/table/structure");
        yield "\" name=\"fieldsForm\" id=\"fieldsForm\">
    ";
        // line 5
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
    <input type=\"hidden\" name=\"table_type\" value=";
        // line 7
        if ((($tmp = ($context["db_is_system_schema"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "\"information_schema\"";
        } elseif ((($tmp =         // line 9
($context["tbl_is_view"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "\"view\"";
        } else {
            // line 12
            yield "\"table\"";
        }
        // line 13
        yield ">
    <div class=\"table-responsive-md\">
    <table id=\"tablestructure\" class=\"table table-striped table-hover w-auto align-middle\">
        ";
        // line 17
        yield "        <thead>
            <tr>
                <th class=\"d-print-none\"></th>
                <th>#</th>
                <th>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Name"), "html", null, true);
        yield "</th>
                <th>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
        yield "</th>
                <th>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "</th>
                <th>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Attributes"), "html", null, true);
        yield "</th>
                <th>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
        yield "</th>
                <th>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Default"), "html", null, true);
        yield "</th>
                ";
        // line 27
        if ((($tmp = ($context["show_column_comments"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "<th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comments"), "html", null, true);
            yield "</th>";
        }
        // line 30
        yield "                <th>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Extra"), "html", null, true);
        yield "</th>
                ";
        // line 32
        yield "                ";
        if (( !($context["db_is_system_schema"] ?? null) &&  !($context["tbl_is_view"] ?? null))) {
            // line 33
            yield "                    <th colspan=\"";
            yield (((($tmp = PhpMyAdmin\Util::showIcons("ActionLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("8") : ("9"));
            // line 34
            yield "\" class=\"action d-print-none\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
            yield "</th>
                ";
        }
        // line 36
        yield "            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        yield "        ";
        $context["rownum"] = 0;
        // line 41
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 42
            yield "            ";
            $context["rownum"] = (($context["rownum"] ?? null) + 1);
            // line 43
            yield "
            ";
            // line 44
            $context["extracted_columnspec"] = (($_v0 = ($context["extracted_columnspecs"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["rownum"] ?? null)] ?? null) : null);
            // line 45
            yield "            ";
            $context["field_name"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 45));
            // line 46
            yield "            ";
            // line 47
            yield "            ";
            $context["comments"] = (($_v1 = ($context["row_comments"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["rownum"] ?? null)] ?? null) : null);
            // line 48
            yield "            ";
            // line 49
            yield "
        <tr>
            <td class=\"text-center d-print-none\">
                <input type=\"checkbox\" class=\"checkall\" name=\"selected_fld[]\" value=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 52), "html", null, true);
            yield "\" id=\"checkbox_row_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rownum"] ?? null), "html", null, true);
            yield "\">
            </td>
            <td class=\"text-end\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rownum"] ?? null), "html", null, true);
            yield "</td>
            <th class=\"text-nowrap\">
                <label for=\"checkbox_row_";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rownum"] ?? null), "html", null, true);
            yield "\">
                    ";
            // line 57
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["displayed_fields"] ?? null), ($context["rownum"] ?? null), [], "array", false, true, false, 57), "comment", [], "any", true, true, false, 57)) {
                // line 58
                yield "                        <span class=\"commented_column\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["displayed_fields"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["rownum"] ?? null)] ?? null) : null), "comment", [], "any", false, false, false, 58), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["displayed_fields"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[($context["rownum"] ?? null)] ?? null) : null), "text", [], "any", false, false, false, 58), "html", null, true);
                yield "</span>
                    ";
            } else {
                // line 60
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["displayed_fields"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[($context["rownum"] ?? null)] ?? null) : null), "text", [], "any", false, false, false, 60), "html", null, true);
                yield "
                    ";
            }
            // line 62
            yield "                    ";
            yield CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["displayed_fields"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["rownum"] ?? null)] ?? null) : null), "icon", [], "any", false, false, false, 62);
            yield "
                </label>
            </th>
            <td";
            // line 65
            yield (((("set" != (($_v6 = ($context["extracted_columnspec"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["type"] ?? null) : null)) && ("enum" != (($_v7 = ($context["extracted_columnspec"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["type"] ?? null) : null)))) ? (" class=\"text-nowrap\"") : (""));
            yield ">
                <bdo dir=\"ltr\" lang=\"en\">
                    ";
            // line 67
            yield (($_v8 = ($context["extracted_columnspec"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["displayed_type"] ?? null) : null);
            yield "
                    ";
            // line 68
            if (((( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "columnCommentsFeature", [], "any", false, false, false, 68)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "browserTransformationFeature", [], "any", false, false, false, 68))) && ($context["browse_mime"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 69
($context["mime_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 69), [], "array", false, true, false, 69), "mimetype", [], "array", true, true, false, 69))) {
                // line 70
                yield "                        <br>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Media type:"), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace((($_v9 = (($_v10 = ($context["mime_map"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 70)] ?? null) : null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["mimetype"] ?? null) : null), ["_" => "/"])), "html", null, true);
                yield "
                    ";
            }
            // line 72
            yield "                </bdo>
            </td>
            <td>
            ";
            // line 75
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "collation", [], "any", false, false, false, 75))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "                <dfn title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v11 = ($context["collations"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["row"], "collation", [], "any", false, false, false, 76)] ?? null) : null), "description", [], "any", false, false, false, 76), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v12 = ($context["collations"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["row"], "collation", [], "any", false, false, false, 76)] ?? null) : null), "name", [], "any", false, false, false, 76), "html", null, true);
                yield "</dfn>
            ";
            }
            // line 78
            yield "            </td>
            <td class=\"column_attribute text-nowrap\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v13 = ($context["attributes"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[($context["rownum"] ?? null)] ?? null) : null), "html", null, true);
            yield "</td>
            <td>";
            // line 80
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "isNull", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
            yield "</td>
            <td class=\"text-nowrap\">";
            // line 82
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["row"], "default", [], "any", false, false, false, 82))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 83
                if (((($_v14 = ($context["extracted_columnspec"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["type"] ?? null) : null) == "bit")) {
                    // line 84
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::convertBitDefaultValue(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "default", [], "any", false, false, false, 84)), "html", null, true);
                } else {
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "default", [], "any", false, false, false, 86), "html", null, true);
                }
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 88
$context["row"], "isNull", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 89
                yield "<em>NULL</em>";
            } else {
                // line 91
                yield "<em>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None for default", "None"), "html", null, true);
                yield "</em>";
            }
            // line 93
            yield "</td>
            ";
            // line 94
            if ((($tmp = ($context["show_column_comments"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 95
                yield "                <td>
                    ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["comments"] ?? null), "html", null, true);
                yield "
                </td>
            ";
            }
            // line 99
            yield "            <td class=\"text-nowrap\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["row"], "extra", [], "any", false, false, false, 99)), "html", null, true);
            yield "</td>
            ";
            // line 100
            if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
                // line 101
                yield "                <td class=\"edit text-center d-print-none\">
                    <a class=\"change_column_anchor ajax\" href=\"";
                // line 102
                yield PhpMyAdmin\Url::getFromRoute("/table/structure/change", ["db" =>                 // line 103
($context["db"] ?? null), "table" =>                 // line 104
($context["table"] ?? null), "field" => CoreExtension::getAttribute($this->env, $this->source,                 // line 105
$context["row"], "field", [], "any", false, false, false, 105), "change_column" => 1]);
                // line 107
                yield "\">
                      ";
                // line 108
                yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Change"));
                yield "
                    </a>
                </td>
                <td class=\"drop text-center d-print-none\">
                    <a class=\"drop_column_anchor ajax\" href=\"";
                // line 112
                yield PhpMyAdmin\Url::getFromRoute("/sql");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["db" =>                 // line 113
($context["db"] ?? null), "table" =>                 // line 114
($context["table"] ?? null), "sql_query" => (((("ALTER TABLE " . PhpMyAdmin\Util::backquote(                // line 115
($context["table"] ?? null))) . " DROP ") . PhpMyAdmin\Util::backquote(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 115))) . ";"), "dropped_column" => CoreExtension::getAttribute($this->env, $this->source,                 // line 116
$context["row"], "field", [], "any", false, false, false, 116), "purge" => true, "message_to_show" => Twig\Extension\CoreExtension::sprintf(\_gettext("Column %s has been dropped."), CoreExtension::getAttribute($this->env, $this->source,                 // line 118
$context["row"], "field", [], "any", false, false, false, 118))], "", false);
                // line 119
                yield "\">
                      ";
                // line 120
                yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Drop"));
                yield "
                    </a>
                </td>
            ";
            }
            // line 124
            yield "
            ";
            // line 125
            if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
                // line 126
                yield "                ";
                $context["type"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v15 = ($context["extracted_columnspec"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["print_type"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v16 = ($context["extracted_columnspec"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["print_type"] ?? null) : null)) : (""));
                // line 127
                yield "                <td class=\"d-print-none\">
                  ";
                // line 128
                if ((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 129
                    yield "                  <div class=\"dropdown\">
                    <button class=\"btn btn-link p-0 dropdown-toggle\" type=\"button\" id=\"moreActionsButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
                    // line 130
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("More"), "html", null, true);
                    yield "</button>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"moreActionsButton\">
                  ";
                } else {
                    // line 133
                    yield "                    <ul class=\"nav\">
                  ";
                }
                // line 135
                yield "                        <li class=\"";
                yield (((($tmp =  !($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("nav-item ") : (""));
                yield "primary text-nowrap\">
                          ";
                // line 136
                if (((((($context["type"] ?? null) == "text") || (($context["type"] ?? null) == "blob")) || (($context["tbl_storage_engine"] ?? null) == "ARCHIVE")) || (($context["primary"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["primary"] ?? null), "hasColumn", [($context["field_name"] ?? null)], "method", false, false, false, 136)))) {
                    // line 137
                    yield "                            <span class=\"";
                    yield (((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    yield " disabled\">";
                    yield PhpMyAdmin\Html\Generator::getIcon("bd_primary", \_gettext("Primary"));
                    yield "</span>
                          ";
                } else {
                    // line 139
                    yield "                            <a rel=\"samepage\" class=\"";
                    yield (((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item") : ("nav-link px-1"));
                    yield " ajax add_key d-print-none add_primary_key_anchor\" href=\"";
                    yield PhpMyAdmin\Url::getFromRoute("/table/structure/add-key", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                    yield "\" data-post=\"";
                    yield PhpMyAdmin\Url::getCommon(["selected_fld" => [CoreExtension::getAttribute($this->env, $this->source,                     // line 140
$context["row"], "field", [], "any", false, false, false, 140)], "key_type" => "PRIMARY"], "", false);
                    // line 142
                    yield "\">
                              ";
                    // line 143
                    yield PhpMyAdmin\Html\Generator::getIcon("b_primary", \_gettext("Primary"));
                    yield "
                            </a>
                          ";
                }
                // line 146
                yield "                        </li>

                        <li class=\"";
                // line 148
                yield (((($tmp =  !($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("nav-item ") : (""));
                yield "add_unique unique text-nowrap\">
                          ";
                // line 149
                if ((((($context["type"] ?? null) == "text") || (($context["type"] ?? null) == "blob")) || (($context["tbl_storage_engine"] ?? null) == "ARCHIVE"))) {
                    // line 150
                    yield "                            <span class=\"";
                    yield (((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    yield " disabled\">";
                    yield PhpMyAdmin\Html\Generator::getIcon("bd_unique", \_gettext("Unique"));
                    yield "</span>
                          ";
                } else {
                    // line 152
                    yield "                            <a rel=\"samepage\" class=\"";
                    yield (((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item") : ("nav-link px-1"));
                    yield " ajax add_key d-print-none add_unique_anchor\" href=\"";
                    yield PhpMyAdmin\Url::getFromRoute("/table/structure/add-key", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                    yield "\" data-post=\"";
                    yield PhpMyAdmin\Url::getCommon(["selected_fld" => [CoreExtension::getAttribute($this->env, $this->source,                     // line 153
$context["row"], "field", [], "any", false, false, false, 153)], "key_type" => "UNIQUE"], "", false);
                    // line 155
                    yield "\">
                              ";
                    // line 156
                    yield PhpMyAdmin\Html\Generator::getIcon("b_unique", \_gettext("Unique"));
                    yield "
                            </a>
                          ";
                }
                // line 159
                yield "                        </li>

                        <li class=\"";
                // line 161
                yield (((($tmp =  !($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("nav-item ") : (""));
                yield "add_index text-nowrap\">
                          ";
                // line 162
                if ((((($context["type"] ?? null) == "text") || (($context["type"] ?? null) == "blob")) || (($context["tbl_storage_engine"] ?? null) == "ARCHIVE"))) {
                    // line 163
                    yield "                            <span class=\"";
                    yield (((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    yield " disabled\">";
                    yield PhpMyAdmin\Html\Generator::getIcon("bd_index", \_gettext("Index"));
                    yield "</span>
                          ";
                } else {
                    // line 165
                    yield "                            <a rel=\"samepage\" class=\"";
                    yield (((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item") : ("nav-link px-1"));
                    yield " ajax add_key d-print-none add_index_anchor\" href=\"";
                    yield PhpMyAdmin\Url::getFromRoute("/table/structure/add-key", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                    yield "\" data-post=\"";
                    yield PhpMyAdmin\Url::getCommon(["selected_fld" => [CoreExtension::getAttribute($this->env, $this->source,                     // line 166
$context["row"], "field", [], "any", false, false, false, 166)], "key_type" => "INDEX"], "", false);
                    // line 168
                    yield "\">
                              ";
                    // line 169
                    yield PhpMyAdmin\Html\Generator::getIcon("b_index", \_gettext("Index"));
                    yield "
                            </a>
                          ";
                }
                // line 172
                yield "                        </li>

                        ";
                // line 174
                $context["spatial_types"] = ["geometry", "point", "linestring", "polygon", "multipoint", "multilinestring", "multipolygon", "geomtrycollection"];
                // line 184
                yield "                        <li class=\"";
                yield (((($tmp =  !($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("nav-item ") : (""));
                yield "spatial text-nowrap\">
                          ";
                // line 185
                if (((((($context["type"] ?? null) == "text") || (($context["type"] ?? null) == "blob")) || (($context["tbl_storage_engine"] ?? null) == "ARCHIVE")) || (!CoreExtension::inFilter(($context["type"] ?? null), ($context["spatial_types"] ?? null)) && ((($context["tbl_storage_engine"] ?? null) == "MYISAM") || (($context["mysql_int_version"] ?? null) >= 50705))))) {
                    // line 186
                    yield "                            <span class=\"";
                    yield (((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    yield " disabled\">";
                    yield PhpMyAdmin\Html\Generator::getIcon("bd_spatial", \_gettext("Spatial"));
                    yield "</span>
                          ";
                } else {
                    // line 188
                    yield "                            <a rel=\"samepage\" class=\"";
                    yield (((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item") : ("nav-link px-1"));
                    yield " ajax add_key d-print-none add_spatial_anchor\" href=\"";
                    yield PhpMyAdmin\Url::getFromRoute("/table/structure/add-key", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                    yield "\" data-post=\"";
                    yield PhpMyAdmin\Url::getCommon(["selected_fld" => [CoreExtension::getAttribute($this->env, $this->source,                     // line 189
$context["row"], "field", [], "any", false, false, false, 189)], "key_type" => "SPATIAL"], "", false);
                    // line 191
                    yield "\">
                              ";
                    // line 192
                    yield PhpMyAdmin\Html\Generator::getIcon("b_spatial", \_gettext("Spatial"));
                    yield "
                            </a>
                          ";
                }
                // line 195
                yield "                        </li>

                        ";
                // line 198
                yield "                        <li class=\"";
                yield (((($tmp =  !($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("nav-item ") : (""));
                yield "fulltext text-nowrap\">
                        ";
                // line 199
                if ((( !Twig\Extension\CoreExtension::testEmpty(($context["tbl_storage_engine"] ?? null)) && ((((                // line 200
($context["tbl_storage_engine"] ?? null) == "MYISAM") || (                // line 201
($context["tbl_storage_engine"] ?? null) == "ARIA")) || (                // line 202
($context["tbl_storage_engine"] ?? null) == "MARIA")) || ((                // line 203
($context["tbl_storage_engine"] ?? null) == "INNODB") && (($context["mysql_int_version"] ?? null) >= 50604)))) && (CoreExtension::inFilter("text",                 // line 204
($context["type"] ?? null)) || CoreExtension::inFilter("char", ($context["type"] ?? null))))) {
                    // line 205
                    yield "                            <a rel=\"samepage\" class=\"";
                    yield (((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item") : ("nav-link px-1"));
                    yield " ajax add_key add_fulltext_anchor\" href=\"";
                    yield PhpMyAdmin\Url::getFromRoute("/table/structure/add-key", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                    yield "\" data-post=\"";
                    yield PhpMyAdmin\Url::getCommon(["selected_fld" => [CoreExtension::getAttribute($this->env, $this->source,                     // line 206
$context["row"], "field", [], "any", false, false, false, 206)], "key_type" => "FULLTEXT"], "", false);
                    // line 208
                    yield "\">
                              ";
                    // line 209
                    yield PhpMyAdmin\Html\Generator::getIcon("b_ftext", \_gettext("Fulltext"));
                    yield "
                            </a>
                        ";
                } else {
                    // line 212
                    yield "                            <span class=\"";
                    yield (((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    yield " disabled\">";
                    yield PhpMyAdmin\Html\Generator::getIcon("bd_ftext", \_gettext("Fulltext"));
                    yield "</span>
                        ";
                }
                // line 214
                yield "                        </li>

                        ";
                // line 217
                yield "                        <li class=\"";
                yield (((($tmp =  !($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("nav-item ") : (""));
                yield "browse text-nowrap\">
                            <a class=\"";
                // line 218
                yield (((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item") : ("nav-link px-1"));
                yield "\" href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/sql");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["db" =>                 // line 219
($context["db"] ?? null), "table" =>                 // line 220
($context["table"] ?? null), "sql_query" => ((((((((("SELECT COUNT(*) AS " . PhpMyAdmin\Util::backquote(\_gettext("Rows"))) . ", ") . PhpMyAdmin\Util::backquote(CoreExtension::getAttribute($this->env, $this->source,                 // line 222
$context["row"], "field", [], "any", false, false, false, 222))) . " FROM ") . PhpMyAdmin\Util::backquote(                // line 223
($context["table"] ?? null))) . " GROUP BY ") . PhpMyAdmin\Util::backquote(CoreExtension::getAttribute($this->env, $this->source,                 // line 224
$context["row"], "field", [], "any", false, false, false, 224))) . " ORDER BY ") . PhpMyAdmin\Util::backquote(CoreExtension::getAttribute($this->env, $this->source,                 // line 225
$context["row"], "field", [], "any", false, false, false, 225))), "is_browse_distinct" => true], "", false);
                // line 227
                yield "\">
                              ";
                // line 228
                yield PhpMyAdmin\Html\Generator::getIcon("b_browse", \_gettext("Distinct values"));
                yield "
                            </a>
                        </li>
                        ";
                // line 231
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "centralColumnsFeature", [], "any", false, false, false, 231))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 232
                    yield "                            <li class=\"";
                    yield (((($tmp =  !($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("nav-item ") : (""));
                    yield "browse text-nowrap\">
                            ";
                    // line 233
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 233), ($context["central_list"] ?? null))) {
                        // line 234
                        yield "                                <a class=\"";
                        yield (((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item") : ("nav-link px-1"));
                        yield "\" href=\"";
                        yield PhpMyAdmin\Url::getFromRoute("/table/structure/central-columns-remove");
                        yield "\" data-post=\"";
                        yield PhpMyAdmin\Url::getCommon(["db" =>                         // line 235
($context["db"] ?? null), "table" =>                         // line 236
($context["table"] ?? null), "selected_fld" => [CoreExtension::getAttribute($this->env, $this->source,                         // line 237
$context["row"], "field", [], "any", false, false, false, 237)]]);
                        // line 238
                        yield "\">
                                    ";
                        // line 239
                        yield PhpMyAdmin\Html\Generator::getIcon("centralColumns_delete", \_gettext("Remove from central columns"));
                        yield "
                                </a>
                            ";
                    } else {
                        // line 242
                        yield "                                <a class=\"";
                        yield (((($tmp = ($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item") : ("nav-link px-1"));
                        yield "\" href=\"";
                        yield PhpMyAdmin\Url::getFromRoute("/table/structure/central-columns-add");
                        yield "\" data-post=\"";
                        yield PhpMyAdmin\Url::getCommon(["db" =>                         // line 243
($context["db"] ?? null), "table" =>                         // line 244
($context["table"] ?? null), "selected_fld" => [CoreExtension::getAttribute($this->env, $this->source,                         // line 245
$context["row"], "field", [], "any", false, false, false, 245)]]);
                        // line 246
                        yield "\">
                                    ";
                        // line 247
                        yield PhpMyAdmin\Html\Generator::getIcon("centralColumns_add", \_gettext("Add to central columns"));
                        yield "
                                </a>
                            ";
                    }
                    // line 250
                    yield "                            </li>
                        ";
                }
                // line 252
                yield "                  ";
                if ((($tmp =  !($context["hide_structure_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 253
                    yield "                    </ul>
                  ";
                } else {
                    // line 255
                    yield "                    </ul>
                  </div>
                  ";
                }
                // line 258
                yield "                </td>
            ";
            }
            // line 260
            yield "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        yield "        </tbody>
    </table>
    </div>
    <div class=\"d-print-none\">
        ";
        // line 266
        yield from $this->load("select_all.twig", 266)->unwrap()->yield(CoreExtension::toArray(["form_name" => "fieldsForm"]));
        // line 269
        yield "
        <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
        // line 270
        yield PhpMyAdmin\Url::getFromRoute("/table/structure/browse");
        yield "\">
          ";
        // line 271
        yield PhpMyAdmin\Html\Generator::getIcon("b_browse", \_gettext("Browse"));
        yield "
        </button>

        ";
        // line 274
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 275
            yield "          <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/structure/change");
            yield "\">
            ";
            // line 276
            yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Change"));
            yield "
          </button>
          <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
            // line 278
            yield PhpMyAdmin\Url::getFromRoute("/table/structure/drop-confirm");
            yield "\">
            ";
            // line 279
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Drop"));
            yield "
          </button>

          ";
            // line 282
            if ((($context["tbl_storage_engine"] ?? null) != "ARCHIVE")) {
                // line 283
                yield "            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                yield PhpMyAdmin\Url::getFromRoute("/table/structure/primary");
                yield "\">
              ";
                // line 284
                yield PhpMyAdmin\Html\Generator::getIcon("b_primary", \_gettext("Primary"));
                yield "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 286
                yield PhpMyAdmin\Url::getFromRoute("/table/structure/unique");
                yield "\">
              ";
                // line 287
                yield PhpMyAdmin\Html\Generator::getIcon("b_unique", \_gettext("Unique"));
                yield "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 289
                yield PhpMyAdmin\Url::getFromRoute("/table/structure/index");
                yield "\">
              ";
                // line 290
                yield PhpMyAdmin\Html\Generator::getIcon("b_index", \_gettext("Index"));
                yield "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 292
                yield PhpMyAdmin\Url::getFromRoute("/table/structure/spatial");
                yield "\">
              ";
                // line 293
                yield PhpMyAdmin\Html\Generator::getIcon("b_spatial", \_gettext("Spatial"));
                yield "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 295
                yield PhpMyAdmin\Url::getFromRoute("/table/structure/fulltext");
                yield "\">
              ";
                // line 296
                yield PhpMyAdmin\Html\Generator::getIcon("b_ftext", \_gettext("Fulltext"));
                yield "
            </button>

            ";
                // line 299
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "centralColumnsFeature", [], "any", false, false, false, 299))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 300
                    yield "              <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                    yield PhpMyAdmin\Url::getFromRoute("/table/structure/central-columns-add");
                    yield "\">
                ";
                    // line 301
                    yield PhpMyAdmin\Html\Generator::getIcon("centralColumns_add", \_gettext("Add to central columns"));
                    yield "
              </button>
              <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                    // line 303
                    yield PhpMyAdmin\Url::getFromRoute("/table/structure/central-columns-remove");
                    yield "\">
                ";
                    // line 304
                    yield PhpMyAdmin\Html\Generator::getIcon("centralColumns_delete", \_gettext("Remove from central columns"));
                    yield "
              </button>
            ";
                }
                // line 307
                yield "          ";
            }
            // line 308
            yield "        ";
        }
        // line 309
        yield "    </div>
</form>
<hr class=\"d-print-none\">

<div class=\"modal fade\" id=\"moveColumnsModal\" tabindex=\"-1\" aria-labelledby=\"moveColumnsModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"moveColumnsModalLabel\">";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Move columns"), "html", null, true);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"move_columns_dialog\" title=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Move columns"), "html", null, true);
        yield "\">
          <p>";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Move the columns by dragging them up and down."), "html", null, true);
        yield "</p>
          <form action=\"";
        // line 323
        yield PhpMyAdmin\Url::getFromRoute("/table/structure/move-columns");
        yield "\" name=\"move_column_form\" id=\"move_column_form\">
            <div>
              ";
        // line 325
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
              <ul></ul>
            </div>
          </form>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\" id=\"designerModalGoButton\">";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalPreviewButton\" data-bs-target=\"#designerModalPreviewModal\" data-bs-toggle=\"modal\">";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Preview SQL"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalCloseButton\" data-bs-dismiss=\"modal\">";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"designerModalPreviewModal\" aria-hidden=\"true\" aria-labelledby=\"designerModalPreviewModalLabel\" tabindex=\"-1\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"designerModalPreviewModalLabel\">";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Preview SQL"), "html", null, true);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading…"), "html", null, true);
        yield "</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-primary\" data-bs-target=\"#moveColumnsModal\" data-bs-toggle=\"modal\">";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go back"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"moveColumnsErrorModal\" tabindex=\"-1\" aria-labelledby=\"moveColumnsErrorModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"moveColumnsErrorModalLabel\">";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Error"), "html", null, true);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("OK"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 374
        yield "<div id=\"structure-action-links\" class=\"d-print-none\">
    ";
        // line 375
        if ((($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 376
            yield "        ";
            yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/view/create"), ["db" =>             // line 378
($context["db"] ?? null), "table" => ($context["table"] ?? null)], PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit view"), true));
            // line 380
            yield "
    ";
        }
        // line 382
        yield "    <button type=\"button\" class=\"btn btn-link p-0 jsPrintButton\">";
        yield PhpMyAdmin\Html\Generator::getIcon("b_print", \_gettext("Print"), true);
        yield "</button>
    ";
        // line 383
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 384
            yield "        ";
            // line 385
            yield "        ";
            if (((($context["mysql_int_version"] ?? null) < 80000) || ($context["is_mariadb"] ?? null))) {
                // line 386
                yield "          <a class=\"me-0\" href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/sql");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["db" =>                 // line 387
($context["db"] ?? null), "table" =>                 // line 388
($context["table"] ?? null), "sql_query" => (("SELECT * FROM " . PhpMyAdmin\Util::backquote(                // line 389
($context["table"] ?? null))) . " PROCEDURE ANALYSE()"), "session_max_rows" => "all"], "", false);
                // line 391
                yield "\">
            ";
                // line 392
                yield PhpMyAdmin\Html\Generator::getIcon("b_tblanalyse", \_gettext("Propose table structure"), true);
                // line 396
                yield "
          </a>
          ";
                // line 398
                yield PhpMyAdmin\Html\MySQLDocumentation::show("procedure_analyse");
                yield "
        ";
            }
            // line 400
            yield "        ";
            if ((($tmp = ($context["is_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 401
                yield "            <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                yield "\">
                ";
                // line 402
                yield PhpMyAdmin\Html\Generator::getIcon("eye", \_gettext("Track table"), true);
                yield "
            </a>
        ";
            }
            // line 405
            yield "        <a href=\"#\" id=\"move_columns_anchor\">
            ";
            // line 406
            yield PhpMyAdmin\Html\Generator::getIcon("b_move", \_gettext("Move columns"), true);
            yield "
        </a>
        <a href=\"";
            // line 408
            yield PhpMyAdmin\Url::getFromRoute("/normalization", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
            yield "\">
            ";
            // line 409
            yield PhpMyAdmin\Html\Generator::getIcon("normalize", \_gettext("Normalize"), true);
            yield "
        </a>
        <a href=\"";
            // line 411
            yield PhpMyAdmin\Url::getFromRoute("/database/structure/show-create");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" =>             // line 412
($context["db"] ?? null), "selected_tbl[]" =>             // line 413
($context["table"] ?? null), "sql_query" => "", "session_max_rows" => "all"], "", false);
            // line 416
            yield "\">
            ";
            // line 417
            yield PhpMyAdmin\Html\Generator::getIcon("b_sql", \_gettext("Show create"), true);
            yield "
        </a>
    ";
        }
        // line 420
        yield "    ";
        if ((($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 421
            yield "        ";
            if ((($tmp = ($context["is_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 422
                yield "            <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                yield "\">
                ";
                // line 423
                yield PhpMyAdmin\Html\Generator::getIcon("eye", \_gettext("Track view"), true);
                yield "
            </a>
        ";
            }
            // line 426
            yield "    ";
        }
        // line 427
        yield "</div>
";
        // line 428
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 429
            yield "    <form method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/add-field");
            yield "\" id=\"addColumns\" name=\"addColumns\" class=\"d-print-none\">
        ";
            // line 430
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            yield "
        ";
            // line 431
            if ((($tmp = PhpMyAdmin\Util::showIcons("ActionLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 432
                yield "            ";
                yield PhpMyAdmin\Html\Generator::getImage("b_insrow", \_gettext("Add column"));
                yield "&nbsp;
        ";
            }
            // line 434
            yield "        ";
            $context["num_fields"] = new Markup("<input type=\"number\" name=\"num_fields\" value=\"1\" onfocus=\"this.select()\" min=\"1\" required>", $this->env->getCharset());
            // line 437
            yield "        ";
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("Add %s column(s)"), ($context["num_fields"] ?? null));
            yield "
        <input type=\"hidden\" name=\"field_where\" value=\"after\">&nbsp;
        ";
            // line 440
            yield "        <select name=\"after_field\">
            <option value=\"first\" data-pos=\"first\">
                ";
            // line 442
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("at beginning of table"), "html", null, true);
            yield "
            </option>
            ";
            // line 444
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["columns_list"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["one_column_name"]) {
                // line 445
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["one_column_name"], "html", null, true);
                yield "\"";
                // line 446
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "revindex0", [], "any", false, false, false, 446) == 0)) ? (" selected") : (""));
                yield ">
                    ";
                // line 447
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("after %s"), $context["one_column_name"]), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['one_column_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 450
            yield "        </select>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 451
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
    </form>
";
        }
        // line 454
        yield "
";
        // line 455
        if ((( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null)) && (($context["tbl_storage_engine"] ?? null) != "ARCHIVE"))) {
            // line 456
            yield "  <div id=\"index_div\" class=\"card mb-3 ajax\">
    <div class=\"card-header\">
      ";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Indexes"), "html", null, true);
            yield "
      ";
            // line 459
            yield PhpMyAdmin\Html\MySQLDocumentation::show("optimizing-database-structure");
            yield "
    </div>

    <div class=\"card-body index_info\">
      ";
            // line 463
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["indexes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 464
                yield "        ";
                yield ($context["indexes_duplicates"] ?? null);
                yield "

        ";
                // line 466
                yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/preview_sql_confirmation.twig");
                yield "
        <div class=\"table-responsive jsresponsive\">
          <table class=\"table table-striped table-hover table-sm w-auto align-middle\" id=\"table_index\">
            <thead>
              <tr>
                <th colspan=\"3\" class=\"d-print-none\">";
                // line 471
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
                yield "</th>
                <th>";
                // line 472
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Keyname"), "html", null, true);
                yield "</th>
                <th>";
                // line 473
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
                yield "</th>
                <th>";
                // line 474
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Unique"), "html", null, true);
                yield "</th>
                <th>";
                // line 475
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Packed"), "html", null, true);
                yield "</th>
                <th>";
                // line 476
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
                yield "</th>
                <th>";
                // line 477
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cardinality"), "html", null, true);
                yield "</th>
                <th>";
                // line 478
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
                yield "</th>
                <th>";
                // line 479
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
                yield "</th>
                <th>";
                // line 480
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comment"), "html", null, true);
                yield "</th>
              </tr>
            </thead>

          <tbody class=\"row_span\">
            ";
                // line 485
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["indexes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                    // line 486
                    yield "                ";
                    $context["columns_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getColumnCount", [], "method", false, false, false, 486);
                    // line 487
                    yield "                <tr class=\"noclick\">
                <td rowspan=\"";
                    // line 488
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns_count"] ?? null), "html", null, true);
                    yield "\" class=\"edit_index d-print-none ajax\">
                  <a class=\"ajax\" href=\"";
                    // line 489
                    yield PhpMyAdmin\Url::getFromRoute("/table/indexes");
                    yield "\" data-post=\"";
                    yield PhpMyAdmin\Url::getCommon(["db" =>                     // line 490
($context["db"] ?? null), "table" =>                     // line 491
($context["table"] ?? null), "index" => CoreExtension::getAttribute($this->env, $this->source,                     // line 492
$context["index"], "getName", [], "method", false, false, false, 492)], "", false);
                    // line 493
                    yield "\">
                    ";
                    // line 494
                    yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit"));
                    yield "
                  </a>
                </td>
                <td rowspan=\"";
                    // line 497
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns_count"] ?? null), "html", null, true);
                    yield "\" class=\"rename_index d-print-none ajax\" >
                  <a class=\"ajax\" href=\"";
                    // line 498
                    yield PhpMyAdmin\Url::getFromRoute("/table/indexes/rename");
                    yield "\" data-post=\"";
                    yield PhpMyAdmin\Url::getCommon(["db" =>                     // line 499
($context["db"] ?? null), "table" =>                     // line 500
($context["table"] ?? null), "index" => CoreExtension::getAttribute($this->env, $this->source,                     // line 501
$context["index"], "getName", [], "method", false, false, false, 501)], "", false);
                    // line 502
                    yield "\">
                    ";
                    // line 503
                    yield PhpMyAdmin\Html\Generator::getIcon("b_rename", \_gettext("Rename"));
                    yield "
                  </a>
                </td>
                <td rowspan=\"";
                    // line 506
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns_count"] ?? null), "html", null, true);
                    yield "\" class=\"d-print-none\">
                  ";
                    // line 507
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 507) == "PRIMARY")) {
                        // line 508
                        yield "                    ";
                        $context["index_params"] = ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(                        // line 509
($context["table"] ?? null))) . " DROP PRIMARY KEY;"), "message_to_show" => \_gettext("The primary key has been dropped.")];
                        // line 512
                        yield "                  ";
                    } else {
                        // line 513
                        yield "                    ";
                        $context["index_params"] = ["sql_query" => (((("ALTER TABLE " . PhpMyAdmin\Util::backquote(                        // line 514
($context["table"] ?? null))) . " DROP INDEX ") . PhpMyAdmin\Util::backquote(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 514))) . ";"), "message_to_show" => Twig\Extension\CoreExtension::sprintf(\_gettext("Index %s has been dropped."), CoreExtension::getAttribute($this->env, $this->source,                         // line 515
$context["index"], "getName", [], "method", false, false, false, 515))];
                        // line 517
                        yield "                  ";
                    }
                    // line 518
                    yield "
                  <input type=\"hidden\" class=\"drop_primary_key_index_msg\" value=\"";
                    // line 519
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["index_params"] ?? null), "sql_query", [], "any", false, false, false, 519), "html", null, true);
                    yield "\">
                  ";
                    // line 520
                    yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), Twig\Extension\CoreExtension::merge(                    // line 522
($context["index_params"] ?? null), ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]), PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Drop")), ["class" => "drop_primary_key_index_anchor ajax"]);
                    // line 525
                    yield "
                </td>
                <th rowspan=\"";
                    // line 527
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns_count"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 527), "html", null, true);
                    yield "</th>
                <td rowspan=\"";
                    // line 528
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns_count"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getType", [], "method", true, true, false, 528)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getType", [], "method", false, false, false, 528), CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 528))) : (CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 528))), "html", null, true);
                    yield "</td>
                <td rowspan=\"";
                    // line 529
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns_count"] ?? null), "html", null, true);
                    yield "\">";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["index"], "isUnique", [], "method", false, false, false, 529)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
                    yield "</td>
                <td rowspan=\"";
                    // line 530
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns_count"] ?? null), "html", null, true);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["index"], "isPacked", [], "method", false, false, false, 530);
                    yield "</td>

                ";
                    // line 532
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getColumns", [], "method", false, false, false, 532));
                    foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                        // line 533
                        yield "                  ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 533) > 1)) {
                            // line 534
                            yield "                    <tr class=\"noclick\">
                  ";
                        }
                        // line 536
                        yield "                  <td>
                    ";
                        // line 537
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "hasExpression", [], "method", false, false, false, 537)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getExpression", [], "method", false, false, false, 537), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 537), "html", null, true);
                        }
                        // line 538
                        yield "                    ";
                        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 538))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 539
                            yield "                      (";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 539), "html", null, true);
                            yield ")
                    ";
                        }
                        // line 541
                        yield "                  </td>
                  <td>";
                        // line 542
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getCardinality", [], "method", false, false, false, 542), "html", null, true);
                        yield "</td>
                  <td>";
                        // line 543
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getCollation", [], "method", false, false, false, 543), "html", null, true);
                        yield "</td>
                  <td>";
                        // line 544
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getNull", [], "method", false, false, false, 544), "html", null, true);
                        yield "</td>

                  ";
                        // line 546
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 546) == 1)) {
                            // line 547
                            yield "                    <td rowspan=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns_count"] ?? null), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getComments", [], "method", false, false, false, 547), "html", null, true);
                            yield "</td>
                  ";
                        }
                        // line 549
                        yield "                  </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 551
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['index'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 552
                yield "            </tbody>
          </table>
        </div>
      ";
            } else {
                // line 556
                yield "        <div class=\"no_indexes_defined\">";
                yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("No index defined!"));
                yield "</div>
      ";
            }
            // line 558
            yield "    </div>

    <div class=\"card-footer d-print-none\">
      <form action=\"";
            // line 561
            yield PhpMyAdmin\Url::getFromRoute("/table/indexes");
            yield "\" method=\"post\">
        ";
            // line 562
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            yield "
        <input type=\"hidden\" name=\"create_index\" value=\"1\">

        ";
            // line 565
            $_v17 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 566
                yield "          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create an index on %s columns"), "html", null, true);
                yield "
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 565
            yield Twig\Extension\CoreExtension::sprintf($_v17, "<input class=\"mx-2\" type=\"number\" name=\"added_fields\" value=\"1\" min=\"1\" max=\"16\" required>");
            // line 568
            yield "
        <input class=\"btn btn-primary add_index ajax\" type=\"submit\" value=\"";
            // line 569
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
      </form>
    </div>
  </div>
  ";
            // line 573
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/index_dialog_modal.twig");
            yield "
";
        }
        // line 575
        yield "
";
        // line 577
        if ((($tmp = ($context["have_partitioning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 578
            yield "    ";
            // line 579
            yield "    ";
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["partition_names"] ?? null)) &&  !(null === (($_v18 = ($context["partition_names"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[0] ?? null) : null)))) {
                // line 580
                yield "        ";
                $context["first_partition"] = (($_v19 = ($context["partitions"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[0] ?? null) : null);
                // line 581
                yield "        ";
                $context["range_or_list"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 581) == "RANGE") || (CoreExtension::getAttribute($this->env, $this->source,                 // line 582
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 582) == "RANGE COLUMNS")) || (CoreExtension::getAttribute($this->env, $this->source,                 // line 583
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 583) == "LIST")) || (CoreExtension::getAttribute($this->env, $this->source,                 // line 584
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 584) == "LIST COLUMNS"));
                // line 585
                yield "        ";
                $context["sub_partitions"] = CoreExtension::getAttribute($this->env, $this->source, ($context["first_partition"] ?? null), "getSubPartitions", [], "method", false, false, false, 585);
                // line 586
                yield "        ";
                $context["has_sub_partitions"] = CoreExtension::getAttribute($this->env, $this->source, ($context["first_partition"] ?? null), "hasSubPartitions", [], "method", false, false, false, 586);
                // line 587
                yield "        ";
                if ((($tmp = ($context["has_sub_partitions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 588
                    yield "            ";
                    $context["first_sub_partition"] = (($_v20 = ($context["sub_partitions"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[0] ?? null) : null);
                    // line 589
                    yield "        ";
                }
                // line 590
                yield "
        ";
                // line 591
                if ((($context["default_sliders_state"] ?? null) != "disabled")) {
                    // line 592
                    yield "        <div class=\"mb-3\">
          <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#partitionsCollapse\" aria-expanded=\"";
                    // line 593
                    yield (((($context["default_sliders_state"] ?? null) == "open")) ? ("true") : ("false"));
                    yield "\" aria-controls=\"partitionsCollapse\">
            ";
                    // line 594
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partitions"), "html", null, true);
                    yield "
          </button>
        </div>
        <div class=\"collapse mb-3";
                    // line 597
                    yield (((($context["default_sliders_state"] ?? null) == "open")) ? (" show") : (""));
                    yield "\" id=\"partitionsCollapse\">
        ";
                }
                // line 599
                yield "
        ";
                // line 600
                yield from $this->load("table/structure/display_partitions.twig", 600)->unwrap()->yield(CoreExtension::toArray(["db" =>                 // line 601
($context["db"] ?? null), "table" =>                 // line 602
($context["table"] ?? null), "partitions" =>                 // line 603
($context["partitions"] ?? null), "partition_method" => CoreExtension::getAttribute($this->env, $this->source,                 // line 604
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 604), "partition_expression" => CoreExtension::getAttribute($this->env, $this->source,                 // line 605
($context["first_partition"] ?? null), "getExpression", [], "method", false, false, false, 605), "has_description" =>  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,                 // line 606
($context["first_partition"] ?? null), "getDescription", [], "method", false, false, false, 606)), "has_sub_partitions" =>                 // line 607
($context["has_sub_partitions"] ?? null), "sub_partition_method" => (((($tmp =                 // line 608
($context["has_sub_partitions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["first_sub_partition"] ?? null), "getMethod", [], "method", false, false, false, 608)) : ("")), "sub_partition_expression" => (((($tmp =                 // line 609
($context["has_sub_partitions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["first_sub_partition"] ?? null), "getExpression", [], "method", false, false, false, 609)) : ("")), "range_or_list" =>                 // line 610
($context["range_or_list"] ?? null)]));
                // line 612
                yield "    ";
            } else {
                // line 613
                yield "        ";
                yield from $this->load("table/structure/display_partitions.twig", 613)->unwrap()->yield(CoreExtension::toArray(["db" =>                 // line 614
($context["db"] ?? null), "table" =>                 // line 615
($context["table"] ?? null)]));
                // line 617
                yield "    ";
            }
            // line 618
            yield "    ";
            if ((($context["default_sliders_state"] ?? null) != "disabled")) {
                // line 619
                yield "    </div>
    ";
            }
        }
        // line 622
        yield "
";
        // line 624
        if ((($tmp = ($context["show_stats"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 625
            yield "    ";
            yield ($context["table_stats"] ?? null);
            yield "
";
        }
        // line 627
        yield "<div class=\"clearfloat\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/structure/display_structure.twig";
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
        return array (  1503 => 627,  1497 => 625,  1495 => 624,  1492 => 622,  1487 => 619,  1484 => 618,  1481 => 617,  1479 => 615,  1478 => 614,  1476 => 613,  1473 => 612,  1471 => 610,  1470 => 609,  1469 => 608,  1468 => 607,  1467 => 606,  1466 => 605,  1465 => 604,  1464 => 603,  1463 => 602,  1462 => 601,  1461 => 600,  1458 => 599,  1453 => 597,  1447 => 594,  1443 => 593,  1440 => 592,  1438 => 591,  1435 => 590,  1432 => 589,  1429 => 588,  1426 => 587,  1423 => 586,  1420 => 585,  1418 => 584,  1417 => 583,  1416 => 582,  1414 => 581,  1411 => 580,  1408 => 579,  1406 => 578,  1404 => 577,  1401 => 575,  1396 => 573,  1389 => 569,  1386 => 568,  1384 => 565,  1377 => 566,  1375 => 565,  1369 => 562,  1365 => 561,  1360 => 558,  1354 => 556,  1348 => 552,  1342 => 551,  1335 => 549,  1327 => 547,  1325 => 546,  1320 => 544,  1316 => 543,  1312 => 542,  1309 => 541,  1303 => 539,  1300 => 538,  1294 => 537,  1291 => 536,  1287 => 534,  1284 => 533,  1280 => 532,  1273 => 530,  1267 => 529,  1261 => 528,  1255 => 527,  1251 => 525,  1249 => 522,  1248 => 520,  1244 => 519,  1241 => 518,  1238 => 517,  1236 => 515,  1235 => 514,  1233 => 513,  1230 => 512,  1228 => 509,  1226 => 508,  1224 => 507,  1220 => 506,  1214 => 503,  1211 => 502,  1209 => 501,  1208 => 500,  1207 => 499,  1204 => 498,  1200 => 497,  1194 => 494,  1191 => 493,  1189 => 492,  1188 => 491,  1187 => 490,  1184 => 489,  1180 => 488,  1177 => 487,  1174 => 486,  1170 => 485,  1162 => 480,  1158 => 479,  1154 => 478,  1150 => 477,  1146 => 476,  1142 => 475,  1138 => 474,  1134 => 473,  1130 => 472,  1126 => 471,  1118 => 466,  1112 => 464,  1110 => 463,  1103 => 459,  1099 => 458,  1095 => 456,  1093 => 455,  1090 => 454,  1084 => 451,  1081 => 450,  1064 => 447,  1060 => 446,  1056 => 445,  1039 => 444,  1034 => 442,  1030 => 440,  1024 => 437,  1021 => 434,  1015 => 432,  1013 => 431,  1009 => 430,  1004 => 429,  1002 => 428,  999 => 427,  996 => 426,  990 => 423,  985 => 422,  982 => 421,  979 => 420,  973 => 417,  970 => 416,  968 => 413,  967 => 412,  964 => 411,  959 => 409,  955 => 408,  950 => 406,  947 => 405,  941 => 402,  936 => 401,  933 => 400,  928 => 398,  924 => 396,  922 => 392,  919 => 391,  917 => 389,  916 => 388,  915 => 387,  911 => 386,  908 => 385,  906 => 384,  904 => 383,  899 => 382,  895 => 380,  893 => 378,  891 => 376,  889 => 375,  886 => 374,  877 => 367,  869 => 362,  865 => 361,  853 => 352,  846 => 348,  839 => 344,  835 => 343,  823 => 334,  819 => 333,  815 => 332,  805 => 325,  800 => 323,  796 => 322,  792 => 321,  786 => 318,  782 => 317,  772 => 309,  769 => 308,  766 => 307,  760 => 304,  756 => 303,  751 => 301,  746 => 300,  744 => 299,  738 => 296,  734 => 295,  729 => 293,  725 => 292,  720 => 290,  716 => 289,  711 => 287,  707 => 286,  702 => 284,  697 => 283,  695 => 282,  689 => 279,  685 => 278,  680 => 276,  675 => 275,  673 => 274,  667 => 271,  663 => 270,  660 => 269,  658 => 266,  652 => 262,  645 => 260,  641 => 258,  636 => 255,  632 => 253,  629 => 252,  625 => 250,  619 => 247,  616 => 246,  614 => 245,  613 => 244,  612 => 243,  606 => 242,  600 => 239,  597 => 238,  595 => 237,  594 => 236,  593 => 235,  587 => 234,  585 => 233,  580 => 232,  578 => 231,  572 => 228,  569 => 227,  567 => 225,  566 => 224,  565 => 223,  564 => 222,  563 => 220,  562 => 219,  557 => 218,  552 => 217,  548 => 214,  540 => 212,  534 => 209,  531 => 208,  529 => 206,  523 => 205,  521 => 204,  520 => 203,  519 => 202,  518 => 201,  517 => 200,  516 => 199,  511 => 198,  507 => 195,  501 => 192,  498 => 191,  496 => 189,  490 => 188,  482 => 186,  480 => 185,  475 => 184,  473 => 174,  469 => 172,  463 => 169,  460 => 168,  458 => 166,  452 => 165,  444 => 163,  442 => 162,  438 => 161,  434 => 159,  428 => 156,  425 => 155,  423 => 153,  417 => 152,  409 => 150,  407 => 149,  403 => 148,  399 => 146,  393 => 143,  390 => 142,  388 => 140,  382 => 139,  374 => 137,  372 => 136,  367 => 135,  363 => 133,  357 => 130,  354 => 129,  352 => 128,  349 => 127,  346 => 126,  344 => 125,  341 => 124,  334 => 120,  331 => 119,  329 => 118,  328 => 116,  327 => 115,  326 => 114,  325 => 113,  322 => 112,  315 => 108,  312 => 107,  310 => 105,  309 => 104,  308 => 103,  307 => 102,  304 => 101,  302 => 100,  297 => 99,  291 => 96,  288 => 95,  286 => 94,  283 => 93,  278 => 91,  275 => 89,  273 => 88,  270 => 86,  267 => 84,  265 => 83,  263 => 82,  259 => 80,  255 => 79,  252 => 78,  244 => 76,  242 => 75,  237 => 72,  229 => 70,  227 => 69,  226 => 68,  222 => 67,  217 => 65,  210 => 62,  204 => 60,  196 => 58,  194 => 57,  190 => 56,  185 => 54,  178 => 52,  173 => 49,  171 => 48,  168 => 47,  166 => 46,  163 => 45,  161 => 44,  158 => 43,  155 => 42,  150 => 41,  147 => 40,  142 => 36,  136 => 34,  133 => 33,  130 => 32,  125 => 30,  120 => 28,  118 => 27,  114 => 26,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  88 => 17,  83 => 13,  80 => 12,  77 => 10,  75 => 9,  73 => 8,  71 => 7,  67 => 5,  63 => 4,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/structure/display_structure.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/structure/display_structure.twig");
    }
}
