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

/* server/privileges/privileges_summary.twig */
class __TwigTemplate_aa20125a2adf4691a732fd2eeb8bccfd extends Template
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
        yield "<form class=\"submenu-item\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
        yield "\" method=\"post\">
    ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
    <input type=\"hidden\" name=\"username\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"hostname\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname"] ?? null), "html", null, true);
        yield "\">

    <div class=\"card mb-3\">
        <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sub_menu_label"] ?? null), "html", null, true);
        yield "\">
            ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["legend"] ?? null), "html", null, true);
        yield "
        </div>

        <div class=\"card-body\">
        <table class=\"table table-striped table-hover w-auto\">
            <thead>
                <tr>
                    <th scope=\"col\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type_label"] ?? null), "html", null, true);
        yield "</th>
                    <th scope=\"col\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Privileges"), "html", null, true);
        yield "</th>
                    <th scope=\"col\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Grant"), "html", null, true);
        yield "</th>
                    ";
        // line 18
        if ((($context["type"] ?? null) == "database")) {
            // line 19
            yield "                        <th scope=\"col\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table-specific privileges"), "html", null, true);
            yield "</th>
                    ";
        } elseif ((        // line 20
($context["type"] ?? null) == "table")) {
            // line 21
            yield "                        <th scope=\"col\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column-specific privileges"), "html", null, true);
            yield "</th>
                    ";
        }
        // line 23
        yield "                    <th scope=\"col\" colspan=\"2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
        yield "</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 28
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["privileges"] ?? null)) == 0)) {
            // line 29
            yield "                    ";
            $context["colspan"] = (((($context["type"] ?? null) == "database")) ? (7) : ((((($context["type"] ?? null) == "table")) ? (6) : (5))));
            // line 30
            yield "                    <tr>
                        <td class=\"text-center\" colspan=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["colspan"] ?? null), "html", null, true);
            yield "\"><em>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "</em></td>
                    </tr>
                ";
        } else {
            // line 34
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["privileges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
                // line 35
                yield "                        <tr>
                            <td>";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = $context["privilege"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), "html", null, true);
                yield "</td>
                            <td><code>";
                // line 37
                yield (($_v1 = $context["privilege"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["privileges"] ?? null) : null);
                yield "</code></td>
                            <td>";
                // line 38
                yield (((($tmp = (($_v2 = $context["privilege"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["grant"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
                yield "</td>

                            ";
                // line 40
                if ((($context["type"] ?? null) == "database")) {
                    // line 41
                    yield "                                <td>";
                    yield (((($tmp = (($_v3 = $context["privilege"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["table_privs"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
                    yield "</td>
                            ";
                } elseif ((                // line 42
($context["type"] ?? null) == "table")) {
                    // line 43
                    yield "                                <td>";
                    yield (((($tmp = (($_v4 = $context["privilege"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["column_privs"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
                    yield "</td>
                            ";
                }
                // line 45
                yield "
                            <td>";
                // line 46
                yield (($_v5 = $context["privilege"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["edit_link"] ?? null) : null);
                yield "</td>
                            <td>";
                // line 47
                yield (($_v6 = $context["privilege"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["revoke_link"] ?? null) : null);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['privilege'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "                ";
        }
        // line 51
        yield "            </tbody>
        </table>

        ";
        // line 54
        if ((($context["type"] ?? null) == "database")) {
            // line 55
            yield "            <label for=\"text_dbname\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add privileges on the following database(s):"), "html", null, true);
            yield "</label>";
            // line 57
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["databases"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "                <select class=\"resize-vertical\" name=\"pred_dbname[]\" multiple=\"multiple\">
                    ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["databases"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                    // line 60
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = ($context["escaped_databases"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 60)] ?? null) : null), "html", null, true);
                    yield "\">
                            ";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["database"], "html", null, true);
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
                unset($context['_seq'], $context['_key'], $context['database'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                yield "                </select>
            ";
            }
            // line 67
            yield "<input type=\"text\" id=\"text_dbname\" name=\"dbname\">
            ";
            // line 68
            yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Wildcards % and _ should be escaped with a \\ to use them literally."));
            yield "
        ";
        } elseif ((        // line 69
($context["type"] ?? null) == "table")) {
            // line 70
            yield "            <input type=\"hidden\" name=\"dbname\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["escaped_database"] ?? null), "html", null, true);
            yield "\">

            <label for=\"text_tablename\">";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add privileges on the following table:"), "html", null, true);
            yield "</label>";
            // line 74
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["tables"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 75
                yield "                <select name=\"pred_tablename\" class=\"autosubmit\">
                    <option value=\"\" selected>";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use text field"), "html", null, true);
                yield ":</option>
                    ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
                    // line 78
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['table'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                yield "                </select>
            ";
            }
            // line 83
            yield "<input type=\"text\" id=\"text_tablename\" name=\"tablename\">
        ";
        } else {
            // line 85
            yield "            <input type=\"hidden\" name=\"dbname\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["escaped_database"] ?? null), "html", null, true);
            yield "\">

            <label for=\"text_routinename\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add privileges on the following routine:"), "html", null, true);
            yield "</label>";
            // line 89
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["routines"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 90
                yield "                <select name=\"pred_routinename\" class=\"autosubmit\">
                    <option value=\"\" selected>";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use text field"), "html", null, true);
                yield ":</option>
                    ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["routines"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["routine"]) {
                    // line 93
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["routine"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["routine"], "html", null, true);
                    yield "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['routine'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                yield "                </select>
            ";
            }
            // line 98
            yield "<input type=\"text\" id=\"text_routinename\" name=\"routinename\">
        ";
        }
        // line 100
        yield "        </div>
    </div>

    <div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/privileges_summary.twig";
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
        return array (  340 => 104,  334 => 100,  330 => 98,  326 => 95,  315 => 93,  311 => 92,  307 => 91,  304 => 90,  302 => 89,  299 => 87,  293 => 85,  289 => 83,  285 => 80,  274 => 78,  270 => 77,  266 => 76,  263 => 75,  261 => 74,  258 => 72,  252 => 70,  250 => 69,  246 => 68,  243 => 67,  239 => 64,  222 => 61,  217 => 60,  200 => 59,  197 => 58,  195 => 57,  191 => 55,  189 => 54,  184 => 51,  181 => 50,  172 => 47,  168 => 46,  165 => 45,  159 => 43,  157 => 42,  152 => 41,  150 => 40,  145 => 38,  141 => 37,  137 => 36,  134 => 35,  129 => 34,  121 => 31,  118 => 30,  115 => 29,  113 => 28,  104 => 23,  98 => 21,  96 => 20,  91 => 19,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  67 => 8,  63 => 7,  57 => 4,  53 => 3,  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/privileges/privileges_summary.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/privileges_summary.twig");
    }
}
