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

/* base.twig */
class __TwigTemplate_2eacdaaf1aa0ab7e5af34612dd7f510b extends Template
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
        yield "<!doctype html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "lang", [], "any", false, false, false, 2), "html", null, true);
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "text_dir", [], "any", false, false, false, 2), "html", null, true);
        yield "\" data-bs-theme=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_color_mode", [], "any", false, false, false, 2), "html", null, true);
        yield "\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"referrer\" content=\"same-origin\">
  <meta name=\"robots\" content=\"noindex,nofollow,notranslate\">
  <meta name=\"google\" content=\"notranslate\">
  <script>window.allowThirdPartyFraming = ";
        // line 9
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "allow_third_party_framing", [], "any", false, false, false, 9) == "sameorigin")) ? ("\"sameorigin\"") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "allow_third_party_framing", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"))));
        yield ";</script>
  ";
        // line 10
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "allow_third_party_framing", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "<style id=\"cfs-style\">html{display: none;}</style>";
        }
        // line 13
        yield "
  <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_path", [], "any", false, false, false, 16), "html", null, true);
        yield "/jquery/jquery-ui.css\">
  ";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "codemirror_enable", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "<link rel=\"stylesheet\" type=\"text/css\" href=\"js/vendor/codemirror/lib/codemirror.css?v=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "version", [], "any", false, false, false, 18)), "html", null, true);
            yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"js/vendor/codemirror/addon/hint/show-hint.css?v=";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "version", [], "any", false, false, false, 19)), "html", null, true);
            yield "\">
    ";
            // line 20
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "lint_enable", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "<link rel=\"stylesheet\" type=\"text/css\" href=\"js/vendor/codemirror/addon/lint/lint.css?v=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "version", [], "any", false, false, false, 21)), "html", null, true);
                yield "\">
    ";
            }
            // line 23
            yield "  ";
        }
        // line 24
        yield "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_path", [], "any", false, false, false, 24), "html", null, true);
        yield "/css/theme";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "text_dir", [], "any", false, false, false, 24) == "rtl")) ? (".rtl") : (""));
        yield ".css?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "version", [], "any", false, false, false, 24)), "html", null, true);
        yield "\">
  <title>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "title", [], "any", false, false, false, 25), "html", null, true);
        yield "</title>
  ";
        // line 26
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "scripts", [], "any", false, false, false, 26);
        yield "
  <noscript><style>html{display:block}</style></noscript>
</head>
<body";
        // line 29
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "body_id", [], "any", false, false, false, 29))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" id=" . CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "body_id", [], "any", false, false, false, 29)), "html", null, true)) : (""));
        yield ">
";
        // line 30
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "navigation", [], "any", false, false, false, 30);
        yield "
";
        // line 31
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "custom_header", [], "any", false, false, false, 31);
        yield "
";
        // line 32
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "load_user_preferences", [], "any", false, false, false, 32);
        yield "

";
        // line 34
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "show_hint", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "  <span id=\"no_hint\" class=\"hide\"></span>
";
        }
        // line 37
        yield "
";
        // line 38
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "is_warnings_enabled", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "  <noscript>
    ";
            // line 40
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Javascript must be enabled past this point!"));
            yield "
  </noscript>
";
        }
        // line 43
        yield "
