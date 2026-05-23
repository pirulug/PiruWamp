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

/* server/privileges/initials_row.twig */
class __TwigTemplate_b2f8462fbed93da82767d8e5b629e15d extends Template
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
        yield "<nav aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Pagination of user accounts"), "html", null, true);
        yield "\">
  <ul id=\"userAccountsPagination\" class=\"pagination\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["array_initials"] ?? null));
        foreach ($context['_seq'] as $context["initial"] => $context["user_available"]) {
            // line 4
            yield "      ";
            if ((($tmp = $context["user_available"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "        <li class=\"page-item";
                yield (((($context["selected_initial"] ?? null) === $context["initial"])) ? (" active") : (""));
                yield "\"";
                yield (((($context["selected_initial"] ?? null) === $context["initial"])) ? (" aria-current=\"page\"") : (""));
                yield ">
          <a class=\"page-link\" href=\"";
                // line 6
                yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["initial" => $context["initial"]]);
                yield "\">
          ";
                // line 7
                if (($context["initial"] === "")) {
                    // line 8
                    yield "            <span class=\"text-danger text-nowrap\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Any"), "html", null, true);
                    yield "</span>
          ";
                } else {
                    // line 10
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["initial"], "html", null, true);
                    yield "
          ";
                }
                // line 12
                yield "          </a>
        </li>
      ";
            } else {
                // line 15
                yield "        <li class=\"page-item disabled\">
          <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["initial"], "html", null, true);
                yield "</a>
        </li>
      ";
            }
            // line 19
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['initial'], $context['user_available'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "    <li class=\"page-item\">
      <a class=\"page-link text-nowrap\" href=\"";
        // line 21
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["showall" => true]);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show all"), "html", null, true);
        yield "</a>
    </li>
  </ul>
</nav>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/initials_row.twig";
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
        return array (  103 => 21,  100 => 20,  94 => 19,  88 => 16,  85 => 15,  80 => 12,  74 => 10,  68 => 8,  66 => 7,  62 => 6,  55 => 5,  52 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/privileges/initials_row.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/initials_row.twig");
    }
}
