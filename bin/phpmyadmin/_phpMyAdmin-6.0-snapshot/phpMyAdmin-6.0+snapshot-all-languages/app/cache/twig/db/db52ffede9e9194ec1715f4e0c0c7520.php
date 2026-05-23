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

/* sql/no_results_returned.twig */
class __TwigTemplate_f5efee66a80b73941fef0119d9cae145 extends Template
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
        yield ($context["message"] ?? null);
        yield "

";
        // line 3
        yield ($context["sql_query_results_table"] ?? null);
        yield "

";
        // line 5
        yield ($context["profiling_chart"] ?? null);
        yield "

";
        // line 7
        if ((($tmp =  !($context["is_procedure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "  <div class=\"card mb-3 d-print-none\">
    <div class=\"card-header\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Query results operations"), "html", null, true);
            yield "</div>
    <div class=\"card-body\">
      <span>
        ";
            // line 12
            yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/view/create"), ["db" =>             // line 14
($context["db"] ?? null), "table" => ($context["table"] ?? null), "printview" => "1", "sql_query" => ($context["sql_query"] ?? null)], PhpMyAdmin\Html\Generator::getIcon("b_view_add", \_gettext("Create view"), true), ["class" => "create_view ajax btn"]);
            // line 17
            yield "
      </span>
    </div>
  </div>
";
        }
        // line 22
        yield "
";
        // line 23
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["bookmark"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "  ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "sql/_bookmark.twig", ($context["bookmark"] ?? null), false);
            yield "
";
        }
        // line 26
        yield "
";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/create_view.twig");
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sql/no_results_returned.twig";
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
        return array (  92 => 27,  89 => 26,  83 => 24,  81 => 23,  78 => 22,  71 => 17,  69 => 14,  68 => 12,  62 => 9,  59 => 8,  57 => 7,  52 => 5,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sql/no_results_returned.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/sql/no_results_returned.twig");
    }
}
