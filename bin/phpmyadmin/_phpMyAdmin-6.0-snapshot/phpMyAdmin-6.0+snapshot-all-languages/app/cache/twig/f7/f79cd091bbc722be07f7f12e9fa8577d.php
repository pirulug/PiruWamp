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

/* server/replication/replica_configuration.twig */
class __TwigTemplate_609d9125802570d818d5262f80abfa3c extends Template
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
        yield "<div class=\"card\">
  <div class=\"card-header\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replica replication"), "html", null, true);
        yield "</div>
  <div class=\"card-body\">
  ";
        // line 4
        if ((($tmp = ($context["server_replica_multi_replication"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Primary connection:"), "html", null, true);
            yield "
    <form method=\"get\" action=\"";
            // line 6
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\">
      ";
            // line 7
            yield PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
            yield "
      <select name=\"primary_connection\">
        <option value=\"\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Default"), "html", null, true);
            yield "</option>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["server_replica_multi_replication"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 11
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = $context["server"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["Connection_name"] ?? null) : null), "html", null, true);
                yield "\"";
                yield (((($context["primary_connection"] ?? null) == (($_v1 = $context["server"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["Connection_name"] ?? null) : null))) ? (" selected") : (""));
                yield ">
            ";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["server"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["Connection_name"] ?? null) : null), "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['server'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "      </select>
      <input id=\"goButton\" class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
    </form>
    <br>
    <br>
  ";
        }
        // line 21
        yield "
  ";
        // line 22
        if ((($tmp = ($context["server_replica_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "    <div id=\"replica_configuration_gui\">
      ";
            // line 24
            if ((($tmp =  !($context["replica_sql_running"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 25
                yield "        ";
                yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Replica SQL Thread not running!"));
                yield "
      ";
            }
            // line 27
            yield "      ";
            if ((($tmp =  !($context["replica_io_running"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "        ";
                yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Replica IO Thread not running!"));
                yield "
      ";
            }
            // line 30
            yield "
      <p>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server is configured as replica in a replication process. Would you like to:"), "html", null, true);
            yield "</p>
      <ul>
        <li>
          <a href=\"#replica_status_href\" id=\"replica_status_href\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("See replica status table"), "html", null, true);
            yield "</a>
          ";
            // line 35
            yield ($context["replica_status_table"] ?? null);
            yield "
        </li>
        <li>
          <a href=\"#replica_control_href\" id=\"replica_control_href\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Control replica:"), "html", null, true);
            yield "</a>
          <div id=\"replica_control_gui\" class=\"hide\">
            <ul>
              <li>
                <a href=\"";
            // line 42
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\" data-post=\"";
            yield ($context["replica_control_full_link"] ?? null);
            yield "\">
                  ";
            // line 43
            yield ((( !($context["replica_io_running"] ?? null) ||  !($context["replica_sql_running"] ?? null))) ? ("Full start") : ("Full stop"));
            yield "
                </a>
              </li>
              <li>
                <a class=\"ajax\" id=\"reset_replica\" href=\"";
            // line 47
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\" data-post=\"";
            yield ($context["replica_control_reset_link"] ?? null);
            yield "\">
                  ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Reset replica"), "html", null, true);
            yield "
                </a>
              </li>
              <li>
                <a href=\"";
            // line 52
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\" data-post=\"";
            yield ($context["replica_control_sql_link"] ?? null);
            yield "\">
                  ";
            // line 53
            if ((($tmp =  !($context["replica_sql_running"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Start SQL Thread only"), "html", null, true);
                yield "
                  ";
            } else {
                // line 56
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Stop SQL Thread only"), "html", null, true);
                yield "
                  ";
            }
            // line 58
            yield "                </a>
              </li>
              <li>
                <a href=\"";
            // line 61
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\" data-post=\"";
            yield ($context["replica_control_io_link"] ?? null);
            yield "\">
                  ";
            // line 62
            if ((($tmp =  !($context["replica_io_running"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Start IO Thread only"), "html", null, true);
                yield "
                  ";
            } else {
                // line 65
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Stop IO Thread only"), "html", null, true);
                yield "
                  ";
            }
            // line 67
            yield "                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href=\"#replica_errormanagement_href\" id=\"replica_errormanagement_href\">
            ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Error management:"), "html", null, true);
            yield "
          </a>
          <div id=\"replica_errormanagement_gui\" class=\"hide\">
            ";
            // line 77
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Skipping errors might lead into unsynchronized primary and replica!"));
            yield "
            <ul>
              <li>
                <a href=\"";
            // line 80
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\" data-post=\"";
            yield ($context["replica_skip_error_link"] ?? null);
            yield "\">
                  ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Skip current error"), "html", null, true);
            yield "
                </a>
              </li>
              <li>
                <form method=\"post\" action=\"";
            // line 85
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\">
                  ";
            // line 86
            yield PhpMyAdmin\Url::getHiddenInputs("", "");
            yield "
                  ";
            // line 87
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("Skip next %s errors."), "<input type=\"text\" name=\"sr_skip_errors_count\" value=\"1\" class=\"repl_gui_skip_err_cnt\">");
            yield "
                  <input class=\"btn btn-primary\" type=\"submit\" name=\"sr_replica_skip_error\" value=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"sr_take_action\" value=\"1\">
                </form>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href=\"";
            // line 96
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\" data-post=\"";
            yield ($context["reconfigure_primary_link"] ?? null);
            yield "\">
            ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Change or reconfigure primary server"), "html", null, true);
            yield "
          </a>
        </li>
      </ul>
    </div>
  ";
        } elseif ((($tmp =  !        // line 102
($context["has_replica_configure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "    ";
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("This server is not configured as replica in a replication process. Would you like to %sconfigure%s it?"), (((("<a href=\"" . PhpMyAdmin\Url::getFromRoute("/server/replication")) . "\" data-post=\"") . PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["replica_configure" => true, "replica_clear_screen" => true]))) . "\">"), "</a>");
            // line 106
            yield "
  ";
        }
        // line 108
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
        return "server/replication/replica_configuration.twig";
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
        return array (  303 => 108,  299 => 106,  296 => 103,  294 => 102,  286 => 97,  280 => 96,  269 => 88,  265 => 87,  261 => 86,  257 => 85,  250 => 81,  244 => 80,  238 => 77,  232 => 74,  223 => 67,  217 => 65,  211 => 63,  209 => 62,  203 => 61,  198 => 58,  192 => 56,  186 => 54,  184 => 53,  178 => 52,  171 => 48,  165 => 47,  158 => 43,  152 => 42,  145 => 38,  139 => 35,  135 => 34,  129 => 31,  126 => 30,  120 => 28,  117 => 27,  111 => 25,  109 => 24,  106 => 23,  104 => 22,  101 => 21,  93 => 16,  90 => 15,  81 => 12,  74 => 11,  70 => 10,  66 => 9,  61 => 7,  57 => 6,  52 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/replication/replica_configuration.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/replication/replica_configuration.twig");
    }
}
