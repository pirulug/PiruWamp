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

/* server/privileges/user_properties.twig */
class __TwigTemplate_80a6796411a9bbd47baddae25be7de61 extends Template
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
        yield "<div class=\"container\" id=\"edit_user_dialog\">
  <h2>
    ";
        // line 3
        yield PhpMyAdmin\Html\Generator::getIcon("b_usredit");
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit privileges:"), "html", null, true);
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User account"), "html", null, true);
        yield "

    ";
        // line 7
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["database"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "      <em>
        <a class=\"edit_user_anchor\" href=\"";
            // line 9
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" =>             // line 10
($context["username"] ?? null), "hostname" =>             // line 11
($context["hostname"] ?? null), "dbname" => "", "tablename" => ""]);
            // line 14
            yield "\">
          '";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username"] ?? null), "html", null, true);
            yield "'@'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname"] ?? null), "html", null, true);
            yield "'
        </a>
      </em>
      -
      ";
            // line 19
            if ((($tmp = ($context["is_databases"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Databases"), "html", null, true);
                yield "
      ";
            } else {
                // line 22
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
                yield "
      ";
            }
            // line 24
            yield "
      ";
            // line 25
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["table"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "        <em>
          <a href=\"";
                // line 27
                yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" =>                 // line 28
($context["username"] ?? null), "hostname" =>                 // line 29
($context["hostname"] ?? null), "dbname" =>                 // line 30
($context["dbname"] ?? null), "tablename" => ""]);
                // line 32
                yield "\">
            ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["database"] ?? null), "html", null, true);
                yield "
          </a>
        </em>
        -
        ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
                yield "
        <em>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true);
                yield "</em>
      ";
            } else {
                // line 40
                yield "        ";
                if ((($tmp =  !is_iterable(($context["database"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 41
                    yield "          ";
                    $context["database"] = [($context["database"] ?? null)];
                    // line 42
                    yield "        ";
                }
                // line 43
                yield "        <em>
          ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["database"] ?? null), ", "), "html", null, true);
                yield "
        </em>
      ";
            }
            // line 47
            yield "    ";
        } else {
            // line 48
            yield "      <em>'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username"] ?? null), "html", null, true);
            yield "'@'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname"] ?? null), "html", null, true);
            yield "'</em>
    ";
        }
        // line 50
        yield "  </h2>

  ";
        // line 52
        if ((($context["current_user"] ?? null) == ((($context["username"] ?? null) . "@") . ($context["hostname"] ?? null)))) {
            // line 53
            yield "    ";
            yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("Note: You are attempting to edit privileges of the user with which you are currently logged in."));
            yield "
  ";
        }
        // line 55
        yield "
  ";
        // line 56
        if ((($tmp = ($context["user_does_not_exists"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "    ";
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("The selected user was not found in the privilege table."));
            yield "
  ";
        }
        // line 59
        yield "
  <form class=\"submenu-item\" name=\"usersForm\" id=\"addUsersForm\" action=\"";
        // line 60
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" method=\"post\">
    ";
        // line 61
        yield PhpMyAdmin\Url::getHiddenInputs(($context["params"] ?? null));
        yield "

    ";
        // line 63
        yield ($context["privileges_table"] ?? null);
        yield "
  </form>

  ";
        // line 66
        yield ($context["table_specific_rights"] ?? null);
        yield "

  ";
        // line 68
        if ((( !is_iterable(($context["database"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["database"] ?? null)) > 0)) &&  !($context["is_wildcard"] ?? null))) {
            // line 69
            yield "    [
    ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "
    <a href=\"";
            // line 71
            yield ($context["database_url"] ?? null);
            yield PhpMyAdmin\Url::getCommon(["db" => Twig\Extension\CoreExtension::replace(            // line 72
($context["database"] ?? null), ["\\_" => "_", "\\%" => "%"]), "reload" => true], "&");
            // line 74
            yield "\">
      ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["database"] ?? null), ["\\_" => "_", "\\%" => "%"]), "html", null, true);
            yield ":
      ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["database_url_title"] ?? null), "html", null, true);
            yield "
    </a>
    ]
    ";
            // line 79
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["table"] ?? null)) > 0)) {
                // line 80
                yield "      [
      ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
                yield "
      <a href=\"";
                // line 82
                yield ($context["table_url"] ?? null);
                yield PhpMyAdmin\Url::getCommon(["db" => Twig\Extension\CoreExtension::replace(                // line 83
($context["database"] ?? null), ["\\_" => "_", "\\%" => "%"]), "table" =>                 // line 84
($context["table"] ?? null), "reload" => true], "&");
                // line 86
                yield "\">
        ";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true);
                yield ":
        ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_url_title"] ?? null), "html", null, true);
                yield "
      </a>
      ]
    ";
            }
            // line 92
            yield "  ";
        }
        // line 93
        yield "
  ";
        // line 94
        yield ($context["change_password"] ?? null);
        yield "

  <form action=\"";
        // line 96
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" id=\"copyUserForm\" method=\"post\" class=\"copyUserForm submenu-item\" autocomplete=\"off\">
    ";
        // line 97
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
    <input type=\"hidden\" name=\"old_username\" value=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"old_hostname\" value=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 100
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["user_group"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "      <input type=\"hidden\" name=\"old_usergroup\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_group"] ?? null), "html", null, true);
            yield "\">
    ";
        }
        // line 103
        yield "
    <div class=\"card mb-3\">
      <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Login Information"), "html", null, true);
        yield "\">
        ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Change login information / Copy user account"), "html", null, true);
        yield "
      </div>

      <div class=\"card-body\">
        ";
        // line 110
        yield ($context["change_login_info_fields"] ?? null);
        yield "

        <div class=\"card\">
          <div class=\"card-header\">
            ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create a new user account with the same privileges and …"), "html", null, true);
        yield "
          </div>

          <div class=\"card-body\">

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_4\" value=\"4\" checked>
              <label class=\"form-check-label\" for=\"mode_4\">
                ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("… keep the old one."), "html", null, true);
        yield "
              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_1\" value=\"1\">
              <label class=\"form-check-label\" for=\"mode_1\">
                ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("… delete the old one from the user tables."), "html", null, true);
        yield "
              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_2\" value=\"2\">
              <label class=\"form-check-label\" for=\"mode_2\">
                ";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("… revoke all active privileges from the old one and delete it afterwards."), "html", null, true);
        yield "
              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_3\" value=\"3\">
              <label class=\"form-check-label\" for=\"mode_3\">
                ";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("… delete the old one from the user tables and reload the privileges afterwards."), "html", null, true);
        yield "
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <input type=\"hidden\" name=\"change_copy\" value=\"1\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 153
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
        return "server/privileges/user_properties.twig";
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
        return array (  366 => 153,  353 => 143,  343 => 136,  333 => 129,  323 => 122,  312 => 114,  305 => 110,  298 => 106,  294 => 105,  290 => 103,  284 => 101,  282 => 100,  278 => 99,  274 => 98,  270 => 97,  266 => 96,  261 => 94,  258 => 93,  255 => 92,  248 => 88,  244 => 87,  241 => 86,  239 => 84,  238 => 83,  236 => 82,  232 => 81,  229 => 80,  227 => 79,  221 => 76,  217 => 75,  214 => 74,  212 => 72,  210 => 71,  206 => 70,  203 => 69,  201 => 68,  196 => 66,  190 => 63,  185 => 61,  181 => 60,  178 => 59,  172 => 57,  170 => 56,  167 => 55,  161 => 53,  159 => 52,  155 => 50,  147 => 48,  144 => 47,  138 => 44,  135 => 43,  132 => 42,  129 => 41,  126 => 40,  121 => 38,  117 => 37,  110 => 33,  107 => 32,  105 => 30,  104 => 29,  103 => 28,  102 => 27,  99 => 26,  97 => 25,  94 => 24,  88 => 22,  82 => 20,  80 => 19,  71 => 15,  68 => 14,  66 => 11,  65 => 10,  64 => 9,  61 => 8,  59 => 7,  54 => 5,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/privileges/user_properties.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/user_properties.twig");
    }
}
