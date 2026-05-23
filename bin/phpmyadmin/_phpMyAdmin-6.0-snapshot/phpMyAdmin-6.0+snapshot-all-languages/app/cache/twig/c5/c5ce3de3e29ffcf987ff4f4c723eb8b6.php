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

/* table/tracking/structure_snapshot_indexes.twig */
class __TwigTemplate_7e56525739da3acd91ee4c2a7db53ac7 extends Template
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
        yield "<div class=\"card\">
    <div class=\"card-header\">
        ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Indexes"), "html", null, true);
        yield "
        ";
        // line 4
        yield PhpMyAdmin\Html\MySQLDocumentation::show("optimizing-database-structure");
        yield "
    </div>
    <div class=\"card-body\">
        <table id=\"tablestructure_indexes\" class=\"table table-striped table-hover w-auto\">
            <thead>
                <tr>
                    <th>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Keyname"), "html", null, true);
        yield "</th>
                    <th>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
        yield "</th>
                    <th>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Unique"), "html", null, true);
        yield "</th>
                    <th>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Packed"), "html", null, true);
        yield "</th>
                    <th>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
        yield "</th>
                    <th>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cardinality"), "html", null, true);
        yield "</th>
                    <th>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "</th>
                    <th>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
        yield "</th>
                    <th>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comment"), "html", null, true);
        yield "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["indexes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 23
            yield "                    <tr class=\"noclick\">
                        <td>
                            <strong>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = $context["index"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["Key_name"] ?? null) : null), "html", null, true);
            yield "</strong>
                        </td>
                        <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["index"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["Index_type"] ?? null) : null), "html", null, true);
            yield "</td>
                        <td>";
            // line 28
            yield ((((($_v2 = $context["index"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["Non_unique"] ?? null) : null) == 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
            yield "</td>
                        <td>";
            // line 29
            yield ((((($_v3 = $context["index"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["Packed"] ?? null) : null) != "")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
            yield "</td>
                        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = $context["index"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["Column_name"] ?? null) : null), "html", null, true);
            yield "</td>
                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = $context["index"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["Cardinality"] ?? null) : null), "html", null, true);
            yield "</td>
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = $context["index"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["Collation"] ?? null) : null), "html", null, true);
            yield "</td>
                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = $context["index"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["Null"] ?? null) : null), "html", null, true);
            yield "</td>
                        <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = $context["index"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["Comment"] ?? null) : null), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['index'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "            </tbody>
        </table>
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
        return "table/tracking/structure_snapshot_indexes.twig";
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
        return array (  148 => 37,  139 => 34,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  111 => 27,  106 => 25,  102 => 23,  98 => 22,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/tracking/structure_snapshot_indexes.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/structure_snapshot_indexes.twig");
    }
}
