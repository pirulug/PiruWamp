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

/* database/structure/body_for_table_summary.twig */
class __TwigTemplate_ad996dae003c8b1207abec23402380af extends Template
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
        yield "<tfoot id=\"tbl_summary_row\">
<tr>
    <th class=\"d-print-none\"></th>
    <th class=\"tbl_num text-nowrap\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_ngettext("%s table", "%s tables", ($context["num_tables"] ?? null)), PhpMyAdmin\Util::formatNumber(($context["num_tables"] ?? null), 0)), "html", null, true);
        yield "
    </th>
    ";
        // line 7
        if ((($tmp = ($context["server_replica_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "        <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replication"), "html", null, true);
            yield "</th>
    ";
        }
        // line 10
        yield "    ";
        $context["sum_colspan"] = (((($tmp = ($context["db_is_system_schema"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (4) : (7));
        // line 11
        yield "    ";
        if ((($context["num_favorite_tables"] ?? null) == 0)) {
            // line 12
            yield "        ";
            $context["sum_colspan"] = (($context["sum_colspan"] ?? null) - 1);
            // line 13
            yield "    ";
        }
        // line 14
        yield "    <th colspan=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sum_colspan"] ?? null), "html", null, true);
        yield "\" class=\"d-print-none\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Sum"), "html", null, true);
        yield "</th>
    ";
        // line 15
        $context["row_count_sum"] = PhpMyAdmin\Util::formatNumber(($context["sum_entries"] ?? null), 0);
        // line 16
        yield "    ";
        // line 17
        yield "    ";
        $context["row_sum_url"] = [];
        // line 18
        yield "    ";
        if (array_key_exists("approx_rows", $context)) {
            // line 19
            yield "        ";
            $context["row_sum_url"] = ["ajax_request" => true, "db" =>             // line 21
($context["db"] ?? null), "real_row_count_all" => "true"];
            // line 24
            yield "    ";
        }
        // line 25
        yield "    ";
        if ((($tmp = ($context["approx_rows"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "        ";
            $context["cell_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 27
                yield "<a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/database/structure/real-row-count", ($context["row_sum_url"] ?? null));
                yield "\" class=\"ajax row_count_sum\">~";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_count_sum"] ?? null), "html", null, true);
                // line 29
                yield "</a>";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 31
            yield "    ";
        } else {
            // line 32
            yield "        ";
            $context["cell_text"] = ($context["row_count_sum"] ?? null);
            // line 33
            yield "    ";
        }
        // line 34
        yield "    <th class=\"value tbl_rows font-monospace text-end\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cell_text"] ?? null), "html", null, true);
        yield "</th>
    ";
        // line 35
        if ((($tmp = ($context["is_show_db_details"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "        <th class=\"text-center\">
            <dfn title=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("%s is the default storage engine on this MySQL server."), ($context["default_storage_engine"] ?? null)), "html", null, true);
            yield "\">
                ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["default_storage_engine"] ?? null), "html", null, true);
            yield "
            </dfn>
        </th>
        <th>
            ";
            // line 42
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["database_collation"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "                <dfn title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_collation"] ?? null), "description", [], "any", false, false, false, 43), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Default"), "html", null, true);
                yield ")\">
                    ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_collation"] ?? null), "name", [], "any", false, false, false, 44), "html", null, true);
                yield "
                </dfn>
            ";
            }
            // line 47
            yield "        </th>
    ";
        }
        // line 49
        yield "
    ";
        // line 50
        if ((($tmp = ($context["is_show_stats"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "        ";
            $context["sum"] = PhpMyAdmin\Util::formatByteDown(($context["sum_size"] ?? null), 3, 1);
            // line 52
            yield "        ";
            $context["sum_formatted"] = (($_v0 = ($context["sum"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null);
            // line 53
            yield "        ";
            $context["sum_unit"] = (($_v1 = ($context["sum"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[1] ?? null) : null);
            // line 54
            yield "        <th class=\"value tbl_size font-monospace text-end\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sum_formatted"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sum_unit"] ?? null), "html", null, true);
            yield "</th>

        ";
            // line 56
            $context["overhead"] = PhpMyAdmin\Util::formatByteDown(($context["overhead_size"] ?? null), 3, 1);
            // line 57
            yield "        ";
            $context["overhead_formatted"] = (($_v2 = ($context["overhead"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[0] ?? null) : null);
            // line 58
            yield "        ";
            $context["overhead_unit"] = (($_v3 = ($context["overhead"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[1] ?? null) : null);
            // line 59
            yield "        <th class=\"value tbl_overhead font-monospace text-end\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["overhead_formatted"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["overhead_unit"] ?? null), "html", null, true);
            yield "</th>
    ";
        }
        // line 61
        yield "
    ";
        // line 62
        if ((($tmp = ($context["show_charset"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "        <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["database_charset"] ?? null), "html", null, true);
            yield "</th>
    ";
        }
        // line 65
        yield "    ";
        if ((($tmp = ($context["show_comment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "        <th></th>
    ";
        }
        // line 68
        yield "    ";
        if ((($tmp = ($context["show_creation"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "        <th class=\"value tbl_creation font-monospace text-end\">
            ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["create_time_all"] ?? null), "html", null, true);
            yield "
        </th>
    ";
        }
        // line 73
        yield "    ";
        if ((($tmp = ($context["show_last_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "        <th class=\"value tbl_last_update font-monospace text-end\">
            ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["update_time_all"] ?? null), "html", null, true);
            yield "
        </th>
    ";
        }
        // line 78
        yield "    ";
        if ((($tmp = ($context["show_last_check"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "        <th class=\"value tbl_last_check font-monospace text-end\">
            ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["check_time_all"] ?? null), "html", null, true);
            yield "
        </th>
    ";
        }
        // line 83
        yield "</tr>
</tfoot>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/body_for_table_summary.twig";
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
        return array (  254 => 83,  248 => 80,  245 => 79,  242 => 78,  236 => 75,  233 => 74,  230 => 73,  224 => 70,  221 => 69,  218 => 68,  214 => 66,  211 => 65,  205 => 63,  203 => 62,  200 => 61,  192 => 59,  189 => 58,  186 => 57,  184 => 56,  176 => 54,  173 => 53,  170 => 52,  167 => 51,  165 => 50,  162 => 49,  158 => 47,  152 => 44,  145 => 43,  143 => 42,  136 => 38,  132 => 37,  129 => 36,  127 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  109 => 29,  107 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  92 => 21,  90 => 19,  87 => 18,  84 => 17,  82 => 16,  80 => 15,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  55 => 8,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/structure/body_for_table_summary.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/body_for_table_summary.twig");
    }
}