";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "is_menu_enabled", [], "any", false, false, false, 44) && (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "server", [], "any", false, false, false, 44) > 0))) {
            // line 45
            yield "  ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "menu", [], "any", false, false, false, 45);
            yield "
  <div id=\"page_nav_icons\" class=\"row row-cols-sm-auto align-items-center d-print-none me-3 p-1\">
    <div class=\"col-12\">
      <div id=\"userAccountDropdown\" class=\"dropdown\">
        <button class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
            // line 50
            yield PhpMyAdmin\Html\Generator::getImage("user", \_gettext("Open user account menu"));
            // line 51
            yield "</button>
        <ul class=\"dropdown-menu\">
          <li>
            <a class=\"dropdown-item text-nowrap disableAjax\" href=\"";
            // line 54
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "current_user", [], "any", false, false, false, 54)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "hostname" => (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "current_user", [], "any", false, false, false, 54)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[1] ?? null) : null)]);
            yield "\">
              ";
            // line 55
            yield PhpMyAdmin\Html\Generator::getImage("user", "", ["aria-hidden" => "true"]);
            yield " <span dir=\"ltr\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "current_user", [], "any", false, false, false, 55), "@"), "html", null, true);
            yield "</span>
            </a>
          </li>
          <li><hr class=\"dropdown-divider\"></li>
          <li>
            <a class=\"dropdown-item disableAjax\" href=\"";
            // line 60
            yield PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("index");
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
              ";
            // line 61
            yield PhpMyAdmin\Html\Generator::getIcon("b_docs", \_gettext("phpMyAdmin documentation"));
            yield "
            </a>
          </li>
          <li>
            <a class=\"dropdown-item disableAjax\" href=\"";
            // line 65
            yield PhpMyAdmin\Util::getDocuURL(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "is_mariadb", [], "any", false, false, false, 65));
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
              ";
            // line 66
            yield PhpMyAdmin\Html\Generator::getIcon("b_sqlhelp", (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "is_mariadb", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (\_gettext("MariaDB documentation")) : (\_gettext("MySQL documentation"))));
            yield "
            </a>
          </li>
          <li><hr class=\"dropdown-divider\"></li>
          ";
            // line 70
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_color_modes", [], "any", false, false, false, 70)) > 1)) {
                // line 71
                yield "            <li>
              <form method=\"post\" action=\"";
                // line 72
                yield PhpMyAdmin\Url::getFromRoute("/themes/set");
                yield "\" class=\"dropdown-item py-0 disableAjax\">
                ";
                // line 73
                yield PhpMyAdmin\Url::getHiddenInputs();
                yield "
                <input type=\"hidden\" name=\"set_theme\" value=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_id", [], "any", false, false, false, 74), "html", null, true);
                yield "\">
                <div class=\"row row-cols-lg-auto align-items-center flex-nowrap\">
                  <div class=\"col-12\">
                    <label class=\"col-form-label\" for=\"themeColorModeToggle\">";
                // line 77
                yield PhpMyAdmin\Html\Generator::getIcon("s_theme", \_gettext("Appearance:"));
                yield "</label>
                  </div>
                  <div class=\"col-12\">
                    <select class=\"form-select form-select-sm\" name=\"themeColorMode\" id=\"themeColorModeToggle\" aria-label=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Color mode for the theme"), "html", null, true);
                yield "\">
                      ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_color_modes", [], "any", false, false, false, 81));
                foreach ($context['_seq'] as $context["_key"] => $context["color_mode"]) {
                    // line 82
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color_mode"], "html", null, true);
                    yield "\"";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_color_mode", [], "any", false, false, false, 82) == $context["color_mode"])) ? (" selected") : (""));
                    yield ">";
                    // line 83
                    if (($context["color_mode"] == "light")) {
                        // line 84
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Light color mode of the theme", "Light"), "html", null, true);
                    } elseif ((                    // line 85
$context["color_mode"] == "dark")) {
                        // line 86
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Dark color mode of the theme", "Dark"), "html", null, true);
                    } else {
                        // line 88
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["color_mode"]), "html", null, true);
                    }
                    // line 90
                    yield "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['color_mode'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                yield "                    </select>
                  </div>
                </div>
              </form>
            </li>
          ";
            }
            // line 98
            yield "          <li>
            <a class=\"dropdown-item disableAjax\" href=\"";
            // line 99
            yield PhpMyAdmin\Url::getFromRoute("/preferences/manage");
            yield "\">";
            yield PhpMyAdmin\Html\Generator::getIcon("s_cog", \_gettext("Settings"));
            yield "</a>
          </li>
          <li><hr class=\"dropdown-divider\"></li>
          <li>
            <a class=\"dropdown-item logout disableAjax\" href=\"";
            // line 103
            yield PhpMyAdmin\Url::getFromRoute("/logout");
            yield "\">";
            yield PhpMyAdmin\Html\Generator::getIcon("s_loggoff", \_gettext("Log out"));
            yield "</a>
          </li>
        </ul>
      </div>
    </div>

    <div class=\"col-12\">
      <span id=\"lock_page_icon\"></span>
      <span id=\"page_settings_icon\">
          ";
            // line 112
            yield PhpMyAdmin\Html\Generator::getImage("s_cog", \_gettext("Page-related settings"));
            yield "
        </span>
      <a id=\"goto_pagetop\" href=\"#\">";
            // line 114
            yield PhpMyAdmin\Html\Generator::getImage("s_top", \_gettext("Click on the bar to scroll to top of page"));
            yield "</a>
    </div>
  </div>
";
        }
        // line 118
        yield "
";
        // line 119
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "console", [], "any", false, false, false, 119);
        yield "

<div id=\"page_content\">
  ";
        // line 122
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "messages", [], "any", false, false, false, 122);
        // line 124
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "is_logged_in", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/preview_sql_modal.twig");
            yield "
    ";
            // line 126
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/enum_set_editor.twig");
            yield "
    ";
            // line 127
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/create_view.twig");
        }
        // line 130
        yield ($context["content"] ?? null);
        yield "
</div>

