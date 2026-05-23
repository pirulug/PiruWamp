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

/* server/status/base.twig */
class __TwigTemplate_826ae3d656fb65f9bd599d7e1a16f581 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"container-fluid\">
  <div class=\"row d-print-none\">
    <ul class=\"nav nav-pills p-2\">
      <li class=\"nav-item\">
        <a href=\"";
        // line 5
        yield PhpMyAdmin\Url::getFromRoute("/server/status");
        yield "\" class=\"nav-link";
        yield (((($context["active"] ?? null) == "status")) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server"), "html", null, true);
        yield "
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
        // line 10
        yield PhpMyAdmin\Url::getFromRoute("/server/status/processes");
        yield "\" class=\"nav-link";
        yield (((($context["active"] ?? null) == "processes")) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Processes"), "html", null, true);
        yield "
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
        // line 15
        yield PhpMyAdmin\Url::getFromRoute("/server/status/queries");
        yield "\" class=\"nav-link";
        yield (((($context["active"] ?? null) == "queries")) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Query statistics"), "html", null, true);
        yield "
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
        // line 20
        yield PhpMyAdmin\Url::getFromRoute("/server/status/variables");
        yield "\" class=\"nav-link";
        yield (((($context["active"] ?? null) == "variables")) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("All status variables"), "html", null, true);
        yield "
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
        // line 25
        yield PhpMyAdmin\Url::getFromRoute("/server/status/monitor");
        yield "\" class=\"nav-link";
        yield (((($context["active"] ?? null) == "monitor")) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Monitor"), "html", null, true);
        yield "
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
        // line 30
        yield PhpMyAdmin\Url::getFromRoute("/server/status/advisor");
        yield "\" class=\"nav-link";
        yield (((($context["active"] ?? null) == "advisor")) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Advisor"), "html", null, true);
        yield "
        </a>
      </li>
    </ul>
  </div>

  ";
        // line 37
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 38
        yield "</div>
";
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/status/base.twig";
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
        return array (  137 => 37,  131 => 38,  129 => 37,  120 => 31,  114 => 30,  107 => 26,  101 => 25,  94 => 21,  88 => 20,  81 => 16,  75 => 15,  68 => 11,  62 => 10,  55 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/status/base.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/base.twig");
    }
}
