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

/* table/tracking/structure_snapshot_columns.twig */
class __TwigTemplate_5a991f073b0b3a454ef398cee82bdc97 extends Template
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
        yield "<div class=\"card mb-3\">
    <div class=\"card-header\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
        <table id=\"tablestructure\" class=\"table table-striped table-hover w-auto\">
            <thead>
                <tr>
                    <th>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Number", "#"), "html", null, true);
        yield "</th>
                    <th>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
        yield "</th>
                    <th>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
        yield "</th>
                    <th>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "</th>
                    <th>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
        yield "</th>
                    <th>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Default"), "html", null, true);
        yield "</th>
                    <th>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Extra"), "html", null, true);
        yield "</th>
                    <th>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comment"), "html", null, true);
        yield "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 18
        $context["index"] = 1;
        // line 19
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 20
            yield "                    <tr class=\"noclick\">
                        <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["index"] ?? null), "html", null, true);
            yield "</td>
                        ";
            // line 22
            $context["index"] = (($context["index"] ?? null) + 1);
            // line 23
            yield "                        <td>
                            <strong>
                                ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = $context["field"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["Field"] ?? null) : null), "html", null, true);
            yield "
                                ";
            // line 26
            if (((($_v1 = $context["field"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["Key"] ?? null) : null) == "PRI")) {
                // line 27
                yield "                                    ";
                yield PhpMyAdmin\Html\Generator::getImage("b_primary", \_gettext("Primary"));
                yield "
                                ";
            } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v2 =             // line 28
$context["field"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["Key"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 29
                yield "                                    ";
                yield PhpMyAdmin\Html\Generator::getImage("bd_primary", \_gettext("Index"));
                yield "
                                ";
            }
            // line 31
            yield "                            </strong>
                        </td>
                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = $context["field"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["Type"] ?? null) : null), "html", null, true);
            yield "</td>
                        <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = $context["field"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["Collation"] ?? null) : null), "html", null, true);
            yield "</td>
                        <td>";
            // line 35
            yield ((((($_v5 = $context["field"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["Null"] ?? null) : null) == "YES")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
            yield "</td>
                        <td>
                            ";
            // line 37
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "Default", [], "array", true, true, false, 37)) {
                // line 38
                yield "                                ";
                $context["extracted_columnspec"] = PhpMyAdmin\Util::extractColumnSpec((($_v6 = $context["field"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["Type"] ?? null) : null));
                // line 39
                yield "                                ";
                if (((($_v7 = ($context["extracted_columnspec"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["type"] ?? null) : null) == "bit")) {
                    // line 40
                    yield "                                    ";
                    // line 41
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::convertBitDefaultValue((($_v8 = $context["field"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["Default"] ?? null) : null)), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 43
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = $context["field"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["Default"] ?? null) : null), "html", null, true);
                    yield "
                                ";
                }
                // line 45
                yield "                            ";
            } else {
                // line 46
                yield "                                ";
                if (((($_v10 = $context["field"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["Null"] ?? null) : null) == "YES")) {
                    // line 47
                    yield "                                    <em>NULL</em>
                                ";
                } else {
                    // line 49
                    yield "                                    <em>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None for default", "None"), "html", null, true);
                    yield "</em>
                                ";
                }
                // line 51
                yield "                            ";
            }
            // line 52
            yield "                        </td>
                        <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v11 = $context["field"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["Extra"] ?? null) : null), "html", null, true);
            yield "</td>
                        <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v12 = $context["field"]) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["Comment"] ?? null) : null), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
        return "table/tracking/structure_snapshot_columns.twig";
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
        return array (  201 => 57,  192 => 54,  188 => 53,  185 => 52,  182 => 51,  176 => 49,  172 => 47,  169 => 46,  166 => 45,  160 => 43,  154 => 41,  152 => 40,  149 => 39,  146 => 38,  144 => 37,  139 => 35,  135 => 34,  131 => 33,  127 => 31,  121 => 29,  119 => 28,  114 => 27,  112 => 26,  108 => 25,  104 => 23,  102 => 22,  98 => 21,  95 => 20,  90 => 19,  88 => 18,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/tracking/structure_snapshot_columns.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/structure_snapshot_columns.twig");
    }
}
