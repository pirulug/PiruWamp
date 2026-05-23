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

/* columns_definitions/partitions.twig */
class __TwigTemplate_4bbed1a07b34b9ee52f8988fb88c6ed7 extends Template
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
        $context["partition_options"] = ["", "HASH", "LINEAR HASH", "KEY", "LINEAR KEY", "RANGE", "RANGE COLUMNS", "LIST", "LIST COLUMNS"];
        // line 12
        $context["sub_partition_options"] = ["", "HASH", "LINEAR HASH", "KEY", "LINEAR KEY"];
        // line 13
        $context["value_type_options"] = ["", "LESS THAN", "LESS THAN MAXVALUE", "IN"];
        // line 14
        yield "
<table class=\"table table-borderless w-auto align-middle mb-0\" id=\"partition_table\">
    <tr class=\"align-middle\">
        <td><label for=\"partition_by\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partition by:"), "html", null, true);
        yield "</label></td>
        <td>
            <select name=\"partition_by\" id=\"partition_by\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["partition_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 21
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "\"";
            // line 22
            if (((($_v0 = ($context["partition_details"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["partition_by"] ?? null) : null) == $context["option"])) {
                // line 23
                yield "                            selected";
            }
            // line 24
            yield ">
                        ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "            </select>
        </td>
        <td>
            (<input name=\"partition_expr\" type=\"text\"
                placeholder=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Expression or column list"), "html", null, true);
        yield "\"
                value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["partition_details"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["partition_expr"] ?? null) : null), "html", null, true);
        yield "\">)
        </td>
    </tr>
    <tr class=\"align-middle\">
        <td><label for=\"partition_count\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partitions:"), "html", null, true);
        yield "</label></td>
        <td colspan=\"2\">
            <input name=\"partition_count\" type=\"number\" min=\"2\"
                value=\"";
        // line 40
        yield (((($_v2 = ($context["partition_details"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["partition_count"] ?? null) : null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["partition_details"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["partition_count"] ?? null) : null), "html", null, true)) : (""));
        yield "\">
        </td>
    </tr>
    ";
        // line 43
        if ((($tmp = (($_v4 = ($context["partition_details"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["can_have_subpartitions"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "        <tr class=\"align-middle\">
            <td><label for=\"subpartition_by\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Subpartition by:"), "html", null, true);
            yield "</label></td>
            <td>
                <select name=\"subpartition_by\" id=\"subpartition_by\">
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["sub_partition_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 49
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "\"";
                // line 50
                if (((($_v5 = ($context["partition_details"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["subpartition_by"] ?? null) : null) == $context["option"])) {
                    // line 51
                    yield "                            selected";
                }
                // line 52
                yield ">
                        ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                </select>
            </td>
            <td>
                (<input name=\"subpartition_expr\" type=\"text\"
                    placeholder=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Expression or column list"), "html", null, true);
            yield "\"
                    value=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = ($context["partition_details"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["subpartition_expr"] ?? null) : null), "html", null, true);
            yield "\">)
            </td>
        </tr>
        <tr class=\"align-middle\">
            <td><label for=\"subpartition_count\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Subpartitions:"), "html", null, true);
            yield "</label></td>
            <td colspan=\"2\">
                <input name=\"subpartition_count\" type=\"number\" min=\"2\"
                    value=\"";
            // line 68
            yield (((($_v7 = ($context["partition_details"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["subpartition_count"] ?? null) : null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = ($context["partition_details"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["subpartition_count"] ?? null) : null), "html", null, true)) : (""));
            yield "\">
            </td>
        </tr>
    ";
        }
        // line 72
        yield "</table>
";
        // line 73
        if (((($_v9 = ($context["partition_details"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["partition_count"] ?? null) : null) > 1)) {
            // line 74
            yield "    <table class=\"table align-middle\" id=\"partition_definition_table\">
        <thead><tr>
            <th>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partition"), "html", null, true);
            yield "</th>
            ";
            // line 77
            if ((($tmp = (($_v10 = ($context["partition_details"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["value_enabled"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Values"), "html", null, true);
                yield "</th>
            ";
            }
            // line 80
            yield "            ";
            if (((($_v11 = ($context["partition_details"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["can_have_subpartitions"] ?? null) : null) && ((($_v12 =             // line 81
($context["partition_details"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["subpartition_count"] ?? null) : null) > 1))) {
                // line 82
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Subpartition"), "html", null, true);
                yield "</th>
            ";
            }
            // line 84
            yield "            <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Engine"), "html", null, true);
            yield "</th>
            <th>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comment"), "html", null, true);
            yield "</th>
            <th>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Data directory"), "html", null, true);
            yield "</th>
            <th>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index directory"), "html", null, true);
            yield "</th>
            <th>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Max rows"), "html", null, true);
            yield "</th>
            <th>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Min rows"), "html", null, true);
            yield "</th>
            <th>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table space"), "html", null, true);
            yield "</th>
            <th>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Node group"), "html", null, true);
            yield "</th>
        </tr></thead>
        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v13 = ($context["partition_details"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["partitions"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 94
                yield "            ";
                $context["rowspan"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v14 = $context["partition"]) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["subpartition_count"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((($_v15 =                 // line 95
$context["partition"]) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["subpartition_count"] ?? null) : null) + 1)) : (2));
                // line 96
                yield "            <tr>
                <td rowspan=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowspan"] ?? null), "html", null, true);
                yield "\">
                    <input type=\"text\" name=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v16 = $context["partition"]) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["prefix"] ?? null) : null), "html", null, true);
                yield "[name]\"
                        value=\"";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v17 = $context["partition"]) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["name"] ?? null) : null), "html", null, true);
                yield "\">
                </td>
                ";
                // line 101
                if ((($tmp = (($_v18 = ($context["partition_details"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["value_enabled"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 102
                    yield "                    <td rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowspan"] ?? null), "html", null, true);
                    yield "\" class=\"align-middle\">
                        <select class=\"partition_value\"
                            name=\"";
                    // line 104
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v19 = $context["partition"]) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["prefix"] ?? null) : null), "html", null, true);
                    yield "[value_type]\">
                            ";
                    // line 105
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["value_type_options"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 106
                        yield "                                <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                        yield "\"";
                        // line 107
                        if (((($_v20 = $context["partition"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["value_type"] ?? null) : null) == $context["option"])) {
                            // line 108
                            yield "                                        selected";
                        }
                        // line 109
                        yield ">
                                    ";
                        // line 110
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                        yield "
                                </option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 113
                    yield "                        </select>
                        <input type=\"text\" class=\"partition_value\"
                            name=\"";
                    // line 115
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v21 = $context["partition"]) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["prefix"] ?? null) : null), "html", null, true);
                    yield "[value]\"
                            value=\"";
                    // line 116
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v22 = $context["partition"]) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["value"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                ";
                }
                // line 119
                yield "            </tr>

            ";
                // line 121
                if (CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "subpartitions", [], "array", true, true, false, 121)) {
                    // line 122
                    yield "                ";
                    $context["subpartitions"] = (($_v23 = $context["partition"]) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["subpartitions"] ?? null) : null);
                    // line 123
                    yield "            ";
                } else {
                    // line 124
                    yield "                ";
                    $context["subpartitions"] = [$context["partition"]];
                    // line 125
                    yield "            ";
                }
                // line 126
                yield "
            ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["subpartitions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["subpartition"]) {
                    // line 128
                    yield "                <tr>
                    ";
                    // line 129
                    if (((($_v24 = ($context["partition_details"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["can_have_subpartitions"] ?? null) : null) && ((($_v25 =                     // line 130
($context["partition_details"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["subpartition_count"] ?? null) : null) > 1))) {
                        // line 131
                        yield "                        <td>
                            <input type=\"text\" name=\"";
                        // line 132
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v26 = $context["subpartition"]) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["prefix"] ?? null) : null), "html", null, true);
                        yield "[name]\"
                                value=\"";
                        // line 133
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v27 = $context["subpartition"]) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["name"] ?? null) : null), "html", null, true);
                        yield "\">
                        </td>
                    ";
                    }
                    // line 136
                    yield "                    <td>
                      <select name=\"";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v28 = $context["subpartition"]) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["prefix"] ?? null) : null), "html", null, true);
                    yield "[engine]\" aria-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage engine"), "html", null, true);
                    yield "\">
                        <option value=\"\"></option>
                        ";
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["storage_engines"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
                        // line 140
                        yield "                          <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 140), "html", null, true);
                        yield "\"";
                        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 140))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 140), "html", null, true);
                            yield "\"";
                        }
                        // line 141
                        yield (((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 141)) == Twig\Extension\CoreExtension::lower($this->env->getCharset(), (($_v29 = $context["subpartition"]) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["engine"] ?? null) : null)))) ? (" selected") : (""));
                        yield ">";
                        // line 142
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 142), "html", null, true);
                        // line 143
                        yield "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['engine'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    yield "                      </select>
                    </td>
                    <td>
                        <textarea name=\"";
                    // line 148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v30 = $context["subpartition"]) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["prefix"] ?? null) : null), "html", null, true);
                    yield "[comment]\">";
                    // line 149
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v31 = $context["subpartition"]) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["comment"] ?? null) : null), "html", null, true);
                    // line 150
                    yield "</textarea>
                    </td>
                    <td>
                        <input type=\"text\" name=\"";
                    // line 153
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v32 = $context["subpartition"]) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["prefix"] ?? null) : null), "html", null, true);
                    yield "[data_directory]\"
                            value=\"";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v33 = $context["subpartition"]) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["data_directory"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"";
                    // line 157
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v34 = $context["subpartition"]) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["prefix"] ?? null) : null), "html", null, true);
                    yield "[index_directory]\"
                            value=\"";
                    // line 158
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v35 = $context["subpartition"]) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["index_directory"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"number\" name=\"";
                    // line 161
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v36 = $context["subpartition"]) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["prefix"] ?? null) : null), "html", null, true);
                    yield "[max_rows]\"
                            value=\"";
                    // line 162
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v37 = $context["subpartition"]) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["max_rows"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"number\" min=\"0\" name=\"";
                    // line 165
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v38 = $context["subpartition"]) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["prefix"] ?? null) : null), "html", null, true);
                    yield "[min_rows]\"
                            value=\"";
                    // line 166
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v39 = $context["subpartition"]) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39["min_rows"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"text\" min=\"0\" name=\"";
                    // line 169
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v40 = $context["subpartition"]) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["prefix"] ?? null) : null), "html", null, true);
                    yield "[tablespace]\"
                            value=\"";
                    // line 170
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v41 = $context["subpartition"]) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["tablespace"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"";
                    // line 173
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v42 = $context["subpartition"]) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42["prefix"] ?? null) : null), "html", null, true);
                    yield "[node_group]\"
                            value=\"";
                    // line 174
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v43 = $context["subpartition"]) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["node_group"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['subpartition'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['partition'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            yield "    </table>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/partitions.twig";
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
        return array (  483 => 179,  477 => 178,  467 => 174,  463 => 173,  457 => 170,  453 => 169,  447 => 166,  443 => 165,  437 => 162,  433 => 161,  427 => 158,  423 => 157,  417 => 154,  413 => 153,  408 => 150,  406 => 149,  403 => 148,  398 => 145,  391 => 143,  389 => 142,  386 => 141,  377 => 140,  373 => 139,  366 => 137,  363 => 136,  357 => 133,  353 => 132,  350 => 131,  348 => 130,  347 => 129,  344 => 128,  340 => 127,  337 => 126,  334 => 125,  331 => 124,  328 => 123,  325 => 122,  323 => 121,  319 => 119,  313 => 116,  309 => 115,  305 => 113,  296 => 110,  293 => 109,  290 => 108,  288 => 107,  284 => 106,  280 => 105,  276 => 104,  270 => 102,  268 => 101,  263 => 99,  259 => 98,  255 => 97,  252 => 96,  250 => 95,  248 => 94,  244 => 93,  239 => 91,  235 => 90,  231 => 89,  227 => 88,  223 => 87,  219 => 86,  215 => 85,  210 => 84,  204 => 82,  202 => 81,  200 => 80,  194 => 78,  192 => 77,  188 => 76,  184 => 74,  182 => 73,  179 => 72,  172 => 68,  166 => 65,  159 => 61,  155 => 60,  149 => 56,  140 => 53,  137 => 52,  134 => 51,  132 => 50,  128 => 49,  124 => 48,  118 => 45,  115 => 44,  113 => 43,  107 => 40,  101 => 37,  94 => 33,  90 => 32,  84 => 28,  75 => 25,  72 => 24,  69 => 23,  67 => 22,  63 => 21,  59 => 20,  53 => 17,  48 => 14,  46 => 13,  44 => 12,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "columns_definitions/partitions.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/partitions.twig");
    }
}
