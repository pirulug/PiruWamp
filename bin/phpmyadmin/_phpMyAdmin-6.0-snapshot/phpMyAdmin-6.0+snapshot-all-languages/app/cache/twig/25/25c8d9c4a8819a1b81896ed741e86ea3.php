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

/* server/plugins/index.twig */
class __TwigTemplate_0062edc09c2180a619afa1998b268d47 extends Template
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
<h2>
  ";
        // line 3
        yield PhpMyAdmin\Html\Generator::getImage("b_plugin");
        yield "
  ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Plugins"), "html", null, true);
        yield "
</h2>

<div id=\"plugins_plugins\">
  <div class=\"card\">
    <div class=\"card-body\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(($context["plugins"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 11
            yield "        <a class=\"btn btn-primary\" href=\"#plugins-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["clean_types"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["type"]] ?? null) : null), "html", null, true);
            yield "\">
          ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "
        </a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "    </div>
  </div>
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["plugins"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["list"]) {
            // line 18
            yield "    <div class=\"row\">
      <div class=\"table-responsive col-12\">
        <table class=\"table table-striped table-hover caption-top w-auto\" id=\"plugins-";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["clean_types"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["type"]] ?? null) : null), "html", null, true);
            yield "\">
          <caption>
            ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "
          </caption>
          <thead>
            <tr>
              <th scope=\"col\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Plugin"), "html", null, true);
            yield "</th>
              <th scope=\"col\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Description"), "html", null, true);
            yield "</th>
              <th scope=\"col\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Version"), "html", null, true);
            yield "</th>
              <th scope=\"col\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Author"), "html", null, true);
            yield "</th>
              <th scope=\"col\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("License"), "html", null, true);
            yield "</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["list"]);
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 35
                yield "              <tr class=\"noclick\">
                <th>
                  ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 37), "html", null, true);
                yield "
                  ";
                // line 38
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "status", [], "any", false, false, false, 38) != "ACTIVE")) {
                    // line 39
                    yield "                    <span class=\"badge bg-danger\">
                      ";
                    // line 40
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "status", [], "any", false, false, false, 40) == "INACTIVE")) {
                        // line 41
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("inactive"), "html", null, true);
                        yield "
                      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 42
$context["plugin"], "status", [], "any", false, false, false, 42) == "DISABLED")) {
                        // line 43
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("disabled"), "html", null, true);
                        yield "
                      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 44
$context["plugin"], "status", [], "any", false, false, false, 44) == "DELETING")) {
                        // line 45
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("deleting"), "html", null, true);
                        yield "
                      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 46
$context["plugin"], "status", [], "any", false, false, false, 46) == "DELETED")) {
                        // line 47
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("deleted"), "html", null, true);
                        yield "
                      ";
                    }
                    // line 49
                    yield "                    </span>
                  ";
                }
                // line 51
                yield "                </th>
                <td>";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 52), "html", null, true);
                yield "</td>
                <td>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 53), "html", null, true);
                yield "</td>
                <td>";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "author", [], "any", false, false, false, 54), "html", null, true);
                yield "</td>
                <td>";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "license", [], "any", false, false, false, 55), "html", null, true);
                yield "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['plugin'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "          </tbody>
        </table>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['list'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/plugins/index.twig";
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
        return array (  208 => 63,  198 => 58,  189 => 55,  185 => 54,  181 => 53,  177 => 52,  174 => 51,  170 => 49,  164 => 47,  162 => 46,  157 => 45,  155 => 44,  150 => 43,  148 => 42,  143 => 41,  141 => 40,  138 => 39,  136 => 38,  132 => 37,  128 => 35,  124 => 34,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  94 => 22,  89 => 20,  85 => 18,  81 => 17,  77 => 15,  68 => 12,  63 => 11,  59 => 10,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/plugins/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/plugins/index.twig");
    }
}
