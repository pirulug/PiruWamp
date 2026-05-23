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

/* database/tracking/tables.twig */
class __TwigTemplate_b8eae14e541a6fc991b9b20e9743c898 extends Template
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
        // line 2
        if ((($tmp = ($context["head_version_exists"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    <div id=\"tracked_tables\">
        <h3>";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Tracked tables"), "html", null, true);
            yield "</h3>

        <form method=\"post\" action=\"";
            // line 6
            yield PhpMyAdmin\Url::getFromRoute("/database/tracking");
            yield "\" name=\"trackedForm\"
            id=\"trackedForm\" class=\"ajax\">
            ";
            // line 8
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            yield "
            <table id=\"versions\" class=\"table table-striped table-hover w-auto\">
                <thead>
                    <tr>
                        <th></th>
                        <th>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
            yield "</th>
                        <th>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Last version"), "html", null, true);
            yield "</th>
                        <th>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Created"), "html", null, true);
            yield "</th>
                        <th>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Updated"), "html", null, true);
            yield "</th>
                        <th>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Status"), "html", null, true);
            yield "</th>
                        <th>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
            yield "</th>
                        <th>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show"), "html", null, true);
            yield "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["versions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 24
                yield "                        <tr>
                            <td class=\"text-center\">
                                <input type=\"checkbox\" name=\"selected_tbl[]\"
                                    class=\"checkall\" id=\"selected_tbl_";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "table_name", [], "any", false, false, false, 27), "html", null, true);
                yield "\"
                                    value=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "table_name", [], "any", false, false, false, 28), "html", null, true);
                yield "\">
                            </td>
                            <th>
                                <label for=\"selected_tbl_";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "table_name", [], "any", false, false, false, 31), "html", null, true);
                yield "\">
                                    ";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "table_name", [], "any", false, false, false, 32), "html", null, true);
                yield "
                                </label>
                            </th>
                            <td class=\"text-end\">
                                ";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 36), "html", null, true);
                yield "
                            </td>
                            <td>
                                ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "date_created", [], "any", false, false, false, 39), "html", null, true);
                yield "
                            </td>
                            <td>
                                ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "date_updated", [], "any", false, false, false, 42), "html", null, true);
                yield "
                            </td>
                            <td>
                              <div class=\"wrapper toggleAjax hide\">
                                <div class=\"toggleButton\">
                                  <div title=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Click to toggle"), "html", null, true);
                yield "\" class=\"toggle-container ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["version"], "tracking_active", [], "any", false, false, false, 47) == 1)) ? ("on") : ("off"));
                yield "\">
                                    <img src=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath((("toggle-" . CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "text_dir", [], "any", false, false, false, 48)) . ".png")), "html", null, true);
                yield "\">
                                    <table>
                                      <tbody>
                                      <tr>
                                        <td class=\"toggleOn\">
                                          <span class=\"hide\">";
                // line 54
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking", ["db" => CoreExtension::getAttribute($this->env, $this->source,                 // line 55
$context["version"], "db_name", [], "any", false, false, false, 55), "table" => CoreExtension::getAttribute($this->env, $this->source,                 // line 56
$context["version"], "table_name", [], "any", false, false, false, 56), "version" => CoreExtension::getAttribute($this->env, $this->source,                 // line 57
$context["version"], "version", [], "any", false, false, false, 57), "toggle_activation" => "activate_now"]);
                // line 60
                yield "</span>
                                          <div>";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("active"), "html", null, true);
                yield "</div>
                                        </td>
                                        <td><div>&nbsp;</div></td>
                                        <td class=\"toggleOff\">
                                          <span class=\"hide\">";
                // line 66
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking", ["db" => CoreExtension::getAttribute($this->env, $this->source,                 // line 67
$context["version"], "db_name", [], "any", false, false, false, 67), "table" => CoreExtension::getAttribute($this->env, $this->source,                 // line 68
$context["version"], "table_name", [], "any", false, false, false, 68), "version" => CoreExtension::getAttribute($this->env, $this->source,                 // line 69
$context["version"], "version", [], "any", false, false, false, 69), "toggle_activation" => "deactivate_now"]);
                // line 72
                yield "</span>
                                          <div>";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not active"), "html", null, true);
                yield "</div>
                                        </td>
                                      </tr>
                                      </tbody>
                                    </table>
                                    <span class=\"hide callback\"></span>
                                    <span class=\"hide text_direction\">";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "text_dir", [], "any", false, false, false, 79), "html", null, true);
                yield "</span>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>
                                <a class=\"delete_tracking_anchor ajax\" href=\"";
                // line 85
                yield PhpMyAdmin\Url::getFromRoute("/database/tracking");
                yield "\" data-post=\"";
                // line 86
                yield PhpMyAdmin\Url::getCommon(["db" =>                 // line 87
($context["db"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/table/tracking"), "back" => PhpMyAdmin\Url::getFromRoute("/database/tracking"), "table" => CoreExtension::getAttribute($this->env, $this->source,                 // line 90
$context["version"], "table_name", [], "any", false, false, false, 90), "delete_tracking" => true], "", false);
                // line 92
                yield "\">
                                    ";
                // line 93
                yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Delete tracking"));
                yield "
                                </a>
                            </td>
                            <td>
                                <a href=\"";
                // line 97
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
                yield "\" data-post=\"";
                // line 98
                yield PhpMyAdmin\Url::getCommon(["db" =>                 // line 99
($context["db"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/table/tracking"), "back" => PhpMyAdmin\Url::getFromRoute("/database/tracking"), "table" => CoreExtension::getAttribute($this->env, $this->source,                 // line 102
$context["version"], "table_name", [], "any", false, false, false, 102)], "", false);
                // line 103
                yield "\">
                                    ";
                // line 104
                yield PhpMyAdmin\Html\Generator::getIcon("b_versions", \_gettext("Versions"));
                yield "
                                </a>
                                <a href=\"";
                // line 106
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
                yield "\" data-post=\"";
                // line 107
                yield PhpMyAdmin\Url::getCommon(["db" =>                 // line 108
($context["db"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/table/tracking"), "back" => PhpMyAdmin\Url::getFromRoute("/database/tracking"), "table" => CoreExtension::getAttribute($this->env, $this->source,                 // line 111
$context["version"], "table_name", [], "any", false, false, false, 111), "report" => true, "version" => CoreExtension::getAttribute($this->env, $this->source,                 // line 113
$context["version"], "version", [], "any", false, false, false, 113)], "", false);
                // line 114
                yield "\">
                                    ";
                // line 115
                yield PhpMyAdmin\Html\Generator::getIcon("b_report", \_gettext("Tracking report"));
                yield "
                                </a>
                                <a href=\"";
                // line 117
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
                yield "\" data-post=\"";
                // line 118
                yield PhpMyAdmin\Url::getCommon(["db" =>                 // line 119
($context["db"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/table/tracking"), "back" => PhpMyAdmin\Url::getFromRoute("/database/tracking"), "table" => CoreExtension::getAttribute($this->env, $this->source,                 // line 122
$context["version"], "table_name", [], "any", false, false, false, 122), "snapshot" => true, "version" => CoreExtension::getAttribute($this->env, $this->source,                 // line 124
$context["version"], "version", [], "any", false, false, false, 124)], "", false);
                // line 125
                yield "\">
                                    ";
                // line 126
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
            // line 131
            yield "                </tbody>
            </table>
            ";
            // line 133
            yield from $this->load("select_all.twig", 133)->unwrap()->yield(CoreExtension::toArray(["form_name" => "trackedForm"]));
            // line 136
            yield "            <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete_tracking\"
                    title=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete tracking"), "html", null, true);
            yield "\">
                ";
            // line 138
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Delete tracking"));
            yield "
            </button>
        </form>
    </div>
";
        }
        // line 143
        if ((($tmp = ($context["untracked_tables_exists"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "    <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Untracked tables"), "html", null, true);
            yield "</h3>
    <form method=\"post\" action=\"";
            // line 145
            yield PhpMyAdmin\Url::getFromRoute("/database/tracking");
            yield "\" name=\"untrackedForm\"
        id=\"untrackedForm\" class=\"ajax\">
        ";
            // line 147
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            yield "
        <table id=\"noversions\" class=\"table table-striped table-hover w-auto\">
            <thead>
                <tr>
                    <th></th>
                    <th>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
            yield "</th>
                    <th>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
            yield "</th>
                </tr>
            </thead>
            <tbody>
              ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["untracked_tables"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["table_name"]) {
                // line 158
                yield "                  <tr>
                      <td class=\"text-center\">
                          <input type=\"checkbox\" name=\"selected_tbl[]\"
                              class=\"checkall\" id=\"selected_tbl_";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table_name"], "html", null, true);
                yield "\"
                              value=\"";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table_name"], "html", null, true);
                yield "\">
                      </td>
                      <th>
                          <label for=\"selected_tbl_";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table_name"], "html", null, true);
                yield "\">
                              ";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table_name"], "html", null, true);
                yield "
                          </label>
                      </th>
                      <td>
                          <a href=\"";
                // line 170
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking", Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["db" =>                 // line 171
($context["db"] ?? null), "table" =>                 // line 172
$context["table_name"]]));
                // line 173
                yield "\">
                              ";
                // line 174
                yield PhpMyAdmin\Html\Generator::getIcon("eye", \_gettext("Track table"));
                yield "
                          </a>
                      </td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['table_name'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            yield "            </tbody>
        </table>
        ";
            // line 181
            yield from $this->load("select_all.twig", 181)->unwrap()->yield(CoreExtension::toArray(["form_name" => "untrackedForm"]));
            // line 184
            yield "        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"track\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Track table"), "html", null, true);
            yield "\">
            ";
            // line 185
            yield PhpMyAdmin\Html\Generator::getIcon("eye", \_gettext("Track table"));
            yield "
        </button>
    </form>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/tracking/tables.twig";
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
        return array (  382 => 185,  377 => 184,  375 => 181,  371 => 179,  360 => 174,  357 => 173,  355 => 172,  354 => 171,  353 => 170,  346 => 166,  342 => 165,  336 => 162,  332 => 161,  327 => 158,  323 => 157,  316 => 153,  312 => 152,  304 => 147,  299 => 145,  294 => 144,  292 => 143,  284 => 138,  280 => 137,  277 => 136,  275 => 133,  271 => 131,  260 => 126,  257 => 125,  255 => 124,  254 => 122,  253 => 119,  252 => 118,  249 => 117,  244 => 115,  241 => 114,  239 => 113,  238 => 111,  237 => 108,  236 => 107,  233 => 106,  228 => 104,  225 => 103,  223 => 102,  222 => 99,  221 => 98,  218 => 97,  211 => 93,  208 => 92,  206 => 90,  205 => 87,  204 => 86,  201 => 85,  192 => 79,  183 => 73,  180 => 72,  178 => 69,  177 => 68,  176 => 67,  175 => 66,  168 => 61,  165 => 60,  163 => 57,  162 => 56,  161 => 55,  160 => 54,  152 => 48,  146 => 47,  138 => 42,  132 => 39,  126 => 36,  119 => 32,  115 => 31,  109 => 28,  105 => 27,  100 => 24,  96 => 23,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  57 => 8,  52 => 6,  47 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/tracking/tables.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/tracking/tables.twig");
    }
}
