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

/* table/tracking/main.twig */
class __TwigTemplate_179ac62bc9a66568ec2beeac30122e55 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["selectable_tables_entries"] ?? null)) > 0)) {
            // line 2
            yield "    <form method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/tracking", ($context["url_params"] ?? null));
            yield "\">
        ";
            // line 3
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            yield "
        <select name=\"table\" class=\"autosubmit\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["selectable_tables_entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 6
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 6), "html", null, true);
                yield "\"";
                // line 7
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 7) == ($context["selected_table"] ?? null))) ? (" selected") : (""));
                yield ">
                    ";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 8), "html", null, true);
                yield "
                    ";
                // line 9
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "active", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 10
                    yield "                        (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("active"), "html", null, true);
                    yield ")
                    ";
                } else {
                    // line 12
                    yield "                        (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not active"), "html", null, true);
                    yield ")
                    ";
                }
                // line 14
                yield "                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "        </select>
        <input type=\"hidden\" name=\"show_versions_submit\" value=\"1\">
    </form>
";
        }
        // line 20
        yield "<br>
";
        // line 21
        if ((($context["last_version"] ?? null) > 0)) {
            // line 22
            yield "    <form method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
            yield "\" name=\"versionsForm\" id=\"versionsForm\" class=\"ajax\">
        ";
            // line 23
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            yield "
        <table id=\"versions\" class=\"table table-striped table-hover table-sm w-auto\">
            <thead>
                <tr>
                    <th></th>
                    <th>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Version"), "html", null, true);
            yield "</th>
                    <th>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Created"), "html", null, true);
            yield "</th>
                    <th>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Updated"), "html", null, true);
            yield "</th>
                    <th>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Status"), "html", null, true);
            yield "</th>
                    <th>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
            yield "</th>
                    <th>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show"), "html", null, true);
            yield "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["versions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 38
                yield "                    <tr>
                        <td class=\"text-center\">
                            <input type=\"checkbox\" name=\"selected_versions[]\"
                                class=\"checkall\" id=\"selected_versions_";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = $context["version"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["version"] ?? null) : null));
                yield "\"
                                value=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["version"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["version"] ?? null) : null));
                yield "\">
                        </td>
                        <td>
                            <label for=\"selected_versions_";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["version"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["version"] ?? null) : null));
                yield "\">
                                <b>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = $context["version"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["version"] ?? null) : null));
                yield "</b>
                            </label>
                        </td>
                        <td>";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = $context["version"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["date_created"] ?? null) : null));
                yield "</td>
                        <td>";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = $context["version"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["date_updated"] ?? null) : null));
                yield "</td>
                        ";
                // line 51
                if (((($_v6 = $context["version"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["tracking_active"] ?? null) : null) == 1)) {
                    // line 52
                    yield "                            ";
                    $context["last_version_status"] = 1;
                    // line 53
                    yield "                            <td>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("active"), "html", null, true);
                    yield "</td>
                        ";
                } else {
                    // line 55
                    yield "                            ";
                    $context["last_version_status"] = 0;
                    // line 56
                    yield "                            <td>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not active"), "html", null, true);
                    yield "</td>
                        ";
                }
                // line 58
                yield "                        <td>
                            <a class=\"delete_version_anchor ajax\" href=\"";
                // line 59
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
                yield "\" data-post=\"";
                // line 60
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["version" => (($_v7 =                 // line 61
$context["version"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["version"] ?? null) : null), "submit_delete_version" => true]), "", false);
                // line 63
                yield "\">
                                ";
                // line 64
                yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Delete version"));
                yield "
                            </a>
                        </td>
                        <td>
                            <a href=\"";
                // line 68
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
                yield "\" data-post=\"";
                // line 69
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["version" => (($_v8 =                 // line 70
$context["version"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["version"] ?? null) : null), "report" => "true"]), "", false);
                // line 72
                yield "\">
                                ";
                // line 73
                yield PhpMyAdmin\Html\Generator::getIcon("b_report", \_gettext("Tracking report"));
                yield "
                            </a>
                            <a href=\"";
                // line 75
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
                yield "\" data-post=\"";
                // line 76
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["version" => (($_v9 =                 // line 77
$context["version"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["version"] ?? null) : null), "snapshot" => "true"]), "", false);
                // line 79
                yield "\">
                                ";
                // line 80
                yield PhpMyAdmin\Html\Generator::getIcon("b_props", \_gettext("Structure snapshot"));
                yield "
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['version'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "            </tbody>
        </table>
        ";
            // line 87
            yield from $this->load("select_all.twig", 87)->unwrap()->yield(CoreExtension::toArray(["form_name" => "versionsForm"]));
            // line 90
            yield "        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete_version\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete version"), "html", null, true);
            yield "\">
            ";
            // line 91
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Delete version"));
            yield "
        </button>
    </form>
    ";
            // line 94
            $context["last_version_element"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["versions"] ?? null));
            // line 95
            yield "    <form method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/tracking", ($context["url_params"] ?? null));
            yield "\" class=\"card\">
      ";
            // line 96
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            yield "
      <div class=\"card-header\">
        ";
            // line 98
            if (((($_v10 = ($context["last_version_element"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["tracking_active"] ?? null) : null) == 0)) {
                // line 99
                yield "          ";
                $context["legend"] = \_gettext("Activate tracking for %s");
                // line 100
                yield "          ";
                $context["value"] = "activate_now";
                // line 101
                yield "          ";
                $context["button"] = \_gettext("Activate now");
                // line 102
                yield "        ";
            } else {
                // line 103
                yield "          ";
                $context["legend"] = \_gettext("Deactivate tracking for %s");
                // line 104
                yield "          ";
                $context["value"] = "deactivate_now";
                // line 105
                yield "          ";
                $context["button"] = \_gettext("Deactivate now");
                // line 106
                yield "        ";
            }
            // line 107
            yield "
        ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(($context["legend"] ?? null), ((($context["db"] ?? null) . ".") . ($context["table"] ?? null))), "html", null, true);
            yield "
      </div>
      <div class=\"card-body\">
        <input type=\"hidden\" name=\"version\" value=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_version"] ?? null), "html", null, true);
            yield "\">
        <input type=\"hidden\" name=\"toggle_activation\" value=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button"] ?? null), "html", null, true);
            yield "\">
      </div>
    </form>
