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

/* server/user_groups/user_groups.twig */
class __TwigTemplate_8148e922c59c24ef840bdc3c17da8679 extends Template
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
        yield "<div class=\"row\"><h2>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User groups"), "html", null, true);
        yield "</h2></div>
";
        // line 2
        if ((($tmp = ($context["has_rows"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    <form name=\"userGroupsForm\" id=\"userGroupsForm\" action=\"";
            yield ($context["action"] ?? null);
            yield "\" method=\"post\">
        ";
            // line 4
            yield ($context["hidden_inputs"] ?? null);
            yield "
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr class=\"text-nowrap\">
                    <th scope=\"col\">
                        ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User groups"), "html", null, true);
            yield "
                    </th>
                    <th scope=\"col\">
                        ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server level tabs"), "html", null, true);
            yield "
                    </th>
                    <th scope=\"col\">
                        ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database level tabs"), "html", null, true);
            yield "
                    </th>
                    <th scope=\"col\">
                        ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table level tabs"), "html", null, true);
            yield "
                    </th>
                    <th scope=\"col\">
                        ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
            yield "
                    </th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["user_groups_values"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["groupName"]) {
                // line 27
                yield "                    <tr>
                        <td>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupName"], "name", [], "any", false, false, false, 28), "html", null, true);
                yield "</td>
                        <td>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupName"], "serverTab", [], "any", false, false, false, 29), "html", null, true);
                yield "</td>
                        <td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupName"], "dbTab", [], "any", false, false, false, 30), "html", null, true);
                yield "</td>
                        <td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupName"], "tableTab", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
                        <td class=\"text-nowrap\">
                            <a class=\"\" href=\"";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["groupName"], "userGroupUrl", [], "any", false, false, false, 33);
                yield "\" data-post=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["groupName"], "viewUsersUrl", [], "any", false, false, false, 33);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["groupName"], "viewUsersIcon", [], "any", false, false, false, 33);
                yield "</a>
                            &nbsp;&nbsp;
                            <a class=\"\" href=\"";
                // line 35
                yield CoreExtension::getAttribute($this->env, $this->source, $context["groupName"], "userGroupUrl", [], "any", false, false, false, 35);
                yield "\" data-post=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["groupName"], "editUsersUrl", [], "any", false, false, false, 35);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["groupName"], "editUsersIcon", [], "any", false, false, false, 35);
                yield "</a>
                          <button type=\"button\" class=\"btn btn-link\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteUserGroupModal\" data-user-group=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupName"], "name", [], "any", false, false, false, 36), "html", null, true);
                yield "\">
                            ";
                // line 37
                yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Delete"));
                yield "
                          </button>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['groupName'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "            </tbody>
        </table>
    </form>

  <div class=\"modal fade\" id=\"deleteUserGroupModal\" tabindex=\"-1\" aria-labelledby=\"deleteUserGroupModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"deleteUserGroupModalLabel\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete user group"), "html", null, true);
            yield "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "\"></button>
        </div>
        <div class=\"modal-body\"></div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "</button>
          <button type=\"button\" class=\"btn btn-danger\" id=\"deleteUserGroupConfirm\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete"), "html", null, true);
            yield "</button>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 62
        yield "<div>
  <a class=\"btn btn-primary\" href=\"";
        // line 63
        yield ($context["add_user_url"] ?? null);
        yield "\">";
        yield ($context["add_user_icon"] ?? null);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add user group"), "html", null, true);
        yield "</a>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/user_groups/user_groups.twig";
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
        return array (  187 => 63,  184 => 62,  175 => 56,  171 => 55,  164 => 51,  160 => 50,  150 => 42,  139 => 37,  135 => 36,  127 => 35,  118 => 33,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  98 => 27,  94 => 26,  86 => 21,  80 => 18,  74 => 15,  68 => 12,  62 => 9,  54 => 4,  49 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/user_groups/user_groups.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/user_groups/user_groups.twig");
    }
}
