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

/* server/replication/change_primary.twig */
class __TwigTemplate_5140359cf81d381e3b77d119b54e3ce2 extends Template
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
        yield "<form method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/server/replication");
        yield "\" class=\"card\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs("", "");
        yield "
  <input type=\"hidden\" name=\"sr_take_action\" value=\"true\">
  <input type=\"hidden\" name=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submit_name"] ?? null), "html", null, true);
        yield "\" value=\"1\">

  <div class=\"card-header\">
    ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replica configuration - Change or reconfigure primary server"), "html", null, true);
        yield "
  </div>

  <div class=\"card-body\" id=\"fieldset_add_user_login\">
    <p>
      ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Make sure you have a unique server-id in your configuration file (my.cnf). If not, please add the following line into [mysqld] section:"), "html", null, true);
        yield "
    </p>
    <pre>server-id=";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["server_id"] ?? null), "html", null, true);
        yield "</pre>

    <div class=\"item\">
      <label for=\"text_username\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name:"), "html", null, true);
        yield "</label>
      <input id=\"text_username\" name=\"username\" type=\"text\" maxlength=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username_length"] ?? null), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name"), "html", null, true);
        yield "\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_pma_pw\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password:"), "html", null, true);
        yield "</label>
      <input id=\"text_pma_pw\" name=\"pma_pw\" type=\"password\" spellcheck=\"false\" title=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password"), "html", null, true);
        yield "\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_hostname\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host:"), "html", null, true);
        yield "</label>
      <input id=\"text_hostname\" name=\"hostname\" type=\"text\" maxlength=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname_length"] ?? null), "html", null, true);
        yield "\" value=\"\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_port\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Port:"), "html", null, true);
        yield "</label>
      <input id=\"text_port\" name=\"text_port\" type=\"number\" maxlength=\"6\" value=\"3306\" required>
    </div>
  </div>

  <div class=\"card-footer\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"confreplica_submit\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
  </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/replication/change_primary.twig";
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
        return array (  118 => 35,  109 => 29,  103 => 26,  99 => 25,  93 => 22,  89 => 21,  81 => 18,  77 => 17,  71 => 14,  66 => 12,  58 => 7,  52 => 4,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/replication/change_primary.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/replication/change_primary.twig");
    }
}
