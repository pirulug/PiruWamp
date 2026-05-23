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

/* login/form.twig */
class __TwigTemplate_cc1ad362fb65db6e5553e377b20bafda extends Template
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
        yield ($context["login_header"] ?? null);
        yield "

";
        // line 3
        if ((($tmp = ($context["is_demo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "  <div class=\"card mb-4\">
    <div class=\"card-header\">";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("phpMyAdmin Demo Server"), "html", null, true);
            yield "</div>
    <div class=\"card-body\">
      ";
            // line 7
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You are using the demo server. You can do anything here, but please do not change root, debian-sys-maint and pma users. More information is available at %s."), "html", null, true);
                yield "
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 7
            yield Twig\Extension\CoreExtension::sprintf($_v0, (("<a href=\"" . PhpMyAdmin\Url::getFromRoute("/url", ["url" => "https://demo.phpmyadmin.net/"])) . "\" target=\"_blank\" rel=\"noopener noreferrer\">demo.phpmyadmin.net</a>"));
            // line 10
            yield "    </div>
  </div>
";
        }
        // line 13
        yield "
";
        // line 14
        yield ($context["error_messages"] ?? null);
        yield "

";
        // line 16
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["available_languages"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "  <div class='hide js-show'>
    <div class=\"card mb-4\">
      <div class=\"card-header\">
        <span id=\"languageSelectLabel\">
          ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Language"), "html", null, true);
            yield "
          ";
            // line 22
            if ((\_gettext("Language") != "Language")) {
                // line 23
                yield "            ";
                // line 25
                yield "            <i lang=\"en\" dir=\"ltr\">(Language)</i>
          ";
            }
            // line 27
            yield "        </span>
      </div>
      <div class=\"card-body\">
        <form method=\"get\" action=\"";
            // line 30
            yield PhpMyAdmin\Url::getFromRoute("/");
            yield "\" class=\"disableAjax\">
          ";
            // line 31
            yield PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null));
            yield "
          <select name=\"lang\" class=\"form-select autosubmit\" lang=\"en\" dir=\"ltr\" id=\"languageSelect\" aria-labelledby=\"languageSelectLabel\">
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["available_languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 34
                yield "              <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getCode", [], "method", false, false, false, 34)), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["language"], "isActive", [], "method", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                yield ">";
                // line 35
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getName", [], "method", false, false, false, 35);
                // line 36
                yield "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "          </select>
        </form>
      </div>
    </div>
  </div>
";
        }
        // line 44
        yield "
