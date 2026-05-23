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

/* console/display.twig */
class __TwigTemplate_97d5e7a908fd20155f8dc66382b2ceee extends Template
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
        yield "<div id=\"pma_console_container\" class=\"d-print-none\">
  <div id=\"pma_console\"
       data-start-history=\"";
        // line 3
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "StartHistory", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "\"
       data-always-expand=\"";
        // line 4
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "AlwaysExpand", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "\"
       data-current-query=\"";
        // line 5
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "CurrentQuery", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "\"
       data-enter-executes=\"";
        // line 6
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "EnterExecutes", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "\"
       data-dark-theme=\"";
        // line 7
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DarkTheme", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "\"
       data-mode=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "Mode", [], "any", false, false, false, 8), "html", null, true);
        yield "\"
       data-height=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "Height", [], "any", false, false, false, 9), "html", null, true);
        yield "\"
       data-group-queries=\"";
        // line 10
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "GroupQueries", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "\"
       data-order-by=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "OrderBy", [], "any", false, false, false, 11), "html", null, true);
        yield "\"
       data-order=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "Order", [], "any", false, false, false, 12), "html", null, true);
        yield "\">
    <div class=\"toolbar collapsed\">
      <div class=\"switch_button console_switch\">
        ";
        // line 15
        yield PhpMyAdmin\Html\Generator::getImage("console", \_gettext("SQL Query Console"));
        yield "
        <span>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Console"), "html", null, true);
        yield "</span>
      </div>
      <div class=\"button clear\">
        <span>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Clear"), "html", null, true);
        yield "</span>
      </div>
      <div class=\"button history\">
        <span>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("History"), "html", null, true);
        yield "</span>
      </div>
      <div class=\"button options\">
        <span>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Options"), "html", null, true);
        yield "</span>
      </div>
      ";
        // line 27
        if ((($tmp = ($context["has_bookmark_feature"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "        <div class=\"button bookmarks\">
          <span>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Bookmarks"), "html", null, true);
            yield "</span>
        </div>
      ";
        }
        // line 32
        yield "      ";
        if ((($tmp = ($context["debug"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "        <div class=\"button debug hide\">
          <span>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Debug SQL"), "html", null, true);
            yield "</span>
        </div>
      ";
        }
        // line 37
        yield "    </div>

    ";
        // line 40
        yield "    <div class=\"content";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DarkTheme", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" console_dark_theme") : (""));
        yield "\">
      <div class=\"console_message_container\">
        <div class=\"message welcome\">
          <span id=\"instructions-0\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Press Ctrl+Enter to execute query"), "html", null, true);
        yield "</span>
          <span class=\"hide\" id=\"instructions-1\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Press Enter to execute query"), "html", null, true);
        yield "</span>
        </div>
        ";
        // line 46
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["sql_history"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), ($context["sql_history"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 48
                yield "            <div class=\"message history collapsed hide";
                yield ((CoreExtension::matches("@^SELECT[[:space:]]+@i", (($_v0 = $context["record"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["sqlquery"] ?? null) : null))) ? (" select") : (""));
                yield "\" targetdb=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["record"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["db"] ?? null) : null), "html", null, true);
                yield "\" targettable=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["record"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["table"] ?? null) : null), "html", null, true);
                yield "\">
              <div class=\"action_content\">
                <span class=\"action collapse\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collapse"), "html", null, true);
                yield "</span>
                <span class=\"action expand\">";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Expand"), "html", null, true);
                yield "</span>
                <span class=\"action requery\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Requery"), "html", null, true);
                yield "</span>
                <span class=\"action edit\">";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit"), "html", null, true);
                yield "</span>
                <span class=\"action explain\">";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Explain"), "html", null, true);
                yield "</span>
                <span class=\"action profiling\">";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Profiling"), "html", null, true);
                yield "</span>
                ";
                // line 56
                if ((($tmp = ($context["has_bookmark_feature"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 57
                    yield "                  <span class=\"action bookmark\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Bookmark"), "html", null, true);
                    yield "</span>
                ";
                }
                // line 59
                yield "                <span class=\"text failed\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Query failed"), "html", null, true);
                yield "</span>
                <span class=\"text targetdb\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
                yield ": <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = $context["record"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["db"] ?? null) : null), "html", null, true);
                yield "</span></span>
                <span class=\"text query_time\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Queried time"), "html", null, true);
                yield ": <span>";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["record"], "timevalue", [], "array", true, true, false, 61)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = $context["record"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["timevalue"] ?? null) : null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("During current session"), "html", null, true)));
                yield "</span></span>
              </div>

              <span class=\"query\">";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = $context["record"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["sqlquery"] ?? null) : null), "html", null, true);
                yield "</span>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['record'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "        ";
        }
        // line 68
        yield "      </div><!-- console_message_container -->
      <div class=\"query_input\">
        <span class=\"console_query_input\"></span>
      </div>
    </div><!-- message end -->
    ";
        // line 74
        yield "    <div class=\"mid_layer\"></div>
    ";
        // line 76
        yield "    <div class=\"card\" id=\"debug_console\">
      <div class=\"toolbar\">
        <div class=\"button order order_asc\">
          <span>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("ascending"), "html", null, true);
        yield "</span>
        </div>
        <div class=\"button order order_desc\">
          <span>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("descending"), "html", null, true);
        yield "</span>
        </div>
        <div class=\"text\">
          <span>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Order:"), "html", null, true);
        yield "</span>
        </div>
        <div class=\"switch_button\">
          <span>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Debug SQL"), "html", null, true);
        yield "</span>
        </div>
        <div class=\"button order_by sort_count\">
          <span>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Count"), "html", null, true);
        yield "</span>
        </div>
        <div class=\"button order_by sort_exec\">
          <span>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Execution order"), "html", null, true);
        yield "</span>
        </div>
        <div class=\"button order_by sort_time\">
          <span>";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Time taken"), "html", null, true);
        yield "</span>
        </div>
        <div class=\"text\">
          <span>";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Order by:"), "html", null, true);
        yield "</span>
        </div>
        <div class=\"button group_queries\">
          <span>";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Group queries"), "html", null, true);
        yield "</span>
        </div>
        <div class=\"button ungroup_queries\">
          <span>";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Ungroup queries"), "html", null, true);
        yield "</span>
        </div>
      </div>

      <div class=\"content debug\">
        <div class=\"message welcome\"></div>
        <div class=\"debugLog\"></div>
      </div> <!-- Content -->
      <div class=\"templates\">
        <div class=\"debug_query action_content\">
          <span class=\"action collapse\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collapse"), "html", null, true);
        yield "</span>
          <span class=\"action expand\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Expand"), "html", null, true);
        yield "</span>
          <span class=\"action dbg_show_trace\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show trace"), "html", null, true);
        yield "</span>
          <span class=\"action dbg_hide_trace\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Hide trace"), "html", null, true);
        yield "</span>
          <span class=\"text count hide\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Count:"), "html", null, true);
        yield " <span></span></span>
          <span class=\"text time\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Time taken:"), "html", null, true);
        yield " <span></span></span>
        </div>

      </div> <!-- Template -->
    </div> <!-- Debug SQL card -->
    ";
        // line 126
        if ((($tmp = ($context["has_bookmark_feature"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 127
            yield "      <div class=\"card\" id=\"pma_bookmarks\">
        <div class=\"toolbar\">
          <div class=\"switch_button\">
            <span>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Bookmarks"), "html", null, true);
            yield "</span>
          </div>
          <div class=\"button refresh\">
            <span>";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Refresh"), "html", null, true);
            yield "</span>
          </div>
          <div class=\"button add\">
            <span>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add"), "html", null, true);
            yield "</span>
          </div>
        </div>

        <div class=\"content bookmark\">
          ";
            // line 141
            yield ($context["bookmark_content"] ?? null);
            yield "
        </div>
        <div class=\"mid_layer\"></div>
        <div class=\"card add\">
          <div class=\"toolbar\">
            <div class=\"switch_button\">
              <span>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add bookmark"), "html", null, true);
            yield "</span>
            </div>
          </div>

          <div class=\"content add_bookmark\">
            <div class=\"options\">
              <label>
                ";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Label"), "html", null, true);
            yield ": <input type=\"text\" name=\"label\">
              </label>
              <label>
                ";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Target database"), "html", null, true);
            yield ": <input type=\"text\" name=\"targetdb\">
              </label>
              <label>
                <input type=\"checkbox\" name=\"shared\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Share this bookmark"), "html", null, true);
            yield "
              </label>
              <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("OK"), "html", null, true);
            yield "</button>
            </div> <!-- options -->
            <div class=\"query_input\">
              <span class=\"bookmark_add_input\"></span>
            </div>
          </div>
        </div> <!-- Add bookmark card -->
      </div> <!-- Bookmarks card -->
    ";
        }
        // line 171
        yield "    ";
        // line 172
        yield "    <div class=\"card\" id=\"pma_console_options\">
      <div class=\"toolbar\">
        <div class=\"switch_button\">
          <span>";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Options"), "html", null, true);
        yield "</span>
        </div>
        <div class=\"button default\">
          <span>";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Restore default values"), "html", null, true);
        yield "</span>
        </div>
      </div>

      <div class=\"content\">
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsAlwaysExpandCheckbox\" name=\"always_expand\"";
        // line 184
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "AlwaysExpand", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"consoleOptionsAlwaysExpandCheckbox\">";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Always expand query messages"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsStartHistoryCheckbox\" name=\"start_history\"";
        // line 188
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "StartHistory", [], "any", false, false, false, 188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"consoleOptionsStartHistoryCheckbox\">";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show query history at start"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsCurrentQueryCheckbox\" name=\"current_query\"";
        // line 192
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "CurrentQuery", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"consoleOptionsCurrentQueryCheckbox\">";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show current browsing query"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsEnterExecutesCheckbox\" name=\"enter_executes\"";
        // line 196
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "EnterExecutes", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"consoleOptionsEnterExecutesCheckbox\">";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Execute queries on Enter and insert new line with Shift+Enter. To make this permanent, view settings."), "html", null, true);
        yield "</label>
        </div>
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsDarkThemeCheckbox\" name=\"dark_theme\"";
        // line 200
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DarkTheme", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"consoleOptionsDarkThemeCheckbox\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Switch to dark theme"), "html", null, true);
        yield "</label>
        </div>
      </div>
    </div> <!-- Options card -->
    <div class=\"templates\">
      ";
        // line 207
        yield "      <div class=\"query_actions\">
        <span class=\"action collapse\">";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collapse"), "html", null, true);
        yield "</span>
        <span class=\"action expand\">";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Expand"), "html", null, true);
        yield "</span>
        <span class=\"action requery\">";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Requery"), "html", null, true);
        yield "</span>
        <span class=\"action edit\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit"), "html", null, true);
        yield "</span>
        <span class=\"action explain\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Explain"), "html", null, true);
        yield "</span>
        <span class=\"action profiling\">";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Profiling"), "html", null, true);
        yield "</span>
        ";
        // line 214
        if ((($tmp = ($context["has_bookmark_feature"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 215
            yield "          <span class=\"action bookmark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Bookmark"), "html", null, true);
            yield "</span>
        ";
        }
        // line 217
        yield "        <span class=\"text failed\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Query failed"), "html", null, true);
        yield "</span>
        <span class=\"text targetdb\">";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
        yield ": <span></span></span>
        <span class=\"text query_time\">";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Queried time"), "html", null, true);
        yield ": <span></span></span>
      </div>
    </div>
  </div> <!-- #console end -->
