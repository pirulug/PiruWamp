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

/* database/structure/table_header.twig */
class __TwigTemplate_f63be13d5e85eddd2e49964dcd461d44 extends Template
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
        yield "<form method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/database/structure");
        yield "\" name=\"tablesForm\" id=\"tablesForm\">
";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "
<div class=\"table-responsive\">
<table class=\"table table-striped table-hover table-sm w-auto data\">
    <thead>
        <tr>
            <th class=\"d-print-none\"></th>
            <th>";
        // line 8
        yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Table"), "table");
        yield "</th>
            ";
        // line 9
        if ((($tmp = ($context["replication"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "                <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replication"), "html", null, true);
            yield "</th>
            ";
        }
        // line 12
        yield "
            ";
        // line 13
        if ((($tmp = ($context["db_is_system_schema"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                ";
            $context["action_colspan"] = 3;
            // line 15
            yield "            ";
        } else {
            // line 16
            yield "                ";
            $context["action_colspan"] = 6;
            // line 17
            yield "            ";
        }
        // line 18
        yield "            ";
        if ((($context["num_favorite_tables"] ?? null) > 0)) {
            // line 19
            yield "                ";
            $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
            // line 20
            yield "            ";
        }
        // line 21
        yield "            <th colspan=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action_colspan"] ?? null), "html", null, true);
        yield "\" class=\"d-print-none\">
                ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
        yield "
            </th>
            ";
        // line 25
        yield "            <th>
                ";
        // line 26
        yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Rows"), "records", "DESC");
        yield "
                ";
        // line 27
        yield PhpMyAdmin\Html\Generator::showHint(PhpMyAdmin\Sanitize::convertBBCode(\_gettext("May be approximate. Click on the number to get the exact count. See [doc@faq3-11]FAQ 3.11[/doc].")));
        yield "
            </th>
            ";
        // line 29
        if ((($tmp = ($context["is_show_db_details"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Type"), "type");
            yield "</th>
                <th>";
            // line 31
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Collation"), "collation");
            yield "</th>
            ";
        }
        // line 33
        yield "
            ";
        // line 34
        if ((($tmp = ($context["is_show_stats"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "                ";
            // line 36
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Size"), "size", "DESC");
            yield "</th>
                ";
            // line 38
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Overhead"), "overhead", "DESC");
            yield "</th>
            ";
        }
        // line 40
        yield "
            ";
        // line 41
        if ((($tmp = ($context["show_charset"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Charset"), "charset");
            yield "</th>
            ";
        }
        // line 44
        yield "
            ";
        // line 45
        if ((($tmp = ($context["show_comment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Comment"), "comment");
            yield "</th>
            ";
        }
        // line 48
        yield "
            ";
        // line 49
        if ((($tmp = ($context["show_creation"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                ";
            // line 51
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Creation"), "creation", "DESC");
            yield "</th>
            ";
        }
        // line 53
        yield "
            ";
        // line 54
        if ((($tmp = ($context["show_last_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "                ";
            // line 56
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Last update"), "last_update", "DESC");
            yield "</th>
            ";
        }
        // line 58
        yield "
            ";
        // line 59
        if ((($tmp = ($context["show_last_check"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                ";
            // line 61
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(\_gettext("Last check"), "last_check", "DESC");
            yield "</th>
            ";
        }
        // line 63
        yield "        </tr>
    </thead>
    <tbody>
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["structure_table_rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["structure_table_row"]) {
            // line 67
            yield "        ";
            yield from $this->load("database/structure/structure_table_row.twig", 67)->unwrap()->yield(CoreExtension::toArray($context["structure_table_row"]));
            // line 68
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['structure_table_row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "    </tbody>
    ";
        // line 70
        if ((($tmp = ($context["body_for_table_summary"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "        ";
            yield from $this->load("database/structure/body_for_table_summary.twig", 71)->unwrap()->yield(CoreExtension::toArray(($context["body_for_table_summary"] ?? null)));
            // line 72
            yield "    ";
        }
        // line 73
        yield "</table>
</div>
";
        // line 75
        if ((($tmp = ($context["check_all_tables"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "  ";
            yield from $this->load("database/structure/check_all_tables.twig", 76)->unwrap()->yield(CoreExtension::toArray(($context["check_all_tables"] ?? null)));
        }
        // line 78
        yield "</form>
";
        // line 79
        if ((($tmp = ($context["check_all_tables"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "  ";
            yield from $this->load("database/structure/bulk_action_modal.twig", 80)->unwrap()->yield(CoreExtension::toArray(($context["check_all_tables"] ?? null)));
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/table_header.twig";
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
        return array (  251 => 80,  249 => 79,  246 => 78,  242 => 76,  240 => 75,  236 => 73,  233 => 72,  230 => 71,  228 => 70,  225 => 69,  219 => 68,  216 => 67,  212 => 66,  207 => 63,  201 => 61,  199 => 60,  197 => 59,  194 => 58,  188 => 56,  186 => 55,  184 => 54,  181 => 53,  175 => 51,  173 => 50,  171 => 49,  168 => 48,  162 => 46,  160 => 45,  157 => 44,  151 => 42,  149 => 41,  146 => 40,  140 => 38,  135 => 36,  133 => 35,  131 => 34,  128 => 33,  123 => 31,  118 => 30,  116 => 29,  111 => 27,  107 => 26,  104 => 25,  99 => 22,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  62 => 10,  60 => 9,  56 => 8,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/structure/table_header.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/table_header.twig");
    }
}
