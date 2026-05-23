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

/* server/privileges/login_information_fields.twig */
class __TwigTemplate_7aeef12f5d6e6b959a0646422ba8430b extends Template
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
        yield "<div class=\"card mb-3\" id=\"fieldset_add_user_login\">
  <div class=\"card-header\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Login Information"), "html", null, true);
        yield "</div>
  <div class=\"card-body\">
    <div class=\"item\">
      <label for=\"select_pred_username\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name:"), "html", null, true);
        yield "</label>
      <span class=\"options\">
        <select name=\"pred_username\" id=\"select_pred_username\" title=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name"), "html", null, true);
        yield "\">
          <option value=\"any\"";
        // line 8
        yield (((($context["predefined_username"] ?? null) == "any")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Any user"), "html", null, true);
        yield "</option>
          <option value=\"userdefined\"";
        // line 9
        yield (((($context["predefined_username"] ?? null) == "userdefined")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use text field"), "html", null, true);
        yield "</option>
        </select>
      </span>
      <input type=\"text\" spellcheck=\"false\" name=\"username\" id=\"pma_username\" class=\"autofocus\" maxlength=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username_length"] ?? null), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name"), "html", null, true);
        yield "\"";
        // line 13
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["username"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 14
        yield (((($context["predefined_username"] ?? null) == "userdefined")) ? (" required") : (""));
        yield ">

      <div id=\"user_exists_warning\" class=\"hide\">
        ";
        // line 17
        yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("An account already exists with the same username but possibly a different hostname."));
        yield "
      </div>
    </div>

    <div class=\"item\">
      <label for=\"select_pred_hostname\">
        ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host name:"), "html", null, true);
        yield "
      </label>
      <span class=\"options\">
        <select name=\"pred_hostname\" id=\"select_pred_hostname\" title=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host name"), "html", null, true);
        yield "\"";
        // line 27
        yield (((( !(null === ($context["this_host"] ?? null)) && (($context["this_host"] ?? null) != "localhost")) && (($context["this_host"] ?? null) != "127.0.0.1"))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((" data-thishost=\"" . ($context["this_host"] ?? null)) . "\""), "html", null, true)) : (""));
        yield ">
          <option value=\"any\"";
        // line 28
        yield (((($context["predefined_hostname"] ?? null) == "any")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Any host"), "html", null, true);
        yield "</option>
          <option value=\"localhost\"";
        // line 29
        yield (((($context["predefined_hostname"] ?? null) == "localhost")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Local"), "html", null, true);
        yield "</option>
          ";
        // line 30
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["this_host"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "            <option value=\"thishost\"";
            yield (((($context["predefined_hostname"] ?? null) == "thishost")) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("This host"), "html", null, true);
            yield "</option>
          ";
        }
        // line 33
        yield "          <option value=\"hosttable\"";
        yield (((($context["predefined_hostname"] ?? null) == "hosttable")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use host table"), "html", null, true);
        yield "</option>
          <option value=\"userdefined\"";
        // line 34
        yield (((($context["predefined_hostname"] ?? null) == "userdefined")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use text field"), "html", null, true);
        yield "</option>
        </select>
      </span>
      <input type=\"text\" name=\"hostname\" id=\"pma_hostname\" maxlength=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname_length"] ?? null), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("hostname", $context)) ? (Twig\Extension\CoreExtension::default(($context["hostname"] ?? null), "%")) : ("%")), "html", null, true);
        yield "\" title=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host name"), "html", null, true);
        yield "\"";
        yield (((($context["predefined_hostname"] ?? null) == "userdefined")) ? (" required") : (""));
        yield ">

      ";
        // line 40
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("When Host table is used, this field is ignored and values stored in Host table are used instead."));
        yield "
    </div>

    <div class=\"item\">
      <label for=\"select_pred_password\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password:"), "html", null, true);
        yield "</label>
      <span class=\"options\">
        <select name=\"pred_password\" id=\"select_pred_password\" title=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password"), "html", null, true);
        yield "\">
          ";
        // line 47
        if ((($tmp = ($context["is_change"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "            <option value=\"keep\" selected>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Do not change the password"), "html", null, true);
            yield "</option>
          ";
        }
        // line 50
        yield "          <option value=\"none\"";
        yield ((( !(null === ($context["username"] ?? null)) &&  !($context["is_change"] ?? null))) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No password"), "html", null, true);
        yield "</option>
          <option value=\"userdefined\"";
        // line 51
        yield (((null === ($context["username"] ?? null))) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use text field"), "html", null, true);
        yield "</option>
        </select>
      </span>
      <input type=\"password\" spellcheck=\"false\" id=\"text_pma_pw\" name=\"pma_pw\" title=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password"), "html", null, true);
        yield "\"";
        yield (((null === ($context["username"] ?? null))) ? (" required") : (""));
        yield ">
      <span>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Password strength", "Strength:"), "html", null, true);
        yield "</span>
      <meter max=\"4\" id=\"password_strength_meter\" name=\"pw_meter\"></meter>
      <span id=\"password_strength\" name=\"pw_strength\"></span>
    </div>

    <div class=\"item\" id=\"div_element_before_generate_password\">
      <label for=\"text_pma_pw2\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Re-type:"), "html", null, true);
        yield "</label>
      <span class=\"options\">&nbsp;</span>
      <input type=\"password\" spellcheck=\"false\" name=\"pma_pw2\" id=\"text_pma_pw2\" title=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Re-type"), "html", null, true);
        yield "\"";
        yield (((null === ($context["username"] ?? null))) ? (" required") : (""));
        yield ">
    </div>

    <div class=\"item\" id=\"authentication_plugin_div\">
      <label for=\"select_authentication_plugin\">
        ";
        // line 68
        if ((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Authentication plugin"), "html", null, true);
            yield "
        ";
        } else {
            // line 71
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password hashing method"), "html", null, true);
            yield "
        ";
        }
        // line 73
        yield "      </label>
      <span class=\"options\">&nbsp;</span>

      <select name=\"authentication_plugin\" id=\"select_authentication_plugin\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["active_auth_plugins"] ?? null));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin_description"]) {
            // line 78
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["plugin_name"], "html", null, true);
            yield "\"";
            yield ((($context["plugin_name"] == ($context["auth_plugin"] ?? null))) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["plugin_description"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['plugin_name'], $context['plugin_description'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "      </select>

      <div id=\"ssl_reqd_warning\"";
        // line 82
        yield (((($context["auth_plugin"] ?? null) != "sha256_password")) ? (" class=\"hide\"") : (""));
        yield ">
        ";
        // line 83
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 84
            yield "          ";
            yield \_gettext("This method requires using an '<em>SSL connection</em>' or an '<em>unencrypted connection that encrypts the password using RSA</em>'; while connecting to the server.");
            yield "
          ";
            // line 85
            yield PhpMyAdmin\Html\MySQLDocumentation::show("sha256-authentication-plugin");
            yield "
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        yield PhpMyAdmin\Twig\MessageExtension::getNotice($_v0);
        // line 87
        yield "      </div>
    </div>
    ";
        // line 90
        yield "  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/login_information_fields.twig";
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
        return array (  295 => 90,  291 => 87,  289 => 83,  283 => 85,  278 => 84,  276 => 83,  272 => 82,  268 => 80,  255 => 78,  251 => 77,  245 => 73,  239 => 71,  233 => 69,  231 => 68,  221 => 63,  216 => 61,  207 => 55,  201 => 54,  193 => 51,  186 => 50,  180 => 48,  178 => 47,  174 => 46,  169 => 44,  162 => 40,  155 => 38,  150 => 37,  142 => 34,  135 => 33,  127 => 31,  125 => 30,  119 => 29,  113 => 28,  109 => 27,  106 => 26,  100 => 23,  91 => 17,  85 => 14,  79 => 13,  74 => 12,  66 => 9,  60 => 8,  56 => 7,  51 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/privileges/login_information_fields.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/login_information_fields.twig");
    }
}
