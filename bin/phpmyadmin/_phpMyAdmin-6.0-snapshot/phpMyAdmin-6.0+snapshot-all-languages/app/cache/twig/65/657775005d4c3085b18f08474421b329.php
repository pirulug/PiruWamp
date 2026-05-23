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

/* import.twig */
class __TwigTemplate_1db5501dd6bb4b4645efc4adc2f9c336 extends Template
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
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"container\">
  <h2 class=\"my-3\">
    ";
        // line 3
        yield PhpMyAdmin\Html\Generator::getImage("b_import", \_gettext("Import"));
        yield "
    ";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 5
        yield "  </h2>

  ";
        // line 7
        yield ($context["page_settings_error_html"] ?? null);
        yield "
  ";
        // line 8
        yield ($context["page_settings_html"] ?? null);
        yield "

  <iframe id=\"import_upload_iframe\" name=\"import_upload_iframe\" width=\"1\" height=\"1\" class=\"hide\"></iframe>
  <div id=\"import_form_status\" class=\"hide\"></div>

  <div class=\"d-none\" id=\"upload_progress_info\" data-upload-id=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["upload_id"] ?? null), "html_attr");
        yield "\" data-handler=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["handler"] ?? null), "html_attr");
        yield "\"></div>

  <div id=\"importmain\">
    <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("ajax_clock_small.gif"), "html", null, true);
        yield "\" width=\"16\" height=\"16\" alt=\"ajax clock\" class=\"hide\">

    <form id=\"import_file_form\" action=\"";
        // line 18
        yield PhpMyAdmin\Url::getFromRoute("/import");
        yield "\" method=\"post\" enctype=\"multipart/form-data\" name=\"import\" class=\"disableAjax\"";
        // line 19
        if ((($context["handler"] ?? null) != "PhpMyAdmin\\Plugins\\Import\\Upload\\UploadNoplugin")) {
            yield " target=\"import_upload_iframe\"";
        }
        yield ">
      ";
        // line 20
        yield PhpMyAdmin\Url::getHiddenInputs(($context["hidden_inputs"] ?? null));
        yield "

      <div class=\"card mb-3\">
        <div class=\"card-header\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("File to import:"), "html", null, true);
        yield "</div>
        <div class=\"card-body\">
          ";
        // line 26
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["compressions"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "            <p class=\"card-text\">
              ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("File may be compressed (%s) or uncompressed."), Twig\Extension\CoreExtension::join(($context["compressions"] ?? null), ", ")), "html", null, true);
            yield "<br>
              ";
            // line 29
            yield \_gettext("A compressed file's name must end in <strong>.[format].[compression]</strong>. Example: <strong>.sql.zip</strong>");
            yield "
            </p>
          ";
        }
        // line 32
        yield "
          ";
        // line 33
        if ((($context["is_upload"] ?? null) &&  !Twig\Extension\CoreExtension::testEmpty(($context["upload_dir"] ?? null)))) {
            // line 34
            yield "            ";
            $context["use_local_file_import"] = ( !Twig\Extension\CoreExtension::testEmpty(($context["timeout_passed_global"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["local_import_file"] ?? null)));
            // line 35
            yield "            <ul class=\"nav nav-pills mb-3\" id=\"importFileTab\" role=\"tablist\">
              <li class=\"nav-item\" role=\"presentation\">
                <button class=\"nav-link";
            // line 37
            yield (((($tmp =  !($context["use_local_file_import"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" active") : (""));
            yield "\" id=\"uploadFileTab\" data-bs-toggle=\"tab\" data-bs-target=\"#uploadFile\" type=\"button\" role=\"tab\" aria-controls=\"uploadFile\" aria-selected=\"";
            yield (((($tmp =  !($context["use_local_file_import"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Upload a file"), "html", null, true);
            yield "</button>
              </li>
              <li class=\"nav-item\" role=\"presentation\">
                <button class=\"nav-link";
            // line 40
            yield (((($tmp = ($context["use_local_file_import"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" active") : (""));
            yield "\" id=\"localFileTab\" data-bs-toggle=\"tab\" data-bs-target=\"#localFile\" type=\"button\" role=\"tab\" aria-controls=\"localFile\" aria-selected=\"";
            yield (((($tmp = ($context["use_local_file_import"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select file to import"), "html", null, true);
            yield "</button>
              </li>
            </ul>
            <div class=\"tab-content mb-3\" id=\"importFileTabContent\">
              <div class=\"tab-pane fade";
            // line 44
            yield (((($tmp =  !($context["use_local_file_import"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" show active") : (""));
            yield "\" id=\"uploadFile\" role=\"tabpanel\" aria-labelledby=\"uploadFileTab\">
                <div class=\"mb-3\">
                  <label class=\"form-label\" for=\"input_import_file\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Browse your computer:"), "html", null, true);
            yield " <small>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formatted_maximum_upload_size"] ?? null), "html", null, true);
            yield "</small></label>
                  <input class=\"form-control\" type=\"file\" name=\"import_file\" id=\"input_import_file\">
                </div>
                <div id=\"upload_form_status\" class=\"hide\"></div>
                <div id=\"upload_form_status_info\" class=\"hide\"></div>
                <p class=\"card-text\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You may also drag and drop a file on any page."), "html", null, true);
            yield "</p>
              </div>

              <div class=\"tab-pane fade";
            // line 54
            yield (((($tmp = ($context["use_local_file_import"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" show active") : (""));
            yield "\" id=\"localFile\" role=\"tabpanel\" aria-labelledby=\"localFileTab\">
                ";
            // line 55
            if ((($context["local_files"] ?? null) === false)) {
                // line 56
                yield "                  ";
                yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("The directory you set for upload work cannot be reached."));
                yield "
                ";
            } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(            // line 57
($context["local_files"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "                  <label class=\"form-label\" for=\"select_local_import_file\">";
                yield PhpMyAdmin\Sanitize::convertBBCode(Twig\Extension\CoreExtension::sprintf(\_gettext("Select from the web server upload directory [strong]%s[/strong]:"), ($context["user_upload_dir"] ?? null)));
                yield "</label>
                  <select class=\"form-select\" size=\"1\" name=\"local_import_file\" id=\"select_local_import_file\">
                    <option value=\"\"></option>
                    ";
                // line 61
                yield ($context["local_files"] ?? null);
                yield "
                  </select>
                ";
            } else {
                // line 64
                yield "                  <div class=\"alert alert-info\" role=\"alert\">
                    ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("There are no files to import!"), "html", null, true);
                yield "
                  </div>
                ";
            }
            // line 68
            yield "              </div>
            </div>
          ";
        } elseif ((($tmp =         // line 70
($context["is_upload"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"input_import_file\">";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Browse your computer:"), "html", null, true);
            yield " <small>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formatted_maximum_upload_size"] ?? null), "html", null, true);
            yield "</small></label>
              <input class=\"form-control\" type=\"file\" name=\"import_file\" id=\"input_import_file\">
            </div>
            <div id=\"upload_form_status\" class=\"hide\"></div>
            <div id=\"upload_form_status_info\" class=\"hide\"></div>
            <p class=\"card-text\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You may also drag and drop a file on any page."), "html", null, true);
            yield "</p>
          ";
        } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(        // line 78
($context["upload_dir"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "            ";
            if ((($context["local_files"] ?? null) === false)) {
                // line 80
                yield "              ";
                yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("The directory you set for upload work cannot be reached."));
                yield "
            ";
            } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(            // line 81
($context["local_files"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 82
                yield "              <div class=\"mb-3\">
                <label class=\"form-label\" for=\"select_local_import_file\">";
                // line 83
                yield PhpMyAdmin\Sanitize::convertBBCode(Twig\Extension\CoreExtension::sprintf(\_gettext("Select from the web server upload directory [strong]%s[/strong]:"), ($context["user_upload_dir"] ?? null)));
                yield "</label>
                <select class=\"form-select\" size=\"1\" name=\"local_import_file\" id=\"select_local_import_file\">
                  <option value=\"\"></option>
                  ";
                // line 86
                yield ($context["local_files"] ?? null);
                yield "
                </select>
              </div>
            ";
            } else {
                // line 90
                yield "              <div class=\"alert alert-info\" role=\"alert\">
                ";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("There are no files to import!"), "html", null, true);
                yield "
              </div>
            ";
            }
            // line 94
            yield "          ";
        } else {
            // line 95
            yield "            ";
            yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("File uploads are not allowed on this server."));
            yield "
          ";
        }
        // line 97
        yield "
          <label class=\"form-label\" for=\"charset_of_file\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Character set of the file:"), "html", null, true);
        yield "</label>
          ";
        // line 99
        if ((($tmp = ($context["is_encoding_supported"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "            <select class=\"form-select\" id=\"charset_of_file\" name=\"charset_of_file\" size=\"1\">
              ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["encodings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 102
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["charset"], "html", null, true);
                yield "\"";
                if (((Twig\Extension\CoreExtension::testEmpty(($context["import_charset"] ?? null)) && ($context["charset"] == "utf-8")) || ($context["charset"] == ($context["import_charset"] ?? null)))) {
                    yield " selected";
                }
                yield ">";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["charset"], "html", null, true);
                // line 104
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            yield "            </select>
          ";
        } else {
            // line 108
            yield "            <select class=\"form-select\" lang=\"en\" dir=\"ltr\" name=\"charset_of_file\" id=\"charset_of_file\">
              <option value=\"\"></option>
              ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 111
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 111), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 111), "html", null, true);
                yield "\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 111) == "utf8")) ? (" selected") : (""));
                yield ">";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 112), "html", null, true);
                // line 113
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "            </select>
          ";
        }
        // line 117
        yield "        </div>
      </div>

      <div class=\"card mb-3\">
        <div class=\"card-header\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partial import:"), "html", null, true);
        yield "</div>
        <div class=\"card-body\">
          ";
        // line 123
        if ((array_key_exists("timeout_passed", $context) && ($context["timeout_passed"] ?? null))) {
            // line 124
            yield "            <input type=\"hidden\" name=\"skip\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["offset"] ?? null), "html", null, true);
            yield "\">
            <div class=\"alert alert-info\" role=\"alert\">
              ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Previous import timed out, after resubmitting will continue from position %d."), ($context["offset"] ?? null)), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 129
        yield "
          <div class=\"form-check form-switch mb-3\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"allow_interrupt\" value=\"yes\" id=\"checkbox_allow_interrupt\"";
        // line 131
        yield ($context["is_allow_interrupt_checked"] ?? null);
        yield " aria-describedby=\"allowInterruptHelp\">
            <label class=\"form-check-label\" for=\"checkbox_allow_interrupt\">
              ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allow the interruption of an import in case the script detects it is close to the PHP timeout limit."), "html", null, true);
        yield "
            </label>
            <div id=\"allowInterruptHelp\" class=\"form-text\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("This might be a good way to import large files, however it can break transactions."), "html", null, true);
        yield "</div>
          </div>

          ";
        // line 138
        if ((($tmp =  !(array_key_exists("timeout_passed", $context) && ($context["timeout_passed"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 139
            yield "            <label class=\"form-label\" for=\"text_skip_queries\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Skip this number of queries (for SQL) starting from the first one:"), "html", null, true);
            yield "</label>
            <input class=\"form-control\" type=\"number\" name=\"skip_queries\" value=\"";
            // line 140
            yield ($context["skip_queries_default"] ?? null);
            yield "\" id=\"text_skip_queries\" min=\"0\">
          ";
        } else {
            // line 142
            yield "            ";
            // line 143
            yield "            <input type=\"hidden\" name=\"skip_queries\" value=\"";
            yield ($context["skip_queries_default"] ?? null);
            yield "\" id=\"text_skip_queries\">
          ";
        }
        // line 145
        yield "        </div>
      </div>

      <div class=\"card mb-3\">
        <div class=\"card-header\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Other options"), "html", null, true);
        yield "</div>
        <div class=\"card-body\">
          <input type=\"hidden\" name=\"fk_checks\" value=\"0\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"fk_checks\" id=\"fk_checks\" value=\"1\"";
        // line 153
        yield (((($tmp = ($context["is_foreign_key_check"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
            <label class=\"form-check-label\" for=\"fk_checks\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enable foreign key checks"), "html", null, true);
        yield "</label>
          </div>
        </div>
      </div>

      <div class=\"card mb-3\">
        <div class=\"card-header\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Format"), "html", null, true);
        yield "</div>
        <div class=\"card-body\">
          <select class=\"form-select\" id=\"plugins\" name=\"format\" aria-label=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Format"), "html", null, true);
        yield "\">
            ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["plugins_choice"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 164
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 164), "html", null, true);
            yield "\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "text", [], "any", false, false, false, 164), "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "          </select>

          <div id=\"import_notification\"></div>
        </div>
      </div>

      <div class=\"card mb-3\" id=\"format_specific_opts\">
        <div class=\"card-header\">";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Format-specific options:"), "html", null, true);
        yield "</div>
        <div class=\"card-body\">
          ";
        // line 175
        yield ($context["options"] ?? null);
        yield "
        </div>
      </div>

      ";
        // line 180
        yield "      ";
        if ((($tmp = ($context["can_convert_kanji"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 181
            yield "        <div class=\"card mb-3\" id=\"kanji_encoding\">
          <div class=\"card-header\">";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Encoding Conversion:"), "html", null, true);
            yield "</div>
          <div class=\"card-body\">
            ";
            // line 184
            yield from $this->load("encoding/kanji_encoding_form.twig", 184)->unwrap()->yield($context);
            // line 185
            yield "          </div>
        </div>
      ";
        }
        // line 188
        yield "
      <div id=\"submit\">
        <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Import"), "html", null, true);
        yield "\">
      </div>
    </form>
  </div>
</div>
";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "import.twig";
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
        return array (  513 => 4,  502 => 190,  498 => 188,  493 => 185,  491 => 184,  486 => 182,  483 => 181,  480 => 180,  473 => 175,  468 => 173,  459 => 166,  446 => 164,  442 => 163,  438 => 162,  433 => 160,  424 => 154,  420 => 153,  413 => 149,  407 => 145,  401 => 143,  399 => 142,  394 => 140,  389 => 139,  387 => 138,  381 => 135,  376 => 133,  371 => 131,  367 => 129,  361 => 126,  355 => 124,  353 => 123,  348 => 121,  342 => 117,  338 => 115,  331 => 113,  329 => 112,  321 => 111,  317 => 110,  313 => 108,  309 => 106,  302 => 104,  300 => 103,  292 => 102,  288 => 101,  285 => 100,  283 => 99,  279 => 98,  276 => 97,  270 => 95,  267 => 94,  261 => 91,  258 => 90,  251 => 86,  245 => 83,  242 => 82,  240 => 81,  235 => 80,  232 => 79,  230 => 78,  226 => 77,  216 => 72,  213 => 71,  211 => 70,  207 => 68,  201 => 65,  198 => 64,  192 => 61,  185 => 58,  183 => 57,  178 => 56,  176 => 55,  172 => 54,  166 => 51,  156 => 46,  151 => 44,  140 => 40,  130 => 37,  126 => 35,  123 => 34,  121 => 33,  118 => 32,  112 => 29,  108 => 28,  105 => 27,  102 => 26,  97 => 23,  91 => 20,  85 => 19,  82 => 18,  77 => 16,  69 => 13,  61 => 8,  57 => 7,  53 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "import.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/import.twig");
    }
}
