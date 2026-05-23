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

/* home/index.twig */
class __TwigTemplate_c9b4100daf551db82f71d0d9a0913da9 extends Template
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
        if ((($tmp = ($context["is_git_revision"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  <div id=\"is_git_revision\"></div>
";
        }
        // line 4
        yield "
";
        // line 5
        yield ($context["message"] ?? null);
        yield "

";
        // line 7
        yield ($context["partial_logout"] ?? null);
        yield "

<div id=\"maincontainer\">
  ";
        // line 10
        yield ($context["sync_favorite_tables"] ?? null);
        yield "
  <div class=\"container-fluid\">
    <div class=\"row mb-3\">
      <div class=\"col-lg-7 col-12\">
        ";
        // line 14
        if ((($tmp = ($context["has_server"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "          ";
            if ((($tmp = ($context["is_demo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 16
                yield "            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("phpMyAdmin Demo Server"), "html", null, true);
                yield "
              </div>
              <div class=\"card-body\">
                ";
                // line 21
                $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 22
                    yield "                  ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You are using the demo server. You can do anything here, but please do not change root, debian-sys-maint and pma users. More information is available at %s."), "html", null, true);
                    yield "
                ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 21
                yield Twig\Extension\CoreExtension::sprintf($_v0, (("<a href=\"" . PhpMyAdmin\Url::getFromRoute("/url", ["url" => "https://demo.phpmyadmin.net/"])) . "\" target=\"_blank\" rel=\"noopener noreferrer\">demo.phpmyadmin.net</a>"));
                // line 24
                yield "              </div>
            </div>
          ";
            }
            // line 27
            yield "
            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("General settings"), "html", null, true);
            yield "
              </div>
              <ul class=\"list-group list-group-flush\">
                ";
            // line 33
            if ((($tmp = ($context["has_server_selection"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "                  <li id=\"li_select_server\" class=\"list-group-item\">
                    ";
                // line 35
                yield ($context["server_selection"] ?? null);
                yield "
                  </li>
                ";
            }
            // line 38
            yield "
                ";
            // line 39
            if ((($context["server"] ?? null) > 0)) {
                // line 40
                yield "                  ";
                if ((($tmp = ($context["has_change_password_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 41
                    yield "                    <li id=\"li_change_password\" class=\"list-group-item\">
                      <a href=\"";
                    // line 42
                    yield PhpMyAdmin\Url::getFromRoute("/user-password");
                    yield "\" id=\"change_password_anchor\" class=\"ajax\">
                        ";
                    // line 43
                    yield PhpMyAdmin\Html\Generator::getIcon("s_passwd", \_gettext("Change password"), true);
                    yield "
                      </a>
                      ";
                    // line 45
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/change_password.twig");
                    yield "
                    </li>
                  ";
                }
                // line 48
                yield "
                  <li id=\"li_select_mysql_collation\" class=\"list-group-item\">
                    <form method=\"post\" action=\"";
                // line 50
                yield PhpMyAdmin\Url::getFromRoute("/collation-connection");
                yield "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 51
                yield PhpMyAdmin\Url::getHiddenInputs("", "", "collation_connection");
                yield "
                      <div class=\"col-12\">
                        <label for=\"collationConnectionSelect\" class=\"col-form-label\">
                          ";
                // line 54
                yield PhpMyAdmin\Html\Generator::getImage("s_asci");
                yield "
                          ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server connection collation:"), "html", null, true);
                yield "
                          ";
                // line 56
                yield PhpMyAdmin\Html\MySQLDocumentation::show("charset-connection");
                yield "
                        </label>
                      </div>
                      ";
                // line 59
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["charsets"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 60
                    yield "                      <div class=\"col-12\">
                        <select lang=\"en\" dir=\"ltr\" name=\"collation_connection\" id=\"collationConnectionSelect\" class=\"form-select autosubmit\">
                          <option value=\"\">";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
                    yield "</option>
                          <option value=\"\"></option>
                          ";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                        // line 65
                        yield "                            <optgroup label=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 65), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 65), "html", null, true);
                        yield "\">
                              ";
                        // line 66
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 66));
                        foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                            // line 67
                            yield "                                <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 67), "html", null, true);
                            yield "\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 67), "html", null, true);
                            yield "\"";
                            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "is_selected", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                            yield ">";
                            // line 68
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 68), "html", null, true);
                            // line 69
                            yield "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 71
                        yield "                            </optgroup>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    yield "                        </select>
                      </div>
                      ";
                }
                // line 76
                yield "                    </form>
                  </li>

                  <li id=\"li_user_preferences\" class=\"list-group-item\">
                    <a href=\"";
                // line 80
                yield PhpMyAdmin\Url::getFromRoute("/preferences/manage");
                yield "\">
                      ";
                // line 81
                yield PhpMyAdmin\Html\Generator::getIcon("b_tblops", \_gettext("More settings"), true);
                yield "
                    </a>
                  </li>
                ";
            }
            // line 85
            yield "              </ul>
            </div>
          ";
        }
        // line 88
        yield "
            ";
        // line 89
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["available_languages"] ?? null)) || ($context["has_theme_manager"] ?? null))) {
            // line 90
            yield "            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Appearance settings"), "html", null, true);
            yield "
              </div>
              <ul class=\"list-group list-group-flush\">
                ";
            // line 95
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["available_languages"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "                  <li id=\"li_select_lang\" class=\"list-group-item\">
                    <form method=\"get\" action=\"";
                // line 97
                yield PhpMyAdmin\Url::getFromRoute("/");
                yield "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 98
                yield PhpMyAdmin\Url::getHiddenInputs(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                yield "
                      <div class=\"col-12\">
                        <label for=\"languageSelect\" class=\"col-form-label text-nowrap\">
                          ";
                // line 101
                yield PhpMyAdmin\Html\Generator::getImage("s_lang");
                yield "
                          ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Language"), "html", null, true);
                yield "
                          ";
                // line 103
                if ((\_gettext("Language") != "Language")) {
                    // line 104
                    yield "                            ";
                    // line 106
                    yield "                            <i lang=\"en\" dir=\"ltr\">(Language)</i>
                          ";
                }
                // line 108
                yield "                          ";
                yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq7-2");
                yield "
                        </label>
                      </div>
                      <div class=\"col-12\">
                        <select name=\"lang\" class=\"form-select autosubmit w-auto\" lang=\"en\" dir=\"ltr\" id=\"languageSelect\">
                          ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["available_languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 114
                    yield "                            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getCode", [], "method", false, false, false, 114)), "html", null, true);
                    yield "\"";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["language"], "isActive", [], "method", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                    yield ">";
                    // line 115
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getName", [], "method", false, false, false, 115);
                    // line 116
                    yield "</option>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                yield "                        </select>
                      </div>
                    </form>
                  </li>
                ";
            }
            // line 123
            yield "
                ";
            // line 124
            if ((($tmp = ($context["has_theme_manager"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 125
                yield "                  <li id=\"li_select_theme\" class=\"list-group-item\">
                    <form method=\"post\" action=\"";
                // line 126
                yield PhpMyAdmin\Url::getFromRoute("/themes/set");
                yield "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 127
                yield PhpMyAdmin\Url::getHiddenInputs();
                yield "
                      <div class=\"col-12\">
                        <label for=\"themeSelect\" class=\"col-form-label\">
                          ";
                // line 130
                yield PhpMyAdmin\Html\Generator::getIcon("s_theme", \_gettext("Theme"));
                yield "
                        </label>
                      </div>
                      <div class=\"col-12\">
                        <div class=\"input-group\">
                          <select name=\"set_theme\" class=\"form-select autosubmit\" lang=\"en\" dir=\"ltr\" id=\"themeSelect\">
                            ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                    // line 137
                    yield "                              <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 137), "html", null, true);
                    yield "\"";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "is_active", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 137), "html", null, true);
                    yield "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                yield "                          </select>
                          <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#themesModal\">
                            ";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("View all themes", "View all"), "html", null, true);
                yield "
                          </button>
                        </div>
                      </div>

                      ";
                // line 146
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                    // line 147
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "is_active", [], "any", false, false, false, 147) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "color_modes", [], "any", false, false, false, 147)) > 1))) {
                        // line 148
                        yield "                          <div class=\"col-12\">
                            <select class=\"form-select autosubmit\" name=\"themeColorMode\" aria-label=\"";
                        // line 149
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Color mode for the theme"), "html", null, true);
                        yield "\">
                              ";
                        // line 150
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "color_modes", [], "any", false, false, false, 150));
                        foreach ($context['_seq'] as $context["_key"] => $context["color_mode"]) {
                            // line 151
                            yield "                                <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color_mode"], "html", null, true);
                            yield "\"";
                            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "color_mode", [], "any", false, false, false, 151) == $context["color_mode"])) ? (" selected") : (""));
                            yield ">";
                            // line 152
                            if (($context["color_mode"] == "light")) {
                                // line 153
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Light color mode of the theme", "Light"), "html", null, true);
                            } elseif ((                            // line 154
$context["color_mode"] == "dark")) {
                                // line 155
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Dark color mode of the theme", "Dark"), "html", null, true);
                            } else {
                                // line 157
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["color_mode"]), "html", null, true);
                            }
                            // line 159
                            yield "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['color_mode'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 161
                        yield "                            </select>
                          </div>
                        ";
                    }
                    // line 164
                    yield "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                yield "                    </form>
                  </li>
                ";
            }
            // line 168
            yield "              </ul>
            </div>
            ";
        }
        // line 171
        yield "          </div>

      <div class=\"col-lg-5 col-12\">
        ";
        // line 174
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["database_server"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "          <div class=\"card mt-4\">
            <div class=\"card-header\">
              ";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database server"), "html", null, true);
            yield "
            </div>
            <ul class=\"list-group list-group-flush\">
              <li class=\"list-group-item\">
                ";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server:"), "html", null, true);
            yield "
                ";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "host", [], "any", false, false, false, 182), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Hostname:"), "html", null, true);
            yield "
                ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "hostname", [], "any", false, false, false, 186), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server type:"), "html", null, true);
            yield "
                ";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "type", [], "any", false, false, false, 190), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server connection:"), "html", null, true);
            yield "
                ";
            // line 194
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "connection", [], "any", false, false, false, 194);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server version:"), "html", null, true);
            yield "
                ";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "version", [], "any", false, false, false, 198), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User:"), "html", null, true);
            yield "
                ";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "user", [], "any", false, false, false, 202), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server charset:"), "html", null, true);
            yield "
                <span lang=\"en\" dir=\"ltr\">
                  ";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "charset", [], "any", false, false, false, 207), "html", null, true);
            yield "
                </span>
              </li>
            </ul>
          </div>
        ";
        }
        // line 213
        yield "
        ";
        // line 214
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["web_server"] ?? null)) || ($context["show_php_info"] ?? null))) {
            // line 215
            yield "          <div class=\"card mt-4\">
            <div class=\"card-header\">
              ";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Web server"), "html", null, true);
            yield "
            </div>
            <ul class=\"list-group list-group-flush\">
              ";
            // line 220
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["web_server"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 221
                yield "                ";
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "software", [], "any", false, false, false, 221))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 222
                    yield "                <li class=\"list-group-item\">
                  ";
                    // line 223
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "software", [], "any", false, false, false, 223), "html", null, true);
                    yield "
                </li>
                ";
                }
                // line 226
                yield "                <li class=\"list-group-item\" id=\"li_mysql_client_version\">
                  ";
                // line 227
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database client version:"), "html", null, true);
                yield "
                  ";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "database", [], "any", false, false, false, 228), "html", null, true);
                yield "
                </li>
                <li class=\"list-group-item\">
                  ";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("PHP extension:"), "html", null, true);
                yield "
                  ";
                // line 232
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "php_extensions", [], "any", false, false, false, 232));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 233
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["extension"], "html", null, true);
                    yield "
                    ";
                    // line 234
                    yield PhpMyAdmin\Html\Generator::showPHPDocumentation((("book." . $context["extension"]) . ".php"));
                    yield "
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 236
                yield "                </li>
                <li class=\"list-group-item\">
                  ";
                // line 238
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("PHP version:"), "html", null, true);
                yield "
                  ";
                // line 239
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "php_version", [], "any", false, false, false, 239), "html", null, true);
                yield "
                </li>
              ";
            }
            // line 242
            yield "              ";
            if ((($tmp = ($context["show_php_info"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 243
                yield "                <li class=\"list-group-item\">
                  <a href=\"";
                // line 244
                yield PhpMyAdmin\Url::getFromRoute("/phpinfo");
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                    ";
                // line 245
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show PHP information"), "html", null, true);
                yield "
                  </a>
                </li>
              ";
            }
            // line 249
            yield "            </ul>
          </div>
        ";
        }
        // line 252
        yield "
          <div class=\"card mt-4\">
            <div class=\"card-header\">
              phpMyAdmin
            </div>
            <ul class=\"list-group list-group-flush\">
              <li id=\"li_pma_version\" class=\"list-group-item";
        // line 258
        yield (((($tmp = ($context["is_version_checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" jsversioncheck") : (""));
        yield "\">
                ";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Version information:"), "html", null, true);
        yield "
                <span class=\"version\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "version", [], "any", false, false, false, 260), "html", null, true);
        yield "</span>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 263
        yield PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("index");
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Documentation"), "html", null, true);
        yield "
                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Official Homepage"), "html", null, true);
        yield "
                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/contribute/"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Contribute"), "html", null, true);
        yield "
                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/support/"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Get support"), "html", null, true);
        yield "
                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 283
        yield PhpMyAdmin\Url::getFromRoute("/changelog");
        yield "\" target=\"_blank\">
                  ";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("List of changes"), "html", null, true);
        yield "
                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 288
        yield PhpMyAdmin\Url::getFromRoute("/license");
        yield "\" target=\"_blank\">
                  ";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("License"), "html", null, true);
        yield "
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 298
            yield "        <div class=\"alert ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "severity", [], "any", false, false, false, 298) == "warning")) ? ("alert-warning") : ("alert-info"));
            yield "\" role=\"alert\">
          ";
            // line 299
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "severity", [], "any", false, false, false, 299) == "warning")) {
                // line 300
                yield "            ";
                yield PhpMyAdmin\Html\Generator::getImage("s_attention", \_gettext("Warning"));
                yield "
          ";
            } else {
                // line 302
                yield "            ";
                yield PhpMyAdmin\Html\Generator::getImage("s_notice", \_gettext("Notice"));
                yield "
          ";
            }
            // line 304
            yield "          ";
            yield PhpMyAdmin\Sanitize::convertBBCode(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 304));
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        yield "    </div>
  </div>

