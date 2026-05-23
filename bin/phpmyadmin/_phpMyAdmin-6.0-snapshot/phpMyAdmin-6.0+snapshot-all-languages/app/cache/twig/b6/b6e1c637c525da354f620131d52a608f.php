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

/* navigation/main.twig */
class __TwigTemplate_66f8dc085f10610249dcb93173cd2817 extends Template
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
        if ((($tmp =  !($context["is_ajax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  <div id=\"pma_navigation\" class=\"d-print-none\" data-config-navigation-width=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["config_navigation_width"] ?? null), "html", null, true);
            yield "\">
    <div id=\"pma_navigation_resizer\"></div>
    <div id=\"pma_navigation_collapser\"></div>
    <div id=\"pma_navigation_content\">
      <div id=\"pma_navigation_header\">

        ";
            // line 8
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "is_displayed", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "          <div id=\"pmalogo\">
            ";
                // line 10
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "has_link", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 11
                    yield "              <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "link", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "link", [], "any", false, false, false, 11), "#")) : ("#")), "html", null, true);
                    yield "\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "attributes", [], "any", false, false, false, 11);
                    yield ">
            ";
                }
                // line 13
                yield "            ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "source", [], "any", false, false, false, 13))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 14
                    yield "              <img id=\"imgpmalogo\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "source", [], "any", false, false, false, 14), "html", null, true);
                    yield "\" alt=\"phpMyAdmin\">
            ";
                } else {
                    // line 16
                    yield "              <h1>phpMyAdmin</h1>
            ";
                }
                // line 18
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "has_link", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 19
                    yield "              </a>
            ";
                }
                // line 21
                yield "          </div>
        ";
            }
            // line 23
            yield "
        <div id=\"navipanellinks\">
          <a href=\"";
            // line 25
            yield PhpMyAdmin\Url::getFromRoute("/");
            yield "\" class=\"disableAjax\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Home"), "html", null, true);
            yield "\">";
            // line 26
            yield PhpMyAdmin\Html\Generator::getImage("b_home", \_gettext("Home"));
            // line 27
            yield "</a>

          ";
            // line 29
            if ((($context["server"] ?? null) > 0)) {
                // line 30
                yield "            <a class=\"logout disableAjax\" href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/logout");
                yield "\" title=\"";
                yield (((($context["auth_type"] ?? null) == "config")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Empty session data"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log out"), "html", null, true)));
                yield "\">";
                // line 31
                yield PhpMyAdmin\Html\Generator::getImage("s_loggoff", (((($context["auth_type"] ?? null) == "config")) ? (\_gettext("Empty session data")) : (\_gettext("Log out"))));
                // line 32
                yield "</a>
          ";
            }
            // line 34
            yield "
          <a href=\"";
            // line 35
            yield PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("index");
            yield "\" class=\"disableAjax\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("phpMyAdmin documentation"), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            // line 36
            yield PhpMyAdmin\Html\Generator::getImage("b_docs", \_gettext("phpMyAdmin documentation"));
            // line 37
            yield "</a>

          <a href=\"";
            // line 39
            yield PhpMyAdmin\Util::getDocuURL(($context["is_mariadb"] ?? null));
            yield "\" class=\"disableAjax\" title=\"";
            yield (((($tmp = ($context["is_mariadb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("MariaDB Documentation"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("MySQL Documentation"), "html", null, true)));
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            // line 40
            yield PhpMyAdmin\Html\Generator::getImage("b_sqlhelp", (((($tmp = ($context["is_mariadb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (\_gettext("MariaDB Documentation")) : (\_gettext("MySQL Documentation"))));
            // line 41
            yield "</a>

          <a id=\"pma_navigation_settings_icon\"";
            // line 43
            yield (((($tmp =  !($context["is_navigation_settings_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"hide\"") : (""));
            yield " href=\"#\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Navigation panel settings"), "html", null, true);
            yield "\">";
            // line 44
            yield PhpMyAdmin\Html\Generator::getImage("s_cog", \_gettext("Navigation panel settings"));
            // line 45
            yield "</a>

          <a id=\"pma_navigation_reload\" href=\"#\" title=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Reload navigation panel"), "html", null, true);
            yield "\">";
            // line 48
            yield PhpMyAdmin\Html\Generator::getImage("s_reload", \_gettext("Reload navigation panel"));
            // line 49
            yield "</a>
        </div>

        ";
            // line 52
            if ((($context["is_servers_displayed"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["servers"] ?? null)) > 1))) {
                // line 53
                yield "          <div id=\"serverChoice\">
            ";
                // line 54
                yield ($context["server_select"] ?? null);
                yield "
          </div>
        ";
            }
            // line 57
            yield "
        ";
            // line 58
            yield PhpMyAdmin\Html\Generator::getImage("ajax_clock_small", \_gettext("Loading…"), ["style" => "visibility: hidden; display:none", "class" => "throbber"]);
            // line 61
            yield "
      </div>
      <div id=\"pma_navigation_tree\" class=\"list_container";
            // line 63
            yield (((($tmp = ($context["is_synced"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" synced") : (""));
            yield (((($tmp = ($context["is_highlighted"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" highlight") : (""));
            yield (((($tmp = ($context["is_autoexpanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" autoexpand") : (""));
            yield "\">
";
        }
        // line 65
        yield "
";
        // line 66
        if ((($tmp =  !($context["navigation_tree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "  ";
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("An error has occurred while loading the navigation display"));
            yield "
";
        } else {
            // line 69
            yield "  ";
            yield ($context["navigation_tree"] ?? null);
            yield "
";
        }
        // line 71
        yield "
";
        // line 72
        if ((($tmp =  !($context["is_ajax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "      </div>

      <div id=\"pma_navi_settings_container\">
        ";
            // line 76
            if ((($tmp = ($context["is_navigation_settings_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "          ";
                yield ($context["navigation_settings"] ?? null);
                yield "
        ";
            }
            // line 79
            yield "      </div>
    </div>

    ";
            // line 82
            if ((($tmp = ($context["is_drag_drop_import_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 83
                yield "      <div class=\"pma_drop_handler\">
        ";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Drop files here"), "html", null, true);
                yield "
      </div>
      <div class=\"pma_sql_import_status\">
        <h2>
          ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("SQL upload"), "html", null, true);
                yield "
          ( <span class=\"pma_import_count\">0</span> )
          <span class=\"close\">x</span>
          <span class=\"minimize\">-</span>
        </h2>
        <div></div>
      </div>
    ";
            }
            // line 96
            yield "  </div>
  ";
            // line 97
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/unhide_nav_item.twig");
            yield "
  ";
            // line 98
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/create_view.twig");
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation/main.twig";
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
        return array (  265 => 98,  261 => 97,  258 => 96,  247 => 88,  240 => 84,  237 => 83,  235 => 82,  230 => 79,  224 => 77,  222 => 76,  217 => 73,  215 => 72,  212 => 71,  206 => 69,  200 => 67,  198 => 66,  195 => 65,  188 => 63,  184 => 61,  182 => 58,  179 => 57,  173 => 54,  170 => 53,  168 => 52,  163 => 49,  161 => 48,  158 => 47,  154 => 45,  152 => 44,  147 => 43,  143 => 41,  141 => 40,  136 => 39,  132 => 37,  130 => 36,  125 => 35,  122 => 34,  118 => 32,  116 => 31,  110 => 30,  108 => 29,  104 => 27,  102 => 26,  97 => 25,  93 => 23,  89 => 21,  85 => 19,  82 => 18,  78 => 16,  72 => 14,  69 => 13,  61 => 11,  59 => 10,  56 => 9,  54 => 8,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "navigation/main.twig", "C:\\Pirulug\\PiruWamp\\bin\\phpmyadmin\\phpMyAdmin-6.0-snapshot\\phpMyAdmin-6.0+snapshot-all-languages\\resources\\templates\\navigation\\main.twig");
    }
}