<form method=\"post\" id=\"login_form\" action=\"index.php?route=/\" name=\"login_form\" class=\"";
        // line 46
        yield (((($tmp =  !($context["is_session_expired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disableAjax hide ") : (""));
        yield "js-show\"";
        yield (((($tmp =  !($context["has_autocomplete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" autocomplete=\"off\"") : (""));
        yield ">
  ";
        // line 48
        yield "  ";
        yield PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null), "", "server");
        yield "
  <input type=\"hidden\" name=\"set_session\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["session_id"] ?? null), "html", null, true);
        yield "\">
  ";
        // line 50
        if ((($tmp = ($context["is_session_expired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "    <input type=\"hidden\" name=\"session_timedout\" value=\"1\">
  ";
        }
        // line 53
        yield "
  <div class=\"card mb-4\">
    <div class=\"card-header\">
      ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log in"), "html", null, true);
        yield "
      ";
        // line 57
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("index", "", false, true);
        yield "
    </div>
    <div class=\"card-body\">
      ";
        // line 60
        if ((($tmp = ($context["is_arbitrary_server_allowed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "        <div class=\"row mb-3\">
          <label for=\"serverNameInput\" class=\"col-sm-4 col-form-label\" title=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You can enter hostname/IP address and port separated by space."), "html", null, true);
            yield "\">
            ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server:"), "html", null, true);
            yield "
          </label>
          <div class=\"col-sm-8\">
            <input type=\"text\" name=\"pma_servername\" id=\"serverNameInput\" value=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["default_server"] ?? null), "html", null, true);
            yield "\" class=\"form-control\" title=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You can enter hostname/IP address and port separated by space."), "html", null, true);
            yield "\">
          </div>
        </div>
      ";
        }
        // line 71
        yield "
      <div class=\"row mb-3\">
        <label for=\"input_username\" class=\"col-sm-4 col-form-label\">
          ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Username:"), "html", null, true);
        yield "
        </label>
        <div class=\"col-sm-8\">
          <input type=\"text\" name=\"pma_username\" id=\"input_username\" value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["default_user"] ?? null), "html", null, true);
        yield "\" class=\"form-control\" autocomplete=\"username\" spellcheck=\"false\" autofocus>
        </div>
      </div>

      <div class=\"row\">
        <label for=\"input_password\" class=\"col-sm-4 col-form-label\">
          ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password:"), "html", null, true);
        yield "
        </label>
        <div class=\"col-sm-8\">
          <input type=\"password\" name=\"pma_password\" id=\"input_password\" value=\"\" class=\"form-control\" autocomplete=\"current-password\" spellcheck=\"false\">
        </div>
      </div>

      ";
        // line 90
        if ((($tmp = ($context["has_servers"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "        <div class=\"row mt-3\">
          <label for=\"select_server\" class=\"col-sm-4 col-form-label\">
            ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server choice:"), "html", null, true);
            yield "
          </label>
          <div class=\"col-sm-8\">
            <select name=\"server\" id=\"select_server\" class=\"form-select\"";
            // line 97
            if ((($tmp = ($context["is_arbitrary_server_allowed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " onchange=\"document.forms['login_form'].elements['pma_servername'].value = ''\"";
            }
            yield ">
              ";
            // line 98
            yield ($context["server_options"] ?? null);
            yield "
            </select>
          </div>
        </div>
      ";
        } else {
            // line 103
            yield "        <input type=\"hidden\" name=\"server\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["server"] ?? null), "html", null, true);
            yield "\">
      ";
        }
        // line 105
        yield "    </div>
    <div class=\"card-footer\">
      ";
        // line 107
        if ((($tmp = ($context["has_captcha"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "        <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["captcha_api"] ?? null), "html", null, true);
            yield "?hl=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lang"] ?? null), "html", null, true);
            yield "\" async defer></script>
        ";
            // line 109
            if ((($tmp = ($context["use_captcha_checkbox"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "          <div class=\"row g-3\">
            <div class=\"col\">
              <div class=\"";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["captcha_req"] ?? null), "html", null, true);
                yield "\" data-sitekey=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["captcha_key"] ?? null), "html", null, true);
                yield "\"></div>
            </div>
            <div class=\"col align-self-center text-end\">
              <input class=\"btn btn-primary\" value=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log in"), "html", null, true);
                yield "\" type=\"submit\" id=\"input_go\">
            </div>
          </div>
        ";
            } else {
                // line 119
                yield "          <input class=\"btn btn-primary ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["captcha_req"] ?? null), "html", null, true);
                yield "\" data-sitekey=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["captcha_key"] ?? null), "html", null, true);
                yield "\" data-callback=\"recaptchaCallback\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log in"), "html", null, true);
                yield "\" type=\"submit\" id=\"input_go\">
        ";
            }
            // line 121
            yield "      ";
        } else {
            // line 122
            yield "        <input class=\"btn btn-primary\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log in"), "html", null, true);
            yield "\" type=\"submit\" id=\"input_go\">
      ";
        }
        // line 124
        yield "    </div>
  </div>
</form>

";
        // line 128
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["errors"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 129
            yield "  <div id=\"pma_errors\">
    ";
            // line 130
            yield ($context["errors"] ?? null);
            yield "
  </div>
  </div>
  </div>
";
        }
        // line 135
        yield "
";
        // line 136
        yield ($context["login_footer"] ?? null);
        yield "

";
        // line 138
        yield ($context["config_footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/form.twig";
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
        return array (  348 => 138,  343 => 136,  340 => 135,  332 => 130,  329 => 129,  327 => 128,  321 => 124,  315 => 122,  312 => 121,  302 => 119,  295 => 115,  287 => 112,  283 => 110,  281 => 109,  274 => 108,  272 => 107,  268 => 105,  262 => 103,  254 => 98,  248 => 97,  242 => 93,  238 => 91,  236 => 90,  226 => 83,  217 => 77,  211 => 74,  206 => 71,  199 => 67,  196 => 66,  190 => 63,  186 => 62,  183 => 61,  181 => 60,  175 => 57,  171 => 56,  166 => 53,  162 => 51,  160 => 50,  156 => 49,  151 => 48,  145 => 46,  142 => 44,  134 => 38,  127 => 36,  125 => 35,  119 => 34,  115 => 33,  110 => 31,  106 => 30,  101 => 27,  97 => 25,  95 => 23,  93 => 22,  89 => 21,  83 => 17,  81 => 16,  76 => 14,  73 => 13,  68 => 10,  66 => 7,  59 => 8,  57 => 7,  52 => 5,  49 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "login/form.twig", "C:\\Pirulug\\PiruWamp\\bin\\phpmyadmin\\phpMyAdmin-6.0-snapshot\\phpMyAdmin-6.0+snapshot-all-languages\\resources\\templates\\login\\form.twig");
    }
}
