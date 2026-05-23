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

/* server/engines/index.twig */
class __TwigTemplate_cbd550ebeb8df774760c0b6b6d1d092a extends Template
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
        yield PhpMyAdmin\Html\Generator::getImage("b_engine");
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage engines"), "html", null, true);
        yield "
  </h2>
  </div>

  <div class=\"table-responsive\">
    <table class=\"table table-striped table-hover w-auto\">
      <thead>
        <tr>
          <th scope=\"col\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage Engine"), "html", null, true);
        yield "</th>
          <th scope=\"col\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Description"), "html", null, true);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["engines"] ?? null));
        foreach ($context['_seq'] as $context["engine"] => $context["details"]) {
            // line 19
            yield "          <tr class=\"";
            // line 20
            yield (((((($_v0 = $context["details"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["Support"] ?? null) : null) == "NO") || ((($_v1 = $context["details"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["Support"] ?? null) : null) == "DISABLED"))) ? (" disabled") : (""));
            yield "
            ";
            // line 21
            yield ((((($_v2 = $context["details"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["Support"] ?? null) : null) == "DEFAULT")) ? (" marked") : (""));
            yield "\">
            <td>
              <a rel=\"newpage\" href=\"";
            // line 23
            yield PhpMyAdmin\Url::getFromRoute(("/server/engines/" . $context["engine"]));
            yield "\">
                ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = $context["details"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["Engine"] ?? null) : null), "html", null, true);
            yield "
              </a>
            </td>
            <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = $context["details"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["Comment"] ?? null) : null), "html", null, true);
            yield "</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['engine'], $context['details'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "      </tbody>
    </table>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/engines/index.twig";
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
        return array (  107 => 30,  98 => 27,  92 => 24,  88 => 23,  83 => 21,  79 => 20,  77 => 19,  73 => 18,  66 => 14,  62 => 13,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/engines/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/engines/index.twig");
    }
}
