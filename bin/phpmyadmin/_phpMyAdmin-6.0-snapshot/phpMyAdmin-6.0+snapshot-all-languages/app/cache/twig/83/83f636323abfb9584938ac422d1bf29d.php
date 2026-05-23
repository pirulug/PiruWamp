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

/* server/binlog/index.twig */
class __TwigTemplate_1a7e21b1eee6bf11bb50ee761c7d7ea3 extends Template
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
        yield "<h2>
  ";
        // line 2
        yield PhpMyAdmin\Html\Generator::getImage("s_tbl");
        yield "
  ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Binary log"), "html", null, true);
        yield "
</h2>

<form action=\"";
        // line 6
        yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
        yield "\" method=\"post\" class=\"card\">
  ";
        // line 7
        yield PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        yield "
  <div class=\"card-header\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select binary log to view"), "html", null, true);
        yield "</div>

  <div class=\"card-body\">
    ";
        // line 11
        $context["full_size"] = 0;
        // line 12
        yield "    <select name=\"log\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["binary_logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["each_log"]) {
            // line 14
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = $context["each_log"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["Log_name"] ?? null) : null), "html", null, true);
            yield "\"";
            // line 15
            yield ((((($_v1 = $context["each_log"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["Log_name"] ?? null) : null) == ($context["log"] ?? null))) ? (" selected") : (""));
            yield ">
          ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["each_log"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["Log_name"] ?? null) : null), "html", null, true);
            yield "
          ";
            // line 17
            if (CoreExtension::getAttribute($this->env, $this->source, $context["each_log"], "File_size", [], "array", true, true, false, 17)) {
                // line 18
                yield "            (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(PhpMyAdmin\Util::formatByteDown((($_v3 = $context["each_log"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["File_size"] ?? null) : null), 3, 2), " "), "html", null, true);
                yield ")
            ";
                // line 19
                $context["full_size"] = (($context["full_size"] ?? null) + (($_v4 = $context["each_log"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["File_size"] ?? null) : null));
                // line 20
                yield "          ";
            }
            // line 21
            yield "        </option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['each_log'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "    </select>
    ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["binary_logs"] ?? null)), "html", null, true);
        yield "
    ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Files"), "html", null, true);
        yield ",
    ";
        // line 26
        if ((($context["full_size"] ?? null) > 0)) {
            // line 27
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(PhpMyAdmin\Util::formatByteDown(($context["full_size"] ?? null)), " "), "html", null, true);
            yield "
    ";
        }
        // line 29
        yield "  </div>

  <div class=\"card-footer\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
  </div>
</form>

";
        // line 36
        yield ($context["sql_message"] ?? null);
        yield "

<table class=\"table table-striped table-hover align-middle\" id=\"binlogTable\">
  <thead>
    <tr>
      <td colspan=\"6\" class=\"text-center\">
        ";
        // line 42
        if ((($tmp = ($context["has_previous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "          ";
            if ((($tmp = ($context["has_icons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "            <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(($context["previous_params"] ?? null), "", false);
                yield "\" title=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Previous page", "Previous"), "html", null, true);
                yield "\">
              &laquo;
            </a>
          ";
            } else {
                // line 49
                yield "            <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(($context["previous_params"] ?? null), "", false);
                yield "\">
              ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Previous page", "Previous"), "html", null, true);
                yield " &laquo;
            </a>
          ";
            }
            // line 53
            yield "          -
        ";
        }
        // line 55
        yield "
        ";
        // line 56
        if ((($tmp = ($context["is_full_query"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "          <a href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(($context["full_queries_params"] ?? null), "", false);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Truncate shown queries"), "html", null, true);
            yield "\">
            <img src=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("s_partialtext.png"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Truncate shown queries"), "html", null, true);
            yield "\">
          </a>
        ";
        } else {
            // line 61
            yield "          <a href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(($context["full_queries_params"] ?? null), "", false);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show full queries"), "html", null, true);
            yield "\">
            <img src=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("s_fulltext.png"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show full queries"), "html", null, true);
            yield "\">
          </a>
        ";
        }
        // line 65
        yield "
        ";
        // line 66
        if ((($tmp = ($context["has_next"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "          -
          ";
            // line 68
            if ((($tmp = ($context["has_icons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "            <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(($context["next_params"] ?? null), "", false);
                yield "\" title=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Next page", "Next"), "html", null, true);
                yield "\">
              &raquo;
            </a>
          ";
            } else {
                // line 74
                yield "            <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/binlog");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(($context["next_params"] ?? null), "", false);
                yield "\">
              ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Next page", "Next"), "html", null, true);
                yield " &raquo;
            </a>
          ";
            }
            // line 78
            yield "        ";
        }
        // line 79
        yield "      </td>
    </tr>
    <tr class=\"text-nowrap\">
      <th>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log name"), "html", null, true);
        yield "</th>
      <th>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Position"), "html", null, true);
        yield "</th>
      <th>";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Event type"), "html", null, true);
        yield "</th>
      <th>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server ID"), "html", null, true);
        yield "</th>
      <th>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Original position"), "html", null, true);
        yield "</th>
      <th>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Information"), "html", null, true);
        yield "</th>
    </tr>
  </thead>

  <tbody>
    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 93
            yield "      <tr class=\"noclick\">
        <td>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = $context["value"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["Log_name"] ?? null) : null), "html", null, true);
            yield "</td>
        <td class=\"text-end\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = $context["value"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["Pos"] ?? null) : null), "html", null, true);
            yield "</td>
        <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = $context["value"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["Event_type"] ?? null) : null), "html", null, true);
            yield "</td>
        <td class=\"text-end\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = $context["value"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["Server_id"] ?? null) : null), "html", null, true);
            yield "</td>
        <td class=\"text-end\">";
            // line 99
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "Orig_log_pos", [], "array", true, true, false, 99)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = $context["value"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["Orig_log_pos"] ?? null) : null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = $context["value"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["End_log_pos"] ?? null) : null), "html", null, true)));
            // line 100
            yield "</td>
        <td>";
            // line 101
            yield PhpMyAdmin\Html\Generator::formatSql((($_v11 = $context["value"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["Info"] ?? null) : null),  !($context["is_full_query"] ?? null));
            yield "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "  </tbody>
</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/binlog/index.twig";
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
        return array (  332 => 104,  323 => 101,  320 => 100,  318 => 99,  314 => 97,  310 => 96,  306 => 95,  302 => 94,  299 => 93,  295 => 92,  287 => 87,  283 => 86,  279 => 85,  275 => 84,  271 => 83,  267 => 82,  262 => 79,  259 => 78,  253 => 75,  246 => 74,  239 => 70,  233 => 69,  231 => 68,  228 => 67,  226 => 66,  223 => 65,  215 => 62,  206 => 61,  198 => 58,  189 => 57,  187 => 56,  184 => 55,  180 => 53,  174 => 50,  167 => 49,  160 => 45,  154 => 44,  151 => 43,  149 => 42,  140 => 36,  133 => 32,  128 => 29,  122 => 27,  120 => 26,  116 => 25,  112 => 24,  109 => 23,  102 => 21,  99 => 20,  97 => 19,  92 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  71 => 12,  69 => 11,  63 => 8,  59 => 7,  55 => 6,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/binlog/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/binlog/index.twig");
    }
}
