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

/* table/export/index.twig */
class __TwigTemplate_fbb6f32e9fea0c3b0028de3649cb871b extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "export.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        $context["filename_hint"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("@SERVER@ will become the server name, @DATABASE@ will become the database name and @TABLE@ will become the table name."), "html", null, true);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->load("export.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "  ";
        if ((($context["export_type"] ?? null) == "raw")) {
            // line 5
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: A query that the user has written freely
\_gettext("Exporting a raw query")
, "html", null, true);
            yield "
  ";
        } else {
            // line 7
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Exporting rows from \"%s\" table"), ($context["table"] ?? null)), "html", null, true);
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
        return "table/export/index.twig";
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
        return array (  80 => 7,  71 => 5,  68 => 4,  61 => 3,  56 => 1,  49 => 12,  47 => 11,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/export/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/export/index.twig");
    }
}