";
        // line 310
        if ((($tmp = ($context["has_theme_manager"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 311
            yield "  <div class=\"modal fade\" id=\"themesModal\" tabindex=\"-1\" aria-labelledby=\"themesModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"themesModalLabel\">";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("phpMyAdmin Themes"), "html", null, true);
            yield "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading…"), "html", null, true);
            yield "</span>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "</button>
          <a href=\"";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/themes/"), "html", null, true);
            yield "#pma_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["phpmyadmin_major_version"] ?? null), ["." => "_"]), "html", null, true);
            yield "\" class=\"btn btn-primary\" rel=\"noopener noreferrer\" target=\"_blank\">
            ";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Get more themes!"), "html", null, true);
            yield "
          </a>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 333
        yield "
";
        // line 334
        yield ($context["config_storage_message"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.twig";
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
        return array (  824 => 334,  821 => 333,  811 => 326,  805 => 325,  801 => 324,  794 => 320,  787 => 316,  783 => 315,  777 => 311,  775 => 310,  770 => 307,  760 => 304,  754 => 302,  748 => 300,  746 => 299,  741 => 298,  737 => 297,  726 => 289,  722 => 288,  715 => 284,  711 => 283,  704 => 279,  700 => 278,  693 => 274,  689 => 273,  682 => 269,  678 => 268,  671 => 264,  667 => 263,  661 => 260,  657 => 259,  653 => 258,  645 => 252,  640 => 249,  633 => 245,  629 => 244,  626 => 243,  623 => 242,  617 => 239,  613 => 238,  609 => 236,  601 => 234,  596 => 233,  592 => 232,  588 => 231,  582 => 228,  578 => 227,  575 => 226,  569 => 223,  566 => 222,  563 => 221,  561 => 220,  555 => 217,  551 => 215,  549 => 214,  546 => 213,  537 => 207,  532 => 205,  526 => 202,  522 => 201,  516 => 198,  512 => 197,  506 => 194,  502 => 193,  496 => 190,  492 => 189,  486 => 186,  482 => 185,  476 => 182,  472 => 181,  465 => 177,  461 => 175,  459 => 174,  454 => 171,  449 => 168,  444 => 165,  438 => 164,  433 => 161,  426 => 159,  423 => 157,  420 => 155,  418 => 154,  416 => 153,  414 => 152,  408 => 151,  404 => 150,  400 => 149,  397 => 148,  394 => 147,  390 => 146,  382 => 141,  378 => 139,  365 => 137,  361 => 136,  352 => 130,  346 => 127,  342 => 126,  339 => 125,  337 => 124,  334 => 123,  327 => 118,  320 => 116,  318 => 115,  312 => 114,  308 => 113,  299 => 108,  295 => 106,  293 => 104,  291 => 103,  287 => 102,  283 => 101,  277 => 98,  273 => 97,  270 => 96,  268 => 95,  262 => 92,  258 => 90,  256 => 89,  253 => 88,  248 => 85,  241 => 81,  237 => 80,  231 => 76,  226 => 73,  219 => 71,  212 => 69,  210 => 68,  202 => 67,  198 => 66,  191 => 65,  187 => 64,  182 => 62,  178 => 60,  176 => 59,  170 => 56,  166 => 55,  162 => 54,  156 => 51,  152 => 50,  148 => 48,  142 => 45,  137 => 43,  133 => 42,  130 => 41,  127 => 40,  125 => 39,  122 => 38,  116 => 35,  113 => 34,  111 => 33,  105 => 30,  100 => 27,  95 => 24,  93 => 21,  86 => 22,  84 => 21,  78 => 18,  74 => 16,  71 => 15,  69 => 14,  62 => 10,  56 => 7,  51 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/index.twig", "C:\\Pirulug\\PiruWamp\\bin\\phpmyadmin\\phpMyAdmin-6.0-snapshot\\phpMyAdmin-6.0+snapshot-all-languages\\resources\\templates\\home\\index.twig");
    }
}
