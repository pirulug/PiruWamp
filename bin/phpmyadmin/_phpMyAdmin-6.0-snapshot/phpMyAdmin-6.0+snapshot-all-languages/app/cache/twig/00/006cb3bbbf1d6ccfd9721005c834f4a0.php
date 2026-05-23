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

/* table/insert/continue_insertion_form.twig */
class __TwigTemplate_6f15c62cc428a09841a4468eb8d96999 extends Template
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
        yield "<form id=\"continueForm\" method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/table/change");
        yield "\" name=\"continueForm\" class=\"row g-3\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["goto"] ?? null), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"err_url\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["err_url"] ?? null), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"sql_query\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sql_query"] ?? null), "html", null, true);
        yield "\">

  ";
        // line 7
        if ((($tmp = ($context["has_where_clause"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["where_clause_array"] ?? null));
            foreach ($context['_seq'] as $context["key_id"] => $context["where_clause"]) {
                // line 9
                yield "      <input type=\"hidden\" name=\"where_clause[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key_id"], "html", null, true);
                yield "]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["where_clause"]), "html", null, true);
                yield "\">
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key_id'], $context['where_clause'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            yield "  ";
        }
        // line 12
        yield "
  <div class=\"col-auto\">
    <label class=\"form-label\" for=\"insert_rows\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Amount of rows to insert"), "html", null, true);
        yield "</label>
    <input class=\"form-control\" type=\"number\" name=\"insert_rows\" id=\"insert_rows\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["insert_rows_default"] ?? null), "html", null, true);
        yield "\" min=\"1\">
  </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/insert/continue_insertion_form.twig";
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
        return array (  93 => 15,  89 => 14,  85 => 12,  82 => 11,  71 => 9,  66 => 8,  64 => 7,  59 => 5,  55 => 4,  51 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/insert/continue_insertion_form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/continue_insertion_form.twig");
    }
}
