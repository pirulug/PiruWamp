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

/* display/results/row_data.twig */
class __TwigTemplate_08560c24c642d64bc932f490b6409f50 extends Template
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
        yield "<td data-decimals=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["decimals"] ?? null), "html", null, true);
        yield "\" data-type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
        yield "\"";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["original_length"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " data-originallength=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["original_length"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["td_class"] ?? null), "html", null, true);
        yield "\">";
        // line 2
        yield ($context["value"] ?? null);
        // line 3
        yield "</td>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "display/results/row_data.twig";
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
        return array (  58 => 3,  56 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "display/results/row_data.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/display/results/row_data.twig");
    }
}
