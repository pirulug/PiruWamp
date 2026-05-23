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

/* sql/sql_query_results.twig */
class __TwigTemplate_259766bfa598871e946ce9e4335f61d5 extends Template
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
        yield "<div class=\"sqlqueryresults ajax\">
  ";
        // line 2
        yield ($context["previous_update_query"] ?? null);
        yield "
  ";
        // line 3
        yield ($context["profiling_chart"] ?? null);
        yield "
  ";
        // line 4
        yield ($context["missing_unique_column_message"] ?? null);
        yield "
  ";
        // line 5
        yield ($context["bookmark_created_message"] ?? null);
        yield "
  ";
        // line 6
        yield ($context["table"] ?? null);
        yield "

  ";
        // line 8
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["bookmark"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "sql/_bookmark.twig", ($context["bookmark"] ?? null), false);
            yield "
  ";
        }
        // line 11
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sql/sql_query_results.twig";
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
        return array (  74 => 11,  68 => 9,  66 => 8,  61 => 6,  57 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sql/sql_query_results.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/sql/sql_query_results.twig");
    }
}
