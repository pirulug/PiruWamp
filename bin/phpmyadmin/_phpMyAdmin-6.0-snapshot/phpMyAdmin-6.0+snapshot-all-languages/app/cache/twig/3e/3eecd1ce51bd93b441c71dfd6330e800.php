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

/* server/variables/index.twig */
class __TwigTemplate_28ffb359886bdc151f64c5fb3a260027 extends Template
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
        yield "<div class=\"container-fluid\">
<div class=\"row\">
  <h2>
    ";
        // line 4
        yield PhpMyAdmin\Html\Generator::getImage("s_vars");
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server variables and settings"), "html", null, true);
        yield "
    ";
        // line 6
        yield PhpMyAdmin\Html\MySQLDocumentation::show("server_system_variables");
        yield "
  </h2>
</div>

";
        // line 10
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["variables"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "  <a href=\"#\" class=\"ajax saveLink hide\">
    ";
            // line 12
            yield PhpMyAdmin\Html\Generator::getIcon("b_save", \_gettext("Save"));
            yield "
  </a>
  <a href=\"#\" class=\"cancelLink hide\">
    ";
            // line 15
            yield PhpMyAdmin\Html\Generator::getIcon("b_close", \_gettext("Cancel"));
            yield "
  </a>
  ";
            // line 17
            yield PhpMyAdmin\Html\Generator::getImage("b_help", \_gettext("Documentation"), ["class" => "hide", "id" => "docImage"]);
            // line 20
            yield "

  ";
            // line 22
            yield from $this->load("filter.twig", 22)->unwrap()->yield(CoreExtension::toArray(["filter_value" =>             // line 23
($context["filter_value"] ?? null)]));
            // line 25
            yield "
  <div class=\"table-responsive\">
    <table id=\"serverVariables\" class=\"table table-striped table-hover table-sm\">
      <thead>
        <tr>
          <th scope=\"col\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
            yield "</th>
          <th scope=\"col\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Variable"), "html", null, true);
            yield "</th>
          <th scope=\"col\" class=\"text-end\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Value"), "html", null, true);
            yield "</th>
        </tr>
      </thead>

      <tbody>
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["variables"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["variable"]) {
                // line 38
                yield "          <tr class=\"var-row\" data-filter-row=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 38)), "html", null, true);
                yield "\">
            <td>
              ";
                // line 40
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "is_editable", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 41
                    yield "                <a href=\"#\" data-variable=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 41), "html", null, true);
                    yield "\" class=\"editLink\">";
                    yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit"));
                    yield "</a>
              ";
                } else {
                    // line 43
                    yield "                <span title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("This is a read-only variable and can not be edited"), "html", null, true);
                    yield "\" class=\"read_only_var\">
                  ";
                    // line 44
                    yield PhpMyAdmin\Html\Generator::getIcon("bd_edit", \_gettext("Edit"));
                    yield "
                </span>
              ";
                }
                // line 47
                yield "            </td>
            <td class=\"var-name fw-bold\">
              ";
                // line 49
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "doc_link", [], "any", false, false, false, 49) != null)) {
                    // line 50
                    yield "                <span title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 50), ["_" => " "]), "html", null, true);
                    yield "\">
                  ";
                    // line 51
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "doc_link", [], "any", false, false, false, 51);
                    yield "
                </span>
              ";
                } else {
                    // line 54
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 54), ["_" => " "]), "html", null, true);
                    yield "
              ";
                }
                // line 56
                yield "            </td>
            <td class=\"var-value text-end font-monospace";
                // line 57
                yield (((($tmp = ($context["is_superuser"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" editable") : (""));
                yield "\">
              ";
                // line 58
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "is_escaped", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 59
                    yield "                ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 59);
                    yield "
              ";
                } else {
                    // line 61
                    yield "                ";
                    yield Twig\Extension\CoreExtension::replace($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 61)), ["," => ",&#8203;"]);
                    yield "
              ";
                }
                // line 63
                yield "            </td>
          </tr>

          ";
                // line 66
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "has_session_value", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "            <tr class=\"var-row\" data-filter-row=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 67)), "html", null, true);
                    yield "\">
              <td></td>
              <td class=\"var-name font-italic\">";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 69), ["_" => " "]), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Session value"), "html", null, true);
                    yield ")</td>
              <td class=\"var-value text-end font-monospace\">";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "session_value", [], "any", false, false, false, 70), "html", null, true);
                    yield "</td>
            </tr>
          ";
                }
                // line 73
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['variable'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "      </tbody>
    </table>
  </div>
</div>

";
        } else {
            // line 80
            yield "  ";
            yield PhpMyAdmin\Twig\MessageExtension::getError(Twig\Extension\CoreExtension::sprintf(\_gettext("Not enough privilege to view server variables and settings. %s"), PhpMyAdmin\Html\Generator::linkToVarDocumentation("show_compatibility_56",             // line 81
($context["is_mariadb"] ?? null))));
            // line 82
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/variables/index.twig";
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
        return array (  228 => 82,  226 => 81,  224 => 80,  216 => 74,  210 => 73,  204 => 70,  198 => 69,  192 => 67,  190 => 66,  185 => 63,  179 => 61,  173 => 59,  171 => 58,  167 => 57,  164 => 56,  158 => 54,  152 => 51,  147 => 50,  145 => 49,  141 => 47,  135 => 44,  130 => 43,  122 => 41,  120 => 40,  114 => 38,  110 => 37,  102 => 32,  98 => 31,  94 => 30,  87 => 25,  85 => 23,  84 => 22,  80 => 20,  78 => 17,  73 => 15,  67 => 12,  64 => 11,  62 => 10,  55 => 6,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/variables/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/variables/index.twig");
    }
}
