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

/* recent_favorite_table_recent.twig */
class __TwigTemplate_0f9c148037240ae52224dd4ac58bab21 extends Template
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
        if (Twig\Extension\CoreExtension::testEmpty(($context["tables"] ?? null))) {
            // line 2
            yield "  <li>
    <span class=\"dropdown-item-text\">";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("There are no recent tables."), "html", null, true);
            yield "</span>
  </li>
";
        } else {
            // line 6
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
                // line 7
                yield "  <li>
    <a class=\"dropdown-item disableAjax\" href=\"";
                // line 8
                yield PhpMyAdmin\Url::getFromRoute("/table/recent-favorite", $context["table"]);
                yield "\">
      `";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "db", [], "any", false, false, false, 9), "html", null, true);
                yield "`.`";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "table", [], "any", false, false, false, 9), "html", null, true);
                yield "`
    </a>
  </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['table'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "recent_favorite_table_recent.twig";
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
        return array (  65 => 9,  61 => 8,  58 => 7,  53 => 6,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "recent_favorite_table_recent.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/recent_favorite_table_recent.twig");
    }
}