";
        // line 133
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "is_minimal", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "  ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "self_url", [], "any", false, false, false, 134))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 135
                yield "    <div id=\"selflink\" class=\"d-print-none\">
      <a href=\"";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "self_url", [], "any", false, false, false, 136), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Open new phpMyAdmin window"), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
        ";
                // line 137
                if ((($tmp = PhpMyAdmin\Util::showIcons("TabsMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 138
                    yield "          ";
                    yield PhpMyAdmin\Html\Generator::getImage("window-new", \_gettext("Open new phpMyAdmin window"));
                    yield "
        ";
                } else {
                    // line 140
                    yield "          ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Open new phpMyAdmin window"), "html", null, true);
                    yield "
        ";
                }
                // line 142
                yield "      </a>
    </div>
  ";
            }
            // line 145
            yield "
  <div class=\"clearfloat d-print-none\" id=\"pma_errors\">
    ";
            // line 147
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "error_messages", [], "any", false, false, false, 147);
            yield "
  </div>

  ";
            // line 150
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "scripts", [], "any", false, false, false, 150);
            yield "

  ";
            // line 152
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "is_demo", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 153
                yield "    <div id=\"pma_demo\" class=\"d-print-none\">
      ";
                // line 154
                $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 155
                    yield "        <a href=\"";
                    yield PhpMyAdmin\Url::getFromRoute("/");
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("phpMyAdmin Demo Server"), "html", null, true);
                    yield ":</a>
        ";
                    // line 156
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "git_revision_info", [], "any", false, false, false, 156))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 157
                        yield "          ";
                        $context["revision_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 158
                            yield "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "git_revision_info", [], "any", false, false, false, 158), "revisionUrl", [], "any", false, false, false, 158)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "git_revision_info", [], "any", false, false, false, 158), "revision", [], "any", false, false, false, 158), "html", null, true);
                            yield "</a>";
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 160
                        yield "          ";
                        $context["branch_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 161
                            yield "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "git_revision_info", [], "any", false, false, false, 161), "branchUrl", [], "any", false, false, false, 161)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "git_revision_info", [], "any", false, false, false, 161), "branch", [], "any", false, false, false, 161), "html", null, true);
                            yield "</a>";
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 163
                        yield "          ";
                        yield Twig\Extension\CoreExtension::sprintf(\_gettext("Currently running Git revision %1\$s from the %2\$s branch."), ($context["revision_info"] ?? null), ($context["branch_info"] ?? null));
                        yield "
        ";
                    } else {
                        // line 165
                        yield "          ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Git information missing!"), "html", null, true);
                        yield "
        ";
                    }
                    // line 167
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 154
                yield PhpMyAdmin\Twig\MessageExtension::getNotice($_v2);
                // line 168
                yield "    </div>
  ";
            }
            // line 170
            yield "
  ";
            // line 171
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "footer", [], "any", false, false, false, 171);
            yield "
";
        }
        // line 173
        yield "</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.twig";
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
        return array (  461 => 173,  456 => 171,  453 => 170,  449 => 168,  447 => 154,  443 => 167,  437 => 165,  431 => 163,  423 => 161,  420 => 160,  412 => 158,  409 => 157,  407 => 156,  400 => 155,  398 => 154,  395 => 153,  393 => 152,  388 => 150,  382 => 147,  378 => 145,  373 => 142,  367 => 140,  361 => 138,  359 => 137,  353 => 136,  350 => 135,  347 => 134,  345 => 133,  339 => 130,  336 => 127,  332 => 126,  328 => 125,  326 => 124,  324 => 122,  318 => 119,  315 => 118,  308 => 114,  303 => 112,  289 => 103,  280 => 99,  277 => 98,  269 => 92,  262 => 90,  259 => 88,  256 => 86,  254 => 85,  252 => 84,  250 => 83,  244 => 82,  240 => 81,  236 => 80,  230 => 77,  224 => 74,  220 => 73,  216 => 72,  213 => 71,  211 => 70,  204 => 66,  200 => 65,  193 => 61,  189 => 60,  179 => 55,  175 => 54,  170 => 51,  168 => 50,  160 => 45,  158 => 44,  155 => 43,  149 => 40,  146 => 39,  144 => 38,  141 => 37,  137 => 35,  135 => 34,  130 => 32,  126 => 31,  122 => 30,  118 => 29,  112 => 26,  108 => 25,  99 => 24,  96 => 23,  90 => 21,  88 => 20,  84 => 19,  79 => 18,  77 => 17,  73 => 16,  68 => 13,  65 => 11,  63 => 10,  59 => 9,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.twig", "C:\\Pirulug\\PiruWamp\\bin\\phpmyadmin\\_phpMyAdmin-6.0-snapshot\\phpMyAdmin-6.0+snapshot-all-languages\\resources\\templates\\base.twig");
    }
}