</div> <!-- #console_container end -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "console/display.twig";
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
        return array (  541 => 219,  537 => 218,  532 => 217,  526 => 215,  524 => 214,  520 => 213,  516 => 212,  512 => 211,  508 => 210,  504 => 209,  500 => 208,  497 => 207,  489 => 201,  485 => 200,  479 => 197,  475 => 196,  469 => 193,  465 => 192,  459 => 189,  455 => 188,  449 => 185,  445 => 184,  436 => 178,  430 => 175,  425 => 172,  423 => 171,  411 => 162,  406 => 160,  400 => 157,  394 => 154,  384 => 147,  375 => 141,  367 => 136,  361 => 133,  355 => 130,  350 => 127,  348 => 126,  340 => 121,  336 => 120,  332 => 119,  328 => 118,  324 => 117,  320 => 116,  307 => 106,  301 => 103,  295 => 100,  289 => 97,  283 => 94,  277 => 91,  271 => 88,  265 => 85,  259 => 82,  253 => 79,  248 => 76,  245 => 74,  238 => 68,  235 => 67,  226 => 64,  218 => 61,  212 => 60,  207 => 59,  201 => 57,  199 => 56,  195 => 55,  191 => 54,  187 => 53,  183 => 52,  179 => 51,  175 => 50,  165 => 48,  160 => 47,  158 => 46,  153 => 44,  149 => 43,  142 => 40,  138 => 37,  132 => 34,  129 => 33,  126 => 32,  120 => 29,  117 => 28,  115 => 27,  110 => 25,  104 => 22,  98 => 19,  92 => 16,  88 => 15,  82 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "console/display.twig", "C:\\Pirulug\\PiruWamp\\bin\\phpmyadmin\\phpMyAdmin-6.0-snapshot\\phpMyAdmin-6.0+snapshot-all-languages\\resources\\templates\\console\\display.twig");
    }
}
