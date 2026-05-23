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

/* server/replication/primary_add_replica_user.twig */
class __TwigTemplate_e8140794741d76bcf9700071ffc8cc1b extends Template
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
        yield "<div id=\"primary_addreplicauser_gui\">
  <form action=\"";
        // line 2
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" method=\"post\" autocomplete=\"off\" id=\"addUsersForm\" class=\"card\">
    ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs("", "");
        yield "
    <input type=\"hidden\" name=\"grant_count\" value=\"25\">
    <input type=\"hidden\" name=\"createdb\" id=\"createdb_0\" value=\"0\">
    ";
        // line 7
        yield "    <input type=\"hidden\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\">
    <input type=\"hidden\" name=\"sr_take_action\" value=\"true\">
    <input type=\"hidden\" name=\"adduser_submit\" value=\"1\">

    <div class=\"card-header\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add replica replication user"), "html", null, true);
        yield "</div>

    <div class=\"card-body\" id=\"fieldset_add_user_login\">
      <div class=\"item\">
        <label for=\"select_pred_username\">
          ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name:"), "html", null, true);
        yield "
        </label>
        <span class=\"options\">
          <select name=\"pred_username\" id=\"select_pred_username\" title=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name"), "html", null, true);
        yield "\">
            <option value=\"any\"";
        // line 20
        yield (((($context["predefined_username"] ?? null) == "any")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Any user"), "html", null, true);
        yield "</option>
            <option value=\"userdefined\"";
        // line 21
        yield (((($context["predefined_username"] ?? null) == "userdefined")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use text field:"), "html", null, true);
        yield "</option>
          </select>
        </span>
        <input type=\"text\" name=\"username\" id=\"pma_username\" maxlength=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username_length"] ?? null), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name"), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username"] ?? null), "html", null, true);
        yield "\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"select_pred_hostname\">
          ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host:"), "html", null, true);
        yield "
        </label>
        <span class=\"options\">
          <select name=\"pred_hostname\" id=\"select_pred_hostname\" title=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host"), "html", null, true);
        yield "\"";
        // line 33
        if ((($tmp =  !(null === ($context["this_host"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " data-thishost=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["this_host"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
            <option value=\"any\"";
        // line 34
        yield (((($context["predefined_hostname"] ?? null) == "any")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Any host"), "html", null, true);
        yield "</option>
            <option value=\"localhost\"";
        // line 35
        yield (((($context["predefined_hostname"] ?? null) == "localhost")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Local"), "html", null, true);
        yield "</option>
            ";
        // line 36
        if ((($tmp =  !(null === ($context["this_host"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "              <option value=\"thishost\"";
            yield (((($context["predefined_hostname"] ?? null) == "thishost")) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("This host"), "html", null, true);
            yield "</option>
            ";
        }
        // line 39
        yield "            <option value=\"hosttable\"";
        yield (((($context["predefined_hostname"] ?? null) == "hosttable")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use host table"), "html", null, true);
        yield "</option>
            <option value=\"userdefined\"";
        // line 40
        yield (((($context["predefined_hostname"] ?? null) == "userdefined")) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use text field:"), "html", null, true);
        yield "</option>
          </select>
        </span>
        <input type=\"text\" name=\"hostname\" id=\"pma_hostname\" maxlength=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname_length"] ?? null), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host"), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 44
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("When Host table is used, this field is ignored and values stored in Host table are used instead."));
        yield "
      </div>

      <div class=\"item\">
        <label for=\"select_pred_password\">
          ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password:"), "html", null, true);
        yield "
        </label>
        <span class=\"options\">
          <select name=\"pred_password\" id=\"select_pred_password\" title=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password"), "html", null, true);
        yield "\">
            <option value=\"none\"";
        // line 53
        yield (((($tmp = ($context["has_username"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No password"), "html", null, true);
        yield "</option>
            <option value=\"userdefined\"";
        // line 54
        yield (((($tmp =  !($context["has_username"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use text field:"), "html", null, true);
        yield "</option>
          </select>
        </span>
        <input type=\"password\" id=\"text_pma_pw\" name=\"pma_pw\" title=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password"), "html", null, true);
        yield "\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"text_pma_pw2\">
          ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Re-type:"), "html", null, true);
        yield "
        </label>
        <span class=\"options\"></span>
        <input type=\"password\" id=\"text_pma_pw2\" name=\"pma_pw2\" title=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Re-type"), "html", null, true);
        yield "\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"button_generate_password\">
          ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Generate password:"), "html", null, true);
        yield "
        </label>
        <span class=\"options\">
          <input type=\"button\" class=\"btn btn-secondary button\" id=\"button_generate_password\" value=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Generate"), "html", null, true);
        yield "\">
        </span>
        <input type=\"text\" name=\"generated_pw\" id=\"generated_pw\">
      </div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" id=\"adduser_submit\" value=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/replication/primary_add_replica_user.twig";
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
        return array (  237 => 80,  227 => 73,  221 => 70,  213 => 65,  207 => 62,  199 => 57,  191 => 54,  185 => 53,  181 => 52,  175 => 49,  167 => 44,  159 => 43,  151 => 40,  144 => 39,  136 => 37,  134 => 36,  128 => 35,  122 => 34,  114 => 33,  111 => 32,  105 => 29,  93 => 24,  85 => 21,  79 => 20,  75 => 19,  69 => 16,  61 => 11,  55 => 7,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/replication/primary_add_replica_user.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/replication/primary_add_replica_user.twig");
    }
}