";
        }
        // line 117
        yield from $this->load("create_tracking_version.twig", 117)->unwrap()->yield(CoreExtension::toArray(["route" => "/table/tracking", "url_params" =>         // line 119
($context["url_params"] ?? null), "last_version" =>         // line 120
($context["last_version"] ?? null), "db" =>         // line 121
($context["db"] ?? null), "selected" => [        // line 122
($context["table"] ?? null)], "type" =>         // line 123
($context["type"] ?? null), "default_statements" =>         // line 124
($context["default_statements"] ?? null)]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/tracking/main.twig";
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
        return array (  339 => 124,  338 => 123,  337 => 122,  336 => 121,  335 => 120,  334 => 119,  333 => 117,  326 => 113,  322 => 112,  318 => 111,  312 => 108,  309 => 107,  306 => 106,  303 => 105,  300 => 104,  297 => 103,  294 => 102,  291 => 101,  288 => 100,  285 => 99,  283 => 98,  278 => 96,  273 => 95,  271 => 94,  265 => 91,  260 => 90,  258 => 87,  254 => 85,  243 => 80,  240 => 79,  238 => 77,  237 => 76,  234 => 75,  229 => 73,  226 => 72,  224 => 70,  223 => 69,  220 => 68,  213 => 64,  210 => 63,  208 => 61,  207 => 60,  204 => 59,  201 => 58,  195 => 56,  192 => 55,  186 => 53,  183 => 52,  181 => 51,  177 => 50,  173 => 49,  167 => 46,  163 => 45,  157 => 42,  153 => 41,  148 => 38,  144 => 37,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  109 => 23,  104 => 22,  102 => 21,  99 => 20,  93 => 16,  86 => 14,  80 => 12,  74 => 10,  72 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/tracking/main.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/main.twig");
    }
}
