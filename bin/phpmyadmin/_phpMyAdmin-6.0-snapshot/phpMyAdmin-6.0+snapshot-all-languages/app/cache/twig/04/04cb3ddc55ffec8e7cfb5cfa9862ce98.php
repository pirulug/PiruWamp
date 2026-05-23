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

/* server/privileges/new_user_ajax.twig */
class __TwigTemplate_9229ad41900ae44f7e59aef2baf71358 extends Template
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
        yield "<tr>
  <td>
    <input type=\"checkbox\" name=\"selected_usr[]\" id=\"checkbox_sel_users_\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 4) . "&amp;#27;") . CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "host", [], "any", false, false, false, 4)), "html", null, true);
        yield "\">
  </td>
  <td>
    <label for=\"checkbox_sel_users_\">
      ";
        // line 8
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 8))) {
            // line 9
            yield "        <span class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Any"), "html", null, true);
            yield "</span>
      ";
        } else {
            // line 11
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
            yield "
      ";
        }
        // line 13
        yield "    </label>
  </td>
  <td>
    ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "host", [], "any", false, false, false, 16), "html", null, true);
        yield "
  </td>
  <td>
    ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "has_password", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true);
            yield "
    ";
        } else {
            // line 22
            yield "      <span class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true);
            yield "</span>
    ";
        }
        // line 24
        yield "  </td>
  <td>
    <code>
      ";
        // line 27
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "privileges", [], "any", false, false, false, 27);
        yield "
    </code>
  </td>
  ";
        // line 30
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "has_group", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "    <td class=\"usrGroup\"></td>
  ";
        }
        // line 33
        yield "  <td>
    ";
        // line 34
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "has_grant", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
        yield "
  </td>
  ";
        // line 36
        if ((($tmp = ($context["is_grantuser"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "    <td>
      <a class=\"edit_user_anchor\" href=\"";
            // line 38
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,             // line 39
($context["user"] ?? null), "name", [], "any", false, false, false, 39), "hostname" => CoreExtension::getAttribute($this->env, $this->source,             // line 40
($context["user"] ?? null), "host", [], "any", false, false, false, 40), "dbname" => "", "tablename" => "", "routinename" => ""]);
            // line 44
            yield "\">
        ";
            // line 45
            yield PhpMyAdmin\Html\Generator::getIcon("b_usredit", \_gettext("Edit privileges"));
            yield "
      </a>
    </td>
  ";
        }
        // line 49
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "has_group_edit", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "    <td>
      <button type=\"button\" class=\"btn btn-link p-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editUserGroupModal\" data-username=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 51), "html", null, true);
            yield "\">
        ";
            // line 52
            yield PhpMyAdmin\Html\Generator::getIcon("b_usrlist", \_gettext("Edit user group"));
            yield "
      </button>
    </td>
  ";
        }
        // line 56
        yield "  <td>
    <a class=\"export_user_anchor ajax\" href=\"";
        // line 57
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,         // line 58
($context["user"] ?? null), "name", [], "any", false, false, false, 58), "hostname" => CoreExtension::getAttribute($this->env, $this->source,         // line 59
($context["user"] ?? null), "host", [], "any", false, false, false, 59), "export" => true, "initial" =>         // line 61
($context["initial"] ?? null)]);
        // line 62
        yield "\">
      ";
        // line 63
        yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", \_gettext("Export"));
        yield "
    </a>
  </td>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/new_user_ajax.twig";
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
        return array (  164 => 63,  161 => 62,  159 => 61,  158 => 59,  157 => 58,  156 => 57,  153 => 56,  146 => 52,  142 => 51,  139 => 50,  136 => 49,  129 => 45,  126 => 44,  124 => 40,  123 => 39,  122 => 38,  119 => 37,  117 => 36,  112 => 34,  109 => 33,  105 => 31,  103 => 30,  97 => 27,  92 => 24,  86 => 22,  80 => 20,  78 => 19,  72 => 16,  67 => 13,  61 => 11,  55 => 9,  53 => 8,  46 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/privileges/new_user_ajax.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/new_user_ajax.twig");
    }
}
