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

/* table/search/column_comparison_operators.twig */
class __TwigTemplate_83e14310603e598ee3a9744a2623c06d extends Template
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
        yield "<select class=\"column-operator\" id=\"ColumnOperator";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search_index"] ?? null), "html", null, true);
        yield "\" name=\"criteriaColumnOperators[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search_index"] ?? null), "html", null, true);
        yield "]\">
  ";
        // line 2
        yield ($context["type_operators"] ?? null);
        yield "
</select>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/search/column_comparison_operators.twig";
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
        return array (  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/search/column_comparison_operators.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/search/column_comparison_operators.twig");
    }
}
