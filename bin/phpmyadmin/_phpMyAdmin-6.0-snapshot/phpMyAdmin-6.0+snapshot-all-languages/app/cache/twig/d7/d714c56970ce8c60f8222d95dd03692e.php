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

/* table/structure/display_partitions.twig */
class __TwigTemplate_1ccf73669e768ad8976c37ca013eda77 extends Template
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
        yield "<div id=\"partitions\" class=\"card mb-3\">
    <div class=\"card-header\">
      ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partitions"), "html", null, true);
        yield "
      ";
        // line 4
        yield PhpMyAdmin\Html\MySQLDocumentation::show("partitioning");
        yield "
    </div>

    <div class=\"card-body\">
        ";
        // line 8
        if (( !array_key_exists("partitions", $context) || Twig\Extension\CoreExtension::testEmpty(($context["partitions"] ?? null)))) {
            // line 9
            yield "            ";
            yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("No partitioning defined!"));
            yield "
        ";
        } else {
            // line 11
            yield "            <p>
                ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partitioned by:"), "html", null, true);
            yield "
                <code>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["partition_method"] ?? null), "html", null, true);
            yield "(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["partition_expression"] ?? null), "html", null, true);
            yield ")</code>
            </p>
            ";
            // line 15
            if ((($tmp = ($context["has_sub_partitions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 16
                yield "                <p>
                    ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Sub partitioned by:"), "html", null, true);
                yield "
                    <code>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sub_partition_method"] ?? null), "html", null, true);
                yield "(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sub_partition_expression"] ?? null), "html", null, true);
                yield ")</code>
                <p>
            ";
            }
            // line 21
            yield "            <table class=\"table table-striped table-hover table-sm\">
                <thead>
                    <tr>
                        <th colspan=\"2\">#</th>
                        <th>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partition"), "html", null, true);
            yield "</th>
                        ";
            // line 26
            if ((($tmp = ($context["has_description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "                            <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Expression"), "html", null, true);
                yield "</th>
                        ";
            }
            // line 29
            yield "                        <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Rows"), "html", null, true);
            yield "</th>
                        <th>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Data length"), "html", null, true);
            yield "</th>
                        <th>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index length"), "html", null, true);
            yield "</th>
                        <th>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comment"), "html", null, true);
            yield "</th>
                        <th colspan=\"";
            // line 33
            yield (((($tmp = ($context["range_or_list"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("7") : ("6"));
            yield "\">
                            ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
            yield "
                        </th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["partitions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 40
                yield "                    <tr class=\"noclick";
                yield (((($tmp = ($context["has_sub_partitions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" table-active") : (""));
                yield "\">
                        ";
                // line 41
                if ((($tmp = ($context["has_sub_partitions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 42
                    yield "                            <td>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "getOrdinal", [], "method", false, false, false, 42), "html", null, true);
                    yield "</td>
                            <td></td>
                        ";
                } else {
                    // line 45
                    yield "                            <td colspan=\"2\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "getOrdinal", [], "method", false, false, false, 45), "html", null, true);
                    yield "</td>
                        ";
                }
                // line 47
                yield "                        <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "getName", [], "method", false, false, false, 47), "html", null, true);
                yield "</th>
                        ";
                // line 48
                if ((($tmp = ($context["has_description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "                            <td>
                                <code>";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "getExpression", [], "method", false, false, false, 51), "html", null, true);
                    // line 52
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "getMethod", [], "method", false, false, false, 52) == "LIST")) ? (" IN (") : (" < "));
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "getDescription", [], "method", false, false, false, 53), "html", null, true);
                    // line 54
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "getMethod", [], "method", false, false, false, 54) == "LIST")) ? (")") : (""));
                    // line 55
                    yield "</code>
                            </td>
                        ";
                }
                // line 58
                yield "                        <td class=\"value\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "getRows", [], "method", false, false, false, 58), "html", null, true);
                yield "</td>
                        <td class=\"value\">
                            ";
                // line 60
                $context["data_length"] = PhpMyAdmin\Util::formatByteDown(CoreExtension::getAttribute($this->env, $this->source,                 // line 61
$context["partition"], "getDataLength", [], "method", false, false, false, 61), 3, 1);
                // line 65
                yield "                            <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["data_length"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "html", null, true);
                yield "</span>
                            <span class=\"unit\">";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["data_length"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[1] ?? null) : null), "html", null, true);
                yield "</span>
                        </td>
                        <td class=\"value\">
                            ";
                // line 69
                $context["index_length"] = PhpMyAdmin\Util::formatByteDown(CoreExtension::getAttribute($this->env, $this->source,                 // line 70
$context["partition"], "getIndexLength", [], "method", false, false, false, 70), 3, 1);
                // line 74
                yield "                            <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["index_length"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[0] ?? null) : null), "html", null, true);
                yield "</span>
                            <span class=\"unit\">";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["index_length"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[1] ?? null) : null), "html", null, true);
                yield "</span>
                        </td>
                        <td>";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "getComment", [], "method", false, false, false, 77), "html", null, true);
                yield "</td>

                        <td>
                          <a id=\"partition_action_ANALYZE\" class=\"ajax\" href=\"";
                // line 80
                yield PhpMyAdmin\Url::getFromRoute("/table/partition/analyze");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["db" =>                 // line 81
($context["db"] ?? null), "table" =>                 // line 82
($context["table"] ?? null), "partition_name" => CoreExtension::getAttribute($this->env, $this->source,                 // line 83
$context["partition"], "getName", [], "method", false, false, false, 83)], "", false);
                // line 84
                yield "\">
                            ";
                // line 85
                yield PhpMyAdmin\Html\Generator::getIcon("b_search", \_gettext("Analyze"));
                yield "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_CHECK\" class=\"ajax\" href=\"";
                // line 90
                yield PhpMyAdmin\Url::getFromRoute("/table/partition/check");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["db" =>                 // line 91
($context["db"] ?? null), "table" =>                 // line 92
($context["table"] ?? null), "partition_name" => CoreExtension::getAttribute($this->env, $this->source,                 // line 93
$context["partition"], "getName", [], "method", false, false, false, 93)], "", false);
                // line 94
                yield "\">
                            ";
                // line 95
                yield PhpMyAdmin\Html\Generator::getIcon("eye", \_gettext("Check"));
                yield "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_OPTIMIZE\" class=\"ajax\" href=\"";
                // line 100
                yield PhpMyAdmin\Url::getFromRoute("/table/partition/optimize");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["db" =>                 // line 101
($context["db"] ?? null), "table" =>                 // line 102
($context["table"] ?? null), "partition_name" => CoreExtension::getAttribute($this->env, $this->source,                 // line 103
$context["partition"], "getName", [], "method", false, false, false, 103)], "", false);
                // line 104
                yield "\">
                            ";
                // line 105
                yield PhpMyAdmin\Html\Generator::getIcon("normalize", \_gettext("Optimize"));
                yield "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_REBUILD\" class=\"ajax\" href=\"";
                // line 110
                yield PhpMyAdmin\Url::getFromRoute("/table/partition/rebuild");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["db" =>                 // line 111
($context["db"] ?? null), "table" =>                 // line 112
($context["table"] ?? null), "partition_name" => CoreExtension::getAttribute($this->env, $this->source,                 // line 113
$context["partition"], "getName", [], "method", false, false, false, 113)], "", false);
                // line 114
                yield "\">
                            ";
                // line 115
                yield PhpMyAdmin\Html\Generator::getIcon("s_tbl", \_gettext("Rebuild"));
                yield "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_REPAIR\" class=\"ajax\" href=\"";
                // line 120
                yield PhpMyAdmin\Url::getFromRoute("/table/partition/repair");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["db" =>                 // line 121
($context["db"] ?? null), "table" =>                 // line 122
($context["table"] ?? null), "partition_name" => CoreExtension::getAttribute($this->env, $this->source,                 // line 123
$context["partition"], "getName", [], "method", false, false, false, 123)], "", false);
                // line 124
                yield "\">
                            ";
                // line 125
                yield PhpMyAdmin\Html\Generator::getIcon("b_tblops", \_gettext("Repair"));
                yield "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_TRUNCATE\" class=\"ajax\" href=\"";
                // line 130
                yield PhpMyAdmin\Url::getFromRoute("/table/partition/truncate");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["db" =>                 // line 131
($context["db"] ?? null), "table" =>                 // line 132
($context["table"] ?? null), "partition_name" => CoreExtension::getAttribute($this->env, $this->source,                 // line 133
$context["partition"], "getName", [], "method", false, false, false, 133)], "", false);
                // line 134
                yield "\">
                            ";
                // line 135
                yield PhpMyAdmin\Html\Generator::getIcon("b_empty", \_gettext("Truncate"));
                yield "
                          </a>
                        </td>

                        ";
                // line 139
                if ((($tmp = ($context["range_or_list"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 140
                    yield "                          <td>
                            <a id=\"partition_action_DROP\" class=\"ajax\" href=\"";
                    // line 141
                    yield PhpMyAdmin\Url::getFromRoute("/table/partition/drop");
                    yield "\" data-post=\"";
                    yield PhpMyAdmin\Url::getCommon(["db" =>                     // line 142
($context["db"] ?? null), "table" =>                     // line 143
($context["table"] ?? null), "partition_name" => CoreExtension::getAttribute($this->env, $this->source,                     // line 144
$context["partition"], "getName", [], "method", false, false, false, 144)], "", false);
                    // line 145
                    yield "\">
                              ";
                    // line 146
                    yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Drop"));
                    yield "
                            </a>
                          </td>
                        ";
                }
                // line 150
                yield "
                        ";
                // line 151
                if ((($tmp = ($context["has_sub_partitions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 152
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "getSubPartitions", [], "method", false, false, false, 152));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_partition"]) {
                        // line 153
                        yield "                                <tr class=\"noclick\">
                                    <td></td>
                                    <td>";
                        // line 155
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub_partition"], "getOrdinal", [], "method", false, false, false, 155), "html", null, true);
                        yield "</td>
                                    <td>";
                        // line 156
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub_partition"], "getName", [], "method", false, false, false, 156), "html", null, true);
                        yield "</td>
                                    ";
                        // line 157
                        if ((($tmp = ($context["has_description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 158
                            yield "                                        <td></td>
                                    ";
                        }
                        // line 160
                        yield "                                    <td class=\"value\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub_partition"], "getRows", [], "method", false, false, false, 160), "html", null, true);
                        yield "</td>
                                    <td class=\"value\">
                                        ";
                        // line 162
                        $context["data_length"] = PhpMyAdmin\Util::formatByteDown(CoreExtension::getAttribute($this->env, $this->source,                         // line 163
$context["sub_partition"], "getDataLength", [], "method", false, false, false, 163), 3, 1);
                        // line 167
                        yield "                                        <span>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["data_length"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[0] ?? null) : null), "html", null, true);
                        yield "</span>
                                        <span class=\"unit\">";
                        // line 168
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = ($context["data_length"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[1] ?? null) : null), "html", null, true);
                        yield "</span>
                                    </td>
                                    <td class=\"value\">
                                        ";
                        // line 171
                        $context["index_length"] = PhpMyAdmin\Util::formatByteDown(CoreExtension::getAttribute($this->env, $this->source,                         // line 172
$context["sub_partition"], "getIndexLength", [], "method", false, false, false, 172), 3, 1);
                        // line 176
                        yield "                                        <span>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = ($context["index_length"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[0] ?? null) : null), "html", null, true);
                        yield "</span>
                                        <span class=\"unit\">";
                        // line 177
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = ($context["index_length"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[1] ?? null) : null), "html", null, true);
                        yield "</span>
                                    </td>
                                    <td>";
                        // line 179
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub_partition"], "getComment", [], "method", false, false, false, 179), "html", null, true);
                        yield "</td>
                                    <td colspan=\"";
                        // line 180
                        yield (((($tmp = ($context["range_or_list"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("7") : ("6"));
                        yield "\"></td>
                                </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['sub_partition'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    yield "                        ";
                }
                // line 184
                yield "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['partition'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            yield "                </tbody>
            </table>
        ";
        }
        // line 189
        yield "    </div>
    <div class=\"card-footer d-print-none\">
        <form action=\"";
        // line 191
        yield PhpMyAdmin\Url::getFromRoute("/table/structure/partitioning");
        yield "\" method=\"post\">
            ";
        // line 192
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "

            ";
        // line 194
        if (( !array_key_exists("partitions", $context) || Twig\Extension\CoreExtension::testEmpty(($context["partitions"] ?? null)))) {
            // line 195
            yield "                <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partition table"), "html", null, true);
            yield "\">
            ";
        } else {
            // line 197
            yield "                ";
            yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), ["db" =>             // line 200
($context["db"] ?? null), "table" =>             // line 201
($context["table"] ?? null), "sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(            // line 202
($context["table"] ?? null))) . " REMOVE PARTITIONING")], \_gettext("Remove partitioning"), ["class" => "btn btn-secondary ajax", "id" => "remove_partitioning"]);
            // line 207
            yield "
                <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit partitioning"), "html", null, true);
            yield "\">
            ";
        }
        // line 210
        yield "        </form>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/structure/display_partitions.twig";
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
        return array (  482 => 210,  477 => 208,  474 => 207,  472 => 202,  471 => 201,  470 => 200,  468 => 197,  462 => 195,  460 => 194,  455 => 192,  451 => 191,  447 => 189,  442 => 186,  435 => 184,  432 => 183,  423 => 180,  419 => 179,  414 => 177,  409 => 176,  407 => 172,  406 => 171,  400 => 168,  395 => 167,  393 => 163,  392 => 162,  386 => 160,  382 => 158,  380 => 157,  376 => 156,  372 => 155,  368 => 153,  363 => 152,  361 => 151,  358 => 150,  351 => 146,  348 => 145,  346 => 144,  345 => 143,  344 => 142,  341 => 141,  338 => 140,  336 => 139,  329 => 135,  326 => 134,  324 => 133,  323 => 132,  322 => 131,  319 => 130,  311 => 125,  308 => 124,  306 => 123,  305 => 122,  304 => 121,  301 => 120,  293 => 115,  290 => 114,  288 => 113,  287 => 112,  286 => 111,  283 => 110,  275 => 105,  272 => 104,  270 => 103,  269 => 102,  268 => 101,  265 => 100,  257 => 95,  254 => 94,  252 => 93,  251 => 92,  250 => 91,  247 => 90,  239 => 85,  236 => 84,  234 => 83,  233 => 82,  232 => 81,  229 => 80,  223 => 77,  218 => 75,  213 => 74,  211 => 70,  210 => 69,  204 => 66,  199 => 65,  197 => 61,  196 => 60,  190 => 58,  185 => 55,  183 => 54,  181 => 53,  179 => 52,  177 => 51,  174 => 49,  172 => 48,  167 => 47,  161 => 45,  154 => 42,  152 => 41,  147 => 40,  143 => 39,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  114 => 29,  108 => 27,  106 => 26,  102 => 25,  96 => 21,  88 => 18,  84 => 17,  81 => 16,  79 => 15,  72 => 13,  68 => 12,  65 => 11,  59 => 9,  57 => 8,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/structure/display_partitions.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/structure/display_partitions.twig");
    }
}
